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
$sortcolumn = 2;
?>
<a href="#faq-1" ><?php echo __('How Does Open-AudIT store it\'s data ?')?></a><br />
<a href="#faq-2" ><?php echo __('How do Users, Groups &amp; Systems work ?')?></a><br />
<a href="#faq-3" ><?php echo __('Columns in Reports &amp; Groups')?></a><br />
<a href="#faq-4" ><?php echo __('Printer Logic')?></a><br />
<br />
<br />
<br />
<form action="vars.php" method="post" class='niceforms'>
<div id="faq-1" >
<br />
<fieldset class='niceforms'>
<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('How Does Open-AudIT store it\'s data ?')?></span></legend>
Each system (computer, network device, printer, et al) has an entry in the "system" table.<br />
Each system (from the "system" table) has a "system_id" column.<br />
This value is unique - it's an auto incrementing id.<br />
A system is determined to be unique by a the table below.<br />
<br />
A system is audited and the result submitted to the server.<br />
The first table processed is the "system" table.<br />
The "system_id" is determined and passed (along with the other details) to each other section (table).<br />
Every table has two timestamp columns, "first_timestamp" and "timestamp".<br />
The "first_timestamp" value is populated whenever an insert occurs - hence this value reflects the first time an item was reported in the audit script.<br />
The "timestamp" value is inserted when an item is first seen, or updated when an item is seen in subsequent audit script(s).<br />
There is a "oa_audit_log" table that contains details of each time an audit is submitted (including timestamp).<br />
<br />
So, for an example - "hard_drive".<br />
The "system_id" is retrieved, along with the timestamp of the previous audit submission and the "status" column.<br />
For each entry in the hard_drive audit result, the database is queried.<br />
It checks for hard drive model, serial, index and size.<br />
These values vary according to the item being processed - see the relevent model PHP pages (in code_igniter/application/models/).<br />
If it gets a match on the above values, combined with the system_id, the current timestamp OR the previous timestamp, and a status of "production", then an existing entry exists for this piece of equipment.<br />
In the case of hard drives, it simply updates the timestamp to reflect the current audit timestamp.<br />
If it does not get a match, it does an insert of the relevant details.<br />
<br />
So, we can determine if something is currently installed - the timestamps match (on the system table and the relevant item table).<br />
We can determine when something was detected - the "first_timestamp".<br />
We can determine if something was installed after the initial audit - first timestamps will be different.<br />
We can determine if something is not currently installed, but previously was - the timestamp on the item is less than the timestamp on the system.<br />
We can determine the last time we detected an item - the timestamp on the item, when the timestamp is less than the current system timestamp.<br />
At any given point, we can determine what was on a system - by using the oa_audit_log table and selecting the relevant components based on timestamps.<br />
<br />
So, that's how we determine what's on or has been on a system.<br />
<br /><b><i>How do we create a system key?</i></b><br />
The order of creating a key to define a device as unique is below. When importing you MUST have one of the following (in order of preference): fqdn (which is the hostname and domain columns seperately - PHP will combine them), the IP Address or the Serial Number.<br />
If a computer is audited with an audit script, it will use a concatenation of the UUID and the hostname.<br />
If a computer is audited via Active Directory, it will use the FQDN in preference but if that is not available it will use the IP Address.<br />
Where possible, the first option will be chosen and where possible on subsequent audits, will be changed to the first option.<br />
<table cellspacing="1" class="tablesorter" width="100%">
	<tr>
		<td></td><td><b>computer</b></td><td><b>network printer</b></td><td><b>local printer</b></td><td><b>network device</b></td><td><b>non-network device</b></td>
	</tr>
	<tr>
		<td><b>audit script</b></td><td>uuid + hostname</td><td>fqdn, ip address</td><td>hostname + deviceID</td><td>-</td><td>-</td>
	</tr>
	<tr>
		<td><b>active directory</b></td><td>fqdn, ip address</td><td>fqdn, ip address</td><td>-</td><td>-</td><td>-</td>
	</tr>
	<tr>
		<td><b>nmap</b></td><td>fqdn, ip address</td><td>fqdn, ip address</td><td>-</td><td>fqdn, ip address</td><td>-</td>
	</tr>
	<tr>
		<td><b>snmp</b></td><td>fqdn, ip address, type + serial</td><td>fqdn, ip address, type + serial</td><td>-</td><td>fqdn, ip address, type + serial</td><td>-</td>
	</tr>
	<tr>
		<td><b>spreadsheet</b></td><td>fqdn, ip address, type + serial</td><td>fqdn, ip address, type + serial</td><td>-</td><td>fqdn, ip address, type + serial</td><td>type + serial</td>
	</tr>
	<tr>
		<td><b>html form</b></td><td>fqdn, ip address, type + serial</td><td>fqdn, ip address, type + serial</td><td>-</td><td>fqdn, ip address, type + serial</td><td>type + serial</td>
	</tr>
