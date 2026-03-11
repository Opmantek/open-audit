<?php

declare(strict_types=1);

namespace App\Libraries\Authentication;

use CodeIgniter\Database\BaseConnection;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Session\Session;
use Config\Database;
use Config\Services;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessTokenInterface;
use stdClass;
use TheNetworg\OAuth2\Client\Provider\Azure;
use TheNetworg\OAuth2\Client\Token\AccessToken;
use Throwable;

use function sprintf;

final class EntraAuthenticator
{
    public const SCOPES = [
        'openid', // Sign-in and ID token
        'profile', // Basic profile info
        'email', // User email address
        'User.Read', // Read the profile of the signed-in user (/me)
    ];

    private Session $session;
    private IncomingRequest $request;
    private BaseConnection $database;

    public function __construct(
        ?Session $session = null,
        ?IncomingRequest $request = null,
        ?BaseConnection $database = null,
    )
    {
        $this->session  = $session ?? Services::session();
        $this->request  = $request ?? Services::request();
        $this->database = $database ?? Database::connect();
    }

    public function authenticate(object $authModel): string
    {
        if ($this->request->getGet('error')) {
            if ($this->request->getGet('error_subcode') === 'cancel') {
                $this->session->remove('oauth2state');
                $message = 'Entra authentication cancelled';
                log_message('warning', $message);
                $this->session->setFlashdata('warning', $message);
                return site_url('logon');
            }

            $reason = $this->request->getGet('error_description') ?? 'Unknown error';
            $message = sprintf('Entra authentication error: %s', $reason);
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            return site_url('logon');
        }

        $code  = $this->request->getGet('code');
        $state = $this->request->getGet('state');
        $storedState = $this->session->get('oauth2state');

        if (empty($authModel->client_ident) || empty($authModel->client_secret)) {
            $message = 'Entra authentication client is misconfigured, check `client_id` and `secret`';
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            return site_url('logon');
        }

        if (empty($code) || empty($state)) {
            $message = 'Entra authentication response is malformed, missing `code`, or `state`';
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            $this->session->remove('oauth2state');
            return site_url('logon');
        }

        if (! $storedState || ! hash_equals($storedState, $state)) {
            $message = 'Entra authentication response is malformed, hash mismatched';
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            $this->session->remove('oauth2state');
            return site_url('logon');
        }

        $this->session->remove('oauth2state');

        $useAuthorisation = strtolower($authModel->use_authorisation) === 'y';
        $redirectUri = !empty($authModel->redirect_uri) ? $authModel->redirect_uri : base_url('index.php/logon/entra/auth');
        $tenant = !empty($authModel->tenant) ? $authModel->tenant : 'common';

        $provider = $this->getProvider(
            $authModel->client_ident,
            $authModel->client_secret,
            $redirectUri,
            $tenant,
        );

        $accessToken = $this->getAccessToken($provider, $code);

        if (! $accessToken instanceof AccessToken) {
            return site_url('logon');
        }

        $resourceOwner = $this->getResourceOwner($provider, $accessToken);

        if (! $resourceOwner instanceof ResourceOwnerInterface) {
            return site_url('logon');
        }

        $ownerDetails = $resourceOwner->toArray();
        $username = $ownerDetails['preferred_username'] ?? null;

        if (! $username) {
            $message = 'Entra authentication claim `preferred_username` is required';
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            return site_url('logon');
        }

        if (str_contains($username, '@')) {
            $username = explode('@', $username)[0];
        }

        $localUser = $this->database->query(
            'SELECT * FROM users WHERE name = ? ORDER BY id LIMIT 1',
            [$username]
        )->getRow();

        if (! $useAuthorisation) {
            if (! $localUser) {
                $message = sprintf('Entra authentication without authorisation, user `%s` not found', $username);
                log_message('error', $message);
                $this->session->setFlashdata('error', $message);
                return site_url('logon');
            }

            $this->updateLocalUserDetails($localUser, $ownerDetails);
            $this->session->set('user_id', $localUser->id);
            return site_url();
        }

        $groups = $ownerDetails['groups'] ?? null;

        if (! is_array($groups) || empty($groups)) {
            $message = 'Entra authentication with authorisation, no remote groups assigned';
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            return site_url('logon');
        }

        $organisations = $this->getOrganisationIdsForGroups($groups);
        $roles = $this->getRoleNamesForGroups($groups);

        if (empty($organisations) || empty($roles)) {
            $message = 'Entra authentication with authorisation, no associated organisations or roles';
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            return site_url('logon');
        }

        if (! $localUser) {
            $userData = new stdClass();
            $userData->org_id = 1;
            $userData->orgs = $organisations;
            $userData->roles = $roles;
            $userData->name = $username;
            $userData->email = $ownerDetails['email'] ?? '';
            $userData->full_name = $ownerDetails['name'] ?? '';
            $userData->password = '';
            $userData->type = 'user';
            $userData->lang = 'en';

            $localUser = $this->createLocalUser($userData);

            if (! $localUser) {
                $message = 'Entra authentication with authorisation, failed to create user';
                log_message('error', $message);
                $this->session->setFlashdata('error', $message);
                return site_url('logon');
            }

            log_message('info', sprintf('Entra authentication with authorisation, user `%s` created', $username));
        }

        $this->session->set('user_id', $localUser->id);
        log_message('info', sprintf('Entra authentication with authorisation, user `%s` authenticated', $username));

        return site_url();
    }

