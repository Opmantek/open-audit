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
* @package   Clusters
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.3.0
* @link      http://www.open-audit.org
*/

/**
* Base Model Clusters
*
* @access   public
* @category Model
* @package  Clusters
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_clusters extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Read an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return array The array of requested items
     */
    public function read($id = 0)
    {
        $sql = 'SELECT clusters.*, orgs.name AS `orgs.name` FROM `clusters` LEFT JOIN `orgs` ON clusters.org_id = orgs.id WHERE clusters.id = ?';
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'clusters');
        return ($result);
    }

    /**
     * Delete an individual item from the database, by ID
     *
     * @param  int $id The ID of the requested item
     * @return bool True = success, False = fail
     */
    public function delete($id = 0)
    {
        $sql = 'DELETE FROM `clusters` WHERE `id` = ?';
        $data = array($id);
        $test = $this->run_sql($sql, $data);
        if ( ! empty($test)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Read the associated items from the DB by ID
     *
     * @param  int $cluster_id The ID of the cluster
     * @return array The array of devices assigned to this application
     */
    public function read_sub_resource($cluster_id = 0)
    {
        $CI = & get_instance();
        $org_ids = implode(',', $CI->user->orgs);
        $sql = 'SELECT * FROM clusters WHERE id = ?';
        $result = $this->run_sql($sql, array($cluster_id));
        $cluster = $result[0];
        unset($result);

        // TODO - implement SQL per purpose.
        if ($cluster->purpose === 'virtualisation') {
            // Our direct cluster members
            $sql = 'SELECT system.id AS `system.id`, system.name AS `system.name`, system.memory_count AS `system.memory_count`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.icon AS `system.icon`, processor.hyperthreading AS `processor.hyperthreading`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, cluster.role AS `cluster.role`, cluster.id AS `cluster.id`, "host" AS `type`, SUM(memory.size) AS `memory.size` FROM `system` LEFT JOIN `orgs` ON (`system`.`org_id` = `orgs`.`id`) LEFT JOIN `cluster` ON (`system`.`id` = `cluster`.`system_id`) LEFT JOIN `processor` ON (`system`.`id` = `processor`.`system_id` AND `processor`.`current` = "y") LEFT JOIN `memory` ON (`system`.`id` = `memory`.`system_id` AND `memory`.`current` = "y") WHERE `orgs`.`id` IN (' . $org_ids . ') AND `cluster`.`clusters_id` = ? GROUP BY `system`.`id`, `processor`.`hyperthreading`, `processor`.`logical_count`, `cluster`.`role`';
            $result = $this->run_sql($sql, array($cluster_id));
            $result = $this->format_data($result, 'devices');
            // The VMs on the direct cluster members
            $next_sql = 'SELECT system.name AS `host.name`, vm.icon AS `vm.icon`, vm.name AS `vm.name`, vm.id AS `vm.id`, vm.guest_system_id AS `vm.guest_system_id`, vm.cpu_count AS `vm.cpu_count`, vm.memory_count AS `vm.memory_count`, vm.status AS `vm.status`, "guest" as `type`, GROUP_CONCAT(DISTINCT server.name ORDER BY server.name ASC SEPARATOR ", ") AS `guest.servers`, guest.os_family AS `guest.os_family`, guest.ip AS `guest.ip` FROM `system` LEFT JOIN `cluster` ON (`system`.`id` = `cluster`.`system_id`) LEFT JOIN `vm` ON (`system`.`id` = `vm`.`system_id` AND `vm`.`current` = "y") LEFT JOIN `server` ON vm.guest_system_id = `server`.`system_id` LEFT JOIN `system` `guest` ON vm.guest_system_id = guest.id WHERE system.org_id IN (' . $org_ids . ') AND `cluster`.`clusters_id` = ? GROUP BY vm.guest_system_id, vm.icon, vm.name, system.name, vm.id, vm.cpu_count, vm.memory_count, vm.status, guest.os_family, guest.ip ORDER BY vm.name;';
            $next_result = $this->run_sql($next_sql, array($cluster_id));
            $next_result = $this->format_data($next_result, 'devices');
            $result = array_merge($result, $next_result);
        } else {
            //if ($cluster->purpose === 'database') {
                // Our direct cluster members
                $sql = 'SELECT system.id AS `system.id`, system.name AS `system.name`, system.memory_count AS `system.memory_count`, system.ip AS `system.ip`, system.os_family AS `system.os_family`, system.icon AS `system.icon`, processor.hyperthreading AS `processor.hyperthreading`, processor.physical_count AS `processor.physical_count`, processor.core_count AS `processor.core_count`, processor.logical_count AS `processor.logical_count`, cluster.role AS `cluster.role`, cluster.id AS `cluster.id`, GROUP_CONCAT(DISTINCT server.name ORDER BY server.name ASC SEPARATOR ", ") AS `servers` FROM `system` LEFT JOIN `orgs` ON (`system`.`org_id` = `orgs`.`id`) LEFT JOIN `cluster` ON (`system`.`id` = `cluster`.`system_id`) LEFT JOIN `processor` ON (`system`.`id` = `processor`.`system_id` AND `processor`.`current` = "y") LEFT JOIN `server` ON `system`.`id` = `server`.`system_id` WHERE `orgs`.`id` IN (' . $org_ids . ') AND `cluster`.`clusters_id` = ? GROUP BY `system`.`id`, `processor`.`hyperthreading`, `processor`.`logical_count`, `cluster`.`role`';
                $result = $this->run_sql($sql, array($cluster_id));
                $result = $this->format_data($result, 'devices');
            //}
        }
        return ($result);
    }

    /**
     * Read the collection from the database
     *
     * @param  int $user_id  The ID of the requesting user, no $response->meta->filter used and no $response->data populated
     * @param  int $response A flag to tell us if we need to use $response->meta->filter and populate $response->data
     * @return bool True = success, False = fail
     */
    public function collection($user_id = null, $response = null)
    {
        $CI = & get_instance();
        if ( ! empty($user_id)) {
            $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($user_id)));
            $sql = 'SELECT * FROM clusters WHERE org_id IN (' . implode(',', $org_list) . ')';
            $result = $this->run_sql($sql, array());
            $result = $this->format_data($result, 'clusters');
            return $result;
        }
        if ( ! empty($response)) {
            $total = $this->collection($CI->user->id);
            $CI->response->meta->total = count($total);
            $sql = 'SELECT ' . $CI->response->meta->internal->properties . ', orgs.id AS `orgs.id`, orgs.name AS `orgs.name` FROM clusters LEFT JOIN orgs ON (clusters.org_id = orgs.id) ' . 
                    $CI->response->meta->internal->filter . ' ' . 
                    $CI->response->meta->internal->groupby . ' ' . 
                    $CI->response->meta->internal->sort . ' ' . 
                    $CI->response->meta->internal->limit;
            $result = $this->run_sql($sql, array());
            $CI->response->data = $this->format_data($result, 'clusters');
            $CI->response->meta->filtered = count($CI->response->data);
        }
    }
}
// End of file m_clusters.php
// Location: ./models/m_clusters.php
