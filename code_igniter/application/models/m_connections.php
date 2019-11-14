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
class M_connections extends MY_Model
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
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        if ($id !== 0) {
            $sql = "SELECT * FROM connections WHERE id = ?";
            $data = array($id);
            $result = $this->run_sql($sql, $data);
            $result = $this->format_data($result, 'connections');
            return ($result);
        }
        return false;
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        if ($id !== 0) {
            $CI = & get_instance();
            $sql = "DELETE FROM `connections` WHERE id = ?";
            $data = array(intval($id));
            $this->run_sql($sql, $data);
            return true;
        }
        return false;
    }

    public function collection(int $user_id = null, int $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = "SELECT * FROM connections WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'connections');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM connections LEFT JOIN orgs ON (connections.org_id = orgs.id) " . 
                    $CI->response->meta->internal->filter . " " . 
                    $CI->response->meta->internal->groupby . " " . 
                    $CI->response->meta->internal->sort . " " . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            # Add in locations.name for location_name_a and _b
            if (is_array($result)) {
                $CI->load->model('m_locations');
                $locations = $CI->m_locations->collection($CI->user->id);
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->location_id_a = intval($result[$i]->location_id_a);
                    $result[$i]->location_id_b = intval($result[$i]->location_id_b);
                    $result[$i]->location_name_a = '';
                    $result[$i]->location_name_b = '';
                    foreach ($locations as $location) {
                        if ($location->id == $result[$i]->location_id_a) {
                            $result[$i]->location_name_a = $location->attributes->name;
                        }
                        if ($location->id == $result[$i]->location_id_b) {
                            $result[$i]->location_name_b = $location->attributes->name;
                        }
                    }
                }
            }
            # Add in device names for system_id_a and _b
            if (is_array($result)) {
                for ($i=0; $i < count($result); $i++) {
                    $result[$i]->system_id_a = intval($result[$i]->system_id_a);
                    $result[$i]->system_id_b = intval($result[$i]->system_id_b);
                    if (!empty($result[$i]->system_id_a)) {
                        $sql = "SELECT `name` FROM system WHERE id = " . $result[$i]->system_id_a;
                        $query = $this->db->query($sql);
                        $result = $query->result();
                        if (!empty($result[0]->name)) {
                            $result[$i]->system_name_a = $result[0]->name;
                        }
                    }
                    if (!empty($result[$i]->system_id_b)) {
                        $sql = "SELECT `name` FROM system WHERE id = " . $result[$i]->system_id_b;
                        $query = $this->db->query($sql);
                        $result = $query->result();
                        if (!empty($result[0]->name)) {
                            $result[$i]->system_name_b = $result[0]->name;
                        }
                    }
                }
            }
            $CI->response->data = $this->format_data($result, 'connections');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
