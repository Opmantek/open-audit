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
* @version   2.2.6
* @link      http://www.open-audit.org
*/

/**
* Base Object Help
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Help extends MY_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_help');
        inputRead();
        $this->output->url = $this->config->item('oa_web_index');
        $this->response->meta->collection = 'help';
        $this->response->meta->heading = 'Help';

        $this->load->model('m_files');
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        $this->response->meta->action = __FUNCTION__;
        output($this->response);
    }

    /**
    * Our groups help
    *
    * @access public
    * @return NULL
    */
    function groups()
    {
        $this->response->meta->action = __FUNCTION__;
        $this->m_help->groups();
        output($this->response);
    }

    /**
    * Our queries help
    *
    * @access public
    * @return NULL
    */
    function queries()
    {
        $this->response->meta->action = __FUNCTION__;
        $this->m_help->queries();
        output($this->response);
    }

    /**
    * Our roles help
    *
    * @access public
    * @return NULL
    */
    function roles()
    {
        $this->response->meta->action = __FUNCTION__;
        $this->m_help->roles();
        output($this->response);
    }

    /**
    * Our statistics help
    *
    * @access public
    * @return NULL
    */
    function statistics()
    {
        $this->response->meta->action = __FUNCTION__;
        output($this->response);
    }

    /**
    * Our summaries help
    *
    * @access public
    * @return NULL
    */
    function summaries()
    {
        $this->response->meta->action = __FUNCTION__;
        $this->m_help->summaries();
        output($this->response);
    }

    /**
    * Our widgets help
    *
    * @access public
    * @return NULL
    */
    function defaults()
    {
        $this->response->meta->action = __FUNCTION__;
        $this->response->data = $this->m_help->defaults($this->response->meta->sub_resource);
        output($this->response);
    }

    /**
    * Our support help
    *
    * @access public
    * @return NULL
    */
    function support()
    {
        $this->response->meta->action = __FUNCTION__;
        $this->m_help->support();
        output($this->response);
    }

    /**
    * Our opMaps help
    *
    * @access public
    * @return NULL
    */
    function enterprise()
    {
        $this->response->meta->action = __FUNCTION__;
        output($this->response);
    }

}
// End of file help.php
// Location: ./controllers/help.php
