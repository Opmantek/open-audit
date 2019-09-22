<?php
#
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
* @category  Helper
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.2.2
* @link      http://www.open-audit.org
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('update_fields')) {
    function update_fields($collection) {
        if (empty($collection)) {
            return array();
        }
        $CI = get_instance();
        if (!$CI->db->table_exists($collection)) {
            return array();
        }
        $fields = $CI->db->list_fields($collection);
        # Remove any non-user setable columns
        foreach ($fields as $key => $value) {
            if ($value === 'id') {
                unset($fields[$key]);
            }
            if ($value === 'edited_by') {
                unset($fields[$key]);
            }
            if ($value === 'edited_date') {
                unset($fields[$key]);
            }
            if ($collection === 'discoveries' and $value === 'device_count') {
                    unset($fields[$key]);
            }
            if ($collection === 'discoveries' and $value === 'limit') {
                    unset($fields[$key]);
            }
        }
        $fields = array_values($fields);
        return $fields;
    }
}

if (!function_exists('insert_fields')) {
    function insert_fields($collection) {
        if (empty($collection)) {
            return array();
        }
        $CI = get_instance();
        if (!$CI->db->table_exists($collection)) {
            return array();
        }
        $fields = $CI->db->list_fields($collection);
        # Remove any non-user setable columns
        foreach ($fields as $key => $value) {
            if ($value === 'id') {
                unset($fields[$key]);
            }
            if ($value === 'edited_by') {
                unset($fields[$key]);
            }
            if ($value === 'edited_date') {
                unset($fields[$key]);
            }
        }
        $fields = array_values($fields);
        return $fields;
    }
}


if (!function_exists('mandatory_fields')) {
    function mandatory_fields($collection) {
        if (empty($collection)) {
            return array();
        }
        switch ($collection) {
            case "applications":
                return(array('name','org_id'));
                break;

            case "agents":
                return(array('name','org_id','status'));
                break;

            case "attributes":
                return(array('name','org_id','type','resource','value'));
                break;

            case "buildings":
                return(array('name','org_id','location_id'));
                break;

            case "clouds":
                return(array('name','org_id','type'));
                break;

            case "collectors":
                return(array('name','org_id','status'));
                break;

            case "configuration":
                return(array('value'));
                break;

            case "connections":
                return(array('name','org_id'));
                break;

            case "credentials":
                return(array('name','org_id','type','credentials'));
                break;

            case "dashboards":
                return(array('name','options'));
                break;

            case "discoveries":
                return(array('name','org_id','type','network_address','other'));
                break;

            case "discovery_scan_options":
                return(array('name','org_id'));
                break;

            case "fields":
                return(array('name','org_id','type','placement','group_id'));
                break;

            case "files":
                return(array('name','org_id','path'));
                break;

            case "floors":
                return(array('name','org_id','building_id'));
                break;

            case "groups":
                return(array('name','org_id','sql'));
                break;

            case "integrations":
                return(array('name','org_id','options'));
                break;

            case "ldap_servers":
                return(array('name','org_id','lang','host','port','secure','domain','type','version','use_roles','refresh'));
                break;

            case "licenses":
                return(array('name','org_id','org_descendants','purchase_count','match_string'));
                break;

            case "locations":
                return(array('name','org_id'));
                break;

            case "networks":
                return(array('name','org_id','network'));
                break;

            case "orgs":
                return(array('name','parent_id'));
                break;

            case "queries":
                return(array('name','org_id','sql','menu_category','menu_display'));
                break;

            case "racks":
                return(array('name','org_id','row_id'));
                break;

            case "rack_devices":
                return(array('rack_id','system_id','position','height'));
                break;

            case "roles":
                return(array('name','permissions'));
                break;

            case "rooms":
                return(array('name','org_id','floor_id'));
                break;

            case "rows":
                return(array('name','org_id','room_id'));
                break;

            case "rules":
                return(array('name','org_id','weight','inputs','outputs'));
                break;

            case "scripts":
                return(array('name','org_id','options','based_on'));
                break;

            case "summaries":
                return(array('name','org_id','table','column','menu_category'));
                break;

            case "tasks":
                return(array('name','org_id','type','sub_resource_id','uuid','enabled','minute','hour','day_of_month','month','day_of_week'));
                break;

            case "users":
                return(array('name','org_id','lang','active','roles','orgs'));
                break;

            case "widgets":
                return(array('name','org_id','type'));
                break;
        }
        return array();
    }
}