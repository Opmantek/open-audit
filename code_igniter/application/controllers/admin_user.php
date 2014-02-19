<?php
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class Admin_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // must be an admin to access this page
        if ($this->session->userdata('user_admin') != 'y') {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('login/index');
            }
        }
        $this->log_event();
    }

    public function index()
    {
        redirect('/');
    }

/*
    public function delete_user()
    {
        $this->load->model("m_oa_user");
        $this->data['query'] = $this->m_oa_user->delete_user($this->data['id']);
        redirect('admin_user/list_users');
    }
*/

    public function deactivate_user()
    {
        $this->load->model("m_oa_user");
        $this->data['query'] = $this->m_oa_user->deactivate_user($this->data['id']);
        redirect('admin_user/list_users');
    }

    public function activate_user()
    {
        $this->load->model("m_oa_user");
        $this->data['query'] = $this->m_oa_user->activate_user($this->data['id']);
        redirect('admin_user/list_users');
    }

    public function list_users()
    {
        $this->load->model("m_oa_user");
        $this->data['query'] = $this->m_oa_user->get_all_users($this->data['id']);
        $this->data['heading'] = 'List Users';
        $this->data['include'] = 'v_list_users';
        $this->data['sortcolumn'] = '0';
        $this->load->view('v_template', $this->data);
    }

    public function edit_user()
    {
        $this->load->model("m_oa_user");
        $this->load->model("m_oa_group");
        $this->load->helper('url');
        $this->data['url'] = current_url();
        if (!isset($_POST['EditUser'])) {
            # load the initial form
            $this->data['user'] = $this->m_oa_user->get_user_details($this->data['id']);
            $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($this->data['id']);
            $this->data['heading'] = 'Edit User';
            $this->data['include'] = 'v_edit_user';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            $error = '0';
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            if ($details->user_password != $details->user_password_confirm) {
                $error = '1';
                $this->data['error_message'] = "Passwords must match.";
                $this->data['user'] = $this->m_oa_user->get_user_details($details->user_id);
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($details->user_id);
                $this->data['heading'] = 'Edit User';
                $this->data['include'] = 'v_edit_user';
                $this->load->view('v_template', $this->data);
            }

            if ($this->m_oa_user->check_user_name($details->user_name, $details->user_id) == false) {
                $error = '1';
                $this->data['error_message'] = "Username already exists.";
                $this->data['user'] = $this->m_oa_user->get_user_details($details->user_id);
                $this->data['user_group'] = $this->m_oa_group->get_all_user_groups($details->user_id);
                $this->data['heading'] = 'Edit User';
                $this->data['include'] = 'v_edit_user';
                $this->load->view('v_template', $this->data);
            }

            if ($error == '0') {
                $this->m_oa_user->edit_user($details);
                $this->m_oa_group->edit_user_groups($details);
                redirect('admin_user/list_users');
            }
        }
    }

    public function add_user()
    {
        if (!isset($_POST['AddUser'])) {
            # load the initial form
            $this->load->model("m_oa_group");
            $this->data['query'] = $this->m_oa_group->get_all_groups();
            $this->data['total_count'] = $this->m_oa_group->count_all_groups();
            $this->data['heading'] = 'Add User';
            $this->data['include'] = 'v_add_user';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            foreach ($_POST as $key => $value) {
                $details->$key = $value;
            }
            $this->load->model("m_oa_group");
            $this->load->model("m_oa_user");
            if (is_null($this->m_oa_user->select_user($details->user_name))) {
                #user does not exist - good
                $details->user_id = $this->m_oa_user->add_user($details);
                $this->m_oa_group->edit_user_groups($details);
            } else {
                $this->data['error_message'] = "Username already exists.";
                $this->load->model("m_oa_group");
                $this->data['query'] = $this->m_oa_group->get_all_groups();
                $this->data['total_count'] = $this->m_oa_group->count_all_groups();
                $this->data['heading'] = 'Add User';
                $this->data['include'] = 'v_add_user';
                $this->load->view('v_template', $this->data);
            }
            redirect('admin_user/list_users');
        }
    }
}
