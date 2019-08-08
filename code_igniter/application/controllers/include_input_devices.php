<?php
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************
$this->benchmark->mark('code_start');
// load our required helpers
$this->load->helper('audit');
$this->load->helper('log');
$this->load->helper('error');
// our required models
$this->load->model('m_audit_log');
$this->load->model('m_devices');
$this->load->model('m_device');
$this->load->model('m_devices_components');

// check if the submitting IP is in the list of allowable subnets
$this->load->model('m_networks');
if (!$this->m_networks->check_ip($_SERVER['REMOTE_ADDR'], '') and empty($this->user->id)) {
    $log = new stdClass();
    $log->type = 'system';
    $log->severity = 5;
    $log->user = @$this->user->full_name;
    $log->collection = @$this->response->meta->collection;
    $log->action = @$this->response->meta->action;
    $log->status = 'Checking for valid network submission.';
    $log->summary = 'Audit supplied from ineligible network.';
    $log->detail = 'An audit result was submitted from ' . $_SERVER['REMOTE_ADDR'] . ' which is not in the list of allowed networks.';
    if ($this->response->meta->format == 'screen') {
        $this->session->set_flashdata('error', 'An audit result was submitted from ' . $_SERVER['REMOTE_ADDR'] . ' which is not in the list of allowed networks.');
        redirect('summaries');
    } else {
        print_r(json_encode($log));
    }
    stdlog($log);
    unset($log);
    exit;
}

// get the input either from the textfield or the uploaded file
if (!empty($_POST['input_type']) and $_POST['input_type'] === 'file_input') {
    if (isset($_FILES['upload_file']['tmp_name']) and $_FILES['upload_file']['tmp_name'] != '') {
        $target_path = BASEPATH . "../application/uploads/" . basename($_FILES['upload_file']['name']);
        try {
            move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path);
        } catch (Exception $e) {
            $log = new stdClass();
            $log->type = 'system';
            $log->severity = 5;
            $log->user = @$this->user->full_name;
            $log->collection = @$this->response->meta->collection;
            $log->action = @$this->response->meta->action;
            $log->status = 'processing audit submission';
            $log->summary = 'Could not move uploaded audit file.';
            $log->detail = $e;
            stdlog($log);
            unset($log);
            $this->data['query'] = $e;
            $this->data['error'] = "There was an error uploading the file, please try again.";
            $this->data['include'] = 'v_error';
            $this->load->view('v_template', $this->data);
        }
        $input = file_get_contents($target_path);
        if (empty($input)) {
            log_error('ERR-0011');
            print_r($this->response->errors);
        }
        unlink($target_path);
    } else {
        if (empty($input)) {
            log_error('ERR-0011');
            print_r($this->response->errors);
            exit();
        }
    }
}

$log = new stdClass();
$log->discovery_id = null;
$log->system_id = null;
$log->timestamp = null;
$log->severity = 7;
$log->pid = getmypid();
$log->file = 'include_input_devices';
$log->function = '';
$log->message = '';
$log->command = 'process audit';
$log->display = 'y';

# we will store our messages until we get a system.id, then write them to the log
$log_message = array();

# We will use this array to hold a list of ID's in the discovery log
# that we will later update with our system_id
$ids = array();


# NOTE - $input may also be set by $POSTing to /devices the attribute upload_input.
if (!empty($_POST['data']) and empty($input)) {
    $input = html_entity_decode($_POST['data']);
}
if (empty($input)) {
    log_error('ERR-0021');
    print_r($this->response->errors);
    exit();
}
$parameters = new stdClass();
$parameters->input = $input;
$parameters->log = $log;
$json = audit_convert($parameters);

