<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

if (file_exists('/usr/local/oac/VulnerabilitiesModel.php')) {

    include('/usr/local/oac/VulnerabilitiesModel.php');

} else {

    class VulnerabilitiesModel extends BaseModel
    {
        public function __construct()
        {
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
            return array();
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
            return array();
        }

        /**
         * Read the entire collection from the database
         *
         * @return array  An array of all entries
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
         * Reset a table
         *
         * @return bool Did it work or not?
         */
        public function reset(string $table = ''): bool
        {
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

            $collection = 'vulnerabilities';
            $dictionary = new stdClass();
            $dictionary->table = $collection;
            $dictionary->columns = new stdClass();

            $dictionary->attributes = new stdClass();
            $dictionary->attributes->collection = array('id', 'cve', 'name', 'vendor', 'published', 'affected');
            $dictionary->attributes->create = array('name', 'org_id', 'cve'); # We MUST have each of these present and assigned a value
            $dictionary->attributes->fields = $this->db->getFieldNames($collection); # All field names for this table
            $dictionary->attributes->fieldsMeta = $this->db->getFieldData($collection); # The meta data about all fields - name, type, max_length, primary_key, nullable, default
            $dictionary->attributes->update = $this->updateFields($collection); # We MAY update any of these listed fields

            $dictionary->sentence = 'Vulnerabilities reporting based on the NIST CVE feed.';

            $dictionary->about = '<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>';

            $dictionary->notes = '';

            $dictionary->link = $instance->dictionary->link;
            $dictionary->product = 'enterprise';
            $dictionary->columns->id = $instance->dictionary->id;
            $dictionary->columns->name = $instance->dictionary->name;
            $dictionary->columns->org_id = $instance->dictionary->org_id;
            $dictionary->columns->cve  = 'The CVE identifier.';
            $dictionary->columns->status = 'The user assigned status of pending, confirmed or declined. This should occur after reviewing the <code>filter</code> and generated <code>SQL</code>. If set to declined, this item will not appear on the Vulnerability list by default.';
            $dictionary->columns->attack_complexity = 'Complexity of the attack (Low or High).';
            $dictionary->columns->attack_requirements = '';
            $dictionary->columns->attack_vector = 'How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).';
            $dictionary->columns->automatable = '';
            $dictionary->columns->base_score = 'Overall severity score (0–10).';
            $dictionary->columns->base_severity = 'Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.';
            $dictionary->columns->description  = 'Human-readable explanation of the vulnerability.';
            $dictionary->columns->exploit_maturity = 'Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.';
            $dictionary->columns->impact_availability = 'A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).';
            $dictionary->columns->impact_confidentiality = 'A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).';
            $dictionary->columns->impact_integrity = 'A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).';
            $dictionary->columns->lastModified = 'Date when the CVE was last updated.';
            $dictionary->columns->privileges_required = 'Level of privileges needed to exploit (None, Low, High).';
            $dictionary->columns->published = 'Date and time when the CVE was published.';
            $dictionary->columns->published_date = 'Date when the CVE was published.';
            $dictionary->columns->references = '';
            $dictionary->columns->remediation = '';
            $dictionary->columns->scope = 'Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.';
            $dictionary->columns->type = 'Application, Operating System or Hardware.';
            $dictionary->columns->user_interaction = 'Whether user interaction is required (None, Passive, Active).';
            $dictionary->columns->vendor = '';
            $dictionary->columns->vuln_status = '';
            $dictionary->columns->filter  = 'A JSON array of values to test for this vulnerability.';
            $dictionary->columns->sql  = 'The generated (or manually overridden) SQL to test for this vulnerability.';
            $dictionary->columns->nvd_json  = 'The JSON record from the NVD feed.';
            $dictionary->columns->mitre_json = 'The JSON record from Mitre.';
            $dictionary->columns->edited_by = $instance->dictionary->edited_by;
            $dictionary->columns->edited_date = $instance->dictionary->edited_date;
        }
    }
}
