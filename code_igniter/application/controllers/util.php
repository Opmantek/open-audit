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
* Base Object Connections.
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Util extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('log');
        // log the attempt
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);
    }

    /**
    * Index that is unused
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        return;
    }

    /**
    * Process the supplied data and return a padded version string
    *
    * @access public
    * @return JSON
    */
    public function version_padded()
    {
        $json = new stdClass();
        $json->version = $this->uri->segment(3, '');
        if (isset($_POST['version'])) {
            $json->version = $_POST['version'];
        }
        $this->load->helper('software_version');
        $json->version_padded = version_padded($json->version);
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function timestamp()
    {
        $json = new stdClass();
        $this->load->helper('url');
        $this->load->helper('input');
        $unix_timestamp = $this->uri->segment(3, 0);
        $json->datetime = from_unix_timestamp($unix_timestamp);
        header('Content-Type: application/json');
        echo json_encode($json);
    }

    public function audit_my_pc()
    {
        $this->load->helper('url');
        $client = $this->uri->segment(3, 0);
        if ($client == 'lin') {
            $filename = 'audit_linux.sh';
        } elseif ($client == 'osx') {
            $filename = 'audit_osx.sh';
        } else {
            $filename = 'audit_windows.vbs';
        }
        if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))).'/other/'.$filename)) {
            $file = file(dirname(dirname(dirname(dirname(__FILE__)))).'/other/'.$filename);
            $variable['submit_online'] = 'y';
            $variable['create_file'] = 'n';
            $variable['url'] = base_url().'index.php/input/devices';
            $variable['debugging'] = '1';
            foreach ($variable as $name => $value) {
                foreach ($file as $line_num => $line) {
                    if (strpos($line, $name.' =') === 0) {
                        // set the variable
                        $file[$line_num] = $name.' = "'.$value."\"\n";
                        break;
                    }
                }
            }
            // Set headers
            header('Cache-Control: public');
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename='.$filename);
            header('Content-Type: text/plain');
            header('Content-Transfer-Encoding: binary');
            // echo our file contents
            foreach ($file as $line => $value) {
                echo $value;
            }
        }
    }

    public function dictionary()
    {
        $this->load->helper('url');
        $table = $this->uri->segment(3, 0);
        include 'include_dictionary.php';
        header('Content-Type: application/json');
        echo json_encode($dictionary);
    }
}
// End of file util.php
// Location: ./controllers/util.php
