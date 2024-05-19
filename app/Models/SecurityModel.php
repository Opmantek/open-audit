<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use \stdClass;

use \Config\Services;

class SecurityModel extends BaseModel
{

    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('security');
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
        $properties = $resp->meta->properties;
        $properties[] = "orgs.name as `orgs.name`";
        $properties[] = "orgs.id as `orgs.id`";
        $this->builder->select($properties, false);
        $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        foreach ($resp->meta->filter as $filter) {
            if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
                $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
            }
            if (!in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<'])) {
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
     * @param  object|null $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create(object $data = null): ?int
    {
        if (empty($data)) {
            return null;
        }
        $data = $this->createFieldData('security', $data);
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
     * @param  int     $id The ID of the requested item
     * @param  bool    Not used. Only present so we are compatible with CodeIgniter\BaseModel::delete
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

    /**
     * Return an array containing arrays of related items to be stored in resp->included
     *
     * @param  int $id The ID of the requested item
     * @return array  An array of anything needed for screen output
     */
    public function includedRead(int $id = 0): array
    {
        $included = array();
        $sql = "SELECT * FROM security_policies WHERE security_id = $id";
        $result = $this->db->query($sql)->getResult();
        $included['policies'] = $result;
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
        $properties[] = 'security.*';
        $properties[] = 'orgs.name as `orgs.name`';
        $this->builder->select($properties, false);
        $this->builder->join('orgs', 'security.org_id = orgs.id', 'left');
        $this->builder->whereIn('orgs.id', $orgs);
        $this->builder->where($where);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'security');
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
        $query = $this->builder->getWhere(['id' => $id]);
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), 'security');
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        $this->db->query("DELETE FROM security");
        $this->db->query("DELETE FROM security_policies");

        $file = '/usr/local/open-audit/other/stig/U_CAN_Ubuntu_22-04_LTS_STIG_V1R1_Manual-xccdf.xml';
        $fileContents= file_get_contents($file);
        $object = simplexml_load_string($fileContents);

        switch ((string)$object->attributes()->id) {
            case "CAN_Ubuntu_22-04_LTS_STIG":
                $os = 'Ubuntu 20.04';
                break;

            case "RHEL_9_STIG":
                $os = 'Red Hat Enterprise Linux 9';
                break;
        }

        $sql = "INSERT INTO security VALUES (1, ?, 1, ?, 'stig', ?, ?, 'system', now())";
        $this->db->query($sql, [(string)$object->title, (string)$object->description, $os, (string)$object->{"plain-text"}[0]]);

        for ($i=0; $i < 10; $i++) {
            $item = $object->Group[$i];
            $json = json_encode($item);
            unset($item);
            $item = json_decode($json);
            $row = new stdClass();
            $row->external_ident = $item->{'@attributes'}->id;
            $row->name = $item->title;
            $row->weight = $item->Rule->{'@attributes'}->weight;
            $row->severity = $item->Rule->{'@attributes'}->severity;
            $row->version = $item->Rule->version;
            $row->description = $item->Rule->title;
            $row->ident = $item->Rule->ident;
            $row->notes = str_replace('<VulnDiscussion>', '', $item->Rule->description);
            $row->notes = substr($row->notes, 0, strpos($row->notes, '</VulnDiscussion>'));
            $row->fix_notes = $item->Rule->fixtext;
            $row->fix_id = $item->Rule->fix->{'@attributes'}->id;
            $row->check = $item->Rule->check->{'check-content'};
            $row->commands = '';
            $row->commands_pass = '';

            $sql = "INSERT INTO security_policies VALUES (null, ?, 1, ?, 1, ?, ?, ?, ?, ?, ?, ?, ?, ?, '', '', 'admin', now())";
            $this->db->query($sql, [$row->name, $row->description, $row->external_ident, $row->ident, $row->weight, $row->severity, $row->version, $row->notes, $row->fix_notes, $row->fix_id, $row->check]);
        }



        return true;
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
        // Accept our client data
        $data = $this->updateFieldData('security', $data);
        # $data->blah = 123; # Our bad record for testing failing
        // And update the record
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

        $collection = 'security';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'os', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT enables you to compare your installed operating system\'s configuration to Best Practise standards.';

        $dictionary->about = '<p>What I find remarkable is that this text has been the industry\'s standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting but even the leap into electronic typesetting, essentially unchanged except for an occasional \'ing\' or \'y\' thrown in. It\'s ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase \'it\'s Greek to me\' and \'greeking\' have common semantic roots” (The editors published his letter in a correction headlined “Lorem Oopsum”)</p>';

        $dictionary->notes = '<p>Lorem Ipsum</p>';

        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->type = 'Stig from DoD.';
        $dictionary->columns->name = 'The text that is displayed.';
        $dictionary->columns->description = 'The description.';
        $dictionary->columns->os = 'Which OS should this security apply to.';
        $dictionary->columns->release_info = 'The imported release version.';
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
