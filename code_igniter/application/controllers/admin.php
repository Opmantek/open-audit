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

/**
 * Base Object Admin.
 *
 * @access   public
 *
 * @category Object
 *
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 *
 * @link     http://www.open-audit.org
 *
 * @return   Admin
 */
class admin extends MY_Controller
{
    /**
     * Constructor.
     *
     * @access    public
     *
     * @category  Constructor
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return Admin
     */
    public function __construct()
    {
        parent::__construct();
        $log_details = new stdClass();
        stdlog($log_details);
        unset($log_details);
    }

    /**
     * Index.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function index()
    {
        redirect('/');
    }

    /**
     * Just a simple echo of the page name for a test.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return string
     */
    public function test()
    {
        $system_id = 1;
        $table_name = 'system';
        $extended = 'y';
        echo "<pre>\n";

        $sql = "SELECT * FROM $table_name WHERE system_id = 29 or system_id = 26";
        $data = array($system_id);
        $query = $this->db->query($sql, $data);
        $devices = $query->result();
        $result = array();

        if ($extended == 'y') {
            $sql= "SELECT COLUMN_NAME as name, DATA_TYPE as type, COLUMN_TYPE as extended_type, CHARACTER_MAXIMUM_LENGTH as length, COLUMN_DEFAULT as `default` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = ? and table_name = ?";
            $data = array($this->db->database, $table_name);
            $query = $this->db->query($sql, $data);
            $table = $query->result();

            $count = 0;
            foreach ($devices as $device) {
                foreach ($device as $key => $value) {
                    foreach ($table as $column) {
                        if ($column->name == $key) {
                            $result[$count][$key]['name'] = $key;
                            $result[$count][$key]['value'] = $value;
                            $result[$count][$key]['type'] = $column->type;
                            $result[$count][$key]['extended_type'] = $column->extended_type;
                            $result[$count][$key]['length'] = $column->length;
                            $result[$count][$key]['default'] = $column->default;
                        }
                    }
                }
                $count++;
            }
        } else {
            foreach ($devices as $device) {
                $result[] = (array)$device;
            }
        }
        print_r($result);
        exit();
    }


    /**
     * Reset the device icons in the database.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function reset_icons()
    {
        $this->load->model('m_system');
        $this->m_system->reset_icons();
        redirect('/');
    }

    /**
     * The edit config page.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function edit_config()
    {
        $this->load->model('m_oa_config');
        $this->data['query'] = $this->m_oa_config->get_config();
        $this->data['heading'] = 'Edit Config';
        $this->data['include'] = 'v_edit_config';
        $this->data['sortcolumn'] = '0';
        $this->load->view('v_template', $this->data);
    }

    /**
     * Get the config.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return JSON array
     */
    public function get_config()
    {
        #$this->load->model('m_oa_config');
        #$json = (object)$this->m_oa_config->get_config();
        $json = (object) $this->config->config;
        $json->server_ip_addresses = $this->m_oa_config->get_server_ip_addresses();
        $json->server_subnets = $this->m_oa_config->get_server_subnets();
        $json->server_domain = $this->m_oa_config->get_server_domain();
        $json = json_encode($json);
        print_r($json);
    }

    /**
     * Get the entire OAC config, including meta data.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return JSON array
     */
    public function get_config_all()
    {
        $this->load->model('m_oa_config');
        $json = $this->m_oa_config->get_config();
        $json = json_encode($json);
        print_r($json);
    }

    /**
     * The set config api - designed to take a JSON format of config_name: config_value from a POST.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function set_config()
    {
        if (isset($_POST['config'])) {
            if ($config = json_decode($_POST['config'])) {
                $this->load->model('m_oa_config');
                foreach ($config as $name => $value) {
                    $value = urldecode($value);
                    $this->m_oa_config->update_config($name, $value, $this->user->id, date('Y-m-d H:i:s'));
                }
                header(' ', true, 200);
            } else {
                header(' ', true, 400);
            }
        }
    }

    /**
     * Purge the logfile.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function purge_log()
    {
        // default
        $logfile = 'system';
        $temp = @$this->uri->segment(3);
        if ($temp != '') {
            if ($temp == 'access' or $temp == 'debug' or $temp == 'system') {
                $logfile = $temp;
            }
        }
        unset($temp);
        // full path to text file
        if (php_uname('s') === 'Linux') {
            $file = '/usr/local/open-audit/other/log_'.$logfile.'.log';
        } else {
            $file = 'c:\\xampplite\\open-audit\\other\\log_'.$logfile.'.log';
        }
        $handle = fopen($file, 'w');
        fwrite($handle, '');
        fclose($handle);
        redirect('admin/view_log/'.$logfile);
    }

    /**
     * Download the logfile.
     *
     * @access    public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return NULL
     */
    public function download_file()
    {
        $this->load->helper('file');
        $file = @intval($this->uri->segment(3, 0));
        $complete_filename = '';
        if (php_uname('s') === 'Linux') {
            switch ($file) {
                case '1':
                    $complete_filename = '/usr/local/open-audit/other/log_system.log';
                    break;

                case '2':
                    $complete_filename = '/usr/local/omk/log/oae.log';
                    break;

                case '3':
                    $complete_filename = '/usr/local/omk/log/opCommon.log';
                    break;

                case '4':
                    $complete_filename = '/usr/local/omk/log/opDaemon.log';
                    break;

                case '5':
                    $complete_filename = '/usr/local/omk/log/performance.log';
                    break;

                case '6':
                    $complete_filename = '/usr/local/omk/conf/opCommon.nmis';
                    break;

                default:
                    # code...
                    break;
            }
        }
        if (php_uname('s') == 'Windows NT') {
            switch ($file) {
                case '1':
                    $complete_filename = 'c:\xampplite\open-audit\other\log_system.log';
                    break;

                case '2':
                    $complete_filename = 'c:\omk\log\oae.log';
                    break;

                case '3':
                    $complete_filename = 'c:\omk\log\opCommon.log';
                    break;

                case '4':
                    $complete_filename = 'c:\omk\log\opDaemon.log';
                    break;

                case '5':
                    $complete_filename = 'c:\omk\log\performance.log';
                    break;

                case '6':
                    $complete_filename = 'c:\omk\conf\opCommon.nmis';
                    break;

                default:
                    # code...
                    break;
            }
        }
        if ($complete_filename != '') {
            $i = explode('/', $complete_filename);
            $filename = $i[count($i)-1];
            header('Content-Type: '.get_mime_by_extension($complete_filename));
            header('Content-Disposition: attachment;filename="'.$filename.'"');
            header('Cache-Control: max-age=0');
            readfile($complete_filename);
        } else {
            echo "No file specified.";
        }
    }

    public function view_log()
    {
        // defaults
        $logfile = 'system';
        $lines = 25;

        // if present, read this specified log file
        $temp = @$this->uri->segment(3);
        if ($temp != '') {
            if (is_numeric($temp)) {
                $lines = intval($temp);
            } else {
                if ($temp == 'system' or $temp == 'access' or $temp == 'debug') {
                    $logfile = $temp;
                }
            }
        }
        $temp = @$this->uri->segment(4);
        if ($temp != '') {
            if (is_numeric($temp)) {
                $lines = intval($this->uri->segment(4));
            }
        }
        if ($lines < 1) {
            $lines = 25;
        }

        //full path to text file
        if (php_uname('s') == 'Linux') {
            $file = "/usr/local/open-audit/other/log_".$logfile.".log";
            //$file = '../../other/log_'.$logfile.'.log';
        } else {
            $file = "c:\\xampplite\\open-audit\\other\\log_".$logfile.".log";
        }

        $fsize = round(filesize($file)/1024/1024, 2);
        $this->data['comment'] = "<strong>".$file."</strong><br />";
        $this->data['comment'] .= "File size is {$fsize} megabytes<br />";
        $this->data['comment'] .= "Last ".$lines." lines of the file:<br /><pre>";
        $handle = fopen($file, "r") or die('Error opening file: ' . $file);
        $linecounter = $lines;
        $pos = -2;
        $beginning = false;
        $text = array();
        while ($linecounter > 0) {
            $t = " ";
            while ($t != "\n") {
                if (fseek($handle, $pos, SEEK_END) == -1) {
                    $beginning = true;
                    break;
                }
                $t = fgetc($handle);
                $pos --;
            }
            $linecounter --;
            if ($beginning) {
                rewind($handle);
            }
            $text[$lines-$linecounter-1] = fgets($handle);
            if ($beginning) {
                break;
            }
        }
        fclose($handle);
        #$lines = array_reverse($text);
        $lines = $text;
        $this->data['query'] = $lines;
        $this->data['heading'] = 'View Open-AudIT log';
        $this->data['include'] = 'v_list_log';
        $this->data['sortcolumn'] = '1';
        $this->load->view('v_template', $this->data);
    }

    public function import_nmis()
    {
        if (!isset($_POST['submit'])) {
            # show the form
            $this->data['heading'] = 'Import from NMIS';
            $this->data['include'] = 'v_import_nmis';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            $cmd = "php ".$_SERVER['SCRIPT_FILENAME']." cli import_nmis ".$_POST['nodes_file']." >> /usr/local/open-audit/other/log_system.log 2>&1 &";
            exec($cmd);
            redirect('/admin/view_log');
        }
    }

    public function export_nmis()
    {
        if (!isset($_POST['submit'])) {
            # show the list
            $this->data['heading'] = 'Export to NMIS';
            $this->data['include'] = 'v_export_nmis';
            $this->data['export_report'] = 'y';
            $this->data['sortcolumn'] = '1';
            $this->load->model("m_systems");
            $data = array($this->data['id']);
            $query = $this->db->query('SET @group = ?', $data);
            $sql = "SELECT system.system_id, system.nmis_name, system.hostname, system.domain, system.fqdn, system.man_ip_address as nmis_host, '' as nmis_community, '' as nmis_version, system.nmis_group, 'true' as nmis_collect, system.nmis_role, '' as nmis_net, nmis_export, access_details FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group GROUP BY system.system_id ORDER BY system.system_id";
            $query = $this->db->query($sql);
            $this->data['query'] = $query->result();
            $this->load->library('encrypt');
            for ($i = 0; $i<count($this->data['query']); $i++) {
                if ($this->data['query'][$i]->access_details > '') {
                    $j = $this->encrypt->decode($this->data['query'][$i]->access_details);
                    $j = json_decode($j);
                }

                if ($this->data['query'][$i]->nmis_name == '') {
                    # need to create a nmis name

                    if ($this->data['query'][$i]->hostname != '') {
                        # hostname is our preferred choice
                        $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->hostname;
                    } elseif ($this->data['query'][$i]->fqdn != '') {
                        # second choice is to use the FQDN
                        $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->fqdn;
                    } elseif ($this->data['query'][$i]->hostname != '' and $this->data['query'][$i]->domain != '') {
                        # third - create the FQDN from the hostname + domain
                        $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->hostname.$this->data['query'][$i]->domain;
                    } elseif ($this->data['query'][$i]->nmis_host != '') {
                        # lastly - use the ip address
                        $this->data['query'][$i]->nmis_name = ip_address_from_db($this->data['query'][$i]->nmis_host);
                    }
                    # ensure we don't have a name ending in a .
                    if (strrpos($this->data['query'][$i]->nmis_name, '.') == strlen($this->data['query'][$i]->nmis_name)-1) {
                        $this->data['query'][$i]->nmis_name = substr($this->data['query'][$i]->nmis_name, 0, strlen($this->data['query'][$i]->nmis_name)-1);
                    }
                    $this->data['query'][$i]->nmis_name = "<span style=\"color: blue;\">".htmlentities($this->data['query'][$i]->nmis_name)."</span>";
                }

                # nmis host
                #$this->data['query'][$i]->nmis_host = ip_address_from_db($this->data['query'][$i]->nmis_host);
                #if (isset($j->ip_address)) { $this->data['query'][$i]->nmis_host = $j->ip_address; }
                if ($this->data['query'][$i]->fqdn != '') {
                    # first choice is to use the FQDN
                    $this->data['query'][$i]->nmis_host = $this->data['query'][$i]->fqdn;
                } elseif ($this->data['query'][$i]->hostname != '' and $this->data['query'][$i]->domain != '') {
                    # second - create the FQDN from the hostname + domain
                    $this->data['query'][$i]->nmis_host = $this->data['query'][$i]->hostname.$this->data['query'][$i]->domain;
                } elseif ($this->data['query'][$i]->nmis_host != '') {
                    # lastly - use the ip address
                    $this->data['query'][$i]->nmis_host = ip_address_from_db($this->data['query'][$i]->nmis_host);
                }
                # ensure we don't have a host ending in a .
                if (strrpos($this->data['query'][$i]->nmis_host, '.') == strlen($this->data['query'][$i]->nmis_host)-1) {
                    $this->data['query'][$i]->nmis_host = substr($this->data['query'][$i]->nmis_host, 0, strlen($this->data['query'][$i]->nmis_host)-1);
                }

                # nmis group
                if ($this->data['query'][$i]->nmis_group == '') {
                    $this->data['query'][$i]->nmis_group = "<span style=\"color: blue;\">Open-AudIT</span>";
                }

                # nmis role
                if ($this->data['query'][$i]->nmis_role == '') {
                    $this->data['query'][$i]->nmis_role = "<span style=\"color: blue;\">core</span>";
                }

                # snmp community
                if (isset($j->snmp_community)) {
                    $this->data['query'][$i]->nmis_community = $j->snmp_community;
                }

                if ($this->data['query'][$i]->nmis_community == '') {
                    $this->data['query'][$i]->nmis_community = "<span style=\"color: blue;\">".htmlentities($this->config->item('default_snmp_community'))."</span>";
                }

                # snmp version
                if (isset($j->snmp_version)) {
                    $this->data['query'][$i]->nmis_snmp_version = $j->snmp_version;
                }
                if (!isset($this->data['query'][$i]->nmis_snmp_version) or $this->data['query'][$i]->nmis_snmp_version == '') {
                    $this->data['query'][$i]->nmis_snmp_version = "<span style=\"color: blue;\">2c</span>";
                }

                $j = null;
            }
            $this->data['group_id'] = $this->data['id'];
            $this->load->view('v_template', $this->data);
        } else {
            $device_array = array();
            foreach ($_POST as $key => $value) {
                if (strpos($key, 'system_id_') !== false) {
                    $i = explode("_", $key);
                    if ($i[2] > 0) {
                        $device_array[] .= $i[2];
                    }
                }
            }
            $this->load->model("m_system");
            $this->load->model("m_oa_group");
            $this->load->library('encrypt');
            $csv = "name,host,group,role,community,version\n";
            $query = array();
            $i = 0; # I set $i = 0 so I could copy/paste the code from above :-)
            foreach ($device_array as $key => $value) {
                #$sql = "SELECT system.nmis_name, system.man_ip_address as nmis_host, system.nmis_group, system.nmis_role, system.hostname, system.fqdn, '' as nmis_community, '' as nmis_version, 'true' as nmis_collect, '' as nmis_net, access_details FROM system WHERE system_id = ?";
                $sql = "SELECT system.system_id, system.nmis_name, system.hostname, system.domain, system.fqdn, system.man_ip_address as nmis_host, '' as nmis_community, '' as nmis_version, system.nmis_group, 'true' as nmis_collect, system.nmis_role, '' as nmis_net, nmis_export, access_details FROM system WHERE system_id = ?";
                $data = array($value);
                $query = $this->db->query($sql, $data);
                $this->data['query'] = $query->result();

                if ($this->data['query'][$i]->access_details > '') {
                    $j = $this->encrypt->decode($this->data['query'][$i]->access_details);
                    $j = json_decode($j);
                }

                # blank nmis name and populated hostname
                if ($this->data['query'][$i]->nmis_name == '') {
                    # need to create a nmis name

                    if ($this->data['query'][$i]->hostname != '') {
                        # hostname is our preferred choice
                        $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->hostname;
                    } elseif ($this->data['query'][$i]->fqdn != '') {
                        # second choice is to use the FQDN
                        $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->fqdn;
                    } elseif ($this->data['query'][$i]->hostname != '' and $this->data['query'][$i]->domain != '') {
                        # third - create the FQDN from the hostname + domain
                        $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->hostname.$this->data['query'][$i]->domain;
                    } elseif ($this->data['query'][$i]->nmis_host != '') {
                        # lastly - use the ip address
                        $this->data['query'][$i]->nmis_name = ip_address_from_db($this->data['query'][$i]->nmis_host);
                    }
                }
                # ensure we don't have a name ending in a .
                if (strrpos($this->data['query'][$i]->nmis_name, '.') == strlen($this->data['query'][$i]->nmis_name)-1) {
                    $this->data['query'][$i]->nmis_name = substr($this->data['query'][$i]->nmis_name, 0, strlen($this->data['query'][$i]->nmis_name)-1);
                }

                # nmis host
                #$this->data['query'][$i]->nmis_host = ip_address_from_db($this->data['query'][$i]->nmis_host);
                #if (isset($j->ip_address)) { $this->data['query'][$i]->nmis_host = $j->ip_address; }
                if ($this->data['query'][$i]->fqdn != '') {
                    # first choice is to use the FQDN
                    $this->data['query'][$i]->nmis_host = $this->data['query'][$i]->fqdn;
                } elseif ($this->data['query'][$i]->hostname != '' and $this->data['query'][$i]->domain != '') {
                    # second - create the FQDN from the hostname + domain
                    $this->data['query'][$i]->nmis_host = $this->data['query'][$i]->hostname.$this->data['query'][$i]->domain;
                } elseif ($this->data['query'][$i]->nmis_host != '') {
                    # lastly - use the ip address
                    $this->data['query'][$i]->nmis_host = ip_address_from_db($this->data['query'][$i]->nmis_host);
                }
                # ensure we don't have a host ending in a .
                if (strrpos($this->data['query'][$i]->nmis_host, '.') == strlen($this->data['query'][$i]->nmis_host)-1) {
                    $this->data['query'][$i]->nmis_host = substr($this->data['query'][$i]->nmis_host, 0, strlen($this->data['query'][$i]->nmis_host)-1);
                }

                # nmis group
                if ($this->data['query'][$i]->nmis_group == '') {
                    $this->data['query'][$i]->nmis_group = "Open-AudIT";
                }

                # nmis role
                if ($this->data['query'][$i]->nmis_role == '') {
                    $this->data['query'][$i]->nmis_role = "core";
                }

                # snmp community
                if (isset($j->snmp_community)) {
                    $this->data['query'][$i]->nmis_community = $j->snmp_community;
                }
                if ($this->data['query'][$i]->nmis_community == '') {
                    $this->data['query'][$i]->nmis_community = $this->config->item('default_snmp_community');
                }

                # snmp version
                if (isset($j->snmp_version)) {
                    $this->data['query'][$i]->nmis_snmp_version = 'snmpv'.$j->snmp_version;
                }
                if (!isset($this->data['query'][$i]->nmis_snmp_version) or $this->data['query'][$i]->nmis_snmp_version == '') {
                    $this->data['query'][$i]->nmis_snmp_version = "snmpv2c";
                }

                $j = null;

                $csv .= $this->data['query'][$i]->nmis_name.",".
                        $this->data['query'][$i]->nmis_host.",".
                        $this->data['query'][$i]->nmis_group.",".
                        $this->data['query'][$i]->nmis_role.",".
                        $this->data['query'][$i]->nmis_community.",".
                        $this->data['query'][$i]->nmis_snmp_version."\n";
            }
            if (!file_exists("/usr/local/nmis8/admin/import_nodes.pl")) {
                echo $csv;
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment;filename="Nodes.open-audit"');
                header('Cache-Control: max-age=0');
            } else {
                $filename = '/usr/local/nmis8/conf/Nodes.open-audit';
                $handle = fopen($filename, "w");
                fwrite($handle, $csv);
                fclose($handle);
                $cmd = "/usr/local/nmis8/admin/import_nodes.pl csv=$filename nodes=/usr/local/nmis8/conf/Nodes.nmis overwrite=true >> /usr/local/open-audit/other/log_system.log 2>&1 &";
                exec($cmd);
                redirect('/admin/view_log');
            }
        }
    }

