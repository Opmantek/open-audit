<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}
echo form_open('admin_user/add_user') . "\n"; 
?>
<fieldset id="group_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('User Details')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_users.png' alt='' title='' width='48'/>
	<table width="780" cellpadding = "0" cellspacing="0">
		<tr>
			<td width='50%'>
				<p><label for='user_name'><?php echo __("User Name")?>: </label><input type='text' id='user_name' name='user_name' tabindex='1' title='User Name' value="<?php echo set_value('user_name'); ?>"/><?php echo $error_message; ?></p>
				<p><label for='user_full_name'><?php echo __("Full Name")?>: </label><input type='text' id='user_full_name' name='user_full_name' tabindex='2' title='Full Name'  value="<?php echo set_value('user_full_name'); ?>"/></p>
				<p><label for='user_password'><?php echo __("Password")?>: </label><input type='text' id='user_password' name='user_password' tabindex='3' title='Password'  value="<?php echo set_value('user_password'); ?>"/></p>
				<p><label for='user_email'><?php echo __("Email Address")?>: </label><input type='text' id='user_email' name='user_email' tabindex='4' title='Email Address'  value="<?php echo set_value('user_email'); ?>"/></p>
			</td>
			<td width='50%'>
				<p><label for='user_lang'><?php echo __("Language")?>: </label><input type='text' id='user_lang' name='user_lang' tabindex='5' title='Language' value="<?php echo set_value('user_lang', 'en'); ?>"/></p>
		<!--	<p><label for='user_display_number'><?php echo __("Display Systems")?>: </label><input type='text' id='user_display_number' name='user_display_number' tabindex='6' title='Display Systems' value='10'  value="<?php echo set_value('user_display_number'); ?>"/></p> -->
				<p><label for='user_theme'><?php echo __("Theme")?>: </label><input type='text' id='user_theme' name='user_theme' tabindex='7' title='Theme' value="<?php echo set_value('user_theme', 'tango'); ?>"/></p>
				<p><label for='user_admin'><?php echo __("User is Admin")?>: </label><input type='checkbox' id='user_admin' name='user_admin' tabindex='8' title='Is Admin' /></p>
				<p><label for='user_sam'><?php echo __("User SAM Access Level")?>: </label>
					<select id='user_sam' name='user_sam' tabindex='8' title='Is Admin' />
						<option value="0">No Access</option>
						<option value="1" selected>View Reports Only</option>
						<option value="2">Update Counts</option>
						<option value="3">Create Licenses</option>
					</select></p>
				<p><label for='AddUser'>&nbsp;</label><?php echo form_submit(array('id'=>'AddUser', 'name'=>'AddUser'), 'Add User'); ?></p>
			</td>
		</tr>
	</table>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>

<br />
<br />

<fieldset class="niceform">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __("Group Access Details")?></span></legend>

<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align="center" width="120"><?php echo __('Systems')?></th>
			<th><?php echo __('Group Name')?></th>
			<th><?php echo __('Group Type')?></th>
			<th><?php echo __('Group Description')?></th>
			<th align="center" class="{sorter: false}"><?php echo __('Access Level')?> - <?php echo group_dropdown(0)?></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach($query as $key):
			$tag = 'User Defined'; 
			if ($key->group_id < '1000'){ $tag = 'Built-in'; } 
			if ($key->group_id == '1'){ $tag = 'Built-in'; } 
			if (mb_strpos($key->group_name, 'Network - ') !== false) { $tag = 'Auto Generated'; }
			echo "
		<tr>
			<td align=\"center\">" . $key->total . "</td>
			<td><a href=\"" . base_url() . "index.php/main/list_devices/" . $key->group_id . "\">" . $key->group_name . "</a></td>
			<td>" . $tag . "</td>
			<td>" . $key->group_description . "</td>
			<td align=\"center\">" . group_dropdown($key->group_id) . "</td>
		</tr>";
		endforeach; ?>
	</tbody>
</table>

</fieldset>










<?php
function group_dropdown ($id)
{
	if ($id == '0')
	{
		$js = "onchange='alter_all_groups();'";
	} else {
		$js = '';
	}
	$string = "<select id='group_id_$id' name='group_id_$id' title='' $js >
		<option value='0' selected>" . __("No Access") . "</option>
		<option value='3'>" . __("List View Only") . "</option>
		<option value='5'>" . __("View Basic Details") . "</option>
		<option value='7'>" . __("View Sensitive Details") . "</option>
		<option value='10'>" . __("Edit Details") . "</option>
	</select>\n";
	$string = str_replace("\t", "", $string);
	$string = str_replace("\n", "", $string);
	return $string;
}
?>

<script type="text/javascript">
function alter_all_groups()
{
	totalArray = new Array();
	var count = 0;
	<?php
	$count = 0;
	foreach($query as $key):
		$count++;
		echo "	totalArray[$count] = " . $key->group_id . "\n";
	endforeach;
	?>
	var i=1;
	for (i=1;i<=<?php echo $total_count;?>;i++)
	{
		document.getElementById("group_id_"+totalArray[i]).value = document.getElementById("group_id_0").value;
	}
}
</script>

<?php echo form_close(); ?>

<script type='text/javascript'>
function createRequestObject() 
{
	var req;
	if(window.XMLHttpRequest){
		// Firefox, Safari, Opera...
		req = new XMLHttpRequest();
	} else if(window.ActiveXObject) {
		// Internet Explorer 5+
		req = new ActiveXObject("Microsoft.XMLHTTP");
	} else {
		// There is an error creating the object,
		// just as an old browser is being used.
		alert('Problem creating the XMLHttpRequest object');
	}
	return req;
}
var http = createRequestObject();
</script>