</table>
<b><i>How do we match a system key?</i></b><br />
The order of preference to match one system against another is as follows:<br />
Obviously if we have the system_id, we simply match on that first. <br />
If we don't have the system_id, in the model m_system.php is a function called find_system. This will attempt to:<br />
<ol>
	<li>Create a system key using UUID &amp; hostname if possible and match</li>
	<li>Create a system key using the fqdn if it exists and match</li>
	<li>Create a system key using the hostname concatenated with the domain (to make a fqdn) and match</li>
	<li>Create a system key using the ip address and match</li>
	<li>Create a system key using serial number and match</li>
	<li>Check if the MAC Address exists in the sys_hw_network_card_ip table and match</li>
	<li>Check if the IP Address exists in the sys_hw_network_card_ip table and match</li>
	<li>Check if the serial and type exist in the system table and match</li>
	<li>Check if the serial and type exists in the man_serial field in the system table and match</li>
	<li>Check if the hostname is in the system table and match</li>
</ol>

<b><i>What do we use for a name?</i></b><br />
Where possible, the first option will be chosen and where possible on subsequent audits, will be changed to the first option.<br />
<table cellspacing="1" class="tablesorter" width="100%">
	<tr>
		<td><b>computer</b></td><td><b>network printer</b></td><td><b>local printer</b></td><td><b>network device</b></td><td><b>non-network device</b></td>
	</tr>
	<tr>
		<td>hostname, ip address</td><td>hostname, sysname, ip address</td><td>host + model</td><td>hostname, sysname, ip address</td><td>description, serial</td>
	</tr>
</table>
</fieldset>
<br />
<br />
<br />
<div id="faq-2" >
<br />
<fieldset class='niceforms'>
<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('How do Users, Groups &amp; Systems work ?')?></span></legend>
Each User has an entry in the oa_user table.<br />
Each Group has an entry in the oa_group table.<br />
Each System has an entry in the system table.<br />
<br />
A group uses a SQL query to determine the systems that belong to it.<br />
<br />
Each system has an entry in oa_group_system noting it's system_id and the group_id from the oa_group table.<br /><br />
Thus, a system can belong to more than one group and one group can have more than one system.<br />
<br />
Each user has an entry in oa_group_user noting it's user_id and the group_id from oa_group.<br />
Also stored is the level of access that user has for that group.<br />
0 - no access<br />
3 - view only in "list" type screens<br />
5 - view basic individual system details<br />
7 - view "sensitive" details about a system<br />
10 - edit system details and custom data<br />
<br />
So, if a user wishes to view a group, it is first checked that his group_access_level is at least 3.<br />
The user_id is known (cookie). <br />
The group_id is known (in the url).<br />
If it is, the group is listed as per the details from oa_group.<br />
If it is not (ie - the user has a group_access_level of 0 or null), the user is redirected to the "list all groups" type page (the Home page).<br />
<br />
The same principle applies to individual systems.<br />
The user_id is known.<br />
The system_id is known.<br />
They are combined and the group_access_level is determined, hence access granted or denied.<br />
The highest group_access_level is used - not the lowest.<br />
Thus, if a system belongs to more than one group, but a user has differing levels of access to those groups, the highest level will be applied and used.<br />
</fieldset>
</div>
<br />
<br />
<br />
<div id="faq-3" >
<br />
<fieldset class='niceforms'>
<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Columns in Reports &amp; Groups')?></span></legend>
The oa_group_column and the oa_report_column tables operate the same. They are used to create a table style output of the report or group contents.<br /><br />
The oa_group_column table contents are optional for a Group. If they are not present, the report defaults to using the group_id = 0 rows.<br /><br />
The oa_report_column table does need to be populated for each report - there are no defaults.<br /><br />
Any variables referenced in 'column_variable' or 'column_secondary' MUST be selected in the oa_group.group_display_sql or oa_report.report_sql SQL statements. Those statements populate the PHP $query() array.<br /><br />
It is probably best to examine the <i>admin_db/export_table_to_html/oa_group_column</i> and <i>admin_db/export_table_to_html/oa_report_column</i> pages, when reading the below.<br /><br />
The fields are used as follows:<br /><br />
column_id - simply the incrementing unique id.<br /><br />
group_id / report_id - identifies which group or report the column belongs to, a foreign key to the oa_group or oa_report table.<br /><br />
column_order - on the page, reading left to right, which position should this field take. Begins at 0. Should be unique for each field in a report.<br /><br />
column_name - The name as displayed on the generated report.<br /><br />
column_variable - the name of the variable in the returned SQL query. In PHP this exists in the $query() array.<br /><br />
column_type - one of '', 'link', 'image', 'ip_address', 'text', 'timestamp' or 'url'. These are further detailed below.<br />
<ul>
<li>'' - Outputs nothing.<br />&nbsp;</li>
<li>'link' - This outputs a text link to an internal (to OAv2) page. The $group_id is able to be used as part of the 'group_link' field when a column type is of type 'link'.<br />&nbsp;</li>
<li>'image' - uses the column_variable to store the variable that returns an image name and is used to display an image. The column_secondary is used as alt/title text. The value should be such 'something' and the application will reformat it to 'url_path_to_images/16_something.png'. This will take the users theme into account and any sizing needed to be performed. Sizes by default are 16 and 48 pixels square.<br />&nbsp;</li>
<li>'ip_address' - will be formatted such to remove any extraneous 0's in the address (OAv2 stores IPs with padded 0's in the DB for sorting). Outputs the padded IP in a "hidden" format, then the formatted IP. This way, the IPs will sort correctly.<br />&nbsp;</li>
<li>'text' - simply outputs the data as returned by column_variable. In the special case of "tag" being stored in this field, a column is generated displaying an image to "rollover" and display the other groups a system belongs to.<br />&nbsp;</li>
<li>'timestamp' - Not presently used. Outputs as per 'text' type, but with no special 'tag' option.<br />&nbsp;</li>
<li>'url' - There are a couple of ways to use this. This outputs an image with a link.<ul>
  <li>If the column_variable is populated, this variable will be used to determine the href attribute of the link.</li>
  <li>If the column_variable is not populated and the column_link variable is populated, the value of column_link will be used as the href.</li>
  <li>The column_secondary value is appended to the end of the href (as previously generated).</li>
  <li>The column_ternary value (if populated) is used to replace the default image.</li>
  <li>When using a column type of 'url', the column_variable and column_link fields are mutually exclusive. Populating both will result in an undesirible result.</li></ul>
