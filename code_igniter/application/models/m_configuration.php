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
* @package   Configuration
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
*/

/**
* Base Model Configuration
*
* @access   public
* @category Model
* @package  Configuration
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_configuration extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Create an individual entry in the DB
     *
     * @return null
     */
    public function create()
    {
        // NOT IMPLEMENTED
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  string $id The ID or name of the requested item
     * @return array The array of requested items
     */
    public function read($id = '')
    {
        $CI = & get_instance();
        // We accept either an integer ID or a string NAME
        if ( ! empty($id) && ! is_integer($id)) {
            $sql = 'SELECT id FROM configuration WHERE name = ?';
            $data = array($id);
            $result = $this->run_sql($sql, array());
            if ( ! empty($result[0]->id)) {
                $id = $result[0]->id;
            } else {
                $id = '';
            }
        }
        // We might just use the response->meta->id
        if (empty($id) && ! empty($CI->response->meta->collection) && $CI->response->meta->collection === 'configuration') {
            $id = $CI->response->meta->id;
        }
        // We might also use the received data
        if (empty($id) && ! empty($CI->response->meta->collection) && $CI->response->meta->collection === 'configuration' && ! empty($CI->response->meta->received_data->attributes->name)) {
            $sql = 'SELECT id FROM configuration WHERE name = ?';
            $data = array($CI->response->meta->received_data->attributes->name);
            $result = $this->run_sql($sql, array());
            if ( ! empty($result[0]->id)) {
                $id = $result[0]->id;
            }
        }
        // We have nothing to ID the particular config item
        if (empty($id)) {
            return;
        }
        $sql = 'SELECT * FROM configuration WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'configuration');
        return ($result);
    }

    /**
     * Update an individual item from the database, by ID
     *
     * @param  string $id        The ID or name of the requested item
     * @param  string $value     The value to be set in configuration.value
     * @param  string $edited_by Who edited this value
     * @return array The array of requested items
     */
    public function update($id = '', $value = '', $edited_by = '')
    {
        if ( ! empty($this->config->config['internal_version']) && $this->config->config['internal_version'] < 20160904) {
            return;
        }

        // We accept either an integer ID or a string NAME
        if ( ! empty($id)) {
            if ( ! is_int($id)) {
                $sql = 'SELECT * FROM `configuration` WHERE `name` = ?';
                $data = array((string)$id);
                $result = $this->run_sql($sql, $data);
                if ( ! empty($result)) {
                    $config_item = $result[0];
                    $id = @intval($config_item->id);
                }
            } else {
                $sql = 'SELECT * FROM `configuration` WHERE `id` = ?';
                $data = array($id);
                $result = $this->run_sql($sql, $data);
                if ( ! empty($result)) {
                    $config_item = $result[0];
                    $id = @intval($config_item->id);
                }
            }
        }

        if (empty($config_item)) {
            // We have nothing to ID the particular config item
            log_error('ERR-0044', 'm_configuration::update', 'Could not retrieve config_item for update (supplied: ' . $id . ').');
            return false;
        }

        if (empty($id)) {
            // We have nothing to ID the particular config item
            log_error('ERR-0044', 'm_configuration::update', 'No (or invalid) ID or NAME supplied to update');
            return false;
        }

        if (empty($edited_by)) {
            log_error('ERR-0044', 'm_configuration::update', 'No username supplied to update.');
            return false;
        }

        if ( ! empty($config_item->type) && $config_item->type === 'bool' && $value !== 'y' && $value !== 'n' && $value !== '') {
            // invalid
            log_error('ERR-0044', 'm_configuration::update', 'Value supplied must be either y or n. Supplied \'' . $value . '\'. ');
            return false;
        }

        if ( ! empty($config_item->type) && $config_item->type === 'number') {
            if ( ! is_numeric($value) && ! is_int($value) && $value !== '') {
                log_error('ERR-0044', 'm_configuration::update', 'Value supplied must be a number.');
                return false;
            } else {
                if ( ! $value !== '') {
                    $value = intval($value);
                }
            }
        }

        if ($config_item->name === 'discovery_ip_exclude' && ! preg_match('/^[\d,\.,\/,\-,\,\s]*$/', $value)) {
            // invalid
            log_error('ERR-0044', 'm_configuration::update', 'server_ip must be a valid IP address, range or subnet, separated by spaces or commas.');
            return false;
        }

        if ( ! empty($config_item->type) && $config_item->type === 'text' && $config_item->name !== 'modules' && $config_item->name !== 'servers') {
            if (strpos($value, '"') !== false OR strpos($value, "'") !== false) {
                // invalid
                log_error('ERR-0044', 'm_configuration::update', 'URL value contains disallowed characters (quotes).');
                return false;
            }
        }

        if ($config_item->name === 'modules' OR $config_item->name === 'servers') {
            if ($value !== '') {
                $test = @json_decode($value);
                if (empty($test)) {
                    // invalid
                    log_error('ERR-0044', 'm_configuration::update', 'modules should be valid JSON.');
                    return false;
                }
            }
        }

        if (strpos($config_item->name, 'url') !== false OR $config_item->name === 'default_network_address') {
            if (strpos($value, '"') !== false OR strpos($value, "'") !== false OR strpos($value, '<') !== false OR strpos($value, '>') !== false) {
                // invalid
                log_error('ERR-0044', 'm_configuration::update', 'URL value contains disallowed characters.');
                return false;
            }
        }

        if ($config_item->name === 'server_ip' && ! preg_match('/^[\d,\.]*$/', $value)) {
            // invalid
            log_error('ERR-0044', 'm_configuration::update', 'server_ip must be a valid IP address.');
            return false;
        }

        if ($config_item->name === 'oae_prompt' && ! preg_match('/^[\d,\-]*$/', $value)) {
            // invalid
            log_error('ERR-0044', 'm_configuration::update', 'oae_prompt should be a valid date of the form YYYY-MM-DD.');
            return false;
        }

        $sql = 'UPDATE configuration SET value = ?, edited_by = ?, edited_date = NOW() WHERE id = ?';
        $data = array((string)$value, (string)$edited_by, intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        // NOT IMPLEMENTED
        if ($id) {
            return true;
        }
        return false;
    }

    /**
     * Load the configuration
     *
     * @return null
     */
    public function load()
    {
        if ($this->db->table_exists('configuration')) {
            $sql = 'SELECT name, value FROM `configuration`';
            $result = $this->run_sql($sql, array());
        } else if ($this->db->table_exists('oa_config')) {
            $this->load->library('encrypt');
            $sql = 'SELECT config_name AS `name`, config_value AS `value` FROM `oa_config`';
            $result = $this->run_sql($sql, array());
        }

        $this->load->helper('url');

        // set all items to value or ''
        if ( ! empty($result)) {
            foreach ($result as $row) {
                //  make sure we have a default here
                if ( ! empty($row->name) && $row->name === 'page_size' && empty($row->value)) {
                    $row->value = 1000;
                }
                $temp_name = $row->name;
                if (empty($row->value)) {
                    $this->config->config[$temp_name] = '';
                } else {
                    $this->config->config[$temp_name] = $row->value;
                }
                unset($temp_name);
            }
        }

        // ensure we have a trailing slash
        if ( ! empty($this->config->config['discovery_linux_script_directory']) && substr($this->config->config['discovery_linux_script_directory'], -1) !== '/') {
            $this->config->config['discovery_linux_script_directory'] .= '/';
        }

        // set the used URLs
        $this->config->config['oa_web_index'] = site_url();
        $this->config->config['oa_web_folder'] = base_url();

        // set the timestamp
        if ($this->db->dbdriver === 'mysql' OR $this->db->dbdriver === 'mysqli') {
            $sql = 'SELECT NOW() as `timestamp`';
        } else if ($this->db->dbdriver === 'mssql') {
            $sql = 'SELECT CONVERT (smalldatetime, SYSDATETIME()) AS [timestamp]';
        }
        $result = $this->run_sql($sql, array());
        $this->config->config['timestamp'] = $result[0]->timestamp;
        $sql = "SELECT TIME_FORMAT(TIMEDIFF(NOW(),CONVERT_TZ(NOW(),@@session.time_zone,'+00:00')),'%H%i') AS `tz`";
        $result = $this->run_sql($sql, array());
        $this->config->config['timezone'] = $result[0]->tz;
        if ($this->config->config['timezone'] >= 0) {
            $this->config->config['timezone'] = 'UTC +' . $this->config->config['timezone'];
        } else {
            $this->config->config['timezone'] = 'UTC ' . $this->config->config['timezone'];
        }

        // get the server OS
        $this->config->config['server_os'] = php_uname('s');

        // get the total number of devices
        $sql = 'SELECT count(*) as device_count FROM `system`';
        $result = $this->run_sql($sql, array());
        $this->config->config['device_count'] = @intval($result[0]->device_count);

        if ((string) php_uname('s') === 'Windows NT') {
            $this->config->config['base_path'] = str_replace('\code_igniter\application\models\m_configuration.php', '', __FILE__);
        } else {
            $this->config->config['base_path'] = str_replace('/code_igniter/application/models/m_configuration.php', '', __FILE__);
        }

        $this->load->helper('network');
        $this->config->config['ip'] = server_ip();
        $this->config->config['is_ssl'] = is_ssl();

    }

    /**
     * Read the local subnet(s)
     * 
     * @return array The array of subnet(s)
     */
    public function read_subnet()
    {
        $this->load->helper('network');
        $ip_address_array = array();
        // osx
        if (php_uname('s') === 'Darwin') {
            $command = "ifconfig | grep inet | grep -v inet6 | grep broadcast | awk '{print $2}'";
            exec($command, $output, $return_var);
            if ($return_var === 0) {
                foreach ($output as $line) {
                    $ip_address_array[] = trim($line) . '/24';
                }
            }
        }
        // linux
        if (php_uname('s') === 'Linux') {
            $command = "ip addr | grep 'state ' -A2 | grep inet | awk '{print $2}'";
            exec($command, $output, $return_var);
            if ($return_var === 0) {
                foreach ($output as $line) {
                    $ip_address_array[] = trim($line);
                }
            }
        }
        // windows
        if (php_uname('s') === 'Windows NT') {
            $command = 'wmic nicconfig get ipaddress,ipsubnet | findstr /B {';
            exec($command, $output, $return_var);
            if ($return_var === 0) {
                // each line is returned thus: {"192.168.1.140", "fe80::e837:7bea:99a6:13e"} {"255.255.255.0"}
                // or thus {"192.168.1.146", "fe80::e9e2:5fe6:e05a:d393"}  {"255.255.255.0", "64"}
                // or thus {"192.168.1.140"} {"255.255.255.0"}
                // there are multiple empty lines as well
                foreach ($output as $line) {
                    $line = trim($line);
                    if ($line !== '') {
                        $line = str_replace(' ', '', $line);
                        $temp_line = explode('}{', $line);
                        $temp_ip = str_replace('{', '', $temp_line[0]);
                        $temp_ip_line = explode('"', $temp_ip);
                        $ip = $temp_ip_line[1];
                        $temp_sub = str_replace('}', '', $temp_line[1]);
                        $temp_sub_line = explode('"', $temp_sub);
                        $subnet = $temp_sub_line[1];
                        if (isset($ip) && isset($subnet)) {
                            $network = network_details($ip . ' ' . $subnet);
                            $ip_address_array[] = $network->network . '/' . $network->network_slash;
                        }
                        unset($line);
                        unset($temp_line);
                        unset($temp_ip);
                        unset($temp_ip_line);
                        unset($temp_sub);
                        unset($temp_sub_line);
                        unset($ip);
                        unset($subnet);
                    }
                }
            }
        }
        $this->load->helper('network');
        $networks = array();
        if (is_array($ip_address_array) && count($ip_address_array) > 0) {
            foreach ($ip_address_array as $network) {
                if ( ! empty($network)) {
                    $test = network_details($network);
                }
                if ( ! empty($test->network) && ! empty($test->network_slash)) {
                    $networks[] = $test->network . '/' . $test->network_slash;
                }
            }
        }
        return ($networks);
    }

    /**
     * Read the local Windows domain
     * 
     * @return string The domain
     */
    public function read_domain()
    {
        $result = '';
        if (php_uname('s') === 'Windows NT') {
            $command = 'wmic computersystem get domain';
            exec($command, $output);
            $result = $output[1];
        }
        return($result);
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $sql = 'SELECT COUNT(id) AS `count` FROM configuration';
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
        if ( ! empty($user_id)) {
            $sql = 'SELECT * FROM configuration';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'configuration');
            return $result;
        }
        if ( ! empty($response)) {
            $CI->response->meta->total = $this->count();

            $filter = '';
            $filter_response = array();
            if ( ! empty($CI->response->meta->filter)) {
                foreach ($CI->response->meta->filter as $filter) {
                    if ($filter->operator === 'in' OR $filter->operator === 'not in') {
                        $filter_response[] = ' ' . $filter->name . ' ' . $filter->operator . ' ' . $filter->value;
                    } else {
                        $filter_response[] = ' ' . $filter->name . ' ' . $filter->operator . ' "' . str_replace('"', '\"', $filter->value) . '"';
                    }
                }
                $filter = ' WHERE ' . implode(' AND ', $filter_response);
            }

            $sql = 'SELECT * FROM configuration' . $filter;
            $result = $this->run_sql($sql, array());

            if (empty($filter)) {
                $item = new stdClass;
                $item->id = 888888;
                $item->name = 'web_internal_version';
                $item->value = $this->config->config['web_internal_version'];
                $item->editable = 'n';
                $item->edited_by = '';
                $item->edited_date = '';
                $item->description = 'The internal numerical version of the Open-AudIT files.';
                $result[] = $item;

                $this->load->helper('network');
                $item = new stdClass;
                $item->id = 888889;
                $item->name = 'server_ip';
                $item->value = server_ip();
                $item->editable = 'n';
                $item->edited_by = '';
                $item->edited_date = '';
                $item->description = 'The IP addresses on this server.';
                $result[] = $item;
                unset($item);

                $item = new stdClass;
                $item->id = 888890;
                $item->name = 'is_ssl';
                $item->value = is_ssl();
                $item->editable = 'n';
                $item->edited_by = '';
                $item->edited_date = '';
                $item->description = 'Are we using SSL.';
                $result[] = $item;
                unset($item);
            }

            $CI->response->data = $this->format_data($result, 'configuration');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'configuration';
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
        $dictionary->sentence = '';
        $dictionary->marketing = '';
        $dictionary->about = '';
        $dictionary->product = 'community';
        $dictionary->notes = '';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->value = 'The value assigned to the item.';
        $dictionary->columns->type = 'int, text, etc';
        $dictionary->columns->editable = 'Can the user edit this item.';
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_configuration.php
// Location: ./models/m_configuration.php
