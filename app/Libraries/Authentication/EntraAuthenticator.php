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
        log_message('info', 'Entra OAuth GET parameters: ' . json_encode($this->request->getGet(), JSON_PRETTY_PRINT));

        if ($this->request->getGet('error')) {
            if ($this->request->getGet('error_subcode') === 'cancel') {
                $this->session->remove('oauth2state');
                log_message('error', 'Entra OAuth cancelled by user');
                return site_url('logon');
            }

            $code = $this->request->getGet('error');
            $reason = $this->request->getGet('error_description') ?? 'Unknown error';
            $state = $this->request->getGet('state'); // 34ff392f4218977a26b84be84100ef9d
            log_message('error', sprintf('Entra OAuth failed with Code: %s, Reason: %s', $code, $reason));
            return site_url('logon');
        }

        $ip    = $this->request->getIPAddress();
        $code  = $this->request->getGet('code');
        $state = $this->request->getGet('state');
        $storedState = $this->session->get('oauth2state');

        if (empty($authModel->client_ident) || empty($authModel->client_secret)) {
            log_message('error', 'Entra OAuth client is misconfigured, check client_id and secret');
            return site_url('logon');
        }

        if (empty($code) || empty($state)) {
            log_message('error', 'Entra OAuth response is malformed, missing code, or state');
            $this->session->remove('oauth2state');
            return site_url('logon');
        }

        if (! $storedState || ! hash_equals($storedState, $state)) {
            log_message('error', 'Entra OAuth response is malformed, hash mismatched');
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

        log_message('info', sprintf('Entra OAuth ResourceOwner details: %s', json_encode($ownerDetails, JSON_PRETTY_PRINT)));

        $username = $ownerDetails['preferred_username'] ?? null;

        if (! $username) {
            log_message('warning', 'Entra OAuth claim `preferred_username` is required');
            return site_url('logon');
        }

        if (str_contains($username, '@')) {
            // @todo check whether this is needed
            $username = explode('@', $username)[0];
        }

        $localUser = $this->database->query(
            'SELECT * FROM users WHERE name = ? ORDER BY id LIMIT 1',
            [$username]
        )->getRow();

        if (! $useAuthorisation) {
            if (! $localUser) {
                log_message('warning', sprintf('Entra OAuth without authorisation, local user %s not found', $username));
            }

            $this->updateLocalUserDetails($localUser, $ownerDetails);
            $this->session->set('user_id', $localUser->id);
            return site_url('home');
        }

        // @todo Utility function for comparing roles against groups

        // Bail out now whilst testing
        return site_url('logon');
    }

    public function redirect(object $authModel): string
    {
        if (empty($authModel->client_ident) || empty($authModel->client_secret)) {
            log_message('error', 'Auth client is misconfigured');
            return site_url('logon');
        }

        $useAuthorisation = strtolower($authModel->use_authorisation) === 'y';
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
            log_message('warning', sprintf('Failed to get AccessToken for: %s', $error->getMessage()));
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
}
