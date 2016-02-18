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
 * @version 1.12
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
     * @param	location_id
     *
     * @return string
     */
    public function get_location($id)
    {
        $sql = "SELECT * FROM oa_location WHERE location_id = ? LIMIT 1";
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
     * @param	location_id
     *
     * @return string
     */
    public function get_group_id($location_id)
    {
        $sql = "SELECT location_group_id FROM oa_location WHERE location_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$location_id");
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->location_group_id);
    }

    /**
     * Set the location's group id.
     *
     * @access	public
     *
     * @param	location_id
     *
     * @return string
     */
    public function set_group_id($location_id, $group_id)
    {
        $sql = "UPDATE oa_location SET location_group_id = ? WHERE location_id = ? ";
        $sql = $this->clean_sql($sql);
        $data = array("$group_id", "$location_id");
        $query = $this->db->query($sql, $data);
    }

    /**
     * Get the location's details, including the number of devices in the corresponding group.
     *
     * @access	public
     *
     * @param	location_id
     *
     * @return string
     */
    public function get_location_details($org_id)
    {
        $sql = "SELECT oa_location.*, count(oa_group_sys.system_id) as total FROM oa_location LEFT JOIN oa_group_sys ON oa_group_sys.group_id = oa_location.location_group_id where oa_location.location_id = ? GROUP BY oa_location.location_id LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$org_id");
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
        $sql = "SELECT location_id FROM oa_location WHERE location_name = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array("$name");
        $query = $this->db->query($sql, $data);
        $row = $query->row();
        if ($query->num_rows() > 0) {
            $row = $query->row();

            return ($row->location_id);
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
        $sql = "SELECT location_name FROM oa_location WHERE location_id = ? LIMIT 1";
        $sql = $this->clean_sql($sql);
        $data = array($id);
        $query = $this->db->query($sql, $data);
        $row = $query->row();

        return ($row->location_name);
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
        $sql = "SELECT location_name, location_id FROM oa_location ORDER BY location_name";
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
        $sql = "SELECT oa_location.*, count(oa_group_sys.system_id) as total FROM oa_location LEFT JOIN oa_group_sys ON oa_group_sys.group_id = oa_location.location_group_id GROUP BY oa_location.location_id ORDER BY oa_location.location_name";
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
     * @param	location_name the name of the location
     * @param	location_id the ID of the location
     *
     * @return boolean
     */
    public function check_location_name($location_name, $location_id)
    {
        $sql = "SELECT location_id FROM oa_location WHERE location_name = ? AND location_id <> ?";
        $sql = $this->clean_sql($sql);
        $data = array($location_name, $location_id);
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
     * @param	system_id the ID of the system
     *
     * @return string
     */
    public function get_system_location($id)
    {
        $sql = "SELECT
				oa_location.*
			FROM
				oa_location,
				system
			WHERE
				oa_location.location_id = system.man_location_id AND
				system.system_id = ?
			LIMIT 1";
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
        $sql = "INSERT INTO oa_location
					(location_name,
					location_type,
					location_room,
					location_suite,
					location_level,
					location_address,
					location_postcode,
					location_city,
					location_state,
					location_country,
					location_geo,
					location_latitude,
					location_longitude)
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sql = $this->clean_sql($sql);
        $data = array("$details->location_name",
            "$details->location_type",
            "$details->location_room",
            "$details->location_suite",
            "$details->location_level",
            "$details->location_address",
            "$details->location_postcode",
            "$details->location_city",
            "$details->location_state",
            "$details->location_country",
            "$details->location_geo",
            "$details->location_latitude",
            "$details->location_longitude", );
        $query = $this->db->query($sql, $data);

        return($this->db->insert_id());
    }

    /**
     * Delete a location from the database - Admin only.
     *
     * @access	public
     *
     * @param	detail id - the id of the location to delete
     *
     * @return nothing
     */
    public function delete_location($location_id)
    {
        $sql = "DELETE FROM oa_location WHERE location_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$location_id");
        $query = $this->db->query($sql, $data);
        $sql = "UPDATE system SET man_location_id = '' WHERE man_location_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$location_id");
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
        $sql = "UPDATE oa_location SET
					location_name = ?,
					location_type = ?,
					location_room = ?,
					location_suite = ?,
					location_level = ?,
					location_address = ?,
					location_city = ?,
					location_postcode = ?,
					location_state = ?,
					location_country = ?,
					location_geo = ?,
					location_latitude = ?,
					location_longitude = ?
				WHERE
					location_id = ?";
        $sql = $this->clean_sql($sql);
        $data = array("$details->location_name",
            "$details->location_type",
            "$details->location_room",
            "$details->location_suite",
            "$details->location_level",
            "$details->location_address",
            "$details->location_city",
            "$details->location_postcode",
            "$details->location_state",
            "$details->location_country",
            "$details->location_geo",
            "$details->location_latitude",
            "$details->location_longitude",
            "$details->location_id", );
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
    public function list_devices_in_location($location_id = 0, $user_id = 0)
    {
        // we have not requested a specific group.
        // display all items the current user has at least 'level 3' - view list rights on.
        $sql = "SELECT
    				system.system_id,
    				system.hostname,
    				system.man_description,
    				system.man_ip_address,
    				system.man_icon,
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
        $data = array("$user_id", "$user_id", "$location_id");
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
        $sql = "SELECT location_id as id, location_name as name, location_type as type, location_group_id as `group`, '' as address, location_latitude, location_longitude, location_address, location_city, location_postcode, location_country, CONCAT('{\"latitude\":\"', location_latitude, '\",\"longitude\":\"', location_longitude, '\"}') as geo, '' as icon FROM oa_location";
        $sql = $this->clean_sql($sql);
        $query = $this->db->query($sql);
        $locations = $query->result();
        # for each retrieved location, format the required details and add it to the new_locations array
        $new_locations = array();
        foreach ($locations as $location) {
            $location->infoDisplay = new stdClass();
            # create the geo object
            $location->geo = new stdClass();
            if ($location->location_latitude == "") {
                $location->location_latitude = "0.000000";
            }
            if ($location->location_longitude == "") {
                $location->location_longitude = "0.000000";
            }
            $location->geo->latitude = $location->location_latitude;
            $location->geo->longitude = $location->location_longitude;
            # create the full location string
            $location->address = $location->location_address;
            if ($location->location_city != '' and $location->address != '') {
                $location->address .= ', ' . $location->location_city;
            } else {
                $location->address = $location->location_city;
            }
            if ($location->location_postcode != '' and $location->address != '') {
                $location->address .= ', ' . $location->location_postcode;
            } else {
                $location->address .= $location->location_postcode;
            }
            if ($location->location_country != '' and $location->address != '') {
                $location->address .= ', ' . $location->location_country;
            } else {
                $location->address .= $location->location_country;
            }
            # build the path to the icon
            $location->icon = base_url().'theme-tango/tango-images/32_'.str_replace(" ", "_", strtolower($location->type)).'.png';
            $location->icon = str_replace("http://127.0.0.1", "", $location->icon);
            #$location->icon = '/open-audit/theme-tango/tango-images/32_'.str_replace(" ", "_", strtolower($location->type)).'.png';
            # make sure the id is an integer
            $location->id = intval($location->id);
            # make sure the group is an integer
            $location->group = intval($location->group);
            # we don't need the following, remove them
            unset($location->location_latitude);
            unset($location->location_longitude);
            unset($location->location_address);
            unset($location->location_city);
            unset($location->location_postcode);
            unset($location->location_country);
            # add the location object to the new_locations array using the id for the index
            $new_locations[$location->id] = $location;
        }
        # add a count to the type in a location
        foreach ($types as $type) {
            $device_type = $type->man_type;
            $location_id = $type->man_location_id;
            $new_locations[$location_id]->infoDisplay->$device_type++;
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
