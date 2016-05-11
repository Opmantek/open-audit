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
?>
<?php
if (php_uname('s') != "Windows NT") {
    $ldap_server_addition = "This is the server which will run the audit scripts.";
} else {
    $ldap_server_addition = "";
}
if (isset($this->config->config['show_passwords']) and $this->config->config['show_passwords'] == 'n') {
    $password_field = 'password';
} else {
    $password_field = 'text';
}
echo form_open('discovery/discover_active_directory') ?>
<fieldset id="group_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Discover and Audit an Active Directory Domain')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_ldap.png' alt='' title='' />
	<table width="90%" cellpadding = "0" cellspacing="0">
		<tr>
			<td style='width:100%'>
				<p><label for="server"><?php echo __("Active Directory Server"); ?>: </label><input type='text' id="server" name="server" tabindex='1' title='Active Directory Server'> eg: 192.168.61.200 (IP Address is best). <?php echo $ldap_server_addition; ?></p>

				<p><label for='network_address'><?php echo __("Local Network Address"); ?>: </label> <input type='text' id='network_address' name='network_address' tabindex='2' title='Local Network Address' value='<?php echo $this->config->item('default_network_address'); ?>' /> This servers network address.</p>

				<p><label for='windows_username'><?php echo __("User")?>: </label><input type='text' id='windows_username' name='windows_username' tabindex='3' title='User' value='<?php echo $this->config->item('default_windows_username'); ?>' /> eg: administrator</p>

				<p><label for='windows_password'><?php echo __("Password")?>: </label><input type='<?php echo $password_field; ?>' id='windows_password' name='windows_password' tabindex='4' title='Password' value='<?php echo $this->config->item('default_windows_password'); ?>' /></p>

				<p><label for='windows_domain'><?php echo __("Domain Name")?>: </label><input type='text' id='windows_domain' name='windows_domain' tabindex='5' title='Domain Name' value='<?php echo $this->config->item('default_windows_domain'); ?>'  /> eg: open-audit.local</p>

				<p><label for='number_of_audits'># <?php echo __("Audits")?>: </label><input type='text' id='number_of_audits' name='number_of_audits' tabindex='6' title='# Audits' value='20'  /> This is the number of audit processes that will be spawned at any given time.</p>

				<p><label for='debug'><?php echo __("Debug"); ?>: </label> <input type='checkbox' id='debug' name='debug' tabindex='9' title='Debug' />Do not set this in normal use.</p>

				<p><label for='submit'>&nbsp;</label><input type='submit' name='submit' id='submit' value='<?php echo __('Submit'); ?>' /></p>
			</td>
		</tr>
	</table>
</fieldset>
</form>
