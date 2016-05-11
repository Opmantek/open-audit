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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class M_oa_location extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the location details from the id.
     *
     * @access	public
     *
     * @param   id the location id
     *
     * @return string
     */
    public function get_location($id)
    {
        $sql = "SELECT * FROM oa_location WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    /**
     * Get the location's group id.
     *
     * @access	public
     *
     * @param	id the location id
     *
     * @return string
     */
    public function get_group_id($id)
    {
        $sql = "SELECT group_id FROM oa_location WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->group_id);
    }

    /**
     * Set the location's group id.
     *
     * @access	public
     *
     * @param	id id of the location
     * @param   group_id the id of the group
     *
     * @return string
     */
    public function set_group_id($id, $group_id)
    {
        $sql = "UPDATE oa_location SET group_id = ? WHERE id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id", "$id");
        $query = $this->db->query($sql, $data);
    }

    /**
     * Get the location's details, including the number of devices in the corresponding group.
     *
     * @access	public
     *
     * @param	id id of the location
     *
     * @return string
     */
    public function get_location_details($id)
    {
        $sql = "SELECT oa_location.*, count(oa_group_sys.system_id) as total FROM oa_location LEFT JOIN oa_group_sys ON oa_group_sys.group_id = oa_location.group_id where oa_location.id = ? GROUP BY oa_location.id LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        return ($row);
    }

    /**
     * Get the location id from the name.
     *
     * @access	public
     *
     * @param	name of the location
     *
     * @return string
     */
    public function get_location_id($name)
    {
        $sql = "SELECT id FROM oa_location WHERE name = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$name");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return ($row->id);
        } else {
            return;
        }
    }

    /**
     * Get the location name from the id.
     *
     * @access	public
     *
     * @param	id of the location
     *
     * @return string
     */
    public function get_location_name($id)
    {
        $sql = "SELECT name FROM oa_location WHERE id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        return ($row->name);
    }

    /**
     * Get all the locations names.
     *
     * @access	public
     *
     * @return array
     */
    public function get_location_names()
    {
        $sql = "SELECT name, id FROM oa_location ORDER BY name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    /**
     * Get all the locations details.
     *
     * @access	public
     *
     * @return array
     */
    public function get_all_locations()
    {
        $sql = "SELECT oa_location.*, count(oa_group_sys.system_id) as total FROM oa_location LEFT JOIN oa_group_sys ON oa_group_sys.group_id = oa_location.group_id GROUP BY oa_location.id ORDER BY oa_location.name";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $result = $query->result();
        return ($result);
    }

    /**
     * Check the location name to see if it exists, not including the supplied id.
     *
     * @access	public
     *
     * @param	name the name of the location
     * @param   id the location id
     *
     * @return boolean
     */
    public function check_location_name($name, $id)
    {
        $sql = "SELECT id FROM oa_location WHERE name = ? AND id <> ?";
        $sql = $this->clean_sql($sql);
        $data = array($name, $id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get the location name of a supplied system.
     *
     * @access	public
     *
     * @param	id the ID of the system
     *
     * @return string
     */
    public function get_system_location($id)
    {
        $sql = "SELECT oa_location.* FROM oa_location, system WHERE oa_location.id = system.man_location_id AND system.system_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    /**
     * Add a location to the database - Admin only.
     *
     * @access	public
     *
     * @param	details - the relevant location details object
     *
     * @return string
     */
    public function add_location($details)
    {
        # need to insert suburb, district, region, area, tags, picture
        $sql = "INSERT INTO oa_location (name, type, room, suite, level, address, postcode, city, state, country, geo, latitude, longitude) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array("$details->name", "$details->type", "$details->room", "$details->suite",
            "$details->level", "$details->address", "$details->postcode", "$details->city",
            "$details->state", "$details->country", "$details->geo", "$details->latitude", "$details->longitude", );
        $query = $this->db->query($sql, $data);
        return($this->db->insert_id());
    }

    /**
     * Delete a location from the database - Admin only.
     *
     * @access	public
     *
     * @param	id - the id of the location to delete
     *
     * @return nothing
     */
    public function delete_location($id)
    {
        $sql = "DELETE FROM oa_location WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
        $sql = "UPDATE system SET man_location_id = '' WHERE man_location_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$id");
        $query = $this->db->query($sql, $data);
    }

    /**
     * Update a location in the database - Admin only.
     *
     * @access	public
     *
     * @param	details - the relevant location details object
     *
     * @return TRUE
     */
    public function edit_location($details)
    {
        # need to insert suburb, district, region, area, tags, picture
        $sql = "UPDATE oa_location SET name = ?, type = ?, room = ?, suite = ?, level = ?, address = ?, city = ?, postcode = ?, state = ?, country = ?, geo = ?, latitude = ?, longitude = ? WHERE id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$details->name", "$details->type", "$details->room", "$details->suite",
            "$details->level", "$details->address", "$details->city", "$details->postcode",
            "$details->state", "$details->country", "$details->geo", "$details->latitude",
            "$details->longitude", "$details->id", );
        $query = $this->db->query($sql, $data);
        return(true);
    }

    /**
     * List all devices in a given location.
     *
     * @access	public
     *
     * @param	location_id
     *
     * @return array
     */
    public function list_devices_in_location($id = 0, $user_id = 0)
    {
        // we have not requested a specific group.
        // display all items the current user has at least 'level 3' - view list rights on.
        $sql = "SELECT
    				system.system_id,
    				system.hostname,
    				system.man_description,
    				system.man_ip_address,
    				system.icon,
    				system.man_os_name,
    				system.man_os_family
    			FROM
    				system,
    				oa_group,
    				oa_group_sys,
    				oa_group_user
    			WHERE
    				system.system_id IN (
    					SELECT
    						system.system_id
    					FROM
    						system,
    						oa_group_sys,
    						oa_group,
    						oa_group_user
    					WHERE
    						system.man_status = 'production' AND
    						system.system_id = oa_group_sys.system_id AND
    						oa_group_sys.group_id = oa_group.group_id AND
    						oa_group.group_id = oa_group_user.group_id AND
    						oa_group_user.user_id = ?
    						) AND
    				system.system_id = oa_group_sys.system_id AND
    				oa_group_sys.group_id = oa_group.group_id AND
    				oa_group.group_id = oa_group_user.group_id AND
    				oa_group_user.group_user_access_level > '2' AND
    				oa_group_user.user_id = ? AND
    				system.man_location_id = ?
    			GROUP BY system.system_id ";
        $sql = $this->clean_sql($sql);
        $data = array("$user_id", "$user_id", "$id");
        $query = $this->db->query($sql, $data);
        $result = $query->result();

        return ($result);
    }

    public function location_report_columns()
    {
        $i = new stdclass();
        $result = array();
        $i->column_order = '0';
        $i->column_name = 'Name';
        $i->column_variable = 'name';
        $i->column_type = "link";
        $i->column_align = "left";
        $i->column_secondary = "id";
        $i->column_ternary = "";
        $i->column_link = "/main/view_location/";
        $result[0] = $i;
        $i = new stdclass();
        $i->column_order = '1';
        $i->column_name = 'Address';
        $i->column_variable = 'address';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[1] = $i;
        $i = new stdclass();
        $i->column_order = '2';
        $i->column_name = 'GeoTag';
        $i->column_variable = 'geo';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[2] = $i;
        $i = new stdclass();
        $i->column_order = '3';
        $i->column_name = 'Icon';
        $i->column_variable = 'type';
        $i->column_type = "image";
        $i->column_align = "center";
        $i->column_secondary = "type";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[3] = $i;
        $i = new stdclass();
        $i->column_order = '4';
        $i->column_name = 'Type';
        $i->column_variable = 'type';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[4] = $i;
        $i = new stdclass();
        $i->column_order = '5';
        $i->column_name = 'GroupId';
        $i->column_variable = 'group';
        $i->column_type = "text";
        $i->column_align = "left";
        $i->column_secondary = "";
        $i->column_ternary = "";
        $i->column_link = "";
        $result[5] = $i;
        $i = new stdclass();

        $count = 5;
        $sql = "SELECT DISTINCT(man_type) FROM system";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $types = $query->result();
        foreach ($types as $type) {
            $i = new stdclass();
            $count++;
            if ($type->man_type == '') {
                $type->man_type = 'unknown';
            }
            $i->column_order = $count;
            $i->column_name = $type->man_type;
            $i->column_variable = $type->man_type;
            $i->column_type = "text";
            $i->column_align = "left";
            $i->column_secondary = "";
            $i->column_ternary = "";
            $i->column_link = "";
            $result[] = $i;
        }

        return ($result);
    }

    public function location_report($group_id = 1, $limit = 1000000)
    {
        # make sure we have integers for outr passed attributes
        $group_id = intval($group_id);
        $limit = intval($limit);
        # get the devices in the group, apply limit if requested
        $sql = "SELECT man_type, man_location_id FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = $group_id LIMIT $limit";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $types = $query->result();
        # get all the locations
        $sql = "SELECT id, name, type, group_id as `group`, '' as address, latitude, longitude, address, city, postcode, country, CONCAT('{\"latitude\":\"', latitude, '\",\"longitude\":\"', longitude, '\"}') as geo, '' as icon FROM oa_location";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $locations = $query->result();
        # for each retrieved location, format the required details and add it to the new_locations array
        $new_locations = array();
        foreach ($locations as $location) {
            $location->infoDisplay = new stdClass();
            # create the geo object
            $location->geo = new stdClass();
            if ($location->latitude == "") {
                $location->latitude = "0.000000";
            }
            if ($location->longitude == "") {
                $location->longitude = "0.000000";
            }
            $location->geo->latitude = $location->latitude;
            $location->geo->longitude = $location->longitude;
            # create the full location string
            if ($location->city != '' and $location->address != '') {
                $location->address .= ', ' . $location->city;
            } else {
                $location->address = $location->city;
            }
            if ($location->postcode != '' and $location->address != '') {
                $location->address .= ', ' . $location->postcode;
            } else {
                $location->address .= $location->postcode;
            }
            if ($location->country != '' and $location->address != '') {
                $location->address .= ', ' . $location->country;
            } else {
                $location->address .= $location->country;
            }
            # build the path to the icon
            $location->icon = base_url().'theme-tango/tango-images/32_'.str_replace(" ", "_", strtolower($location->type)).'.png';
            $location->icon = str_replace("http://127.0.0.1", "", $location->icon);
            #$location->icon = '/open-audit/theme-tango/tango-images/32_'.str_replace(" ", "_", strtolower($location->type)).'.png';
            # make sure the id is an integer
            $location->id = intval($location->id);
            # make sure the group is an integer
            $location->group = intval($location->group);
            # add the location object to the new_locations array using the id for the index
            $new_locations[$location->id] = $location;
        }
        # add a count to the type in a location
        foreach ($types as $type) {
            $device_type = $type->man_type;
            $id = $type->man_location_id;
            $new_locations[$id]->infoDisplay->$device_type++;
        }
        # remove any locations without devices
        foreach ($new_locations as $location) {
            if (count(get_object_vars($location->infoDisplay)) == 0) {
                unset($locations[$location->id]);
            }
        }
        # return our dataset, ready to be converted to JSON
        return($locations);
    }
}
