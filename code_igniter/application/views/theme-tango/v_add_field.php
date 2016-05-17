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
echo form_open('admin_field/add_field')."\n"; ?>
<fieldset id="field_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Field Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_audit_log.png' alt='' title='' />
	<table style='width:780' cellpadding='0' cellspacing='0'>
		<tr>
			<td style='width:100%'>
				<p><label for='field_name'><?php echo __('Name'); ?>: </label><input type='text' id='field_name' name='field_name' tabindex='1' title='Field Name' /></p>
				<p><label for='field_type'><?php echo __('Type'); ?>: </label>
					<select id='field_type' name='field_type' tabindex='2' title='Field Type' onChange='toggleValues()'>
						<option value="varchar"><?php echo __('VarChar'); ?></option>
						<option value="list"><?php echo __('List'); ?></option>
						<!--
						<option value="bool"><?php echo __('Boolean'); ?></option>
						<option value="int"><?php echo __('Integer'); ?></option>
						<option value="memo"><?php echo __('Memo'); ?></option>
						<option value="datetime"><?php echo __('DateTime'); ?></option>
						<option value="timestamp"><?php echo __('Timestamp'); ?></option>
					-->
					</select></p>
				<p><label for='field_placement'><?php echo __('Placement'); ?>: </label>
					<select id='field_placement' name='field_placement' tabindex='3' title='Field Placement' >
						<option value="system_details"><?php echo __('System Details'); ?></option>
						<option value="view_summary_windows"><?php echo __('Windows Details'); ?></option>
						<option value="view_summary_purchase"><?php echo __('Purchase'); ?></option>
						<option value="view_summary_network"><?php echo __('Network Summary'); ?></option>
						<option value="view_summary_location"><?php echo __('Location / Contact'); ?></option>
						<option value="view_summary_custom"><?php echo __('Custom'); ?></option>
						<!--
						<option value="view_hardware_processor"><?php echo __('Processor'); ?></option>
						<option value="view_hardware_memory"><?php echo __('Memory'); ?></option>
						<option value="view_hardware_bios"><?php echo __('Bios'); ?></option>
						<option value="view_hardware_motherboard"><?php echo __('Motherboard'); ?></option>
						<option value="view_hardware_network"><?php echo __('Network Details'); ?></option>
						<option value="view_hardware_scsi_controller"><?php echo __('SCSI Controller'); ?></option>
						<option value="view_hardware_hard_drive"><?php echo __('Disk'); ?></option>
						<option value="view_hardware_optical"><?php echo __('Optical'); ?></option>
						<option value="view_hardware_video"><?php echo __('Video'); ?></option>
						<option value="view_hardware_monitor"><?php echo __('Monitor'); ?></option>
						<option value="view_hardware_sound"><?php echo __('Sound'); ?></option>
						-->
					</select></p>
				<p><label for='group_id'><?php echo __('Group'); ?>: </label>
					<select id='group_id' name='group_id' tabindex='4' title='Group' >
						<?php foreach ($groups as $group) {
    						echo "<option value=\"".$group->group_id."\">".$group->group_name." (".$group->total." devices)</option>\n";
						} ?>
					<select></p>
				<p id="field_values_p" name="field_values_p" style="display:none;"><label for='field_values'><?php echo __('Values'); ?>: </label><input type='text' id='field_values' name='field_values' tabindex='1' title='Field Values' /> NOTE: Values should be a comma separated list.</p>
				<p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
</fieldset>
<?php echo form_close(); ?>

<script type="text/javascript">
function toggleValues() {
	if (document.getElementById("field_type").value == "list") {
		document.getElementById("field_values_p").style.display = "block";
	} else {
		document.getElementById("field_values_p").style.display = "none";
	}
	return false;
}
</script>
