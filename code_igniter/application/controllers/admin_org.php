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
class Admin_org extends MY_Controller
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
        redirect('/admin_org/list_orgs');
    }

    public function list_orgs()
    {
        $this->load->model("m_oa_org");
        $this->data['query'] = $this->m_oa_org->get_all_orgs();
        $this->data['heading'] = 'List Organisations';
        $this->data['include'] = 'v_list_orgs';
        $this->data['sortcolumn'] = '1';
        $this->load->view('v_template', $this->data);
    }

    public function add_orgs()
    {
        if (!isset($_POST['submit']) and !isset($_POST['submit_file'])) {
            # nothing submitted - display the form
            $this->data['heading'] = 'Add Organisations';
            $this->data['include'] = 'v_add_orgs';
            $this->load->view('v_template', $this->data);
        }
        if (isset($_POST['submit_file'])) {
            $this->load->model("m_oa_org");
            # we have an uploaded file - store and process
            $target_path = BASEPATH."../application/uploads/".basename($_FILES['upload_file']['name']);
            if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_path)) {
                #echo "The file ".  basename( $_FILES['upload_file']['name']). " has been uploaded.<br />\n";
            } else {
                echo "There was an error uploading the file, please try again!<br />\n";
                exit();
            }
            require_once BASEPATH.'../application/libraries/phpexcel/PHPExcel/IOFactory.php';
            if (!$objPHPExcel = PHPExcel_IOFactory::load($target_path)) {
                exit;
            }
            $attributes = array();
            $details = array();
            $object = new stdClass();
            $this->load->model("m_oa_org");
            $objWorksheet = $objPHPExcel->getActiveSheet();
            $count = 0;
            foreach ($objWorksheet->getRowIterator() as $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false);
                if ($count == 0) {
                    foreach ($cellIterator as $cell) {
                        $attributes[] = $cell->getValue();
                    }
                } else {
                    $cell_number = 0;
                    foreach ($cellIterator as $cell) {
                        $details[$attributes[$cell_number]] = $cell->getValue();
                        $cell_number++;
                    }
                    if ($details['org_name'] != '') {
                        if ($org_id = $this->m_oa_org->select_org($details['org_name'])) {
                            # we need to update an existing org
                            $sql = "UPDATE oa_org SET ";
                            foreach ($details as $detail => $value) {
                                $sql .= $detail." = '".mysql_real_escape_string($value)."', ";
                            }
                            $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
                            $sql .= " WHERE org_name = '".mysql_real_escape_string($details['org_name'])."'";
                        } else {
                            # this is a new org (we don't have a name match)
                            $sql = "INSERT INTO oa_org ( ";
                            foreach ($details as $detail => $value) {
                                $sql .= $detail.", ";
                            }
                            $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
                            $sql .= " ) VALUES ( ";
                            foreach ($details as $detail => $value) {
                                $sql .= "'".mysql_real_escape_string(str_replace('"', '', $value))."', ";
                            }
                            $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
                            $sql .= ")";

                            # create Group details
                            foreach ($details as $detail => $value) {
                                if ($detail == 'org_name') {
                                    $group->group_name = $value." owned systems";
                                    $group->group_description = $value." owned systems";
                                }
                            }
                        }
                        # run the query !!!
                        $sql = '/* admin_org::add_orgs */ ' . $sql;
                        $query = $this->db->query($sql);
                        $group->org_id = $this->db->insert_id();

                        # if we have a new Org, insert a matching Group
                        if ($group->group_name > '') {
                            $this->load->model("m_oa_group");
                            $group->group_padded_name = '';
                            $group->group_icon = 'contact-new';
                            $group->group_category = 'owner';
                            $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$group->org_id."' AND system.man_status = 'production'";
                            $group->group_parent = '';
                            $group->group_display_sql = '';
                            $this->m_oa_group->insert_group($group);
                        }
                    } else {
                        echo "no org name provided";
                    }
                }
                $count++;
            }
            redirect('admin_org/list_orgs');
        }
        if (isset($_POST['submit']) and isset($_POST['form_systemXML']) and $_POST['form_systemXML'] > '') {
            # we have XML text - process
            echo "XML processing<br />\n";
            $this->load->helper('xml');
            $this->load->model("m_oa_org");
            $xml = new SimpleXMLElement(utf8_encode(str_replace('&', '&amp;', $_POST['form_systemXML'])));
            foreach ($xml->children() as $child) {
                if ($org_id = $this->m_oa_org->select_org($child->org_name)) {
                    # we need to update an existing org
                    $sql = "UPDATE oa_org SET ";
                    foreach ($child->children() as $detail) {
                        $sql .= $detail->getName()." = '".$detail."', ";
                    }
                    $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
                    $sql .= " WHERE org_name = '".$child->org_name."'";
                } else {
                    # this is a new org (we don't have a name match)
                    $sql = "INSERT INTO oa_org ( ";
                    foreach ($child->children() as $detail) {
                        $sql .= $detail->getName().", ";
                    }
                    $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
                    $sql .= " ) VALUES ( ";
                    foreach ($child->children() as $detail) {
                        $sql .= "'".$detail."', ";
                    }
                    $sql = mb_substr($sql, 0, mb_strlen($sql)-2);
                    $sql .= ")";
                    # create Group details
                    foreach ($child->children() as $detail) {
                        if ($detail->getName() == 'org_name') {
                            $group->group_name = $details." owned systems";
                            $group->group_description = $detail." owned systems";
                        }
                    }
                }
                if ($child->org_name != '') {
                    # run the query !!!
                    $sql = '/* admin_org::add_orgs */ ' . $sql;
                    $query = $this->db->query($sql);
                    $group->org_id = $this->db->insert_id();

                    # if we have a new Org, insert a matching Group
                    if ($group->group_name > '') {
                        $this->load->model("m_oa_group");
                        $group->group_padded_name = '';
                        $group->group_icon = 'contact-new';
                        $group->group_category = 'owner';
                        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system
                            WHERE system.man_org_id = '".$details->org_id."' AND system.man_status = 'production'";
                        $group->group_parent = '';
                        $group->group_display_sql = '';
                        $this->m_oa_group->insert_group($group);
                    }
                } else {
                    echo "no org name provided";
                }
            }
        }
        # catch all redirect
        # redirect('admin_location/list_locations');
    }

    public function delete_org()
    {
        $this->load->model("m_oa_org");
        $this->load->model("m_oa_group");
        $org_id = $this->data['id'];
        # delete the group
        $group_id = $this->m_oa_org->get_group_id($org_id);
        $this->m_oa_group->delete_group($group_id);
        # delete the org
        $this->m_oa_org->delete_org($org_id);
        redirect('admin_org/list_orgs');
    }

    public function delete_group()
    {
        $this->load->model("m_oa_group");
        $this->load->model("m_oa_org");
        # we have the org_id, need to get the correct group_id
        $org_id = $this->data['id'];
        $group_id = $this->m_oa_org->get_group_id($org_id);
        # delete the group
        $this->m_oa_group->delete_group($group_id);
        # update the oa_org by removing the group_id
        $this->m_oa_org->set_group_id($org_id, '0');
        redirect('admin_org/list_orgs');
    }

    public function activate_group()
    {
        # insert a matching Group
        $this->load->model("m_oa_org");
        $this->load->model("m_oa_group");
        $org_id = $this->data['id'];
        $org_name = $this->m_oa_org->get_org_name($org_id);
        $org_group_id = $this->m_oa_org->get_group_id($org_id);

        $group = new stdClass();
        $group->group_name = $org_name." owned items";
        $group->group_padded_name = '';
        $group->group_description = $org_name." owned items";
        $group->group_icon = 'contact';
        $group->group_category = 'org';
        $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_org_id = '".$this->data['id']."' AND system.man_status = 'production'";
        $group->group_parent = '';
        $group->group_display_sql = '';
        if (isset($org_group_id) and $org_group_id != '' and $org_group_id != '0') {
            # update an existing group
            $group->group_id = $org_group_id;
            $this->m_oa_group->update_group($group);
        } else {
            # insert a new group
            $group->group_id = $this->m_oa_group->insert_group($group);
            # update the oa_org with the correct group_id
            $this->m_oa_org->set_group_id($org_id, $group->group_id);
        }
        # and now update the group contents
        $this->m_oa_group->update_specific_group($group->group_id);
        # now send the user back to list_orgs
        redirect('admin_org/list_orgs');
    }

    public function add_org()
    {
        $this->load->model("m_oa_org");
        if (!isset($_POST['submit'])) {
            # load the initial form
            $this->data['org_names'] = $this->m_oa_org->get_org_names();
            $this->data['heading'] = 'Add Organisation';
            $this->data['include'] = 'v_add_org';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            if (is_null($this->m_oa_org->select_org($details->name))) {
                #org does not exist - good
                $details->id = $this->m_oa_org->add_org($details);
            } else {
                $this->data['error_message'] = "Organisation name already exists.";
                $this->data['heading'] = 'Add Organisation';
                $this->data['include'] = 'v_add_org';
                $this->load->view('v_template', $this->data);
            }
            if ($details->org_group == 'on') {
                # activate the group
                redirect('admin_org/activate_group/'.$details->org_id);
            } else {
                redirect('admin_org/list_orgs');
            }
        }
    }

    public function edit_org()
    {
        $this->load->model("m_oa_org");
        if (!isset($_POST['submit'])) {
            # load the initial form
            $this->data['org'] = $this->m_oa_org->get_org_details($this->data['id']);
            $this->data['org_names'] = $this->m_oa_org->get_org_names();
            $this->data['heading'] = 'Edit Organisation';
            $this->data['include'] = 'v_edit_org';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            $error = '0';
            $details = new stdClass();
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            if ($this->m_oa_org->check_org_name($details->name, $details->id) == false) {
                $error = '1';
                $this->data['error_message'] = "Organisation name already exists.";
                $this->data['org'] = $this->m_oa_org->get_org_details($details->id);
                $this->data['heading'] = 'Edit Organisation';
                $this->data['include'] = 'v_edit_org';
                $this->load->view('v_template', $this->data);
            }
            if ($error == '0') {
                $this->m_oa_org->edit_org($details);
                redirect('admin_org/list_orgs');
            }
        }
    }
}
