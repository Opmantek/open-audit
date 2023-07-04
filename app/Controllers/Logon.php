<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.0.0
 * @link      http://www.open-audit.org
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

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

        $this->session = \Config\Services::session();
        if (!empty($this->session->get('user_id'))) {
            return redirect()->to(site_url('orgs'));
        }
        return view('logon', ['config' => new \Config\OpenAudit()]);
    }

    public function create()
    {
        $this->session = \Config\Services::session();
        $this->logonModel = new \App\Models\LogonModel();

        $username = @$_POST['username'];
        if (empty($username) && ! empty($_SERVER['HTTP_USERNAME'])) {
            # The actual header should just be USERNAME
            $username = $_SERVER['HTTP_USERNAME'];
        }

        $password = @$_POST['password'];
        if (empty($password) && ! empty($_SERVER['HTTP_PASSWORD'])) {
            # The actual header should just be PASSWORD
            $password = $_SERVER['HTTP_PASSWORD'];
        }

        if (empty($username) or empty($password)) {
            # set flash need creds
            $this->session->setFlashdata('flash', '{"level":"danger", "message":"Credentials required"}');
            log_message('error', '{"level":"danger", "message":"Credentials required"}');
            return redirect()->to(site_url('logon'));
        }

        $http_accept = (!empty($_SERVER['HTTP_ACCEPT'])) ? $_SERVER['HTTP_ACCEPT'] : '';
        $format = '';
        if (strpos($http_accept, 'application/json') !== false) {
            $format = 'json';
        }
        if (strpos($http_accept, 'html') !== false) {
            $format = 'screen';
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

        $user = $this->logonModel->logon($username, $password);
        if ($user) {
            $this->session->set('user_id', $user->id);
            if ($format !== 'json') {
                if (!empty($_POST['url'])) {
                    header('Location: ' . $_POST['url']);
                    exit;
                }
                return redirect()->to(url_to('home'));
            } else {
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
        }
        log_message('error', json_encode($user));
        return redirect()->to(site_url('logon'));
    }

    public function delete()
    {

        $this->session = \Config\Services::session();
        $this->session->destroy();
        return redirect()->to(site_url('logon'));
    }
}
