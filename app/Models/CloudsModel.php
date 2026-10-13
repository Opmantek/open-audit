<?php

# Copyright © 2026 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class CloudsModel extends BaseModel
{
    /**
     * Constructor. Initialises the database connection and sets the query
     * builder to target the 'clouds' table.
     */
    public function __construct()
    {
        $this->db = db_connect();
        $this->builder = $this->db->table('clouds');
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
     * @param  int|null $id    The ID of the cloud to delete
     * @param  bool     $purge Unused; present for interface compatibility
     *
     * @return bool            true on success, false on failure
     */
    public function delete($id = null, bool $purge = false): bool
    {
        return true;
    }

    /**
     * Return supplementary data for the cloud collection view
     *
     * @param  int   $id The ID of the cloud whose supplementary data to load
     *
     * @return array     An array of supplementary data for the collection view
     */
    public function includedCollection(int $id = 0): array
    {
        return array();
    }

    /**
     * Return supplementary data for a single cloud's read view
     *
     * @param  int   $id The ID of the cloud whose supplementary data to load
     *
     * @return array     An array of supplementary data for the read view
     */
    public function includedRead(int $id = 0): array
    {
        return array();
    }

    /**
     * Return supplementary data for the cloud create/edit form (stub)
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
     * Read the entire collection from the database that the user is allowed to read
     *
     * Resolves the full set of org IDs visible to the current user (including
     * both ancestors and descendants) and filters the result accordingly.
     *
     * @param  array $where Additional WHERE conditions to apply to the query
     * @param  array $orgs  List of org IDs to restrict results to; if empty,
     *                      the current user's accessible orgs are used
     *
     * @return array        An array of formatted clouds entries
     */
    public function listUser($where = array(), $orgs = array()): array
    {
        return array();
    }

    /**
     * Read every cloud from the database with no org-based filtering
     *
     * Returns all rows from the `clouds` table with no additional filtering.
     * Use {@see listUser()} when results should be restricted to the current user's accessible orgs.
     *
     * @return array  Array of stdClass objects representing every cloud row
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
     * Truncate the clouds table, removing all rows
     *
     * The $table parameter is accepted for interface compatibility but is
     * ignored; the method always resets the 'clouds' table.
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
     * @param  int|null          $id   The ID of the cloud to update
     * @param  object|array|null $data The data attributes to apply
     *
     * @return bool                    true on success, false on failure
     */
    public function update($id = null, $data = null): bool
    {
        return true;
    }

    /**
     * Insert a cloud_log row
     *
     * @param  cloud_id         The linked clouds.id
     * @param  message          A message
     * @param  severity_text    enum('debug','info','notice','warning','error','critical','alert','emergency') NOT NULL DEFAULT 'notice'
     * @param  pid              The process ID
     *
     * @return int      The ID of the inserted row
     */
    public function log(int $cloud_id = 0, string $message = '', string $severity_text = 'info', int $pid = 0): int
    {
        return 0;
    }

    /**
     * Build and return the data dictionary for the clouds collection
     *
     * Constructs a stdClass describing the `clouds` table for use by the
     * framework's help, validation, and API-documentation systems.
     * The returned object includes:
     *  - table       : the collection name ('clouds')
     *  - columns     : per-column human-readable descriptions and allowed values
     *  - attributes  : lists of fields used for collection display, create, and update
     *  - sentence    : a one-line summary of the resource
     *  - about       : an HTML paragraph describing the resource
     *  - notes       : additional free-text notes (may be empty)
     *  - link        : URL to external documentation
     *  - product     : minimum product tier required ('community')
     *
     * @return object  Populated stdClass dictionary object
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $uri = new \CodeIgniter\HTTP\URI(url_to('helpFAQ'));
        $helpFAQ = $uri->getPath();

        $collection = 'clouds';
        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new stdClass();

        $dictionary->attributes = new stdClass();
        $dictionary->attributes->collection = array('id', 'name', 'type', 'description', 'orgs.name');
        $dictionary->attributes->create = array('name','org_id','type','credentials','options'); # We MUST have each of these present and assigned a value
        $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
        $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
        $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

        $dictionary->sentence = 'Open-AudIT can discover and audit your cloud-based virtual machines. You provide the credentials and Open-AudIT will query the Amazon or Microsoft APIs to determine what devices you have, their state, any associated networks and locations and then run discovery upon each cloud instance. You get all the regular Open-AudIT details, but now you also get cloud-specific details like size.';

        $dictionary->about = '<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="' . $helpFAQ . '?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="' . $helpFAQ . '?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>';

        $dictionary->notes = "<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>";

        $dictionary->link = $instance->dictionary->link;
        $dictionary->product = 'community';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = $instance->dictionary->name;
        $dictionary->columns->org_id = $instance->dictionary->org_id;
        $dictionary->columns->description = $instance->dictionary->description;
        $dictionary->columns->credentials = 'Your access credentials, as per that clouds native API.';
        $dictionary->columns->type = 'Either Amazon, Google or Microsoft.';
        $dictionary->columns->status = 'The current status of the Cloud Discovery.';
        $dictionary->columns->options = 'Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.';
        $dictionary->columns->snmp = 'Should we test for SNMP using UDP port 161.';
        $dictionary->columns->ssh = 'Should we test for SSH using TCP port 22.';
        $dictionary->columns->wmi = 'Should we test for WMI using TCP port 135.';
        $dictionary->columns->edited_by = $instance->dictionary->edited_by;
        $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        // AWS
        $dictionary->columns->key = 'Your AWS EC2 API key.';
        $dictionary->columns->secret_key = 'The secret key used in conjunction with your AWS EC2 API key.';
        // Azue
        $dictionary->columns->subscription_id = 'Your Microsoft Azure Subscription ID.';
        $dictionary->columns->tenant_id = 'Your Microsoft Azure Tenant ID.';
        $dictionary->columns->client_id = 'Your Microsoft Azure Client ID.';
        $dictionary->columns->client_secret = 'Your Microsoft Azure Client Secret.';
        // Google Compute
        $dictionary->columns->json = 'Your Google Compute credentials as JSON.';
        // Derived columns for GUI
        $dictionary->columns->last_run = 'The last date and time this item was executed (read only).';
        $dictionary->columns->duration = 'Calculated upon completion, the time taken to execute this item.';
        $dictionary->columns->locations = 'The number of associated locations. Links to <code>locations.cloud_id</code>.';
        $dictionary->columns->networks = 'The number of associated networks. Links to <code>networks.cloud_id</code>.';
        $dictionary->columns->devices_retrieved = 'The number of devices in this cloud. Links to <code>devices.cloud_id</code>.';
        $dictionary->columns->devices_audited = 'The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.';
        $dictionary->columns->devices_not_audited = 'The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.';
        $dictionary->columns->devices_running = 'The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.';
        $dictionary->columns->devices_stopped = 'The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.';

        return $dictionary;
    }
}
