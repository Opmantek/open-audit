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
<!-- v_display_general -->
<?php include "include_display_php.php"; ?>

<script src="<?php echo base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-files/'; ?>jquery/js/jquery.plugin.menuTree.js" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
	$('#menu1').menuTree({
	expandSpeed: 300,
	collapseSpeed: 300,
	parentMenuTriggerCallback: false,
	multiOpenedSubMenu: true
	});
});
</script>

<?php 

$link_serial = '';
$link_model = '';
$link_manufacturer = '';
$location_name = '';
$edit = '';
$link_warranty = '';
$link_downloads = '';

foreach($system as $key) {
	$org_id = $key->man_org_id;
	$location_id = $key->man_location_id;
	$location_rack = $key->man_location_rack;
	$location_rack_position = $key->man_location_rack_position;
	$location_level = $key->man_location_level;
	$location_suite = $key->man_location_suite;
	$location_room = $key->man_location_room;
	$os_name = $key->man_os_name;
	$serial = $key->serial;
	$system_id = $key->system_id;
	$link_manufacturer = $key->manufacturer;
	$link_serial = $key->serial;
	$link_model = $key->model;
	$type = $key->man_type;
}

foreach($system_location as $key) {
	$location_name = $key->location_name;
}

if ($access_level > 7) {
	$edit = 'class="editText" style="color:blue;"';
}

if (isset($config->show_passwords) and $config->show_passwords != 'y') {
	if (isset($decoded_access_details->ssh_password)) {
		$ssh_password = str_replace($decoded_access_details->ssh_password, str_repeat("*", strlen($decoded_access_details->ssh_password)), $decoded_access_details->ssh_password);
	} else {
		$ssh_password = '';
	}
	if (isset($decoded_access_details->windows_password)) {
		$windows_password = str_replace($decoded_access_details->windows_password, str_repeat("*", strlen($decoded_access_details->windows_password)), $decoded_access_details->windows_password);
	} else {
		$windows_password = '';
	}
} else {
	$ssh_password = $decoded_access_details->ssh_password;
	$windows_password = $decoded_access_details->windows_password;
}

if (isset($config->show_snmp_community) and $config->show_snmp_community != 'y') {
	if (isset($decoded_access_details->snmp_community)) {
		$snmp_community = str_replace($decoded_access_details->snmp_community, str_repeat("*", strlen($decoded_access_details->snmp_community)), $decoded_access_details->snmp_community);
	} else {
		$snmp_community = '';
	}
} else {
	if (isset($decoded_access_details->snmp_community)) {
		$snmp_community = $decoded_access_details->snmp_community;
	} else {
		$snmp_community = '';
	}
}

