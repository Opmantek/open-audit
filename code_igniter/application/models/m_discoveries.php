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
* @version   2.2.5
* @link      http://www.open-audit.org
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
        $sql = "SELECT * FROM discoveries WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (!empty($result[0]->other)) {
            $result[0]->other = json_decode($result[0]->other);
        }
        if ($result[0]->type == 'subnet') {
            $command = '';
            // Unix based discovery
            if (php_uname('s') != 'Windows NT') {
                $filepath = $this->config->config['base_path'] . '/other';
                $command = "$filepath/discover_subnet.sh" .
                            " subnet_range=" .  $result[0]->other->subnet .
                            " url=".            $result[0]->network_address . "index.php/input/discoveries" .
                            " submit_online=y" .
                            " echo_output=n" .
                            " create_file=n" .
                            " debugging=0" .
                            " discovery_id=" . $result[0]->id . " > /dev/null 2>&1 &";
                if (php_uname('s') == 'Linux') {
                    $command = 'nohup ' . $command;
                }
            } else if (php_uname('s') == 'Windows NT') {
                $filepath = $this->config->config['base_path'] . '\\other';
                // run the script and continue (do not wait for result)
                $command = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs" .
                            " subnet_range=" . $result[0]->other->subnet .
                            " url=".           $result[0]->network_address . "index.php/input/discoveries" .
                            " submit_online=y" .
                            " echo_output=n" .
                            " create_file=n" .
                            " debugging=0" .
                            " discovery_id=" . $result[0]->id;
            }
            $result[0]->command = $command;
        }
        $result = $this->format_data($result, 'discoveries');
        return ($result);
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
        if (empty($id)) {
            return false;
        }
        $CI = & get_instance();
        $sql = "/* discoveries::delete */ " . "DELETE FROM `discoveries` WHERE id = ?";
        $data = array($id);
        $this->run_sql($sql, $data);
        $sql = "/* discoveries::delete */ " . "DELETE FROM `discovery_log` WHERE discovery_id = ?";
        $this->run_sql($sql, $data);
        return true;
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $sql = $this->collection_sql('discoveries', 'sql');
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'discoveries');
        return ($result);
    }

    public function read_sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        // Read our associated logs (if any)
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM discovery_log WHERE discovery_id = ? ORDER BY `id`";
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

        if (empty($id)) {
            $this->log->severity = 3;
            $this->log->status = 'error';
            $this->log->status = 'No discovery ID passed to execute.';
            stdlog($this->log);
            return false;
        }

        $this->load->model('m_collection');

        $sql = "SELECT * FROM discoveries WHERE id = ?";
        $data = array(intval($id));
        $temp = $this->run_sql($sql, $data);
        if (!empty($temp[0])) {
            $discovery = $temp[0];
            $CI->response->data = $temp;
        } else {
            $this->log->status = 'error';
            $this->log->summary = 'Discovery ID provided does not exist';
            stdlog($this->log);
            return false;
        }

        // delete our previous logs
        $sql = "DELETE FROM `discovery_log` WHERE `discovery_id` = ?";
        $this->run_sql($sql, array(intval($id)));

        // reset our device counter
        $limit = intval($CI->response->meta->limit);
        $sql = "UPDATE `discoveries` SET `device_count` = 0, `complete` = 'n', `last_run` = NOW(), `limit` = ? WHERE id = ?";
        $data = array(intval($limit), intval($id));
        $this->run_sql($sql, $data);

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
                                    " discovery_id=" . $discovery->id . " > /dev/null 2>&1 &";
                if (php_uname('s') == 'Linux') {
                    $command_string = 'nohup ' . $command_string;
                }
                @exec($command_string, $output, $return_var);
                $this->log->detail = $command_string;
                if ($return_var != '0') {
                    $message = 'Discovery subnet starting script discover_subnet.sh ('.$discovery->other->subnet.') has failed';
                    $this->session->set_flashdata('error', $message);
                    $this->log->status = 'executing script - failure';
                    $this->log->summary = $message;
                    stdlog($this->log);
                } else {
                    $message =  'Discovery subnet starting script discover_subnet.sh ('.$discovery->other->subnet.') has started';
                    $this->session->set_flashdata('success', $message);
                    $this->log->status = 'executing script - success';
                    $this->log->summary = $message;
                    stdlog($this->log);
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
                                    " discovery_id=" . $discovery->id;
                pclose(popen($command_string, "r"));
            }
        }

        if ($discovery->type == 'active directory') {
            $log = new stdClass();
            $log->discovery_id = $discovery->id;
            $log->system_id = null;
            $log->timestamp = $this->config->config['timestamp'];
            $log->severity = 5;
            $log->pid = getmypid();
            $log->file = 'm_discoveries';
            $log->function = 'execute';
            $log->message = '';

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

            # get the list of subnets from AD
            # TODO - make the below able to use LDAPS as well as LDAP
            $ad_ldap_connect = 'ldap://' . $discovery->other->ad_server;
            $error_reporting = error_reporting();
            error_reporting(0);
            $ad = @ldap_connect($ad_ldap_connect);
            error_reporting($error_reporting);
            unset($error_reporting);
            if (!$ad) {
                // log the failed attempt to connect to AD
                $log->severity = 3;
                $log->details = 'Could not connect to AD ' . $discovery->other->ad_domain . ' at ' . $discovery->other->ad_server;
                discovery_log($log);
                return false;
            } else {
                // successful connect to AD, now try to bind using the credentials
                ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
                ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
                foreach ($credentials as $credential) {
                    if ($credential->attributes->type == 'windows') {
                        if ($bind = @ldap_bind($ad, $credential->attributes->credentials->username, $credential->attributes->credentials->password)) {
                            $log->severity = 6;
                            $log->message = 'Successful bind to AD using ' . $credential->attributes->name;
                            discovery_log($log);
                            break;
                        } else {
                            $log->severity = 6;
                            $log->message = 'Could not bind to AD using ' . $credential->attributes->name;
                            discovery_log($log);
                        }
                    }
                }
                #$bind = @ldap_bind($ad, $windows_username, $windows_password);
                if ($bind) {
                    $dn = "CN=Subnets,CN=Sites,CN=Configuration,dc=".implode(", dc=", explode(".", $discovery->other->ad_domain));
                    $filter = "(&(objectclass=*))";
                    $justthese = array("distinguishedName", "name", "siteobject");
                    $sr = ldap_search($ad, $dn, $filter, $justthese);
                    $info = ldap_get_entries($ad, $sr);
                    if (empty($info)) {
                        $log->message = 'Could not Retrieve subnets from ' . $discovery->other->ad_domain . ' on ' . $discovery->other->ad_server;
                        $log->severity = 3;
                        discovery_log($log);
                        return false;
                    } else {
                        $log->severity = 6;
                        $log->message = 'Retrieved subnets from ' . $discovery->other->ad_domain . ' on ' . $discovery->other->ad_server;
                        discovery_log($log);
                    }
                    $this->load->model('m_networks');
                    foreach ($info as $subnet) {
                        if (!empty($subnet['name'][0]) and $subnet['name'][0] != 'Subnets') {
                            unset($network);
                            $network = new stdClass();
                            //$network->id = 0;
                            if (!empty($subnet['siteobject'][0])) {
                                $temp = explode(',', $subnet['siteobject'][0]);
                                $temp_name = explode('=', $temp[0]);
                                $name = $temp_name[1] . ' - ';
                            } else {
                                $name = '';
                            }

                            $network->name = $name . $subnet['name'][0];
                            $network->network = $subnet['name'][0];
                            $network->org_id = $discovery->org_id;
                            $network->description = @$subnet['description'][0];
                            if (!empty($subnet['location'][0])) {
                                $network->description .= ' (' . $subnet['location'][0] . ')';
                            }
                            $log->message = 'Upserting network - ' . $network->name;
                            discovery_log($log);
                            $this->m_networks->upsert($network);

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
                            $sql = "/* m_discoveries::execute */ " . 'SELECT * FROM discoveries WHERE other = ? AND org_id = ' . intval($ad_discovery->org_id);
                            $result = $this->run_sql($sql, array(json_encode($ad_discovery->other)));
                            if (empty($result)) {
                                $this_id = $this->m_collection->create($ad_discovery, 'discoveries');
                                $log->message = "Creating and executing discovery on subnet " . $network->name;
                                discovery_log($log);
                            } else {
                                $this_id = $result[0]->id;
                                $log->message = "Discovery for " . $network->name . " exists, running.";
                                discovery_log($log);
                            }
                            if (!empty($this_id)) {
                                $this->execute($this_id);
                            }
                        }
                    }
                    $sql = "UPDATE `discoveries` SET `complete` = 'y' WHERE id = ?";
                    $this->run_sql($sql, array($discovery->id));
                } else {
                    $log->severity = 3;
                    $log->message = 'Could not bind to AD ' . $discovery->other->ad_domain . ' at ' . $discovery->other->ad_server;
                    discovery_log($log);
                    return false;
                }
            }
        }
    }
}
