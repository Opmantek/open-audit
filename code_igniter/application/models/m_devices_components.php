<?php
/**
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
*
* PHP version 5.3.3
* 
* @category  Model
* @package   Devices
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
*/

/**
* Base Model Devices
*
* @access   public
* @category Model
* @package  Devices
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_devices_components extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [read description]
     * @param  integer $id         [description]
     * @param  string  $current    [description]
     * @param  string  $table      [description]
     * @param  string  $filter     [description]
     * @param  string  $properties [description]
     * @return [type]              [description]
     */
    public function read($id = 0, $current = 'y', $table = '', $filter = '', $properties = '*')
    {
        if ($table === '') {
            // we require a DB table to read from
            return;
        }
        if ($id === 0) {
            // we require a system id
            return;
        }
        if (is_array($filter) && count($filter) === 0) {
            unset($filter);
            $filter = '';
        }
        if (empty($properties)) {
            $properties = '*';
        }

        if ($current === 'delta' OR $current === 'full') {
            $sql = "SELECT first_seen FROM `{$table}` WHERE system_id = ? ORDER BY first_seen LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array($id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $first_seen = $row->first_seen;
            } else {
                $first_seen = '';
            }
        } else {
            $first_seen = '';
        }

        $fields = $this->db->list_fields($table);
        $found_id = false;
        $found_current = false;
        foreach ($fields as $field) {
            if ($field === 'system_id') {
                $found_id = true;
            }
            if ($field === 'current') {
                $found_current = true;
            }
        }

        $sql = '';

        if ($found_id) {
            if ($found_current) {
                if ($current === 'y') {
                    $sql = "SELECT {$properties} FROM `{$table}` WHERE `{$table}`.system_id = ? AND current = 'y' {$filter}";
                    $data = array($id);
                }
                if ($current === 'n') {
                    $sql = "SELECT {$properties} FROM `{$table}` WHERE `{$table}`.system_id = ? AND current = 'n' {$filter}";
                    $data = array($id);
                }
                if ($current === '' OR $current === 'all') {
                    $sql = "SELECT {$properties} FROM `{$table}` WHERE `{$table}`.system_id = ? {$filter}";
                    $data = array($id);
                }
                if ($current === 'delta') {
                    if ($first_seen !== '') {
                        $sql = "SELECT {$properties}, IF(({$table}.first_seen = ?), 'y', 'n') as original_install FROM `{$table}` WHERE `{$table}`.system_id = ? AND (current = 'y' OR first_seen = ?)";
                        $data = array("{$first_seen}", $id, "{$first_seen}");
                    }
                }
                if ($current === 'full') {
                    if ($first_seen !== '') {
                        $sql = "SELECT {$properties}, IF(({$table}.first_seen = ?), 'y', 'n') as original_install FROM `{$table}` WHERE `{$table}`.system_id = ?";
                        $data = array("{$first_seen}", $id);
                    }
                }
            } else {
                $sql = "SELECT {$properties} FROM `{$table}` WHERE `{$table}`.system_id = ? {$filter}";
                $data = array($id);
            }
        }

        if ($table === 'system') {
            $sql = "SELECT {$properties} FROM system WHERE id = ? {$filter}";
            $data = array($id);
        }

        $result = false;
        if ($sql !== '') {
            $query = $this->db->query('/* m_devices_components::read */' . $sql, $data);
            $result = $query->result();
            if ($table === 'credential') {
                $this->load->library('encrypt');
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
                }
            }
            $result = $this->from_db($result);

            if ($properties !== '*' && ! stripos($properties, ',') && $table === 'system') {
                // the request is for a single value from the system table - return only this value (as a string)
                $temp_result = $result[0]->$properties;
                unset($result);
                $result = (string)$temp_result;
                unset($temp_result);
            } else {
                $result = $this->format_data($result, 'devices/' . $id . '/' . $table);
            }
        }
        return($result);
    }

    /**
     * [match_columns description]
     * @param  [type] $table [description]
     * @return [type]        [description]
     */
    public function match_columns($table)
    {
        $match_columns = array();
        if ($table === 'bios') {
                $match_columns = array('manufacturer', 'model', 'serial', 'smversion', 'version');
        }
        if ($table === 'disk') {
                $match_columns = array('model', 'serial', 'hard_drive_index', 'size');
        }
        if ($table === 'dns') {
                $match_columns = array('ip', 'name', 'fqdn');
        }
        if ($table === 'file') {
                $match_columns = array('full_name', 'hash', 'inode', 'last_changed');
        }
        if ($table === 'log') {
                $match_columns = array('name', 'file_name', 'overwrite');
        }
        if ($table === 'memory') {
                $match_columns = array('bank', 'size', 'serial');
        }
        if ($table === 'module') {
                $match_columns = array('description', 'module_index', 'serial');
        }
        if ($table === 'monitor') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table === 'motherboard') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table === 'netstat') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table === 'network') {
                $match_columns = array('mac');
        }
        if ($table === 'nmap') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table === 'ip') {
                $match_columns = array('ip', 'mac', 'netmask');
        }
        if ($table === 'optical') {
                $match_columns = array('model', 'mount_point');
        }
        if ($table === 'pagefile') {
                $match_columns = array('name', 'initial_size', 'max_size');
        }
        if ($table === 'partition') {
                // $match_columns = array('name', 'hard_drive_index', 'mount_point', 'size');
                $match_columns = array('serial', 'hard_drive_index', 'mount_point', 'size');
        }
        if ($table === 'policy') {
                $match_columns = array('type', 'name', 'value', 'guid');
        }
        if ($table === 'print_queue') {
                $match_columns = array('device');
        }
        if ($table === 'processor') {
                $match_columns = array('description');
        }
        if ($table === 'radio') {
                $match_columns = array('name');
        }
        if ($table === 'route') {
                $match_columns = array('destination', 'next_hop');
        }
        if ($table === 'san') {
                $match_columns = array('serial');
        }
        if ($table === 'scsi') {
                $match_columns = array('model', 'manufacturer', 'device');
        }
        if ($table === 'server') {
                $match_columns = array('name', 'type', 'full_name', 'version');
        }
        if ($table === 'server_item') {
                $match_columns = array('name', 'type', 'instance', 'port');
        }
        if ($table === 'service') {
                // $match_columns = array('description', 'name', 'executable');
                $match_columns = array('name', 'executable');
        }
        if ($table === 'share') {
                $match_columns = array('name', 'path');
        }
        if ($table === 'software') {
                $match_columns = array('name', 'version');
        }
        if ($table === 'software_key') {
                $match_columns = array('name', 'string', 'rel', 'edition');
        }
        if ($table === 'sound') {
                $match_columns = array('model', 'manufacturer');
        }
        if ($table === 'task') {
                $match_columns = array('name', 'task');
        }
        if ($table === 'user') {
                $match_columns = array('name', 'sid', 'keys');
        }
        if ($table === 'user_group') {
                $match_columns = array('name', 'sid');
        }
        if ($table === 'variable') {
                $match_columns = array('program', 'name', 'value');
        }
        if ($table === 'video') {
                $match_columns = array('model');
        }
        if ($table === 'vm') {
                $match_columns = array('uuid');
        }
        if ($table === 'windows') {
                $match_columns = array('service_pack', 'build_number');
        }
        return($match_columns);
    }

    // $parameters is an object that looks as below.
    // $parameters->table
    // $parameters->details
    // $parameters->input
    // $parameters->log

    /**
     * [process_component description]
     * @param  [type] $parameters [description]
     * @return [type]             [description]
     */
    public function process_component($parameters)
    {

        if (empty($parameters) OR empty($parameters->table) OR empty($parameters->details) OR empty($parameters->input)) {
            $message = '';
            if (empty($parameters->table)) {
                $message = 'No table supplied.';
            } else {
                $message = 'Table '  . $parameters->table . ' supplied.';
            }
            if (empty($parameters->details)) {
                $message .= ' No details supplied.';
            } else {
                $message .= ' Details supplied.';
            }
            if (empty($parameters->input)) {
                $message .= ' No input supplied.';
            } else {
                $message .= ' Input supplied.';
            }

            // Don't bother to log the below as most of the time, they're empty
            if (@$parameters->table !== 'file' && @$parameters->table !== 'share' && @$parameters->table !== 'server_item') {
                $mylog = new stdClass();
                $mylog->severity = 6;
                $mylog->status = 'notice';
                $mylog->summary = 'Function process_component called without correct params object';
                $mylog->message = $message;
                $mylog->file = 'm_devices_components';
                $mylog->function = 'process_component';
                stdlog($mylog);
            }
            return;
        }

        if (empty($parameters->log)) {
            $log = new stdClass();
        } else {
            $log = $parameters->log;
        }
        if ( ! empty($parameters->discovery_id)) {
            $log->discovery_id = $parameters->discovery_id;
        }
        if ( ! empty($parameters->details->ip)) {
            $log->ip = ip_address_from_db($parameters->details->ip);
        } else {
            $log->ip = '127.0.0.1';
        }
        if ( ! empty($GLOBALS['discovery_id']) && empty($log->discovery_id)) {
            $log->discovery_id = intval($GLOBALS['discovery_id']);
        }
        if ( ! empty($details->discovery_id) && empty($log->discovery_id)) {
            $log->discovery_id = intval($details->discovery_id);
        }
        $log->command = 'process audit';
        $log->file = 'm_devices_components';
        $log->function = 'process_component';
        $log->message = '';
        $log->pid = getmypid();
        $log->severity = 7;
        $log->severity_text = '';
        $log->system_id = @intval($parameters->details->id);
        $log->timestamp = null;

        $table = '';
        if ( ! empty($parameters->table)) {
            $table = $parameters->table;
        }

        if ( ! $this->db->table_exists($table)) {
            $log->message = 'Table supplied does not exist (' . @$table . ') for '. @$details->ip . ' (' . @$name . ')';
            $log->command_status = 'fail';
            $log->severity = 4;
            discovery_log($log);
            return;
        }

        $create_change_log = true;
        if ( ! empty($this->config->config['create_change_log_' . $table]) && $this->config->config['create_change_log_' . $table] === 'n') {
            $create_change_log = false;
        }
        if ( ! empty($this->config->config['create_change_log']) && $this->config->config['create_change_log'] === 'n') {
            $create_change_log = false;
        }

        $details = $parameters->details;

        $input = $parameters->input;

        if ( ! empty($parameters->match_columns)) {
            $match_columns = $parameters->match_columns;
        } else {
            $match_columns = $this->match_columns($table);
        }

        $name = '';
        if (empty($details->name) && ! empty($details->hostname)) {
            $name = $details->hostname;
        } else {
            $name = $details->name;
        }

        if ( ! isset($details->id)) {
            $log->message = 'No id supplied for '.@ip_address_from_db($details->ip).' ('.$name.')';
            $message = 'No device id supplied - failed';
            $this->m_audit_log->update('debug', $message, $details->id, $details->last_seen);
            unset($message);
            $log->severity = 5;
            $log->message = 'No device id supplied to process component';
            $log->command_status = 'fail';
            discovery_log($log);
            return;
        }

        if ( ! isset($details->last_seen) OR $details->last_seen === '0000-00-00 00:00:00' OR $details->last_seen === '') {
            $sql = 'SELECT last_seen FROM `system` WHERE id = ?';
            $sql = $this->clean_sql($sql);
            $data = array($details->id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            $details->last_seen = $result[0]->last_seen;
        }

        // make sure we have a populated org_id for adding items to the charts table
        if (empty($details->org_id)) {
            $sql = 'SELECT `system`.`org_id` FROM `system` WHERE `system`.`id` = ?';
            $sql = $this->clean_sql($sql);
            $data = array($details->id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->org_id = $row->org_id;
        }

        foreach ($match_columns as $match_column) {
            for ($i=0; $i<count($input); $i++) {
                if (isset($input[$i]) && ! isset($input[$i]->{$match_column})) {
                    $input[$i]->$match_column = '';
                }
            }
        }

        // BIOS
        if ((string)$table === 'bios') {
            // As at 3.3.0, make sure we have a name
            for ($i=0; $i<count($input); $i++) {
                // `description` changed to `model`
                if (empty($input[$i]->model) && ! empty($input[$i]->description)) {
                    $input[$i]->model = $input[$i]->description;
                }
                // new DERIVED column `name`
                if (empty($input[$i]->name) && ! empty($input[$i]->description)) {
                    $input[$i]->name = $input[$i]->description;
                }
                // new DERIVED column `name`
                if (empty($input[$i]->name) && ! empty($input[$i]->model)) {
                    $input[$i]->name = $input[$i]->model;
                }
                // Remove `description`
                if ( ! empty($input[$i]->description)) {
                    unset($input[$i]->description);
                }
            }
        }

        // DISK
        if ((string)$table === 'disk') {
            for ($i=0; $i<count($input); $i++) {
                if (empty($input[$i]->manufacturer) OR $input[$i]->manufacturer === '(Standard disk drives)') {
                    $input[$i]->manufacturer = '';
                }
                if (empty($input[$i]->model)) {
                    $input[$i]->model = '';
                }
                if (empty($input[$i]->model_family)) {
                    $input[$i]->model_family = '';
                }
                if (stripos($input[$i]->manufacturer, 'QEMU') !== false) {
                    $input[$i]->manufacturer = 'QEMU';
                    $input[$i]->model = 'Virtual I/O device';
                    $input[$i]->model_family = '';
                }
                if (stripos($input[$i]->manufacturer, 'VMware') !== false) {
                    $input[$i]->manufacturer = 'VMware';
                    $input[$i]->model = 'VMware Virtual Disk';
                    $input[$i]->model_family = '';
                }
                if (empty($input[$i]->manufacturer) && stripos($input[$i]->model, 'vmware') !== false) {
                    $input[$i]->manufacturer = 'VMware';
                    $input[$i]->model = 'VMware Virtual Disk';
                    $input[$i]->model_family = '';
                }
                if (empty($input[$i]->manufacturer) && stripos($input[$i]->model, 'intel') !== false) {
                    $input[$i]->manufacturer = 'Intel';
                }
                if (empty($input[$i]->manufacturer) && $input[$i]->model === 'VBOX HARDDISK') {
                    $input[$i]->manufacturer = 'VirtualBox';
                }
                if (empty($input[$i]->manufacturer) && stripos($input[$i]->model, 'wdc') !== false) {
                    $input[$i]->manufacturer = 'Western Digital';
                }
                if (empty($input[$i]->manufacturer) && stripos($input[$i]->model_family, 'Western Digital') !== false) {
                    $input[$i]->manufacturer = 'Western Digital';
                }
                if (empty($input[$i]->manufacturer) && stripos($input[$i]->model_family, 'Seagate') !== false) {
                    $input[$i]->manufacturer = 'Seagate';
                }
                if (empty($input[$i]->manufacturer) && stripos($input[$i]->model_family, 'HP ') === 0) {
                    $input[$i]->manufacturer = 'Hewlett Packard';
                }
                if (stripos($input[$i]->manufacturer, 'Apple') === 0) {
                    $input[$i]->manufacturer = 'Apple Inc.';
                }

                if (empty($input[$i]->interface_type)) {
                    $input[$i]->interface_type = '';
                } else {
                    $input[$i]->interface_type = strtoupper($input[$i]->interface_type);
                }
                if (empty($input[$i]->status)) {
                    $input[$i]->status = '';
                }
                if ($input[$i]->status === 'Not available') {
                    $input[$i]->status = '';
                }

                // new DERIVED column `name`
                if (empty($input[$i]->name) && ! empty($input[$i]->model)) {
                    $input[$i]->name = trim($input[$i]->manufacturer . ' ' . $input[$i]->model);
                }
            }
        }

        // IP ADDRESS
        if ((string)$table === 'ip') {
            $this->load->model('m_networks');
            for ($i=0; $i<count($input); $i++) {
                // some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
                $input[$i]->mac = strtolower($input[$i]->mac);
                // As at 1.5.6 we pass an additional attribute called 'type' for bonded adapters
                // We use this to test and not pad the MAC address if set
                if ( ! isset($input[$i]->type)) {
                    $input[$i]->type = '';
                }
                if ( ! isset($input[$i]->version) OR $input[$i]->version !== '6') {
                    $input[$i]->version = 4;
                }
                // If we have a CIDR, but no netmask, create it
                if ($input[$i]->version === 4 && ! empty($input[$i]->cidr) && empty($input[$i]->netmask)) {
                    $temp_network = network_details($input[$i]->ip . '/' . $input[$i]->cidr);
                    $input[$i]->netmask = @$temp_network->netmask;
                }
                // Set a default netmask of 255.255.255.0 if we don't have one (and we're on IPv4)
                if ($input[$i]->version === 4 && (empty($input[$i]->netmask) OR $input[$i]->netmask === '0.0.0.0')) {
                    $input[$i]->netmask = '255.255.255.0';
                }
                // new DERIVED column `name`
                if ( ! empty($input[$i]->ip)) {
                    $input[$i]->name = $input[$i]->ip;
                }
                // calculate the network this address is on
                if ($input[$i]->version === 4 && ! empty($input[$i]->ip)) {
                    $temp_long = ip2long($input[$i]->netmask);
                    $temp_base = ip2long('255.255.255.255');
                    $temp_subnet = 32-log(($temp_long ^ $temp_base)+1, 2);
                    $temp_net = network_details($input[$i]->ip . '/' . $temp_subnet);
                    if (isset($temp_net->network) && $temp_net->network !== '') {
                        $input[$i]->network = $temp_net->network . '/' . $temp_subnet;
                    } else {
                        $input[$i]->network = '';
                    }
                    if (isset($temp_net->network_slash) && $temp_net->network_slash !== '') {
                        $input[$i]->cidr = $temp_net->network_slash;
                    } else {
                        $input[$i]->cidr = '';
                    }
                    unset($temp_long);
                    unset($temp_base);
                    unset($temp_subnet);
                    unset($temp_net);
                }
                if ($input[$i]->type !== 'bonded') {
                    if (isset($input[$i]->mac) && $input[$i]->mac !== '') {
                        $mymac = explode(':', $input[$i]->mac);
                        for ($j = 0; $j<count($mymac); $j++) {
                            $mymac[$j] = mb_substr('00'.$mymac[$j], -2);
                        }
                        if (count($mymac) > 0) {
                            $input[$i]->mac = implode(':', $mymac);
                        }
                    }
                }
                // ensure we have the correctly padded ip v4 address
                if ($input[$i]->version === 4) {
                    $input[$i]->ip = ip_address_to_db($input[$i]->ip);
                }
                if ( ! isset($input[$i]->ip) OR $input[$i]->ip === '') {
                    unset($input[$i]);
                }
                // ensure we add the network to the networks list
                if ( ! empty($input[$i]->network)) {
                    $network = new stdClass();
                    $network->name = $input[$i]->network;
                    if ( ! empty($details->org_id)) {
                        $network->org_id = intval($details->org_id);
                    } else {
                        $network->org_id = 1;
                    }
                    $network->description = 'Inserted from audit result.';
                    $this->m_networks->upsert($network);
                }
            }
            if ($details->type === 'computer' && ! empty($details->os_group) && $details->os_group === 'VMware') {
                // TODO - fix the below somewhow ?!??
                // the issue is that ESXi provides different values for network cards from the command line and from SNMP
                $sql = 'DELETE FROM `ip` WHERE `ip`.`system_id` = ?';
                $sql = $this->clean_sql($sql);
                $data = array($details->id);
                $query = $this->db->query($sql, $data);
                // set the below so we don't generate alerts for this
                $create_change_log = false;
            }
            if ($details->type === 'computer' && ! empty($details->manufacturer) && $details->manufacturer === 'Xen' && ! empty($details->model) && $details->model === 'HVM domU') {
                // TODO - fix the below somewhow ?!??
                // the issue is that AWS provides no IPv6 information via the API
                $sql = 'DELETE FROM `ip` WHERE `ip`.`system_id` = ?';
                $sql = $this->clean_sql($sql);
                $data = array($details->id);
                $query = $this->db->query($sql, $data);
                // set the below so we don't generate alerts for this
                $create_change_log = false;
            }
        }

        // MEMORY
        if ((string)$table === 'memory') {
            for ($i=0; $i<count($input); $i++) {
                if ( ! empty($input[$i]->speed)) {
                    $input[$i]->speed = intval(preg_replace('/[^\d.]/', '', $input[$i]->speed));
                } else {
                    unset($input[$i]->speed);
                }
                // new DERIVED column `name`
                if (empty($input[$i]->name) && ! empty($input[$i]->tag)) {
                    $input[$i]->name = $input[$i]->tag;
                }
            }
        }

        // MONITOR
        if ((string)$table === 'monitor') {
            for ($i=0; $i<count($input); $i++) {
                // new DERIVED column `name`
                if (empty($input[$i]->name)) {
                    $input[$i]->name = trim(@$input[$i]->manufacturer . ' ' . @$input[$i]->model);
                }
            }
        }

        // MOTHERBOARD
        if ((string)$table === 'motherboard') {
            for ($i=0; $i<count($input); $i++) {
                // new DERIVED column `name`
                if (empty($input[$i]->name)) {
                    $input[$i]->name = trim(@$input[$i]->manufacturer . ' ' . @$input[$i]->model);
                }
            }
        }

        // NETSTAT
        if ((string)$table === 'netstat') {
            for ($i=0; $i<count($input); $i++) {
                // new DERIVED column `name`
                if (empty($input[$i]->name)) {
                    $input[$i]->name = trim(@$input[$i]->program . ' on ' . @$input[$i]->ip . ' ' . @$input[$i]->protocol . ' port ' . @$input[$i]->port);
                }
            }
            foreach ($input as $item => $attributes) {
                $attributes->protocol = strtolower($attributes->protocol);
                $attributes->port = intval($attributes->port);
                // The protocol MUST be one defined in the SQL schema as below
                if ($attributes->protocol !== 'tcp' && $attributes->protocol !== 'udp' && $attributes->protocol !== 'tcp6' && $attributes->protocol !== 'udp6' && $attributes->protocol !== 'tcp4' && $attributes->protocol !== 'udp4') {
                    unset($input[$item]);
                    continue;
                }
                if (isset($this->config->config['process_netstat_windows_dns']) && $this->config->config['process_netstat_windows_dns'] === 'n') {
                    if (stripos($attributes->program, 'dns.exe') !== false && intval($attributes->port) > 1000) {
                        unset($input[$item]);
                        continue;
                    }
                }
                if (stripos($attributes->program, 'audit_windows.vbs') !== false) {
                    // Remove the discovery connection
                    unset($input[$item]);
                    continue;
                }
            }
        }

        // NETWORK
        if ((string)$table === 'network') {
            if ($details->type === 'computer' && $details->os_group !== 'VMware') {
                // we already match only on MAC Address
            } elseif ($details->type === 'computer' && $details->os_group === 'VMware') {
                // add index and connection id to the list to be matched
                $match_columns[] = 'net_index';
                $match_columns[] = 'connection';
                // TODO - fix the below somewhow ?!??
                // the issue is that ESXi provides different values for network cards from the command line and from SNMP
                $sql = 'DELETE FROM `network` WHERE `network`.`system_id` = ?';
                $sql = $this->clean_sql($sql);
                $data = array($details->id);
                $query = $this->db->query($sql, $data);
                // set the below so we don't generate alerts for this
                $create_change_log = false;
            } else {
                // just match the index
                $match_columns[] = 'net_index';
            }

            // some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
            // populate the manufacturer (if not already) using the MAC prefix
            for ($i=0; $i<count($input); $i++) {
                if (isset($input[$i]->mac)) {
                    $input[$i]->mac = strtolower($input[$i]->mac);
                } else {
                    $input[$i]->mac = '';
                }
                if (empty($input[$i]->manufacturer)) {
                    $input[$i]->manufacturer = get_manufacturer_from_mac($input[$i]->mac);
                }
                if (empty($input[$i]->manufacturer) && ! empty($details->manufacturer) && ! empty($details->form_factor) && $details->form_factor === 'Virtual') {
                    $input[$i]->manufacturer = $details->manufacturer;
                }
            }
            for ($i=0; $i<count($input); $i++) {
                // new DERIVED column `name`
                if (empty($input[$i]->name)) {
                    $input[$i]->name = trim(@$input[$i]->manufacturer . ' ' . @$input[$i]->model);
                }
            }
        }

        // NMAP
        if ((string)$table === 'nmap') {
            for ($i=0; $i<count($input); $i++) {
                // new DERIVED column `name`
                if (empty($input[$i]->name)) {
                    $input[$i]->name = trim(@$input[$i]->program . ' on ' . @$input[$i]->ip . ' ' . @$input[$i]->protocol . ' port ' . @$input[$i]->port);
                }
            }
        }

        // PAGEFILE
        if ((string)$table === 'pagefile') {
            for ($i=0; $i<count($input); $i++) {
                $input[$i]->initial_size = abs($input[$i]->initial_size);
                $input[$i]->max_size = abs($input[$i]->max_size);
            }
        }

        // PARTITION
        if ((string)$table === 'partition') {
            // AIX needs to also match on partition.description
            if (strtolower($details->os_family) === 'ibm aix') {
                $match_columns[] = 'description';
            }
            for ($i=0; $i<count($input); $i++) {
                // new DERIVED column `name`
                $input[$i]->name = $input[$i]->mount_type;
                if ( ! empty($input[$i]->mount_point)) {
                    $input[$i]->name .= ' at ' . $input[$i]->mount_point;
                }
                if ( ! empty($input[$i]->format)) {
                    if (stripos($input[$i]->format, 'member') !== false) {
                        $input[$i]->name .= ' which is a ' . $input[$i]->format;
                    } else {
                        $input[$i]->name .= ' formatted ' . $input[$i]->format;
                    }
                }
                if ( ! empty($input[$i]->hard_drive_index)) {
                    $input[$i]->name .= ' on device ' . $input[$i]->hard_drive_index;
                }
            }
        }

        // PROCESSOR
        if ((string)$table === 'processor') {
            if ( ! empty($input[0]->description)) {
                $input[0]->description = str_ireplace('(R)', '', $input[0]->description);
                $input[0]->description = str_ireplace('(TM)', '', $input[0]->description);
                $input[0]->description = str_ireplace('  ', ' ', $input[0]->description);
            }
            if ( ! empty($input[0]->manufacturer)) {
                $input[0]->manufacturer = str_ireplace('AuthenticAMD', 'AMD', $input[0]->manufacturer);
                $input[0]->manufacturer = str_ireplace('GenuineIntel', 'Intel', $input[0]->manufacturer);
            }
            $input[0]->name = trim(@$input[0]->description);
            $input[0]->hyperthreading = 'n';
            if ( ! empty($input[0]->core_count) && ! empty($input[0]->logical_count)) {
                if (intval($input[0]->logical_count) === intval(2 * $input[0]->core_count)) {
                    $input[0]->hyperthreading = 'y';
                }
            }
        }

        // ROUTE
        if ((string)$table === 'route') {
            for ($i=0; $i<count($input); $i++) {
                $temp = @dqtobin($input[$i]->mask);
                $temp = @bintocdr($temp);
                $input[$i]->name = trim(@$input[$i]->destination . '/' . $temp . ' via ' . @$input[$i]->next_hop);
            }
        }

        // SCSI
        if ((string)$table === 'scsi') {
            for ($i=0; $i<count($input); $i++) {
                $input[$i]->name = @$input[$i]->model;
            }
        }

        // SERVER
        if ((string)$table === 'server') {
            for ($i=0; $i<count($input); $i++) {
                if (isset($input[$i]->version) && $input[$i]->version !== '' && $input[$i]->type === 'database') {
                    $input[$i]->version_string = (string)$this->get_sql_server_version_string($input[$i]->version);
                }
            }
        }

        // SERVER ITEM
        // Make sure we have a port, as we now use this to match.
        // Blank will not match as the database column is an int with a default of 0
        if ((string)$table === 'server_item') {
            for ($i=0; $i<count($input); $i++) {
                if (empty($input[$i]->port)) {
                    $input[$i]->port = 0;
                }
                if (empty($input[$i]->server_id)) {
                    unset($input[$i]->server_id);
                }
            }
        }

        // SERVICE
        if ((string)$table === 'service') {
            foreach ($input as $item => $attributes) {
                // Remove any PAExec and Winexe 'services' as these are just the audit script running
                if (strtolower($attributes->name) === 'paexec' OR strtolower($attributes->name) === 'winexesvc') {
                    unset($input[$item]);
                }
            }
        }

        // SOFTWARE
        if ((string)$table === 'software') {
            $this->load->helper('software_version');
            for ($i=0; $i<count($input); $i++) {
                if (isset($input[$i]->version) && $input[$i]->version !== '') {
                    $input[$i]->version_padded = version_padded($input[$i]->version);
                } else {
                    $input[$i]->version_padded = '';
                }
                if ( ! empty($input[$i]->installed_on)) {
                    $date = date_create($input[$i]->installed_on);
                    $input[$i]->installed_on = date_format($date,"Y-m-d H:i:s");
                }
            }
        }

        // SOUND
        if ((string)$table === 'sound') {
            for ($i=0; $i<count($input); $i++) {
                $input[$i]->name = trim(@$input[$i]->manufacturer . ' ' . @$input[$i]->model);
            }
        }

        // USER
        if ((string)$table === 'user') {
            for ($i=0; $i<count($input); $i++) {

                // Ensure we have a keys item.
                //       Should be a JSON array (if populated) or an empty string (if not populated, ie: here).
                // We use an empty string because of existing entries on an upgraded database.
                // If we used an empty JSON array (ie: "[]"), nothing would match and we'd generate a lot of
                //       false positive changes first audit after an upgrade.

                if (empty($input[$i]->keys)) {
                    $input[$i]->keys = '';
                }
            }
        }

        // VIDEO
        if ((string)$table === 'video') {
            for ($i=0; $i<count($input); $i++) {
                $input[$i]->name = trim(@$input[$i]->manufacturer . ' ' . @$input[$i]->model);
            }
        }


        // VIRTUAL MACHINE
        if ((string)$table === 'vm') {
            foreach ($input as $virtual_machine) {
                if ( ! isset($virtual_machine->group)) {
                    $virtual_machine->group = '';
                }
                if ( ! isset($virtual_machine->guest_system_id)) {
                    $virtual_machine->guest_system_id = 0;
                }
                if ( ! isset($virtual_machine->icon)) {
                    $virtual_machine->icon = '';
                }
                if (empty($virtual_machine->vm_ident) && ! empty($virtual_machine->vm_id)) {
                    $virtual_machine->vm_ident = $virtual_machine->vm_id;
                }
                if ( ! isset($virtual_machine->uuid) OR $virtual_machine->uuid === '') {
                    $virtual_machine->uuid = '';
                } else {
                    $sql = "SELECT `system`.`id` AS `system_id`, `system`.`icon` FROM `system` WHERE LOWER(`uuid`) = LOWER(?) AND `system`.`status` = 'production'";
                    $sql = $this->clean_sql($sql);
                    $data = array("{$virtual_machine->uuid}");
                    $query = $this->db->query($sql, $data);
                    if ($query->num_rows() > 0) {
                        $row = $query->row();
                        $virtual_machine->guest_system_id = $row->system_id;
                        $virtual_machine->icon = $row->icon;
                        $sql = 'UPDATE `system` SET `system`.`vm_server_name` = ?, `system`.`vm_system_id` = ? WHERE `system`.`id` = ?';
                        $sql = $this->clean_sql($sql);
                        $data = array("{$details->hostname}", "{$details->id}", $virtual_machine->guest_system_id);
                        $query = $this->db->query($sql, $data);
                    }
                }
            }
        }

        // get any existing current rows from the database
        $sql = "SELECT *, '' AS updated FROM `{$table}` WHERE current = 'y' AND `{$table}`.`system_id` = ?";
        $sql = $this->clean_sql($sql);
        $data = array($details->id);
        $query = $this->db->query($sql, $data);
        $db_result = $query->result();

        $alert = false;
        if (count($db_result) !== 0) {
            // we have existing items in the database
            // we should raise an alert where required
            $alert = true;
        }
        // get the field list from the table
        $fields = $this->db->list_fields($table);

        // ensure we have a filtered array with only single copies of each in $item
        // Also if we have two of the same item, but one has an ampty attribute, keep the non-empty attribute when combining
        $items = array();
        foreach ($input as $input_item) {
            $matched = 'n';
            // loop through them, building up item array
            foreach ($items as $output_key => $output_item) {
                // the matched count is the number of columns in the match_columns array
                // that have equal values in our input items
                $match_count = 0;
                // loop through our match_columns array
                for ($i = 0; $i < count($match_columns); $i++) {
                    // and test if the variables match
                    if ((string)$input_item->{$match_columns[$i]} === (string)$output_item->{$match_columns[$i]}) {
                        // they match so increment the count
                        $match_count ++;
                    }
                }
                if ($match_count === (count($match_columns))) {
                    // we have all the same matching items - combine them
                    # NOTE - we use isset and !== '' because if we used empty, 0 would falsely match
                    foreach ($fields as $field) {
                        if (( ! isset($output_item->$field) OR $output_item->$field === '') && isset($input_item->$field) && $input_item->$field !== '') {
                            $output_item->$field = (string) $input_item->$field;
                        }
                    }
                    $items[$output_key] = $output_item;
                    $matched = 'y';
                }
            }
            if ($matched !== 'y') {
                // no match, add the input item to the item array
                $items[] = $input_item;
            }
        }

        // for each item from the audit
        foreach ($items as $input_item) {
            // set these flags on a per audit item basis
            $flag = 'insert';
            // compare the audit data against the rows from the DB
            foreach ($db_result as $key => $db_item) {
                // check for a match against the columns in $match_columns
                $match_count = 0;
                for ($i = 0; $i < count($match_columns); $i++) {
                    if ((string)$input_item->{$match_columns[$i]} === (string)$db_item->{$match_columns[$i]} && $db_item->updated !== 'y') {
                        $match_count ++;
                    }
                }
                if ($match_count === (count($match_columns))) {
                    // UPDATE because all supplied columns match
                    $flag = 'update';
                    $sql = '';
                    // if we have an audit value, replace the DB value
                    foreach ($fields as $field) {
                        if (isset($input_item->$field) && $input_item->$field !== '') {
                            $db_item->$field = (string) $input_item->$field;
                        }
                        $sql .= " `{$table}`.`{$field}` = ? , ";
                    }
                    // remove the trailing characters
                    $sql = substr($sql, 0, -2);
                    // set the last_seen column to the same as in $details (system table)
                    $db_item->last_seen = (string)$details->last_seen;
                    // update all values in the table
                    $sql = "UPDATE `{$table}` SET {$sql} WHERE `{$table}`.`id` = '{$db_item->id}'";

                    // make sure no data is in $data
                    unset($data);
                    // populate $data with the values from the database, combined with those of the audit
                    // this is stored in $fields
                    $data = array();
                    foreach ($fields as $field) {
                        // $data[] = (string)$db_item->$field;
                        // removed the above cast to string as it prevents NULL from the database being used
                        $data[] = $db_item->$field;
                    }
                    $sql = $this->clean_sql($sql);
                    $query = $this->db->query($sql, $data);

                    // remove this item from the database array
                    // we will later update the remaining items with current = n
                    // don't deletre it yet as we need to account for multiple items that are the same
                    //    typically in the Windows software listing
                    // unset($db_result[$key]);

                    $db_item->updated = 'y';
                    // set the $id so we can link to this row from graph, etc tables
                    $id = $db_item->id;
                    // stop the loop
                    break;
                } else {
                    // no match - $flag = 'insert' stays unchanged
                }
            }
            // we have looped through the database items
            // INSERT because the $flag is set to insert
            if ($flag === 'insert') {
                $input_item->system_id  = $details->id;
                $input_item->current  = 'y';
                $input_item->first_seen = (string)$details->last_seen;
                $input_item->last_seen  = (string)$details->last_seen;
                $data = array();
                $set_fields = '';
                $set_values = '';
                foreach ($input_item as $key => $value) {
                    foreach ($fields as $field) {
                        if ($key === $field) {
                            $set_fields .= " `{$key}`, ";
                            $set_values .= ' ?, ';
                            $data[] = "{$value}";
                        }
                    }
                }
                $set_fields = substr($set_fields, 0, -2);
                $set_values = substr($set_values, 0, -2);
                $sql = "INSERT INTO `{$table}` ( {$set_fields} ) VALUES ( {$set_values} ) ";
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql, $data);
                $id = $this->db->insert_id();

                // these are our special rules - currently only for netstat
                $special = true;
                if ($table === 'netstat') {
                    if ( ! empty($this->config->config['create_change_log_netstat_well_known']) && $this->config->config['create_change_log_netstat_well_known'] === 'n' && isset($input_item->port) && intval($input_item->port) < 1024) {
                        $special = false;
                    }
                    if ( ! empty($this->config->config['create_change_log_netstat_registered']) && $this->config->config['create_change_log_netstat_registered'] === 'n' && isset($input_item->port) && intval($input_item->port) > 1023 && intval($input_item->port) < 49152) {
                        $special = false;
                    }
                    if ( ! empty($this->config->config['create_change_log_netstat_dynamic']) && $this->config->config['create_change_log_netstat_dynamic'] === 'n' && isset($input_item->port) && intval($input_item->port) > 49151) {
                        $special = false;
                    }
                }

                if ($alert && $create_change_log && $special) {
                    // We have existing items and this is a new item - raise an alert
                    $alert_details = '';
                    foreach ($match_columns as $key => $value) {
                        if ( ! empty($input_item->$value)) {
                            $alert_details .= $value . ' is ' . $input_item->$value . ', ';
                        }
                    }
                    $alert_details = substr($alert_details, 0, -2);
                    $alert_details = "Item added to {$table} - {$alert_details}";
                    $sql = 'INSERT INTO change_log (system_id, db_table, db_row, db_action, details, `timestamp`) VALUES (?, ?, ?, ?, ?, ?)';
                    $sql = $this->clean_sql($sql);
                    $data = array(intval($details->id), "{$table}", intval($id), 'create', "{$alert_details}", "{$details->last_seen}");
                    $query = $this->db->query($sql, $data);
                    // add a count to our chart table
                    $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '{$table}_create', " . intval($details->org_id) . ', 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1';
                    $sql = $this->clean_sql($sql);
                    $query = $this->db->query($sql);
                }
            }
            if ((string)$table === 'partition') {
                // insert an entry into the graph table
                $used_percent = @intval(($input_item->used / $input_item->size) * 100);
                $free_percent = @intval(100 - $used_percent);
                if (empty($details->org_id)) {
                    $details->org_id = 1;
                }
                if ( ! isset($input_item->used) OR $input_item->used === '') {
                    $input_item->used = 0;
                }
                if ( ! isset($input_item->free) OR $input_item->free === '') {
                    $input_item->free = 0;
                }
                $sql = 'INSERT INTO graph VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
                $sql = $this->clean_sql($sql);
                $data = array(intval($details->org_id), intval($details->id), "{$table}", intval($id), "{$table}", intval($used_percent),
                        intval($free_percent), intval($input_item->used), intval($input_item->free), intval($input_item->size), "{$details->last_seen}");
                $query = $this->db->query($sql, $data);
            }
        }

        // remove the duplicated DB_items
        foreach ($db_result as $key => $db_item) {
            if ($db_item->updated) {
                unset($db_result[$key]);
            }
        }

        // Global
        if ( ! empty($this->config->config['delete_noncurrent']) && strtolower($this->config->config['delete_noncurrent']) === 'y') {
            $id_array = array();
            foreach ($db_result as $key => $value) {
                if ( ! empty($value->id)) {
                    $id_array[] = intval($value->id);
                }
                unset($db_result[$key]);
            }
            $in_ids = implode(',', $id_array);
            if ( ! empty($in_ids)) {
                $sql = "DELETE FROM `{$table}` WHERE `id` IN ({$in_ids})";
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql);
            }
            return;
        }
        // Individual table
        if ( ! empty($this->config->config['delete_noncurrent_' . $table]) && strtolower($this->config->config['delete_noncurrent_' . $table]) === 'y') {
            $id_array = array();
            foreach ($db_result as $key => $value) {
                if ( ! empty($value->id)) {
                    $id_array[] = intval($value->id);
                }
                unset($db_result[$key]);
            }
            $in_ids = implode(',', $id_array);
            if ( ! empty($in_ids)) {
                $sql = "DELETE FROM `{$table}` WHERE `id` IN ({$in_ids})";
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql);
            }
            return;
        }

        // we have now inserted or updated all items in the audit set
        // we have also unset any items that were inserted (from the audit set above) from the db set
        // any remaining rows in the db set should have their current flag set to n as they were not found in the audit set
        if (count($db_result) > 0 && $alert && $create_change_log) {
            $log->message = 'Inserting change logs (' . $table . ') for '.@ip_address_from_db($details->ip).' ('.$name.')';
            $log->severity = 7;
            $log->command_status = 'notice';
            discovery_log($log);
        }

        foreach ($db_result as $db_item) {
            $sql = "UPDATE `{$table}` SET current = 'n' WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($db_item->id);
            $query = $this->db->query($sql, $data);

            // these are our special rules - currently only for netstat
            $special = true;
            if ($table === 'netstat') {
                if ( ! empty($this->config->config['create_change_log_netstat_well_known']) && $this->config->config['create_change_log_netstat_well_known'] === 'n' && isset($db_item->port) && intval($db_item->port) < 1024) {
                    $special = false;
                }
                if ( ! empty($this->config->config['create_change_log_netstat_registered']) && $this->config->config['create_change_log_netstat_registered'] === 'n' && isset($db_item->port) && intval($db_item->port) > 1023 && intval($db_item->port < 49152)) {
                    $special = false;
                }
                if ( ! empty($this->config->config['create_change_log_netstat_dynamic']) && $this->config->config['create_change_log_netstat_dynamic'] === 'n' && isset($db_item->port) && intval($db_item->port) > 49151) {
                    $special = false;
                }
            }

            if ($alert && $create_change_log && $special) {
                $alert_details = '';
                foreach ($match_columns as $key => $value) {
                    if ( ! empty($db_item->$value)) {
                        $alert_details .= $value . ' is ' . $db_item->$value . ', ';
                    }
                }
                $alert_details = substr($alert_details, 0, -2);
                $alert_details = "Item removed from {$table} - {$alert_details}";
                $sql = 'INSERT INTO change_log (system_id, db_table, db_row, db_action, details, `timestamp`) VALUES (?, ?, ?, ?, ?, ?)';
                $sql = $this->clean_sql($sql);
                $data = array(intval($details->id), "{$table}", intval($db_item->id), 'delete', "{$alert_details}", "{$details->last_seen}");
                $query = $this->db->query($sql, $data);
                // add a count to our chart table
                $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '{$table}_delete', " . intval($details->org_id) . ', 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1';
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql);
            }
        }
        return;
    }

    /**
     * [get_sql_server_version_string description]
     * @param  [type] $version [description]
     * @return [type]          [description]
     */
    public function get_sql_server_version_string($version)
    {
        // http://sqlserverbuilds.blogspot.com.au/
        // https://support.microsoft.com/en-au/kb/2936603
        // https://buildnumbers.wordpress.com/sqlserver/

        // find the version string, based on the version integer.
        $version_string = '';

        // SQL 2017
        if (mb_strpos($version, '14.00.3008.27') === 0 OR mb_strpos($version, '14.0.3008.27') === 0) {
            $version_string = 'SQL Server 2017 CU 2';
        }
        if (mb_strpos($version, '14.00.3006.16') === 0 OR mb_strpos($version, '14.0.3006.16') === 0) {
            $version_string = 'SQL Server 2017 CU 1';
        }
        if (mb_strpos($version, '14.00.1000.169') === 0 OR mb_strpos($version, '14.0.1000.169') === 0) {
            $version_string = 'SQL Server 2017';
        }
        if (mb_strpos($version, '14.00.900.75') === 0 OR mb_strpos($version, '14.0.900.75') === 0) {
            $version_string = 'SQL Server 2017 RC 2';
        }
        if (mb_strpos($version, '14.00.800.90') === 0 OR mb_strpos($version, '14.0.800.90') === 0) {
            $version_string = 'SQL Server 2017 RC 1';
        }
        if (mb_strpos($version, '14.00.600.250') === 0 OR mb_strpos($version, '14.0.600.250') === 0) {
            $version_string = 'SQL Server 2017 CTP 2.1';
        }
        if (mb_strpos($version, '14.00.500.272') === 0 OR mb_strpos($version, '14.0.500.272') === 0) {
            $version_string = 'SQL Server 2017 CTP 2.0';
        }
        if (mb_strpos($version, '14.00.405.198') === 0 OR mb_strpos($version, '14.0.405.198') === 0) {
            $version_string = 'SQL Server 2017 CTP 1.4';
        }
        if (mb_strpos($version, '14.00.304.138') === 0 OR mb_strpos($version, '14.0.304.138') === 0) {
            $version_string = 'SQL Server 2017 CTP 1.3';
        }
        if (mb_strpos($version, '14.00.200.24') === 0 OR mb_strpos($version, '14.0.200.24') === 0) {
            $version_string = 'SQL Server 2017 CTP 1.2';
        }
        if (mb_strpos($version, '14.00.100.187') === 0 OR mb_strpos($version, '14.0.100.187') === 0) {
            $version_string = 'SQL Server 2017 CTP 1.1';
        }
        if (mb_strpos($version, '14.00.1.246') === 0 OR mb_strpos($version, '14.0.1.246') === 0) {
            $version_string = 'SQL Server 2017 CTP 1';
        }

        // SQL 2016
        if (mb_strpos($version, '13.0') === 0) {
            $version_string = 'SQL Server 2016';
        }
        if (mb_strpos($version, '13.00.4457.0') === 0 OR mb_strpos($version, '13.0.4457.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 CU 6';
        }
        if (mb_strpos($version, '13.00.4451.0') === 0 OR mb_strpos($version, '13.0.4451.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 CU 5';
        }
        if (mb_strpos($version, '13.00.4446.0') === 0 OR mb_strpos($version, '13.0.4446.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 CU 4';
        }
        if (mb_strpos($version, '13.00.4435.0') === 0 OR mb_strpos($version, '13.0.4435.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 CU 3';
        }
        if (mb_strpos($version, '13.00.4422.0') === 0 OR mb_strpos($version, '13.0.4422.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 CU 2';
        }
        if (mb_strpos($version, '13.00.4411.0') === 0 OR mb_strpos($version, '13.0.4411.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 CU 1';
        }
        if (mb_strpos($version, '13.00.4206.0') === 0 OR mb_strpos($version, '13.0.4206.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 GDR Update with Security Update';
        }
        if (mb_strpos($version, '13.00.4202.0') === 0 OR mb_strpos($version, '13.0.4202.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 GDR Update';
        }
        if (mb_strpos($version, '13.00.4199.0') === 0 OR mb_strpos($version, '13.0.4199.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1 Reporting Services Update';
        }
        if (mb_strpos($version, '13.00.4001.0') === 0 OR mb_strpos($version, '13.0.4001.0') === 0) {
            $version_string = 'SQL Server 2016 SP 1';
        }
        if (mb_strpos($version, '13.00.2216.0') === 0 OR mb_strpos($version, '13.0.2216.0') === 0) {
            $version_string = 'SQL Server 2016 CU 9';
        }
        if (mb_strpos($version, '13.00.2213.0') === 0 OR mb_strpos($version, '13.0.2213.0') === 0) {
            $version_string = 'SQL Server 2016 CU 8';
        }
        if (mb_strpos($version, '13.00.2210.0') === 0 OR mb_strpos($version, '13.0.2210.0') === 0) {
            $version_string = 'SQL Server 2016 CU 7';
        }
        if (mb_strpos($version, '13.00.2204.0') === 0 OR mb_strpos($version, '13.0.2204.0') === 0) {
            $version_string = 'SQL Server 2016 CU 6';
        }
        if (mb_strpos($version, '13.00.2197.0') === 0 OR mb_strpos($version, '13.0.2197.0') === 0) {
            $version_string = 'SQL Server 2016 CU 5';
        }
        if (mb_strpos($version, '13.00.2193.0') === 0 OR mb_strpos($version, '13.0.2193.0') === 0) {
            $version_string = 'SQL Server 2016 CU 4';
        }
        if (mb_strpos($version, '13.00.2186.6') === 0 OR mb_strpos($version, '13.0.2186.6') === 0) {
            $version_string = 'SQL Server 2016 CU 3';
        }
        if (mb_strpos($version, '13.00.2164.0') === 0 OR mb_strpos($version, '13.0.2164.0') === 0) {
            $version_string = 'SQL Server 2016 CU 2';
        }
        if (mb_strpos($version, '13.00.2149.0') === 0 OR mb_strpos($version, '13.0.2149.0') === 0) {
            $version_string = 'SQL Server 2016 CU 1';
        }
        if (mb_strpos($version, '13.00.1601.5') === 0 OR mb_strpos($version, '13.0.1601.5') === 0) {
            $version_string = 'SQL Server 2016';
        }
        if (mb_strpos($version, '13.00.1400.361') === 0 OR mb_strpos($version, '13.0.1400.361') === 0) {
            $version_string = 'SQL Server 2016 RC 3';
        }
        if (mb_strpos($version, '13.00.1300.275') === 0 OR mb_strpos($version, '13.0.1300.275') === 0) {
            $version_string = 'SQL Server 2016 RC 2';
        }
        if (mb_strpos($version, '13.0.1200.242') === 0 OR mb_strpos($version, '13.0.1200.242') === 0) {
            $version_string = 'SQL Server 2016 RC 1';
        }
        if (mb_strpos($version, '13.00.1100.288') === 0 OR mb_strpos($version, '13.0.1100.288') === 0) {
            $version_string = 'SQL Server 2016 RC 0';
        }
        if (mb_strpos($version, '13.00.1000.281') === 0 OR mb_strpos($version, '13.0.1000.281') === 0) {
            $version_string = 'SQL Server 2016 CTP 3.3';
        }
        if (mb_strpos($version, '13.00.900.73') === 0 OR mb_strpos($version, '13.00.900.73') === 0) {
            $version_string = 'SQL Server 2016 CTP 3.2';
        }
        if (mb_strpos($version, '13.00.800.111') === 0 OR mb_strpos($version, '13.0.800.111') === 0) {
            $version_string = 'SQL Server 2016 CTP 3.1';
        }
        if (mb_strpos($version, '13.00.700.1395') === 0 OR mb_strpos($version, '13.0.700.1395') === 0) {
            $version_string = 'SQL Server 2016 CTP 3.0';
        }
        if (mb_strpos($version, '13.00.600.65') === 0 OR mb_strpos($version, '13.0.600.65') === 0) {
            $version_string = 'SQL Server 2016 CTP 2.4';
        }
        if (mb_strpos($version, '13.00.500.53') === 0 OR mb_strpos($version, '13.0.500.53') === 0) {
            $version_string = 'SQL Server 2016 CTP 2.3';
        }
        if (mb_strpos($version, '13.00.407.1') === 0 OR mb_strpos($version, '13.0.407.1') === 0) {
            $version_string = 'SQL Server 2016 CTP 2.2';
        }
        if (mb_strpos($version, '13.00.400.91') === 0 OR mb_strpos($version, '13.0.400.91') === 0) {
            $version_string = 'SQL Server 2016 CTP 2.2';
        }
        if (mb_strpos($version, '13.00.300.44') === 0 OR mb_strpos($version, '13.0.300.44') === 0) {
            $version_string = 'SQL Server 2016 CTP 2.1';
        }
        if (mb_strpos($version, '13.0.200.172') === 0 OR mb_strpos($version, '13.0.200.172') === 0) {
            $version_string = 'SQL Server 2016 CTP 2.0';
        }


        // SQL 2014
        if (mb_strpos($version, '12.0') === 0) {
            $version_string = 'SQL Server 2014';
        }
        if (mb_strpos($version, '12.00.5546.0') === 0 OR mb_strpos($version, '12.0.5546.0') === 0) {
            $version_string = 'SQL Server 2014 SP 2 CU 5';
        }
        if (mb_strpos($version, '12.00.5540.0') === 0 OR mb_strpos($version, '12.0.5540.0') === 0) {
            $version_string = 'SQL Server 2014 SP 2 CU 4';
        }
        if (mb_strpos($version, '12.00.5538.0') === 0 OR mb_strpos($version, '12.0.5538.0') === 0) {
            $version_string = 'SQL Server 2014 SP 2 CU 3';
        }
        if (mb_strpos($version, '12.00.5522.0') === 0 OR mb_strpos($version, '12.0.5522.0') === 0) {
            $version_string = 'SQL Server 2014 SP 2 CU 2';
        }
        if (mb_strpos($version, '12.00.5203.0') === 0 OR mb_strpos($version, '12.0.5203.0') === 0) {
            $version_string = 'SQL Server 2014 SP 2 CU 1';
        }
        if (mb_strpos($version, '12.00.5000.0') === 0 OR mb_strpos($version, '12.0.5000.0') === 0) {
            $version_string = 'SQL Server 2014 SP 2';
        }
        if (mb_strpos($version, '12.00.4511.0') === 0 OR mb_strpos($version, '12.0.4511.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 12';
        }
        if (mb_strpos($version, '12.00.4502.0') === 0 OR mb_strpos($version, '12.0.4502.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 11';
        }
        if (mb_strpos($version, '12.00.4491.0') === 0 OR mb_strpos($version, '12.0.4491.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 10';
        }
        if (mb_strpos($version, '12.00.4487.0') === 0 OR mb_strpos($version, '12.0.4487.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 9';
        }
        if (mb_strpos($version, '12.00.4468.0') === 0 OR mb_strpos($version, '12.0.4468.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 8';
        }
        if (mb_strpos($version, '12.00.4459.0') === 0 OR mb_strpos($version, '12.0.4459.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 7';
        }
        if (mb_strpos($version, '12.00.4457.0') === 0 OR mb_strpos($version, '12.0.4457.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 6';
        }
        if (mb_strpos($version, '12.00.4449.0') === 0 OR mb_strpos($version, '12.0.4449.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 6)';
        }
        if (mb_strpos($version, '12.00.4439.1') === 0 OR mb_strpos($version, '12.0.4439.1') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 5';
        }
        if (mb_strpos($version, '12.00.4436.0') === 0 OR mb_strpos($version, '12.0.4436.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 4';
        }
        if (mb_strpos($version, '12.00.4427.24') === 0 OR mb_strpos($version, '12.0.4427.24') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 3';
        }
        if (mb_strpos($version, '12.00.4422.0') === 0 OR mb_strpos($version, '12.0.4422.0') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 2';
        }
        if (mb_strpos($version, '12.00.4416.1') === 0 OR mb_strpos($version, '12.0.4416.1') === 0) {
            $version_string = 'SQL Server 2014 SP 1 CU 1';
        }
        if (mb_strpos($version, '12.00.4100.1') === 0 OR mb_strpos($version, '12.0.4100.1') === 0) {
            $version_string = 'SQL Server 2014 SP 1';
        }
        if (mb_strpos($version, '12.00.4050') === 0 OR mb_strpos($version, '12.0.4050') === 0) {
            $version_string = 'SQL Server 2014 SP 1';
        }
        if (mb_strpos($version, '12.00.2568.0') === 0 OR mb_strpos($version, '12.0.2568.0') === 0) {
            $version_string = 'SQL Server 2014 CU 13';
        }
        if (mb_strpos($version, '12.00.2564.0') === 0 OR mb_strpos($version, '12.0.2564.0') === 0) {
            $version_string = 'SQL Server 2014 CU 12';
        }
        if (mb_strpos($version, '12.00.2560.0') === 0 OR mb_strpos($version, '12.0.2560.0') === 0) {
            $version_string = 'SQL Server 2014 CU 11';
        }
        if (mb_strpos($version, '12.00.2556.4') === 0 OR mb_strpos($version, '12.0.2556.4') === 0) {
            $version_string = 'SQL Server 2014 CU 10';
        }
        if (mb_strpos($version, '12.00.2553.0') === 0 OR mb_strpos($version, '12.0.2553.0') === 0) {
            $version_string = 'SQL Server 2014 CU 9';
        }
        if (mb_strpos($version, '12.00.2546.0') === 0 OR mb_strpos($version, '12.0.2546.0') === 0) {
            $version_string = 'SQL Server 2014 CU 8';
        }
        if (mb_strpos($version, '12.00.2495.0') === 0 OR mb_strpos($version, '12.0.2495.0') === 0) {
            $version_string = 'SQL Server 2014 CU 7';
        }
        if (mb_strpos($version, '12.00.2480.0') === 0 OR mb_strpos($version, '12.0.2480.0') === 0) {
            $version_string = 'SQL Server 2014 CU 6';
        }
        if (mb_strpos($version, '12.00.2456.0') === 0 OR mb_strpos($version, '12.0.2456.0') === 0) {
            $version_string = 'SQL Server 2014 CU 5';
        }
        if (mb_strpos($version, '12.00.2430.0') === 0 OR mb_strpos($version, '12.0.2430.0') === 0) {
            $version_string = 'SQL Server 2014 CU 4';
        }
        if (mb_strpos($version, '12.00.2402.0') === 0 OR mb_strpos($version, '12.0.2402.0') === 0) {
            $version_string = 'SQL Server 2014 CU 3';
        }
        if (mb_strpos($version, '12.00.2370.0') === 0 OR mb_strpos($version, '12.0.2370.0') === 0) {
            $version_string = 'SQL Server 2014 CU 2';
        }
        if (mb_strpos($version, '12.00.2342.0') === 0 OR mb_strpos($version, '12.0.2342.0') === 0) {
            $version_string = 'SQL Server 2014 CU 1';
        }
        if (mb_strpos($version, '12.00.2000') === 0 OR mb_strpos($version, '12.0.2000') === 0) {
            $version_string = 'SQL Server 2014';
        }
        if (mb_strpos($version, '12.00.1524') === 0 OR mb_strpos($version, '12.0.1524') === 0) {
            $version_string = 'SQL Server 2014 CTP 2';
        }
        if (mb_strpos($version, '11.00.9120') === 0 OR mb_strpos($version, '11.0.9120') === 0) {
            $version_string = 'SQL Server 2014 CTP 1';
        }

        // SQL 2012
        if (mb_strpos($version, '11.00.6598.0') === 0 OR mb_strpos($version, '11.0.6598.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 9';
        }
        if (mb_strpos($version, '11.00.6594.0') === 0 OR mb_strpos($version, '11.0.6594.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 8';
        }
        if (mb_strpos($version, '11.00.6579.0') === 0 OR mb_strpos($version, '11.0.6579.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 7';
        }
        if (mb_strpos($version, '11.00.6567.0') === 0 OR mb_strpos($version, '11.0.6567.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 6';
        }
        if (mb_strpos($version, '11.00.6544.0') === 0 OR mb_strpos($version, '11.0.6544.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 5';
        }
        if (mb_strpos($version, '11.00.6540.0') === 0 OR mb_strpos($version, '11.0.6540.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 4';
        }
        if (mb_strpos($version, '11.00.6537.0') === 0 OR mb_strpos($version, '11.0.6537.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 3';
        }
        if (mb_strpos($version, '11.00.6523.0') === 0 OR mb_strpos($version, '11.0.6523.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 2';
        }
        if (mb_strpos($version, '11.00.6518.0') === 0 OR mb_strpos($version, '11.0.6518.0') === 0) {
            $version_string = 'SQL Server 2012 SP 3 CU 1';
        }
        if (mb_strpos($version, '11.00.6020') === 0 OR mb_strpos($version, '11.0.6020') === 0) {
            $version_string = 'SQL Server 2012 SP 3';
        }
        if (mb_strpos($version, '11.00.5058') === 0 OR mb_strpos($version, '11.0.5058') === 0 OR mb_strpos($version, '11.2.5058.0') === 0) {
            $version_string = 'SQL Server 2012 SP 2';
        }
        if (mb_strpos($version, '11.00.3000') === 0 OR mb_strpos($version, '11.0.3000') === 0) {
            $version_string = 'SQL Server 2012 SP 1';
        }
        if (mb_strpos($version, '11.00.2100') === 0 OR mb_strpos($version, '11.0.2100') === 0) {
            $version_string = 'SQL Server 2012';
        }

        // SQL 2008 R2
        if (mb_strpos($version, '10.50.6000') === 0 OR mb_strpos($version, '10.53.6000') === 0) {
            $version_string = 'SQL Server 2008 R2 SP 3';
        }
        if (mb_strpos($version, '10.50.4000') === 0 OR mb_strpos($version, '10.52.4000') === 0) {
            $version_string = 'SQL Server 2008 R2 SP 2';
        }
        if (mb_strpos($version, '10.50.2500') === 0 OR mb_strpos($version, '10.51.2500') === 0) {
            $version_string = 'SQL Server 2008 R2 SP 1';
        }
        if (mb_strpos($version, '10.50.1600') === 0) {
            $version_string = 'SQL Server 2008 R2';
        }

        // SQL 2008
        if (mb_strpos($version, '10.00.6000') === 0 OR mb_strpos($version, '10.0.6000') === 0 OR mb_strpos($version, '10.4.6000') === 0) {
            $version_string = 'SQL Server 2008 SP 4';
        }
        if (mb_strpos($version, '10.00.5500') === 0 OR mb_strpos($version, '10.0.5500') === 0 OR mb_strpos($version, '10.3.5500') === 0) {
            $version_string = 'SQL Server 2008 SP 3';
        }
        if (mb_strpos($version, '10.00.4000') === 0 OR mb_strpos($version, '10.0.4000') === 0 OR mb_strpos($version, '10.2.4000') === 0) {
            $version_string = 'SQL Server 2008 SP 2';
        }
        if (mb_strpos($version, '10.00.2531') === 0 OR mb_strpos($version, '10.0.2531') === 0 OR mb_strpos($version, '10.1.2531') === 0) {
            $version_string = 'SQL Server 2008 SP 1';
        }
        if (mb_strpos($version, '10.00.1600') === 0 OR mb_strpos($version, '10.0.1600') === 0) {
            $version_string = 'SQL Server 2008';
        }

        // SQL 2005
        if (mb_strpos($version, '9.00.5000') === 0 OR mb_strpos($version, '9.0.5000') === 0) {
            $version_string = 'SQL Server 2005 SP 4';
        }
        if (mb_strpos($version, '9.00.4035') === 0 OR mb_strpos($version, '9.0.4035') === 0) {
            $version_string = 'SQL Server 2005 SP 3';
        }
        if (mb_strpos($version, '9.00.3042') === 0 OR mb_strpos($version, '9.0.3042') === 0) {
            $version_string = 'SQL Server 2005 SP 2';
        }
        if (mb_strpos($version, '9.00.2047') === 0 OR mb_strpos($version, '9.0.2047') === 0) {
            $version_string = 'SQL Server 2005 SP 1';
        }
        if (mb_strpos($version, '9.00.1399') === 0 OR mb_strpos($version, '9.0.1399') === 0) {
            $version_string = 'SQL Server 2005';
        }

        // SQL 2000
        if (mb_strpos($version, '8.00.2039') === 0 OR mb_strpos($version, '8.00.2305') === 0) {
            $version_string = 'SQL Server 2000 SP 4';
        }
        if (mb_strpos($version, '8.00.761') === 0) {
            $version_string = 'SQL Server 2000 SP 3a';
        }
        if (mb_strpos($version, '8.00.760') === 0) {
            $version_string = 'SQL Server 2000 SP 3';
        }
        if (mb_strpos($version, '8.00.534') === 0 OR mb_strpos($version, '8.00.532') === 0) {
            $version_string = 'SQL Server 2000 SP 2';
        }
        if (mb_strpos($version, '8.00.384') === 0) {
            $version_string = 'SQL Server 2000 SP 1';
        }
        if (mb_strpos($version, '8.00.194') === 0) {
            $version_string = 'SQL Server 2000';
        }

        // SQL 7
        if (mb_strpos($version, '7.00.1063') === 0 OR mb_strpos($version, '7.00.1152') === 0) {
            $version_string = 'SQL Server 7 SP 4';
        }
        if (mb_strpos($version, '7.00.961') === 0) {
            $version_string = 'SQL Server 7 SP 3';
        }
        if (mb_strpos($version, '7.00.842') === 0) {
            $version_string = 'SQL Server 7 SP 2';
        }
        if (mb_strpos($version, '7.00.699') === 0) {
            $version_string = 'SQL Server 7 SP 1';
        }
        if (mb_strpos($version, '7.00.623') === 0) {
            $version_string = 'SQL Server 7';
        }
        return ($version_string);
    }

    /**
     * Set and return the device's initial IP address
     * @param int    $id    system.id
     * @param string $force Force set the IP
     * @return string       The set IP
     */
    public function set_initial_address($id, $force = 'n')
    {

        // new logic
        // only set an ip address if we do not already have an existing in system table
        // no unset ('', '0.0.0.0', '000.000.000.000') addresses
        // no localhost ('127.0.0.1', '127.000.000.001') addresses
        // no 169.254.x.x addresses (RFC 3927)
        // prefer non-DHCP address (ORDER BY network.dhcp_enabled ASC)
        // secondary prefer private to public ip address (pubpriv)

        $ip_address = '';
        // get the stored attribute for ip
        $sql = 'SELECT `ip`, `last_seen` FROM `system` WHERE `system`.`id` = ?';
        $sql = $this->clean_sql($sql);
        $data = array("{$id}");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ($force === 'y' OR (isset($result) && is_array($result) && ($result[0]->ip === '' OR $result[0]->ip === '000.000.000.000'  OR $result[0]->ip === '0.0.0.0'))) {
            // we do not already have an ip address - attempt to set one
            $sql = "SELECT network.system_id, network.dhcp_enabled, ip.ip, if( (ip.ip >= '010.000.000.000' AND ip.ip <= '010.255.255.255') OR
                        (ip.ip >= '172.016.000.000' AND ip.ip <= '172.031.255.255') OR
                        (ip.ip >= '192.168.000.000' AND ip.ip <= '192.168.255.255'), 'prv', 'pub') as pubpriv
                    FROM network LEFT JOIN ip ON
                        (network.system_id = ip.system_id AND
                        ip.mac = network.mac)
                    WHERE network.system_id = ? AND
                        network.ip_enabled != 'false' AND
                        ip.ip != '' AND
                        ip.ip != '0.0.0.0' AND
                        ip.ip != '000.000.000.000' AND
                        ip.ip != '127.0.0.1' AND
                        ip.ip != '127.000.000.001' AND
                        ip.ip != '127.0.1.1' AND
                        ip.ip != '127.000.001.001' AND
                        ip.ip NOT LIKE '169.254.%' AND
                        ip.current = 'y' AND
                        ip.version = '4'
                    ORDER BY network.dhcp_enabled ASC,
                        pubpriv ASC,
                        ip.ip DESC
                    LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$id}");
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (isset($result[0]->ip) && $result[0]->ip !== '') {
                $ip_address = $result[0]->ip;
                $sql = 'UPDATE system SET ip = ? WHERE id = ?';
                $sql = $this->clean_sql($sql);
                $data = array($result[0]->ip, "{$id}");
                $query = $this->db->query($sql, $data);
            }
        }
        return $ip_address;
    }

    /**
     * [update_missing_interfaces description]
     * @param  [type] $system_id [description]
     * @return [type]            [description]
     */
    public function update_missing_interfaces($system_id)
    {
        $sql = "SELECT ip.id, network.net_index FROM network LEFT JOIN ip ON (network.system_id = ip.system_id AND network.mac = ip.mac) WHERE network.system_id = ? AND ip.net_index = '' AND network.net_index != ''";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $line) {
            $sql = 'UPDATE ip SET net_index = ? WHERE id = ?';
            $data = array("{$line->net_index}", "{$line->id}");
            $query = $this->db->query($sql, $data);
        }
    }

    /**
     * [graph description]
     * @param  [type]  $system_id  [description]
     * @param  [type]  $linked_row [description]
     * @param  string  $type       [description]
     * @param  integer $days       [description]
     * @return [type]              [description]
     */
    public function graph($system_id, $linked_row, $type = 'partition', $days = 20)
    {
        if ($system_id === '' OR ! is_numeric($system_id)) {
            // TODO - wrtie out a log entry
            return;
        }
        if ($linked_row === '' OR ! is_numeric($linked_row)) {
            return;
        }
        if ( ! is_numeric($days)) {
            return;
        }
        $sql = "SELECT id, used_percent, DATE(`timestamp`) AS `timestamp` FROM `graph` WHERE system_id = ? AND linked_row = ? AND type = ? AND timestamp > adddate(current_date(), INTERVAL -{$days} day) GROUP BY DAY(timestamp) ORDER BY timestamp";
        $data = array($system_id, $linked_row, "{$type}");
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'graph');
        return $result;
    }

    /**
     * [partition_use_report description]
     * @param  [type] $group_id [description]
     * @param  [type] $user_id  [description]
     * @param  string $days     [description]
     * @return [type]           [description]
     */
    public function partition_use_report($group_id, $user_id, $days = '120')
    {
        $user_id = intval($user_id);
        $resultset = array();
        $sql = "SELECT DISTINCT(`system`.`id`), `system`.`name`, `status`, `function`, `environment`, `system`.`description`, `partition`.`id` as partition_id, `partition`.`mount_point`, `partition`.`name` as partition_name FROM `system`, `oa_group_sys`, `partition` WHERE system.id = oa_group_sys.system_id AND partition.current = 'y' AND system.id = partition.system_id AND partition.mount_point > '' AND oa_group_sys.group_id = ? AND partition.mount_point != '' GROUP BY system.name, partition.mount_point ORDER BY system.name, partition.mount_point ";
        $sql = $this->clean_sql($sql);
        $data = array($group_id);
        $query = $this->db->query($sql, $data);
        foreach ($query->result() as $system) {
            $partition_sql = "SELECT id, round(AVG(used),0) AS used, size as total, used_percent as percent_used, free_percent as percent_free, DATE(`timestamp`) AS `timestamp` FROM `graph` WHERE system_id = ? AND linked_row = ? AND linked_table = 'partition' GROUP BY DATE(`timestamp`) ORDER BY `timestamp`";
            $partition_sql = $this->clean_sql($partition_sql);
            $data = array($system->id, $system->partition_id);
            $partition_query = $this->db->query($partition_sql, $data);
            $count = 0;
            $current_date = '';
            $prev_date = '';
            $current_used = 0;
            $prev_used = 0;
            $days_between = 0;
            $used_calc = 0;
            $used_diff = 0;
            $total_days = 0;
            $total_use = 0;
            $temp_partition = $partition_query->result();
            if (count($temp_partition) > 0) {
                foreach ($temp_partition as $partition) {
                    $count++;
                    if ($count > 1) {
                        $current_date = strtotime($partition->timestamp);
                        $prev_date = strtotime($prev_date);
                        $days_between = round((($current_date - $prev_date) / 84600), 0);
                        $current_used = $partition->used;
                        if ($days_between < 2) {
                            $days_between = 1;
                        }
                        $used_calc = ($current_used - $prev_used);
                        if (($used_calc < 1) && ($used_calc > -500)) {
                            $used_calc = abs($used_calc);
                            $used_diff = round(($used_calc / $days_between), 2);
                            $used_diff = $used_diff - (2* $used_diff);
                        }
                        if ($used_calc > 0) {
                            $used_diff = round(($used_calc / $days_between), 2);
                        }
                        if ($used_calc < -499) {
                            $used_diff = 0;
                            $days_between = 0;
                        }
                    }
                    $partition_id = $partition->id;
                    $prev_used = $partition->used;
                    $prev_date = $partition->timestamp;
                    $total_days += $days_between;
                    $total_use += $used_diff;
                    $total = $partition->total;
                    $partition_used_space = $partition->used;
                }
                if ($total_use < 1) {
                    $total_use = 1;
                }
                if ($total_days < 1) {
                    $total_days = 1;
                }
                if ($total < 1) {
                    $total = 1;
                }
                if ($partition_used_space < 1) {
                    $partition_used_space = 1;
                }
                $my_calc = ceil($total_use / $total_days);
                if ($my_calc < 1) {
                    $my_calc = 1;
                }
                $days_until_full = round((($total - $partition_used_space) / $my_calc), 2, 0);
                if (intval($days_until_full) <= intval($days)) {
                    $returned_row['id'] = $system->id;
                    $returned_row['name'] = $system->name;
                    $returned_row['partition_name'] = $system->partition_name;
                    $returned_row['partition_mount_point'] = $system->mount_point;
                    $returned_row['environment'] = $system->environment;
                    $returned_row['description'] = $system->description;
                    $returned_row['function'] = $system->function;
                    $returned_row['partition_id'] = $partition_id;
                    $returned_row['partition_size'] = $total;
                    $returned_row['partition_used_space'] = $partition_used_space;
                    $returned_row['partition_free_space'] = ($total - $partition_used_space);
                    // $returned_row['days_until_used'] = round(($total - $partition_used_space) / round(($total_use / $total_days), 2),0);
                    $returned_row['days_until_used'] = $days_until_full;
                    if ($returned_row['days_until_used'] === 0) {
                        $returned_row['days_until_used'] = 'unknown';
                    }
                    $returned_row['change_per_day'] = round(($total_use / $total_days), 2);
                    $resultset[] = $returned_row;
                }
            }
        }

        return ($resultset);
    }

    /**
     * [nmap_ip description]
     * @param  [type] $parameters [description]
     * @return [type]             [description]
     */
    public function nmap_ip($parameters)
    {
        if (empty($parameters) OR empty($parameters->device) OR empty($parameters->device->id) OR empty($parameters->ip->ip)) {
            $log = new stdClass();
            $log->severity = 4;
            $log->message = 'Function nmap_ip called without parameters object.';
            $log->status = 'fail';
            stdlog($log);
            return false;
        }
        if ( ! empty($parameters->log)) {
            $log = $parameters->log;
        } else {
            $log = new stdClass();
        }
        if ( ! empty($parameters->discovery_id)) {
            $log->discovery_id = $parameters->discovery_id;
        }
        $log->severity = 6;
        $log->ip = $parameters->ip->ip;
        $log->file = 'm_devices_components';
        $log->function = 'nmap_ip';
        $log->command_status = 'notice';
        $log->message = '';

        $device = $parameters->device;
        $ip = $parameters->ip;

        $this->load->helper('log');

        $ip->name = $ip->ip;
        $ip->first_seen = $device->first_seen;
        $ip->last_seen = $device->last_seen;
        $ip->system_id = $device->id;
        $ip->current = 'y';

        // We're talking to the DB, so ensure IP is of the correct format
        $ip->ip = ip_address_to_db($ip->ip);
        if (empty($ip->mac)) {
            $ip->mac = '';
        }
        if (empty($ip->net_index)) {
            $ip->net_index = '';
        }
        if (empty($ip->netmask)) {
            $ip->netmask = '';
        }
        if (empty($ip->cidr)) {
            $ip->cidr = '';
        }
        if (empty($ip->version)) {
            $ip->netmask = 4;
        }
        if (empty($ip->network)) {
            $ip->network = '';
        }

        // get any existing IPs
        $sql = "SELECT * FROM `ip` WHERE `ip`.`ip` = ? AND `ip`.`system_id` = ? AND `ip`.`current` = 'y'";
        $sql = $this->clean_sql($sql);
        $data = array($ip->ip, $device->id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        $update = false;
        // Search for any matching entries and combine
        if ( ! empty($result)) {
            foreach ($result as $row) {
                if (($ip->mac === $row->mac) OR ($ip->mac !== '' && $row->mac === '') OR ($ip->mac === '' && $row->mac !== '')) {
                    $update = true;
                    foreach ($ip as $key => $value) {
                        if (empty($ip->$key)) {
                            $ip->$key = $row->$key;
                        }
                    }
                    break;
                }
            }
        }

        if ($update) {
            // UPDATE
            $log->message = 'Updating ip with ID ' . $row->id;
            discovery_log($log);
            $sql = 'UPDATE `ip` SET `last_seen` = ?, `name` = ?, `mac` = ?, `net_index` = ?, `netmask` = ?, `cidr` = ?, `version` = ?, `network` = ? WHERE id = ?';
            $sql = $this->clean_sql($sql);
            $data = array($device->last_seen, $ip->name, $ip->mac, $ip->net_index, $ip->netmask, $ip->cidr, $ip->version, $ip->network, $row->id);
            $query = $this->db->query($sql, $data);
        } else {
            // INSERT
            $log->message = 'Inserting ip ' . ip_address_from_db($ip->ip);
            discovery_log($log);
            $set_fields = '';
            $set_values = '';
            $data = array();
            $fields = $this->db->list_fields('ip');
            foreach ($fields as $field) {
                if (isset($ip->{$field})) {
                    $set_fields .= "`{$field}`, ";
                    $set_values .= ' ?, ';
                    $data[] = $ip->{$field};
                }
            }
            $set_fields = substr($set_fields, 0, -2);
            $set_values = substr($set_values, 0, -2);
            $sql = "INSERT INTO `ip` ( {$set_fields} ) VALUES ( {$set_values} ) ";
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
        }
    }

    /**
     * [create_dns_entries description]
     * @param  integer $id [description]
     * @return [type]      [description]
     */
    public function create_dns_entries($id = 0)
    {
        if (empty($id)) {
            return array();
        }
        $sql = "SELECT DISTINCT `ip`.`ip` FROM `ip` LEFT JOIN `system` ON (ip.system_id = system.id AND ip.current = 'y') WHERE system.id = ? AND ip.version = '4'";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $dns_entries = array();
        foreach ($result as $row) {
            $ip = $this->ip_address_from_db($row->ip);
            if (isset($ip) && $ip !== '0.0.0.0' && $ip !== '000.000.000.000' && $ip !== '' && $ip !== '127.0.0.1' && filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                $dns_entry = new stdClass();
                $dns_entry->ip = $ip;
                $dns_entry->fqdn = '';
                $dns_entry->name = '';
                $dns_entry->fqdn = gethostbyaddr($ip);
                if ($dns_entry->fqdn === $dns_entry->ip) {
                    $dns_entry->fqdn = '';
                } else {
                    if (strrpos($dns_entry->fqdn, '.')) {
                        $temp = explode('.', $dns_entry->fqdn);
                        $dns_entry->name = $temp[0];
                        unset($temp);
                    } else {
                        $dns_entry->name = $dns_entry->fqdn;
                        $dns_entry->fqdn = '';
                    }
                }
                $dns_entries[] = $dns_entry;
                unset($dns_entry);
            }
        }
        foreach ($dns_entries as $dns_entry) {
            if ($dns_entry->name !== '') {
                $ip = gethostbyname($dns_entry->name);
                if ($ip !== $dns_entry->ip && $ip !== $dns_entry->name) {
                    foreach ($dns_entries as $dns_loop) {
                        if ($dns_loop->ip === $ip) {
                            $ip = '';
                        }
                        unset($dns_loop);
                    }
                    if ($ip !== '') {
                        $my_new = new stdClass();
                        $my_new->ip = $ip;
                        $my_new->name = $dns_entry->name;
                        $my_new->fqdn = $dns_entry->fqdn;
                        $dns_entries[] = $my_new;
                    }
                }
            }
        }
        foreach ($dns_entries as $key => $dns_entry) {
            if ( ! isset($dns_entry->name) OR $dns_entry->name === '') {
                unset($dns_entries[$key]);
            }
        }
        $dns_entries = array_values($dns_entries);
        return $dns_entries;
    }


    /**
    * Pass in a resultset and have the integer columns return as INT types, not strings
    * Columns named id, free, size, speed, total or used will be converted to integer types.
    * Columns names ending in _id, _count, _percent or _Size will be converted to integer types
    *
    * @param   array $result the result of a query, an array of objects
    * @access  public
    * @return  array an array of objects with the integer columns set as int types
    */
    public function from_db($result)
    {
        unset($item);
        foreach ($result as &$item) {
            foreach ($item as $key => $value) {
                if ($key === 'id' OR $key === 'free' OR $key === 'size' OR $key === 'speed' OR $key === 'total' OR $key === 'used' OR
                strrpos($key, '_id') === strlen($key)-3 OR strrpos($key, '_count') === strlen($key)-6 OR
                strrpos($key, '_percent') === strlen($key)-8 OR strrpos($key, '_size') === strlen($key)-5 ) {
                    $item->$key = (int) intval($value);
                }
            }
        }
        unset($item);
        return($result);
    }
}
// End of file m_devices_components.php
// Location: ./models/m_devices_components.php
