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
        #$query = $this->builder->get();
        $query = $this->builder->getWhere(['id' => 6]);
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
        $feed = $result[0];
        if (!empty($feed->url)) {
            $feed->link = "<span class=\"clearfix float-end\"><a href=\"" . $feed->url . "\" target=\"_blank\">" . __('Read More') . "</button>";
        } else {
            $feed->link = "<span class=\"clearfix float-end\"><a href=\"" . url_to('feedsRead', intval($feed->id)) . "\" >" . __('Read More') . "</button>";
        }
        $feed = new stdClass();
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
        $dictionary->attributes->collection = array('published', 'name', 'type', 'description', 'accepted');
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
        $dictionary->columns->accepted = '';
        $dictionary->columns->accepted_by = '';
        $dictionary->columns->accepted_date = '';
        return $dictionary;
    }
}
