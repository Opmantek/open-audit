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
        log_message('info', 'GET parameters: ' . json_encode($this->request->getGet(), JSON_PRETTY_PRINT));

        if ($this->request->getGet('error')) {
            if ($this->request->getGet('error_subcode') === 'cancel') {
                $this->session->remove('oauth2state');
                log_message('error', 'Auth cancelled by user');
                return site_url('logon');
            }

            $code = $this->request->getGet('error');
            $reason = $this->request->getGet('error_description') ?? 'Unknown error';
            $state = $this->request->getGet('state'); // 34ff392f4218977a26b84be84100ef9d
            log_message('error', sprintf('Auth failed with Code: %s, Reason: %s', $code, $reason));
            return site_url('logon');
        }

        $ip    = $this->request->getIPAddress();
        $code  = $this->request->getGet('code');
        $state = $this->request->getGet('state');
        $storedState = $this->session->get('oauth2state');

        if (empty($authModel->client_ident) || empty($authModel->client_secret)) {
            log_message('error', 'Auth client is misconfigured');
            return site_url('logon');
        }

        if (empty($code) || empty($state)) {
            log_message('error', 'Missing OAuth parameters from ' . $ip);
            $this->session->remove('oauth2state');
            return site_url('logon');
        }

        if (! $storedState || ! hash_equals($storedState, $state)) {
            log_message('warning', 'Invalid OAuth state from ' . $ip);
            $this->session->remove('oauth2state');
            return site_url('logon');
        }

        $this->session->remove('oauth2state');

        $useAuthorisation = strtolower($authModel->use_authorisation) === 'y';
        $redirectUri = !empty($authModel->redirect_uri) ? $authModel->redirect_uri : base_url('index.php/logon/entra/auth');
        $tenant = !empty($authModel->tenant) ? $authModel->tenant : 'common';
        $scopes = $this->getScopes($useAuthorisation);

        $provider = $this->getProvider(
            $authModel->client_ident,
            $authModel->client_secret,
            $redirectUri,
            $tenant,
            $scopes,
        );

        $accessToken = $this->getAccessToken($provider, $code);

        if (! $accessToken instanceof AccessToken) {
            return site_url('logon');
        }

        $resourceOwner = $this->getResourceOwner($provider, $accessToken);

        if (! $resourceOwner instanceof ResourceOwnerInterface) {
            return site_url('logon');
        }

        $resourceOwnerData = $resourceOwner->toArray();

        log_message('info', sprintf('ResourceOwner data: %s', json_encode($resourceOwnerData, JSON_PRETTY_PRINT)));

        if (! $useAuthorisation) {
            // @todo Based on LDAP logic, a local user must exist
            return site_url('logon');
        }

        // @todo Need a successful request to determine data structure
        $memberGroups = $this->getMemberGroups($provider, $accessToken);

        if (empty($memberGroups)) {
            return site_url('logon');
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
        $scopes = $this->getScopes($useAuthorisation);

        $provider = $this->getProvider(
            $authModel->client_ident,
            $authModel->client_secret,
            $redirectUri,
            $tenant,
            $scopes,
        );

        $authUrl = $provider->getAuthorizationUrl();

        $this->session->set('oauth2state', $provider->getState());

        return $authUrl;
    }

    private function getScopes(bool $useAuthorisation): array
    {
        $scopes = [
            'openid', // Sign-in and ID token
            'profile', // Basic profile info
            'email', // User email address
            'User.Read', // Read the profile of the signed-in user (/me)
        ];

        if ($useAuthorisation) {
            $scopes[] = 'GroupMember.Read.All';  // Read the groups the signed-in user belongs to (/me/memberOf)
        }

        return $scopes;
    }

    private function getProvider(
        string $clientId,
        string $clientSecret,
        string $redirectUri,
        string $tenant,
        array $scopes,
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

    private function getMemberGroups(Azure $provider, AccessToken $accessToken): array
    {
        $memberGroups = [];
        try {
            $graphUri = $provider->getRootMicrosoftGraphUri($accessToken);
            $endpoint = $graphUri . '/me/memberOf';
            $response = $provider->get($endpoint, $accessToken);
            log_message('info', sprintf('MemberGroups data: %s', json_encode($response, JSON_PRETTY_PRINT)));
            if (isset($response['value'])) {
                foreach ($response['value'] as $group) {
                    $memberGroups[] = $group['displayName'] ?? $group['id'];
                }
            }
        } catch (Throwable $error) {
            log_message('warning', sprintf('Failed to get MemberGroups: %s', $error->getMessage()));
        }
        return $memberGroups;
    }
}
