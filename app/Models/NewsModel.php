<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

class NewsModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        if ($this->db->tableExists('news')) {
            $this->builder = $this->db->table('news');
        }
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
        if (!$this->db->tableExists('news')) {
            return array();
        }
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
     * Execute a request action a news article
     *
     * @return bool    true || false depending on success
     */
    public function execute(int $id = 0): bool
    {
        if (!$this->db->tableExists('news')) {
            return false;
        }
        $instance = & get_instance();
        if (empty($instance->user->id)) {
            log_message('info', 'A news article needs to be executed by a user.');
            return false;
        }
        $item = $this->builder->getWhere(['id' => $id])->getResult();
        if (empty($item)) {
            // Bad ID, return
            return false;
        }
        $item = $item[0];
        if (!empty($item->type) and !empty($item->body) and ($item->type === 'config' or $item->type === 'package' or $item->type === 'query')) {
            try {
                $item->body = json_decode($item->body, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
                return false;
            }
        }

        if ($item->type === 'config') {
            if (empty($instance->user->permissions['configuration']) or strpos($instance->user->permissions['queries'], 'u') === false) {
                log_message('info', $instance->user->full_name . ' does not have permission to execute news to update configuration.');
                return false;
            }
            $attributes = $item->body[0]->attributes;

            $sql = "DELETE FROM `configuration` WHERE name = ?";
            $this->db->query($sql, [$attributes->name]);

            $sql = "INSERT INTO `configuration` (name, value, type, editable, description, edited_by, edited_date) VALUES (?, ?, ?, ?, ?, ?, NOW())";
            $this->db->query($sql, [$attributes->name, $attributes->value, $attributes->type, $attributes->editable, $attributes->description, $instance->user->full_name]);
        }
        if ($item->type === 'package') {
            if (empty($instance->user->permissions['packages']) or strpos($instance->user->permissions['packages'], 'c') === false or strpos($instance->user->permissions['packages'], 'u') === false or strpos($instance->user->permissions['packages'], 'd') === false) {
                log_message('info', $instance->user->full_name . ' does not have permission to execute news to create/update/delete packages.');
                return false;
            }

            $attributes = $item->body[0]->attributes;

            $sql = "DELETE FROM `packages` WHERE name = ?";
            $this->db->query($sql, [$attributes->name]);

            $data = $this->createFieldData('packages', $item->body[0]->attributes);
            if (empty($data)) {
                return false;
            }
            model('App\Models\PackagesModel')->create($data);
        }
        if ($item->type === 'query') {
            if (empty($instance->user->permissions['queries']) or strpos($instance->user->permissions['queries'], 'c') === false or strpos($instance->user->permissions['queries'], 'u') === false or strpos($instance->user->permissions['queries'], 'd') === false) {
                log_message('info', $instance->user->full_name . ' does not have permission to execute news to create/update/delete queries.');
                return false;
            }

            $attributes = $item->body[0]->attributes;

            $sql = "DELETE FROM `queries` WHERE name = ?";
            $this->db->query($sql, [$attributes->name]);

            $data = $this->createFieldData('queries', $item->body[0]->attributes);
            if (empty($data)) {
                return false;
            }
            model('App\Models\QueriesModel')->create($data);
        }
        $data = new \stdClass();
        $data->read = 'y';
        $data->actioned = 'y';
        $data->actioned_by = $instance->user->full_name;
        $data->actioned_date = date('Y-m-d H:i:s');
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        return true;
    }


    /**
     * Execute a request for All news articles
     *
     * @return bool    true || false depending on success
     */
    public function executeAll(): bool
    {
        if (!$this->db->tableExists('news')) {
            return false;
        }
        $config = new \Config\OpenAudit();
        if (empty($config->feature_news) or $config->feature_news !== 'y') {
            // Do not run
            log_message('info', 'News not executed because config item set to n.');
            return true;
        }
        helper('utility_helper');
        $data = createNewsData();

        $client = service('curlrequest');
        try {
            $response = @$client->request('POST', $config->feature_news_url, [
            # $response = @$client->request('POST', 'http://localhost:8082/', [
                # 'debug' => true,
                # 'http_errors' => false,
                'form_params' => [
                    $data,
                ],
            ]);
        } catch (\Exception $e) {
            log_message('critical', 'Requesting news failed: ' . $e->getMessage() . "\n");
            return true;
        }
        $body = $response->getBody();
        $body = @json_decode($body);
        if (!is_array($body)) {
            log_message('critical', 'Body returned but body not an array. Body is a ' . gettype($body));
            return true;
        }
        if (empty($body)) {
            log_message('info', 'No news articles returned.');
            return true;
        }
        log_message('info', count($body) . ' news articles returned.');
        foreach ($body as $news) {
            if (empty($news)) {
                log_message('info', 'No news article populated.');
                continue;
            }
            $news->name = !empty($news->name) ? $news->name : '';
            $news->short = !empty($news->short) ? $news->short : '';
            $news->description = !empty($news->description) ? $news->description : '';
            $news->type = !empty($news->type) ? $news->type : '';
            $news->body = !empty($news->body) ? $news->body : '';
            $news->published = !empty($news->published) ? $news->published : '';
            $news->link = !empty($news->link) ? $news->link : '';
            $news->image = !empty($news->image) ? $news->image : '';
            $news->expires = !empty($news->expires) ? $news->expires : '2100-01-01';
            $news->alert_style = !empty($news->alert_style) ? $news->alert_style : 'primary';
            $news->version = !empty($news->version) ? $news->version : '';
            if (empty($body)) {
                return true;
            }
            $sql = "SELECT COUNT(id) AS `count` FROM news WHERE name = ?";
            $count = $this->db->query($sql, [$news->name])->getResult()[0]->count;
            $count = intval($count);
            if ($count === 0) {
                // This is a new article, store it
                #$sql = "INSERT INTO news VALUES (null, name, short, description, type, body, published, link, image, requested, expires, alert_style, version, read, actioned, actioned_by, actioned_date)";
                $sql = "INSERT INTO news VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, 'n', 'n', '', '2001-01-01')";
                $this->db->query($sql, [$news->name, $news->short, $news->description, $news->type, $news->body, $news->published, $news->link, $news->image, $news->expires, $news->alert_style, $news->version]);
            }
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
        return array();
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
        if (!$this->db->tableExists('news')) {
            return array();
        }
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
        if (!$this->db->tableExists('news')) {
            return array();
        }
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
        if (!$this->db->tableExists('news')) {
            return array();
        }
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
        $result = format_data($result, 'news');

        // Mark these as actioned as there's nothing to do to 'action' them, they link to external sites
        if (in_array($result[0]->attributes->type, ['blog', 'howto'])) {
            $instance = & get_instance();
            $data = new \stdClass();
            $data->actioned = 'y';
            $data->actioned_by = $instance->user->full_name;
            $data->actioned_date = date('Y-m-d');
            $this->builder->where('id', intval($id));
            $this->builder->update($data);
        }

        return $result;
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        if (!$this->db->tableExists('news')) {
            return false;
        }
        if ($this->tableReset('news')) {
            return true;
        }
        return false;
    }

    /**
     * Read an individual item from the database, not read previously for display on the header
     *
     * @return object   An item from news
     */
    public function show(): object
    {
        $news = new \stdClass();
        if (!$this->db->tableExists('news')) {
            return $news;
        }
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
        if (!empty($result[0])) {
            $news = $result[0];
            if (!empty($news->url)) {
                $news->link = "<span class=\"clearfix float-end\"><a href=\"" . $news->url . "\" target=\"_blank\">" . __('Read More') . "</a>";
            } else {
                $news->link = "<span class=\"clearfix float-end\"><a href=\"" . url_to('newsRead', intval($news->id)) . "\" >" . __('Read More') . "</a>";
            }
        }
        return $news;
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
        $data = $this->updateFieldData('news', $data);
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

        $collection = 'news';
        $dictionary = new \stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \stdClass();

        $dictionary->attributes = new \stdClass();
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