</ul>
column_link - Used to store the link to an internal report (for 'link' type) - internal pages only. Used in conjunction with column_secondary to generate a text link. When used with a 'url' type, it is the actual external url. If the column_secondary variable is present, this will be appended.<br /><br />
column_secondary - A second place of storage. Used for a second variable name.<br /><br />
column_ternary - A third place of storage. Used only (at present)  as a name for an icon on a 'url' type field (if the default is not desired).<br /><br />
The default oa_group_columns are as below:<br />
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr><th>column_id</th><th>group_id</th><th>column_order</th><th>column_name</th><th>column_variable</th><th>column_type</th><th>column_link</th><th>column_secondary</th><th>column_ternary</th></tr>
	</thead>
	<tbody>
		<tr><td>1</td><td>0</td><td>1</td><td>Hostname</td><td>hostname</td><td>link</td><td>main/system_display/</td><td>system_id</td><td></td></tr>
		<tr><td>2</td><td>0</td><td>2</td><td>Description</td><td>man_description</td><td>text</td><td></td><td></td><td></td></tr>
		<tr><td>3</td><td>0</td><td>3</td><td>IP Address</td><td>man_ip_address</td><td>ip_address</td><td></td><td></td><td></td></tr>
		<tr><td>4</td><td>0</td><td>4</td><td>Type</td><td>icon</td><td>image</td><td></td><td>man_os_family</td><td></td></tr>
		<tr><td>5</td><td>0</td><td>5</td><td>OS / Device</td><td>man_os_name</td><td>text</td><td></td><td></td><td></td></tr>
		<tr><td>6</td><td>0</td><td>6</td><td>Tags</td><td>tag</td><td>text</td><td></td><td></td><td></td></tr>
	</tbody>
