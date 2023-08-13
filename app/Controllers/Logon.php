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
        $this->checkDefaults();
        $this->session = \Config\Services::session();
        if (!empty($this->session->get('user_id'))) {
            return redirect()->to(site_url('orgs'));
        }
        return view('logon', ['config' => new \Config\OpenAudit()]);
    }

    public function checkDefaults()
    {
        $license = @file_get_contents('http://localhost/omk/open-audit/license', false);
        if (empty($license)) {
            # try https
            $license = @file_get_contents('https://localhost/omk/open-audit/license', false);
        }
        if (!empty($license) and $license !== false) {
            $json = json_decode($license);
            if (json_last_error()) {
                $license = 'none';
            } else {
                $license = $json->license;
            }
        } else {
            $license = 'none';
        }
        if (!in_array($license, ['none', 'free', 'commercial'])) {
            $license = 'none';
        }
        if (!empty($json->product)) {
            $product = $json->product;
        } else {
            $product = 'Open-AudIT Community';
        }
        if ($license == 'none') {
            $product = 'Open-AudIT Community';
        }
        if (!in_array($product, ['Open-AudIT Community', 'Open-AudIT Professional', 'Open-AudIT Enterprise'])) {
            $product = 'Open-AudIT Community';
        }
        $db = db_connect();
        $sql = "UPDATE configuration SET value = '" . $license . "' WHERE name = 'license'";
        $db->query($sql);
        $sql = "UPDATE configuration SET value = '" . $product . "' WHERE name = 'product'";
        $db->query($sql);

        if (file_exists(APPPATH . '../other/modules.json')) {
            $modules = @file_get_contents(APPPATH.'../other/modules.json');
            if (!empty($modules)) {
                $modules = json_decode($modules);
                # echo "<pre>"; print_r($modules); exit;
                $installed = @file_get_contents('http://localhost/omk/.json', false);
                if (empty($license)) {
                    # try https
                    $installed = @file_get_contents('https://localhost/omk/.json', false);
                }
                if (!empty($installed)) {
                    $installed = json_decode($installed);
                    foreach ($installed->products as $app) {
                        if (!empty($modules->{$app->name})) {
                            $modules->{$app->name}->installed = true;
                            $modules->{$app->name}->version = $app->version;
                        }
                        if (stripos($app->name, 'Open-AudIT') !== false) {
                            $modules->{'Open-AudIT'}->installed = true;
                            $modules->{'Open-AudIT'}->version = $app->version;
                        }
                    }
                    $sql = "UPDATE configuration SET value = ? WHERE name = 'modules'";
                    $db->query($sql, [json_encode($modules)]);
                }
            }
        }
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
