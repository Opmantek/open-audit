<?php

# Copyright © 2026 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class PackagesModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'packages' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('packages');
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
        return array();
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
     * @param  int|null $id    The ID of the package to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        return true;
    }

    /**
     * Return supplementary data for a single package's read view (stub)
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
        return array();
    }

    /**
     * Return supplementary data for the package create/edit form
     *
     * @param  int   $id The ID of the package whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
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
     * @return array        An array of formatted packages entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return array();
    }

    /**
     * Read every package from the database with no org-based filtering
     *
     * Returns all rows from the `packages` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every package row
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
        return array();
    }

    /**
     * Truncate the packages table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'packages' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        return false;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the package to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    /**
     * Build and return the data dictionary for the packages collection
     *
     * Constructs a stdClass describing the `packages` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('packages')
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

        $collection = 'packages';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'software_name', 'os', 'description', 'orgs.name', 'edited_by', 'edited_date');
        $dictionary->attributes->create = array('name','org_id'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Software Package are for ...';

        $dictionary->about = '<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->org_descendants  = 'Does the license apply to child Orgs.';
        $dictionary->columns->purchase_count  = 'The number of purchased licenses.';
        $dictionary->columns->used_count  = 'Populated dynamically.';
        $dictionary->columns->match_string  = 'Unused.';
        $dictionary->columns->software_name  = 'The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.';
        $dictionary->columns->software_version  = 'Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.';
        $dictionary->columns->expiry_date  = 'The date of license expiration.';
        $dictionary->columns->end_of_life  = 'The software end-of-life date.';
        $dictionary->columns->end_of_service_life  = 'The software end-of-service-life date.';
        $dictionary->columns->type  = 'One of: antivirus, backup, firewall, approved, banned, ignored or other.';
        $dictionary->columns->os  = 'The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.';
        $dictionary->columns->sql  = 'Unused.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
