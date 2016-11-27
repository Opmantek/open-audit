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
 * @version 1.14
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
        $log = new stdClass();
        $log->status = 'start';
        $log->function = strtolower(__METHOD__);
        stdlog($log);
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
        if (php_uname('s') == 'Windows NT') {
            $file = $this->config->item('base_path') . '\other\log_' . $logfile . '.log';
        } else {
            $file = $this->config->item('base_path') . '/other/log_' . $logfile . '.log';
        }
        $handle = fopen($file, 'w') or die ("Cannot open log file");
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
        if (php_uname('s') != 'Windows NT') {
            switch ($file) {
                case '1':
                    $complete_filename = $this->config->item('base_path') . '/other/log_system.log';
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
                    $complete_filename = $this->config->item('base_path') . '\other\log_system.log';
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
        if (php_uname('s') == 'Windows NT') {
            $file = $this->config->item('base_path') . '\other\log_' . $logfile . '.log';
        } else {
            $file = $this->config->item('base_path') . '/other/log_' . $logfile . '.log';
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
            # Define our constans for use in htmlspecialchars
            if (!defined('CHARSET')) {
                define('CHARSET', 'UTF-8');
                if (phpversion() >= 5.4) {
                    define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
                } else {
                    define('REPLACE_FLAGS', ENT_COMPAT);
                }
            }
            $this->data['heading'] = 'Export to NMIS';
            $this->data['include'] = 'v_export_nmis';
            $this->data['export_report'] = 'y';
            $this->data['sortcolumn'] = '1';
            $this->load->model("m_systems");
            $data = array($this->data['id']);
            $query = $this->db->query('SET @group = ?', $data);
            #$sql = "SELECT system.id, system.nmis_name, system.hostname, system.domain, system.fqdn, system.ip as nmis_host, '' as nmis_community, '' as nmis_version, system.nmis_group, 'true' as nmis_collect, system.nmis_role, '' as nmis_net, nmis_export, access_details FROM system LEFT JOIN oa_group_sys ON system.id = oa_group_sys.system_id WHERE oa_group_sys.group_id = @group GROUP BY system.id ORDER BY system.id";
            $sql = "SELECT system.id, system.nmis_name, system.hostname, system.domain, system.fqdn, system.ip as nmis_host, '' as nmis_community, '' as nmis_version, system.nmis_group, 'true' as nmis_collect, system.nmis_role, '' as nmis_net, nmis_export, credential.credentials FROM system LEFT JOIN oa_group_sys ON system.id = oa_group_sys.system_id LEFT JOIN credential ON (credential.system_id = system.id AND credential.type = 'snmp') WHERE oa_group_sys.group_id = @group AND system.status = 'production' GROUP BY system.id ORDER BY system.id";
            $query = $this->db->query($sql);
            $this->data['query'] = $query->result();
            $this->load->library('encrypt');
            for ($i = 0; $i<count($this->data['query']); $i++) {
                if ($this->data['query'][$i]->credentials != '') {
                    $j = json_decode($this->encrypt->decode($this->data['query'][$i]->credentials));
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
                    $this->data['query'][$i]->nmis_name = "<span style=\"color: blue;\">".htmlspecialchars($this->data['query'][$i]->nmis_name, REPLACE_FLAGS, CHARSET)."</span>";
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
                if (isset($j->community)) {
                    $this->data['query'][$i]->nmis_community = $j->community;
                }

                if ($this->data['query'][$i]->nmis_community == '') {
                    $this->data['query'][$i]->nmis_community = "<span style=\"color: blue;\">public</span>";
                }

                # snmp version
                if (isset($j->version)) {
                    $this->data['query'][$i]->nmis_snmp_version = $j->version;
                }
                if (!isset($this->data['query'][$i]->nmis_snmp_version) or $this->data['query'][$i]->nmis_snmp_version == '') {
                    $this->data['query'][$i]->nmis_snmp_version = "<span style=\"color: blue;\">2</span>";
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
                    if (intval($i[2]) != 0) {
                        $device_array[] = $i[2];
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
                #$sql = "SELECT system.system_id, system.nmis_name, system.hostname, system.domain, system.fqdn, system.man_ip_address as nmis_host, '' as nmis_community, '' as nmis_version, system.nmis_group, 'true' as nmis_collect, system.nmis_role, '' as nmis_net, nmis_export, access_details FROM system WHERE system_id = ?";
                $sql = "SELECT system.id, system.nmis_name, system.hostname, system.domain, system.fqdn, system.ip as nmis_host, '' as nmis_community, '' as nmis_version, system.nmis_group, 'true' as nmis_collect, system.nmis_role, '' as nmis_net, nmis_export, credential.credentials FROM system LEFT JOIN credential ON (system.id = credential.system_id AND credential.type = 'snmp') WHERE system.id = ?";
                $data = array($value);
                $query = $this->db->query($sql, $data);
                $this->data['query'] = $query->result();

                if ($this->data['query'][$i]->credentials != '') {
                    $j = json_decode($this->encrypt->decode($this->data['query'][$i]->credentials));
                }

                $this->data['query'][$i]->nmis_host = ip_address_from_db($this->data['query'][$i]->nmis_host);

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
                        $this->data['query'][$i]->nmis_name = $this->data['query'][$i]->nmis_host;
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
                if (!empty($j->community)) {
                    $this->data['query'][$i]->nmis_community = $j->community;
                }
                if (empty($this->data['query'][$i]->nmis_community)) {
                    $this->data['query'][$i]->nmis_community = 'public';
                }

                # snmp version
                if (isset($j->snmp_version)) {
                    if ($j->snmp_version == '2') {
                        $j->snmp_version = '2c';
                    }
                    $this->data['query'][$i]->nmis_snmp_version = 'snmpv'.$j->version;
                }
                if (empty($this->data['query'][$i]->nmis_snmp_version)) {
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
            $timestamp = $this->config->config['timestamp'];
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
                    if ($info[$i]['name'][0] != 'Subnets') {
                        $network = new stdClass();
                        $network->name = $info[$i]['name'][0];
                        $network_org_id = 0;
                        $this->m_networks->upsert($network);
                    }
                }

                # extract the list of computers from AD
                $filter = "(&(objectclass=computer))";
                $justthese = array("dnshostname", "name", "location", "operatingSystem", "lastLogon", "pwdLastSet", "lastlogon", "distinguishedName");
                $sr = ldap_search($ad, $dn, $filter, $justthese);
                $info = ldap_get_entries($ad, $sr);
                for ($i = 0; $i < count($info)-1; $i++) {
                    $details = new stdClass();
                    $details->last_seen = $timestamp;
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

                    $details->id = $this->m_system->find_system($details);
                    if (!empty($details->id)) {
                        # update an existing system
                        $this->m_system->update_system($details);
                    } else {
                        # insert a new system
                        $details->id = $this->m_system->insert_system($details);
                    }
                    if (isset($this->user->full_name)) {
                        $temp_user = $this->user->full_name;
                    } else {
                        $temp_user = '';
                    }
                    $this->m_audit_log->create($details->id, $temp_user, $details->last_seen_by, $details->audits_ip, '', '', $details->last_seen);
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



}
