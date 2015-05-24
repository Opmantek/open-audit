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
 * @version 1.6.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_system extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('network');
        $this->load->helper('log');
        $this->load->database();
    }

    public function get_access_details($system_id)
    {
        if ($system_id == '') {
            return;
        }
        $sql = "SELECT access_details FROM system WHERE id = ? LIMIT 1";
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (count($row) > 0) {
            return($row->access_details);
        } else {
            return;
        }
    }

    public function create_system_key($details)
    {
        $log_details = new stdClass();
        $log_details->message = 'System Key being generated for '.$details->hostname;
        $log_details->severity = 7;
        $log_details->file = 'system';
        stdlog($log_details);

        $details = (object) $details;
        if (!isset($details->system_key)) {
            $details->system_key = '';
        }

        if (!isset($details->system_key_type)) {
            $details->system_key_type = '';
        }

        if ((isset($details->hostname) and $details->hostname != '') and (isset($details->domain) and $details->domain != '')) {
            $details->fqdn = $details->hostname.".".$details->domain;
        }

        # this is a computer from an audit script
        # this is the 'best' type of key
        if (isset($details->uuid) and $details->uuid != '' and
            isset($details->hostname) and $details->hostname != '') {
            $details->system_key = $details->uuid."-".$details->hostname;
            $details->system_key_type = 'uuho';
            $log_details->message = "System Key is $details->system_key for $details->hostname type uuho";
            stdlog($log_details);
        }

        # this is anything that has a FQDN
        if ((isset($details->fqdn) and $details->fqdn != '') and ($details->system_key_type != 'uuho')) {
            $details->system_key = $details->fqdn;
            $details->system_key_type = 'fqdn';
            $log_details->message = "System Key is $details->system_key for $details->hostname type fqdn";
            stdlog($log_details);
        }

        # We might have only a serial number
        # if this is all we have, we also require a type.
        # first check to make sure we have a type
        if (!isset($details->type)) {
            $details->type = '';
        }

        # next check if we also have a serial and set the system_key if so
        if (isset($details->serial) and $details->serial != '') {
            if (isset($details->type) and $details->type != '') {
                if ($details->system_key_type  != 'uuho' and $details->system_key_type != 'fqdn') {
                    $details->system_key = $details->type."_".$details->serial;
                    $details->system_key_type = 'tyse';
                    $log_details->message = "System Key is $details->system_key for $details->hostname type tyse";
                    stdlog($log_details);
                }
            }
        }

        # lastly, just an IP Address
        if (isset($details->ip) and $details->ip != '' and
            $details->ip != '0.0.0.0' and $details->ip != '000.000.000.000' and
            $details->system_key_type != 'uuho' and $details->system_key_type  != 'fqdn' and $details->system_key_type != 'tyse') {
            $details->system_key = $details->ip;
            $details->system_key_type = 'ipad';
            $log_details->message = "System Key is $details->system_key for $details->hostname type ipad";
            stdlog($log_details);
        }

        if ($details->system_key == '') {
            $log_details->message = "System Key is blank for $details->hostname ERROR";
            $log_details->severity = 5;
            stdlog($log_details);
        }

        unset($log_details);

        return $details->system_key;
    }

    public function find_system($details)
    {
        # we are searching for a system.id.
        # search order is:
        # system_key, mac_address, ip_address, serial, serial, hostname
        $details = (object) $details;
        $details->id = '';

        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';

        # check system_key
        if (isset($details->system_key) and $details->id == '') {
            $sql = "SELECT system.id FROM system WHERE system_key = ? AND status = 'production' LIMIT 1";
            $data = array("$details->system_key");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log_details->message = 'HIT on system_key for '.ip_address_from_db($details->ip).' (System ID '.$details->id.')';
                stdlog($log_details);
            }
        }

        # check if the previous hostname had 15 characters and the submittied hostname has > 15
        if (isset($details->hostname) and strlen($details->hostname) > 15 and isset($details->uuid) and $details->id == '') {
            $temp_uuid = $details->uuid."-".substr($details->hostname, 0, 15);
            $sql = "SELECT system.id FROM system WHERE system_key = ? AND status = 'production' LIMIT 1";
            $data = array("$temp_uuid");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->system_id;
                $log_details->message = 'HIT on truncated system_key for '.ip_address_from_db($details->ip).' (System ID '.$details->id.')';
                stdlog($log_details);
            }
        }

        # use the full hostname as provided
        if (isset($details->hostname) and isset($details->uuid) and $details->id == '') {
            $temp_uuid = $details->uuid."-".$details->hostname;
            $sql = "SELECT system.id FROM system WHERE system_key = ? AND status = 'production' LIMIT 1";
            $data = array("$temp_uuid");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->system_id;
                $log_details->message = 'HIT on hostname + uuid system_key for '.ip_address_from_db($details->ip).' (System ID '.$details->id.')';
                stdlog($log_details);
            }
        }

        # check for a FQDN
        if (isset($details->fqdn) and $details->fqdn != '' and $details->id == '') {
            $sql = "SELECT system.id FROM system WHERE system_key = ? AND status = 'production' LIMIT 1";
            $data = array("$details->fqdn");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->system_id;
                $log_details->message = 'HIT on fqdn for '.ip_address_from_db($details->ip).' (System ID '.$details->id.')';
                stdlog($log_details);
            }
        }

        # check for a hostname + domain, making a FQDN
        if (isset($details->hostname) and $details->hostname != '' and isset($details->domain) and $details->domain != '' and $details->id == '') {
            $details->fqdn = $details->hostname.".".$details->domain;
            $sql = "SELECT system.id FROM system WHERE system_key = ? AND status = 'production' LIMIT 1";
            $data = array("$details->fqdn");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->system_id;
                $log_details->message = 'HIT on host + domain for '.ip_address_from_db($details->ip).' (System ID '.$details->id.')';
                stdlog($log_details);
            }
        }

        # TODO: fix this by making sure (snmp in particular) calls with the proper variable name
        if (!isset($details->mac_address) and (isset($details->mac))) {
            $details->mac_address = $details->mac;
        }

        # check MAC Address - this caters for a single mac address, usually from a nmap result
        if (isset($details->mac_address) and $details->mac_address > '' and $details->id == '') {
            # check the sys_hw_network_card_ip table
            $sql = "SELECT system.id FROM system
					LEFT JOIN sys_hw_network_card_ip ON (system.id = sys_hw_network_card_ip.system_id AND system.last_seen = sys_hw_network_card_ip.last_seen)
					WHERE LOWER(sys_hw_network_card_ip.net_mac_address) = LOWER(?)
					AND system.status = 'production' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->mac_address");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->system_id;
                $log_details->message = 'HIT on mac address for '.$details->ip.' (System ID '.$details->id.')';
                stdlog($log_details);
            }
        }

        # check all MAC addresses - this caters for an actual audit script result
        if (isset($details->mac_addresses) and count($details->mac_addresses) > 0 and $details->id == '') {
            foreach ($details->mac_addresses as $mac_address) {
                foreach ($mac_address as $mac) {
                    if ($mac != '') {
                        # check the sys_hw_network_card_ip table
                        $sql = "SELECT system.id FROM system
								LEFT JOIN sys_hw_network_card_ip ON (system.id = sys_hw_network_card_ip.system_id AND
									system.last_seen = sys_hw_network_card_ip.last_seen)
								WHERE LOWER(sys_hw_network_card_ip.net_mac_address) = LOWER(?)
								AND system.status = 'production' LIMIT 1";
                        $sql = $this->clean_sql($sql);
                        $data = array("$mac");
                        $query = $this->db->query($sql, $data);
                        $row = $query->row();
                        if (count($row) > 0) {
                            $details->id = $row->system_id;
                            $log_details->message = 'HIT on mac address from audit result for '.strtolower($mac).' (System ID '.$row->system_id.')';
                            stdlog($log_details);
                        }
                    }
                }
            }
        }

        # check IP Address in system, then sys_hw_network_card_ip tables
        if (isset($details->ip) and
                $details->ip > '' and
                $details->ip != '0.0.0.0' and
                $details->ip != '000.000.000.000' and
                filter_var($details->ip, FILTER_VALIDATE_IP) and
                $details->id == '') {
            $sql = "SELECT system.id FROM system WHERE system_key = ? and system.status = 'production'";
            $data = array(ip_address_to_db($details->ip));
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->system_id;
                $log_details->message = 'HIT on ip_address == system_key for '.$details->ip.' (System ID '.$row->system_id.')';
                stdlog($log_details);
            }

            if ($details->id == '') {
                $sql = "SELECT system.id FROM system WHERE ip_address = ? and system.status = 'production'";
                $data = array(ip_address_to_db($details->ip));
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->system_id;
                    $log_details->message = 'HIT on ip_address for '.$details->ip.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }

            if ($details->id == '') {
                # we didn't get a hit from the system table - try the sys_hw_network_card_ip table
                $sql = "SELECT system.id FROM system
						LEFT JOIN sys_hw_network_card_ip ON (system.id = sys_hw_network_card_ip.system_id AND system.last_seen = sys_hw_network_card_ip.last_seen)
						WHERE (sys_hw_network_card_ip.ip_address_v4 = ? OR sys_hw_network_card_ip.ip_address_v6 = ?)
						AND system.status = 'production' LIMIT 1";
                $sql = $this->clean_sql($sql);
                $data = array(ip_address_to_db($details->ip), "$details->ip");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->system_id;
                    $log_details->message = 'HIT on ip_address in network table for '.$details->ip.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }
        }

        # check serial
        # in this case, we also need to know a TYPE
        if (isset($details->serial) and $details->serial > '' and $details->id == '') {
            if ((!isset($details->type) or $details->type == '') and
                isset($details->type) and $details->type != '') {
                $details->type = $details->type;
            }
            if ($details->type != '' or $details->type != '') {
                $sql = "SELECT system.id FROM system WHERE system.system_key = ? AND system.status = 'production'";
                $data = array("$details->type"."_"."$details->serial");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->system_id;
                }

                if ($details->system_key == '') {
                    $sql = "SELECT system.id FROM system WHERE system.serial = ? AND (system.type = ? OR system.type = ?) AND system.status = 'production'";
                    $data = array("$details->serial", "$details->type", "$details->type");
                    $query = $this->db->query($sql, $data);
                    $row = $query->row();
                    if (count($row) > 0) {
                        $details->id = $row->system_id;
                        $log_details->message = 'HIT on serial for '.$details->ip.' (System ID '.$row->system_id.')';
                        stdlog($log_details);
                    }
                }
            }
        }

        # check serial
        if (isset($details->serial) and $details->serial > '' and $details->id == '') {
            if (isset($details->type) and $details->type > '') {
                $type = $details->type;
            }
            if (!isset($type)) {
                $type = '';
            }
            if (isset($details->type) and $details->type > '') {
                $type = $details->type;
            }
            if ($type > '' or $type > '') {
                $sql = "SELECT system.id FROM system WHERE system.serial = ? AND (system.type = ? OR system.type = ?) AND system.status = 'production'";
                $data = array("$details->serial", "$details->type", "$details->type");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->system_id;
                    $log_details->message = 'HIT on serial for '.$details->ip.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }
        }

        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'name_match'";
        $query = $this->db->query($sql);
        $row = $query->row();
        $name_match = @$row->config_value;
        if (!isset($name_match) or is_null($name_match)) {
            $name_match = 'n';
        }

        if (isset($name_match) and $name_match == "y") {
            # check hostname
            if (isset($details->hostname) and $details->hostname != '' and $details->id == '') {
                # check if we have an ip address or a hostname (possibly a fqdn)
                if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                    # we don't have a vaild ip - split by . and take first segment
                    $i = explode(".", $details->hostname);
                    $hostname = $i[0];
                } else {
                    # we have an ip address in the hostname field - use as is
                    # likely because DNS is not fully setup and working correctly
                    $hostname = $details->hostname;
                }
                $sql = "SELECT system.id FROM system WHERE (hostname = ? or hostname = ?) AND system.status = 'production'";
                $data = array("$hostname", "$details->hostname");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->system_id;
                    $log_details->message = 'HIT on hostname for '.$details->ip.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }

            # check short hostname in $details
            if (isset($details->hostname) and $details->hostname != '' and $details->id == '') {
                if (isset($details->hostname_length) and $details->hostname_length == 'short') {
                    # we grabbed the hostname from SNMP.
                    # SNMP hostnames on Windows are truncated to 15 characters
                    $i = explode(".", $details->hostname);
                    $hostname = $i[0];
                    if (strlen($hostname) == 15) {
                        # We do have a 15 character hostname - check if this exists in the DB
                        $sql = "SELECT system.id FROM system WHERE hostname LIKE '".$hostname."%' AND system.status = 'production'";
                        $query = $this->db->query($sql);
                        $row = $query->row();
                        if (count($row) > 0) {
                            $details->id = $row->system_id;
                            $log_details->message = 'HIT on hostname short for '.$details->ip.' (System ID '.$row->system_id.')';
                            stdlog($log_details);
                        }
                    }
                }
            }

            # check short hostname in database
            if (isset($details->hostname) and strlen($details->hostname) > 15 and $details->id == '') {
                $i = explode(".", $details->hostname);
                $hostname = $i[0];
                $hostname = substr($hostname, 0, 15);
                $sql = "SELECT system.id FROM system WHERE hostname = ? AND system.status = 'production'";
                $data = array("$hostname");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->system_id;
                    $log_details->message = 'HIT on short hostname '.$details->ip.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }
        }

        $temp = @(string) $details->id;
        if (is_null($temp) or $temp == '') {
            $log_details->message = 'System ID not found for '.$details->ip;
            stdlog($log_details);
        } else {
            $log_details->message = 'Returning System ID '.$details->id.' for '.$details->ip;
            stdlog($log_details);
        }
        unset($log_details);

        return $details->id;
    }

    public function process_system_from_ad($details)
    {
        // only process items with a OS
        if ($details->os_family == '') {
            return;
        }
        $sql = "SELECT system_id FROM system WHERE (hostname = ? or hostname = ? ) AND status = 'production' LIMIT 1";
        $data = array("$details->hostname", "$details->ip");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        $system_id = '0';
        if (!$row) {
            $system_id = '0';
        } else {
            $system_id = $row->system_id;
        }
        # echo $details->hostname . " - ";
        if ($system_id > '0') {
            // ok, we have a hit
            $sql = "SELECT last_seen FROM system WHERE system_id = '".$system_id."'";
            $query = $this->db->query($sql);
            $row = $query->row();
            $last_seen = $row->last_seen;
            if ($last_seen > $details->last_seen) {
                // we have a later date for this system - don't update.
            } else {
                // the ad audit is later - update
                $sql = "UPDATE system SET last_seen = '".$details->last_seen."', last_seen_by = 'active directory' WHERE system_id = '".$system_id."'";
                $query = $this->db->query($sql, $data);
            }
            # update the various settings that we KNOW because of an AD scan.
            $sql = "UPDATE system SET type = 'computer', type = 'computer', os_group = ?, os_group = ?, os_family = ?, os_family = ?, os_name = ?, os_name = ?, icon = ?, domain = ?, hostname = ? WHERE system_id = ?";
            $data = array("$details->os_group", "$details->os_group", "$details->os_family", "$details->os_family", "$details->os_name", "$details->os_name", "$details->icon", "$details->domain", "$details->hostname", "$system_id");
            $query = $this->db->query($sql, $data);
            #echo $this->db->last_query();
        } else {
            // this is a new system
            $last_seen = date('Y-m-d H:i:s');
            $sql = "INSERT INTO system (hostname, ip_address, domain, type, type, icon, os_group, os_family, os_name, os_group, os_family, os_name, last_seen, last_seen_by, last_seen, first_last_seen) VALUES (?, ?, ?, 'computer', 'computer', ?, ?, ?, ?, ?, ?, ?, ?, ?, 'active directory', ?, ?)";
            $data = array("$details->hostname", $this->ip_address_to_db($details->ip), "$details->domain", "$details->icon", "$details->os_group", "$details->os_family", "$details->os_name", "$details->os_group", "$details->os_family", "$details->os_name", "$details->last_seen", $last_seen, "$details->last_seen" );
            $query = $this->db->query($sql, $data);
            $system_id = $this->db->insert_id();
            $sql = "INSERT INTO sys_sw_windows (system_id, windows_active_directory_ou, last_seen, first_last_seen) values (?, ?, ?, ?)";
            $data = array("$system_id", "$details->windows_active_directory_ou", $last_seen, $last_seen );
            $query = $this->db->query($sql, $data);
        }

        return($system_id);
    }

    public function get_system_access_level($system_id, $user_id = '0')
    {
        $sql = "SELECT
				group_user_access_level
			FROM
				oa_group_user,
				oa_group,
				oa_user,
				oa_group_sys,
				system
			WHERE
				oa_user.user_id = ? AND
				oa_user.user_id = oa_group_user.user_id AND
				oa_group_user.group_id = oa_group.group_id AND
				oa_group.group_id = oa_group_sys.group_id AND
				oa_group_sys.system_id = ?
			ORDER BY
				group_user_access_level DESC
			LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($user_id, $system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->group_user_access_level);
    }

    public function update_system_man($system_id, $field_name, $field_data)
    {
        if ($field_name == 'ip_address') {
            $field_data = $this->ip_address_to_db($field_data);
        }
        $sql = "UPDATE system SET $field_name = ? WHERE system_id = ?";
        $data = array("$field_data", "$system_id");
        $query = $this->db->query($sql, $data);
    }

    public function check_ip_address($system_id)
    {
        $sql = "SELECT system.ip FROM system WHERE system.id = ? LIMIT 1";
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->ip_address);
    }

    public function get_system_type($system_id)
    {
        $sql = "SELECT system.type FROM system WHERE system.id = ? LIMIT 1";
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->type);
    }

    public function get_system_hostname($system_id)
    {
        // $sql = "SELECT
        // 		system.hostname
        // 	FROM
        // 		system
        // 	WHERE
        // 		(system.id = ? OR
        // 		system.system_key = ? OR
        // 		system.hostname = ? )
        // 	ORDER BY
        // 		system.last_seen
        // 	LIMIT 1";
        $sql = "SELECT
				system.hostname
			FROM
				system
			WHERE
				system.id = ?
			ORDER BY
				system.last_seen
			LIMIT 1";
        $sql = $this->clean_sql($sql);
        //$data = array($system_id, $system_id, $system_id);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->hostname);
    }

    public function search_device($search)
    {

        # remove a trailing "." if present because the ip padding will insert "000" and not match any ip
        $search_ip = $search;
        if (substr($search_ip, -1) == ".") {
            $search_ip = substr($search_ip, 0, -1);
        }
        $myip = explode(".", $search_ip);
        foreach ($myip as $index => $data) {
            $myip[$index] = mb_substr("000".$myip[$index], -3);
        }
        $search_ip = "%".implode(".", $myip)."%";
        $search = "%".$search."%";

        $sql = "SELECT
				system.icon,
				system.type,
				system.ip,
				system.id,
				system.hostname,
				system.domain,
				system.fqdn,
				system.description,
				system.os_family,
				sys_hw_network_card_ip.ip_address_v4
			FROM
				system LEFT JOIN sys_hw_network_card_ip ON (system.id = sys_hw_network_card_ip.system_id AND system.last_seen = sys_hw_network_card_ip.last_seen)
			WHERE
				( system.hostname LIKE ? OR
				system.fqdn LIKE ? OR
				system.domain LIKE ? OR
				system.ip LIKE ? OR
				sys_hw_network_card_ip.ip_address_v4 LIKE ? OR
				sys_hw_network_card_ip.ip_address_v6 LIKE ? ) AND
				system.status = 'production'
			GROUP BY
				system.id
			ORDER BY
				system.hostname";

        $sql = "SELECT
				system.icon,
				system.type,
				system.ip,
				system.id,
				system.hostname,
				system.domain,
				system.fqdn,
				system.description,
				system.os_family,
				sys_hw_network_card_ip.ip_address_v4
			FROM
				system
			LEFT JOIN sys_hw_network_card_ip ON (system.id = sys_hw_network_card_ip.system_id AND system.last_seen = sys_hw_network_card_ip.last_seen)
			LEFT JOIN oa_group_sys ON (system.id = oa_group_sys.system_id)
			LEFT JOIN oa_group ON (oa_group_sys.group_id = oa_group.group_id)
			LEFT JOIN oa_group_user ON  (oa_group_user.group_id = oa_group.group_id)
			WHERE
				( system.hostname LIKE ? OR
				system.fqdn LIKE ? OR
				system.domain LIKE ? OR
				system.ip LIKE ? OR
				sys_hw_network_card_ip.ip_address_v4 LIKE ? OR
				sys_hw_network_card_ip.ip_address_v6 LIKE ? ) AND
				system.status = 'production' AND
				oa_group_user.user_id = ? AND
				oa_group_user.group_user_access_level > '0'
			GROUP BY
				system.id
			ORDER BY
				system.hostname";
        $sql = $this->clean_sql($sql);
        $data = array("$search", "$search", "$search", "$search_ip", "$search_ip", "$search", $this->user->user_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        for ($i = 0; $i<count($result); $i++) {
            if ($result[$i]->ip_address_v4 != '') {
                $result[$i]->ip_address  = $this->ip_address_from_db($result[$i]->ip_address_v4);
            } else {
                $result[$i]->ip_address = $this->ip_address_from_db($result[$i]->ip_address);
            }
        }
        // echo "<pre>\n";
        // echo $this->db->last_query();
        // print_r($this->data);
        // print_r($result);
        // echo "</pre>\n";
        // exit();
        return ($result);
    }

    public function search_device_columns()
    {
        $i = new stdclass();
        $result = array();
        $i->column_order = '3';
        $i->column_name = 'Icon';
        $i->column_variable = 'icon';
        $i->column_type = "image";
        $i->column_align = "center";
        $i->column_secondary = "type";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[0] = $i;
        $i = new stdclass();
        $i->column_order = '1';
        $i->column_name = 'Type';
        $i->column_variable = 'type';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[1] = $i;
        $i = new stdclass();
        $i->column_order = '1';
        $i->column_name = 'IP Address';
        $i->column_variable = 'ip_address';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[2] = $i;
        $i = new stdclass();
        $i->column_order = '0';
        $i->column_name = 'Name';
        $i->column_variable = 'hostname';
        $i->column_type = "link";
        $i->column_align = "left";
        $i->column_secondary = "system_id";
        $i->column_ternary = "";
        $i->column_link = $this->config->item('oae_url')."/device_details/";
        $result[3] = $i;
        $i = new stdclass();
        $i->column_order = '0';
        $i->column_name = 'Domain';
        $i->column_variable = 'domain';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = '';
        $result[4] = $i;
        $i = new stdclass();
        $i->column_order = '0';
        $i->column_name = 'FQDN';
        $i->column_variable = 'fqdn';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = '';
        $result[5] = $i;
        $i = new stdclass();
        $i->column_order = '0';
        $i->column_name = 'Description';
        $i->column_variable = 'description';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = '';
        $result[6] = $i;
        $i = new stdclass();
        $i->column_order = '1';
        $i->column_name = 'OS Family';
        $i->column_variable = 'os_family';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[7] = $i;
        $i = new stdclass();

        return ($result);
    }

    public function get_system_popup($system_id)
    {
        $sql = "SELECT 		system_id, status, manufacturer, form_factor,
							model, picture, serial, form_factor, type
				FROM 		system
				WHERE 		system.id = ?
				ORDER BY 	system.last_seen
				LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function system_summary($system_id)
    {
        // $sql = "SELECT 		system.id, hostname, ip_address, environment,
        // 					status, description, type,
        // 					class, os_group, os_family, os_name,
        // 					manufacturer, model, serial,
        // 					form_factor,
        // 					location_name, last_seen, last_seen_by
        // 		FROM 		system
        // 		LEFT JOIN   oa_location on system.location_id = oa_location.location_id
        // 		WHERE 		system.id = ? ";

        // Improved SQL to show the linked system for the case of devices like local attached, non-networked printers
        $sql = "SELECT a.system_id, a.hostname, a.ip_address, a.environment, a.status, a.description, a.type, a.class, a.os_group, a.os_family, a.os_name, a.manufacturer, a.model, a.serial, a.form_factor, location_name, a.last_seen, a.last_seen_by, a.linked_sys as linked_system_id, b.hostname as linked_hostname FROM system a LEFT JOIN system b on a.linked_sys = b.system_id LEFT JOIN oa_location on a.location_id = oa_location.location_id WHERE a.system_id = ?";

        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        #echo $this->db->last_query() . "<br />";
        $result = $query->result();
        $result[0]->{'IP Address'} = $this->ip_address_from_db($result[0]->{'ip_address'});

        return ($result);
    }

    public function get_system_groups($system_id, $user_id)
    {
        $sql = "SELECT
				oa_group.group_id,
				oa_group.group_name
			FROM
				oa_group,
				oa_group_sys,
				oa_group_user,
				system
			WHERE
				system.id = ? AND
				system.id = oa_group_sys.system_id AND
				oa_group_sys.group_id = oa_group.group_id AND
				oa_group_user.group_id = oa_group.group_id AND
				oa_group_user.user_id = ? AND
				oa_group_user.group_user_access_level > '0'
			ORDER BY group_name";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $user_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_system_id_from_hostname($hostname)
    {
        $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.status = 'production' ORDER BY system_id LIMIT 1";
        $data = array("$hostname");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (!$row) {
            return(false);
        } else {
            return($row->system_id);
        }
    }

    public function get_system_id($system_id)
    {
        $sql = "SELECT
				system.id
			FROM system
			WHERE
				(system.id = ? OR
				system.system_key = ? OR
				system.hostname = ? )
			ORDER BY
				system.status,
				system.last_seen,
				system.id
			LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $system_id, $system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (!$row) {
            $systemid = '0';
        } else {
            $systemid = $row->id;
        }

        return ($systemid);
    }

    public function get_system_summary($system_id)
    {
        $sql = "SELECT system.*, location_name FROM system LEFT JOIN oa_location ON (system.location_id = oa_location.location_id) WHERE system.id = ? LIMIT 1";
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_columns()
    {
        $sql = "SHOW COLUMNS FROM system";
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_non_production_systems()
    {
        $sql = "SELECT system_id, hostname, last_seen, oa_org.org_name FROM system LEFT JOIN oa_org ON system.org_id = oa_org.org_id WHERE status = 'deleted'";
        $query = $this->db->query($sql);
        $result = $query->result();
        $i = 0;
        foreach ($result as $system) {
            $sql = "SELECT count(*) AS count FROM system WHERE hostname = ?";
            $data = array($system->hostname);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $result2 = $query->result();
            $result[$i]->count = $row->count;
            $i++;
        }

        return ($result);
    }

    public function count_non_production_systems($status = 'deleted')
    {
        $sql = "SELECT COUNT(*) AS count FROM system WHERE status = ?";
        $data = array("$status");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $row = $query->row();

        return ($row->count);
    }

    public function count_not_seen_days($days = 365)
    {
        $sql = "SELECT COUNT(*) AS count FROM system WHERE DATE(last_seen) < DATE_SUB(curdate(), INTERVAL $days day)";
        $query = $this->db->query($sql);
        $row = $query->row();

        return ($row->count);
    }

    public function delete_systems_not_seen_days($days = 365)
    {
        $sql = "DELETE FROM system WHERE DATE(last_seen) < DATE_SUB(curdate(), INTERVAL $days day)";
        $query = $this->db->query($sql);
        $count = $this->db->affected_rows();

        return ($count);
    }

    public function delete_non_production_systems($status = 'deleted')
    {
        $sql = "DELETE FROM system WHERE status = ?";
        $data = array($status);
        $query = $this->db->query($sql, $data);
        $count = $this->db->affected_rows();

        return ($count);
    }

    #TODO what do we do with linked systems when the above is run from db_admin/maintenance?
    public function delete_linked_system($system_id)
    {
        $sql = "DELETE FROM system WHERE linked_sys = ?";
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
    }

    /**
     * Insert a NEW system
     * We insert whatever we have from the $details object and
     * whatever additional data based on what we can derive.
     *
     * @param object $details
     * @access	public
     *
     * @return int
     */
    public function insert_system($details)
    {

        # nasty hack because when a simplexmlobject is sent (ie, from audit_windows.vbs)
        # the foreach iterators below don't work.
        # if we cast it to an "object", it stays as a SimpleXMLObject and doesn't work
        # because our XML is quite simple, we can cast it to an array and back to a 'normal'
        # object and the foreach below works.
        $details = (object) $details;
        $details = (array) $details;
        $details = (object) $details;
        # this is an insert - we do NOT want a system_id
        unset($details->id);

        // set a ip_address if not already 1.5.6
        if (!isset($details->ip)) {
            $details->ip = '';
        }

        $log_details = new stdClass();
        $log_details->message = 'System insert start for '.ip_address_from_db($details->ip).' ('.$details->hostname.')';
        $log_details->severity = 7;
        $log_details->file = 'system';
        stdlog($log_details);

        # ensure we have something not null for all the below
        if (!isset($details->last_seen) or $details->last_seen == '') {
            $details->last_seen = date('Y-m-d H:i:s');
        }
        $details->first_last_seen = $details->last_seen;

        if (!isset($details->description)) {
            $details->description = '';
        }
        if (!isset($details->domain)) {
            $details->domain = '';
        }
        if (!isset($details->form_factor)) {
            $details->form_factor = '';
        }
        if (!isset($details->fqdn)) {
            $details->fqdn = '';
        }
        if (!isset($details->hostname)) {
            $details->hostname = '';
        }
        if (!isset($details->last_seen)) {
            $details->last_seen = $details->last_seen;
        }
        if (!isset($details->manufacturer)) {
            $details->manufacturer = '';
        }
        if (!isset($details->model)) {
            $details->model = '';
        }
        if (!isset($details->os_family)) {
            $details->os_family = '';
        }
        if (!isset($details->os_group)) {
            $details->os_group = '';
        }
        if (!isset($details->os_name)) {
            $details->os_name = '';
        }
        $details->os_name = str_ireplace("(r)", "", $details->os_name);
        $details->os_name = str_ireplace("(tm)", "", $details->os_name);
        if (!isset($details->os_version)) {
            $details->os_version = '';
        }
        if (!isset($details->serial)) {
            $details->serial = '';
        }
        if (!isset($details->status)) {
            $details->status = 'production';
        }
        if (!isset($details->type) or $details->type == '') {
            $details->type = 'unknown';
        } else {
            $details->type = strtolower($details->type);
        }
        if (!isset($details->uuid)) {
            $details->uuid = '';
        }
        if (!isset($details->icon)) {
            $details->icon = '';
        }

        # account for any "" items
        if (!isset($details->description)) {
            $details->description = $details->description;
        }
        if (!isset($details->domain)) {
            $details->domain = $details->domain;
        }
        if (!isset($details->environment)) {
            $details->environment = 'production';
        }
        if (!isset($details->form_factor)) {
            $details->form_factor = $details->form_factor;
        }
        if (!isset($details->manufacturer)) {
            $details->manufacturer = $details->manufacturer;
        }
        if (!isset($details->ip)) {
            $details->ip = '';
        }
        if (!isset($details->model)) {
            $details->model = $details->model;
        }
        if (!isset($details->os_family)) {
            $details->os_family = $details->os_family;
        }
        if (!isset($details->os_group)) {
            $details->os_group = $details->os_group;
        }
        if (!isset($details->os_name)) {
            $details->os_name = $details->os_name;
        }
        $details->os_name = str_ireplace("(r)", "", $details->os_name);
        $details->os_name = str_ireplace("(tm)", "", $details->os_name);
        if (!isset($details->serial)) {
            $details->serial = $details->serial;
        }
        if (!isset($details->status)) {
            $details->status = 'production';
        }
        if (!isset($details->type)) {
            $details->type = $details->type;
        } else {
            $details->type = strtolower($details->type);
        }

        # we now set a default location - 0 the location_id
        if (!isset($details->location_id)) {
            $details->location_id = '0';
        }

        if ((strripos($details->manufacturer, "vmware") !== false) or
            (strripos($details->manufacturer, "parallels") !== false) or
            (strripos($details->manufacturer, "virtual") !== false)) {
            if (!isset($details->class) or $details->class != 'hypervisor') {
                $details->form_factor = 'Virtual';
                $details->form_factor = 'Virtual';
            }
        }

        $details->ip = ip_address_to_db($details->ip);

        if ($details->hostname != '' and $details->domain != '' and $details->fqdn == '') {
            $details->fqdn = $details->hostname.".".$details->domain;
        }

        $sql = "SHOW COLUMNS FROM system";
        $query = $this->db->query($sql);
        $columns = $query->result();

        $sql = "INSERT INTO system ( ";
        foreach ($details as $key => $value) {
            if ($key > '') {
                # need to iterate through available columns and only insert where $key == valid column name
                foreach ($columns as $column) {
                    if ($key == $column->Field) {
                        $sql .= $key.", ";
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= " ) VALUES ( ";
        foreach ($details as $key => $value) {
            if ($key > '') {
                foreach ($columns as $column) {
                    if ($key == $column->Field) {
                        $sql .= "'".mysql_real_escape_string(str_replace('"', '', $value))."', ";
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= ")";

        $query = $this->db->query($sql);
        $details->id = $this->db->insert_id();

        # update the device icon
        $this->m_system->reset_icons($details->id);

        # insert a subnet so we have a default
        if (!isset($details->subnet) or $details->subnet == '') {
            $details->subnet = '0.0.0.0';
        }

        # insert the network card details of we have them
        if ((isset($details->mac_address) and $details->mac_address != '') and
            (isset($details->ip) and $details->ip != '') and
            (isset($details->subnet) and $details->subnet != '') and
            (isset($details->id) and $details->id != '')) {
            $sql = "INSERT INTO sys_hw_network_card_ip (net_mac_address,
				system_id, ip_address_v4, ip_subnet, ip_address_version,
				last_seen, first_last_seen)
				VALUES(LOWER(?), ?, ?, ?, '4', ?, ?)";
            $sql = $this->clean_sql($sql);
            $data = array("$details->mac_address",
                "$details->id",
                "$details->ip",
                "$details->subnet",
                "$details->last_seen",
                "$details->last_seen", );
            $query = $this->db->query($sql, $data);
        }

        $log_details->message = 'System insert end for '.ip_address_from_db($details->ip).' ('.$details->hostname.') (System ID '.$details->id.')';
        stdlog($log_details);
        unset($log_details);

        return $details->id;
    }

    public function update_system($details)
    {
        if (!isset($details->id) or $details->id == '') {
            # this is an update - we need a system_id
            return;
        }

        # nasty hack because when a simplexmlobject is sent (ie, from audit_windows.vbs)
        # the foreach iterators below don't work.
        # if we cast it to an "object", it stays as a SimpleXMLObject and doesn't work
        # because our XML is quite simple, we can cast it to an array and back to a 'normal'
        # object and the foreach below works.
        $details = (object) $details;
        $details = (array) $details;
        $details = (object) $details;

        if (isset($details->ip) and $details->ip != '') {
            $temp_ip = $details->ip.' ';
        } else {
            $temp_ip = '';
        }

        $log_details = new stdClass();
        $log_details->message = 'System update start for '.ip_address_from_db($temp_ip).'('.$details->hostname.') (System ID '.$details->id.')';
        $log_details->severity = 7;
        $log_details->file = 'system';
        stdlog($log_details);

        unset($temp_ip);

        # if we're updating and we don't have a real hostname, only the ip address
        # stored in the hostname field, we shouldn't update it
        if (isset($details->hostname) and strpos($details->hostname, ".")) {
            $sql = "SELECT hostname FROM system WHERE system_id = ?";
            $data = array("$details->id");
            $query = $this->db->query($sql, $data);
            $result = $query->row();
            $db_hostname = $result->hostname;
            if (!strpos($db_hostname, ".")) {
                $details->hostname = $db_hostname;
            }
        }

        if (!isset($details->system_key_type)) {
            $details->system_key_type = '';
        }

        # we have to try to get the 'best' system key
        # the key in the db may be better than what we have
        if (isset($details->system_key)) {
            $sql = "SELECT system_key, system_key_type FROM system WHERE system_id = ?";
            $data = array("$details->id");
            $query = $this->db->query($sql, $data);
            $result = $query->row();
            $result = (object) $result;

            // echo "DB Query: " . $this->db->last_query() . "\n";
            // echo "Result Rows: " . count($result) . "\n";
            // echo "Result:\n";
            // print_r($result);
            // echo "\nDB System Key: " . $result->system_key . "\n";
            // echo "DB System Key Type: " . $result->system_key_type . "\n";

            if (isset($result->system_key) and $result->system_key != '') {
                $db_system_key = $result->system_key;
            } else {
                $db_system_key = '';
            }

            if (isset($result->system_key_type) and $result->system_key_type != '') {
                $db_system_key_type = $result->system_key_type;
            } else {
                $db_system_key_type = '';
            }

            if ($details->system_key_type == 'uuho') {
                # we already have a system key based on UUID . "_" . hostname
            } else {
                # we need to check the existing key
                if ($db_system_key_type == 'uuho') {
                    # the system key in the database is based on UUID . "_" . hostname
                    $details->system_key = $db_system_key;
                    $details->system_key_type = 'uuho';
                } elseif ($db_system_key_type == 'fqdn') {
                    # the system key in the database is based on the fqdn
                    $details->system_key = $db_system_key;
                    $details->system_key_type = 'fqdn';
                } elseif (($db_system_key_type == 'tyse') and ($details->system_key_type == 'ipad')) {
                    # the system key in the database is based on the type and serial
                    $details->system_key = $db_system_key;
                    $details->system_key_type = 'tyse';
                } elseif (($db_system_key_type == 'ipad') and ($details->system_key_type == '')) {
                    # the system key in the database is based on the ip address
                    $details->system_key = $db_system_key;
                    $details->system_key_type = 'ipad';
                }
            }
        }

        # if submitting an nmap scan, do not update the type or type
        if (isset($details->last_seen_by) and $details->last_seen_by == 'nmap') {
            unset($details->type);
            unset($details->type);
        } else {
            if (isset($details->type)) {
                $details->type = strtolower($details->type);
            }
            if (isset($details->type)) {
                $details->type = strtolower($details->type);
            }
        }

        # for removing existing symbols
        if (isset($details->os_name)) {
            $details->os_name = str_ireplace("(r)", "", $details->os_name);
            $details->os_name = str_ireplace("(tm)", "", $details->os_name);
        }

        # we check a few  items when we are submitting an audit script result
        # if they are blank (previously submitted info is incomplete) we over write them
        # we would not normally over write  items
        if (isset($details->last_seen_by) and ($details->last_seen_by == 'audit' or $details->last_seen_by == 'snmp')) {
            $sql = "SELECT * FROM system WHERE system_id = ? LIMIT 1";
            $data = array("$details->id");
            $query = $this->db->query($sql, $data);
            $row = $query->row();

            if (count($row) > 0) {

                # if the database entry for manufacturer is empty but we have something from an audit, set it.
                if ($row->manufacturer == '' and isset($details->manufacturer)) {
                    $details->manufacturer = $details->manufacturer;
                } else {
                    unset($details->manufacturer);
                }
                # account for a manufacturer attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->manufacturer == $row->manufacturer) and isset($details->manufacturer) and ($details->manufacturer != $row->manufacturer)) {
                    $details->manufacturer = $details->manufacturer;
                }

                # if the database entry for model is empty but we have something from an audit, set it.
                if ($row->model == '' and isset($details->model)) {
                    $details->model = $details->model;
                } else {
                    unset($details->model);
                }
                # account for a model attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->model == $row->model) and isset($details->model) and ($details->model != $row->model)) {
                    $details->model = $details->model;
                }

                # if the database entry for serial is empty but we have something from an audit, set it.
                if ($row->serial == '' and isset($details->serial)) {
                    $details->serial = $details->serial;
                } else {
                    unset($details->serial);
                }
                # account for a serial attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->serial == $row->serial) and isset($details->serial) and ($details->serial != $row->serial)) {
                    $details->serial = $details->serial;
                }

                # if the database entry for description is empty but we have something from an audit, set it.
                if ($row->description == '' and isset($details->description)) {
                    $details->description = $details->description;
                } else {
                    unset($details->description);
                }
                # account for a description attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->description == $row->description) and isset($details->description) and ($details->description != $row->description)) {
                    $details->description = $details->description;
                }

                # if the database entry for form_factor is empty but we have something from an audit, set it.
                if ($row->form_factor == '' and isset($details->form_factor)) {
                    $details->form_factor = $details->form_factor;
                } else {
                    unset($details->form_factor);
                }
                # account for a form_factor attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->form_factor == $row->form_factor) and isset($details->form_factor) and ($details->form_factor != $row->form_factor)) {
                    $details->form_factor = $details->form_factor;
                }

                # if the database entry for os_group is empty but we have something from an audit, set it.
                if ($row->os_group == '' and isset($details->os_group)) {
                    $details->os_group = $details->os_group;
                } else {
                    unset($details->os_group);
                }
                # account for a os_group attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->os_group == $row->os_group) and isset($details->os_group) and ($details->os_group != $row->os_group)) {
                    $details->os_group = $details->os_group;
                }

                # if the database entry for os_family is empty but we have something from an audit, set it.
                if ($row->os_family == '' and isset($details->os_family)) {
                    $details->os_family = $details->os_family;
                } else {
                    unset($details->os_family);
                }
                # account for a os_family attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->os_family == $row->os_family) and isset($details->os_family) and ($details->os_family != $row->os_family)) {
                    $details->os_family = $details->os_family;
                }

                # if the database entry for type is not set or 'unknown', update it
                if ($row->type == '' or $row->type == 'unknown') {
                    if (isset($details->type) and $details->type > '' and $details->type != 'unknown') {
                        $details->type = strtolower($details->type);
                    }
                }

                # if the database entry for os_name is empty but we have something from an audit, set it.
                if ($row->os_name == '' and isset($details->os_name)) {
                    $details->os_name = $details->os_name;
                } else {
                    unset($details->os_name);
                }
                # account for a os_name attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->os_name == $row->os_name) and isset($details->os_name) and ($details->os_name != $row->os_name)) {
                    $details->os_name = $details->os_name;
                }

                if (strlen($row->hostname) > 15 and isset($details->hostname) and strlen($details->hostname) == 15) {
                    unset($details->hostname);
                }

                if (isset($details->manufacturer) and (
                    (strripos($details->manufacturer, "vmware") !== false) or
                    (strripos($details->manufacturer, "parallels") !== false) or
                    (strripos($details->manufacturer, "virtual") !== false))) {
                    $details->form_factor = 'Virtual';
                    $details->form_factor = 'Virtual';
                }

                if ($row->icon != '') {
                    if (isset($details->icon)) {
                        unset($details->icon);
                    }
                } else {
                    if (!isset($details->icon) or $details->icon == '') {
                        $details->icon = $details->type;
                    }
                }
            } // end of row count > 0
        }

        if (!isset($details->last_seen) or $details->last_seen == '') {
            $details->last_seen = date('Y-m-d H:i:s');
        }

        $sql_last_seen = "SELECT last_seen FROM system WHERE system_id = ?";
        $sql_data = array("$details->id");
        $query = $this->db->query($sql_last_seen, $sql_data);
        $row = $query->row();
        $details->original_last_seen = $row->last_seen;

        // # only update system.last_seen if we have an audit result - not for nmap, snmp, etc
        // if (isset($details->last_seen_by) and $details->last_seen_by == 'audit') {
        // 	# leave it alone
        // } else {
        // 	unset ($details->last_seen);
        // 	unset ($details->first_last_seen);
        // }

        if (isset($details->ip)) {
            $details->ip = ip_address_to_db($details->ip);
        }

        # if we don't have a real ip address, remove it
        if ((isset($details->ip)) and
            ($details->ip == '' or
            $details->ip == '0.0.0.0' or
            $details->ip == '000.000.000.000')) {
            unset($details->ip);
        }

        $sql = "SHOW COLUMNS FROM system";
        $query = $this->db->query($sql);
        $columns = $query->result();
        $sql = "UPDATE system SET ";
        foreach ($details as $key => $value) {
            if (($key != '') and ($value != '')) {
                # need to iterate through available columns and only insert where $key == valid column name
                foreach ($columns as $column) {
                    if ($key == $column->Field) {
                        $sql .= $key." = '".str_replace("'", "\'", $value)."', ";
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= " WHERE system_id = '".$details->id."'";
        $query = $this->db->query($sql);

        # finally, update the device icon
        $this->m_system->reset_icons($details->id);

        if (isset($details->mac_address) and $details->mac_address != '' and
            isset($details->ip) and $details->ip != '') {
            # we need to check if we have an entry in sys_hw_network_card
            # if we do not, but we have details (ex- an nmap device that previously existed but did not have a MAC, but now does)
            # we need to insert it.
            # ideally this would have already been done when the device was initially discovered, but we cannot count on that.
            # need to check if an entry in sys_hw_network_card exists and if it does not AND we have details, insert something

            # check to see if we have a last_seen
            if (!isset($details->last_seen) or $details->last_seen == '') {
                $sql = "SELECT last_seen, last_seen FROM system WHERE system_id = ?";
                $data = array("$details->id");
                $query = $this->db->query($sql, $data);
                $result = $query->result();
                foreach ($result as $db_details) {
                    if (!isset($db_details->last_seen) or $db_details->last_seen == '') {
                        if (!isset($db_details->last_seen) or $db_details->last_seen == '') {
                            # should NEVER get here - this would indicate nothing in last_seen AND nothing in last_seen
                        } else {
                            $details->last_seen = $db_details->last_seen;
                        }
                    } else {
                        $details->last_seen = $db_details->last_seen;
                    }
                }
            }

            # insert a subnet so we have a default
            if (!isset($details->subnet) or $details->subnet == '') {
                $details->subnet = '0.0.0.0';
            }

            # search for any entries in both sys_hw_network_card_ip
            $sql = "SELECT * FROM sys_hw_network_card_ip WHERE system_id = ? AND net_mac_address = LOWER(?) AND (last_seen = ? OR last_seen = ?)";
            $data = array("$details->id", "$details->mac_address", "$details->last_seen", "$details->original_last_seen");
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (count($result) == 0) {
                # no match - insert
                $sql = "INSERT INTO sys_hw_network_card_ip (net_mac_address, system_id, ip_address_v4, ip_subnet, ip_address_version, last_seen, first_last_seen) VALUES(LOWER(?), ?, ?, ?, '4', ?, ?)";
                $sql = $this->clean_sql($sql);
                $data = array("$details->mac_address", "$details->id", "$details->ip", "$details->subnet", "$details->last_seen", "$details->last_seen");
                $query = $this->db->query($sql, $data);
            } else {
                # match - update last_seen only
                $sql = "UPDATE sys_hw_network_card_ip SET last_seen = ? WHERE system_id = ? AND net_mac_address = LOWER(?) AND (last_seen = ? OR last_seen = ?)";
                $data = array("$details->last_seen", "$details->id", "$details->mac_address", "$details->last_seen", "$details->original_last_seen");
                $query = $this->db->query($sql, $data);
            }
        }

        # As at 1.5, update the last_seens in the linked tables
        if ($details->last_seen_by != 'audit') {
            if ($details->last_seen_by != 'snmp') {
                $table_array = array('sys_hw_bios', 'sys_hw_hard_drive', 'sys_hw_memory', 'sys_hw_monitor', 'sys_hw_motherboard', 'sys_hw_network_card',
                    'sys_hw_optical_drive', 'sys_hw_partition', 'sys_hw_processor', 'sys_hw_scsi_controller', 'sys_hw_sound', 'sys_hw_video', 'sys_hw_warranty',
                    'sys_sw_database', 'sys_sw_database_details', 'sys_sw_dns', 'sys_sw_group', 'sys_sw_log', 'sys_sw_netstat', 'sys_sw_pagefile', 'sys_sw_print_queue',
                    'sys_sw_route', 'sys_sw_scheduled_task', 'sys_sw_service', 'sys_sw_share', 'sys_sw_share_perms', 'sys_sw_software', 'sys_sw_software_key',
                    'sys_sw_user', 'sys_sw_variable', 'sys_sw_virtual_machine', 'sys_sw_web_server', 'sys_sw_web_server_ext', 'sys_sw_web_site',
                    'sys_sw_web_site_header', 'sys_sw_web_site_virtual', 'sys_sw_windows', );
            } else {
                $table_array = array('sys_hw_bios', 'sys_hw_hard_drive', 'sys_hw_memory', 'sys_hw_monitor', 'sys_hw_motherboard',
                    'sys_hw_optical_drive', 'sys_hw_partition', 'sys_hw_processor', 'sys_hw_scsi_controller', 'sys_hw_sound', 'sys_hw_video', 'sys_hw_warranty',
                    'sys_sw_database', 'sys_sw_database_details', 'sys_sw_dns', 'sys_sw_group', 'sys_sw_log', 'sys_sw_netstat', 'sys_sw_pagefile', 'sys_sw_print_queue',
                    'sys_sw_route', 'sys_sw_scheduled_task', 'sys_sw_service', 'sys_sw_share', 'sys_sw_share_perms', 'sys_sw_software', 'sys_sw_software_key',
                    'sys_sw_user', 'sys_sw_variable', 'sys_sw_web_server', 'sys_sw_web_server_ext', 'sys_sw_web_site',
                    'sys_sw_web_site_header', 'sys_sw_web_site_virtual', 'sys_sw_windows', );
            }
            foreach ($table_array as $key => $value) {
                $update_sql = "UPDATE $value SET last_seen = ? WHERE last_seen = ? AND system_id = ?";
                $update_data = array("$details->last_seen", "$details->original_last_seen", "$details->id");
                $query = $this->db->query($update_sql, $update_data);
            }
        }
        if (isset($details->ip) and $details->ip != '') {
            $temp_ip = $details->ip.' ';
        } else {
            $temp_ip = '';
        }

        $log_details->message = 'System update end for '.ip_address_from_db($temp_ip).'('.$details->hostname.') (System ID '.$details->id.')';
        stdlog($log_details);
        unset($log_details);
        unset($temp_ip);
    }

    public function reset_icons($system_id = '')
    {
        if ($system_id != '') {
            $sql = "SELECT system_id, type, os_name, os_family, os_group, manufacturer, icon, icon FROM system WHERE system_id = ".$system_id;
        } else {
            $sql = "SELECT system_id, type, os_name, os_family, os_group, manufacturer, icon, icon FROM system";
        }
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $query->num_rows();
        // we set computer icons by OS, everything else by type
        foreach ($result as $details) {
            if ($details->type == 'computer') {
                // determine icon for computer
                // most generic to most specific

                // manufacturer based
                if (strripos($details->manufacturer, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->manufacturer, "vmware") !== false) {
                    $details->icon = 'vmware';
                }

                // os_group based
                if (strripos($details->os_group, "linux") !== false) {
                    $details->icon = 'linux';
                }
                if (strripos($details->os_group, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_group, "windows") !== false) {
                    $details->icon = 'windows';
                }

                // os name based
                if ((strripos($details->os_name, "osx") !== false) or
                    (strpos(strtolower($details->os_name), "ios") !== false)) {
                    $details->icon = 'apple';
                }
                if (strripos($details->os_name, "bsd") !== false) {
                    $details->icon = 'bsd';
                }
                if (strripos($details->os_name, "centos") !== false) {
                    $details->icon = 'centos';
                }
                if (strripos($details->os_name, "debian") !== false) {
                    $details->icon = 'debian';
                }
                if (strripos($details->os_name, "fedora") !== false) {
                    $details->icon = 'fedora';
                }
                if ((strripos($details->os_name, "mandriva") !== false) or
                    (strripos($details->os_name, "mandrake") !== false)) {
                    $details->icon = 'mandriva';
                }
                if (strripos($details->os_name, "mint") !== false) {
                    $details->icon = 'mint';
                }
                if (strripos($details->os_name, "novell") !== false) {
                    $details->icon = 'novell';
                }
                if (strripos($details->os_name, "slackware") !== false) {
                    $details->icon = 'slackware';
                }
                if (strripos($details->os_name, "suse") !== false) {
                    $details->icon = 'suse';
                }
                if ((strripos($details->os_name, "red hat") !== false) or
                    (strripos($details->os_name, "redhat") !== false)) {
                    $details->icon = 'redhat';
                }
                if (strripos($details->os_name, "ubuntu") !== false) {
                    $details->icon = 'ubuntu';
                }
                if (strripos($details->os_name, "vmware") !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->os_name, "windows") !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->os_name, "microsoft") !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->os_name, "windows 2000") !== false) {
                    $details->icon = 'windows_2000';
                }
                if (strripos($details->os_name, "server 2003") !== false) {
                    $details->icon = 'windows_2003';
                }
                if (strripos($details->os_name, "server 2008") !== false) {
                    $details->icon = 'windows_2008';
                }
                if (strripos($details->os_name, "server 2012") !== false) {
                    $details->icon = 'windows_2012';
                }
                if (strripos($details->os_name, "windows 7") !== false) {
                    $details->icon = 'windows_7';
                }
                if (strripos($details->os_name, "windows 8") !== false) {
                    $details->icon = 'windows_8';
                }
                if (strripos($details->os_name, "windows nt") !== false) {
                    $details->icon = 'windows_nt';
                }
                if (strripos($details->os_name, "windows rt") !== false) {
                    $details->icon = 'windows_rt';
                }
                if (strripos($details->os_name, "vista") !== false) {
                    $details->icon = 'windows_vista';
                }
                if (strripos($details->os_name, "windows xp") !== false) {
                    $details->icon = 'windows_xp';
                }
            } else {
                // device is not type=computer
                // base icon on type
                if (strpos($details->type, "|") === false) {
                    $details->icon = str_replace(" ", "_", $details->type);
                } else {
                    $details->icon = 'unknown';
                }
            }

            $sql = "UPDATE system SET icon = ?, icon = ? WHERE system_id = ?";
            $data = array("$details->icon", "$details->icon", "$details->id");
            $query = $this->db->query($sql, $data);
        }

        return ($count);
    }

    public function update_credentials($credentials, $system_id)
    {
        if ($system_id == '') {
            return;
        }
        $this->load->library('encrypt');
        $sql = "SELECT access_details FROM system WHERE system_id = ? LIMIT 1";
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (isset($row->access_details) and $row->access_details > '') {
            $decoded_access_details = $this->encrypt->decode($row->access_details);
            $decoded_access_details = json_decode($decoded_access_details);
            if (!isset($decoded_access_details->ip_address)) {
                $decoded_access_details->ip_address = '';
            }
            if (!isset($decoded_access_details->snmp_version)) {
                $decoded_access_details->snmp_version = '';
            }
            if (!isset($decoded_access_details->snmp_community)) {
                $decoded_access_details->snmp_community = '';
            }
            if (!isset($decoded_access_details->ssh_username)) {
                $decoded_access_details->ssh_username = '';
            }
            if (!isset($decoded_access_details->ssh_password)) {
                $decoded_access_details->ssh_password = '';
            }
            if (!isset($decoded_access_details->windows_username)) {
                $decoded_access_details->windows_username = '';
            }
            if (!isset($decoded_access_details->windows_password)) {
                $decoded_access_details->windows_password = '';
            }
            if (!isset($decoded_access_details->windows_domain)) {
                $decoded_access_details->windows_domain = '';
            }
        } else {
            $decoded_access_details = new stdClass();
            $decoded_access_details->ip_address = "";
            $decoded_access_details->snmp_version = "";
            $decoded_access_details->snmp_community = "";
            $decoded_access_details->ssh_username = "";
            $decoded_access_details->ssh_password = "";
            $decoded_access_details->windows_username = "";
            $decoded_access_details->windows_password = "";
            $decoded_access_details->windows_domain = "";
        }
        # we now have any existing credentials - compare and update if required
        if (isset($credentials->ip_address) and $credentials->ip_address != '') {
            $new_credentials['ip_address'] = (string) $credentials->ip_address;
        } else {
            $new_credentials['ip_address'] = (string) $decoded_access_details->ip_address;
        }

        if (isset($credentials->snmp_community) and $credentials->snmp_community != '') {
            $new_credentials['snmp_community'] = (string) $credentials->snmp_community;
        } else {
            $new_credentials['snmp_community'] = $decoded_access_details->snmp_community;
        }

        if (isset($credentials->snmp_version) and $credentials->snmp_version != '') {
            $new_credentials['snmp_version'] = (string) $credentials->snmp_version;
        } else {
            $new_credentials['snmp_version'] = (string) $decoded_access_details->snmp_version;
        }

        if (isset($credentials->ssh_username) and $credentials->ssh_username != '') {
            $new_credentials['ssh_username'] = (string) $credentials->ssh_username;
        } else {
            $new_credentials['ssh_username'] = (string) $decoded_access_details->ssh_username;
        }

        if (isset($credentials->ssh_password) and $credentials->ssh_password != '') {
            $new_credentials['ssh_password'] = (string) $credentials->ssh_password;
        } else {
            $new_credentials['ssh_password'] = (string) $decoded_access_details->ssh_password;
        }

        if (isset($credentials->windows_username) and $credentials->windows_username != '') {
            $new_credentials['windows_username'] = (string) $credentials->windows_username;
        } else {
            $new_credentials['windows_username'] = (string) $decoded_access_details->windows_username;
        }

        if (isset($credentials->windows_password) and $credentials->windows_password != '') {
            $new_credentials['windows_password'] = (string) $credentials->windows_password;
        } else {
            $new_credentials['windows_password'] = (string) $decoded_access_details->windows_password;
        }

        if (isset($credentials->windows_domain) and $credentials->windows_domain != '') {
            $new_credentials['windows_domain'] = (string) $credentials->windows_domain;
        } else {
            $new_credentials['windows_domain'] = (string) $decoded_access_details->windows_domain;
        }

        # now encrypt what we have and store it
        $encoded = json_encode($new_credentials);
        $encoded = $this->encrypt->encode($encoded);
        $sql = "UPDATE system SET access_details = ? WHERE system_id = ?";
        $data = array($encoded, $system_id);
        $query = $this->db->query($sql, $data);

        return;
    }

    public function get_credentials($system_id)
    {
        if ($system_id == '') {
            return;
        }
        $sql = "SELECT access_details FROM system WHERE system_id = ? LIMIT 1";
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (isset($row->access_details) and $row->access_details > '') {
            $this->load->library('encrypt');
            $decoded_access_details = $this->encrypt->decode($row->access_details);
            $decoded_access_details = json_decode($decoded_access_details);
            if (!isset($decoded_access_details->ip_address)) {
                $decoded_access_details->ip_address = '';
            }
            if (!isset($decoded_access_details->snmp_version)) {
                $decoded_access_details->snmp_version = '';
            }
            if (!isset($decoded_access_details->snmp_community)) {
                $decoded_access_details->snmp_community = '';
            }
            if (!isset($decoded_access_details->ssh_username)) {
                $decoded_access_details->ssh_username = '';
            }
            if (!isset($decoded_access_details->ssh_password)) {
                $decoded_access_details->ssh_password = '';
            }
            if (!isset($decoded_access_details->windows_username)) {
                $decoded_access_details->windows_username = '';
            }
            if (!isset($decoded_access_details->windows_password)) {
                $decoded_access_details->windows_password = '';
            }
            if (!isset($decoded_access_details->windows_domain)) {
                $decoded_access_details->windows_domain = '';
            }
        } else {
            $decoded_access_details = new stdClass();
            $decoded_access_details->ip_address = "";
            $decoded_access_details->snmp_version = "";
            $decoded_access_details->snmp_community = "";
            $decoded_access_details->ssh_username = "";
            $decoded_access_details->ssh_password = "";
            $decoded_access_details->windows_username = "";
            $decoded_access_details->windows_password = "";
            $decoded_access_details->windows_domain = "";
        }

        return($decoded_access_details);
    }
}
