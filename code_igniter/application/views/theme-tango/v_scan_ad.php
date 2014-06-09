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
 * @version 1.3.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<?php echo form_open('admin/scan_ad') ?>
<fieldset id="group_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Scanning An Active Directory Domain')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
	<table width="780" cellpadding = "0" cellspacing="0">
		<tr>
			<td width='100%'>
				<p><label for="ad_ldap_server"><?php echo __("Active Directory Server"); ?>: </label><input type='text' id="ad_ldap_server" name="ad_ldap_server" tabindex='1' title='Active Directory Server'> ex: 192.168.61.200 (IP Address is best).</p>
				<p><label for='ad_user'><?php echo __("User")?>: </label><input type='text' id='ad_user' name='ad_user' tabindex='2' title='User' /> ex: open-audit\administrator</p>
				<p><label for='ad_secret'><?php echo __("Password")?>: </label><input type='password' id='ad_secret' name='ad_secret' tabindex='3' title='Password' /></p>
				<p><label for='ad_domain_name'><?php echo __("Domain Name")?>: </label><input type='text' id='ad_domain_name' name='ad_domain_name' tabindex='4' title='Domain Name'  /> ex: open-audit.local</p>
				<p><label for='ScanAD'>&nbsp;</label><input type='submit' name='ScanAD' id='ScanAD' value='Scan' /></p>
			</td>
		</tr>
	</table>
	<p>NOTE - <span style="font-weight:bold; color: red;">You probably don't want to do this.</span>This utility will ask Active Directory for a list of Windows computers in the domain. It will then inset what little information Active Directory can provide into the Open-AudIT database.<br /><br />

	It's likely you really want to <span style="font-weight: bold;">audit</span>all the computers in Active Directory. To do that, run Menu -> Admin -> Discovery -> Discover Active Directory (or click <a href="../discovery/discover_active_directory" style="color: blue;">here</a>).<br /><br />
	
	The attributes retrieved from Active Directory are: Hostname, Operating System, Last Logged On (date) - as you can see, not much.<br /><br />

	It will retrieve <span style="font-weight: bold;">all</span>computers in the domain regardless of status.
</fieldset>
</form>
