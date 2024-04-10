<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.1.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Scripts
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Scripts
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Agents extends BaseController
{
    public function download($id)
    {
        $request = \Config\Services::request();
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
        if (!empty($id)) {
            $file = str_replace("\$agentId = ''", "\$agentId = '$id'", $file);
        }
        if (empty($file)) {
            \Config\Services::session()->setFlashdata('danger', 'Cannot download installer, please contact your Open-AudIT administrator.');
            return redirect()->route($this->config->homepage);
        }
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        // TODO - test for Windows VS Unis (.ps1 or .sh)
        header('Content-Disposition: attachment; filename=agent.ps1');
        header('Content-Type: text');
        header('Content-Transfer-Encoding: binary');
        echo $file;
        return;
    }

    public function execute($id = null)
    {
        // Do not use dot's here so we can compare to $input->version
        $current_agent_version = 520;

        $id = intval($id);
        $request = \Config\Services::request();
        $ip = $request->getIPAddress();
        log_message('info', 'ACCESS:agents:download:' . $id . ':' . $ip);
        $this->agentsModel = new \App\Models\AgentsModel();
        $agentResponse = new \stdClass();
        $agentResponse->actions = new \stdClass();
        $agentResponse->actions->commands = array();
        $agentResponse->actions->audit = false;
        $agentResponse->actions->org_id = 0;
        $agentResponse->actions->location_id = 0;
        $agentResponse->actions->uninstall = false;

        $input = json_decode(file_get_contents('php://input'));
        $this->devicesModel = model('App\Models\DevicesModel');
        $device = new \stdClass();
        if (!empty($input)) {
            $device_id = deviceMatch($input);
            $device = $this->devicesModel->read($device_id)[0];
        } else {
            $agentResponse->actions->audit = true;
            $input = new \stdClass();
            $input->version = '0';
            $input->os_family = 'windows';
        }

        // If we're not the current version, insert download agent and the command to update
        if (intval(str_replace('.', '', $input->version)) < $current_agent_version) {
            $action = new \stdClass();
            $download = '';
            if (!empty($id)) {
                $download = base_url() . "index.php/agents/$id/download";
            } else {
                if (stripos($input->os_family, 'Windows') !== false) {
                    $download = base_url() . "index.php/agents/windows/download/agent_windows.ps1";
                }
            }
            $action->download = $download;
            $agentResponse->actions->commands[] = $action;
            unset($action);
            $action = new \stdClass();
            $action->command = 'powershell.exe -executionpolicy bypass -file .\downloads\agent_windows.ps1 -install -debug 1';
            $agentResponse->actions->commands[] = $action;
            unset($action);
        }

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
        if (!empty($device)) {
            $now = new \DateTime($this->config->timestamp);
            $dateDiff = $now->diff(new \DateTime($device->attributes->last_seen));
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
                if (!empty($agent->test_os) and !empty($input->os_family)) {
                    if (!stripos($input->os_family, $test_os)) {
                        $testOs = false;
                    }
                }
                if ($testMinutes and $testNetwork and $testOs) {
                    if (!empty($agent->action_download)) {
                        $action = new \stdClass();
                        $action->download = $agent->action_download;
                        $agentResponse->actions->commands[] = $action;
                        unset($action);
                    }
                    if (!empty($agent->action_command)) {
                        $action = new \stdClass();
                        $action->command = $agent->action_command;
                        $agentResponse->actions->commands[] = $action;
                        unset($action);
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
        // A fallback incase all agent entries are deleted
        if (empty($agents)) {
            $agentResponse->actions->audit = true;
        }
        echo json_encode($agentResponse, JSON_PRETTY_PRINT);
    }
}
