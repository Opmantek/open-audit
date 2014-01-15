<?php 
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
 * @version 1.1.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<form action="vars.php" method="post" class="niceforms">
<div id="i1" >
	<br />
	<fieldset class="niceforms">
		<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Importing Devices ?')?></span></legend>
	When importing devices using an Excel spreadsheet, it is best to use the templates provided in /other/imports.<br />
	Some templates can be used for importing multiple device types. For example the "import_phones.xls" template can be used for: 
	3g modems, cell phones, ip phones, mobile modems, phones, satellite phones and smart phones.<br />
	The columns in the templates are coloured to reflect the following:<br />
	<span style="color:red;">RED</span> columns are for attributes that are mandatory and have to be unique.<br />
	<span style="color:blue;">BLUE</span> columns are where the attribute is mandatory but not necessarily unique.<br />
	<span style="color:black;">BLACK</span> columns are for optional items.<br />
	Naturally the more columns you can complete, the better your datastore will be.<br />
	These items (once imported) can be reported on and changed via the web interface. You can also export them via a Report.<br />
	Device Types per supplied spreadsheets are:<br />
	<b>import_phones.xls</b> - 3g modem, cell phone, ip phone, mobile modem, phone, satellite phone, smart phone.<br />
	<b>import_access_tokens.xls</b> - Access tokens like RSA hardware keys.<br />
	<b>import_computers.xls</b> - Computers.<br />
	<b>import_networked_devices</b> - Generic devices on your network, usually containing a hostname &amp;/or ip address.<br />
	<br />
	We are adding more device types all the time. If you have a specific device type you would like catered for, please let us know via the forums. Valid types of items in the Open-AudIT database are:
	<ul>
		<li>access token</li>
		<li>cable modem</li>
		<li>cell phone</li>
		<li>computer</li>
		<li>firewall</li>
		<li>game console</li>
		<li>ip phone</li>
		<li>mobile modem</li>
		<li>network printer</li>
		<li>phone</li>
		<li>printer</li>
		<li>router</li>
		<li>satellite phone</li>
		<li>smart phone</li>
		<li>switch</li>
		<li>tablet</li>
	<ul>
	<br />
	</fieldset>
</div>
</form>