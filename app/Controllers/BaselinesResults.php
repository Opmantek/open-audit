<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.6.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object BaselinesResults
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\BaselinesPolicies
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class BaselinesResults extends BaseController
{
    /**
     * Export a baseline by devices or policies
     *
     * @access public
     * @return void
     */
    public function export($id, $section)
    {
        $id = intval($id);
        $item = $this->baselines_resultsModel->read($id);
        $filename = 'baselineResult_' . $id . '_by_' . $section;
        $result = $item[0]->attributes->result;
        if ($section === 'device') {
            $output = "\"device id\",\"device name\",\"policy name\",\"status\",\"test1\",\"test2\",\"test3\"\n";
        }
        if ($section === "policy") {
            $output = "\"policy name\",\"device id\",\"device name\",\"status\",\"test1\",\"test2\",\"test3\"\n";
        }
        $lines = array();
        foreach ($result->policy as $key) {
            $policyname = $key->name;
            foreach ($key->result as $r) {
                $id = (!empty($r->id)) ? str_replace("\r", "\\r", str_replace("\n", "\\n", str_replace('"', '""', (string)$r->id))) : '';
                $devicename = (!empty($r->name)) ? str_replace("\r", "\\r", str_replace("\n", "\\n", str_replace('"', '""', $r->name))) : '';
                $status = (!empty($r->status)) ? str_replace("\r", "\\r", str_replace("\n", "\\n", str_replace('"', '""', $r->status))) : '';
                $test1 = (!empty($r->test1)) ? str_replace("\r", "\\r", str_replace("\n", "\\n", str_replace('"', '""', $r->test1))) : '';
                $test2 = (!empty($r->test2)) ? str_replace("\r", "\\r", str_replace("\n", "\\n", str_replace('"', '""', $r->test2))) : '';
                $test3 = (!empty($r->test3)) ? str_replace("\r", "\\r", str_replace("\n", "\\n", str_replace('"', '""', $r->test3))) : '';
                if (!empty($this->config->output_escape_csv) and $this->config->output_escape_csv === 'y') {
                    if (strpos($id, '=') === 0 or strpos($id, '+') === 0 or strpos($id, '-') === 0 or strpos($id, '@') === 0) {
                        $id = "'" . $id;
                    }
                    if (strpos($devicename, '=') === 0 or strpos($devicename, '+') === 0 or strpos($devicename, '-') === 0 or strpos($devicename, '@') === 0) {
                        $devicename = "'" . $devicename;
                    }
                    if (strpos($status, '=') === 0 or strpos($status, '+') === 0 or strpos($status, '-') === 0 or strpos($status, '@') === 0) {
                        $status = "'" . $status;
                    }
                    if (strpos($test1, '=') === 0 or strpos($test1, '+') === 0 or strpos($test1, '-') === 0 or strpos($test1, '@') === 0) {
                        $test1 = "'" . $test1;
                    }
                    if (strpos($test2, '=') === 0 or strpos($test2, '+') === 0 or strpos($test2, '-') === 0 or strpos($test2, '@') === 0) {
                        $test2 = "'" . $test2;
                    }
                    if (strpos($test3, '=') === 0 or strpos($test3, '+') === 0 or strpos($test3, '-') === 0 or strpos($test3, '@') === 0) {
                        $test3 = "'" . $test3;
                    }
                }
                if ($section === 'device') {
                    $line = '"' . $id . '","' . $devicename . '","' . $policyname . '","' . $status . '","' . $test1 . '","' . $test2 . '","' . $test3 . "\"\n";
                }
                if ($section === 'policy') {
                    $line = '"' . $policyname . '","' . $id . '","' . $devicename . '","' . $status . '","' . $test1 . '","' . $test2 . '","' . $test3 . "\"\n";
                }
                $lines[] = $line;
            }
        }
        asort($lines);
        $output = $output . implode("", $lines);
        $this->response->setContentType('text/csv');
        $this->response->noCache();
        $this->response->setHeader('Content-Disposition', 'attachment;filename="' . $filename . '.csv"');
        echo $output;
        return;
    }
}
