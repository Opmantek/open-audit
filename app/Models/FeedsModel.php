<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class FeedsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('feeds');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
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
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
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
        return null;
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
        return false;
    }

    /**
     * Execute a request for feeds articles
     *
     * @return bool    true || false depending on success
     */
    public function execute(): bool
    {
        $config = new \Config\OpenAudit();
        if (empty($config->feature_feeds) or $config->feature_feeds !== 'y') {
            // Do not run
            return true;
        }
        $db = db_connect();
        $data = new stdClass();
        $data->product = 'Open-AudIT';
        $data->version = $config->display_version;
        $data->internal_version = $config->internal_version;
        $data->products = array();
        $data->products[] = 'Open-AudIT';
        foreach ($config->modules as $module) {
            if (!empty($module->url) and $module->name !== 'Applications' and $module->name !== 'opLicensing' and stripos($module->url, 'https://firstwave') === false) {
                $data->products[] = $module->name;
            }
        }
        $data->uuid = $config->uuid;
        $data->license_product = '';
        $data->license_company = '';
        $data->license_email = '';
        $data->license_count = 0;
        $data->license_expires = '2000-01-01';
        $data->license_type = '';
        if (!empty($config->enterprise_binary)) {
            if (php_uname('s') === 'Windows NT') {
                $command = "%comspec% /c start /b " . $config->enterprise_binary . " --license";
                $cwd = getcwd();
                chdir('C:\\xampp\\open-audit\\other');
                $output = @exec($command, $output);
                pclose(popen($command, 'r'));
                chdir($cwd);
            } else {
                $command = $config->enterprise_binary . " --license";
                if (!empty($config->enterprise_env) and strpos($command, 'enterprise.bin') !== false) {
                    $command = 'export PAR_GLOBAL_TMPDIR=' . $config->enterprise_env . '; ' . $command;
                }
                $output = @exec($command, $output);
            }
            // $data->output = $output;
            if (!empty($output)) {
                $json = @json_decode($output);
            }
            if (!empty($json)) {
                $data->license_product = !empty($json->product) ? $json->product : '';
                if (stripos($data->license_product, 'enterprise') !== false) {
                    $data->license_product = 'Open-AudIT Enterprise';
                }
                if (stripos($data->license_product, 'professional') !== false) {
                    $data->license_product = 'Open-AudIT Professional';
                }
                $data->license_company = !empty($json->company) ? $json->company : '';
                $data->license_email = !empty($json->email) ? $json->email : '';
                $data->license_count = !empty($json->count) ? intval($json->count) : 0;
                $data->license_expires = !empty($json->expires) ? date('Y-m-d', $json->expires) : '';
                $data->license_type = !empty($json->license) ? $json->license : '';
            }
            unset($output);
        }
        $data->platform = $config->server_platform;
        $data->server_os = $config->server_os;
        $data->issues = array();
        $data->features = new stdCLass();
        if (php_uname('s') !== 'Windows NT') {
            // Grep for used features
            $command_string = "grep ACCESS " . ROOTPATH . "writable/logs/*.log | cut -d\" \" -f6- | sort | cut -d: -f2-3 | uniq -c | sed 's/^ *//g' | sed 's/ *$//g'";
            exec($command_string, $output, $return_var);
            foreach ($output as $line) {
                $temp = explode(' ', $line);
                $data->features->{$temp[1]} = intval($temp[0]);
            }
            unset($output);

            // Get the youngest log file
            $command_string = "ls " . ROOTPATH . "writable/logs/*.log | sort | tail -n1";
            exec($command_string, $output, $return_var);

            // Get any errors from the youngest logfile
            $command_string = "grep -h -A1 ^CRITICAL " . $output[0];
            exec($command_string, $output, $return_var);
            $combined_line = '';
            foreach ($output as $line) {
                if ($line === '--') {
                    $combined_line = substr($combined_line, strpos($combined_line, '--> ') + 4);
                    if (stripos($combined_line, 'menuItem') === false) {
                        $data->issues[] = $combined_line;
                    }
                    $combined_line = '';
                    continue;
                }
                $combined_line .= ' ' . $line;
            }
        }

        $sql = "SELECT type, COUNT(*) AS `count` FROM devices GROUP BY type";
        $data->devices = $db->query($sql)->getResult();

        sort($data->issues);
        $data->issues = array_unique($data->issues);
        unset($output);

        $client = service('curlrequest') or die("Cannot instanciate a curlrequest.");

        // $response = $client->request('POST', 'http://localhost:8080/index.php/input/devices', [
        $response = $client->request('POST', $config->feature_feeds_url, [
            'debug' => true,
            'form_params' => [
                $data,
            ],
        ]);

        $body = $response->getBody();
        $body = @json_decode($body);
        $body->name = !empty($body->name) ? $body->name : '';
        $body->short = !empty($body->short) ? $body->short : '';
        $body->description = !empty($body->description) ? $body->description : '';
        $body->type = !empty($body->type) ? $body->type : '';
        $body->body = !empty($body->body) ? $body->body : '';
        $body->published = !empty($body->published) ? $body->published : '';
        $body->link = !empty($body->link) ? $body->link : '';
        $body->image = !empty($body->image) ? $body->image : '';
        $body->expires = !empty($body->expires) ? $body->expires : '2100-01-01';
        $body->alert_style = !empty($body->alert_style) ? $body->alert_style : 'primary';
        $body->version = !empty($body->version) ? $body->version : '';
        if (empty($body)) {
            return true;
        }
        $sql = "SELECT COUNT(id) AS `count` FROM feeds WHERE name = ?";
        $count = $db->query($sql, [$body->name])->getResult()[0]->count;
        $count = intval($count);
        if ($count === 0) {
            // This is a new article, store it
            #$sql = "INSERT INTO feeds VALUES (null, name, short, description, type, body, published, link, image, requested, expires, alert_style, version, read, actioned, actioned_by, actioned_date)";
            $sql = "INSERT INTO feeds VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, 'n', 'n', '', '2001-01-01')";
            $db->query($sql, [$body->name, $body->short, $body->description, $body->type, $body->body, $body->published, $body->link, $body->image, $body->expires, $body->alert_style, $body->version]);
        }
        return true;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $include = array();
        return ($include);
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
    public function listUser($where = array(), $orgs = array()): array
    {
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return $query->getResult();
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
        $instance = & get_instance();

        $data = new \stdClass();
        $data->read = 'y';
        $this->builder->where('id', intval($id));
        $this->builder->update($data);

        $query = $this->builder->getWhere(['id' => intval($id)]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $result = $query->getResult();
        foreach ($result as $item) {
            if (!empty($item->type) and !empty($item->body) and ($item->type === 'query' or $item->type === 'config')) {
                try {
                    $item->body = json_decode($item->body, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
        }
        $result = format_data($result, 'feeds');
        return $result;
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('feeds')) {
            return true;
        }
        return false;
    }

    /**
     * Read an individual item from the database, not read previously for display on the header
     *
     * @return object   An item from feeds
     */
    public function show(): object
    {
        $this->builder->limit(1);
        $this->builder->where(['read' => 'n']);
        $this->builder->orderBy('requested', 'DESC');
        $query = $this->builder->get();
        $result = $query->getResult();
        foreach ($result as $item) {
            if (!empty($item->type) and !empty($item->body) and ($item->type === 'query' or $item->type === 'config')) {
                try {
                    $item->body = json_decode($item->body, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $e) {
                    log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                }
            }
        }
        $feed = new stdClass();
        if (!empty($result[0])) {
            $feed = $result[0];
            if (!empty($feed->url)) {
                $feed->link = "<span class=\"clearfix float-end\"><a href=\"" . $feed->url . "\" target=\"_blank\">" . __('Read More') . "</button>";
            } else {
                $feed->link = "<span class=\"clearfix float-end\"><a href=\"" . url_to('feedsRead', intval($feed->id)) . "\" >" . __('Read More') . "</button>";
            }
        }
        return $feed;
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
        $data = $this->updateFieldData('feeds', $data);
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

        $collection = 'feeds';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('published', 'name', 'type', 'description', 'actioned');
        $dictionary->attributes->create = array();
        $dictionary->attributes->fields = $this->db->getFieldNames($collection);
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection);
        $dictionary->attributes->update = $this->updateFields($collection);

        $dictionary->sentence = '';

        $dictionary->about = '<p><br /><br /></p>';

        $dictionary->notes = '<p><br /><br /></p>';

        $dictionary->product = 'community';
        $dictionary->columns->id = '';
        $dictionary->columns->name = '';
        $dictionary->columns->short = '';
        $dictionary->columns->description = '';
        $dictionary->columns->type = '';
        $dictionary->columns->body = '';
        $dictionary->columns->published = '';
        $dictionary->columns->link = '';
        $dictionary->columns->image = '';
        $dictionary->columns->requested = '';
        $dictionary->columns->expires = '';
        $dictionary->columns->alert_style = '';
        $dictionary->columns->version = '';
        $dictionary->columns->read = '';
        $dictionary->columns->actioned = '';
        $dictionary->columns->actioned_by = '';
        $dictionary->columns->actioned_date = '';
        return $dictionary;
    }
}
