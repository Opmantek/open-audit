<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Models;

use stdClass;

class ReportsModel extends BaseModel
{

    public function __construct()
    {
        # $this->db = db_connect();
        # $this->builder = $this->db->table('attributes');
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
        $reports = $this->list();
        return $reports;
    }

    /**
     * Create an individual item in the database
     *
     * @param  object $data The data attributes
     *
     * @return int|false    The Integer ID of the newly created item, or false
     */
    public function create($data = null)
    {
        return false;
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
    public function listUser($where = array()): array
    {
        $reports = $this->list();
        return $reports;
    }

    /**
     * Read the entire collection from the database
     *
     * @return array  An array of all entries
     */
    public function listAll(): array
    {
        $reports = $this->list();
        return $reports;
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
        $reports = $this->list();
        $report = array();
        foreach ($reports as $item) {
            if ($item->id === $id) {
                $report[] = $item;
            }
        }
        return $report;
    }

    /**
     * Reset a table
     *
     * @return bool Did it work or not?
     */
    public function reset(string $table = ''): bool
    {
        return false;
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
        return false;
    }

    public function list()
    {
        $reports = array();
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  10000;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/10000";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 10000;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered Today";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  10001;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/10001";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 10001;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered Yesterday";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  10002;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/10002";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 10002;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered in the Last 7 Days";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  10003;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/10003";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 10003;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Discovered in the Last 30 Days";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  20000;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/20000";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 20000;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered Today";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  20001;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/20001";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 20001;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered Yesterday";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  20002;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/20002";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 20002;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered in the Last 7 Days";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  20003;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/20003";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 20003;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Software Discovered in the Last 30 Days";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  30000;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/30000";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 30001;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 7 Days";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  30001;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/30001";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 30002;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 30 Days";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  30002;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/30002";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 30003;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 90 Days";
        $reports[] = $enterprise_report;
        unset($enterprise_report);
        $enterprise_report = new \stdClass();
        $enterprise_report->id =  30003;
        $enterprise_report->links = new \StdClass();
        $enterprise_report->links->self = "/omk/open-audit/reports/30003";
        $enterprise_report->type = "reports";
        $enterprise_report->attributes = new \StdClass();
        $enterprise_report->attributes->id = 30004;
        $enterprise_report->attributes->description = "";
        $enterprise_report->attributes->menu_category = "Discovery";
        $enterprise_report->attributes->menu_display = "y";
        $enterprise_report->attributes->name = "Devices Not Seen for 180 Days";
        $reports[] = $enterprise_report;

        return $reports;
    }

    /**
     * The dictionary item
     *
     * @return object  The stdClass object containing the dictionary
     */
    public function dictionary(): object
    {
        $instance = & get_instance();

        $collection = 'reports';
        $dictionary = new \StdClass();
        $dictionary->table = $collection;
        $dictionary->columns = new \StdClass();

        $dictionary->attributes = new \StdClass();
        $dictionary->attributes->collection = array();
        $dictionary->attributes->create = array();
        $dictionary->attributes->fields = array();
        $dictionary->attributes->fieldsMeta = array();
        $dictionary->attributes->update = array();

        $dictionary->about = '<p></p>';

        $dictionary->notes = '<p></p>';

        $dictionary->product = 'professional';
        $dictionary->columns->id = $instance->dictionary->id;
        $dictionary->columns->name = 'The text that is displayed.';
        return $dictionary;
    }
}
