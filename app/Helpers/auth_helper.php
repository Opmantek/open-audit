<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

function entra_redirect(object $auth): string
{
    $session = \Config\Services::session();
    $provider = new \TheNetworg\OAuth2\Client\Provider\Azure([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => base_url() . 'logon/entra/auth',
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
    log_message('debug', json_encode($_GET));
    if (empty($_GET['code']) or empty($_GET['state'])) {
        log_message('error', 'Missing GET items for OKTA from ' . $ip);
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    if (($_GET['state'] !== $_SESSION['oauth2state']) and ($_GET['state'] !== $session->get('oauth2state'))) {
        log_message('info', 'Invalid credentials from ' . $ip . ' using okta.');
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    $provider = new \TheNetworg\OAuth2\Client\Provider\Azure([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => base_url() . 'logon/entra/auth',
        'scopes'            => ['openid'],
        'defaultEndPointVersion' => '2.0'
    ]);
    $provider->defaultEndPointVersion = TheNetworg\OAuth2\Client\Provider\Azure::ENDPOINT_VERSION_2_0;
    $provider->tenant = $auth->tenant;
    $baseGraphUri = $provider->getRootMicrosoftGraphUri(null);
    $provider->scope = 'openid profile email offline_access ' . $baseGraphUri . '/User.Read';
    log_message('debug', 'Requesting getAccessToken');
    try {
        $token = $provider->getAccessToken('authorization_code', [
            'scope' => $provider->scope,
            'code' => $_GET['code'],
        ]);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', 'Could not getAccessToken from Entra for ' . $ip . '. ' . $e->getMessage());
        return site_url('logon');
    }
    try {
        $user = $provider->getResourceOwner($token);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', 'Could not getResourceOwner from Entra for ' . $ip . '. ' . $e->getMessage());
        return site_url('logon');
    }
    // $me = $provider->get($provider->getRootMicrosoftGraphUri($token) . '/v1.0/me', $token);
    // log_message('debug', 'Me: ' . json_encode($me, JSON_PRETTY_PRINT));
    $user = $user->toArray();
    log_message('debug', json_encode($user, JSON_PRETTY_PRINT));
    $db = db_connect();
    $sql = "SELECT * FROM users WHERE name = ? ORDER BY `id` LIMIT 1";
    $users = $db->query($sql, [$user['preferred_username']])->getResult();
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
        log_message('info', 'Valid credentials for ' . $dbuser->name . ' from ' . $ip . ' using azure.');
        return url_to('home');
    }
    log_message('warning', 'Azure used for login but user \'' . $user['preferred_username'] . '\' does not exist in Open-AudIT.');
    return site_url('logon');
}

function github_redirect(object $auth): string
{
    $session = \Config\Services::session();
    $provider = new \League\OAuth2\Client\Provider\Github([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => base_url() . '/logon/github/auth'
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
    $provider = new \League\OAuth2\Client\Provider\Github([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => base_url() . '/logon/github/auth'
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
    $provider = new \Foxworth42\OAuth2\Client\Provider\Okta([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => base_url() . 'logon/okta/auth',
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
    $provider = new \Foxworth42\OAuth2\Client\Provider\Okta([
        'clientId'          => $auth->client_ident,
        'clientSecret'      => $auth->client_secret,
        'redirectUri'       => base_url() . 'logon/okta/auth',
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
