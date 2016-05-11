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
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}

echo form_open('admin_connection/add_connection')."\n";
?>
<fieldset id="connection_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Connection Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
	<table style='width:780' cellpadding='0' cellspacing='0'>
		<tr>
			<td style='width:100%'>
				<p><label for="connection_org_id"><?php echo __('Organisation Name'); ?>: </label><select id="connection_org_id" name="connection_org_id" tabindex='1' title='Organisation Name'><option value="">&nbsp;</option>
				<?php foreach ($orgs as $org) {
    				echo "<option value=\"".intval($org->id)."\">".htmlentities($org->name)."</option>\n";
				} ?></select></p>
				<p><label for='connection_name'><?php echo __('Name'); ?>: </label><input type='text' id='connection_name' name='connection_name' tabindex='2' title='Connection Name' value="<?php echo set_value('connection_name'); ?>"/><?php echo $error_message; ?></p>
				<p><label for='connection_provider'><?php echo __('Provider'); ?>: </label><input type='text' id='connection_provider' name='connection_provider' tabindex='3' title='Provider'  value="<?php echo set_value('connection_provider'); ?>"/></p>
				<p><label for='connection_service_type'><?php echo __('Service Type'); ?>: </label><input type='text' id='connection_service_type' name='connection_service_type' tabindex='4' title='Service Type'  value="<?php echo set_value('connection_service_type'); ?>"/></p>
				<p><label for='connection_product_name'><?php echo __('Product Name'); ?>: </label><input type='text' id='connection_product_name' name='connection_product_name' tabindex='5' title='Level'  value="<?php echo set_value('connection_product_name'); ?>"/></p>
				<p><label for='connection_service_identifier'><?php echo __('Service ID'); ?>: </label><input type='text' id='connection_service_identifier' name='connection_service_identifier' tabindex='6' title='Service ID'  value="<?php echo set_value('connection_service_identifier'); ?>"/></p>
				<p><label for='connection_speed'><?php echo __('Speed'); ?>: </label><input type='text' id='connection_speed' name='connection_speed' tabindex='7' title='Speed'  value="<?php echo set_value('connection_speed'); ?>"/></p>
				<p><label for="connection_location_id_a"><?php echo __('Location A'); ?>: </label><select id='connection_location_id_a' name='connection_location_id_a' tabindex='8' title='Location A' ><option value="">&nbsp;</option>
				<?php foreach ($locations as $location) {
    				echo "<option value=\"".intval($location->id)."\">".htmlentities($location->name)."</option>\n";
				} ?></select></p>
				<p><label for="connection_location_id_b"><?php echo __('Location B'); ?>: </label><select id='connection_location_id_b' name='connection_location_id_b' tabindex='9' title='Location A' ><option value="">&nbsp;</option>
				<?php foreach ($locations as $location) {
				    echo "<option value=\"".intval($location->id)."\">".htmlentities($location->name)."</option>\n";
				} ?></select></p>
				<p><label for='connection_system_id_a'><?php echo __('System A'); ?>: </label><input type='text' id='connection_system_id_a' name='connection_system_id_a' tabindex='10' title='System A'  value="<?php echo set_value('connection_system_id_a'); ?>"/></p>
				<p><label for='connection_system_id_a'><?php echo __('System B'); ?>: </label><input type='text' id='connection_system_id_b' name='connection_system_id_b' tabindex='11' title='System B'  value="<?php echo set_value('connection_system_id_b'); ?>"/></p>
				<p><label for='connection_line_number_a'><?php echo __('Line A'); ?>: </label><input type='text' id='connection_line_number_a' name='connection_line_number_a' tabindex='12' title='Longitude'  value="<?php echo set_value('connection_line_number_a'); ?>"/></p>
				<p><label for='connection_line_number_a'><?php echo __('Line B'); ?>: </label><input type='text' id='connection_line_number_b' name='connection_line_number_b' tabindex='13' title='Longitude'  value="<?php echo set_value('connection_line_number_b'); ?>"/></p>
				<p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>
<?php echo form_close(); ?>
