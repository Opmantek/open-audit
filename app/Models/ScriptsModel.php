<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ScriptsModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('scripts');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
    }


    public function build(string $operating_system = ''): array
    {
        // Get and make the audit script
        $timestamp = date('y_m_d_H_i_s') . '_' . explode(' ', explode('.', microtime())[1])[0];
        $instance = & get_instance();
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
            
            case 'osx':
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
        if ($audit_script !== '') {
            if (php_uname('s') == 'Windows NT') {
                $source = FCPATH . '..\\other\\scripts\\' . $source_name;
            } else {
                $source = FCPATH . '../other/scripts/' . $source_name;
            }
            $sql = "SELECT * FROM `scripts` WHERE `name` = '$audit_script' AND `based_on` = '$audit_script' ORDER BY `id` LIMIT 1";
            $result = $this->db->query($sql)->getResult();
            if (!empty($result[0])) {
                $script_details = $result[0];
                # Just ensure we delete any audit scripts that might exist.
                # Shouldn't be required because we're creating based on the timestamp
                @unlink($source);
                # Open the file for writing
                try {
                    $handle = fopen($source, 'w');
                } catch (Exception $e) {
                    $source = false;
                    log_message('error', 'Could not create temporary script. Error: ' . $e);
                }
                if ($handle) {
                    # Get the script contents as configured
                    $script = $this->download(intval($script_details->id));
                    if (empty($script)) {
                        $source = false;
                        log_message('error', 'Could not retrieve script using configured options. Script ID: ' . $script_details->id);
                    } else {
                        try {
                            fwrite($handle, $script);
                        } catch (Exception $e) {
                            $source = false;
                            log_message('error', 'Could not write to temporary script. Error: ' . $e);
                        }
                    }
                    fclose($handle);
                }
            } else {
                $source = false;
                log_message('error', 'Could not retrieve script with ID ' . $id . '.');
            }
        }
        return array($source, $audit_script);
    }

    /**
     * Read the collection from the database
     *
     * @param  $resp object An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            } else {
                $this->builder->{$filter->function}($filter->name, $filter->value);
            }
        }
        $this->builder->orderBy($resp->meta->sort);
        $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), $resp->meta->collection);
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        if (!empty($data->options) and is_string($data->options)) {
            $data->options = json_decode($data->options);
        }
        // Validate options
        foreach ($data->options as $name => $value) {
            $value = str_replace("'", '', $value);
            $value = str_replace('"', '', $value);
            $value = str_replace(';', '', $value);
            $value = str_replace("\n", '', $value);
            $values = $options[$name]->values;
            if (!empty($values)) {
                $value_array = explode(',', $values);
                if (!in_array($value, $value_array)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'ldap') {
                // text - should not be set
                $data->options->{$name} = '';
            }
            if ($name === 'ldap_seen_date') {
                // date
                if (!preg_match('/^[\d{4},\-,\d{2},\-,\d{2}]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'ldap_seen_days') {
                // number
                if (!empty($value)) {
                    $data->options->{$name} = intval($value);
                    if (empty($data->options->{$name})) {
                        $data->options->{$name} = '';
                    }
                }
            }
            if ($name === 'org_id') {
                // number
                if (!empty($value)) {
                    $data->options->{$name} = intval($value);
                    if (empty($data->options->{$name})) {
                        $data->options->{$name} = '';
                    }
                }
            }
            if ($name === 'strcomputer') {
                // text
                if (!preg_match('/^[\w,\.]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'strpass') {
                // text - virtually any, except quotes
            }
            if ($name === 'system_id') {
                // number
                if (!empty($value)) {
                    $data->options->{$name} = intval($value);
                    if (empty($data->options->{$name})) {
                        $data->options->{$name} = '';
                    }
                }
            }
            if ($name === 'url') {
                // url
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'windows_user_work_1') {
                // text
                if (!preg_match('/^[\w]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
            if ($name === 'windows_user_work_2') {
                // text
                if (!preg_match('/^[\w]+$/', $value)) {
                    $data->options->{$name} = '';
                }
            }
        }
        $data->options = json_encode($data->options);
        $data = $this->createFieldData('scripts', $data);
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        return ($this->db->insertID());
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return bool    true || false depending on success
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $this->builder->delete(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        if ($this->db->affectedRows() !== 1) {
            return false;
        }
        return true;
    }

    public function getByOs(string $os = ''): ?string
    {
        switch (strtolower($os)) {
            case 'aix':
                $audit_script = 'audit_aix.sh';
                break;
            
            case 'vmkernel':
            case 'vmware':
                $audit_script = 'audit_esxi.sh';
                break;
            
            case 'linux':
                $audit_script = 'audit_linux.sh';
                break;
            
            case 'darwin':
                $audit_script = 'audit_osx.sh';
                break;
            
            case 'osx':
                $audit_script = 'audit_osx.sh';
                break;
            
            case 'windows':
                $audit_script = 'audit_windows.vbs';
                break;
            
            case 'sunos':
                $audit_script = 'audit_solaris.sh';
                break;
            
            default:
                $audit_script = '';
                break;
        }
        $sql = "SELECT * FROM scripts WHERE based_on = ? LIMIT 1";
        $query = $this->db->query($sql, [$audit_script])->getResult();
        if (empty($query[0]->id)) {
            // Invalid OS
            log_message('error', "Invalid OS provided to ScriptsModel::getByOs ($os).");
            return null;
        }
        return intval($query[0]->id);
    }

    public function download(int $id = 0): ?string
    {
        $instance = & get_instance();
        $result = $this->read($id);
        $data = $result[0]->attributes;
        if (empty($data)) {
            log_message('error', 'No script returned when ScriptsModel::download called with ID ' . $id);
            return null;
        }
        $filename = FCPATH . '../other/' . $data->based_on;
        if (!file_exists($filename)) {
            log_message('error', "Script does not exist on filesystem for $filename.");
            return null;
        }
        $file = file_get_contents($filename);
        $options = $data->options;
        if (empty($options->url) or
            $options->url ===  'http://open-audit/index.php/system/add_system' or
            $options->url === 'https://open-audit/index.php/system/add_system' or
            $options->url ===  'http://open-audit/index.php/input/devices' or
            $options->url === 'https://open-audit/index.php/input/devices' or
            $options->url ===  'http://localhost/open-audit/index.php/system/add_system' or
            $options->url === 'https://localhost/open-audit/index.php/system/add_system' or
            $options->url ===  'http://localhost/open-audit/index.php/input/devices' or
            $options->url === 'https://localhost/open-audit/index.php/input/devices') {
            // inject our default network address
            if (!empty(config('Openaudit')->default_network_address)) {
                $options->url = config('Openaudit')->default_network_address . 'index.php/input/devices';
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
        // Unix style paths
        $sql = "SELECT * FROM files WHERE `path` LIKE '/%'";
        if ($data->based_on === 'audit_windows.vbs') {
            // Windows style paths
            $sql = "SELECT * FROM files WHERE `path` NOT LIKE '/%'";
        }
        $result = $this->db->query($sql)->getResult();
        $options = new \StdClass();
        $options->files = array();
        if (!empty($result)) {
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

        // Force all line endings to be Unix style
        // Windows audit scripts with Unix line endings work
        // Unix audit scripts with Windows line endings do not work (bash for one, chokes)
        $file = str_replace("\r\n", "\n", $file);
        $file = str_replace("\r", "\n", $file);
        return $file;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $script = $this->read($id);
        $included['option'] = scripts_options();
        $included['script_option'] = scripts_collections_options()[$script[0]->attributes->based_on];
        $filesModel = new \App\Models\FilesModel();
        $files = $filesModel->listUser();
        $filtered_files = array();
        $included['files'] = array();
        foreach ($files as $file) {
            if ($script[0]->attributes->based_on === 'audit_windows.vbs' and strpos($file->attributes->path, '/') !== 0) {
                $included['files'][] = $file;
            }
            if ($script[0]->attributes->based_on !== 'audit_windows.vbs' and strpos($file->attributes->path, '/') === 0) {
                $included['files'][] = $file;
            }
        }
        return $included;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }


    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array()): array
    {
        $instance = & get_instance();
        $org_list = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
        $org_list[] = 1;
        $org_list = array_unique($org_list);

        $properties = array();
        $properties[] = 'scripts.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'scripts.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $org_list);
        if (!empty($where[0]) and !empty($where[1])) {
            $this->builder->where($where[0], $where[1]);
        }
        if (!empty($where[2]) and !empty($where[3])) {
            $this->builder->where($where[2], $where[3]);
        }
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'scripts');
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     *
     * @return array   The array containing the requested item
     */
    public function read(int $id = 0): array
    {
        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'scripts');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('scripts')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  object  $data The data attributes
     *
     * @return bool    true || false depending on success
     */
    public function update($id = null, $data = null): bool
    {
        $id = intval($id);
        $script = $this->read($id);
        if (!empty($data->options)) {
            foreach ($script[0]->attributes->options as $key => $value) {
                if (!isset($data->options->{$key})) {
                    $data->options->{$key} = $value;
                }
            }
            $data->options = json_encode($data->options);
        }
        $data = $this->updateFieldData('scripts', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'scripts';
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();

        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'based_on', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','options','based_on');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->about = '<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->based_on = 'The audit script upon which to base your customisations.';
        $dictionary->columns->options = 'A JSON document containing the required attributes depending on <code>scripts.type</code>.';
        $dictionary->columns->hash = 'unused';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
