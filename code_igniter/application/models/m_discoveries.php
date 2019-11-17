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
* @version   3.3.0
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
        $CI = & get_instance();
        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
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
        # Do not check if 0 because 0 is for custom scans
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

        if ($result[0]->status === 'failed') {
            $sql = '/* m_discoveries::read */ ' . "SELECT * FROM `discovery_log` WHERE `id` IN (SELECT MAX(`id`) FROM `discovery_log` WHERE `ip` NOT IN (SELECT DISTINCT(`ip`) FROM discovery_log WHERE (`command_status` = 'device complete' OR `message` LIKE 'IP % not responding, ignoring.' OR `ip` = '127.0.0.1') AND discovery_id = " . $id . ") AND discovery_id = " . $id . " GROUP BY `ip`) AND discovery_id = " . $id;
            $last_logs = $this->run_sql($sql);
            $result[0]->last_logs_for_failed_devices = $last_logs;
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

    public function collection(int $user_id = null, int $response = null)
    {
        $CI = & get_instance();
        if ((string) php_uname('s') === 'Windows NT') {
            $user = get_current_user();
            if ($user == 'SYSTEM') {
                $sql = "SELECT COUNT(*) as `count` FROM `discovery_log` WHERE `file` = 'wmi_helper' AND `function` = 'copy_to_windows' AND `message` = 'Net Use' and `command_status` = 'fail'";
                $data = array();
                $data_result = $this->run_sql($sql, $data);
                if ($data_result[0]->count > 0){
                    $CI->response->meta->warning = 'WARNING - Windows is running the Apache service as "Local System". This should be changed to a real user (with network access) for optimal discovery results. See the <a href="https://community.opmantek.com/display/OA/Running+Open-AudIT+Apache+Service+under+Windows" target="_blank">Open-AudIT wiki</a> for more details.';
                    $CI->session->set_flashdata('warning', $CI->response->meta->warning);
                }
            }
        }
        if (!empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = "SELECT * FROM discoveries WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            for ($i=0; $i < count($result); $i++) {
                if (!empty($result[$i]->other)) {
                    $result[$i]->other = json_decode($result[$i]->other);
                    foreach ($result[$i]->other as $key => $value) {
                        $result[$i]->{'other.'.$key} = $value;
                    }
                }
            }
            $result = $this->format_data($result, 'discoveries');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM discoveries LEFT JOIN orgs ON (discoveries.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            for ($i=0; $i < count($result); $i++) {
                if (!empty($result[$i]->other)) {
                    $result[$i]->other = json_decode($result[$i]->other);
                    foreach ($result[$i]->other as $key => $value) {
                        $result[$i]->{'other.'.$key} = $value;
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'discoveries');
            $CI->response->meta->filtered = count($CI->response->data);
        }
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
    }


    public function queue($id = null)
    {
        if (is_null($id)) {
            return false;
        }
        $item = $this->m_discoveries->read($id);
        $discovery = $item[0];
        if (empty($discovery)) {
            return false;
        }
        $sql = "/* m_discoveries::execute */ " . "DELETE from discovery_log WHERE discovery_id = ?";
        $data = array($id);
        $this->db->query($sql, $data);
        $sql = "/* m_discoveries::execute */ " . "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW() WHERE id = ?";
        $data = array($id);
        $this->db->query($sql, $data);
        $this->load->model('m_queue');
        $queue_item = new stdClass();
        $queue_item->name = $discovery->attributes->name;
        $queue_item->org_id = $discovery->attributes->org_id;
        $queue_item->discovery_id = $id;
        $temp = $this->m_queue->create($discovery->attributes->type, $queue_item);
        if (!empty($temp)) {
            return true;
        } else {
            return false;
        }
    }

    # Take a discover ID and optionally a device ID
    # Return an array of credentials in the order of device specific, device previously worked, 
    # discovery associated (IE: discovery.org_id (and children) = orgs.id = credentials.org_id)
    public function get_device_discovery_credentials($id = null, $discovery_id = null, $ip = null)
    {
        $CI =& get_instance();
        $CI->load->model('m_credentials');
        $CI->load->library('encrypt');
        $credentials = array();
        $id = intval($id);
        $discovery_id = intval($discovery_id);
        if (empty($discovery_id)) {
            return $credentials;
        }
        $retrieved_types = array();
        # set up a log object
        $log = new stdClass();
        $log->discovery_id = $discovery_id;
        $log->file = 'm_device';
        $log->function = 'get_device_discovery_credentials';
        $log->ip = $ip;
        $log->message = 'Credentials retrieved for: ';
        $log->pid = getmypid();
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->system_id = intval($id);
        $log->timestamp = null;
        # Get the discovery details
        $sql = "/* m_device::get_device_discovery_credentials */ " . "SELECT * FROM discoveries WHERE id = ?";
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $org_id = 1;
        if (!empty($result[0]->org_id)) {
            $org_id = intval($result[0]->org_id);
        }
        // Device specific credentials
        $sql = "/* m_device::get_device_discovery_credentials */ " . "SELECT * FROM `credential` WHERE `system_id` = ?";
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if (!empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
            }
            $credentials = $result;
            $retrieved_types[] = 'Device specific';
        }
        // Previous working credentials
        $sql = "/* m_device::get_device_discovery_credentials */ " . "SELECT `credentials` FROM `system` WHERE id = ?";
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        # $result[0]->credentials is a string. A JSON encoded array of integers referring to credentials.id
        if (!empty($result[0]->credentials)) {
            $temp = @json_decode($result[0]->credentials);
            if (!empty($temp)) {
                $id_list = implode(', ', $temp);
                $sql = "/* m_device::get_device_discovery_credentials */ " . "SELECT credentials.*, 'credentials' AS `foreign` FROM `credentials` WHERE id IN (" . $id_list . ")";
                $query = $this->db->query($sql);
                $result = $query->result();
                if (!empty($result)) {
                    for ($i=0; $i < count($result); $i++) {
                        $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
                    }
                }
                $credentials = array_merge($credentials, $result);
            }
            $retrieved_types[] = 'Device previously working';
        }
        unset($temp);

        # Discovery associated credentials
        # get our Orgs List
        $temp = $CI->m_orgs->get_children($org_id);
        $temp[] = $org_id;
        $org_list = implode(', ', $temp);
        unset($temp);
        # And now get any credentials
        $sql = "/* m_device::get_device_discovery_credentials */ " . "SELECT credentials.*, 'credentials' AS `foreign` FROM `credentials` WHERE `org_id` IN (" . $org_list . ")";
        $query = $this->db->query($sql);
        $result = $query->result();
        if (!empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
            }
            $credentials = array_merge($credentials, $result);
            $retrieved_types[] = 'Discovery related';
        }
        if (count($credentials) == 0) {
            $log->message = 'No credentials retrieved.';
            $log->severity = 5;
            $log->command_status = 'warning';
            discovery_log($log);
        } else {
            $log->message = $log->message . implode(', ', $retrieved_types) . '.';
            discovery_log($log);
        }
        return $credentials;
    }

}
