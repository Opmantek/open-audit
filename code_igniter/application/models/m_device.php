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
 *
 * @version   2.1

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_device extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function match($details, $command = '')
    {
        # we are searching for a system.id.
        $details = (object) $details;
        $details->id = '';

        $CI = & get_instance();
        $CI->load->helper('log');

        $log = new stdClass();
        if (!empty($details->discovery_id)) {
            $log->discovery_id = $details->discovery_id;
        } else {
            $log->discovery_id = null;
        }
        $log->system_id = null;
        $log->timestamp = null;
        $log->severity = 7;
        $log->pid = getmypid();
        $log->file = 'm_device';
        $log->function = 'find_system';
        $log->command = $command;
        $log->message = '';
        $log_message = array(); // we will store our message until we get a system.id, then wrtie them to the log

        # TODO: fix this by making sure (snmp in particular) calls with the proper variable name
        if (!isset($details->mac_address) and (isset($details->mac))) {
            $details->mac_address = $details->mac;
        }

        # check if we have an ip address or a hostname (possibly a fqdn)
        if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
            if (strpos($details->hostname, '.') !== false) {
                # it's a fqdn
                $log_message[] = "Provided hostname contains a '.'. Assuming a FQDN (" . $details->hostname . ").";
                if (empty($details->fqdn)) {
                    $details->fqdn = $details->hostname;
                    $log_message[] = "No FQDN provided, storing hostname as FQDN (" . $details->fqdn . ").";
                }
                $temp = explode(".", $details->hostname);
                $hostname = $temp[0];
                $log_message[] = "Using first split '.' from hostname as hostname (" . $hostname . ").";
                unset($temp);
            }
        } else {
            # we have an ip address in the hostname field - remove it
            # likely because DNS is not fully setup and working correctly
            $log_message[] = "Provided hostname is actually an IP address (" . $details->hostname . ").";
            if (empty($details->ip)) {
                $details->ip = $details->hostname;
                $log_message[] = "No IP provided, but provided hostname is an IP. Storing in ip (" . $details->ip . ").";
            }
            $log_message[] = "Removing provided hostname because it's actually an IP (" . $details->hostname . ").";
            unset($details->hostname);
        }

        if (!empty($details->hostname) and !empty($details->domain) and $details->domain != '.' and empty($details->fqdn)) {
            $details->fqdn = $details->hostname.".".$details->domain;
            $log_message[] = "No FQDN provided, but hostname and domain provided - setting FQDN (" . $details->fqdn . ").";
        }

        if (empty($details->fqdn)) {
            $details->fqdn = '';
        }

        if (!empty($details->mac_address)) {
            $details->mac_address = strtolower($details->mac_address);
            if ($details->mac_address == '00:00:00:00:00:00') {
                unset($details->mac_address);
                $log_message[] = "All 00: mac address provided, unsetting.";
            }
        } else {
            unset($details->mac_address);
        }

        if (empty($details->ip) or $details->ip == '0.0.0.0' or $details->ip == '000.000.000.000') {
            $details->ip = '';
            $log_message[] = "IP possibly not provided, or blank or all zero's. Setting to blank.";
        } else {
            $log->ip = $details->ip;
        }

        # Match based on the OMK uuid
        if (!empty($details->omk_uuid)) {
            $sql = "SELECT system.id FROM system WHERE system.omk_uuid = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->omk_uuid");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on NMIS uuid: ' . $details->omk_uuid . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }
        }

        if (strtolower($this->config->config['match_hostname_uuid']) == 'y' and !empty($details->uuid) and !empty($details->hostname)) {
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.uuid = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->uuid", "$details->hostname");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on hostname + uuid: ' . $details->hostname . ' + ' . $details->uuid . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }
        }

        if (strtolower($this->config->config['match_hostname_dbus']) == 'y' and !empty($details->dbus_identifier) and !empty($details->hostname)) {
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.dbus_identifier = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname", "$details->dbus_identifier");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on hostname + dbus_identifier: ' . $details->hostname . ' + ' . $details->dbus_identifier . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }
        }

        if (strtolower($this->config->config['match_hostname_serial']) == 'y' and !empty($details->serial) and !empty($details->hostname)) {
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.serial = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname", "$details->serial");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on hostname + serial: ' . $details->hostname . ' + ' . $details->serial . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }
        }

        if (strtolower($this->config->config['match_dbus']) == 'y' and !empty($details->dbus_identifier)) {
            $sql = "SELECT system.id FROM system WHERE system.dbus_identifier = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->dbus_identifier");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on dbus_identifier: ' . $details->dbus_identifier . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }
        }

        if (strtolower($this->config->config['match_fqdn']) == 'y' and empty($details->id) and !empty($details->fqdn)) {
            $sql = "SELECT system.id FROM system WHERE system.fqdn = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->fqdn");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on fqdn: ' . $details->fqdn . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }
        }

        if (strtolower($this->config->config['match_serial_type']) == 'y' and empty($details->id) and !empty($details->serial) and !empty($details->type)) {
            $sql = "SELECT system.id FROM system WHERE system.serial = ? AND system.type = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->serial", "$details->type");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on serial + type: ' . $details->serial . ' + ' . $details->type . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }
        }

        if (strtolower($this->config->config['match_mac']) == 'y' and empty($details->id) and !empty($details->mac_address)) {
            if (strtolower($this->config->config['match_mac_vmware']) == 'n') {
                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND LOWER(ip.mac) NOT LIKE '00:0c:29:%' AND ip.mac NOT LIKE '00:50:56:%' AND ip.mac NOT LIKE '00:05:69:%' AND LOWER(ip.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
            } else {
                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.status != 'deleted' LIMIT 1";
            }

            $sql = $this->clean_sql($sql);
            $data = array("$details->mac_address");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on Mac Address (details): ' . $details->mac_address . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }

            # check all MAC addresses - this caters for an actual audit script result
            if (!empty($details->mac_addresses) and count($details->mac_addresses) > 0 and $details->id == '') {
                foreach ($details->mac_addresses as $mac_address) {
                    foreach ($mac_address as $mac) {
                        if ($mac != '' and $mac != '00:00:00:00:00:00') {
                            # check the ip table
                            if (strtolower($this->config->config['match_mac_vmware']) == 'n') {
                                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND LOWER(ip.mac) NOT LIKE '00:0c:29:%' AND ip.mac NOT LIKE '00:50:56:%' AND ip.mac NOT LIKE '00:05:69:%' AND LOWER(ip.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
                            } else {
                                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.status != 'deleted' LIMIT 1";
                            }
                            $sql = $this->clean_sql($sql);
                            $data = array("$mac");
                            $query = $this->db->query($sql, $data);
                            $row = $query->row();
                            if (count($row) > 0) {
                                $details->id = $row->id;
                                $log->system_id = $details->id;
                                $log_message[] = 'HIT on Mac Address (audit): ' . $mac . ' (System ID ' . $details->id . ')';
                                foreach ($log_message as $message) {
                                    $log->message = $message;
                                    discovery_log($log);
                                }
                                return $details->id;
                            }
                        }
                    }
                }
            }
        }

        # check IP Address in system, then ip tables
        if (strtolower($this->config->config['match_ip']) == 'y' and empty($details->id) and !empty($details->ip) and filter_var($details->ip, FILTER_VALIDATE_IP)) {
            # first check the ip table as eny existing devices that have been seen
            # by more than just Nmap will have an entry here
            $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.ip = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array(ip_address_to_db($details->ip), "$details->ip");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                if (!empty($details->system_id)) {
                    $log->system_id = $details->id;
                } else if (!empty($details->id)) {
                    $log->system_id = $details->id;
                }
                $log_message[] = 'HIT on IP Address (network table): ' . $details->ip . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }

            # next check the system table for a ip match
            if (empty($details->id)) {
                $sql = "SELECT system.id FROM system WHERE system.ip = ? and system.status != 'deleted'";
                $sql = $this->clean_sql($sql);
                $data = array(ip_address_to_db($details->ip));
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->id;
                    $log->system_id = $details->id;
                    $log_message[] = 'HIT on IP Address (system table): ' . $details->ip . ' (System ID ' . $details->id . ')';
                    foreach ($log_message as $message) {
                        $log->message = $message;
                        discovery_log($log);
                    }
                    return $details->id;
                }
            }
        }

        if (strtolower($this->config->config['match_hostname']) == 'y' and empty($details->id) and !empty($details->hostname)) {
            $sql = "SELECT system.id FROM system WHERE (system.hostname = ?) AND system.status != 'deleted'";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $log_message[] = 'HIT on hostname: ' . $details->hostname . ' (System ID ' . $details->id . ')';
                foreach ($log_message as $message) {
                    $log->message = $message;
                    discovery_log($log);
                }
                return $details->id;
            }

            # check short hostname in $details
            if (!empty($details->hostname) and empty($details->id)) {
                if (isset($details->hostname_length) and $details->hostname_length == 'short') {
                    # we grabbed the hostname from SNMP.
                    # SNMP hostnames on Windows are truncated to 15 characters
                    $temp = explode(".", $details->hostname);
                    $hostname = $temp[0];
                    if (strlen($hostname) == 15) {
                        # We do have a 15 character hostname - check if this exists in the DB
                        $sql = "SELECT system.id FROM system WHERE system.hostname LIKE '".$hostname."%' AND system.status != 'deleted'";
                        $sql = $this->clean_sql($sql);
                        $query = $this->db->query($sql);
                        $row = $query->row();
                        if (count($row) > 0) {
                            $details->id = $row->id;
                            $log->system_id = $details->id;
                            $log_message[] = 'HIT on hostname (short): ' . $hostname . ' (System ID ' . $details->id . ')';
                            foreach ($log_message as $message) {
                                $log->message = $message;
                                discovery_log($log);
                            }
                            return $details->id;
                        }
                    }
                    unset($temp);
                }
            }
        }

        $temp = @(string) $details->id;
        if (is_null($temp) or $temp == '') {
            $log_message[] = 'Could not find a match for the device with IP '  . $details->ip;
            foreach ($log_message as $message) {
                $log->message = $message;
                discovery_log($log);
            }
        } else {
            $log_message[] = 'Returning system_id for device with IP '  . $details->ip . ' (' . $details->id . ')';
            foreach ($log_message as $message) {
                $log->message = $message;
                discovery_log($log);
            }
        }
        unset($log_message);
        unset($log);
        return $details->id;
    }

    /**
     * Insert a NEW system
     * We insert whatever we have from the $details object and
     * whatever additional data based on what we can derive.
     *
     * @param object $details
     * @access  public
     *
     * @return int
     */
    public function insert($details)
    {

        # nasty hack because when a simplexmlobject is sent (ie, from audit_windows.vbs)
        # the foreach iterators below don't work.
        # if we cast it to an "object", it stays as a SimpleXMLObject and doesn't work
        # because our XML is quite simple, we can cast it to an array and back to a 'normal'
        # object and the foreach below works.
        $details = (object) $details;
        $details = (array) $details;
        $details = (object) $details;
        # this is an insert - we do NOT want a system.id
        unset($details->id);

        $this->load->model('m_devices');

        // set a ip if not already 1.5.6
        if (!isset($details->ip)) {
            $details->ip = '';
        }

        if (empty($details->first_seen)) {
            $details->first_seen = $this->config->config['timestamp'];
        }

        $log_details = new stdClass();
        $log_details->message = 'System insert start for '.ip_address_from_db($details->ip).' ('.$details->hostname.')';
        $log_details->severity = 7;
        $log_details->file = 'system';

        stdlog($log_details);

        # ensure we have something not null for all the below
        if (!isset($details->timestamp) or $details->timestamp == '') {
            $details->timestamp = $this->config->config['timestamp'];
        }
        $details->first_timestamp = $details->timestamp;

        if (!empty($details->hostname)) {
            $details->name = $details->hostname;
        }
        if (empty($details->name) and !empty($details->dns_hostname)) {
            $details->name = $details->dns_hostname;
        }
        if (empty($details->name) and !empty($details->ip)) {
            $details->name = $details->ip;
        }
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
        if (empty($details->org_id)) {
            unset($details->org_id);
        }
        if (!empty($details->man_org_id) and empty($details->org_id)) {
            $details->org_id = intval($details->man_org_id);
        }
        unset($details->man_org_id);

        # we now set a default location - 0 the location id
        if (empty($details->location_id)) {
            $details->location_id = '1';
        }

        if ((strripos($details->manufacturer, "vmware") !== false) or
            (strripos($details->manufacturer, "parallels") !== false) or
            (strripos($details->manufacturer, "virtual") !== false)) {
            if (!isset($details->class) or $details->class != 'hypervisor') {
                $details->form_factor = 'Virtual';
            }
        }


        # If we have an ip address in the hostname field - see if we have other attributes available
        if (filter_var($details->hostname, FILTER_VALIDATE_IP)) {
            # try getting the dns hostname
            $details->hostname = strtolower(gethostbyaddr($details->ip));
            # make sure we use the hostname and not a fqdn if returned
            if (strpos($details->hostname, ".") != false and !filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                $details->fqdn = strtolower($details->hostname);
                $temp = explode(".", $details->hostname);
                $details->hostname = $temp[0];
                unset($temp[0]);
                $details->domain = implode(".", $temp);
                unset($temp);
            }
        }
        if (filter_var($details->hostname, FILTER_VALIDATE_IP) and isset($details->sysName) and $details->sysName != '') {
            # use the sysName from SNMP if set
            $details->hostname = $details->sysName;
        }

        $details->ip = ip_address_to_db($details->ip);

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
                        $sql .= "'".mysqli_real_escape_string($this->db->conn_id, str_replace('"', '', $value))."', ";
                    }
                }
            }
        }
        $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
        $sql .= ")";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $details->id = $this->db->insert_id();

        $weight = intval($this->m_devices->weight($details->last_seen_by));
        foreach ($details as $key => $value) {
            foreach ($columns as $column) {
                if ($key === $column->Field and !empty($value)) {
                    if ($key != 'id' and $key != 'last_seen' and $key != 'last_seen_by' and $key != 'first_seen') {
                        $edit_sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, 'Data was changed', ?, ?, 'system', ?, ?, ?, '')";
                        $edit_data = array(intval($details->id), (string)$details->last_seen_by, intval($weight), (string)$key, (string)$details->last_seen, (string)$value);
                        $query = $this->db->query($edit_sql, $edit_data);
                    }
                }
            }
        }

        # update the device icon
        $this->m_devices->reset_icons($details->id);

        # insert a subnet so we have a default
        if (!isset($details->subnet) or $details->subnet == '') {
            $details->subnet = '';
        }

        # insert the network card details of we have them
        if ((isset($details->mac_address) and $details->mac_address != '') and
            (isset($details->ip) and $details->ip != '') and
            (isset($details->subnet) and $details->subnet != '') and
            (isset($details->id) and $details->id != '')) {
            $sql = "INSERT INTO ip (id, system_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES (NULL, ?, 'y', ?, ?, ?, '', ?, ?, '4', '', '')";
            $sql = $this->clean_sql($sql);
            $data = array(
                "$details->id",
                "$details->timestamp",
                "$details->timestamp",
                "$details->mac_address",
                "$details->ip",
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
            $sql = "SELECT vm.id AS `vm.id`, vm.system_id AS `vm.system_id`, system.hostname AS `system.hostname` FROM vm, system WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.current = 'y' and vm.system_id = system.id;";
            $sql = $this->clean_sql($sql);
            $data = array("$details->uuid", "$windows_vm_uuid");
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $temp_vm_id = $row->{'vm.id'};
                $details->vm_system_id = $row->{'vm.system_id'};
                $details->vm_server_name = $row->{'system.hostname'};
                $sql = "SELECT icon, 'vm' FROM system WHERE system.id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->id);
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                $details->icon = $row->icon;
                $sql = "UPDATE vm SET guest_system_id = ?, icon = ?, name = ? WHERE id = ?";
                $sql = $this->clean_sql($sql);
                $name = $details->name;
                if (empty($details->name)) {
                    $name = $details->hostname;
                }
                if (empty($details->name)) {
                    $name = $details->dns_hostname;
                }
                $data = array($details->id, "$details->icon", "$name", "$temp_vm_id");
                $query = $this->db->query($sql, $data);
                $sql = "UPDATE system SET vm_system_id = ?, vm_server_name = ? WHERE id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->vm_system_id, $details->vm_server_name, $details->id);
                $query = $this->db->query($sql, $data);
            }
        }

        # insert an entry into the change log
        $this->load->model('m_change_log');
        $this->m_change_log->create($details->id, 'system', $details->id, 'create', 'Item added to system', $details->last_seen);

        $log_details->message = 'System insert end for '.ip_address_from_db($details->ip).' ('.$details->hostname.') (System ID '.$details->id.')';
        stdlog($log_details);
        unset($log_details);

        if (empty($details->org_id)) {
            $sql = "SELECT org_id FROM system WHERE system.id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($details->id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->org_id = $row->org_id;
        }

        # add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), 'system_create', " . intval($details->org_id) . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        # add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '" . $details->last_seen_by . "', " . intval($details->org_id) . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        return $details->id;
    }

    public function update($details, $display = 'n')
    {
        if (empty($details->id)) {
            # this is an update - we need a system.id
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

        $this->load->model('m_devices');

        if (isset($details->ip) and $details->ip != '') {
            $temp_ip = $details->ip.' ';
        } else {
            $temp_ip = '';
        }

        $log_details = new stdClass();
        $log_details->message = 'System update start for '.ip_address_from_db($temp_ip).'('.$details->hostname.') (System ID '.$details->id.')';
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
            $details->hostname = strtolower(gethostbyaddr($details->ip));
            # make sure we use the hostname and not a fqdn if returned
            if (strpos($details->hostname, ".") != false) {
                if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
                    # we got a FQDN back from DNS - split it up
                    $details->fqdn = strtolower($details->hostname);
                    $temp = explode(".", $details->hostname);
                    $details->hostname = $temp[0];
                    unset($temp[0]);
                    $details->domain = implode(".", $temp);
                    unset($temp);
                } else {
                    # we got an ip address back from DNS which is now the hostname
                }
            } else {
                # we should have a real hostname if we get to here
            }
        }
        if (filter_var($details->hostname, FILTER_VALIDATE_IP) and !empty($details->sysName)) {
            # use the sysName from SNMP if set
            $details->hostname = $details->sysName;
        }

        $sql = "SELECT name FROM system WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$details->id");
        $query = $this->db->query($sql, $data);
        $result = $query->row();
        if (!filter_var($result->name, FILTER_VALIDATE_IP)) {
            $details->name = $result->name;
        }
        if (empty($details->name) and !empty($details->hostname)) {
            $details->name = $details->hostname;
        }
        if (empty($details->name) and !empty($details->dns_hostname)) {
            $details->name = $details->dns_hostname;
        }
        if (empty($details->name) and !empty($details->ip)) {
            $details->name = $details->ip;
        }

        # if submitting an nmap scan, do not update the type or type
        if (isset($details->last_seen_by) and $details->last_seen_by == 'nmap') {
            unset($details->type);
        } else {
            if (!empty($details->type)) {
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
        if (isset($details->last_seen_by) and ($details->last_seen_by == 'audit' or $details->last_seen_by == 'snmp' or $details->last_seen_by == 'ipmi')) {
            $sql = "SELECT * FROM system WHERE id = ? LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->id");
            $query = $this->db->query($sql, $data);
            $row = $query->row();

            if (count($row) > 0) {
                if (strlen($row->hostname) > 15 and isset($details->hostname) and strlen($details->hostname) == 15) {
                    unset($details->hostname);
                }

                if (isset($details->manufacturer) and (
                    (strripos($details->manufacturer, "vmware") !== false) or
                    (strripos($details->manufacturer, "parallels") !== false) or
                    (strripos($details->manufacturer, "virtual") !== false))) {
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

        if (!isset($details->timestamp) or $details->timestamp == '') {
            $details->timestamp = $this->config->config['timestamp'];
        }

        if (!isset($details->original_timestamp) or $details->original_timestamp == '') {
            $sql = "SELECT last_seen FROM system WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$details->id");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->original_timestamp = $row->last_seen;
        }

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

        $fields = implode(' ', $this->db->list_fields('system'));
        $fields .= " ";
        foreach ($details as $key => $value) {
            if (($key != '') and ($value != '')) {
                # need to iterate through available columns and only insert where $key == valid column name
                if ($key != 'id' and stripos($fields, ' '.$key.' ') !== false) {
                    // OK, we have a valid attribute name ($key)
                    // get the current value
                    $sql = "SELECT `$key` AS `$key` FROM `system` WHERE `id` = ?";
                    $data = array(intval($details->id));
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();
                    $previous_value = $result[0]->{$key};
                    # get the current entry in the edit_log
                    $sql = "SELECT * FROM `edit_log` WHERE `system_id` = ? AND `db_table` = 'system' AND `db_column` = ? ORDER BY `timestamp` DESC LIMIT 1";
                    $data = array(intval($details->id), "$key");
                    $query = $this->db->query($sql, $data);
                    $result = $query->result();
                    if (!empty($result[0]->weight)) {
                        $previous_weight = intval($result[0]->weight);
                    } else {
                        $previous_weight = 10000;
                    }
                    // calculate the weight
                    $weight = intval($this->m_devices->weight($details->last_seen_by));
                    if ($weight <= $previous_weight and $value != $previous_value) {
                        if ($key != 'id' and $key != 'last_seen' and $key != 'last_seen_by' and $key != 'first_seen') {
                            // update the system table
                            $sql = "UPDATE `system` SET `" . $key . "` = ? WHERE id = ?";
                            $data = array((string)$value, intval($details->id));
                            $query = $this->db->query($sql, $data);
                            // insert an entry into the edit table
                            $no_edit_log = ' id sysUpTime uptime ';
                            if (stripos($no_edit_log, $key) === false) {
                                $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'system', ?, NOW(), ?, ?)";
                                $data = array(0, intval($details->id), (string)$details->last_seen_by, intval($weight), (string)$key, (string)$value, (string)$previous_value);
                                $query = $this->db->query($sql, $data);
                            }
                        }
                    } else {
                        # We have an existing edit_log entry with a more important change - don't touch the `system`.`$key` value
                    }
                }
            }
        }

        if (!empty($details->last_seen_by)) {
            $last_seen_by = $details->last_seen_by;
        } else {
            $last_seen_by = '';
        }
        if (!empty($details->last_seen)) {
            $last_seen = $details->last_seen;
        } else {
            $last_seen = '';
        }
        $sql = "UPDATE system SET `last_seen_by` = ?, `last_seen` = ? WHERE id = ?";
        $query = $this->db->query($sql, array((string)$last_seen_by, (string)$last_seen, intval($details->id)));

        # finally, update the device icon
        $this->m_devices->reset_icons($details->id);

        if (isset($details->mac_address) and $details->mac_address != '' and
            isset($details->ip) and $details->ip != '' and
            isset($details->subnet) and $details->subnet != '') {
            # we need to check if we have an entry in `network`
            # if we do not, but we have details (ex- an nmap device that previously existed but did not have a MAC, but now does)
            # we need to insert it.
            # ideally this would have already been done when the device was initially discovered, but we cannot count on that.
            # need to check if an entry in `network` exists and if it does not AND we have details, insert something

            # search for any entries in `ip`
            $sql = "SELECT * FROM ip WHERE system_id = ? AND mac = ? AND current = 'y' AND ip = ?";
            $sql = $this->clean_sql($sql);
            $data = array("$details->id", "$details->mac_address", "$details->ip");
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (count($result) == 0) {
                # no match - insert
                $sql = "INSERT INTO ip (id, system_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES(NULL, ?, 'y', ?, ?, ?, '', ?, ?, '', '', '')";
                $sql = $this->clean_sql($sql);
                $data = array("$details->id", "$details->timestamp", "$details->timestamp", "$details->mac_address", "$details->ip", "$details->subnet");
                $query = $this->db->query($sql, $data);
            } else {
                # match - update timestamp only
                $sql = "UPDATE ip SET last_seen = ? WHERE system_id = ? AND mac = ? AND current = 'y' AND ip = ?";
                $sql = $this->clean_sql($sql);
                $data = array("$details->timestamp", "$details->id", "$details->mac_address", "$details->ip");
                $query = $this->db->query($sql, $data);
            }
        }

        if (isset($details->ip) and $details->ip != '') {
            $temp_ip = $details->ip.' ';
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
            $sql = "SELECT vm.id AS `vm.id`, vm.system_id AS `vm.system_id`, system.hostname AS `system.hostname` FROM vm, system WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.current = 'y' and vm.system_id = system.id;";
            $sql = $this->clean_sql($sql);
            $data = array("$details->uuid", "$windows_vm_uuid");
            $query = $this->db->query($sql, $data);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $temp_vm_id = $row->{'vm.id'};
                $details->vm_system_id = $row->{'vm.system_id'};
                $details->vm_server_name = $row->{'system.hostname'};
                $sql = "SELECT icon, 'vm' FROM system WHERE system.id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->id);
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                $details->icon = $row->icon;
                $sql = "UPDATE vm SET guest_system_id = ?, icon = ?, name = ? WHERE id = ?";
                $sql = $this->clean_sql($sql);
                $name = $details->name;
                if (empty($details->name)) {
                    $name = $details->hostname;
                }
                if (empty($details->name)) {
                    $name = $details->dns_hostname;
                }
                $data = array($details->id, "$details->icon", "$name", "$temp_vm_id");
                $query = $this->db->query($sql, $data);
                $sql = "UPDATE system SET vm_system_id = ?, vm_server_name = ? WHERE id = ?";
                $sql = $this->clean_sql($sql);
                $data = array($details->vm_system_id, $details->vm_server_name, $details->id);
                $query = $this->db->query($sql, $data);
            }
        }

        if (empty($details->org_id)) {
            $sql = "SELECT org_id FROM system WHERE id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($details->id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->org_id = $row->org_id;
        }

        # add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '" . $details->last_seen_by . "', " . $details->org_id . ", 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        $log_details->message = 'System update end for '.ip_address_from_db($temp_ip).'('.$details->hostname.') (System ID '.$details->id.')';
        stdlog($log_details);
        unset($log_details);
        unset($temp_ip);
    }
}
