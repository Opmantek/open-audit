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
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.4.2
* @link      http://www.open-audit.org
*/

/**
* Base Object Test
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <mark.unwin@firstwave.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class Migrate extends CI_Controller
{
    /**
    * Constructor
    *
    * @access    public
    */
    public function __construct()
    {
        parent::__construct();
    }




    /**
    * Index that is used ONLY on Windows for migrating encrypted credentials
    *
    * @access public
    * @return NULL
    */
    public function index()
    {
        if (php_uname('s') != 'Windows NT') {
            redirect('summaries');
        }

        $output = array();
        $this->load->library('encrypt');
        
        # credentials
        if ($this->db->table_exists('credentials')) {
            $sql = "SELECT * FROM `credentials`";
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $row) {
                if (!empty($row->credentials)) {
                    $credentials = $this->encrypt->decode($row->credentials);
                    if (!empty($credentials)) {
                        $item = new stdClass();
                        $item->type = 'credentials';
                        $item->id = $row->id;
                        $item->credentials = $credentials;
                        $output[] = $item;
                    }
                }
            }
        }

        # device credentials
        if ($this->db->table_exists('credential')) {
            $sql = "SELECT * FROM `credential`";
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $row) {
                if (!empty($row->credentials)) {
                    $credentials = $this->encrypt->decode($row->credentials);
                    if (!empty($credentials)) {
                        $item = new stdClass();
                        $item->type = 'credential';
                        $item->id = $row->id;
                        $item->credentials = $credentials;
                        $output[] = $item;
                    }
                }
            }
        }

        # clouds
        if ($this->db->table_exists('clouds')) {
            $sql = "SELECT * FROM `clouds`";
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $row) {
                if (!empty($row->credentials)) {
                    $credentials = $this->encrypt->decode($row->credentials);
                    if (!empty($credentials)) {
                        $item = new stdClass();
                        $item->type = 'clouds';
                        $item->id = $row->id;
                        $item->credentials = $credentials;
                        $output[] = $item;
                    }
                }
            }
        }

        # ldap servers
        if ($this->db->table_exists('ldap_servers')) {
            $sql = "SELECT * FROM `ldap_servers`";
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $row) {
                if (!empty($row->dn_password)) {
                    $credentials = $this->encrypt->decode($row->dn_password);
                    if (!empty($credentials)) {
                        $item = new stdClass();
                        $item->type = 'ldap_servers';
                        $item->id = $row->id;
                        $item->credentials = $credentials;
                        $output[] = $item;
                    }
                }
            }
        }

        $file = fopen("c:\\xampplite\\open-audit\\migrate.json", "w");
        if (!$file) {
            echo "Could not open c:\\xampplite\\open-audit\\migrate.json to export credentials. Please check the directory and/or file permissions and refresh this page.";
        } else {
            if (fwrite($file, json_encode($output))) {
                echo '<h1>Attention</h1>
                <br />For Open-AudIT to move from using PHP 5.3.1 to PHP 7.3.1, we must decrypt our stored credentials using our existing (PHP 5.3.1) codebase, save them and import them back when upgrading to our new (PHP 7.3.1) codebase. This function has just done that decrypt and export. You will find the file at c:\xampplite\open-audit\migrate.json<br /><br />There is no need to touch this file until after you have upgraded Open-AudIT and checked your credentials have been imported correctly (this will automatically be done for you).<br /><br />Once you are happy your credentials have been successfully imported, you are free to delete the file. This affects credentials (credentials), specific device credentials (credential), clouds (clouds) and LDAP servers (ldap_servers) items in the Open-AudIT database.<br /><br />Please close this tab.';
            } else {
                echo "Could not write to c:\\xampplite\\open-audit\\migrate.json to export credentials. Please check the file permissions and refresh this page.";
            }
            fclose($file);
        }
    }
}