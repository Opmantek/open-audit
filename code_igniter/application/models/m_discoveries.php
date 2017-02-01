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
 * @version   1.14.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_discoveries extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function create($data = null)
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'creating data';
        stdlog($this->log);
        $CI = & get_instance();
        $data_array = array();
        $sql = "INSERT INTO `discoveries` (";
        $sql_data = "";
        if (is_null($data)) {
            if (!empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
            } else {
                log_error('ERR-0010', 'm_discoveries::create');
                return false;
            }
        }

        if ($data->type == 'subnet') {
            if (empty($data->other->subnet)) {
                log_error('ERR-0024', 'm_discoveries::create');
                return false;
            } else {
                $data->description = $data->other->subnet;
            }
        } else if ($data->type == 'active directory') {
            $data->description = $data->other->ad_domain;
        } else {
            $data->description = '';
        }
        $data->other = json_encode($data->other);
        foreach ($this->db->field_data('discoveries') as $field) {
            if (!empty($data->{$field->name}) and $field->name != 'id') {
                $sql .= "`" . $field->name . "`, ";
                $sql_data .= "?, ";
                $data_array[] = (string)$data->{$field->name};
            }
        }
        if (count($data_array) == 0 or empty($data->org_id) or empty($data->name) or empty($data->other) or empty($data->network_address)) {
            log_error('ERR-0021', 'm_discoveries::create');
            return false;
        }
        $sql .= '`created_by`, `created_on`';    // the user.name and timestamp
        $sql_data .= '?, NOW()';                 // the user.name and timestamp
        $data_array[] = $CI->user->full_name;    // the user.name
        $sql .= ") VALUES (" . $sql_data . ")";
        $this->run_sql($sql, $data_array);
        $sql = "SELECT id FROM discoveries WHERE name = ? and org_id = ? and other = ?";
        $new_discovery = $this->run_sql($sql, array($data->name, $data->org_id, $data->other));
        $id = $new_discovery[0]->id;

        $data->other = json_decode($data->other);
        if ($data->type == 'subnet' and strpos($data->other->subnet, '/') !== false) {
            $CI->load->model('m_networks');
            $network = new stdClass();
            $network->name = $data->other->subnet;
            $network->org_id = $data->org_id;
            $network->description = $data->name;
            $CI->m_networks->upsert($network);
        } else {
            if ($data->type == 'subnet' and filter_var($data->other->subnet, FILTER_VALIDATE_IP) !== false) {
                $CI->load->model('m_networks');
                $CI->load->helper('network');
                $temp = network_details($data->other->subnet.'/30');
                $network = new stdClass();
                $network->name = $temp->network.'/'.$temp->network_slash;
                $network->org_id = $data->org_id;
                $CI->m_networks->upsert($network);
            }
        }
        return $id;
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "/* discoveries::read */ " . "SELECT * FROM discoveries WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result[0]->other = json_decode($result[0]->other);
        $result = $this->format_data($result, 'discoveries');
        return ($result);
    }

    public function update()
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();
        $sql = '';
        $fields = ' name org_id location_id network_address type system_id other device_count last_run complete devices_assigned_to_org devices_assigned_to_location ';

        if ( !empty($CI->response->meta->received_data->attributes->other)) {
            $received_other = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->other as $key => $value) {
                    $received_other->$key = $value;
            }
            $select = "SELECT * FROM discoveries WHERE id = ?";
            $result = $this->run_sql($select, array($CI->response->meta->id));
            $existing_other = json_decode($result[0]->other);
            $new_other = new stdClass();
            foreach ($existing_other as $existing_key => $existing_value) {
                if (!empty($received_other->$existing_key)) {
                    $new_other->$existing_key = $received_other->$existing_key;
                } else {
                    $new_other->$existing_key = $existing_other->$existing_key;
                }
            }
            unset($CI->response->meta->received_data->attributes->other);
            $CI->response->meta->received_data->attributes->other = (string)json_encode($new_other);
            if (!empty($received_other->subnet)) {
                $CI->response->meta->received_data->attributes->description = $received_other->subnet;
                $fields .= ' description ';
            }
            if (!empty($received_other->ad_domain)) {
                $CI->response->meta->received_data->attributes->description = $received_other->ad_domain;
                $fields .= ' description ';
            }
        }

        foreach ($CI->response->meta->received_data->attributes as $key => $value) {
            if (strpos($fields, ' '.$key.' ') !== false) {
                if ($sql == '') {
                    $sql = "SET `" . $key . "` = '" . $value . "'";
                } else {
                    $sql .= ", `" . $key . "` = '" . $value . "'";
                }
            }
        }
        $sql = "/* discoveries::update */ " . "UPDATE `discoveries` " . $sql . " WHERE id = " . intval($CI->response->meta->id);
        $this->run_sql($sql);
        return;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        if ($id != 0) {
            $CI = & get_instance();
            $sql = "/* discoveries::delete */ " . "DELETE FROM `discoveries` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $sql = $this->collection_sql('discoveries', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'discoveries');
        return ($result);
    }

    public function read_sub_resource($id = '') {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        // Read our associated logs (if any)
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "/* m_discoveries::read_sub_resource */ " . "SELECT * FROM discovery_log WHERE discovery_id = ? ORDER BY `id`";
        $result = $this->run_sql($sql, array(intval($id)));
        $result = $this->format_data($result, 'discovery_log');
        return ($result);
        #return(array());
    }

    public function execute($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'executing discovery';
        stdlog($this->log);
        $CI = & get_instance();
        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }

        $sql = "SELECT * FROM discoveries WHERE id = ?";
        $data = array(intval($id));
        $temp = $this->run_sql($sql, $data);
        if (!empty($temp[0])) {
            $discovery = $temp[0];
        } else {
            $this->log->status = 'error';
            $this->log->summary = 'Discovery ID provided does not exist';
            stdlog($this->log);
            return;
        }

        // reset our device counter
        $sql = "UPDATE `discoveries` SET `device_count` = 0, `complete` = 'n', last_run = NOW() WHERE id = ?";
        $data = array(intval($id));
        $this->run_sql($sql, $data);

        if (!empty($this->config->config['discovery_nmap_os'])) {
            $nmap_os = $this->config->config['discovery_nmap_os'];
        } else {
            $nmap_os = 'n';
        }

        if ($CI->response->meta->debug) {
            $debugging = 1;
        } else {
            $debugging = 0;
        }

        // decode our other attributes
        $discovery->other = json_decode($discovery->other);

        if ($discovery->type == 'subnet') {
            // Unix based discovery
            if (php_uname('s') != 'Windows NT') {
                $filepath = $this->config->config['base_path'] . '/other';
                $command_string = "$filepath/discover_subnet.sh" .
                                    " subnet_range=" .  $discovery->other->subnet .
                                    " url=".            $discovery->network_address . "index.php/input/discoveries" .
                                    " submit_online=y" .
                                    " echo_output=n" .
                                    " create_file=n" .
                                    " debugging=" . $debugging .
                                    " subnet_timestamp=" . $discovery->id .
                                    " os_scan=" . $nmap_os . " > /dev/null 2>&1 &";
                if (php_uname('s') == 'Linux') {
                    $command_string = 'nohup ' . $command_string;
                }
                @exec($command_string, $output, $return_var);
                if ($return_var != '0') {
                    $message = 'Discovery subnet starting script discover_subnet.sh ('.$discovery->other->subnet.') has failed';
                    $this->session->set_flashdata('error', $message);
                } else {
                    $message =  'Discovery subnet starting script discover_subnet.sh ('.$discovery->other->subnet.') has started';
                    $this->session->set_flashdata('success', $message);
                }
            }

            // Windows based discovery
            if (php_uname('s') == 'Windows NT') {
                $filepath = $this->config->config['base_path'] . '\\other';
                // run the script and continue (do not wait for result)
                $command_string = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs" .
                                    " subnet_range=" . $discovery->other->subnet .
                                    " url=".           $discovery->network_address . "index.php/input/discoveries" .
                                    " submit_online=y" .
                                    " echo_output=n" .
                                    " create_file=n" .
                                    " debugging=0" .
                                    " subnet_timestamp=" . $discovery->id .
                                    " os_scan=" . $nmap_os;
                pclose(popen($command_string, "r"));
            }
        }

        if ($discovery->type == 'active directory') {

            $CI->load->helper('wmi');
            $CI->load->model('m_credentials');
            // We need to set the user orgs to the org of this particular discovery run
            $this->user = new stdClass();
            $this->user->orgs = $this->m_orgs->get_children($discovery->org_id);
            if (count($this->user->orgs) > 0) {
                $this->user->org_list = $discovery->org_id . ',' . implode(',', $this->user->orgs);
            } else {
                $this->user->org_list = $discovery->org_id;
            }

            // Stored credential sets
            $credentials = $this->m_credentials->collection();
            # TODO - replace the ugly code below
            $creds = array();
            foreach ($credentials as $credential) {
                $creds[] = $credential->attributes;
            }
            unset($credentials);
            $credentials = $creds;
            unset($creds);
            $credentials = windows_credentials($discovery->other->ad_server, $credentials, null);
            if (count($credentials) == 0) {
                // TODO - log an error no credentials working
                return;
            }
            $windows_username = $credentials->credentials->username;
            $windows_password = $credentials->credentials->password;


            # get the list of subnets from AD
            $ad_ldap_connect = 'ldap://' . $discovery->other->ad_server;
            $error_reporting = error_reporting();
            error_reporting(0);
            $ad = @ldap_connect($ad_ldap_connect);
            error_reporting($error_reporting);
            unset($error_reporting);
            if (!$ad) {
                // log the failed attempt to connect to AD
                $log_details->severity = 5;
                $log_details->status = 'error';
                $log_details->details = 'Could not connect to AD ' . $discovery->other->ad_domain . ' at ' . $discovery->other->ad_server;
                stdlog($log_details);
                $log_details->severity = 7;
            } else {
                // successful connect to AD, now try to bind using the credentials
                ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
                $bind = @ldap_bind($ad, $windows_username, $windows_password);
                if ($bind) {
                    $log_details->message = 'Retrieving subnets from ' . $discovery->other->ad_domain . ' on ' . $discovery->other->ad_server;
                    stdlog($log_details);
                    $dn = "CN=Subnets,CN=Sites,CN=Configuration,dc=".implode(", dc=", explode(".", $discovery->other->ad_domain));
                    $filter = "(&(objectclass=*))";
                    $justthese = array("distinguishedName", "name");
                    $sr = ldap_search($ad, $dn, $filter, $justthese);
                    $info = ldap_get_entries($ad, $sr);
                    $this->load->model('m_networks');
                    foreach ($info as $subnet) {
                        if (!empty($subnet['name'][0]) and $subnet['name'][0] != 'Subnets') {
                            // $network = new stdClass();
                            // $network->id = 0;
                            // $network->name = $subnet['name'][0];
                            // $network->org_id = $discovery->org_id;
                            // $network->description = $subnet['description'][0];
                            // if (!empty($subnet['location'][0])) {
                            //     $network->description .= ' (' . $subnet['location'][0] . ')';
                            // }
                            // $this->m_networks->upsert($network);
                            // unset($network);

                            $ad_discovery = new stdClass();
                            if (!empty($subnet['description'][0])) {
                                if (!empty($subnet['location'][0])) {
                                    $ad_discovery->name = $subnet['description'][0] . ' (' . $subnet['location'][0] . ')';
                                } else {
                                    $ad_discovery->name = $subnet['description'][0];
                                }
                            } else {
                                $ad_discovery->name = $subnet['name'][0];
                            }
                            $ad_discovery->org_id = $discovery->org_id;
                            $ad_discovery->type = 'subnet';
                            $ad_discovery->devices_assigned_to_org = $discovery->devices_assigned_to_org;
                            $ad_discovery->devices_assigned_to_location = $discovery->devices_assigned_to_location;
                            $ad_discovery->network_address = $discovery->network_address;
                            $ad_discovery->complete = 'y';
                            $ad_discovery->other = new stdClass();
                            $ad_discovery->other->subnet = $subnet['name'][0];
                            $other = json_encode($ad_discovery->other);
                            $sql = 'SELECT * FROM discoveries WHERE other = " . $other . " AND org_id = ' . $ad_discovery->org_id;
                            $result = $this->run_sql($sql, array());
                            if (count($result) == 0) {
                                $this_id = $this->create($ad_discovery);
                                $this->execute($this_id);
                            }
                        }
                    }
                    $sql = "UPDATE `discoveries` SET `complete` = 'y' WHERE id = ?";
                    $this->run_sql($sql, array($discovery->id));
                } else {
                    $log_details->message = 'Could not bind to AD ' . $discovery->other->ad_domain . ' at ' . $discovery->other->ad_server;
                    stdlog($log_details);
                }
            }
        }
    }
}
