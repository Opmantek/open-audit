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
        // return null;

        $data = $this->createFieldData('news', $data);
        if (empty($data)) {
            return null;
        }
        $this->builder->insert($data);
        $error = $this->sqlError($this->db->error());
        if ($error) {
            session()->setFlashdata('error', json_encode($error));
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
        if ($item->type === 'vulnerabilities') {
            if (empty($instance->user->permissions['vulnerabilities']) or strpos($instance->user->permissions['vulnerabilities'], 'c') === false or strpos($instance->user->permissions['vulnerabilities'], 'u') === false or strpos($instance->user->permissions['vulnerabilities'], 'd') === false) {
                log_message('info', $instance->user->full_name . ' does not have permission to execute news to create/update/delete vulnerabilities.');
                return false;
            }

            $attributes = $item->body[0]->attributes;
            $data = $this->createFieldData('vulnerabilities', $item->body[0]->attributes);
            if (empty($data)) {
                return false;
            }
            model('App\Models\VulnerabilitiesModel')->create($data);
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
     * Execute a request to retrieve any news articles from FirstWave
     *
     * @return bool    true || false depending on success
     */
    public function executeAll(?string $action = 'news'): ?int
    {
        set_time_limit(600);
        $id = 0;
        log_message('debug', 'NewsModel::executeAll called with action ' . $action);
        if (!$this->db->tableExists('news') and $action === 'news') {
            log_message('warning', 'News table does not exist, returning from NewsModel::executeAll.');
            return null;
        }
        if (!$this->db->tableExists('vulnerabilities') and $action === 'vulnerabilities') {
            log_message('warning', 'Vulnerabilities table does not exist, returning from NewsModel::executeAll.');
            return null;
        }
        if (!$this->db->tableExists('vendors') and $action === 'vendors') {
            log_message('warning', 'Vendors table does not exist, returning from NewsModel::executeAll.');
            return null;
        }
        $config = new \Config\OpenAudit();
        if ((empty($config->feature_news) or $config->feature_news !== 'y') and $action === 'news') {
            // Do not run
            log_message('info', 'News not executed because config item set to n, returning from NewsModel::executeAll.');
            return null;
        }
        if ((empty($config->feature_vulnerabilities) or $config->feature_vulnerabilities !== 'y') and ($action === 'vulnerabilities' or $action === 'vendors')) {
            // Do not run
            log_message('info', 'Vulnerabilities not executed because config item set to n, returning from NewsModel::executeAll.');
            return null;
        }
        helper('utility_helper');
        $data = createNewsData();
        $send = array();
        foreach ($data as $key => $value) {
            $send[$key] = $value;
        }

        $send['action'] = $action;
        $send['products'] = json_encode($send['products']);
        $send['issues'] = json_encode($send['issues']);
        $send['features'] = json_encode($send['features']);
        $send['devices'] = json_encode($send['devices']);
        $send['stats'] = json_encode($send['stats']);
        $send['reset'] = (!empty($GLOBALS['vulnerabilitiesReset'])) ? 'y' : '';

        if (!empty($_POST['data']['attributes']['cve'])) {
            $cve = strtoupper($_POST['data']['attributes']['cve']);
            if (preg_match('/^(CVE)\-\d{4}\-\d+/', $cve)) {
                $send['cve'] = $cve;
            } else {
                log_message('warning', 'Invalid CVE ID supplied: ' . $_POST['data']['attributes']['cve']);
                $_SESSION['warning'] = 'Invalid CVE ID supplied: ' . $_POST['data']['attributes']['cve'];
                return null;
            }
        } else if ($action === 'vulnerabilities') {
            $send['vendors'] = model('App\Models\VendorsModel')->getUse();
        }
        if ($action === 'vulnerabilities' or $action === 'vendors') {
            unset($send['issues']);
            $send['issues'] = array();
            $send['last_request_date'] = (!empty($config->feature_vulnerabilities_last_request_datetime)) ? $config->feature_vulnerabilities_last_request_datetime : '2000-01-01 00:00:00';
            $sql = "SELECT `cve` FROM `vulnerabilities`";
            $result = $this->db->query($sql)->getResult();
            $send['cves'] = array();
            foreach ($result as $row) {
                $send['cves'][] = $row->cve;
            }
            $send['cves'] = json_encode($send['cves']);
            $send['from'] = (!empty($config->feature_vulnerabilities_date)) ? $config->feature_vulnerabilities_date : '2025-01-01';
        }

        $client = service('curlrequest');
        try {
            $url = (!empty($config->feature_news_url)) ? $config->feature_news_url : 'https://news.firstwave.com/news';
            if ($action === 'vulnerabilities' or $action === 'vendors') {
                $url = (!empty($config->feature_vulnerabilities_url)) ? $config->feature_vulnerabilities_url : 'https://news.firstwave.com/news';
            }
            $response = @$client->request('POST', $url, [
                # 'debug' => true,
                # 'http_errors' => false,
                'user_agent' => 'Open-AudIT',
                'form_params' => $send,
                'allow_redirects' => true
            ]);
        } catch (\Exception $e) {
            log_message('error', 'Requesting news failed: ' . $e->getMessage() . "\n");
            log_message('error', 'Requesting news failed: ' . json_encode($e) . "\n");
            return null;
        }
        $body = $response->getBody();
        // log_message('debug', 'Bytes in reply: ' . strlen($body));
        $body = @json_decode($body);
        if (!is_array($body) and $action !== 'vendors' and $action !== 'install' and $action !== 'upgrade' and $action !== 'add_license') {
            log_message('error', 'Body returned but body not an array. Body is a ' . gettype($body));
            $_SESSION['warning'] = 'No ' . $action . ' returned.';
            return null;
        }
        if (!empty($body) and $action === 'vendors') {
            $body = (array)$body;
        }
        if (empty($body) and $action !== 'install' and $action !== 'upgrade' and $action !== 'add_license') {
            log_message('debug', 'No ' . $action . ' articles returned.');
            $_SESSION['warning'] = 'No ' . $action . ' returned.';
            return null;
        }
        log_message('debug', count($body) . ' news articles returned.');
        if ($action !== 'vulnerabilities' and $action !== 'vendors') {
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
                    return null;
                }
                $sql = "SELECT id FROM news WHERE name = ?";
                $result = $this->db->query($sql, [$news->name])->getResult();
                if (!empty($result[0]->id)) {
                    $id = intval($result[0]->id);
                }
                if (empty($id)) {
                    // This is a new article, store it
                    #$sql = "INSERT INTO news VALUES (null, name, short, description, type, body, published, link, image, requested, expires, alert_style, version, read, actioned, actioned_by, actioned_date)";
                    $sql = "INSERT INTO news VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, 'n', 'n', '', '2001-01-01')";
                    $this->db->query($sql, [$news->name, $news->short, $news->description, $news->type, $news->body, $news->published, $news->link, $news->image, $news->expires, $news->alert_style, $news->version]);
                } else {
                    // Update this article
                    $news = $this->updateFieldData('news', $news);
                    $this->builder->set('actioned', 'n');
                    $this->builder->set('actioned_by', '');
                    $this->builder->set('actioned_date', '');

                    $this->builder->where('id', intval($id));
                    $this->builder->update($news);
                    if ($this->db->error()) {
                        return null;
                    }
                }
            }
        } else if ($action === 'vulnerabilities') {
                foreach ($body as $vuln) {
                    $id = model('App\Models\VulnerabilitiesModel')->create($vuln->attributes);
                }
        } else if ($action === 'vendors') {
            foreach ($body as $key => $value) {
                $value->name = $key;
                $id = model('App\Models\VendorsModel')->upsert($value);
            }
        }
        return $id;
    }

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $return = array();
        $sql = "SELECT * FROM `news` WHERE id = " . $id;
        $result = $this->db->query($sql)->getResult();
        if (!empty($result[0])) {
            $news = $result[0];
            log_message('debug', json_encode($news));
        }
        if ($news->type !== 'cve') {
            return array();
        }
        $sql = 'SELECT SUM(vulnerabilities_cache.count), vulnerabilities.cve from vulnerabilities_cache left join vulnerabilities on (vulnerabilities_cache.vulnerability_id = vulnerabilities.id) group by vulnerabilities.cve ORDER BY cve';
        $return['results'] = $this->db->query($sql)->getResult();
        return $return;
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

        $dictionary->about = '';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
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
