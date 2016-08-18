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
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
echo form_open('admin_field/add_field')."\n"; ?>
<fieldset id="field_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Field Details')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_audit_log.png' alt='' title='' />
	<table style='width:780px' cellpadding='0' cellspacing='0'>
		<tr>
			<td style='width:100%'>
				<p><label for='name'><?php echo __('Name'); ?>: </label><input type='text' id='name' name='name' tabindex='1' title='Field Name' /></p>
				<p><label for='type'><?php echo __('Type'); ?>: </label>
					<select id='type' name='type' tabindex='2' title='Field Type' onChange='toggleValues()'>
						<option value="varchar"><?php echo __('VarChar'); ?></option>
						<option value="list"><?php echo __('List'); ?></option>
					</select></p>
				<p><label for='placement'><?php echo __('Placement'); ?>: </label>
					<select id='placement' name='placement' tabindex='3' title='Field Placement' >
						<option value="custom"><?php echo __('Custom'); ?></option>
						<option value="system"><?php echo __('System Details'); ?></option>
					</select></p>
				<p><label for='group_id'><?php echo __('Group'); ?>: </label>
					<select id='group_id' name='group_id' tabindex='4' title='Group' >
						<?php foreach ($groups as $group) {
    						echo "<option value=\"".$group->group_id."\">".$group->group_name." (".$group->total." devices)</option>\n";
						} ?>
					<select></p>
				<p id="values_p" name="values_p" style="display:none;"><label for='values'><?php echo __('Values'); ?>: </label><input type='text' id='values' name='values' tabindex='1' title='Field Values' /> NOTE: Values should be a comma separated list.</p>
				<p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') ); ?></p>
			</td>
		</tr>
	</table>
</fieldset>
<?php echo form_close(); ?>

<script type="text/javascript">
function toggleValues() {
	if (document.getElementById("type").value == "list") {
		document.getElementById("values_p").style.display = "block";
	} else {
		document.getElementById("values_p").style.display = "none";
	}
	return false;
}
</script>
