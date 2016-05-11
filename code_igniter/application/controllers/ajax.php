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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class ajax extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->data['system_id'] = $this->uri->segment(3, '');
            $this->data['field_name'] = $this->uri->segment(4, '');
            $this->data['field_data'] = $this->uri->segment(5, '');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->data['system_id'] = @$_POST['system_id'];
            $this->data['field_name'] = @$_POST['name'];
            $this->data['field_data'] = @$_POST['value'];
        }

        $this->data['title'] = 'Open-AudIT';

        if (!isset($this->user->lang) or $this->user->lang == "") {
            $user_lang = "en";
        } else {
            $user_lang = $this->user->lang;
        }

        $language_file = APPPATH."/views/lang/".$user_lang.".inc";
        include $language_file;

        function __($word)
        {
            $user_lang = 'en';
            //Learning-Mode
            //Only for Developers !!!!
            $language_learning_mode = 0;

            if ($language_learning_mode == 1) {
                $language_file = APPPATH."views/lang/".$user_lang.".inc";
                include $language_file;
            }
            if (isset($GLOBALS["lang"][$word])) {
                return $GLOBALS["lang"][$word];
            } else {
                //Learning-Mode
                if ($language_learning_mode == 1 and isset($word) and $word != "") {
                    if (is_writable($language_file)) {
                        //Deleting
                        $buffer = "";
                        $handle = fopen($language_file, "r");
                        while (!feof($handle)) {
                            $line = fgets($handle, 4096);
                            if (!preg_match('/\?>/', $line)) {
                                $buffer .= $line;
                            }
                        }
                        fclose($handle);
                        //Writing new Variables
                        $handle = fopen($language_file, "w+");
                        fwrite($handle, $buffer.""."\$GLOBALS[\"lang\"][\"$word\"]=\"$word\";\n?>");
                        fclose($handle);
                    } else {
                        die("Language-Learning-Mode, but $language_file not writeable");
                    }
                }

                return $word;
            }
        }
        // log the attempt
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        # redirect('/');
    }

    public function update_config()
    {
        $log_details = new stdClass();
        $log_details->severity = 5;
        $log_details->file = 'system';


        // must be an admin to access this function
        if ($this->user->admin != 'y') {
            $log_details->message = "A non-admin user attempted to use ajax/update_config.";
            stdlog($log_details);
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('main/list_groups');
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $log_details->message = "GET request received to ajax/update_config. This is deprecated.";
            stdlog($log_details);
            $url = str_replace("%3A", ":", current_url());
            $url = str_replace("ajax/update_config//", "ajax/update_config/", $url);
            $url_array = explode('/', $url);

            if (strpos($_SERVER['QUERY_STRING'], "name=") !== false) {
                # we have a GET style request from the Bootstrap theme.
                $i = explode('&', $_SERVER['QUERY_STRING']);
                # get the config name
                $config_name = urldecode(str_replace('name=', '', $i[0]));
                # get the new config value
                $config_value = urldecode(str_replace('value=', '', $i[1]));
            } else {
                for ($i = 0; $i<count($url_array); $i++) {
                    if ($url_array[$i] == "update_config") {
                        $config_name = $url_array[$i+1];
                    }
                }
                $config_name = str_replace("%5E%5E%5E", "/", $config_name);
                $location = strpos($url, $config_name);
                $config_value = substr($url, $location);
                $location = strpos($config_value, "/");
                $config_value = substr($config_value, $location);
                $config_value = substr($config_value, 1);
            }

            $config_value = str_replace("%5E%5E%5E", "/", $config_value);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            # these are set in the constructor
            $config_name = $this->data['field_name'];
            $config_value = $this->data['field_data'];
        }

        if ($config_name == 'default_ad_server') { $config_name = 'ad_server'; }

        if (empty($config_name)) {
            return;
        }

        $this->load->model("m_oa_config");
        if ($config_value == '-') {
            $config_value = '';
        }

       $this->m_oa_config->update_config($config_name, $config_value, $this->user->id, date('Y-m-d H:i:s'));

        $masked = str_pad('', strlen($config_value), '*');
        if ($config_name == 'default_windows_password' and $this->config->config['show_passwords'] == 'n') {
            $config_value = $masked;
        }
        if ($config_name == 'default_ssh_password' and $this->config->config['show_passwords'] == 'n') {
            $config_value = $masked;
        }
        if ($config_name == 'default_ipmi_password' and $this->config->config['show_passwords'] == 'n') {
            $config_value = $masked;
        }
        if ($config_name == 'default_snmp_community' and $this->config->config['show_snmp_community'] == 'n') {
            $config_value = $masked;
        }
        echo htmlentities(urldecode($config_value));
    }

    # /index.php/ajax/update_system_man/[system_id]/[field_name]/[field_value]
    # This should be POST'd to only from 1.12.2
    public function update_system_man()
    {
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $log_details->message = "GET request received to ajax/update_system_man. This is deprecated.";
            $log_details->severity = 5;
            stdlog($log_details);
        }

        $this->load->model("m_system");
        $this->load->model("m_oa_group");
        $this->load->model("m_devices_components");
        $access_level = $this->m_system->get_system_access_level($this->data['system_id'], $this->user->id);
        if ($access_level > 7) {
            $field_ok = 0;
            $this->load->model("m_edit_log");
            $columns = $this->m_system->get_columns();
            if ((mb_substr_count($this->data['field_name'], 'custom_') > 0) && ($access_level >= 7)) {
                $data = explode("_", $this->data['field_name']);
                # index.php/ajax/update_system_man/[system_id]/custom_[field_type]_[data_id]_[field_id]/[value]
                # 0 - custom
                # 1 - sys_man_additional_fields.field_type
                # 2 - sys_man_additional_fields_data.field_details_id
                # 3 - sys_man_additional_fields.field_id

                # TODO - should test if system_id is part of sys_man_additional_fields.group_id
                # The code below assumes the view has done this (and it has), but it doesn't verify it.
                # Could call this directly using a URL and set a custom field on a device that is not supposed to have it

                $sql = "/* ajax::update_system_man */ SELECT group_id FROM sys_man_additional_fields WHERE field_id = ?";
                $data_array = array($data[3]);
                $query = $this->db->query($sql, $data_array);
                $row = $query->row();
                $group_id = $row->group_id;
                $group_result = $this->m_system->get_system_groups($this->data['system_id'], $this->user->id);
                $group_allowed = 'n';
                foreach ($group_result as $row) {
                    if ($row->group_id == $group_id) {
                        $group_allowed = 'y';
                    }
                }

                if ($group_allowed == 'y') {
                    $sql = "/* ajax::update_system_man */ SELECT * FROM sys_man_additional_fields_data WHERE field_id = ? AND system_id = ?";
                    $data_array = array($data[3], $this->data['system_id']);
                    $query = $this->db->query($sql, $data_array);
                    if ($query->num_rows() > 0) {
                        # we are updating an existing value
                        $row = $query->row();
                        $sql = "/* ajax::update_system_man */ UPDATE sys_man_additional_fields_data SET field_".$data[1]." = '".$this->oa_urldecode($this->data['field_data'])."' WHERE field_details_id = '".$row->field_details_id."'";
                        $query = $this->db->query($sql);
                        $this->m_edit_log->create($this->data['system_id'], "", "sys_man_additional_fields_data", "", "", $this->oa_urldecode($this->data['field_data']), "");
                        echo htmlentities($this->oa_urldecode($this->data['field_data']));
                    } else {
                        # we have to insert a new record for a custom data value for this system
                        $sql = "/* ajax::update_system_man */ INSERT INTO sys_man_additional_fields_data ( field_details_id, system_id, field_id, field_".$data[1].") VALUES ( NULL, '".$this->data['system_id']."', '".$data[3]."', '".$this->oa_urldecode($this->data['field_data'])."')";
                        $query = $this->db->query($sql);
                        $this->m_edit_log->create($this->data['system_id'], "", "sys_man_additional_fields_data", "", "", $this->oa_urldecode($this->data['field_data']), "");
                        echo htmlentities($this->oa_urldecode($this->data['field_data']));
                    }
                } else {
                    echo "This field not allowed for this device (see field groups).";
                }
            } else {
                if (($this->data['system_id'] == '') || ($this->data['field_name'] == '')) {
                    # echo "wrong columns";
                } else {
                    foreach ($columns as $column_name) {
                        if ($column_name->Field == $this->data['field_name']) {
                            $field_ok = 1;
                        }
                    }
                    if (($field_ok == 1) && ($access_level >= 7)) {
                        $original_value = $this->m_devices_components->read($this->data['system_id'], 'y', 'system', '', $this->data['field_name']);
                        $this->m_system->update_system_man($this->data['system_id'], $this->data['field_name'], $this->oa_urldecode($this->data['field_data']));
                        $this->m_edit_log->create($this->data['system_id'], '', 'system', $this->data['field_name'], '', $this->oa_urldecode($this->data['field_data']), $original_value);

                        if (($this->data['field_name'] == 'man_status') or ($this->data['field_name'] == 'man_org_id')) {
                            $details = new stdClass();
                            $details->system_id = $this->data['system_id'];
                            $details->type = $this->m_system->get_system_type($this->data['system_id']);
                            $this->m_oa_group->update_system_groups($details);
                        }

                        if ($this->data['field_name'] == 'man_type') {
                            $this->m_system->reset_icons($this->data['system_id']);
                        }

                        if (($this->data['field_name'] == 'man_status') and ($this->oa_urldecode($this->data['field_data']) == 'deleted')) {
                            # delete any "attached" devices (local printers for example)
                            $this->m_system->delete_linked_system($this->data['system_id']);
                        }

                        # NOTE - don't output for a couple of special cases as below
                        if ((mb_substr_count($this->data['field_name'], 'man_location_id') > 0) || (mb_substr_count($this->data['field_name'], 'man_org_id') > 0)) {
                            # do nothing
                        } else {
                            echo htmlentities($this->oa_urldecode($this->data['field_data']));
                        }
                    } else {
                        # echo "error with update";
                    }
                }
            }
            if (mb_substr_count($this->data['field_name'], 'man_location_id') > 0) {
                $this->load->model("m_oa_location");
                $data = $this->m_oa_location->get_location($this->data['field_data']);
                foreach ($data as $key) {
                    if ($key->address == '') {
                        $key->address = '-';
                    }
                    if ($key->city == '') {
                        $key->city = '-';
                    }
                    if ($key->state == '') {
                        $key->state = '-';
                    }
                    if ($key->country == '') {
                        $key->country = '-';
                    }
                    echo "<p><label for='location_id_select'>".__('Location Name').": </label><span id='man_location_id_select' style='color:blue;'><span onclick='display_location();'>".htmlentities($key->name)."</span></span></p>\n";
                    echo "<p><label for='location_address'>".__('Building Address').": </label><span id='location_address'>".htmlentities($key->address)."</span></p>\n";
                    echo "<p><label for='location_city'>".__('City').": </label><span id='location_city'>".htmlentities($key->city)."</span></p>\n";
                    echo "<p><label for='location_state'>".__('State').": </label><span id='location_state'>".htmlentities($key->state)."</span></p>\n";
                    echo "<p><label for='location_country'>".__('Country').": </label><span id='location_country'>".htmlentities($key->country)."</span></p>\n";
                }
            }
            if (mb_substr_count($this->data['field_name'], 'man_org_id') > 0) {
                $this->load->model("m_oa_org");
                $key = $this->m_oa_org->get_org_details($this->data['field_data']);
                if (empty($key->name)) {
                    $key->name = '-';
                }
                echo "<p><label for='org_id_select'>".__('Org Name').": </label><span id='man_org_id_select' style='color:blue;'><span onclick='display_org();'>".$key->name."</span></span></p>\n";
                echo "<p><label for='org_parent'>".__('Parent Org').": </label><span id='org_parent'>".htmlentities($key->parent_name)."</span></p>\n";
            }

            # finally update any groups that this change has caused
            $details = new stdClass();
            $details->system_id = $this->data['system_id'];
            $this->load->model('m_system');
            $details->type = $this->m_system->get_system_type($this->data['system_id']);
            $this->load->model("m_oa_group");
            $this->m_oa_group->update_system_groups($details);
        }
    }

    public function get_fields()
    {
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 7;
        stdlog($log_details);
        unset($log_details);

        if ($this->user->admin == 'y') {
            $this->load->model("m_oa_group");
            $fields = $this->m_oa_group->get_fields($this->uri->segment(3, ''));
            echo "<select id='dynamic_other_field' name='dynamic_other_field' onchange='retrieve_field_values();' style='width:250px;'>\n";
            echo "<option value=\" \"> </option>\n";
            foreach ($fields as $field) {
                $column = str_replace('_', ' ', $field);
                $column = ucwords($column);
                echo "<option value=\"".$field."\">".htmlentities($column)."</option>\n";
            }
            echo "</select>\n";
        }
    }

    public function get_field_values()
    {
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 7;
        stdlog($log_details);
        unset($log_details);

        if ($this->user->admin == 'y') {
            $this->load->model("m_oa_group");
            $table = $this->uri->segment(3, '');
            $field = $this->uri->segment(4, '');
            $values = $this->m_oa_group->get_field_values($table, $field);
            echo "<select id='dynamic_field_value' name='dynamic_field_value' style='width:250px;'>\n";
            foreach ($values as $value) {
                echo "<option value=\"".$value->value."\">".htmlentities($value->value)."</option>\n";
            }
            echo "</select>\n";
        }
    }

    public function system_popup($id = 0)
    {
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 7;
        stdlog($log_details);
        unset($log_details);

        $this->load->model("m_system");
        if ($this->m_system->get_system_access_level($this->data['system_id'], $this->user->id) > 0) {
            $result = $this->m_system->get_system_popup($this->data['system_id']);
            foreach ($result as $system) {
                $model_formatted = str_replace(']', '', str_replace('[', '', str_replace(' ', '_', trim(mb_strtolower($system->man_model)))));
                $type_formatted = str_replace(" ", "_", trim(mb_strtolower($system->man_type)));
                $default_file_exists = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/'.$system->man_picture.'.jpg';
                $model_file_exists   = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/'.$model_formatted.'.jpg';
                $type_file_exists    = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/'.$type_formatted.'.png';
                $custom_file_exists  = str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]).'device_images/custom/'.$system->system_id.'.jpg';

                # check if the man_picture field from the database is populated and a matching image exists
                if (($system->man_picture > '') and (file_exists($default_file_exists))) {
                    $system->man_picture = $system->man_picture.'.jpg';
                }

                # check if a custom images exists and overwrite
                if (file_exists($custom_file_exists)) {
                    $system->man_picture = 'custom/'.$system->system_id.'.jpg';
                }

                # check if an image matching the model exists
                if (($system->man_picture == '') and (file_exists($model_file_exists))) {
                    $system->man_picture = ''.$model_formatted.'.jpg';
                }

                # check if an image matching the type exists
                if (($system->man_picture == '') and (file_exists($type_file_exists))) {
                    $system->man_picture = ''.$type_formatted.'.png';
                }

                # no matching images, assign the unknown image
                if ($system->man_picture == '') {
                    $system->man_picture = 'unknown.png';
                }

                echo "<div class=\"SystemPopupResult\">\n";
                echo "<table border=\"0\" style=\"font-size: 8pt; color:#3D3D3D; font-family: 'Verdana','Lucida Sans Unicode','Lucida Sans','Sans-Serif';\">\n";
                echo "<tr>\n";
                echo "  <td width=\"100\"><img src=\"".base_url()."device_images/".$system->man_picture."\" width=\"100\"/></td>\n";
                echo "  <td valign=\"top\" align=\"right\"><b>Status</b> <br /><b>Manufacturer</b> <br /><b>Model</b> <br /><b>Serial</b> <br /><b>Form Factor</b> </td>\n";
                echo "  <td valign=\"top\" >".htmlentities($system->man_status)."<br />".htmlentities($system->man_manufacturer)."<br />".htmlentities($system->man_model)."<br />".htmlentities($system->man_serial)."<br />".htmlentities($system->man_form_factor)."</td>\n";
                echo "</tr>\n";
                echo "</table>\n";
                echo "</div>";
            }
        } else {
            echo "<div class=\"SystemPopupResult\">\n";
            echo "<table border=\"0\" style=\"font-size: 8pt; color:#3D3D3D; font-family: 'Verdana','Lucida Sans Unicode','Lucida Sans','Sans-Serif';\">\n";
            echo "<tr>\n";
            echo "  <td>Not Authorised.</td>\n";
            echo "</tr>\n";
            echo "</table>\n";
            echo "</div>";
        }
    }

    public function system_tags($id = 0)
    {

        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 7;
        stdlog($log_details);
        unset($log_details);

        $this->load->model("m_system");
        if ($this->m_system->get_system_access_level($this->data['system_id'], $this->user->id) < '1') {
            // not even VIEW permission - output "Not Authorised"
            echo "<div class=\"TagPopupResult\">\n";
            echo "<table border=\"0\" style=\"font-size: 8pt; color:#3D3D3D; font-family: 'Verdana','Lucida Sans Unicode','Lucida Sans','Sans-Serif';\">\n";
            echo "<tr>\n";
            echo "  <td>Not Authorised. $auth</td>\n";
            echo "</tr>\n";
            echo "</table>\n";
            echo "</div>";
        } else {
            // authorised - now get the data
            $query = $this->m_system->get_system_groups($this->data['system_id'], $this->user->id);
            echo "<div class=\"TagPopupResult\">\n";
            echo "<table border=\"0\" style=\"font-size: 8pt; color:#3D3D3D; font-family: 'Verdana','Lucida Sans Unicode','Lucida Sans','Sans-Serif';\">\n";
            foreach ($query as $group) {
                echo "<tr>\n";
                echo "  <td><a href=\"".site_url()."/main/list_devices/".intval($group->group_id)."\">".htmlentities($group->group_name)."</a></td>\n";
                echo "</tr>\n";
            }
            echo "</table>\n";
            echo "</div>";
        }
    }

    public function export_report()
    {
        $this->load->helper('download');
        $data = current_url();
        $url = explode('export_report', $data);
        $url_array = explode('/', $url[1]);
        $page = $url_array[1];
        $function = $url_array[2];
        if (isset($url_array[3])) {
            $attribute = $url_array[3];
        } else {
            $attribute = '';
        }
        $data1 = "\n$data\nPage: $page\nFunction: $function\nAttribute: $attribute";
        $name = 'mytext.txt';
        force_download($name, $data1);
    }

    public function oa_urldecode($str)
    {
        $str = str_replace("%5E%5E%5E", "/", $str);

        return urldecode($str);
    }
}
