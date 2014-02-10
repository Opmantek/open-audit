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

echo form_open('discovery/discover_subnet');
$image_path = base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-images/';
?>
<fieldset id="subnet_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Discover the devices on your network')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_network_wireless.png' alt='' title='' width='48'/>
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td width='100%'>
				<p><label for='subnet'><?php echo __("Subnet"); ?>: </label> <input type='text' id='subnet' name='subnet' tabindex='1' title='Subnet'  /></p>

				<p><label for='snmp_community'><?php echo __("Local Network Address"); ?>: </label> <input type='text' id='network_address' name='network_address' tabindex='1' title='Local Network Address' value='<?php echo $config->default_network_address; ?>' /></p>

				<p><label for='snmp_community'><?php echo __("SNMP Community"); ?>: </label> <input type='text' id='snmp_community' name='snmp_community' tabindex='1' title='SNMP Community' value='<?php echo $config->default_snmp_community; ?>' /></p>

				<p><label for='ssh_username'><?php echo __("SSH User"); ?>: </label> <input type='text' id='ssh_username' name='ssh_username' tabindex='1' title='SSH User' value='<?php echo $config->default_ssh_username; ?>' /></p>

				<p><label for='ssh_password'><?php echo __("SSH Password"); ?>: </label> <input type='text' id='ssh_password' name='ssh_password' tabindex='1' title='SSH Password' value='<?php echo $config->default_ssh_password; ?>' /></p>

				<p><label for='windows_username'><?php echo __("Windows User"); ?>: </label> <input type='text' id='windows_username' name='windows_username' tabindex='1' title='Windows User' value='<?php echo $config->default_windows_username; ?>' /></p>

				<p><label for='windows_password'><?php echo __("Windows Password"); ?>: </label> <input type='text' id='windows_password' name='windows_password' tabindex='1' title='Windows Password' value='<?php echo $config->default_windows_password; ?>' /></p>

				<p><label for='windows_domain'><?php echo __("Windows Domain"); ?>: </label> <input type='text' id='windows_domain' name='windows_domain' tabindex='1' title='Windows Domain' value='<?php echo $config->default_windows_domain; ?>' /></p>

				<p><label for='submit'>&nbsp;</label><input type='submit' name='submit' id='submit' value='Discover' /></p>
				<?php if ($warning > '') { echo "<p><br /><br />$warning</p>\n"; } ?>
			</td>
		</tr>
	</table>
</fieldset>
<br />
<?php
if ($config->default_snmp_community == '' or
	$config->default_ssh_username == '' or 
	$config->default_ssh_password == '' or 
	$config->default_windows_username == '' or 
	$config->default_windows_password == '' or 
	$config->default_windows_domain == '') {
?>
<p><h3 style="color: blue">Warning</h3>Please ensure you have default for ALL attributes. Defaults can be set on the Config page - click <a href="<?php echo base_url(); ?>index.php/admin/edit_config" style="color: red";>here</a>.<br />
<?php } ?>
<h3>Subnet Examples</h3>The format of the subnet is specified in standard Nmap syntax. The following are valid examples:<br />
	192.168.0.1 (a single address)<br />
	192.168.1.2/32 (a single address with mask)<br />
	192.168.3.0/24 (a 24 bit mask - 192.168.3.0 to 192.168.3.255)<br />
	198.168.0-255.1-127 (a range of ip addresses)<br />
<br />
<h3>Note</h3>At present Network Groups will be created is a subnet is supplied using a slash (ie - 192.168.1.0/24) and you have the config option to auto create network groups set to 'y'. Network Groups will NOT be created if a range of ip addresses or a /32 subnet is supplied.</p>
<br />
</form>
