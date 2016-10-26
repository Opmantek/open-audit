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
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

/**
 * Base Object MY_Controller.
 *
 * @access	 public
 *
 * @category Object
 *
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 *
 * @link     http://www.open-audit.org
 *
 * @return	 Admin
 */
class MY_Controller_new extends CI_Controller
{
    /**
     * The custom default controller object.
     */
    public function __construct()
    {
        parent::__construct();
        $this->benchmark->mark('code_start');
        $this->load->library('session');
        $this->load->model('m_configuration');
        $this->m_configuration->load();
        $this->load->model('m_users');
        $this->m_users->validate();

        $this->load->helper('url');

        set_time_limit(600);
        $this->user->org_list = implode(',', $this->m_users->get_orgs($this->user->id));
        if (!empty($this->user->roles)) {
            $this->user->roles = json_decode($this->user->roles);
        } else {
            if ($this->config->config['internal_version'] < 20160904) {
                $this->user->roles = array('admin', 'org_admin');
            } else {
                $this->load->helper('log');
                $log = new stdClass();
                $log->severity = 4;
                $log->file = 'system';
                $log->message = "Could not determine roles for user.";
                stdlog($log);
            }
        }
        if (!empty($this->user->orgs)) {
            $this->user->orgs = json_decode($this->user->orgs);
        } else {
            if ($this->config->config['internal_version'] < 20160904) {
                $this->user->orgs = array(0);
            } else {
                $this->load->helper('log');
                $log = new stdClass();
                $log->severity = 4;
                $log->file = 'system';
                $log->message = "Could not determine orgs for user.";
                stdlog($log);
            }
        }
        unset($temp);
    }
}
// End of file MY_Controller_new.php
// Location: ./core/MY_Controller_new.php
