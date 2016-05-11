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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$files = '';
if (php_uname('s') == 'Windows NT') {
    $files = 'c:%5Cxampplite%5Copen-audit%5Cother%5Clog_system.log,%0A
c:%5Comk%5Clog%5Coae.log,%0A
c:%5Comk%5Clog%5CopCommon.log,%0A
c:%5Comk%5Clog%5CopDaemon.log,%0A
c:%5Comk%5Clog%5Cperformance.log,%0A
c:%5Comk%5Cconf%5CopCommon.nmis';
}
if (php_uname('s') == 'Linux') {
    $files = '/usr/local/open-audit/other/log_system.log,%0A
/usr/local/omk/log/oae.log,%0A
/usr/local/omk/log/opCommon.log,%0A
/usr/local/omk/log/opDaemon.log,%0A
/usr/local/omk/log/performance.log,%0A
/usr/local/omk/conf/opCommon.nmis';
}

$email = "mailto:open-audit@opmantek.com?subject=Support Page Result for Open-AudIT&body=ISSUE%0APlease describe the issue you are having here:%0A%0AFILES%0APlease attach the following files from your Open-AudIT Server (these are available on the Help -> Support page inside Open-AudIT):%0A".$files."%0A%0AHINTS";
foreach ($hints as $key => $value) {
    $email .= "%0A".$key." = ".str_replace("'", "", $value)."%0A";
}
$email .= "%0A%0ADATA";
foreach ($data as $key => $value) {
    $email .= "%0A".$key." = ".str_replace("'", "", $value);
}
?>


<form action="vars.php" method="post" class='niceforms'>
	<fieldset id="about" class='niceforms'>
		<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Support Data')?></span></legend>
		To email this data to Opmantek for assistance, <a href='<?php echo $email; ?>' style='color:red; text-decoration:underline;'>CLICK HERE</a>. This will open an email in your mail client and will not automatically send the data to opmantek. You should review the data and add your issue to the email.<br /><br />

		If you are emailing this result to Opmantek, please download the files below and add them as attachments to the email (NOTE: you need to be an Admin level user in Open-AudIT to download these files): <a style="color:blue; text-decoration:underline;" href="../admin/download_file/1">log_system.log</a>, <a style="color:blue; text-decoration:underline;" href="../admin/download_file/2">oae.log</a>, <a style="color:blue; text-decoration:underline;" href="../admin/download_file/3">opCommon.log</a>, <a style="color:blue; text-decoration:underline;" href="../admin/download_file/4">opDaemon.log</a>, <a style="color:blue; text-decoration:underline;" href="../admin/download_file/5">performance.log</a>, 		<a style="color:blue; text-decoration:underline;" href="../admin/download_file/6">opCommon.nmis</a>.<br /><br />

		<?php
        if (count($hints) > 0) {
            foreach ($hints as $key => $value) {
                echo "<h3>".$key."</h3>".$value."<br /><br />\n";
            }
        }
        echo "<pre>\n\nDATA\n----\n";
        print_r($data);
        echo "<pre>\n\nSESSION USERDATA\n----\n";
        print_r($this->session->userdata);
        echo "<pre>\n\nINTERNAL CONFIG\n----\n";
        $this->config->config['default_snmp_community'] = '******';
        $this->config->config['default_ssh_password'] = '******';
        $this->config->config['default_windows_password'] = '******';
        $this->config->config['default_ipmi_password'] = '******';
        print_r($this->config->config);
        ?>
		</pre>
	</fieldset>
</form>
