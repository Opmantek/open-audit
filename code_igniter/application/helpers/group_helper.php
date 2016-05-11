<?php  if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
 }
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

/*
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.12.6
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('refresh_group_definitions')) {
    function refresh_group_definitions()
    {
        $CI = & get_instance();
        $output = '';
        # add a column to the oa_groups tabel to indicate group has been updated
        # get all groups from DB
        # get a list of all groups from XML files (including name and filename)
        # foreach DB result, do we have a matching name from the XML files?
        # - yes, delete the DB group (which also deletes the group columns)
        #   and insert a new entry and update the updated flag, insert the group columns
        #
        // add an extra column so we can track which groups have been updated
        if (!$CI->db->field_exists('updated', 'oa_group')) {
            $sql = "ALTER TABLE oa_group ADD updated varchar(1) NOT NULL default ''";
            $query = $CI->db->query($sql);
        }

        $sql = "SELECT * FROM oa_group WHERE group_category != 'network' AND group_category != 'owner' AND group_category != 'location'";
        # get the list of activated groups
        $query = $CI->db->query($sql);
        $result = $query->result();
        # get the list of group XML definitions
        $group_files = array();
        if ($handle = opendir(BASEPATH.'../application/controllers/groups')) {
            $i = 0;
            while (false !== ($file = readdir($handle))) {
                if (mb_strpos($file, ".xml") !== false) {
                    $file_handle = fopen(BASEPATH.'../application/controllers/groups/'.$file, "rb");
                    $contents = fread($file_handle, filesize(BASEPATH.'../application/controllers/groups/'.$file));
                    $error = 0;
                    try {
                        $xml = new SimpleXMLElement($contents);
                    } catch (Exception $error) {
                        $error = 1;
                    }
                    if ($error == 0) {
                        $group_file_details = array();
                        $group_file_details['group_name'] = $xml->details->group_name;
                        $group_file_details['group_file'] = $file;
                        $group_files[] = $group_file_details;
                        unset ($group_file_details);
                    }
                    unset($xml);
                    fclose($file_handle);
                }
            }
            closedir($handle);
        }
        // update the group definitions
        foreach ($result as $group) {
            // update the group memberships
            foreach ($group_files as $file) {
                if ($group->group_name == $file['group_name']) {
                    // update the group memberships
                    // get all users and access levels
                    $sql = "SELECT * FROM oa_group_user WHERE group_id = ?";
                    $data = array($group->group_id);
                    $query = $CI->db->query($sql, $data);
                    $users = $query->result();
                    #$sql = "DELETE FROM oa_group WHERE group_id = '" . $group->group_id . "'";
                    #$CI->db->query($sql);
                    $file_report = BASEPATH.'../application/controllers/groups/'.$file['group_file'];
                    $file_handle = fopen($file_report, "rb");
                    $contents = fread($file_handle, filesize($file_report));
                    $xml = new SimpleXMLElement(utf8_encode($contents));
                    // if ($group->group_id != '1') {
                    #$sql = "INSERT INTO oa_group SET group_name = ?, group_padded_name = ?, group_dynamic_select = ?, group_parent = ?, group_description = ?, group_category = ?, group_display_sql = ?, group_icon = ?";
                    $sql = "UPDATE oa_group SET group_name = ?, group_padded_name = ?, group_dynamic_select = ?, group_parent = ?, group_description = ?, group_category = ?, group_display_sql = ?, group_icon = ? WHERE group_id = ?";
                    // if ($group->group_name == 'All Devices') {
                    //     $sql .= ", group_id = 1";
                    // }
                    $data = array((string)$xml->details->group_name,
                        (string)$xml->details->group_padded_name,
                        (string)$xml->details->group_dynamic_select,
                        (string)$xml->details->group_parent,
                        (string)$xml->details->group_description,
                        (string)$xml->details->group_category,
                        (string)$xml->details->group_display_sql,
                        (string)$xml->details->group_icon,
                        $group->group_id);
                    $query = $CI->db->query($sql, $data);
                    #$group_id = $CI->db->insert_id();
                    $group_id = $group->group_id;
                    // We need to insert an entry into oa_group_user for any Admin level user
                    #$sql = "INSERT INTO oa_group_user (SELECT NULL, id, ?, '10' FROM oa_user WHERE admin = 'y')";
                    #$data = array("$group_id");
                    #$result = $CI->db->query($sql, $data);
                    $sql = "DELETE FROM oa_group_column WHERE group_id = ?";
                    $data = array($group->group_id);
                    $query = $CI->db->query($sql, $data);

                    foreach ($xml->columns->column as $column) {
                        $sql = "INSERT INTO oa_group_column SET group_id = ?, column_order = ?, column_name = ?, column_variable = ?, column_type = ?, column_link = ?, column_secondary = ?, column_ternary = ?, column_align = ?";
                        $data = array($group_id,
                            (string)$column->column_order,
                            (string)$column->column_name,
                            (string)$column->column_variable,
                            (string)$column->column_type,
                            (string)$column->column_link,
                            (string)$column->column_secondary,
                            (string)$column->column_ternary,
                            (string)$column->column_align);
                        $query = $CI->db->query($sql, $data);
                    }
                    $sql = "UPDATE oa_group SET updated = 'y' WHERE group_id = ?";
                    $data = array($group_id);
                    $query = $CI->db->query($sql, $data);
                    // ensure we remove all rows for this group id
                    // this should have already occurred when we deleted the group above
                    // $sql = "DELETE FROM oa_group_user WHERE group_id = ?";
                    // $data = array($group->group_id);
                    // $query = $CI->db->query($sql, $data);
                    // update any user permissions to the new group id
                    // insert a new row per user for the new group id with the old group access level
                    // foreach ($users as $user) {
                    //     $sql = "INSERT INTO oa_group_user VALUES (NULL, ?, ?, ?)";
                    //     $data = array($user->user_id, $group_id, $user->group_user_access_level);
                    //     $query = $CI->db->query($sql, $data);
                    // }
                }
            }
        }
        // get the non-updated groups
        $sql = "SELECT group_id, group_name FROM oa_group WHERE updated != 'y' and group_category NOT IN ('network', 'location', 'owner')";
        $query = $CI->db->query($sql);
        $non_updated_groups = $query->result();
        if (count($non_updated_groups) > 0) {
            $non = "<br />There are " . count($non_updated_groups) . " non-updated groups whose names are: ";
            foreach ($non_updated_groups as $nug) {
                if ($nug->group_name == '') {
                    $nug->group_name = '[no group name]';
                }
                $non .= $nug->group_name . ', ';
            }
            $non = substr_replace($output, '', -2, 2);
            $non .= '.';
            $output .= $non;
        }

        // update the group memberships
        $sql = "DELETE FROM oa_group_sys WHERE group_id IN (SELECT group_id FROM oa_group WHERE updated = 'y')";
        $query = $CI->db->query($sql) or die("Error with delete from oa_group_sys");
        $sql = "SELECT group_id, group_dynamic_select, group_name FROM oa_group WHERE updated = 'y'";
        $query = $CI->db->query($sql);
        foreach ($query->result() as $myrow) {
            $sql = $myrow->group_dynamic_select;
            # update the group with all systems that match
            $sql = substr_replace($sql, "INSERT INTO oa_group_sys (system_id, group_id) ", 0, 0);
            $sql = str_ireplace("SELECT DISTINCT(system.system_id)", "SELECT DISTINCT(system.system_id), '".$myrow->group_id."' ", $sql);
            $CI->db->query($sql);
        }

        // remove the extra column
        $sql = "ALTER TABLE oa_group DROP updated";
        $query = $CI->db->query($sql);

        return($output);
    }
}

if (! function_exists('check_default_groups')) {
    function check_default_groups()
    {
        $CI = get_instance();
        $CI->load->model('m_oa_group');
        # check to see if we have any groups activated - if not, activate the default set
        $sql = "SELECT count(*) as count FROM oa_group";
        $query = $CI->db->query($sql);
        $result = $query->result();
        if (intval($result[0]->count) == 0) {
            $CI->m_oa_group->activate_file('All Devices');
            $CI->m_oa_group->activate_file('Items in Default Location');
            $id = $CI->m_oa_group->get_group_id('Items in Default Location');
            $sql = "UPDATE oa_location SET group_id = '$id' WHERE name = 'Default Location'";
            $query = $CI->db->query($sql);
            $CI->m_oa_group->activate_file('Default Organisation owned items');
            $id = $CI->m_oa_group->get_group_id('Default Organisation owned items');
            $sql = "UPDATE oa_org SET group_id = '$id' WHERE name = 'Default Organisation'";
            $query = $CI->db->query($sql);
            $CI->m_oa_group->activate_file('All Printers');
            $CI->m_oa_group->activate_file('Routers');
            $CI->m_oa_group->activate_file('Switches');
            $CI->m_oa_group->activate_file('Windows Computers');
            $CI->m_oa_group->activate_file('GNU/Linux Systems');
            $CI->m_oa_group->activate_file('Virtual Hosts');
            $CI->m_oa_group->activate_file('Virtual Guests');
            $CI->m_oa_group->activate_file('Computers');
            $CI->m_oa_group->activate_file('Non Production Devices');
        }
    }
}

/* End of file group_helper.php */
/* Location: ./system/application/helpers/group_helper.php */
