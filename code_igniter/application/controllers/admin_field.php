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
class Admin_field extends MY_Controller
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

    public function list_fields()
    {
        $this->load->model("m_additional_fields");
        $this->data['query'] = $this->m_additional_fields->get_all_additional_fields();
        $this->data['heading'] = 'List Additional Fields';
        $this->data['include'] = 'v_list_fields';
        $this->data['sortcolumn'] = '0';
        $this->load->view('v_template', $this->data);
    }

    public function add_field()
    {
        if (!isset($_POST['submit'])) {
            # load the initial form
            $this->load->model("m_oa_group");
            $this->data['groups'] = $this->m_oa_group->get_all_groups();
            $this->data['heading'] = 'Add Additional Field';
            $this->data['include'] = 'v_add_field';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            $this->load->model("m_additional_fields");
            $i = array();
            $i = $this->m_additional_fields->get_additional_field_id($details->field_name);
            if (count($i) > 0) {
                $this->data['error_message'] = "A Field with that name already exists.";
                $this->data['heading'] = 'Add Additional Field';
                $this->data['include'] = 'v_add_field';
                $this->load->view('v_template', $this->data);
            } else {
                # the field does not exist - good
                if (!isset($details->field_values) or $details->field_type != 'list') {
                    $details->field_values = '';
                }
                $this->m_additional_fields->add_additional_field($details);
            }
            unset($i);
            redirect('admin_field/list_fields');
        }
    }

    public function edit_field()
    {
        $this->load->model("m_additional_fields");
        if (!isset($_POST['submit'])) {
            # load the initial form
            $field_id = $this->uri->segment(3, '');
            $this->load->model("m_oa_group");
            $this->data['groups'] = $this->m_oa_group->get_all_groups();
            $this->data['field'] = $this->m_additional_fields->get_additional_field($field_id);
            $this->data['heading'] = 'Edit Additional Field';
            $this->data['include'] = 'v_edit_field';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            //echo "<pre>\n";
            //print_r($details);
            //echo "</pre>\n";
            //exit();
            $this->load->model("m_additional_fields");
            $i = array();
            $i = $this->m_additional_fields->check_additional_fields_name($details->field_name, $details->field_id);
            if (count($i) > 0) {
                echo "A Field with that name already exists.";
                //$this->data['error_message'] = "A Field with that name already exists.";
                //$this->data['heading'] = 'Add Additional Field';
                //$this->data['include'] = 'v_add_field';
                //$this->load->view('v_template', $this->data);
            } else {
                # the name does not exist - good
                if (!isset($details->field_values) or $details->field_type != 'list') {
                    $details->field_values = '';
                }
                $this->m_additional_fields->edit_additional_field($details);
            }
            unset($i);
            redirect('admin_field/list_fields');
        }
    }

    public function delete_field()
    {
        $this->load->model("m_additional_fields");
        $this->m_additional_fields->delete_field($this->data['id']);
        redirect('admin_field/list_fields');
    }
}
