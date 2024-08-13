<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

/**
 * Wrap crypto_aead_*_decrypt() in a drop-dead-simple decryption interface
 *
 * @param string $message Encrypted message
 * @param string $key     Encryption key
 * @return string         The decrypted string
 */
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


/**
 * Take a string and return the encrypted variant
 *
 * @param string $message
 * @param string $key
 * @return string
 */
function github_auth(object $auth, string $ip = ''): string
{
    if (empty($_GET['code']) or empty($_GET['state'])) {
        log_message('info', 'Missing GET items for Github from ' . $ip);
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    $session = \Config\Services::session();
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
#    $authUrl = $provider->getAuthorizationUrl();

    $options = [
        'scope' => ['openid','email','profile', 'groups']
    ];
    $authUrl = $provider->getAuthorizationUrl($options);

    $_SESSION['oauth2state'] = $provider->getState();
    $session->set('oauth2state', $_SESSION['oauth2state']);
    return $authUrl;
}

function okta_auth(object $auth, string $ip = ''): string
{
    if (empty($_GET['code']) or empty($_GET['state'])) {
        log_message('info', 'Missing GET items for OKTA from ' . $ip);
        $session->set('oauth2state', '');
        return site_url('logon');
    }
    $session = \Config\Services::session();
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
    log_message('info', 'Token: '. $token->getToken());
    try {
        $user = $provider->getResourceOwner($token);
    } catch (\League\OAuth2\Client\Provider\Exception\IdentityProviderException $e) {
        log_message('warning', 'Could not getResourceOwner from OKTA for ' . $ip . '. ' . $e->getMessage());
        return site_url('logon');
    }
    $user = $user->toArray();
    log_message('debug', json_encode($user));
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
