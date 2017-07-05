<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * 
 * @version   2.0.2

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_licenses extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function read($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM licenses WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);

        if ($result[0]->org_descendants == 'n') {
            $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id = ? AND software.name LIKE ?";
            $data = array(intval($result[0]->org_id), (string)$result[0]->match_string);
            $data_result = $this->run_sql($sql, $data);
            if (!empty($data_result[0]->count)) {
                $result[0]->used_count = $data_result[0]->count;
            }
            unset ($sql, $data, $data_result);
        } else {
            $children = $CI->m_orgs->get_children($result[0]->org_id);
            $children[] = $result[0]->org_id;
            $children = implode(',', $children);
            $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id IN (?) AND software.name LIKE ?";
            $data = array((string)$children, (string)$result[0]->match_string);
            $data_result = $this->run_sql($sql, $data);
            if (!empty($data_result[0]->count)) {
                $result[0]->used_count = $data_result[0]->count;
            }
            unset ($sql, $data, $data_result);
        }

        $result = $this->format_data($result, 'licenses');
        return($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "DELETE FROM `licenses` WHERE id = ?";
        $data = array(intval($id));
        $this->run_sql($sql, $data);
        return true;
    }

    public function collection()
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $CI = & get_instance();
        $CI->load->model('m_orgs');
        $sql = $this->collection_sql('licenses', 'sql');
        $result = $this->run_sql($sql, array());
        if (!empty($result)) {
            foreach ($result as $item) {
                if ($item->org_descendants == 'n') {
                    $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id = ? AND software.name LIKE ?";
                    $data = array(intval($item->org_id), (string)$item->match_string);
                    $data_result = $this->run_sql($sql, $data);
                    if (!empty($data_result[0]->count)) {
                        $item->used_count = $data_result[0]->count;
                    }
                    unset ($sql, $data, $data_result);
                } else {
                    $children = $CI->m_orgs->get_children($item->org_id);
                    $children[] = $item->org_id;
                    $children = implode(',', $children);
                    $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id IN (?) AND software.name LIKE ?";
                    $data = array((string)$children, (string)$item->match_string);
                    $data_result = $this->run_sql($sql, $data);
                    if (!empty($data_result[0]->count)) {
                        $item->used_count = $data_result[0]->count;
                    }
                    unset ($sql, $data, $data_result);
                }
            }
        }
        $result = $this->format_data($result, 'licenses');
        return ($result);
    }

    public function execute($id = 0)
    {
        if ($id == 0) {
            $CI = & get_instance();
            $id = $CI->response->meta->id;
        }
        $id = intval($id);
        $sql = "SELECT * FROM licenses WHERE id = $id";
        $result = $this->run_sql($sql, array());
        if (empty($result[0])) {
            // TODO log an error, no matching license
            return;
        } else {
            $license = $result[0];
        }
        $sql = "SELECT system.id AS `system.id`, system.name AS `system.name`, software.name AS `software.name`, software.version AS `software.version` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE software.name LIKE '" . $license->match_string . "'";
        $result = $this->run_sql($sql, array());
        $result = $this->format_data($result, 'licenses');
        return ($result);
    }
}
