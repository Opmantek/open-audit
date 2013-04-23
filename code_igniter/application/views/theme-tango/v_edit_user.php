<div id="groups" style="background: #FFFFFF; padding: 10px; display: block;">
<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}
?>

<?php echo form_open($url) . "\n"; ?>

<fieldset id="group_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('User Details')?></span></legend>
	<?php 
	foreach ($user as $key) { 
		if ($key->user_admin == 'y'){
			$value_admin = 'CHECKED';
		} else {
			$value_admin = '';
		}
	?>
	<table width='100%'>
		<tr>
			<td width='50%'>
				<p><label for='user_name'><?php echo __("User Name")?>: </label><input type='text' id='user_name' name='user_name' tabindex='1' title='User Name' value="<?php echo $key->user_name; ?>"/></p>
				<p><label for='user_full_name'><?php echo __("Full Name")?>: </label><input type='text' id='user_full_name' name='user_full_name' tabindex='2' title='Full Name'  value="<?php echo $key->user_full_name; ?>"/></p>
				<p><label for='user_password'><?php echo __("Password")?>: </label><input type='password' id='user_password' name='user_password' tabindex='3' title='Password'  value="<?php echo set_value('user_password'); ?>"/></p>
				<p><label for='user_password_confirm'><?php echo __("Confirm Password")?>: </label><input type='password' id='user_password_confirm' name='user_password_confirm' tabindex='3' title='Password'  value="<?php echo set_value('user_password_confirm'); ?>"/></p>
				<p><label for='user_email'><?php echo __("Email Address")?>: </label><input type='text' id='user_email' name='user_email' tabindex='4' title='Email Address'  value="<?php echo $key->user_email; ?>"/></p>
			</td>
			<td width='50%'>
				<p><label for='user_lang'><?php echo __("Language")?>: </label><input type='text' id='user_lang' name='user_lang' tabindex='5' title='Language' value="<?php echo $key->user_lang; ?>"/>(en or pt-br)</p>
			<!-- 	<p><label for='user_display_number'><?php echo __("Display Systems")?>: </label><input type='text' id='user_display_number' name='user_display_number' tabindex='6' title='Display Systems' value='10' value="<?php echo $key->user_display_number; ?>"/></p> -->
				<p><label for='user_theme'><?php echo __("Theme")?>: </label><input type='text' id='user_theme' name='user_theme' tabindex='7' title='Theme' value="<?php echo $key->user_theme; ?>"/></p>
				<?php if ($this->session->userdata('user_admin') == 'y') { ?>
					<p><label for='user_admin'><?php echo __("User is Admin")?>: </label><input type='checkbox' id='user_admin' name='user_admin' tabindex='8' title='Is Admin' <?php echo $value_admin?> /></p>
				<?php } else { ?>
					<p></p>
				<?php } ?>
				<p><label for='user_sam'><?php echo __("User SAM Access Level")?>: </label>
					<select id='user_sam' name='user_sam' tabindex='8' title='Is Admin' />
						<option value="0"<?php if ($key->user_sam == '0') { echo " selected"; } ?>>No Access</option>
						<option value="1"<?php if ($key->user_sam == '1') { echo " selected"; } ?>>View Reports Only</option>
						<option value="2"<?php if ($key->user_sam == '2') { echo " selected"; } ?>>Update Counts</option>
						<option value="3"<?php if ($key->user_sam == '3') { echo " selected"; } ?>>Create Licenses</option>
					</select></p>
				<p><label for='EditUser'>&nbsp;</label><?php echo form_submit(array('id'=>'EditUser', 'name'=>'EditUser'), 'Edit User'); ?></p>
			</td>
		</tr>
	</table>
	<input type="hidden" value="<?php echo $key->user_id; ?>" name="user_id" id="user_id" />
	<?php } ?>
	<p><?php echo $error_message; ?>&nbsp;</p>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>
<br />
<br />
<?php if (isset($user_group)) { ?>
<fieldset class="niceform">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __("Group Access Details")?></span></legend>
	<table cellspacing="1" class="tablesorter">
		<thead>
			<tr>
				<th align="center" width="120"><?php echo __('Systems')?></th>
				<th><?php echo __('Group Name')?></th>
				<th><?php echo __('Group Type')?></th>
				<th><?php echo __('Group Description')?></th>
				<th align="center" class="{sorter: false}"><?php echo __('Access Level')?> - <?php echo group_dropdown(0,0)?></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach($user_group as $key):
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
				<td align=\"center\">" . group_dropdown($key->group_id, $key->access_level) . "</td>
			</tr>";
			endforeach; ?>
		</tbody>
	</table>
</fieldset>
<?php } ?>

<?php
function group_dropdown ($group_id, $access_level)
{
	if ($group_id == '0')
	{
		$js = "onchange=\"alter_all_groups();\"";
	} else {
		$js = '';
	}
	if ( $access_level == '0' )  { $option_0 =  "<option value='0' selected>";  } else { $option_0 = "<option value='0'>"; }
	if ( $access_level == '3' )  { $option_3 =  "<option value='3' selected>";  } else { $option_3 = "<option value='3'>"; }
	if ( $access_level == '5' )  { $option_5 =  "<option value='5' selected>";  } else { $option_5 = "<option value='5'>"; }
	if ( $access_level == '7' )  { $option_7 =  "<option value='7' selected>";  } else { $option_7 = "<option value='7'>"; }
	if ( $access_level == '10' ) { $option_10 = "<option value='10' selected>"; } else { $option_10 = "<option value='10'>"; }
	$string = "<select class=\"{sorter: false}\" id=\"group_id_$group_id\" name=\"group_id_$group_id\" $js >
		" . $option_0 . "&nbsp;</option>
		" . $option_3 . __("List View Only") . "</option>
		" . $option_5 . __("View Basic Details") . "</option>
		" . $option_7 . __("View Sensitive Details") . "</option>
		" . $option_10 . __("Edit Details") . "</option>
	</select>\n";
	$string = str_replace("\t", "", $string);
	$string = str_replace("\n", "", $string);
	return $string;
}
?>

<?php if ($this->session->userdata('user_admin') == 'y') { ?>
<script type="text/javascript">
function alter_all_groups()
{
	totalArray = new Array();
	var count = 0;
	<?php
	$count = 0;
	echo "\n";
	foreach($user_group as $key):
		$count++;
		echo "	totalArray[$count] = " . $key->group_id . "\n";
	endforeach;
	?>
	
	var i=1;
	for (i=1;i<=<?php echo $count;?>;i++)
	{
		document.getElementById("group_id_"+totalArray[i]).value = document.getElementById("group_id_0").value;
	}
}
</script>
<?php } ?>
<?php echo form_close(); ?>
</div>



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
