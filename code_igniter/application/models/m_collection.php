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
* @version   GIT: Open-AudIT_3.5.2
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
            $all_options = array('ping', 'service_version', 'open|filtered', 'filtered', 'timeout', 'timing', 'nmap_tcp_ports', 'nmap_udp_ports', 'tcp_ports', 'udp_ports', 'exclude_tcp_ports', 'exclude_udp_ports', 'exclude_ip', 'ssh_ports');

            $query = $this->db->query('SELECT * FROM discoveries WHERE id = ?', array($data->id));
            $result = $query->result();
            $db_discovery = $result[0];
            $other = json_decode($db_discovery->other);

            if ( ! empty($data->other)) {
                $received_other = new stdClass();
                foreach ($data->other as $key => $value) {
                        $received_other->$key = $value;
                }

                if ( ! empty($received_other->subnet) && ! preg_match('/^[\d,\.,\/,-]*$/', $received_other->subnet)) {
                    log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for subnet');
                    $this->session->set_flashdata('error', 'Discovery could not be updated - invalid Subnet supplied.');
                    $data->other->subnet = '';
                    if ($CI->response->meta->format === 'screen') {
                        redirect('/discoveries');
                    } else {
                        output($CI->response);
                        exit();
                    }
                }

                $discovery_scan_options = '';
                if (isset($received_other->nmap->discovery_scan_option_id)) {
                    if ( ! is_numeric($received_other->nmap->discovery_scan_option_id) && $received_other->nmap->discovery_scan_option_id !== '') {
                        log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for discovery_scan_option_id (non-numeric)');
                        $this->session->set_flashdata('error', 'Discovery could not be updated - invalid discovery_scan_option_id (non-numeric) supplied.');
                        $data->other->subnet = '';
                        if ($CI->response->meta->format === 'screen') {
                            redirect('/discoveries');
                        } else {
                            output($CI->response);
                            exit();
                        }
                    } else {
                        if ((string)$received_other->nmap->discovery_scan_option_id !== '' && intval($received_other->nmap->discovery_scan_option_id) !== 0) {
                            $select = 'SELECT * FROM discovery_scan_options WHERE id = ?';
                            $data_array = array(intval($received_other->nmap->discovery_scan_option_id));
                            $query = $this->db->query($select, $data_array);
                            $result = $query->result();
                            if (empty($result)) {
                                log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for discovery_scan_option_id (invalid value)');
                                $this->session->set_flashdata('error', 'Discovery could not be updated - invalid discovery_scan_option_id (invalid value) supplied.');
                                if ($CI->response->meta->format === 'screen') {
                                    redirect('/discoveries');
                                } else {
                                    output($CI->response);
                                    exit();
                                }
                            } else {
                                $discovery_scan_options = $result[0];
                            }
                        }
                    }
                }

                // If any of the below are changed, we're not using a default
                if ( ! empty($received_other->nmap->ping)) {
                    if ($received_other->nmap->ping === 'y' OR $received_other->nmap->ping === 'n') {
                        $received_other->nmap->discovery_scan_option_id = '0';
                    } else {
                        $received_other->nmap->ping = '';
                    }
                }
                if ( ! empty($received_other->nmap->service_version)) {
                    if ($received_other->nmap->service_version === 'y' OR $received_other->nmap->service_version === 'n') {
                        $received_other->nmap->discovery_scan_option_id = '0';
                    } else {
                        $received_other->nmap->service_version = '';
                    }
                }
                if ( ! empty($received_other->nmap->{'open|filtered'})) {
                    if ($received_other->nmap->{'open|filtered'} === 'y' OR $received_other->nmap->{'open|filtered'} === 'n') {
                        $received_other->nmap->discovery_scan_option_id = '0';
                    } else {
                        $received_other->nmap->{'open|filtered'} = '';
                    }
                }
                if ( ! empty($received_other->nmap->filtered)) {
                    if ($received_other->nmap->filtered === 'y' OR $received_other->nmap->filtered === 'n') {
                        $received_other->nmap->discovery_scan_option_id = '0';
                    } else {
                        $received_other->nmap->filtered = '';
                    }
                }
                if ( ! empty($received_other->nmap->timeout)) {
                    $received_other->nmap->timeout = intval($received_other->nmap->timeout);
                    $received_other->nmap->discovery_scan_option_id = '0';
                }
                if ( ! empty($received_other->nmap->timing)) {
                    $received_other->nmap->timing = intval($received_other->nmap->timing);
                    $received_other->nmap->discovery_scan_option_id = '0';
                }
                if ( ! empty($received_other->nmap->nmap_tcp_ports)) {
                    $received_other->nmap->discovery_scan_option_id = '0';
                    $received_other->nmap->nmap_tcp_ports = intval($received_other->nmap->nmap_tcp_ports);
                }
                if ( ! empty($received_other->nmap->nmap_udp_ports)) {
                    $received_other->nmap->discovery_scan_option_id = '0';
                    $received_other->nmap->nmap_udp_ports = intval($received_other->nmap->nmap_udp_ports);
                }

                if ( ! empty($received_other->nmap->tcp_ports)) {
                    if ( ! preg_match('/^[\d,\/,\/-]*$/', $received_other->nmap->tcp_ports)) {
                        // Invalid TCP ports
                        log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for tcp_ports');
                        $this->session->set_flashdata('error', 'Discovery could not be updated - invalid tcp_ports supplied.');
                        $data->other->nmap->tcp_ports = '';
                        if ($CI->response->meta->format === 'screen') {
                            redirect('/discoveries');
                        } else {
                            output($CI->response);
                            exit();
                        }
                    } else {
                        // Valid TCP ports
                        $received_other->nmap->discovery_scan_option_id = '0';
                    }
                }

                if ( ! empty($received_other->nmap->udp_ports)) {
                    if ( ! preg_match('/^[\d,\/,\/-]*$/', $received_other->nmap->udp_ports)) {
                        // Invalid UDP ports
                        log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for udp_ports');
                        $this->session->set_flashdata('error', 'Discovery could not be updated - invalid udp_ports supplied.');
                        $data->other->nmap->udp_ports = '';
                        if ($CI->response->meta->format === 'screen') {
                            redirect('/discoveries');
                        } else {
                            output($CI->response);
                            exit();
                        }
                    } else {
                        // Valid UDP ports
                        $received_other->nmap->discovery_scan_option_id = '0';
                    }
                }

                if ( ! empty($received_other->nmap->exclude_tcp_ports)) {
                    if ( ! preg_match('/^[\d,\/,\/-]*$/', $received_other->nmap->exclude_tcp_ports)) {
                        // Invalid Exclude TCP ports
                        log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for exclude_tcp_ports');
                        $this->session->set_flashdata('error', 'Discovery could not be updated - invalid exclude_tcp_ports supplied.');
                        $data->other->nmap->exclude_tcp_ports = '';
                        if ($CI->response->meta->format === 'screen') {
                            redirect('/discoveries');
                        } else {
                            output($CI->response);
                            exit();
                        }
                    } else {
                        // Valid Exclude TCP ports
                    }
                }

                if ( ! empty($received_other->nmap->exclude_udp_ports)) {
                    if ( ! preg_match('/^[\d,\/,\/-]*$/', $received_other->nmap->exclude_udp_ports)) {
                        // Invalid Exclude UDP ports
                        log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for exclude_udp_ports');
                        $this->session->set_flashdata('error', 'Discovery could not be updated - invalid exclude_udp_ports supplied.');
                        $data->other->nmap->exclude_udp_ports = '';
                        if ($CI->response->meta->format === 'screen') {
                            redirect('/discoveries');
                        } else {
                            output($CI->response);
                            exit();
                        }
                    } else {
                        // Valid Exclude UDP ports
                    }
                }

                if ( ! empty($received_other->nmap->exclude_ip)) {
                    $received_other->nmap->exclude_ip = str_replace(' ', ',', $received_other->nmap->exclude_ip);
                    if ( ! preg_match('/^[\d,\.,\/,\-,\,]*$/', $received_other->nmap->exclude_ip)) {
                        // Invalid Exclude IP
                        log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for exclude_ip');
                        $this->session->set_flashdata('error', 'Discovery could not be updated - invalid exclude_ip supplied.');
                        $data->other->nmap->exclude_ip = '';
                        if ($CI->response->meta->format === 'screen') {
                            redirect('/discoveries');
                        } else {
                            output($CI->response);
                            exit();
                        }
                    } else {
                        // Valid Exclude IP
                    }
                }

                if ( ! empty($received_other->nmap->ssh_ports)) {
                    $received_other->nmap->ssh_ports = str_replace(' ', ',', $received_other->nmap->ssh_ports);
                    if ( ! preg_match('/^[\d,\/,-]*$/', $received_other->nmap->ssh_ports)) {
                        // Invalid SSH Ports
                        log_error('ERR-0024', 'm_collection::update (discoveries)', 'Invalid field data supplied for ssh_ports');
                        $this->session->set_flashdata('error', 'Discovery could not be updated - invalid ssh_ports supplied.');
                        $data->other->nmap->exclude_ip = '';
                        if ($CI->response->meta->format === 'screen') {
                            redirect('/discoveries');
                            return false;
                        } else {
                            output($CI->response);
                            exit();
                            return false;
                        }
                    } else {
                        // Valid SSH Ports
                    }
                }

                // top level - subnet, ad_domain, ad_server
                if ( ! empty($received_other->subnet)) {
                    $other->subnet = $received_other->subnet;
                    $data->description = 'Subnet - ' . $received_other->subnet;
                    if (stripos($received_other->subnet, '-') === false && stripos($received_other->subnet, ',') === false) {
                        $this->load->helper('network');
                        $temp = network_details($received_other->subnet);
                        if ( ! empty($temp->error) && filter_var($received_other->subnet, FILTER_VALIDATE_IP) === false) {
                            $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' could not be updated - invalid subnet attribute supplied.');
                            log_error('ERR-0010', 'm_collections::update (invalid subnet supplied)');
                            return;
                        }
                    }
                }
                if ( ! empty($received_other->ad_domain)) {
                    $other->ad_domain = $received_other->ad_domain;
                    $data->description = 'Active Directory - ' . $received_other->ad_domain;
                }

                if ( ! empty($received_other->ad_server)) {
                    $other->ad_server = $received_other->ad_server;
                }

                if (empty($other->nmap) OR count((array)$other->nmap) === 0) {
                    $other->nmap = new stdClass();
                }

                if ( ! empty($received_other->nmap)) {
                    foreach ($received_other->nmap as $key => $value) {
                        $other->nmap->{$key} = $value;
                    }
                }

                if (empty($other->match) OR count((array)$other->match) === 0) {
                    $other->match = new stdClass();
                }

                if ( ! empty($received_other->match)) {
                    foreach ($received_other->match as $key => $value) {
                        $other->match->{$key} = $received_other->match->{$key};
                    }
                }

                if ( ! empty($discovery_scan_options)) {
                    // We have set a discovery options - reset all
                    foreach ($all_options as $field) {
                        $other->nmap->{$field} = $discovery_scan_options->{$field};
                    }
                }

                unset($data->other);
                $data->other = (string)json_encode($other);
            }
            if ( ! empty($data->killed)) {
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

        if ($collection === 'integrations' && ! empty($data->options)) {
            $select = "/* m_collection::update */ " . "SELECT * FROM integrations WHERE id = ?";
            $query = $this->db->query($select, array($data->id));
            $result = $query->result();
            $existing = new stdClass();
            if ( ! empty($result[0]->options)) {
                $original = json_decode($result[0]->options);
            }
            $submitted = $data->options;
            $merged = $this->deep_merge($original, $submitted);
            $data->options = (string)json_encode($merged);
        }

        if ($collection === 'ldap_servers') {
            if ( ! empty($data->dn_password)) {
                $data->dn_password = (string)simpleEncrypt($data->dn_password);
            }
        }

        if ($collection === 'queries') {
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

        if ($collection === 'scripts') {
            $options = $CI->options;
            if ( ! empty($data->options)) {
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
                    if ( ! empty($values)) {
                        $value_array = explode(',', $values);
                        if ( ! in_array($value, $value_array)) {
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
                        if ( ! preg_match('/^[\d{4},\-,\d{2},\-,\d{2}]+$/', $value)) {
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
                        if ( ! empty($value)) {
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
                        if ( ! empty($value)) {
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
                        if ( ! preg_match('/^[\w,\.]+$/', $value)) {
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
                        if ( ! empty($value)) {
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
                        if ( ! preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
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
                        if ( ! preg_match('/^[\w]+$/', $value)) {
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
                        if ( ! preg_match('/^[\w]+$/', $value)) {
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
                if ( ! empty($result[0]->options)) {
                    $existing = json_decode($result[0]->options);
                }
                foreach ($data->options as $key => $value) {
                    $existing->$key = $value;
                }
                $data->options = (string)json_encode($existing);
            }
        }

        if ($collection === 'tasks') {
            if ( ! empty($data->options)) {
                $received = new stdClass();
                if (gettype($data->options) === 'object' OR gettype($data->options) === 'array') {
                    foreach ($data->options as $key => $value) {
                            $received->$key = $value;
                    }
                }
                $existing = new stdClass();
                if ( ! empty($data->id)) {
                    $select = 'SELECT * FROM tasks WHERE id = ?';
                    $query = $this->db->query($select, array($data->id));
                    $result = $query->result();
                    if ( ! empty($result[0]->options)) {
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
            if ( ! empty($data->{'minute[]'}) && is_array($data->{'minute[]'})) {
                $data->minute = implode(',', $data->{'minute[]'});
                unset($data->{'minute[]'});
            }
            if ( ! empty($data->{'hour[]'}) && is_array($data->{'hour[]'})) {
                $data->hour = implode(',', $data->{'hour[]'});
                unset($data->{'hour[]'});
            }
            if ( ! empty($data->{'day_of_month[]'}) && is_array($data->{'day_of_month[]'})) {
                $data->day_of_month = implode(',', $data->{'day_of_month[]'});
                unset($data->{'day_of_month[]'});
            }
            if ( ! empty($data->{'month[]'}) && is_array($data->{'month[]'})) {
                $data->month = implode(',', $data->{'month[]'});
                unset($data->{'month[]'});
            }
            if ( ! empty($data->{'day_of_week[]'}) && is_array($data->{'day_of_week[]'})) {
                $data->day_of_week = implode(',', $data->{'day_of_week[]'});
                unset($data->{'day_of_week[]'});
            }
        }

        if ($collection === 'users') {
            if ( ! empty($data->password)) {
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
