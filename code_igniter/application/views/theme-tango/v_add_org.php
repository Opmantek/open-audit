<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}

echo form_open('admin_org/add_org') . "\n"; 
?>
<fieldset id="org_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Organisation Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
	<table width="780" cellpadding = "0" cellspacing="0">
		<tr>
			<td width='50%'>
				<p><label for='org_name'><?php echo __("Name")?>: </label><input type='text' id='org_name' name='org_name' tabindex='1' title='Organisation Name' value="<?php echo set_value('org_name'); ?>"/><?php echo $error_message; ?></p>
				<p><label for='org_parent_id'><?php echo __("Parent")?>: </label>
					<select id='org_parent_id' name='org_parent_id' tabindex='2' title='Parent'>
					<?php foreach($org_names as $value) { 
						echo "<option value='" . $value->org_id . "'>" . $value->org_name . "&nbsp;</option>\n";
					} ?>
					</select>
				</p>
				<!-- <p><label for='org_contact'><?php echo __("Contact")?>: </label><input type='text' id='org_contact' name='org_contact' tabindex='3' title='Contact'  value="<?php echo set_value('org_contact'); ?>"/></p> -->
				<p><label for='org_picture'><?php echo __("Picture")?>: </label><input type='text' id='org_picture' name='org_picture' tabindex='4' title='Picture'  value="<?php echo set_value('org_picture'); ?>"/></p>
				<p><label for='org_comments'><?php echo __("Comments")?>: </label><input type='text' id='org_comments' name='org_comments' tabindex='5' title='Comments'  value="<?php echo set_value('org_comments'); ?>"/></p>
				<p><label for='org_group'><?php echo __("Activate Group")?>: </label><input type='checkbox' id='org_group' name='org_group' tabindex='12' title='Activate Group' checked /></p>
				<p><label for='AddOrganisation'>&nbsp;</label><?php echo form_submit(array('id'=>'AddOrganisation', 'name'=>'AddOrganisation'), 'Add Organisation'); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
	<input type="hidden" value="" name="contact_id" id="contact_id" />
</fieldset>
<?php echo form_close(); ?>
