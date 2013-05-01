<?php
echo form_open('change/process_edit_alert') . "\n"; 
?>
<input type="hidden" name="group_id" value="<?php echo $group_id; ?>" />
<fieldset id="change_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Change Details')?></span></legend>
	<br />
	<label for="change_type">Change Types: </label>
	<select name="change_type" style="width: 300px">
		<option value="">&nbsp;</option>
		<option value="standard">Standard Change</option>
		<option value="normal">Normal Change</option>
		<option value="emergency">Emergency Change</option>
		<option value="unauthorised">Unauthorised Change</option>
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
	<label for="external_change_id">External Change ID: </label>
	<input type="text" name="external_change_id" style="width: 300px" />
	<br /><br />
	<label for="external_change_link">External Change Link: </label>
	<input type="text" name="external_change_link" style="width: 300px" />
	<br /><br />
	<label for="alert_note">Note: </label>
	<textarea name="alert_note" rows="4" cols="56" ></textarea> 
	<br /><br />
	<?php
	foreach ($query as $key)
	{
		echo "<input type=\"hidden\" name=\"alert_id_" . $key->alert_id . "\" value=\"" . $key->alert_id . "\" />\n";
	}
	?>
	<label for="submit">&nbsp;</label>
	<input type="submit" name="submit" id="submit" value="Submit" />
</fieldset>
</form>
<br /><br />
<fieldset id="alert_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Alert Details')?></span></legend>
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
			<?php foreach($query as $key): ?>
			<tr>
				<td><?php echo $key->timestamp?></td>
				<td><span style="display: none;"><?php echo $key->man_ip_address?></span><?php echo ip_address_from_db($key->man_ip_address)?></td>
				<td><a class="SystemPopupTrigger" rel="<?php echo $key->system_id;?>" href="<?php echo base_url()?>index.php/main/system_display/<?php echo $key->system_id?>"><?php echo $key->hostname?></a></td>
				<td><?php echo $key->man_description?></td>
				<td><?php echo $key->alert_details?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</fieldset>
