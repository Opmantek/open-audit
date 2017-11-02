<?php
/**
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
*
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.0.11
* @link      http://www.open-audit.org
*/

/**
* Base Object Files
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Home extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public

    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if (empty($this->config->config['homepage'])) {
            $this->config->config['homepage'] = 'groups';
        }
        if (empty($this->config->config['servers'])) {
            redirect($this->config->config['homepage']);
        }
    }

    /**
    * Index for when we are a collector
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        $this->load->model('m_collection');
        $this->data['tasks'] = $this->m_collection->collection('tasks');
        $this->data['include'] = 'v_dashboard_collector';
        $this->load->view('v_template', $this->data);
    }

}
// End of file home.php
// Location: ./controllers/home.php
