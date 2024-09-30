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
        // First, make sure we can write to the scripts directory
        if (!is_writable(ROOTPATH . 'other/scripts')) {
            log_message('error', 'Cannot write to ' . ROOTPATH . 'other/scripts, so we cannot build an audit script. Discoveries will fail.');
            return array();
        }
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
            case 'apple':
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

            case 'windows-ps1':
                $audit_script = 'audit_windows.ps1';
                $source_name = 'audit_windows_' . $timestamp . '.ps1';
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
                $source = ROOTPATH . 'other\\scripts\\' . $source_name;
            } else {
                $source = ROOTPATH . 'other/scripts/' . $source_name;
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
                log_message('error', 'Could not retrieve script based on ' . $audit_script . '.');
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
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
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
        if (empty($data->options)) {
            $data->options = new \stdClass();
        }
        if (!empty($data->options) and is_string($data->options)) {
            try {
                $data->options = json_decode($data->options, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
        }
        $options = scripts_options();
        foreach ($data->options as $name => $value) {
            if (is_string($value)) {
                $value = str_replace("'", '', $value);
                $value = str_replace('"', '', $value);
                $value = str_replace(';', '', $value);
                $value = str_replace("\n", '', $value);
            }
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
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        if ($error = $this->sqlError($this->db->error())) {
            \Config\Services::session()->setFlashdata('error', json_encode($error));
            return null;
        }
        return (intval($this->db->insertID()));
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

    public function getByOs(string $os = ''): ?int
    {
        switch (strtolower($os)) {
            case 'aix':
                $audit_script = 'audit_aix.sh';
                break;

            case 'vmkernel':
            case 'vmware':
            case 'esxi':
                $audit_script = 'audit_esxi.sh';
                break;

            case 'linux':
                $audit_script = 'audit_linux.sh';
                break;

            case 'darwin':
            case 'osx':
                $audit_script = 'audit_osx.sh';
                break;

            case 'hpux':
            case 'hp-ux':
                $audit_script = 'audit_hpux.sh';
                break;

            case 'windows':
                $audit_script = 'audit_windows.vbs';
                break;

            case 'windows-ps1':
                $audit_script = 'audit_windows.ps1';
                break;

            case 'solaris':
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
        $filename = ROOTPATH . 'other/' . $data->based_on;
        if (!file_exists($filename)) {
            log_message('error', "Script does not exist on filesystem for $filename.");
            return null;
        }
        $file = file_get_contents($filename);
        $options = $data->options;
        if (
            empty($options->url) or
            $options->url ===  'http://open-audit/index.php/system/add_system' or
            $options->url === 'https://open-audit/index.php/system/add_system' or
            $options->url ===  'http://open-audit/index.php/input/devices' or
            $options->url === 'https://open-audit/index.php/input/devices' or
            $options->url ===  'http://localhost/open-audit/index.php/system/add_system' or
            $options->url === 'https://localhost/open-audit/index.php/system/add_system' or
            $options->url ===  'http://localhost/open-audit/index.php/input/devices' or
            $options->url === 'https://localhost/open-audit/index.php/input/devices'
        ) {
            // inject our default network address
            if (!empty($instance->config->default_network_address)) {
                $options->url = $instance->config->default_network_address . 'index.php/input/devices';
            } else {
                $baseURL = base_url();
                if (!empty($baseURL)) {
                    $options->url = $baseURL . 'index.php/input/devices';
                } else {
                    unset($options->url);
                }
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
        $options = new \stdClass();
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
                    $replace = $find . "\nfiles[" . intval($key + 1) . ']="' . $value . '"';
                } else {
                    if (strpos($value, '/') === 0) {
                        // skip this file as it starts with /, hence is a Unix style path
                    } else {
                        $replace = $find . "\nfiles(" . intval($key + 1) . ')="' . $value . '"';
                    }
                }
                $file = str_replace($find, $replace, $file);
            }
            if ($data->based_on === 'audit_windows.vbs') {
                $replace = $find . "\ndim files(" . count($options->files) . ')';
                $file = str_replace($find, $replace, $file);
            }
        }
        if ($data->based_on === 'audit_linux.sh' and !empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
            $sql = "SELECT * FROM executables";
            $result = $this->db->query($sql)->getResult();
            $exclusions = array();
            if (!empty($result)) {
                foreach ($result as $item) {
                    $path = str_replace('\\', '\\\\', $item->path);
                    if ($item->exclude === 'n') {
                        $replace = $find . "\nexecutables[" . ($item->id + 1) . ']="' . $path . '"';
                        $file = str_replace($find, $replace, $file);
                    }
                    if ($item->exclude === 'y') {
                        $exclusions[] = $path;
                    }
                }
            }
            if (!empty($exclusions)) {
                $replace = $find . "\nexclusions=\"" . implode('|', $exclusions) . "\"";
                $file = str_replace($find, $replace, $file);
            }
        }

        if ($data->based_on === 'audit_windows.ps1') {
            $file = str_replace("\$url = ''", "\$url = '" . base_url() . "index.php/input/devices'", $file);
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
        if ($script[0]->attributes->based_on !== 'audit_windows.ps1') {
            foreach ($files as $file) {
                if ($script[0]->attributes->based_on === 'audit_windows.vbs' and strpos($file->attributes->path, '/') !== 0) {
                    $included['files'][] = $file;
                }
                if ($script[0]->attributes->based_on !== 'audit_windows.vbs' and strpos($file->attributes->path, '/') === 0) {
                    $included['files'][] = $file;
                }
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
        $included = array();
        $filesModel = new \App\Models\FilesModel();
        $included['files'] = $filesModel->listUser();
        return $included;
    }


    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * @return array  An array of formatted entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        if (empty($orgs)) {
            $instance = & get_instance();
            $orgs = array_unique(array_merge($instance->user->orgs, $instance->orgsModel->getUserDescendants($instance->user->orgs, $instance->orgs)));
            $orgs = array_unique(array_merge($orgs, $instance->orgsModel->getUserAscendants($instance->user->orgs, $instance->orgs)));
            $orgs[] = 1;
            $orgs = array_unique($orgs);
        }

        $properties = array();
        $properties[] = 'scripts.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'scripts.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
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
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'based_on', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','options','based_on');
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = 'Open-AudIT utilise powerful auditing scripts to avoid installing an agent while at the same time, gathering an incredible amount of configuration data from your devices.';

        $dictionary->about = '<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->based_on = 'The audit script upon which to base your customisations.';
        $dictionary->columns->options = 'A JSON document containing the required attributes depending on <code>scripts.type</code>.';
        $dictionary->columns->hash = 'Unused.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;


        $options = array();

        $options['audit_dns'] = new stdClass();
        $options['audit_dns']->name = 'audit_dns';
        $options['audit_dns']->default = 'n';
        $options['audit_dns']->help = 'Should we retrieve all DNS names.';
        $options['audit_dns']->type = 'select';
        $options['audit_dns']->values = 'y,n';

        $options['audit_mount_point'] = new stdClass();
        $options['audit_mount_point']->name = 'audit_mount_point';
        $options['audit_mount_point']->default = 'y';
        $options['audit_mount_point']->help = 'Should we audit mount points.';
        $options['audit_mount_point']->type = 'select';
        $options['audit_mount_point']->values = 'y,n';

        $options['audit_netstat'] = new stdClass();
        $options['audit_netstat']->name = 'audit_netstat';
        $options['audit_netstat']->default = 's';
        $options['audit_netstat']->help = 'Should we audit netstat ports (yes, no, servers only).';
        $options['audit_netstat']->type = 'select';
        $options['audit_netstat']->values = 'y,n,s';

        $options['audit_software'] = new stdClass();
        $options['audit_software']->name = 'audit_software';
        $options['audit_software']->default = 'y';
        $options['audit_software']->help = 'Should we audit the installed software.';
        $options['audit_software']->type = 'select';
        $options['audit_software']->values = 'y,n';

        $options['audit_win32_product'] = new stdClass();
        $options['audit_win32_product']->name = 'audit_win32_product';
        $options['audit_win32_product']->default = 'n';
        $options['audit_win32_product']->help = 'Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.';
        $options['audit_win32_product']->type = 'select';
        $options['audit_win32_product']->values = 'y,n';

        $options['create_file'] = new stdClass();
        $options['create_file']->name = 'create_file';
        $options['create_file']->default = 'n';
        $options['create_file']->help = 'Should we create a file based on the audit result.';
        $options['create_file']->type = 'select';
        $options['create_file']->values = 'y,n';

        $options['debugging'] = new stdClass();
        $options['debugging']->name = 'debugging';
        $options['debugging']->default = '1';
        $options['debugging']->help = 'The debug level (will output to command prompt window). Lower means less output with 0 being no output.';
        $options['debugging']->type = 'select';
        $options['debugging']->values = '0,1,2,3';

        $options['details_to_lower'] = new stdClass();
        $options['details_to_lower']->name = 'details_to_lower';
        $options['details_to_lower']->default = 'y';
        $options['details_to_lower']->help = 'Should we convert the hostname to lower.';
        $options['details_to_lower']->type = 'select';
        $options['details_to_lower']->values = 'y,n';

        $options['hide_audit_window'] = new stdClass();
        $options['hide_audit_window']->name = 'hide_audit_window';
        $options['hide_audit_window']->default = 'n';
        $options['hide_audit_window']->help = 'Should we hide the audit script window when executing.';
        $options['hide_audit_window']->type = 'select';
        $options['hide_audit_window']->values = 'y,n';

        $options['ignore_invalid_ssl'] = new stdClass();
        $options['ignore_invalid_ssl']->name = 'ignore_invalid_ssl';
        $options['ignore_invalid_ssl']->default = 'y';
        $options['ignore_invalid_ssl']->help = 'Should we ignore an invalid or self signed SSL certificate and submit the result anyway.';
        $options['ignore_invalid_ssl']->type = 'select';
        $options['ignore_invalid_ssl']->values = 'y,n';

        $options['ldap'] = new stdClass();
        $options['ldap']->name = 'ldap';
        $options['ldap']->default = '';
        $options['ldap']->help = 'Set by the audit_domain or discover_domain scripts. Do not set.';
        $options['ldap']->type = 'text';
        $options['ldap']->values = '';

        $options['ldap_seen_date'] = new stdClass();
        $options['ldap_seen_date']->name = 'ldap_seen_date';
        $options['ldap_seen_date']->default = '2012-06-30';
        $options['ldap_seen_date']->help = 'Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.';
        $options['ldap_seen_date']->type = 'date';
        $options['ldap_seen_date']->values = '';

        $options['ldap_seen_days'] = new stdClass();
        $options['ldap_seen_days']->name = 'ldap_seen_days';
        $options['ldap_seen_days']->default = 0;
        $options['ldap_seen_days']->help = 'Set this if you wish to insert systems from AD that have only been seen in the last X days.';
        $options['ldap_seen_days']->type = 'number';
        $options['ldap_seen_days']->values = '';

        $options['org_id'] = new stdClass();
        $options['org_id']->name = 'org_id';
        $options['org_id']->default = '';
        $options['org_id']->help = 'Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).';
        $options['org_id']->type = 'number';
        $options['org_id']->values = '';

        $options['ping_target'] = new stdClass();
        $options['ping_target']->name = 'ping_target';
        $options['ping_target']->default = 'n';
        $options['ping_target']->help = 'Attempt to ping the device if we are not auditing localhost.';
        $options['ping_target']->type = 'select';
        $options['ping_target']->values = 'y,n';

        $options['san_audit'] = new stdClass();
        $options['san_audit']->name = 'san_audit';
        $options['san_audit']->default = 'y';
        $options['san_audit']->help = 'Should we audit a SAN if the management software is detected.';
        $options['san_audit']->type = 'select';
        $options['san_audit']->values = 'y,n';

        $options['san_discover'] = new stdClass();
        $options['san_discover']->name = 'san_discover';
        $options['san_discover']->default = 'n';
        $options['san_discover']->help = 'If we detect the san management software, should we run an auto-discover before the query.';
        $options['san_discover']->type = 'select';
        $options['san_discover']->values = 'y,n';

        $options['self_delete'] = new stdClass();
        $options['self_delete']->name = 'self_delete';
        $options['self_delete']->default = 'n';
        $options['self_delete']->help = 'If the script is running on a target, should the script delete itself upon completion?';
        $options['self_delete']->type = 'select';
        $options['self_delete']->values = 'y,n';

        $options['strcomputer'] = new stdClass();
        $options['strcomputer']->name = 'strcomputer';
        $options['strcomputer']->default = '.';
        $options['strcomputer']->help = 'The target computer to audit. "." means localhost.';
        $options['strcomputer']->type = 'text';
        $options['strcomputer']->values = '';

        $options['strpass'] = new stdClass();
        $options['strpass']->name = 'strpass';
        $options['strpass']->default = '';
        $options['strpass']->help = 'The password (if not using the user running the script).';
        $options['strpass']->type = 'text';
        $options['strpass']->values = '';

        $options['struser'] = new stdClass();
        $options['struser']->name = 'struser';
        $options['struser']->default = '';
        $options['struser']->help = 'The username (if not using the user running the script).';
        $options['struser']->type = 'text';
        $options['struser']->values = '';

        $options['submit_online'] = new stdClass();
        $options['submit_online']->name = 'submit_online';
        $options['submit_online']->default = 'y';
        $options['submit_online']->help = 'Should we submit the completed audit result to the Open-AudIT server.';
        $options['submit_online']->type = 'select';
        $options['submit_online']->values = 'y,n';

        $options['system_id'] = new stdClass();
        $options['system_id']->name = 'system_id';
        $options['system_id']->default = '';
        $options['system_id']->help = 'Set by the Discovery function - do not normally set this manually.';
        $options['system_id']->type = 'number';
        $options['system_id']->values = '';

        $options['url'] = new stdClass();
        $options['url']->name = 'url';
        $options['url']->default = @$this->config->config['default_network_address'] . 'index.php/input/devices';
        $options['url']->help = 'The address of the Open-AudIT server "submit" page.';
        $options['url']->type = 'url';
        $options['url']->values = '';

        $options['use_proxy'] = new stdClass();
        $options['use_proxy']->name = 'use_proxy';
        $options['use_proxy']->default = 'n';
        $options['use_proxy']->help = 'Should we use the system or user level proxy to submit the audit result.';
        $options['use_proxy']->type = 'select';
        $options['use_proxy']->values = 'y,n';

        $options['windows_user_work_1'] = new stdClass();
        $options['windows_user_work_1']->name = 'windows_user_work_1';
        $options['windows_user_work_1']->default = 'physicalDeliveryOfficeName';
        $options['windows_user_work_1']->help = 'Query this Active Directory attribute first to determine the users work unit.';
        $options['windows_user_work_1']->type = 'text';
        $options['windows_user_work_1']->values = '';

        $options['windows_user_work_2'] = new stdClass();
        $options['windows_user_work_2']->name = 'windows_user_work_2';
        $options['windows_user_work_2']->default = 'company';
        $options['windows_user_work_2']->help = 'Query this Active Directory attribute second to determine the users work unit.';
        $options['windows_user_work_2']->type = 'text';
        $options['windows_user_work_2']->values = '';

        foreach ($options as $item) {
            $option = new stdClass();
            $option->id = $item->name;
            $option->type = 'option';
            $option->attributes = $item;
            $dictionary->options[] = $option;
            unset($option);
        }

        $options_scripts = array();
        $options_scripts['audit_aix.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id', 'system_id');
        $options_scripts['audit_esx.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id', 'system_id');
        $options_scripts['audit_linux.sh'] = array('create_file', 'debugging', 'ignore_invalid_ssl', 'org_id', 'self_delete', 'submit_online', 'system_id', 'url');
        $options_scripts['audit_osx.sh'] = array('submit_online', 'create_file', 'url', 'debugging', 'org_id', 'system_id');
        $options_scripts['audit_windows.vbs'] = array('audit_dns', 'audit_mount_point', 'audit_netstat', 'audit_software', 'audit_win32_product', 'create_file', 'debugging', 'details_to_lower', 'hide_audit_window', 'ignore_invalid_ssl', 'ldap', 'ldap_seen_date', 'ldap_seen_days', 'org_id', 'ping_target', 'san_audit', 'san_discover', 'self_delete', 'strcomputer', 'strpass', 'struser', 'submit_online', 'system_id', 'url', 'use_proxy', 'windows_user_work_1', 'windows_user_work_2');

        foreach ($options_scripts as $key => $value) {
            $option = new stdClass();
            $option->id = $key;
            $option->type = 'script_option';
            $option->attributes = $value;
            $dictionary->options_scripts[] = $option;
            unset($option);
        }

        return $dictionary;
    }
}
