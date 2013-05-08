<?php
if (isset($error_message))
{
	$error_message = "<font color='red'>&nbsp;" . $error_message . "</font>";
} else {
	$error_message = "";
}



$url = array();
$url[] = base_url();
if (strpos(base_url(), "http://localhost") === 0) {
	$url[] = str_replace("localhost", php_uname('n'), base_url());
}


if ($result = @dns_get_record(php_uname('n'))) {
	$dns_lookup = '';
	$url[] = str_replace("localhost", $result[0]["ip"], base_url());
} else {
	$dns_lookup = "<span style=\"color: red;\">Warning, could not resolve hostname.<br />Make sure an entry exists in DNS if you intend to use the audit script on another system.</span>";
}

$file_exist = '';
$filename = dirname(dirname(dirname(dirname(dirname(__FILE__))))) . "/other/audit_windows.vbs";
if (!file_exists($filename)) {
	$file_exist = "<span style=\"color: red;\">Please ensure $filename exists - it is not currently present.</span>";
}



echo form_open('admin/add_script_audit_windows') . "\n"; 
?>
<fieldset id="org_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Script Options')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
	<table width="80%" cellpadding = "0" cellspacing="0" style=".label {width:200px;}">
		<tr>
			<td width='50%'>
				<p><label for='strcomputer' ><?php echo __("Computer")?>: </label><input type='text' id='strcomputer' name='strcomputer' tabindex='1' title=''  value='.'/></p>
				<p><label for='submit_online'><?php echo __("Submit Online")?>: </label><input type='checkbox' id='submit_online' name='submit_online' tabindex='2' title='' checked /></p>
				<p><label for='create_file'><?php echo __("Create an XML file")?>: </label><input type='checkbox' id='create_file' name='create_file' tabindex='3' title='' /></p>
				<p><label for='url'><?php echo __("Submit to URL")?>: </label><select name='url' id='url' tabindex='4' title=''>
					<?php foreach ($url as $id => $value) {
						echo "<option value='" . $value . "index.php/system'>" . $value . "index.php/system</option>";
					} ?>
				</select>				
				<p><label for='use_proxy'><?php echo __("Use a Proxy to submit result")?>: </label><input type='checkbox' id='use_proxy' name='use_proxy' tabindex='5' title='' /></p>
				<p><label for='struser'><?php echo __("Remote Username")?>: </label><input type='text' id='struser' name='struser' tabindex='6' title=''  value=""/></p>
				<p><label for='strpass'><?php echo __("Remote User Password")?>: </label><input type='text' id='strpass' name='strpass' tabindex='7' title=''  value=""/></p>
				<p><label for='org_id'><?php echo __("Organisation")?>: </label><select id='org_id' name='org_id' tabindex='8' title=''>
					<?php foreach($org_names as $value) { 
						echo "<option value='" . $value->org_id . "'>" . $value->org_name . "&nbsp;</option>\n";
					} ?>
					</select>
				<p><label for='windows_user_work_1'><?php echo __("Active Directory User Details #1")?>: </label><input type='text' id='windows_user_work_1' name='windows_user_work_1' tabindex='9' title=''  value="physicalDeliveryOfficeName"/></p>
				<p><label for='windows_user_work_2'><?php echo __("Active Directory User Details #2")?>: </label><input type='text' id='windows_user_work_2' name='windows_user_work_2' tabindex='10' title=''  value="company"/></p>
			</td><td width='50%'>
				<p><label for='skip_mount_point'><?php echo __("Do not audit mount points")?>: </label><input type='checkbox' id='skip_mount_point' name='skip_mount_point' tabindex='11' title='' /></p>
				<p><label for='skip_printer'><?php echo __("Do not audit attached printers")?>: </label><input type='checkbox' id='skip_printer' name='skip_printer' tabindex='12' title='' /></p>
				<p><label for='skip_software'><?php echo __("Do not audit installed software")?>: </label><input type='checkbox' id='skip_software' name='skip_software' tabindex='13' title='' /></p>
				<p><label for='skip_dns'><?php echo __("Do not audit DNS information")?>: </label><input type='checkbox' id='skip_dns' name='skip_dns' tabindex='14' title='' /></p>
				<p><label for='self_delete'><?php echo __("Have the script delete itself after running")?>: </label><input type='checkbox' id='self_delete' name='self_delete' tabindex='15' title='' /></p>
				<p><label for='debugging'><?php echo __("Debugging level")?>: </label><select id='debugging' name='debugging' tabindex='16' title=''>
					<option value='0'>0 - silent</option>
					<option value='1' selected>1 - basic</option>
					<option value='2'>2 - verbose</option>
					<option value='3'>3 - very verbose</option>
				</select></p>
				<p><label for='ldap'><?php echo __("LDAP - do not normally set this")?>: </label><input type='text' id='ldap' name='ldap' tabindex='17' title='' value=''/></p>
				<p><label for='ldap_seen_days'><?php echo __("LDAP - Seen by AD in the last XX days")?>: </label><input type='text' id='ldap_seen_days' name='ldap_seen_days' tabindex='18' title='' value='0'/></p>
				<p><label for='ldap_seen_date'><?php echo __("LDAP - Seen by AD since XX date")?>: </label><input type='text' id='ldap_seen_date' name='ldap_seen_date' tabindex='19' title='' value='2012-06-30'/></p>
				<p><label for='ping_target'><?php echo __("Ping the target before attempting to audit")?>: </label><input type='checkbox' id='ping_target' name='ping_target' tabindex='20' title='' /></p>
			</td>
		</tr>
	</table>
	<p><label for='AddScript'>&nbsp;</label><?php echo form_submit(array('id'=>'AddScript', 'name'=>'AddScript'), 'Create Script'); ?></p>
	<?php echo $file_exist; ?><br /><br />
	<?php echo $dns_lookup; ?>
	<p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>
<?php echo form_close(); ?>
