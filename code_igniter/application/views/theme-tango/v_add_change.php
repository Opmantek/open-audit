<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}

echo form_open('change/process_add_change') . "\n"; 
?>
<font color="red">Please note this is INCOMPLETE.</font><br /><br />
<fieldset id="change_details_one" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Change Details')?></span></legend>
	<div id="first" style="width: 100%;">
		<div style="float:left; width:50%">
			<p><label for='change_short_description'><?php echo __("Short Description")?>: </label><input type='text' name='change_short_description' tabindex='1' title='Short Description' /><?php echo $error_message; ?></p>
			<p><label for='change_reason'><?php echo __("Reason")?>: </label><input type='text' name='change_reason' tabindex='1' title='Reason' /></p>
			<p><label for='change_external_id'><?php echo __("External Change ID")?>: </label><input type='text' name='change_external_id' tabindex='4' title='External ID' /></p>
			<p><label for='change_external_link'><?php echo __("External Change URL")?>: </label><input type='text' name='change_external_link' tabindex='4' title='External URL' /></p>
			<?php if ($this->session->flashdata('message') > ''){ echo "<p>" . $this->session->flashdata('message') . "</p>";} ?>
		</div>
		<div style="float:right; width:50%">
			<p><label for='datepicker'><?php echo __("Implementation Date")?>: </label><input type='text' id='datepicker' name='datepicker' tabindex='3' title='Implementation Date' /></p>
			<p><label for='change_authorising_person'><?php echo __("Authorising Person")?>: </label><input type='text' name='change_authorising_person' tabindex='4' title='Authorising Person' /></p>
			<p><label for='change_performing_person'><?php echo __("Performing Person")?>: </label><input type='text' name='change_performing_person' tabindex='4' title='Performing Person' /></p>
			<p><label for='submit'>&nbsp;</label><input type="submit" name="submit" value="Submit" /></p>
		</div>
	</div>
</fieldset>
<br />
<fieldset id="change_details_two" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Detailed Description')?></span></legend>
	<p><textarea name="change_detailed_description" rows="15" cols="80" style="width: 80%" class="tinymce"></textarea></p>
</fieldset>
<br />
<fieldset id="change_details_three" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Potential Issues')?></span></legend>
	<p><textarea name="change_potential_issues" rows="15" cols="80" style="width: 80%" class="tinymce"></textarea></p>
</fieldset>
<br />
<fieldset id="change_details_four" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Backout Plan')?></span></legend>
	<p><textarea name="change_backout_plan" rows="15" cols="80" style="width: 80%" class="tinymce"></textarea></p>
</fieldset>
<?php echo form_close(); ?>
