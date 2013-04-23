<?php echo form_open('admin/scan_ad') ?>
<fieldset id="group_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Scanning An Active Directory Domain')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
	<table width="780" cellpadding = "0" cellspacing="0">
		<tr>
			<td width='100%'>
				<p><label for="ad_ldap_server"><?php echo __("Active Directory Server"); ?>: </label><input type='text' id="ad_ldap_server" name="ad_ldap_server" tabindex='1' title='Active Directory Server'> ex: 192.168.61.200 (IP Address is best).</p>
				<p><label for='ad_user'><?php echo __("User")?>: </label><input type='text' id='ad_user' name='ad_user' tabindex='2' title='User' /> ex: open-audit\administrator</p>
				<p><label for='ad_secret'><?php echo __("Password")?>: </label><input type='password' id='ad_secret' name='ad_secret' tabindex='3' title='Password' /></p>
				<p><label for='ad_domain_name'><?php echo __("Domain Name")?>: </label><input type='text' id='ad_domain_name' name='ad_domain_name' tabindex='4' title='Domain Name'  /> ex: open-audit.local</p>
				<p><label for='ScanAD'>&nbsp;</label><input type='submit' name='ScanAD' id='ScanAD' value='Scan' /></p>
			</td>
		</tr>
	</table>
</fieldset>
</form>
