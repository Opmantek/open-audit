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
<!-- v_display_printer -->
<?php include "include_display_php.php"; ?>


<!-- below is the menu div that sits on the left -->
<div style="float: left; width: 180px; margin-left: 0%; vertical-align: top; position: fixed;" >
	<form action="#" method="post" class="niceforms">
		<fieldset id="system_menu" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Menu')?></span></legend>
			<div id="menu1" class="menuTree">
				<ul style="display: block;">
					<?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_credentials.png" /><a href="#" id="toggle_summary_credentials">Credentials</a></li><?php } ?>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_right.png" /><a href="#" id="toggle_summary_purchase">Purchase</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_devices.png" /><a href="#" id="toggle_summary_network">Network</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_home.png" /><a href="#" id="toggle_summary_location">Location / Contact</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_word.png" /><a href="#" id="toggle_summary_custom">Custom</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_find.png" /><a href="#" id="toggle_summary_audits">Audits</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_edit.png" /><a href="#" id="toggle_summary_audit_log">Audit Log</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_warning.png" /><a href="#" id="toggle_summary_alert_log">Alert Log</a></li>
		 			<?php if ($config->nmis == 'y') { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_nmis.png" /><a href="#" id="toggle_summary_nmis">NMIS Details</a></li><?php } ?>
		 			<?php if (count($network) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_network.png" /><a href="#" id="toggle_hardware_network">Network Interfaces</a></li> <?php } ?>
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
			<?php if (($access_level > 7) and ($system[0]->man_ip_address != '000.000.000.000') and ($system[0]->man_ip_address != '0.0.0.0') and ($system[0]->man_ip_address > '')) { ?>
			<input type="button" onclick="window.location.href='<?php echo base_url(); ?>index.php/discovery/discover_subnet/device/<?php echo $system_id; ?>'" value='Discover Device' title='Discover Device' name='Discover Device' alt='Discover Device' width='24' />
			<?php } ?>
			<?php if (($access_level > 7) and (extension_loaded('snmp')) and ($system[0]->man_ip_address != '000.000.000.000') and ($system[0]->man_ip_address != '0.0.0.0') and ($system[0]->man_ip_address > '')) { ?>
				<input type="button" onclick="window.open('<?php echo base_url(); ?>index.php/admin_system/system_snmp/<?php echo $system_id; ?>', 'SNMP Scan', 'height=300,left=100,location=no,menubar=no,resizable=no,scrollbars=no,status=no,titlebar=no,toolbar=no,top=100,width=400');" value='SNMP Scan' title='SNMP Scan' name='SNMP Scan' alt='SNMP Scan' width='24' />
			<?php } ?>
		</div>
			<div style="float: left; width:75%; margin-right: 120px;">
				<?php foreach($system as $key): ?>
					<div>
						<div style="float:left; width:50%;">
							<?php if ($key->hostname == '') {$key->hostname = '-'; } 
							echo "<p><label for=\"hostname\">" . __('Hostname') . ": </label><span id=\"hostname\" $edit>$key->hostname</span>$edit_icon</p>"; ?>
							<p><label for="man_ip_address"><?php echo __('IP Address')?>: </label><span id="man_ip_address" <?php echo $edit?>><?php echo print_something(ip_address_from_db($key->man_ip_address))?></span><?php echo $edit_icon; ?></p>
							<p><label for="man_type_select"><?php echo __('Type')?>: </label>
							<?php if ($access_level > 7) { ?>
								<span id="man_type_select" style="color:blue;"><span onclick="display_type();"><?php echo print_something($key->man_type)?></span></span><?php echo $edit_icon; ?></p>
							<?php } else { ?>
								<span id="man_type_select"><?php echo print_something($key->man_type)?></span></p>
							<?php } ?>
							<p><label for="man_environment_select"><?php echo __('Environment')?>: </label>
							<?php if ($access_level > 7) { ?>
								<span id="man_environment_select" style="color:blue;"><span onclick="display_environment();"><?php echo print_something($key->man_environment)?></span></span><?php echo $edit_icon; ?></p>
							<?php } else { ?>
								<span id="man_environment_select"><?php echo print_something($key->man_environment)?></span></p>
							<?php } ?>
							<p><label for="man_status_select"><?php echo __('Status')?>: </label>
							<?php if ($access_level > 7) { ?>
								<span id="man_status_select" style="color:blue;"><span onclick="display_status();"><?php echo print_something($key->man_status)?></span></span><?php echo $edit_icon; ?></p>
							<?php } else { ?>
								<span id="man_status_select"><?php echo print_something($key->man_status)?></span></p>
							<?php } ?>
							<p><label for="man_description"><?php echo __('Description')?>: </label><span id="man_description" <?php echo $edit?>><?php echo print_something($key->man_description)?></span><?php echo $edit_icon; ?></p>
							<p><label for="timestamp"><?php echo __('Most Recent Audit')?>: </label><span id="timestamp"><?php echo print_something($key->timestamp)?></span></p>
							<p><label for="printer_color"><?php echo __('Colour Capable')?>: </label><span id="printer_color"><?php echo print_something($key->printer_color)?></span></p>
							<p><label for="printer_duplex"><?php echo __('Duplex Capable')?>: </label><span id="printer_duplex"><?php echo print_something($key->printer_duplex)?></span></p>
							<?php if ($key->snmp_oid) { echo "<p><label for=\"snmp_oid\">" . __('SNMP OID') . ": </label><span id=\"snmp_oid\">$key->snmp_oid</span></p>"; } ?>
						</div>
						<div style="float:right; width:50%;">
							<p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span><?php echo $edit_icon; ?></p>
							<p><label for="man_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="man_manufacturer" <?php echo $edit?>><?php echo print_something($key->man_manufacturer)?></span><?php echo $edit_icon; ?></p>
							<p><label for="man_model"><?php echo __('Model')?>: </label><span id="man_model" <?php echo $edit?>><?php echo print_something($key->man_model)?></span><?php echo $edit_icon; ?></p>
							<p><label for="man_location_name"><?php echo __('Location Name')?>: </label><span id="man_location_name"><?php echo print_something($location_name)?>&nbsp;</span></p>
							<p><label for="link_warranty"><?php echo __('Warranty Link')?>: </label><span id="link_warranty"><?php echo print_something($link_warranty)?> </span></p>
							<p><label for="link_downloads"><?php echo __('Downloads Link')?>: </label><span id="link_downloads"><?php echo print_something($link_downloads)?> </span></p>
							<?php if ($key->linked_sys <> '') {?><p><label for="linked_sys"><?php echo __('Linked Computer')?>: </label><span id="linked_sys"><a href="<?php echo base_url(); ?>index.php/main/system_display/<?php echo $key->linked_sys ?>"><?php echo $key->linked_sys ?></a></span><?php echo $edit_icon; ?></p><?php } ?>

							<?php if ($access_level > 7) { ?>
								<p><label for="man_icon"><?php echo __('Icon')?>: </label>
									<span id="man_icon">
										<a href="#" onclick="window.open('<?php echo base_url(); ?>index.php/admin_system/system_icon/<?php echo $system_id; ?>', 'Icon Picker', 'height=300,left=100,location=no,menubar=no,resizable=no,scrollbars=yes,status=no,titlebar=no,toolbar=no,top=100,width=400');" alt="Click to edit">
											<img src="<?php echo base_url()?>theme-tango/tango-images/16_<?php echo $key->man_icon?>.png" /> (<?php echo str_replace('16_', '', str_replace('_', ' ', $key->man_icon)); ?>) <span style="color: blue;">click to edit</span></a></span></p>
							<?php } else { ?>
								<p><label for="man_icon"><?php echo __('Icon')?>: </label><span id="man_icon"><img src="<?php echo base_url()?>theme-tango/tango-images/16_<?php echo $key->man_icon?>.png" /></span></p>
							<?php } ?>

						</div>
					</div>
				<?php endforeach; ?>
				<?php echo display_custom_field('system_details', $additional_fields, $edit); ?>
			</div>
			<div style="float: left;margin-right: 120px;">
				<?php if ($os_name > ''){ ?><label for="man_os_name"><?php echo __('OS Name')?>: </label><span id="man_os_name"><?php echo print_something($os_name)?></span><?php } ?>
				<?php if ($key->man_type == 'system') { ?><p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p><?php } ?>
			</div>
		</fieldset>
	</form>
	</div> <!-- end of div Summary -->

<?php 
# include the common blocks of credentials, purchase, location / contact, custom, audits, audit log, alerts, nmis
include "include_display_php_common.php"; 
?>	

	<div id="view_hardware_network" style="float: left; width: 100%;">
	<?php if (count($network) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="network_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Network Details')?></span></legend>
				<fieldset id="network_hardware_details">
					<legend><span style="font-size: 10pt;">&nbsp;<?php echo __('Hardware Interface Details')?></span></legend>
					<table cellspacing="1" class="tablesorter" width="100%">
						<thead>
							<tr>
								<th>MAC Address</th>
								<th>Connection ID</th>
								<th>Description</th>
								<th>Type</th>
								<th>Enabled</th>
								<th>Speed</th>
							</td>
						</thead>
						<tbody>
						<?php foreach($network as $key) { ?><tr>
								<td><?php echo $key->net_mac_address; ?></td>
								<td><?php echo $key->net_connection_id; ?></td>
								<td><?php echo $key->net_description; ?></td>
								<td><?php echo $key->net_adapter_type; ?></td>
								<td><?php echo $key->net_ip_enabled; ?></td>
								<?php if (intval($key->net_speed) < 1000) {
										$speed = number_format(intval($key->net_speed)) . " b/s";
									}
									if (intval($key->net_speed) >= 1000 and intval($key->net_speed) < 1000000) {
										$speed = number_format(intval($key->net_speed / 1000 )) . " Kb/s";
									}
									if (intval($key->net_speed) >= 1000000 and intval($key->net_speed) < 1000000000) {
										$speed = number_format(intval($key->net_speed / 1000 / 1000)) . " Mb/s";
									}
									if (intval($key->net_speed) >= 1000000000) {
										$speed = number_format(intval($key->net_speed / 1000 / 1000 / 1000)) . " Gb/s";
									} ?><td><?php echo $speed; ?></td>
							</tr>
						<?php } ?>
					</table>
				</fieldset>
				<br />
				<fieldset id="network_ip_details">
					<legend><span style="font-size: 10pt;">&nbsp;<?php echo __('IP Address Details')?></span></legend>
					<table cellspacing="1" class="tablesorter" width="100%">
						<thead>
							<tr>
								<th>MAC Address</th>
								<th>IP Address</th>
								<th>Subnet</th>
							</td>
						</thead>
						<tbody>
						<?php foreach ($ip as $ip_address) { ?><tr>
							<td><?php echo print_something($ip_address->net_mac_address)?></td>
							<td><?php echo print_something(ip_address_from_db($ip_address->ip_address_v4))?></td>
							<td><?php echo print_something($ip_address->ip_subnet)?></td>
							</tr>
						<?php } ?>
					</table>
				</fieldset>
			</fieldset>
		</form>
	<?php } ?>
	</div>

<!-- end of content_column -->



<?php include "include_display_javascript.php"; ?>

