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
class Admin_group extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        redirect('/');
    }

    public function activate_group()
    {
        $log_details = new stdClass();
        if ($handle = opendir(BASEPATH.'../application/controllers/groups')) {
            $i = 0;
            $this->load->model("m_oa_group");
            while (false !== ($file = readdir($handle))) {
                if (mb_strpos($file, ".xml") !== false) {
                    $group_name = '';
                    $file_handle = fopen(BASEPATH.'../application/controllers/groups/'.$file, "rb");
                    $contents = fread($file_handle, filesize(BASEPATH.'../application/controllers/groups/'.$file));
                    try {
                        $xml = @new SimpleXMLElement($contents);
                    } catch (Exception $error) {
                        // $errors = libxml_get_errors();
                        // print_r($errors);
                        $log_details->message = "Invalid XML for group in file " . BASEPATH.'../application/controllers/groups/'.$file;
                        $log_details->file = 'system';
                        stdlog($log_details);
                        continue;
                    }
                    $group_name = $xml->details->group_name;
                    $group_icon = $xml->details->group_icon;
                    $group_description = $xml->details->group_description;
                    unset($xml);
                    fclose($file_handle);
                    $this->data['query'][$i]['file'] = $file;
                    $this->data['query'][$i]['group_name'] = $group_name;
                    $this->data['query'][$i]['group_icon'] = $group_icon;
                    $this->data['query'][$i]['group_description'] = $group_description;
                    $this->data['query'][$i]['activated'] = $this->m_oa_group->get_group_id($group_name);
                    $i++;
                    // echo "$file<br />\n";
                }
            }
            closedir($handle);
        }
        $this->data['heading'] = 'Activate Groups';
        $this->data['include'] = 'v_add_groups';
        $this->data['sortcolumn'] = '1';
        $this->load->view('v_template', $this->data);
    }

    public function action_activate_group()
    {
        $file = BASEPATH.'../application/controllers/groups/'.$this->data['id'];
        $this->load->model("m_oa_group");
        $this->load->model("m_oa_group_column");
        $file_handle = fopen($file, "rb");
        $contents = fread($file_handle, filesize($file));
        $xml = new SimpleXMLElement(utf8_encode($contents));
        foreach ($xml->children() as $child) {
            if ($child->getName() == 'details') {
                $group_id = $this->m_oa_group->import_group($child);
            }
            if ($child->getName() == 'columns') {
                $this->m_oa_group_column->import_group($child, $group_id);
            }
        }
        $this->m_oa_group->update_specific_group($group_id);
        redirect('/admin_group/activate_group');
    }

    public function action_delete_group()
    {
        $this->load->model("m_oa_group");
        $this->m_oa_group->delete_group($this->data['id']);
        redirect('admin_group/activate_group');
    }

    public function delete_group()
    {
        $this->load->model("m_oa_group");
        $this->m_oa_group->delete_group($this->data['id']);
        redirect('admin_group/list_groups');
    }

    public function list_groups()
    {
        $this->load->model("m_oa_group");
        $this->data['query'] = $this->m_oa_group->get_all_groups();
        $this->data['export_report'] = 'y';
        $this->data['heading'] = 'List Groups';
        $this->data['include'] = 'v_list_groups';
        $this->data['sortcolumn'] = '2';
        $this->load->view('v_template', $this->data);
    }

    public function export_group()
    {
        $this->load->model("m_oa_group");
        $this->load->model("m_oa_group_column");
        $group_name = $this->m_oa_group->get_group_name($this->data['id']);
        $this->data['group_detail'] = $this->m_oa_group->get_group($this->data['id']);
        $this->data['group_columns'] = $this->m_oa_group_column->get_group_column($this->data['id']);
        #$this->load->helper('xml');
        echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n";
        echo "<group>\n";
        foreach ($this->data['group_detail'] as $details) {
            echo "\t<details>\n";
            foreach ($details as $attribute => $value) {
                if (($attribute != 'group_id') and ($attribute != 'group_dynamic_select') and ($attribute != 'group_display_sql')) {
                    echo "\t\t<".$attribute.">".$value."</".$attribute.">\n";
                }
                if ((($attribute == 'group_dynamic_select') or ($attribute == 'group_display_sql')) and ($value > '')) {
                    if ($value > '') {
                        $value = str_replace("\t", " ", $value);
                        $value = str_replace("\n", " ", $value);
                        $value = preg_replace('!\s+!', ' ', $value);
                        echo "\t\t<".$attribute."><![CDATA[".$value."]]></".$attribute.">\n";
                    } else {
                        echo "\t\t<".$attribute.">".$value."</".$attribute.">\n";
                    }
                }
            }
            echo "\t</details>\n";
        }
        echo "\t<columns>\n";
        foreach ($this->data['group_columns'] as $details) {
            echo "\t\t<column>\n";
            foreach ($details as $attribute => $value) {
                if (($attribute != 'column_id') && ($attribute != 'group_id')) {
                    echo "\t\t\t<".$attribute.">".$value."</".$attribute.">\n";
                }
            }
            echo "\t\t</column>\n";
        }
        echo "\t</columns>\n";
        echo "</group>";
        $group_name = str_replace(" ", "", $group_name).".xml";
        header('Content-Type: text/xml');
        header('Content-Disposition: attachment;filename="'.$group_name.'"');
        header('Cache-Control: max-age=0');
    }

    public function import_group()
    {
        if (!isset($_POST['submit'])) {
            # nothing submitted - display the form
            $this->data['heading'] = 'Import Group';
            $this->data['include'] = 'v_import_group';
            $this->load->view('v_template', $this->data);
        }
        if (isset($_POST['submit'])) {
            # form submitted
            $this->load->model("m_oa_group");
            $this->load->model("m_oa_group_column");
            $input = html_entity_decode($_POST['form_reportXML']);
            $input = utf8_encode($input);
            $xml = new SimpleXMLElement($input);
            foreach ($xml->children() as $child) {
                if ($child->getName() == 'details') {
                    $group_id = $this->m_oa_group->import_group($child);
                }
                if ($child->getName() == 'columns') {
                    $this->m_oa_group_column->import_group($child, $group_id);
                }
            }
            $this->m_oa_group->update_specific_group($group_id);
            redirect('/admin_group/list_groups');
        }
    }

    public function update_groups()
    {
        $this->load->model("m_oa_group");
        $this->m_oa_group->update_groups();
        redirect('admin_group/list_groups');
    }

    public function update_group()
    {
        $this->load->model("m_oa_group");
        $this->m_oa_group->update_specific_group($this->data['id']);
        redirect('admin_group/list_groups');
    }

    public function add_group()
    {
        $this->load->model("m_oa_group");
        #$this->data['tables'] = $this->m_oa_group->get_tables();
        $this->data['os'] = $this->m_oa_group->get_field_values('system', 'os_name');
        $this->data['heading'] = 'Add Group';
        $this->data['include'] = 'v_add_group';
        $this->load->view('v_template', $this->data);
    }

    public function edit_group()
    {
        $this->load->model("m_oa_group");
        $this->data['group'] = $this->m_oa_group->get_group($this->data['id']);
        $this->data['heading'] = 'Edit Group';
        $this->data['include'] = 'v_edit_group';
        $this->load->view('v_template', $this->data);
    }

    public function process_edit_group()
    {
        $this->load->model("m_oa_group");
        $details = new stdclass();
        foreach ($_POST as $key => $value) {
            $details->$key = $value;
        }
        $sql = $details->group_dynamic_select;
        $sql = str_replace(array("\r", "\r\n", "\n", "\t"), ' ', $sql);
        $sql = preg_replace('!\s+!', ' ', $sql);
        $details->group_dynamic_select = stripslashes($sql);
        $original_dynamic_select = $this->m_oa_group->get_group_dynamic_select($details->group_id);

        $sql = $details->group_display_sql;
        $sql = str_replace(array("\r", "\r\n", "\n", "\t"), ' ', $sql);
        $sql = preg_replace('!\s+!', ' ', $sql);
        $details->group_display_sql = stripslashes($sql);

        # update the group details
        $this->m_oa_group->update_group($details);
        if ($original_dynamic_select != $details->group_dynamic_select) {
            # update the group members (only if the SQL Dynamic Select has changed
            $this->m_oa_group->update_specific_group($details->group_id);
        }
        redirect('admin_group/list_groups');
    }

    public function process_add_group()
    {
        $this->load->model("m_oa_group");
        $details = new stdclass();
        foreach ($_POST as $key => $value) {
            $details->$key = $value;
        }

        # test to see if any valid data submitted.
        if (($details->dynamic_other_table == '' or $details->dynamic_other_field == '' or
            ($details->dynamic_other_text == '' and $details->dynamic_field_value == '')) and
            ($details->group_dynamic_select == '')) {
            # we need some manual SQL or at least a table to select from
            # redirect to error page.
            $this->data['error'] = "You must supply a manual SQL statement or select at least one database table, column and value when creating a Group.";
            #$this->data['query'] = $this->data['error'];
            $this->data['heading'] = 'Error';
            $this->data['include'] = 'v_error';
            $this->load->view('v_template', $this->data);
        } else {
            if ($details->group_dynamic_select == '') {
                # we have no manual SQL, attempt to create it from the form fields.
                if (($details->dynamic_other_eq != 'equals') and ($details->dynamic_other_eq != 'like')) {
                    echo "Must select conditional.";
                }
                if ($details->dynamic_other_eq == 'equals') {
                    $condition = "=";
                    $like_wildcard = '';
                }
                if ($details->dynamic_other_eq == 'like') {
                    $condition = "LIKE";
                    $like_wildcard = '%';
                }
                if ($details->dynamic_other_table == 'system') {
                    $system_table = '';
                } else {
                    $system_table = ', system';
                }
                $selection = '';
                if ($details->dynamic_other_text != '') {
                    $selection = $details->dynamic_other_text;
                }
                if (($details->dynamic_other_text == '') and ($details->dynamic_field_value != '')) {
                    $selection = $details->dynamic_field_value;
                }
                if ($details->dynamic_other_table == 'sys_man_additional_fields' or $details->dynamic_other_table == 'sys_man_additional_fields_data') {
                    $details->group_dynamic_select = "SELECT distinct(system.system_id) FROM ".$details->dynamic_other_table.$system_table." WHERE ".$details->dynamic_other_table.".system_id = system.system_id AND ".$details->dynamic_other_field." ".$condition." '".$like_wildcard.$selection.$like_wildcard."' AND system.man_status = 'production'";
                } elseif ($details->dynamic_other_table == 'system') {
                    $details->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.".$details->dynamic_other_field." ".$condition." '".$like_wildcard.$selection.$like_wildcard."' AND system.man_status = 'production'";
                } else {
                    $details->group_dynamic_select = "SELECT distinct(system.system_id) FROM ".$details->dynamic_other_table." LEFT JOIN system ON ".$details->dynamic_other_table.".system_id = system.system_id WHERE ".$details->dynamic_other_table.'.'.$details->dynamic_other_field." ".$condition." '".$like_wildcard.$selection.$like_wildcard."' AND system.man_status = 'production' AND ".$details->dynamic_other_table.".current = 'y'";
                }
            }
        }

        # to do - decide on parent groups
        $details->group_parent = 1;

        # create the group
        $return = $this->m_oa_group->insert_group($details);

        if (is_numeric($return)) {
            $details->group_id = $return;
            # populate the group columns
            $this->load->model("m_oa_group_column");
            $this->m_oa_group_column->insert_group_column($details);
            # update group members
            $this->m_oa_group->update_specific_group($return);
            redirect('admin_group/list_groups');
        } else {
            $this->data['error'] = "Error inserting Group.";
            $this->data['query'] = $this->data['error'];
            $this->data['heading'] = 'Error';
            $this->data['include'] = 'v_error';
            $this->load->view('v_template', $this->data);
        }
    }

    function refresh_group_definitions()
    {
        $this->load->helper('group');
        $this->data['query'] = refresh_group_definitions();
        $this->data['heading'] = 'Refresh Group Definitions';
        $this->data['include'] = 'v_general';
        $this->data['sortcolumn'] = '0';
        $this->load->view('v_template', $this->data);

    }

}
