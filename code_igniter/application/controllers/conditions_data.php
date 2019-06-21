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
* @version   3.1.0
* @link      http://www.open-audit.org
*/

/**
* Base Object Agents
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Conditions_data extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        // must be an admin to access this page
        $this->load->model('m_users');
        $this->load->helper('log');
        $this->m_users->validate();
        if (stripos($this->user->roles, '"admin"') === false) {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('summaries');
            }
        }
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
    }

    public function read_oui()
    {
        $this->load->model('m_configuration');
        $this->m_configuration->load();
        $file = file($this->config->config['base_path'] . '/other/imports/oui.txt');
        echo "<pre>\n";
        $ouis = array();
        for ($i=0; $i < count($file); $i++) { 
            if (strpos($file[$i], "   (hex)\t\t")) {
                $oui = str_replace('-', ':',strtolower(trim(substr($file[$i], 0, 8))));
                $manufacturer = trim(substr($file[$i], 17));
                $ouis[$oui] = $manufacturer;
            }
        }
        $sql = array();
        foreach ($ouis as $key => $value) {
            $newsql = "INSERT INTO `conditions` VALUES (NULL, 'MAC Address for $value', 1, '', 100, 'network', '[{\"attribute\":\"mac\",\"operator\":\"st\",\"value\":\"$key\"}]', '[{\"attribute\":\"manufacturer\",\"value\":\"$value\",\"value_type\":\"string\"}])";
            $sql[] = $newsql;
            echo $newsql . "\n\n";
        }
    }
}

// End of file conditions.php
// Location: ./controllers/conditions.php
