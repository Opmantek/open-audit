<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use stdClass;

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
 * Base Object Roles
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Roles
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Configuration extends BaseController
{
    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function readLicense()
    {
        if (empty($this->config->enterprise_binary)) {
            $_SESSION['error'] = 'The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from <a href="https://firstwave.com">https://firstwave.com</a>.';
            return redirect()->route('summariesCollection');
        }

        $db = db_connect();
        $sql = "SELECT `id`, `name` FROM `configuration` WHERE `name` IN ('license_string', 'license_string_collector')";
        $result = $db->query($sql)->getResult();
        foreach ($result as $item) {
            $this->resp->meta->{$item->name} = $item->id;
        }

        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('configurationReadLicense', ['license' => $this->licenses, 'license_collector' => $this->licenses_collector])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
        return true;
    }



    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function readServers()
    {
        $db = db_connect();
        $sql = "SELECT * FROM configuration WHERE name = 'servers'";
        $result = $db->query($sql)->getResult();
        $this->resp->data = format_data($result, 'configuration');
        $update = false;
        if (strpos($this->user->permissions['configuration'], 'u') !== false and strpos($this->collections->collectors->actions->{$this->config->product}, 'u') !== false) {
            $update = true;
        }
        $dictionary = $this->configurationModel->dictionary();
        $name = !empty($this->resp->data[0]->attributes->name) ? $this->resp->data[0]->attributes->name : '';
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'dictionary' => $dictionary,
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user),
            'name' => $name]) .
            view('configurationReadServers', ['data' => filter_response($this->resp->data), 'resource' => filter_response($this->resp->data[0]->attributes), 'update' => $update])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function executeFormEmail()
    {
        $name = !empty($this->resp->data[0]->attributes->name) ? $this->resp->data[0]->attributes->name : '';
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user),
            'name' => $name]) .
            view('configurationExecuteFormEmail')
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }

    /**
     * Provide the custom form for licenses
     *
     * @access public
     * @return void
     */
    public function executeEmail()
    {

        if (empty($this->resp->meta->received_data->attributes->email)) {
            $_SESSION['error'] = 'Email address required.';
            return redirect()->route('configurationExecuteFormEmail');
        }
        $email_to = $this->resp->meta->received_data->attributes->email;
        if (!filter_var($email_to, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'Valid email address required.';
            return redirect()->route('configurationExecuteFormEmail');
        }
        $email_config = array();
        $email_config['SMTPHost'] = $this->config->mail_server;
        $email_config['SMTPUser'] = $this->config->mail_user;
        $email_config['SMTPPass'] = $this->config->mail_password;
        $email_config['SMTPPort'] = intval($this->config->mail_server_port);
        $email_config['SMTPCrypto'] = ($this->config->mail_use_tls === 'y') ? 'tls' : '';
        $email_config['protocol'] = 'smtp';
        $email_config['newline'] = "\r\n";

        $email = service('email', $email_config);
        $email->setFrom($this->config->mail_from);
        $email->setTo($email_to);
        $email->setSubject('Email Test from Open-AudIT');
        $email->setMessage('This is an email test from your Open-AudIT Server.');
        $output = new stdClass();
        $output->status = 'success';
        $output->message = 'An email was successfully sent.';
        if (!$email->send(false)) {
            $output->status = 'danger';
            $output->message = '';
            foreach ($this->config as $key => $value) {
                if (strpos($key, 'mail') !== false) {
                    if ($key === 'mail_password') {
                        $value = 'removed from display, but has been set';
                    }
                    $output->message .= $key . ': ' . $value . "\n";
                }
            }
            $output->message .= "\n\n" . $email->printDebugger(['headers']);
        }
        $name = !empty($this->resp->data[0]->attributes->name) ? $this->resp->data[0]->attributes->name : '';
        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'included' => filter_response($this->resp->included),
            'meta' => filter_response($this->resp->meta),
            'orgs' => filter_response($this->orgsUser),
            'queries' => filter_response($this->queriesUser),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user),
            'name' => $name]) .
            view('configurationExecuteEmail', ['output' => $output])
            . view('shared/footer', ['license_string' => $this->resp->meta->license_string]);
    }
}
