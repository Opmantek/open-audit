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
 * @version   1.14.4

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
class test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // log the attempt
        $this->load->helper('log');
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);

        // must be an admin to access this page
        $this->load->model('m_users');
        $this->m_users->validate_user();
        if (stripos($this->user->roles, '"admin"') === false) {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('main/list_groups');
            }
        }
    }

    public function index()
    {
        redirect('/');
    }

    public function snmp()
    {
        # NOTE - must edit code to return blank in snmp_helper::my_snmp_get
        echo "<pre>\n";
        $this->load->helper('snmp_helper');
        $dir = BASEPATH.'../application/helpers/';
        $dir_files = scandir($dir);
        $file_list = array();
        $this->load->helper('snmp_oid_helper');
        foreach ($dir_files as $file) {
            if (strpos($file, 'snmp_') !== false and strpos($file, '_helper.php') !== false and $file != 'snmp_helper.php' and $file != 'snmp_oid_helper.php') {
                $file_list[] = $file;
            }
        }
        $oids = array();
        $devices = array();
        foreach ($file_list as $file) {
            if (file_exists($dir.$file)) {
                echo "processing $file\n";
                include $dir.$file;
                unset($lines);
                $lines = file($dir.$file);
                foreach ($lines as $line) {
                    if (stripos($line, 'if ($oid ==')) {
                        $explode = explode("'", $line);
                        $oid = $explode[1];
                        $oids[] = $oid;
                        $device = $get_oid_details('', '', $oid);
                        foreach ($device as $key => $value) {
                            $device->$key = $value;
                        }
                        if (empty($device->manufacturer)) {
                            $device->manufacturer = get_oid($oid);
                        }
                        if (empty($device->model)) {
                            $device->model = '';
                        }
                        if (empty($device->type)) {
                            $device->type = 'unknown';
                        }
                        $device->oid = $oid;
                        $devices[] = $device;
                        unset($device);
                    }
                }
            }
        }
        echo "FILES: " . count($file_list) . "\n";
        echo "OIDS: " . count($oids) . "\n";
        foreach ($devices as $device) {
            echo '"'.$device->oid.'","'.$device->manufacturer.'","'.$device->type.'","'.$device->model."\"\n";
        }
    }
}
