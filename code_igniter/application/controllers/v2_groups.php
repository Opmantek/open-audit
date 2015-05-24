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
 * @version 1.6.4
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class groups extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $log_details = new stdClass();
        $log_details->severity = 6;
        stdlog($log_details);
        unset($log_details);
        #echo "<pre>\n";
    }

    public function index()
    {
    }

    public function _remap($method)
    {
        if ($method != 'index') {
            # show all the groups
            $this->readGroup($method);
        } else {
            # show a specific group
            $this->readGroups();
        }
    }

    public function readGroups()
    {
        $this->load->model("m_groups");
        $this->data['query'] = $this->m_groups->read_groups();
        $this->data['heading'] = 'Groups';
        $this->data['include'] = 'v_groups';
        $this->data['sortcolumn'] = '2';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function readGroup($group_id = '')
    {
        if ($group_id == '' or $group_id != intval($group_id)) {
            redirect('/groups');
        }
        $this->load->model("m_groups");
        $this->data['query'] = $this->m_groups->devices_in_group($group_id);
        $this->data['group'] = $this->m_groups->read_group($group_id);
        $this->data['heading'] = $this->data['group']['0']->group_name;
        $this->data['include'] = 'v_group';
        $this->data['sortcolumn'] = '1';
        $this->data['export_report'] = 'y';
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }



}