    public function scan_ad()
    {
        if (isset($_POST['submit'])) {
            $this->load->model("m_system");
            $this->load->model("m_oa_group");
            $this->load->model("m_audit_log");
            $details = new stdClass();
            $timestamp = date('Y-m-d H:i:s');
            $ad_ldap_server = $_POST['ad_ldap_server'];
            $ad_ldap_connect = "ldap://".$ad_ldap_server;
            $ad_user = $_POST['ad_user'];
            $ad_secret = $_POST['ad_secret'];
            $ad_domain_name = $_POST['ad_domain_name'];
            $dn = "dc=".implode(", dc=", explode(".", $ad_domain_name));
            $ad = ldap_connect($ad_ldap_connect) or die("Couldn't connect to AD!");
            ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
            $bind = @ldap_bind($ad, $ad_user, $ad_secret);
            if ($bind) {
                # get the list of subnets from AD
                $dn = "CN=Subnets,CN=Sites,CN=Configuration,dc=".implode(", dc=", explode(".", $ad_domain));
                $filter = "(&(objectclass=*))";
                $justthese = array("distinguishedName", "name");
                $sr = ldap_search($ad, $dn, $filter, $justthese);
                $info = ldap_get_entries($ad, $sr);
                for ($i = 0; $i < count($info)-1; $i++) {
                    if ( $info[$i]['name'][0] != 'Subnets') {
                        //echo "Subnet: " . $info[$i]['name'][0] . "\n";
                        $this->m_oa_config->update_blessed($info[$i]['name'][0]);
                    }
                }

                # extract the list of computers from AD
                $filter = "(&(objectclass=computer))";
                $justthese = array("dnshostname", "name", "location", "operatingSystem", "lastLogon", "pwdLastSet", "lastlogon", "distinguishedName");
                $sr = ldap_search($ad, $dn, $filter, $justthese);
                $info = ldap_get_entries($ad, $sr);
                for ($i = 0; $i < count($info)-1; $i++) {
                    $details = new stdClass();
                    $details->timestamp = $timestamp;
                    $details->dns_hostname = @strtolower($info[$i]['dnshostname'][0]);
                    $details->fqdn = $details->dns_hostname;
                    $j = explode(".", $details->dns_hostname);
                    $details->hostname = $j[0];
                    $details->man_ip_address = '0.0.0.0';
                    $details->domain = $ad_domain_name;
                    $details->type = 'computer';
                    $details->icon = 'windows';
                    $details->os_name = "";
                    $details->os_name = $info[$i]['operatingsystem'][0];
                    if (strpos(strtolower($details->os_name), "windows") !== false) {
                        $details->os_group = "Windows";
                    } else {
                        $details->os_group = "";
                    }
                    $details->os_family = "";
                    if (strpos($details->os_name, " 95") !== false) {
                        $details->os_family = "Windows 95";
                    }
                    if (strpos($details->os_name, " 98") !== false) {
                        $details->os_family = "Windows 98";
                    }
                    if (strpos($details->os_name, " NT") !== false) {
                        $details->os_family = "Windows NT";
                    }
                    if (strpos($details->os_name, "2000") !== false) {
                        $details->os_family = "Windows 2000";
                    }
                    if (strpos($details->os_name, " XP") !== false) {
                        $details->os_family = "Windows XP";
                        $details->os_name = str_replace('Windows XP', 'Microsoft Windows XP', $details->os_name);
                    }
                    if (strpos($details->os_name, "2003") !== false) {
                        $details->os_family = "Windows 2003";
                    }
                    if (strpos($details->os_name, "Vista") !== false) {
                        $details->os_family = "Windows Vista";
                    }
                    if (strpos($details->os_name, "2008") !== false) {
                        $details->os_family = "Windows 2008";
                        $details->os_name = str_replace('Windows Server®', 'Microsoft Windows Server', $details->os_name);
                    }
                    if (strpos($details->os_name, "Windows 7") !== false) {
                        $details->os_family = "Windows 7";
                        $details->os_name = str_replace('Windows 7', 'Microsoft Windows 7', $details->os_name);
                    }
                    if (strpos($details->os_name, "Windows 8") !== false) {
                        $details->os_family = "Windows 8";
                    }
                    if (strpos($details->os_name, "2012") !== false) {
                        $details->os_family = "Windows 2012";
                    }
                    $details->man_os_family = $details->os_family;
                    $details->man_os_name = $details->os_name;

                    if (@$info[$i]['lastlogon'][0] > @$info[$i]['pwdLastSet'][0]) {
                        $details->last_seen = @$info[$i]['lastlogon'][0];
                    } else {
                        $details->last_seen = @$info[$i]['pwdLastSet'][0];
                    }
                    $j = $details->last_seen;
                    $k = $j / (10000000);
                    $l = ((1970-1601) * 365.242190) * 86400;
                    $m = intval($k-$l);
                    $details->last_seen = date("Y-m-d H:i:s", $m);
                    $details->last_seen_by = 'active directory';
                    $details->audits_ip = '127.0.0.1';
                    $details->last_user = $this->user->full_name;
                    $details->windows_active_directory_ou = '';
                    $j = explode(",", @strtolower($info[$i]['distinguishedname'][0]));
                    for ($k = 1; $k<count($j); $k++) {
                        $details->windows_active_directory_ou = $details->windows_active_directory_ou.",".$j[$k];
                    }
                    $details->windows_active_directory_ou = substr($details->windows_active_directory_ou, 1);
                    $details->icon = strtolower(str_replace(" ", "_", $details->os_family));
                    $full_name = $details->dns_hostname;

                    $details->man_ip_address = gethostbyname($full_name);
                    if ($details->man_ip_address == $full_name) {
                        unset($details->man_ip_address);
                    }
                    if (isset($details->man_ip_address) and ($details->man_ip_address == '0.0.0.0' or $details->man_ip_address == '000.000.000.000')) {
                        unset($details->man_ip_address);
                    }

                    $details->system_key = $this->m_system->create_system_key($details);
                    $details->system_id = $this->m_system->find_system($details);
                    if (isset($details->system_id) and $details->system_id != '') {
                        # update an existing system
                        $this->m_system->update_system($details);
                    } else {
                        # insert a new system
                        $details->system_id = $this->m_system->insert_system($details);
                    }
                    if (isset($this->user->full_name)) {
                        $temp_user = $this->user->full_name;
                    } else {
                        $temp_user = '';
                    }
                    $this->m_audit_log->create($details->system_id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->timestamp);
                    unset($temp_user);
                    $this->m_oa_group->update_system_groups($details);
                }
                redirect('/');
            } else {
                # TODO: redirect to homepage and create an alert to show on screen
                # there were errors with processing.
                $this->data['error'] = "Could not connect to Active Directory.";
                $this->data['query'] = $this->data['error'];
                $this->data['heading'] = 'Error';
                $this->data['include'] = 'v_error';
                $this->data['export_report'] = 'y';
                $this->data['group_id'] = '0';
                $this->load->view('v_template', $this->data);
            }
        } else {
            $this->data['heading'] = 'Scanning';
            $this->data['include'] = 'v_scan_ad';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        }
    }

