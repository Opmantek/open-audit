<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

function entra_redirect(object $auth): string
{
    $session = \Config\Services::session();
    $redir = (!empty($auth->redirect_uri)) ? $auth->redirect_uri : base_url() . 'index.php/logon/entra/auth';
    $provider = new \TheNetworg\OAuth2\Client\Provider\Azure([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => $redir,
        'scopes'            => ['openid'],
        'defaultEndPointVersion' => '2.0'
    ]);
    $options = [
        'scopes' => ['openid']
    ];
    $provider->defaultEndPointVersion = TheNetworg\OAuth2\Client\Provider\Azure::ENDPOINT_VERSION_2_0;
    $provider->tenant = $auth->tenant;
    log_message('debug', 'Requesting baseGraphUri');
    $baseGraphUri = $provider->getRootMicrosoftGraphUri(null);
    log_message('debug', 'baseGraphUri: ' . json_encode($baseGraphUri));
    $provider->scope = 'openid profile email offline_access ' . $baseGraphUri . '/User.Read';
    log_message('debug', 'Requesting getAuthorizationUrl.');
    $authUrl = $provider->getAuthorizationUrl(['scope' => $provider->scope]);
    log_message('debug', 'authUrl: ' . $authUrl);
    log_message('debug', 'Requesting getState.');
    $_SESSION['oauth2state'] = $provider->getState();
    log_message('debug', 'oauth2state: ' . $_SESSION['oauth2state']);
    $session->set('oauth2state', $_SESSION['oauth2state']);
    return $authUrl;

    #$authorizationUrl = $provider->getAuthorizationUrl(['scope' => $provider->scope]);

    #$_SESSION['OAuth2.state'] = $provider->getState();
}

function entra_auth(object $auth, string $ip = ''): string
{
    $session = \Config\Services::session();
    $request = \Config\Services::request();
    $db      = db_connect();

    $code  = $request->getGet('code');
    $state = $request->getGet('state');
    $storedState = $session->get('oauth2state');

    // log_message('debug', json_encode($_GET));

    if (empty($code) || empty($state)) {
        log_message('error', 'Missing OAuth parameters from ' . $ip);
        $session->remove('oauth2state');
        return site_url('logon');
    }

    if (! $storedState || ! hash_equals($storedState, $state)) {
        log_message('warning', 'Invalid OAuth state from ' . $ip);
        $session->remove('oauth2state');
        return site_url('logon');
    }

    $session->remove('oauth2state');

    $redirectUri = !empty($auth->redirect_uri) ? $auth->redirect_uri : base_url('index.php/logon/entra/auth');

    $provider = new \TheNetworg\OAuth2\Client\Provider\Azure([
        'clientId'     => $auth->client_ident,
        'clientSecret' => $auth->client_secret,
        'redirectUri'  => $redirectUri,
        'scopes'       => ['openid', 'profile', 'email', 'offline_access'],
        'defaultEndPointVersion' => \TheNetworg\OAuth2\Client\Provider\Azure::ENDPOINT_VERSION_2_0,
    ]);

    $provider->tenant = $auth->tenant;

    try {
        $token = $provider->getAccessToken('authorization_code', ['code' => $code]);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', \sprintf('Failed to get AccessToken for %s: %s', $ip, $e->getMessage()));
        return site_url('logon');
    }

    $user = [];

    try {
        $resourceOwner = $provider->getResourceOwner($token);
        $user = $resourceOwner->toArray();
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', \sprintf('Failed to get ResourceOwner for %s: %s', $ip, $e->getMessage()));
        return site_url('logon');
    }

    $username = $user['preferred_username'] ?? null;
    
    if (! $username) {
        log_message('warning', 'Invalid OAuth login for ' . $ip . ': missing `preferred_username`.');
        return site_url('logon');
    }

    $localUser = $db->query(
        "SELECT * FROM users WHERE name = ? ORDER BY id LIMIT 1",
        [$username]
    )->getRow();

    if (! $localUser) {
        log_message('warning', \sprintf('Valid OAuth login for %s: but user `%s` not found locally.', $ip, $username));
        return site_url('logon');
    }

    $updateData = [];

    if (empty($localUser->full_name) && !empty($user['name'])) {
        $updateData['full_name'] = $user['name'];
    }

    if (empty($localUser->email) && !empty($user['email'])) {
        $updateData['email'] = $user['email'];
    }

    if (! empty($updateData)) {
        $db->table('users')
           ->where('id', $localUser->id)
           ->update($updateData);
    }

    $session->set('user_id', $localUser->id);

    log_message('info', \sprintf('Successful Oauth Entra login with user %s from %s.', $username, $ip));

    return url_to('home');
}

function github_redirect(object $auth): string
{
    $session = \Config\Services::session();
    $redir = (!empty($auth->redirect_uri)) ? $auth->redirect_uri : base_url() . 'index.php/logon/github/auth';
    $provider = new \League\OAuth2\Client\Provider\Github([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => $redir
    ]);
    $options = [
        'state' => 'OPTIONAL_CUSTOM_CONFIGURED_STATE',
        'scope' => ['user','user:email','repo']
    ];
    $authUrl = $provider->getAuthorizationUrl($options);
    $_SESSION['oauth2state'] = $provider->getState();
    $session->set('oauth2state', $_SESSION['oauth2state']);
    return $authUrl;
}

