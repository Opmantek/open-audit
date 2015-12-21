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
 * @version 1.8.2
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

    public function read($id = 0, $current = 'y', $table = '', $filter = '')
    {
        if ($table == '') {
            // we require a DB table to read from
            return;
        }
        if ($id == 0) {
            // we require a system id
            return;
        }
        if ($current == '') {
            // we want all attributes, regardless of them being current or not
        }
        if ($current == 'y') {
            // we only want the current attributes
            $current = " AND current = 'y'";
        }
        if ($current == 'n') {
            // we only want non-current attributes
            $current = " AND current = 'n'";
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
        if ($found_id) {
            if ($found_current) {
                $sql = "SELECT * FROM `$table` WHERE system_id = ? $current $filter";
            } else {
                $sql = "SELECT * FROM `$table` WHERE system_id = ? $filter";
            }
            $data = array($id);
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            $result = $this->from_db($result);
            return($result);
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
        if ($table == 'network') {
                $match_columns = array('mac');
        }
        if ($table == 'ip') {
                $match_columns = array('ip', 'mac', 'subnet');
        }
        if ($table == 'optical') {
                $match_columns = array('model', 'mount_point');
        }
        if ($table == 'partition') {
                $match_columns = array('name', 'hard_drive_index', 'mount_point', 'size');
        }
        if ($table == 'processor') {
                $match_columns = array('description');
        }
        if ($table == 'scsi') {
                $match_columns = array('model', 'manufacturer', 'device');
        }
        if ($table == 'sound') {
                $match_columns = array('model', 'manufacturer');
        }
        if ($table == 'video') {
                $match_columns = array('model');
        }
        if ($table == 'dns') {
                $match_columns = array('hostname', 'fqdn', 'ip');
        }
        if ($table == 'user_group') {
                $match_columns = array('name', 'sid');
        }
        if ($table == 'log') {
                $match_columns = array('name', 'file_name', 'overwrite');
        }
        if ($table == 'netstat') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table == 'pagefile') {
                $match_columns = array('name', 'initial_size', 'max_size');
        }
        if ($table == 'print_queue') {
                $match_columns = array('system_key');
        }
        if ($table == 'route') {
                $match_columns = array('destination', 'next_hop');
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
        if ($table == 'user') {
                $match_columns = array('name', 'sid');
        }
        if ($table == 'variable') {
                $match_columns = array('name', 'value');
        }
        if ($table == 'virtual_machine') {
                $match_columns = array('name', 'uuid');
        }
        if ($table == 'windows') {
                $match_columns = array('service_pack', 'build_number');
        }
        return($match_columns);
    }

    public function process_component($table = '', $details, $input, $match_columns = array())
    {
        echo "<pre>Processing $table\n";
        $create_alerts = $this->m_oa_config->get_config_item('discovery_create_alerts');

        // ensure we have a valid table name
        if (!$this->db->table_exists($table)) {
            return;
        }

        if (!$input) {
            return;
        }

        if (!isset($match_columns) or count($match_columns) == 0) {
            $match_columns = $this->match_columns($table);
        }

        # if ($table == '' or count($match_columns) == 0 or !isset($details->id)) { # this will be changed when we convert the system table
        if ($table == '' or count($match_columns) == 0 or !isset($details->system_id)) {
            if ($table == '') {
                $message = "No table name supplied - failed";
            }
            if (count($match_columns) == 0) {
                $message = "$table - No columns to match supplied - failed";
            }
            # if (!isset($details->id)) { # this will be changed when we convert the system table
            if (!isset($details->system_id)) {
                $message = "$table - No system_id supplied - failed";
            }
            $this->m_sys_man_audits->update_audit($details, $message);
            unset($message);
            return;
        } else {
            $this->m_sys_man_audits->update_audit($details, "$table - start");
        }

        ### PARTITION ###
        # AIX needs to also match on partition.name
        if ((string)$table == 'partition' and strtolower($details->os_family) == 'ibm aix') {
            $match_columns[] = 'name';
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

        ### SERVER ###
        if ((string)$table == 'server') {
            for ($i=0; $i<count($input->item); $i++) {
                if (isset($input->item[$i]->version) and $input->item[$i]->version != '' and $input->item[$i]->type == 'database') {
                    $input->item[$i]->full_name = (string)$this->get_sql_server_version_string($input->item[$i]->version);
                }
            }
        }



        ### SOFTWARE VERSION PADDED ###
        if ((string)$table == 'software') {
            for ($i=0; $i<count($input->item); $i++) {
                if (isset($input->item[$i]->version) and $input->item[$i]->version != '') {
                    $pieces = array();
                    $pieces = preg_split("/[\s,\+\-\_\.\\\+\~]+/", $input->item[$i]->version);
                    #$input->item[$key]->version_padded = (string)'';
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

        ### NETSTAT ###
        if ((string)$table == 'netstat') {
            $input = $this->format_netstat_data($input, $details);
        }

        ### PROCESSOR ###
        if ($table == 'processor') {
            $input->item[0]->description = str_ireplace('(R)', '', $input->item[0]->description);
            $input->item[0]->description = str_ireplace('(TM)', '', $input->item[0]->description);
            $input->item[0]->description = str_ireplace('  ', ' ', $input->item[0]->description);
            $input->item[0]->manufacturer = str_ireplace('AuthenticAMD', 'AMD', $input->item[0]->manufacturer);
            $input->item[0]->manufacturer = str_ireplace('GenuineIntel', 'Intel', $input->item[0]->manufacturer);
        }

        ### IP ADDRESS ###
        if ($table == 'ip') {
            for ($i=0; $i<count($input->item); $i++) {
                # some devices may provide upper case MAC addresses - ensure all stored in the DB are lower
                $input->item[$i]->mac = strtolower($input->item[$i]->mac);
                # As at 1.5.6 we pass an additional attribute called 'type' for bonded adapters
                # We use this to test and not pad the MAC address if set
                if (!isset($input->item[$i]->type)) {
                    $input->item[$i]->type = '';
                }
                # ensure we have a fully padded mac address
                if ($input->item[$i]->type != 'bonded') {
                    if ($input->item[$i]->mac != '') {
                        $mymac = explode(":", $input->item[$i]->mac);
                        for ($i = 0; $i<count($mymac); $i++) {
                            $mymac[$i] = mb_substr("00".$mymac[$i], -2);
                        }
                        $input->item[$i]->mac = implode(":", $mymac);
                    }
                }
                if (!isset($input->item[$i]->version) or $input->item[$i]->version != '6') {
                    $input->item[$i]->version = '4';
                }
                # ensure we have the correctly padded ip v4 address
                if ($input->item[$i]->version == '4') {
                    $input->item[$i]->ip = $this->ip_address_to_db($input->item[$i]->ip);
                }
            }
        }

        ### VIRTUAL MACHINE ###
        if ($table == 'virtual_machine') {
            for ($i=0; $i<count($input->item); $i++) {
                # make sure group is set
                if (!isset($input->item[$i]->vm_group)) {
                    $input->item[$i]->vm_group = '';
                }
                # make sure guest_system_id is set
                if (!isset($input->item[$i]->guest_system_id)) {
                    $input->item[$i]->guest_system_id = '';
                }
                # attempt to match system_id
                if ($input->item[$i]->guest_system_id == '') {
                    $sql = "SELECT system_id FROM system WHERE LOWER(uuid) = LOWER(?) and man_status = 'production'";
                    $data = array((string)$input->item[$i]->uuid);
                    $query = $this->db->query($sql, $data);
                    if ($query->num_rows() > 0) {
                        $row = $query->row();
                        $input->item[$i]->guest_system_id = $row->id;
                    }
                }
                # update the system table
                if ($input->item[$i]->guest_system_id != '') {
                    $sql = "UPDATE system SET vm_server_name = ?, vm_system_id = ? WHERE system_id = ?";
                    $data = array("$details->name", "$details->system_id", (string)$input->item[$i]->guest_system_id);
                    $query = $this->db->query($sql, $data);
                }
                # set the current flag to n for all devices != id
                #$sql = "UPDATE virtual_machine SET current = 'n' WHERE uuid = ? AND system_id != ?";
                #$data = array("$input->item[$i]->uuid", "$details->system_id");
                #$query = $this->db->query($sql, $data);
            }
        }

        // get any existing current rows from the database
        $sql = "SELECT *, '' AS updated FROM `$table` WHERE current = 'y' AND system_id = ?";
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
        foreach ($input->item as $ikey => $iitem) {
            $matched = 'n';
            foreach ($items as $okey => $oitem) {
                $match_count = 0;
                for ($i = 0; $i < count($match_columns); $i++) {
                    if ((string)$iitem->$match_columns[$i] == (string)$oitem->$match_columns[$i]) {
                        $match_count ++;
                    }
                }
                if ($match_count == (count($match_columns))) {
                    // we have two matching items - combine them
                    foreach ($fields as $field) {
                        if ((!isset($oitem->$field) or $oitem->$field == '') and isset($iitem->$field) and $iitem->$field != '') {
                            $oitem->$field = (string) $iitem->$field;
                        }
                    }
                    $items[$okey] = $oitem;
                    $matched = 'y';
                }
            }
            if ($matched != 'y') {
                $items[] = $iitem;
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
                    // for each db column, if we don't have a value, use the audit value
                    foreach ($fields as $field) {
                        if ($db_item->$field == '' and isset($input_item->$field) and $input_item->$field != '') {
                            $db_item->$field = (string) $input_item->$field;
                        }
                        $sql .= " " . $table . "." . $field . " = ? , ";
                    }
                    // remove the trailing characters
                    $sql = substr($sql, 0, -2);
                    // set the last_seen column to the same as in $details (system table)
                    $db_item->last_seen = (string)$details->last_seen;
                    // update all values in the table
                    $sql = "UPDATE $table SET $sql WHERE " . $table . ".id = '" . $db_item->id . "'";
                    // make sure no data is in $data
                    unset ($data);
                    // populate $data with the values from the database, combined with those of the audit
                    // this is stored in $fields
                    $data = array();
                    foreach ($fields as $field) {
                        $data[] = (string)$db_item->$field;
                    }
                    $query = $this->db->query($sql, $data);
                    // remove this item from the database array
                    // we will later update the remaining items with current = n
                    // don't deletre it yet as we need to account for multiple items that are the same
                    //    typically in the Windows software listing
                    // unset($db_result[$key]);
                    $db_item->updated = 'y';
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
                $sql = "INSERT INTO $table ( $set_fields ) VALUES ( $set_values ) ";
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
                    $sql = "INSERT INTO oa_alert_log ( system_id, alert_table, alert_foreign_row, link_row_action, alert_details, `timestamp` ) VALUES ( ?, ?, ?, ?, ?, ? )";
                    $data = array("$details->system_id", "$table", "$id", "create", "$alert_details", "$details->last_seen");
                    $query = $this->db->query($sql, $data);
                }
            }
        }

        // remove the duplicated DB_items
        foreach ($db_result as $key => $db_item) {
            if ($db_item->updated) {
                unset($db_result[$key]);
            }
        }

        // we have now inserted or updated all items in the audit set
        // we have also unset any items that were inserted from the db set
        // UPDATE any remaining rows in the db set should have their current flag set to n as they were not found in the audit set
        foreach ($db_result as $db_item) {
            $sql = "UPDATE `$table` SET current = 'n' WHERE id = ?";
            $data = array($db_item->id);
            $query = $this->db->query($sql, $data);
            if (strtolower($create_alerts) == 'y') {
                $alert_details = '';
                foreach ($match_columns as $key => $value) {
                    $alert_details .= $value . ' is ' . $db_item->$value . ', ';
                }
                $alert_details = substr($alert_details, 0, -2);
                $alert_details = "Item removed from $table - " . $alert_details;
                $sql = "INSERT INTO oa_alert_log ( system_id, alert_table, alert_foreign_row, link_row_action, alert_details, `timestamp` ) VALUES ( ?, ?, ?, ?, ?, ? )";
                $data = array("$details->system_id", "$table", "$db_item->id", "delete", "$alert_details", "$details->last_seen");
                $query = $this->db->query($sql, $data);
            }
        }
        // update the audit log
        $this->m_sys_man_audits->update_audit($details, "$table - end");
        return;
    }





    public function get_sql_server_version_string($version)
    {
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
        # prefer non-DHCP address (ORDER BY sys_hw_network_card.net_dhcp_enabled ASC)
        # secondary prefer private to public ip address (pubpriv)

        # get the stored attribute for man_ip_address
        $sql = "SELECT ip, timestamp FROM system WHERE id = ?";
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ($force == 'y' or (isset($result) and is_array($result) and ($result[0]->ip == ''  or $result[0]->ip == '000.000.000.000'  or $result[0]->ip == '0.0.0.0'))) {
            # we do not already have an ip address - attempt to set one
            $sql = "SELECT
                    network.system_id,
                    network.dhcp_enabled,
                    sys_hw_network_card_ip.ip,
                    if( (sys_hw_network_card_ip.ip >= '010.000.000.000' AND sys_hw_network_card_ip.ip <= '010.255.255.255') OR
                    (sys_hw_network_card_ip.ip >= '172.016.000.000' AND sys_hw_network_card_ip.ip <= '172.031.255.255') OR
                    (sys_hw_network_card_ip.ip >= '192.168.000.000' AND sys_hw_network_card_ip.ip <= '192.168.255.255'), 'prv', 'pub') as pubpriv
                    FROM
                    sys_hw_network_card LEFT JOIN sys_hw_network_card_ip ON
                    (network.system_id = sys_hw_network_card_ip.system_id AND
                    sys_hw_network_card_ip.mac = network.mac)
                    WHERE
                    network.system_id = ? AND
                    network.ip_enabled != 'false' AND
                    sys_hw_network_card_ip.ip != '' AND
                    sys_hw_network_card_ip.ip != '0.0.0.0' AND
                    sys_hw_network_card_ip.ip != '000.000.000.000' AND
                    sys_hw_network_card_ip.ip != '127.0.0.1' AND
                    sys_hw_network_card_ip.ip != '127.000.000.001' AND
                    sys_hw_network_card_ip.ip != '127.0.1.1' AND
                    sys_hw_network_card_ip.ip != '127.000.001.001' AND
                    sys_hw_network_card_ip.ip NOT LIKE '169.254.%' AND
                    sys_hw_network_card_ip.current = 'y' AND
                    sys_hw_network_card_ip.version = '4'
                    ORDER BY
                    network.dhcp_enabled ASC,
                    pubpriv ASC,
                    sys_hw_network_card_ip.ip DESC
                    LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$id");
            $query = $this->db->query($sql, $data);
            $result = $query->result();

            if (isset($result[0]->ip) and $result[0]->ip != '') {
                $sql = "UPDATE system SET ip = ? WHERE id = ?";
                $data = array($result[0]->ip, "$id");
                $query = $this->db->query($sql, $data);
            }
        }
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
