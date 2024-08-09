<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

#declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use \Config\Services;
use \League\OAuth2\Client;

#[\AllowDynamicProperties]

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.3.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Logon
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Logon
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Logon extends Controller
{
    public function createForm()
    {
        log_message('info', 'In Logon::createForm');
        $session = session();
        if (!empty($session->get('user_id'))) {
            return redirect()->to(site_url('summaries'));
        }
        $db = db_connect();
        $sql = "SELECT * FROM discoveries WHERE id = 1";
        $result = $db->query($sql)->getResult();
        if (empty($result[0]->subnet)) {
            helper('network');
            $ips = server_ip();
            $ips = explode(',', $ips);
            $subnet = '';
            foreach ($ips as $ip) {
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) and !filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE)) {
                    $ip = explode('.', $ip);
                    $ip[3] = 0;
                    $ip = implode('.', $ip);
                    $subnet = $ip . '/24';
                    break;
                }
            }
            $sql = "UPDATE `discoveries` SET `subnet` = ?, `description` = 'Subnet - $subnet', `edited_by` = 'system', `edited_date` = NOW() WHERE id = 1";
            $db->query($sql, [$subnet]);
            log_message('info', 'Default discovery subnet auto-populated with ' . $subnet . '.');
        }
        return view('logon', ['config' => new \Config\OpenAudit()]);
    }

    public function create()
    {
        $session = session();
        $logonModel = model('App\Models\LogonModel');
        $config =  new \Config\OpenAudit();

        $username = (!empty($_POST['username'])) ? $_POST['username'] : '';
        if (empty($username) && ! empty($_SERVER['HTTP_USERNAME'])) {
            # The actual header should just be USERNAME
            $username = $_SERVER['HTTP_USERNAME'];
        }

        $password = @$_POST['password'];
        if (empty($password) && ! empty($_SERVER['HTTP_PASSWORD'])) {
            # The actual header should just be PASSWORD
            $password = $_SERVER['HTTP_PASSWORD'];
        }

        $http_accept = (!empty($_SERVER['HTTP_ACCEPT'])) ? $_SERVER['HTTP_ACCEPT'] : '';
        $format = '';
        if (strpos($http_accept, 'application/json') !== false) {
            $format = 'json';
        }
        if (strpos($http_accept, 'html') !== false) {
            $format = 'html';
        }
        if (isset($_GET['format'])) {
            $format = $_GET['format'];
        }
        if (isset($_POST['format'])) {
            $format = $_POST['format'];
        }
        if ($format == '') {
            $format = 'json';
        }

        if (empty($username) or empty($password)) {
            # set flash need creds
            $session->setFlashdata('flash', '{"level":"danger", "message":"Credentials required"}');
            log_message('error', '{"level":"danger", "message":"Credentials required"}');
            if ($format === 'html') {
                return redirect()->to(site_url('logon'));
            }
            $this->response->setStatusCode(401);
            return $this->response->setJSON('{"message":"Credentials required"}');
        }

        $user = $logonModel->logon($username, $password);
        if ($user) {
            log_message('info', 'Valid credentials for ' . $username . ' from ' . @$this->request->getIPAddress());
            $session->set('user_id', $user->id);
            if ($format !== 'json') {
                if (!empty($_POST['url'])) {
                    header('Location: ' . $_POST['url']);
                    exit;
                }
                if ($config->device_count === 0) {
                    return redirect()->to(url_to('welcome'));
                } else {
                    return redirect()->to(url_to('home'));
                }
            }
            if (!empty($user->id)) {
                $user->id = intval($user->id);
            }
            if (!empty($user->org_id)) {
                $user->org_id = intval($user->org_id);
            }
            if (!empty($user->roles)) {
                try {
                    $user->roles = json_decode($user->roles, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
            print_r(json_encode($user));
            exit;
        }
        log_message('info', 'Invalid credentials for ' . $username . ' from ' . @$this->request->getIPAddress());
        if ($format === 'html') {
            return redirect()->to(site_url('logon'));
        }
        $this->response->setStatusCode(401);
        return $this->response->setJSON('{"message":"Credentials required"}');
    }

    public function delete()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(site_url('logon'));
    }

    public function license()
    {
        $this->response->setContentType('application/json');
        $json = '{"license":"none","product":"free"}';
        $config =  new \Config\OpenAudit();
        $enterprise_binary = $config->enterprise_binary;
        if (!empty($enterprise_binary)) {
            if (php_uname('s') === 'Windows NT') {
                $command = "%comspec% /c start /b " . $enterprise_binary . " --license";
                exec($command, $output);
                pclose(popen($command, 'r'));
            } else {
                $command = $enterprise_binary . " --license";
                exec($command, $output);
            }
            if (!empty($output)) {
                $json = $output[0];
            }
        }
        echo $json;
    }

    public function redirect($type = '')
    {
        log_message('debug', 'In Logon::redirect');
        $this->session = \Config\Services::session();
        if ($type === 'github') {
            $provider = new \League\OAuth2\Client\Provider\Github([
                'clientId'          => 'Ov23liFAMiUUPXedsEO0',
                'clientSecret'      => 'd701d2bb1a05342bfa725d90d03913024968ef46',
                'redirectUri'       => 'http://localhost:8080/index.php/auth',
            ]);
            $options = [
                'state' => 'OPTIONAL_CUSTOM_CONFIGURED_STATE',
                'scope' => ['user','user:email','repo']
            ];
            $authUrl = $provider->getAuthorizationUrl($options);
            $_SESSION['oauth2state'] = $provider->getState();
            log_message('info', 'Redirect to GitHub logon URL of ' . $authUrl);
            #header('Location: ' . $authUrl);
            $this->response->setStatusCode(302);
            $this->response->setHeader('Location', $authUrl);
            return;
        }
    }

    public function auth()
    {
        log_message('debug', 'In Logon::auth');
        $this->session = \Config\Services::session();
        $db = db_connect();

        $provider = new \League\OAuth2\Client\Provider\Github([
            'clientId'          => 'Ov23liFAMiUUPXedsEO0',
            'clientSecret'      => 'd701d2bb1a05342bfa725d90d03913024968ef46',
            'redirectUri'       => 'http://localhost:8080/index.php/auth',
        ]);

        // Check given state against previously stored one to mitigate CSRF attack
        if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
            log_message('warning', 'Unsetting oauth2state');
            unset($_SESSION['oauth2state']);
            exit('Invalid state');
        }

        // We should be logged on
        log_message('warning', 'Try to get an access token (using the authorization code grant)');
        // Try to get an access token (using the authorization code grant)
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);
        log_message('warning', 'We have run getAccessToken.');
        log_message('warning', 'Token: ' . json_encode($token));
        // Optional: Now you have a token you can look up a users profile data
        log_message('warning', 'Now try to getResourceOwner.');
        try {
            // We got an access token, let's now get the user's details
            $user = $provider->getResourceOwner($token);
            log_message('warning', 'User: ' . json_encode($user));

            // Use these details to create a new profile
            #printf('Hello %s!', $user->getNickname());
        } catch (Exception $e) {
            // Failed to get user details
            exit('Oh dear...');
        }
        $user = $user->toArray();
        $sql = "SELECT * FROM users WHERE name = ? ORDER BY `id` LIMIT 1";
        $users = $db->query($sql, [$user['login']])->getResult();
        if (!empty($users[0]->id)) {
            $session->set('user_id', $users[0]->id);
            return redirect()->to(url_to('home'));
        }
        log_message('warning', 'GutHub used to login but users login does not exist in Open-AudIT.');
        return redirect()->to(site_url('logon'));
    }
}
