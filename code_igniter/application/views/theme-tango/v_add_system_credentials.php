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
echo form_open('admin_system/system_add_credentials')."\n";
?>
<fieldset id="credentials" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('SNMP Credentials')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<p>
		<label for='ip_address'><?php echo __("IP Address")?>: </label>
		<input type='text' id='ip_address' name='ip_address' tabindex='1' title='IP Address' value="<?php echo $ip_address; ?>"/>
	</p>
	<hr />
	<p>
		<label for='snmp_version'><?php echo __("SNMP Version"); ?>: </label>
		<input type='text' id='snmp_version' name='snmp_version' tabindex='1' title='SNMP Version' value="2c"/>
	</p>
	<p>
		<label for='snmp_community'><?php echo __("SNMP Community"); ?>: </label>
		<input type='text' id='snmp_community' name='snmp_community' tabindex='1' title='SNMP Community' value="<?php echo htmlentities($this->config->item('default_snmp_community')); ?>"/>
	</p>
	<p>
		<label for='snmp_scan'><?php echo __("Scan SNMP upon Submit") . "?"; ?></label>
		<input type='checkbox' id='snmp_scan' name='snmp_scan' tabindex='4' title='Scan SNMP' checked />
	</p>
	<hr />
	<input type='hidden' name='system_id' id='system_id' value='<?php echo $system_id; ?>' />
	<p>
		<label for='submit'>&nbsp;</label>
		<?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), 'Submit'); ?>
	</p>
</fieldset>
<?php echo form_close(); ?>
