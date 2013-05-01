<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}
#echo "<pre>\n";
#print_r($org);
#echo "</pre>\n";
echo form_open('admin_org/edit_org') . "\n"; 
?>
<fieldset id="org_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Organisation Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
	<?php #foreach ($org as $key) { ?>
	<?php if ($org->org_parent_id == '0') { $org->org_parent_id = ''; } ?>
	<table width="90%" cellpadding = "0" cellspacing="0">
		<tr>
			<td width='50%'>
				<p><label for='org_name'><?php echo __("Name")?>: </label><input type='text' id='org_name' name='org_name' tabindex='1' title='Organisation Name' value="<?php echo $org->org_name; ?>"/><?php echo $error_message; ?></p>
				<p><label for='org_parent_id'><?php echo __("Parent")?>: </label>
					<select id='org_parent_id' name='org_parent_id' tabindex='2' title='Parent'/>
					<?php 
					if (count($org_names) > 0) {
						foreach($org_names as $value) { 
							if ($value->org_id == $org->org_parent_id) {
								echo "\n\t\t\t\t\t\t<option value='" . $value->org_id . "' selected>" . $value->org_name . "</option>";
							} elseif ($value->org_id == $org->org_id) {
								# do not output itself to be a potential parent.
							} else {
								echo "\n\t\t\t\t\t\t<option value='" . $value->org_id . "'>" . $value->org_name . "</option>";
							}
						} 
						echo "\n"; 
					} ?>
					</select>
				</p>
				<p><label for='org_picture'><?php echo __("Picture")?>: </label><input type='text' id='org_picture' name='org_picture' tabindex='3' title='Picture'  value="<?php echo $org->org_picture; ?>"/></p>
				<p><label for='org_comments'><?php echo __("Comments")?>: </label><input type='text' id='org_comments' name='org_comments' tabindex='4' title='Comments'  value="<?php echo $org->org_comments; ?>"/></p>	
				<p><label for='EditOrganisation'>&nbsp;</label><?php echo form_submit('EditOrganisation', 'Edit Organisation'); ?></p>
			</td>
		</tr>
	</table>
	<?php #} ?>
<input type="hidden" value="<?php echo $org->org_id; ?>" name="org_id" id="org_id" />
<input type="hidden" value="" name="contact_id" id="contact_id" />
</fieldset>
<?php echo form_close(); ?>
</div>
</div>

