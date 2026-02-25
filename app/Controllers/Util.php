<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_6.0.2
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Util
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Util
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Util extends Controller
{
    use ResponseTrait;

    public function cloudServices($type)
    {
        $services = array();
        if ($type !== 'aws' and $type !== 'azure') {
            echo json_encode($services);
            return;
        }
        helper('utility');
        if ($type === 'aws') {
            $dir = '/usr/local/open-audit/public/aws_icons';
        }
        if ($type === 'azure') {
            $dir = '/usr/local/open-audit/public/azure_icons';
        }
        $services = getSVG($dir);
        return $this->setResponseFormat('json')->respond($services);
    }

    public function feeds()
    {
        helper('utility');
        $data = createNewsData();
        $data->devices = json_encode($data->devices);
        $data->issues = json_encode($data->issues);
        $data->features = json_encode($data->features);
        $data->products = json_encode($data->products);
        $data->stats = json_encode($data->stats);
        echo json_encode($data) . "\n";
        exit;
    }

    public function subnetSize()
    {
        // NOTE #1 - We cannot restrict the source (like the Google function below) because it is called from the client browser.
        // NOTE #2 - it would be nice do run the below, but unsure that Windows would handle 2>/dev/null
        // nmap -n -sL $subnet 2>/dev/null | grep "^Nmap done" | awk '{print $3}'
        $subnet = (!empty($_POST['subnet'])) ? $_POST['subnet'] : '';
        if (empty($subnet)) {
            return;
        }
        # filter out all characters not in the $chars list
        $chars = "0123456789-./";
        $pattern = "/[^" . preg_quote($chars, "/") . "]/";
        $subnet = preg_replace($pattern, '', $subnet);
        # now run the command
        $command = "nmap -n -sL " . $subnet;
        exec($command, $output, $return_var);
        $count = 0;
        if ($return_var === 0) {
            foreach ($output as $line) {
                if (stripos($line, 'Nmap scan report for') === 0) {
                    $count = $count + 1;
                }
            }
        }
        echo $count;
        return;
    }

    public function testWindowsClient1()
    {
        $filename = ROOTPATH . 'other/test_windows_client.vbs';
        $file = file_get_contents($filename);
        // Set headers
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=test_windows_client.vbs');
        header('Content-Type: text/plain');
        header('Content-Transfer-Encoding: binary');
        // echo our file contents
        echo $file;
    }

    public function testWindowsClient()
    {         
        //LDAP Bind paramters, need to be a normal AD User account.
        $ldap_password = 'NM1$88NM1$88';
        $ldap_username = 'administrator@opmantek.net';
        $ldap_connect_string = 'ldap://192.168.88.124';

        ldap_set_option(null, LDAP_OPT_NETWORK_TIMEOUT, 5);
        ldap_set_option(null, LDAP_OPT_DEBUG_LEVEL, 7);
        ldap_set_option(null, LDAP_OPT_X_TLS_REQUIRE_CERT, 0);

        $ldap_connection = ldap_connect($ldap_connect_string);
         
        if (FALSE === $ldap_connection) {
            // Uh-oh, something is wrong...
            echo 'Unable to connect to the ldap server';
        }
         
        // We have to set this option for the version of Active Directory we are using.
        ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
        ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.
         
        if (TRUE === ldap_bind($ldap_connection, $ldap_username, $ldap_password)) {
         
            //Your domains DN to query
            $ldap_base_dn = 'DC=opmantek,DC=net';
         
            //Get standard users and contacts
            $search_filter = '(|(objectCategory=person)(objectCategory=contact))';
         
            //Connect to LDAP
            $result = ldap_search($ldap_connection, $ldap_base_dn, $search_filter);
         
            if (FALSE !== $result) {
                $entries = ldap_get_entries($ldap_connection, $result);
         
                // Uncomment the below if you want to write all entries to debug somethingthing 
                echo "<pre>"; 
                #echo json_encode($entries);
                print_r($entries);
         
                //Create a table to display the output 
                echo '<h2>AD User Results</h2></br>';
                echo '<table border = "1"><tr bgcolor="#cccccc"><td>Username</td><td>Last Name</td><td>First Name</td><td>Company</td><td>Department</td><td>Office Phone</td><td>Fax</td><td>Mobile</td><td>DDI</td><td>E-Mail Address</td><td>Home Phone</td></tr>';
         
                //For each account returned by the search
                for ($x = 0; $x < $entries['count']; $x++) {
         
                    //
                    //Retrieve values from Active Directory
                    //
         
                    //Windows Usernaame
                    $LDAP_samaccountname = "";
         
                    if (!empty($entries[$x]['samaccountname'][0])) {
                        $LDAP_samaccountname = $entries[$x]['samaccountname'][0];
                        if ($LDAP_samaccountname == "NULL") {
                            $LDAP_samaccountname = "";
                        }
                    } else {
                        //#There is no samaccountname s0 assume this is an AD contact record so generate a unique username
         
                        $LDAP_uSNCreated = $entries[$x]['usncreated'][0];
                        $LDAP_samaccountname = "CONTACT_" . $LDAP_uSNCreated;
                    }
         
                    //Last Name
                    $LDAP_LastName = "";
         
                    if (!empty($entries[$x]['sn'][0])) {
                        $LDAP_LastName = $entries[$x]['sn'][0];
                        if ($LDAP_LastName == "NULL") {
                            $LDAP_LastName = "";
                        }
                    }
         
                    //First Name
                    $LDAP_FirstName = "";
         
                    if (!empty($entries[$x]['givenname'][0])) {
                        $LDAP_FirstName = $entries[$x]['givenname'][0];
                        if ($LDAP_FirstName == "NULL") {
                            $LDAP_FirstName = "";
                        }
                    }
         
                    //Company
                    $LDAP_CompanyName = "";
         
                    if (!empty($entries[$x]['company'][0])) {
                        $LDAP_CompanyName = $entries[$x]['company'][0];
                        if ($LDAP_CompanyName == "NULL") {
                            $LDAP_CompanyName = "";
                        }
                    }
         
                    //Department
                    $LDAP_Department = "";
         
                    if (!empty($entries[$x]['department'][0])) {
                        $LDAP_Department = $entries[$x]['department'][0];
                        if ($LDAP_Department == "NULL") {
                            $LDAP_Department = "";
                        }
                    }
         
                    //Job Title
                    $LDAP_JobTitle = "";
         
                    if (!empty($entries[$x]['title'][0])) {
                        $LDAP_JobTitle = $entries[$x]['title'][0];
                        if ($LDAP_JobTitle == "NULL") {
                            $LDAP_JobTitle = "";
                        }
                    }
         
                    //IPPhone
                    $LDAP_OfficePhone = "";
         
                    if (!empty($entries[$x]['ipphone'][0])) {
                        $LDAP_OfficePhone = $entries[$x]['ipphone'][0];
                        if ($LDAP_OfficePhone == "NULL") {
                            $LDAP_OfficePhone = "";
                        }
                    }
         
                    //FAX Number
                    $LDAP_OfficeFax = "";
         
                    if (!empty($entries[$x]['facsimiletelephonenumber'][0])) {
                        $LDAP_OfficeFax = $entries[$x]['facsimiletelephonenumber'][0];
                        if ($LDAP_OfficeFax == "NULL") {
                            $LDAP_OfficeFax = "";
                        }
                    }
         
                    //Mobile Number
                    $LDAP_CellPhone = "";
         
                    if (!empty($entries[$x]['mobile'][0])) {
                        $LDAP_CellPhone = $entries[$x]['mobile'][0];
                        if ($LDAP_CellPhone == "NULL") {
                            $LDAP_CellPhone = "";
                        }
                    }
         
                    //Telephone Number
                    $LDAP_DDI = "";
         
                    if (!empty($entries[$x]['telephonenumber'][0])) {
                        $LDAP_DDI = $entries[$x]['telephonenumber'][0];
                        if ($LDAP_DDI == "NULL") {
                            $LDAP_DDI = "";
                        }
                    }
         
                    //Email address
                    $LDAP_InternetAddress = "";
         
                    if (!empty($entries[$x]['mail'][0])) {
                        $LDAP_InternetAddress = $entries[$x]['mail'][0];
                        if ($LDAP_InternetAddress == "NULL") {
                            $LDAP_InternetAddress = "";
                        }
                    }
         
                    //Home phone
                    $LDAP_HomePhone = "";
         
                    if (!empty($entries[$x]['homephone'][0])) {
                        $LDAP_HomePhone = $entries[$x]['homephone'][0];
                        if ($LDAP_HomePhone == "NULL") {
                            $LDAP_HomePhone = "";
                        }
                    }
         
                    echo "<tr><td><strong>" . $LDAP_samaccountname . "</strong></td><td>" . $LDAP_LastName . "</td><td>" . $LDAP_FirstName . "</td><td>" . $LDAP_CompanyName . "</td><td>" . $LDAP_Department . "</td><td>" . $LDAP_OfficePhone . "</td><td>" . $LDAP_OfficeFax . "</td><td>" . $LDAP_CellPhone . "</td><td>" . $LDAP_DDI . "</td><td>" . $LDAP_InternetAddress . "</td><td>" . $LDAP_HomePhone . "</td></tr>";
                } //END for loop
            } //END FALSE !== $result
         
            ldap_unbind($ldap_connection); // Clean up after ourselves.
            echo ("</table>"); //close the table
         
        } //END ldap_bind
    }
}
