<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use stdClass;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.6.5
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
class Dictionary extends BaseController
{
    public function dictionary()
    {

        echo "<pre>\n";
        $start = microtime(true);
        log_message('info', "START: " . $start);
        $LANG = array();
        $config = new \Config\OpenAudit();
        helper('utility');

        // $string = 'r noch in Open-AudIT.</p>> Prüfung <strong>if</strong> ein';
        // echo $string . "\n";
        // #$string = preg_replace("/>>[a-zA-Z]/", '/><$0/', $string);
        // $string = str_replace('>> ', '>', $string);
        // echo $string . "\n";
        // exit;

        log_message('info', "Parsing: " . (microtime(true) - $start));
        // Logon page
        $LANG["<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself."]="<br><strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.";

        $LANG['You may want to copy and paste this URL in an email to your staff.'] = 'You may want to copy and paste this URL in an email to your staff.';

        // Manual items from template functions
        $LANG['About'] = 'About';
        $LANG['AD Group'] = 'AD Group';
        $LANG['Add Device'] = 'Add Device';
        $LANG['Add'] = 'Add';
        $LANG['Auth'] = 'Authorization';
        $LANG['Authentication Passphrase'] = 'Authentication Passphrase';
        $LANG['Cancel'] = 'Cancel';
        $LANG['Close'] = 'Close';
        $LANG['Components (All Devices)'] = 'Components (All Devices)';
        $LANG['Context Engine ID'] = 'Context Engine ID';
        $LANG['Create'] = 'Create';
        $LANG['Credentials Client ID'] = 'Credentials Client ID';
        $LANG['Credentials Subscription ID'] = 'Credentials Subscription ID';
        $LANG['Credentials Tenant ID'] = 'Credentials Tenant ID';
        $LANG['Default Items'] = 'Default Items';
        $LANG['Delete'] = 'Delete';
        $LANG['Details'] = 'Details';
        $LANG['Device ID'] = 'Device ID';
        $LANG['Device Types'] = 'Device Types';
        $LANG['Devices'] = 'Devices';
        $LANG['Download'] = 'Download';
        $LANG['Edit'] = 'Edit';
        $LANG['Execute'] = 'Execute';
        $LANG['Export'] = 'Export';
        $LANG['Fields'] = 'Fields';
        $LANG['Help'] = 'Help';
        $LANG['Home'] = 'Home';
        $LANG['Import'] = 'Import';
        $LANG['IP'] = 'IP';
        $LANG['List'] = 'List';
        $LANG['Manage'] = 'Manage';
        $LANG['Notes'] = 'Notes';
        $LANG['Organisation'] = 'Organisation';
        $LANG['Organisations'] = 'Organisations';
        $LANG['OS Families'] = 'OS Families';
        $LANG['Password'] = 'Password';
        $LANG['Privacy Passphrase'] = 'Privacy Passphrase';
        $LANG['Racks'] = 'Racks';
        $LANG['Resources'] = 'Resources';
        $LANG['Report'] = 'Report';
        $LANG['Reports'] = 'Reports';
        $LANG['Reset'] = 'Reset';
        $LANG['Scan Options ID'] = 'Scan Options ID';
        $LANG['Show All'] = 'Show All';
        $LANG['SSH Key'] = 'SSH Key';
        $LANG['Submit'] = 'Submit';
        $LANG['Sudo Password'] = 'Sudo Password';
        $LANG['Use SNMP'] = 'Use SNMP';
        $LANG['Use SSH'] = 'Use SSH';
        $LANG['Use WMI'] = 'Use WMI';
        $LANG['Username'] = 'Username';
        $LANG['View All'] = 'View All';
        $LANG['View'] = 'View';
        $LANG['Widget'] = 'Widget';


        $LANG[' is now supported with a language file. To change your user to use this language, click '] = ' is now supported with a language file. To change your user to use this language, click ';
        $LANG['here'] = 'here';

        $LANG['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.';

        // DiscoveriesModel :: dictionary->options
        $LANG['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>';


        $countries = codeToCountry();
        foreach ($countries as $key => $value) {
            $LANG[$value] = str_replace("'", '', $value);
        }

        // print_r($LANG);
        // exit;

        $db = db_connect() or die("Cannot establish a database connection.");
        $sql = "SHOW TABLES";
        $results = $db->query($sql)->getResult();

        foreach ($results as $result) {

            $LANG[str_replace("'", "\\'", $result->Tables_in_openaudit)] = $this->title($result->Tables_in_openaudit);
            $LANG[$this->title($result->Tables_in_openaudit)] = $this->title($result->Tables_in_openaudit);

            $fields = $db->getFieldNames($result->Tables_in_openaudit);
            foreach ($fields as $field) {
                $LANG[$field] = $this->title($field);
                $LANG[$this->title($field)] = $this->title($field);
            }
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'auth' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'benchmarks_log' AND COLUMN_NAME = 'severity'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'change_log' AND COLUMN_NAME = 'db_action'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'change_log' AND COLUMN_NAME = 'change_type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'cloud_log' AND COLUMN_NAME = 'severity_text'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'clouds' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'cluster' AND COLUMN_NAME = 'role'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'clusters' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'clusters' AND COLUMN_NAME = 'purpose'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'clusters' AND COLUMN_NAME = 'status'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'clusters' AND COLUMN_NAME = 'configuration'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'clusters' AND COLUMN_NAME = 'scaling'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'collectors' AND COLUMN_NAME = 'status'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'collectors' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'discovery_log' AND COLUMN_NAME = 'severity_text'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'image' AND COLUMN_NAME = 'orientation'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'integrations' AND COLUMN_NAME = 'select_external_type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'integrations' AND COLUMN_NAME = 'select_internal_type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'integrations_log' AND COLUMN_NAME = 'severity_text'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'locations' AND COLUMN_NAME = 'sub_type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'networks' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'networks' AND COLUMN_NAME = 'admin_status'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'news' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'packages' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'packages' AND COLUMN_NAME = 'os'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'partition' AND COLUMN_NAME = 'mount_type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'rack_devices' AND COLUMN_NAME = 'orientation'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'standards_results' AND COLUMN_NAME = 'maturity_level'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'standards_results' AND COLUMN_NAME = 'result'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }


        $sql = "SELECT SUBSTRING(COLUMN_TYPE,5) AS `lang` FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'openaudit' AND TABLE_NAME = 'widgets' AND COLUMN_NAME = 'type'";
        $results = $db->query($sql)->getResult();
        foreach ($results as $result) {
            $LANG = array_merge($LANG, $this->enumTheEnum($result->lang));
        }

        foreach ($LANG as $key => $value) {
            if (stripos($value, "'") !== false) {
                echo 'DATABASE: ' . $value;
                exit;
            }
        }

        $LANG['Welcome Dashboard'] = 'Welcome Dashboard';

        $enum = "('yes','no','true','false')";
        $LANG = array_merge($LANG, $this->enumTheEnum($enum));

        $dictionary = new stdCLass();
        $dictionary->id = 'The identifier column (integer) in the database (read only).';
        $dictionary->name = 'The name given to this item. Ideally it should be unique.';
        $dictionary->org_id = 'The Organisation that owns this item. Links to <code>orgs.id</code>.';
        $dictionary->description = 'Your description of this item.';
        $dictionary->options = 'A JSON object containing collection specific options.';
        $dictionary->edited_by = 'The name of the user who last changed or added this item (read only).';
        $dictionary->edited_date = 'The date this item was changed or added (read only). NOTE - This is the timestamp from the server.';
        $dictionary->device_id = 'The id of the linked device. Links to <code>devices.id</code>';
        foreach ($dictionary as $key => $value) {
            $LANG[$value] = $value;
        }

        $files = scandir('/usr/local/open-audit/app/Models');
        foreach ($files as $file) {
            if (!strpos($file, 'Model.php') or $file === 'BaseModel.php' or $file === 'LogonModel.php' or $file === 'NewsModel.php' or $file === 'SearchModel.php') {
                continue;
            }
            $model = str_replace('.php', '', $file);
            log_message('info', 'Model: ' . $model);
            $myModel = model($model);
            log_message('info', 'ModelStart: ' . $model);
            $dictionary = $myModel->dictionary();
            log_message('info', 'Modeldictionary: ' . $model);
            foreach ($dictionary->columns as $key => $value) {
                if (is_string($value)) {
                    $LANG[$value] = $value;
                } else if (is_object($value)) {
                    foreach ($value as $key2 => $value2) {
                        $LANG[$value2] = $value2;
                    }
                }
            }
            if (!empty($dictionary->about)) {
                $LANG[$dictionary->about] = $dictionary->about;
            }
            if (!empty($dictionary->notes) and $file !== 'DashboardsModel.php') {
                $LANG[$dictionary->notes] = $dictionary->notes;
            }
            log_message('info', 'ModelEnd: ' . $model);
        }

        // foreach ($LANG as $key => $value) {
        //     echo '$GLOBALS[\'lang\'][\'' . $key . '\'] = \'' . $value . '\'' . ";\n";
        // }
        // exit;

        foreach ($LANG as $key => $value) {
            if (stripos($value, "'") !== false) {
                echo 'MODELS: ' . $value;
                exit;
            }
        }

        $lines = `grep "__('" /usr/local/open-audit/app/Views/*.php`;
        foreach (explode("\n", $lines) as $line) {
            $explode = explode('__(', $line);
            if (!empty($explode[1])) {
                $explode2 = explode("'", $explode[1]);
                $line = $explode2[1];
                if (strpos($line, "'") !== false) {
                    echo $line . "\n\n";
                }
                $line = str_replace("\n", "", $line);
                $line = str_replace('\\', '\\\\', $line);
                $line = str_replace('"', '\"', $line);
                $line = str_replace("'", "\'", $line);
                $LANG[$line] = $line;
            }
        }

        asort($LANG);

        // foreach ($LANG as $key => $value) {
        //     echo '$GLOBALS[\'lang\'][\'' . $key . '\'] = \'' . $value . '\'' . ";\n";
        // }

        foreach ($LANG as $key => $value) {
            if (stripos($value, "'") !== false) {
                echo 'VIEWS: ' . $value;
                exit;
            }
        }

        log_message('info', "Parsing took: " . (microtime(true) - $start));

        set_time_limit(3000);
        $opt = new stdClass();
        $opt->source = 'en';
        $opt->target = 'de';
        $opt->format = 'html';
        $opt->url = 'http://localhost:5000/translate';

        $ch = curl_init($opt->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        foreach ($LANG as $key => $value) {
            $post = [
                'q' => $value,
                'source' => $opt->source,
                'target'   => $opt->target,
                'format'   => $opt->format,
            ];
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $response = curl_exec($ch);
            $body = @json_decode((string)$response);
            if (!empty($body->translatedText)) {
                // echo '$GLOBALS["lang"]["' . $key . '"] = "' . $body->translatedText . '";' . "\n";
                $LANG[$key] = $body->translatedText;
            }
            unset($response);
            unset($body);
        }

        log_message('info', "Translating took: " . (microtime(true) - $start));

        foreach ($LANG as $key => $value) {
            $LANG[$key] = str_replace('<br />br />>/p>', '<br><br></p>', $value);
            $LANG[$key] = str_replace('<br>>br>>/p>', '<br><br></p>', $value);
            $LANG[$key] = str_replace('<br>>strong>', '<br><strong>', $value);
            $LANG[$key] = str_replace('</strong>>:', '<strong>:', $value);
            $LANG[$key] = str_replace('</strong>>', '</strong>', $value);
            $LANG[$key] = str_replace('>>/strong>', '></strong>', $value);
            $LANG[$key] = str_replace('>>strong>', '><strong>', $value);
            $LANG[$key] = str_replace('>>br ', '<br ', $value);
            $LANG[$key] = str_replace('<br />br />><strong>', '<br />br /><strong>', $value);
            $LANG[$key] = str_replace('<br />>em>Linux</em>', '<br /><em>Linux</em>', $value);
        }

        // Weird one this
        // Comes out as ">=================... LOTS OF = ...==========" in the DE tralsnation
        $LANG['>='] = '>=';

        // German specific
        if ($opt->target === 'de') {
            $LANG['Import CSV'] = 'Einfuhr CSV';
            $LANG['Import JSON'] = 'Einfuhr JSON';
            $LANG['<p>A location is a physical address that can have devices associated with it.<br><br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br><br></p>'] = 'Ein Standort ist eine physische Adresse, die Geräte mit ihr verbunden haben kann.<br><br>Sie können es Koordinaten (lat/long) zuordnen und wenn Geräte zugewiesen sind, erscheint der Standort auf der Open-AudIT Enterprise map.<br><br></p>';
            $LANG['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It doesn\t matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agents lassen Sie PCs ohne Entdeckung testen. Installieren Sie den Agenten und es wird jeden Tag mit dem Server Check-in und Audit selbst. Es spielt keine Rolle, ob Ihre Computer Firewall sind, Audit-Daten erscheinen immer noch in Open-AudIT.</p>p> Prüfung <strong>if</strong> ein Agent sollte Aktionen durchführen, alle drei Tests müssen passieren (wenn der Test eingestellt ist). <strong>die</strong> Maßnahmen ergriffen werden.</p>';
        }

        unset($LANG['<']);
        unset($LANG['=<']);
        unset($LANG['==']);
        unset($LANG['>']);
        unset($LANG['>=']);
        unset($LANG['!=']);
        unset($LANG['<p><br> <br></p>']);

        foreach ($countries as $key => $value) {
            $LANG[$key] = $key;
        }

        log_message('info', "Correcting took: " . (microtime(true) - $start));
        echo "<?php\n";
        foreach ($LANG as $key => $value) {
            if (empty($key)) {
                continue;
            }
            echo '$GLOBALS["lang"][\'' . $key . '\'] = \'' . str_replace("'", "\'", $value) . '\';' . "\n\n";
        }
    }

    function title($name) {
        $name = ($name === 'db_action') ? 'Database Action' : $name;
        $name = ($name === 'db_column') ? 'Database Column' : $name;
        $name = ($name === 'db_row') ? 'Database Row' : $name;
        $name = ($name === 'db_table') ? 'Database Table' : $name;
        $name = str_replace('.', ' ', $name);
        $name = str_replace('_', ' ', $name);
        $name = ucwords($name);
        $name = ($name === 'Ip') ? 'IP' : $name;
        $name = ($name === 'Id') ? 'ID' : $name;
        $name = ($name === 'Uuid') ? 'UUID' : $name;
        #$name = ($name === 'Device Id') ? 'Device ID' : $name;
        $name = ($name === 'Cli Config') ? 'CLI Config' : $name;
        $name = str_replace(' Id ', ' ID ', $name);
        $name = str_replace(' Ip', ' IP', $name);
        $name = str_replace("'", "\\'", $name);
        $pos = strrpos($name, ' Id');
        if ($pos and $pos === strlen($name) - 3) {
            $name = substr_replace($name, ' ID', $pos);
        }
        return $name;
    }

    function enumTheEnum($string) {
        if (empty($string)) {
            log_message('error', '');
            return array();
        }
        $array = array();
        $string = ltrim($string, "(");
        $string = rtrim($string, ")");
        $string = '[' . $string . ']';
        $string = str_replace("'", '"', $string);
        $json = @json_decode($string);
        if (!empty($json)) {
            foreach ($json as $lang) {
                $array[str_replace("'", "\\'", $lang)] = str_replace("'", "\\'", $lang);
            }
        } else {
            log_message('error', 'Could not parse to JSON');
            log_message('error', $string);
        }
        return $array;
    }
}
