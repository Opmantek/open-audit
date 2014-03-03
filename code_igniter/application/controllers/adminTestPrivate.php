<?php
/**
 * @package Open-AudIT
 * @author Mark Unwin <mark.unwin@gmail.com>
 * @version 1.0.4
 * @copyright Copyright (c) 2013, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class AdminTestPrivate extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // must be an admin to access this page
        if ($this->session->userdata('user_admin') != 'y') {
            if (isset($_SERVER['HTTP_REFERER']) and $_SERVER['HTTP_REFERER'] > "") {
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                redirect('login/index');
            }
        }
    }

    public function index()
    {
        redirect('/');
    }

    public function testUrl()
    {
        echo "Site URL: " . site_url() . "<br />\n";
        echo "Base URL: " . base_url() . "<br />\n";
        exit();
    }

    public function testDecrypt()
    {
        $this->load->library('encrypt');
        $supplied_credentials = 'KX3DtbiEOPu/PNtQ+VznwTYcostNaYe9Fos45DtCtKHjfSPy9JZAb4Fd4Et8iFA8lD94rmB0FMBN0Yx30c2pG8Kt9KDPii2FuwhH+HKaJW4umdStbdKY+PSE4OhviHn3FidmK03I2p2GNVEWcXcgtI687CpwrgZC8KHEMU6QeLdoyYXqPiDEr1UWeaW3hBIP9gyZadmiRu6YmAWr5FY7DxMZh6mOvPMUc0ZbVZ+0dxf3FVtdk539K3gPIas4I5n5qo7rh0x3Iix44FcuWFDih74C3zhj4Ey2wzxz3ENH9SZ93NR/BrEd447xKrO2PE9YhaTeGNwJEotYdGG4fi2hNnXHccjAbFkp9IAon2OhZ5NZMCFy42LtgyHFxCVOw1Vu';
        $supplied_credentials = $this->encrypt->decode($supplied_credentials);
        $supplied_credentials = json_decode($supplied_credentials);
        echo "<pre>\n";
        print_r($supplied_credentials);
    }

    public function testSnmp()
    {
        # http://www.shodanhq.com/search?q=  SEARCH TERM  +port%3A161+after%3A1-10-2013&feed=1
        $this->load->helper('xml');
        $this->load->model('m_system');

        $search = array();
        #$search[] = "Baystack";
        #$search[] = "Catalyst";
        #$search[] = "DocuCentre";
        #$search[] = "DesignJet";
        #$search[] = "Kyocera";
        $search[] = "ProCurve";

        if (extension_loaded('snmp')) {
            $this->load->helper('snmp');
            $this->load->helper('snmp_oid');
        }

        $api_key= 'u644gluRUjTwD2FwdSTQ2MyNSGOXWsqm';

        echo "<table style=\"border-collapse: collapse\">\n";
        echo "	<thead>\n";
        echo "		<tr>\n";
        echo "			<th style=\"border: 1px solid #000\">Updated</th>\n";
        echo "			<th style=\"border: 1px solid #000\">IP</th>\n";
        echo "			<th style=\"border: 1px solid #000\">Manufacturer</th>\n";
        echo "			<th style=\"border: 1px solid #000\">Model</th>\n";
        echo "			<th style=\"border: 1px solid #000\">Serial</th>\n";
        echo "			<th style=\"border: 1px solid #000\">Type</th>\n";
        echo "			<th style=\"border: 1px solid #000\">Description</th>\n";
        echo "			<th style=\"border: 1px solid #000\">SNMP Version</th>\n";
        echo "			<th style=\"border: 1px solid #000\">OID</th>\n";
        echo "		</tr>\n";
        echo "	</thead>\n";
        echo "	<tbody>\n";

        if (php_uname('s') == 'Linux') {
            $file = "/usr/local/open-audit/other/open-audit.log";
        } else {
            $file = "c:\\xampplite\\open-audit\\other\\open-audit.log";
        }

        $log_hostname = php_uname('n');
        $log_pid = getmypid();
        $log_name = "admin_test.php";

        for ($i=0; $i<count($search); $i++) {
            # log it to the log file so we can tail it and see progress.
            $log_timestamp = date("M d H:i:s");
            $log_line = $log_timestamp . " " . $log_hostname . " " . $log_pid . " " . $log_name . " Searching for " . $search[$i] . ".\n";
            $handle = fopen($file, "a");
            fwrite($handle, $log_line);
            fclose($handle);

            $url = "http://www.shodanhq.com/api/search?q=" . $search[$i] . "+port%3A161&p=1&key=" . $api_key;
            $rss = '';
            $rss = @file_get_contents($url);
            $json = new stdClass();
            if ($rss > '') {
                $json = json_decode($rss);
            }
            $count = 0;
            echo "<tr><td colspan=\"6\">" . $search[$i] . "</td></tr>\n";
            if (isset($json->matches) and count($json->matches) > 0) {
                foreach ($json->matches as $details) {
                    $details->man_ip_address = $details->ip;
                    $details->system_id = '';
                    $details->model = '';
                    $details->serial = '';
                    $details->manufacturer = '';
                    $details->type = '';
                    $details->description = '';
                    $details = get_snmp($details);
                    if (isset($details->snmp_oid) and $details->snmp_oid > "") {
                        $count++;
                        echo "		<tr>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->updated . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->ip . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->manufacturer . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->model . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->serial . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->type . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->description . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->snmp_version . "</td>\n";
                        echo "			<td style=\"border: 1px solid #000\">" . $details->snmp_oid . "</td>\n";
                        echo "		</tr>\n";
                    }
                    if ($count == 5) {
                        $count = 0;
                        break;
                    }
                }
            }
        } //end of the search array loop
        echo "	</tbody>\n";
        echo "</table>\n";
    }
}

        // $search[] = "3com";
        // #$search[] = "Accelar";
        // $search[] = "Access";
        // $search[] = "Alcatel";
        // $search[] = "Alpine";
        // $search[] = "Alteon";
        // $search[] = "AppDirector";
        // $search[] = "Aspen";
        // $search[] = "Backbone";
        // $search[] = "Baseline";
        $search[] = "Baystack";
        // #$search[] = "BIG-IP";
        // $search[] = "BigIron";
        // $search[] = "Big Server Iron";
        // $search[] = "bizhub";
        // #$search[] = "Black Diamond";
        // #$search[] = "Brocade";
        // $search[] = "Cajun";
        // $search[] = "Canon";
        // $search[] = "Catalyst";
        // #$search[] = "Centillion";
        // $search[] = "Cheetah";
        // $search[] = "Cisco";
        // $search[] = "Citrix";
        // $search[] = "Contivity";
        // #$search[] = "Corebuilder";
        // $search[] = "DCS-";
        // #$search[] = "DES";
        // #$search[] = "DesignJet";       ########
        // #$search[] = "DocPrint";            ########
        // #$search[] = "DocuCentre";        ###########
        // $search[] = "DocuColor";
        // #$search[] = "DSR";
        // $search[] = "EdgeIron";
        // $search[] = "Epson";
        // $search[] = "ERS";
        // $search[] = "Ethernet";
        // $search[] = "Express";
        // #$search[] = "Extreme Summit";
        // $search[] = "F5";
        // $search[] = "FastIron";
        // $search[] = "FireProof";
        // $search[] = "Force10";
        // $search[] = "Fortigate";
        // $search[] = "H3C";
        // $search[] = "Huawei";
        // $search[] = "InfoPrint";
        // $search[] = "IntraCore";
        // $search[] = "IntraSwitch";
        // $search[] = "JetDirect";
        // $search[] = "Juniper";
        // $search[] = "JunOS";
        // $search[] = "Konica";
        // $search[] = "Kyocera";
        // $search[] = "LANplex";
        // $search[] = "Laser";
        // $search[] = "Lexmark";
        // $search[] = "LinkSwitch";
        // $search[] = "Lucent";
        // $search[] = "Matrix";
        // $search[] = "Media";
        // $search[] = "Minolta";
        // $search[] = "Net-Net";
        // $search[] = "NetApp";
        // #$search[] = "NetCache";
        // $search[] = "NetEngine";
        // $search[] = "Netgear";
        // $search[] = "NetIron";
        // $search[] = "Netopia";
        // $search[] = "NetScaler";
        // $search[] = "NetScreen";
        // $search[] = "NetVanta";
        // $search[] = "Nexus";
        // $search[] = "Nokia";
        // $search[] = "Nortel";
        // $search[] = "Nways";
        // $search[] = "NX-OS";
        // $search[] = "Oki";
        // #$search[] = "OmniCore";
        // $search[] = "OmniStack";
        // #$search[] = "OmniSwitch";
        // $search[] = "ONS";
        // $search[] = "PA-";
        // $search[] = "PacketShaper";
        // $search[] = "Palo Alto";
        // $search[] = "Passport";
        // $search[] = "Phaser";
        // $search[] = "Pix";
        // $search[] = "PowerConnect";
        // $search[] = "Powerware";
        // $search[] = "Pro";
        // $search[] = "ProCurve";
        // #$search[] = "Proteon";
        // $search[] = "QuidWay";
        // $search[] = "Radware";
        // $search[] = "Railswitch";
        // $search[] = "Ricoh";
        // $search[] = "Riverbed";
        // $search[] = "Riverstone";
        // $search[] = "Router";
        // $search[] = "Secure Stack";
        // $search[] = "ServerIron";
        // $search[] = "SG";
        // $search[] = "Sharp";
        // $search[] = "Smart Switch";
        // $search[] = "Smart-UPS";
        // $search[] = "SmartSwitch";
        // $search[] = "SRX";
        // $search[] = "Stackable";
        // $search[] = "SteelHead";
        // $search[] = "Summit";
        // $search[] = "SuperStack";
        // $search[] = "Switch";
        // $search[] = "Tellabs";
        // $search[] = "TigerSwitch";
        // $search[] = "TippingPoint";
        // $search[] = "TurboIron";
        // $search[] = "Vanguard";
        // $search[] = "Vertical Horizon";
        // $search[] = "WatchGuard";
        // $search[] = "Web Server Director";
        // $search[] = "WorkCentre";
        // $search[] = "X-Pedition";
        // #$search[] = "Xedia";
        // $search[] = "ZebraNet";
        // $search[] = " ";
