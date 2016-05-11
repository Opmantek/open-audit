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
class Admin_device extends MY_Controller
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

    # unused - commenting out
    // public function list_devices()
    // {
    //     $this->load->model("m_oa_device");
    //     $this->data['query'] = $this->m_oa_device->get_all_devices();
    //     $this->data['heading'] = 'List Devices';
    //     $this->data['include'] = 'v_list_devices';
    //     $this->data['sortcolumn'] = '1';
    //     $this->load->view('v_template', $this->data);
    // }

    # unused - commenting out
    // public function delete_devices()
    // {
    //     $this->load->model("m_oa_device");
    //     $this->load->model("m_oa_group");
    //     $device_id = $this->data['id'];
    //     # delete the group
    //     $group_id = $this->m_oa_device->get_group_id($device_id);
    //     $this->m_oa_group->delete_group($group_id);
    //     # delete the device type
    //     $this->m_oa_device->delete_device($device_id);
    //     redirect('admin_device/list_devices');
    // }

    # unused - commenting out
    // public function add_device()
    // {
    //     if (!isset($_POST['submit'])) {
    //         # load the initial form
    //         $this->load->model("m_oa_group");
    //         $this->data['tables'] = $this->m_oa_group->get_tables();
    //         $this->data['system_id'] = '';
    //         $this->data['heading'] = 'Add Device';
    //         $this->data['include'] = 'v_add_device';
    //         $this->load->view('v_template', $this->data);
    //     } else {
    //         # process the form
    //         $details = new stdClass();
    //         foreach ($_POST as $key => $value) {
    //             $details->$key = $value;
    //         }
    //         $this->load->model("m_oa_device");
    //         if (is_null($this->m_oa_device->get_device_id($details->device_name))) {
    //             #device does not exist - good
    //             $details->device_id = $this->m_oa_device->add_device($details);
    //         } else {
    //             $this->data['error_message'] = "Device Name already exists.";
    //             $this->data['heading'] = 'Add Device';
    //             $this->data['include'] = 'v_add_device';
    //             $this->load->view('v_template', $this->data);
    //         }
    //         if ($details->device_group == 'on') {
    //             # activate the group
    //             redirect('admin_device/activate_group/'.$details->device_id);
    //         } else {
    //             redirect('admin_device/list_devices');
    //         }
    //     }
    // }

    # unused - commenting out
    // public function edit_devices()
    // {
    //     $this->load->model("m_oa_device");
    //     if (!isset($_POST['submit'])) {
    //         # load the initial form
    //         $this->data['device'] = $this->m_oa_device->get_device($this->data['id']);
    //         $this->data['heading'] = 'Edit Device';
    //         $this->data['include'] = 'v_edit_device';
    //         $this->data['sortcolumn'] = '1';
    //         $this->load->view('v_template', $this->data);
    //     } else {
    //         # process the form
    //         $error = '0';
    //         foreach ($_POST as $key => $value) {
    //             $details->$key = $value;
    //         }
    //         if ($this->m_oa_device->check_device_name($details->device_name, $details->device_id) == false) {
    //             $error = '1';
    //             $this->data['error_message'] = "Device name already exists.";
    //             $this->data['device'] = $this->m_oa_device->get_device($details->device_id);
    //             $this->data['heading'] = 'Edit Device';
    //             $this->data['include'] = 'v_edit_device';
    //             $this->load->view('v_template', $this->data);
    //         }

    //         if ($error == '0') {
    //             $this->m_oa_device->edit_device($details);
    //             redirect('admin_device/list_devices');
    //         }
    //     }
    // }

    # unused - commenting out
    // public function activate_group()
    // {
    //     # insert a matching Group
    //     $this->load->model("m_oa_device");
    //     $this->load->model("m_oa_group");
    //     $device_id = $this->data['id'];
    //     $device_name = $this->m_oa_device->get_device_name($device_id);
    //     $group = new stdClass();
    //     $group->group_name = "Items that are ".$device_name."s";
    //     $group->group_padded_name = '';
    //     $group->group_description = "Items that are ".$device_name."s";
    //     $group->group_icon = 'device';
    //     $group->group_category = 'device';
    //     $group->group_dynamic_select = "SELECT distinct(system.system_id) FROM system WHERE system.man_type = '".$device_name."' AND system.man_status = 'production'";
    //     $group->group_parent = '';
    //     $group->group_display_sql = '';
    //     $group_id = $this->m_oa_group->insert_group($group);
    //     # update the oa_org with the correct group_id
    //     $this->m_oa_device->set_group_id($device_id, $group_id);
    //     # and now update the group contents
    //     $this->m_oa_group->update_specific_group($group_id);
    //     # now send the user back to list_orgs
    //     redirect('admin_device/list_devices');
    // }

    # unused - commenting out
    // public function delete_group()
    // {
    //     $this->load->model("m_oa_group");
    //     $this->load->model("m_oa_device");
    //     # we have the device_id, need to get the correct group_id
    //     $device_id = $this->data['id'];
    //     $group_id = $this->m_oa_device->get_group_id($device_id);
    //     # delete the group
    //     $this->m_oa_group->delete_group($group_id);
    //     # update the oa_device by removing the group_id
    //     $this->m_oa_device->set_group_id($device_id, '0');
    //     redirect('admin_device/list_devices');
    // }
}
