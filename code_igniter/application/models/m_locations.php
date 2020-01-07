<?php
/**
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
*
* PHP version 5.3.3
* 
* @category  Model
* @package   Locations
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Locations
*
* @access   public
* @category Model
* @package  Locations
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_locations extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->log = new stdClass();
        $this->log->status = 'reading data';
        $this->log->type = 'system';
    }

    public function read($id = 0)
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT locations.*, orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, clouds.id AS `clouds.id`, clouds.name AS `clouds.name` FROM `locations` LEFT JOIN `orgs` ON (orgs.id = locations.org_id) LEFT JOIN clouds ON (locations.cloud_id = clouds.id) WHERE locations.id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'locations');
        return ($result);
    }

    public function delete($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'deleting data';
        stdlog($this->log);
        $id = intval($id);
        # never allowed to delete the default location
        if ($id != 1) {
            #$CI = & get_instance(); # don't think we need this
            $sql = "DELETE FROM `locations` WHERE id = ?";
            $data = array($id);
            $test = $this->run_sql($sql, $data);
            if (!empty($test)) {
                return true;
            } else {
                return false;
            }
        } else {
            log_error('ERR-0013', 'm_locations::delete');
            return false;
        }
    }

    public function children($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        $this->log->status = 'reading children data';
        stdlog($this->log);
        $id = intval($id);
        $sql = "SELECT buildings.*, orgs.name AS `orgs.name`, locations.name as `locations.name`, count(floors.id) as `floors_count` FROM `buildings` LEFT JOIN orgs ON (buildings.org_id = orgs.id) LEFT JOIN locations ON (locations.id = buildings.location_id) LEFT JOIN floors ON (floors.building_id = buildings.id) WHERE buildings.location_id = ?";
        $data = array(intval($id));
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'buildings');
        return ($result)    ;
    }

    public function sub_resource($id = '')
    {
        $this->log->function = strtolower(__METHOD__);
        stdlog($this->log);
        $id = intval($id);
        if ($id === 0) {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        }
        $sql = "SELECT system.id AS `system.id`, system.icon AS `system.icon`, system.type AS `system.type`, system.name AS `system.name`, system.domain AS `system.domain`, system.ip AS `system.ip`, system.description AS `system.description`, system.os_family AS `system.os_family`, system.status AS `system.status` FROM system WHERE system.location_id = ?";
        $data = array((string)$id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'devices');
        return $result;
    }

    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if (!empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = "SELECT * FROM locations WHERE org_id IN (" . implode(',', $org_list) . ")";
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'locations');
            return $result;
        }
        if (!empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, COUNT(DISTINCT system.id) AS `device_count` FROM `locations` LEFT JOIN orgs ON (locations.org_id = orgs.id) LEFT JOIN system ON (locations.id = system.location_id) " . 
                $CI->response->meta->internal->filter . 
                " GROUP BY locations.id " . 
                $CI->response->meta->internal->sort  . " " .
                $CI->response->meta->internal->limit;

            if (!empty($CI->response->meta->requestor)) {
                $sql = "SELECT " . $CI->response->meta->internal->properties . ", orgs.id AS `orgs.id`, orgs.name AS `orgs.name`, COUNT(DISTINCT system.id) AS `device_count` FROM `locations` LEFT JOIN orgs ON (locations.org_id = orgs.id) LEFT JOIN system ON (locations.id = system.location_id AND system.oae_manage = 'y') " . 
                    $CI->response->meta->internal->filter . 
                    " GROUP BY locations.id " . 
                    $CI->response->meta->internal->sort  . " " .
                    $CI->response->meta->internal->limit;
            }
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'locations');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
