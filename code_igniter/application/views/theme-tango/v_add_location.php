<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}

echo form_open('admin_location/add_location') . "\n"; 
?>
<fieldset id="location_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Location Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
	<table width="780" cellpadding = "0" cellspacing="0">
		<tr>
			<td width="50%" valign="top">
				<p><label for='location_name'><?php echo __("Name")?>: </label><input type='text' id='location_name' name='location_name' tabindex='1' title='Location Name' value="<?php echo set_value('location_name'); ?>"/><?php echo $error_message; ?></p>
				<p><label for='location_type' title="Server Room, Office, etc"><?php echo __("Type")?>: </label><input type='text' id='location_type' name='location_type' tabindex='2' title='Type'  value="<?php echo set_value('location_type'); ?>"/></p>
				<p><label for='location_room'><?php echo __("Room")?>: </label><input type='text' id='location_room' name='location_room' tabindex='3' title='Room'  value="<?php echo set_value('location_room'); ?>"/></p>
				<p><label for='location_suite'><?php echo __("Suite")?>: </label><input type='text' id='location_suite' name='location_suite' tabindex='4' title='Suite'  value="<?php echo set_value('location_suite'); ?>"/></p>
				<p><label for='location_level'><?php echo __("Level")?>: </label><input type='text' id='location_level' name='location_level' tabindex='5' title='Level'  value="<?php echo set_value('location_level'); ?>"/></p>
				<p><label for='location_address'><?php echo __("Street Address")?>: </label><input type='text' id='location_address' name='location_address' tabindex='6' title='Street Address'  value="<?php echo set_value('location_address'); ?>"/></p>
				<p><label for='location_city'><?php echo __("City")?>: </label><input type='text' id='location_city' name='location_city' tabindex='7' title='City'  value="<?php echo set_value('location_city'); ?>"/></p>
			</td>
			<td width="50%" valign="top">
				<p><label for='location_state'><?php echo __("State")?>: </label><input type='text' id='location_state' name='location_state' tabindex='8' title='State'  value="<?php echo set_value('location_state'); ?>"/></p>		
				<p><label for='location_country'><?php echo __("Country")?>: </label><input type='text' id='location_country' name='location_country' tabindex='9' title='Country'  value="<?php echo set_value('location_country'); ?>"/></p>		
				<!-- <p><label for='location_picture'><?php echo __("Picture")?>: </label><input type='text' id='location_picture' name='location_picture' tabindex='9' title='Picture'  value="<?php echo set_value('location_picture'); ?>"/></p>	-->
				<p><label for='location_latitude'><?php echo __("Latitude")?>: </label><input type='text' id='location_latitude' name='location_latitude' tabindex='10' title='Latitude'  value="<?php echo set_value('location_latitude'); ?>"/></p>		
				<p><label for='location_longitude'><?php echo __("Longitude")?>: </label><input type='text' id='location_longitude' name='location_longitude' tabindex='11' title='Longitude'  value="<?php echo set_value('location_longitude'); ?>"/></p>	
				<p><label for='location_group'><?php echo __("Activate Group")?>: </label><input type='checkbox' id='location_group' name='location_group' tabindex='12' title='Activate Group' checked /></p>
				<p><label for='AddLocation'>&nbsp;</label><?php echo form_submit(array('id'=>'AddLocation', 'name'=>'AddLocation'), 'Add Location'); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>
<?php echo form_close(); ?>