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
* @version   3.2.0
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
        $CI = & get_instance();
        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }

        if ((string) php_uname('s') === 'Windows NT') {
            $user = get_current_user();
            if ($user == 'SYSTEM') {
                $sql = "SELECT COUNT(*) as `count` FROM `discovery_log` WHERE `discovery_id` = ? AND `file` = 'wmi_helper' AND `function` = 'copy_to_windows' AND `message` = 'Net Use' and `command_status` = 'fail'";
                $data = array(intval($id));
                $data_result = $this->run_sql($sql, $data);
                if ($data_result[0]->count > 0){
                    $CI->response->meta->warning = 'WARNING - Windows is running the Apache service as "Local System". This should be changed to a real user (with network access) for optimal discovery results. See the <a href="https://community.opmantek.com/display/OA/Running+Open-AudIT+Apache+Service+under+Windows" target="_blank">Open-AudIT wiki</a> for more details.';
                    $CI->session->set_flashdata('warning', $CI->response->meta->warning);
                }
            }
        }

        $sql = "SELECT * FROM discoveries WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (empty($result)) {
            return false;
        }
        if (!empty($result[0]->other)) {
            $result[0]->other = json_decode($result[0]->other);
        }
        // Ensure we have some defaults
        if (empty($result[0]->other->nmap)) {
            $result[0]->other->nmap = new stdClass();
        }
        if (!isset($result[0]->other->nmap->discovery_scan_option_id) or !is_numeric($result[0]->other->nmap->discovery_scan_option_id)) {
            if (!empty($this->config->config['discovery_default_scan_option'])) {
                $result[0]->other->nmap->discovery_scan_option_id = intval($this->config->config['discovery_default_scan_option']);
            } else {
                $result[0]->other->nmap->discovery_scan_option_id = 1;
            }
        }
        # Do not check if 0 as 0 is for custom scans
        if (!empty($discovery->other->nmap->discovery_scan_option_id)) {
            $do_not_use = array('id', 'name', 'org_id', 'description', 'options', 'edited_by', 'edited_date');
            $prefer_individual = array('timeout', 'exclude_tcp', 'exclude_udp', 'exclude_ip', 'ssh_port');
            $sql = 'SELECT * FROM discovery_scan_options WHERE id = ?';
            $data = array(intval($discovery->other->nmap->discovery_scan_option_id));
            $result = $this->run_sql($sql, $data);
            if (!empty($result)) {
                $options = $result[0];
                foreach ($options as $key => $value) {
                    if (!in_array($key, $do_not_use)) {
                        if (in_array($key, $prefer_individual)) {
                            if (!empty($value) and empty($discovery->other->nmap->{$key})) {
                                $discovery->other->nmap->{$key} = $value;
                            }
                        } else {
                            $discovery->other->nmap->{$key} = $value;
                        }
                    }
                }
            }
        }
        if ($result[0]->type == 'subnet') {
            $result[0]->command = $this->create_command($result[0]);
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
        #$sql = "SELECT * FROM discovery_log WHERE discovery_id = ? ORDER BY `id` LIMIT " . $this->config->config['database_show_row_limit'];
        $sql = "SELECT * FROM discovery_log WHERE discovery_id = ? ORDER BY `id`";
        $result = $this->run_sql($sql, array(intval($id)));
        $result = $this->format_data($result, 'discovery_log');
        return ($result);
    }

    public function execute($id = 0)
    {
        $this->load->model('m_queue');
        $this->log->function = strtolower(__METHOD__);
        $sql = "SELECT * FROM `discoveries` WHERE `id` = ?";
        $data = array(intval($id));
        $discovery = $this->run_sql($sql, $data);
        if (!empty($discovery)) {
            $this->m_queue->create('discoveries', json_encode($discovery[0]));
            $sql = 'UPDATE `discoveries` SET `status` = "queued", `discovered` = "" WHERE `id` = ?';
            $data = array(intval($discovery[0]->id));
            $this->run_sql($sql, $data);
            $proto = 'http';
            if ($this->config->config['is_ssl'] === true) {
                $proto = 'https';
            }
            if (stripos($this->config->config['default_network_address'], 'https:') !== false) {
                $proto = 'https';
            }
            # run the script and continue (do not wait for result)
            if (php_uname('s') != 'Windows NT') {
                $instance = '';
                if ($this->db->database != 'openaudit') {
                    $instance = '/' . $this->db->database;
                }
                $command_string = $this->config->config['base_path'] . '/other/execute.sh url=' . $proto . '://localhost' . $instance . '/open-audit/index.php/input/queue/discoveries method=post > /dev/null 2>&1 &';
                #$command_string = $this->config->config['base_path'] . '/other/execute.sh url=' . $discovery[0]->network_address . 'index.php/input/queue/discoveries method=post > /dev/null 2>&1 &';
                if (php_uname('s') == 'Linux') {
                    $command_string = 'nohup ' . $command_string;
                }
                @exec($command_string, $output, $return_var);
            } else {
                $filepath = $this->config->config['base_path'] . '\\other';
                $command_string = "%comspec% /c start /b cscript //nologo $filepath\\execute.vbs url=" . $proto . "://localhost/open-audit/index.php/input/queue/discoveries method=post";
                pclose(popen($command_string, "r"));
            }
            $this->log->detail = $command_string;
            stdlog($this->log);


            if (!empty($discovery[0]->other)) {
                $discovery[0]->other = json_decode($discovery[0]->other);
            }
            if ($discovery[0]->type == 'subnet') {
                $discovery[0]->command = $this->create_command($discovery[0]);
            }
            $result = $this->format_data($discovery[0], 'discoveries');
            return $result;
        } else {
            return false;
        }
    }

    public function create_command($discovery = null)
    {
        if (empty($discovery)) {
            // log an error
            return '';
        }
        if (empty($discovery->other->nmap)) {
            return '';
        }
        $options = $discovery->other->nmap;
        $command_options = '';
        $discovery_scan_options = new stdClass();
        $nmap_options = array('exclude_ip', 'exclude_tcp_ports', 'exclude_udp_ports', 'filtered', 'nmap_tcp_ports', 'nmap_udp_ports', 'ping', 'tcp_ports', 'timing', 'udp_ports', 'service_version', 'ssh_ports');

        if (!empty($options->discovery_scan_option_id)) {
            $sql = "SELECT * FROM `discovery_scan_options` WHERE id = ?";
            $data = array(intval($options->discovery_scan_option_id));
            $result = $this->run_sql($sql, $data);
            if (!empty($result)) {
                $discovery_scan_options = $result[0];
            }
            // Take selected attributes from the discovery_options as authoritative
            $options->ping = $discovery_scan_options->ping;
            $options->service_version = $discovery_scan_options->service_version;
            $options->filtered = $discovery_scan_options->filtered;
            $options->timing = $discovery_scan_options->timing;
            $options->nmap_tcp_ports = $discovery_scan_options->nmap_tcp_ports;
            $options->nmap_udp_ports = $discovery_scan_options->nmap_udp_ports;
            $options->tcp_ports = $discovery_scan_options->tcp_ports;
            $options->udp_ports = $discovery_scan_options->udp_ports;
            if (empty($options->timeout)) {
                if (!empty($discovery_scan_options->timeout)) {
                    $options->timeout = $discovery_scan_options->timeout;
                } else {
                    $options->timeout = '';
                }
            }
            // Combine the exclude_tcp_ports attributes
            if (empty($options->exclude_tcp_ports)) {
                if (!empty($discovery_scan_options->exclude_tcp_ports)) {
                    $options->exclude_tcp_ports = $discovery_scan_options->exclude_tcp_ports;
                } else {
                    $options->exclude_tcp_ports = '';
                }
            } else {
                if (!empty($discovery_scan_options->exclude_tcp_ports)) {
                    $temp_db = explode(',', $discovery_scan_options->exclude_tcp_ports);
                    $temp_submit = explode(',', $options->exclude_tcp_ports);
                    $exclude_tcp_ports = array_merge($temp_db, $temp_submit);
                    $exclude_tcp_ports = array_unique($exclude_tcp_ports);
                    $exclude_tcp_ports = implode(',', $exclude_tcp_ports);
                    $options->exclude_tcp_ports = $exclude_tcp_ports;
                    unset($temp_db);
                    unset($temp_submit);
                    unset($exclude_tcp_ports);
                }
            }
            // Combine the exclude_udp_ports attributes
            if (empty($options->exclude_udp_ports)) {
                if (!empty($discovery_scan_options->exclude_udp_ports)) {
                    $options->exclude_udp_ports = $discovery_scan_options->exclude_udp_ports;
                } else {
                    $options->exclude_udp_ports = '';
                }
            } else {
                if (!empty($discovery_scan_options->exclude_udp_ports)) {
                    $temp_db = explode(',', $discovery_scan_options->exclude_udp_ports);
                    $temp_submit = explode(',', $options->exclude_udp_ports);
                    $exclude_udp_ports = array_merge($temp_db, $temp_submit);
                    $exclude_udp_ports = array_unique($exclude_udp_ports);
                    $exclude_udp_ports = implode(',', $exclude_udp_ports);
                    $options->exclude_udp_ports = $exclude_udp_ports;
                    unset($temp_db);
                    unset($temp_submit);
                    unset($exclude_udp_ports);
                }
            }
            // Combine the exclude_ip attributes
            if (empty($options->exclude_ip)) {
                if (!empty($discovery_scan_options->exclude_ip)) {
                    $options->exclude_ip = $discovery_scan_options->exclude_ip;
                } else {
                    $options->exclude_ip = '';
                }
            } else {
                if (!empty($discovery_scan_options->exclude_ip)) {
                    $temp_db = explode(',', $discovery_scan_options->exclude_ip);
                    $temp_submit = explode(',', $options->exclude_ip);
                    $exclude_ip = array_merge($temp_db, $temp_submit);
                    $exclude_ip = array_unique($exclude_ip);
                    $exclude_ip = implode(',', $exclude_ip);
                    $options->exclude_ip = $exclude_ip;
                    unset($temp_db);
                    unset($temp_submit);
                    unset($exclude_ip);
                }
            }
            if (!empty($this->config->config['discovery_ip_exclude'])) {
                if (!empty($options->exclude_ip)) {
                    $options->exclude_ip .= ',' . $this->config->config['discovery_ip_exclude'];
                } else {
                    $options->exclude_ip = $this->config->config['discovery_ip_exclude'];
                }
            }
            // SSH ports check
            if (empty($options->ssh_ports)) {
                if (!empty($discovery_scan_options->ssh_ports)) {
                    $options->ssh_ports = $discovery_scan_options->ssh_ports;
                } else {
                    $options->ssh_ports = '22';
                }
            } else {
                if (!empty($discovery_scan_options->ssh_ports)) {
                    $temp_db = explode(',', $discovery_scan_options->ssh_ports);
                    $temp_submit = explode(',', $options->ssh_ports);
                    $ssh_ports = array_merge($temp_db, $temp_submit);
                    $ssh_ports = array_unique($ssh_ports);
                    $ssh_ports = implode(',', $ssh_ports);
                    $options->ssh_ports = $ssh_ports;
                    unset($temp_db);
                    unset($temp_submit);
                    unset($ssh_ports);
                }
            }
        }

        if (!empty($options->ssh_ports)) {
            $temp_db = explode(',', $options->tcp_ports);
            $temp_submit = explode(',', $options->ssh_ports);
            $tcp_ports = array_merge($temp_db, $temp_submit);
            $tcp_ports = array_unique($tcp_ports);
            $tcp_ports = implode(',', $tcp_ports);
            $options->tcp_ports = $tcp_ports;
            unset($temp_db);
            unset($temp_submit);
            unset($tcp_ports);
        }

        // ended retrieval and populate from discovery_scan_options
        // Loop through and set option where !empty
        $command_options = '';
        foreach ($options as $key => $value) {
            if (!empty($value) and $key != 'discovery_scan_option_id') {
                $command_options .= ' ' . $key . '=' . $value;
            }
        }

        if (php_uname('s') != 'Windows NT') {
            $filepath = $this->config->config['base_path'] . '/other';
            $command = "$filepath/discover_subnet.sh" .
                        " subnet_range=" .  $discovery->other->subnet .
                        " url=".            $discovery->network_address . "index.php/input/discoveries" .
                        " submit_online=y" .
                        " echo_output=n" .
                        " create_file=n" .
                        " debugging=0" .
                        " discovery_id=" . $discovery->id . " " . $command_options . " > /dev/null 2>&1 &";
            if (php_uname('s') == 'Linux') {
                $command = 'nohup ' . $command;
            }
        } else if (php_uname('s') == 'Windows NT') {
            $filepath = $this->config->config['base_path'] . '\\other';
            // run the script and continue (do not wait for result)
            $command = "%comspec% /c start /b cscript //nologo $filepath\\discover_subnet.vbs" .
                        " subnet_range=" . $discovery->other->subnet .
                        " url=".           $discovery->network_address . "index.php/input/discoveries" .
                        " submit_online=y" .
                        " echo_output=n" .
                        " create_file=n" .
                        " debugging=0" .
                        " discovery_id=" . $discovery->id . " " . $command_options;
        }
        return $command;
    }

    public function run($id = '')
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
        // decode our other attributes
        $discovery->other = json_decode($discovery->other);

        // delete our previous logs
        $sql = "DELETE FROM `discovery_log` WHERE `discovery_id` = ?";
        $this->run_sql($sql, array(intval($id)));

        // reset our device counter
        $limit = 0;
        if (!empty($CI->response->meta->limit)) {
            $limit = intval($CI->response->meta->limit);
        }
        $sql = "UPDATE `discoveries` SET `status` = 'starting', `device_count` = 0, `complete` = 'n', `last_run` = NOW(), last_log = NOW(), `duration` = '00:00:00', `limit` = ? WHERE id = ?";
        $data = array($limit, intval($id));
        $this->run_sql($sql, $data);

        if (!empty($CI->response->meta->debug)) {
            $debugging = 1;
        } else {
            $debugging = 0;
        }

        if ($discovery->type == 'subnet') {
            // Ensure we have some defaults
            if (empty($discovery->other->nmap)) {
                $discovery->other->nmap = new stdClass();
            }
            if (!isset($discovery->other->nmap->discovery_scan_option_id) or !is_numeric($discovery->other->nmap->discovery_scan_option_id)) {
                $discovery->other->nmap->discovery_scan_option_id = intval($this->config->config['discovery_default_scan_option']);
            }

            # Only check if we're not 0 as 0 is for custom scans
            if (!empty($discovery->other->nmap->discovery_scan_option_id)) {
                $sql = 'SELECT * FROM discovery_scan_options WHERE id = ?';
                $data = array(intval($discovery->other->nmap->discovery_scan_option_id));
                $result = $this->run_sql($sql, $data);
                $do_not_use = array('id', 'name', 'org_id', 'description', 'options', 'edited_by', 'edited_date');
                $prefer_individual = array('timeout', 'exclude_tcp', 'exclude_udp', 'exclude_ip', 'ssh_port');
                if (!empty($result)) {
                    $options = $result[0];
                    foreach ($options as $key => $value) {
                        if (!in_array($key, $do_not_use)) {
                            if (in_array($key, $prefer_individual)) {
                                if (!empty($value) and empty($discovery->other->nmap->{$key})) {
                                    $discovery->other->nmap->{$key} = $value;
                                }
                            } else {
                                $discovery->other->nmap->{$key} = $value;
                            }
                        }
                    }
                }
            }
        }

        if ($discovery->type == 'subnet') {
            $command_string = $this->create_command($discovery);
            // Unix based discovery
            if (php_uname('s') != 'Windows NT') {
                exec($command_string, $output, $return_var);
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
                    $this->log->command = $command_string;
                    stdlog($this->log);
                }
            }
            // Windows based discovery
            if (php_uname('s') == 'Windows NT') {
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
            $log->function = 'run';

            $CI->load->helper('wmi');
            $CI->load->model('m_credentials');
            $CI->load->model('m_orgs');
            $this->load->model('m_networks');
            // We need to set the user orgs to the org of this particular discovery run
            $this->user = new stdClass();
            $this->user->orgs = $this->m_orgs->get_children($discovery->org_id);

            if (count($this->user->orgs) > 0) {
                $this->user->org_list = $discovery->org_id . ',' . implode(',', $this->user->orgs);
            } else {
                $this->user->org_list = $discovery->org_id;
            }
            // Stored credential sets
            $credentials = $this->m_credentials->collection($this->user->org_list);
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
                        if ($bind = ldap_bind($ad, $credential->attributes->credentials->username, $credential->attributes->credentials->password)) {
                            $log->severity = 7;
                            $log->message = 'Successful bind to AD using ' . $credential->attributes->name;
                            discovery_log($log);
                            $dn = "CN=Subnets,CN=Sites,CN=Configuration,dc=".implode(", dc=", explode(".", $discovery->other->ad_domain));
                            $filter = "(&(objectclass=*))";
                            $justthese = array("distinguishedName", "name", "siteobject");
                            $sr = ldap_search($ad, $dn, $filter, $justthese);
                            $info = ldap_get_entries($ad, $sr);
                            if (empty($info)) {
                                $log->message = 'Could not Retrieve subnets from ' . $discovery->other->ad_domain . ' on ' . $discovery->other->ad_server . ' using ' . $credential->attributes->name;
                                $log->severity = 6;
                                $log->command_output = '';
                                discovery_log($log);
                            } else {
                                $log->severity = 7;
                                $log->message = 'Retrieved subnets from ' . $discovery->other->ad_domain . ' on ' . $discovery->other->ad_server;
                                discovery_log($log);
                                break;
                            }
                        } else {
                            $log->severity = 7;
                            $log->message = 'Could not bind to AD using ' . $credential->attributes->name;
                            discovery_log($log);
                            unset($bind);
                        }
                    }
                }
                if ($bind and !empty($info)) {
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
                            $ad_discovery->name = $network->name;
                            $ad_discovery->org_id = $discovery->org_id;
                            $ad_discovery->type = 'subnet';
                            $ad_discovery->devices_assigned_to_org = $discovery->devices_assigned_to_org;
                            $ad_discovery->devices_assigned_to_location = $discovery->devices_assigned_to_location;
                            $ad_discovery->network_address = $discovery->network_address;
                            $ad_discovery->complete = 'y';
                            if (gettype($discovery->other) == 'string') {
                                $ad_discovery->other = json_decode($discovery->other);
                            } else {
                                $ad_discovery->other = $discovery->other;
                            }
                            $ad_discovery->other->subnet = $subnet['name'][0];
                            $sql = "/* m_discoveries::execute */ " . 'SELECT * FROM discoveries WHERE name = ? AND org_id = ?';
                            $result = $this->run_sql($sql, array($ad_discovery->name, intval($discovery->org_id)));
                            # TODO - JSON decode this and test the subnet. We know have other items stored inside 'other' (nmap options, etc).
                            if (empty($result)) {
                                $log->message = "Creating and executing discovery on subnet " . $network->name;
                                discovery_log($log);
                                $this_id = $this->m_collection->create($ad_discovery, 'discoveries');
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
                    $log->severity = 5;
                    $log->command_status = 'fail';
                    $log->message = 'Could not bind to AD ' . $discovery->other->ad_domain . ' at ' . $discovery->other->ad_server;
                    discovery_log($log);
                    return false;
                }

                $sql = "UPDATE `discoveries` SET `status` = 'complete', `device_count` = 0, `complete` = 'y', `last_run` = NOW(), last_log = NOW(), `duration` = '00:00:00' WHERE id = ?";
                $data = array($limit, intval($id));
                $this->run_sql($sql, $data);

            }
        }
    }
}
