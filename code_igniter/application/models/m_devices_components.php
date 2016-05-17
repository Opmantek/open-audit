<?php
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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_devices_components extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read($id = 0, $current = 'y', $table = '', $filter = '', $properties = '*')
    {
        if ($table == '') {
            // we require a DB table to read from
            return;
        }
        if ($id == 0) {
            // we require a system id
            return;
        }
        $filter = '';
        // if (stripos($filter, 'current = \'full') !== false or stripos($filter, 'current = "full') !== false) {
        //     $current = 'full';
        // }

        // if (stripos($filter, 'current = \'delta') !== false or stripos($filter, 'current = "delta') !== false) {
        //     $current = 'delta';
        // }

        if ($current == 'delta' or $current == 'full') {
            $sql = "SELECT first_seen FROM `$table` WHERE system_id = ? ORDER BY first_seen LIMIT 1";
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
            if ($field == 'system_id') {
                $found_id = true;
            }
            if ($field == 'current') {
                $found_current = true;
            }
        }
        $sql = '';
        // if ($filter != '' and strtolower(substr(trim($filter), 0, 3)) != 'and') {
        //     $filter = 'AND ' . $filter;
        // }
        if ($found_id) {
            if ($found_current) {
                if ($current == 'y') {
                    $sql = "SELECT $properties FROM `$table` WHERE system_id = ? AND current = 'y' $filter";
                    $data = array($id);
                }
                if ($current == 'n') {
                    $sql = "SELECT $properties FROM `$table` WHERE system_id = ? AND current = 'n' $filter";
                    $data = array($id);
                }
                if ($current == '' or $current == 'all') {
                    $sql = "SELECT $properties FROM `$table` WHERE system_id = ? $filter";
                    $data = array($id);
                }
                if ($current == 'delta') {
                    if ($first_seen != '') {
                        $sql = "SELECT $properties, IF(($table.first_seen = ?), 'y', 'n') as original_install FROM `$table` WHERE system_id = ? and (current = 'y' or first_seen = ?)";
                        $data = array("$first_seen", $id, "$first_seen");
                    }
                }
                if ($current == 'full') {
                    if ($first_seen != '') {
                        $sql = "SELECT $properties, IF(($table.first_seen = ?), 'y', 'n') as original_install FROM `$table` WHERE system_id = ?";
                        $data = array("$first_seen", $id);
                    }
                }
            } else {
                $sql = "SELECT $properties FROM `$table` WHERE system_id = ? $filter";
                $data = array($id);
            }
        }
        
        if ($sql != '') {
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            $result = $this->from_db($result);
            if ($properties != '*' and !stripos($properties, ',') and $table == 'system') {
                # the request is for a single value from the system table - return only this value (as a string)
                $temp_result = $result[0]->$properties;
                unset($result);
                $result = (string)$temp_result;
                unset($temp_result);
            }
            return($result);
        } else {
            return;
        }

    }

    public function match_columns($table)
    {
        if ($table == 'bios') {
                $match_columns = array('description', 'manufacturer', 'serial', 'smversion', 'version');
        }
        if ($table == 'disk') {
                $match_columns = array('model', 'serial', 'hard_drive_index', 'size');
        }
        if ($table == 'dns') {
                $match_columns = array('ip', 'name', 'fqdn');
        }
        if ($table == 'log') {
                $match_columns = array('name', 'file_name', 'overwrite');
        }
        if ($table == 'memory') {
                $match_columns = array('bank', 'size', 'serial');
        }
        if ($table == 'module') {
                $match_columns = array('description', 'module_index', 'serial');
        }
        if ($table == 'monitor') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table == 'motherboard') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table == 'netstat') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table == 'network') {
                $match_columns = array('mac');
        }
        if ($table == 'ip') {
                $match_columns = array('ip', 'mac', 'netmask');
        }
        if ($table == 'optical') {
                $match_columns = array('model', 'mount_point');
        }
        if ($table == 'pagefile') {
                $match_columns = array('name', 'initial_size', 'max_size');
        }
        if ($table == 'partition') {
                $match_columns = array('name', 'hard_drive_index', 'mount_point', 'size');
        }
        if ($table == 'print_queue') {
                $match_columns = array('device');
        }
        if ($table == 'processor') {
                $match_columns = array('description');
        }
        if ($table == 'route') {
                $match_columns = array('destination', 'next_hop');
        }
        if ($table == 'san') {
                $match_columns = array('serial');
        }
        if ($table == 'scsi') {
                $match_columns = array('model', 'manufacturer', 'device');
        }
        if ($table == 'server') {
                $match_columns = array('name', 'type', 'full_name', 'version');
        }
        if ($table == 'server_item') {
                $match_columns = array('name', 'type', 'instance');
        }
        if ($table == 'service') {
                $match_columns = array('description', 'name', 'executable');
        }
        if ($table == 'share') {
                $match_columns = array('name', 'path');
        }
        if ($table == 'software') {
                $match_columns = array('name', 'version');
        }
        if ($table == 'software_key') {
                $match_columns = array('name', 'string', 'rel', 'edition');
        }
        if ($table == 'sound') {
                $match_columns = array('model', 'manufacturer');
        }
        if ($table == 'task') {
                $match_columns = array('name', 'task');
        }
        if ($table == 'user') {
                $match_columns = array('name', 'sid');
        }
        if ($table == 'user_group') {
                $match_columns = array('name', 'sid');
        }
        if ($table == 'variable') {
                $match_columns = array('program', 'name', 'value');
        }
        if ($table == 'video') {
                $match_columns = array('model');
        }
        if ($table == 'vm') {
                $match_columns = array('name', 'uuid');
        }
        if ($table == 'windows') {
                $match_columns = array('service_pack', 'build_number');
        }
        return($match_columns);
    }

    public function process_component($table = '', $details, $input, $display = 'n', $match_columns = array())
    {
        $create_alerts = $this->m_oa_config->get_config_item('discovery_create_alerts');

        $log_details = new stdClass();
        $log_details->message = '';
        $log_details->severity = 7;
        $log_details->file = 'system';
        if ($display != 'y') {
            $display = 'n';
        }
        $log_details->display = $display;
        unset($display);

        // ensure we have a valid table name
        if (!$this->db->table_exists($table)) {
            $log_details->message = 'Table supplied does not exist (' . $table . ') for '.ip_address_from_db($details->man_ip_address).' ('.$details->hostname.')';
            $log_details->severity = 5;
            stdlog($log_details);
            return;
        }

        if (!$input) {
            $log_details->message = 'No input supplied (' . $table . ') for '.ip_address_from_db($details->man_ip_address).' ('.$details->hostname.')';
            $log_details->severity = 5;
            stdlog($log_details);
            return;
        }

        if (!isset($match_columns) or count($match_columns) == 0) {
            $match_columns = $this->match_columns($table);
        }

        if ($table == '' or count($match_columns) == 0 or !isset($details->system_id)) {
            if ($table == '') {
                $log_details->message = 'No table supplied for '.@ip_address_from_db($details->man_ip_address).' ('.@$details->hostname.')';
                $message = "No table name supplied - failed";
            }
            if (count($match_columns) == 0) {
                $log_details->message = 'No columns to match supplied for '.@ip_address_from_db($details->man_ip_address).' ('.@$details->hostname.')';
                $message = "$table - No columns to match supplied - failed";
            }
            # if (!isset($details->id)) { # this will be changed when we convert the system table
            if (!isset($details->system_id)) {
                $log_details->message = 'No system_id supplied for '.@ip_address_from_db($details->man_ip_address).' ('.@$details->hostname.')';
                $message = "$table - No system_id supplied - failed";
            }
            $this->m_audit_log->update('debug', $message, $details->system_id, $details->last_seen);
            unset($message);
            $log_details->severity = 5;
            stdlog($log_details);
            return;
        } else {
            $this->m_audit_log->update('debug', "$table - start", $details->system_id, $details->last_seen);
            $log_details->message = 'Processing component (' . $table . ') start for '.@ip_address_from_db($details->man_ip_address).' ('.$details->hostname.')';
            $log_details->severity = 7;
            stdlog($log_details);
        }

        // make sure we have an entry for each match column, even if it's empty
        foreach ($match_columns as $match_column) {
            for ($i=0; $i<count($input->item); $i++) {
                if (isset($input->item[$i]) and !isset($input->item[$i]->$match_column)) {
                    $input->item[$i]->$match_column = '';
                }
            }
        }

        ### IP ADDRESS ###
        if ((string)$table == 'ip') {
            for ($i=0; $i<count($input->item); $i++) {
                # some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
                $input->item[$i]->mac = strtolower($input->item[$i]->mac);
                # As at 1.5.6 we pass an additional attribute called 'type' for bonded adapters
                # We use this to test and not pad the MAC address if set
                if (!isset($input->item[$i]->type)) {
                    $input->item[$i]->type = '';
                }
                # calculate the network this address is on (assuming we have an ip AND subnet)
                if (isset($input->item[$i]->ip) and $input->item[$i]->ip != '' and isset($input->item[$i]->netmask) and $input->item[$i]->netmask != '' and $input->item[$i]->netmask != '0.0.0.0') {
                    $temp_long = ip2long($input->item[$i]->netmask);
                    $temp_base = ip2long('255.255.255.255');
                    $temp_subnet = 32-log(($temp_long ^ $temp_base)+1,2);
                    $net = network_details($input->item[$i]->ip.'/'.$temp_subnet);
                    if (isset($net->network) and $net->network != '') {
                        #$input->item[$i]->network = $net->network.' / '.$temp_subnet;
                        $input->item[$i]->network = $net->network.'/'.$temp_subnet;
                    } else {
                        $input->item[$i]->network = '';
                    }
                    if (isset($net->network_slash) and $net->network_slash != '') {
                        $input->item[$i]->cidr = $net->network_slash;
                    } else {
                        $input->item[$i]->cidr = '';
                    }
                    unset($temp_long);
                    unset($temp_base);
                    unset($temp_subnet);
                    unset($net);
                }
                if ($input->item[$i]->type != 'bonded') {
                    if (isset($input->item[$i]->mac) and $input->item[$i]->mac != '') {
                        $mymac = explode(":", $input->item[$i]->mac);
                        for ($j = 0; $j<count($mymac); $j++) {
                            $mymac[$j] = mb_substr("00".$mymac[$j], -2);
                        }
                        if (count($mymac) > 0) {
                            $input->item[$i]->mac = implode(":", $mymac);
                        }
                    }
                }
                if (!isset($input->item[$i]->version) or $input->item[$i]->version != '6') {
                    $input->item[$i]->version = 4;
                }
                # ensure we have the correctly padded ip v4 address
                if ($input->item[$i]->version == 4) {
                    $input->item[$i]->ip = ip_address_to_db($input->item[$i]->ip);
                }
                if (!isset($input->item[$i]->ip) or $input->item[$i]->ip == '') {
                    unset($input->item[$i]);
                }
                # ensure we add the network to the networks list
                if (!empty($input->item[$i]->network)) {
                    $this->m_oa_config->update_blessed($input->item[$i]->network);
                }
            }
            if ($details->type == 'computer' and $details->os_group == 'VMware') {
                # TODO - fix the below somewhow ?!??
                # the issue is that ESXi provides different values for network cards from the command line and from SNMP
                $sql = "DELETE FROM `ip` WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->system_id);
                $query = $this->db->query($sql, $data);
                # set the below so we don't generate alerts for this
                $create_alerts = 'n';
            }
        }

        ### NETSTAT ###
        if ((string)$table == 'netstat') {
            $input = $this->format_netstat_data($input, $details);
        }

        ### NETWORK ###
        # depending on the device type we need to alter our matching columns for the network card
        if ((string)$table == 'network') {
            if ($details->type == 'computer' and $details->os_group != 'VMware') {
                # we already match only on MAC Address
            } elseif ($details->type == 'computer' and $details->os_group == 'VMware') {
                # add index and connection id to the list to be matched
                $match_columns[] = 'net_index';
                $match_columns[] = 'connection';
                # TODO - fix the below somewhow ?!??
                # the issue is that ESXi provides different values for network cards from the command line and from SNMP
                $sql = "DELETE FROM `network` WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->system_id);
                $query = $this->db->query($sql, $data);
                # set the below so we don't generate alerts for this
                $create_alerts = 'n';
            } else {
                # just match the index
                $match_columns[] = 'net_index';
            }

            # some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
            for ($i=0; $i<count($input->item); $i++) {
                if (isset($input->item[$i]->mac)) {
                    $input->item[$i]->mac = strtolower($input->item[$i]->mac);
                } else {
                    $input->item[$i]->mac = '';
                }
            }
        }

        ### PARTITION ###
        # AIX needs to also match on partition.name
        if ((string)$table == 'partition' and strtolower($details->os_family) == 'ibm aix') {
            $match_columns[] = 'name';
        }

        ### PROCESSOR ###
        if ((string)$table == 'processor') {
            $input->item[0]->description = str_ireplace('(R)', '', $input->item[0]->description);
            $input->item[0]->description = str_ireplace('(TM)', '', $input->item[0]->description);
            $input->item[0]->description = str_ireplace('  ', ' ', $input->item[0]->description);
            $input->item[0]->manufacturer = str_ireplace('AuthenticAMD', 'AMD', $input->item[0]->manufacturer);
            $input->item[0]->manufacturer = str_ireplace('GenuineIntel', 'Intel', $input->item[0]->manufacturer);
        }

        ### SERVER ###
        if ((string)$table == 'server') {
            for ($i=0; $i<count($input->item); $i++) {
                if (isset($input->item[$i]->version) and $input->item[$i]->version != '' and $input->item[$i]->type == 'database') {
                    $input->item[$i]->full_name = (string)$this->get_sql_server_version_string($input->item[$i]->version);
                }
            }
        }

        ### SOFTWARE ###
        # need to pad the version
        if ((string)$table == 'software') {
            for ($i=0; $i<count($input->item); $i++) {
                if (isset($input->item[$i]->version) and $input->item[$i]->version != '') {
                    $pieces = array();
                    $pieces = preg_split("/[\s,\+\-\_\.\\\+\~]+/", $input->item[$i]->version);
                    $input->item[$i]->version_padded = (string)'';
                    foreach ($pieces as $piece) {
                        if (strlen($piece) > 10 ) {
                            $input->item[$i]->version_padded .= $piece;
                        } else {
                            $input->item[$i]->version_padded .= mb_substr("00000000000000000000".$piece, -10);
                        }
                    }
                } else {
                    $input->item[$i]->version_padded = '';
                }
            }
        }

        ### VIRTUAL MACHINE ###
        if ((string)$table == 'vm') {
            foreach ($input->item as $vm) {
                if (!isset($vm->group)) {
                    $vm->group = '';
                }
                if (!isset($vm->guest_system_id)) {
                    $vm->guest_system_id = '';
                }
                if (!isset($vm->icon)) {
                    $vm->icon = '';
                }
                if (!isset($vm->uuid) or $vm->uuid == '') {
                    $vm->uuid = '';
                } else {
                    $sql = "SELECT system_id, icon FROM `system` WHERE LOWER(uuid) = LOWER(?) and man_status = 'production'";
                    $sql = $this->clean_sql($sql);
                    $data = array("$vm->uuid");
                    $query = $this->db->query($sql, $data);
                    if ($query->num_rows() > 0) {
                        $row = $query->row();
                        $vm->guest_system_id = $row->system_id;
                        $vm->icon = $row->icon;
                        $sql = "UPDATE system SET man_vm_server_name = ?, man_vm_system_id = ? WHERE system_id = ?";
                        $sql = $this->clean_sql($sql);
                        $data = array("$details->hostname", "$details->system_id", $vm->guest_system_id);
                        $query = $this->db->query($sql, $data);
                    }
                }
            }
        }

        # make sure we have a populated org_id for adding items to the charts table
        if (empty($details->man_org_id)) {
            $sql = "SELECT man_org_id FROM system WHERE system_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($details->system_id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->man_org_id = $row->man_org_id;
        }

        // get any existing current rows from the database
        $sql = "SELECT *, '' AS updated FROM `$table` WHERE current = 'y' AND system_id = ?";
        $sql = $this->clean_sql($sql);
        #$data = array($details->id); # this will be changed when we convert the system table
        $data = array($details->system_id);
        $query = $this->db->query($sql, $data);
        $db_result = $query->result();
        $alert = false;
        if (count($db_result) != 0) {
            // we have existing items in the database
            // we should raise an alert where required
            $alert = true;
        }

        // get the field list from the table
        $fields = $this->db->list_fields($table);

        // ensure we have a filtered array with only single copies of each $item
        $items = array();
        // for every input item
        foreach ($input->item as $input_key => $input_item) {
            $matched = 'n';
            // loop through the building up item array
            foreach ($items as $output_key => $output_item) {
                // the matched count is the number of columns in the match_columns array
                // that have equal values in our input items
                $match_count = 0;
                // loop through our match_columns array
                for ($i = 0; $i < count($match_columns); $i++) {
                    // and test if the variables match
                    if ((string)$input_item->$match_columns[$i] == (string)$output_item->$match_columns[$i]) {
                        // they match so increment the count
                        $match_count ++;
                    }
                }
                if ($match_count == (count($match_columns))) {
                    // we have two matching items - combine them
                    foreach ($fields as $field) {
                        if ((!isset($output_item->$field) or $output_item->$field == '') and isset($input_item->$field) and $input_item->$field != '') {
                            $output_item->$field = (string) $input_item->$field;
                        }
                    }
                    $items[$output_key] = $output_item;
                    $matched = 'y';
                }
            }
            if ($matched != 'y') {
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
                    if ((string)$input_item->$match_columns[$i] == (string)$db_item->$match_columns[$i] and $db_item->updated != 'y') {
                        $match_count ++;
                    }
                }
                if ($match_count == (count($match_columns))) {
                    // UPDATE because all supplied columns match
                    $flag = 'update';
                    $sql = '';
                    // if we have an audit value, replace the DB value
                    foreach ($fields as $field) {
                        if (isset($input_item->$field) and $input_item->$field != '') {
                            $db_item->$field = (string) $input_item->$field;
                        }
                        $sql .= " `" . $table . "`." . $field . " = ? , ";
                    }
                    // remove the trailing characters
                    $sql = substr($sql, 0, -2);
                    // set the last_seen column to the same as in $details (system table)
                    $db_item->last_seen = (string)$details->last_seen;
                    // update all values in the table
                    $sql = "UPDATE `$table` SET $sql WHERE `" . $table . "`.id = '" . $db_item->id . "'";
                    // make sure no data is in $data
                    unset ($data);
                    // populate $data with the values from the database, combined with those of the audit
                    // this is stored in $fields
                    $data = array();
                    foreach ($fields as $field) {
                        $data[] = (string)$db_item->$field;
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
            if ($flag == 'insert') {
                # $input_item->system_id  = $details->id; # this will be changed when we convert the system table
                $input_item->system_id  = $details->system_id;
                $input_item->current  = 'y';
                $input_item->first_seen = (string)$details->last_seen;
                $input_item->last_seen  = (string)$details->last_seen;
                $data = array();
                $set_fields = '';
                $set_values = '';
                foreach ($input_item as $key => $value) {
                    foreach($fields as $field) {
                        if ($key == $field) {
                            $set_fields .= " $key, ";
                            $set_values .= " ?, ";
                            $data[] = "$value";
                        }
                    }
                }
                $set_fields = substr($set_fields, 0, -2);
                $set_values = substr($set_values, 0, -2);
                $sql = "INSERT INTO `$table` ( $set_fields ) VALUES ( $set_values ) ";
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql, $data);
                $id = $this->db->insert_id();

                if ($alert and strtolower($create_alerts) == 'y') {
                    // We have existing items and this is a new item - raise an alert
                    $alert_details = '';
                    foreach ($match_columns as $key => $value) {
                        $alert_details .= $value . ' is ' . $input_item->$value . ', ';
                    }
                    $alert_details = substr($alert_details, 0, -2);
                    $alert_details = "Item added to $table - " . $alert_details;
                    if (!isset($details->last_seen) or $details->last_seen == '0000-00-00 00:00:00' or $details->last_seen =='') {
                        $sql = "SELECT last_seen FROM `system` WHERE system_id = ?";
                        $sql = $this->clean_sql($sql);
                        $data = array($details->system_id);
                        $query = $this->db->query($sql, $data);
                        $result = $query->result();
                        $details->last_seen = $result[0]->last_seen;
                    }
                    $sql = "INSERT INTO change_log (system_id, db_table, db_row, db_action, details, timestamp) VALUES (?, ?, ?, ?, ?, ?)";
                    $sql = $this->clean_sql($sql);
                    $data = array("$details->system_id", "$table", "$id", "create", "$alert_details", "$details->last_seen");
                    $query = $this->db->query($sql, $data);
                    # add a count to our chart table
                    $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '" . $table . "_create', " . intval($details->man_org_id) . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
                    $sql = $this->clean_sql($sql);
                    $query = $this->db->query($sql);
                }
            }
            if ((string)$table == 'partition') {
                // insert an entry into the graph table
                $used_percent = @intval(($input_item->used / $input_item->size) * 100);
                $free_percent = @intval(100 - $used_percent);
                $sql = "INSERT INTO graph VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $sql = $this->clean_sql($sql);
                $data = array(intval($details->system_id), "$table", intval($id), "$table", intval($used_percent),
                        intval($free_percent), intval($input_item->used), intval($input_item->free), intval($input_item->size), "$details->last_seen");
                $query = $this->db->query($sql, $data);
            }
        }

        // remove the duplicated DB_items
        foreach ($db_result as $key => $db_item) {
            if ($db_item->updated) {
                unset($db_result[$key]);
            }
        }

        // we have now inserted or updated all items in the audit set
        // we have also unset any items that were inserted (from the audit set above) from the db set
        // any remaining rows in the db set should have their current flag set to n as they were not found in the audit set
        if (count($db_result) > 0) {
            $log_details->message = 'Inserting change logs (' . $table . ') for '.ip_address_from_db($details->man_ip_address).' ('.$details->hostname.')';
            $log_details->severity = 7;
            stdlog($log_details);
        }
        foreach ($db_result as $db_item) {
            $sql = "UPDATE `$table` SET current = 'n' WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($db_item->id);
            $query = $this->db->query($sql, $data);
            if (strtolower($create_alerts) == 'y') {
                $alert_details = '';
                foreach ($match_columns as $key => $value) {
                    $alert_details .= $value . ' is ' . $db_item->$value . ', ';
                }
                $alert_details = substr($alert_details, 0, -2);
                $alert_details = "Item removed from $table - " . $alert_details;
                if (!isset($details->last_seen) or $details->last_seen == '0000-00-00 00:00:00' or $details->last_seen =='') {
                    $sql = "SELECT last_seen FROM `system` WHERE system_id = ?";
                    $sql = $this->clean_sql($sql);
                    $data = array($details->system_id);
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();
                    $details->last_seen = $result[0]->last_seen;
                }
                $sql = "INSERT INTO change_log (system_id, db_table, db_row, db_action, details, timestamp) VALUES (?, ?, ?, ?, ?, ?)";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id", "$table", "$db_item->id", "delete", "$alert_details", "$details->last_seen");
                $query = $this->db->query($sql, $data);
                # add a count to our chart table
                $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '" . $table . "_delete', " . intval($details->man_org_id) . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql);
            }
        }
        // update the audit log
        $this->m_audit_log->update('debug', "$table - end", $details->system_id, $details->last_seen);
        $log_details->message = 'Processing component (' . $table . ') end for '.@ip_address_from_db($details->man_ip_address).' ('.$details->hostname.')';
        $log_details->severity = 7;
        stdlog($log_details);
        return;
    }





    public function get_sql_server_version_string($version)
    {
        // todo - http://sqlserverbuilds.blogspot.com.au/
        
        // find the version string, based on the version integer.
        $version_string = '';

        // SQL 2014
        if (mb_strpos($version, "12.00.4050") === 0 or mb_strpos($version, "12.0.4050") === 0) {
            $version_string = "SQL Server 2014 Service Pack 1";
        }
        if (mb_strpos($version, "12.00.2000") === 0 or mb_strpos($version, "12.0.2000") === 0) {
            $version_string = "SQL Server 2014 RTM";
        }
        if (mb_strpos($version, "12.00.1524") === 0 or mb_strpos($version, "12.0.1524") === 0) {
            $version_string = "SQL Server 2014 Community Technology Preview 2 (CTP2)";
        }
        if (mb_strpos($version, "11.00.9120") === 0 or mb_strpos($version, "11.0.9120") === 0) {
            $version_string = "SQL Server 2014 Community Technology Preview 1 (CTP1)";
        }

        // SQL 2012
        if (mb_strpos($version, "11.00.5058") === 0 or mb_strpos($version, "11.0.5058") === 0 or mb_strpos($version, "11.2.5058.0") === 0) {
            $version_string = "SQL Server 2012 Service Pack 2";
        }
        if (mb_strpos($version, "11.00.3000") === 0 or mb_strpos($version, "11.0.3000") === 0) {
            $version_string = "SQL Server 2012 Service Pack 1";
        }
        if (mb_strpos($version, "11.00.2100") === 0 or mb_strpos($version, "11.0.2100") === 0) {
            $version_string = "SQL Server 2012 RTM";
        }

        // SQL 2008 r2
        if (mb_strpos($version, "10.50.6000") === 0 or mb_strpos($version, "10.53.6000") === 0) {
            $version_string = "SQL Server 2008 R2 Service Pack 3";
        }
        if (mb_strpos($version, "10.50.4000") === 0 or mb_strpos($version, "10.52.4000") === 0) {
            $version_string = "SQL Server 2008 R2 Service Pack 2";
        }
        if (mb_strpos($version, "10.50.2500") === 0 or mb_strpos($version, "10.51.2500") === 0) {
            $version_string = "SQL Server 2008 R2 Service Pack 1";
        }
        if (mb_strpos($version, "10.50.1600") === 0) {
            $version_string = "SQL Server 2008 R2 RTM";
        }

        // SQL 2008
        if (mb_strpos($version, "10.00.6000") === 0 or mb_strpos($version, "10.0.6000") === 0 or mb_strpos($version, "10.4.6000") === 0) {
            $version_string = "SQL Server 2008 Service Pack 4";
        }
        if (mb_strpos($version, "10.00.5500") === 0 or mb_strpos($version, "10.0.5500") === 0 or mb_strpos($version, "10.3.5500") === 0) {
            $version_string = "SQL Server 2008 Service Pack 3";
        }
        if (mb_strpos($version, "10.00.4000") === 0 or mb_strpos($version, "10.0.4000") === 0 or mb_strpos($version, "10.2.4000") === 0) {
            $version_string = "SQL Server 2008 Service Pack 2";
        }
        if (mb_strpos($version, "10.00.2531") === 0 or mb_strpos($version, "10.0.2531") === 0 or mb_strpos($version, "10.1.2531") === 0) {
            $version_string = "SQL Server 2008 Service Pack 1";
        }
        if (mb_strpos($version, "10.00.1600") === 0 or mb_strpos($version, "10.0.1600") === 0) {
            $version_string = "SQL Server 2008 RTM";
        }

        // SQL 2005
        if (mb_strpos($version, "9.00.5000") === 0 or mb_strpos($version, "9.0.5000") === 0) {
            $version_string = "SQL Server 2005 Service Pack 4";
        }
        if (mb_strpos($version, "9.00.4035") === 0 or mb_strpos($version, "9.0.4035") === 0) {
            $version_string = "SQL Server 2005 Service Pack 3";
        }
        if (mb_strpos($version, "9.00.3042") === 0 or mb_strpos($version, "9.0.3042") === 0) {
            $version_string = "SQL Server 2005 Service Pack 2";
        }
        if (mb_strpos($version, "9.00.2047") === 0 or mb_strpos($version, "9.0.2047") === 0) {
            $version_string = "SQL Server 2005 Service Pack 1";
        }
        if (mb_strpos($version, "9.00.1399") === 0 or mb_strpos($version, "9.0.1399") === 0) {
            $version_string = "SQL Server 2005 RTM";
        }

        // SQL 2000
        if (mb_strpos($version, "8.00.2039") === 0 or mb_strpos($version, "8.00.2305") === 0) {
            $version_string = "SQL Server 2000 Service Pack 4";
        }
        if (mb_strpos($version, "8.00.761") === 0) {
            $version_string = "SQL Server 2000 Service Pack 3a";
        }
        if (mb_strpos($version, "8.00.760") === 0) {
            $version_string = "SQL Server 2000 Service Pack 3";
        }
        if (mb_strpos($version, "8.00.534") === 0 or mb_strpos($version, "8.00.532") === 0) {
            $version_string = "SQL Server 2000 Service Pack 2";
        }
        if (mb_strpos($version, "8.00.384") === 0) {
            $version_string = "SQL Server 2000 Service Pack 1";
        }
        if (mb_strpos($version, "8.00.194") === 0) {
            $version_string = "SQL Server 2000 RTM";
        }

        // SQL 7
        if (mb_strpos($version, "7.00.1063") === 0 or mb_strpos($version, "7.00.1152") === 0) {
            $version_string = "SQL Server 7 Service Pack 4";
        }
        if (mb_strpos($version, "7.00.961") === 0) {
            $version_string = "SQL Server 7 Service Pack 3";
        }
        if (mb_strpos($version, "7.00.842") === 0) {
            $version_string = "SQL Server 7 Service Pack 2";
        }
        if (mb_strpos($version, "7.00.699") === 0) {
            $version_string = "SQL Server 7 Service Pack 1";
        }
        if (mb_strpos($version, "7.00.623") === 0) {
            $version_string = "SQL Server 7 RTM";
        }
    return ($version_string);
    }

    public function format_netstat_data($input, $details)
    {
        define('NL_NIX', "\n");
        define('NL_WIN', "\r\n");
        define('NL_MAC', "\r");

        if (strpos($input[0], NL_WIN) !== false) {
            #echo "win\n";
        } elseif (strpos($input[0], NL_MAC) !== false) {
            #echo "mac\n";
        } elseif (strpos($input[0], NL_NIX) !== false) {
            #echo "nix\n";
        }

        $input[0] = str_replace(array(NL_WIN, NL_MAC, NL_NIX), "\n", $input[0]);

        // need to parse the input based on os_group.
        if (strtolower($details->os_group) == "windows") {
            if (strtolower($details->os_family) == "windows 2000" or strtolower($details->os_family) == "windows xp" or strtolower($details->os_family) == "windows 2003") {
                $offset = 4;
            } else {
                $offset = 3;
            }
            $lines = explode("\n", $input);
            $input = null;
            $input_array = array();
            foreach ($lines as $line) {
                $i = new stdClass();
                if (strpos($line, ":") !== false) {
                    $line = trim($line);
                    $line = str_replace("LISTENING", "", $line);
                    $line = preg_replace('/  +/', ' ', $line);
                    $attributes = explode(" ", $line);

                    $t_ar = explode(":", $attributes[1]);
                    $i->port = $t_ar[count($t_ar)-1];
                    if (strpos($t_ar[0], "[") !== false) {
                        $i->protocol = strtolower($attributes[0])."6";
                    } else {
                        $i->protocol = strtolower($attributes[0]);
                    }
                    $i->ip = str_replace(":".$i->port, "", $attributes[1]);
                    $i->ip = str_replace("[", "", $i->ip);
                    $i->ip = str_replace("]", "", $i->ip);
                    $i->program = "";
                    for ($j = $offset; $j <= (count($attributes)-1); $j++) {
                        $i->program .= $attributes[$j]." ";
                    }
                    $i->program = trim($i->program);
                    if (isset($i->protocol)) {
                        $input_array[] = $i;
                    }
                }
            }
        }
        if (strtolower($details->os_group) == "linux") {
            $lines = explode("\n", $input[0]);
            $input = null;
            $input_array = array();
            foreach ($lines as $line) {
                $i = new stdClass();
                if (strpos($line, ":") !== false) {
                    $offset = 5;
                    $line = trim($line);
                    $line = str_replace("LISTEN", "", $line);
                    $line = preg_replace('/  +/', ' ', $line);
                    $attributes = explode(" ", $line);

                    $t_ar = explode(":", $attributes[3]);
                    $i->port = $t_ar[count($t_ar)-1];
                    $i->protocol = strtolower($attributes[0]);

                    $i->ip = str_replace(":".$i->port, "", $attributes[3]);
                    if ((substr_count($i->ip, ":") > 1) and (strlen($i->protocol) == 3)) {
                        $i->protocol = $i->protocol."6";
                    }
                    $i->program = "";
                    $t_program = "";
                    for ($j = $offset; $j <= count($attributes)-1; $j++) {
                        $t_program .= $attributes[$j]." ";
                    }
                    $t_program = trim($t_program);
                    $t_explode = explode("/", $t_program);
                    $i->program = @$t_explode[1];
                    if (!isset($i->program)) {
                        $i->program = '';
                    }
                    if ($i->protocol != '') {
                        $input_array[] = $i;
                    }
                }
            }
        }
        if (strtolower($details->os_family) == "ibm aix") {
            $lines = explode("\n", $input[0]);
            $input = null;
            $input_array = array();
            foreach ($lines as $line) {
                if ($line > '') {
                    $i = new stdClass();
                    $attributes = explode(" ", $line);

                    #protocol - tcp, tcp4, udp or udp4
                    $i->protocol = $attributes[0];

                    # ip address and port
                    $port_split = explode(".", $attributes[1]);
                    $i->port = $port_split[count($port_split)-1];
                    if (count($port_split) == 5) {
                        $i->ip = $port_split[0].".".$port_split[1].".".$port_split[2].".".$port_split[3];
                    } else {
                        $i->ip = "0.0.0.0";
                    }

                    # program (name of the program or unknown)
                    $i->program = "";
                    $t_program = "";
                    for ($j = 2; $j <= count($attributes)-1; $j++) {
                        $t_program .= $attributes[$j]." ";
                    }
                    $i->program = trim($t_program);
                    if ($i->port == intval($i->port) and $i->port != "\t\t") {
                        $input_array[] = $i;
                    }
                }
            }
        }
        $object = new stdClass();
        $object->item = array();
        $object->item = $input_array;
        return($object);
    }

    public function set_initial_address($id, $force = 'n')
    {

        # new logic
        # only set an ip address if we do not already have an existing in system table
        # no unset ('', '0.0.0.0', '000.000.000.000') addresses
        # no localhost ('127.0.0.1', '127.000.000.001') addresses
        # no 169.254.x.x addresses (RFC 3927)
        # prefer non-DHCP address (ORDER BY network.dhcp_enabled ASC)
        # secondary prefer private to public ip address (pubpriv)

        # get the stored attribute for man_ip_address
        $sql = "SELECT man_ip_address, timestamp FROM system WHERE system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ($force == 'y' or (isset($result) and is_array($result) and ($result[0]->man_ip_address == '' or $result[0]->man_ip_address == '000.000.000.000'  or $result[0]->man_ip_address == '0.0.0.0'))) {
            # we do not already have an ip address - attempt to set one
            $sql = "SELECT network.system_id, network.dhcp_enabled, ip.ip,
                        if( (ip.ip >= '010.000.000.000' AND ip.ip <= '010.255.255.255') OR
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
            $data = array("$id");
            $query = $this->db->query($sql, $data);
            $result = $query->result();

            if (isset($result[0]->ip) and $result[0]->ip != '') {
                #$sql = "UPDATE system SET ip = ? WHERE id = ?";
                $sql = "UPDATE system SET man_ip_address = ? WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($result[0]->ip, "$id");
                $query = $this->db->query($sql, $data);
            }
        }
    }

    public function update_missing_interfaces($system_id)
    {
        $sql = "SELECT ip.id, network.net_index FROM network LEFT JOIN ip ON (network.system_id = ip.system_id AND network.mac = ip.mac) WHERE network.system_id = ? AND ip.net_index = '' AND network.net_index != ''";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        foreach ($result as $line) {
            $sql = "UPDATE ip SET net_index = ? WHERE id = ?";
            $data = array("$line->net_index", "$line->id");
            $query = $this->db->query($sql, $data);
        }
    }

    public function graph($system_id, $linked_row, $type = 'partition', $days = 30)
    {
        if ($system_id == '' or !is_numeric($system_id)) {
            # TODO - wrtie out a log entry
            return;
        }
        if ($linked_row == '' or !is_numeric($linked_row)) {
            return;
        }
        if (!is_numeric($days)) {
           return;
        }
        $sql = "SELECT used_percent, DATE(timestamp) AS timestamp FROM `graph` WHERE system_id = ? AND linked_row = ? AND type = ? AND timestamp > adddate(current_date(), interval -".$days." day) GROUP BY DAY(timestamp) ORDER BY timestamp";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $linked_row, "$type");
        $query = $this->db->query($sql, $data);
        return ($query->result());
    }

    public function partition_use_report($group_id, $user_id, $days = '120')
    {
        $resultset = array();
        $sql = "SELECT DISTINCT(system.system_id), hostname, man_status, man_function, man_criticality, man_environment, man_description, partition.id as partition_id, mount_point, partition.name as partition_name
            FROM `system`, `oa_group_sys`, `partition`
            WHERE
                system.system_id = oa_group_sys.system_id AND
                partition.current = 'y' AND
                system.system_id = partition.system_id AND
                partition.mount_point > '' AND
                oa_group_sys.group_id = ? AND
                partition.mount_point != ''
            GROUP BY
                system.hostname, partition.mount_point
            ORDER BY
                system.hostname,
                partition.mount_point ";
        $sql = $this->clean_sql($sql);
        $data = array($group_id);
        $query = $this->db->query($sql, $data);
        $returned_data = array();
        foreach ($query->result() as $system) {
            $partition_sql = "SELECT id, round(AVG(used),0) AS used, size as total, used_percent as percent_used, free_percent as percent_free, DATE(`timestamp`) AS `timestamp` FROM `graph` WHERE system_id = ? AND linked_row = ? AND linked_table = 'partition' GROUP BY DATE(`timestamp`) ORDER BY `timestamp`";
            $partition_sql = $this->clean_sql($partition_sql);
            $data = array($system->system_id, $system->partition_id);
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
                        if (($used_calc < 1) and ($used_calc > -500)) {
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
                $i = ceil($total_use / $total_days);
                if ($i < 1) {
                    $i = 1;
                }
                $days_until_full = round((($total - $partition_used_space) / $i), 2, 0);
                if (intval($days_until_full) <= intval($days)) {
                    $returned_row["system_id"] = $system->system_id;
                    $returned_row["hostname"] = $system->hostname;
                    $returned_row["partition_name"] = $system->partition_name;
                    $returned_row["partition_mount_point"] = $system->mount_point;
                    $returned_row["man_environment"] = $system->man_environment;
                    $returned_row["man_description"] = $system->man_description;
                    $returned_row["man_function"] = $system->man_function;
                    $returned_row["man_criticality"] = $system->man_criticality;
                    $returned_row["partition_id"] = $partition_id;
                    $returned_row["partition_size"] = $total;
                    $returned_row["partition_used_space"] = $partition_used_space;
                    $returned_row["partition_free_space"] = ($total - $partition_used_space);
                    #$returned_row["days_until_used"] = round(($total - $partition_used_space) / round(($total_use / $total_days), 2),0);
                    $returned_row["days_until_used"] = $days_until_full;
                    if ($returned_row["days_until_used"] == 0) {
                        $returned_row["days_until_used"] = 'unknown';
                    }
                    $returned_row["change_per_day"] = round(($total_use / $total_days), 2);
                    $resultset[] = $returned_row;
                }
            }
        }

        return ($resultset);
    }

    public function create_dns_entries($id = 0)
    {

        $this->load->helper('log');
        $log_details = new stdClass();
        $log_details->file = 'system';
        $log_details->severity = 7;
        $sql = "SELECT DISTINCT ip FROM `ip` LEFT JOIN `system` ON (ip.system_id = system.system_id AND ip.current = 'y') WHERE system.system_id = ? AND ip.version = '4'";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $dns_entries = array();
        foreach ($result as $row) {
            $ip = $this->ip_address_from_db($row->ip);
            if (isset($ip) and $ip != '0.0.0.0' and $ip != '000.000.000.000' and $ip != '' and $ip != '127.0.0.1' and filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                $dns_entry = new stdClass();
                $dns_entry->ip = $ip;
                $dns_entry->fqdn = '';
                $dns_entry->name = '';
                $dns_entry->fqdn = gethostbyaddr($ip);
                if ($dns_entry->fqdn == $dns_entry->ip) {
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
            if ($dns_entry->name != '') {
                $ip = gethostbyname($dns_entry->name);
                if ($ip != $dns_entry->ip and $ip != $dns_entry->name) {
                    foreach ($dns_entries as $dns) {
                        if ($dns->ip == $ip) {
                            $ip = '';
                        }
                        unset($dns);
                    }
                    if ($ip != '') {
                        $new = new stdClass();
                        $new->ip = $ip;
                        $new->name = $dns_entry->name;
                        $new->fqdn = $dns_entry->fqdn;
                        $dns_entries[] = $new;
                    }
                }
            }
        }
        foreach ($dns_entries as $key => $dns_entry) {
            if (!isset($dns_entry->name) or $dns_entry->name == '') {
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
    public function from_db ($result)
    {
        foreach ($result as &$row) {
            foreach ($row as $key => $value) {
                if ($key == 'id' or $key == 'free' or $key == 'size' or $key == 'speed' or $key == 'total' or $key == 'used' or
                strrpos($key, '_id') === strlen($key)-3 or strrpos($key, '_count') === strlen($key)-6 or
                strrpos($key, '_percent') === strlen($key)-8 or strrpos($key, '_size') === strlen($key)-5 ) {
                    $row->$key = (int) intval($value);
                }
            }
        }
        return($result);
    }
}
