<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use App\Models\AgentsModel;
use Config\Services;
use DateTime;
use Exception;
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
 * Base Object Agents
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Agents
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Agents extends BaseController
{
    /**
     * Download an agent by ID or OS
     *
     * @param $id Can be the numeric database ID or the OS name
     *
     * @return void
     */
    public function download($id = null)
    {
        $request = Services::request();
        $ip = $request->getIPAddress();
        log_message('info', 'ACCESS:agents:download::' . $ip);
        if (empty($this->agentsModel)) {
            $this->agentsModel = model('App\Models\AgentsModel');
        }
        // TODO - Implement the below when we activate Unix style OS's
        // if (!is_numeric($id)) {
        //     $id = $this->agentsModel->getByOs($id);
        // }
        // if (is_numeric($id)) {
        //     $id = intval($id);
        // }
        // if (empty($id)) {
        //     return;
        // }
        // $scriptContents = $this->agentsModel->download($id);
        $filename = ROOTPATH . 'other/agent_windows.ps1';
        if (!file_exists($filename)) {
            log_message('error', "Script does not exist on filesystem for $filename.");
            return null;
        }
        $file = file_get_contents($filename);
        $file = str_replace("\r\n", "\n", $file);
        $file = str_replace("\r", "\n", $file);
        $file = str_replace("\$url = ''", "\$url = '" . base_url() . "index.php/'", $file);
        if ($id !== null) {
            $file = str_replace("\$agentId = ''", "\$agentId = '$id'", $file);
        }
        if ($request->isSecure() and isset($this->config->feature_agents_advanced) and $this->config->feature_agents_advanced === 'y') {
            $file = str_replace("\$advanced = 'n'", "\$advanced = 'y'", $file);
        }
        if (empty($file)) {
            Services::session()->setFlashdata('danger', 'Cannot download installer, please contact your Open-AudIT administrator.');
            return redirect()->route($this->config->homepage);
        }
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        // TODO - test for Windows VS Unis (.ps1 or .sh)
        header('Content-Disposition: attachment; filename=agent.ps1');
        header('Content-Type: text');
        header('Content-Transfer-Encoding: binary');
        echo $file;
    }

    /**
     * POST submission endpoint from remote agents
     *
     * @param $id NULL or a database ID
     *
     * @access public
     * @return void
     * @throws Exception
     */
    public function execute($id = null)
    {
        // Do not use dot's here so we can compare to (intval)$input->version
        $current_agent_version = 530;

        $id = (int)$id;
        $request = Services::request();
        $ip = $request->getIPAddress();
        log_message('info', 'ACCESS:agents:execute:' . $id . ':' . $ip);
        $this->agentsModel = new AgentsModel();
        $agentResponse = new stdClass();
        $agentResponse->actions = new stdClass();
        $agentResponse->actions->commands = array();
        $agentResponse->actions->audit = false;
        $agentResponse->actions->org_id = 0;
        $agentResponse->actions->location_id = 0;
        $agentResponse->actions->uninstall = false;

        try {
            $input = json_decode(file_get_contents('php://input'), false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            exit(1);
        }

        $this->devicesModel = model('App\Models\DevicesModel');
        $device = new stdClass();
        if (!empty($input)) {
            $device_id = deviceMatch($input);
            if (!empty($device_id)) {
                $device = $this->devicesModel->read($device_id)[0];
            }
        }
        if (empty($device->id)) {
            $agentResponse->actions->audit = true;
        }
        if (empty($input)) {
            $agentResponse->actions->audit = true;
            $input = new stdClass();
            $input->version = '0';
            $input->os_family = 'windows';
        }

        // If we're not the current version, insert download agent and the command to update
        if (intval(str_replace('.', '', $input->version)) < $current_agent_version) {
            $agentResponse->actions->update = true;
        }

        // $agentResponse->actions->update = true;
        // $agentResponse->actions->benchmark = "WindowsClient-11-1.6.xml";
        // $agentResponse->actions->benchmark_id = 2;
        // $agentResponse->actions->device_id = $device_id;

        // Get the agent or all agents
        $agents = array();
        if (empty($id)) {
            // Select all agents
            $agents = $this->agentsModel->listAll();
        }
        if (!empty($id)) {
            // Select the specific agent requested
            $agents = $this->agentsModel->read($id);
        }

        // Loop throught the agents (or the single agent in an array)
        // If every condition in an agent entry passes, then set the actions
        $minutes = 0;
        if (!empty($device) and !empty($device->attributes->last_seen)) {
            try {
                $now = new DateTime($this->config->timestamp);
            } catch (Exception $e) {
                log_message('error', $e->getMessage());
                exit(1);
            }
            try {
                $dateDiff = $now->diff(new DateTime($device->attributes->last_seen));
            } catch (Exception $e) {
                log_message('error', $e->getMessage());
                exit(1);
            }
            $minutes = $dateDiff->days * 24 * 60;
            $minutes += $dateDiff->h * 60;
            $minutes += $dateDiff->i;
        }
        if (!empty($agents)) {
            foreach ($agents as $agent) {
                if (!empty($agent->attributes)) {
                    // Have to do this as listAll returns a raw array, where-as read returns { ->attributes }
                    $agent = $agent->attributes;
                }
                $testMinutes = true;
                $testNetwork = true;
                $testOs = true;
                if (!empty($agent->test_minutes) and $minutes < $agent->test_minutes) {
                    $testMinutes = false;
                }
                if (!empty($agent->test_subnet) and !empty($input->ip)) {
                    $network = network_details($agent->test_subnet);
                    if (ip_address_to_db($input->ip) <= ip_address_to_db($network->host_min) or ip_address_to_db($input->ip) >= ip_address_to_db($network->host_max)) {
                        $testNetwork = false;
                    }
                }
                if (!empty($agent->test_os) and !empty($input->os_family) and !stripos($input->os_family, $agent->test_os)) {
                    $testOs = false;
                }
                if ($testMinutes and $testNetwork and $testOs) {
                    if ($request->isSecure() and isset($this->config->feature_agents_advanced) and $this->config->feature_agents_advanced === 'y') {
                        if (!empty($agent->action_download)) {
                            $action = new stdClass();
                            $action->download = $agent->action_download;
                            $agentResponse->actions->commands[] = $action;
                            unset($action);
                        }
                        if (!empty($agent->action_command)) {
                            $action = new stdClass();
                            $action->command = $agent->action_command;
                            $agentResponse->actions->commands[] = $action;
                            unset($action);
                        }
                    }
                    if (!empty($agent->action_devices_assigned_to_org)) {
                        $agentResponse->actions->org_id = intval($agent->action_devices_assigned_to_org);
                    }
                    if (!empty($agent->action_devices_assigned_to_location)) {
                        $agentResponse->actions->location_id = intval($agent->action_devices_assigned_to_location);
                    }
                    if (!empty($agent->action_audit) and $agent->action_audit === 'y') {
                        $agentResponse->actions->audit = true;
                    }
                    if (!empty($agent->action_uninstall) and $agent->action_uninstall === 'y') {
                        $agentResponse->actions->uninstall = true;
                    }
                }
            }
        }
        // If we didn't retrieve any agents, just tell the remote host to audit itself
        // A fallback in case all agent entries are deleted
        if (empty($agents)) {
            $agentResponse->actions->audit = true;
        }
        echo json_encode($agentResponse, JSON_PRETTY_PRINT);
    }
}
