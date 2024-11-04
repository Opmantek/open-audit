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
use Config\Services;
use League\OAuth2\Client;
use Foxworth42\OAuth2\Client\Provider\Okta;

#[\AllowDynamicProperties]

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.6.0
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
        $session = session();
        if (!empty($session->get('user_id'))) {
            $config =  new \Config\OpenAudit();
            if ($config->device_count === 0) {
                return redirect()->to(url_to('welcome'));
            } else {
                return redirect()->to(url_to('home'));
            }
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

        // get the server OS
        $server_os = php_uname('s');

        if ($server_os === 'Windows NT') {
            $command = 'wmic os get name';
            exec($command, $output);
            if (!empty($output[1])) {
                $os = explode('|', $output[1]);
                $server_platform = $os[0];
            }
        } elseif ($server_os === 'Darwin') {
            $server_platform = 'MacOS';
            $command = "sw_vers | grep \"ProductVersion:\" | cut -d: -f2 | xargs";
            exec($command, $output);
            if (!empty($output[0])) {
                $server_platform .= ' ' . $output[0];
                unset($output);
            }
            $command = "awk '/SOFTWARE LICENSE AGREEMENT FOR macOS/' '/System/Library/CoreServices/Setup Assistant.app/Contents/Resources/en.lproj/OSXSoftwareLicense.rtf' | awk -F 'macOS ' '{print \$NF}' | awk '{print substr(\$0, 0, length(\$0)-1)}'";
            exec($command, $output);
            if (!empty($output[0])) {
                $server_platform .= ' ' . $output[0];
            }
        } else {
            $command = 'cat /etc/os-release 2>/dev/null | grep -i ^PRETTY_NAME | cut -d= -f2 | cut -d\" -f2';
            exec($command, $output);
            if (!empty($output[0])) {
                $server_platform = $output[0];
            }
        }
        $sql = 'UPDATE configuration SET value = ? WHERE name = "server_os"';
        $db->query($sql, [$server_os]);
        log_message('info', 'Config auto-populated with ServerOS ' . $server_os . '.');
        $sql = 'UPDATE configuration SET value = ? WHERE name = "server_platform"';
        $db->query($sql, [$server_platform]);
        log_message('info', 'Config auto-populated with ServerPlatform ' . $server_platform . '.');

        $methods = array();
        if ($db->tableExists('auth')) {
            $authModel = model('AuthModel');
            $authMethods = $authModel->listAll();
            foreach ($authMethods as $auth) {
                if (!empty($auth->type) and $auth->type !== 'openldap' and $auth->type !== 'active directory') {
                    if ($auth->use_authentication === 'y') {
                        $methods[] = $auth->type;
                    }
                }
            }
        }
        $config =  new \Config\OpenAudit();
        $alert = '';
        if (!$db->tableExists('auth') and intval($config->internal_version) < 20240822) {
            $alert = 'Active Directory and openLDAP logins will not work until the database has been upgraded.<br>Please logon with a <i>local</i> \'admin\' user, to upgrade the database.';
        }
        return view('logon', ['config' => new \Config\OpenAudit(), 'methods' => $methods, 'alert' => $alert]);
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
                if (!empty($config->enterprise_env) and strpos($command, 'enterprise.bin') !== false) {
                    $command = 'export PAR_GLOBAL_TMPDIR=' . $config->enterprise_env . '; ' . $command;
                }
                exec($command, $output);
            }
            if (!empty($output)) {
                $json = $output[0];
            }
        }
        echo $json;
    }

    public function redirect(string $type = '')
    {
        if (empty($type)) {
            return redirect()->to(site_url('logon'));
        }
        helper('auth');
        $this->session = \Config\Services::session();
        $authModel = model('App\Models\AuthModel');
        $authEntries = $authModel->listAll();
        $auth = '';
        foreach ($authEntries as $item) {
            if ($item->type === $type) {
                $auth = $item;
                break;
            }
        }
        if (empty($auth)) {
            return redirect()->to(site_url('logon'));
        }
        if ($type === 'entra' and $auth->type === 'entra') {
            $authUrl = entra_redirect($auth);
            if (empty($authUrl)) {
                return redirect()->to(site_url('logon'));
            }
            $this->response->setStatusCode(302);
            $this->response->setHeader('Location', $authUrl);
            return;
        }
        if ($type === 'github' and $auth->type === 'github') {
            $authUrl = github_redirect($auth);
            if (empty($authUrl)) {
                return redirect()->to(site_url('logon'));
            }
            $this->response->setStatusCode(302);
            $this->response->setHeader('Location', $authUrl);
            return;
        }
        if ($type === 'okta' and $auth->type === 'okta') {
            $authUrl = okta_redirect($auth);
            if (empty($authUrl)) {
                return redirect()->to(site_url('logon'));
            }
            $this->response->setStatusCode(302);
            $this->response->setHeader('Location', $authUrl);
            return;
        }
        return redirect()->to(site_url('logon'));
    }

    public function auth(string $type = '')
    {
        helper('auth');
        $this->session = \Config\Services::session();
        $authModel = model('App\Models\AuthModel');
        $authEntries = $authModel->listAll();
        foreach ($authEntries as $item) {
            if ($item->type === $type) {
                $auth = $item;
                break;
            }
        }
        if (empty($auth)) {
            return redirect()->to(site_url('logon'));
        }
        if (!empty($auth) and $type === 'entra') {
            return redirect()->to(entra_auth($auth, @$this->request->getIPAddress()));
        }
        if (!empty($auth) and $type === 'github') {
            return redirect()->to(github_auth($auth, @$this->request->getIPAddress()));
        }
        if (!empty($auth) and $type === 'okta') {
            return redirect()->to(okta_auth($auth, @$this->request->getIPAddress()));
        }
    }
}