    public function redirect(object $authModel): string
    {
        if (empty($authModel->client_ident) || empty($authModel->client_secret)) {
            $message = 'Entra authentication client is misconfigured, check `client_id` and `secret`';
            log_message('error', $message);
            $this->session->setFlashdata('error', $message);
            return site_url('logon');
        }

        $redirectUri = !empty($authModel->redirect_uri) ? $authModel->redirect_uri : base_url('index.php/logon/entra/auth');
        $tenant = !empty($authModel->tenant) ? $authModel->tenant : 'common';

        $provider = $this->getProvider(
            $authModel->client_ident,
            $authModel->client_secret,
            $redirectUri,
            $tenant,
        );

        $authUrl = $provider->getAuthorizationUrl();

        $this->session->set('oauth2state', $provider->getState());

        return $authUrl;
    }

    private function getProvider(
        string $clientId,
        string $clientSecret,
        string $redirectUri,
        string $tenant,
        array $scopes = self::SCOPES,
    ): Azure {
        $provider = new Azure([
            'clientId'     => $clientId,
            'clientSecret' => $clientSecret,
            'redirectUri'  => $redirectUri,
            'scopes'       => $scopes,
            'defaultEndPointVersion' => Azure::ENDPOINT_VERSION_2_0,
        ]);

        $provider->tenant = $tenant;

        return $provider;
    }

    private function getAccessToken(Azure $provider, string $code): ?AccessTokenInterface
    {
        $accessToken = null;
        try {
            $accessToken = $provider->getAccessToken('authorization_code', ['code' => $code]);
        } catch (Throwable $error) {
            log_message('warning', sprintf('Failed to get AccessToken: %s', $error->getMessage()));
        }
        return $accessToken;
    }

    private function getResourceOwner(Azure $provider, AccessToken $accessToken): ?ResourceOwnerInterface
    {
        $resourceOwner = null;
        try {
            $resourceOwner = $provider->getResourceOwner($accessToken);
        } catch (Throwable $error) {
            log_message('warning', sprintf('Failed to get ResourceOwner: %s', $error->getMessage()));
        }
        return $resourceOwner;
    }

    private function createLocalUser(object $data): ?object
    {
        helper('utility');

        register_workaround();

        $model = model('App\Models\UsersModel');
        $user = null;

        if ($id = $model->create($data)) {
            $result = $model->read($id);
            $user = $result[0] ?? null;
        }

        deregister_workaround();

        return $user;
    }

    private function updateLocalUserDetails(object $user, array $details): void
    {
        $updateData = [];

        if (empty($user->full_name) && !empty($details['name'])) {
            $updateData['full_name'] = $details['name'];
        }

        if (empty($user->email) && !empty($details['email'])) {
            $updateData['email'] = $details['email'];
        }

        if (! empty($updateData)) {
            $this->database->table('users')
                ->where('id', $user->id)
                ->update($updateData);
        }
    }

    private function getOrganisationIdsForGroups(array $groups): array
    {
        $result = [];
        $organisations = $this->database->query('SELECT * FROM orgs')->getResult();

        foreach ($organisations as $organisation) {
            if (empty($organisation->entra_group) || ! in_array($organisation->entra_group, $groups)) {
                continue;
            }
            $result[] = (int) $organisation->id;
        }

        return $result;
    }

    private function getRoleNamesForGroups(array $groups): array
    {
        $result = [];
        $roles = $this->database->query('SELECT * FROM roles')->getResult();

        foreach ($roles as $role) {
            if (empty($role->entra_group) || ! in_array($role->entra_group, $groups)) {
                continue;
            }
            $result[] = $role->name;
        }

        return $result;
    }
}
