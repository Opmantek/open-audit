<?php
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_cli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // must be called from the CLI to access this page
        if (!$this->input->is_cli_request()) {
            exit();
        }
        $this->log_event();
    }

    public function index()
    {
        exit();
    }

    public function php_info()
    {
        echo phpinfo();
    }

    public function import_nmis()
    {
        # have to hack this string because code_igniter doesn't like /'s
        # in the variable passed via cli
        $nodes_file = str_replace("/admin_cli/import_nmis/", "", $this->uri->uri_string());

        $log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis Starting Nodes.nmis import" . PHP_EOL;
        file_put_contents("/usr/local/open-audit/other/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);

        $this->load->helper('snmp_oid');
        $this->load->helper('snmp');
        $this->load->library('encrypt');
        $this->load->model("m_system");
        $this->load->model("m_oa_group");
/*
        # before the actual nodes, import the locations
        $locations_file = str_replace("Nodes.nmis", "Locations.nmis", $nodes_file);
        $file_handle = fopen($locations_file, "r");
        $string = fread($file_handle, filesize($locations_file));
        $string = str_replace(PHP_EOL, " ", $string);
        $string = str_replace("\r\n", " ", $string);
        $string = str_replace("\n", " ", $string);
        $string = str_replace(chr(13), " ", $string);
        $string = str_replace("%hash = (", "{", $string);
        $string = str_replace(");", "}", $string);
        $string = str_replace("=>", ":", $string);
        $string = str_replace("'undef'", "''", $string);
        $string = str_replace("undef", "''", $string);
        $string = str_replace("'", "\"", $string);
        $conf = json_decode($string, TRUE);
        switch (json_last_error()) {
          case JSON_ERROR_NONE:
            # no errors
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

        foreach ($conf as $location) {
            $this->load->model("m_oa_location");
        }
*/

        # read in the Nodes.nmis file
        $log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis - importing nodes from $nodes_file" . PHP_EOL;
        file_put_contents("/usr/local/open-audit/other/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);

        $file_handle = fopen($nodes_file, "r");
        $string = fread($file_handle, filesize($nodes_file));
        $string = str_replace(PHP_EOL, " ", $string);
        $string = str_replace("\r\n", " ", $string);
        $string = str_replace("\n", " ", $string);
        $string = str_replace(chr(13), " ", $string);
        $string = str_replace("%hash = (", "{", $string);
        $string = str_replace(");", "}", $string);
        $string = str_replace("=>", ":", $string);
        $string = str_replace("'undef'", "''", $string);
        $string = str_replace("undef", "''", $string);
        $string = str_replace("'", "\"", $string);
        $conf = json_decode($string, true);
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                # no errors
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
            $device->ip_address = '';
            $device->hostname = '';
            $device->fqdn = '';

            if ($device->host != '127.0.0.1') {

                if (filter_var($device->host, FILTER_VALIDATE_IP)) {
                    # we have an ip address as opposed to a name or fqdn
                    $device->ip_address = $device->host;
                } else {
                    # we have a name or fqdn
                    if (strpos($device->host, ".")) {
                        # fqdn - explode it
                        $device->fqdn = $device->host;
                        $i = explode(".", $device->host);
                        $device->hostname = $i[0];
                    } else {
                        # its just a name
                        $device->hostname = $device->host;
                    }
                }

                if ($device->ip_address > '') {
                    # lookup the name
                    $device->hostname = gethostbyaddr($device->ip_address);
                } else {
                    # lookup the ip
                    if ($device->fqdn > '') {
                        $device->ip_address = gethostbyname($device->fqdn);
                    } else {
                        $device->ip_address = gethostbyname($device->host);
                    }
                }

                $log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device->ip_address . " (" . $device->hostname . ") - scanning" . PHP_EOL;
                file_put_contents("/usr/local/open-audit/other/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);

                if ($device->version == 'snmpv2c') {
                    $device->version = '2c';
                }

                $snmp_details->name = '';
                if (($device->community > '') and ($device->version == '2c') and ($device->ip_address > '')) {
                    $encode['ip_address'] = $device->ip_address;
                    $encode['fqdn'] = $device->fqdn;
                    $encode['hostname'] = $device->hostname;
                    $encode['snmp_version'] = @$device->version;
                    $encode['snmp_community'] = @$device->community;
                    $encode['snmp_v3_sec_name'] = '';
                    $encode['snmp_v3_sec_level'] = '';
                    $encode['snmp_v3_auth_protocol'] = @$device->authprotocol;
                    $encode['snmp_v3_auth_passphrase'] = @$device->authpassword;
                    $encode['snmp_v3_priv_protocol'] = @$device->privprotocol;
                    $encode['snmp_v3_priv_passphrase'] = @$device->privpassword;
                    $encoded = json_encode($encode);
                    $encoded = $this->encrypt->encode($encoded);

                    // $encoded = json_encode($encode);
                    // print_r($encoded);
                    // echo "\n";
                    // $encoded = $this->encrypt->encode($encoded);
                    // echo $encoded . "\n";
                    // $decoded = $this->encrypt->decode($encoded);
                    // echo $decoded . "\n";
                    // $decoded = json_decode($decoded);
                    // print_r($decoded);
                    $device->snmp_version = $device->version;
                    $device->snmp_community = $device->community;
                    $device->snmp_port = '161';

                    $device = get_snmp($device);
                    $device->access_details = $encoded;
                    #$device->nmis_group = $device['group'];
                    #$device->nmis_name = $device['name'];
                    #$device->nmis_role = $device['roleType'];
                    $device->nmis_group = $device->group;
                    $device->nmis_name = $device->name;
                    $device->nmis_role = $device->roleType;
                }
                $device->system_key = '';
                $device->system_key = $this->m_system->create_system_key($device);
                $device->system_id = '';
                $device->system_id = $this->m_system->find_system($device);

                if ((isset($device->oid)) and ($device->oid > '')) {
                    # we received a result from snmp, use this data to update or insert
                    if (isset($device->system_id) and $device->system_id != '') {
                        # update an existing device with snmp
                        $device->last_seen_by = 'snmp nmis import';
                        $this->m_system->update_system($device);
                        $log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device->ip_address . " (" . $device->hostname . ") - update snmp result" . PHP_EOL;
                        file_put_contents("/usr/local/open-audit/other/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);

                    } else {
                        # insert a new device
                        $device->last_seen_by = 'snmp nmis import';
                        $i = $this->m_system->insert_system($device);
                        $device->system_id = $i;
                        $log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device->ip_address . " (" . $device->hostname . ") - insert snmp result" . PHP_EOL;
                        file_put_contents("/usr/local/open-audit/other/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
                    }
                    $this->m_oa_group->update_system_groups($device);
                } else {
                    # just use hat we have from the nodes.nmis file
                    if (isset($device->system_id) and $device->system_id != '') {
                        # update an existing device
                        $device->last_seen_by = 'nmis import';
                        $this->m_system->update_system($device);
                        $log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device->ip_address . " (" . $device->hostname . ") - update basic result" . PHP_EOL;
                        file_put_contents("/usr/local/open-audit/other/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
                    } else {
                        # insert a new device
                        $device->last_seen_by = 'nmis import';
                        $i = $this->m_system->insert_system($device);
                        $device->system_id = $i;
                        $log_stamp =  date('M j H:i:s') . " " . gethostname() . " " . getmypid() . " admin_cli/import_nmis " . $device->ip_address . " (" . $device->hostname . ") - new basic result" . PHP_EOL;
                        file_put_contents("/usr/local/open-audit/other/open-audit.log", $log_stamp, FILE_APPEND | LOCK_EX);
                    }
                }
                if (isset($device->system_id) and $device->system_id != '') {
                    $this->m_oa_group->update_system_groups($device);
                }
            }
        }
    }

    public function generate_report()
    {
        # we need the environment variable as defined in the script.
        echo $this->uri->uri_string() . "\n";
        $var = $this->uri->segment(3, 0);

        # make sure we specify a group
        $this->data['group_id'] =  getenv($var . "_group_id");
        if (!isset($this->data['group_id']) or is_null($this->data['group_id']) or $this->data['group_id'] == '') {
            exit();
        }

        if (isset($_POST['first_attribute'])) {
            $this->data['first_attribute'] = getenv($var . "_first_attribute");
        } else {
            $this->data['first_attribute'] = '';
        }

        $this->data['column'] = array();

        $report = getenv($var . "_report");
        if (!isset($report) or is_null($report) or $report == '') {
            exit();
        }
        echo "\n\n$report\n\n";
        $report = str_replace("<\![CDATA[SELECT", "<![CDATA[SELECT", $report);

        $xml = new SimpleXMLElement(utf8_encode($report));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
            }
            if ($child->getName() == 'columns') {
                foreach ($child->children() as $column) {
                    $i = new stdclass();
                    if (isset($column->column_order)) {
                        $i->column_order = $column->column_order;
                    } else {
                        $i->column_order = '';
                    }
                    if (isset($column->column_name)) {
                        $i->column_name = $column->column_name;
                    } else {
                        $i->column_name = '';
                    }
                    if (isset($column->column_variable)) {
                        $i->column_variable = $column->column_variable;
                    } else {
                        $i->column_variable = '';
                    }
                    if (isset($column->column_type)) {
                        $i->column_type = $column->column_type;
                    } else {
                        $i->column_type = '';
                    }
                    if (isset($column->column_link)) {
                        $i->column_link = $column->column_link;
                    } else {
                        $i->column_link = '';
                    }
                    if (isset($column->column_secondary)) {
                        $i->column_secondary = $column->column_secondary;
                    } else {
                        $i->column_secondary = '';
                    }
                    if (isset($column->column_ternary)) {
                        $i->column_ternary = $column->column_ternary;
                    } else {
                        $i->column_ternary = '';
                    }
                    if (isset($column->column_align)) {
                        $i->column_align = $column->column_align;
                    } else {
                        $i->column_align = '';
                    }
                    $this->data['column'] = $i;
                    unset ($i);
                }
            }
        }

        exit();
        # this breaks below here. Message:  Undefined property: Admin_cli::$db
        # Going to try using a POST from the command line with WGET and only make it work it request from 127.0.0.1
        # Will put it in system.php controller so don't have to validate user
        $data = array($this->data['group_id']);
        $query = $this->db->query('SET @group = ?', $data);

        $data = array($this->data['group_id'], $this->data['first_attribute']);
        $query = $this->db->query($sql, $data);
        $this->data['query'] = $query->result();

        $this->data['count'] = count($this->data['query']);
        $this->data['include'] = $this->m_oa_report->get_report_view($this->data['report_id']);
        $this->data['sortcolumn'] = $this->m_oa_report->get_report_sort_column($this->data['report_id']);
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }
}
