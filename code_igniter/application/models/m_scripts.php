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
* @package   Scripts
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
*/

/**
* Base Model Script
*
* @access   public
* @category Model
* @package  Scripts
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_scripts extends MY_Model
{
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
        // $CI->options are from include_scripts_options.php in /controllers
        $CI = & get_instance();
        $options = $CI->options;
        if ( ! empty($data->options) && is_string($data->options)) {
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
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'ldap') {
                // text - should not be set
                $data->options->{$name} = '';
            }
            if ($name === 'ldap_seen_date') {
                // date
                if ( ! preg_match('/^[\d{4},\-,\d{2},\-,\d{2}]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'ldap_seen_days') {
                // number
                if ( ! empty($value)) {
                    $data->options->{$name} = intval($value);
                    if (empty($data->options->{$name})) {
                        $data->options->{$name} = '';
                    }
                }
            }
            if ($name === 'org_id') {
                // number
                if ( ! empty($value)) {
                    $data->options->{$name} = intval($value);
                    if (empty($data->options->{$name})) {
                        $data->options->{$name} = '';
                    }
                }
            }
            if ($name === 'strcomputer') {
                // text
                if ( ! preg_match('/^[\w,\.]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'strpass') {
                // text - virtually any, except quotes
            }
            if ($name === 'system_id') {
                // number
                if ( ! empty($value)) {
                    $data->options->{$name} = intval($value);
                    if (empty($data->options->{$name})) {
                        $data->options->{$name} = '';
                    }
                }
            }
            if ($name === 'url') {
                // url
                if ( ! preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'windows_user_work_1') {
                // text
                if ( ! preg_match('/^[\w]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'windows_user_work_2') {
                // text
                if ( ! preg_match('/^[\w]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
        }

        $data->options = json_encode($data->options);
        if ($id = $this->insert_collection('scripts', $data)) {
            return intval($id);
        } else {
            return false;
        }
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = 'SELECT * FROM scripts WHERE id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if ( ! empty($result[0]->options)) {
            $result[0]->options = json_decode($result[0]->options);
        }
        $result = $this->format_data($result, 'scripts');
        return($result);
    }

    public function update()
    {
        $CI = & get_instance();

        $sql = 'UPDATE `scripts` SET ';
        $data = array();
        $log->message = json_encode($CI->response->meta->received_data);
        stdlog($log);
        if ( ! empty($CI->response->meta->received_data->attributes->options)) {
            $received_options = new stdClass();
            foreach ($CI->response->meta->received_data->attributes->options as $key => $value) {
                    $received_options->$key = $value;
            }
            $select = 'SELECT * FROM scripts WHERE id = ?';
            $existing_options = $this->run_sql($select, array($CI->response->meta->id));
            $existing_options = json_decode($existing_options[0]->options);
            $new_options = new stdClass();
            foreach ($existing_options as $existing_key => $existing_value) {
                if ( ! empty($received_options->$existing_key)) {
                    $new_options->$existing_key = $received_options->$existing_key;
                } else {
                    $new_options->$existing_key = $existing_options->$existing_key;
                }
            }
            $sql .= '`options` = ?, ';
            $data[] = (string)json_encode($new_options);
        }
        
        if ( ! empty($CI->response->meta->received_data->attributes->name)) {
            $sql .= '`name` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->name;
        }

        if ( ! empty($CI->response->meta->received_data->attributes->description)) {
            $sql .= '`description` = ?, ';
            $data[] = $CI->response->meta->received_data->attributes->description;
        }

        if ($sql === 'UPDATE `scripts` SET ') {
            // TODO - THROW AN ERROR, no credentials or name or description supplied for updating
        }
        $sql .= ' `edited_by` = ?, `edited_date` = NOW() WHERE id = ?';
        $data[] = (string)$CI->user->full_name;
        $data[] = intval($CI->response->meta->id);
        $this->run_sql($sql, $data);
        return;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id === '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }

        // do not allow deletion of default Scripts
        $script = $this->m_scripts->read();
        if ($script[0]->attributes->name === $script[0]->attributes->based_on) {
            $CI->response->data = array();
            $temp = new stdClass();
            $temp->type = $this->response->meta->collection;
            $this->response->data[] = $temp;
            unset($temp);
            log_error('ERR-0014');
            return false;
        } else {
            $sql = 'DELETE FROM `scripts` WHERE id = ? AND name != based_on';
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        }
    }

    /**
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = $CI->m_orgs->get_user_all($CI->user->id);
        $sql = 'SELECT COUNT(id) AS `count` FROM scripts WHERE org_id IN (' . implode(',', $org_list) . ')';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
    }

    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = $CI->m_orgs->get_user_all($user_id);
            $sql = "SELECT * FROM scripts WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'scripts');
            return $result;
        }
        if (!empty($response)) {
            $CI->response->meta->total = $this->count();
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM scripts LEFT JOIN orgs ON (scripts.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'scripts');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }

    public function download($id = 0)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $id = intval($id);
        if ($id === 0) {
            return;
        }
        $sql = 'SELECT * FROM scripts WHERE id = ?';
        $result = $this->run_sql($sql, array(intval($id)));
        $data = $result[0];
        if (empty($data)) {
            // TODO - insert an error
            return;
        }
        $filename = $CI->config->config['base_path'] . '/other/' . $data->based_on;
        if ( ! file_exists($filename)) {
            // TODO - insert an error
            return;
        }
        $file = file_get_contents($filename);
        $options = json_decode($data->options);

        if (empty($options->url) OR
            $options->url ===  'http://open-audit/index.php/system/add_system' OR
            $options->url === 'https://open-audit/index.php/system/add_system' OR
            $options->url ===  'http://open-audit/index.php/input/devices' OR
            $options->url === 'https://open-audit/index.php/input/devices' OR
            $options->url ===  'http://localhost/open-audit/index.php/system/add_system' OR
            $options->url === 'https://localhost/open-audit/index.php/system/add_system' OR
            $options->url ===  'http://localhost/open-audit/index.php/input/devices' OR
            $options->url === 'https://localhost/open-audit/index.php/input/devices') {
            // inject our default network address
            if ( ! empty($CI->config->config['default_network_address'])) {
                $options->url = $CI->config->config['default_network_address'] . 'index.php/input/devices';
            } else {
                unset($options->url);
            }
        }

        $find = 'Configuration from web UI here';
        $files = false;
        foreach ($options as $key => $value) {
            if ($key !== 'files') {
                $replace = $find . "\n" . $key . '="' . $value . '"';
                $file = str_replace($find, $replace, $file);
            } else {
                $files = true;
            }
        }

        // TODO - enable the below for a per script list of files
        // if (!$files and $data->based_on == $data->name) {
            $sql = 'SELECT * FROM files';
            $result = $this->run_sql($sql, array());
            $options = new stdClass();
            $options->files = array();
            if ( ! empty($result)) {
                foreach ($result as $item) {
                    $options->files[] = ($item->path);
                }
            }
            if (isset($options->files) && is_array($options->files) && count($options->files) > 0) {
                foreach (array_reverse($options->files) as $key => $value) {
                    if ($data->based_on !== 'audit_windows.vbs') {
                        $value = str_replace('\\', '\\\\', $value);
                        $replace = $find . "\nfiles[".intval($key+1).']="' . $value . '"';
                    } else {
                        if (strpos($value, '/') === 0) {
                            // skip this file as it starts with /, hence is a Unix style path
                        } else {
                            $replace = $find . "\nfiles(".intval($key+1).')="' . $value . '"';
                        }
                    }
                    $file = str_replace($find, $replace, $file);
                }
                if ($data->based_on === 'audit_windows.vbs') {
                    $replace = $find . "\ndim files(".count($options->files).')';
                    $file = str_replace($find, $replace, $file);
                }
            }
        // }
        return $file;
    }



    public function build($operating_system) {
        // Get and make the audit script
        $t1 = explode('.', microtime());
        $temp = explode(' ', $t1[1]);
        $timestamp = date('y_m_d_H_i_s') . '_' . $temp[0];
        # replaced below with above because PHP 5.3.3.
        # $timestamp = date('y_m_d_H_i_s') . '_' . explode(' ', explode('.', microtime())[1])[0];
        $CI = & get_instance();
        $audit_script = false;
        switch (strtolower($operating_system)) {
            case 'aix':
                $audit_script = 'audit_aix.sh';
                $source_name = 'audit_aix_' . $timestamp . '.sh';
                break;
            
            case 'vmkernel':
            case 'vmware':
                $audit_script = 'audit_esxi.sh';
                $source_name = 'audit_esxi_' . $timestamp . '.sh';
                break;
            
            case 'linux':
                $audit_script = 'audit_linux.sh';
                $source_name = 'audit_linux_' . $timestamp . '.sh';
                break;
            
            case 'darwin':
                $audit_script = 'audit_osx.sh';
                $source_name = 'audit_osx_' . $timestamp . '.sh';
                break;
            
            case 'windows':
                $audit_script = 'audit_windows.vbs';
                $source_name = 'audit_windows_' . $timestamp . '.vbs';
                break;
            
            case 'sunos':
                $audit_script = 'audit_solaris.sh';
                $source_name = 'audit_solaris_' . $timestamp . '.sh';
                break;
            
            default:
                $audit_script = '';
                $source_name = '';
                $source = false;
                break;
        }
        if ($audit_script != '') {
            if (php_uname('s') == 'Windows NT') {
                $source = $CI->config->config['base_path'] . '\\other' . '\\scripts\\' . $source_name;
            } else {
                $source = $CI->config->config['base_path'] . '/other' . '/scripts/' . $source_name;
            }
            $sql = "/* m_scripts::build */ " . "SELECT * FROM `scripts` WHERE `name` = '$audit_script' AND `based_on` = '$audit_script' ORDER BY `id` LIMIT 1";
            $query = $this->db->query($sql);
            $result = $query->result();
            $log = new stdClass();
            $log->type = 'system';
            $log->severity = 4;
            $log->collection = 'scripts';
            $log->function = 'build';
            $log->status = 'fail';
            $log->summary = '';
            $log->details = '';
            if (!empty($result[0])) {
                $script_details = $result[0];
                # Just ensure we delete any audit scripts that might exist.
                # Shouldn't be required because we're creating based on the timestamp
                # Then open the file for writing
                @unlink($source);
                try {
                    $handle = fopen($source, 'w');
                } catch (Exception $e) {
                    $source = false;
                    $log->summary = 'Could not create temporary script';
                    $log->detail = $e;
                    stdlog($log);
                }
                $script = $CI->m_scripts->download($script_details->id);
                if (!empty($audit_script) and empty($script)) {
                    $source = false;
                    $log->summary = 'Could not retrieve script using configured options';
                    $log->details = "\$CI->m_scripts->download($script_details->id)";
                    stdlog($log);
                } else {
                    try {
                        fwrite($handle, $script);
                    } catch (Exception $e) {
                        $source = false;
                        $log->summary = 'Could not write to temporary script';
                        $log->details = $e;
                        stdlog($log);
                    }
                }
                fclose($handle);
            } else {
                $source = false;
                $log->summary = 'Could not retrieve script from database.';
                $log->detail = '';
                stdlog($log);
            }
        }
        return array($source, $audit_script);
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'scripts';
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
        $dictionary->sentence = 'Open-AudIT utilise powerful auditing scripts to avoid installing an agent while at the same time, gathering an incredible amount of configuration data from your devices.';
        $dictionary->marketing = '<p>The auditing of computers is enabled by utilising powerful audit scripts developed over many years. The scripts are constantly updated to take advantage of and reflect the lastest operaing system features specific to each OS.<br /><br />There are scripts to audit Windows, Linux, VMware ESX, OSX, AIX and Solaris.<br /><br />Maximum data, minimum install - agentless retrieval of the data that matters the most.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'community';
        $dictionary->notes = '<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br /><br /></p>';

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->based_on = 'The audit script upon which to base your customisations.';
        $dictionary->columns->options = 'A JSON document containing the required attributes depending on <code>scripts.type</code>.';
        $dictionary->columns->hash = 'unused';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_scripts.php
// Location: ./models/m_scripts.php
