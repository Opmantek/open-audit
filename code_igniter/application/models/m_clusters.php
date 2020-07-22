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
* @version   GIT: Open-AudIT_3.4.0
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
     * Create an individual item in the database
     * @param  [type] $data [description]
     * @return [type]       [description]
     */
    public function create($data = null)
    {
        if ($id = $this->insert_collection('clusters', $data)) {
            return intval($id);
        } else {
            return false;
        }
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
     * Count the number of rows a user is allowed to see
     * @return int The count
     */
    public function count()
    {
        $CI = & get_instance();
        $org_list = array_unique(array_merge($CI->user->orgs, $CI->m_orgs->get_user_descendants($CI->user->id)));
        $sql = 'SELECT COUNT(id) AS `count` FROM clusters WHERE org_id IN (' . implode(',', $org_list) . ')';
        $result = $this->run_sql($sql, array());
        return intval($result[0]->count);
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
            $CI->response->meta->total = $this->count();
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

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'clusters';
        $CI->temp_dictionary->link = str_replace('$collection', $collection, $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = $this->db->list_fields($collection);
        $dictionary->attributes->create = mandatory_fields($collection);
        $dictionary->attributes->update = update_fields($collection);
        $dictionary->sentence = 'Open-AudIT enables you to create and record your clusters';
        $dictionary->marketing = '<p>Clusters are stored in Open-AudIT to associate devices with.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->about = '<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->notes = "<p>Cluster notes on <a target=\"_blank\" href=\"https://en.wikipedia.org/wiki/Computer_cluster#Attributes_of_clusters\">wikipedia</a>.<br /><br /> A cluster can be setup in one of several ways (type) for high availability, load balancing, etc.<br /><br /> A cluster is usually dedicated to one particular task (purpose) - we have options for 'application','compute','database','storage','virtualisation','web' and'other' (or you can leave it blank).<br /><br /> And a cluster is usually configured as active/active, active/passive or another variation, see <a target=\"_blank\" href=\"https://en.wikipedia.org/wiki/High-availability_cluster#Node_configurations\">Wikipedia</a>.<br /><br /> The environment for your cluster is as per the attributes for device environments. Production, Training, et al.<br /><br /></p>";

        $dictionary->columns->id = $CI->temp_dictionary->id;
        $dictionary->columns->name = $CI->temp_dictionary->name;
        $dictionary->columns->org_id = $CI->temp_dictionary->org_id;
        $dictionary->columns->description = $CI->temp_dictionary->description;
        $dictionary->columns->type = "Can be 'high availability','load balancing','performance','storage','other' or blank.";
        $dictionary->columns->purpose = "Can be 'application','compute','database','storage','virtualisation','web','other' or blank.";
        $dictionary->columns->status = "Can be 'active', 'passive' or blank.";
        $dictionary->columns->configuration = "The configuration of your cluster can be: 'active/active','active/passive','N+1','N+M','N-to-1','N-to-N','other' or blank.";
        $dictionary->columns->environment = 'As per the attributes for device environments. Production, Training, et al.';
        $dictionary->columns->scaling = "Can be 'auto', 'fixed', 'other' or blank.";
        $dictionary->columns->retrieved_name = 'unused';
        $dictionary->columns->retrieved_ident = 'unused';
        $dictionary->columns->edited_by = $CI->temp_dictionary->edited_by;
        $dictionary->columns->edited_date = $CI->temp_dictionary->edited_date;
        return $dictionary;
    }
}
// End of file m_clusters.php
// Location: ./models/m_clusters.php