    public function add_script_audit_windows()
    {
        if (!isset($_POST['submit'])) {
            # display the form
            $this->load->model("m_oa_org");
            $this->data['org_names'] = $this->m_oa_org->get_org_names();
            $this->data['heading'] = 'Create a Windows Audit Script';
            $this->data['include'] = 'v_add_script_audit_windows';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            # process the form
            if ($_POST['strcomputer'] == '') {
                $variable['strcomputer'] = '.';
            } else {
                $variable['strcomputer'] = $_POST['strcomputer'];
            }
            if (isset($_POST['submit_online'])) {
                $variable['submit_online'] = 'y';
            } else {
                $variable['submit_online'] = 'n';
            }
            if (isset($_POST['create_file'])) {
                $variable['create_file'] = 'y';
            } else {
                $variable['create_file'] = 'n';
            }
            $variable['url'] = $_POST['url'];
            if (isset($_POST['use_proxy'])) {
                $variable['use_proxy'] = 'y';
            } else {
                $variable['use_proxy'] = 'n';
            }
            $variable['struser'] = $_POST['struser'];
            $variable['strpass'] = $_POST['strpass'];
            if ($_POST['org_id'] == '0') {
                $variable['org_id'] = '';
            } else {
                $variable['org_id'] = $_POST['org_id'];
            }
            $variable['windows_user_work_1'] = $_POST['windows_user_work_1'];
            $variable['windows_user_work_2'] = $_POST['windows_user_work_2'];
            if (isset($_POST['skip_mount_point'])) {
                $variable['skip_mount_point'] = 'y';
            } else {
                $variable['skip_mount_point'] = 'n';
            }
            if (isset($_POST['skip_printer'])) {
                $variable['skip_printer'] = 'y';
            } else {
                $variable['skip_printer'] = 'n';
            }
            if (isset($_POST['skip_software'])) {
                $variable['skip_software'] = 'y';
            } else {
                $variable['skip_software'] = 'n';
            }
            if (isset($_POST['skip_dns'])) {
                $variable['skip_dns'] = 'y';
            } else {
                $variable['skip_dns'] = 'n';
            }
            if (isset($_POST['self_delete'])) {
                $variable['self_delete'] = 'y';
            } else {
                $variable['self_delete'] = 'n';
            }
            $variable['debugging'] = $_POST['debugging'];
            if (isset($_POST['ldap'])) {
                $variable['ldap'] = $_POST['ldap'];
            } else {
                $variable['ldap'] = '';
            }
            $variable['ldap_seen_days'] = $_POST['ldap_seen_days'];
            $variable['ldap_seen_date'] = $_POST['ldap_seen_date'];
            if (isset($_POST['ping_target'])) {
                $variable['ping_target'] = 'y';
            } else {
                $variable['ping_target'] = 'n';
            }
            $variable['run_netstat'] = $_POST['run_netstat'];
            $filename = dirname(dirname(dirname(dirname(__FILE__))))."/other/audit_windows.vbs";
            if (!file_exists($filename)) {
                exit("Error - $filename does not exist.<br />\n");
            }
            $file = file($filename);
            foreach ($variable as $name => $value) {
                foreach ($file as $line_num => $line) {
                    if (strpos($line, $name." =") === 0) {
                        # set the variable
                        $file[$line_num] = $name." = \"".$value."\"\n";
                        break;
                    }
                }
            }
            // Set headers
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=audit_windows.vbs");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");
            foreach ($file as $line => $value) {
                echo $value;
            }
        }
    }

    public function list_devices_in_location()
    {
        $this->load->model("m_oa_location");
        $this->load->model("m_oa_group_column");
        $this->data['query'] = $this->m_oa_location->list_devices_in_location($this->data['id'], $this->user->id);
        $this->data['column'] = $this->m_oa_group_column->get_group_column();
        $name = $this->m_oa_location->get_location_name($this->data['id']);
        $this->data['heading'] = 'Systems in Location - '.$name;
        $this->data['include'] = 'v_report';
        $this->data['export_report'] = 'y';
        $this->data['group_id'] = '0';
        if ($this->user->admin == 'y') {
            $this->user->access_level = '10';
        } else {
            $this->user->access_level = '3';
        }
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function list_devices_in_org()
    {
        $this->load->model("m_oa_org");
        $this->load->model("m_oa_group_column");
        $this->user->access_level = '7';
        $this->data['query'] = $this->m_oa_org->list_devices_in_org($this->data['id'], $this->user->id);
        $this->data['column'] = $this->m_oa_group_column->get_group_column();
        $org_name = $this->m_oa_org->get_org_name($this->data['id']);
        $this->data['heading'] = 'Systems in Org - '.$org_name;
        $this->data['include'] = 'v_report';
        $this->data['export_report'] = 'y';
        $this->data['group_id'] = '0';
        if ($this->user->admin == 'y') {
            $this->user->access_level = '10';
        } else {
            $this->user->access_level = '3';
        }
        $this->determine_output($this->uri->segment($this->uri->total_rsegments()));
    }

    public function upgrade()
    {
        error_reporting(E_ALL);

        $web_internal_version = $this->config->item('web_internal_version');
        $web_display_version = $this->config->item('web_display_version');
        $this->data['message'] = '';
        $db_internal_version = $this->config->item('internal_version');

        $this->data['output'] = "";

        if (($db_internal_version < '20111001') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta3
            $this->db->trans_start();

            $this->data['output'] .= "Upgrading to beta3.<br />Transaction starting.<br /><br />\n";

            $sql = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_status hard_drive_status varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_hard_drive_index";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_audits ADD audit_debug text NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_service MODIFY service_path_name text NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_software ADD software_installed_by varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_software ADD software_installed_on datetime NOT NULL default '0000-00-00 00:00:00'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD uptime varchar(50) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD pc_os_bit varchar(3) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value) VALUES ('internal_version', '20111001')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value) VALUES ('display_version', 'beta3')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $this->db->trans_complete();

            if ($this->db->trans_status() === false) {
                $this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
            } else {
                $this->data['output'] .= "Transaction committed.<br />beta3 upgrade successful.<br /><br />\n";
            }
        }

        if (($db_internal_version < '20111010') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta4
            $this->db->trans_start();

            $this->data['output'] .= "Upgrading to beta4.<br />Transaction starting.<br /><br />\n";

            $sql = "UPDATE oa_group SET group_dynamic_select = 'SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'' WHERE group_id = '1'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE sys_hw_warranty ( warranty_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, warranty_provider varchar(200) NOT NULL default '', warranty_type varchar(100) NOT NULL default '', warranty_start datetime NOT NULL default '0000-00-00 00:00:00', warranty_end datetime NOT NULL default '0000-00-00 00:00:00', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (warranty_id), KEY system_id (system_id), CONSTRAINT sys_hw_warranty_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '1', 'Hostname',        'hostname',         'link',         'main/system_display/', 'system_id', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '2', 'Description', 'man_description',  'text',         '',                     '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '3', 'IP Address',      'man_ip_address',   'ip_address',   '',                     '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '4', 'Type',            'man_icon',         'image',        '',                     'man_os_family', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '5', 'OS / Device',     'man_os_name',      'text',         '',                     '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES  (NULL, '1', '6', 'Tags',            'tag',              'text',         '',                     '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20111010' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta4' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $this->db->trans_complete();

            if ($this->db->trans_status() === false) {
                $this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
            } else {
                $this->data['output'] .= "Transaction committed.<br />beta4 upgrade successful.<br /><br />\n";
            }
        }

        if (($db_internal_version < '20120317') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta5
            $this->db->trans_start();

            $this->data['output'] .= "Upgrading to beta5.<br />Transaction starting.<br /><br />\n";

            $sql = "ALTER TABLE sys_hw_monitor ADD size varchar(5) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_monitor ADD aspect_ratio varchar(5) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_class enum ('desktop', 'laptop', 'tablet', 'workstation', 'server', 'virtual server', 'virtual desktop', '') NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD last_seen DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD last_seen_by VARCHAR(150) NOT NULL DEFAULT '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD last_user VARCHAR(150) NOT NULL DEFAULT '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_user_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_oa_change";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_alert_log ADD CONSTRAINT oa_alert_oa_change FOREIGN KEY (change_id) REFERENCES oa_change (change_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_audit_log DROP FOREIGN KEY oa_audit_log_user_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT oa_audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_audit_log ADD CONSTRAINT oa_audit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_change DROP FOREIGN KEY oa_change_user_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_change ADD CONSTRAINT oa_change_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_change_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_change_log DROP FOREIGN KEY oa_change_log_user_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_change_log ADD CONSTRAINT oa_change_log_change_id FOREIGN KEY (change_id) REFERENCES oa_change (change_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_change_log ADD CONSTRAINT oa_change_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_graph DROP FOREIGN KEY oa_graph_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_graph ADD CONSTRAINT oa_graph_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_column DROP FOREIGN KEY oa_group_column_group_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_column ADD CONSTRAINT oa_group_column_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_group_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_sys DROP FOREIGN KEY oa_group_sys_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT oa_group_sys_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_sys ADD CONSTRAINT oa_group_sys_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_group_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_user_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_loc_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location_org DROP FOREIGN KEY oa_loc_org_org_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location_org ADD CONSTRAINT oa_loc_org_loc_id FOREIGN KEY (location_id) REFERENCES oa_location (location_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location_org ADD CONSTRAINT oa_loc_org_org_id FOREIGN KEY (org_id) REFERENCES oa_org (org_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_nmap_ports DROP FOREIGN KEY oa_net_nmap_ports_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_nmap_ports ADD CONSTRAINT oa_net_nmap_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_scan_latest DROP FOREIGN KEY oa_net_scan_latest_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_scan_latest ADD CONSTRAINT oa_net_scan_latest_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_scan_log DROP FOREIGN KEY oa_net_scan_log_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_scan_log ADD CONSTRAINT oa_net_scan_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_scan_type DROP FOREIGN KEY oa_net_scan_type_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_net_scan_type ADD CONSTRAINT oa_net_scan_type_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_report_column DROP FOREIGN KEY oa_report_column_group_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_report_column ADD CONSTRAINT oa_report_column_group_id FOREIGN KEY (report_id) REFERENCES oa_report (report_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_switch_switch_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_switch_ports DROP FOREIGN KEY oa_switch_ports_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT oa_switch_ports_switch_switch_id FOREIGN KEY (switch_system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_switch_ports ADD CONSTRAINT oa_switch_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_battery DROP FOREIGN KEY sys_hw_battery_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_battery ADD CONSTRAINT sys_hw_battery_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_bios DROP FOREIGN KEY sys_hw_bios_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_bios ADD CONSTRAINT sys_hw_bios_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_graphs_disk DROP FOREIGN KEY sys_hw_graphs_disk_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_graphs_disk ADD CONSTRAINT sys_hw_graphs_disk_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_hard_drive DROP FOREIGN KEY sys_hw_hard_drive_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_hard_drive ADD CONSTRAINT sys_hw_hard_drive_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_memory DROP FOREIGN KEY sys_hw_memory_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_memory ADD CONSTRAINT sys_hw_memory_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_modem DROP FOREIGN KEY sys_hw_modem_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_modem ADD CONSTRAINT sys_hw_modem_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_monitor DROP FOREIGN KEY sys_hw_monitor_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_monitor ADD CONSTRAINT sys_hw_monitor_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_motherboard DROP FOREIGN KEY sys_hw_motherboard_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_motherboard ADD CONSTRAINT sys_hw_motherboard_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card DROP FOREIGN KEY sys_hw_network_card_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card ADD CONSTRAINT sys_hw_network_card_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card_ip DROP FOREIGN KEY sys_hw_network_card_ip_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card_ip ADD CONSTRAINT sys_hw_network_card_ip_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_optical_drive DROP FOREIGN KEY sys_hw_optical_drive_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_optical_drive ADD CONSTRAINT sys_hw_optical_drive_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_partition DROP FOREIGN KEY sys_hw_partition_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_partition ADD CONSTRAINT sys_hw_partition_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_processor DROP FOREIGN KEY sys_hw_processor_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_processor ADD CONSTRAINT sys_hw_processor_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_scsi_controller DROP FOREIGN KEY sys_hw_scsi_controller_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_scsi_controller ADD CONSTRAINT sys_hw_scsi_controller_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_sound DROP FOREIGN KEY sys_hw_sound_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_sound ADD CONSTRAINT sys_hw_sound_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_video DROP FOREIGN KEY sys_hw_video_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_video ADD CONSTRAINT sys_hw_video_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_warranty DROP FOREIGN KEY sys_hw_warranty_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_warranty ADD CONSTRAINT sys_hw_warranty_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_audits DROP FOREIGN KEY sys_man_audits_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_audits ADD CONSTRAINT sys_man_audits_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_additional_fields DROP FOREIGN KEY sys_man_additional_fields_group_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_additional_fields ADD CONSTRAINT sys_man_additional_fields_group_id FOREIGN KEY (group_id) REFERENCES oa_group (group_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT sys_man_additional_fields_data_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_additional_fields_data DROP FOREIGN KEY sys_man_additional_fields_data_field_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_additional_fields_data ADD CONSTRAINT sys_man_additional_fields_data_field_id FOREIGN KEY (field_id) REFERENCES sys_man_additional_fields (field_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_user_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_antivirus DROP FOREIGN KEY sys_sw_antivirus_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_antivirus ADD CONSTRAINT sys_sw_antivirus_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database DROP FOREIGN KEY sys_sw_db_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database ADD CONSTRAINT sys_sw_db_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database_details DROP FOREIGN KEY sys_sw_db_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database_details ADD CONSTRAINT sys_sw_db_id FOREIGN KEY (db_id) REFERENCES sys_sw_database (db_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database_log DROP FOREIGN KEY sys_sw_db_details_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database_log ADD CONSTRAINT sys_sw_db_details_id FOREIGN KEY (details_id) REFERENCES sys_sw_database_details (details_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_firewall DROP FOREIGN KEY sys_sw_firewall_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_firewall ADD CONSTRAINT sys_sw_firewall_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_firewall_auth_app DROP FOREIGN KEY sys_sw_firewall_auth_app_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_firewall_auth_app ADD CONSTRAINT sys_sw_firewall_auth_app_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_firewall_ports DROP FOREIGN KEY sys_sw_firewall_ports_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_firewall_ports ADD CONSTRAINT sys_sw_firewall_ports_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_group DROP FOREIGN KEY sys_sw_groups_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_group ADD CONSTRAINT sys_sw_groups_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_log DROP FOREIGN KEY sys_sw_log_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_log ADD CONSTRAINT sys_sw_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_route DROP FOREIGN KEY sys_sw_ip_route_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_route ADD CONSTRAINT sys_sw_ip_route_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_pagefile DROP FOREIGN KEY sys_sw_pagefile_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_pagefile ADD CONSTRAINT sys_sw_pagefile_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_scheduled_task DROP FOREIGN KEY sys_sw_scheduled_task_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_scheduled_task ADD CONSTRAINT sys_sw_scheduled_task_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_service DROP FOREIGN KEY sys_sw_service_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_service ADD CONSTRAINT sys_sw_service_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_share DROP FOREIGN KEY sys_sw_share_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_share ADD CONSTRAINT sys_sw_share_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT sys_sw_share_perm_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_share_perms DROP FOREIGN KEY sys_sw_share_perm_share_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_share_perms ADD CONSTRAINT sys_sw_share_perm_share_id FOREIGN KEY (share_id) REFERENCES sys_sw_share (share_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_software DROP FOREIGN KEY sys_sw_software_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_software ADD CONSTRAINT sys_sw_software_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_software_key DROP FOREIGN KEY sys_sw_software_key_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_software_key ADD CONSTRAINT sys_sw_software_key_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_startup DROP FOREIGN KEY sys_sw_startup_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_startup ADD CONSTRAINT sys_sw_startup_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_user DROP FOREIGN KEY sys_sw_user_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_user ADD CONSTRAINT sys_sw_user_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_variable DROP FOREIGN KEY sys_sw_variable_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_variable ADD CONSTRAINT sys_sw_variable_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_server DROP FOREIGN KEY sys_sw_web_server_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_server ADD CONSTRAINT sys_sw_web_server_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT sys_sw_web_server_extn_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_server_ext DROP FOREIGN KEY sys_sw_web_server_extn_server_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_server_ext ADD CONSTRAINT sys_sw_web_server_extn_server_id FOREIGN KEY (webserver_id) REFERENCES sys_sw_web_server (webserver_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT sys_sw_web_site_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site DROP FOREIGN KEY sys_sw_web_site_server_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site ADD CONSTRAINT sys_sw_web_site_server_id FOREIGN KEY (webserver_id) REFERENCES sys_sw_web_server (webserver_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT sys_sw_web_site_header_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_header DROP FOREIGN KEY sys_sw_web_site_header_site_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_header ADD CONSTRAINT sys_sw_web_site_header_site_id FOREIGN KEY (site_id) REFERENCES sys_sw_web_site (site_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT sys_sw_web_site_virtual_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_virtual DROP FOREIGN KEY sys_sw_web_site_virtual_site_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_web_site_virtual ADD CONSTRAINT sys_sw_web_site_virtual_site_id FOREIGN KEY (site_id) REFERENCES sys_sw_web_site (site_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_windows DROP FOREIGN KEY sys_sw_windows_system_id";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_windows ADD CONSTRAINT sys_sw_windows_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20120317' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta5' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $this->db->trans_complete();

            if ($this->db->trans_status() === false) {
                $this->data['output'] .= "ALERT - error encountered. Transactions rolled back.<br /><br />\n";
            } else {
                $this->data['output'] .= "Transaction committed.<br />beta5 upgrade successful.<br /><br />\n";
            }
        }

        if (($db_internal_version < '20120530') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta6

            $this->data['output'] .= "Upgrading to beta6.<br /><br />\n";

            $sql = "ALTER TABLE oa_user MODIFY user_password varchar(250) NOT NULL ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX hostname ON system (hostname) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX linked_sys ON system (linked_sys) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX system_key ON system (system_key) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX user_id_index ON oa_user (user_id) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX user_id_index ON oa_group_user (user_id) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX system_id_index ON oa_group_sys (system_id) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX group_id_index ON oa_group (group_id) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_dns";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE sys_sw_dns (dns_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, dns_name varchar(100) NOT NULL default '', dns_full_name varchar(200) NOT NULL default '', dns_ip_address varchar(30) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (dns_id), KEY system_id (system_id), CONSTRAINT sys_sw_dns_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database_details ADD system_id int(10) unsigned default NULL ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database_log ADD system_id int(10) unsigned NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database ADD db_version_string varchar(50) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database ADD db_edition varchar(50) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_database_details ADD details_instance varchar(50) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system CHANGE man_status man_status enum('production', 'retired', 'maintenance', 'deleted', 'unallocated', 'lost') NOT NULL default 'production' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD printer_color varchar(5) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD printer_duplex varchar(5) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_service_provider varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_service_number varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_service_type varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_service_plan varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_service_network varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_unlock_pin varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_serial_imei varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_serial_sim varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE sys_sw_print_queue (queue_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, queue_system_key varchar(100) NOT NULL default '', queue_name varchar(100) NOT NULL default '', queue_port_name varchar(100) NOT NULL default '', queue_ip_address varchar(100) NOT NULL default '', queue_description varchar(100) NOT NULL default '', queue_model varchar(100) NOT NULL default '', queue_manufacturer varchar(100) NOT NULL default '', queue_shared varchar(100) NOT NULL default '', queue_shared_name varchar(100) NOT NULL default '', queue_location varchar(100) NOT NULL default '', queue_color varchar(100) NOT NULL default '', queue_duplex varchar(100) NOT NULL default '', queue_type enum('virtual', 'physical', '') NOT NULL default '', queue_connection_status varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (queue_id), KEY system_id (system_id), CONSTRAINT sys_sw_print_queue_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_connection ADD name varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_connection DROP speed ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_connection ADD speed FLOAT(7,3) NOT NULL default '0' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_connection ADD status enum('production', 'retired', 'maintenance', 'deleted') NOT NULL default 'production' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_org ADD org_group_id int(10) unsigned NOT NULL default '0' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_audits ADD audit_wmi_fails text NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20120530' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta6' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $this->data['output'] .= "Transaction committed.<br />beta6 upgrade successful.<br /><br />\n";
        }

        if (($db_internal_version < '20120830') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta7
            $sql = "ALTER TABLE oa_location ADD location_group_id int(10) unsigned NOT NULL default '0' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20120830' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta7' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20121130') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta8
            $sql = "DROP TABLE IF EXISTS sys_man_attachment";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE sys_man_attachment ( att_id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, user_id int(10) unsigned default NULL, att_title varchar(200) NOT NULL default '', att_filename text NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00',  PRIMARY KEY  (att_id),  KEY system_id (system_id),  CONSTRAINT att_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE, CONSTRAINT att_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_notes DROP timestamp";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_man_notes ADD timestamp datetime NOT NULL default '0000-00-00 00:00:00'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_device_col";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_device";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_device ( dev_id int(10) unsigned NOT NULL auto_increment, dev_name varchar(100) NOT NULL default '', dev_group_id int(10) unsigned NOT NULL default '0', PRIMARY KEY (dev_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_device_col ( col_id int(10) unsigned NOT NULL auto_increment, dev_id int(10) unsigned default NULL, col_table varchar(100) NOT NULL default '', col_column varchar(100) NOT NULL default '', col_type varchar(100) NOT NULL default '', col_order int(10) unsigned default NULL, PRIMARY KEY (col_id), KEY dev_id (dev_id), CONSTRAINT oa_dev_col_dev_id FOREIGN KEY (dev_id) REFERENCES oa_device (dev_id) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_config ADD config_editable varchar(1) NOT NULL default 'n'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_config ADD config_edited_date datetime NOT NULL default '0000-00-00 00:00:00'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_config ADD config_edited_by int(10) unsigned NOT NULL default '0'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_config ADD config_description varchar(200) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20130126', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta8', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('non_admin_search', 'y', 'y', 'Enable or disable search for non-Administrators');";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130130') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta8
            $sql = "UPDATE oa_config set config_value = '20130130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta8.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130131') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta8
            $sql = "UPDATE oa_config set config_value = '20130131', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta8.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130201') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta8
            $sql = "UPDATE oa_config set config_value = '20130201', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta8.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130202') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta9

            $sql = "DROP TABLE IF EXISTS oa_asset_line";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_asset_order";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_asset_select";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_asset_select (select_id int(10) NOT NULL auto_increment, select_name varchar(50) NOT NULL, select_type enum('', 'sw', 'hw', 'service', 'other') NOT NULL default '', select_sql varchar(250) NOT NULL, group_id int(10) unsigned default NULL, group_amount int(10) unsigned default '0', PRIMARY KEY (select_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_asset_line CHANGE line_type line_type enum('', 'sw', 'hw', 'service', 'other') NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_asset_line CHANGE allocate_type allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_asset_line CHANGE allocate_text allocate_text varchar(50) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_domain', '', 'y', 'The domain name against which your users will validate. EG - open-audit.org') ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('ad_server', '', 'y', 'The IP Address of your domain controller. EG - 192.168.0.1') ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20130202', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta 9', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130204') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta 9.1

            $sql = "DROP TABLE IF EXISTS oa_asset_line";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_asset_order";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('auto_create_network_groups', 'y', 'y', 'Have Open-AudIT automatically create Groups based on Subnet.') ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20130204', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta 9.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130205') and ($this->db->platform() == 'mysql')) {
            # upgrade for beta 9.2
            $sql = "DROP TABLE IF EXISTS oa_asset_line";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_asset_line ( line_id int(10) NOT NULL auto_increment, order_id int(10) unsigned default NULL, org_id int(10) unsigned default NULL, select_id int(10) unsigned default NULL, line_amount int(10) unsigned default NULL, line_cost_each int(10) unsigned default NULL, line_tax_each int(10) unsigned default NULL, line_asset_number varchar(50) NOT NULL, line_gl varchar(50) NOT NULL, line_type enum('', 'sw', 'hw') NOT NULL default '', line_sw_license_expires_date datetime NOT NULL default '0000-00-00 00:00:00', line_sw_license_key varchar(50) NOT NULL, line_sw_license_number varchar(50) NOT NULL, line_sw_license_agreement varchar(50) NOT NULL, line_sw_license_type enum('', 'license', 'license and maintenance', 'upgrade', 'upgrade and maintenance', 'maintenance') NOT NULL default '', line_vendor_producit_id varchar(50) NOT NULL, line_vendor_part_id varchar(50) NOT NULL, line_maintenance_included varchar(50) NOT NULL, line_maintenance_date_expires datetime NOT NULL default '0000-00-00 00:00:00', allocate_type enum('', 'group', 'location', 'org', 'person', 'item', 'other') NOT NULL default '', allocate_text varchar(50) NOT NULL default '', PRIMARY KEY  (line_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_asset_order";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_asset_order ( order_id int(10) NOT NULL auto_increment, order_date datetime NOT NULL default '0000-00-00 00:00:00', order_po varchar(50) NOT NULL, order_vn varchar(50) NOT NULL, order_in varchar(50) NOT NULL, order_vendor varchar(50) NOT NULL, order_auth_officer varchar(100) NOT NULL, order_cost_code varchar(50) NOT NULL, order_notes text NOT NULL default '', PRIMARY KEY  (order_id)) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('auto_create_network_groups', 'y', 'y', 'Have Open-AudIT automatically create Groups based on Subnet.') ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20130205', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = 'beta 9.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130512') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.0
            $this->data['output'] .= "New 'All Devices' Group created. Ensure you have access via Admin -> Users -> Edit User<br /><br />\n";

            $sql = "ALTER TABLE system ADD nmap_type varchar(50) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD contact_name varchar(50) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD fqdn text NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD access_details text NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD snmp_oid text NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD nmis_group varchar(50) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD nmis_name varchar(50) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD nmis_role varchar(50) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_report_column MODIFY column_type enum('','link','image','ip_address','text','timestamp','url', 'multi')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location MODIFY location_latitude float(10,6)";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location MODIFY location_longitude float(10,6)";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location ADD location_icon varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location ADD location_geotag varchar(200) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_user ADD user_active varchar(1) NOT NULL default 'y'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_user SET user_active = 'y'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system DROP man_acting_server";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD system_key_type varchar(4) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis', 'n', 'y', 'Enable import / export to NMIS functions.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_group_column set column_link = '/main/system_display/' WHERE group_id = '1' and column_name = 'Hostname'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE system SET type = 'computer', man_type = 'computer' WHERE type = 'system' or man_type = 'system'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # grab a copy of the users and their access levels to group_id 1
            $sql = "SELECT user_id, group_user_access_level FROM oa_group_user WHERE group_id = '1'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
            $user_array = $query->result();

            $sql = "DELETE FROM oa_group WHERE group_id = '1'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DELETE FROM oa_group_column WHERE group_id = '1'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group VALUES  ('1', 'All Devices', '', 'SELECT distinct(system.system_id) FROM system WHERE system.man_status = \'production\'',1,'Any items that have their status attribute set to production.', 'device', '', 'devices')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '1', 'Icon', 'man_icon', 'image', '',  'man_os_family', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '2', 'Hostname', 'hostname', 'link', '/main/system_display/', 'system_id', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '3', 'IP Address', 'man_ip_address', 'ip_address', '',  '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '4', 'Type', 'man_type', 'text', '',  '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '5', 'Description', 'man_description', 'text', '',  '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '6', 'OS / Device', 'man_os_name', 'text', '',  '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, '1', '7', 'Tags', 'tag',  'text', '',  '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # re-insert the users who originally had access to the group_id 1 which should be the All Devices group
            foreach ($user_array as $user) {
                $sql = "INSERT INTO oa_group_user (group_user_id, user_id, group_id,
                    group_user_access_level) VALUES (NULL, ?, '1', ?)";
                $data = array($user->id, $user->group_user_access_level);
                $query = $this->db->query($sql, $data);
                $this->data['output'] .= $this->db->last_query()."<br /><br />\n";
            }

            $sql = "update oa_group_column set column_link = '/main/system_display/' where column_link = 'main/system_display/'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20130512', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.0', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130620') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.0.3

            $sql = "ALTER TABLE sys_man_audits ADD system_audits_ip varchar(30) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location CHANGE location_geotag location_geo varchar(200) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location ADD location_suburb varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location ADD location_district varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location ADD location_region varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location ADD location_area varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_location ADD location_tags varchar(250) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(R)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(r)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(TM)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '(tm)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE sys_hw_processor SET processor_description = replace (processor_description, '  ', ' ')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(R)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(r)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(TM)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE system SET man_os_name = replace (man_os_name, '(tm)', '')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('nmis_url', '', 'y', 'The web server address of Open-AudIT Enterprise.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_url', '', 'y', 'The web server address of Open-AudIT Enterprise.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('maps_url', '', 'y', 'The web server address of opMaps.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20130620', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.0.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20130810') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.0.4
            $this->load->model('m_oa_user');

            $sql = "ALTER TABLE sys_sw_pagefile ADD pagefile_size varchar(10) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_location_rack_size int(10) unsigned NOT NULL default '0'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_net_nmap_ports";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_net_scan_latest";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_net_scan_log";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS oa_net_scan_type";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_battery";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_firewire";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_floppy";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_keyboard";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_modem";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_mouse";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_onboard_device";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_scsi_device";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_tape_drive";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_hw_usb";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_antivirus";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_database_log";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_firewall";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_firewall_auth_app";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_firewall_ports";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_mapped";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_odbc";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_startup";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_system_security";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_system_security_bulletins";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # Add the Open-AudIT Enterprise user if not already present
            if (!$this->m_oa_user->select_user("open-audit_enterprise")) {
                $sql = "INSERT INTO oa_user (user_id, user_name, user_password, user_full_name, user_lang, user_theme, user_admin, user_change, user_sam, user_active) VALUES (NULL, 'open-audit_enterprise', '43629bd846bb90e40221d5276c832857ca51e49e325f7344704543439ffd6b6d3a963a32a41f55fca6d995fd302acbe03ea7d8bf2b3af91d662d497b0ad9ba1e', 'Open-AudIT Enterprise', 'en', 'tango', 'n', '0', '1', 'y')";
                $this->data['output'] .= $sql."<br /><br />\n";
                $query = $this->db->query($sql);
                $user_id = $this->db->insert_id();
                $sql = "INSERT INTO oa_group_user (user_id, group_id, group_user_access_level) VALUES ('".$user_id."', '1', '3')";
                $this->data['output'] .= $sql."<br /><br />\n";
                $query = $this->db->query($sql);
                $this->data['message'] .= "A new user 'open-audit_enterprise' has been created. This user has 'list view only' access to the All Devices group. Please disable if you are not using Open-AudIT Enterprise.<br /><br />";
            }

            # Add the NMIS user if not already present
            if (!$this->m_oa_user->select_user("nmis")) {
                $sql = "INSERT INTO oa_user (user_id, user_name, user_password, user_full_name, user_lang, user_theme, user_admin, user_change, user_sam, user_active) VALUES (NULL, 'nmis', '5a7f9a638ea430196d765ef8d3875eafd64ee3d155ceddaced75467a76b97ab24080cba4a2e74cde03799a6a49dbc5c36ee204eff1d5f42e08cf7a423fdf9757', 'NMIS', 'en', 'tango', 'y', '0', '1', 'y')";
                $this->data['output'] .= $sql."<br /><br />\n";
                $query = $this->db->query($sql);
                $user_id = $this->db->insert_id();
                $sql = "INSERT INTO oa_group_user (user_id, group_id, group_user_access_level) VALUES ('".$user_id."', '1', '3')";
                $this->data['output'] .= $sql."<br /><br />\n";
                $query = $this->db->query($sql);
                $this->data['message'] .= "A new user 'nmis' has been created. This user has admin access. Please disable if you are not using Open-AudIT Enterprise.<br /><br />";
            }

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable) VALUES ('logo', 'oac-oae', 'n')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('name_match', 'n', 'y', 'Should we match a device based only on its hostname as a last resort.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_log CHANGE log_file_name log_file_name varchar(250) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "DROP TABLE IF EXISTS sys_sw_netstat";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE sys_sw_netstat (id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, protocol enum('tcp', 'udp', 'tcp6', 'udp6', '') NOT NULL default '', ip_address varchar(45) NOT NULL default '', port int(5) NOT NULL default '0', program  varchar(250) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00',  PRIMARY KEY  (id), KEY system_id (system_id), CONSTRAINT sys_sw_netstat_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # we are removing man_vendor from the database
            # there is a column called man_purchase_vendor which is used on several forms
            # man_vendor data (if exists) will be copied to man_purchase_vendor (if not exists)
            $sql = "SELECT system_id, man_vendor, man_purchase_vendor FROM system";
            $query = $this->db->query($sql);
            $system_array = $query->result();

            foreach ($system_array as $system) {
                if ($system->man_vendor > "" and $system->man_purchase_vendor == "") {
                    $sql = "UPDATE system SET man_purchase_vendor = ? WHERE system_id = ?";
                    $data = array($system->man_vendor, $system->system_id);
                    $query = $this->db->query($sql, $data);
                    $this->data['output'] .= $this->db->last_query()."<br /><br />\n";
                }
            }

            $sql = "ALTER TABLE system CHANGE description description varchar(250) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system CHANGE man_description man_description varchar(250) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system DROP man_vendor";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_config CHANGE config_value config_value varchar(250) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('snmp_default_community', 'public', 'y', 'The default community string Open-AudIT will use when connecting to a new device.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20130810', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.0.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20131130') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.0.5
            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('distinct_groups', 'y', 'y', 'Display Groups on the homepage, separated into the type of each Group.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20131130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.0.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20131211') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.0.6
            $sql = "UPDATE oa_config set config_value = '20131211', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.0.6', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20131219') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.1
            $sql = "UPDATE oa_config set config_value = '20131219', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140126') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.1.1

            # update the details of the default group
            $sql = "UPDATE oa_location set location_name = 'Default Location', location_type = 'Office', location_city = 'Gold Coast', location_state = 'Queensland', location_country = 'Australia', location_latitude = '-28.017260', location_longitude = '153.425705', location_icon = 'office' WHERE location_id = '0'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # insert the accompanying group
            $sql = "INSERT INTO oa_group (group_id, group_name, group_dynamic_select, group_parent, group_description, group_category, group_icon) VALUES (NULL, 'Items in Default Location', 'SELECT distinct(system.system_id) FROM system WHERE system.man_location_id = \'0\' and system.man_status = \'production\'', '1', 'Items in Default Location', 'location', 'location')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
            $group_id = $this->db->insert_id();

            # give Admin level users access to the group
            $sql = "INSERT INTO oa_group_user (SELECT NULL, user_id, ?, '10' FROM oa_user WHERE user_admin = 'y')";
            $data = array( $group_id );
            $query = $this->db->query($sql, $data);
            $this->data['output'] .= $this->db->last_query()."<br /><br />\n";

            # and update the location with the inserted group_id
            $sql = "UPDATE oa_location SET location_group_id = ? WHERE location_id = '0'";
            $data = array( $group_id );
            $query = $this->db->query($sql, $data);
            $this->data['output'] .= $this->db->last_query()."<br /><br />\n";

            $sql = "UPDATE oa_config set config_value = '/omk/oae' WHERE config_name = 'oae_url'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '/omk/oae/map' WHERE config_name = 'maps_url'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_description = 'The web server address of NMIS.' WHERE config_name = 'nmis_url'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "SELECT config_value FROM oa_config WHERE config_name = 'nmis_url'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
            $row = $query->row();
            if ($row->config_value == 'http://localhost/cgi-nmis8/nmiscgi.pl') {
                $sql = "UPDATE oa_config set config_value = '' WHERE config_name = 'nmis_url'";
                $this->data['output'] .= $sql."<br /><br />\n";
                $query = $this->db->query($sql);
            }

            $sql = "UPDATE oa_config set config_value = '20140126', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.1.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "SELECT count(*) AS systems FROM system";
            $query = $this->db->query($sql);
            $row = $query->row();
            if ($row->systems > "0") {
                $this->data['output'] .= "<br /><span style=\"color:red;\">NOTE</span> Please click <a href=\"../admin_group/list_groups\" style=\"color: blue;\">this link</a> (or go to Admin -> List Groups) and update (icon on the right) the new Group for 'Items in Default Location'.<br />";
            }
        }

        if (($db_internal_version < '20140204') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.2

            $sql = "ALTER TABLE sys_hw_memory ADD memory_serial varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_netstat CHANGE protocol protocol enum('tcp', 'udp', 'tcp6', 'udp6', 'tcp4', 'udp4', '') NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_software ADD software_description text NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_username', '', 'y', 'The default username used by Open-AudIT to audit Windows PCs.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_password', '', 'y', 'The default password used by Open-AudIT to audit Windows PCs.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_windows_domain', '', 'y', 'The default active directory domain used by Open-AudIT to audit Windows PCs.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ssh_username', '', 'y', 'The default username used by Open-AudIT to audit devices via SSH.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ssh_password', '', 'y', 'The default password used by Open-AudIT to audit devices via SSH.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_network_address', '', 'y', 'The ip address or resolvable hostname used by external devices to talk to Open-AudIT.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = 'y' WHERE config_name = 'name_match'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
            $this->data['output'] .= "<br /><span style=\"color:red;\">NOTE</span> The configuration item name_match has been set to \"y\". This is for the new discovery features. If you do not wish to match devices based on their hostname, please go to Admin -> Config and change it to \"n\".\n";

            $sql = "UPDATE oa_config SET config_name = 'default_snmp_community' WHERE config_name = 'snmp_default_community'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE oa_temp ( temp_id int(10) unsigned NOT NULL auto_increment, temp_name text NOT NULL, temp_value text NOT NULL, temp_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (temp_id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('show_snmp_community', 'y', 'y', 'Show the SNMP community string on forms.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('show_passwords', 'y', 'y', 'Show any passwords on forms.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20140204', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140228') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.2.1

            $sql = "UPDATE oa_config set config_value = '20140228', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.2.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140403') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.3

            $sql = "ALTER TABLE sys_hw_processor ADD processor_count int(2) unsigned NOT NULL default '0' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_processor ADD processor_logical int(2) unsigned NOT NULL default '0' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # we need to upgrade the OAE user to admin because it needs to read the config to populate the discovery page in OAE
            $sql = "UPDATE oa_user SET user_admin = 'y' WHERE user_name = 'open-audit_enterprise' ";
            $this->data['output'] .= "We need to upgrade the open-audit_enterprise user to admin level because it needs to read the config to populate the discovery page in Open-AudIT Enterprise.<br /><br />\n";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20140403', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140501') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.3.1

            $sql = "UPDATE oa_config set config_value = '20140501', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.3.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140515') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.3.2

            $sql = "ALTER TABLE sys_hw_network_card_ip ADD net_index varchar(10) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('rss_enable', 'y', 'y', 'Enable the RSS feed.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('rss_url', 'https://community.opmantek.com/rss/OA.xml', 'y', 'The RSS feed URL.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system CHANGE man_class man_class enum('desktop','laptop','tablet','workstation','server','virtual server','virtual desktop','','hypervisor') NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE sys_sw_virtual_machine ( id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, guest_system_id int(10) unsigned default NULL, name varchar(100) NOT NULL default '', vm_id int(12) unsigned NOT NULL default '0', vm_group text NOT NULL default '', config_file text NOT NULL default '', uuid text NOT NULL default '', memory int(12) unsigned NOT NULL default '0', cpu int(10) unsigned NOT NULL default '0', status varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY  (id), KEY system_id (system_id), CONSTRAINT sys_sw_virtual_machine_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20140515', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.3.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140620') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.3.3

            $sql = "ALTER TABLE sys_hw_network_card ADD net_alias varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20140620', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.3.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140720') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.4

            $sql = "ALTER TABLE sys_hw_hard_drive ADD hard_drive_firmware varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_processor ADD processor_architecture varchar(100) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ipmi_username', '', 'y', 'The default username used by Open-AudIT to audit devices via IPMI.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('default_ipmi_password', '', 'y', 'The default password used by Open-AudIT to audit devices via IPMI.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card CHANGE net_model net_model varchar(255) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20140720', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.4', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20140827') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.4.1

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('download_reports', 'download', 'y', 'Tells Open-AudIT to advise the browser to download as a file or display the csv, xml, json reports. Valid values are download and display.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20140827', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.4.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20141024') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.5

            $sql = "ALTER TABLE oa_user_sessions CHANGE ip_address ip_address varchar(45) DEFAULT '0' NOT NULL";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_user_sessions CHANGE user_agent user_agent varchar(120) NOT NULL";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $fields = $this->db->list_fields('sys_hw_hard_drive');
            $temp_hit = 0;
            foreach ($fields as $field) {
                if ($field == 'hard_drive_model_family') {
                    $temp_hit = 1;
                }
            }
            if ($temp_hit == 0) {
                $sql = "ALTER TABLE sys_hw_hard_drive ADD hard_drive_model_family varchar(200) NOT NULL default '' ";
                $this->data['output'] .= $sql."<br /><br />\n";
                $query = $this->db->query($sql);
            }

            $sql = 'UPDATE oa_report_column SET column_link = "/report/Specific Software/$group_id/" WHERE column_link = "/report/specific_software/$group_id/"';
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = 'UPDATE oa_report_column SET column_link = "/report/Specific Key Name/$group_id/" WHERE column_link = "/report/specific_key_name/$group_id/"';
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = 'UPDATE oa_report_column SET column_link = "/report/Specific Key Text/$group_id/" WHERE column_link = "/report/specific_key_text/$group_id/"';
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20141024', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.5', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20141130') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.5.1

            $sql = "ALTER TABLE system ADD sysDescr varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD sysObjectID varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD sysUpTime varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD sysContact varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD sysName varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD sysLocation varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20141130', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.5.1', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20141208') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.5.2

            $sql = "ALTER TABLE system ADD nmis_export enum('true', 'false') NOT NULL default 'false' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system CHANGE sysDescr sysDescr text NOT NULL";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system CHANGE description description text NOT NULL";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system CHANGE man_description man_description text NOT NULL";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '20141208', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_value = '1.5.2', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);
        }

        if (($db_internal_version < '20141225') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.5.3

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.5.3 commenced';
            stdlog($log_details);

            $sql = "ALTER TABLE sys_sw_windows ADD windows_workgroup varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_location_latitude float(10,6) NOT NULL ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_location_longitude float(10,6) NOT NULL ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_purchase_service_contract_number varchar(255) NOT NULL default '' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_lease_expiry_date date NOT NULL default '0000-00-00' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE system SET type = LOWER(type)";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE system SET man_type = LOWER(man_type)";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Discovered in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE system.man_status = \'production\' and oa_group_sys.group_id = @group and system.first_timestamp > (NOW() - INTERVAL ? DAY) and system.man_ip_address <> \'\' and system.man_ip_address <> \'0.0.0.0\' and system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
            (NULL,$insert_id,2,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,3,'OS','man_os_name','text','','','','left'),
            (NULL,$insert_id,4,'First Audited','first_timestamp','timestamp','','','','left'),
            (NULL,$insert_id,5,'Last Audited','timestamp','timestamp','','','','left'),
            (NULL,$insert_id,6,'Status','status','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Software Discovered in the Last Days','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, DATE(sys_sw_software.timestamp) AS first_attribute FROM sys_sw_software LEFT JOIN system ON sys_sw_software.system_id = system.system_id WHERE system.man_status = \'production\' and sys_sw_software.first_timestamp != system.first_timestamp and sys_sw_software.first_timestamp > (NOW() - INTERVAL ? DAY) GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Package Name','software_name','link','/omk/oae/show_report/specific software/','software_id','first_attribute','left'),
            (NULL,$insert_id,1,'Type','software_comment','text','','','','center'),
            (NULL,$insert_id,2,'Installs','software_count','text','','','','center'),
            (NULL,$insert_id,3,'Contact','software_url','url','','','','center'),
            (NULL,$insert_id,4,'Version','software_version','text','','','','left'),
            (NULL,$insert_id,5,'Publisher','software_publisher','text','','','','left'),
            (NULL,$insert_id,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Not Seen by Date','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_location on system.man_location_id = oa_location.location_id LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) and oa_group_sys.group_id = @group and man_status = \'production\' and (system.man_ip_address <> \'\' and system.man_ip_address <> \'000.000.000.000\' and system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,1,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,2,'Location','location_name','text','','','','left'),
            (NULL,$insert_id,3,'User','windows_user_name','text','','','','left'),
            (NULL,$insert_id,4,'Manufacturer','man_manufacturer','text','','','','left'),
            (NULL,$insert_id,5,'Model','man_model','text','','','','left'),
            (NULL,$insert_id,6,'Serial','man_serial','text','','','','left'),
            (NULL,$insert_id,7,'First Audited','first_timestamp','timestamp','','','','left'),
            (NULL,$insert_id,8,'Last Audited','timestamp','timestamp','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Specific Software','','n','SELECT system.system_id, system.hostname, sys_sw_software.software_id, sys_sw_software.software_name, sys_sw_software.software_installed_by, date(sys_sw_software.software_installed_on) as software_installed_on, sys_sw_software.software_version, date(sys_sw_software.first_timestamp) as first_timestamp FROM system LEFT JOIN sys_sw_software ON (system.system_id = sys_sw_software.system_id and system.first_timestamp < sys_sw_software.first_timestamp) WHERE system.man_status = \'production\' and sys_sw_software.software_name = (SELECT software_name FROM sys_sw_software WHERE software_id = ? LIMIT 1) and date(sys_sw_software.first_timestamp) = date(?) GROUP BY system.system_id','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Software Name','software_name','link','/omk/oae/show_report/Specific Software/','software_id','','left'),
            (NULL,$insert_id,1,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,2,'Software Version','software_version','text','','','','left'),
            (NULL,$insert_id,3,'Detected On','first_timestamp','timestamp','','','','center'),
            (NULL,$insert_id,4,'Installed By','software_installed_by','text','','','','left'),
            (NULL,$insert_id,5,'Installed On','software_installed_on','timestamp','','','','center')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Software Discovered by Date','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, date(sys_sw_software.first_timestamp) as first_attribute FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE system.man_status = \'production\' and oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) = ? GROUP BY sys_sw_software.software_name ORDER BY sys_sw_software.software_name','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Package Name','software_name','link','/omk/oae/show_report/Enterprise - Specific Software/','software_id','first_attribute','left'),
            (NULL,$insert_id,1,'Type','software_comment','text','','','','center'),
            (NULL,$insert_id,2,'Installs','software_count','text','','','','center'),
            (NULL,$insert_id,3,'Contact','software_url','url','','','','center'),
            (NULL,$insert_id,4,'Version','software_version','text','','','','left'),
            (NULL,$insert_id,5,'Publisher','software_publisher','text','','','','left'),
            (NULL,$insert_id,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Discovered by Date','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system WHERE system.man_status = \'production\' and date(system.first_timestamp) = ? and system.man_ip_address <> \'\' and system.man_ip_address <> \'0.0.0.0\' and system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
            (NULL,$insert_id,2,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,3,'OS','man_os_name','text','','','','left'),
            (NULL,$insert_id,5,'Last Seen By','last_seen_by','text','','','','left'),
            (NULL,$insert_id,6,'Status','status','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Not Seen in the Last Days','','n','SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN oa_location on system.man_location_id = oa_location.location_id LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) and oa_group_sys.group_id = @group and man_status = \'production\' and (system.man_ip_address <> \'\' and system.man_ip_address <> \'000.000.000.000\' and system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,1,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,2,'Location','location_name','text','','','','left'),
            (NULL,$insert_id,3,'User','windows_user_name','text','','','','left'),
            (NULL,$insert_id,4,'Manufacturer','man_manufacturer','text','','','','left'),
            (NULL,$insert_id,5,'Model','man_model','text','','','','left'),
            (NULL,$insert_id,6,'Serial','man_serial','text','','','','left'),
            (NULL,$insert_id,7,'First Audited','first_timestamp','timestamp','','','','left'),
            (NULL,$insert_id,8,'Last Audited','timestamp','timestamp','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Group','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE man_os_group = ? and man_status = \'production\'','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Icon','man_icon','image','','man_os_family','','center'),
            (NULL,$insert_id,1,'OS Family','man_os_family','link','/omk/oae/show_report/Enterprise - OS Family/','man_os_family','','left'),
            (NULL,$insert_id,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,3,'IP Address','man_ip_address','ip_address','','','','left'),
            (NULL,$insert_id,4,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,5,'Manufacturer','man_manufacturer','text','','','','left'),
            (NULL,$insert_id,6,'Model','man_model','text','','','','left'),
            (NULL,$insert_id,7,'Serial','man_serial','text','','','','left'),
            (NULL,$insert_id,8,'Location','location_name','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Types','','n','SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system WHERE man_status = \'production\')) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,\'Other\', man_os_group) AS name, count(*) as count FROM system WHERE man_status = \'production\' GROUP BY name;','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Type','name','link','/omk/oae/show_report/Enterprise - OS Group/','name','','left'),
            (NULL,$insert_id,1,'Count','count','text','','','','left'),
            (NULL,$insert_id,2,'Percent','y','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Family','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE man_os_family = ? and man_status = \'production\'','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Icon','man_icon','image','','man_os_family','','center'),
            (NULL,$insert_id,1,'OS Name','man_os_name','link','/omk/oae/show_report/Enterprise - OS Name/','man_os_name','','left'),
            (NULL,$insert_id,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,3,'IP Address','man_ip_address','ip_address','','','','left'),
            (NULL,$insert_id,4,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,5,'Manufacturer','man_manufacturer','text','','','','left'),
            (NULL,$insert_id,6,'Model','man_model','text','','','','left'),
            (NULL,$insert_id,7,'Serial','man_serial','text','','','','left'),
            (NULL,$insert_id,8,'Location','location_name','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - OS Name','','n','SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) WHERE man_os_name = ? and man_status = \'production\'','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Icon','man_icon','image','','man_os_family','','center'),
            (NULL,$insert_id,1,'OS Name','man_os_name','text','','','','left'),
            (NULL,$insert_id,2,'Hostname','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,3,'IP Address','man_ip_address','ip_address','','','','left'),
            (NULL,$insert_id,4,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,5,'Manufacturer','man_manufacturer','text','','','','left'),
            (NULL,$insert_id,6,'Model','man_model','text','','','','left'),
            (NULL,$insert_id,7,'Serial','man_serial','text','','','','left'),
            (NULL,$insert_id,8,'Location','location_name','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Device Types','','n','SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system WHERE man_status = \'production\')) * 100) AS y, man_type AS name, count(*) as count FROM system WHERE man_status = \'production\' GROUP BY name','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Type','name','link','/omk/oae/show_report/Enterprise - Device Type/','name','','left'),
            (NULL,$insert_id,1,'Count','count','text','','','','left'),
            (NULL,$insert_id,2,'Percent','y','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Device Type','','n','SELECT system.system_id, system.hostname, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system WHERE system.man_status = \'production\' and man_type = ?','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
            (NULL,$insert_id,2,'Manufacturer','man_manufacturer','text','','','','left'),
            (NULL,$insert_id,3,'Model','man_model','text','','','','left'),
            (NULL,$insert_id,4,'OS','man_os_name','text','','','','left'),
            (NULL,$insert_id,5,'First Audited','first_timestamp','timestamp','','','','left'),
            (NULL,$insert_id,6,'Last Audited','timestamp','timestamp','','','','left'),
            (NULL,$insert_id,7,'Status','status','text','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Software Discovered Range','','n','SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE system.man_status = \'production\' and oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) >= ? and date(sys_sw_software.first_timestamp) <= ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'Package Name','software_name','link','/omk/oae/report/SpecificSoftwareRange/','software_id','first_attribute','left'),
            (NULL,$insert_id,1,'Type','software_comment','text','','','','center'),
            (NULL,$insert_id,2,'Installs','software_count','text','','','','center'),
            (NULL,$insert_id,3,'Contact','software_url','url','','','','center'),
            (NULL,$insert_id,4,'Version','software_version','text','','','','left'),
            (NULL,$insert_id,5,'Publisher','software_publisher','text','','','','left'),
            (NULL,$insert_id,6,'Google Search','','url','https://encrypted.google.com/search?q=','software_name','google','center')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO `oa_report` VALUES (NULL,'Enterprise - Devices Discovered Range','','n','SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id and oa_group_sys.group_id = @group WHERE system.man_status = \'production\' and date(system.first_timestamp) >= ? and date(system.first_timestamp) <= ? and system.man_ip_address <> \'\' and system.man_ip_address <> \'0.0.0.0\' and system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname','','v_help_oae','','',0)";
            $query = $this->db->query($sql);
            $insert_id = $this->db->insert_id();

            $sql = "INSERT INTO `oa_report_column` VALUES
            (NULL,$insert_id,0,'System Name','hostname','link','/omk/oae/device_details/','system_id','','left'),
            (NULL,$insert_id,1,'IP Address','man_ip_address','ip_address','','','','left'),
            (NULL,$insert_id,2,'Type','man_type','text','','','','left'),
            (NULL,$insert_id,3,'OS','man_os_name','text','','','','left'),
            (NULL,$insert_id,4,'First Audited','first_timestamp','timestamp','','','','left'),
            (NULL,$insert_id,5,'Last Audited','timestamp','timestamp','','','','left')";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('log_style', 'syslog', 'y', 'Tells Open-AudIT which log format to use. Valid values are json and syslog.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('log_level', '5', 'y', 'Tells Open-AudIT which severity of event (at least) should be logged.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_group_column VALUES (NULL, 1, 3, 'Domain', 'domain', 'text', '', '', '', 'left')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_group_column SET column_order = 4 WHERE group_id = 1 and column_variable = 'man_ip_address' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_group_column SET column_order = 5 WHERE group_id = 1 and column_variable = 'man_type' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_group_column SET column_order = 6 WHERE group_id = 1 and column_variable = 'man_description' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_group_column SET column_order = 7 WHERE group_id = 1 and column_variable = 'man_os_name' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_group_column SET column_order = 8 WHERE group_id = 1 and column_variable = 'tag' ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20141225', config_editable = 'n', config_description = 'The internal numerical version.' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.5.3', config_editable = 'n', config_description = 'The version shown on the web pages.' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.5.3 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20150227') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.5.5

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.5.5 commenced';
            stdlog($log_details);

            $this->load->library('encrypt');
            $this->load->model('m_oa_group');

            $configs = array('default_ipmi_password', 'default_ssh_password', 'default_snmp_community', 'default_windows_password');
            $user_id = $this->user->id;
            $timestamp = date('Y-m-d H:i:s');
            foreach ($configs as $config_name) {
                $config_value = $this->m_oa_config->get_config_item($config_name);
                $this->m_oa_config->update_config($config_name, $config_value, $user_id, $timestamp);
            }
            $this->data['output'] .= "Credentials encrypted in DB.<br /><br />\n";

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('page_refresh', '300', 'y', 'Interval in seconds between auto-refreshing the page. Set to 0 to canel auto-refresh.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE system ADD man_oae_manage enum('y', 'n') NOT NULL default 'y'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # need to alter the allowable length of a MAC Address to cope with created addresses for 'bond' adapters
            $sql = "ALTER TABLE sys_hw_network_card CHANGE net_mac_address net_mac_address varchar(200) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card_ip CHANGE net_mac_address net_mac_address varchar(200) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card ADD net_slaves varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # need to edit some Enterprise SQL
            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE man_type = ? and oa_group_sys.group_id = @group' WHERE report_name = 'Enterprise - Device Type'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group)) * 100) AS y, man_type AS name, count(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group GROUP BY name\" WHERE report_name = 'Enterprise - Device Types'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(system.first_timestamp) = ? and system.man_ip_address <> '' and system.man_ip_address <> '0.0.0.0' and system.man_ip_address <> '000.000.000.000' GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Discovered by Date'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and system.first_timestamp > (NOW() - INTERVAL ? DAY) and system.man_ip_address <> '' and system.man_ip_address <> '0.0.0.0' and system.man_ip_address <> '000.000.000.000' GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Discovered in the Last Days'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(system.first_timestamp) >= ? and date(system.first_timestamp) <= ? and system.man_ip_address <> '' and system.man_ip_address <> '0.0.0.0' and system.man_ip_address <> '000.000.000.000' GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Discovered Range'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) and oa_group_sys.group_id = @group and (system.man_ip_address <> '' and system.man_ip_address <> '000.000.000.000' and system.man_ip_address <> '0.0.0.0') GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Not Seen by Date'";
            $query = $this->db->query($sql);

            #$sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL ? day) and oa_group_sys.group_id = @group and (system.man_ip_address <> '' and system.man_ip_address <> '000.000.000.000' and system.man_ip_address <> '0.0.0.0') GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days From'";
            #$query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id and system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) and oa_group_sys.group_id = @group and (system.man_ip_address <> '' and system.man_ip_address <> '000.000.000.000' and system.man_ip_address <> '0.0.0.0') GROUP BY system.system_id ORDER BY system.hostname\" WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and man_os_family = ?\" WHERE report_name = 'Enterprise - OS Family'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and man_os_group = ?\" WHERE report_name = 'Enterprise - OS Group'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and man_os_name = ?\" WHERE report_name = 'Enterprise - OS Name'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group)) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,'Other', man_os_group) AS name, count(*) as count FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group GROUP BY name\" WHERE report_name = 'Enterprise - OS Types'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, date(sys_sw_software.first_timestamp) as first_attribute FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) = ? GROUP BY sys_sw_software.software_name ORDER BY sys_sw_software.software_name\" WHERE report_name = 'Enterprise - Software Discovered by Date'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, DATE(sys_sw_software.timestamp) AS first_attribute FROM sys_sw_software LEFT JOIN system ON sys_sw_software.system_id = system.system_id LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and sys_sw_software.first_timestamp != system.first_timestamp and sys_sw_software.first_timestamp > (NOW() - INTERVAL ? DAY) GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name\" WHERE report_name = 'Enterprise - Software Discovered in the Last Days'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id and sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and date(sys_sw_software.first_timestamp) >= ? and date(sys_sw_software.first_timestamp) <= ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name\" WHERE report_name = 'Enterprise - Software Discovered Range'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT system.system_id, system.hostname, sys_sw_software.software_id, sys_sw_software.software_name, sys_sw_software.software_installed_by, date(sys_sw_software.software_installed_on) as software_installed_on, sys_sw_software.software_version, date(sys_sw_software.first_timestamp) as first_timestamp FROM system LEFT JOIN sys_sw_software ON (system.system_id = sys_sw_software.system_id and system.first_timestamp < sys_sw_software.first_timestamp) LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) WHERE oa_group_sys.group_id = @group and sys_sw_software.software_name = (SELECT software_name FROM sys_sw_software WHERE software_id = ? LIMIT 1) and date(sys_sw_software.first_timestamp) = date(?) GROUP BY system.system_id\" WHERE report_name = 'Enterprise - Specific Software'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = \"SELECT COUNT(key_text) as count, key_name, key_text, key_id FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id LEFT JOIN sys_sw_software_key ON (sys_sw_software_key.system_id = system.system_id and sys_sw_software_key.timestamp = system.timestamp) WHERE oa_group_sys.group_id = @group and key_text IS NOT NULL GROUP BY key_name, key_text ORDER BY key_name\" WHERE report_name = 'Software Keys'";
            $query = $this->db->query($sql);

            $sql = "CREATE TABLE sys_hw_module ( id int(10) unsigned NOT NULL auto_increment, system_id int(10) unsigned default NULL, description varchar(200) NOT NULL default '', module_index varchar(100) NOT NULL default '', object_id varchar(100) NOT NULL default '', contained_in varchar(100) NOT NULL default '', class varchar(10) NOT NULL default '', class_text varchar(20) NOT NULL, hardware_revision varchar(100) NOT NULL, firmware_revision varchar(100) NOT NULL default '', software_revision varchar(100) NOT NULL default '', serial_number varchar(100) NOT NULL default '', asset_id varchar(100) NOT NULL default '', is_fru varchar(100) NOT NULL default '', timestamp datetime NOT NULL default '0000-00-00 00:00:00', first_timestamp datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (id), KEY system_id (system_id), CONSTRAINT sys_hw_module_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20150227' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.5.5' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.5.5 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20150303') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.6

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.6 commenced';
            stdlog($log_details);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_license_status', '', 'n', 'License status of Open-AudIT Enterprise.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = CONCAT('logo-banner-', config_value) WHERE config_name = 'logo'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_editable = 'y', config_description = 'The logo to be used in Open-AudIT. Should be a 475x60 .png. Name should not include the file extension. logo-banner-oac-oae is the default.' WHERE config_name = 'logo'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20150303' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.6' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.6 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20150318') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.6.2

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.6.2 commenced';
            stdlog($log_details);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system LEFT JOIN oa_group_sys ON (system.system_id = oa_group_sys.system_id) LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(NOW(), INTERVAL ? day) AND oa_group_sys.group_id = @group AND (system.man_ip_address <> \"\" AND system.man_ip_address <> \"000.000.000.000\" AND system.man_ip_address <> \"0.0.0.0\") GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days'";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20150318' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.6.2' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.6.2 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20150404') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.6.4

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.6.4 commenced';
            stdlog($log_details);

            $sql = "UPDATE oa_config SET config_value = 'logo-banner-oac-oae' WHERE config_name = 'logo'";
            $query = $this->db->query($sql);

            $sql = "SELECT report_id FROM oa_report WHERE report_name = 'Enterprise - Software Discovered Range'";
            $query = $this->db->query($sql);
            $row = $query->row();

            if (isset($row->report_id) and $row->report_id != '' and $row->report_id != '0') {
                $sql = "UPDATE oa_report_column SET column_link = '/omk/oae/show_report/Specific Software/' WHERE column_order = 0 AND report_id = " . $row->report_id;
                $query = $this->db->query($sql);
            }

            $sql = "UPDATE oa_config SET config_value = '20150404' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.6.4' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.6.4 completed';
            stdlog($log_details);
            unset($log_details);
        }


        if (($db_internal_version < '20150512') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.8

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.8 commenced';
            stdlog($log_details);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('network_group_subnet', '30', 'y', 'If the netmask is equal to or greater than this number, do not create a network group.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_name = 'network_group_auto_create' WHERE config_name = 'auto_create_network_groups'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_description = 'The domain name against which your users will validate to log on to Open-AudIT. EG - open-audit.org' WHERE config_name = 'ad_domain'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_description = 'The IP Address of the domain controller your users will validate to log to Open-AudIT. EG - 192.168.0.1' WHERE config_name = 'ad_server'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config set config_description = 'Interval in seconds between auto-refreshing the page. Set to 0 to cancel auto-refresh.' WHERE config_name = 'page_refresh'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('network_group_homepage_limit', '20', 'y', 'The number of network groups to display on the homepage.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card ADD ifadminstatus varchar(100) NOT NULL default ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_hw_network_card ADD iflastchange bigint NOT NULL default '0'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20150512' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.8' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.8 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20150610') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.8.1

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.8.1 commenced';
            stdlog($log_details);

            $sql = 'UPDATE oa_report_column SET column_link = "/report/specific_software/$group_id/" WHERE column_link = "/report/Specific Software/$group_id/"';
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20150610' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.8.1' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.8.1 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20150620') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.8.2

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.8.2 commenced';
            stdlog($log_details);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('oae_prompt', '2015-06-01', 'n', 'Prompt to activate a license for Open-AudIT Enterprise.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('discovery_create_alerts', 'y', 'y', 'Should Open-AudIT create an entry in the alert table if a change is detected.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('discovery_update_groups', 'y', 'y', 'Should Open-AudIT update the device groups after discovering a device.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_name = 'oae_license' WHERE config_name = 'oae_license_status'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_name = 'discovery_name_match', config_description = 'Should we match a device based only on its hostname during discovery.' WHERE config_name = 'name_match'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config VALUES ('discovery_ip_match','n','y','0000-00-00 00:00:00',0,'Should we match a device based only on its ip during discovery.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "INSERT INTO oa_config VALUES ('discovery_use_ipmi','y','y','0000-00-00 00:00:00',0,'Should we use ipmitool for discovering management ports if ipmitool is installed.')";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX net_index ON sys_hw_network_card (net_index) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "CREATE INDEX `timestamp` ON sys_hw_network_card (`timestamp`) ";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            # Activate a couple of reports
            $this->load->model('m_oa_report');
            $this->load->model('m_oa_report_column');

            $sql = "SELECT report_name from oa_report";
            $query = $this->db->query($sql);
            $result = $query->result();
            $activate_disk = 'y';
            $activate_interfaces = 'y';
            foreach ($result as $key => $value) {
                if ($value == 'Disk Partition Use') {
                    $activate_disk = 'n';
                }
                if ($value == 'Interfaces Used - Available') {
                    $activate_interfaces = 'n';
                }
            }

            # The Disk Partition Use report
            if ($activate_disk == 'y') {
                $file_report = BASEPATH.'../application/controllers/reports/DiskPartitionUse.xml';
                $file_handle = fopen($file_report, "rb");
                $contents = fread($file_handle, filesize($file_report));
                $xml = new SimpleXMLElement(utf8_encode($contents));
                foreach ($xml->children() as $child) {
                    if ($child->getName() == 'details') {
                        $report_id = $this->m_oa_report->import_report($child);
                    }
                    if ($child->getName() == 'columns') {
                        $this->m_oa_report_column->import_report($child, $report_id);
                    }
                }
            }

            # The Interfaces Used / Available report
            if ($activate_interfaces == 'y') {
                $file_report = BASEPATH.'../application/controllers/reports/InterfacesUsed-Available.xml';
                $file_handle = fopen($file_report, "rb");
                $contents = fread($file_handle, filesize($file_report));
                $xml = new SimpleXMLElement(utf8_encode($contents));
                foreach ($xml->children() as $child) {
                    if ($child->getName() == 'details') {
                        $report_id = $this->m_oa_report->import_report($child);
                    }
                    if ($child->getName() == 'columns') {
                        $this->m_oa_report_column->import_report($child, $report_id);
                    }
                }
            }

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_manufacturer, system.man_model, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_type = ?' WHERE report_name = 'Enterprise - Device Type'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT CEILING(COUNT(*) / (SELECT COUNT(system.system_id) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id) * 100) AS y, man_type AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp2 ON system.system_id = grp2.system_id GROUP BY name' WHERE report_name = 'Enterprise - Device Types'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, man_status AS status, last_seen_by FROM system LEFT JOIN oa_group_sys ON system.system_id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group AND date(system.first_timestamp) = ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname LIMIT @limit' WHERE report_name = 'Enterprise - Devices Discovered by Date'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp, man_status AS status FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE system.first_timestamp > (NOW() - INTERVAL ? DAY) AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Discovered in the Last Days'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, system.man_os_name, system.man_ip_address, date(system.first_timestamp) as first_timestamp, date(system.timestamp) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(system.first_timestamp) >= ? AND date(system.first_timestamp) <= ? AND system.man_ip_address <> \'\' AND system.man_ip_address <> \'0.0.0.0\' AND system.man_ip_address <> \'000.000.000.000\' GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Discovered Range'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id  LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL 30 day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Not Seen by Date'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, system.man_type, oa_location.location_name, sys_sw_windows.windows_user_name, system.man_manufacturer, system.man_model, system.man_serial, date(system.first_timestamp) as first_timestamp, GREATEST(date(system.timestamp), date(system.last_seen)) as timestamp FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) LEFT JOIN sys_sw_windows ON (system.system_id = sys_sw_windows.system_id AND system.timestamp = sys_sw_windows.timestamp) WHERE GREATEST(date(system.timestamp), date(system.last_seen)) < DATE_SUB(?, INTERVAL ? day) AND (system.man_ip_address <> \'\' AND system.man_ip_address <> \'000.000.000.000\' AND system.man_ip_address <> \'0.0.0.0\') GROUP BY system.system_id ORDER BY system.hostname' WHERE report_name = 'Enterprise - Devices Not Seen in the Last Days From'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_family = ?' WHERE report_name = 'Enterprise - OS Family'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_group = ?' WHERE report_name = 'Enterprise - OS Group'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.man_icon, system.man_os_family, system.hostname, system.system_id, system.man_ip_address, system.man_type, system.man_manufacturer, system.man_model, system.man_serial, system.man_os_group, system.man_os_family, system.man_os_name, oa_location.location_name FROM system LEFT JOIN oa_location ON (system.man_location_id = oa_location.location_id) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE man_os_name = ?' WHERE report_name = 'Enterprise - OS Name'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT ceiling((COUNT(*) / (SELECT COUNT(*) FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id)) * 100) AS y, IF(CHAR_LENGTH(man_os_group)=0,\'Other\', man_os_group) AS name, count(*) as count FROM system INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id GROUP BY name' WHERE report_name = 'Enterprise - OS Types'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, date(sys_sw_software.first_timestamp) as first_attribute FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id AND sys_sw_software.first_timestamp != system.first_timestamp) LEFT JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(sys_sw_software.first_timestamp) = ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name' WHERE report_name = 'Enterprise - Software Discovered by Date'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment, DATE(sys_sw_software.timestamp) AS first_attribute FROM sys_sw_software LEFT JOIN system ON sys_sw_software.system_id = system.system_id INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE sys_sw_software.first_timestamp != system.first_timestamp AND sys_sw_software.first_timestamp > (NOW() - INTERVAL ? DAY) GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name' WHERE report_name = 'Enterprise - Software Discovered in the Last Days'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT COUNT(DISTINCT system.system_id) AS software_count, sys_sw_software.software_name, sys_sw_software.software_version, sys_sw_software.software_publisher, sys_sw_software.software_url, sys_sw_software.software_email, sys_sw_software.software_id, sys_sw_software.software_comment FROM sys_sw_software LEFT JOIN system ON (sys_sw_software.system_id = system.system_id AND sys_sw_software.first_timestamp != system.first_timestamp) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE date(sys_sw_software.first_timestamp) >= ? AND date(sys_sw_software.first_timestamp) <= ? GROUP BY sys_sw_software.software_name, sys_sw_software.software_version ORDER BY sys_sw_software.software_name' WHERE report_name = 'Enterprise - Software Discovered Range'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_report SET report_sql = 'SELECT system.system_id, system.hostname, sys_sw_software.software_id, sys_sw_software.software_name, sys_sw_software.software_installed_by, date(sys_sw_software.software_installed_on) as software_installed_on, sys_sw_software.software_version, date(sys_sw_software.first_timestamp) as first_timestamp FROM system LEFT JOIN sys_sw_software ON (system.system_id = sys_sw_software.system_id and system.first_timestamp < sys_sw_software.first_timestamp) INNER JOIN (SELECT oa_group_sys.system_id FROM oa_group_sys LEFT JOIN system on oa_group_sys.system_id = system.system_id WHERE group_id = @group ORDER BY system.system_id LIMIT @limit) AS grp ON system.system_id = grp.system_id WHERE sys_sw_software.software_name = (SELECT software_name FROM sys_sw_software WHERE software_id = ? LIMIT 1) AND date(sys_sw_software.first_timestamp) = date(?) GROUP BY system.system_id' WHERE report_name = 'Enterprise - Specific Software'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE oa_group_sys DROP group_sys_type";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "ALTER TABLE sys_sw_service CHANGE service_start_mode service_start_mode varchar(100) NOT NULL DEFAULT ''";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '20150620' WHERE config_name = 'internal_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $sql = "UPDATE oa_config SET config_value = '1.8.2' WHERE config_name = 'display_version'";
            $this->data['output'] .= $sql."<br /><br />\n";
            $query = $this->db->query($sql);

            $log_details->message = 'Upgrade database to 1.8.2 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20151112') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.8.4

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.8.4 commenced';
            stdlog($log_details);

            $sql = array();
            $sql[] = "ALTER TABLE sys_sw_service MODIFY service_start_mode varchar(200) NOT NULL default ''";
            $sql[] = "ALTER TABLE sys_sw_service MODIFY service_state varchar(200) NOT NULL default ''";
            $sql[] = "DELETE FROM oa_config WHERE config_name = 'discovery_ip_exclude'";
            $sql[] = "INSERT INTO oa_config (config_name, config_value, config_editable, config_description) VALUES ('discovery_ip_exclude', '', 'y', 'Populate this list with ip addresses to be excluded from discovery. IPs should be separated by a space.')";

            $sql[] = "UPDATE oa_config SET config_value = '20151112' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.8.4' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $query = $this->db->query($this_query);
            }

            $log_details->message = 'Upgrade database to 1.8.4 completed';
            stdlog($log_details);
            unset($log_details);
        }



        if (($db_internal_version < '20160104') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.10

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.10 commenced';
            stdlog($log_details);

            $sql = array();

            # We know these tables aren't used - drop them
            $sql[] = "DROP TABLE IF EXISTS oa_change_log";
            $sql[] = "DROP TABLE IF EXISTS oa_contact";
            $sql[] = "DROP TABLE IF EXISTS oa_location_org";
            $sql[] = "DROP TABLE IF EXISTS oa_asset_line";
            $sql[] = "DROP TABLE IF EXISTS oa_asset_order";
            $sql[] = "DROP TABLE IF EXISTS oa_device_col";
            $sql[] = "DROP TABLE IF EXISTS oa_device";
            $sql[] = "DROP TABLE IF EXISTS oa_graph";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_antivirus";
            $sql[] = "DROP TABLE IF EXISTS oa_switch_ports";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_share_perms";

            # bios
            $sql[] = "DELETE sys_hw_bios FROM sys_hw_bios LEFT JOIN system ON system.system_id = sys_hw_bios.system_id WHERE sys_hw_bios.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_bios ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_manufacturer manufacturer varchar(200) NOT NULL DEFAULT '' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_serial serial varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_description description varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_smversion smversion varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_version version varchar(100) NOT NULL DEFAULT '' AFTER smversion";
            $sql[] = "ALTER TABLE sys_hw_bios CHANGE bios_asset_tag asset_tag varchar(100) NOT NULL DEFAULT '' AFTER version";
            $sql[] = "RENAME TABLE sys_hw_bios TO `bios`";

            # disk
            $sql[] = "DELETE sys_hw_hard_drive FROM sys_hw_hard_drive LEFT JOIN system ON system.system_id = sys_hw_hard_drive.system_id WHERE sys_hw_hard_drive.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_serial serial varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_device_id device varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_caption caption varchar(100) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_index hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER caption";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_interface_type interface_type varchar(100) NOT NULL DEFAULT '' AFTER hard_drive_index";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_partitions partition_count tinyint unsigned NOT NULL DEFAULT '0' AFTER interface_type";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_bus scsi_bus varchar(10) NOT NULL DEFAULT '' AFTER partition_count";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_logical_unit scsi_logical_unit varchar(100) NOT NULL DEFAULT '' AFTER scsi_bus";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_scsi_port scsi_port varchar(10) NOT NULL DEFAULT '' AFTER scsi_logical_unit";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_size size int unsigned NOT NULL DEFAULT '0' AFTER scsi_port";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_status status varchar(100) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_firmware firmware varchar(100) NOT NULL DEFAULT '' AFTER status";
            $sql[] = "ALTER TABLE sys_hw_hard_drive CHANGE hard_drive_model_family model_family varchar(200) NOT NULL DEFAULT '' AFTER firmware";
            $sql[] = "RENAME TABLE sys_hw_hard_drive TO `disk`";

            # dns
            $sql[] = "DELETE sys_sw_dns FROM sys_sw_dns LEFT JOIN system ON system.system_id = sys_sw_dns.system_id WHERE sys_sw_dns.timestamp <> system.timestamp";
            $sql[] = "DELETE sys_sw_dns FROM sys_sw_dns WHERE (dns_name = '' AND dns_full_name = '')";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_dns ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_full_name fqdn varchar(200) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_dns CHANGE dns_ip_address ip varchar(45) NOT NULL DEFAULT '' AFTER fqdn";
            $sql[] = "RENAME TABLE sys_sw_dns TO `dns`";

            # graphs
            $sql[] = "DROP TABLE IF EXISTS sys_hw_graph";
            $sql[] = "CREATE TABLE `graph` (
                        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                        `system_id` int(10) unsigned DEFAULT NULL,
                        `linked_table` varchar(100) NOT NULL DEFAULT '',
                        `linked_row` varchar(100) NOT NULL DEFAULT '',
                        `type` enum('disk','partition','directory','file','database','share','other') NOT NULL DEFAULT 'partition',
                        `used_percent` tinyint unsigned NOT NULL DEFAULT '0',
                        `free_percent` tinyint unsigned NOT NULL DEFAULT '0',
                        `used` int unsigned NOT NULL DEFAULT '0',
                        `free` int unsigned NOT NULL DEFAULT '0',
                        `size` int unsigned NOT NULL DEFAULT '0',
                        `timestamp` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                        PRIMARY KEY (`id`), KEY `system_id` (`system_id`),
                        CONSTRAINT `sys_hw_graph_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE)
                        ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO graph SELECT NULL, system_id, 'partition', partition_id, 'partition', used_percent, free_percent, used, free, total as size, `timestamp` FROM sys_hw_graphs_disk";
            $sql[] = "DROP TABLE IF EXISTS sys_hw_graphs_disk";


            # log
            $sql[] = "DELETE sys_sw_log FROM sys_sw_log LEFT JOIN system ON system.system_id = sys_sw_log.system_id WHERE sys_sw_log.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_log ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_name name varchar(50) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_file_name file_name varchar(250) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_file_size file_size int unsigned NOT NULL DEFAULT '0' AFTER file_name";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_max_file_size max_file_size int unsigned NOT NULL DEFAULT '0' AFTER file_size";
            $sql[] = "ALTER TABLE sys_sw_log CHANGE log_overwrite overwrite varchar(30) NOT NULL DEFAULT '' AFTER max_file_size";
            $sql[] = "RENAME TABLE sys_sw_log TO `log`";

            # memory
            $sql[] = "DELETE sys_hw_memory FROM sys_hw_memory LEFT JOIN system ON system.system_id = sys_hw_memory.system_id WHERE sys_hw_memory.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_memory ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_serial serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_bank bank varchar(100) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_type type varchar(100) NOT NULL DEFAULT '' AFTER bank";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_form_factor form_factor varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_detail detail varchar(100) NOT NULL DEFAULT '' AFTER form_factor";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_capacity size int unsigned NOT NULL DEFAULT '0' AFTER detail";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_speed speed int unsigned NOT NULL DEFAULT '0' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_memory CHANGE memory_tag tag varchar(100) NOT NULL DEFAULT '' AFTER speed";
            $sql[] = "RENAME TABLE sys_hw_memory TO `memory`";

            # module
            $sql[] = "DELETE sys_hw_module FROM sys_hw_module LEFT JOIN system ON system.system_id = sys_hw_module.system_id WHERE sys_hw_module.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_module ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE class_text class_text varchar(20) NOT NULL DEFAULT '' AFTER class";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE hardware_revision hardware_revision varchar(100) NOT NULL DEFAULT '' AFTER class_text";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE serial_number serial varchar(100) NOT NULL DEFAULT '' AFTER software_revision";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE object_id object_ident varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE sys_hw_module CHANGE asset_id asset_ident varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "RENAME TABLE sys_hw_module TO `module`";

            # monitor
            $sql[] = "DELETE sys_hw_monitor FROM sys_hw_monitor LEFT JOIN system ON system.system_id = sys_hw_monitor.system_id WHERE sys_hw_monitor.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE monitor_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_monitor ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE serial serial varchar(50) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE man_description description varchar(200) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE device_id device varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE manufacture_date manufacture_date varchar(20) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_monitor CHANGE size size tinyint unsigned NOT NULL DEFAULT '0' AFTER manufacture_date";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_serial";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_value";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_purchase_order_number";
            $sql[] = "ALTER TABLE sys_hw_monitor DROP man_date_purchased";
            $sql[] = "RENAME TABLE sys_hw_monitor TO `monitor`";

            # motherboard
            $sql[] = "DELETE sys_hw_motherboard FROM sys_hw_motherboard LEFT JOIN system ON system.system_id = sys_hw_motherboard.system_id WHERE sys_hw_motherboard.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE motherboard_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_motherboard ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE manufacturer manufacturer varchar(50) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE model model varchar(50) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE serial serial varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE memory_slots memory_slot_count tinyint unsigned NOT NULL DEFAULT '0' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_motherboard CHANGE processor_slots processor_slot_count tinyint unsigned NOT NULL DEFAULT '0' AFTER memory_slot_count";
            $sql[] = "RENAME TABLE sys_hw_motherboard TO `motherboard`";

            # optical drive
            $sql[] = "DELETE sys_hw_optical_drive FROM sys_hw_optical_drive LEFT JOIN system ON system.system_id = sys_hw_optical_drive.system_id WHERE sys_hw_optical_drive.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_model model varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_caption description varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_device_id device varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_optical_drive CHANGE optical_drive_mount_point mount_point varchar(10) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "RENAME TABLE sys_hw_optical_drive TO `optical`";

            # netstat
            $sql[] = "DELETE sys_sw_netstat FROM sys_sw_netstat LEFT JOIN system ON system.system_id = sys_sw_netstat.system_id WHERE sys_sw_netstat.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_netstat ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_netstat CHANGE ip_address ip varchar(45) NOT NULL DEFAULT '' AFTER protocol";
            $sql[] = "RENAME TABLE sys_sw_netstat TO `netstat`";

            # network card
            $sql[] = "DELETE sys_hw_network_card FROM sys_hw_network_card LEFT JOIN system ON system.system_id = sys_hw_network_card.system_id WHERE sys_hw_network_card.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_network_card ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_mac_address mac varchar(200) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER mac";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_model model varchar(255) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_description description varchar(255) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_alias alias varchar(255) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_ip_enabled ip_enabled varchar(10) NOT NULL DEFAULT '' AFTER alias";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_index net_index varchar(10) NOT NULL DEFAULT '' AFTER ip_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_enabled dhcp_enabled varchar(100) NOT NULL DEFAULT '' AFTER net_index";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_server dhcp_server varchar(30) NOT NULL DEFAULT '' AFTER dhcp_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_lease_obtained dhcp_lease_obtained varchar(14) NOT NULL DEFAULT '' AFTER dhcp_server";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dhcp_lease_expires dhcp_lease_expires varchar(14) NOT NULL DEFAULT '' AFTER dhcp_lease_obtained";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_host_name dns_host_name varchar(100) NOT NULL DEFAULT '' AFTER dhcp_lease_expires";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_server dns_server varchar(100) NOT NULL DEFAULT '' AFTER dns_host_name";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_domain dns_domain varchar(100) NOT NULL DEFAULT '' AFTER dns_server";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_dns_domain_reg_enabled dns_domain_reg_enabled varchar(10) NOT NULL DEFAULT '' AFTER dns_domain";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_adapter_type type varchar(100) NOT NULL DEFAULT '' AFTER dns_domain_reg_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_connection_id connection varchar(255) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_connection_status connection_status varchar(30) NOT NULL DEFAULT '' AFTER connection";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_speed speed int(10) unsigned NOT NULL DEFAULT '0' AFTER connection_status";
            $sql[] = "ALTER TABLE sys_hw_network_card CHANGE net_slaves slaves varchar(100) NOT NULL DEFAULT '' AFTER speed";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_dns_domain_suffix";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_primary";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_secondary";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP net_wins_lmhosts_enabled";
            $sql[] = "ALTER TABLE sys_hw_network_card DROP KEY net_mac_address";
            $sql[] = "ALTER TABLE sys_hw_network_card ADD KEY mac (`mac`)";
            $sql[] = "RENAME TABLE sys_hw_network_card TO `network`";

            # partition
            $sql[] = "DELETE sys_hw_partition FROM sys_hw_partition LEFT JOIN system ON system.system_id = sys_hw_partition.system_id WHERE sys_hw_partition.timestamp <> system.timestamp";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'volume'                                         WHERE partition_type = 'Volume'";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'local'                                          WHERE partition_type = 'Local Disk'";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'local removable'                                WHERE partition_type = 'Removable Disk'";
            $sql[] = "UPDATE sys_hw_partition SET partition_type = 'local'                                          WHERE partition_type = 'local hard disk'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'partition', partition_type = 'local'      WHERE partition_type = 'partition'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'mount point', partition_type = 'smb'      WHERE partition_type = 'Network Drive'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'mount point'                              WHERE partition_type LIKE 'raid%'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'mount point'                              WHERE partition_mount_type = 'lvm'";
            $sql[] = "UPDATE sys_hw_partition SET partition_mount_type = 'other' WHERE (partition_mount_type != 'partition' AND partition_mount_type != 'mount point')";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_partition ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_serial serial varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_name name varchar(100) NOT NULL DEFAULT '' AFTER serial";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_caption description varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_device_id device varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE hard_drive_index hard_drive_index varchar(100) NOT NULL DEFAULT '' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_disk_index partition_disk_index varchar(50) NOT NULL DEFAULT '' AFTER hard_drive_index";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_mount_type mount_type enum('mount point', 'partition', 'other') NOT NULL DEFAULT 'partition' AFTER partition_disk_index";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_mount_point mount_point varchar(100) NOT NULL DEFAULT '' AFTER mount_type";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_size size int unsigned NOT NULL DEFAULT '1' AFTER mount_point";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_free_space free int unsigned NOT NULL DEFAULT '1' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_used_space used int unsigned NOT NULL DEFAULT '1' AFTER free";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_format format varchar(20) NOT NULL DEFAULT '' AFTER used";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_bootable bootable varchar(10) NOT NULL DEFAULT '' AFTER format";
            $sql[] = "ALTER TABLE sys_hw_partition CHANGE partition_type type varchar(50) NOT NULL DEFAULT '' AFTER bootable";
            $sql[] = "ALTER TABLE sys_hw_partition DROP partition_quotas_supported";
            $sql[] = "ALTER TABLE sys_hw_partition DROP partition_quotas_enabled";
            $sql[] = "RENAME TABLE sys_hw_partition TO `partition`";

            # processor
            $sql[] = "DELETE sys_hw_processor FROM sys_hw_processor LEFT JOIN system ON system.system_id = sys_hw_processor.system_id WHERE sys_hw_processor.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_processor ADD current enum('y', 'n') NOT NULL default 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE first_timestamp first_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE timestamp last_seen datetime NOT NULL default '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_count physical_count tinyint unsigned NOT NULL default '1' AFTER last_seen";
            $sql[] = "UPDATE sys_hw_processor SET physical_count = 1 WHERE physical_count = 0 OR physical_count = ''";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_cores core_count tinyint unsigned NOT NULL default '1' AFTER physical_count";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_logical logical_count tinyint unsigned NOT NULL default '1' AFTER core_count";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_description description varchar(100) NOT NULL default '' AFTER logical_count";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_speed speed int unsigned NOT NULL default '0' AFTER description";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_manufacturer manufacturer varchar(100) NOT NULL default '' AFTER speed";
            $sql[] = "ALTER TABLE sys_hw_processor CHANGE processor_architecture architecture varchar(100) NOT NULL default '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_processor ADD socket varchar(100) NOT NULL default '' AFTER architecture";
            $sql[] = "ALTER TABLE sys_hw_processor DROP COLUMN processor_power_management_supported";
            $sql[] = "RENAME TABLE sys_hw_processor TO `processor`";
            $sql[] = "UPDATE processor SET manufacturer = 'Intel' WHERE manufacturer = 'GenuineIntel'";
            $sql[] = "UPDATE processor SET manufacturer = 'AMD' WHERE manufacturer = 'AuthenticAMD'";

            # san (new table)
            $sql[] = "DROP TABLE IF EXISTS `san`";
            $sql[] = "CREATE TABLE `san` (
                id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT NULL,
                current enum('y','n') NOT NULL DEFAULT 'y',
                first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                type varchar(100) NOT NULL DEFAULT '',
                manufacturer varchar(100) NOT NULL DEFAULT '',
                `serial` varchar(50) NOT NULL DEFAULT '',
                part_number varchar(100) NOT NULL DEFAULT '',
                location varchar(100) NOT NULL DEFAULT '',
                attached_to varchar(100) NOT NULL DEFAULT '',
                status varchar(100) NOT NULL DEFAULT '',
                date_of_manufacture varchar(100) NOT NULL DEFAULT '',
                notes text NOT NULL DEFAULT '',
                PRIMARY KEY (`id`), KEY `system_id` (`system_id`),
                CONSTRAINT `san_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE)
                ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # scsi controller
            $sql[] = "DELETE sys_hw_scsi_controller FROM sys_hw_scsi_controller LEFT JOIN system ON system.system_id = sys_hw_scsi_controller.system_id WHERE sys_hw_scsi_controller.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_name model varchar(200) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller ADD `serial` varchar(200) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_device_id device varchar(200) NOT NULL DEFAULT '' AFTER `serial`";
            $sql[] = "ALTER TABLE sys_hw_scsi_controller CHANGE scsi_controller_type type enum('raid','hba','other','san controller','san shelf') NOT NULL DEFAULT 'other' AFTER device";
            $sql[] = "RENAME TABLE sys_hw_scsi_controller TO `scsi`";

            # group
            $sql[] = "DELETE sys_sw_group FROM sys_sw_group LEFT JOIN system ON system.system_id = sys_sw_group.system_id WHERE sys_sw_group.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_group ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_description description varchar(200) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_sid sid varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_group CHANGE group_members members text NOT NULL AFTER sid";
            $sql[] = "RENAME TABLE sys_sw_group TO `user_group`";

            # pagefile
            $sql[] = "DELETE sys_sw_pagefile FROM sys_sw_pagefile LEFT JOIN system ON system.system_id = sys_sw_pagefile.system_id WHERE sys_sw_pagefile.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_pagefile ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_size size int unsigned NOT NULL DEFAULT '0' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_initial_size initial_size int unsigned NOT NULL DEFAULT '0' AFTER size";
            $sql[] = "ALTER TABLE sys_sw_pagefile CHANGE pagefile_max_size max_size int unsigned NOT NULL DEFAULT '0' AFTER initial_size";
            $sql[] = "RENAME TABLE sys_sw_pagefile TO `pagefile`";

            # print queue
            $sql[] = "DELETE sys_sw_print_queue FROM sys_sw_print_queue LEFT JOIN system ON system.system_id = sys_sw_print_queue.system_id WHERE sys_sw_print_queue.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_print_queue ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_model model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_description description varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_system_key system_key varchar(100) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_name name varchar(100) NOT NULL DEFAULT '' AFTER system_key";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_port_name port_name varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_ip_address ip varchar(45) NOT NULL DEFAULT '' AFTER port_name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_shared shared varchar(100) NOT NULL DEFAULT '' AFTER ip";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_shared_name shared_name varchar(100) NOT NULL DEFAULT '' AFTER shared";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_location location varchar(100) NOT NULL DEFAULT '' AFTER shared_name";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_color color varchar(100) NOT NULL DEFAULT '' AFTER location";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_duplex duplex varchar(100) NOT NULL DEFAULT '' AFTER color";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_type type enum('virtual','physical','') NOT NULL DEFAULT '' AFTER duplex";
            $sql[] = "ALTER TABLE sys_sw_print_queue CHANGE queue_connection_status connection_status varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "RENAME TABLE sys_sw_print_queue TO `print_queue`";

            # route
            $sql[] = "DELETE sys_sw_route FROM sys_sw_route LEFT JOIN system ON system.system_id = sys_sw_route.system_id WHERE sys_sw_route.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE route_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_route ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_route CHANGE next_hop next_hop varchar(40) NOT NULL DEFAULT ''";
            $sql[] = "RENAME TABLE sys_sw_route TO `route`";

            # service
            $sql[] = "DELETE sys_sw_service FROM sys_sw_service LEFT JOIN system ON system.system_id = sys_sw_service.system_id WHERE sys_sw_service.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `timestamp`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `first_timestamp`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `service_name`";
            $sql[] = "ALTER TABLE sys_sw_service DROP KEY `service_display_name`";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_service ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_service DROP user_id";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_display_name description varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_path_name executable text NOT NULL AFTER description";
            $sql[] = "ALTER TABLE sys_sw_service DROP service_started";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_start_name user varchar(100) NOT NULL DEFAULT '' AFTER executable";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_start_mode start_mode varchar(200) NOT NULL DEFAULT '' AFTER user";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_state state varchar(200) NOT NULL DEFAULT '' AFTER start_mode";
            $sql[] = "ALTER TABLE sys_sw_service CHANGE service_count count varchar(5) NOT NULL DEFAULT '' AFTER state";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `first_seen` (`first_seen`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `last_seen` (`last_seen`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `name` (`name`)";
            $sql[] = "ALTER TABLE sys_sw_service ADD KEY `description` (`description`)";
            $sql[] = "RENAME TABLE sys_sw_service TO `service`";

            # share
            $sql[] = "DELETE sys_sw_share FROM sys_sw_share LEFT JOIN system ON system.system_id = sys_sw_share.system_id WHERE sys_sw_share.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_share ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_caption description varchar(250) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_name name varchar(250) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_path `path` varchar(250) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_size size int unsigned NOT NULL DEFAULT '0' AFTER `path`";
            $sql[] = "ALTER TABLE sys_sw_share CHANGE share_users users varchar(200) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "RENAME TABLE sys_sw_share TO `share`";

            # software
            $sql[] = "DELETE sys_sw_software FROM sys_sw_software LEFT JOIN system ON system.system_id = sys_sw_software.system_id WHERE sys_sw_software.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_software ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE `timestamp` last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_name name varchar(255) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_version version varchar(255) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_description description text NOT NULL AFTER version";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_location location varchar(255) NOT NULL DEFAULT '' AFTER description";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_uninstall uninstall mediumtext NOT NULL AFTER location";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_install_date install_date varchar(100) NOT NULL DEFAULT '' AFTER uninstall";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_installed_by installed_by varchar(100) NOT NULL DEFAULT '' AFTER install_date";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_installed_on installed_on datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER installed_by";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_publisher publisher varchar(255) NOT NULL DEFAULT '' AFTER installed_on";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_install_source install_source varchar(200) NOT NULL DEFAULT '' AFTER publisher";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_system_component system_component varchar(2) NOT NULL DEFAULT '' AFTER install_source";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_url url varchar(255) NOT NULL DEFAULT '' AFTER system_component";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_email email varchar(255) NOT NULL DEFAULT '' AFTER url";
            $sql[] = "ALTER TABLE sys_sw_software CHANGE software_comment type varchar(200) NOT NULL DEFAULT '' AFTER email";
            $sql[] = "ALTER TABLE sys_sw_software ADD version_padded text NOT NULL AFTER type";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_key";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_key_release";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_key_edition";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_man_comment";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_count";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_code_base";
            $sql[] = "ALTER TABLE sys_sw_software DROP software_status";
            $sql[] = "ALTER TABLE sys_sw_software DROP KEY `timestamp`";
            $sql[] = "ALTER TABLE sys_sw_software DROP KEY `first_timestamp`";
            $sql[] = "ALTER TABLE sys_sw_software DROP KEY `software_name`";
            $sql[] = "ALTER TABLE sys_sw_software ADD KEY `first_seen` (`first_seen`)";
            $sql[] = "ALTER TABLE sys_sw_software ADD KEY `last_seen` (`last_seen`)";
            $sql[] = "ALTER TABLE sys_sw_software ADD KEY `name` (`name`)";
            $sql[] = "RENAME TABLE sys_sw_software TO `software`";

            # software key
            $sql[] = "DELETE sys_sw_software_key FROM sys_sw_software_key LEFT JOIN system ON system.system_id = sys_sw_software_key.system_id WHERE sys_sw_software_key.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_software_key ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_name name varchar(250) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_text string varchar(100) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_release rel varchar(100) NOT NULL DEFAULT '' AFTER string";
            $sql[] = "ALTER TABLE sys_sw_software_key CHANGE key_edition edition varchar(100) NOT NULL DEFAULT '' AFTER rel";
            $sql[] = "RENAME TABLE sys_sw_software_key TO `software_key`";

            # sound
            $sql[] = "DELETE sys_hw_sound FROM sys_hw_sound LEFT JOIN system ON system.system_id = sys_hw_sound.system_id WHERE sys_hw_sound.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_sound ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_name model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_sound CHANGE sound_device_id device varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "RENAME TABLE sys_hw_sound TO `sound`";

            # user
            $sql[] = "DELETE sys_sw_user FROM sys_sw_user LEFT JOIN system ON system.system_id = sys_sw_user.system_id WHERE sys_sw_user.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_user ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_caption caption varchar(255) NOT NULL DEFAULT '' AFTER name";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_sid sid varchar(100) NOT NULL DEFAULT '' AFTER caption";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_domain domain varchar(100) NOT NULL DEFAULT '' AFTER sid";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_disabled disabled varchar(20) NOT NULL DEFAULT '' AFTER domain";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_full_name full_name varchar(100) NOT NULL DEFAULT '' AFTER disabled";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_password_changeable password_changeable varchar(20) NOT NULL DEFAULT '' AFTER full_name";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_password_expires password_expires varchar(20) NOT NULL DEFAULT '' AFTER password_changeable";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_password_required password_required varchar(20) NOT NULL DEFAULT '' AFTER password_expires";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_status status varchar(100) NOT NULL DEFAULT '' AFTER password_required";
            $sql[] = "ALTER TABLE sys_sw_user CHANGE user_type type enum('local','domain','database','application','other') NOT NULL DEFAULT 'local' AFTER status";
            $sql[] = "RENAME TABLE sys_sw_user TO `user`";

            # variable
            $sql[] = "DELETE sys_sw_variable FROM sys_sw_variable LEFT JOIN system ON system.system_id = sys_sw_variable.system_id WHERE sys_sw_variable.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_variable ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_name name varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_variable CHANGE variable_value value text NOT NULL AFTER name";
            $sql[] = "RENAME TABLE sys_sw_variable TO `variable`";

            # video
            $sql[] = "DELETE sys_hw_video FROM sys_hw_video LEFT JOIN system ON system.system_id = sys_hw_video.system_id WHERE sys_hw_video.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_video ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_manufacturer manufacturer varchar(100) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_description model varchar(100) NOT NULL DEFAULT '' AFTER manufacturer";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_device_id device varchar(100) NOT NULL DEFAULT '' AFTER model";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_memory size int unsigned NOT NULL DEFAULT '0' AFTER device";
            $sql[] = "ALTER TABLE sys_hw_video CHANGE video_caption caption varchar(100) NOT NULL DEFAULT '' AFTER size";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_horizontal_res";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_vertical_res";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_number_colours";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_current_refresh_rate";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_driver_date";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_driver_version";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_max_refresh_rate";
            $sql[] = "ALTER TABLE sys_hw_video DROP video_min_refresh_rate";
            $sql[] = "RENAME TABLE sys_hw_video TO `video`";

            # vm
            $sql[] = "DELETE sys_sw_virtual_machine FROM sys_sw_virtual_machine LEFT JOIN system ON system.system_id = sys_sw_virtual_machine.system_id WHERE sys_sw_virtual_machine.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE memory memory_count int(12) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE cpu cpu_count int(10) unsigned NOT NULL DEFAULT '0'";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine CHANGE vm_id vm_id int(12) unsigned DEFAULT NULL";
            $sql[] = "ALTER TABLE sys_sw_virtual_machine ADD icon varchar(50) NOT NULL DEFAULT ''";
            $sql[] = "RENAME TABLE sys_sw_virtual_machine TO `vm`";

            # warranty
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_hw_warranty ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_provider provider varchar(200) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_type type varchar(100) NOT NULL DEFAULT '' AFTER provider";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_start start datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER type";
            $sql[] = "ALTER TABLE sys_hw_warranty CHANGE warranty_end end datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER start";
            $sql[] = "RENAME TABLE sys_hw_warranty TO `warranty`";

            # windows
            $sql[] = "DELETE sys_sw_windows FROM sys_sw_windows LEFT JOIN system ON system.system_id = sys_sw_windows.system_id WHERE sys_sw_windows.timestamp <> system.timestamp";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE sys_sw_windows ADD current enum('y','n') NOT NULL DEFAULT 'y' AFTER system_id";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE first_timestamp first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER current";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE timestamp last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER first_seen";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_build_number build_number varchar(20) NOT NULL DEFAULT '' AFTER last_seen";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_user_name user_name varchar(100) NOT NULL DEFAULT '' AFTER build_number";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_client_site_name client_site_name varchar(100) NOT NULL DEFAULT '' AFTER user_name";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_short domain_short varchar(100) NOT NULL DEFAULT '' AFTER client_site_name";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_controller_address domain_controller_address varchar(100) NOT NULL DEFAULT '' AFTER domain_short";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_controller_name domain_controller_name varchar(100) NOT NULL DEFAULT '' AFTER domain_controller_address";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_domain_role domain_role varchar(40) NOT NULL DEFAULT '' AFTER domain_controller_name";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_part_of_domain part_of_domain varchar(10) NOT NULL DEFAULT '' AFTER domain_role";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_id_number id_number varchar(100) NOT NULL DEFAULT '' AFTER part_of_domain";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_time_caption time_caption varchar(100) NOT NULL DEFAULT '' AFTER id_number";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_time_daylight time_daylight varchar(100) NOT NULL DEFAULT '' AFTER time_caption";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_boot_device boot_device varchar(100) NOT NULL DEFAULT '' AFTER time_daylight";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_country_code country_code varchar(50) NOT NULL DEFAULT '' AFTER boot_device";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_organisation organisation varchar(80) NOT NULL DEFAULT '' AFTER country_code";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_language language varchar(50) NOT NULL DEFAULT '' AFTER organisation";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_registered_user registered_user varchar(100) NOT NULL DEFAULT '' AFTER language";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_service_pack service_pack varchar(20) NOT NULL DEFAULT '' AFTER registered_user";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_version version varchar(20) NOT NULL DEFAULT '' AFTER service_pack";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_install_directory install_directory varchar(20) NOT NULL DEFAULT '' AFTER version";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_active_directory_ou active_directory_ou varchar(200) NOT NULL DEFAULT '' AFTER install_directory";
            $sql[] = "ALTER TABLE sys_sw_windows CHANGE windows_workgroup workgroup varchar(255) NOT NULL DEFAULT '' AFTER active_directory_ou";
            $sql[] = "RENAME TABLE sys_sw_windows TO `windows`";

            # oa_alert_log -> change_log (list of detected changes)
            $sql[] = "DROP TABLE IF EXISTS change_log";
            $sql[] = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_user_id";
            $sql[] = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_log_system_id";
            $sql[] = "ALTER TABLE oa_alert_log DROP FOREIGN KEY oa_alert_oa_change";
            $sql[] = "ALTER TABLE oa_alert_log DROP KEY oa_alert_log_user_id";
            $sql[] = "ALTER TABLE oa_alert_log DROP KEY oa_alert_change_id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE system_id system_id int(10) unsigned DEFAULT NULL AFTER id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_table db_table varchar(50) NOT NULL DEFAULT '' AFTER system_id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_foreign_row db_row int(10) unsigned NOT NULL DEFAULT '0' AFTER db_table";
            $sql[] = "ALTER TABLE oa_alert_log ADD db_action enum('','create','update','delete') NOT NULL DEFAULT '' AFTER db_row";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_details details varchar(200) NOT NULL DEFAULT '' AFTER db_action";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_ack_time ack_time datetime NOT NULL DEFAULT '0000-00-00 00:00:00' AFTER user_id";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE alert_note note varchar(200) NOT NULL DEFAULT '' AFTER ack_time";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE external_change_id external_ident varchar(200) NOT NULL DEFAULT '' AFTER ack_time";
            $sql[] = "ALTER TABLE oa_alert_log CHANGE external_change_link external_link varchar(200) NOT NULL DEFAULT '' AFTER ack_time";
            $sql[] = "ALTER TABLE oa_alert_log ADD CONSTRAINT change_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE";
            $sql[] = "RENAME TABLE oa_alert_log TO `change_log`";

            # sys_man_audits -> audit_log (list of audits)
            $sql[] = "DROP TABLE IF EXISTS audit_log";
            $sql[] = "CREATE TABLE audit_log ( 
                id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT '0',
                username varchar(45) NOT NULL DEFAULT '',
                type varchar(45) NOT NULL DEFAULT '',
                ip varchar(45) NOT NULL DEFAULT '',
                debug text NOT NULL DEFAULT '',
                wmi_fails text NOT NULL DEFAULT '',
                timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                PRIMARY KEY (id),
                KEY system_id (system_id),
                CONSTRAINT audit_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO audit_log SELECT NULL, system_id, system_audits_username, system_audits_type, system_audits_ip, audit_debug, audit_wmi_fails, `timestamp` FROM sys_man_audits";
            $sql[] = "DROP TABLE IF EXISTS sys_man_audits";

            # oa_audit_log -> edit_log (list of edits by who [user||audit||snmp||etc])
            $sql[] = "DROP TABLE IF EXISTS edit_log";
            $sql[] = "CREATE TABLE edit_log (
                id int(10) NOT NULL AUTO_INCREMENT,
                user_id int(10) unsigned DEFAULT NULL,
                system_id int(10) unsigned DEFAULT NULL,
                details varchar(200) NOT NULL DEFAULT '',
                source varchar(100) NOT NULL DEFAULT '',
                weight int(10) unsigned NOT NULL DEFAULT '0',
                db_table varchar(100) NOT NULL DEFAULT '',
                db_column varchar(100) NOT NULL DEFAULT '',
                timestamp datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                value text NOT NULL DEFAULT '',
                previous_value text NOT NULL DEFAULT '',
                PRIMARY KEY (id),
                KEY user_id (user_id),
                KEY edit_log_system_id (system_id),
                CONSTRAINT edit_log_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE,
                CONSTRAINT edit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (user_id)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited the ', SUBSTRING(`audit_log_event_details`, 5, LOCATE(' ', `audit_log_event_details`) - 5), ' attribute.') as details, 'user' as source, '1000' as weight, 'system' as db_table, SUBSTRING(`audit_log_event_details`, 5, LOCATE(' ', `audit_log_event_details`) - 5) as db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as previous_value FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE audit_log_event_details LIKE 'man_%'";
            $sql[] = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited the name attribute.') as details, 'user' as source, '1000' as weight, 'system' as db_table, 'name' as db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as previous_value FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE audit_log_event_details LIKE 'hostname - %'";
            $sql[] = "INSERT INTO edit_log SELECT NULL as id, oa_audit_log.user_id, system_id, CONCAT(oa_user.user_full_name, ' edited a custom attribute.') as details, 'user' as source, '1000' as weight, 'sys_additional_fields_data' as db_table, '' db_column, timestamp, SUBSTRING(`audit_log_event_details` FROM LOCATE(' - ', `audit_log_event_details`)+3) as value, '' as previous_value FROM oa_audit_log LEFT JOIN oa_user on oa_audit_log.user_id = oa_user.user_id WHERE audit_log_event_details LIKE 'sys_man_additional_fields_data%'";
            $sql[] = "DROP TABLE IF EXISTS oa_audit_log";

            # tasks (scheduled tasks / cron)
            $sql[] = "DROP TABLE IF EXISTS sys_sw_scheduled_task";
            $sql[] = "CREATE TABLE `task` (
                  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `system_id` int(10) unsigned DEFAULT NULL,
                  `current` enum('y','n') NOT NULL DEFAULT 'y',
                  `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                  `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                  `name` varchar(100) NOT NULL DEFAULT '',
                  `next_run` varchar(50) NOT NULL DEFAULT '',
                  `status` varchar(50) NOT NULL DEFAULT '',
                  `last_run` varchar(50) NOT NULL DEFAULT '',
                  `last_result` varchar(50) NOT NULL DEFAULT '',
                  `creator` varchar(50) NOT NULL DEFAULT '',
                  `schedule` varchar(100) NOT NULL DEFAULT '',
                  `task` varchar(100) NOT NULL DEFAULT '',
                  `state` varchar(10) NOT NULL DEFAULT '',
                  `runas` varchar(50) NOT NULL DEFAULT '',
                  PRIMARY KEY (`id`),
                  KEY `system_id` (`system_id`),
                  CONSTRAINT `task_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            # server - new table
            $sql[] = "DROP TABLE IF EXISTS server";
            $sql[] = "CREATE TABLE server ( id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT NULL,
                current enum('y','n') NOT NULL DEFAULT 'y',
                first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                type varchar(100) NOT NULL DEFAULT '',
                name varchar(100) NOT NULL DEFAULT '',
                full_name varchar(100) NOT NULL DEFAULT '',
                description varchar(100) NOT NULL DEFAULT '',
                version varchar(100) NOT NULL DEFAULT '',
                version_string varchar(100) NOT NULL DEFAULT '',
                edition varchar(100) NOT NULL DEFAULT '',
                status varchar(100) NOT NULL DEFAULT '',
                ip varchar(45) NOT NULL DEFAULT '',
                port smallint unsigned NOT NULL DEFAULT '0',
                PRIMARY KEY (id), KEY system_id (system_id),
                CONSTRAINT server_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE )
                ENGINE=InnoDB DEFAULT CHARSET=utf8";

            # server item - new table
            $sql[] = "DROP TABLE IF EXISTS server_item";
            $sql[] = "CREATE TABLE server_item (
                id int(10) unsigned NOT NULL AUTO_INCREMENT,
                system_id int(10) unsigned DEFAULT NULL,
                current enum('y','n') NOT NULL DEFAULT 'y',
                first_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                last_seen datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
                server_id int(10) unsigned DEFAULT NULL,
                type varchar(100) NOT NULL DEFAULT '',
                parent_name varchar(100) NOT NULL DEFAULT '',
                name varchar(100) NOT NULL DEFAULT '',
                description varchar(100) NOT NULL DEFAULT '',
                id_internal varchar(100) NOT NULL DEFAULT '',
                ip varchar(45) NOT NULL DEFAULT '',
                hostname varchar(100) NOT NULL DEFAULT '',
                port smallint unsigned NOT NULL DEFAULT '0',
                status varchar(100) NOT NULL DEFAULT '',
                parent_id int(11) unsigned DEFAULT NULL,
                instance varchar(100) NOT NULL DEFAULT '',
                `path` varchar(250) NOT NULL DEFAULT '',
                size int unsigned NOT NULL DEFAULT '0',
                log_status varchar(100) NOT NULL DEFAULT '',
                log_format varchar(100) NOT NULL DEFAULT '',
                log_path varchar(100) NOT NULL DEFAULT '',
                log_rotation varchar(100) NOT NULL DEFAULT '',
                PRIMARY KEY (id), KEY system_id (system_id),
                CONSTRAINT server_item_system_id FOREIGN KEY (system_id) REFERENCES system (system_id) ON DELETE CASCADE)
                ENGINE=InnoDB DEFAULT CHARSET=utf8";


            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 RTM'            WHERE db_version LIKE '11.0.2100%' OR db_version LIKE '11.00.2100%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 1' WHERE db_version LIKE '11.0.3000%' OR db_version LIKE '11.00.3000%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2012 Service Pack 2' WHERE db_version LIKE '11.0.5058%' OR db_version LIKE '11.00.5058%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 1 (CTP1)' WHERE db_version LIKE '11.0.9120%' OR db_version LIKE '11.00.9120%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 Community Technology Preview 2 (CTP2)' WHERE db_version LIKE '12.0.1524%' OR db_version LIKE '12.00.1524%'";
            $sql[] = "UPDATE sys_sw_database SET db_version_string = 'SQL Server 2014 RTM'                                   WHERE db_version LIKE '12.0.2000%' OR db_version LIKE '12.00.2000%'";

            $sql[] = "DELETE sys_sw_database FROM sys_sw_database LEFT JOIN system ON system.system_id = sys_sw_database.system_id WHERE sys_sw_database.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server SELECT db_id, sys_sw_database.system_id, 'y', sys_sw_database.first_timestamp, sys_sw_database.timestamp, 'database', db_type, db_version_string, '', db_version, '', db_edition, '', '', db_port FROM sys_sw_database LEFT JOIN system ON sys_sw_database.system_id = system.system_id AND sys_sw_database.timestamp = system.last_seen";
            $sql[] = "DELETE sys_sw_database_details FROM sys_sw_database_details LEFT JOIN system ON system.system_id = sys_sw_database_details.system_id WHERE sys_sw_database_details.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server_item SELECT NULL, sys_sw_database.system_id, 'y', sys_sw_database_details.first_timestamp, sys_sw_database_details.timestamp, sys_sw_database_details.db_id, 'database', sys_sw_database.db_type, sys_sw_database_details.details_name, '', sys_sw_database_details.details_internal_id, '', '', '', '', '', sys_sw_database_details.details_instance, sys_sw_database_details.details_filename, sys_sw_database_details.details_current_size, '', '', '', '' FROM sys_sw_database_details LEFT JOIN sys_sw_database ON sys_sw_database_details.db_id = sys_sw_database.db_id AND sys_sw_database_details.timestamp = sys_sw_database.timestamp";

            $sql[] = "DELETE sys_sw_web_server FROM sys_sw_web_server LEFT JOIN system ON system.system_id = sys_sw_web_server.system_id WHERE sys_sw_web_server.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server SELECT NULL, sys_sw_web_server.system_id, 'y', sys_sw_web_server.first_timestamp, sys_sw_web_server.timestamp, 'web', 'IIS', '', '', sys_sw_web_server.webserver_version, '', '', sys_sw_web_server.webserver_state, '', '' FROM sys_sw_web_server";
            $sql[] = "DELETE sys_sw_web_site FROM sys_sw_web_site LEFT JOIN system ON system.system_id = sys_sw_web_site.system_id WHERE sys_sw_web_site.timestamp <> system.timestamp";
            $sql[] = "INSERT INTO server_item SELECT NULL as id, sys_sw_web_site.system_id, 'y' as current, sys_sw_web_site.first_timestamp as first_seen, sys_sw_web_site.timestamp as last_seen, '' as server_id, 'website' as type, 'IIS' as parent_name, sys_sw_web_site.site_description as name, sys_sw_web_site.site_description as description, sys_sw_web_site.site_internal_id as id_internal, '' as ip, '' as hostname, '' as port, sys_sw_web_site.site_state as status, '' as parent_id, sys_sw_web_site.site_app_pool as instance, sys_sw_web_site.site_path as path, sys_sw_web_site.site_size as size, '' as log_status, sys_sw_web_site.site_log_format as log_format, sys_sw_web_site.site_log_directory as log_path, sys_sw_web_site.site_log_rotation as log_rotation FROM sys_sw_web_site";

            $sql[] = "DROP TABLE IF EXISTS sys_sw_database_details";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_database";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_server_ext";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site_header";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site_virtual";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_site";
            $sql[] = "DROP TABLE IF EXISTS sys_sw_web_server";

            $sql[] = "UPDATE system SET description = '', man_description = '' WHERE man_description LIKE 'general purpose|%' AND description = man_description";
            $sql[] = "UPDATE system SET description = '', man_description = '' WHERE man_description LIKE '%\%)' AND description = man_description";
            $sql[] = "UPDATE system SET description = '', man_description = '' WHERE man_description LIKE '%|%|%' AND description = man_description";

            $sql[] = "UPDATE oa_config SET config_value = '20160104' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.10' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $query = $this->db->query($this_query);
            }


            $this->load->model('m_oa_report');
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Changes'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Acknowledged');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Hardware'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Hardware');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Netstat Ports'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Netstat Ports');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - New Systems'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - New Devices');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Software'";
            if ($this->db->affected_rows() > 0) {
                $this->m_oa_report->activate_file('Changes - Software');
            }
            $sql = "DELETE oa_report FROM oa_report WHERE report_name = 'Alerts - Software Updates'";

            $log_details->message = 'Upgrade database to 1.10 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160126') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.10.1

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.10.1 commenced';
            stdlog($log_details);

            $sql = array();
            $sql[] = "ALTER TABLE variable ADD program varchar(100) NOT NULL default '' AFTER last_seen";
            $sql[] = "UPDATE variable SET program = 'environment'";

            $sql[] = "UPDATE oa_config SET config_value = '20160126' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.10.1' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $query = $this->db->query($this_query);
            }

            $log_details->message = 'Upgrade database to 1.10.1 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160130') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12 commenced';
            stdlog($log_details);

            $sql = array();
            $sql[] = "ALTER TABLE system ADD comments text NOT NULL AFTER description";

            $sql[] = "UPDATE oa_config SET config_value = '20160130' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $query = $this->db->query($this_query);
            }

            $log_details->message = 'Upgrade database to 1.12 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160303') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.2

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.2 commenced';
            stdlog($log_details);

            $sql = array();

            $sql[] = "UPDATE system SET man_class = 'virtual server' WHERE (manufacturer LIKE '%vmware%' OR manufacturer LIKE '%Parallels%') AND os_family IN ('Windows 2008', 'Windows 2012', 'Windows 2003')";
            $sql[] = "UPDATE system SET man_class = 'hypervisor' WHERE os_family LIKE 'VMware ESX%'";
            $sql[] = "UPDATE system SET man_class = 'virtual desktop' WHERE manufacturer LIKE '%vmware%' AND os_family IN ('Windows XP', 'Windows 7', 'Windows 8', 'Windows 10')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_mac_match'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_mac_match','n','y','0000-00-00 00:00:00',0,'Should we match a device based only on its mac address during discovery.')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_linux_script_directory'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_linux_script_directory','/tmp/','y','0000-00-00 00:00:00',0,'The directory the script is copied into on the target device.')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_linux_script_permissions'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_linux_script_permissions','700','y','0000-00-00 00:00:00',0,'The permissions set on the audit_linux.sh script when it is copied to the target device.')";

            $sql[] = "DELETE FROM `oa_config` WHERE config_name = 'discovery_nmap_os'";
            $sql[] = "INSERT INTO `oa_config` VALUES ('discovery_nmap_os','n','y','0000-00-00 00:00:00',0,'When discovery runs Nmap, should we use the -O flag to capture OS information (will slow down scan and requires SUID on the Nmap binary under Linux).')";

            $sql[] = "ALTER TABLE oa_user ADD permissions text NOT NULL default ''";

            $sql[] = "UPDATE oa_org SET org_name = 'Default Organisation' WHERE org_name = '' AND org_id = 0";
            $sql[] = "UPDATE oa_org SET org_comments = '' WHERE org_comments = 'Default Organisation.' AND org_id = 0";

            $sql[] = "DROP TABLE IF EXISTS `oa_user_org`";
            $sql[] = "CREATE TABLE `oa_user_org` (
                      `id` int(10) NOT NULL AUTO_INCREMENT,
                      `user_id` int(10) unsigned NOT NULL,
                      `org_id` int(10) unsigned NOT NULL,
                      `access_level` int(10) unsigned NOT NULL,
                      `permissions` text NOT NULL DEFAULT '',
                      PRIMARY KEY (`id`),
                      KEY `user_id` (`user_id`),
                      KEY `org_id` (`org_id`),
                      CONSTRAINT `oa_user_org_user_id` FOREIGN KEY (`user_id`) REFERENCES `oa_user` (`user_id`) ON DELETE CASCADE,
                      CONSTRAINT `oa_user_org_org_id` FOREIGN KEY (`org_id`) REFERENCES `oa_org` (`org_id`) ON DELETE CASCADE
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

            $sql[] = "INSERT INTO oa_user_org (SELECT NULL, oa_user.user_id, 0, 10, '' FROM oa_user LEFT JOIN oa_group_user ON (oa_user.user_id = oa_group_user.user_id AND oa_group_user.group_user_access_level = 10) WHERE oa_user.user_admin = 'y' OR oa_group_user.group_id = 1 GROUP BY oa_user.user_id)";

            $sql[] = "DROP TABLE IF EXISTS ip";

            $sql[] = "CREATE TABLE `ip` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `system_id` int(10) unsigned DEFAULT NULL,
              `current` enum('y','n') NOT NULL DEFAULT 'y',
              `first_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
              `last_seen` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
              `mac` varchar(200) NOT NULL DEFAULT '',
              `net_index` varchar(10) NOT NULL DEFAULT '',
              `ip` varchar(45) NOT NULL DEFAULT '',
              `netmask` varchar(30) NOT NULL DEFAULT '',
              `cidr` varchar(4) NOT NULL DEFAULT '',
              `version` tinyint(3) unsigned NOT NULL DEFAULT '4',
              `network` varchar(40) NOT NULL DEFAULT '',
              `set_by` enum('','dhcp','static','auto','local') NOT NULL DEFAULT '',
              PRIMARY KEY (`id`),
              KEY `system_id` (`system_id`),
              KEY `mac` (`mac`),
              CONSTRAINT `ip_system_id` FOREIGN KEY (`system_id`) REFERENCES `system` (`system_id`) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v4, ip_subnet, NULL, '4', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '4')";

            $sql[] = "INSERT INTO ip (SELECT NULL, system_id, 'y', first_timestamp, `timestamp`, net_mac_address, net_index, ip_address_v6, NULL, ip_subnet, '6', '', '' FROM sys_hw_network_card_ip WHERE ip_address_version = '6')";

            $sql[] = "DROP TABLE IF EXISTS sys_hw_network_card_ip";

            $sql[] = "UPDATE oa_config SET config_value = '20160303' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.2' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $query = $this->db->query($this_query);
            }

            // update the network groups
            $this->data['output'] .= "Converting network groups.<br /><br />\n";
            $sql = "SELECT group_id, group_dynamic_select, group_name FROM oa_group WHERE group_category = 'network'";
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $group) {
                $dynamic_select = $group->group_dynamic_select;
                $dynamic_select = str_replace("SELECT distinct(system.system_id) FROM system, sys_hw_network_card_ip", "SELECT distinct(system.system_id) FROM system, ip", $dynamic_select);
                $dynamic_select = str_replace("WHERE ( sys_hw_network_card_ip", "WHERE ( ip.version = '4' AND ip", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.ip_address_v4", "ip.ip", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.ip_subnet", "ip.netmask", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.timestamp = system.timestamp", "ip.current = 'y'", $dynamic_select);
                $dynamic_select = str_replace("oa_group_sys.group_id = ?", "oa_group_sys.group_id = @group", $dynamic_select);
                $dynamic_select = str_replace("ip.ip_address_v4", "ip.ip", $dynamic_select);
                $dynamic_select = str_replace("sys_hw_network_card_ip.system_id", "ip.system_id", $dynamic_select);
                $sql = "UPDATE oa_group SET group_dynamic_select = ? WHERE group_id = ?";
                $data = array("$dynamic_select", $group->group_id);
                $query = $this->db->query($sql, $data);
                $this->data['output'] .= $this->db->last_query()."<br /><br />\n";
            }

            # remove any groups that are using sys_hw_network_card_ip
            $sql = "SELECT group_name, group_dynamic_select from oa_group WHERE group_dynamic_select like '%sys_hw_network_card_ip%'";
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $row) {
                $this->data['output'] .= 'WARNING - the folloing group has been deleted as it used incompatible SQL. We no longer have a table named sys_hw_network_ip_address (it is now \'ip\' with renamed columns). Please recreate this group: ' . $row->group_name . '\n<br />The SQL for this group was: ' . $row->group_dynamic_select . "<br /><br />\n";
            }
            $sql = "DELETE oa_group FROM oa_group WHERE group_dynamic_select like '%sys_hw_network_card_ip%'";
            $query = $this->db->query($sql);

            # remove any incorrectly formatted netmasks
            $sql = "UPDATE ip SET netmask = '0.0.0.0' WHERE netmask = '000.000.000.000'";
            $this->db->query($sql);

            # get all our candidate ip addresses and add a network name and a CIDR
            $sql = "SELECT * FROM ip WHERE ip.ip != '' AND ip.netmask != '' AND ip.netmask != '0.0.0.0' AND ip.version = 4 and ip.network = ''";
            $query = $this->db->query($sql);
            $result = $query->result();
            foreach ($result as $row) {
                $temp_long = ip2long($row->netmask);
                $temp_base = ip2long('255.255.255.255');
                $temp_cidr = 32-log(($temp_long ^ $temp_base)+1,2);
                $network_details = network_details($row->ip.'/'.$temp_cidr);
                if (isset($network_details) and isset($network_details->network) and $network_details->network != '') {
                    $temp_network = $network_details->network.' / '.$temp_cidr;
                    $sql = "UPDATE ip SET network = ?, cidr = ? WHERE id = ?";
                    $data = array("$temp_network", "$temp_cidr", $row->id);
                    $this->db->query($sql, $data);
                }
                unset($temp_long);
                unset($temp_base);
                unset($temp_cidr);
                unset($network_details);
                unset($temp_network);
            }

            $log_details->message = 'Upgrade database to 1.12.2 completed';
            stdlog($log_details);
            unset($log_details);
        }

        if (($db_internal_version < '20160401') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.4

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.4 commenced';
            stdlog($log_details);

            $sql = array();
            $sql[] = "UPDATE oa_group SET group_category = 'org' WHERE group_category = 'owner'";
            $sql[] = "ALTER TABLE oa_group CHANGE group_category group_category enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general'";
            $sql[] = "ALTER TABLE print_queue CHANGE system_key device varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE print_queue DROP ip";
            $sql[] = "ALTER TABLE print_queue DROP type";
            $sql[] = "ALTER TABLE print_queue ADD type varchar(100) NOT NULL DEFAULT '' AFTER duplex";
            $sql[] = "ALTER TABLE print_queue CHANGE connection_status status varchar(100) NOT NULL DEFAULT '' AFTER type";
            $sql[] = "ALTER TABLE print_queue ADD capabilities varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE print_queue ADD driver varchar(200) NOT NULL DEFAULT ''";


            $sql[] = "UPDATE oa_config SET config_value = '20160401' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.4' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $query = $this->db->query($this_query);
            }

            $log_details->message = 'Upgrade database to 1.12.4 completed';
            stdlog($log_details);
            unset($log_details);
        }



        if (($db_internal_version < '20160409') and ($this->db->platform() == 'mysql')) {
            # upgrade for 1.12.6

            $log_details = new stdClass();
            $log_details->file = 'system';
            $log_details->message = 'Upgrade database to 1.12.6 commenced';
            stdlog($log_details);

            $this->load->model('m_system');
            $this->m_system->reset_icons();

            unset($sql);
            $sql = array();
            # we're removving the foreign key between additional fields and groups
            $sql[] = "ALTER TABLE sys_man_additional_fields DROP FOREIGN KEY sys_man_additional_fields_group_id";

            # this should be unused now - groups and reports refreshed further down
            $sql[] = "ALTER TABLE system DROP man_icon";

            # drop this key so we can change org_id to id
            $sql[] = "ALTER TABLE oa_user_org DROP FOREIGN KEY oa_user_org_org_id";

            # change the oa_org to the new SQL schema style
            $sql[] = "ALTER TABLE oa_org CHANGE org_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_org CHANGE org_name name varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_org CHANGE org_parent_id parent_id int(10) unsigned DEFAULT NULL";
            $sql[] = "ALTER TABLE oa_org CHANGE org_group_id group_id int(10) unsigned DEFAULT NULL";
            $sql[] = "ALTER TABLE oa_org DROP contact_id";
            $sql[] = "ALTER TABLE oa_org DROP org_picture";
            $sql[] = "ALTER TABLE oa_org CHANGE org_comments comments text NOT NULL DEFAULT ''";
            $sql[] = "UPDATE oa_org SET name = 'Default Organisation' WHERE id = 0";

            # now add the key back
            $sql[] = "ALTER TABLE oa_user_org ADD CONSTRAINT oa_user_org_org_id FOREIGN KEY (org_id) REFERENCES oa_org (id)";

            # drop these foreign keys so we can change user_id to id
            $sql[] = "ALTER TABLE edit_log DROP FOREIGN KEY edit_log_user_id";
            $sql[] = "ALTER TABLE oa_change DROP FOREIGN KEY oa_change_user_id";
            $sql[] = "ALTER TABLE oa_group_user DROP FOREIGN KEY oa_group_user_user_id";
            $sql[] = "ALTER TABLE oa_user_org DROP FOREIGN KEY oa_user_org_user_id";
            $sql[] = "ALTER TABLE sys_man_attachment DROP FOREIGN KEY att_user_id";
            $sql[] = "ALTER TABLE sys_man_notes DROP FOREIGN KEY sys_man_notes_user_id";

            # change the user table to the new SQL schema format
            $sql[] = "ALTER TABLE oa_user CHANGE user_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_user CHANGE user_name name varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_password password varchar(250) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_full_name full_name varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_email email varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_lang lang varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_display_number display_count smallint(6) NOT NULL DEFAULT '10'";
            $sql[] = "ALTER TABLE oa_user CHANGE user_theme theme varchar(100) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_admin admin varchar(1) NOT NULL";
            $sql[] = "ALTER TABLE oa_user CHANGE user_active active varchar(1) NOT NULL DEFAULT 'y'";
            $sql[] = "ALTER TABLE oa_user CHANGE user_sam sam int(10) NOT NULL DEFAULT '1'";
            $sql[] = "ALTER TABLE oa_user DROP user_change";

            # now add the foreign keys back
            $sql[] = "ALTER TABLE edit_log ADD CONSTRAINT edit_log_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";
            $sql[] = "ALTER TABLE oa_change ADD CONSTRAINT oa_change_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";
            $sql[] = "ALTER TABLE oa_group_user ADD CONSTRAINT oa_group_user_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";
            $sql[] = "ALTER TABLE oa_user_org ADD CONSTRAINT oa_user_org_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";
            $sql[] = "ALTER TABLE sys_man_attachment ADD CONSTRAINT att_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";
            $sql[] = "ALTER TABLE sys_man_notes ADD CONSTRAINT sys_man_notes_user_id FOREIGN KEY (user_id) REFERENCES oa_user (id)";

            # change the location table to use the new SQL schema format
            $sql[] = "ALTER TABLE oa_location CHANGE location_id id int(10) unsigned NOT NULL AUTO_INCREMENT";
            $sql[] = "ALTER TABLE oa_location CHANGE location_name name varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_type type varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_room room varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_suite suite varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_level level varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_address address varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_suburb suburb varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_city city varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_district district varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_region region varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_area area varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_state state varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_postcode postcode varchar(10) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_country country varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_tags tags varchar(250) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_phone phone varchar(20) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_picture picture varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_latitude latitude float(10,6) NOT NULL";
            $sql[] = "ALTER TABLE oa_location CHANGE location_longitude longitude float(10,6) NOT NULL";
            $sql[] = "ALTER TABLE oa_location CHANGE location_geo geo varchar(200) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_comments comments varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_icon icon varchar(100) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE oa_location CHANGE location_group_id group_id int(10) unsigned NOT NULL DEFAULT '0'";

            # this is unused and having 'count' as a column name is not ideal because it's a SQL reserved word
            $sql[] = "ALTER TABLE service DROP count";

            # allow for some silly long serial numbers
            $sql[] = "ALTER TABLE system CHANGE `serial` `serial` varchar(250) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system CHANGE `man_serial` `man_serial` varchar(250) NOT NULL DEFAULT ''";
            $sql[] = "ALTER TABLE system ADD `dbus_identifier` varchar(250) NOT NULL DEFAULT '' AFTER uuid";

            # a new function we'll use for checking if an IP is in a blessed subnet
            $sql[] = "DROP FUNCTION IF EXISTS cidr_to_mask";
            $sql[] = "CREATE FUNCTION cidr_to_mask (cidr INT(2)) RETURNS CHAR(15) DETERMINISTIC RETURN INET_NTOA(CONV(CONCAT(REPEAT(1,cidr),REPEAT(0,32-cidr)),2,10))";

            # our new blessed subnets config item
            $sql[] = "UPDATE `ip` SET `network` = REPLACE(`network`, ' ', '')";
            $sql[] = "INSERT INTO `oa_config` VALUES ('blessed_subnets_use','y','y','0000-00-00 00:00:00',0,'Should we only accept data from the blessed subnets list.')";

            # new table for network descriptions and blessed subnets
            $sql[] = "DROP TABLE IF EXISTS `networks`";
            $sql[] = "CREATE TABLE `networks` (`id` int(10) unsigned NOT NULL AUTO_INCREMENT, `name` varchar(200) NOT NULL DEFAULT '', `description` text NOT NULL, `edited_by` varchar(200) NOT NULL DEFAULT '', `edited_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00', PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $sql[] = "INSERT INTO `networks` SELECT NULL, REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', '')  AS name, TRIM(both '\t' from group_description) as description, 'system upgrade' as edited_by, NOW() as edited_date FROM oa_group WHERE group_category = 'network' AND SUBSTR(REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', ''),1,LOCATE('/',REPLACE(REPLACE(`group_name`, ' ', ''), 'Network-', ''))-1) != `group_description`";

            $sql[] = "INSERT INTO `networks` (SELECT NULL, ip.network as name, '' as description, 'system upgrade' as edited_by, NOW() as edited_date FROM ip WHERE network NOT IN (SELECT networks.name FROM networks) AND ip.network != '' GROUP BY ip.network)";

            $sql[] = "DROP TABLE IF EXISTS `chart`";

            $sql[] = "CREATE TABLE `chart` ( `when` datetime NOT NULL DEFAULT '0000-00-00 00:00:00', `what` varchar(50) NOT NULL DEFAULT '', `org_id` int unsigned NOT NULL DEFAULT 0, `count` int unsigned NOT NULL DEFAULT 0, PRIMARY KEY (`when`, `what`, `org_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'audit' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `new_count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'audit' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'snmp' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'snmp' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(audit_log.timestamp) as `when`, 'nmap' as `what`, system.man_org_id as `org_id`, count(audit_log.system_id) AS `count` FROM audit_log LEFT JOIN system ON (audit_log.system_id = system.system_id) WHERE audit_log.type = 'nmap' AND system.man_org_id IS NOT NULL GROUP BY system.man_org_id, DATE(audit_log.timestamp) ORDER BY DATE(audit_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(change_log.timestamp) as `when`, CONCAT(change_log.db_table, '_', change_log.db_action) as `what`, system.man_org_id as `org_id`, count(change_log.id) AS `count` FROM change_log LEFT JOIN system ON (change_log.system_id = system.system_id) WHERE DATE(change_log.timestamp) >= '2015-01-01' AND change_log.db_table != 'system' GROUP BY system.man_org_id, CONCAT(change_log.db_table, '_', change_log.db_action), DATE(change_log.timestamp) ORDER BY DATE(change_log.timestamp))";

            $sql[] = "INSERT INTO chart (`when`, `what`, `org_id`, `count`) (SELECT DATE(`first_timestamp`) as `when`, 'system_create' as `what`, system.man_org_id as `org_id`, count(system_id) AS `count` FROM system WHERE DATE(`first_timestamp`) >= '2015-01-01' GROUP BY DATE(`first_timestamp`), man_org_id ORDER BY DATE(`first_timestamp`))";

            # set our versions
            $sql[] = "UPDATE oa_config SET config_value = '20160409' WHERE config_name = 'internal_version'";
            $sql[] = "UPDATE oa_config SET config_value = '1.12.6' WHERE config_name = 'display_version'";

            foreach ($sql as $this_query) {
                $this->data['output'] .= $this_query."<br /><br />\n";
                $query = $this->db->query($this_query);
            }

            // update any leftover group definitions by changing man_icon to icon
            $sql = "UPDATE oa_group SET group_display_sql = REPLACE(group_display_sql, 'man_icon', 'icon')";
            $query = $this->db->query($sql);
            $sql = "UPDATE oa_group_column SET column_variable = 'icon' WHERE column_variable = 'man_icon'";
            $query = $this->db->query($sql);

            // update any leftover report definitions by changing man_icon to icon
            $sql = "UPDATE oa_report SET report_sql = REPLACE(report_sql, 'man_icon', 'icon')";
            $query = $this->db->query($sql);
            $sql = "UPDATE oa_report_column SET column_variable = 'icon' WHERE column_variable = 'man_icon'";
            $query = $this->db->query($sql);

            # have to re-run this as we left it in the original SQL script.
            $sql = "UPDATE oa_group SET group_category = 'org' WHERE group_category = 'owner'";
            $query = $this->db->query($sql);
            $sql = "ALTER TABLE oa_group CHANGE group_category group_category enum('application','device','general','location','network','org','os') NOT NULL DEFAULT 'general'";
            $query = $this->db->query($sql);

            foreach ($this->m_oa_config->get_server_subnets() as $subnet) {
                $this->m_oa_config->update_blessed($subnet, 0);
            }

            $log_details->message = 'Upgrade database to 1.12.6 completed';
            stdlog($log_details);
            unset($log_details);
        }

            # refresh the reports
            $this->load->helper('report_helper');
            refresh_report_definitions();

            # refresh the groups
            $this->load->helper('group_helper');
            refresh_group_definitions();

        $this->m_oa_config->load_config();
        $this->data['message'] .= "New (now current) database version: ".$this->config->item('display_version')." (".$this->config->item('internal_version').")<br />Don't forget to use the new audit scripts!<br/>\n";
        $this->data['include'] = 'v_upgrade';
        $this->data['heading'] = 'Upgrade';
        $this->load->view('v_template', $this->data);
    }
}
