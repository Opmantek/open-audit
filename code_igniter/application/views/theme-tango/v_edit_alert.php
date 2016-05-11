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
<br />&nbsp;
<?php
echo form_open('change/process_edit_alert')."\n";
?>
<input type="hidden" name="group_id" value="<?php echo $group_id; ?>" />
<fieldset id="change_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Change Details')?></span></legend>
	<br />
	<label for="change_type"><?php echo __('Change Types')?>: </label>
	<select name="change_type" style="width: 300px">
		<option value="">&nbsp;</option>
		<option value="standard"><?php echo __('Standard Change')?></option>
		<option value="normal"><?php echo __('Normal Change')?></option>
		<option value="emergency"><?php echo __('Emergency Change')?></option>
		<option value="unauthorised"><?php echo __('Unauthorised Change')?></option>
	</select>
	<!--
	<br /><br />
	<label for="change_id">Internal Change: </label>
	<select name="change_id" style="width: 300px">
		<option value="">&nbsp;</option>
		<option value="change_id">Need to enumerate OA Changes in here</option>
	</select>
	-->
	<br /><br />
	<label for="external_change_id"><?php echo __('External Change ID')?>: </label>
	<input type="text" name="external_change_id" style="width: 300px" />
	<br /><br />
	<label for="external_change_link"><?php echo __('External Change Link')?>: </label>
	<input type="text" name="external_change_link" style="width: 300px" />
	<br /><br />
	<label for="alert_note"><?php echo __('Note'); ?>: </label>
	<textarea name="alert_note" rows="4" cols="56" ></textarea>
	<br /><br />
	<?php
    foreach ($query as $key) {
        echo "<input type=\"hidden\" name=\"alert_id_".print_something($key->id)."\" value=\"".print_something($key->id)."\" />\n";
    }
    ?>
	<label for="submit">&nbsp;</label><input type="submit" name="submit" id="submit" value="<?php echo __('Submit'); ?>" />
</fieldset>
</form>
<br /><br />
<fieldset id="alert_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Alert Details')?></span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th width="130"><?php echo __('Timestamp')?></th>
				<th width="100"><?php echo __('IP address')?></th>
				<th width="110"><?php echo __('System Name')?></th>
				<th width="140"><?php echo __('System Description')?></th>
				<th><?php echo __('Details')?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($query as $key): ?>
			<tr>
				<td><?php echo $key->timestamp?></td>
				<td><span style="display: none;"><?php echo print_something($key->man_ip_address)?></span><?php echo ip_address_from_db(print_something($key->man_ip_address))?></td>
				<td><a class="SystemPopupTrigger" rel="<?php echo $key->system_id;?>" href="<?php echo base_url()?>index.php/main/system_display/<?php echo $key->system_id?>"><?php echo print_something($key->hostname)?></a></td>
				<td><?php echo print_something($key->man_description)?></td>
				<td><?php echo print_something($key->details)?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</fieldset>
