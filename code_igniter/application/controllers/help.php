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
* @version   2.2.1
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

        # Nasty hack to be removed because we don't call readInput()
        // $this->response = new stdClass();
        // $this->response->included = array();
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "10000";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/10000";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "10000";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Discovered Today";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "10001";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/10001";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "10001";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Discovered Yesterday";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "10002";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/10002";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "10002";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Discovered in the Last 7 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "10003";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/10003";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "10003";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Discovered in the Last 30 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "20000";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/20000";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "20000";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Software Discovered Today";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "20001";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/20001";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "20001";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Software Discovered Yesterday";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "20002";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/20002";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "20002";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Software Discovered in the Last 7 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "20003";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/20003";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "20003";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Software Discovered in the Last 30 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "30000";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/30000";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "30001";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Not Seen for 7 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "30001";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/30001";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "30002";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Not Seen for 30 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "30002";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/30002";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "30003";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Not Seen for 90 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);
        // $enterprise_report = new stdClass();
        // $enterprise_report->id =  "30003";
        // $enterprise_report->links = new stdClass();
        // $enterprise_report->links->self = "/omk/oae/reports/30003";
        // $enterprise_report->type = "reports";
        // $enterprise_report->attributes = new stdClass();
        // $enterprise_report->attributes->id = "30004";
        // $enterprise_report->attributes->description = "";
        // $enterprise_report->attributes->menu_category = "Discovery";
        // $enterprise_report->attributes->menu_display = "y";
        // $enterprise_report->attributes->name = "Devices Not Seen for 180 Days";
        // $this->response->included[] = $enterprise_report;
        // unset($enterprise_report);

        // $this->load->model('m_collection');
        // $result = $this->m_collection->collection('queries');
        // $this->response->included = array_merge($this->response->included, $result);
        // $result = $this->m_collection->collection('summaries');
        // $this->response->included = array_merge($this->response->included, $result);

        
        // $this->response->meta->format = 'screen';
        // $this->load->helper('url');
        // if (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false) {
        //     $this->response->meta->format = 'json';
        // }
        // if (isset($_GET['format'])) {
        //     $this->response->meta->format = $_GET['format'];
        // }
        // if (isset($_POST['format'])) {
        //     $this->response->meta->format = $_POST['format'];
        // }
        // if ($this->response->meta->format == '') {
        //     $this->response->meta->format = 'json';
        // }
        // echo "<pre>\n"; print_r($_GET); exit();

        // $this->response->meta->header = 'Help';
        // $this->response->meta->action = 'read';
        // $this->response->meta->debug = false;


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
