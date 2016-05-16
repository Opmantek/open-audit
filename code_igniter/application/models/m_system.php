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
        $sql = "SELECT access_details FROM system WHERE system_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (count($row) > 0) {
            return($row->access_details);
        } else {
            return;
        }
    }

    public function create_system_key($details, $display = 'n')
    {
        $log_details = new stdClass();
        $log_details->message = 'System Key being generated for '.$details->hostname.' at '.$details->man_ip_address;
        $log_details->severity = 7;
        $log_details->file = 'system';
        if ($display != 'y') {
            $display = 'n';
        }
        $log_details->display = $display;
        unset($display);
        stdlog($log_details);

        $details = (object) $details;
        if (!isset($details->system_key)) {
            $details->system_key = '';
        }

        if (!isset($details->system_key_type)) {
            $details->system_key_type = '';
        }

        if (!empty($details->hostname) and !empty($details->domain) and $details->domain != '' and $details->domain != '.' and empty($details->fqdn)) {
            $details->fqdn = $details->hostname.".".$details->domain;
        } else {
            $details->fqdn = '';
        }

        # this is a computer from an audit script
        # this is the 'best' type of key
        if (isset($details->uuid) and $details->uuid != '' and
            isset($details->hostname) and $details->hostname != '') {
            $details->system_key = $details->uuid."-".$details->hostname;
            $details->system_key_type = 'uuho';
            $log_details->message = "System Key is $details->system_key for $details->hostname type uuho at $details->man_ip_address";
            stdlog($log_details);
        }

        # this is anything that has a FQDN
        if ((isset($details->fqdn) and $details->fqdn != '') and ($details->system_key_type != 'uuho')) {
            $details->system_key = $details->fqdn;
            $details->system_key_type = 'fqdn';
            $log_details->message = "System Key is $details->system_key for $details->hostname type fqdn at $details->man_ip_address";
            stdlog($log_details);
        }

        # We might have only a serial number
        # if this is all we have, we also require a type.
        # first check to make sure we have a type or man_type
        if ((!isset($details->type) or $details->type == '') and isset($details->man_type) and $details->man_type != '') {
            $details->type = $details->man_type;
        }

        # next check if we also have a serial and set the system_key if so
        if (isset($details->serial) and $details->serial != '') {
            if (isset($details->type) and $details->type != '') {
                if ($details->system_key_type  != 'uuho' and $details->system_key_type != 'fqdn') {
                    $details->system_key = $details->type."_".$details->serial;
                    $details->system_key_type = 'tyse';
                    $log_details->message = "System Key is $details->system_key for $details->hostname type tyse at $details->man_ip_address";
                    stdlog($log_details);
                }
            }
        }

        # lastly, just an IP Address
        if (isset($details->man_ip_address) and $details->man_ip_address != '' and
            $details->man_ip_address != '0.0.0.0' and $details->man_ip_address != '000.000.000.000' and
            $details->system_key_type != 'uuho' and $details->system_key_type  != 'fqdn' and $details->system_key_type != 'tyse') {
            $details->system_key = $details->man_ip_address;
            $details->system_key_type = 'ipad';
            $log_details->message = "System Key is $details->system_key for $details->hostname type ipad at $details->man_ip_address";
            stdlog($log_details);
        }

        if ($details->system_key == '') {
            $log_details->message = "System Key is blank for $details->hostname ERROR at $details->man_ip_address";
            $log_details->severity = 5;
            stdlog($log_details);
        }

        unset($log_details);

        return $details->system_key;
    }

    public function find_system($details, $display = 'n')
    {
        # we are searching for a system_id.
        # search order is:
        # system_key, mac_address, man_ip_address, serial, man_serial, hostname
        $details = (object) $details;
        $details->system_id = '';

        $log_details = new stdClass();
        $log_details->severity = 7;
        $log_details->file = 'system';
        if ($display != 'y') {
            $display = 'n';
        }
        $log_details->display = $display;
        unset($display);

        if (!empty($details->uuid) and !empty($details->hostname)) {
            $sql = "SELECT system.system_id FROM system WHERE system.uuid = ? AND system.hostname = ? AND system.man_status = 'production' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->uuid", "$details->hostname");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->system_id = $row->system_id;
                $log_details->message = 'HIT on uuid + hostname for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
                stdlog($log_details);
            }
        }

        if (!empty($details->dbus_identifier)) {
            $sql = "SELECT system.system_id FROM system WHERE system.dbus_identifier = ? AND system.man_status = 'production' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->dbus_identifier");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->system_id = $row->system_id;
                $log_details->message = 'HIT on dbus_identifier short for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
                stdlog($log_details);
            }
        }

        if (!empty($details->uuid) and !empty($details->hostname) and strlen($details->hostname) > 15) {
            $temp_hostname = substr($details->hostname, 0, 15);
            $sql = "SELECT system.system_id FROM system WHERE system.uuid = ? AND system.hostname = ? AND system.man_status = 'production' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->uuid", "$temp_hostname");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->system_id = $row->system_id;
                $log_details->message = 'HIT on uuid + hostname short for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
                stdlog($log_details);
            }
            unset($temp_hostname);
        }

        if (!empty($details->hostname) and !empty($details->domain) and $details->domain != '' and $details->domain != '.' and empty($details->fqdn)) {
            $details->fqdn = $details->hostname.".".$details->domain;
        } else {
            $details->fqdn = '';
        }

        if (empty($details->system_id) and !empty($details->fqdn)) {
            $sql = "SELECT system.system_id FROM system WHERE system.fqdn = ? AND system.man_status = 'production' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->fqdn");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->system_id = $row->system_id;
                $log_details->message = 'HIT on fqdn for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
                stdlog($log_details);
            }
        }

        if (empty($details->system_id) and !empty($details->serial) and !empty($details->type)) {
            $sql = "SELECT system.system_id FROM system WHERE system.serial = ? AND system.type = ? AND system.man_status = 'production' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->serial", "$details->type");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->system_id = $row->system_id;
                $log_details->message = 'HIT on serial + type for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
                stdlog($log_details);
            }
        }

        // # check system_key
        // if (isset($details->system_key) and $details->system_id == '') {
        //     $sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
        //     $sql = $this->clean_sql($sql);
        //     $data = array("$details->system_key");
        //     $query = $this->db->query($sql, $data);
        //     $row = $query->row();
        //     if (count($row) > 0) {
        //         $details->system_id = $row->system_id;
        //         $log_details->message = 'HIT on system_key for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
        //         stdlog($log_details);
        //     }
        // }

        // # check if the previous hostname had 15 characters and the submittied hostname has > 15
        // if (isset($details->hostname) and strlen($details->hostname) > 15 and isset($details->uuid) and $details->system_id == '') {
        //     $temp_uuid = $details->uuid."-".substr($details->hostname, 0, 15);
        //     $sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
        //     $sql = $this->clean_sql($sql);
        //     $data = array("$temp_uuid");
        //     $query = $this->db->query($sql, $data);
        //     $row = $query->row();
        //     if (count($row) > 0) {
        //         $details->system_id = $row->system_id;
        //         $log_details->message = 'HIT on truncated system_key for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
        //         stdlog($log_details);
        //     }
        // }

        // # use the full hostname as provided
        // if (isset($details->hostname) and isset($details->uuid) and $details->system_id == '') {
        //     $temp_uuid = $details->uuid."-".$details->hostname;
        //     $sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
        //     $sql = $this->clean_sql($sql);
        //     $data = array("$temp_uuid");
        //     $query = $this->db->query($sql, $data);
        //     $row = $query->row();
        //     if (count($row) > 0) {
        //         $details->system_id = $row->system_id;
        //         $log_details->message = 'HIT on hostname + uuid system_key for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
        //         stdlog($log_details);
        //     }
        // }

        // # check for a FQDN
        // if (isset($details->fqdn) and $details->fqdn != '' and $details->system_id == '') {
        //     $sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
        //     $sql = $this->clean_sql($sql);
        //     $data = array("$details->fqdn");
        //     $query = $this->db->query($sql, $data);
        //     $row = $query->row();
        //     if (count($row) > 0) {
        //         $details->system_id = $row->system_id;
        //         $log_details->message = 'HIT on fqdn for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
        //         stdlog($log_details);
        //     }
        // }

        // # check for a hostname + domain, making a FQDN
        // if (isset($details->hostname) and $details->hostname != '' and isset($details->domain) and $details->domain != '' and $details->system_id == '') {
        //     $details->fqdn = $details->hostname.".".$details->domain;
        //     $sql = "SELECT system.system_id FROM system WHERE system_key = ? AND system.man_status = 'production' LIMIT 1";
        //     $sql = $this->clean_sql($sql);
        //     $data = array("$details->fqdn");
        //     $query = $this->db->query($sql, $data);
        //     $row = $query->row();
        //     if (count($row) > 0) {
        //         $details->system_id = $row->system_id;
        //         $log_details->message = 'HIT on host + domain for '.ip_address_from_db($details->man_ip_address).' (System ID '.$details->system_id.')';
        //         stdlog($log_details);
        //     }
        // }

        # TODO: fix this by making sure (snmp in particular) calls with the proper variable name
        if (!isset($details->mac_address) and (isset($details->mac))) {
            $details->mac_address = $details->mac;
        }

        $mac_match = 'n';
        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'discovery_mac_match'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        $mac_match = @$row->config_value;
        if (empty($mac_match) or (isset($mac_match) and $mac_match != 'n')) {
            $mac_match = 'y';
        }

        if ($mac_match == 'y') {
            # NOTE - the below mac address prefixes are used by VMware and resulting full mac addresses 'may' not be unique
            # AND LOWER(ip.mac) NOT LIKE '00:0c:29:%' AND ip.mac NOT LIKE '00:50:56:%' AND ip.mac NOT LIKE '00:05:69:%' AND LOWER(ip.mac) NOT LIKE '00:1c:14:%'
            # We may excule these as another option in future versions

            # check MAC Address - this caters for a single mac address, usually from a nmap result
            if (isset($details->mac_address) and $details->mac_address > '' and $details->mac_address != '00:00:00:00:00:00' and $details->system_id == '') {
                # check the ip table
                $sql = "SELECT system.system_id FROM system LEFT JOIN ip ON (system.system_id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.man_status = 'production' LIMIT 1";
                $sql = $this->clean_sql($sql);
                $data = array("$details->mac_address");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->system_id = $row->system_id;
                    $log_details->message = 'HIT on mac address for '.$details->man_ip_address.' (System ID '.$details->system_id.')';
                    stdlog($log_details);
                }
            }

            # check all MAC addresses - this caters for an actual audit script result
            if (isset($details->mac_addresses) and count($details->mac_addresses) > 0 and $details->system_id == '') {
                foreach ($details->mac_addresses as $mac_address) {
                    foreach ($mac_address as $mac) {
                        if ($mac != '' and $mac != '00:00:00:00:00:00') {
                            # check the ip table
                            $sql = "SELECT system.system_id FROM system LEFT JOIN ip ON (system.system_id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.man_status = 'production' LIMIT 1";
                            $sql = $this->clean_sql($sql);
                            $data = array("$mac");
                            $query = $this->db->query($sql, $data);
                            $row = $query->row();
                            if (count($row) > 0) {
                                $details->system_id = $row->system_id;
                                $log_details->message = 'HIT on mac address from audit result for '.strtolower($mac).' (System ID '.$row->system_id.')';
                                stdlog($log_details);
                            }
                        }
                    }
                }
            }
        }

        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'discovery_ip_match'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        $ip_match = @$row->config_value;
        if (!isset($ip_match) or is_null($ip_match)) {
            $ip_match = 'y';
        }

        # check IP Address in system, then ip tables
        if ($ip_match == 'y') {
            if (isset($details->man_ip_address) and
                    $details->man_ip_address > '' and
                    $details->man_ip_address != '0.0.0.0' and
                    $details->man_ip_address != '000.000.000.000' and
                    filter_var($details->man_ip_address, FILTER_VALIDATE_IP)) {

                # first check the ip table as eny existing devices that have been seen
                # by more than just Nmap will have an entry here
                if ($details->system_id == '') {
                    $sql = "SELECT system.system_id FROM system LEFT JOIN ip ON (system.system_id = ip.system_id AND ip.current = 'y') WHERE ip.ip = ? AND system.man_status = 'production' LIMIT 1";
                    $sql = $this->clean_sql($sql);
                    $data = array(ip_address_to_db($details->man_ip_address), "$details->man_ip_address");
                    $query = $this->db->query($sql, $data);
                    $row = $query->row();
                    if (count($row) > 0) {
                        $details->system_id = $row->system_id;
                        $log_details->message = 'HIT on ip_address in network table for '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                        stdlog($log_details);
                    }
                }

                # next check the system table for a man_ip_address match
                if ($details->system_id == '') {
                    $sql = "SELECT system.system_id FROM system WHERE man_ip_address = ? and system.man_status = 'production'";
                    $sql = $this->clean_sql($sql);
                    $data = array(ip_address_to_db($details->man_ip_address));
                    $query = $this->db->query($sql, $data);
                    $row = $query->row();
                    if (count($row) > 0) {
                        $details->system_id = $row->system_id;
                        $log_details->message = 'HIT on man_ip_address for '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                        stdlog($log_details);
                    }
                }

                # finally one last try - check for a minimal matching system_key
                if ($details->system_id == '') {
                    $sql = "SELECT system.system_id FROM system WHERE system_key = ? and system.man_status = 'production'";
                    $sql = $this->clean_sql($sql);
                    $data = array(ip_address_to_db($details->man_ip_address));
                    $query = $this->db->query($sql, $data);
                    $row = $query->row();
                    if (count($row) > 0) {
                        $details->system_id = $row->system_id;
                        $log_details->message = 'HIT on man_ip_address == system_key for '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                        stdlog($log_details);
                    }
                }
            }
        }

        # check serial
        # in this case, we also need to know a TYPE
        if (isset($details->serial) and $details->serial > '' and $details->system_id == '') {
            if ((!isset($details->type) or $details->type == '') and
                isset($details->man_type) and $details->man_type != '') {
                $details->type = $details->man_type;
            }
            if ($details->type != '' or $details->man_type != '') {
                $sql = "SELECT system.system_id FROM system WHERE system.system_key = ? AND system.man_status = 'production'";
                $sql = $this->clean_sql($sql);
                $data = array("$details->type"."_"."$details->serial");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->system_id = $row->system_id;
                }

                if ($details->system_key == '') {
                    $sql = "SELECT system.system_id FROM system WHERE system.serial = ? AND (system.man_type = ? OR system.type = ?) AND system.man_status = 'production'";
                    $sql = $this->clean_sql($sql);
                    $data = array("$details->serial", "$details->man_type", "$details->type");
                    $query = $this->db->query($sql, $data);
                    $row = $query->row();
                    if (count($row) > 0) {
                        $details->system_id = $row->system_id;
                        $log_details->message = 'HIT on serial for '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                        stdlog($log_details);
                    }
                }
            }
        }

        # check man_serial
        if (isset($details->man_serial) and $details->man_serial > '' and $details->system_id == '') {
            if (isset($details->man_type) and $details->man_type > '') {
                $man_type = $details->man_type;
            }
            if (!isset($man_type)) {
                $man_type = '';
            }
            if (isset($details->type) and $details->type > '') {
                $type = $details->type;
            }
            if ($type > '' or $man_type > '') {
                $sql = "SELECT system.system_id FROM system WHERE system.man_serial = ? AND (system.man_type = ? OR system.type = ?) AND system.man_status = 'production'";
                $sql = $this->clean_sql($sql);
                $data = array("$details->man_serial", "$details->man_type", "$details->type");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->system_id = $row->system_id;
                    $log_details->message = 'HIT on man_serial for '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }
        }

        $sql = "SELECT config_value FROM oa_config WHERE config_name = 'discovery_name_match'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();
        $name_match = @$row->config_value;
        if (!isset($name_match) or is_null($name_match)) {
            $name_match = 'n';
        }

        if (isset($name_match) and $name_match == "y") {
            # check hostname
            if (isset($details->hostname) and $details->hostname != '' and $details->system_id == '') {
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
                $sql = "SELECT system.system_id FROM system WHERE (hostname = ? or hostname = ?) AND system.man_status = 'production'";
                $sql = $this->clean_sql($sql);
                $data = array("$hostname", "$details->hostname");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->system_id = $row->system_id;
                    $log_details->message = 'HIT on hostname for '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }

            # check short hostname in $details
            if (isset($details->hostname) and $details->hostname != '' and $details->system_id == '') {
                if (isset($details->hostname_length) and $details->hostname_length == 'short') {
                    # we grabbed the hostname from SNMP.
                    # SNMP hostnames on Windows are truncated to 15 characters
                    $i = explode(".", $details->hostname);
                    $hostname = $i[0];
                    if (strlen($hostname) == 15) {
                        # We do have a 15 character hostname - check if this exists in the DB
                        $sql = "SELECT system.system_id FROM system WHERE hostname LIKE '".$hostname."%' AND system.man_status = 'production'";
                        $sql = $this->clean_sql($sql);
                        $query = $this->db->query($sql);
                        $row = $query->row();
                        if (count($row) > 0) {
                            $details->system_id = $row->system_id;
                            $log_details->message = 'HIT on hostname short for '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                            stdlog($log_details);
                        }
                    }
                }
            }

            # check short hostname in database
            if (isset($details->hostname) and strlen($details->hostname) > 15 and $details->system_id == '') {
                $i = explode(".", $details->hostname);
                $hostname = $i[0];
                $hostname = substr($hostname, 0, 15);
                $sql = "SELECT system.system_id FROM system WHERE hostname = ? AND system.man_status = 'production'";
                $sql = $this->clean_sql($sql);
                $data = array("$hostname");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->system_id = $row->system_id;
                    $log_details->message = 'HIT on short hostname '.$details->man_ip_address.' (System ID '.$row->system_id.')';
                    stdlog($log_details);
                }
            }
        }

        $temp = @(string) $details->system_id;
        if (is_null($temp) or $temp == '') {
            $log_details->message = 'System ID not found.';
            stdlog($log_details);
        } else {
            $log_details->message = 'Returning System ID '.$details->system_id.' for '.@$details->man_ip_address;
            stdlog($log_details);
        }
        unset($log_details);

        return $details->system_id;
    }

    public function process_system_from_ad($details)
    {
        // only process items with a OS
        if ($details->os_family == '') {
            return;
        }
        $sql = "SELECT system_id FROM system WHERE (hostname = ? or hostname = ? ) AND man_status = 'production' LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$details->hostname", "$details->man_ip_address");
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
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $row = $query->row();
            $last_seen = $row->last_seen;
            if ($last_seen > $details->last_seen) {
                // we have a later date for this system - don't update.
            } else {
                // the ad audit is later - update
                $sql = "UPDATE system SET last_seen = '".$details->last_seen."', last_seen_by = 'active directory' WHERE system_id = '".$system_id."'";
                $sql = $this->clean_sql($sql);
                $query = $this->db->query($sql, $data);
            }
            # update the various settings that we KNOW because of an AD scan.
            $sql = "UPDATE system SET type = 'computer', man_type = 'computer', os_group = ?, man_os_group = ?, os_family = ?, man_os_family = ?, os_name = ?, man_os_name = ?, icon = ?, domain = ?, hostname = ? WHERE system_id = ?";
            $data = array("$details->os_group", "$details->os_group", "$details->os_family", "$details->os_family", "$details->os_name", "$details->os_name", "$details->icon", "$details->domain", "$details->hostname", "$system_id");
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
            #echo $this->db->last_query();
        } else {
            // this is a new system
            $timestamp = date('Y-m-d H:i:s');
            $sql = "INSERT INTO system (hostname, man_ip_address, domain, type, man_type, icon, os_group, os_family, os_name, man_os_group, man_os_family, man_os_name, last_seen, last_seen_by, timestamp, first_timestamp) VALUES (?, ?, ?, 'computer', 'computer', ?, ?, ?, ?, ?, ?, ?, ?, ?, 'active directory', ?, ?)";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname", $this->ip_address_to_db($details->man_ip_address), "$details->domain", "$details->icon", "$details->os_group", "$details->os_family", "$details->os_name", "$details->os_group", "$details->os_family", "$details->os_name", "$details->last_seen", $timestamp, "$details->last_seen" );
            $query = $this->db->query($sql, $data);
            $system_id = $this->db->insert_id();
            $sql = "INSERT INTO windows (system_id, active_directory_ou, last_seen, first_seen) values (?, ?, ?, ?)";
            $sql = $this->clean_sql($sql);
            $data = array("$system_id", "$details->active_directory_ou", $timestamp, $timestamp );
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
				oa_user.id = ? AND
				oa_user.id = oa_group_user.user_id AND
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
        if ($field_name == 'man_ip_address') {
            $field_data = $this->ip_address_to_db($field_data);
        }
        $sql = "UPDATE system SET $field_name = ? WHERE system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$field_data", "$system_id");
        $query = $this->db->query($sql, $data);
    }

    public function check_man_ip_address($system_id)
    {
        $sql = "SELECT system.man_ip_address FROM system WHERE system.system_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->man_ip_address);
    }

    public function get_system_type($system_id)
    {
        $sql = "SELECT system.man_type FROM system WHERE system.system_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$system_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->man_type);
    }

    public function get_system_hostname($system_id)
    {
        $sql = "SELECT system.hostname FROM system WHERE system.system_id = ? ORDER BY system.timestamp LIMIT 1";
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
            #$myip[$index] = mb_substr("000".$myip[$index], -3);
            #$myip[$index] = mb_substr("%%%".$myip[$index], -3);
            $myip[$index] = '%' . $myip[$index] . '%';
        }
        $search_ip = "%".implode(".", $myip)."%";
        $search = "%".$search."%";

        $sql = "SELECT system.icon, system.man_type, system.man_ip_address, system.system_id, system.hostname, system.domain, system.fqdn, system.man_description, system.man_os_family, ip.ip
			FROM system
			LEFT JOIN ip ON (system.system_id = ip.system_id AND ip.current = 'y')
			LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id)
			LEFT JOIN oa_group ON (oa_group_sys.group_id = oa_group.group_id)
			LEFT JOIN oa_group_user ON  (oa_group_user.group_id = oa_group.group_id)
			WHERE ( system.hostname LIKE ? OR
				system.fqdn LIKE ? OR
				system.domain LIKE ? OR
                system.man_ip_address LIKE ? OR
                system.man_ip_address LIKE ? OR
				ip.ip LIKE ? ) AND
				system.man_status = 'production' AND
				oa_group_user.user_id = ? AND
				oa_group_user.group_user_access_level > '0'
			GROUP BY system.system_id
			ORDER BY system.hostname";
        $sql = $this->clean_sql($sql);
        $data = array("$search", "$search", "$search", "$search", "$search_ip", "$search_ip", $this->user->id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        for ($i = 0; $i<count($result); $i++) {
            if (strrpos($result[$i]->ip, $search_ip) !== false) {
                $result[$i]->ip = $this->ip_address_from_db($result[$i]->ip);
            } else {
                $result[$i]->ip = $this->ip_address_from_db($result[$i]->man_ip_address);
            }
        }
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
        $i->column_secondary = "man_type";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[0] = $i;
        $i = new stdclass();
        $i->column_order = '1';
        $i->column_name = 'Type';
        $i->column_variable = 'man_type';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[1] = $i;
        $i = new stdclass();
        $i->column_order = '1';
        $i->column_name = 'IP Address';
        $i->column_variable = 'ip';
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
        $i->column_variable = 'man_description';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = '';
        $result[6] = $i;
        $i = new stdclass();
        $i->column_order = '1';
        $i->column_name = 'OS Family';
        $i->column_variable = 'man_os_family';
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
        $sql = "SELECT 		system_id, man_status, man_manufacturer, man_form_factor,
							man_model, man_picture, man_serial, man_form_factor, man_type
				FROM 		system
				WHERE 		system.system_id = ?
				ORDER BY 	system.timestamp
				LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function system_summary($system_id)
    {
        // Improved SQL to show the linked system for the case of devices like local attached, non-networked printers
        $sql = "SELECT a.system_id, a.hostname, a.man_ip_address, a.man_environment, a.man_status, a.man_description, a.man_type, a.man_class, a.man_os_group, a.man_os_family, a.man_os_name, a.man_manufacturer, a.man_model, a.man_serial, a.man_form_factor, oa_location.name, a.last_seen, a.last_seen_by, a.linked_sys as linked_system_id, b.hostname as linked_hostname FROM system a LEFT JOIN system b on a.linked_sys = b.system_id LEFT JOIN oa_location on a.man_location_id = oa_location.id WHERE a.system_id = ?";

        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $result[0]->{'IP Address'} = $this->ip_address_from_db($result[0]->{'man_ip_address'});

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
				system.system_id = ? AND
				system.system_id = oa_group_sys.system_id AND
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
        $sql = "SELECT system.system_id FROM system WHERE system.hostname = ? AND system.man_status = 'production' ORDER BY system_id LIMIT 1";
        $sql = $this->clean_sql($sql);
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
				system.system_id
			FROM system
			WHERE
				(system.system_id = ? OR
				system.system_key = ? OR
				system.hostname = ? )
			ORDER BY
				system.man_status,
				system.timestamp,
				system.system_id
			LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($system_id, $system_id, $system_id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if (!$row) {
            $systemid = '0';
        } else {
            $systemid = $row->system_id;
        }

        return ($systemid);
    }

    public function get_system_summary($system_id)
    {
        $sql = "SELECT system.*, oa_location.name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.id) WHERE system.system_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function get_columns()
    {
        $sql = "SHOW COLUMNS FROM system";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        return ($result);
    }

    public function get_non_production_systems()
    {
        $sql = "SELECT system_id, hostname, timestamp, oa_org.name as org_name FROM system LEFT JOIN oa_org ON system.man_org_id = oa_org.id WHERE man_status = 'deleted'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $i = 0;
        foreach ($result as $system) {
            $sql = "SELECT count(*) AS count FROM system WHERE hostname = ?";
            $sql = $this->clean_sql($sql);
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
        $sql = "SELECT COUNT(*) AS count FROM system WHERE man_status = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$status");
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $row = $query->row();

        return ($row->count);
    }

    public function count_not_seen_days($days = 365)
    {
        $sql = "SELECT COUNT(*) AS count FROM system WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $row = $query->row();

        return ($row->count);
    }

    public function delete_systems_not_seen_days($days = 365)
    {
        $sql = "DELETE FROM system WHERE DATE(timestamp) < DATE_SUB(curdate(), INTERVAL $days day)";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $count = $this->db->affected_rows();

        return ($count);
    }

    public function delete_non_production_systems($status = 'deleted')
    {
        $sql = "DELETE FROM system WHERE man_status = ?";
        $sql = $this->clean_sql($sql);
        $data = array($status);
        $query = $this->db->query($sql, $data);
        $count = $this->db->affected_rows();

        return ($count);
    }

    #TODO what do we do with linked systems when the above is run from db_admin/maintenance?
    public function delete_linked_system($system_id)
    {
        $sql = "DELETE FROM system WHERE linked_sys = ?";
        $sql = $this->clean_sql($sql);
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
    public function insert_system($details, $display = 'n')
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
        unset($details->system_id);

        // set a man_ip_address if not already 1.5.6
        if (!isset($details->man_ip_address)) {
            $details->man_ip_address = '';
        }

        $log_details = new stdClass();
        $log_details->message = 'System insert start for '.ip_address_from_db($details->man_ip_address).' ('.$details->hostname.')';
        $log_details->severity = 7;
        $log_details->file = 'system';
        if ($display != 'y') {
            $display = 'n';
        }
        $log_details->display = $display;
        unset($display);

        stdlog($log_details);

        # ensure we have something not null for all the below
        if (!isset($details->timestamp) or $details->timestamp == '') {
            $details->timestamp = date('Y-m-d H:i:s');
        }
        $details->first_timestamp = $details->timestamp;

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
            $details->last_seen = $details->timestamp;
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

        # account for any "man_" items
        if (!isset($details->man_description)) {
            $details->man_description = $details->description;
        }
        if (!isset($details->man_domain)) {
            $details->man_domain = $details->domain;
        }
        if (!isset($details->man_environment)) {
            $details->man_environment = 'production';
        }
        if (!isset($details->man_form_factor)) {
            $details->man_form_factor = $details->form_factor;
        }
        if (!isset($details->man_manufacturer)) {
            $details->man_manufacturer = $details->manufacturer;
        }
        if (!isset($details->man_ip_address)) {
            $details->man_ip_address = '';
        }
        if (!isset($details->man_model)) {
            $details->man_model = $details->model;
        }
        if (!isset($details->man_os_family)) {
            $details->man_os_family = $details->os_family;
        }
        if (!isset($details->man_os_group)) {
            $details->man_os_group = $details->os_group;
        }
        if (!isset($details->man_os_name)) {
            $details->man_os_name = $details->os_name;
        }
        $details->man_os_name = str_ireplace("(r)", "", $details->man_os_name);
        $details->man_os_name = str_ireplace("(tm)", "", $details->man_os_name);
        if (!isset($details->man_serial)) {
            $details->man_serial = $details->serial;
        }
        if (!isset($details->man_status)) {
            $details->man_status = 'production';
        }
        if (!isset($details->man_type)) {
            $details->man_type = $details->type;
        } else {
            $details->man_type = strtolower($details->man_type);
        }

        # we now set a default location - 0 the location id
        if (!isset($details->man_location_id)) {
            $details->man_location_id = '0';
        }

        if ((strripos($details->manufacturer, "vmware") !== false) or
            (strripos($details->manufacturer, "parallels") !== false) or
            (strripos($details->manufacturer, "virtual") !== false)) {
            if (!isset($details->man_class) or $details->man_class != 'hypervisor') {
                $details->form_factor = 'Virtual';
                $details->man_form_factor = 'Virtual';
            }
        }


        # If we have an ip address in the hostname field - see if we have other attributes available
        if (filter_var($details->hostname, FILTER_VALIDATE_IP)) {
            # try getting the dns hostname
            $details->hostname = strtolower(gethostbyaddr($details->man_ip_address));
            # make sure we use the hostname and not a fqdn if returned
            if (strpos($details->hostname, ".") != false and !filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                $details->fqdn = strtolower($details->hostname);
                $i = explode(".", $details->hostname);
                $details->hostname = $i[0];
                unset($i[0]);
                $details->domain = implode(".", $i);
                unset($i);
            }
        }
        if (filter_var($details->hostname, FILTER_VALIDATE_IP) and isset($details->sysName) and $details->sysName != '') {
            # use the sysName from SNMP if set
            $details->hostname = $details->sysName;
        }

        $details->man_ip_address = ip_address_to_db($details->man_ip_address);

        if ($details->hostname != '' and $details->domain != '' and $details->domain != '.'  and $details->domain != ' ' and $details->fqdn == '') {
            $details->fqdn = $details->hostname.".".$details->domain;
        }

        $sql = "SHOW COLUMNS FROM system";
        $sql = $this->clean_sql($sql);
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
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $details->system_id = $this->db->insert_id();

        # update the device icon
        $this->m_system->reset_icons($details->system_id);

        # insert a subnet so we have a default
        if (!isset($details->subnet) or $details->subnet == '') {
            $details->subnet = '';
        }

        # insert the network card details of we have them
        if ((isset($details->mac_address) and $details->mac_address != '') and
            (isset($details->man_ip_address) and $details->man_ip_address != '') and
            (isset($details->subnet) and $details->subnet != '') and
            (isset($details->system_id) and $details->system_id != '')) {
            $sql = "INSERT INTO ip (id, system_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES (NULL, ?, 'y', ?, ?, ?, '', ?, ?, '4', '', '')";
            $sql = $this->clean_sql($sql);
            $data = array(
                "$details->system_id",
                "$details->timestamp",
                "$details->timestamp",
                "$details->mac_address",
                "$details->man_ip_address",
                "$details->subnet");
            $query = $this->db->query($sql, $data);
        }

        # check if we have a matching entry in the vm table and update it if required
        if (isset($details->uuid) and $details->uuid != '') {
            if (!empty($details->serial)) {
                # becauseWindows doesn't supply an identical UUID, but it does supply the required digits, make a UUID from the serial
                # which is taken from Win32_ComputerSystemProduct.IdentifyingNumber
                # Vmware supplies - 564d3739-b4cb-1a7e-fbb1-b10dcc0335e1
                # audit_windows supples - VMware-56 4d 37 39 b4 cb 1a 7e-fb b1 b1 0d cc 03 35 e1
                $windows_vm_uuid = str_ireplace('VMware-', '', $details->serial);
                $windows_vm_uuid = str_ireplace('-', ' ', $windows_vm_uuid);
                $windows_vm_uuid = strtolower($windows_vm_uuid);
                $windows_vm_uuid = str_ireplace(' ', '', $windows_vm_uuid);
                $windows_vm_uuid = substr($windows_vm_uuid, 0, 8) . '-'. substr($windows_vm_uuid, 8, 4) . '-' . substr($windows_vm_uuid, 12, 4) . '-' . substr($windows_vm_uuid, 16, 4) . '-' . substr($windows_vm_uuid, 20, 12);
            } else {
                $windows_vm_uuid = '';
            }
            $sql = "SELECT vm.id, vm.system_id AS 'man_vm_system_id', system.hostname AS 'man_vm_server_name' FROM vm, system WHERE LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?) AND vm.current = 'y' and vm.system_id = system.system_id and vm.uuid != ''";
            $sql = $this->clean_sql($sql);
            $data = array("$details->uuid", "$windows_vm_uuid");
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $temp_vm_id = $row->id;
                $details->man_vm_system_id = $row->man_vm_system_id;
                $details->man_vm_server_name = $row->man_vm_server_name;
                $sql = "SELECT icon , 'vm' FROM system WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->system_id);
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                $details->icon = $row->icon;
                $sql = "UPDATE vm SET guest_system_id = ?, icon = ? WHERE id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->system_id, "$details->icon", "$temp_vm_id");
                $query = $this->db->query($sql, $data);
                $sql = "UPDATE system SET man_vm_system_id = ?, man_vm_server_name = ? WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->man_vm_system_id, $details->man_vm_server_name, $details->system_id);
                $query = $this->db->query($sql, $data);
            }
        }

        # insert an entry into the change log
        $this->load->model('m_change_log');
        $this->m_change_log->create($details->system_id, 'system', $details->system_id, 'create', 'Item added to system', $details->last_seen);

        $log_details->message = 'System insert end for '.ip_address_from_db($details->man_ip_address).' ('.$details->hostname.') (System ID '.$details->system_id.')';
        stdlog($log_details);
        unset($log_details);

        if (empty($details->man_org_id)) {
            $sql = "SELECT man_org_id FROM system WHERE system_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($details->system_id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->man_org_id = $row->man_org_id;
        }

        # add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), 'system_create', " . intval($details->man_org_id) . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        # add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '" . $details->last_seen_by . "', " . intval($details->man_org_id) . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        return $details->system_id;
    }

    public function update_system($details, $display = 'n')
    {
        if (!isset($details->system_id) or $details->system_id == '') {
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

        if (isset($details->man_ip_address) and $details->man_ip_address != '') {
            $temp_ip = $details->man_ip_address.' ';
        } else {
            $temp_ip = '';
        }

        $log_details = new stdClass();
        $log_details->message = 'System update start for '.ip_address_from_db($temp_ip).'('.$details->hostname.') (System ID '.$details->system_id.')';
        $log_details->severity = 7;
        $log_details->file = 'system';
        if ($display != 'y') {
            $display = 'n';
        }
        $log_details->display = $display;
        unset($display);

        stdlog($log_details);

        unset($temp_ip);

        # If we have an ip address in the hostname field - see if we have other attributes available
        if (filter_var($details->hostname, FILTER_VALIDATE_IP)) {
            # try getting the dns hostname
            $details->hostname = strtolower(gethostbyaddr($details->man_ip_address));
            # make sure we use the hostname and not a fqdn if returned
            if (strpos($details->hostname, ".") != false) {
                if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                    # we got a FQDN back from DNS - split it up
                    $details->fqdn = strtolower($details->hostname);
                    $i = explode(".", $details->hostname);
                    $details->hostname = $i[0];
                    unset($i[0]);
                    $details->domain = implode(".", $i);
                    unset($i);
                } else {
                    # we got an ip address back from DNS which is now the hostname
                }
            } else {
                # we should have a real hostname if we get to here
            }
        }
        if (filter_var($details->hostname, FILTER_VALIDATE_IP) and isset($details->sysName) and $details->sysName != '') {
            # use the sysName from SNMP if set
            $details->hostname = $details->sysName;
        }

        $sql = "SELECT hostname FROM system WHERE system_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$details->system_id");
        $query = $this->db->query($sql, $data);
        $result = $query->row();
        $db_hostname = $result->hostname;

        // if (strpos($db_hostname, ".") !== false) {
        //     # our DB hostname field contains a .
        //     # If we don't have an actual ip address, replace it the audit hostname with the db hostname
        //     if (!filter_var($db_hostname, FILTER_VALIDATE_IP)) {
        //         # we have a FQDN - split it
        //         $details->fqdn = strtolower($db_hostname);
        //         $i = explode(".", $db_hostname);
        //         $details->hostname = $i[0];
        //         unset($i[0]);
        //         $details->domain = implode(".", $i);
        //         unset($i);
        //     } else {
        //         # we have an ip address in the DB, replace it with the audit data (ie, don't change the audit data)
        //     }
        // } else {
        //     # we have a real hostname in the database, replace our audit data with that
        //     $details->hostname = $db_hostname;
        // }

        if (!isset($details->system_key_type)) {
            $details->system_key_type = '';
        }

        # we have to try to get the 'best' system key
        # the key in the db may be better than what we have
        if (isset($details->system_key)) {
            $sql = "SELECT system_key, system_key_type FROM system WHERE system_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id");
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

        # if submitting an nmap scan, do not update the type or man_type
        if (isset($details->last_seen_by) and $details->last_seen_by == 'nmap') {
            unset($details->type);
            unset($details->man_type);
        } else {
            if (isset($details->type)) {
                $details->type = strtolower($details->type);
            }
            if (isset($details->man_type)) {
                $details->man_type = strtolower($details->man_type);
            }
        }

        # for removing existing symbols
        if (isset($details->os_name)) {
            $details->os_name = str_ireplace("(r)", "", $details->os_name);
            $details->os_name = str_ireplace("(tm)", "", $details->os_name);
        }

        # we check a few man_ items when we are submitting an audit script result
        # if they are blank (previously submitted info is incomplete) we over write them
        # we would not normally over write man_ items
        if (isset($details->last_seen_by) and ($details->last_seen_by == 'audit' or $details->last_seen_by == 'snmp' or $details->last_seen_by == 'ipmi')) {
            $sql = "SELECT * FROM system WHERE system_id = ? LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id");
            $query = $this->db->query($sql, $data);
            $row = $query->row();

            if (count($row) > 0) {

                # if the database entry for man_manufacturer is empty but we have something from an audit, set it.
                if ($row->man_manufacturer == '' and isset($details->manufacturer)) {
                    $details->man_manufacturer = $details->manufacturer;
                } else {
                    unset($details->man_manufacturer);
                }
                # account for a manufacturer attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_manufacturer == $row->manufacturer) and isset($details->manufacturer) and ($details->manufacturer != $row->manufacturer)) {
                    $details->man_manufacturer = $details->manufacturer;
                }

                # if the database entry for man_model is empty but we have something from an audit, set it.
                if ($row->man_model == '' and isset($details->model)) {
                    $details->man_model = $details->model;
                } else {
                    unset($details->man_model);
                }
                # account for a model attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_model == $row->model) and isset($details->model) and ($details->model != $row->model)) {
                    $details->man_model = $details->model;
                }

                # if the database entry for man_serial is empty but we have something from an audit, set it.
                if ($row->man_serial == '' and isset($details->serial)) {
                    $details->man_serial = $details->serial;
                } else {
                    unset($details->man_serial);
                }
                # account for a serial attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_serial == $row->serial) and isset($details->serial) and ($details->serial != $row->serial)) {
                    $details->man_serial = $details->serial;
                }

                # if the database entry for man_description is empty but we have something from an audit, set it.
                if ($row->man_description == '' and isset($details->description)) {
                    $details->man_description = $details->description;
                } else {
                    unset($details->man_description);
                }
                # account for a description attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_description == $row->description) and isset($details->description) and ($details->description != $row->description)) {
                    $details->man_description = $details->description;
                }

                # if the database entry for man_form_factor is empty but we have something from an audit, set it.
                if ($row->man_form_factor == '' and isset($details->form_factor)) {
                    $details->man_form_factor = $details->form_factor;
                } else {
                    unset($details->man_form_factor);
                }
                # account for a form_factor attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_form_factor == $row->form_factor) and isset($details->form_factor) and ($details->form_factor != $row->form_factor)) {
                    $details->man_form_factor = $details->form_factor;
                }

                # if the database entry for man_os_group is empty but we have something from an audit, set it.
                if ($row->man_os_group == '' and isset($details->os_group)) {
                    $details->man_os_group = $details->os_group;
                } else {
                    unset($details->man_os_group);
                }
                # account for a os_group attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_os_group == $row->os_group) and isset($details->os_group) and ($details->os_group != $row->os_group)) {
                    $details->man_os_group = $details->os_group;
                }

                # if the database entry for man_os_family is empty but we have something from an audit, set it.
                if ($row->man_os_family == '' and isset($details->os_family)) {
                    $details->man_os_family = $details->os_family;
                } else {
                    unset($details->man_os_family);
                }
                # account for a os_family attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_os_family == $row->os_family) and isset($details->os_family) and ($details->os_family != $row->os_family)) {
                    $details->man_os_family = $details->os_family;
                }

                # if the database entry for man_type is not set or 'unknown', update it
                if ($row->man_type == '' or $row->man_type == 'unknown') {
                    if (isset($details->type) and $details->type > '' and $details->type != 'unknown') {
                        $details->man_type = strtolower($details->type);
                    }
                }

                # if the database entry for man_os_name is empty but we have something from an audit, set it.
                if ($row->man_os_name == '' and isset($details->os_name)) {
                    $details->man_os_name = $details->os_name;
                } else {
                    unset($details->man_os_name);
                }
                # account for a os_name attribute that has not been changed by the user, but is being reported differently via an audit or snmp scan.
                if (($row->man_os_name == $row->os_name) and isset($details->os_name) and ($details->os_name != $row->os_name)) {
                    $details->man_os_name = $details->os_name;
                }

                if (strlen($row->hostname) > 15 and isset($details->hostname) and strlen($details->hostname) == 15) {
                    unset($details->hostname);
                }

                if (isset($details->manufacturer) and (
                    (strripos($details->manufacturer, "vmware") !== false) or
                    (strripos($details->manufacturer, "parallels") !== false) or
                    (strripos($details->manufacturer, "virtual") !== false))) {
                    $details->form_factor = 'Virtual';
                    $details->man_form_factor = 'Virtual';
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

        if (!isset($details->timestamp) or $details->timestamp == '') {
            $details->timestamp = date('Y-m-d H:i:s');
        }

        if (!isset($details->original_timestamp) or $details->original_timestamp == '') {
            $sql = "SELECT timestamp FROM system WHERE system_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->original_timestamp = $row->timestamp;
        }

        // # only update system.timestamp if we have an audit result - not for nmap, snmp, etc
        // if (isset($details->last_seen_by) and $details->last_seen_by == 'audit') {
        // 	# leave it alone
        // } else {
        // 	unset ($details->timestamp);
        // 	unset ($details->first_timestamp);
        // }

        if (isset($details->man_ip_address)) {
            $details->man_ip_address = ip_address_to_db($details->man_ip_address);
        }

        # if we don't have a real ip address, remove it
        if ((isset($details->man_ip_address)) and
            ($details->man_ip_address == '' or
            $details->man_ip_address == '0.0.0.0' or
            $details->man_ip_address == '000.000.000.000')) {
            unset($details->man_ip_address);
        }

        $sql = "SHOW COLUMNS FROM system";
        $sql = $this->clean_sql($sql);
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
        $sql .= " WHERE system_id = '".$details->system_id."'";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        # finally, update the device icon
        $this->m_system->reset_icons($details->system_id);

        if (isset($details->mac_address) and $details->mac_address != '' and
            isset($details->man_ip_address) and $details->man_ip_address != '' and
            isset($details->subnet) and $details->subnet != '') {
            # we need to check if we have an entry in `network`
            # if we do not, but we have details (ex- an nmap device that previously existed but did not have a MAC, but now does)
            # we need to insert it.
            # ideally this would have already been done when the device was initially discovered, but we cannot count on that.
            # need to check if an entry in `network` exists and if it does not AND we have details, insert something

            # search for any entries in `ip`
            $sql = "SELECT * FROM ip WHERE system_id = ? AND mac = ? AND current = 'y' AND ip = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$details->system_id", "$details->mac_address", "$details->man_ip_address");
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (count($result) == 0) {
                # no match - insert
                $sql = "INSERT INTO ip (id, system_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES(NULL, ?, 'y', ?, ?, ?, '', ?, ?, '', '', '')";
                $sql = $this->clean_sql($sql);
                $data = array("$details->system_id", "$details->timestamp", "$details->timestamp", "$details->mac_address", "$details->man_ip_address", "$details->subnet");
                $query = $this->db->query($sql, $data);
            } else {
                # match - update timestamp only
                $sql = "UPDATE ip SET last_seen = ? WHERE system_id = ? AND mac = ? AND current = 'y' AND ip = ?";
                $sql = $this->clean_sql($sql);
                $data = array("$details->timestamp", "$details->system_id", "$details->mac_address", "$details->man_ip_address");
                $query = $this->db->query($sql, $data);
            }
        }

        if (isset($details->man_ip_address) and $details->man_ip_address != '') {
            $temp_ip = $details->man_ip_address.' ';
        } else {
            $temp_ip = '';
        }

        # check if we have a matching entry in the vm table and update it if required
        if (isset($details->uuid) and $details->uuid != '') {
            if (!empty($details->serial)) {
                # becauseWindows doesn't supply an identical UUID, but it does supply the required digits, make a UUID from the serial
                # which is taken from Win32_ComputerSystemProduct.IdentifyingNumber
                # Vmware supplies - 564d3739-b4cb-1a7e-fbb1-b10dcc0335e1
                # audit_windows supples - VMware-56 4d 37 39 b4 cb 1a 7e-fb b1 b1 0d cc 03 35 e1
                $windows_vm_uuid = str_ireplace('VMware-', '', $details->serial);
                $windows_vm_uuid = str_ireplace('-', ' ', $windows_vm_uuid);
                $windows_vm_uuid = strtolower($windows_vm_uuid);
                $windows_vm_uuid = str_ireplace(' ', '', $windows_vm_uuid);
                $windows_vm_uuid = substr($windows_vm_uuid, 0, 8) . '-'. substr($windows_vm_uuid, 8, 4) . '-' . substr($windows_vm_uuid, 12, 4) . '-' . substr($windows_vm_uuid, 16, 4) . '-' . substr($windows_vm_uuid, 20, 12);
            } else {
                $windows_vm_uuid = '';
            }
            $sql = "SELECT vm.id, vm.system_id AS 'man_vm_system_id', system.hostname AS 'man_vm_server_name' FROM vm, system WHERE LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?) AND vm.current = 'y' and vm.system_id = system.system_id and vm.uuid != ''";
            $sql = $this->clean_sql($sql);
            $data = array("$details->uuid", "$windows_vm_uuid");
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $temp_vm_id = $row->id;
                $details->man_vm_system_id = $row->man_vm_system_id;
                $details->man_vm_server_name = $row->man_vm_server_name;
                $sql = "SELECT icon  FROM system WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->system_id);
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                $details->icon = $row->icon;
                $sql = "UPDATE vm SET guest_system_id = ?, icon = ? WHERE id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->system_id, "$details->icon", "$temp_vm_id");
                $query = $this->db->query($sql, $data);
                $sql = "UPDATE system SET man_vm_system_id = ?, man_vm_server_name = ? WHERE system_id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->man_vm_system_id, $details->man_vm_server_name, $details->system_id);
                $query = $this->db->query($sql, $data);
            }
        }

        if (empty($details->man_org_id)) {
            $sql = "SELECT man_org_id FROM system WHERE system_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($details->system_id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->man_org_id = $row->man_org_id;
        }

        # add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '" . $details->last_seen_by . "', " . $details->man_org_id . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        $log_details->message = 'System update end for '.ip_address_from_db($temp_ip).'('.$details->hostname.') (System ID '.$details->system_id.')';
        stdlog($log_details);
        unset($log_details);
        unset($temp_ip);
    }

    public function reset_icons($system_id = '')
    {
        if ($system_id != '') {
            $sql = "SELECT system_id, man_type, man_os_name, man_os_family, man_os_group, man_manufacturer, icon FROM system WHERE system_id = ".$system_id;
        } else {
            $sql = "SELECT system_id, man_type, man_os_name, man_os_family, man_os_group, man_manufacturer, icon FROM system";
        }
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        $count = $query->num_rows();
        // we set computer icons by OS, everything else by type
        foreach ($result as $details) {
            if ($details->man_type == 'computer') {
                // determine icon for computer
                // most generic to most specific

                // manufacturer based
                if (strripos($details->man_manufacturer, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->man_manufacturer, "vmware") !== false) {
                    $details->icon = 'vmware';
                }

                // os_group based
                if (strripos($details->man_os_group, "linux") !== false) {
                    $details->icon = 'linux';
                }
                if (strripos($details->man_os_group, "apple") !== false) {
                    $details->icon = 'apple';
                }
                if (strripos($details->man_os_group, "windows") !== false) {
                    $details->icon = 'windows';
                }

                // os name based
                if ((strripos($details->man_os_name, "osx") !== false) or
                    (strpos(strtolower($details->man_os_name), "ios") !== false)) {
                    $details->icon = 'apple';
                }
                if (strripos($details->man_os_name, "bsd") !== false) {
                    $details->icon = 'bsd';
                }
                if (strripos($details->man_os_name, "centos") !== false) {
                    $details->icon = 'centos';
                }
                if (strripos($details->man_os_name, "debian") !== false) {
                    $details->icon = 'debian';
                }
                if (strripos($details->man_os_name, "fedora") !== false) {
                    $details->icon = 'fedora';
                }
                if ((strripos($details->man_os_name, "mandriva") !== false) or
                    (strripos($details->man_os_name, "mandrake") !== false)) {
                    $details->icon = 'mandriva';
                }
                if (strripos($details->man_os_name, "mint") !== false) {
                    $details->icon = 'mint';
                }
                if (strripos($details->man_os_name, "novell") !== false) {
                    $details->icon = 'novell';
                }
                if (strripos($details->man_os_name, "slackware") !== false) {
                    $details->icon = 'slackware';
                }
                if (strripos($details->man_os_name, "suse") !== false) {
                    $details->icon = 'suse';
                }
                if ((strripos($details->man_os_name, "red hat") !== false) or
                    (strripos($details->man_os_name, "redhat") !== false)) {
                    $details->icon = 'redhat';
                }
                if (strripos($details->man_os_name, "ubuntu") !== false) {
                    $details->icon = 'ubuntu';
                }
                if (strripos($details->man_os_name, "vmware") !== false) {
                    $details->icon = 'vmware';
                }
                if (strripos($details->man_os_name, "windows") !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->man_os_name, "microsoft") !== false) {
                    $details->icon = 'windows';
                }
                if (strripos($details->man_os_name, "windows 2000") !== false) {
                    $details->icon = 'windows_2000';
                }
                if (strripos($details->man_os_name, "server 2003") !== false) {
                    $details->icon = 'windows_2003';
                }
                if (strripos($details->man_os_name, "server 2008") !== false) {
                    $details->icon = 'windows_2008';
                }
                if (strripos($details->man_os_name, "server 2012") !== false) {
                    $details->icon = 'windows_2012';
                }
                if (strripos($details->man_os_name, "windows 7") !== false) {
                    $details->icon = 'windows_7';
                }
                if (strripos($details->man_os_name, "windows 8") !== false) {
                    $details->icon = 'windows_8';
                }
                if (strripos($details->man_os_name, "windows nt") !== false) {
                    $details->icon = 'windows_nt';
                }
                if (strripos($details->man_os_name, "windows rt") !== false) {
                    $details->icon = 'windows_rt';
                }
                if (strripos($details->man_os_name, "vista") !== false) {
                    $details->icon = 'windows_vista';
                }
                if (strripos($details->man_os_name, "windows xp") !== false) {
                    $details->icon = 'windows_xp';
                }
            } else {
                // device is not type=computer
                // base icon on type
                if (strpos($details->man_type, "|") === false) {
                    $details->icon = str_replace(" ", "_", $details->man_type);
                } else {
                    $details->icon = 'unknown';
                }
            }

            $sql = "UPDATE system SET icon = ? WHERE system_id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$details->icon", "$details->system_id");
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
        $sql = $this->clean_sql($sql);
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
            if ($credentials->snmp_community == '-') {
                $credentials->snmp_community = '';
            }
            $new_credentials['snmp_community'] = (string) $credentials->snmp_community;
        } else {
            $new_credentials['snmp_community'] = $decoded_access_details->snmp_community;
        }



        if (isset($credentials->snmp_version) and $credentials->snmp_version != '') {
            if ($credentials->snmp_version == '-') {
                $credentials->snmp_version = '';
            }
            $new_credentials['snmp_version'] = (string) $credentials->snmp_version;
        } else {
            $new_credentials['snmp_version'] = (string) $decoded_access_details->snmp_version;
        }



        if (isset($credentials->ssh_username) and $credentials->ssh_username != '') {
            if ($credentials->ssh_username == '-') {
                $credentials->ssh_username = '';
            }
            $new_credentials['ssh_username'] = (string) $credentials->ssh_username;
        } else {
            $new_credentials['ssh_username'] = (string) $decoded_access_details->ssh_username;
        }



        if (isset($credentials->ssh_password) and $credentials->ssh_password != '') {
            if ($credentials->ssh_password == '-') {
                $credentials->ssh_password = '';
            }
            $new_credentials['ssh_password'] = (string) $credentials->ssh_password;
        } else {
            $new_credentials['ssh_password'] = (string) $decoded_access_details->ssh_password;
        }



        if (isset($credentials->windows_username) and $credentials->windows_username != '') {
            if ($credentials->windows_username == '-') {
                $credentials->windows_username = '';
            }
            $new_credentials['windows_username'] = (string) $credentials->windows_username;
        } else {
            $new_credentials['windows_username'] = (string) $decoded_access_details->windows_username;
        }



        if (isset($credentials->windows_password) and $credentials->windows_password != '') {
            if ($credentials->windows_password == '-') {
                $credentials->windows_password = '';
            }
            $new_credentials['windows_password'] = (string) $credentials->windows_password;
        } else {
            $new_credentials['windows_password'] = (string) $decoded_access_details->windows_password;
        }



        if (isset($credentials->windows_domain) and $credentials->windows_domain != '') {
            if ($credentials->windows_domain == '-') {
                $credentials->windows_domain = '';
            }
            $new_credentials['windows_domain'] = (string) $credentials->windows_domain;
        } else {
            $new_credentials['windows_domain'] = (string) $decoded_access_details->windows_domain;
        }

        # now encrypt what we have and store it
        $encoded = json_encode($new_credentials);
        $encoded = $this->encrypt->encode($encoded);
        $sql = "UPDATE system SET access_details = ? WHERE system_id = ?";
        $sql = $this->clean_sql($sql);
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
        $sql = $this->clean_sql($sql);
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
