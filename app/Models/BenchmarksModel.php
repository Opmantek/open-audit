<?php

# Copyright © 2026 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;
use Config\Services;
use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\RSA;
use phpseclib3\Net\SFTP;
use phpseclib3\Net\SSH2;
use Masterminds\HTML5;

class BenchmarksModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'benchmarks' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('benchmarks');
        # Use the below to execute BaseModel::__construct
        # parent::__construct();
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
     * @param  object|null $data The data attributes
     *
     * @return int|null              The integer ID of the newly created item, or null on failure
     */
    public function create(?object $data): ?int
    {
        return null;
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int     $id The ID of the requested item
     * @param  bool    Not used. Only present so we are compatible with CodeIgniter\BaseModel::delete
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        return true;
    }

    public function queue(int $id = 0): bool
    {
        return true;
    }

    protected function isSshCredentialType(string $type): bool
    {
        return true;
    }

    public function execute(int $id = 0, int $device_id = 0): array
    {
        return array();
    }

    /**
     * Insert an entry into the benchmarks_log table
     *
     * @param int    $id The Benchmark ID
     * @param int    $device_id The Device ID
     * @param string $severity One of 'debug','info','notice','warning','error','critical','alert','emergency'
     * @param string $message The log line
     * @param string $output An optional command or other output
     * @return null
     */
    public function logCreate(int $benchmark_id, int $device_id, string $severity = 'info', string $message = '', string $output = '')
    {
        return;
    }

    /**
     * Return supplementary data for the benchmark collection view
     *
     * @return array  An array of supplementary data for the collection view
     */
    public function includedCollection(): array
    {
        return array();
    }

    /**
     * Return supplementary data for the benchmark create/edit form
     *
     * @param  int   $id The ID of the benchmark whose supplementary data to load
     *
     * @return array     An array of supplementary data for the create/edit form
     */
    public function includedCreateForm(int $id = 0): array
    {
        return array();
    }

    /**
     * Return supplementary data for a single benchmark's read view
     *
     * @param  int   $id The ID of the benchmark whose supplementary data to load
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
     * @return array        An array of formatted benchmarks entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return array();
    }

    /**
     * Read every benchmark from the database with no org-based filtering
     *
     * Returns all rows from the `benchmarks` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every benchmark row
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
     * Truncate the benchmarks table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'benchmarks' table.
     *
     * @param  string $table Unused; present for interface compatibility
     *
     * @return bool          true on success, false on failure
     */
    public function reset(string $table = ''): bool
    {
        return true;
    }

    /**
     * Update an individual item in the database
     *
     * @param  int|null          $id   The ID of the benchmark to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    /**
     * Build and return the data dictionary for the benchmarks collection
     *
     * Constructs a stdClass describing the `benchmarks` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('benchmarks')
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

        $collection = 'benchmarks';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'os', 'last_run');
        $dictionary->attributes->create = array('name','org_id','type'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT enables you to compare your installed operating system\'s configuration to Best Practise standards.';

        $dictionary->about = '<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>';

        $dictionary->notes = '<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>';

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'enterprise';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->os = 'Which OS this benchmark applies to.';
        $dictionary->columns->type = 'The benchmark type.';
        $dictionary->columns->install = 'Should we install Open-Scap on the target machine.';
        $dictionary->columns->devices = 'A JSON array of device IDs that will have this benchmark executed.';
        $dictionary->columns->last_run = 'The last time this benchmarks was executed.';
        $dictionary->columns->remediation = '';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        // Derived columns for GUI
        $dictionary->columns->number_of_devices = 'The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.';
        $dictionary->columns->schedule = 'When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.';
        return $dictionary;
    }
}
