<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;
use \Config\Mimes;

class StandardsResultsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'standards_results' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('standards_results');
    }

    /**
     * Read the collection from the database
     *
     * @param  object $resp An object containing the properties, filter, sort and limit as passed by the user
     *
     * @return array        An array of formatted entries
     */
    public function collection(object $resp): array
    {
        // $properties = $resp->meta->properties;
        // $properties[] = "orgs.name as `orgs.name`";
        // $properties[] = "orgs.id as `orgs.id`";
        // $this->builder->select($properties, false);
        // $this->builder->join('orgs', $resp->meta->collection . '.org_id = orgs.id', 'left');
        // foreach ($resp->meta->filter as $filter) {
        //     if (in_array($filter->operator, ['!=', '>=', '<=', '=', '>', '<', 'like', 'not like'])) {
        //         $this->builder->{$filter->function}($filter->name . ' ' . $filter->operator, $filter->value);
        //     } else {
        //         $this->builder->{$filter->function}($filter->name, $filter->value);
        //     }
        // }
        // $this->builder->orderBy($resp->meta->sort);
        // $this->builder->limit($resp->meta->limit, $resp->meta->offset);
        $query = $this->builder->get();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        return format_data($query->getResult(), $resp->meta->collection);
    }

    /**
     * Create an individual item in the database
     *
     * @param  object|array|null $data The data attributes
     *
     * @return int|null              The integer ID of the newly created item, or null on failure
     */
    public function create($data = null): ?int
    {
        return null;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int|null $id    The ID of the standards_result to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        return false;
    }

    /**
     * Return supplementary data for a single standards_result's read view (stub)
     *
     * Reserved for future implementation. Currently returns an empty array;
     * no data is fetched from the database.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     An empty array
     */
    public function includedRead(int $id = 0): array
    {
        $return = array();
        $sql = "SELECT standards_policies.* FROM standards_policies LEFT JOIN standards_results ON (standards_results.policy_id = standards_policies.id) WHERE standards_results.id = ?";
        $result = $this->db->query($sql, [$id])->getResult();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $return['standards_policies'] = format_data($result, 'standards_policies');

        $sql = "SELECT standards.* FROM standards LEFT JOIN standards_results ON (standards_results.standard_id = standards.id) WHERE standards_results.id = ?";
        $result = $this->db->query($sql, [$id])->getResult();
        if ($this->sqlError($this->db->error())) {
            return array();
        }
        $return['standards'] = format_data($result, 'standards');

        return $return;
    }

    /**
     * Return supplementary data for the standards_result create/edit form
     *
     * @param  int   $id The ID of the standards_result whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        $include = array();
        return $include;
    }

    /**
     * Read the entire collection from the database that the user is allowed to read
     *
     * Resolves the full set of org IDs visible to the current user (including
     * both ancestors and descendants) and filters the result accordingly.
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted standards_results entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return array();
    }

    /**
     * Read every standards_result from the database with no org-based filtering
     *
     * Returns all rows from the `standards_results` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every standards_result row
     */
    public function listAll(): array
    {
        return array();
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
        $result = $query->getResult();

//             $result[0]->links = '[
//     {
//         "link": "https://firstwavetechnologyptyltd-my.sharepoint.com/personal/simon_may_firstwavecloud_com/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fsimon%5Fmay%5Ffirstwavecloud%5Fcom%2FDocuments%2FMicrosoft%20Teams%20Chat%20Files%2FCIS%5FCheck%5FPoint%5FFirewall%5FBenchmark%5Fv1%2E1%2E0%2Epdf&parent=%2Fpersonal%2Fsimon%5Fmay%5Ffirstwavecloud%5Fcom%2FDocuments%2FMicrosoft%20Teams%20Chat%20Files",
//         "name": "CIS CheckPoint Firewall Benchmark"
//     },
//     {
//         "link": "https://firstwavetechnologyptyltd-my.sharepoint.com/:p:/r/personal/simon_may_firstwavecloud_com/_layouts/15/Doc.aspx?sourcedoc=%7BAB917B3E-8769-4FA7-8AA8-50C3ADF33580%7D&file=POC%20Trial%20Guidance%20FCT-%20OAE.pptx&action=edit&mobileredirect=true",
//         "name": "Open-AudIT PowerPoint"
//     },
//     {
//         "link": "file://Users/mark/Downloads/image.png",
//         "name": "File on Disk"
//     }
// ]';

        if (!empty($result[0]->links)) {
            try {
                $result[0]->links = json_decode($result[0]->links, false, 512, JSON_THROW_ON_ERROR);
            } catch (\JsonException $e) {
                log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            }
            if (!empty($result[0]->links)) {
                foreach ($result[0]->links as $item) {
                    $item->icon = base_url() . 'mime/' . 'web.svg';
                    foreach (\Config\Mimes::$mimes as $key => $value) {
                        if (stripos(urldecode($item->link), '.' . $key) !== false) {
                            if (is_array($value)) {
                                $item->icon = base_url() . 'mime/' . str_replace('/', '-', $value[0]) . '.svg';
                            }
                            if (is_string($value)) {
                                $item->icon = base_url() . 'mime/' . str_replace('/', '-', $value) . '.svg';
                            }
                            break;
                        }
                    }
                }
                $result[0]->links = json_encode($result[0]->links);
            }
        }
        return format_data($result, 'standards_results');
    }

    /**
     * Truncate the standards_results table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'standards_results' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        if ($this->tableReset('standards_results')) {
            return true;
        }
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the standards_result to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        $data = $this->updateFieldData('standards_results', $data);
        $this->builder->where('id', intval($id));
        $this->builder->update($data);
        if ($this->sqlError($this->db->error())) {
            return false;
        }
        return true;
    }

    /**
     * Build and return the data dictionary for the standards_results collection
     *
     * Constructs a stdClass describing the `standards_results` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('standards_results')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('enterprise')
     *
     * @return object  Populated stdClass dictionary object
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'clusters';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array(); 
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT enables you to create your answers for ISO 27001.';

        $dictionary->about = '<p>Standards are stored in Open-AudIT.<br /><br />' . $instance->dictionary->link . '<br /><br /></p>';

        $dictionary->notes = '';
        $dictionary->link = $instance->dictionary->link;

        $dictionary->product = 'enterprise';

        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->standard_id = 'Links to <code>standards.id</code>';
        $dictionary->columns->policy_id = 'Links to <standards_policies.id</code>';
        $dictionary->columns->applied = 'Has this policy been applied in this organization.';
        $dictionary->columns->maturity_score = '';
        $dictionary->columns->maturity_level = '';
        $dictionary->columns->legal_requirements = '';
        $dictionary->columns->contractual_obligations = '';
        $dictionary->columns->business_requirements = '';
        $dictionary->columns->best_practises = '';
        $dictionary->columns->risk_assesment_result = '';
        $dictionary->columns->implementation_notes = '';
        $dictionary->columns->exclusion_reasons = '';
        $dictionary->columns->responsibility = '';
        $dictionary->columns->attachments = '';
        $dictionary->columns->links = '';
        $dictionary->columns->improvement_opportunities = '';
        $dictionary->columns->result = '';
        $dictionary->columns->notes = '';

        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
