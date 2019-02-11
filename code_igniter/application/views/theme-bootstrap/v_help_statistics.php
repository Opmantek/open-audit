<?php
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
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.4.0
* @link      http://www.open-audit.org
 */
if (php_uname('s') == "Windows NT") {
    exec("echo. |WMIC OS Get Caption", $output);
    if (isset($output[1])) {
        $operating_system = $output[1];
    } else {
        $operating_system = "unknown (You must run Apache as an administrator on Windows to determine this)";
    }
} else {
    $operating_system = php_uname('s');
}
?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("About"); ?></h3></div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                You are running version <?php echo $this->config->item('display_version'); ?> of Open-AudIT.<br />
                Your Host is: <?php echo php_uname('n'); ?>, and it's OS is <?php echo $operating_system; ?>.<br />
                Your database platform is <?php echo $this->db->platform()." (version ".$this->db->version().")"; ?>.<br />
                Your web server is <?php echo getenv("SERVER_SOFTWARE"); ?> .<br />
                Your PHP version is <?php echo phpversion(); ?> and it's current time is <?php echo $this->config->config['timestamp']; ?>.<br /><br />
                <?php
                if (!extension_loaded('snmp')) {
                    echo "<i>You do not have the PHP SNMP extension installed. This extension is highly recommended.</i><br />";
                }
                if (!extension_loaded('mbstring')) {
                    echo "<i>You do not have the PHP MBString extension installed. This extension is required.</i><br />";
                }
                ?>

                <br /><br />
                Open-AudIT is :
                <ul>
                    <li>Licensed under with GNU AGPL.</li>
                    <li>Written in the PHP scripting language.</li>
                    <li>Using the CodeIgniter PHP Framework.</li>
                </ul>
                <br />
                Some other technologies Open-AudIT uses are:
                <ul>
                    <li>jQuery javascript framework</li>
                    <li>MySQL - our default database</li>
                    <li>Apache - our default webserver</li>
                    <li>xHTML W3C standards</li>
                </ul>
                Please visit the homepage at <a href="http://www.open-audit.org" style="color: blue;">http://www.open-audit.org</a>, and don't be shy to sign up to the forums.<br />
                Consulting, implementation and other services are available through <a href="https://opmantek.com" style="color: blue;">Opmantek</a>.<br /><br />
                We hope you find Open-AudIT as useful as we do.<br /><br /><br />
            </div>
        </div>
        <div class="row">
            <table class="table">
                <tbody>
                    <tr>
                        <td style="vertical-align: middle;"><a href="http://www.fsf.org/licensing/licenses/agpl.html"><img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-agpl.png' style='width:120px' alt=''/></a></td>
                        <td style="vertical-align: middle;"><a href="http://www.php.net"><img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-php.png' style='width:120px' alt=''/></a></td>
                        <td style="vertical-align: middle;"><a href="http://www.codeigniter.com"><img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-code_igniter.png' style='width:120px' alt=''/></a></td>
                        <td style="vertical-align: middle;"><a href="http://jquery.com/"><img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-jquery.png' style='width:120px' alt=''/></a></td>
                        <td style="vertical-align: middle;"><a href="http://www.w3.org/"><img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-w3c.png' style='width:120px' alt=''/></a></td>
                        <td style="vertical-align: middle;"><a href="http://mapicons.nicolasmollet.com/"><img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-miclogo-88x31.gif' style='width:120px' alt=''/></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>