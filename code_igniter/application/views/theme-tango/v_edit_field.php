<?php echo form_open('admin_field/edit_field') . "\n"; ?>
<fieldset id="field_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Field Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_audit_log.png' alt='' title='' width='48'/>
	<?php foreach ($field as $key) { ?>
	<table width="780" cellpadding = "0" cellspacing="0">
		<tr>
			<td width='100%'>
				<p><label for='field_name'><?php echo __("Name")?>: </label><input type='text' id='field_name' name='field_name' tabindex='1' title='Field Name' value='<?php echo $key->field_name; ?>' /></p>
				<p><label for='field_type'><?php echo __("Type")?>: </label>
					<select id='field_type' name='field_type' tabindex='2' title='Field Type' >
						<option value="varchar" <?php if ($key->field_type == 'varchar') { echo " selected";} ?> ><?php echo __("VarChar")?></option>
						<!--
						<option value="bool" <?php if ($key->field_type == 'bool') { echo " selected";} ?> ><?php echo __("Boolean")?></option>
						<option value="int" <?php if ($key->field_type == 'int') { echo " selected";} ?> ><?php echo __("Integer")?></option>
						<option value="memo" <?php if ($key->field_type == 'memo') { echo " selected";} ?> ><?php echo __("Memo")?></option>
						<option value="list" <?php if ($key->field_type == 'list') { echo " selected";} ?> ><?php echo __("List")?></option>
						<option value="datetime" <?php if ($key->field_type == 'datetime') { echo " selected";} ?> ><?php echo __("DateTime")?></option>
						<option value="timestamp" <?php if ($key->field_type == 'timestamp') { echo " selected";} ?> ><?php echo __("Timestamp")?></option>
					-->
					</select></p>
				<p><label for='field_placement'><?php echo __("Placement")?>: </label>
					<select id='field_placement' name='field_placement' tabindex='3' title='Field Placement' >
						<option value="system_details" <?php if ($key->field_placement == 'system_details') { echo " selected";} ?> ><?php echo __("System Details")?></option>
						<option value="view_summary_windows" <?php if ($key->field_placement == 'view_summary_windows') { echo " selected";} ?> ><?php echo __("Windows Details")?></option>
						<option value="view_summary_purchase" <?php if ($key->field_placement == 'view_summary_purchase') { echo " selected";} ?> ><?php echo __("Purchase")?></option>
						<option value="view_summary_network" <?php if ($key->field_placement == 'view_summary_network') { echo " selected";} ?> ><?php echo __("Network Summary")?></option>
						<option value="view_summary_location" <?php if ($key->field_placement == 'view_summary_location') { echo " selected";} ?> ><?php echo __("Location / Contact")?></option>
						<option value="view_summary_custom" <?php if ($key->field_placement == 'view_summary_custom') { echo " selected";} ?> ><?php echo __("Custom")?></option>
						<!--
						<option value="view_hardware_processor" <?php if ($key->field_placement == 'view_hardware_processor') { echo " selected";} ?> ><?php echo __("Processor")?></option>
						<option value="view_hardware_memory" <?php if ($key->field_placement == 'view_hardware_memory') { echo " selected";} ?> ><?php echo __("Memory")?></option>
						<option value="view_hardware_bios" <?php if ($key->field_placement == 'view_hardware_bios') { echo " selected";} ?> ><?php echo __("Bios")?></option>
						<option value="view_hardware_motherboard" <?php if ($key->field_placement == 'view_hardware_motherboard') { echo " selected";} ?> ><?php echo __("Motherboard")?></option>
						<option value="view_hardware_network" <?php if ($key->field_placement == 'view_hardware_network') { echo " selected";} ?> ><?php echo __("Network Details")?></option>
						<option value="view_hardware_scsi_controller" <?php if ($key->field_placement == 'view_hardware_scsi_controller') { echo " selected";} ?> ><?php echo __("SCSI Controller")?></option>
						<option value="view_hardware_hard_drive" <?php if ($key->field_placement == 'view_hardware_hard_drive') { echo " selected";} ?> ><?php echo __("Disk")?></option>
						<option value="view_hardware_optical" <?php if ($key->field_placement == 'view_hardware_optical') { echo " selected";} ?> ><?php echo __("Optical")?></option>
						<option value="view_hardware_video" <?php if ($key->field_placement == 'view_hardware_video') { echo " selected";} ?> ><?php echo __("Video")?></option>
						<option value="view_hardware_monitor" <?php if ($key->field_placement == 'view_hardware_monitor') { echo " selected";} ?> ><?php echo __("Monitor")?></option>
						<option value="view_hardware_sound" <?php if ($key->field_placement == 'view_hardware_sound') { echo " selected";} ?> ><?php echo __("Sound")?></option>
						-->
					</select></p>
				<p><label for='group_id'><?php echo __("Group")?>: </label>
					<select id='group_id' name='group_id' tabindex='4' title='Group' >
						<?php foreach ($groups as $group){ 
							echo "<option value=\"" . $group->group_id . "\" ";
							if ($group->group_id == $key->group_id) { echo " selected "; }
							echo ">" . $group->group_name . " (" . $group->total . " devices)</option>\n"; } ?>
					<select></p>
				<p>
					<input type="hidden" name="field_id" id="field_id" value="<?php echo $key->field_id; ?>" />
					<label for='EditField'>&nbsp;</label><?php echo form_submit(array('id'=>'EditField', 'name'=>'EditField'), 'Edit Field'); ?>
				</p>
			</td>
		</tr>
	</table>
	<?php } ?>
</fieldset>
<?php echo form_close(); ?>
