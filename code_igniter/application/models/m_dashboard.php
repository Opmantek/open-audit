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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_dashboard extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read($id = '')
    {
        if ($id == '') {
            $CI = & get_instance();
            $id = intval($CI->response->meta->id);
        } else {
            $id = intval($id);
        }
        $sql = "SELECT * FROM roles WHERE id = ?";
        $data = array($id);
        $result = $this->run_sql($sql, $data);
        $result = $this->format_data($result, 'roles');
        return ($result);
    }

    // public function read_sub_resource($id = '')
    // {
    //     if ($id == '') {
    //         $CI = & get_instance();
    //         $id = intval($CI->response->meta->id);
    //     } else {
    //         $id = intval($id);
    //     }
    //     $sql = "SELECT `type`, count(`system`.`id`) as `count`, org_id FROM `system` WHERE system.org_id = ? AND system.status = 'production' GROUP BY `system`.`type`";
    //     $data = array($id);
    //     $result = $this->run_sql($sql, $data);
    //     if (count($result) == 0) {
    //         return false;
    //     } else {
    //         $result = $this->format_data($result, 'devices');
    //         return ($result);
    //     }
    // }

    public function collection()
    {
        $CI = & get_instance();
        $orgs = "'" . implode("','", $this->user->orgs) . "'";
        $this->load->model('m_locations');
        $this->load->model('m_networks');
        # get the response data
        $return = array();
        $return[0] = new stdClass();
        $return[0]->id = null;
        $return[0]->type = 'dashboard';
        $return[0]->attributes = new stdClass();

        $sql = "SELECT DISTINCT(id) FROM system WHERE org_id IN ($orgs)";
        $result = $this->run_sql($sql, array());
        $return[0]->attributes->device = count($result);

        $sql = "SELECT DISTINCT(type) FROM system WHERE org_id IN ($orgs)";
        $result = $this->run_sql($sql, array());
        $return[0]->attributes->device_types = count($result);

        $sql = "SELECT DISTINCT(os_family) FROM system WHERE org_id IN ($orgs) AND os_family != ''";
        $result = $this->run_sql($sql, array());
        $return[0]->attributes->device_types = count($result);

        $sql = "SELECT DISTINCT(status) FROM system WHERE org_id IN ($orgs)";
        $result = $this->run_sql($sql, array());
        $return[0]->attributes->device_status = count($result);

        $sql = "SELECT DISTINCT(dns_domain) FROM system WHERE org_id IN ($orgs) AND dns_domain != ''";
        $result = $this->run_sql($sql, array());
        $return[0]->attributes->device_dns_domain = count($result);

        $sql = "SELECT DISTINCT(server.type) FROM server LEFT JOIN system ON (system.id = server.system_id and server.current = 'y') WHERE system.org_id IN ($orgs)";
        $result = $this->run_sql($sql, array());
        $return[0]->attributes->device_servers = count($result);

        $sql = "SELECT DISTINCT(manufacturer) FROM system WHERE org_id IN ($orgs) and manufacturer != ''";
        $result = $this->run_sql($sql, array());
        $return[0]->attributes->device_manufacturer = count($result);

        $return[0]->attributes->locations = count($this->m_locations->collection());
        $return[0]->attributes->networks = count($this->m_networks->collection());
        $return[0]->attributes->orgs = count($this->m_orgs->collection());

        return ($return);
    }
}
