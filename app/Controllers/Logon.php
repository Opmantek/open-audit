<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

/**
 * PHP version 7.3
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <marku@opmantek.com>
 * @copyright 2014 Opmantek
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_4.2.0
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
 * @author   Mark Unwin <marku@opmantek.com>
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
        log_message('error', 'logon::create');
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

        $user = $this->logonModel->logon($username, $password);
        if ($user) {
            $this->session->set('user_id', $user->id);
            return redirect()->to(site_url('orgs'));
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
