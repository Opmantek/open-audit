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

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/**
 * Base Object Cli.
 *
 * @access   public
 *
 * @category Object
 *
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 *
 * @link     http://www.open-audit.org
 *
 * @return   Admin
 */
class cli extends CI_Controller
{
    /**
     * Constructor.
     *
     * @access    public
     *
     * @category  Constructor
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return Admin
     */
    public function __construct()
    {
        parent::__construct();
        // must be called from the CLI to access this page
        $this->load->helper('log');
        $log_details = new stdClass();
        stdlog($log_details);
        $log_details->file = 'system';

        if (! $this->input->is_cli_request()) {
            exit();
        }

        $this->load->helper('report_helper');
        check_default_reports();
        $this->load->helper('group_helper');
        check_default_groups();
    }

    /**
     * Index.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function index()
    {
        exit();
    }

    /**
     * Import all nodes from NMIS.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function import_nmis()
    {
        $nodes_file = str_replace('/cli/import_nmis/', '', $this->uri->uri_string());
        // $nodes_file = $_POST['nodes_file'];

        $this->load->helper('log');
        $log_details = new stdClass();
        $log_details->severity = 6;
        $log_details->message = 'NMIS import, importing nodes from '.$nodes_file;
        stdlog($log_details);

        $this->load->helper('network');
        $this->load->helper('snmp_oid');
        $this->load->helper('snmp');
        $this->load->library('encrypt');
        $this->load->model('m_system');
        $this->load->model('m_oa_group');
        $this->load->model('m_devices_components');
        $file_handle = fopen($nodes_file, 'r');
        $string = fread($file_handle, filesize($nodes_file));
        $string = str_replace(PHP_EOL, ' ', $string);
        $string = str_replace("\r\n", ' ', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace(chr(13), ' ', $string);
        $string = str_replace('%hash = (', '{', $string);
        $string = str_replace(');', '}', $string);
        $string = str_replace('=>', ':', $string);
        $string = str_replace("'undef'", "''", $string);
        $string = str_replace('undef', "''", $string);
        $string = str_replace("'", '"', $string);
        $conf = json_decode($string, true);
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                // no errors
                break;
            case JSON_ERROR_DEPTH:
                echo "Error importing Nmis.nodes file<br />\n";
                echo 'JSON_ERROR_DEPTH - Maximum stack depth exceeded<br />';
                exit();
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo "Error importing Nmis.nodes file<br />\n";
                echo 'JSON_ERROR_STATE_MISMATCH - Underflow or the modes mismatch<br />';
                exit();
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo "Error importing Nmis.nodes file<br />\n";
                echo 'JSON_ERROR_CTRL_CHAR - Unexpected control character found<br />';
                exit();
                break;
            case JSON_ERROR_SYNTAX:
                echo "Error importing Nmis.nodes file<br />\n";
                echo 'JSON_ERROR_SYNTAX - Syntax error, malformed JSON<br />';
                print_r($string);
                exit();
                break;
            case JSON_ERROR_UTF8:
                echo "Error importing Nmis.nodes file<br />\n";
                echo 'JSON_ERROR_UTF8 - Malformed UTF-8 characters, possibly incorrectly encoded<br />';
                exit();
                break;
            default:
                echo "Error importing Nmis.nodes file<br />\n";
                echo 'Unknown error<br />';
                exit();
                break;
        }

        foreach ($conf as $device) {
            $device = (object) $device;
            $device->man_ip_address = '';
            $device->hostname = '';
            $device->fqdn = '';
            $device->domain = '';

            if ((string) $device->collect == 'true') {
                // only import where collect == true

                $device->hostname = $device->host;
                $device->man_ip_address = $device->host;
                $device->fqdn = $device->host;
                $device = dns_validate($device);


                // if ((string) $device->host !== '127.0.0.1') {
                //     if (filter_var($device->host, FILTER_VALIDATE_IP)) {
                //         // we have an ip address as opposed to a name or fqdn
                //         $device->man_ip_address = $device->host;
                //     } else {
                //         // we have a name or fqdn
                //         if (strpos($device->host, '.')) {
                //             // fqdn - explode it
                //             $device->fqdn = $device->host;
                //             $t_array = explode('.', $device->host);
                //             $device->hostname = $t_array[0];
                //             $details->domain = implode(".", $t_array);
                //             unset($t_array);
                //         } else {
                //             // its just a name
                //             $device->hostname = $device->host;
                //         }
                //     }
                //     if ((string) $device->man_ip_address !== '') {
                //         if ($device->hostname == '') {
                //             // lookup the name
                //             $device->hostname = gethostbyaddr($device->man_ip_address);
                //             if (filter_var($device->host, FILTER_VALIDATE_IP)) {
                //                 // we have an ip address returned, use the field 'name' from Nodes.nmis
                //                 $device->hostname = $device->name;
                //             } else {
                //                 if (strpos($device->hostname, '.')) {
                //                     $device->fqdn = $device->hostname;
                //                     $t_array = explode('.', $device->hostname);
                //                     $device->hostname = $t_array[0];
                //                     unset($t_array);
                //                 }
                //             }
                //         }
                //     } else {
                //         // lookup the ip
                //         if ((string) $device->fqdn !== '') {
                //             $device->man_ip_address = gethostbyname($device->fqdn);
                //         } else {
                //             $device->man_ip_address = gethostbyname($device->host);
                //         }
                //     }

                    if ((string) $device->version === 'snmpv2c') {
                        $device->version = '2c';
                    }

                    if (((string) $device->community !== '') and ((string) $device->version === '2c') and ((string) $device->man_ip_address !== '')) {
                        $encode['ip_address'] = $device->man_ip_address;
                        $encode['fqdn'] = $device->fqdn;
                        $encode['hostname'] = $device->hostname;
                        $encode['snmp_version'] = @$device->version;
                        $encode['snmp_community'] = @$device->community;
                        if ($device->version != '2c') {
                            $encode['snmp_v3_sec_name'] = '';
                            $encode['snmp_v3_sec_level'] = '';
                            $encode['snmp_v3_auth_protocol'] = @$device->authprotocol;
                            $encode['snmp_v3_auth_passphrase'] = @$device->authpassword;
                            $encode['snmp_v3_priv_protocol'] = @$device->privprotocol;
                            $encode['snmp_v3_priv_passphrase'] = @$device->privpassword;
                        }
                        $encoded = json_encode($encode);
                        $encoded = $this->encrypt->encode($encoded);
                        $device->snmp_version = $device->version;
                        $device->snmp_community = $device->community;
                        $device->snmp_port = '161';
                        $temp_array = get_snmp($device);
                        $details = $temp_array['details'];
                        foreach ($details as $key => $value) {
                            if ($device->$key == '') {
                                $device->key = $value;
                            }
                        }

                        $network_interfaces = $temp_array['interfaces'];
                        $modules = $temp_array['modules'];
                        $ip = $temp_array['ip'];

                        $device->access_details = $encoded;
                        $device->nmis_group = $device->group;
                        $device->nmis_name = $device->name;
                        $device->nmis_role = $device->roleType;
                    }
                    $device->system_key = '';
                    $device->system_key = $this->m_system->create_system_key($device);
                    $device->system_id = '';
                    $device->system_id = $this->m_system->find_system($device);

                    if ((isset($device->sysObjectID)) and ((string) $device->sysObjectID !== '')) {
                        // we received a result from snmp, use this data to update or insert
                        if (isset($device->system_id) and (string) $device->system_id !== '') {
                            // update an existing device with snmp
                            $device->original_timestamp = $this->m_devices_components->read($device->system_id, 'y', 'system', '', 'timestamp');
                            $device->original_last_seen_by = $this->m_devices_components->read($device->system_id, 'y', 'system', '', 'last_seen_by');
                            $device->last_seen_by = 'snmp nmis import';
                            $this->m_system->update_system($device);
                            $log_details->message = 'NMIS import, update SNMP for '.$device->man_ip_address.' ('.$device->hostname.')';
                            $log_details->severity = 7;
                            stdlog($log_details);
                        } else {
                            // insert a new device
                            $device->last_seen_by = 'snmp nmis import';
                            $device->original_last_seen_by = 'snmp nmis import';
                            $device->system_id = $this->m_system->insert_system($device);
                            $device->original_timestamp = $this->m_devices_components->read($device->system_id, 'y', 'system', '', 'timestamp');
                            $log_details->message = 'NMIS import, insert SNMP for '.$device->man_ip_address.' ('.$device->hostname.')';
                            $log_details->severity = 7;
                            stdlog($log_details);
                        }
                        // update any network interfaces and ip addresses retrieved by SNMP
                        $device->timestamp = $this->m_devices_components->read($device->system_id, 'y', 'system', '', 'timestamp');
                        $device->first_timestamp = $this->m_devices_components->read($device->system_id, 'y', 'system', '', 'first_timestamp');
                        if (isset($network_interfaces) and is_array($network_interfaces) and count($network_interfaces) > 0) {
                            $this->m_devices_components->process_component('network', $details, $xml->network);
                        }
                        if (isset($ip->item) and count($ip->item) > 0) {
                            $this->m_devices_components->process_component('ip', $details, $ip);
                        }
                        // and update all groups
                        $this->m_oa_group->update_system_groups($device);
                    } else {
                        // just use hat we have from the nodes.nmis file
                        if (isset($device->system_id) and (string) $device->system_id !== '') {
                            // update an existing device
                            $device->last_seen_by = 'nmis import';
                            $this->m_system->update_system($device);
                            $log_details->message = 'NMIS import, update basic result for '.$device->man_ip_address.' ('.$device->hostname.')';
                            $log_details->severity = 7;
                            stdlog($log_details);
                        } else {
                            // insert a new device
                            $device->description = 'NMIS Imported, but not seen using SNMP';
                            $device->last_seen_by = 'nmis import';
                            $device->system_id = $this->m_system->insert_system($device);
                            $log_details->message = 'NMIS import, insert basic result for '.$device->man_ip_address.' ('.$device->hostname.')';
                            $log_details->severity = 7;
                            stdlog($log_details);
                        }
                    }
                    if (isset($device->system_id) and (string) $device->system_id !== '') {
                        $this->m_oa_group->update_system_groups($device);
                    }
                }
            }
        }
        $log_details->severity = 6;
        $log_details->message = 'NMIS import, finished importing nodes from '.$nodes_file;
        stdlog($log_details);
    }
}
// End of file cli.php
// Location: ./controllers/cli.php
