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
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.3.0
* @link      http://www.open-audit.org
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
        $log->function = 'match';
        $log->command = $command;
        $log->message = '';
        $log_message = array(); // we will store our messages until we get a system.id, then wrtie them to the log

        $message = new stdClass();
        $message->message = 'Running devices::match function.';
        $message->command_status = 'notice';
        $message->command_output = '';
        $log_message[] = $message;

        # TODO: fix this by making sure (snmp in particular) calls with the proper variable name
        if (!isset($details->mac_address) and (isset($details->mac))) {
            $details->mac_address = $details->mac;
        }

        # check if we have an ip address or a hostname (possibly a fqdn)
        if (!filter_var($details->hostname, FILTER_VALIDATE_IP)) {
            if (strpos($details->hostname, '.') !== false) {
                    $message = new stdClass();
                    $message->message = "Provided hostname contains a '.' and is not a valid IP. Assuming a FQDN.";
                    $message->command_status = 'notice';
                    $message->command_output = 'Hostname: ' . $details->hostname;
                    $log_message[] = $message;
                if (empty($details->fqdn)) {
                    $details->fqdn = $details->hostname;
                    $message = new stdClass();
                    $message->message = 'No FQDN provided, storing hostname as FQDN.';
                    $message->command_status = 'notice';
                    $message->command_output = 'FQDN: ' . $details->fqdn;
                    $log_message[] = $message;
                }
                $temp = explode(".", $details->hostname);
                $hostname = $temp[0];
                $details->hostname = $hostname;
                $message = new stdClass();
                $message->message = "Using first split '.' from hostname as hostname.";
                $message->command_status = 'notice';
                $message->command_output = 'Hostname: ' . $details->hostname;
                $log_message[] = $message;
                unset($temp);
            }
        } else {
            # we have an ip address in the hostname field - remove it
            # likely because DNS is not fully setup and working correctly
                $message = new stdClass();
                $message->message = "Provided hostname is actually an IP address.";
                $message->command_status = 'notice';
                $message->command_output = 'Hostname: ' . $details->hostname;
                $log_message[] = $message;
            if (empty($details->ip)) {
                $details->ip = $details->hostname;
                $message = new stdClass();
                $message->message = "No IP provided, but provided hostname is an IP. Storing in IP.";
                $message->command_status = 'notice';
                $message->command_output = 'IP: ' . $details->ip;
                $log_message[] = $message;
            }
            $message = new stdClass();
            $message->message = "Provided hostname is actually an IP, removing.";
            $message->command_status = 'notice';
            $message->command_output = '';
            $log_message[] = $message;
            unset($details->hostname);
        }

        if (!empty($details->hostname) and !empty($details->domain) and $details->domain != '.' and empty($details->fqdn)) {
            $details->fqdn = $details->hostname.".".$details->domain;
            $message = new stdClass();
            $message->message = "No FQDN provided, but hostname and domain provided, setting FQDN.";
            $message->command_status = 'notice';
            $message->command_output = 'FQDN: ' . $details->fqdn;
            $log_message[] = $message;
        }

        if (empty($details->fqdn)) {
            $details->fqdn = '';
        }

        if (!empty($details->mac_address)) {
            $details->mac_address = strtolower($details->mac_address);
            if ($details->mac_address == '00:00:00:00:00:00') {
                unset($details->mac_address);
                $message = new stdClass();
                $message->message = "All 00: mac address provided, removing.";
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        } else {
            unset($details->mac_address);
        }

        if (empty($details->ip) or $details->ip == '0.0.0.0' or $details->ip == '000.000.000.000') {
            $details->ip = '';
            $message = new stdClass();
            $message->message = "IP possibly not provided, or blank or all zero's, removing.";
            $message->command_status = 'notice';
            $message->command_output = '';
            $log_message[] = $message;
        } else {
            $log->ip = $details->ip;
        }

        # Match based on the OMK uuid
        if (!empty($details->omk_uuid) and empty($details->id)) {
            $sql = "SELECT system.id FROM system WHERE system.omk_uuid = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->omk_uuid");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on NMIS uuid';
                $message->command_status = 'success';
                $message->command_output = 'NMIS UUID: ' . $details->omk_uuid . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            } else {
                $message = new stdClass();
                $message->message = 'MISS on NMIS uuid';
                $message->command_status = 'fail';
                $message->command_output = 'NMIS UUID: ' . $details->omk_uuid;
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_hostname_uuid']) == 'y' and empty($details->id) and !empty($details->uuid) and !empty($details->hostname)) {
            #$log_message[] = "Running match_hostname_uuid for uuid: " . $details->uuid . ", hostname: " . $details->hostname;
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.uuid = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname", "$details->uuid");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT hostname + uuid';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', UUID: ' . $details->uuid . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on match_hostname_uuid.';
            $message->command_status = 'fail';
            $message->command_output = 'Hostname: ' . $details->hostname . ', UUID: ' . $details->uuid;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_hostname_uuid']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->uuid)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid, uuid not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->hostname)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid, hostname not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_hostname_dbus']) == 'y' and empty($details->id) and !empty($details->dbus_identifier) and !empty($details->hostname)) {
            #$log_message[] = "Running match_hostname_dbus for dbus_identifier: " . $details->dbus_identifier . ", hostname: " . $details->hostname;
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.dbus_identifier = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname", "$details->dbus_identifier");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on hostname + dbus_identifier.';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', DbusID: ' . $details->dbus_identifier . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on match_hostname_dbus.';
            $message->command_status = 'fail';
            $message->command_output = 'Hostname: ' . $details->hostname . ', DbusID: ' . $details->dbus_identifier;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_hostname_dbus']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->dbus_identifier)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus, dbus_identifier not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->hostname)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus, hostname not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_hostname_serial']) == 'y' and empty($details->id) and !empty($details->serial) and !empty($details->hostname)) {
            #$log_message[] = "Running match_hostname_serial for serial: " . $details->serial . ", hostname: " . $details->hostname;
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.serial = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname", "$details->serial");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (!empty($row)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on hostname + serial.';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', Serial: ' . $details->serial . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on hostname + serial.';
            $message->command_status = 'fail';
            $message->command_output = 'Hostname: ' . $details->hostname . ', Serial: ' . $details->serial;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_hostname_serial']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->serial)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, serial not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->hostname)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, hostname not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_dbus']) == 'y' and empty($details->id) and !empty($details->dbus_identifier)) {
            #$log_message[] = "Running match_dbus for " . $details->dbus_identifier;
            $sql = "SELECT system.id FROM system WHERE system.dbus_identifier = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->dbus_identifier");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on dbus_identifier.';
                $message->command_status = 'success';
                $message->command_output = 'DbusID: ' . $details->dbus_identifier . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on match_dbus.';
            $message->command_status = 'fail';
            $message->command_output = 'DbusID: ' . $details->dbus_identifier;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_dbus']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_dbus, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_dbus, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->dbus_identifier)) {
                $message = new stdClass();
                $message->message = 'Not running match_dbus, dbus_identifier not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_dbus.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_fqdn']) == 'y' and empty($details->id) and !empty($details->fqdn)) {
            #$log_message[] = "Running match_fqdn for " . $details->fqdn;
            $sql = "SELECT system.id FROM system WHERE system.fqdn = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->fqdn");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on fqdn.';
                $message->command_status = 'success';
                $message->command_output = 'FQDN: ' . $details->fqdn . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on fqdn.';
            $message->command_status = 'fail';
            $message->command_output = 'FQDN: ' . $details->fqdn;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_fqdn']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_fqdn, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_fqdn, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->fqdn)) {
                $message = new stdClass();
                $message->message = 'Not running match_fqdn, fqdn not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_fqdn.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_serial_type']) == 'y' and empty($details->id) and !empty($details->serial) and !empty($details->type)) {
            #$log_message[] = "Running match_serial_type for serial: " . $details->serial . ", with type: " . $details->type;
            $sql = "SELECT system.id FROM system WHERE system.serial = ? AND system.type = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->serial", "$details->type");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on serial + type.';
                $message->command_status = 'success';
                $message->command_output = 'Serial: ' . $details->serial . ', type: ' . $details->type . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on serial + type.';
            $message->command_status = 'fail';
            $message->command_output = 'Serial: ' . $details->serial . ', type: ' . $details->type;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_serial_type']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->serial)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, serial not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->type)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, type not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_serial']) == 'y' and empty($details->id) and !empty($details->serial)) {
            #$log_message[] = "Running match_serial for serial: " . $details->serial;
            $sql = "SELECT system.id FROM system WHERE system.serial = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("$details->serial");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on serial.';
                $message->command_status = 'success';
                $message->command_output = 'Serial: ' . $details->serial . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on serial.';
            $message->command_status = 'success';
            $message->command_output = 'Serial: ' . $details->serial;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_serial']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_serial, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($device->serial)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial, serial not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_serial.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_mac']) == 'y' and empty($details->id) and !empty($details->mac_address)) {
            if (strtolower($this->config->config['match_mac_vmware']) == 'n') {
                #$log_message[] = 'Running match_mac (ip table) for: ' . $details->mac_address . ' excluding VMware MACs';
                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND LOWER(ip.mac) NOT LIKE '00:0c:29:%' AND ip.mac NOT LIKE '00:50:56:%' AND ip.mac NOT LIKE '00:05:69:%' AND LOWER(ip.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
            } else {
                #$log_message[] = 'Running match_mac (ip table) for: ' . $details->mac_address . ' including VMware MACs';
                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.status != 'deleted' LIMIT 1";
            }

            $sql = $this->clean_sql($sql);
            $data = array("$details->mac_address");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on Mac Address (ip table).';
                $message->command_status = 'success';
                $message->command_output = 'MAC: ' . $details->mac_address . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on Mac Address (ip table).';
            $message->command_status = 'fail';
            $message->command_output = 'MAC: ' . $details->mac_address;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_mac']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip table), config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip table), device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->mac_address)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip table), mac_address not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_mach (ip table).';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_mac']) == 'y' and empty($details->id) and !empty($details->mac_address)) {
            if (strtolower($this->config->config['match_mac_vmware']) == 'n') {
                #$log_message[] = 'Running match_mac (network table) for: ' . $details->mac_address . ' excluding VMware MACs';
                $sql = "SELECT system.id FROM system LEFT JOIN network ON (system.id = network.system_id AND network.current = 'y') WHERE network.mac = ? AND LOWER(network.mac) NOT LIKE '00:0c:29:%' AND network.mac NOT LIKE '00:50:56:%' AND network.mac NOT LIKE '00:05:69:%' AND LOWER(network.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
            } else {
                #$log_message[] = 'Running match_mac (network table) for: ' . $details->mac_address . ' including VMware MACs';
                $sql = "SELECT system.id FROM system LEFT JOIN network ON (system.id = network.system_id AND network.current = 'y') WHERE network.mac = ? AND system.status != 'deleted' LIMIT 1";
            }

            $sql = $this->clean_sql($sql);
            $data = array("$details->mac_address");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on Mac Address (network table).';
                $message->command_status = 'success';
                $message->command_output = 'MAC: ' . $details->mac_address . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on Mac Address (network table).';
            $message->command_status = 'fail';
            $message->command_output = 'MAC: ' . $details->mac_address;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_mac']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table), config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table), device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->mac_address)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table), mac_address not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_mach (network table).';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_mac']) == 'y' and empty($details->id) and !empty($details->mac_addresses)) {
            # check all MAC addresses - this caters for an actual audit script result
            foreach ($details->mac_addresses as $mac) {
                if (!empty($mac) and (string)$mac != '00:00:00:00:00:00') {
                    # check the ip table
                    if (strtolower($this->config->config['match_mac_vmware']) == 'n') {
                        #$log_message[] = 'Running match_mac (addresses) for: ' . $mac . ' excluding VMware MACs';
                        $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND LOWER(ip.mac) NOT LIKE '00:0c:29:%' AND ip.mac NOT LIKE '00:50:56:%' AND ip.mac NOT LIKE '00:05:69:%' AND LOWER(ip.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
                    } else {
                        #$log_message[] = 'Running match_mac (addresses) for: ' . $mac . ' including VMware MACs';
                        $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.status != 'deleted' LIMIT 1";
                    }
                    $sql = $this->clean_sql($sql);
                    $data = array("$mac");
                    $query = $this->db->query($sql, $data);
                    $row = $query->row();
                    if (count($row) > 0) {
                        $details->id = $row->id;
                        $log->system_id = $details->id;
                        $message = new stdClass();
                        $message->message = 'HIT on Mac Address (addresses).';
                        $message->command_status = 'success';
                        $message->command_output = 'MAC: ' . $mac . ', SystemID : ' . $details->id;
                        $log_message[] = $message;
                        foreach ($log_message as $message) {
                            $log->message = $message->message;
                            $log->command_status = $message->command_status;
                            $log->command_output = $message->command_output;
                            discovery_log($log);
                        }
                        return $details->id;
                    }
                }
            }
            $message = new stdClass();
            $message->message = 'MISS on Mac Address (addresses).';
            $message->command_status = 'fail';
            $message->command_output = 'MAC: ' . $mac . ', SystemID : ' . $details->id;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_mac']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_mac (addresses), config item not set';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (addresses), device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->mac_addresses)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (addresses), mac_addresses not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_mac (addresses).';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        # check IP Address in system, then ip tables
        if (strtolower($this->config->config['match_ip']) == 'y' and empty($details->id) and !empty($details->ip) and filter_var($details->ip, FILTER_VALIDATE_IP)) {
            # first check the ip table as eny existing devices that have been seen
            # by more than just Nmap will have an entry here
            #$log_message[] = 'Running match_ip for IP: ' . $details->ip;
            $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.ip = ? AND ip.ip NOT LIKE '127%' AND ip.ip NOT LIKE '1::%' AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array(ip_address_to_db($details->ip));
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (count($row) > 0) {
                $details->id = $row->id;
                if (!empty($details->system_id)) {
                    $log->system_id = $details->id;
                } else if (!empty($details->id)) {
                    $log->system_id = $details->id;
                }
                $message = new stdClass();
                $message->message = 'HIT on IP Address (network table).';
                $message->command_status = 'success';
                $message->command_output = 'IP: ' . $details->ip . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    discovery_log($log);
                }
                return $details->id;
            }

            # next check the system table for a ip match
            if (empty($details->id)) {
                $sql = "SELECT system.id FROM system WHERE system.ip = ? AND system.ip NOT LIKE '127%' AND system.ip NOT LIKE '1::%' AND system.status != 'deleted'";
                $sql = $this->clean_sql($sql);
                $data = array(ip_address_to_db($details->ip));
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if (count($row) > 0) {
                    $details->id = $row->id;
                    $log->system_id = $details->id;
                    $message = new stdClass();
                    $message->message = 'HIT on IP Address (system table).';
                    $message->command_status = 'success';
                    $message->command_output = 'IP: ' . $details->ip . ', SystemID : ' . $details->id;
                    $log_message[] = $message;
                    foreach ($log_message as $message) {
                        $log->message = $message->message;
                        $log->command_status = $message->command_status;
                        $log->command_output = $message->command_output;
                        discovery_log($log);
                    }
                    return $details->id;
                }
            }
            $message = new stdClass();
            $message->message = 'MISS on IP Address.';
            $message->command_status = 'fail';
            $message->command_output = 'IP: ' . $details->ip;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_ip']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_ip, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_ip, device id already set';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->ip)) {
                $message = new stdClass();
                $message->message = 'Not running match_ip, ip not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_ip.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($this->config->config['match_hostname']) == 'y' and empty($details->id) and !empty($details->hostname)) {
            #$log_message[] = 'Running match_hostname for hostname: ' . $details->hostname;
            $sql = "SELECT system.id FROM system WHERE (system.hostname = ?) AND system.status != 'deleted'";
            $sql = $this->clean_sql($sql);
            $data = array("$details->hostname");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if (!empty($row)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on hostname.';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', SystemID : ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
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
                            $message = new stdClass();
                            $message->message = 'HIT on hostname (short).';
                            $message->command_status = 'success';
                            $message->command_output = 'Hostname: ' . $hostname . ', SystemID : ' . $details->id;
                            $log_message[] = $message;
                            foreach ($log_message as $message) {
                                $log->message = $message->message;
                                $log->command_status = $message->command_status;
                                $log->command_output = $message->command_output;
                                discovery_log($log);
                            }
                            return $details->id;
                        }
                    }
                    unset($temp);
                }
            }
            $message = new stdClass();
            $message->message = 'MISS on hostname.';
            $message->command_status = 'fail';
            $message->command_output = 'Hostname: ' . $details->hostname;
            $log_message[] = $message;
        } else {
            if (strtolower($this->config->config['match_hostname']) != 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname, config item not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (!empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->hostname)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname, hostname not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_hostname.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        $temp = @(string)$details->id;
        if (is_null($temp) or $temp == '') {
            $message = new stdClass();
            $message->message = 'Could not find any matching attributes for the device with IP '  . $details->ip;
            $message->command_status = 'notice';
            $message->command_output = '';
            $log_message[] = $message;
            foreach ($log_message as $message) {
                $log->message = $message->message;
                $log->command_status = $message->command_status;
                $log->command_output = $message->command_output;
                discovery_log($log);
            }
        } else {
            $message = new stdClass();
            $message->message = 'Returning system.id for device with IP '  . $details->ip . ' (' . $details->id . ')';
            $message->command_status = 'notice';
            $message->command_output = '';
            $log_message[] = $message;
            foreach ($log_message as $message) {
                $log->message = $message->message;
                $log->command_status = $message->command_status;
                $log->command_output = $message->command_output;
                discovery_log($log);
            }
        }
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

        # this is an insert - we do NOT want a system.id
        unset($details->id);

        $this->load->model('m_devices');
        $this->load->helper('audit');
        $this->load->helper('log');

        $log = new stdClass();
        $log->severity = 7;
        $log->pid = getmypid();
        $log->ip = $_SERVER['REMOTE_ADDR'];
        $log->function = 'insert';
        $log->system_id = '';
        $log->file = 'm_device';
        $log->message = 'System insert start for '.ip_address_from_db($details->ip).' ('.$details->hostname.')';
        $log->command = '';
        $log->command_status = 'start';
        $log->command_time_to_execute = '';
        $log->command_output = '';
        if (!empty($GLOBALS['discovery_id'])) {
            $log->discovery_id = $GLOBALS['discovery_id'];
        } else if (!empty($input->discovery_id)) {
            $log->discovery_id = $input->discovery_id;
            $GLOBALS['discovery_id'] = $input->discovery_id;
        } else {
            $log->discovery_id = '';
        }
        $details = audit_format_system($details);

        if (empty($details->name)) {
            if (!empty($details->hostname)) {
                $details->name = $details->hostname;
            } else if (!empty($details->sysName)) {
                $details->name = $details->sysName;
            } else if (!empty($details->ip)) {
                $details->name = ip_address_from_db($details->ip);
            } else {
                $details->name = '';
            }
        }

        if (empty($details->status)) {
            $details->status = 'production';
        }
        if (empty($details->type)) {
            $details->type = 'unknown';
        }
        if (empty($details->org_id)) {
            $details->org_id = '1';
        }
        if (empty($details->location_id)) {
            $details->location_id = '1';
        }

        $columns = $this->db->list_fields('system');

        $keys = '';
        $values = '';
        $data = array();
        foreach ($details as $key => $value) {
            if ($key > '') {
                # need to iterate through available columns and only insert where $key == valid column name
                foreach ($columns as $column) {
                    if ($key == $column) {
                        $keys .= $key.", ";
                        $values .= '?, ';
                        $data[] = $value;
                    }
                }
            }
        }
        $keys = mb_substr($keys, 0, mb_strlen($keys)-2);
        $values = mb_substr($values, 0, mb_strlen($values)-2);
        $sql = "INSERT INTO system ( " . $keys . ") VALUES (" . $values . ")";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $details->id = intval($this->db->insert_id());
        $log->system_id = intval($details->id);
        discovery_log($log);

        $weight = intval($this->m_devices->weight($details->last_seen_by));
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'last_seen_by', 'first_seen');
        foreach ($columns as $column) {
            if (!empty($details->{$column}) and !in_array($column, $disallowed_fields)) {
                $edit_sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, 'Data was changed', ?, ?, 'system', ?, ?, ?, '')";
                $edit_data = array(intval($details->id), (string)$details->last_seen_by, intval($weight), (string)$column, (string)$details->last_seen, (string)$details->{$column});
                $query = $this->db->query($edit_sql, $edit_data);
            }
        }

        # update the device icon
        $this->m_devices->reset_icons($details->id);

        # insert a subnet so we have a default
        if (!isset($details->subnet) or $details->subnet == '') {
            $details->subnet = '';
        }

        # insert the network card details if we have them
        # This is only required for manual uploading of devices (via web form or via CSV)
        #.   Discoveries and audits already have IP items populated
        # TODO - Can we move this into another function and only run if we're manually inserting devices?
        if (!empty($details->last_seen_by) and ($details->last_seen_by == 'web form' or $details->last_seen_by == 'user')) {
            if (!empty($details->mac_address) and !empty($details->ip) and !empty($details->subnet)) {
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
        }

        # check if we have a matching entry in the vm table and update it if required
        $sql = "SELECT vm.id AS `vm.id`, vm.system_id AS `vm.system_id`, system.hostname AS `system.hostname` FROM vm, system WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.current = 'y' and vm.system_id = system.id;";
        $sql = $this->clean_sql($sql);
        $data = array("$details->uuid", "$details->vm_uuid");
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

        # insert an entry into the change log
        $this->load->model('m_change_log');
        $this->m_change_log->create($details->id, 'system', $details->id, 'create', 'Item added to system', $details->last_seen);

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


        if(!isset($details->ip) or empty($details->ip)){
            $details->ip = "N/A";
        }

        $log->message = 'System insert end for '.ip_address_from_db($details->ip).' ('.$details->hostname.')';
        $log->command_status = 'finish';
        discovery_log($log);

        return $details->id;
    }

    public function update($details, $display = 'n')
    {
        if (empty($details->id)) {
            # this is an update - we need a system.id
            return;
        }

        $this->load->model('m_devices');

        $log_details = new stdClass();
        $log_details->message = 'System update start for '.@ip_address_from_db($details->ip).'('.$details->hostname.') (System ID '.$details->id.')';
        $log_details->severity = 7;
        $log_details->file = 'system';
        if ($display != 'y') {
            $display = 'n';
        }
        $log_details->display = $display;
        unset($display);
        stdlog($log_details);

        if (empty($details->name)) {
            if (!empty($details->hostname)) {
                $details->name = $details->hostname;
            } else if (!empty($details->sysName)) {
                $details->name = $details->sysName;
            } else if (!empty($details->ip)) {
                $details->name = ip_address_from_db($details->ip);
            } else {
                $details->name = '';
            }
        }

        # we check a few items when we are submitting an audit script result
        # if they are blank (previously submitted info is incomplete) we over write them
        $sql = "SELECT * FROM system WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$details->id");
        $query = $this->db->query($sql, $data);
        $db_entry = $query->row();

        if (isset($details->last_seen_by) and ($details->last_seen_by == 'audit' or $details->last_seen_by == 'snmp' or $details->last_seen_by == 'ipmi')) {
            if (!empty($db_entry)) {
                if (strlen($db_entry->hostname) > 15 and isset($details->hostname) and strlen($details->hostname) == 15) {
                    unset($details->hostname);
                }
            } // end of row count > 0
        }


        $details->original_last_seen_by = $db_entry->last_seen_by;
        $details->original_last_seen = $db_entry->last_seen;
        $details->original_timestamp = $db_entry->last_seen;


        $sql = "SELECT weight, db_column, MAX(timestamp) as `timestamp`, value, previous_value, source FROM edit_log WHERE system_id = ? AND `db_table` = 'system' GROUP BY db_column";
        $data = array($details->id);
        $query = $this->db->query($sql, $data);
        $edit_log = $query->result();
        $fields = $this->db->list_fields('system');
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'last_seen_by', 'first_seen', 'instance_options');
        $update_device = array();
        foreach ($details as $key => $value) {
            if (($key != '') and ($value != '')) {
                # need to iterate through available columns and only insert where $key == valid column name
                if (!in_array($key, $disallowed_fields) and in_array($key, $fields)) {
                    $previous_value = $db_entry->{$key};
                    # get the current weight from the edit_log
                    $previous_weight = 10000;
                    for ($i=0; $i < count($edit_log); $i++) {
                        if ($edit_log[$i]->db_column == $key) {
                            $previous_weight = $edit_log[$i]->weight;
                        }
                    }
                    // calculate the weight
                    $weight = intval($this->m_devices->weight($details->last_seen_by));
                    if ($weight <= $previous_weight and $value != $previous_value) {
                        $update = new stdClass();
                        $update->key = $key;
                        $update->value = $value;
                        $update_device[] = $update;
                        $sql = "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'system', ?, ?, ?, ?)";
                        $data = array(0, intval($details->id), (string)$details->last_seen_by, intval($weight), (string)$key, (string)$details->timestamp, (string)$value, (string)$previous_value);
                        $query = $this->db->query($sql, $data);
                    } else {
                        # We have an existing edit_log entry with a more important change - don't touch the `system`.`$key` value
                    }
                }
            }
        }

        foreach ($details as $key => $value) {
            if ($key != 'id' AND in_array($key, $disallowed_fields)) {
                $update = new stdClass();
                $update->key = $key;
                $update->value = $value;
                $update_device[] = $update;
            }
        }

        $sql = '';
        $data = array();
        if (count($update_device) > 0) {
            $sql = "UPDATE `system` SET ";
            foreach ($update_device as $field) {
                $sql .= "`" . $field->key . "` = ?, ";
                $data[] = $field->value;
            }
            $sql = substr($sql, 0, strlen($sql)-2);
            $sql .= ' WHERE `id` = ?';
            $data[] = intval($details->id);
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
        }

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
        $sql = "SELECT vm.id AS `vm.id`, vm.system_id AS `vm.system_id`, system.hostname AS `system.hostname` FROM vm, system WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.current = 'y' and vm.system_id = system.id;";
        $sql = $this->clean_sql($sql);
        $data = array("$details->uuid", "$details->vm_uuid");
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
