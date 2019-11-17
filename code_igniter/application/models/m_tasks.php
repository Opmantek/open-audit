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
* @version   3.3.0
* @link      http://www.open-audit.org
 */
class M_tasks extends MY_Model
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
        $sql = "SELECT * FROM `tasks` WHERE `id` = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);

        if ($result !== false) {
            for ($i=0; $i < count($result); $i++) {
                if ($result[$i]->type == 'discoveries' or $result[$i]->type == 'queries' or $result[$i]->type == 'summaries') {
                    $sql = "SELECT id, name FROM `" . $result[$i]->type . "` WHERE id = ?";
                    $data = array($result[$i]->sub_resource_id);
                    $data_result = $this->run_sql($sql, $data);
                    if (!empty($data_result[0]->name)) {
                        $result[$i]->{$result[$i]->type.'.id'} = $data_result[0]->id;
                        $result[$i]->{$result[$i]->type.'.name'} = $data_result[0]->name;
                        $result[$i]->sub_resource_name = $data_result[0]->name;
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                } else if ($result[$i]->type == 'reports') {
                    $result[$i]->sub_resource_name = "";
                }
            }
        }
        $result = $this->format_data($result, 'tasks');
        if (!empty($result[0]->attributes->options)) {
            $result[0]->attributes->options = my_json_decode($result[0]->attributes->options);
        }
        return ($result);
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
        if ($id != 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `tasks` WHERE `id` = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        } else {
            return false;
        }
    }

    public function collection(int $user_id = null, int $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = "SELECT * FROM tasks WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            if (!empty($result) and is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    if (!empty($result[$i]->options)) {
                        $result[$i]->options = json_decode($result[$i]->options);
                        foreach ($result[$i]->options as $key => $value) {
                            $result[$i]->{'options.'.$key} = $value;
                        }
                    }
                    if ($this->db->table_exists($result[$i]->type)) {
                        $sql = "SELECT name AS `name` FROM `" . $result[$i]->type . "` WHERE id = ?";
                        $data = array($result[$i]->sub_resource_id);
                        $data_result = $this->run_sql($sql, $data);
                        if (!empty($data_result[0]->name)) {
                            $result[$i]->sub_resource_name = $data_result[0]->name;
                        } else {
                            $result[$i]->sub_resource_name = '';
                        }
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                }
            }
            $result = $this->format_data($result, 'tasks');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM tasks LEFT JOIN orgs ON (tasks.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            if (!empty($result) and is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    if (!empty($result[$i]->options)) {
                        $result[$i]->options = json_decode($result[$i]->options);
                        foreach ($result[$i]->options as $key => $value) {
                            $result[$i]->{'options.'.$key} = $value;
                        }
                    } else {
                        $result[$i]->options = new stdCLass();
                    }
                    if ($this->db->table_exists($result[$i]->type)) {
                        $sql = "SELECT id, name FROM `" . $result[$i]->type . "` WHERE id = ?";
                        $data = array($result[$i]->sub_resource_id);
                        $data_result = $this->run_sql($sql, $data);
                        if (!empty($data_result[0]->name)) {
                            $result[$i]->{$result[$i]->type.'.id'} = $data_result[0]->id;
                            $result[$i]->{$result[$i]->type.'.name'} = $data_result[0]->name;
                            $result[$i]->sub_resource_name = $data_result[0]->name;
                        } else {
                            $result[$i]->sub_resource_name = '';
                        }
                    } else {
                        $result[$i]->sub_resource_name = '';
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'tasks');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
