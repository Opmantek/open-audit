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
* @version   3.2.2
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
        #stdlog($this->log);
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
            $sql = '/* m_discoveries::read */ ' . "SELECT * FROM `discovery_log` WHERE `id` IN (SELECT MAX(`id`) FROM `discovery_log` WHERE `ip` NOT IN (SELECT DISTINCT(`ip`) FROM discovery_log WHERE `message` LIKE 'Discovery has completed processing%' OR `message` LIKE 'IP % not responding, ignoring.' OR `ip` = '127.0.0.1') GROUP BY `ip`) AND discovery_id = " . $id;
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

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $sql = $this->collection_sql('discoveries', 'sql');
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
    }


    public function execute($id = null)
    {
        if (is_null($id)) {
            return false;
        }
        $start = microtime(true);
        $sql = "/* m_discoveries::execute */ " . "DELETE from discovery_log WHERE discovery_id = ?";
        $data = array($id);
        $this->db->query($sql, $data);
        $item = $this->m_discoveries->read($id);
        $discovery = $item[0];
        $log = new stdClass();
        $log->discovery_id = $id;
        $log->command_status = 'start';
        $log->message = 'Starting discovery for ' . $discovery->attributes->name;
        $log->ip = '127.0.0.1';
        $log->severity = 6;
        $this->load->helper('discoveries');
        $sql = "/* m_discoveries::execute */ " . "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW() WHERE id = ?";
        $data = array($id);
        $this->db->query($sql, $data);
        $all_ip_list = all_ip_list($discovery);
        $responding_ip_list = responding_ip_list($discovery);
        $log->command_time_to_execute = microtime(true) - $start;
        discovery_log($log);
        update_non_responding($discovery->id, $all_ip_list, $responding_ip_list);
        queue_responding($discovery->id, $responding_ip_list);
        if (!empty($all_ip_list) and is_array($all_ip_list)) {
            $ip_all_count = count($all_ip_list);
        }
        if (!empty($responding_ip_list) and is_array($responding_ip_list)) {
            $ip_responding_count = count($responding_ip_list);
        }
        $sql = "/* m_discoveries::execute */ " . "UPDATE `discoveries` SET ip_all_count = ?, ip_responding_count = ? WHERE id = ?";
        $data = array($ip_all_count, $ip_responding_count, $id);
        $this->db->query($sql, $data);
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
        $org_list = $org_id . ', ' . implode(', ', $temp);
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
