<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published 
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.3.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<!-- v_display_smart_phone -->
<?php include "include_display_php.php"; ?>


<!-- below is the menu div that sits on the left -->
<div style="float: left; width: 180px; margin-left: 0%; vertical-align: top; position: fixed;" >
	<form action="#" method="post" class="niceforms">
		<fieldset id="system_menu" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Menu')?></span></legend>
			<div id="menu1" class="menuTree">
				<ul style="display: block;">
					<?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_credentials.png" /><a href="#" id="toggle_summary_credentials">Credentials</a></li><?php } ?>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_cell_phone.png" /><a href="#" id="toggle_summary_phone">Phone Details</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_right.png" /><a href="#" id="toggle_summary_purchase">Purchase</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_home.png" /><a href="#" id="toggle_summary_location">Location / Contact</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_word.png" /><a href="#" id="toggle_summary_custom">Custom</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_find.png" /><a href="#" id="toggle_summary_audits">Audits</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_edit.png" /><a href="#" id="toggle_summary_audit_log">Audit Log</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_warning.png" /><a href="#" id="toggle_summary_alert_log">Alert Log</a></li>
				</ul> 
			</div>
		</fieldset> 
	</form> 
</div>











<div id="content_column" style="margin-left: 200px;">

	<!-- below are the main content blocks -->
	
	<div id="summary" style="float: left; width: 100%;" >
	<form action="#" method="post" class="niceforms">
		<fieldset id="system_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('System Details')?></span></legend>
			<div style="float:right; width: 120px; text-align:center">
				<img width="100" title="" alt="" src="<?php echo base_url()?>device_images/<?php echo $system[0]->man_picture?>" style="border: 1px solid rgb(219, 217, 197);"/>
			<?php if (($access_level > 7) and (extension_loaded('snmp')) and ($system[0]->man_ip_address != '000.000.000.000') and ($system[0]->man_ip_address != '0.0.0.0') and ($system[0]->man_ip_address > '')) { ?>
				<input type="button" onclick="parent.location='<?php echo base_url(); ?>index.php/admin_system/system_snmp/<?php echo $system_id; ?>'" value='SNMP Probe' title='SNMP Probe' name='SNMP Probe' alt='SNMP Probe' width='24' />
			<?php } ?>
			</div>
			<div style="margin-right: 120px;">
				<?php foreach($system as $key): ?>
					<div>
						<div style="float:left; width:50%;">
							<?php if ($key->hostname == '') {$key->hostname = '-'; } 
							echo "<p><label for=\"hostname\">" . __('Hostname') . ": </label><span id=\"hostname\" $edit>$key->hostname</span></p>"; ?>
							<?php if ($key->man_ip_address) { echo "<p><label for=\"man_ip_address\">" . __('IP Address') . ": </label><span id=\"man_ip_address\" $edit>" . ip_address_from_db($key->man_ip_address) . "</span></p>"; } ?>
							<p><label for="man_environment_select"><?php echo __('Environment')?>: </label>
							<?php if ($access_level > 7) { ?>
								<span id="man_environment_select" style="color:blue;"><span onclick="display_environment();"><?php echo print_something($key->man_environment)?></span></span></p>
							<?php } else { ?>
								<span id="man_environment_select"><?php echo print_something($key->man_environment)?></span></p>
							<?php } ?>
							<p><label for="man_status_select"><?php echo __('Status')?>: </label>
							<?php if ($access_level > 7) { ?>
								<span id="man_status_select" style="color:blue;"><span onclick="display_status();"><?php echo print_something($key->man_status)?></span></span></p>
							<?php } else { ?>
								<span id="man_status_select"><?php echo print_something($key->man_status)?></span></p>
							<?php } ?>
							<p><label for="man_description"><?php echo __('Description')?>: </label><span id="man_description" <?php echo $edit?>><?php echo print_something($key->man_description)?></span></p>
							<p><label for="man_type_select"><?php echo __('Type')?>: </label>
							<?php if ($access_level > 7) { ?>
								<span id="man_type_select" style="color:blue;"><span onclick="display_type();"><?php echo print_something($key->man_type)?></span></span></p>
							<?php } else { ?>
								<span id="man_type_select"><?php echo print_something($key->man_type)?></span></p>
							<?php } ?>
							<!-- <p><label for="man_type"><?php echo __('Type')?>: </label><span id="man_type" <?php echo $edit?>><?php echo print_something($key->man_type)?></span></p> -->
							<?php if ($key->man_os_group) { echo "<p><label for=\"man_os_group\">" . __('OS Group') . ": </label><span id=\"man_os_group\">$key->man_os_group</span></p>"; } ?>
							<?php if ($key->man_os_family) { echo "<p><label for=\"man_os_family\">" . __('OS Family') . ": </label><span id=\"man_os_family\">$key->man_os_family</span></p>"; } ?>
							<?php if ($key->man_os_name) { echo "<p><label for=\"man_os_name\">" . __('OS Name') . ": </label><span id=\"man_os_name\">$key->man_os_name</span></p>"; } ?>
						</div>
						<div style="float:right; width:50%;">
							<p><label for="man_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="man_manufacturer" <?php echo $edit?>><?php echo print_something($key->man_manufacturer)?></span></p>
							<p><label for="man_model"><?php echo __('Model')?>: </label><span id="man_model" <?php echo $edit?>><?php echo print_something($key->man_model)?></span></p>
							<p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p>
							<p><label for="timestamp"><?php echo __('Most Recent Audit')?>: </label><span id="timestamp"><?php echo print_something($key->timestamp)?></span></p>
							<?php if ($key->uptime) { echo "<p><label for=\"uptime\">" . __('Uptime') . ": </label><span id=\"uptime\">$key->uptime</span></p>"; } ?>
							<p><label for="man_location_name"><?php echo __('Location Name')?>: </label><span id="man_location_name"><?php echo print_something($location_name)?>&nbsp;</span></p>
							<p><label for="man_icon"><?php echo __('Icon')?>: </label><span id="man_icon" <?php echo $edit?>><?php echo print_something($key->man_icon)?></span></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div style="margin-right: 120px;">
				<?php if ($key->man_type == 'system') { ?><p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p><?php } ?>
			</div>
			<?php echo display_custom_field('system_details', $additional_fields_data, $edit); ?>

	
		</fieldset>
	</form>
	</div> <!-- end of div Summary -->


	<div id="view_summary_phone" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_phone_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Phone Details')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_phone.png' alt='' title='' width='48'/>
			<?php foreach($system as $key): ?>
				<p><label for="man_service_number"><?php echo __('Phone Number')?>: </label><span id="man_service_number" <?php echo $edit?>><?php echo print_something($key->man_service_number)?></span></p>
				<p><label for="man_service_provider"><?php echo __('Provider')?>: </label><span id="man_service_provider" <?php echo $edit?>><?php echo print_something($key->man_service_provider)?></span></p>
				<p><label for="man_service_type"><?php echo __('Type')?>: </label>
				<?php if ($access_level > 7) { ?>
					<span id="man_service_type_select" style="color:blue;"><span onclick="display_service_type();"><?php echo print_something($key->man_service_type)?></span></span></p>
				<?php } else { ?>
					<span><?php echo print_something($key->man_service_type)?></span></p>
				<?php } ?>
				<p><label for="man_service_provider"><?php echo __('Network Provider')?>: </label><span id="man_service_provider" <?php echo $edit?>><?php echo print_something($key->man_service_provider)?></span></p>
				<p><label for="man_service_plan"><?php echo __('Plan')?>: </label><span id="man_service_plan" <?php echo $edit?>><?php echo print_something($key->man_service_plan)?></span></p>
				<p><label for="man_service_network"><?php echo __('Network')?>: </label><span id="man_service_network" <?php echo $edit?>><?php echo print_something($key->man_service_network)?></span></p>
				<p><label for="man_unlock_pin"><?php echo __('Unlock PIN')?>: </label><span id="man_unlock_pin" <?php echo $edit?>><?php if ($access_level >= 7) { echo print_something($key->man_unlock_pin); } else { echo "******"; } ?></span></p>
				<p><label for="man_serial_imei"><?php echo __('IMEI Serial')?>: </label><span id="man_serial_imei" <?php echo $edit?>><?php echo print_something($key->man_serial_imei)?></span></p>
				<p><label for="man_serial_sim"><?php echo __('SIM Serial')?>: </label><span id="man_serial_sim" <?php echo $edit?>><?php echo print_something($key->man_serial_sim)?></span></p>
			<?php 
			endforeach;
			echo display_custom_field('view_summary_purchase', $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
	</div>

<?php 
# include the common blocks of credentials, purchase, location / contact, custom, audits, audit log, alerts, nmis
include "include_display_php_common.php"; 
?>

<!-- end of content_column -->



<?php include "include_display_javascript.php"; ?>