function github_auth(object $auth, string $ip = ''): string
{
    $session = \Config\Services::session();
    if (empty($_GET['code']) or empty($_GET['state'])) {
        log_message('info', 'Missing GET items for Github from ' . $ip);
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    if (($_GET['state'] !== $_SESSION['oauth2state']) and ($_GET['state'] !== $session->get('oauth2state'))) {
        log_message('info', 'Invalid credentials from ' . $ip . ' using github.');
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    $redir = (!empty($auth->redirect_uri)) ? $auth->redirect_uri : base_url() . 'index.php/logon/github/auth';
    $provider = new \League\OAuth2\Client\Provider\Github([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => $redir
    ]);
    try {
        $token = $provider->getAccessToken('authorization_code', ['code' => $_GET['code']]);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', 'Could not getAccessToken from Github for ' . $ip . '. ' . $e->getMessage());
        return site_url('logon');
    }
    try {
        $user = $provider->getResourceOwner($token);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', 'Could not getResourceOwner from Github for ' . $ip . '. ' . $e->getMessage());
        return site_url('logon');
    }
    $user = $user->toArray();
    log_message('debug', json_encode($user));
    $db = db_connect();
    $sql = "SELECT * FROM users WHERE name = ? ORDER BY `id` LIMIT 1";
    $users = $db->query($sql, [$user['login']])->getResult();
    $dbuser = (!empty($users[0])) ? $users[0] : null;
    if (!empty($dbuser->id)) {
        if (empty($dbuser->full_name) and !empty($user['name'])) {
            $sql = "UPDATE users SET full_name = ? WHERE id = ?";
            $db->query($sql, [$user['name'], $dbuser->id]);
        }
        if (empty($dbuser->email) and !empty($user['email'])) {
            $sql = "UPDATE users SET email = ? WHERE id = ?";
            $db->query($sql, [$user['email'], $dbuser->id]);
        }
        $session->set('user_id', $dbuser->id);
        log_message('info', 'Valid credentials for ' . $dbuser->name . ' from ' . $ip . ' using github.');
        return url_to('home');
    }
    log_message('warning', 'GitHub used for login but user \'' . $user['login'] . '\' does not exist in Open-AudIT.');
    return site_url('logon');
}

function okta_redirect(object $auth): string
{
    $session = \Config\Services::session();
    $redir = (!empty($auth->redirect_uri)) ? $auth->redirect_uri : base_url() . 'index.php/logon/okta/auth';
    $provider = new \Foxworth42\OAuth2\Client\Provider\Okta([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => $redir,
        'issuer'            => $auth->issuer
    ]);
    $authUrl = $provider->getAuthorizationUrl();

    // $options = [
    //     'scope' => ['openid','email','profile', 'groups']
    // ];
    // $authUrl = $provider->getAuthorizationUrl($options);

    $_SESSION['oauth2state'] = $provider->getState();
    $session->set('oauth2state', $_SESSION['oauth2state']);
    return $authUrl;
}

function okta_auth(object $auth, string $ip = ''): string
{
    $session = \Config\Services::session();
    if (empty($_GET['code']) or empty($_GET['state'])) {
        log_message('info', 'Missing GET items for OKTA from ' . $ip);
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    if (($_GET['state'] !== $_SESSION['oauth2state']) and ($_GET['state'] !== $session->get('oauth2state'))) {
        log_message('info', 'Invalid credentials from ' . $ip . ' using okta.');
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    $redir = (!empty($auth->redirect_uri)) ? $auth->redirect_uri : base_url() . 'index.php/logon/okta/auth';
    $provider = new \Foxworth42\OAuth2\Client\Provider\Okta([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => $redir,
        'issuer'            => $auth->issuer
    ]);
    try {
        $token = $provider->getAccessToken('authorization_code', ['code' => $_GET['code']]);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', 'Could not getAccessToken from OKTA for ' . $ip . '. ' . $e->getMessage());
        return site_url('logon');
    }
    // log_message('info', 'Token: '. $token->getToken());
    try {
        $user = $provider->getResourceOwner($token);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', 'Could not getResourceOwner from OKTA for ' . $ip . '. ' . $e->getMessage());
        return site_url('logon');
    }
    $user = $user->toArray();
    // log_message('debug', json_encode($user));
    $db = db_connect();
    $sql = "SELECT * FROM users WHERE name = ? ORDER BY `id` LIMIT 1";
    $users = $db->query($sql, [$user['name']])->getResult();
    $dbuser = (!empty($users[0])) ? $users[0] : null;
    if (!empty($dbuser->id)) {
        if (empty($dbuser->full_name) and !empty($user['name'])) {
            $sql = "UPDATE users SET full_name = ? WHERE id = ?";
            $db->query($sql, [$user['name'], $dbuser->id]);
        }
        if (empty($dbuser->email) and !empty($user['email'])) {
            $sql = "UPDATE users SET email = ? WHERE id = ?";
            $db->query($sql, [$user['email'], $dbuser->id]);
        }
        $session->set('user_id', $dbuser->id);
        log_message('info', 'Valid credentials for ' . $dbuser->name . ' from ' . $ip . ' using okta.');
        return url_to('home');
    }
    log_message('warning', 'OKTA used for login but user \'' . $user['name'] . '\' does not exist in Open-AudIT.');
    return site_url('logon');
}
