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
* @package   Discoveries
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.1.2
* @link      http://www.open-audit.org
*/

/**
* Base Model Discoveries
*
* @access   public
* @category Model
* @package  Discoveries
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_discoveries extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    /**
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        // Validate Main

        if (empty($this->config->config['discovery_default_scan_option'])) {
            $this->config->config['discovery_default_scan_option'] = 1;
        }
        $data->org_id = intval($data->org_id);
        $CI = & get_instance();
        if (empty($data->type)) {
            $data->type = '';
        }
        if ($data->type !== 'subnet' && $data->type !== 'active directory' && $data->type !== 'cloud' && $data->type !== 'integration' && $data->type !== 'seed') {
            $data->type = '';
        }
        if (empty($data->devices_assigned_to_org)) {
            unset($data->devices_assigned_to_org);
        } else {
            $data->devices_assigned_to_org = intval($data->devices_assigned_to_org);
        }
        if (empty($data->devices_assigned_to_location)) {
            unset($data->devices_assigned_to_location);
        } else {
            $data->devices_assigned_to_location = intval($data->devices_assigned_to_location);
        }
        // $data->network_address = 'a strng, but no longer used';
        if (isset($data->system_id)) {
            $data->system_id = intval($data->system_id);
        }
        if ( ! empty($data->discard)) {
            if ($data->discard !== 'n' && $data->discard !== 'y') {
                unset($data->discard);
            }
        }
        if ( ! empty($data->subnet)) {
            if ( ! preg_match('/^[\d,\.,\/,-]*$/', $data->subnet)) {
                $data->subnet = '';
            }
        }

        if (empty($data->match_options)) {
            $data->match_options = new stdClass();
        }
        if (is_string($data->match_options)) {
            $data->match_options = json_decode($data->match_options);
        }
        $match_options = array('match_dbus', 'match_fqdn', 'match_dns_fqdn', 'match_dns_hostname', 'match_hostname', 'match_hostname_dbus', 'match_hostname_serial', 'match_hostname_uuid', 'match_ip', 'match_ip_no_data', 'match_mac', 'match_mac_vmware', 'match_serial', 'match_serial_type', 'match_sysname', 'match_sysname_serial', 'match_uuid');
        foreach ($match_options as $match_option) {
            if ( ! isset($data->match_options->{$match_option})) {
                $data->match_options->{$match_option} = '';
            }
            if ($data->match_options->{$match_option} !== 'y' && $data->match_options->{$match_option} !== 'n') {
                $data->match_options->{$match_option} = '';
            }
        }

        if ( ! empty($data->scan_options) && is_string($data->scan_options)) {
            $data->scan_options = json_decode($data->scan_options);
        }
        if (empty($data->scan_options)) {
            $data->scan_options = new stdClass();
            $data->scan_options->id = intval($this->config->config['discovery_default_scan_option']);
        }
        if ( ! isset($data->scan_options->id)) {
            $data->scan_options->id = intval($this->config->config['discovery_default_scan_option']);
        }
        if (isset($data->scan_options->ping)) {
            if ($data->scan_options->ping !== 'y' && $data->scan_options->ping !== 'n') {
                $data->scan_options->ping = '';
            }
        } else {
            $data->scan_options->ping = '';
        }
        if (isset($data->scan_options->service_version)) {
            if ($data->scan_options->service_version !== 'y' && $data->scan_options->service_version !== 'n') {
                $data->scan_options->service_version = '';
            }
        } else {
            $data->scan_options->service_version = '';
        }
        if (isset($data->scan_options->{'open|filtered'})) {
            if ($data->scan_options->{'open|filtered'} !== 'y' && $data->scan_options->{'open|filtered'} !== 'n') {
                $data->scan_options->{'open|filtered'} = '';
            }
        } else {
            $data->scan_options->{'open|filtered'} = '';
        }
        if (isset($data->scan_options->filtered)) {
            if ($data->scan_options->filtered !== 'y' && $data->scan_options->filtered !== 'n') {
                $data->scan_options->filtered = '';
            }
        } else {
            $data->scan_options->filtered = '';
        }
        if (isset($data->scan_options->timeout)) {
            if (is_int($data->scan_options->timeout) OR is_numeric($data->scan_options->timeout)) {
                $data->scan_options->timeout = intval($data->scan_options->timeout);
            } else {
                $data->scan_options->timeout = '';
            }
        } else {
            $data->scan_options->timeout = '';
        }
        if (isset($data->scan_options->timing)) {
            if (is_int($data->scan_options->timing) OR is_numeric($data->scan_options->timing)) {
                $data->scan_options->timing = intval($data->scan_options->timing);
            } else {
                $data->scan_options->timing = '';
            }
        } else {
            $data->scan_options->timing = '';
        }
        if (isset($data->scan_options->nmap_tcp_ports)) {
            if (is_int($data->scan_options->nmap_tcp_ports) OR is_numeric($data->scan_options->nmap_tcp_ports)) {
                $data->scan_options->nmap_tcp_ports = intval($data->scan_options->nmap_tcp_ports);
            } else {
                $data->scan_options->nmap_tcp_ports = '';
            }
        } else {
            $data->scan_options->nmap_tcp_ports = '';
        }
        if (isset($data->scan_options->nmap_udp_ports)) {
            if (is_int($data->scan_options->nmap_udp_ports) OR is_numeric($data->scan_options->nmap_udp_ports)) {
                $data->scan_options->nmap_udp_ports = intval($data->scan_options->nmap_udp_ports);
            } else {
                $data->scan_options->nmap_udp_ports = '';
            }
        } else {
            $data->scan_options->nmap_udp_ports = '';
        }
        if (isset($data->scan_options->tcp_ports)) {
            if ( ! preg_match('/^[\d,\/,-]*$/', $data->scan_options->tcp_ports)) {
                $data->scan_options->tcp_ports = '';
            }
        } else {
            $data->scan_options->tcp_ports = '';
        }
        if (isset($data->scan_options->udp_ports)) {
            if ( ! preg_match('/^[\d,\/,-]*$/', $data->scan_options->udp_ports)) {
                $data->scan_options->udp_ports = '';
            }
        } else {
            $data->scan_options->udp_ports = '';
        }
        if (isset($data->scan_options->exclude_tcp_ports)) {
            if ( ! preg_match('/^[\d,\/,-]*$/', $data->scan_options->exclude_tcp_ports)) {
                $data->scan_options->exclude_tcp_ports = '';
            }
        } else {
            $data->scan_options->exclude_tcp_ports = '';
        }
        if (isset($data->scan_options->exclude_udp_ports)) {
            if ( ! preg_match('/^[\d,\/,-]*$/', $data->scan_options->exclude_udp_ports)) {
                $data->scan_options->exclude_udp_ports = '';
            }
        } else {
            $data->scan_options->exclude_udp_ports = '';
        }
        if (isset($data->scan_options->exclude_ip)) {
            if ( ! preg_match('/^[\d,\.,\/,-]*$/', $data->scan_options->exclude_ip)) {
                $data->scan_options->exclude_ip = '';
            }
        } else {
            $data->scan_options->exclude_ip = '';
        }
        if (isset($data->scan_options->ssh_ports)) {
            if ( ! preg_match('/^[\d,\/,-]*$/', $data->scan_options->ssh_ports)) {
                $data->scan_options->ssh_ports = '';
            }
        } else {
            $data->scan_options->ssh_ports = '';
        }
        if (isset($data->scan_options->script_timeout)) {
            if (is_int($data->scan_options->script_timeout) OR is_numeric($data->scan_options->script_timeout)) {
                $data->scan_options->script_timeout = intval($data->scan_options->script_timeout);
            } else {
                $data->scan_options->script_timeout = '';
            }
        } else {
            $data->scan_options->script_timeout = '';
        }
        if (isset($data->scan_options->snmp_timeout)) {
            if (is_int($data->scan_options->snmp_timeout) OR is_numeric($data->scan_options->snmp_timeout)) {
                $data->scan_options->snmp_timeout = intval($data->scan_options->snmp_timeout);
            } else {
                $data->scan_options->snmp_timeout = '';
            }
        } else {
            $data->scan_options->snmp_timeout = '';
        }
        if (isset($data->scan_options->ssh_timeout)) {
            if (is_int($data->scan_options->ssh_timeout) OR is_numeric($data->scan_options->ssh_timeout)) {
                $data->scan_options->ssh_timeout = intval($data->scan_options->ssh_timeout);
            } else {
                $data->scan_options->ssh_timeout = '';
            }
        } else {
            $data->scan_options->ssh_timeout = '';
        }
        if (isset($data->scan_options->wmi_timeout)) {
            if (is_int($data->scan_options->wmi_timeout) OR is_numeric($data->scan_options->wmi_timeout)) {
                $data->scan_options->wmi_timeout = intval($data->scan_options->wmi_timeout);
            } else {
                $data->scan_options->wmi_timeout = '';
            }
        } else {
            $data->scan_options->wmi_timeout = '';
        }

        if ( ! empty($data->type) && $data->type === 'subnet') {
            if (empty($data->subnet)) {
                log_error('ERR-0024', 'm_discoveries::create (discoveries)', 'Missing or invalid field: subnet');
                if ($CI->response->meta->format === 'screen') {
                    redirect('/discoveries');
                } else {
                    output($CI->response);
                    exit();
                }
            } else {
                $data->description = 'Subnet - ' . $data->subnet;
            }
        } elseif ( ! empty($data->type) && $data->type === 'active directory') {
            if (empty($data->ad_server) OR empty($data->ad_domain)) {
                $temp = 'Active Directory Domain';
                if (empty($data->ad_server)) {
                    $temp = 'Active Directory Server';
                }
                log_error('ERR-0024', 'm_discoveries::create (ad discoveries)');
                $this->session->set_flashdata('error', 'Object in discoveries could not be created - no ' . $temp . ' supplied.');
            } else {
                $data->description = 'Active Directory - ' . $data->ad_domain;
            }
        } elseif ( ! empty($data->type) && $data->type === 'seed') {
            if (empty($data->seed_ip)) {
                log_error('ERR-0024', 'm_discoveries::create (discoveries)', 'Missing or invalid field: seed_ip');
                if ($CI->response->meta->format === 'screen') {
                    redirect('/discoveries');
                } else {
                    output($CI->response);
                    exit();
                }
            }
            if (empty($data->seed_restrict_to_subnet)) {
                $data->seed_restrict_to_subnet = 'y';
            }
            if (empty($data->seed_restrict_to_private)) {
                $data->seed_restrict_to_private = 'y';
            }
        } else if ($data->type === 'cloud') {
            // TODO
        } else if (empty($data->type)) {
            log_error('ERR-0024', 'm_discoveries::create, no type supplied');
            $this->session->set_flashdata('error', 'Object in discoveries could not be created - no "type" supplied.');
        } else {
            $data->description = '';
        }
        $this->load->model('m_networks');
        $this->load->helper('network');
        $network_org = intval($data->org_id);
        if ( ! empty($data->devices_assigned_to_org)) {
            $network_org = intval($data->devices_assigned_to_org);
        }
        $network_location = 1;
        if ( ! empty($data->devices_assigned_to_location)) {
            $network_location = intval($data->devices_assigned_to_location);
        }
        if ($data->type === 'subnet' && ! empty($data->subnet) && stripos($data->subnet, '-') === false && filter_var($data->subnet, FILTER_VALIDATE_IP) !== false) {
            // We have a single IP - ie 192.168.1.1
            // TODO - we should pass the OrgID
            $data->description = 'IP - ' . $data->subnet;
            $test = $this->m_networks->check_ip($data->subnet);
            if ( ! $test) {
                // This IP is not in any existing subnets - insert a /30
                // TODO - account for Org ID in existing as check_ip returns only true/false, and does not acount for orgs
                $temp = network_details($data->subnet.'/30');
                $network = new stdClass();
                $network->name = $temp->network.'/'.$temp->network_slash;
                $network->network = $temp->network.'/'.$temp->network_slash;
                $network->org_id = $network_org;
                $network->location_id = $network_location;
                $network->description = $data->name;
                $this->m_networks->upsert($network);
            }
        }

        if ($data->type === 'subnet' && ! empty($data->subnet) && stripos($data->subnet, '-') === false && strpos($data->subnet, '/') !== false) {
            // We have a regular subnet - ie 192.168.1.0/24
            $temp = network_details($data->subnet);
            if ( ! empty($temp->error)) {
                $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be created - invalid subnet attribute supplied.');
                log_error('ERR-0010', 'm_discoveries::create (networks) invalid subnet supplied');
                return;
            }
            $network = new stdClass();
            $network->name = $temp->network.'/'.$temp->network_slash;
            $network->network = $temp->network.'/'.$temp->network_slash;
            $network->org_id = $network_org;
            $network->location_id = $network_location;
            $network->description = $data->name;
            $this->m_networks->upsert($network);
        }

        if ($data->type === 'subnet' && stripos($data->subnet, '-') !== false) {
            // We have a range and cannot insert a network
            $warning = 'IP range, instead of subnet supplied. No network entry created.';
            if ($this->config->config['blessed_subnets_use'] !== 'n') {
                $warning .= '<br />Because you are using blessed subnets, please ensure a valid network for this range exists.';
            }
            $this->session->set_flashdata('warning', $warning);
        }
        $data->scan_options = json_encode($data->scan_options);
        $data->match_options = json_encode($data->match_options);

        if ($id = $this->insert_collection('discoveries', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    /**
     * Read an individual item from the database, by ID and populate scan_options and match_options with upstream defaults
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read_for_discovery($id = 0)
    {
        $this->log->function = strtolower(__METHOD__);
        $CI = & get_instance();
        $id = intval($id);
        $sql = 'SELECT * FROM discoveries WHERE id = ? LIMIT 1';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (empty($result)) {
            return false;
        }
        if (empty($result[0]->scan_options)) {
            $result[0]->scan_options = new stdClass();
        }
        if (is_string($result[0]->scan_options)) {
            $result[0]->scan_options = json_decode($result[0]->scan_options);
        }
        if (empty($result[0]->match_options)) {
            $result[0]->match_options = new stdClass();
        }
        if (is_string($result[0]->match_options)) {
            $result[0]->match_options = json_decode($result[0]->match_options);
        }
        if ( ! isset($result[0]->scan_options->id) OR ! is_numeric($result[0]->scan_options->id)) {
            if ( ! empty($this->config->config['discovery_default_scan_option'])) {
                $result[0]->scan_options->id = intval($this->config->config['discovery_default_scan_option']);
            } else {
                $result[0]->scan_options->id = 1;
            }
        }
        $sql = "SELECT * FROM discovery_scan_options WHERE id = ?";
        $data = array($result[0]->scan_options->id);
        $options = $this->run_sql($sql, $data);
        $discovery_scan_options = $options[0];
        unset($discovery_scan_options->id);
        unset($discovery_scan_options->name);
        unset($discovery_scan_options->org_id);
        unset($discovery_scan_options->description);
        unset($discovery_scan_options->options);
        unset($discovery_scan_options->edited_by);
        unset($discovery_scan_options->edited_date);
        if (empty($discovery_scan_options->command_options)) {
            $discovery_scan_options->command_options = new stdClass();
        }
        if (is_string($discovery_scan_options->command_options)) {
            $discovery_scan_options->command_options = json_decode($discovery_scan_options->command_options);
        }
        unset($discovery_scan_options->command_options);
        foreach ($discovery_scan_options as $key => $value) {
            if (empty($result[0]->scan_options->{$key}) && isset($discovery_scan_options->{$key})) {
                $result[0]->scan_options->{$key} = $discovery_scan_options->{$key};
            }
        }

        if (empty($result[0]->match_options)) {
            $result[0]->match_options = '{}';
        }
        if (is_string($result[0]->match_options)) {
            $result[0]->match_options =json_decode($result[0]->match_options);
        }
        foreach ($CI->config->config as $key => $value) {
            if (strpos($key, 'match_') !== false) {
                if (empty($result[0]->match_options->{$key}) && ! empty($CI->config->config->{$key})) {
                    $result[0]->match_options->{$key} = $CI->config->config->{$key};
                }
            }
        }
        if ( ! empty($CI->config->config['discovery_ip_exclude'])) {
            // Account for users adding multiple spaces which would be converted to multiple comma's.
            $exclude_ip = preg_replace('!\s+!', ' ', $CI->config->config['discovery_ip_exclude']);
            // Convert spaces to comma's
            $exclude_ip = str_replace(' ', ',', $exclude_ip);
            if ( ! empty($result[0]->scan_options->exclude_ip)) {
                $result[0]->scan_options->exclude_ip .= ',' . $exclude_ip;
            } else {
                $result[0]->scan_options->exclude_ip = $exclude_ip;
            }
        }
        // Ensure we only have valid characters of digit, dot, slash, dash and comma in attribute
        if ( ! preg_match('/^[\d,\.,\/,\-,\,]*$/', $result[0]->scan_options->exclude_ip)) {
            $result[0]->scan_options->exclude_ip = '';
        }

        if ($result[0]->status === 'failed') {
            $sql = "SELECT * FROM `discovery_log` WHERE `id` IN (SELECT MAX(`id`) FROM `discovery_log` WHERE `ip` NOT IN (SELECT DISTINCT(`ip`) FROM discovery_log WHERE (`command_status` = 'device complete' OR `message` LIKE 'IP % not responding, ignoring.' OR `ip` = '127.0.0.1') AND discovery_id = " . $id . ') AND discovery_id = ' . $id . ' GROUP BY `ip`) AND discovery_id = ' . $id;
            $last_logs = $this->run_sql($sql);
            $result[0]->last_logs_for_failed_devices = $last_logs;
        }
        $result = $this->format_data($result, 'discoveries');
        return ($result);
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = 0)
    {
        $this->log->function = strtolower(__METHOD__);
        $CI = & get_instance();
        if (empty($id)) {
            $id = intval($CI->response->meta->id);
        }
        $this->load->helper('discoveries');
        discovery_check_finished($id);
        $sql = 'SELECT * FROM discoveries WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (empty($result)) {
            return false;
        }
        if (empty($result[0]->scan_options)) {
            $result[0]->scan_options = new stdClass();
        }
        if (is_string($result[0]->scan_options)) {
            $result[0]->scan_options = json_decode($result[0]->scan_options);
        }
        if (empty($result[0]->match_options)) {
            $result[0]->match_options = new stdClass();
        }
        if (is_string($result[0]->match_options)) {
            $result[0]->match_options = json_decode($result[0]->match_options);
        }
        if ( ! isset($result[0]->scan_options->id) OR ! is_numeric($result[0]->scan_options->id)) {
            if ( ! empty($this->config->config['discovery_default_scan_option'])) {
                $result[0]->scan_options->id = intval($this->config->config['discovery_default_scan_option']);
            } else {
                $result[0]->scan_options->id = 1;
            }
        }
        if (empty($result[0]->match_options)) {
            $result[0]->match_options = '{}';
        }

        if ($result[0]->status === 'failed') {
            $sql = "SELECT * FROM `discovery_log` WHERE `id` IN (SELECT MAX(`id`) FROM `discovery_log` WHERE `ip` NOT IN (SELECT DISTINCT(`ip`) FROM discovery_log WHERE (`command_status` = 'device complete' OR `message` LIKE 'IP % not responding, ignoring.' OR `ip` = '127.0.0.1') AND discovery_id = " . $id . ') AND discovery_id = ' . $id . ' GROUP BY `ip`) AND discovery_id = ' . $id;
            $last_logs = $this->run_sql($sql);
            $result[0]->last_logs_for_failed_devices = $last_logs;
        }
        $result = $this->format_data($result, 'discoveries');
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $data = array($id);
        $sql = 'DELETE FROM `discovery_log` WHERE discovery_id = ?';
        $this->run_sql($sql, $data);
        $sql = 'DELETE FROM `discoveries` WHERE `id` = ?';
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM discoveries WHERE org_id IN (' . implode(',', $org_list) . ')';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        $this->load->helper('discoveries');
        $sql = "SELECT id FROM discoveries WHERE status != 'complete'";
        $query = $CI->db->query($sql);
        $result = $this->run_sql($sql, array());
        foreach ($result as $discovery) {
            discovery_check_finished(intval($discovery->id));
        }
        if ( ! empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT * FROM discoveries WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            for ($i=0; $i < count($result); $i++) {
                if ( ! empty($result[$i]->other)) {
                    $result[$i]->other = json_decode($result[$i]->other);
                    foreach ($result[$i]->other as $key => $value) {
                        $result[$i]->{'other.'.$key} = $value;
                    }
                }
            }
            $result = $this->format_data($result, 'discoveries');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM discoveries LEFT JOIN orgs ON (discoveries.org_id = orgs.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            if ( ! empty($result) && is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    if ( ! empty($result[$i]->other)) {
                        $result[$i]->other = json_decode($result[$i]->other);
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'discoveries');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     *
     * @param  int $id The ID of the requested item
     * @return array The array of logs assigned to this discovery
     */
    public function read_sub_resource($id = 0)
    {
        $sql = 'SELECT * FROM discovery_log WHERE discovery_id = ? ORDER BY `id`';
        $result = $this->run_sql($sql, array(intval($id)));
        $result = $this->format_data($result, 'discovery_log');
        return ($result);
    }

    /**
     * [queue description]
     * @param  int $id The ID of the discovery to start
     * @return bool True on success, false on failure
     */
    public function queue($id = 0)
    {
        $item = $this->m_discoveries->read($id);
        $discovery = $item[0];
        if (empty($discovery)) {
            return false;
        }
        $sql = '/* m_discoveries::queue */ ' . 'DELETE from discovery_log WHERE discovery_id = ?';
        $data = array($id);
        $this->db->query($sql, $data);
        $sql = '/* m_discoveries::queue */ ' . "UPDATE `discoveries` SET `status` = 'running', `ip_all_count` = 0, `ip_responding_count` = 0, `ip_scanned_count` = 0, `ip_discovered_count` = 0, `ip_audited_count` = 0, `last_run` = NOW(), `last_finished` = DATE_ADD(NOW(), interval 1 second) WHERE id = ?";
        $data = array($id);
        $this->db->query($sql, $data);
        $this->load->model('m_queue');
        $queue_item = new stdClass();
        $queue_item->name = $discovery->attributes->name;
        $queue_item->org_id = $discovery->attributes->org_id;
        $queue_item->discovery_id = $id;
        $temp = $this->m_queue->create($discovery->attributes->type, $queue_item);
        if ( ! empty($temp)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Take a discovery ID and optionally a device ID
     * Return an array of credentials in the order of device specific, device previously worked, discovery associated
     * IE: discovery.org_id (and children) = orgs.id = credentials.org_id
     * @param  [type] $system_id    system.id
     * @param  [type] $discovery_id discoveries.id
     * @param  [type] $ip_address   The IP of the device in question (for logging)
     * @return [type]               [description]
     */
    public function get_device_discovery_credentials($system_id = 0, $discovery_id = 0, $ip_address = '')
    {
        $CI =& get_instance();
        $CI->load->model('m_credentials');
        $CI->load->library('encrypt');
        $credentials = array();
        if (empty($discovery_id)) {
            return $credentials;
        }
        $retrieved_types = array();
        // set up a log object
        $log = new stdClass();
        $log->discovery_id = $discovery_id;
        $log->file = 'm_device';
        $log->function = 'get_device_discovery_credentials';
        $log->ip = $ip_address;
        $log->message = 'Credentials retrieved for: ';
        $log->pid = getmypid();
        $log->severity = 7;
        $log->command_status = 'notice';
        $log->system_id = $system_id;
        $log->timestamp = null;
        // Get the discovery details
        $sql = '/* m_device::get_device_discovery_credentials */ ' . 'SELECT * FROM discoveries WHERE id = ?';
        $data = array($discovery_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        $org_id = 1;
        if ( ! empty($result[0]->org_id)) {
            $org_id = intval($result[0]->org_id);
        }
        // Device specific credentials
        $sql = '/* m_device::get_device_discovery_credentials */ ' . 'SELECT * FROM `credential` WHERE `system_id` = ?';
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        if ( ! empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
            }
            $credentials = $result;
            $retrieved_types[] = 'Device specific';
        }
        // Previous working credentials
        $sql = '/* m_device::get_device_discovery_credentials */ ' . 'SELECT `credentials` FROM `system` WHERE id = ?';
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();
        // $result[0]->credentials is a string. A JSON encoded array of integers referring to credentials.id
        if ( ! empty($result[0]->credentials)) {
            $temp = @json_decode($result[0]->credentials);
            if ( ! empty($temp)) {
                $id_list = implode(', ', $temp);
                $sql = '/* m_device::get_device_discovery_credentials */ ' . "SELECT credentials.*, 'credentials' AS `foreign` FROM `credentials` WHERE id IN (" . $id_list . ')';
                $query = $this->db->query($sql);
                $result = $query->result();
                if ( ! empty($result)) {
                    for ($i=0; $i < count($result); $i++) {
                        $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
                    }
                }
                $credentials = array_merge($credentials, $result);
            }
            $retrieved_types[] = 'Device previously working';
        }
        unset($temp);

        // Discovery associated credentials
        // get our Orgs List
        $temp = $CI->m_orgs->get_children($org_id);
        $temp[] = $org_id;
        $org_list = implode(', ', $temp);
        unset($temp);
        // And now get any credentials
        $sql = '/* m_device::get_device_discovery_credentials */ ' . "SELECT credentials.*, 'credentials' AS `foreign` FROM `credentials` WHERE `org_id` IN (" . $org_list . ')';
        $query = $this->db->query($sql);
        $result = $query->result();
        if ( ! empty($result)) {
            for ($i=0; $i < count($result); $i++) {
                $result[$i]->credentials = json_decode(simpleDecrypt($result[$i]->credentials));
            }
            $credentials = array_merge($credentials, $result);
            $retrieved_types[] = 'Discovery related';
        }
        if (count($credentials) === 0) {
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

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'discoveries';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields($collection);
        $dictionary->attributes->create = mandatory_fields($collection);
        $dictionary->attributes->update = update_fields($collection);
        $dictionary->sentence = 'Open-AudIT Enterprise discovers every device on your network.';
        $dictionary->marketing = '<p>Discoveries are at the very heart of what Open-AudIT does. How else would you know "What is on my network?"<br /><br />Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.<br /><br />Use Open-AudIT Professional and Enterprise to schedule your Discoveries to run automatically whenever you like.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Discoveries are at the very heart of what Open-AudIT does.<br /><br />How else would you know "What is on my network?"<br /><br />Discoveries are preprepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';
        $dictionary->notes = '<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br /><br /><b>NOTE</b> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br /><br />If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.</p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->type = "Currently supported types are 'subnet' and 'active directory'.";
        $dictionary->columns->devices_assigned_to_org = "Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the 'org_id' of this discovery. Links to <code>orgs.id</code>.";
        $dictionary->columns->devices_assigned_to_location = 'Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.';
        $dictionary->columns->network_address = 'The URL the audit_* scripts should submit their result to.';
        $dictionary->columns->last_run = 'A calculated field that is updated each time the discovery has been executed.';
        $dictionary->columns->complete = 'A internal field that indicates if the discovery has completed.';
        # $dictionary->columns->other = 'A JSON document containing the required attributes depending on the <code>discoveries.type</code>.';
        $dictionary->columns->scan_options = 'A JSON document containing the required attributes overriding the chosen discovery_scan_options.';
        $dictionary->columns->match_options = 'A JSON document containing the required attributes overriding the default device match options.';
        $dictionary->columns->subnet = 'The network subnet to execute the discovery on.';
        $dictionary->columns->ad_server = 'The Active Directory server to retrieve a list of subnets from.';
        $dictionary->columns->ad_domain = 'The Active Directory domain to retrieve a list of subnets from.';
        $dictionary->columns->system_id = 'Used internally when discovering a single device. Links to <code>system.id</code>.';
        $dictionary->columns->device_count = 'The number of devices found by this discovery.';
        $dictionary->columns->limit = 'The number of devices to limit this discovery to.';
        $dictionary->columns->discard = 'Used internally when discovering a single device.';
        $dictionary->columns->seed_ip = 'The IP of the device to start a seed discovery with.';
        $dictionary->columns->seed_restrict_to_subnet = 'For a seed discovery, should I only discover IPs on the chosen subnet.';
        $dictionary->columns->seed_restrict_to_private = 'For a seed discovery, should I only discover IPs in the private IP address space.';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;

        $dictionary->columns->match_dbus = 'Should we match a device based on its dbus id.';
        $dictionary->columns->match_fqdn = 'Should we match a device based on its fqdn.';
        $dictionary->columns->match_dns_fqdn = 'Should we match a device based on its DNS fqdn.';
        $dictionary->columns->match_dns_hostname = 'Should we match a device based on its DNS hostname.';
        $dictionary->columns->match_hostname = 'Should we match a device based only on its hostname.';
        $dictionary->columns->match_hostname_dbus = 'Should we match a device based on its hostname and dbus id.';
        $dictionary->columns->match_hostname_serial = 'Should we match a device based on its hostname and serial.';
        $dictionary->columns->match_hostname_uuid = 'Should we match a device based on its hostname and UUID.';
        $dictionary->columns->match_ip = 'Should we match a device based on its ip.';
        $dictionary->columns->match_ip_no_data = 'Should we match a device based on its ip if we have an existing device with no data.';
        $dictionary->columns->match_mac = 'Should we match a device based on its mac address.';
        $dictionary->columns->match_mac_vmware = 'Should we match a device based mac address even if its a known likely duplicate from VMware.';
        $dictionary->columns->match_serial = 'Should we match a device based on its serial number.';
        $dictionary->columns->match_serial_type = 'Should we match a device based on its serial and type.';
        $dictionary->columns->match_sysname = 'Should we match a device based only on its SNMP sysName.';
        $dictionary->columns->match_sysname_serial = 'Should we match a device based only on its SNMP sysName and serial.';
        $dictionary->columns->match_uuid = 'Should we match a device based on its UUID.';
        return $dictionary;
    }
}
// End of file m_discoveries.php
// Location: ./models/m_discoveries.php
