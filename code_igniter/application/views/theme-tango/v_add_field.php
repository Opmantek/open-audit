<?php echo form_open('admin_field/add_field') . "\n"; ?>
<fieldset id="field_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Field Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_audit_log.png' alt='' title='' width='48'/>
	<table width="780" cellpadding = "0" cellspacing="0">
		<tr>
			<td width='100%'>
				<p><label for='field_name'><?php echo __("Name")?>: </label><input type='text' id='field_name' name='field_name' tabindex='1' title='Field Name' /></p>
				<p><label for='field_type'><?php echo __("Type")?>: </label>
					<select id='field_type' name='field_type' tabindex='2' title='Field Type' >
						<option value="varchar"><?php echo __("VarChar")?></option>
						<!--
						<option value="bool"><?php echo __("Boolean")?></option>
						<option value="int"><?php echo __("Integer")?></option>
						<option value="memo"><?php echo __("Memo")?></option>
						<option value="list"><?php echo __("List")?></option>
						<option value="datetime"><?php echo __("DateTime")?></option>
						<option value="timestamp"><?php echo __("Timestamp")?></option>
					-->
					</select></p>
				<p><label for='field_placement'><?php echo __("Placement")?>: </label>
					<select id='field_placement' name='field_placement' tabindex='3' title='Field Placement' >
						<option value="system_details"><?php echo __("System Details")?></option>
						<option value="view_summary_windows"><?php echo __("Windows Details")?></option>
						<option value="view_summary_purchase"><?php echo __("Purchase")?></option>
						<option value="view_summary_network"><?php echo __("Network Summary")?></option>
						<option value="view_summary_location"><?php echo __("Location / Contact")?></option>
						<option value="view_summary_custom"><?php echo __("Custom")?></option>
						<!--
						<option value="view_hardware_processor"><?php echo __("Processor")?></option>
						<option value="view_hardware_memory"><?php echo __("Memory")?></option>
						<option value="view_hardware_bios"><?php echo __("Bios")?></option>
						<option value="view_hardware_motherboard"><?php echo __("Motherboard")?></option>
						<option value="view_hardware_network"><?php echo __("Network Details")?></option>
						<option value="view_hardware_scsi_controller"><?php echo __("SCSI Controller")?></option>
						<option value="view_hardware_hard_drive"><?php echo __("Disk")?></option>
						<option value="view_hardware_optical"><?php echo __("Optical")?></option>
						<option value="view_hardware_video"><?php echo __("Video")?></option>
						<option value="view_hardware_monitor"><?php echo __("Monitor")?></option>
						<option value="view_hardware_sound"><?php echo __("Sound")?></option>
						-->
					</select></p>
				<p><label for='group_id'><?php echo __("Group")?>: </label>
					<select id='group_id' name='group_id' tabindex='4' title='Group' >
						<?php foreach ($groups as $group){ echo "<option value=\"" . $group->group_id . "\">" . $group->group_name . " (" . $group->total . " devices)</option>\n"; } ?>
					<select></p>
				<p><label for='AddField'>&nbsp;</label><?php echo form_submit(array('id'=>'AddField', 'name'=>'AddField'), 'Add Field'); ?></p>
			</td>
		</tr>
	</table>
</fieldset>
<?php echo form_close(); ?>
