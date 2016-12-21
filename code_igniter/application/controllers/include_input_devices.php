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

// check if the submitting IP is in the list of allowable subnets
$this->load->model('m_networks');
if (!$this->m_networks->check_ip($_SERVER['REMOTE_ADDR'], '')) {
    exit;
}

$this->load->helper('log');
$this->load->helper('error');

$log = new stdClass();
$log->severity = 6;
$log->status = 'processing';
$log->type = 'system';
$log->collection = @$this->response->meta->collection;
if (empty($log->collection)) {
    $log->collection = 'input';
}
$log->action = @$this->response->meta->action;
if (empty($log->action)) {
    $log->action = 'devices';
}
$log->function = strtolower($log->collection) . '::' . strtolower($log->action);
$log->summary = 'processing submitted data';
if (!empty($_POST['display'])) {
    $log->display = $_POST['display'];
}
stdlog($log);

// our required models
$this->load->model('m_audit_log');
$this->load->model('m_devices');
$this->load->model('m_devices_components');
$this->load->model('m_system');

// get the input either from the textfield or the uploaded file
if (isset($_FILES['upload_file']['tmp_name']) and $_FILES['upload_file']['tmp_name'] != '') {
    $target_path = BASEPATH . "../application/uploads/" . basename($_FILES['upload_file']['name']);
    try {
        move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path);
    } catch (Exception $e) {
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
}

if (!empty($_POST['data'])) {
    $input = html_entity_decode($_POST['data']);
}

if (empty($input)) {
    log_error('ERR-0021');
    print_r($this->response->errors);
    exit();
}

// convert to UTF8 (if required)
if (mb_detect_encoding($input) !== 'UTF-8') {
    $input = utf8_encode($input);
}

$xml_input = iconv('UTF-8', 'UTF-8//TRANSLIT', $input);
libxml_use_internal_errors(true);

try {
    $xml = new SimpleXMLElement($xml_input, LIBXML_NOCDATA);
} catch (Exception $error) {
    $errors = libxml_get_errors();
    echo "Invalid XML.<br />\n<pre>\n";
    print_r($errors);
    // not a valid XML string
    // $xml_split = explode("\n", $xml_input, 10);
    // $hostname = @str_replace("\t\t<hostname>", '', $xml_split[5]);
    // $hostname = @str_replace('</hostname>', '', $hostname);
    log_error('ERR-0012');
    print_r($this->response->errors);
    exit;
}

$log->summary = "Valid XML received.";
stdlog($log);

# this inserts all the (or any) retrieved mac addresses into the sys XML section
# which are then compared against in the m_system->find_system function to match a device
foreach ($xml->children() as $child) {
    if ($child->getName() === 'network') {
        foreach ($child->children() as $card) {
            $mac = '';
            $mac = trim(strtolower((string)$card->mac));
            if ($mac != '') {
                $xml->sys->mac_addresses->$mac = $card->net_mac_address;
            }
        }
    }
}
unset($mac);

$details = (object) $xml->sys;
$details->last_seen = $this->config->config['timestamp'];
$received_system_id = '';
if (empty($details->id)) {
    $details->id = '';
} else if ($details->id != '') {
    $received_system_id = (string)$details->id;
}
$received_status = "";
$received_status = @$this->m_devices_components->read($received_system_id, 'y', 'system', '', 'status');
if ($received_status !== 'production') {
    $received_system_id = '';
}

if (empty($details->fqdn) and !empty($details->hostname and !empty($details->domain))) {
    $details->fqdn = $details->hostname . "." . $details->domain;
}

if (!isset($details->type)) {
    $details->type = 'computer';
}

$i = $this->m_system->find_system($details);
if ($i == '' and $received_system_id > '') {
    $i = $received_system_id;
}
if ($i != '' and $received_system_id != '' and $i != $received_system_id) {
    // We delete this original system as likely with limited data (from
    // nmap and/or snmp) we couldn't match an existing system
    // Now we have an actual audit result with plenty of data
    // we have found a match and it's not the original
    $sql = "/* system::add_system */ DELETE FROM system WHERE id = ?";
    $query = $this->db->query($sql, array($received_system_id));
    $log->summary = 'System Id provided differs from System Id found for ' . $details->hostname;
    stdlog($log);
}
$details->id = $i;

if (empty($details->last_seen_by)) {
    $details->last_seen_by = 'audit';
}

$details->audits_ip = ip_address_to_db($_SERVER['REMOTE_ADDR']);

if ((string) $i === '') {
    // insert a new system
    $details->id = $this->m_system->insert_system($details);
    $log->severity = 7;
    $log->summary = 'CREATE entry for ' . $details->hostname . ', System ID ' . $details->id;
    stdlog($log);
    $details->original_last_seen = "";
    echo "SystemID (new): <a href='" . base_url() . "index.php/devices/" . $details->id . "'>" . $details->id . "</a>.<br />\n";
} else {
    // update an existing system
    $log->severity = 7;
    $log->summary = 'UPDATE entry for ' . $details->hostname . ', System ID ' . $details->id;
    stdlog($log);
    $details->original_last_seen_by = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen_by');
    $details->original_last_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'last_seen');
    $this->m_system->update_system($details);
    echo "SystemID (updated): <a href='" . base_url() . "index.php/main/system_display/" . $details->id . "'>" . $details->id . "</a>.<br />\n";
}

