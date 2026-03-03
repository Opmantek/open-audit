<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class HelpModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection.
     */
    public function __construct()
    {
        $this->db = db_connect();
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
     * Delete an individual item from the database, by ID (stub)
     *
     * Reserved for future implementation. Always returns true.
     *
     * @param  int|null $id    Unused; present for interface compatibility
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            Always true
     */
    public function delete($id = null, bool $purge = false): bool
    {
        return true;
    }

    /**
     * Return supplementary data for a single help's read view (stub)
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
     * Return supplementary data for the help create/edit form (stub)
     *
     * Reserved for future implementation. Currently returns an empty array;
     * no data is fetched from the database.
     *
     * @param  int   $id Unused; present for interface compatibility
     *
     * @return array     An empty array
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }


    /**
     * Read the entire collection from the database that the user is allowed to read (stub)
     *
     * Reserved for future implementation. Currently returns an empty array.
     *
     * @param  array $where Unused; present for interface compatibility
     * @param  array $orgs  Unused; present for interface compatibility
     *
     * @return array        An empty array
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return array();
    }

    /**
     * Read every help from the database with no org-based filtering (stub)
     *
     * Reserved for future implementation. Currently returns an empty array.
     *
     * @return array  An empty array
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
     * Truncate the help data, removing all rows (stub)
     *
     * Reserved for future implementation. Always returns false.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          Always false
     */
    public function reset(string $table = ''): bool
    {
        return false;
    }

    /**
     * Update an individual item in the database (stub)
     *
     * Reserved for future implementation. Always returns false.
     *
     * @param  int|null          $id   Unused; present for interface compatibility
     * @param  object|array|null $data Unused; present for interface compatibility
     *
     * @return bool                    Always false
     */
    public function update($id = null, $data = null): bool
    {
        return false;
    }

    /**
     * Build and return the data dictionary for the help collection
     *
     * Constructs a stdClass describing the `help` collection for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('help')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('professional')
     *
     * @return object  Populated stdClass dictionary object
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'maps';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array();
        $dictionary->attributes->fields = array();
        $dictionary->attributes->fieldsMeta = array();
        $dictionary->attributes->update = array();

        $dictionary->sentence = "Amazing support from FirstWave - or the community if you like. Its the no excuses, no exceptions, can-do way of thinking that our staff bring to work every day. Your complete satisfaction is our priority. Anything less is simply unacceptable.";

        $dictionary->about = '<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'professional';
        return $dictionary;
    }
}
