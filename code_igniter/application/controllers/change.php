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
class change extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);
    }

    public function index()
    {
        redirect('/');
    }

    public function edit_alert()
    {
        $this->load->model("m_change_log");
        $data['query'] = array();
        foreach ($_POST as $key => $value) {
            if (mb_strpos($key, 'alert_id_') !== false) {
                $alert = $this->m_change_log->readChange(mb_substr($key, 9));
                foreach ($alert as $alert2) {
                    array_push($data['query'], $alert2);
                }
            }
            if (mb_strpos($key, 'group_id') !== false) {
                $this->data['group_id'] = $value;
            }
        }
        $this->data['query'] = $data['query'];
        $this->data['include'] = 'v_edit_alert';
        $this->data['sortcolumn'] = '1';
        $this->data['heading'] = 'Edit Alerts';
        $this->load->view('v_template', $this->data);
    }

    public function process_edit_alert()
    {
        if (!(isset($_POST['submit']))) {
            redirect('/');
        }
        if (isset($_POST['change_type'])) {
            $details['change_type'] = $this->input->post('change_type');
        } else {
            $details['change_type'] = '';
        }
        if (isset($_POST['change_id'])) {
            $details['change_id'] = $this->input->post('change_id');
        } else {
            $details['change_id'] = '';
        }
        if ($details['change_id'] == '') {
            $details['change_id'] = '1';
        }
        if (isset($_POST['external_change_id'])) {
            $details['external_change_id'] = $this->input->post('external_change_id');
        } else {
            $details['external_change_id'] = '';
        }
        if (isset($_POST['external_change_link'])) {
            $details['external_change_link'] = $this->input->post('external_change_link');
        } else {
            $details['external_change_link'] = '';
        }
        if (isset($_POST['alert_note'])) {
            $details['alert_note'] = $this->input->post('alert_note');
        } else {
            $details['alert_note'] = '';
        }
        $data['alerts'] = array();
        foreach ($_POST as $key => $value) {
            if (mb_strpos($key, 'alert_id_') !== false) {
                array_push($data['alerts'], mb_substr($key, 9));
            }
        }
        if (isset($_POST['group_id'])) {
            $this->data['group_id'] = $this->input->post('group_id');
        } else {
            $this->data['group_id'] = '';
        }

        $details['alerts'] = $data['alerts'];
        $details['user_id'] = $this->user->id;
        $details['alert_ack_time'] = date('Y-m-d H:i:s');
        $this->load->model("m_change_log");
        $result = $this->m_change_log->updateChange($details);
        redirect('/');
    }

    public function add_change()
    {
        $this->data['rte'] = 'y';
        $this->data['include'] = 'v_add_change';
        $this->data['sortcolumn'] = '1';
        $this->data['heading'] = 'Add Change';
        $this->load->view('v_template', $this->data);
    }

    public function process_add_change()
    {
        echo "<pre>\n";
        print_r($_POST);
        echo "</pre>\n";
    }
}
