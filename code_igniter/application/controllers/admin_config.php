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
class Admin_config extends MY_Controller
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

    # Same function aqs ahax::update_config except with a redirect to the homepage after submission.
    # TODO - replace this or add the redirect function to the ajax::update_config function.
    # Use the new JSON api going forward.
    # This was written specifically for the licensing modal to update the oae_prompt data
    public function update_config()
    {

        // must be an admin to access this function
        if ($this->user->admin != 'y') {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('main/list_groups');
            }
        }
        $this->load->model("m_oa_config");
        $url = urldecode(current_url());
        $url = str_replace("admin_config/update_config//", "admin_config/update_config/", $url);
        $url_array = explode('/', $url);

        $config_name = $this->uri->segment(3, '');
        $config_value = $this->uri->segment(4, '');

        if ($config_name == 'oae_prompt' and (!isset($config_value) or $config_value == '')) {
            $config_value = date('Y-m-d', time() - 86400);
        } elseif ($config_name == 'oae_prompt' and isset($config_value) and $config_value == '-') {
            $config_value = '2222-02-02';
        } elseif ($config_name == 'oae_prompt' and isset($config_value) and $config_value == intval($config_value)) {
            $config_value = date("Y-m-d", time() + (86400 * $config_value));
        }

        if ($config_value == '-') {
            $config_value = '';
        }

        $this->m_oa_config->update_config($config_name, $config_value, $this->user->id, date('Y-m-d H:i:s'));

        if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            redirect('main/list_groups');
        }
    }
}