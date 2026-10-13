<?php

# Copyright © 2026 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class RacksModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'racks' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('racks');
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
     * @param  int|null $id    The ID of the rack to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        return true;
    }

    /**
     * Return supplementary data for the rack create/edit form
     *
     * @param  int   $id The ID of the rack whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }

    /**
     * Return supplementary data for a single rack's read view
     *
     * @param  int   $id The ID of the rack whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
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
     * @return array        An array of formatted racks entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return array();
    }

    /**
     * Read every rack from the database with no org-based filtering
     *
     * Returns all rows from the `racks` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every rack row
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
     * Truncate the racks table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'racks' table.
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
     * @param  int|null          $id   The ID of the rack to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    /**
     * Build and return the data dictionary for the racks collection
     *
     * Constructs a stdClass describing the `racks` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('racks')
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

        $collection = 'racks';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'description', 'row', 'room', 'floor', 'building', 'locations.name', 'orgs.name', 'used', 'free');
        $dictionary->attributes->create = array('name','org_id', 'ru_height'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Visualise your racks and devices.';

        $dictionary->about = '<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>';

        $dictionary->notes = '';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->location_id = 'The location the rack is located in. Links to <code>locations.id</code>.';
        $dictionary->columns->building = 'The building the rack is located in.';
        $dictionary->columns->floor = 'The floor the rack is located on.';
        $dictionary->columns->room = 'The room the rack is located in.';
        $dictionary->columns->row = 'The row the rack is located in.';
        $dictionary->columns->row_position = 'Where the rack is in the row.';
        $dictionary->columns->pod = 'The pod (if any) that this rack is part of.';
        $dictionary->columns->physical_height = 'The physical height (in CMs) of the rack.';
        $dictionary->columns->physical_width = 'The physical width (in CMs) of the rack.';
        $dictionary->columns->physical_depth = 'The physical depth (in CMs) of the rack.';
        $dictionary->columns->weight_empty = 'The physical weight (in KGs) of the rack when empty.';
        $dictionary->columns->weight_current = 'The physical weight (in KGs) of the rack at present.';
        $dictionary->columns->weight_max = 'The maximum physical weight (in KGs) this rack can hold.';
        $dictionary->columns->ru_start = 'This should be set to either 1 or the height of the rack.';
        $dictionary->columns->ru_height = 'How many rack units in height is this rack.';
        $dictionary->columns->type = 'The type of rack (compute, power, network, etc).';
        $dictionary->columns->purpose = 'What is the purpose of this rack.';
        $dictionary->columns->manufacturer = 'Who made this rack.';
        $dictionary->columns->model = 'The rack model.';
        $dictionary->columns->series = 'The rack series.';
        $dictionary->columns->serial = 'The rack serial.';
        $dictionary->columns->asset_number = 'The rack asset number.';
        $dictionary->columns->asset_tag = 'The rack asset tag.';
        $dictionary->columns->bar_code = 'The rack bar code.';
        $dictionary->columns->power_circuit = 'The power circuit this rack attaches to.';
        $dictionary->columns->power_sockets = 'How many power sockets in this rack.';
        $dictionary->columns->circuit_count = 'How many circuit feed to this rack.';
        $dictionary->columns->btu_total = 'The total BTU output by this rack.';
        $dictionary->columns->btu_max = 'The maximum total BTUs this rack is rated for.';
        $dictionary->columns->options = 'unused';
        $dictionary->columns->notes = 'unused';
        $dictionary->columns->tags = 'unused';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        return $dictionary;
    }
}
