<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use \stdClass;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.0.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Database
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Database
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Database extends BaseController
{

    public function update($action)
    {
        $this->databaseModel = model('App\Models\DatabaseModel');
        $meta = new stdClass();
        $meta->collection = 'database';
        $meta->action = 'updateForm';
        $meta->access_token = '';
        $meta->icon = 'fa fa-database';
        if ($action !== 'post') {
            $this->data = $this->databaseModel->updateForm();
            return view('shared/header', [
                'config' => $this->config,
                'dashboards' => filter_response($this->dashboards),
                'meta' => filter_response($meta),
                'queries' => array(),
                'roles' => filter_response($this->roles),
                'user' => filter_response($this->user)]) .
                view('databaseUpdateForm', ['data' => filter_response($this->data)]);
        }
        if ($action === 'post') {
            $output = $this->databaseModel->update();
            $errors = array();
            \Config\Services::session()->setFlashdata('success', "Database upgraded successfully. New database version is " . config('Openaudit')->display_version . " (" . config('Openaudit')->internal_version . ").");
            return view('shared/header', [
                'config' => $this->config,
                'dashboards' => filter_response($this->dashboards),
                'meta' => filter_response($meta),
                'queries' => array(),
                'roles' => filter_response($this->roles),
                'user' => filter_response($this->user)]) .
                view('databaseUpdate', ['data' => filter_response($this->data)]);
        }
    }



    public function compare()
    {
        helper('diff');
        $db = db_connect();
        $return = array();
        $tables = $db->listTables();

        $sql_file = file(APPPATH . '../other/open-audit.sql');
        $output = '';
        $body_output = '';
        $total_inserts = 0;
        $total_deletes = 0;

        $output .= "<style>\n";
        $output .= ".diff td {\n  vertical-align: top;\n  white-space: pre;\n  white-space: pre-wrap;\n  font-family: monospace;\n}\n";
        $output .= ".diffDeleted span {\n  border: 1px solid rgb(255,192,192);\n  background: rgb(255,224,224);\n}\n";
        $output .= ".diffInserted span {\n  border: 1px solid rgb(192,255,192);\n  background: rgb(224,255,224);\n}\n";
        $output .= "</style>\n";
        foreach ($tables as $table) {
            // From the DB
            $query = $db->query("SHOW CREATE TABLE `{$table}`");
            $result = $query->getResult();
            $db_schema = '';
            if (!empty($result[0]->{'Create Table'})) {
                $db_schema = preg_replace('/AUTO_INCREMENT=\d+ /', '', $result[0]->{'Create Table'});
            }

            // NOTE - the below exceptions and conversions are because MariaDB no longer encloses default interger values with single quotes.
            // Rather than alter the schema file (and 'break' old MySQL / MariaDB), just substitute the old way back in. See https://jira.mariadb.org/browse/MDEV-15377
            $db_schema = str_replace("NOT NULL DEFAULT 0.000,", "NOT NULL DEFAULT '0.000',", $db_schema);
            $db_schema = str_replace('NOT NULL DEFAULT 0,', "NOT NULL DEFAULT '0',", $db_schema);
            $db_schema = str_replace('NOT NULL DEFAULT 1,', "NOT NULL DEFAULT '1',", $db_schema);

            $db_schema = str_replace('unsigned DEFAULT 0,', "unsigned DEFAULT '0',", $db_schema);
            $db_schema = str_replace('unsigned DEFAULT 1,', "unsigned DEFAULT '1',", $db_schema);

            $db_schema = str_replace('unsigned NOT NULL DEFAULT 3,', "unsigned NOT NULL DEFAULT '3',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 4,', "unsigned NOT NULL DEFAULT '4',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 5,', "unsigned NOT NULL DEFAULT '5',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 24,', "unsigned NOT NULL DEFAULT '24',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 42,', "unsigned NOT NULL DEFAULT '42',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 100,', "unsigned NOT NULL DEFAULT '100',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 600,', "unsigned NOT NULL DEFAULT '600',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 1050,', "unsigned NOT NULL DEFAULT '1050',", $db_schema);
            $db_schema = str_replace('unsigned NOT NULL DEFAULT 2000,', "unsigned NOT NULL DEFAULT '2000',", $db_schema);

            $db_schema = str_replace("decimal(12,6) NOT NULL DEFAULT 0.000000", "decimal(12,6) NOT NULL DEFAULT '0.000000'", $db_schema);
            $db_schema = str_replace("float(10,6) NOT NULL DEFAULT 0.000000,", "float(10,6) NOT NULL DEFAULT '0.000000',", $db_schema);
            $db_schema = str_replace('timestamp NOT NULL DEFAULT current_timestamp()', "timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP", $db_schema);
            $db_schema = str_replace('text DEFAULT NULL,', "text,", $db_schema);


            // From the file
            $file_schema = '';
            for ($i=0; $i < count($sql_file); $i++) {
                if (strpos($sql_file[$i], "CREATE TABLE `{$table}`") !== false) {
                    $file_schema = $sql_file[$i];
                    for ($j=$i+1; $j < count($sql_file); $j++) {
                        if (strpos($sql_file[$j], '/*!') === false) {
                            $file_schema .= $sql_file[$j];
                        } else {
                            break;
                        }
                    }
                }
            }
            $file_schema = preg_replace('/AUTO_INCREMENT=\d+ /', '', $file_schema);
            $file_schema = str_replace(";\n", '', $file_schema);

            // Count the differences
            $diffClass = new \App\Helpers\Diff();
            $diff = $diffClass->compare($file_schema, $db_schema);
            $count_del = 0;
            $count_ins = 0;
            foreach ($diff as $line) {
                if ($line[1] === 1) {
                    $count_del += 1;
                }
                if ($line[1] === 2) {
                    $count_ins += 1;
                }
            }
            if ($count_ins !== 0) {
                $total_inserts = $total_inserts + $count_ins;
                $count_ins = "<span style=\"color:limegreen;\">{$count_ins}</span>";
            }
            if ($count_del !== 0) {
                $total_deletes = $total_deletes + $count_del;
                $count_del = "<span style=\"color:red;\">{$count_del}</span>";
            }
            // Output
            $body_output .= "<h2>{$table} (file -> database)</h2>\n";
            if (empty($file_schema)) {
                $body_output .= "<span style=\"color:red;\"><strong>{$table} does not exist in the file.</strong></span><br />\n";
            }
            if (!empty($file_schema)) {
                $body_output .= "<strong>Del: {$count_del} Ins: {$count_ins}</strong>\n";
                $table_output = $diffClass->toTable($diffClass->compare($file_schema, $db_schema));
                $temp = str_replace('<table class="diff">', '<table class="diff" style="width:100%">', $table_output);
                $body_output .= $temp;
            }
            $body_output .= "<br /><br />\n";
        }
        $output .= "<h2>Inserts: {$total_inserts} Deletes: {$total_deletes}</h2>\n<br /><br />\n" . $body_output;
        # echo $output;

        $meta = new stdClass();
        $meta->collection = 'database';
        $meta->action = 'read';
        $meta->access_token = '';
        $meta->icon = 'fa fa-database';

        return view('shared/header', [
            'config' => $this->config,
            'dashboards' => filter_response($this->dashboards),
            'meta' => filter_response($meta),
            'queries' => array(),
            'roles' => filter_response($this->roles),
            'user' => filter_response($this->user)]) .
            view('databaseSchemaCompare', ['data' => $output]);
    }
}
