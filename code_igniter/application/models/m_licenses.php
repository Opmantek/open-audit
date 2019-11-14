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
* @category  Model
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.2.2
* @link      http://www.open-audit.org
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
        $CI = & get_instance();
        if ($id == '') {
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM licenses WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        if (is_array($result) and !empty($result)) {
            for ($i=0; $i < count($result); $i++) { 
                $result[$i]->used_count = $this->count($result[$i]->id);
            }
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

    public function collection(int $user_id = null, int $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = "SELECT * FROM licenses WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            if (is_array($result) and !empty($result)) {
                for ($i=0; $i < count($result); $i++) { 
                    $result[$i]->used_count = $this->count($result[$i]->id);
                }
            }
            $result = $this->format_data($result, 'licenses');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM licenses LEFT JOIN orgs ON (licenses.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'licenses');
            if (is_array($result) and !empty($result)) {
                for ($i=0; $i < count($result); $i++) { 
                    $result[$i]->used_count = $this->count($result[$i]->id);
                }
            }
            $CI->response->meta->filtered = count($CI->response->data);
        }
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



    public function count($id = 0)
    {
        $CI = & get_instance();
        $id = intval($id);
        $sql = "SELECT * FROM licenses WHERE id = $id";
        $result = $this->run_sql($sql, array());
        if (empty($result[0])) {
            // TODO log an error, no matching license
            return 0;
        } else {
            $license = $result[0];
        }
        if (!empty($license)) {
            if ($license->org_descendants == 'n') {
                $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id = ? AND software.name LIKE ?";
                $data = array(intval($license->org_id), (string)$license->match_string);
                $data_result = $this->run_sql($sql, $data);
                if (!empty($data_result[0]->count)) {
                    $license->used_count = $data_result[0]->count;
                }
                unset($sql, $data, $data_result);
            } else {
                $children = $CI->m_orgs->get_children($license->org_id);
                $children[] = $license->org_id;
                $children = implode(',', $children);
                $sql = "SELECT count(software.name) AS `count` FROM system LEFT JOIN software ON (system.id = software.system_id AND software.current = 'y') WHERE system.org_id IN (?) AND software.name LIKE ?";
                $data = array((string)$children, (string)$license->match_string);
                $data_result = $this->run_sql($sql, $data);
                if (!empty($data_result[0]->count)) {
                    $license->used_count = $data_result[0]->count;
                }
                unset($sql, $data, $data_result);
            }
            return intval($license->used_count);
        } else {
            return 0;
        }
    }
}
