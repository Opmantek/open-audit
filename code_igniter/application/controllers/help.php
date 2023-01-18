<?php
/**
#  Copyright 2022 Firstwave (www.firstwave.com)
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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************
*
* PHP version 5.3.3
*
* @category  Controller
* @package   Help
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.4.1
* @link      http://www.open-audit.org
*/

/**
* Base Object Help
*
* @access   public
* @category Controller
* @package  Help
* @author   Mark Unwin <mark.unwin@firstwave.com>
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
        // inputRead();
        $this->response = response_create();
        $this->output->url = $this->config->config['oa_web_index'];
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
    * Our features help
    *
    * @access public
    * @return NULL
    */
    function features()
    {
        $this->response->meta->action = 'read';
        $this->response->include = 'v_features';
        if ( ! empty($this->response->meta->sub_resource)) {
            $collections = array('agents', 'applications', 'attributes', 'baselines', 'baselines_policies', 'buildings', 'clouds', 'clusters', 'collectors', 'configuration', 'connections', 'credentials', 'dashboards', 'devices', 'discoveries', 'discovery_scan_options', 'fields', 'files', 'floors', 'groups', 'integrations', 'ldap_servers', 'licenses', 'locations', 'networks', 'orgs', 'queries', 'racks', 'rack_devices', 'roles', 'rooms', 'rows', 'rules', 'scripts', 'summaries', 'tasks', 'users', 'widgets');
            if (in_array($this->response->meta->sub_resource, $collections)) {
                $this->load->model('m_'.$this->response->meta->sub_resource);
                $dictionary = $this->{'m_'.$this->response->meta->sub_resource}->dictionary();
            } else {
                $table = $this->response->meta->sub_resource;
                include 'include_dictionary.php';
            }
            $this->response->dictionary = $dictionary;
            #$this->response->include = 'v_features_' . $this->response->meta->sub_resource;
        }
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

}
// End of file help.php
// Location: ./controllers/help.php
