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
* @version   GIT: Open-AudIT_4.2.0
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
class M_device extends MY_Model
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
     * [match description]
     * @param  [type] $parameters [description]
     * @return [type]             [description]
     */
    public function match($parameters)
    {
        if (empty($parameters) OR empty($parameters->details) OR (empty($parameters->log) && empty($parameters->discovery_id))) {
            $mylog = new stdClass();
            $mylog->severity = 4;
            $mylog->status = 'fail';
            $mylog->message = 'Function match called without correct params object';
            $mylog->file = 'm_device';
            $mylog->function = 'match';
            stdlog($mylog);
            return false;
        }

        // we are searching for a system.id.
        $details = $parameters->details;
        $details = (object) $details;
        $details->id = '';

        $CI = & get_instance();
        $CI->load->helper('log');

        if ( ! empty($parameters->log)) {
            $log = $parameters->log;
        } else if ( ! empty($parameters->discovery_id)) {
            $log = new stdClass();
            $log->discovery_id = $parameters->discovery_id;
        }
        $log->file = 'm_device';
        $log->function = 'match';
        $log->severity = 7;
        $log->ip = '';
        if ( ! empty($details->ip)) {
            $log->ip = ip_address_from_db($details->ip);
        }

        $log_message = array(); // we will store our messages until we get a system.id, then write them to the log

        $message = new stdClass();
        $message->message = 'Running devices::match function.';
        $message->command_status = 'notice';
        $message->command_output = '';
        $log_message[] = $message;

        $match = new stdClass();
        if ( ! empty($parameters->match)) {
            $match = $parameters->match;
        }
        // Ensure we have a fully populated (even if blank) match list
        $matches = array('match_dbus', 'match_fqdn', 'match_dns_fqdn', 'match_dns_hostname', 'match_hostname', 'match_hostname_dbus', 'match_hostname_serial', 'match_hostname_uuid', 'match_ip', 'match_mac', 'match_mac_vmware', 'match_serial', 'match_serial_type', 'match_sysname', 'match_sysname_serial', 'match_uuid');
        foreach ($matches as $item) {
            if (empty($match->{$item})) {
                $match->{$item} = $this->config->config[$item];
            }
        }
        $invalid_strings = array('To be filled by O.E.M.');

        // TODO: fix this by making sure (snmp in particular) calls with the proper variable name
        if ( ! isset($details->mac_address) && (isset($details->mac))) {
            $details->mac_address = $details->mac;
        }

        // check if we have an ip address or a hostname (possibly a fqdn)
        if ( ! empty($details->hostname)) {
            if ( ! filter_var($details->hostname, FILTER_VALIDATE_IP)) {
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
                    $temp = explode('.', $details->hostname);
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
                // we have an ip address in the hostname field - remove it
                // possibly because DNS is not fully setup and working correctly
                $message = new stdClass();
                $message->message = 'Provided hostname is actually an IP address.';
                $message->command_status = 'notice';
                $message->command_output = 'Hostname: ' . (string)$details->hostname;
                $log_message[] = $message;
                if (empty($details->ip)) {
                    $details->ip = @($details->hostname);
                    $message = new stdClass();
                    $message->message = 'No IP provided, but provided hostname is an IP. Storing in IP.';
                    $message->command_status = 'notice';
                    $message->command_output = 'IP: ' . $details->ip;
                    $log_message[] = $message;
                }
                unset($details->hostname);
            }
        } else {
            $message = new stdClass();
            $message->message = 'Provided hostname is empty.';
            $message->command_status = 'notice';
            $message->command_output = 'Hostname: ';
            $log_message[] = $message;
        }

        if ( ! empty($details->hostname) && ! empty($details->domain) && $details->domain !== '.' && empty($details->fqdn)) {
            $details->fqdn = $details->hostname . '.' . $details->domain;
            $message = new stdClass();
            $message->message = 'No FQDN provided, but hostname and domain provided, setting FQDN.';
            $message->command_status = 'notice';
            $message->command_output = 'FQDN: ' . $details->fqdn;
            $log_message[] = $message;
        }

        if (empty($details->fqdn)) {
            $details->fqdn = '';
        }

        if ( ! empty($details->mac_address)) {
            $details->mac_address = strtolower($details->mac_address);
            if ($details->mac_address === '00:00:00:00:00:00') {
                unset($details->mac_address);
                $message = new stdClass();
                $message->message = 'All 00: mac address provided, removing.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        } else {
            unset($details->mac_address);
        }

        if (empty($details->ip) OR $details->ip === '0.0.0.0' OR $details->ip === '000.000.000.000') {
            $details->ip = '';
            $message = new stdClass();
            $message->message = "IP possibly not provided, or blank or all zero's, removing.";
            $message->command_status = 'notice';
            $message->command_output = '';
            $log_message[] = $message;
        } else {
            $log->ip = ip_address_from_db($details->ip);
        }

        // Match based on the OMK uuid
        if ( ! empty($details->omk_uuid) && empty($details->id)) {
            $sql = "SELECT system.id FROM system WHERE system.omk_uuid = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->omk_uuid}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on NMIS uuid';
                $message->command_status = 'success';
                $message->command_output = 'NMIS UUID: ' . $details->omk_uuid . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            } else {
                $message = new stdClass();
                $message->message = 'MISS on NMIS uuid';
                $message->command_status = 'notice';
                $message->command_output = 'NMIS UUID: ' . $details->omk_uuid;
                $log_message[] = $message;
            }
        }

        // Match based on the Google Cloud id (instance_ident)
        if ( ! empty($details->instance_ident) && empty($details->id)) {
            $sql = "SELECT system.id FROM system WHERE system.instance_ident = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->instance_ident}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on instance_ident';
                $message->command_status = 'success';
                $message->command_output = 'Instance Ident: ' . $details->instance_ident . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            } else {
                $message = new stdClass();
                $message->message = 'MISS on instance_ident';
                $message->command_status = 'notice';
                $message->command_output = 'Instance Ident: ' . $details->instance_ident;
                $log_message[] = $message;
            }
        }

        if (strtolower($match->match_hostname_uuid) === 'y' && empty($details->id) && ! empty($details->uuid) && ! empty($details->hostname)) {
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.uuid = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->hostname}", "{$details->uuid}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT hostname + uuid';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', UUID: ' . $details->uuid . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on match_hostname_uuid.';
            $message->command_status = 'notice';
            $message->command_output = 'Hostname: ' . $details->hostname . ', UUID: ' . $details->uuid;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_hostname_uuid) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid, matching rule set to: ' . $match->match_hostname_uuid .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->uuid)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_uuid, uuid not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->hostname)) {
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

        if (strtolower($match->match_hostname_dbus) === 'y' && empty($details->id) && ! empty($details->dbus_identifier) && ! empty($details->hostname)) {
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.dbus_identifier = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->hostname}", "{$details->dbus_identifier}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on hostname + dbus_identifier.';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', DbusID: ' . $details->dbus_identifier . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on match_hostname_dbus.';
            $message->command_status = 'notice';
            $message->command_output = 'Hostname: ' . $details->hostname . ', DbusID: ' . $details->dbus_identifier;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_hostname_dbus) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus, matching rule set to: ' . $match->match_hostname_dbus .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->dbus_identifier)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_dbus, dbus_identifier not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->hostname)) {
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

        if (strtolower($match->match_hostname_serial) === 'y' && empty($details->id) && ! empty($details->serial) && ! empty($details->hostname) && ! in_array($details->serial, $invalid_strings)) {
            $sql = "SELECT system.id FROM system WHERE system.hostname = ? AND system.serial = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->hostname}", "{$details->serial}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on hostname + serial.';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', Serial: ' . $details->serial . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on hostname + serial.';
            $message->command_status = 'notice';
            $message->command_output = 'Hostname: ' . $details->hostname . ', Serial: ' . $details->serial;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_hostname_serial) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, matching rule set to: ' . $match->match_hostname_serial .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->serial)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, serial not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->hostname)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, hostname not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (in_array($details->serial, $invalid_strings)) {
                $message = new stdClass();
                $message->message = 'Not running match_hostname_serial, invalid serial.';
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

        if (strtolower($match->match_dbus) === 'y' && empty($details->id) && ! empty($details->dbus_identifier)) {
            $sql = "SELECT system.id FROM system WHERE system.dbus_identifier = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->dbus_identifier}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on dbus_identifier.';
                $message->command_status = 'success';
                $message->command_output = 'DbusID: ' . $details->dbus_identifier . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on match_dbus.';
            $message->command_status = 'notice';
            $message->command_output = 'DbusID: ' . $details->dbus_identifier;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_dbus) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_dbus, matching rule set to: ' . $match->match_dbus .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_dbus, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->dbus_identifier)) {
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

        if (strtolower($match->match_dns_fqdn) === 'y' && empty($details->id) && ! empty($details->dns_fqdn)) {
            $sql = "SELECT system.id FROM system WHERE system.dns_fqdn = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->dns_fqdn}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on dns_fqdn.';
                $message->command_status = 'success';
                $message->command_output = 'DNS FQDN: ' . $details->dns_fqdn . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on dns_fqdn.';
            $message->command_status = 'notice';
            $message->command_output = 'DNS FQDN: ' . $details->dns_fqdn;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_dns_fqdn) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_dns_fqdn, matching rule set to: ' . $match->match_dns_fqdn .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_dns_fqdn, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->dns_fqdn)) {
                $message = new stdClass();
                $message->message = 'Not running match_dns_fqdn, dns_fqdn not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_dns_fqdn.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($match->match_dns_hostname) === 'y' && empty($details->id) && ! empty($details->dns_hostname)) {
            $sql = "SELECT system.id FROM system WHERE system.dns_hostname = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->dns_hostname}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on dns_hostname.';
                $message->command_status = 'success';
                $message->command_output = 'DNS HOSTNAME: ' . $details->dns_hostname . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on dns_hostname.';
            $message->command_status = 'notice';
            $message->command_output = 'DNS HOSTNAME: ' . $details->dns_hostname;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_dns_hostname) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_dns_hostname, matching rule set to: ' . $match->match_dns_hostname .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_dns_hostname, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->dns_hostname)) {
                $message = new stdClass();
                $message->message = 'Not running match_dns_hostname, dns_fqdn not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_dns_hostname.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($match->match_fqdn) === 'y' && empty($details->id) && ! empty($details->fqdn)) {
            $sql = "SELECT system.id FROM system WHERE system.fqdn = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->fqdn}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on fqdn.';
                $message->command_status = 'success';
                $message->command_output = 'FQDN: ' . $details->fqdn . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on fqdn.';
            $message->command_status = 'notice';
            $message->command_output = 'FQDN: ' . $details->fqdn;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_fqdn) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_fqdn, matching rule set to: ' . $match->match_fqdn .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_fqdn, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->fqdn)) {
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

        if (strtolower($match->match_serial_type) === 'y' && empty($details->id) && ! empty($details->serial) && ! empty($details->type) && ! in_array($details->serial, $invalid_strings)) {
            $sql = "SELECT system.id FROM system WHERE system.serial = ? AND system.type = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->serial}", "{$details->type}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on serial + type.';
                $message->command_status = 'success';
                $message->command_output = 'Serial: ' . $details->serial . ', type: ' . $details->type . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on serial + type.';
            $message->command_status = 'notice';
            $message->command_output = 'Serial: ' . $details->serial . ', type: ' . $details->type;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_serial_type) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, matching rule set to: ' . $match->match_serial_type .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->serial)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, serial not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->type)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, type not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (in_array($details->serial, $invalid_strings)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial_type, invalid serial.';
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

        if (strtolower($match->match_serial) === 'y' && empty($details->id) && ! empty($details->serial) && ! in_array($details->serial, $invalid_strings)) {
            $sql = "SELECT system.id FROM system WHERE system.serial = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->serial}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on serial.';
                $message->command_status = 'success';
                $message->command_output = 'Serial: ' . $details->serial . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on serial.';
            $message->command_status = 'success';
            $message->command_output = 'Serial: ' . $details->serial;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_serial) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_serial, matching rule set to: ' . $match->match_serial .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->serial)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial, serial not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (in_array($details->serial, $invalid_strings)) {
                $message = new stdClass();
                $message->message = 'Not running match_serial, invalid serial.';
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

        if (strtolower($match->match_sysname_serial) === 'y' && empty($details->id) && ! empty($details->serial) && ! empty($details->sysName) && ! in_array($details->serial, $invalid_strings)) {
            $sql = "SELECT system.id FROM system WHERE system.sysName = ? AND system.serial = ? AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->sysName}", "{$details->serial}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on sysname + serial.';
                $message->command_status = 'success';
                $message->command_output = 'SysName: ' . $details->sysName . ', Serial: ' . $details->serial . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on sysname + serial.';
            $message->command_status = 'notice';
            $message->command_output = 'SysName: ' . $details->sysName . ', Serial: ' . $details->serial;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_sysname_serial) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_sysname_serial, matching rule set to: ' . $match->match_sysname_serial .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_sysname_serial, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->sysName)) {
                $message = new stdClass();
                $message->message = 'Not running match_sysname_serial, sysname not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->serial)) {
                $message = new stdClass();
                $message->message = 'Not running match_sysname_serial, serial not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (in_array($details->serial, $invalid_strings)) {
                $message = new stdClass();
                $message->message = 'Not running match_sysname_serial, invalid serial.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_sysname_serial.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($match->match_sysname) === 'y' && empty($details->id) && ! empty($details->sysName)) {
            $sql = "SELECT system.id FROM system WHERE (system.sysName = ?) AND system.status != 'deleted'";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->sysName}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on sysName.';
                $message->command_status = 'success';
                $message->command_output = 'SysName: ' . $details->sysName . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
        } else {
            if (strtolower($match->match_sysname_serial) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_sysname, matching rule set to: ' . $match->match_sysname .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_sysname, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->sysName)) {
                $message = new stdClass();
                $message->message = 'Not running match_sysname, sysname not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else {
                $message = new stdClass();
                $message->message = 'Not running match_sysname_serial.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        if (strtolower($match->match_mac) === 'y' && empty($details->id) && ! empty($details->mac_address)) {
            if (strtolower($match->match_mac_vmware) === 'n') {
                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND LOWER(ip.mac) NOT LIKE '00:0c:29:%' AND ip.mac NOT LIKE '00:50:56:%' AND ip.mac NOT LIKE '00:05:69:%' AND LOWER(ip.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
                $sql = $this->clean_sql($sql);
            } else {
                $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.status != 'deleted' LIMIT 1";
                $sql = $this->clean_sql($sql);
            }
            $data = array("{$details->mac_address}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on Mac Address (ip table).';
                $message->command_status = 'success';
                $message->command_output = 'MAC: ' . $details->mac_address . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on Mac Address (ip table).';
            if (strtolower($match->match_mac_vmware) === 'n') {
                if (strpos($details->mac_address, '00:0c:29:') === 0 or strpos($details->mac_address, '00:50:56:') === 0 or strpos($details->mac_address, '00:05:69:') === 0 or strpos($details->mac_address, '00:1c:14:') === 0) {
                    $message->message = 'MISS on Mac Address, VMware specified not match (ip table).';
                }
            }
            $message->command_status = 'notice';
            $message->command_output = 'MAC: ' . $details->mac_address;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_mac) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip table), matching rule set to: ' . $match->match_mac .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
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

        if (strtolower($match->match_mac) === 'y' && empty($details->id) && ! empty($details->mac_address)) {
            if (strtolower($match->match_mac_vmware) === 'n') {
                $sql = "SELECT system.id FROM system LEFT JOIN network ON (system.id = network.system_id AND network.current = 'y') WHERE network.mac = ? AND LOWER(network.mac) NOT LIKE '00:0c:29:%' AND network.mac NOT LIKE '00:50:56:%' AND network.mac NOT LIKE '00:05:69:%' AND LOWER(network.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
                $sql = $this->clean_sql($sql);
            } else {
                $sql = "SELECT system.id FROM system LEFT JOIN network ON (system.id = network.system_id AND network.current = 'y') WHERE network.mac = ? AND system.status != 'deleted' LIMIT 1";
                $sql = $this->clean_sql($sql);
            }
            $data = array("{$details->mac_address}");
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on Mac Address (network table).';
                $message->command_status = 'success';
                $message->command_output = 'MAC: ' . $details->mac_address . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }
            $message = new stdClass();
            $message->message = 'MISS on Mac Address (network table).';
            if (strtolower($match->match_mac_vmware) === 'n') {
                if (strpos($details->mac_address, '00:0c:29:') === 0 or strpos($details->mac_address, '00:50:56:') === 0 or strpos($details->mac_address, '00:05:69:') === 0 or strpos($details->mac_address, '00:1c:14:') === 0) {
                    $message->message = 'MISS on Mac Address, VMware specified not match (network table).';
                }
            }
            $message->command_status = 'notice';
            $message->command_output = 'MAC: ' . $details->mac_address;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_mac) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table), matching rule set to: ' . $match->match_mac .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
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


        if (strtolower($match->match_mac) === 'y' && empty($details->id) && ! empty($details->mac_addresses)) {
            foreach ($details->mac_addresses as $mac) {
                if (strtolower($match->match_mac_vmware) === 'n') {
                    $sql = "SELECT system.id FROM system LEFT JOIN network ON (system.id = network.system_id AND network.current = 'y') WHERE network.mac = ? AND LOWER(network.mac) NOT LIKE '00:0c:29:%' AND network.mac NOT LIKE '00:50:56:%' AND network.mac NOT LIKE '00:05:69:%' AND LOWER(network.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
                    $sql = $this->clean_sql($sql);
                } else {
                    $sql = "SELECT system.id FROM system LEFT JOIN network ON (system.id = network.system_id AND network.current = 'y') WHERE network.mac = ? AND system.status != 'deleted' LIMIT 1";
                    $sql = $this->clean_sql($sql);
                }
                $data = array("{$mac}");
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if ( ! empty($row->id)) {
                    $details->id = $row->id;
                    $log->system_id = $details->id;
                    $message = new stdClass();
                    $message->message = 'HIT on Mac Address (network table all).';
                    $message->command_status = 'success';
                    $message->command_output = 'MAC: ' . $mac . ', SystemID: ' . $details->id;
                    $log_message[] = $message;
                    foreach ($log_message as $message) {
                        $log->message = $message->message;
                        $log->command_status = $message->command_status;
                        $log->command_output = $message->command_output;
                        if ( ! empty($log->discovery_id)) {
                            discovery_log($log);
                        }
                    }
                    $message->command_output = '';
                    return $details->id;
                }
                $message = new stdClass();
                $message->message = 'MISS on Mac Address (network table) all.';
                if (strtolower($match->match_mac_vmware) === 'n') {
                    if (strpos($mac, '00:0c:29:') === 0 OR strpos($mac, '00:50:56:') === 0 OR strpos($mac, '00:05:69:') === 0 OR strpos($mac, '00:1c:14:') === 0) {
                        $message->message = 'MISS on Mac Address, VMware specified not match (network table) all.';
                    }
                }
                $message->command_status = 'notice';
                $message->command_output = 'MAC: ' . $mac;
                $log_message[] = $message;
            }
        } else {
            if (strtolower($match->match_mac) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table) all, matching rule set to: ' . $match->match_mac .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table) all, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->mac_address)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table) all, mac_address not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_mac (network table) all.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }


        if (strtolower($match->match_mac) === 'y' && empty($details->id) && ! empty($details->mac_addresses)) {
            // check all MAC addresses - this caters for an actual audit script result
            foreach ($details->mac_addresses as $mac) {
                if ( ! empty($mac) && (string)$mac !== '00:00:00:00:00:00') {
                    // check the ip table
                    if (strtolower($match->match_mac_vmware) === 'n') {
                        $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND LOWER(ip.mac) NOT LIKE '00:0c:29:%' AND ip.mac NOT LIKE '00:50:56:%' AND ip.mac NOT LIKE '00:05:69:%' AND LOWER(ip.mac) NOT LIKE '00:1c:14:%' AND system.status != 'deleted' LIMIT 1";
                            $sql = $this->clean_sql($sql);
                    } else {
                        $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.mac = ? AND system.status != 'deleted' LIMIT 1";
                        $sql = $this->clean_sql($sql);
                    }
                    $data = array("{$mac}");
                    $query = $this->db->query($sql, $data);
                    $row = $query->row();
                    if ( ! empty($row->id)) {
                        $details->id = $row->id;
                        $log->system_id = $details->id;
                        $message = new stdClass();
                        $message->message = 'HIT on Mac Address (addresses).';
                        $message->command_status = 'success';
                        $message->command_output = "MAC: {$mac} , SystemID: {$details->id}";
                        $log_message[] = $message;
                        foreach ($log_message as $message) {
                            $log->message = $message->message;
                            $log->command_status = $message->command_status;
                            $log->command_output = $message->command_output;
                            if ( ! empty($log->discovery_id)) {
                                discovery_log($log);
                            }
                        }
                        $message->command_output = '';
                        return $details->id;
                    }
                }
                $message = new stdClass();
                $message->message = 'MISS on Mac Address (addresses).';
                if (strtolower($match->match_mac_vmware) === 'n') {
                    if (strpos($mac, '00:0c:29:') === 0 OR strpos($mac, '00:50:56:') === 0 OR strpos($mac, '00:05:69:') === 0 OR strpos($mac, '00:1c:14:') === 0) {
                        $message->message = 'MISS on Mac Address, VMware specified not match (ip) all.';
                    }
                }
                $message->command_status = 'notice';
                $message->command_output = "MAC: {$mac} , SystemID: {$details->id}";
                $log_message[] = $message;
            }
        } else {
            if (strtolower($match->match_mac) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip) all, matching rule set to: ' . $match->match_mac .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip) all, device id already set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->mac_addresses)) {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip) all, mac_addresses not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_mac (ip) all.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        // check IP Address in system, then ip tables
        if (strtolower($match->match_ip) === 'y' && empty($details->id) && ! empty($details->ip) && filter_var($details->ip, FILTER_VALIDATE_IP)) {
            // first check the ip table as eny existing devices that have been seen
            // by more than just Nmap will have an entry here
            $sql = "SELECT system.id FROM system LEFT JOIN ip ON (system.id = ip.system_id AND ip.current = 'y') WHERE ip.ip = ? AND ip.ip NOT LIKE '127%' AND ip.ip NOT LIKE '1::%' AND system.status != 'deleted' LIMIT 1";
            $sql = $this->clean_sql($sql);
            $data = array(ip_address_to_db($details->ip));
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                if ( ! empty($details->system_id)) {
                    $log->system_id = $details->id;
                } else if ( ! empty($details->id)) {
                    $log->system_id = $details->id;
                }
                $message = new stdClass();
                $message->message = 'HIT on IP Address (network table).';
                $message->command_status = 'success';
                $message->command_output = 'IP: ' . $details->ip . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }

            // next check the system table for a ip match
            if (empty($details->id)) {
                $sql = "SELECT system.id FROM system WHERE system.ip = ? AND system.ip NOT LIKE '127%' AND system.ip NOT LIKE '1::%' AND system.status != 'deleted'";
                $sql = $this->clean_sql($sql);
                $data = array(ip_address_to_db($details->ip));
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if ( ! empty($row->id)) {
                    $details->id = $row->id;
                    $log->system_id = $details->id;
                    $message = new stdClass();
                    $message->message = 'HIT on IP Address (system table).';
                    $message->command_status = 'success';
                    $message->command_output = 'IP: ' . $details->ip . ', SystemID: ' . $details->id;
                    $log_message[] = $message;
                    foreach ($log_message as $message) {
                        $log->message = $message->message;
                        $log->command_status = $message->command_status;
                        $log->command_output = $message->command_output;
                        if ( ! empty($log->discovery_id)) {
                            discovery_log($log);
                        }
                    }
                    $message->command_output = '';
                    return $details->id;
                }
            }
            $message = new stdClass();
            $message->message = 'MISS on IP Address.';
            $message->command_status = 'notice';
            $message->command_output = 'IP: ' . $details->ip;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_ip) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_ip, matching rule set to: ' . $match->match_ip .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
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

        if (strtolower($match->match_hostname) === 'y' && empty($details->id) && ! empty($details->hostname)) {
            $sql = "SELECT system.id FROM system WHERE (system.hostname = ?) AND system.status != 'deleted'";
            $sql = $this->clean_sql($sql);
            $data = array($details->hostname);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            if ( ! empty($row->id)) {
                $details->id = $row->id;
                $log->system_id = $details->id;
                $message = new stdClass();
                $message->message = 'HIT on hostname.';
                $message->command_status = 'success';
                $message->command_output = 'Hostname: ' . $details->hostname . ', SystemID: ' . $details->id;
                $log_message[] = $message;
                foreach ($log_message as $message) {
                    $log->message = $message->message;
                    $log->command_status = $message->command_status;
                    $log->command_output = $message->command_output;
                    if ( ! empty($log->discovery_id)) {
                        discovery_log($log);
                    }
                }
                $message->command_output = '';
                return $details->id;
            }

            // check short hostname in $details
            if ( ! empty($details->hostname) && empty($details->id)) {
                if (isset($details->hostname_length) && $details->hostname_length === 'short') {
                    // we grabbed the hostname from SNMP.
                    // SNMP hostnames on Windows are truncated to 15 characters
                    $temp = explode('.', $details->hostname);
                    $hostname = $temp[0];
                    if (strlen($hostname) === 15) {
                        // We do have a 15 character hostname - check if this exists in the DB
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
                            $message->command_output = 'Hostname: ' . $hostname . ', SystemID: ' . $details->id;
                            $log_message[] = $message;
                            foreach ($log_message as $message) {
                                $log->message = $message->message;
                                $log->command_status = $message->command_status;
                                $log->command_output = $message->command_output;
                                if ( ! empty($log->discovery_id)) {
                                    discovery_log($log);
                                }
                            }
                            $message->command_output = '';
                            return $details->id;
                        }
                    }
                    unset($temp);
                }
            }
            $message = new stdClass();
            $message->message = 'MISS on hostname.';
            $message->command_status = 'notice';
            $message->command_output = 'Hostname: ' . $details->hostname;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_hostname) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_hostname, matching rule set to: ' . $match->match_hostname .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
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

        // check IP Address in system table for a device with no other data
        if ((empty($match->match_ip_no_data) OR strtolower($match->match_ip_no_data) === 'y') && empty($details->id) && ! empty($details->ip) && filter_var($details->ip, FILTER_VALIDATE_IP)) {
            // Check the system table for an ip match on a device without a type or serial
            if (empty($details->id)) {
                $sql = "SELECT system.id FROM system WHERE system.ip = ? AND system.ip NOT LIKE '127%' AND system.ip NOT LIKE '1::%' AND system.status != 'deleted' and (system.type = 'unknown' or system.type = 'unclassified') and system.serial = ''";
                $sql = $this->clean_sql($sql);
                $data = array(ip_address_to_db($details->ip));
                $query = $this->db->query($sql, $data);
                $row = $query->row();
                if ( ! empty($row->id)) {
                    $details->id = $row->id;
                    $log->system_id = $details->id;
                    $message = new stdClass();
                    $message->message = 'HIT on IP Address No Data (system table).';
                    $message->command_status = 'success';
                    $message->command_output = 'IP: ' . $details->ip . ', SystemID: ' . $details->id;
                    $log_message[] = $message;
                    foreach ($log_message as $message) {
                        $log->message = $message->message;
                        $log->command_status = $message->command_status;
                        $log->command_output = $message->command_output;
                        if ( ! empty($log->discovery_id)) {
                            discovery_log($log);
                        }
                    }
                    $message->command_output = '';
                    return $details->id;
                }
            }
            $message = new stdClass();
            $message->message = 'MISS on IP Address No Data.';
            $message->command_status = 'notice';
            $message->command_output = 'IP: ' . $details->ip;
            $log_message[] = $message;
        } else {
            if (strtolower($match->match_ip) !== 'y') {
                $message = new stdClass();
                $message->message = 'Not running match_ip_no_data, matching rule set to: ' . $match->match_ip .  '.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if ( ! empty($details->id)) {
                $message = new stdClass();
                $message->message = 'Not running match_ip_no_data, device id already set';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else if (empty($details->ip)) {
                $message = new stdClass();
                $message->message = 'Not running match_ip_no_data, ip not set.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            } else  {
                $message = new stdClass();
                $message->message = 'Not running match_ip_no_data.';
                $message->command_status = 'notice';
                $message->command_output = '';
                $log_message[] = $message;
            }
        }

        $temp = @(string)$details->id;
        if (is_null($temp) OR $temp === '') {
            $message = new stdClass();
            $message->message = 'Could not find any matching attributes for the device with IP '  . ip_address_from_db($details->ip);
            $message->command_status = 'notice';
            $message->command_output = '';
            $log_message[] = $message;
            foreach ($log_message as $message) {
                $log->message = $message->message;
                $log->command_status = $message->command_status;
                $log->command_output = $message->command_output;
                if ( ! empty($log->discovery_id)) {
                    discovery_log($log);
                }
            }
        } else {
            $message = new stdClass();
            $message->message = 'Returning system.id for device with IP '  . ip_address_from_db($details->ip) . ' (' . $details->id . ')';
            $message->command_status = 'notice';
            $message->command_output = '';
            $log_message[] = $message;
            foreach ($log_message as $message) {
                $log->message = $message->message;
                $log->command_status = $message->command_status;
                $log->command_output = $message->command_output;
                if ( ! empty($log->discovery_id)) {
                    discovery_log($log);
                }
            }
        }
        unset($log);
        $message->command_output = '';
        return intval($details->id);
    }

    /**
     * Insert a NEW system. We insert whatever we have from the $details object and whatever additional data based on what we can derive.
     * @param  [type] $details [description]
     * @return [type]          [description]
     */
    public function insert($details)
    {

        // this is an insert - we do NOT want a system.id
        unset($details->id);

        $this->load->model('m_devices');
        $this->load->helper('audit');
        $this->load->helper('log');

        $log = new stdClass();
        $log->severity = 7;
        $log->pid = getmypid();
        $log->ip = $_SERVER['REMOTE_ADDR'];
        if ( ! empty($details->ip)) {
            $log->ip = ip_address_from_db($details->ip);
        } else {
            $details->ip = '';
        }
        $log->function = 'insert';
        $log->system_id = '';
        $log->file = 'm_device';
        $log->message = 'System insert start for '.ip_address_from_db($details->ip);
        $log->command = '';
        $log->command_status = 'notice';
        $log->command_time_to_execute = '';
        $log->command_output = '';
        if ( ! empty($GLOBALS['discovery_id'])) {
            $log->discovery_id = $GLOBALS['discovery_id'];
        } else if ( ! empty($details->discovery_id)) {
            $log->discovery_id = $details->discovery_id;
            $GLOBALS['discovery_id'] = $details->discovery_id;
        } else {
            $log->discovery_id = '';
        }
        discovery_log($log);
        $log->message = '';

        $parameters = new stdClass();
        $parameters->discovery_id = @$details->discovery_id;
        $parameters->ip = @$details->ip;
        $parameters->input = $details;
        $details = audit_format_system($parameters);


        if (empty($details->name)) {
            if ( ! empty($details->hostname)) {
                $details->name = strtolower($details->hostname);
                if ( ! empty($log->discovery_id)) {
                    $log->message = 'Set name based on hostname.';
                    discovery_log($log);
                }
            } else if ( ! empty($details->sysName)) {
                $details->name = strtolower($details->sysName);
                if ( ! empty($log->discovery_id)) {
                    $log->message = 'Set name based on sysName.';
                    discovery_log($log);
                }
            } else if ( ! empty($details->dns_hostname)) {
                $details->name = strtolower($details->dns_hostname);
                if ( ! empty($log->discovery_id)) {
                    $log->message = 'Set name based on dns_hostname.';
                    discovery_log($log);
                }
            } else if ( ! empty($details->ip)) {
                $details->name = ip_address_from_db($details->ip);
                if ( ! empty($log->discovery_id)) {
                    $log->message = 'Set name based on ip.';
                    discovery_log($log);
                }
            } else {
                $details->name = '';
                if ( ! empty($log->discovery_id)) {
                    $log->message = 'No attributes available to set name.';
                    discovery_log($log);
                }
            }
        }

        if (empty($details->status)) {
            $details->status = 'production';
        }
        if (empty($details->type)) {
            $details->type = 'unknown';
        }
        if (empty($details->org_id)) {
            $details->org_id = 1;
        }
        if (empty($details->location_id)) {
            $details->location_id = 1;
        }
        if (empty($details->first_seen)) {
            $details->first_seen = $this->config->config['timestamp'];
        }

        // Remove any empty fields to satisfy STRICT MODE, particularly TEXT fields
        foreach ($details as $key => $value) {
            if (empty($value)) {
                unset($details->{$key});
            }
        }

        $columns = $this->db->list_fields('system');

        $keys = '';
        $values = '';
        $data = array();
        foreach ($details as $key => $value) {
            if ($key > '') {
                // need to iterate through available columns and only insert where $key == valid column name
                foreach ($columns as $column) {
                    if ($key === $column) {
                        $keys .= $key . ', ';
                        $values .= '?, ';
                        $data[] = (string)$value;
                    }
                }
            }
        }

        $keys = mb_substr($keys, 0, mb_strlen($keys)-2);
        $values = mb_substr($values, 0, mb_strlen($values)-2);
        $sql = 'INSERT INTO system (' . $keys . ') VALUES (' . $values . ')';
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql, $data);
        $details->id = intval($this->db->insert_id());
        $log->system_id = intval($details->id);

        $weight = intval($this->m_devices->weight($details->last_seen_by));
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'last_seen_by', 'first_seen', 'instance_options', 'credentials', 'discovery_id');
        foreach ($columns as $column) {
            if ( ! empty($details->{$column}) && ! in_array($column, $disallowed_fields)) {
                $edit_sql = "INSERT INTO edit_log VALUES (NULL, 0, ?, 'Data was changed', ?, ?, 'system', ?, ?, ?, '')";
                $edit_data = array(intval($details->id), (string)$details->last_seen_by, intval($weight), (string)$column, (string)$details->last_seen, (string)$details->{$column});
                $query = $this->db->query($edit_sql, $edit_data);
            }
        }

        // update the device icon
        $this->m_devices->reset_icons($details->id);

        // insert a subnet so we have a default
        if ( ! isset($details->subnet) OR $details->subnet === '') {
            $details->subnet = '';
        }

        // insert the network card details if we have them
        // This is only required for manual uploading of devices (via web form or via CSV)
        //   Discoveries and audits already have IP items populated
        // TODO - Can we move this into another function and only run if we're manually inserting devices?
        if ( ! empty($details->last_seen_by) && ($details->last_seen_by === 'web form' OR $details->last_seen_by === 'user')) {
            if ( ! empty($details->mac_address) && ! empty($details->ip) && ! empty($details->subnet)) {
                $sql = "INSERT INTO ip (id, system_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES (NULL, ?, 'y', ?, ?, ?, '', ?, ?, '4', '', '')";
                $sql = $this->clean_sql($sql);
                $data = array("{$details->id}", "{$details->timestamp}", "{$details->timestamp}", "{$details->mac_address}", "{$details->ip}", "{$details->subnet}");
                $query = $this->db->query($sql, $data);
            }
        }

        // check if we have a matching entry in the vm table and update it if required
        if ( ! empty($details->uuid) && ! empty($details->vm_uuid)) {
            $sql = "SELECT vm.id AS `vm.id`, vm.system_id AS `vm.system_id`, system.hostname AS `system.hostname` FROM vm, system WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.uuid != '' AND vm.current = 'y' AND vm.system_id = system.id";
            $sql = $this->clean_sql($sql);
            $data = array("{$details->uuid}", "{$details->vm_uuid}");
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
                $sql = 'UPDATE vm SET guest_system_id = ?, icon = ?, name = ? WHERE id = ?';
                $sql = $this->clean_sql($sql);
                $name = $details->name;
                if (empty($details->name)) {
                    $name = $details->hostname;
                }
                if (empty($details->name)) {
                    $name = $details->dns_hostname;
                }
                $data = array($details->id, "{$details->icon}", "{$name}", "{$temp_vm_id}");
                $query = $this->db->query($sql, $data);
                $sql = 'UPDATE system SET vm_system_id = ?, vm_server_name = ? WHERE id = ?';
                $sql = $this->clean_sql($sql);
                $data = array($details->vm_system_id, $details->vm_server_name, $details->id);
                $query = $this->db->query($sql, $data);
            }
        }

        // insert an entry into the change log
        $this->load->model('m_change_log');
        $this->m_change_log->create($details->id, 'system', $details->id, 'create', 'Item added to system', $details->last_seen);

        if (empty($details->org_id)) {
            $sql = 'SELECT org_id FROM system WHERE system.id = ?';
            $sql = $this->clean_sql($sql);
            $data = array($details->id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->org_id = $row->org_id;
        }

        // add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), 'system_create', " . intval($details->org_id) . ', 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1';
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        // add a count to our chart table
        $sql = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '" . $details->last_seen_by . "', " . intval($details->org_id) . ', 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1';
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);


        if( ! isset($details->ip) OR empty($details->ip)){
            $details->ip = 'N/A';
        }

        $log->ip = ip_address_from_db($details->ip);
        $log->message = 'System insert end for '.ip_address_from_db($details->ip);
        $log->command_status = 'notice';
        discovery_log($log);

        return $details->id;
    }

    /**
     * Update an existing device
     * @param  [type] $details [description]
     * @return [type]          [description]
     */
    public function update($details)
    {
        $this->load->model('m_devices');

        $log = new stdClass();
        $log->severity = 7;
        $log->file = 'm_device';
        $log->function = 'm_device::update';
        $log->status = 'notice';
        $log->command_status = 'notice';
        $log->summary = 'start function';

        if (empty($details)) {
            $log->severity = 4;
            $log->message = 'm_device::update called, but no $details object supplied.';
            stdlog($log);
        }

        if (empty($details->id)) {
            // this is an update - we need a system.id
            $log->severity = 4;
            $log->message = 'm_device::update called, but no $details->id supplied.';
            stdlog($log);
            return;
        }

        if ( ! empty($details->ip)) {
            $details->ip = @ip_address_from_db($details->ip);
            $log->ip = @ip_address_from_db($details->ip);
        } else {
            $details->ip = '';
            $log->ip = '';
        }

        if ( ! empty($details->discovery_id)) {
            $log->discovery_id = $details->discovery_id;
            $GLOBALS['discovery_id'] = $details->discovery_id;
        } else if ( ! empty($GLOBALS['discovery_id'])) {
            $log->discovery_id = $GLOBALS['discovery_id'];
        } else {
            $log->discovery_id = '';
        }

        if (empty($details->name)) {
            if ( ! empty($details->hostname)) {
                $details->name = strtolower($details->hostname);
            } else if ( ! empty($details->sysName)) {
                $details->name = strtolower($details->sysName);
            } else if ( ! empty($details->dns_hostname)) {
                $details->name = strtolower($details->dns_hostname);
            } else if ( ! empty($details->ip)) {
                $details->name = ip_address_from_db($details->ip);
            } else {
                $details->name = '';
            }
        }

        $log->message = "System update start for {$details->ip}";

        if ( ! empty($log->discovery_id)) {
            discovery_log($log);
        } else {
            stdlog($log);
        }

        $parameters = new stdClass();
        $parameters->input = $details;
        if ( ! empty($details->discovery_id)) {
            $parameters->discovery_id = intval($details->discovery_id);
        } else {
            $parameters->log = $log;
        }
        $parameters->ip = @$details->ip;

        $details = audit_format_system($parameters);

        if (empty($details->id)) {
            // Something went wrong - we SHOULD have an ID in an update routine
            // Possibly removed via audit_format_system (if the supplied ID belonged to a device with status == deleted)
            $log->message = 'Something went wrong. The update device function was not supplied with a device ID.';
            $log->severity = 4;
            $log->status = 'fail';
            if ( ! empty($log->discovery_id)) {
                discovery_log($log);
            } else {
                stdlog($log);
            }
            return;
        }

        if (empty($details->discovery_id)) {
            unset($details->discovery_id);
        }

        // we check a few items when we are submitting an audit script result
        // if they are blank (previously submitted info is incomplete) we over write them
        $sql = '/* m_device::update */ ' . 'SELECT * FROM system WHERE id = ? LIMIT 1';
        $sql = $this->clean_sql($sql);
        $data = array($details->id);
        $query = $this->db->query($sql, $data);
        $db_entry = $query->row();

        if (isset($details->last_seen_by) && ($details->last_seen_by === 'audit' OR $details->last_seen_by === 'snmp' OR $details->last_seen_by === 'ipmi')) {
            if ( ! empty($db_entry)) {
                if (strlen($db_entry->hostname) > 15 && isset($details->hostname) && strlen($details->hostname) === 15) {
                    unset($details->hostname);
                }
            } // end of row count > 0
        }

        $details->original_last_seen_by = $db_entry->last_seen_by;
        $details->original_last_seen = $db_entry->last_seen;
        $details->original_timestamp = $db_entry->last_seen;
        if (empty($details->timestamp)) {
            $details->timestamp = $details->last_seen;
        }

        $sql = '/* m_device::update */ ' . "SELECT weight, db_column, MAX(timestamp) as `timestamp`, value, previous_value, source FROM edit_log WHERE system_id = ? AND `db_table` = 'system' GROUP BY db_column, weight, value, previous_value, source ORDER BY id";
        $sql = $this->clean_sql($sql);
        $data = array($details->id);
        $query = $this->db->query($sql, $data);
        $edit_log = $query->result();
        $fields = $this->db->list_fields('system');
        $disallowed_fields = array('id', 'icon', 'sysUpTime', 'uptime', 'last_seen', 'last_seen_by', 'first_seen', 'instance_options', 'credentials', 'discovery_id');
        $update_device = array();

        foreach ($details as $key => $value) {
            if (($key !== '') && ($value !== '')) {
                // need to iterate through available columns and only insert where $key == valid column name
                if ( ! in_array($key, $disallowed_fields) && in_array($key, $fields)) {
                    $previous_value = $db_entry->{$key};
                    // get the current weight from the edit_log
                    $previous_weight = 10000;
                    for ($i=0; $i < count($edit_log); $i++) {
                        if ($edit_log[$i]->db_column === $key) {
                            $previous_weight = intval($edit_log[$i]->weight);
                        }
                    }
                    // calculate the weight
                    $weight = intval($this->m_devices->weight($details->last_seen_by));
                    if ($weight <= $previous_weight && (string)$value !== (string)$previous_value) {
                        $update = new stdClass();
                        $update->key = $key;
                        $update->value = $value;
                        $update_device[] = $update;
                        $sql = '/* m_device::update */ ' . "INSERT INTO edit_log VALUES (NULL, ?, ?, 'Data was changed', ?, ?, 'system', ?, ?, ?, ?)";
                        $sql = $this->clean_sql($sql);
                        $data = array(0, intval($details->id), (string)$details->last_seen_by, intval($weight), (string)$key, (string)$details->timestamp, (string)$value, (string)$previous_value);
                        $query = $this->db->query($sql, $data);
                    } else {
                        // We have an existing edit_log entry with a more important change - don't touch the `system`.`$key` value
                    }
                }
            }
        }

        foreach ($details as $key => $value) {
            if ($key !== 'id' && in_array($key, $disallowed_fields)) {
                $update = new stdClass();
                $update->key = $key;
                $update->value = (string)$value;
                $update_device[] = $update;
            }
        }

        $sql = '';
        $data = array();
        if (count($update_device) > 0) {
            $sql = '/* m_device::update */ ' . 'UPDATE `system` SET ';
            foreach ($update_device as $field) {
                $sql .= '`' . $field->key . '` = ?, ';
                $data[] = (string)$field->value;
            }
            $sql = substr($sql, 0, strlen($sql)-2);
            $sql .= ' WHERE `id` = ?';
            $data[] = intval($details->id);
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql, $data);
        }

        // finally, update the device icon
        $this->m_devices->reset_icons($details->id);

        if (isset($details->mac_address) && $details->mac_address !== '' && isset($details->ip) && $details->ip !== '' && isset($details->subnet) && $details->subnet !== '') {
            // we need to check if we have an entry in `network` if we do not, but we have details (ex- an nmap device that previously existed but did not have a MAC, but now does)
            // we need to insert it. ideally this would have already been done when the device was initially discovered, but we cannot count on that.
            // need to check if an entry in `network` exists and if it does not AND we have details, insert something search for any entries in `ip`
            $sql = '/* m_device::update */ ' . "SELECT * FROM ip WHERE system_id = ? AND mac = ? AND current = 'y' AND ip = ?";
            $sql = $this->clean_sql($sql);
            $data = array(intval($details->id), "{$details->mac_address}", "{$details->ip}");
            $query = $this->db->query($sql, $data);
            $result = $query->result();
            if (count($result) === 0) {
                // no match - insert
                $sql = '/* m_device::update */ ' . "INSERT INTO ip (id, system_id, current, first_seen, last_seen, mac, net_index, ip, netmask, version, network, set_by) VALUES(NULL, ?, 'y', ?, ?, ?, '', ?, ?, '', '', '')";
                $sql = $this->clean_sql($sql);
                $data = array(intval($details->id), "{$details->timestamp}", "{$details->timestamp}", "{$details->mac_address}", "{$details->ip}", "{$details->subnet}");
                $query = $this->db->query($sql, $data);
            } else {
                // match - update timestamp only
                $sql = '/* m_device::update */ ' . "UPDATE ip SET last_seen = ? WHERE system_id = ? AND mac = ? AND current = 'y' AND ip = ?";
                $sql = $this->clean_sql($sql);
                $data = array("{$details->timestamp}", intval($details->id), "{$details->mac_address}", "{$details->ip}");
                $query = $this->db->query($sql, $data);
            }
        }

        // check if we have a matching entry in the vm table and update it if required
        $sql = '/* m_device::update */ ' . "SELECT vm.id AS `vm.id`, vm.system_id AS `vm.system_id`, system.hostname AS `system.hostname` FROM vm, system WHERE (LOWER(vm.uuid) = LOWER(?) OR LOWER(vm.uuid) = LOWER(?)) AND vm.uuid != '' AND vm.current = 'y' AND vm.system_id = system.id;";
        $sql = $this->clean_sql($sql);
        $data = array("{$details->uuid}", "{$details->vm_uuid}");
        $query = $this->db->query($sql, $data);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $temp_vm_id = $row->{'vm.id'};
            $details->vm_system_id = $row->{'vm.system_id'};
            $details->vm_server_name = $row->{'system.hostname'};
            $sql = '/* m_device::update */ ' . "SELECT icon, 'vm' FROM system WHERE system.id = ?";
            $sql = $this->clean_sql($sql);
            $data = array($details->id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->icon = $row->icon;
            $sql = '/* m_device::update */ ' . 'UPDATE vm SET guest_system_id = ?, icon = ?, name = ? WHERE id = ?';
            $sql = $this->clean_sql($sql);
            $name = $details->name;
            if (empty($details->name)) {
                $name = $details->hostname;
            }
            if (empty($details->name)) {
                $name = $details->dns_hostname;
            }
            $data = array(intval($details->id), "{$details->icon}", "{$name}", intval($temp_vm_id));
            $query = $this->db->query($sql, $data);
            $sql = '/* m_device::update */ ' . 'UPDATE system SET vm_system_id = ?, vm_server_name = ? WHERE id = ?';
            $sql = $this->clean_sql($sql);
            $data = array($details->vm_system_id, $details->vm_server_name, $details->id);
            $query = $this->db->query($sql, $data);
        }

        if (empty($details->org_id)) {
            $sql = '/* m_device::update */ ' . 'SELECT org_id FROM system WHERE id = ?';
            $sql = $this->clean_sql($sql);
            $data = array($details->id);
            $query = $this->db->query($sql, $data);
            $row = $query->row();
            $details->org_id = $row->org_id;
        }
        // add a count to our chart table
        $sql = '/* m_device::update */ ' . "INSERT INTO chart (`when`, `what`, `org_id`, `count`) VALUES (DATE(NOW()), '{$details->last_seen_by}', {$details->org_id}, 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);

        $log->message = 'System update end for '.@ip_address_from_db($details->ip);
        $log->summary = 'finish function';
        if ( ! empty($log->discovery_id)) {
            discovery_log($log);
        } else {
            stdlog($log);
        }
        unset($log);
        return;
    }

    /**
     * Set the identification of a device
     * @param [type] $id [description]
     */
    public function set_identification($id = '')
    {
        if (empty($id) OR ! is_numeric($id)) {
            return false;
        }
        $identification = '';
        $sql = 'SELECT * FROM `system` WHERE `id` = ?';
        $sql = $this->clean_sql($sql);
        $data = array(intval($id));
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ( ! empty($result)) {
            $device = $result[0];
        } else {
            return false;
        }
        // Based on type
        if ($device->type !== 'unknown' && $device->type !== 'unclassified') {
            if ($device->type === 'computer' && $device->class !== '') {
                $identification = ucfirst($device->class);
            } else if ($device->type === 'computer' && $device->os_group !== '') {
                $identification = 'Computer running ' . $device->os_group;
            } else {
                if ($device->type !== 'iphone' && $device->type !== 'ipod' && $device->type !== 'ipad') {
                    $identification = ucfirst($device->type);
                } else {
                    $identification = $device->type;
                }
            }
        }
        // Add the manufactuer
        if ($device->manufacturer !== '') {
            if ($identification !== '') {
                $identification .= ' from ' . $device->manufacturer;
            } else {
                $identification = 'Vendor: ' . $device->manufacturer;
            }
        }
        // Only resort to the Nmap ports if we have to
        if ($identification === '') {
            $sql = "SELECT * FROM nmap WHERE system_id = ? and current = 'y'";
            $sql = $this->clean_sql($sql);
            $data = array(intval($id));
            $query = $this->db->query($sql, $data);
            $nmap_ports = $query->result();
            if ( ! empty($nmap_ports)) {
                foreach ($nmap_ports as $port) {
                    if ($port->program === 'ssh') {
                        $identification = 'Device running SSH';
                    }
                    if ($port->program === 'snmp') {
                        if ($identification === '') {
                            $identification = 'Device running SNMP';
                        } else {
                            $identification .= ' and SNMP';
                        }
                    }
                    if ($port->program === 'msrpc') {
                        if ($identification === '') {
                            $identification = 'Device running WMI (likely a Windows computer)';
                        } else {
                            $identification .= ' and WMI (likely a Windows computer)';
                        }
                    }
                }
            }
        }
        if ( ! empty($identification)) {
            if (empty($device->type) OR $device->type === 'unknown') {
                $sql = "UPDATE `system` SET `type` = 'unclassified', `icon` = 'unclassified', `identification` = ? WHERE `id` = ?";
                $sql = $this->clean_sql($sql);
            } else {
                $sql = "UPDATE `system` SET `identification` = ? WHERE `id` = ?";
                $sql = $this->clean_sql($sql);
            }
        } else {
            $identification = 'No information could be retrieved.';
            $sql = "UPDATE `system` SET `identification` = ? WHERE `id` = ?";
            $sql = $this->clean_sql($sql);
        }
        $data = array($identification, intval($id));
        $query = $this->db->query($sql, $data);
        return true;
    }
}
// End of file m_device.php
// Location: ./models/m_device.php