</table>
<br /><br />
The columns for the "Installed Software" report are below:<br />
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr><th>column_id</th><th>group_id</th><th>column_order</th><th>column_name</th><th>column_variable</th><th>column_type</th><th>column_link</th><th>column_secondary</th><th>column_ternary</th></tr>
	</thead>
	<tbody>
		<tr><td>7</td><td>14</td><td>0</td><td>Package Name</td><td>software_name</td><td>link</td><td>/report/specific_software/$group_id/</td><td>software_id</td><td></td></tr>
		<tr><td>8</td><td>14</td><td>1</td><td>Type</td><td>software_comment</td><td>text</td><td></td><td></td><td></td></tr>
		<tr><td>9</td><td>14</td><td>2</td><td>Installs</td><td>software_count</td><td>text</td><td></td><td></td><td></td></tr>
		<tr><td>10</td><td>14</td><td>3</td><td>Contact</td><td>software_url</td><td>url</td><td></td><td></td><td></td></tr>
		<tr><td>11</td><td>14</td><td>4</td><td>Version</td><td>software_version</td><td>text</td><td></td><td></td><td></td></tr>
		<tr><td>12</td><td>14</td><td>5</td><td>Publisher</td><td>software_publisher</td><td>text</td><td></td><td></td><td></td></tr>
		<tr><td>13</td><td>14</td><td>6</td><td>Google Search</td><td></td><td>url</td><td>https://encrypted.google.com/search?q=</td><td>software_name</td><td>google</td></tr>
	</tbody>
</table>

</fieldset>
</div>
<br />
<br />
<br />
<div id="faq-4" >
<br />
<fieldset class='niceforms'>
<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Printer Logic')?></span></legend>
We attempt to record only actual hardware printers. <br />
We try to filter out such things as "PDF Printers", "XPS Document Writers", etc, etc (these may be stored in the software table at a later stage).<br />
<br />
Network Printers<br />
If a printer has an IP address, it is a network printer.<br />
<br />
Local Printers<br />
If a printer does not have an IP address, it is a local printer.<br />
If we have a local printer, the PHP processing associates it in the system table with the system_id of the computer.
This is stored in the 'linked_sys' colmun.<br />
<br />
The system_key<br />
All devices should have a unique "system_key" field  in the system table. For printers, this is calculated such:<br />
If the printer has an IP Address (and is therefore a network printer), an attempt to determine the FQDN is used, if this fails the IP address is used.
This is the same as other network devices (think switches, routers, etc).<br />
If printer does not have an IP address, it uses the hostname of the attached computer, concatenated with the DeviceID (taken from the attached computer). <br />
The DeviceID has spaces replaced with underscores. The two fields are joined with an underscore.<br />
<br />
Printers are stored in the system table with the following attributes:<br />
system_id - auto assigned (incrementing).<br />
system_key - as above.<br />
uuid - the printer device_id (assuming printer is submitted via an audited computer).<br />
hostname - the printer network hostname (if it has one).<br />
description - the printer description (assuming printer is submitted via an audited computer).<br />
type - set to Printer.<br />
icon - set to printer.<br />
linked_sys - if it's a local printer, the system_id of the attached computer is used.<br />
serial - the printer serial (assuming printer is submitted via an audited computer).<br />
model - the printer model (assuming printer is submitted via an audited computer).<br />
manufacturer - the printer manufacturer, edited in the audit script (assuming printer is submitted via an audited computer).<br />
printer_port_name - assuming printer is submitted via an audited computer.<br />
printer_shared - assuming printer is submitted via an audited computer.<br />
printer_shared_name - assuming printer is submitted via an audited computer.<br />
man_status - if it's a new printer, this is initially set to the normal (non "man_") value.<br />
man_environment - set to production by default.<br />
man_description - if it's a new printer, this is initially set to the normal (non "man_") value.<br />
man_type - if it's a new printer, this is initially set to the normal (non "man_") value.<br />
man_ip_address - if it's a new printer, this is initially set to the normal (non "man_") value.<br />
man_model - if it's a new printer, this is initially set to the normal (non "man_") value.<br />
man_manufacturer - if it's a new printer, this is initially set to the normal (non "man_") value.<br />
man_owner - not automatically populated. Can be set via web interface or bulk upload.<br />
man_org_id - not automatically populated. Can be set via web interface or bulk upload.<br />
man_location_id - not automatically populated. Can be set via web interface or bulk upload.<br />
man_location_level - not automatically populated. Can be set via web interface or bulk upload.
<br />
man_location_suite - not automatically populated. Can be set via web interface or bulk upload.
<br />
man_location_room - not automatically populated. Can be set via web interface or bulk upload.<br />
man_serial - if it's a new printer, this is initially set to the normal (non "man_") value.<br />
man_asset_number - not automatically populated. Can be set via web interface or bulk upload.<br />
man_switch_id - not automatically populated. Can be set via web interface or bulk upload.<br />
man_switch_port - not automatically populated. Can be set via web interface or bulk upload.<br />
man_ethernet_socket - not automatically populated. Can be set via web interface or bulk upload.<br />
man_wall_port - not automatically populated. Can be set via web interface or bulk upload.<br />
man_picture - not automatically populated. Can be set via web interface or bulk upload.<br />
</fieldset>






</form>
