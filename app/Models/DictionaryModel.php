<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

namespace App\Models;

use stdClass;

class DictionaryModel extends BaseModel
{
    public function __construct()
    {
        $this->db = db_connect();
        $this->dictionary = new \stdClass();
        $this->dictionary->link = 'For more detailed information, check the Open-AudIT <a href="https://community.opmantek.com/display/OA/$collection">Knowledge Base</a>.';
        $this->dictionary->id = 'The identifier column (integer) in the database (read only).';
        $this->dictionary->name = 'The name given to this item. Ideally it should be unique.';
        $this->dictionary->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
        $this->dictionary->description = 'Your description of this item.';
        $this->dictionary->options = 'A JSON object containing collection specific options.';
        $this->dictionary->edited_by = 'The name of the user who last changed or added this item (read only).';
        $this->dictionary->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
        $this->dictionary->system_id = 'The id of the linked device. Links to <code>system.id</code>';
    }

    /**
     * Return an array of columns the user is permitted to change the value of.
     * @param  string $collection The collection
     * @return array              An array of columns the user can update
     */
    public function updateFields1(string $collection = ''): array
    {
        if (empty($collection)) {
            return array();
        }
        if (!$this->db->tableExists($collection)) {
            return array();
        }
        $fields = $this->db->getFieldNames($collection);
        // Remove any non-user setable columns
        foreach ($fields as $key => $value) {
            if ($value === 'id') {
                unset($fields[$key]);
            }
            if ($value === 'edited_by') {
                unset($fields[$key]);
            }
            if ($value === 'edited_date') {
                unset($fields[$key]);
            }
        }
        $fields = array_values($fields);
        return $fields;
    }
}
