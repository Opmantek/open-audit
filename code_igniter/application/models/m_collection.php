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
* @package   Collection
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.1
* @link      http://www.open-audit.org
*/

/**
* Base Model Collection
*
* @access   public
* @category Model
* @package  Collection
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_collection extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('log');
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
        $this->load->library('encrypt');
    }

    public function reset($collection = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->summary = 'start';
        stdlog($this->log);

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::collection (no collection)');
            $this->log->summary = 'finish';
            stdlog($this->log);
            return false;
        }

        $temp_debug = $this->db->db_debug;
        $this->db->db_debug = false;

        $sql = "SELECT count(*) AS `count` FROM `{$collection}`";
        $query = $this->db->query($sql);
        $result = @$query->result();
        if ($this->db->_error_message()) {
            $this->log->severity = 3;
            $this->log->status = 'fail';
            $this->log->summary = 'Query fail';
            $db_error = @$this->db->_error_message();
            $error = '';
            if ( ! empty($db_error)) {
                $error = 'Error: ' . $db_error . ', ';
            }
            $this->log->detail = $error . 'Query: ' . $this->db->last_query();
            stdlog($this->log);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ')'), $db_error);
            $this->db->db_debug = $temp_debug;
            $this->log->summary = 'finish';
            stdlog($this->log);
            return false;
        }

        $count = intval($result[0]->count);
        if ($count !== 0) {
            $this->log->severity = 3;
            $this->log->status = 'fail';
            $this->log->summary = 'Table not empty';
            $this->log->detail = 'Cannot run reset on ' . $collection . ' as the table still has data.';
            stdlog($this->log);
            $this->db->db_debug = $temp_debug;

            $this->log->severity = 7;
            $this->log->status = '';
            $this->log->detail = '';
            $this->log->summary = 'finish';
            stdlog($this->log);
            return false;
        }

        $sql = "ALTER TABLE `{$collection}` AUTO_INCREMENT = 1";
        $query = $this->db->query($sql);
        if ($this->db->_error_message()) {
            $this->log->severity = 3;
            $this->log->status = 'failure';
            $this->log->summary = $this->db->last_query();
            $this->log->detail = 'Query fail - ' . @$this->db->_error_message();
            stdlog($this->log);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ')'), $db_error);
            $this->db->db_debug = $temp_debug;
            return false;
        }

        $sql = "OPTIMIZE TABLE `{$collection}`";
        $query = $this->db->query($sql);
        if ($this->db->_error_message()) {
            $this->log->severity = 3;
            $this->log->status = 'failure';
            $this->log->summary = $this->db->last_query();
            $this->log->detail = 'Query fail - ' . @$this->db->_error_message();
            stdlog($this->log);
            log_error('ERR-0009', strtolower(@$caller['class'] . '::' . @$caller['function'] . ')'), $db_error);
            $this->db->db_debug = $temp_debug;
            return false;
        }

        $this->db->db_debug = $temp_debug;
        $this->log->severity = 7;
        $this->log->detail = $collection . ' table has been reset successfully';
        stdlog($this->log);
        return true;
    }

    public function collection_total($collection)
    {
        $CI = & get_instance();

        if (empty($collection)) {
            $collection = @$CI->response->meta->collection;
        }
        if (empty($collection)) {
            log_error('ERR-0010', 'm_collection::collection_total No collection received.');
            return false;
        }

        if ($collection === 'devices') {
            $collection = 'system';
        }

        $total = 0;

        if ($collection !== 'database') {
            if ($collection === 'orgs') {
                // Orgs don't have an org_id, they have an id
                $sql = "SELECT COUNT(*) as `count` FROM `{$collection}` WHERE id IN ({$CI->user->org_list})";
            } else if ($collection === 'logs') {
                // logs are special as we have 2x different types
                $type = 'system';
                if ( ! empty($CI->response->meta->filter)) {
                    foreach ($CI->response->meta->filter as $filter) {
                        if ($filter->name === 'logs.type') {
                            $type = $filter->value;
                        }
                    }
                }
                if ($type !== 'system' && $type !== 'access') {
                    $type = 'system';
                }
                $sql = "SELECT count(*) AS `count` FROM `logs` WHERE `logs`.`type` = '" . $type . "'";
            } else if ($this->db->field_exists('org_id', $collection)) {
                // Anything else with an org_id
                $sql = "SELECT COUNT(*) as `count` FROM `{$collection}` WHERE org_id IN ({$CI->user->org_list})";
            } else {
                // Anythng left that has no org_id
                $sql = "SELECT COUNT(*) as `count` FROM `{$collection}`";
            }
            $sql = $this->clean_sql($sql);
            $query = $this->db->query($sql);
            $result = $query->result();
            if ( ! empty($result[0]->count)) {
                $total = intval($result[0]->count);
            }
        } else {
            $tables = $this->db->list_tables();
            $total = intval(count($tables));
        }
        return $total;
    }

    /**
     * [update description]
     * @param  [type] $data       [description]
     * @param  string $collection [description]
     * @return [type]             [description]
     */
    public function update($data = null, $collection = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'updating data';
        stdlog($this->log);
        $CI = & get_instance();

        if (is_null($data)) {
            if ( ! empty($CI->response->meta->received_data->attributes)) {
                $data = $CI->response->meta->received_data->attributes;
                $data->id = $CI->response->meta->id;
                $collection = $CI->response->meta->collection;
            } else {
                log_error('ERR-0010', 'm_collection::update');
                return false;
            }
        }

        if ($collection === '') {
            log_error('ERR-0010', 'm_collection::update');
            return false;
        } else {
            $db_table = $collection;
        }

        if ($collection === 'attributes') {
            if ( ! empty($data->type)) {
                $data->type = str_replace('<', '', $data->type);
                $data->type = str_replace("'", '', $data->type);
                $data->type = str_replace('"', '', $data->type);
            }
            if ( ! empty($data->name)) {
                $data->name = str_replace('<', '', $data->name);
                $data->name = str_replace("'", '', $data->name);
                $data->name = str_replace('"', '', $data->name);
            }
            if ( ! empty($data->value)) {
                $data->value = str_replace('<', '', $data->value);
                $data->value = str_replace("'", '', $data->value);
                $data->value = str_replace('"', '', $data->value);
            }
        }

        if ($collection === 'baselines_policies') {
            if ( ! empty($data->tests)) {
                $sql = 'SELECT * FROM baselines_policies WHERE `id` = ?';
                $query = $this->db->query($sql, array($data->id));
                $result = $query->result();
                $existing_policy = $result[0];
                $existing_tests = json_decode($existing_policy->tests);

                if ($existing_policy->table === 'netstat') {
                    $attributes = array('protocol', 'program', 'port');
                    foreach ($attributes as $attribute) {
                        if (isset($data->tests->{$attribute})) {
                            for ($i=0; $i < count($existing_tests); $i++) {
                                if ($existing_tests[$i]->column === $attribute) {
                                    $existing_tests[$i]->value = $data->tests->{$attribute};
                                }
                            }
                        }
                    }
                }

                if ($existing_policy->table === 'software') {
                    $this->load->helper('software_version');
                    if (isset($data->tests->name)) {
                        for ($i=0; $i < count($existing_tests); $i++) {
                            if ($existing_tests[$i]->column === 'name') {
                                $existing_tests[$i]->value = $data->tests->name;
                            }
                        }
                    }
                    if (isset($data->tests->operator)) {
                        for ($i=0; $i < count($existing_tests); $i++) {
                            if ($existing_tests[$i]->column === 'version') {
                                $existing_tests[$i]->operator = $data->tests->operator;
                            }
                        }
                        for ($i=0; $i < count($existing_tests); $i++) {
                            if ($existing_tests[$i]->column === 'version_padded') {
                                $existing_tests[$i]->operator = $data->tests->operator;
                            }
                        }
                    }
                    if (isset($data->tests->version)) {
                        for ($i=0; $i < count($existing_tests); $i++) {
                            if ($existing_tests[$i]->column === 'version') {
                                $existing_tests[$i]->value = $data->tests->version;
                            }
                        }
                        for ($i=0; $i < count($existing_tests); $i++) {
                            if ($existing_tests[$i]->column === 'version_padded') {
                                $existing_tests[$i]->value = version_padded($data->tests->version);
                            }
                        }
                    }
                }

                if ($existing_policy->table === 'user') {
                    $attributes = array('name', 'status', 'type', 'password_expires', 'password_changeable', 'password_required');
                    foreach ($attributes as $attribute) {
                        if (isset($data->tests->{$attribute})) {
                            for ($i=0; $i < count($existing_tests); $i++) {
                                if ($existing_tests[$i]->column === $attribute) {
                                    $existing_tests[$i]->value = $data->tests->{$attribute};
                                }
                            }
                        }
                    }
                }
                $data->tests = json_encode($existing_tests);
            }
        }

        if ($collection === 'credentials') {
            if ( ! empty($data->credentials)) {
                $received_credentials = new stdClass();
                foreach ($data->credentials as $key => $value) {
                        $received_credentials->$key = $value;
                }
                $select = 'SELECT * FROM credentials WHERE id = ?';
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                $existing_credentials = json_decode(simpleDecrypt($result[0]->credentials));
                $new_credentials = new stdClass();
                if ( ! empty($existing_credentials)) {
                    foreach ($existing_credentials as $existing_key => $existing_value) {
                        if (isset($received_credentials->$existing_key)) {
                            $new_credentials->$existing_key = $received_credentials->$existing_key;
                        } else {
                            $new_credentials->$existing_key = $existing_credentials->$existing_key;
                        }
                    }
                }
                $data->credentials = (string)simpleEncrypt(json_encode($new_credentials));
            }
        }

        if ($collection === 'dashboards') {
            if ( ! empty($data->options)) {
                $select = 'SELECT * FROM dashboards WHERE id = ?';
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                $existing = new stdClass();
                if ( ! empty($result[0]->options)) {
                    $existing = json_decode($result[0]->options);
                }
                if ( ! empty($data->options->layout)) {
                    $existing->layout = $data->options->layout;
                }
                if ( ! empty($data->options->widgets->position)) {
                    foreach ($data->options->widgets->position as $key => $value) {
                        $widget_position = $key;
                        $widget_id = $value;
                    }
                }
                foreach ($existing->widgets as $widget) {
                    if (intval($widget->position) === intval($widget_position)) {
                        $widget->widget_id = $widget_id;
                    }
                }
                $data->options = (string)json_encode($existing);
            }
        }

        if ($collection === 'discoveries') {

            if ( ! empty($data->subnet)) {
                if ( ! preg_match('/^[\d,\.,\/,-]*$/', $data->subnet)) {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for subnet');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid Subnet supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $data->description = 'Subnet - ' . $data->subnet;
                }
            }

            if (isset($data->ad_domain)) {
                $data->description = 'Active Directory - ' . $data->ad_domain;
            }

            if (isset($data->ad_server)) {
                if (filter_var($data->ad_server, FILTER_VALIDATE_IP) === false && $data->ad_server !== '') {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid ad_server supplied (should be an IP Address).');
                    log_error('ERR-0010', 'm_collections::update (invalid ad_server supplied)');
                    output($CI->response);
                    exit();
                }
            }

            if (isset($data->seed_ip)) {
                if (filter_var($data->seed_ip, FILTER_VALIDATE_IP) === false && $data->seed_ip !== '') {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid seed_ip supplied (should be an IP Address).');
                    log_error('ERR-0010', 'm_collections::update (invalid seed_ip supplied)');
                    output($CI->response);
                    exit();
                }
            }

            if (isset($data->seed_restrict_to_subnet)) {
                if ($data->seed_restrict_to_subnet !== 'y' && $data->seed_restrict_to_subnet !== 'n' && $data->seed_restrict_to_subnet !== '') {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid seed_restrict_to_subnet supplied (should be y or n).');
                    log_error('ERR-0010', 'm_collections::update (invalid seed_restrict_to_subnet supplied)');
                    output($CI->response);
                    exit();
                }
            }

            if (isset($data->seed_restrict_to_private)) {
                if ($data->seed_restrict_to_private !== 'y' && $data->seed_restrict_to_private !== 'n' && $data->seed_restrict_to_private !== '') {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid seed_restrict_to_private supplied (should be y or n).');
                    log_error('ERR-0010', 'm_collections::update (invalid seed_restrict_to_private supplied)');
                    output($CI->response);
                    exit();
                }
            }

            if (isset($data->devices_assigned_to_org)) {
                if ( ! is_int($data->devices_assigned_to_org) && ! is_numeric($data->devices_assigned_to_org) && $data->devices_assigned_to_org !== '') {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid devices_assigned_to_org supplied.');
                    log_error('ERR-0010', 'm_collections::update (invalid devices_assigned_to_org supplied)');
                    output($CI->response);
                    exit();
                } else {
                    if ( ! empty($data->devices_assigned_to_org)) {
                        $data->devices_assigned_to_org = intval($data->devices_assigned_to_org);
                    }
                }
            }

            if (isset($data->devices_assigned_to_location)) {
                if ( ! is_int($data->devices_assigned_to_location) && ! is_numeric($data->devices_assigned_to_location) && $data->devices_assigned_to_location !== '') {
                    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid devices_assigned_to_location supplied.');
                    log_error('ERR-0010', 'm_collections::update (invalid devices_assigned_to_location supplied)');
                    output($CI->response);
                    exit();
                } else {
                    if ( ! empty($data->devices_assigned_to_location)) {
                        $data->devices_assigned_to_location = intval($data->devices_assigned_to_location);
                    }
                }
            }

            $db_scan_options = new stdClass();
            $query = $this->db->query('SELECT * FROM discoveries WHERE id = ?', array($data->id));
            $result = $query->result();
            $db_discovery = $result[0];
            if (empty($db_discovery->scan_options)) {
                $db_discovery->scan_options = new stdClass();
            }
            if (is_string($db_discovery->scan_options)) {
                $db_scan_options = json_decode($db_discovery->scan_options);
            }
            if (empty($db_discovery->match_options)) {
                $db_discovery->match_options = new stdClass();
            }
            if (is_string($db_discovery->match_options)) {
                $db_match_options = json_decode($db_discovery->match_options);
            }

            if (isset($data->scan_options->id)) {
                if (isset($data->scan_options->id) && $data->scan_options->id !== '' && ! is_numeric($data->scan_options->id)) {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for scan_options::id (non-numeric)');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid scan_options::id (non-numeric) supplied.');
                    output($CI->response);
                    exit();
                } else {
                    if ( ! empty($data->scan_options->id)) {
                        $select = "SELECT id FROM discovery_scan_options";
                        $query = $this->db->query($select);
                        $result = $query->result();
                        $ids = array();
                        foreach ($result as $item) {
                            $ids[] = $item->id;
                        }
                        if ( ! in_array($data->scan_options->id, $ids)) {
                            log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid ID supplied for scan_options::id (non-numeric)');
                            $this->session->set_flashdata('error', 'Discovery could not be updated - invalid scan_options::id (does not exist) supplied.');
                            output($CI->response);
                            exit();
                        } else {
                            $db_scan_options->id = intval($data->scan_options->id);
                        }
                    } else {
                        $db_scan_options->id = 0;
                    }
                }
            }

            $all_options = array('exclude_ip', 'exclude_tcp_ports', 'exclude_udp_ports', 'filtered', 'nmap_tcp_ports', 'nmap_udp_ports', 'open|filtered', 'ping', 'script_timeout', 'service_version', 'snmp_timeout', 'ssh_ports', 'ssh_timeout', 'tcp_ports', 'timeout', 'timing', 'udp_ports', 'wmi_timeout');

            if (isset($data->scan_options->ping)) {
                if ($data->scan_options->ping !== 'y' && $data->scan_options->ping !== 'n' && $data->scan_options->ping !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid ping value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid ping value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->ping = $data->scan_options->ping;
                }
            }
            if (isset($data->scan_options->service_version)) {
                if ($data->scan_options->service_version !== 'y' && $data->scan_options->service_version !== 'n' && $data->scan_options->service_version !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid service_version value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid service_version value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->service_version = $data->scan_options->service_version;
                }
            }
            if (isset($data->scan_options->{'open|filtered'})) {
                if ($data->scan_options->{'open|filtered'} !== 'y' && $data->scan_options->{'open|filtered'} !== 'n' && $data->scan_options->{'open|filtered'} !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid open|filtered value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid open|filtered value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->{'open|filtered'} = $data->scan_options->{'open|filtered'};
                }
            }
            if (isset($data->scan_options->filtered)) {
                if ($data->scan_options->filtered !== 'y' && $data->scan_options->filtered !== 'n' && $data->scan_options->filtered !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid filtered value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid filtered value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->filtered = $data->scan_options->filtered;
                }
            }
            if (isset($data->scan_options->timeout)) {
                if (! is_int($data->scan_options->timeout) && ! is_numeric($data->scan_options->timeout) && $data->scan_options->timeout !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid timeout value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid timeout value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->timeout = intval($db_scan_options->timeout);
                    $db_scan_options->timeout = $data->scan_options->timeout;
                }
            }
            if (isset($data->scan_options->timing)) {
                if (! is_int($data->scan_options->timing) && ! is_numeric($data->scan_options->timing) && $data->scan_options->timing !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid timing value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid timing value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->timing = intval($db_scan_options->timing);
                    $db_scan_options->timing = $data->scan_options->timing;
                }
            }
            if (isset($data->scan_options->nmap_tcp_ports)) {
                if (! is_int($data->scan_options->nmap_tcp_ports) && ! is_numeric($data->scan_options->nmap_tcp_ports) && $data->scan_options->nmap_tcp_ports !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid nmap_tcp_ports value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid nmap_tcp_ports value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->nmap_tcp_ports = intval($db_scan_options->nmap_tcp_ports);
                    $db_scan_options->nmap_tcp_ports = $data->scan_options->nmap_tcp_ports;
                }
            }
            if (isset($data->scan_options->nmap_udp_ports)) {
                if (! is_int($data->scan_options->nmap_udp_ports) && ! is_numeric($data->scan_options->nmap_udp_ports) && $data->scan_options->nmap_udp_ports !== '') {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid nmap_udp_ports value supplied');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid nmap_udp_ports value supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->nmap_udp_ports = intval($db_scan_options->nmap_udp_ports);
                    $db_scan_options->nmap_udp_ports = $data->scan_options->nmap_udp_ports;
                }
            }
            if (isset($data->scan_options->tcp_ports)) {
                if (! preg_match('/^[\d,\/,\/-]*$/', $data->scan_options->tcp_ports)) {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for tcp_ports');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid tcp_ports supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->tcp_ports = $data->scan_options->tcp_ports;
                }
            }
            if (isset($data->scan_options->udp_ports)) {
                if (! preg_match('/^[\d,\/,\/-]*$/', $data->scan_options->udp_ports)) {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for udp_ports');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid udp_ports supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->udp_ports = $data->scan_options->udp_ports;
                }
            }
            if (isset($data->scan_options->exclude_tcp_ports)) {
                if (! preg_match('/^[\d,\/,\/-]*$/', $data->scan_options->exclude_tcp_ports)) {
                    // Invalid Exclude TCP ports
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for exclude_tcp_ports');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid exclude_tcp_ports supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->exclude_tcp_ports = $data->scan_options->exclude_tcp_ports;
                }
            }
            if (isset($data->scan_options->exclude_udp_ports)) {
                if (! preg_match('/^[\d,\/,\/-]*$/', $data->scan_options->exclude_udp_ports)) {
                    // Invalid Exclude TCP ports
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for exclude_udp_ports');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid exclude_udp_ports supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->exclude_udp_ports = $data->scan_options->exclude_udp_ports;
                }
            }
            if (isset($data->scan_options->exclude_ip)) {
                $data->scan_options->exclude_ip = str_replace(' ', ',', $data->scan_options->exclude_ip);
                if (! preg_match('/^[\d,\.,\/,\-,\,]*$/', $data->scan_options->exclude_ip)) {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for exclude_ip');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid exclude_ip supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->exclude_ip = $data->scan_options->exclude_ip;
                }
            }
            if (isset($data->scan_options->ssh_ports)) {
                $data->scan_options->ssh_ports = str_replace(' ', ',', $data->scan_options->ssh_ports);
                if (! preg_match('/^[\d,\/,-]*$/', $data->scan_options->ssh_ports)) {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for ssh_ports');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid ssh_ports supplied.');
                    output($CI->response);
                    exit();
                } else {
                    $db_scan_options->ssh_ports = $data->scan_options->ssh_ports;
                }
            }

            if (! empty($data->match_options)) {
                $all_options = array('match_dbus', 'match_dns_fqdn', 'match_dns_hostname', 'match_fqdn', 'match_hostname', 'match_hostname_dbus', 'match_hostname_serial', 'match_hostname_uuid', 'match_ip', 'match_ip_no_data', 'match_mac', 'match_mac_vmware', 'match_serial', 'match_serial_type', 'match_sysname', 'match_sysname_serial', 'match_uuid');
                foreach ($all_options as $option) {
                    if (isset($data->match_options->{$option})) {
                        if ($data->match_options->{$option} !== 'y' && $data->match_options->{$option} !== 'n' && $data->match_options->{$option} !== '') {
                            log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid match value supplied');
                            $this->session->set_flashdata('error', 'Discovery could not be updated - invalid match value supplied.');
                            output($CI->response);
                            exit();
                        } else {
                            $db_match_options->{$option} = $data->match_options->{$option};
                        }
                    }
                }
                foreach ($all_options as $option) {
                    if (! isset($db_match_options->{$option})) {
                        $db_match_options->{$option} = '';
                    }
                }
                $data->match_options = json_encode($db_match_options);
            }

            if (! empty($data->scan_options)) {
                // If we were given any attributes, they should now be incorporated into db_scan_options.
                $data->scan_options = json_encode($db_scan_options);
            }

            if (! empty($data->killed)) {
                unset($data->killed);
                $log = new stdClass();
                $log->discovery_id = $data->id;
                $log->system_id = null;
                $log->timestamp = $this->config->config['timestamp'];
                $log->severity = 6;
                $log->function = 'logs';
                $log->command_status = 'logs';
                $log->pid = getmypid();
                $log->message = 'Discovery process has been manually stopped.';
                discovery_log($log);
            }
        }

        if ($collection === 'files') {
            $data->path = str_replace("'", '', $data->path);
            $data->path = str_replace('"', '', $data->path);
            $data->path = str_replace(';', '', $data->path);
            $data->path = str_replace("\n", '', $data->path);
        }

        if ($collection === 'groups') {
            if (! empty($data->sql)) {
                if (stripos($data->sql, 'update ') !== false or stripos($data->sql, 'update`') !== false) {
                        log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain UPDATE clause');
                        return false;
                }
                if (stripos($data->sql, 'delete from ') !== false or stripos($data->sql, 'delete from`') !== false) {
                        log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain DELETE clause.');
                        return false;
                }
                if (stripos($data->sql, 'insert into ') !== false or stripos($data->sql, 'insert into`') !== false) {
                    log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain INSERT clause.');
                    return false;
                }
            }
        }

        if ($collection === 'integrations' && ! empty($data->attributes)) {
            $select = "/* m_collection::update */ " . "SELECT * FROM integrations WHERE id = ?";
            $query = $this->db->query($select, array($data->id));
            $result = $query->result();
            $existing = new stdClass();
            if (! empty($result[0]->attributes)) {
                $original = @json_decode($result[0]->attributes);
            }
            $submitted = $data->attributes;
            $merged = $this->deep_merge($original, $submitted);
            $data->attributes = (string)json_encode($merged);
        }

        if ($collection === 'integrations' && ! empty($data->fields)) {
            $select = "/* m_collection::update */ " . "SELECT * FROM integrations WHERE id = ?";
            $query = $this->db->query($select, array($data->id));
            $result = $query->result();
            // TODO - Unsure why an errors array is in here
            unset($data->fields->errors);
            $fields = @json_decode($result[0]->fields);
            $newfield = new stdClass();
            foreach ($data->fields as $key => $value) {
                $newfield->{$key} = $value;
            }
            $data->fields = $fields;
            array_push($data->fields, $newfield);
            $data->fields = json_encode($data->fields);
        }

        if ($collection === 'integrations' && ! empty($data->discovery_run)) {
            $select = "/* m_collection::update */ " . "SELECT * FROM integrations WHERE id = ?";
            $query = $this->db->query($select, array($data->id));
            $result = $query->result();
            if ($data->discovery_run === 'n') {
                // Delete any existing discovery
                if (! empty($result[0]->discovery_id)) {
                    $select = "DELETE FROM discoveries WHERE id = " . @intval($result[0]->discovery_id);
                    $query = $this->db->query($select);
                    $select = "DELETE FROM discovery_log WHERE discovery_id = " . @intval($result[0]->discovery_id);
                    $query = $this->db->query($select);
                }
                $data->discovery_id = null;
            } else {
                // Make a new discovery
                $CI->load->model('m_discoveries');
                $discovery = new stdClass();
                $discovery->type = 'integration';
                $discovery->name = 'Discovery for ' . $result[0]->name . ' integration';
                $discovery->network_address = 'http://127.0.0.1/open-audit/index.php/input/discoveries';
                $discovery->org_id = $result[0]->org_id;
                $discovery->discard = 'n';
                $discovery->complete = 'n';
                $discovery->subnet = '';
                $data->discovery_id = @intval($CI->m_discoveries->create($discovery));
            }
        }

        if ($collection === 'ldap_servers') {
            if (! empty($data->dn_password)) {
                $data->dn_password = (string)simpleEncrypt($data->dn_password);
            }
        }

        if ($collection === 'queries') {
            if (! empty($data->sql)) {
                if (stripos($data->sql, 'update ') !== false or stripos($data->sql, 'update`') !== false) {
                        log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain UPDATE clause');
                        return false;
                }
                if (stripos($data->sql, 'delete from ') !== false or stripos($data->sql, 'delete from`') !== false) {
                        log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain DELETE clause.');
                        return false;
                }
                if (stripos($data->sql, 'insert into ') !== false or stripos($data->sql, 'insert into`') !== false) {
                    log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain INSERT clause.');
                    return false;
                }
            }
        }

        if ($collection === 'scripts') {
            $options = $CI->options;
            if (! empty($data->options)) {
                if (is_string($data->options)) {
                    $data->options = json_decode($data->options);
                }

                // Validate options
                foreach ($data->options as $name => $value) {
                    $value = str_replace("'", '', $value);
                    $value = str_replace('"', '', $value);
                    $value = str_replace(';', '', $value);
                    $value = str_replace("\n", '', $value);
                    $values = $options[$name]->values;
                    if (! empty($values)) {
                        $value_array = explode(',', $values);
                        if (! in_array($value, $value_array)) {
                            $value = '';
                            log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                            if ($CI->response->meta->format === 'screen') {
                                redirect('/scripts');
                            } else {
                                output($CI->response);
                                exit();
                            }
                        }
                    }
                    if ($name === 'ldap') {
                        // text - should not be set
                        unset($data->options->{$name});
                    }
                    if ($name === 'ldap_seen_date') {
                        // date
                        if (! preg_match('/^[\d{4},\-,\d{2},\-,\d{2}]+$/', $value)) {
                            unset($data->options->{$name});
                            log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                            if ($CI->response->meta->format === 'screen') {
                                redirect('/scripts');
                            } else {
                                output($CI->response);
                                exit();
                            }
                        }
                    }
                    if ($name === 'ldap_seen_days') {
                        // number
                        if (! empty($value)) {
                            $data->options->{$name} = intval($value);
                            // Check if we have set it to 0 and if so, remove it
                            if (empty($data->options->{$name})) {
                                $data->options->{$name} = '';
                                log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                                if ($CI->response->meta->format === 'screen') {
                                    redirect('/scripts');
                                } else {
                                    output($CI->response);
                                    exit();
                                }
                            }
                        }
                    }
                    if ($name === 'org_id') {
                        // number
                        if (! empty($value)) {
                            $data->options->{$name} = intval($value);
                            // Check if we have set it to 0 and if so, remove it
                            if (empty($data->options->{$name})) {
                                $data->options->{$name} = '';
                                log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                                if ($CI->response->meta->format === 'screen') {
                                    redirect('/scripts');
                                } else {
                                    output($CI->response);
                                    exit();
                                }
                            }
                        }
                    }
                    if ($name === 'strcomputer') {
                        // text
                        if (! preg_match('/^[\w,\.]+$/', $value)) {
                            unset($data->options->{$name});
                            log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                            if ($CI->response->meta->format === 'screen') {
                                redirect('/scripts');
                            } else {
                                output($CI->response);
                                exit();
                            }
                        }
                    }
                    if ($name === 'strpass') {
                        // text - virtually any, except quotes
                    }
                    if ($name === 'system_id') {
                        // number
                        if (! empty($value)) {
                            $data->options->{$name} = intval($value);
                            // Check if we have set it to 0 and if so, remove it
                            if (empty($data->options->{$name})) {
                                $data->options->{$name} = '';
                                log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                                if ($CI->response->meta->format === 'screen') {
                                    redirect('/scripts');
                                } else {
                                    output($CI->response);
                                    exit();
                                }
                            }
                        }
                    }
                    if ($name === 'url') {
                        // url
                        if (! preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
                            unset($data->options->{$name});
                            log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                            if ($CI->response->meta->format === 'screen') {
                                redirect('/scripts');
                            } else {
                                output($CI->response);
                                exit();
                            }
                        }
                    }
                    if ($name === 'windows_user_work_1') {
                        // text
                        if (! preg_match('/^[\w]+$/', $value)) {
                            unset($data->options->{$name});
                            log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                            if ($CI->response->meta->format === 'screen') {
                                redirect('/scripts');
                            } else {
                                output($CI->response);
                                exit();
                            }
                        }
                    }
                    if ($name === 'windows_user_work_2') {
                        // text
                        if (! preg_match('/^[\w]+$/', $value)) {
                            unset($data->options->{$name});
                            log_error('ERR-0024', 'm_collection::update (scripts)', 'Invalid value supplied for ' . $name . '.');
                            if ($CI->response->meta->format === 'screen') {
                                redirect('/scripts');
                            } else {
                                output($CI->response);
                                exit();
                            }
                        }
                    }
                }
                $select = 'SELECT * FROM scripts WHERE id = ?';
                $query = $this->db->query($select, array($data->id));
                $result = $query->result();
                $existing = new stdClass();
                if (! empty($result[0]->options)) {
                    $existing = json_decode($result[0]->options);
                }
                foreach ($data->options as $key => $value) {
                    $existing->$key = $value;
                }
                $data->options = (string)json_encode($existing);
            }
        }

        if ($collection === 'tasks') {
            if (! empty($data->options)) {
                $received = new stdClass();
                if (gettype($data->options) === 'object' or gettype($data->options) === 'array') {
                    foreach ($data->options as $key => $value) {
                            $received->$key = $value;
                    }
                }
                $existing = new stdClass();
                if (! empty($data->id)) {
                    $select = 'SELECT * FROM tasks WHERE id = ?';
                    $query = $this->db->query($select, array($data->id));
                    $result = $query->result();
                    if (! empty($result[0]->options)) {
                        $existing = json_decode($result[0]->options);
                    }
                }
                $new = new stdClass();
                foreach ($existing as $existing_key => $existing_value) {
                    if (isset($received->$existing_key)) {
                        $new->$existing_key = $received->$existing_key;
                    } else {
                        $new->$existing_key = $existing->$existing_key;
                    }
                }
                $data->options = (string)json_encode($new);
            }
            if (! empty($data->{'minute[]'}) && is_array($data->{'minute[]'})) {
                $data->minute = implode(',', $data->{'minute[]'});
                unset($data->{'minute[]'});
            }
            if (! empty($data->{'hour[]'}) && is_array($data->{'hour[]'})) {
                $data->hour = implode(',', $data->{'hour[]'});
                unset($data->{'hour[]'});
            }
            if (! empty($data->{'day_of_month[]'}) && is_array($data->{'day_of_month[]'})) {
                $data->day_of_month = implode(',', $data->{'day_of_month[]'});
                unset($data->{'day_of_month[]'});
            }
            if (! empty($data->{'month[]'}) && is_array($data->{'month[]'})) {
                $data->month = implode(',', $data->{'month[]'});
                unset($data->{'month[]'});
            }
            if (! empty($data->{'day_of_week[]'}) && is_array($data->{'day_of_week[]'})) {
                $data->day_of_week = implode(',', $data->{'day_of_week[]'});
                unset($data->{'day_of_week[]'});
            }
        }

        if ($collection === 'users') {
            if (! empty($data->password)) {
                set_include_path($CI->config->config['base_path'] . '/code_igniter/application/third_party/random_compat');
                require_once 'lib/random.php';
                $salt = bin2hex(random_bytes(32));
                $data->password = $salt.hash('sha256', $salt.(string)$data->password);
                unset($salt);
            }
        }

        if ($collection === 'widgets') {
            if ( ! empty($data->sql)) {
                if (stripos($data->sql, 'update ') !== false OR stripos($data->sql, 'update`') !== false) {
                        log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain UPDATE clause');
                        return false;
                }
                if (stripos($data->sql, 'delete from ') !== false OR stripos($data->sql, 'delete from`') !== false) {
                        log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain DELETE clause.');
                        return false;
                }
                if (stripos($data->sql, 'insert into ') !== false OR stripos($data->sql, 'insert into`') !== false) {
                    log_error('ERR-0045', 'm_collection::update', 'SQL cannot contain INSERT clause.');
                    return false;
                }
            }
        }

        $update_fields = update_fields($collection);
        $sql = '';
        $items = array();
        foreach ($data as $key => $value) {
            if (in_array($key, $update_fields)) {
                if ($sql === '') {
                    $sql = "SET `" . $key . "` = ?";
                    $items[] = $value;
                } else {
                    $sql .= ", `" . $key . "` = ?";
                    $items[] = $value;
                }
            }
        }
        if ($this->db->field_exists('edited_by', $db_table)) {
            $sql .= ", `edited_by` = '" . $CI->user->full_name . "'";
        }
        if ($this->db->field_exists('edited_date', $db_table)) {
            $sql .= ", `edited_date` = NOW()";
        }
        $sql = "UPDATE `" . $db_table . "` " . $sql . " WHERE id = " . intval($data->id);
        $test = $this->run_sql($sql, $items);
        return $test;
    }
}
