<?php
#
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

class test extends MY_Controller
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

    public function test_date()
    {
        $date = date("Y-m-d");// current date
        $days_to_subtract = rand(0, 50);
        echo "<pre>\n";
        echo "Current Date: " . $date . "\n";
        echo "Days to subtract: " . $days_to_subtract . "\n";
        echo "Date: " . date("Y-m-d", strtotime("-" . $days_to_subtract . " days")) . "\n";
        echo strtotime("now"), "\n";
        echo strtotime("10 September 2000"), "\n";
        echo strtotime("+1 day"), "\n";
        echo strtotime("+1 week"), "\n";
        echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
        echo strtotime("next Thursday"), "\n";
        echo strtotime("last Monday"), "\n";
    }

    public function test_snmp()
    {
        if (!isset($_POST['submit'])) {
            # display the form
            $this->data['heading'] = 'Test - upload and process SNMP';
            $this->data['include'] = 'v_test_snmp';
            $this->data['sortcolumn'] = '1';
            $this->load->view('v_template', $this->data);
        } else {
            # process the snmp
            $this->load->helper('snmp_oid');
            $result = array();
            $i = explode("\n", $_POST['snmp']);
            foreach ($i as $line) {
                $j = explode(" ", $line);
                if (substr($j[0], 0, 1) == ".") {
                    $j[0] = substr($j[0], 1, strlen($j[0]));
                }
                $result[$j[0]] = @$j[3];
            }
            echo "<pre>\n";
            #print_r($result);
            #echo "</pre>\n";
        }

        $details->man_ip_address = '';
        $details->ip_address = '';
        $details->subnet = '';
        $details->mac = '';
        $details->snmp_community = '';
        $details->name = '';
        $details->description = '';
        $details->uptime = '';
        $details->location = '';
        $details->contact = '';
        $details->snmp_version = '';
        $details->os_group = '';
        $details->man_os_group = '';
        $details->os_family = '';
        $details->man_os_family = '';
        $details->os_name = '';
        $details->man_os_name = '';
        $details->manufacturer = '';
        $details->man_manufacturer = '';
        $details->model = '';
        $details->man_model = '';
        $details->serial = '';
        $details->type = '';
        $details->device_type = '';

        // printer duplex
        $details->duplex = '';
        $i = @$result["1.3.6.1.2.1.43.13.4.1.10.1"];
        if (count($i) > 0) {
            $details->duplex = 'False';
            for ($k = 0; $k < count($i); $k++) {
                if (mb_strpos($i[$k], "Duplex") !== false) {
                            $details->duplex = 'True';
                }
            }
        }

        // sysObjectID
        $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.1.0"]);
        $details->oid = str_replace("OID: .", "", @$result["1.3.6.1.2.1.1.2.0"]);
        if (substr($details->oid, 0, 1) == ".") {
            $details->oid = substr($details->oid, 1, strlen($details->oid));
        }
        if (strtolower($details->oid) == 'no such object available on this agent at this oid') {
            $details->oid = '';
        }

        if ($details->oid > '') {
            $oid = get_oid($details->oid);
            $details->manufacturer = $oid->manufacturer;
            $details->man_manufacturer = $oid->manufacturer;
            $details->model = $oid->model;
            $details->man_model = $oid->model;
            $details->type = $oid->type;
            $details->device_type = $oid->type;
            $details->man_type = $oid->type;
            $details->os_group = $oid->os_group;
            $details->man_os_group = $oid->os_group;
        }

        if ($details->oid == '1.3.6.1.4.1.6876.4.1') {
            # grab some specific details for VMware ESX
            $model = str_replace("STRING: ", "", @$result["1.3.6.1.4.1.6876.1.1.0"]);
            $version = str_replace("STRING: ", "", @$result["1.3.6.1.4.1.6876.1.2.0"]);
            $details->model = $model . " (" . $version . ")";
            $details->model =str_replace("\"", "", $details->model);
            $details->man_model = $details->model;
            $details->os_group = "VMware";
            $details->man_os_group = "VMware";
            $details->os_family = str_replace("STRING: ", "", @$result["1.3.6.1.4.1.6876.1.1.0"]);
            $details->os_family =str_replace("\"", "", $details->os_family);
            $details->man_os_family = $details->os_family;
            $details->os_name = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.1.0"]);
            $details->os_name =str_replace("\"", "", $details->os_name);
            $details->man_os_name = $details->os_name;
            $details->type = 'hypervisor';
            $details->device_type = 'hypervisor';
        }

        if (substr($details->oid, 0, 13) == '1.3.6.1.4.1.9') {
            $i = explode("$", @$result["1.3.6.1.4.1.9.9.25.1.1.1.2.5"]);
            $details->os_version = trim($i[1]);
            $i = @$result["1.3.6.1.4.1.9.9.25.1.1.1.2.7"];
            if (strpos($i, "IOS") !== false) {
                $details->os_group = 'Cisco';
                $details->man_os_group = 'Cisco';
                $details->os_family = 'Cisco IOS';
                $details->man_os_family = 'Cisco IOS';
                $details->os_name = "Cisco IOS version " . $details->os_version;
                $details->man_os_name = "Cisco IOS version " . $details->os_version;
            }
            if (strpos($i, "Catalyst Operating") !== false) {
                $details->os_group = 'Cisco';
                $details->man_os_group = 'Cisco';
                $details->os_family = 'Cisco Catalyst OS';
                $details->man_os_family = 'Cisco Catalyst OS';
                $detail->os_name = "Cisco Catalyst OS version " . $details->os_version;
                $detail->man_os_name = "Cisco Catalyst OS version " . $details->os_version;
            }
        }

        // manufacturer
        if ($details->manufacturer == '') {
            $hex = @$result["1.3.6.1.2.1.43.8.2.1.14.1"];
            if (count($hex) > 0) {
                if (isset($hex[1])) {
                    if (mb_strpos($hex[1], "Hex-STRING: ") !== false) {
                        $hex[1] = str_replace("Hex-STRING: ", "", $hex[1]);
                        for ($i=0; $i<strlen($hex[1]); $i++) {
                            $details->manufacturer .= chr(hexdec(substr($hex[1], $i, 2)));
                        }
                    } else {
                        $details->manufacturer = str_replace("STRING: ", "", $hex[1]);
                        $details->manufacturer = str_replace('"', '', $details->manufacturer);
                    }
                }
            }
            if (($details->manufacturer == '') or ($details->manufacturer == 'No Such Object available on this agent at this OID')) {
                $details->manufacturer = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.47.1.1.1.1.12.1"]));
            }
        }
        if ($details->manufacturer == 'No Such Instance currently exists at this OID') {
            $details->manufacturer = '';
        }
        if ($details->manufacturer == 'No Such Object available on this agent at this OID') {
            $details->manufacturer = '';
        }

        // serial
        echo "Serial: " . $result["1.3.6.1.2.1.47.1.1.1.1.11.1"] . "\n";
        $details->serial = str_replace('"', '', str_replace("STRING: ", "", @$result["1.3.6.1.2.1.43.5.1.1.17.1"]));
        if ((!isset($details->serial)) or ($details->serial == '') or ($details->serial == 'No Such Object available on this agent at this OID')) {
            if (strpos(strtolower($details->manufacturer), 'cisco') !== false) {
                $details->serial = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.47.1.1.1.1.11.1"]));
            }
        }
        if ($details->serial == 'No Such Object available on this agent at this OID') {
            $details->serial = '';
        }
        if ($details->serial == 'No Such Instance currently exists at this OID') {
            $details->serial = '';
        }

        // mac address
        $interface_number = @str_replace("INTEGER: ", "", @$result["1.3.6.1.2.1.4.20.1.2."] . $details->man_ip_address);
        $details->mac = @str_replace("STRING: ", "", @$result["1.3.6.1.2.1.2.2.1.6."] . $interface_number);
        $details->mac = @trim(str_replace("Hex-", "", $details->mac));
        $details->mac = @str_replace(" ", ":", $details->mac);
        # need to split and join because of the dropped 0's
        $i = explode(":", $details->mac);
        for ($k=0; $k<count($i); $k++) {
            if (strlen($i[$k]) == 1) {
                $i[$k] = '0' . $i[$k];
            }
            if (strlen($i[$k]) == 0) {
                $i[$k] = '00';
            }
        }
        $details->mac = strtoupper(implode(":", $i));
        if ($details->mac == '00') {
            $details->mac = '';
        }

        // type
        if ($details->type == '') {
            $details->type = str_replace(
                "OID: HOST-RESOURCES-TYPES::hrDevice",
                "",
                str_replace(
                    "STRING: ",
                    "",
                    @$result["1.3.6.1.2.1.25.3.2.1.2.1"]
                )
            );
            if (($details->type == "No Such Object available on this agent at this OID") or ($details->type == '')) {

                # If the device is a Switch, the OID 1.3.6.1.2.1.17.1.2.0 and OID 1.3.6.1.2.1.4.1.0 should have a value of 2
                $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.17.1.2.0"]);
                $j = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.4.1.0"]);
                if (($i == '2') and ($j == '2')) {
                    $details->type = 'switch';
                }

                # If the device is a Router, the OID 1.3.6.1.2.1.4.1.0 should have a value of 1
                if ($details->type == '') {
                    $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.4.1.0"]);
                    if ($i == '1') {
                        $device->type = 'router';
                    }
                }

                # If the device is a Printer, the OID 1.3.6.1.2.1.43.5.1.1.1.1 should have a value
                if ($details->type == '') {
                    $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.43.5.1.1.1.1"]);
                    if ($i == '1') {
                        $device->type = 'printer';
                    }
                }
            }
        }
        if (strtolower($details->type) == 'no such object available on this agent at this oid') {
            $details->type = '';
        }

        // model
        if ($details->model == '') {
            $details->model = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.25.3.2.1.3.1"]);
            if (($details->model == '') or ($details->model == 'No Such Object available on this agent at this OID')) {
                if (strpos(strtolower($details->manufacturer), 'cisco') !== false) {
                    $details->model = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.47.1.1.1.1.13.1"]));
                }
            }
        }
        if (strtolower($details->model) == 'no such object available on this agent at this oid') {
            $details->model = '';
        }

        // name
        if ($details->name == '') {
            $details->name = strtolower(str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.5.0"])));
        }
        if (strtolower($details->name) == 'no such object available on this agent at this oid') {
            $details->name = '';
        }

        if (filter_var($details->name, FILTER_VALIDATE_IP)) {
            # we have an ip address as opposed to a name or fqdn
        } else {
            # we have a name or fqdn
            if (strpos($details->name, ".")) {
                # fqdn - explode it
                $details->fqdn = $details->name;
            }
        }

        // description
        if ($details->description == '') {
            $details->description = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.1.0"]));
            $details->description = str_replace("\r\n", " ", $details->description);
        }
        if (strtolower($details->description) == 'no such object available on this agent at this oid') {
             $details->description = '';
        }

        // uptime
        if ($details->uptime == '') {
            $i = str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.3.0"]);
            if (($i > '') and (strpos($i, ")") !== false)) {
                $j = explode(")", $i);
                $details->uptime = trim($j[1]);
            } else {
                $details->uptime = '';
            }
        }

                // location
        if ($details->location == '') {
            $details->location = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.6.0"]));
        }
        if ($details->location == 'Unknown (edit /etc/snmp/snmpd.conf)') {
            $details->location = '';
        }
        if ($details->location == 'not set') {
            $details->location = '';
        }
        if ($details->location == 'No Such Object available on this agent at this OID') {
            $details->location = '';
        }
        if ($details->location > '') {
            $details->description = "Location: " . $details->location . ". " . $details->description;
        }

        // contact
        if ($details->contact == '') {
            $details->contact = str_replace("\"", "", str_replace("STRING: ", "", @$result["1.3.6.1.2.1.1.4.0"]));
        }
        if ($details->contact == 'Root  (configure /etc/snmp/snmpd.conf)') {
            $details->contact = '';
        }
        if ($details->contact == 'not set') {
            $details->contact = '';
        }
        if ($details->contact > '') {
            $details->description = "Contact: " . $details->contact . ". " . $details->description;
        }

        // subnet
        if ($details->subnet == '') {
            $details->subnet = str_replace("IpAddress: ", "", @$result["1.3.6.1.2.1.4.20.1.3."] . $details->man_ip_address);
        }
        if ($details->subnet == 'No Such Instance currently exists at this OID') {
            $details->subnet = '';
        }
        if ($details->subnet == 'No Such Object available on this agent at this OID') {
            $details->subnet = '';
        }

        // installed modules with serial numbers
        $i = @$result["1.3.6.1.2.1.47.1.1.1.1.11"];
        if (count($i) > 0) {
            if ($i[0] == 'No more variables left in this MIB View (It is past the end of the MIB tree)') {
                unset($i);
                $i = array();
            }
            if (count($i) > 0) {
                $count = 0;
                for ($j=0; $j<count($i); $j++) {
                    if ((mb_strpos($i[$j], $details->serial) === false) and ($i[$j] != "") and ($i[$j] != "\"\"")) {
                        $k = $j + 1;
                        $k = "1.3.6.1.2.1.47.1.1.1.1.3." . $k;
                        $oid = $result[$k];
                        $oid = str_replace("OID: .", "", $oid);
                        $module->$count = get_oid($oid);
                        $module->$count->serial = str_replace("STRING: ", "", $i[$j]);
                        $module->$count->serial = str_replace('"', '', $module->$count->serial);
                        $count++;
                    }
                }
                $details->modules = $module;
            }
        }

        print_r($details);
    }
}
