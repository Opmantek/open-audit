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
 * @version 1.5.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
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
				<p><label for="man_asset_number"><?php echo __('Asset Number')?>: </label><span id="man_asset_number" <?php echo $edit?>><?php echo print_something($key->man_asset_number)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_vendor"><?php echo __('Vendor')?>: </label><span id="man_purchase_vendor" <?php echo $edit?>><?php echo print_something($key->man_purchase_vendor)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_order_number"><?php echo __('PO Number')?>: </label><span id="man_purchase_order_number" <?php echo $edit?>><?php echo print_something($key->man_purchase_order_number)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_service_contract_number"><?php echo __('Service Contract Number')?>: </label><span id="man_purchase_service_contract_number" <?php echo $edit?>><?php echo print_something($key->man_purchase_service_contract_number)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_invoice"><?php echo __('Invoice Number')?>: </label><span id="man_purchase_invoice" <?php echo $edit?>><?php echo print_something($key->man_purchase_invoice)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_date"><?php echo __('Purchase Date')?>: </label><span id="man_purchase_date" <?php echo $edit?>><?php echo print_something($key->man_purchase_date)?></span><?php echo $edit_icon; ?> NOTE - format should be yyyy-mm-dd.</p>
				<p><label for="man_purchase_amount"><?php echo __('Purchase Amount')?>: </label><span id="man_purchase_amount" <?php echo $edit?>><?php echo print_something($key->man_purchase_amount)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_warranty_duration"><?php echo __('Warranty Length')?>: </label><span id="man_warranty_duration" <?php echo $edit?>><?php echo print_something($key->man_warranty_duration)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_warranty_expires"><?php echo __('Warranty Expires')?>: </label><span id="man_warranty_expires" <?php echo $edit?>><?php echo print_something($key->man_warranty_expires)?></span><?php echo $edit_icon; ?> NOTE - format should be yyyy-mm-dd.</p>
				<p><label for="man_lease_expiry_date"><?php echo __('Lease Expiry Date')?>: </label><span id="man_lease_expiry_date" <?php echo $edit?>><?php echo print_something($key->man_lease_expiry_date)?></span><?php echo $edit_icon; ?> NOTE - format should be yyyy-mm-dd.</p>
			<?php 
			endforeach;
			echo display_custom_field('view_summary_purchase',  $additional_fields_data, $edit); ?>
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
								echo "<p><label for='man_location_id_select'>" . __('Location Name') . ": </label><span id='man_location_id_select' style='color:blue;'><span onclick='display_location();'>" . print_something($key->location_name) . "</span></span>$edit_icon</p>\n";
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
					<p><label for="man_location_level"><?php echo __('Device specific Level')?>: </label><span id="man_location_level" <?php echo $edit?>><?php echo print_something($location_level)?></span><?php echo $edit_icon; ?></p> 
					<p><label for="man_location_suite"><?php echo __('Device specific Suite')?>: </label><span id="man_location_suite" <?php echo $edit?>><?php echo print_something($location_suite)?></span><?php echo $edit_icon; ?></p> 
					<p><label for="man_location_room"><?php echo __('Device specific Room')?>: </label><span id="man_location_room" <?php echo $edit?>><?php echo print_something($location_room)?></span><?php echo $edit_icon; ?></p> 
					<p><label for="man_location_rack"><?php echo __('Rack')?>: </label><span id="man_location_rack" <?php echo $edit?>><?php echo print_something($location_rack)?></span><?php echo $edit_icon; ?></p> 
					<p><label for="man_location_rack_position"><?php echo __('Rack Position')?>: </label><span id="man_location_rack_position" <?php echo $edit?>><?php echo print_something($location_rack_position)?></span><?php echo $edit_icon; ?></p> 
				</div>
			</div>	
			<div style="float:left; width:50%;">
				<?php foreach($system as $key): ?>
					<p><label for="man_owner"><?php echo __('Owner')?>: </label><span id="man_owner" <?php echo $edit?>><?php echo print_something($key->man_owner)?></span><?php echo $edit_icon; ?></p>
				<?php endforeach; ?>
				<div id="org_container">
				<?php if (count($system_org) > 0) {
					foreach($system_org as $key):
						echo "<p><label for='man_org_id_select'>" . __('Org Name') . ": </label>";
						if ($access_level > 7) { 
							echo "<span id='man_org_id_select' style='color:blue;'><span onclick='display_org();'>" . print_something($key->org_name) . "</span></span>$edit_icon</p>\n"; 
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
							<th><?php echo __('Audited On')?></th>
							<th><?php echo __('Submitted On')?></th>
							<th><?php echo __('Submitted From')?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($audits as $key): ?>
						<tr>
							<td><?php echo print_something($key->system_audits_id)?></td>
							<td><?php echo print_something($key->system_audits_username)?></td>
							<td><?php echo print_something($key->system_audits_type)?></td>
							<td><?php echo print_something($key->system_audits_time)?></td>
							<td><?php echo print_something($key->timestamp)?></td>
							<?php 
							if (isset($key->system_audits_ip)) {
								echo "<td><span style=\"display:none;\">" . print_something($key->system_audits_ip) . "</span>" . print_something(ip_address_from_db($key->system_audits_ip)) . "</td>\n";
							} else {
								echo "<td></td>";
							} ?>
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

	<div id="view_summary_network" style="float: left; width: 100%;">
	<?php if ($system[0]->man_ip_address != '000.000.000.000' and $system[0]->man_ip_address != '0.0.0.0' and $system[0]->man_ip_address > '') { ?>
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_network_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Network Details')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_network_wireless.png' alt='' title='' width='48'/>
			<?php foreach($system as $key): ?>
				<p><label for="man_switch_id"><?php echo __('Switch ID')?>: </label><span id="man_switch_id" <?php echo $edit?>><?php echo print_something($key->man_switch_id)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_switch_port"><?php echo __('Switch Port')?>: </label><span id="man_switch_port" <?php echo $edit?>><?php echo print_something($key->man_switch_port)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_patch_panel"><?php echo __('Patch Panel')?>: </label><span id="man_patch_panel" <?php echo $edit?>><?php echo print_something($key->man_patch_panel)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_wall_port"><?php echo __('Wall Port')?>: </label><span id="man_wall_port" <?php echo $edit?>><?php echo print_something($key->man_wall_port)?></span><?php echo $edit_icon; ?></p>
			<?php 
			endforeach; 
			echo display_custom_field('view_summary_network',  $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
	<?php } ?>
	</div>

	<div id="view_summary_phone" style="float: left; width: 100%;">
	<?php if (strpos($system[0]->man_type, 'phone') !== false) { ?>
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_phone_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Phone Details')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_phone.png' alt='' title='' width='48'/>
			<?php foreach($system as $key): ?>
				<p><label for="man_service_number"><?php echo __('Phone Number')?>: </label><span id="man_service_number" <?php echo $edit?>><?php echo print_something($key->man_service_number)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_service_provider"><?php echo __('Provider')?>: </label><span id="man_service_provider" <?php echo $edit?>><?php echo print_something($key->man_service_provider)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_service_type"><?php echo __('Type')?>: </label>
				<?php if ($access_level > 7) { ?>
					<span id="man_service_type_select" style="color:blue;"><span onclick="display_service_type();"><?php echo print_something($key->man_service_type)?>&nbsp;&nbsp;<?php echo $edit_icon; ?></span></span></p>
				<?php } else { ?>
					<span><?php echo print_something($key->man_service_type)?></span></p>
				<?php } ?>
				<p><label for="man_service_provider"><?php echo __('Network Provider')?>: </label><span id="man_service_provider" <?php echo $edit?>><?php echo print_something($key->man_service_provider)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_service_plan"><?php echo __('Plan')?>: </label><span id="man_service_plan" <?php echo $edit?>><?php echo print_something($key->man_service_plan)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_service_network"><?php echo __('Network')?>: </label><span id="man_service_network" <?php echo $edit?>><?php echo print_something($key->man_service_network)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_unlock_pin"><?php echo __('Unlock PIN')?>: </label><span id="man_unlock_pin" <?php echo $edit?>><?php if ($access_level >= 7) { echo print_something($key->man_unlock_pin); } else { echo "******"; } ?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_serial_imei"><?php echo __('IMEI Serial')?>: </label><span id="man_serial_imei" <?php echo $edit?>><?php echo print_something($key->man_serial_imei)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_serial_sim"><?php echo __('SIM Serial')?>: </label><span id="man_serial_sim" <?php echo $edit?>><?php echo print_something($key->man_serial_sim)?></span><?php echo $edit_icon; ?></p>
			<?php 
			endforeach;
			echo display_custom_field('view_summary_phone', $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
	<?php } ?>
	</div>

	<div id="view_summary_attachment" style="float: left; width: 100%;">
	<br />
	<br />
	<?php if ($access_level > 7) { ?>
	<form action="<?php echo base_url();?>index.php/main/add_attachment/<?php echo $system_id; ?>" method="post" enctype="multipart/form-data" class="niceforms">
	<?php } else { ?>
	<form action="#" method="post" class="niceforms">
	<?php } ?>
		<fieldset id="summary_attachment_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Attachment Details')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_custom.png' alt='' title='' width='48'/><br />
			<?php if ($access_level > 7) { ?>
			<input style='float: right; margin; 10px; ' type='button' value='Upload' onclick='upload_attachment()' alt='' title='' width='48'/>
			<?php } ?>
			<?php if (count($attachment) > 0) { ?>
			<table cellspacing="1" class="tablesorter" width="100%">
				<thead>
					<tr>
						<th><?php echo __('Name')?></th>
						<th><?php echo __('Uploaded On')?></th>
						<th align="center"><?php echo __('View')?></th>
						<th align="center"><?php echo __('Download')?></th>
						<?php if ($access_level > 7) { ?>
						<th align="center"><?php echo __('Delete')?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach($attachment as $key): ?>
					<tr>
						<td><?php echo print_something($key->att_title)?></td>
						<td><?php echo print_something($key->timestamp)?></td>
						<td align="center"><a href="<?php echo base_url();?>index.php/main/show_attachment/<?php echo print_something($key->att_id)?>"><img src='<?php echo $image_path;?>16_word.png' alt='' title='' /></a></td>
						<td align="center"><a href="<?php echo base_url();?>index.php/main/download_attachment/<?php echo print_something($key->att_id)?>"><img src='<?php echo $image_path;?>16_link.png' alt='' title='' /></a></td>
						<?php if ($access_level > 7) { ?>
						<td align="center"><a href="<?php echo base_url();?>index.php/main/delete_attachment/<?php echo print_something($key->att_id)?>"><img src='<?php echo $image_path;?>16_delete.png' alt='' title='' /></a></td>
						<?php } ?>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php } ?>
			<span id='attachment_listing'><br /><br /></span>
			
		</fieldset>
	</form>
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
					<!-- <p><label for="nmis_export_select"><?php echo __('NMIS Export')?>: </label><span id="nmis_export_select" style="color:blue;" data-nmis="<?php echo $system[0]->nmis_export?>"><span onclick="display_nmis_export();"><?php echo print_something($system[0]->nmis_export)?></span></span></p> -->
					<p><label for="nmis_export"><?php echo __('NMIS Export')?>: </label><input id="nmis_export" onClick="check_nmis_export();" type="checkbox"<?php if ($system[0]->nmis_export == 'true') { echo " checked"; } ?><?php if ($access_level != 10) { echo " disabled"; } ?> /></p>
				</div>
			</fieldset>
		</form>
	</div>

	<div id="view_summary_vms" style="float: left; width: 100%;">
	<?php if (count($vm) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="vm_details">
				<legend><span style="font-size: 10pt;">&nbsp;<?php echo __('Virtual Machine Details')?></span></legend>
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th align="center">Icon</th>
							<th>Name</th>
							<!-- <th>Group</th> -->
							<th align="center">Memory</th>
							<th align="center">CPU</th>
							<th align="center">Status</th>
							<th>UUID</th>
							<th>Config File</th>
						</td>
					</thead>
					<tbody>
					<?php foreach($vm as $key) { 
						if ($key->man_icon == 'unknown' or $key->man_icon == '') { 
							$icon = ''; 
						} else {
							$icon = "<a href=\"" . base_url() . "index.php/main/system_display/" . $key->guest_system_id . "\"><img src=\"" . base_url() . "theme-tango/tango-images/16_" . $key->man_icon . ".png\" /></a>\n";
						}
						if (trim($key->status) == 'powered off' or trim($key->status) == 'poweredOff') {
							$status = '<span style="color: red;">' . $key->status . '</span>'; 
						} else {
							$status = '<span style="color: green;">' . $key->status . '</span>'; 
						} 
						if ($key->guest_system_id != '' and $key->guest_system_id != '0') {
							$link = "<a href=\"" . base_url() . "index.php/main/system_display/" . $key->guest_system_id . "\">" . $key->name . "</a>\n";
						} else {
							$link = $key->name;
						}
						?><tr>
							<td align="center"><?php echo $icon; ?></td>
							<td><?php echo $link; ?></td>
							<!-- <td><?php echo $key->vm_group; ?></td> -->
							<td align="center"><?php echo $key->memory; ?></td>
							<td align="center"><?php echo $key->cpu; ?></td>
							<td align="center"><?php echo $status; ?></td>
							<td><?php echo $key->uuid; ?></td>
							<td><?php echo $key->config_file; ?></td>
						</tr>
					<?php } ?>
				</table>
				Note - Status as at <?php echo $system[0]->last_seen; ?>.<br />Note - Click icon to view guest details.
			</fieldset>
			<br />
		</form>
	<?php } ?>
	</div>

	
	<div id="view_summary_network_interfaces" style="float: left; width: 100%;">
	<?php if (count($network) > 0 and ($system[0]->man_type != 'computer')) { ?>
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
								<th>Index</th>
								<th>MAC Address</th>
								<th>Connection ID</th>
								<th>Description</th>
								<th>Alias</th>
								<th>Type</th>
								<th>Enabled</th>
								<th>Speed</th>
							</td>
						</thead>
						<tbody>
						<?php foreach($network as $key) { ?><tr>
								<td><?php echo $key->net_index; ?></td>
								<td><?php echo $key->net_mac_address; ?></td>
								<td><?php echo $key->net_connection_id; ?></td>
								<td><?php echo $key->net_description; ?></td>
								<td><?php echo $key->net_alias; ?></td>
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
									} ?><td><?php echo "<span style=\"display: none;\">" . substr('000000000000'.$key->net_speed, -13) . "</span>" . $speed; ?></td>
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
								<th>Index</th>
								<th>MAC Address</th>
								<th>Interface</th>
								<th>IP Address</th>
								<th>Subnet</th>
							</td>
						</thead>
						<tbody>
						<?php foreach ($ip as $ip_address) { 
							if ($ip_address->net_connection_id != '') {
								$ip_address->net_connection_id = $ip_address->net_connection_id . " - "; }?><tr>
							<td><?php echo $ip_address->net_index; ?></td>
							<td><?php echo $ip_address->net_mac_address; ?></td>
							<td><?php echo $ip_address->net_connection_id . $ip_address->net_description; ?></td>
							<td><?php echo "<span style=\"display: none;\">" . $ip_address->ip_address_v4 . "</span>" . print_something(ip_address_from_db($ip_address->ip_address_v4))?></td>
							<td><?php echo print_something($ip_address->ip_subnet)?></td>
							</tr>
						<?php } ?>
					</table>
				</fieldset>
			</fieldset>
		</form>
	<?php } ?>
	</div>