if(!empty($json)){
    if (empty($json->system->discovery_id)) {
        $json->system->discovery_id = '';
    } else {
        $log->discovery_id = $json->system->discovery_id;
        $GLOBALS['discovery_id'] = $json->system->discovery_id;
    }
    if (!empty($json->system->id)) {
        $log->system_id = $json->system->id;
    }

    $parameters = new stdClass();
    $parameters->log = $log;
    $parameters->input = $json->system;
    $json->system = audit_format_system($parameters);
    $details = $json->system;

    $json->system->mac_addresses = array();
    if (!empty($json->network) and count($json->network) > 0) {
        foreach ($json->network as $card) {
            if (!empty($card->mac)) {
                $json->system->mac_addresses[] = $card->mac;
            }
        }
    }
    if (!empty($json->ip) and count($json->ip) > 0) {
        foreach ($json->ip as $ip) {
            if (!empty($ip->mac)) {
                $json->system->mac_addresses[] = $ip->mac;
            }
        }
    }
    array_unique($json->system->mac_addresses);

    if (empty($details->id) and empty($details->ip) and empty($details->hostname)) {
        $log->summary = "Invalid audit result submitted";
        $log->detail = "Audit result submitted, but no device id, ip or hostname received from " . $_SERVER['REMOTE_ADDR'] . " - NOT inserting or updating.";
        $log->type = 'system';
        $log->collection = 'input';
        $log->action = 'create';
        $log->function = 'devices';
        $log->function = 'fail';
        $log->severity = 4;
        stdlog($log);
        exit;
    }

    if (!isset($details->type)) {
        # As this routine is processing an audit script result, set the type if not already set
        $details->type = 'computer';
    }
    if (empty($details->last_seen_by)) {
        $details->last_seen_by = 'audit';
    }

    $parameters = new stdCLass();
    $parameters->details = $details;
    $parameters->log = $log;
    $i = $this->m_device->match($parameters);

    if (empty($i) and !empty($details->id)) {
        $i = intval($details->id);
    }

    if (!empty($i) and !empty($details->id) and $i != $details->id) {
        // We delete this original system as likely with limited data (from
        // nmap and/or snmp) we couldn't match an existing system
        // Now we have an actual audit result with plenty of data
        // we have found a match and it's not the original
        $sql = "/* include_input_devices */ DELETE FROM system WHERE id = ?";
        $query = $this->db->query($sql, array($details->id));
        $log->system_id = $i;
        $log->message = 'System Id provided differs from System Id found for ' . $details->hostname;
        $ids[] = discovery_log($log);
    }
    $details->id = $i;

    if (empty($i)) {
        // insert a new system
        $details->id = $this->m_device->insert($details);
        $log->system_id = $details->id;
        $log->ip = @$details->ip;
        $log->message = 'CREATE entry for ' . $details->name . ', System ID ' . $details->id;
        discovery_log($log);
        # In the case where we inserted a new device, m_device::match will add a log entry, but have no
        # associated system_id. Update this one row.
        $sql = "/* include_input_devices */" . "UPDATE `discovery_log` SET system_id = ? WHERE system_id IS NULL AND pid = ?";
        $data = array($log->system_id, $log->pid);
        $query = $this->db->query($sql, $data);
        $details->original_last_seen = "";
        if ($this->response->meta->format == 'screen') {
            echo "SystemID (new): <a href='" . base_url() . "index.php/devices/" . $details->id . "'>" . $details->id . "</a>.<br />\n";
        }
    } else {
        // update an existing system
        $log->message = 'UPDATE entry for ' . $details->name . ', System ID ' . $details->id;
        $log->system_id = $details->id;
        $log->ip = @$details->ip;
        discovery_log($log);
        // $details->original_last_seen_by = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen_by');
        // $details->original_last_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen');
        $this->m_device->update($details);
        if ($this->response->meta->format == 'screen') {
            echo "SystemID (updated): <a href='" . base_url() . "index.php/devices/" . $details->id . "'>" . $details->id . "</a>.<br />\n";
        }
    }

    if (!empty($ids)) {
        $sql = "UPDATE discovery_log SET system_id = ?, ip = ? WHERE id IN (" . implode(',', $ids) . ")";
        $query = $this->db->query($sql, array($details->id, (string)$log->ip));
    }

    # We now have a system.id - either supplied, found or created.
    if (!empty($details->discovery_id)) {
        # we have a discovery_id, insert our $log_message's and delete anything where log.pid != our pid
        $sql = "/* include_input_device */" . " DELETE FROM `discovery_log` WHERE `system_id` = ? AND `command` = 'process audit' AND pid != ?";
        $data = array(intval($details->id), intval(getmypid()));
        $query = $this->db->query($sql, $data);
    } else {
        # we were supplied an audit result, but no discovery_id
        # delete all dicovery logs where system_id = our ID and log.pid != our pid
        $sql = "/* include_input_device */" . " DELETE FROM `discovery_log` WHERE `system_id` = ? AND `pid` != ?";
        $data = array(intval($details->id), intval(getmypid()));
        $query = $this->db->query($sql, $data);
    }

    $details->first_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'first_seen');

    $script_version = '';
    if (!empty($details->script_version)) {
        $script_version = $details->script_version;
    }
    $this->m_audit_log->create($details->id, @$this->user->full_name, $details->last_seen_by, $details->audits_ip, '', '', $details->last_seen, $script_version);

    foreach ($json as $key => $value) {
        if ($key != 'system' and $key != 'audit_wmi_fail' and $key != 'dns') {
            $parameters = new stdClass();
            $parameters->table = $key;
            $parameters->details = $details;
            $parameters->input = $json->{$key};
            $parameters->log = $log;
            $this->m_devices_components->process_component($parameters);
        }
    }

    if (!empty($json->audit_wmi_fail)) {
        $this->m_audit_log->update('debug', 'audit_wmi_fail', $details->id, $details->last_seen);
        $this->m_audit_log->update('wmi_fails', $json->audit_wmi_fail, $details->id, $details->last_seen);
    }

    // Generate any DNS entries required - only if a collector or the audit is NOT from a collector
    if (!empty($this->config->config['servers']) or empty($details->collector_uuid)) {
        $dns = $this->m_devices_components->create_dns_entries((int)$details->id);
        if (!empty($json->dns) and count($json->dns) > 0) {
            foreach ($json->dns as $item) {
                if (!empty($item->ip) and !empty($item->name) and !empty($item->fqdn)) {
                    $dns[] = $item;
                }
            }
        }
        unset($item);
        if (count($dns) > 0) {
            $parameters = new stdClass();
            $parameters->table = 'dns';
            $parameters->details = $details;
            $parameters->input = $dns;
            $parameters->log = $log;
            $this->m_devices_components->process_component($parameters);
        }
        unset($dns);
    }

    $this->load->model('m_rules');
    $parameters = new stdClass();
    $parameters->id = intval($details->id);
    $parameters->discovery_id = '';
    if (!empty($details->discovery_id)) {
        $parameters->discovery_id = intval($details->discovery_id);
    }
    $parameters->action = 'update';
    $this->m_rules->execute($parameters);

    $this->m_audit_log->update('debug', 'finished processing', $details->id, $details->last_seen);
    $log->message = 'Completed processing audit result for ' . $details->hostname . ' (System ID ' . $details->id . ')';
    discovery_log($log);

    // set the ip (if not already set)
    $this->m_audit_log->update('debug', 'check and set initial ip', $details->id, $details->last_seen);
    $this->m_devices_components->set_initial_address($details->id);

    // set the identification
    $this->m_audit_log->update('debug', 'set the identification', $details->id, $details->last_seen);
    $this->m_device->set_identification($details->id);

    $this->m_audit_log->update('debug', '', $details->id, $details->last_seen);
    $this->benchmark->mark('code_end');
    if ($this->response->meta->format == 'screen') {
        echo '<br />Time: ' . $this->benchmark->elapsed_time('code_start', 'code_end') . " seconds.<br />\n";
    }
    $i = (string) $json->system->hostname;


    $log->summary = 'Processing completed for ' . $i . ' (System ID ' . $details->id . '), took ' . $this->benchmark->elapsed_time('code_start', 'code_end') . ' seconds';
    $log->status = 'complete';
    stdlog($log);
    if ($this->response->meta->format == 'screen') {
        echo '</body></html>';
    }


    # If we are configured as a collector, forward the information to the server
    if ($this->config->config['servers'] !== '') {
        $server = json_decode($this->config->config['servers']);
        $log->message = 'Sending result to ' . $server->host . ' because this server is a collector.';
        discovery_log($log);

        unset($json->device_id);
        unset($json->system->id);
        unset($json->system->discovery_id);
        unset($json->system->original_last_seen_by);
        unset($json->system->original_last_seen);
        unset($json->system->first_seen);
        unset($json->system->org_id);
        $json->system->collector_uuid = $this->config->config['uuid'];

        $device_json = json_encode($json);
        $url = $server->host . $server->community . '/index.php/input/devices';

        $data = array('data' => $device_json);
        # use key 'http' even if we send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === false) {
            # error
            $log->severity = 4;
            $log->message = 'Could not send result to ' . $server->host . $server->community . '/index.php/input/devices - please check with your server administrator.';
            discovery_log($log);
            $log->severity = 7;
        } else {
            # success
            $log->severity = 7;
            $log->message = 'Result sent to ' . $server->host . '.';
            discovery_log($log);
        }
    }
}