?>
<!-- below is the menu div that sits on the left -->
<div style="float: left; width: 180px; margin-left: 0%; vertical-align: top; position: fixed;" >
	<form action="#" method="post" class="niceforms">
		<fieldset id="system_menu" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Menu')?></span></legend>
			<div id="menu1" class="menuTree">
				<ul style="display: block;">
					<?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_credentials.png" /><a href="#" id="toggle_summary_credentials">Credentials</a></li><?php } ?>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_right.png" /><a href="#" id="toggle_summary_purchase">Purchase</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_home.png" /><a href="#" id="toggle_summary_location">Location / Contact</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_word.png" /><a href="#" id="toggle_summary_custom">Custom</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_find.png" /><a href="#" id="toggle_summary_audits">Audits</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_edit.png" /><a href="#" id="toggle_summary_audit_log">Audit Log</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_warning.png" /><a href="#" id="toggle_summary_alert_log">Alert Log</a></li>
		 			<?php if ($config->nmis == 'y') { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_nmis.png" /><a href="#" id="toggle_summary_nmis">NMIS Details</a></li><?php } ?>
		 			<?php if (count($network) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_network.png" /><a href="#" id="toggle_hardware_network">Network</a></li> <?php } ?>
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
							<?php if ($key->snmp_oid) { echo "<p><label for=\"snmp_oid\">" . __('SNMP OID') . ": </label><span id=\"snmp_oid\">$key->snmp_oid</span></p>"; } ?>
						</div>
						<div style="float:right; width:50%;">
							<p><label for="man_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="man_manufacturer" <?php echo $edit?>><?php echo print_something($key->man_manufacturer)?></span></p>
							<p><label for="man_model"><?php echo __('Model')?>: </label><span id="man_model" <?php echo $edit?>><?php echo print_something($key->man_model)?></span></p>
							<p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p>
							<p><label for="timestamp"><?php echo __('Most Recent Audit')?>: </label><span id="timestamp"><?php echo print_something($key->timestamp)?></span></p>
							<?php if ($key->uptime) { echo "<p><label for=\"uptime\">" . __('Uptime') . ": </label><span id=\"uptime\">$key->uptime</span></p>"; } ?>
							<p><label for="man_location_name"><?php echo __('Location Name')?>: </label><span id="man_location_name"><?php echo print_something($location_name)?>&nbsp;</span></p>

							<!--<p><label for="man_icon"><?php echo __('Icon')?>: </label><span id="man_icon" <?php echo $edit?>><?php echo print_something($key->man_icon)?></span></p> -->

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
			</div>
			<div style="margin-right: 120px;">
				<?php if ($key->man_type == 'system') { ?><p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p><?php } ?>
			</div>
			<?php echo display_custom_field('system_details', $additional_fields_data, $edit); ?>

	
		</fieldset>
	</form>
	</div> <!-- end of div Summary -->

			

	<div id="view_summary_credentials" style="float: left; width: 100%;">
	<?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?>
	<br />
	<form action="../../admin_system/system_add_credentials" method="post" class="niceforms">
		<fieldset id="summary_credentials_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Credentials')?></span></legend>
			<div style="float:right; width: 120px; text-align:center">
				<img style='margin; 10px; ' src='<?php echo $image_path;?>48_credentials.png' alt='' title='' width='48'/>
				<?php if ($access_level > 7) { ?>
					<br /><input type="button" onclick="display_credentials();" value='Edit' title='Edit' name='credentials_edit' alt='Edit' width='24' />
				<?php } ?>
			</div>
			<div id="credentials">
				<p><label for='credentials_ip_address'>IP Address: </label><span id='credentials_ip_address'><?php echo print_something($decoded_access_details->ip_address); ?></span></p>

				<p><label for='credentials_ip_address'>SNMP Version: </label><span id='credentials_snmp_version'><?php echo print_something($decoded_access_details->snmp_version); ?></span></p>
				<p><label for='credentials_ip_address'>SNMP Community: </label><span id='credentials_snmp_community'><?php echo print_something($snmp_community); ?></span></p>

				<p><label for='credentials_ssh_username'>SSH Username: </label><span id='credentials_ssh_username'><?php echo print_something($decoded_access_details->ssh_username); ?></span></p>
				<p><label for='credentials_ssh_password'>SSH Password: </label><span id='credentials_ssh_password'><?php echo print_something($ssh_password); ?></span></p>

				<p><label for='credentials_windows_username'>Windows Username: </label><span id='credentials_windows_username'><?php echo print_something($decoded_access_details->windows_username); ?></span></p>
				<p><label for='credentials_windows_password'>Windows Password: </label><span id='credentials_windows_password'><?php echo print_something($windows_password); ?></span></p>
				<p><label for='credentials_windows_domain'>Windows Domain: </label><span id='credentials_windows_domain'><?php echo print_something($decoded_access_details->windows_domain); ?></span></p>
			</div>

		</fieldset>
	</form>
	<?php } ?>
	</div>






	<div id="view_summary_purchase" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_purchase_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Purchase Details')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_purchases.png' alt='' title='' width='48'/>
			<?php foreach($system as $key): ?>
				<p><label for="man_asset_number"><?php echo __('Asset Number')?>: </label><span id="man_asset_number" <?php echo $edit?>><?php echo print_something($key->man_asset_number)?></span></p>
				<p><label for="man_purchase_vendor"><?php echo __('Vendor')?>: </label><span id="man_purchase_vendor" <?php echo $edit?>><?php echo print_something($key->man_purchase_vendor)?></span></p>
				<p><label for="man_purchase_order_number"><?php echo __('PO Number')?>: </label><span id="man_purchase_order_number" <?php echo $edit?>><?php echo print_something($key->man_purchase_order_number)?></span></p>
				<p><label for="man_purchase_invoice"><?php echo __('Invoice Number')?>: </label><span id="man_purchase_invoice" <?php echo $edit?>><?php echo print_something($key->man_purchase_invoice)?></span></p>
				<p><label for="man_purchase_date"><?php echo __('Purchase Date')?>: </label><span id="man_purchase_date" <?php echo $edit?>><?php echo print_something($key->man_purchase_date)?></span>NOTE - format should be yyyy-mm-dd.</p>
				<p><label for="man_purchase_amount"><?php echo __('Purchase Amount')?>: </label><span id="man_purchase_amount" <?php echo $edit?>><?php echo print_something($key->man_purchase_amount)?></span></p>
				<p><label for="man_warranty_duration"><?php echo __('Warranty Length')?>: </label><span id="man_warranty_duration" <?php echo $edit?>><?php echo print_something($key->man_warranty_duration)?></span></p>
				<p><label for="man_warranty_expires"><?php echo __('Warranty Expires')?>: </label><span id="man_warranty_expires" <?php echo $edit?>><?php echo print_something($key->man_warranty_expires)?></span>NOTE - format should be yyyy-mm-dd.</p>
			<?php 
			endforeach;
			echo display_custom_field('view_summary_purchase', $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
	</div>

	<div id="view_summary_location" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_location_details">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Location / Owner Details')?></span></legend>
			<div style="float:left; width:50%;">
				<div id="location_container">
					<?php if (count($system_location) > 0) {
						foreach($system_location as $key) {
							if ($access_level > 7) { 
								echo "<p><label for='man_location_id_select'>" . __('Location Name') . ": </label><span id='man_location_id_select' style='color:blue;'><span onclick='display_location();'>" . print_something($key->location_name) . "</span></span></p>\n";
							} else {
								echo "<p><label for='location_name'>" . __('Location Name') . ": </label><span id='location_name'>" . print_something($key->location_name) . "</span></p>\n";
							} 
							$full_location = '';
							if ($key->location_room > '') { $full_location = __('Room') . ' ' . $key->location_room . ', '; }
							if ($key->location_suite > '') { $full_location .= __('Suite') . ' ' . $key->location_suite . ', '; }
							if ($key->location_level > '') { $full_location .= __('Level') . ' ' . $key->location_level . ', '; }
							$full_location .= $key->location_address; ?>
							<p><label for="location_full_address"><?php echo __('Full Location')?>: </label><span id="location_full_address"><?php echo print_something($full_location)?></span></p>
							<p><label for="location_address"><?php echo __('Building Address')?>: </label><span id="location_address"><?php echo print_something($key->location_address)?></span></p>
							<p><label for="location_city"><?php echo __('City')?>: </label><span id="location_city"><?php echo print_something($key->location_city)?></span></p>
							<p><label for="location_state"><?php echo __('State')?>: </label><span id="location_state"><?php echo print_something($key->location_state)?></span></p>
							<p><label for="location_country"><?php echo __('Country')?>: </label><span id="location_country"><?php echo print_something($key->location_country)?></span></p>
						<?php } # end for each
					} else { 
						if ($access_level > 7) { 
							echo "<p><label for='man_location_id_select'>" . __('Location Name') . ": </label><span id='man_location_id_select' style='color:blue;'><span onclick='display_location();'>" . print_something('') . "</span></span></p>\n";
						} else {
							echo "<p><label for='location_name'>" . __('Location Name') . ": </label><span id='location_name'>" . print_something('') . "</span></p>\n";
						} 
						?>
						<p><label for="location_address"><?php echo __('Address')?>: </label><span id="location_address"><?php echo print_something('')?></span></p>
						<p><label for="location_city"><?php echo __('City')?>: </label><span id="location_city"><?php echo print_something('')?></span></p>
						<p><label for="location_state"><?php echo __('State')?>: </label><span id="location_state"><?php echo print_something('')?></span></p>
						<p><label for="location_country"><?php echo __('Country')?>: </label><span id="location_country"><?php echo print_something('')?></span></p>
						<p><label for="location_room"><?php echo __('Room')?>: </label><span id="location_room"><?php echo print_something('')?></span></p></span></p>
					<?php } ?>
					<p><label for="man_location_level"><?php echo __('Device specific Level')?>: </label><span id="man_location_level" <?php echo $edit?>><?php echo print_something($location_level)?></span></p> 
					<p><label for="man_location_suite"><?php echo __('Device specific Suite')?>: </label><span id="man_location_suite" <?php echo $edit?>><?php echo print_something($location_suite)?></span></p> 
					<p><label for="man_location_room"><?php echo __('Device specific Room')?>: </label><span id="man_location_room" <?php echo $edit?>><?php echo print_something($location_room)?></span></p> 
					<p><label for="man_location_rack"><?php echo __('Rack')?>: </label><span id="man_location_rack" <?php echo $edit?>><?php echo print_something($location_rack)?></span></p> 
					<p><label for="man_location_rack_position"><?php echo __('Rack Position')?>: </label><span id="man_location_rack_position" <?php echo $edit?>><?php echo print_something($location_rack_position)?></span></p> 
				</div>
			</div>	
			<div style="float:left; width:50%;">
				<?php foreach($system as $key): ?>
					<p><label for="man_owner"><?php echo __('Owner')?>: </label><span id="man_owner" <?php echo $edit?>><?php echo print_something($key->man_owner)?></span></p>
				<?php endforeach; ?>
				<div id="org_container">
				<?php if (count($system_org) > 0) {
					foreach($system_org as $key):
						echo "<p><label for='man_org_id_select'>" . __('Org Name') . ": </label>";
						if ($access_level > 7) { 
							echo "<span id='man_org_id_select' style='color:blue;'><span onclick='display_org();'>" . print_something($key->org_name) . "</span></span></p>\n"; 
						} else { 
							echo "<span id='org_name'>" . print_something($key->org_name) . "</span></p>\n"; 
						} 
						if ($key->org_name > ""){ 
							if ($key->org_parent_id == '0') { $key->org_parent_id = ''; } 
							echo "<p><label for='org_contact'>" . __('Org Contact') . ": </label><span id='org_contact'>" . print_something($key->contact_id) . "</span></p>\n";
							echo "<p><label for='parent_org'>" . __('Parent Org') . ": </label><span id='parent_org'>" . print_something($key->org_parent_name) . "</span></p>\n";
							echo "<p><label for='org_comments'>" . __('Comments') . ": </label><span id='org_comments'>" . print_something($key->org_comments) . "</span></p>\n";
						}
					endforeach;
				} ?>
				</div>
			</div>
			<div style="float:right; width: 100px; margin-left: -80%;">
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_home.png' alt='' title='' width='48'/>
			</div>
			<?php
			echo display_custom_field('view_summary_location',  $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
	</div>

	<div id="view_summary_custom" style="float: left; width: 100%;">
	<br />
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_custom_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Custom Details')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_custom.png' alt='' title='' width='48'/>
			<?php 
			echo display_custom_field('view_summary_custom', $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
	</div>

	<div id="view_summary_audits" style="float: left; width: 100%;">
	<?php if (count($audits) > 0) { ?>
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="summary_audits">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('System Audits')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_search.png' alt='' title='' width='48'/>
				</div>
				<div style="width: 90%; float:left;">
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th align="left"><?php echo __('ID')?></th>
							<th><?php echo __('By')?>&nbsp;&nbsp;&nbsp;</th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Submitted On')?></th>
							<th><?php echo __('Submitted From')?></th>
							<th><?php echo __('Audited On')?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($audits as $key): ?>
						<tr>
							<td><?php echo print_something($key->system_audits_id)?></td>
							<td><?php echo print_something($key->system_audits_username)?></td>
							<td><?php echo print_something($key->system_audits_type)?></td>
							<td><?php echo print_something($key->timestamp)?></td>
							<?php 
							if (isset($key->system_audits_ip)) {
								echo "<td><span style=\"display:none;\">" . print_something($key->system_audits_ip) . "</span>" . print_something(ip_address_from_db($key->system_audits_ip)) . "</td>\n";
							} else {
								echo "<td></td>";
							} ?>
							<td><?php echo print_something($key->system_audits_time)?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_summary_audit_log" style="float: left; width: 100%;">
	<?php if (count($audit_log) > 0 ) { ?>
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="summary_audit_log">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('System Audit Log')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_audit_log.png' alt='' title='' width='48'/>
				</div>
				<div style="width: 90%; float:left;">
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th><?php echo __('By')?></th>
							<th><?php echo __('On')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Details')?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($audit_log as $key): ?>
						<tr>
							<td><?php echo $key->user_full_name?>&nbsp;</td>
							<td><?php echo $key->timestamp?>&nbsp;</td>
							<td><?php echo $key->audit_log_event_type?>&nbsp;</td>
							<td><?php echo $key->audit_log_event_details?>&nbsp;</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</fieldset>
		</form>
	<?php } ?>
	</div>
	
	<div id="view_summary_alerts" style="float: left; width: 100%;">
	<?php if (count($alerts) > 0 ) { ?>
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="summary_alert_log">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('System Alert Log')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_alerts.png' alt='' title='' width='48'/>
				</div>
				<div style="width: 90%; float:left;">
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th><?php echo __('Timestamp')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Details')?></th>
							<th><?php echo __('Ack Time')?></th>
							<th><?php echo __('Ack User')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Note')?></th>
							<th><?php echo __('External')?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($alerts as $key): ?>
						<?php $key->alert_table = str_replace('sys_sw_', '', $key->alert_table); ?>
						<?php $key->alert_table = str_replace('sys_hw_', '', $key->alert_table); ?>
						<?php $key->alert_table = str_replace('_', ' ', $key->alert_table); ?>
						<?php $key->alert_table = ucwords($key->alert_table); ?>
						<?php 
						if ((!is_null($key->external_change_link) AND $key->external_change_link != '' ) AND 
							($key->external_change_id == '' OR is_null($key->external_change_id))) 
						{ 
							$key->external_change_id = 'link';
						} 
						?>
						<?php if ( ($key->external_change_link == '') OR (is_null($key->external_change_link))) {$key->external_change_link = '#';} ?>
						<tr>
							<td><?php echo $key->timestamp?></td>
							<td><?php echo $key->alert_table?></td>
							<td><?php echo utf8_decode($key->alert_details)?></td>
							<td><?php echo $key->alert_ack_time?></td>
							<td><?php echo $key->user_full_name?></td>
							<td><?php echo $key->change_type?></td>
							<td><?php echo $key->alert_note?></td>
							<td><a href="<?php echo $key->external_change_link?>" ><?php echo $key->external_change_id?> </a></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</fieldset>
		</form>
	<?php } ?> 
	</div>


	<div id="view_summary_nmis" style="float: left; width: 100%;">
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="summary_nmis">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('NMIS Details')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_network.png' alt='' title='' width='48'/>
				</div>
				<div style="width: 90%; float:left;">
					<p><label for="nmis_group"><?php echo __('NMIS Group')?>: </label><span id="nmis_group" <?php echo $edit?>><?php echo print_something($system[0]->nmis_group)?></span></p>
					<p><label for="nmis_name"><?php echo __('NMIS Name')?>: </label><span id="nmis_name" <?php echo $edit?>><?php echo print_something($system[0]->nmis_name)?></span></p>
					<p><label for="nmis_role_select"><?php echo __('NMIS Role')?>: </label><span id="nmis_role_select" style="color:blue;"><span onclick="display_nmis_role();"><?php echo print_something($system[0]->nmis_role)?></span></span></p>
				</div>
			</fieldset>
		</form>
	</div>


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