# delete the discovery_logs with pid != current pid and discovery_id = NULL
$sql = "DELETE FROM discovery_log WHERE system_id = ? AND discovery_id IS NULL AND pid != ?";
$data = array(intval($details->id), intval(getmypid()));
$query = $this->db->query($sql, $data);


$details->first_seen = $this->m_devices_components->read($details->id, 'y', 'system', '', 'first_seen');


$this->m_audit_log->create($details->id, @$this->user->full_name, $details->last_seen_by, $details->audits_ip, '', '', $details->last_seen);

$this->m_devices_components->process_component('bios', $details, $xml->bios);
$this->m_devices_components->process_component('disk', $details, $xml->disk);
$this->m_devices_components->process_component('file', $details, $xml->file);
$this->m_devices_components->process_component('ip', $details, $xml->ip);
$this->m_devices_components->process_component('log', $details, $xml->log);
$this->m_devices_components->process_component('memory', $details, $xml->memory);
$this->m_devices_components->process_component('module', $details, $xml->module);
$this->m_devices_components->process_component('monitor', $details, $xml->monitor);
$this->m_devices_components->process_component('motherboard', $details, $xml->motherboard);
$this->m_devices_components->process_component('netstat', $details, $xml->netstat);
$this->m_devices_components->process_component('network', $details, $xml->network);
$this->m_devices_components->process_component('optical', $details, $xml->optical);
$this->m_devices_components->process_component('pagefile', $details, $xml->pagefile);
$this->m_devices_components->process_component('partition', $details, $xml->partition);
$this->m_devices_components->process_component('print_queue', $details, $xml->print_queue);
$this->m_devices_components->process_component('processor', $details, $xml->processor);
$this->m_devices_components->process_component('route', $details, $xml->route);
$this->m_devices_components->process_component('scsi', $details, $xml->scsi);
$this->m_devices_components->process_component('server', $details, $xml->server);
$this->m_devices_components->process_component('server_item', $details, $xml->server_item);
$this->m_devices_components->process_component('service', $details, $xml->service);
$this->m_devices_components->process_component('share', $details, $xml->share);
$this->m_devices_components->process_component('software', $details, $xml->software);
$this->m_devices_components->process_component('software_key', $details, $xml->software_key);
$this->m_devices_components->process_component('sound', $details, $xml->sound);
$this->m_devices_components->process_component('task', $details, $xml->task);
$this->m_devices_components->process_component('user', $details, $xml->user);
$this->m_devices_components->process_component('user_group', $details, $xml->user_group);
$this->m_devices_components->process_component('variable', $details, $xml->variable);
$this->m_devices_components->process_component('video', $details, $xml->video);
$this->m_devices_components->process_component('vm', $details, $xml->vm);
$this->m_devices_components->process_component('windows', $details, $xml->windows);

foreach ($xml->children() as $child) {
    if ($child->getName() === 'audit_wmi_fail') {
        $this->m_audit_log->update('debug', $child->getName(), $details->id, $details->last_seen);
        $this->m_audit_log->update('wmi_fails', $xml->audit_wmi_fail, $details->id, $details->last_seen);
    }
}

// Generate any DNS entries required
$dns = new stdClass();
$dns->item = array();
$dns->item = $this->m_devices_components->create_dns_entries((int)$details->id);
if (count($xml->dns->item) > 0) {
    foreach ($xml->dns->item as $item) {
        # likely not required, but turn it into an array and back to a standard object
        # so we have consistency inside the dns->item array of all objects versus some standard objects
        # and some simpleXML objects
        $item = (array) $item;
        $item = (object) $item;
        if (isset($item->ip) and $item->ip != '' and isset($item->name) and $item->name != '' and isset($item->fqdn)) {
            $dns->item[] = $item;
        }
    }
}
if (count($dns->item) > 0) {
    $this->m_devices_components->process_component('dns', $details, $dns);
}
unset($item);
unset($dns);

$this->m_audit_log->update('debug', 'finished processing', $details->id, $details->last_seen);

// set the ip (if not already set)
$this->m_audit_log->update('debug', 'check and set initial ip', $details->id, $details->last_seen);
$this->m_devices_components->set_initial_address($details->id);
$this->m_audit_log->update('debug', '', $details->id, $details->last_seen);
$this->benchmark->mark('code_end');
echo '<br />Time: ' . $this->benchmark->elapsed_time('code_start', 'code_end') . " seconds.<br />\n";
$i = (string) $xml->sys[0]->hostname;

$log->summary = 'Processing completed for ' . $i . ' (System ID ' . $details->id . '), took ' . $this->benchmark->elapsed_time('code_start', 'code_end') . ' seconds';
$log->status = 'complete';
stdlog($log);

echo '</body></html>';