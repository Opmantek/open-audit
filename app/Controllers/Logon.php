<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use \Config\Services;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.2.1
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
            return redirect()->to(site_url('summaries'));
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
                $user->roles = json_decode($user->roles);
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
}
