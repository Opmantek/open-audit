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
 * @version 1.3.2
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<!-- v_display_computer -->
	<?php if (count($windows) > 0) { ?>
	<div id="view_summary_windows" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_windows_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Windows Details')?></span></legend>
			<div style="float:right; width: 100px;">
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_<?php echo $icon; ?>.png' alt='' title='' width='48'/>
			</div>
			<?php foreach($windows as $key): ?>
			<div>
				<div style="float:left; width:50%;">
					<p><label for="windows_registered_user"><?php echo __('Registered User')?>: </label><span id="windows_registered_user"><?php echo print_something($key->windows_registered_user)?></span></p>
					<p><label for="windows_organisation"><?php echo __('Registered Org')?>: </label><span id="windows_organisation"><?php echo print_something($key->windows_organisation)?></span></p>
					<p><label for="windows_language"><?php echo __('Language')?>: </label><span id="windows_language"><?php echo print_something($key->windows_language)?></span></p>
					<p><label for="windows_country_code"><?php echo __('Country')?>: </label><span id="windows_country_code"><?php echo print_something(ucfirst(mb_strtolower($key->windows_country_code)))?></span></p>
					<p><label for="windows_time_caption"><?php echo __('Time (caption)')?>: </label><span id="windows_time_caption"><?php echo print_something($key->windows_time_caption)?></span></p>
					<p><label for="windows_time_daylight"><?php echo __('Time (daylight)')?>: </label><span id="windows_time_daylight"><?php echo print_something($key->windows_time_daylight)?></span></p>
					<p><label for="windows_part_of_domain"><?php echo __('Part of Domain')?>: </label><span id="windows_part_of_domain"><?php echo print_something($key->windows_part_of_domain)?></span></p>
					<p><label for="windows_domain_role"><?php echo __('Domain Role')?>: </label><span id="windows_domain_role"><?php echo print_something($key->windows_domain_role)?></span></p>
					<p><label for="os_install_date"><?php echo __('OS Install Date')?>: </label><span id="os_install_date"><?php echo print_something($system[0]->pc_date_os_installation)?></span></p>
				</div>
				<div style="float:left; width:40%;">
					<p><label for="windows_domain_short"><?php echo __('Domain')?>: </label><span id="windows_domain_short"><?php echo print_something($key->windows_domain_short)?></span></p>
					<p><label for="windows_domain_controller_address"><?php echo __('DC Address')?>: </label><span id="windows_domain_controller_address"><?php echo print_something($key->windows_domain_controller_address)?></span></p>
					<p><label for="windows_domain_controller_name"><?php echo __('DC Name')?>: </label><span id="windows_domain_controller_name"><?php echo print_something($key->windows_domain_controller_name)?></span></p>
					<p><label for="windows_boot_device"><?php echo __('Boot Device')?>: </label><span id="windows_boot_device"><?php echo print_something($key->windows_boot_device)?></span></p>
					<p><label for="windows_install_directory"><?php echo __('Install Directory')?>: </label><span id="windows_install_directory"><?php echo print_something($key->windows_install_directory)?></span></p>
					<p><label for="windows_service_pack"><?php echo __('Service Pack')?>: </label><span id="windows_service_pack"><?php echo print_something($key->windows_service_pack)?></span></p>
					<p><label for="windows_version"><?php echo __('Version')?>: </label><span id="windows_version"><?php echo print_something($key->windows_version)?></span></p>
					<p><label for="windows_build_number"><?php echo __('Build Number')?>: </label><span id="windows_build_number"><?php echo print_something($key->windows_build_number)?></span></p>
				</div>
			</div>
			<?php
			if ($key->windows_active_directory_ou > "") { ?>
			<div style="float:left; width:90%;">
				<label for="windows_active_directory_ou"><?php echo __('Active Directory OU')?>: </label><span id="windows_active_directory_ou"><?php echo print_something(str_replace(",", ", ", $key->windows_active_directory_ou))?></span>
			</div>
			<?php 
			}
			if ($key->windows_user_name > "") { ?>
			<div style="float:left; width:90%;">
				<p><label for="windows_user_name"><?php echo __('Last Logged on User')?>: </label><span id="windows_user_name"><?php echo str_replace("&", "&amp;", print_something($key->windows_user_name))?></span></p>
			</div>
			<?php } ?>
			<?php 
			$windows_service_pack = $key->windows_service_pack; 
			endforeach;
			echo display_custom_field('view_summary_windows',  $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
	</div> <!-- end of view_summary_windows -->
	<?php } ?>

	<div id="view_hardware_processor" style="float: left; width: 100%;">
	<?php if (count($processor) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="processor_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Processor Details')?></span></legend>
				<?php foreach($processor as $key):
					$image = $image_path . '48_component_cpu.png';
					if ((mb_substr_count($key->processor_manufacturer, 'GenuineIntel') > 0) and (substr_count($image, '48_component_cpu') > 0))
					{
						$image = $image_path . '48_intel.png';
					}
					if ((mb_substr_count($key->processor_manufacturer, 'AuthenticAMD') > 0) and (substr_count($image, '48_component_cpu') > 0))
					{
						$image = $image_path . '48_amd.png';
					}
					if (! isset($key->processor_count) or $key->processor_count == '' or $key->processor_count == '0') { $key->processor_count = '&nbsp;'; }
					if (! isset($key->processor_logical) or $key->processor_logical == '' or $key->processor_logical == '0') { $key->processor_logical = '&nbsp;'; }
					?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image;?>' alt='' title='' width='48'/>
					<p><label for="processor_description"><?php echo __('Description')?>: </label><span id="processor_description" class="form_field"><?php echo $key->processor_description?></span></p>
					<p><label for="processor_speed"><?php echo __('Speed')?>: </label><span id="processor_speed" class="form_field"><?php echo $key->processor_speed?> MHz</span></p>
					<p><label for="processor_count"><?php echo __('Physical Processors')?>: </label><span id="processor_count" class="form_field"><?php echo $key->processor_count?></span></p>
					<p><label for="processor_cores"><?php echo __('Total Processor Cores')?>: </label><span id="processor_cores" class="form_field"><?php echo $key->processor_cores?></span></p>
					<p><label for="processor_logical" style="white-space: nowrap;"><?php echo __('Total Logical Processors')?>: </label><span id="processor_logical" class="form_field"><?php echo $key->processor_logical?></span></p>
					<p><label for="processor_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="processor_manufacturer" class="form_field"><?php echo $key->processor_manufacturer?></span></p>
					<?php endforeach; ?>
					<?php echo display_custom_field('view_hardware_processor',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_memory" style="float: left; width: 100%;">
	<?php if (count($memory) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="memory_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Memory Details')?></span></legend>
				<div style="min-width: 50px; float: right;">
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_component_cpu.png' alt='' title='' width='48'/>
				</div>
				<div style="width: 90%; float: left;">
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th><?php echo __('Bank')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Form Factor')?></th>
							<th><?php echo __('Detail')?></th>
							<th><?php echo __('Serial')?></th>
							<th><?php echo __('Capacity')?></th>
							<th><?php echo __('Speed')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($memory as $key): ?>
							<tr>
								<td><?php echo $key->memory_bank?></td>
								<td><?php echo $key->memory_type?></td>
								<td><?php echo $key->memory_form_factor?></td>
								<td><?php echo $key->memory_detail?></td>
								<td><?php echo $key->memory_serial?></td>
								<td><?php echo number_format($key->memory_capacity)?> MiB&nbsp;</td>
								<td><?php echo number_format($key->memory_speed)?> MHz&nbsp;</td>
							</tr>
					<?php endforeach; ?>
					</tbody>
					</table>
					<?php echo display_custom_field('view_hardware_memory',  $additional_fields_data, $edit); ?>
				</div>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_bios" style="float: left; width: 100%;">
	<?php if (count($bios) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="bios_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Bios Details')?></span></legend>
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_gnome-cpu.png' alt='' title='' width='48'/>
				<?php foreach($bios as $key): ?>
					<p><label for="bios_description"><?php echo __('Description')?>: </label><span id="bios_description"><?php echo print_something($key->bios_description); ?></span></p>
					<p><label for="bios_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="bios_manufacturer"><?php echo print_something($key->bios_manufacturer); ?></span></p>
					<p><label for="bios_serial"><?php echo __('Serial')?>: </label><span id="bios_serial"><?php echo print_something($key->bios_serial); ?>&nbsp;</span></p>
					<p><label for="bios_smversion"><?php echo __('SMVersion')?>: </label><span id="bios_smversion"><?php echo print_something($key->bios_smversion); ?></span></p>
					<p><label for="bios_version"><?php echo __('Version')?>: </label><span id="bios_version"><?php echo print_something($key->bios_version); ?></span></p>
					<p><label for="bios_asset_tag"><?php echo __('Asset Tag')?>: </label><span id="bios_asset_tag"><?php echo print_something($key->bios_asset_tag); ?></span></p>
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_bios',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_motherboard" style="float: left; width: 100%;">
	<?php if (count($motherboard) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="motherboard_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Motherboard Details')?></span></legend>
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_gnome-cpu.png' alt='' title='' width='48'/>
				<?php foreach($motherboard as $key): ?>
					<p><label for="motherboard_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="motherboard_manufacturer"><?php echo print_something($key->manufacturer)?></span></p>
					<p><label for="motherboard_model"><?php echo __('Model')?>: </label><span id="motherboard_model"><?php echo print_something($key->model)?></span></p>
					<p><label for="motherboard_serial"><?php echo __('Serial')?>: </label><span id="motherboard_serial"><?php echo print_something($key->serial)?></span></p>
					<p><label for="motherboard_cpu_slots"><?php echo __('CPU Slots')?>: </label><span id="motherboard_cpu_slots"><?php echo print_something($key->processor_slots)?></span></p>
					<p><label for="motherboard_cpu_type"><?php echo __('CPU Type')?>: </label><span id="motherboard_cpu_type"><?php echo print_something($key->processor_type)?></span></p>
					<p><label for="motherboard_memory_slots"><?php echo __('Memory Slots')?>: </label><span id="motherboard_memory_slots"><?php echo print_something($key->memory_slots)?></span></p>
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_motherboard',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_network" style="float: left; width: 100%;">
	<?php if (count($network) > 0) { ?>
	<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="network_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Network Details')?></span></legend>
				<?php foreach($network as $key):
						if (intval($key->net_speed) < 1000) {
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
						} ?><fieldset id="network_details_<?php echo str_replace('/','-',$key->net_id)?>">
					<legend><span style="font-size: 10pt;">&nbsp;<?php echo $key->net_description?> <?php echo __('Details')?></span></legend>
					<div>
						<div style="float:left; width:50%;">
							<p><label for="network_connection_id_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Connection ID')?>: </label><span id="network_connection_id_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_connection_id)?></span></p>
							<p><label for="network_mac_address_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('MAC Address')?>: </label><span id="network_mac_address_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_mac_address)?></span></p>
							<p><label for="network_model_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Model')?>: </label><span id="network_model_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_model)?></span></p>
							<p><label for="network_manufacturer_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Manufacturer')?>: </label><span id="network_manufacturer_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_manufacturer)?></span></p>
							<p><label for="network_speed_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Speed')?>: </label><span id="network_speed_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo $speed; ?></span></p>
							<p><label for="network_connection_status_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Status')?>: </label><span id="network_connection_status_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_connection_status)?></span></p>
							<p><label for="network_adapter_type_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Adapter Type')?>: </label><span id="network_adapter_type_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_adapter_type)?></span></p>
						</div>
						<div style="float:left; width:50%;">
							<p><label for="network_dhcp_enabled_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('DHCP Enabled')?>: </label><span id="network_dhcp_enabled_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_dhcp_enabled)?></span></p>
							<p><label for="network_dhcp_server_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('DHCP Server')?>: </label><span id="network_dhcp_server_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_dhcp_server)?></span></p>
							<p><label for="network_dhcp_lease_obtained_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('DHCP Lease Obtained')?>: </label><span id="network_dhcp_lease_obtained_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_dhcp_lease_obtained)?></span></p>
							<p><label for="network_dhcp_lease_expires_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('DHCP Lease Expires')?>: </label><span id="network_dhcp_lease_expires_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_dhcp_lease_expires)?></span></p>
							<p><label for="network_dns_domain_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('DNS Domain')?>: </label><span id="network_dns_domain_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_dns_domain)?></span></p>
							<p><label for="network_dns_server_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('DNS Server(s)')?>: </label><span id="network_dns_server_<?php echo str_replace('/','-',$key->net_id)?>"><span><?php echo print_something(str_replace(",", ", ", $key->net_dns_server))?></span></span></p>
							<p><label for="network_dns_domain_reg_enabled_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('DNS Auto-Register')?>: </label><span id="network_dns_domain_reg_enabled_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_dns_domain_reg_enabled)?></span></p>
						</div>
					</div>	
				<?php
					if (mb_substr_count(mb_strtoupper($key->net_model), 'WIRELESS') > 0) 
					{
						$image = '48_network_wireless';
					} else {
						$image = '48_network';
					}
					if (file_exists($images_directory . "48_" . str_replace(" ", "", strtolower($key->net_manufacturer)) . ".png")) {
						$image = "48_" . strtolower($key->net_manufacturer);
					}
				?>	<div style="float:right; width: 100px; margin-left: -80%;">
						<img style='float: right; margin; 10px; ' src='<?php echo $image_path . $image; ?>.png' alt='' title='' width='48'/>
					</div>						
					<table cellspacing="1" class="tablesorter" width="100%">
						<thead>
							<tr>
								<th><?php echo __('IP Address')?></th>
								<th><?php echo __('Subnet')?></th>
								<th><?php echo __('IP Version')?></th>
							</tr>
						</thead>
						<tbody>
<?php
					$ip_count = 0;
					foreach ($ip as $ip_address) {
						if ($ip_address->net_mac_address == $key->net_mac_address and $ip_address->net_index == $key->net_index) {
							$ip_address_displayed = '000.000.000.000';
							if ($ip_address->ip_address_version == '6') {
								$ip_address_displayed = $ip_address->ip_address_v6;
							} else {
								$ip_address_displayed = ip_address_from_db($ip_address->ip_address_v4);
							}
							$ip_count ++;
							echo "							<tr><td>" . print_something($ip_address_displayed) . "</td><td>" . print_something($ip_address->ip_subnet) . "</td><td>" . print_something($ip_address->ip_address_version) . "</td></tr>\n";
					}
				}
				if ($ip_count == 0) { ?>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<?php } ?>
						</tbody>
					</table>
				</fieldset>
				<br /><br />
			<?php endforeach; 
				echo display_custom_field('view_hardware_network',  $additional_fields_data, $edit); ?></fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_scsi_controller" style="float: left; width: 100%;">
	<?php if (count($scsi_controller) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="scsi_controller_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('SCSI Controller Details')?></span></legend>
				<?php foreach($scsi_controller as $key): ?>
					<fieldset id="scsi_controller_details_<?php echo str_replace('/','-',$key->scsi_controller_id)?>">
					<legend><span style="font-size: 10pt;">&nbsp;<?php echo $key->scsi_controller_name?> <?php echo __('Details')?></span></legend>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_hba.png' alt='' title='' width='48'/>
					<p><label for="scsi_controller_name<?php echo $key->scsi_controller_id?>"><?php echo __('Name')?>: </label><span id="scsi_controller_name_<?php echo $key->scsi_controller_id?>"><?php echo $key->scsi_controller_name?></span></p>
					<p><label for="scsi_controller_manufacturer<?php echo $key->scsi_controller_id?>"><?php echo __('Manufacturer')?>: </label><span id="scsi_controller_manufacturer_<?php echo $key->scsi_controller_id?>"><?php echo $key->scsi_controller_manufacturer?></span></p>
					<p><label for="scsi_controller_device_id<?php echo $key->scsi_controller_id?>"><?php echo __('Device ID')?>: </label><span id="scsi_controller_device_id_<?php echo $key->scsi_controller_id?>"><?php echo htmlentities($key->scsi_controller_device_id)?></span></p>
					<p><label for="scsi_controller_type<?php echo $key->scsi_controller_id?>"><?php echo __('Type')?>: </label><span id="scsi_controller_type_<?php echo $key->scsi_controller_id?>"><?php echo $key->scsi_controller_type?></span></p>
					</fieldset>
					<br />
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_scsi_controller',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_hard_drive" style="float: left; width: 100%;">
	<?php if (count($hard_drive) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="hard_disk_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Hard Disk Details')?></span></legend>
				<?php foreach($hard_drive as $key): ?>
					<fieldset id="hard_disk_details_<?php echo str_replace('/','-',$key->hard_drive_index)?>">
					<legend><span style="font-size: 10pt;">&nbsp;<?php echo $key->hard_drive_caption?> <?php echo __('Details')?></span></legend>
						<?php
							if ((mb_substr_count(mb_strtoupper("$key->hard_drive_model"), 'USB') > 0) OR (mb_substr_count(mb_strtoupper("$key->hard_drive_caption"), 'USB') > 0))
							{
								$image = '48_gnome-dev-harddisk-usb';
							} else {
								$image = '48_gnome-dev-harddisk';
							}
							if (mb_substr_count(mb_strtoupper("$key->hard_drive_manufacturer"), 'SEAGATE') > 0) {
								$image = '48_seagate';
							}
							if (mb_substr_count(mb_strtoupper("$key->hard_drive_manufacturer"), 'WESTERN DIGITAL') > 0) {
								$image = '48_western_digital';
							}
							if (mb_substr_count(mb_strtoupper("$key->hard_drive_manufacturer"), 'HITACHI') > 0) {
								$image = '48_hitachi';
							}
							if (mb_substr_count(mb_strtoupper("$key->hard_drive_manufacturer"), 'MAXTOR') > 0) {
								$image = '48_maxtor';
							}
							if (mb_substr_count(mb_strtoupper("$key->hard_drive_manufacturer"), 'SANDISK') > 0) {
								$image = '48_sandisk';
							}
							if ((mb_substr_count(mb_strtoupper("$key->hard_drive_model"), 'HP LOGICAL VOLUME SCSI') > 0) and substr_count($image, '48_gnome-') > 0){
								$image = '48_hp';
							}
							if ((mb_substr_count(mb_strtoupper("$key->hard_drive_model"), 'COMPAQ') > 0) and substr_count($image, '48_gnome-') > 0){
								$image = '48_hp';
							}
							if ((mb_substr_count(mb_strtoupper("$key->hard_drive_model"), 'POWERDEVICE BY POWERPATH') > 0) and substr_count($image, '48_gnome-') > 0){
								$image = '48_dell';
							}
							if ((mb_substr_count(mb_strtoupper("$key->hard_drive_model"), 'DELL') > 0) and substr_count($image, '48_gnome-') > 0){
								$image = '48_dell';
							}
						?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?><?php echo $image?>.png' alt='' title='' width='48'/>
					<div>
						<div style="float:left; width:50%;">
							<p><label for='hd_manufacturer_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Manufacturer')?>: </label><span id='hd_manufacturer_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_manufacturer?>&nbsp;</span></p>
							<p><label for='hd_model_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Model')?>: </label><span id='hd_model_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_model?>&nbsp;</span></p>
							<p><label for='hd_serial_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Serial')?>: </label><span id='hd_serial_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_serial?>&nbsp;</span></p>
							<p><label for='hd_caption_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Caption')?>: </label><span id='hd_caption_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_caption?>&nbsp;</span></p>
						</div>
						<div style="float:left; width:40%; vertical-align:top;">
							<p><label for='hd_size_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Size')?>: </label><span id='hd_size_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo number_format($key->hard_drive_size); ?> MiB&nbsp;</span></p>
							<p><label for='hd_status_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('SMART Status')?>: </label><span id='hd_status_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_status?>&nbsp;</span></p>
							<?php if ($key->hard_drive_interface_type == "SCSI") { ?>
							<p><label for='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Interface')?>: </label><span id='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_interface_type?></span></p>
							<p><label for='scsi_id_<?php echo str_replace('/','-',$key->hard_drive_scsi_logical_unit)?>'><?php echo __('SCSI id')?>: </label><span id='scsi_id_<?php echo str_replace('/','-',$key->hard_drive_scsi_logical_unit)?>' class="form_field"><?php echo $key->hard_drive_scsi_logical_unit?></span></p>
							<?php } else { ?>
							<p><label for='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Interface')?>: </label><span id='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_interface_type?>&nbsp;</span></p>
							<?php } ?>
							<p><label for='hd_firmware_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Firmware')?>: </label><span id='hd_firmware_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_firmware?>&nbsp;</span></p>
						</div>
					</div>
					<table cellspacing="1" class="tablesorter" width="900">
					<thead>
						<tr>
							<th><?php echo __('Graph')?></th>
							<th><?php echo __('Mount Point')?></th>
							<th><?php echo __('Name')?></th>
							<th><?php echo __('Format')?></th>
							<th><?php echo __('Size')?></th>
							<th><?php echo __('Used')?></th>
							<th><?php echo __('Free')?></th>
						</tr>
					</thead>
					<tbody>
					<?php $partition_count = 0; ?>
					<?php foreach($partition as $key_partition): ?>
						<?php if ($key_partition->hard_drive_index == $key->hard_drive_index): ?>
						<?php $partition_count++; ?>
							<tr>
								<td><a href="<?php echo base_url(); ?>index.php/main/disk_graph/<?php echo $system_id . "/" . $key_partition->partition_id?>"><img src='<?php echo $image_path;?>16_graph.png' alt='' title='' /></a></td>
								<td><?php echo $key_partition->partition_mount_point; ?></td>
								<td><?php echo $key_partition->partition_name?></td>
								<td><?php echo $key_partition->partition_format?></td>
								<td><?php echo number_format($key_partition->partition_size)?> MiB&nbsp;</td>
								<td><?php echo number_format($key_partition->partition_used_space)?> MiB&nbsp;</td>
								<td><?php echo number_format($key_partition->partition_free_space)?> MiB&nbsp;</td>
							</tr>
						<?php endif; ?>
					<?php endforeach; ?>
					<?php if ($partition_count == 0) { ?>
						<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
					<?php } ?>
					</tbody>
					</table>
					</fieldset>
					<br /><br />
					<?php endforeach; ?>
					<?php echo display_custom_field('view_hardware_hard_drive',  $additional_fields_data, $edit); ?>

					<!-- mounted volumes - not associated with any particular disk -->
					<?php foreach($partition as $key_partition): ?>
						<?php if ($key_partition->hard_drive_index == ''){ $volumes = 1; } else { $volumes = 0; } ?>
					<?php endforeach; ?>
					
					<?php if ($volumes == 1) { ?>
						<fieldset id="hard_disk_details_volumes">
						<legend><span style="font-size: 10pt;">&nbsp;<?php echo __('Mounted Volumes')?></span></legend>
						<table cellspacing="1" class="tablesorter" width="900">
						<thead>
							<tr>
								<th><?php echo __('Graph')?></th>
								<th><?php echo __('Mount Point')?></th>
								<th><?php echo __('Name')?></th>
								<th><?php echo __('Format')?></th>
								<th><?php echo __('Size')?></th>
								<th><?php echo __('Used')?></th>
								<th><?php echo __('Free')?></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($partition as $key_partition): ?>
							<?php if ($key_partition->hard_drive_index == ''): ?>
								<tr>
									<td><a href="<?php echo base_url(); ?>index.php/main/disk_graph/<?php echo $system_id . "/" . $key_partition->partition_id?>"><img src='<?php echo $image_path;?>16_graph.png' alt='' title='' /></a></td>
									<td><?php echo $key_partition->partition_mount_point; ?></td>
									<td><?php echo $key_partition->partition_name?></td>
									<td><?php echo $key_partition->partition_format?></td>
									<td><?php echo number_format($key_partition->partition_size)?> MiB&nbsp;</td>
									<td><?php echo number_format($key_partition->partition_used_space)?> MiB&nbsp;</td>
									<td><?php echo number_format($key_partition->partition_free_space)?> MiB&nbsp;</td>
								</tr>
							<?php endif; ?>
						<?php endforeach; ?>
						</tbody>
						</table>
						</fieldset>
					<?php } ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>



	<div id="view_hardware_optical" style="float: left; width: 100%;">
	<?php if (count($optical) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="optical_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Optical Details')?></span></legend>
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_optical_drive.png' alt='' title='' width='48'/>
				<?php foreach($optical as $key): ?>
					<p><label for="optical_mount_point_<?php echo $key->optical_drive_id?>"><?php echo __('Mount Point')?>: </label><span id="optical_mount_point_<?php echo $key->optical_drive_id?>"><?php echo $key->optical_drive_mount_point?></span></p>
					<p><label for="optical_caption_<?php echo $key->optical_drive_id?>"><?php echo __('Caption')?>: </label><span id="optical_caption_<?php echo $key->optical_drive_id?>"><?php echo $key->optical_drive_caption?></span></p>
					<p><label for="optical_model_<?php echo $key->optical_drive_id?>"><?php echo __('Model')?>: </label><span id="optical_model_<?php echo $key->optical_drive_id?>"><?php echo $key->optical_drive_model?></span></p>
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_optical',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_video" style="float: left; width: 100%;">
	<?php if (count($video) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="video_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Video Details')?></span></legend>
				<?php foreach($video as $key): ?>
				<?php
					$image = "48_video";
					if (mb_substr_count(mb_strtoupper("$key->video_manufacturer"), 'ATI') > 0) {
						$image = '48_ati';
					}
					if (mb_substr_count(mb_strtoupper("$key->video_manufacturer"), 'ADVANCED MICRO DEVICES') > 0) {
						$image = '48_amd';
					}
					if (mb_substr_count(mb_strtoupper("$key->video_manufacturer"), 'NVIDIA') > 0) {
						$image = '48_nvidia';
					}
					if (mb_substr_count(mb_strtoupper("$key->video_manufacturer"), 'INTEL') > 0) {
						$image = '48_intel';
					}
				?>	
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?><?php echo $image; ?>.png' alt='' title='' width='48'/>
					<p><label for="video_description_<?php echo $key->video_id?>"><?php echo __('Description')?>: </label><span id="video_description_<?php echo $key->video_id?>"><?php echo $key->video_description?></span></p>
					<p><label for="video_memory_<?php echo $key->video_id?>"><?php echo __('Memory')?>: </label><span id="video_memory_<?php echo $key->video_id?>"><?php echo number_format(floatval($key->video_memory))?> Mb</span></p>
					<p><label for="video_manufacturer_<?php echo $key->video_id?>"><?php echo __('Manufacturer')?>: </label><span id="video_manufacturer_<?php echo $key->video_id?>"><?php echo $key->video_manufacturer?></span></p>
					<br />
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_video',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_monitor" style="float: left; width: 100%;">
	<?php if (count($monitor) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="monitor_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Monitor Details')?></span></legend>
				<?php
				$image = '48_video';
				if (count($monitor) < 2) { 
				echo "<img style='float: right; margin; 10px; ' src='" . $image_path . $image . ".png' alt='' title='' width='48'/>\n";
				} 
				?>
				<?php foreach($monitor as $key): ?>
					<?php if (count($monitor) > 1) { ?>
					<fieldset id="monitor_details_<?php echo $key->monitor_id; ?>">
					<legend>&nbsp;</legend>
					<?php } ?>
					<table width="100%" border="0">
					<tr>
					<td>
						<p><label for="monitor_manufacturer_<?php echo $key->monitor_id?>"><?php echo __('Manufacturer')?>: </label><span id="monitor_manufacturer_<?php echo $key->monitor_id?>"><?php echo $key->manufacturer; ?></span></p>
						<p><label for="monitor_model_<?php echo $key->monitor_id?>"><?php echo __('Model')?>: </label><span id="monitor_model_<?php echo $key->monitor_id?>"><?php echo $key->model; ?></span></p>
						<p><label for="monitor_manufacture_date_<?php echo $key->monitor_id?>"><?php echo __('Manufacturer Date')?>: </label><span id="monitor_manufacture_date_<?php echo $key->monitor_id?>"><?php echo $key->manufacture_date; ?></span></p>
						<p><label for="monitor_description_<?php echo $key->monitor_id?>"><?php echo __('Description')?>: </label><span id="monitor_description_<?php echo $key->monitor_id?>"><?php echo print_something($key->man_description); ?></span></p>
						<p><label for="monitor_serial_<?php echo $key->monitor_id?>"><?php echo __('Serial')?>: </label><span id="monitor_serial_<?php echo $key->monitor_id?>"><?php echo $key->man_serial; ?></span></p>
						<p><label for="monitor_size_<?php echo $key->monitor_id?>"><?php echo __('Size')?>: </label><span id="monitor_size_<?php echo $key->monitor_id?>"><?php echo $key->size; ?> <?php echo __('inch')?></span></p>
						<p><label for="monitor_aspect_ratio_<?php echo $key->monitor_id?>"><?php echo __('Aspect Ratio')?>: </label><span id="monitor_aspect_ratio_<?php echo $key->monitor_id?>"><?php echo $key->aspect_ratio; ?></span></p>
					</td>
					<td>
						<img width="100" title="" alt="" src="<?php echo base_url()?>device_images/<?php echo str_replace("/", "_", str_replace(" ", "_", mb_strtolower($key->model))); ?>.jpg" style="border: 1px solid rgb(219, 217, 197);"/>
					</td>
					</tr>
					</table>
					<?php
					// $image = '48_video';
					// if (file_exists($images_directory . "48_" . strtolower(str_replace(" ", "_", $key->manufacturer)) . ".png")) {
					// 	$image = "48_" . strtolower(str_replace(" ", "_", $key->manufacturer));
					// }
					?>
<!-- 					<div style="float:right; width: 100px; margin-left: -80%;">
						<img style='float: right; margin; 10px; ' src='<?php echo $image_path . $image; ?>.png' alt='' title='' width='48'/>
					</div>	 -->
					<?php if (count($monitor) > 1) { ?>
					</fieldset>
					<?php } ?>
					<br />&nbsp;
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_monitor',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>

	<?php } ?>
	</div>

	<div id="view_hardware_sound" style="float: left; width: 100%;">
	<?php if (count($sound) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="sound_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Sound Details')?></span></legend>
				<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_component-headphones.png' alt='' title='' width='48'/>
				<?php foreach($sound as $key): ?>
					<p><label for="sound_description_<?php echo $key->sound_id; ?>"><?php echo __('Description')?>: </label><span id="sound_description_<?php echo $key->sound_id; ?>"><?php echo $key->sound_name?></span></p>
					<p><label for="sound_manufacturer_<?php echo $key->sound_id; ?>"><?php echo __('Manufacturer')?>: </label><span id="sound_manufacturer_<?php echo $key->sound_id; ?>"><?php echo $key->sound_manufacturer?></span></p>
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_sound',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_hardware_printer" style="float: left; width: 100%;">
	<?php if (count($printer) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="printers">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Locally Attached Printers')?></span></legend>
				<table cellspacing="1" class="tablesorter" style="width:100%;">
					<thead>
						<tr>
							<!-- <th><?php echo __('Description')?></th> -->
							<th><?php echo __('Model')?></th>
							<th><?php echo __('Manufacturer')?></th>
							<th><?php echo __('Serial')?></th>
							<th><?php echo __('Shared')?></th>
							<th><?php echo __('Share Name')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($printer as $key): ?>
					<tr>
						<!-- <td><?php echo $key->man_description?></td> -->
						<td><a href="<?php echo site_url(); ?>/main/system_display/<?php echo $key->system_id; ?>" ><?php echo $key->man_model?></a></td>
						<td><?php echo $key->man_manufacturer?></td>
						<td><?php echo $key->man_serial?></td>
						<td><?php echo $key->printer_shared?></td>
						<td><?php echo $key->printer_shared_name?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	<br /><br />
	</div>
















	

	<div id="view_software_installed" style="float: left; width: 100%;">
	<?php if (count($software) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="software_listing" class="niceforms">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Installed Software')?></span></legend>
				<table cellspacing="1" class="tablesorter" width="900">
					<thead>
						<tr>
							<th style='width:470px;' align="left"><?php echo __('Package Name')?></th>
							<th style='width:70px;'  align="center"><?php echo __('Contact')?>&nbsp;&nbsp;&nbsp;</th>
							<th style='width:60px;'  align="center"><?php echo __('Version')?></th>
							<th style='width:150px;' align="center"><?php echo __('Publisher')?></th>
							<th style='width:150px;' align="center"><?php echo __('Date Detected')?></th>
							<th style='width:150px;' align="center"><?php echo __('Installed On')?></th>
							<th style='width:150px;' align="center"><?php echo __('Installed By')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($software as $key):
						if (mb_strlen($key->software_version) > 18){$key->software_version = mb_substr("$key->software_version", 0, 15) . '...';}
						$software_link = '';
						if (($key->software_url != '') AND ($key->software_url != ' '))
						{
							$software_link = "<a href=\"" . clean_url($key->software_url) . "\"><img style='border-width:0px;' src=\"" . $image_path . "16_browser.png\" alt=\"\" /></a>";
						}
						if (($key->software_email != '') AND ($key->software_email != ' '))
						{
							$software_link = "<a href=\"mailto://" . $key->software_email . "\"><img style='border-width:0px;' src=\"" . $image_path . "16_email.png\" alt=\"\" /></a>";
						}
						if (isset($key->software_description) and $key->software_description > '') {
							$software_name = $key->software_name . " (" . trim($key->software_description) . ")";
						} else {
							$software_name = $key->software_name;
						}
						?>
						<tr>
							<td><?php echo $software_name?></td>
							<td align="center"><?php echo $software_link?></td>
							<td align="center"><?php echo $key->software_version?></td>
							<td align="center"><?php echo str_replace("<", "&lt;", $key->software_publisher); ?></td>
							<td align="center"><?php echo $key->first_timestamp?></td>
							<?php if ($key->software_installed_on == '0000-00-00 00:00:00') { $key->software_installed_on = ''; } ?>
							<td align="center"><?php echo $key->software_installed_on?></td>
							<td align="center"><?php echo $key->software_installed_by?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_software_updates" style="float: left; width: 100%;">
	<?php if (count($updates) > 0) { ?>
	<?php #if (($os == 'windows') && (count($updates) > 0)) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="software_listing_updates" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Software Updates')?></span></legend>
			<table cellspacing="1" class="tablesorter" width="900">
				<thead>
					<tr>
						<th align="left" style='width:500px;'><?php echo __('Package Name')?></th>
						<th style='width:100px;'><?php echo __('Contact')?>&nbsp;&nbsp;&nbsp;</th>
						<th style='width:100px;'><?php echo __('Version')?></th>
						<th style='width:200px;'><?php echo __('Publisher')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($updates as $key): ?>
				<tr>
						<td><?php echo $key->software_name?></td>
						<td align="center">
							<?php
							if (($key->software_url != '') AND ($key->software_url != ' '))
							{
								echo "<a href=\"" . clean_url($key->software_url) . "\"><img style='border-width:0px;' src=\"" . $image_path . "16_browser.png\" alt=\"\" /></a>";
							}
							if (($key->software_email != '') AND ($key->software_email != ' '))
							{
								echo "<a href=\"" . $key->software_email . "\"><img style='border-width:0px;' src=\"" . $image_path . "16_email.png\" alt=\"\" /></a>";
							}
							?>
						</td>
						<td align="center"><?php echo $key->software_version?></td>
						<td><?php echo htmlentities($key->software_publisher)?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_software_library" style="float: left; width: 100%;">
	<?php if (count($library) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="software_listing_library" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Software Libraries')?></span></legend>
			<table cellspacing="1" class="tablesorter" width="900">
				<thead>
					<tr>
						<th align="left" style='width:500px;'><?php echo __('Package Name')?></th>
						<th style='width:100px;'><?php echo __('Contact')?>&nbsp;&nbsp;&nbsp;</th>
						<th style='width:100px;'><?php echo __('Version')?></th>
						<th style='width:200px;'><?php echo __('Publisher')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($library as $key): ?>
				<tr>
						<td><?php echo $key->software_name?></td>
						<td align="center">
							<?php
							if (($key->software_url != '') AND ($key->software_url != ' '))
							{
								echo "<a href=\"" . clean_url($key->software_url) . "\"><img style='border-width:0px;' src=\"" . $image_path . "16_browser.png\" alt=\"\" /></a>";
							}
							if (($key->software_email != '') AND ($key->software_email != ' '))
							{
								echo "<a href=\"" . $key->software_email . "\"><img style='border-width:0px;' src=\"" . $image_path . "16_email.png\" alt=\"\" /></a>";
							}
							?>
						</td>
						<td align="center"><?php echo $key->software_version?></td>
						<td><?php echo htmlentities($key->software_publisher)?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_software_codecs" style="float: left; width: 100%;">
	<?php if (($os == 'windows') && (count($codecs) > 0)) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="software_listing_codecs" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Codecs')?></span></legend>
			<table cellspacing="1" class="tablesorter" width="900">
				<thead>
					<tr>
						<th align="left" style='width:500px;'><?php echo __('Codec Name')?></th>
						<th style='width:100px;'><?php echo __('Contact')?>&nbsp;&nbsp;&nbsp;</th>
						<th style='width:100px;'><?php echo __('Version')?></th>
						<th style='width:200px;'><?php echo __('Publisher')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($codecs as $key): ?>
					<tr>
						<td><?php echo utf8_decode($key->software_name)?></td>
						<td align="center">
							<?php
							if (($key->software_url != '') AND ($key->software_url != ' '))
							{
								echo "<a href=\"" . clean_url($key->software_url) . "\"><img style='border-width:0px;' src=\"" . base_url() . $user_theme . "_images/browser.png\" alt=\"\" /></a>";
							}
							if (($key->software_email != '') AND ($key->software_email != ' '))
							{
								echo "<a href=\"" . $key->software_email . "\"><img style='border-width:0px;' src=\"" . base_url() . $user_theme . "_images/email.png\" alt=\"\" /></a>";
							}
							?>
						</td>
						<td align="center"><?php echo $key->software_version?></td>
						<td><?php echo utf8_decode($key->software_publisher)?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_software_odbc" style="float: left; width: 100%;">
	<?php if (($os == 'windows') && (count($odbc) > 0)) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="software_listing_odbc" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('ODBC Drivers')?></span></legend>
			<table cellspacing="1" class="tablesorter">
				<thead>
					<tr>
						<th align="left"><?php echo __('Name')?></th>
						<th style="width:100px;"><?php echo __('Version')?></th>
						<th><?php echo __('File')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($odbc as $key): ?>
				<tr>
						<td><?php echo $key->software_name?></td>
						<td align="center"><?php echo $key->software_version?></td>
						<td><?php echo $key->software_location?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_software_assembly" style="float: left; width: 100%;">
	<?php if (($os == 'windows') && (count($assembly) > 0)) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="software_listing_assembly" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('.NET Assemblies')?></span></legend>
			<table cellspacing="1" class="tablesorter" style='width:900px;'>
				<thead>
					<tr>
						<th align="left" style='width:500px;'><?php echo __('Name')?></th>
						<th style='width:100px;'><?php echo __('Version')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($assembly as $key): ?>
				<tr>
						<td><?php echo $key->software_name?></td>
						<td align="center"><?php echo $key->software_version?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_software_services" style="float: left; width: 100%;">
	<?php if (count($service) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="hf_software_services" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Services Details')?></span></legend>
			<table cellspacing="1" class="tablesorter" style="width: 100%;">
				<thead>
					<tr>
						<th><?php echo __('Display Name')?></th>
						<th><?php echo __('Service Name')?></th>
						<th><?php echo __('Start Mode')?></th>
						<th><?php echo __('User')?></th>
						<th><?php echo __('State')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($service as $key): ?>
					<tr>
						<td><?php echo clean_url($key->service_display_name)?></td>
						<td><?php echo clean_url($key->service_name)?></td>
						<td><?php echo clean_url($key->service_start_mode)?></td>
						<td><?php echo clean_url($key->service_start_name)?></td>
						<td><?php echo clean_url($key->service_state)?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_software_keys" style="float: left; width: 100%;">
	<?php if (isset($software_key) and (count($software_key) > 0) and ($access_level >= 7)) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="software_listing_keys" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Keys')?></span></legend>
			<table cellspacing="1" class="tablesorter" style="width: 100%;">
				<thead>
					<tr>
						<th align="left" ><?php echo __('Software Name')?></th>
						<th><?php echo __('Key Text')?>&nbsp;&nbsp;&nbsp;</th>
						<th><?php echo __('Edition')?></th>
						<th><?php echo __('Release')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($software_key as $key): ?>
					<tr>
						<td><?php echo $key->key_name?></td>
						<td><?php echo $key->key_text?></td>
						<td><?php echo $key->key_edition?></td>
						<td><?php echo $key->key_release?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
		</form>
	<?php } ?>
	</div>




	<div id="view_settings_pagefile" style="float: left; width: 100%;">
	<?php if (isset($pagefile) and count($pagefile) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="pagefile" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Pagefiles')?></span></legend>
			<table cellspacing="1" class="tablesorter" style="width: 100%;">
				<thead>
					<tr>
						<th align="left" ><?php echo __('File Name')?></th>
						<th><?php echo __('Initial Size')?>&nbsp;&nbsp;&nbsp;</th>
						<th><?php echo __('Max Size')?></th>
						<th><?php echo __('Current Size')?></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($pagefile as $key): ?>
					<tr>
						<td><?php echo $key->pagefile_name?></td>
						<td><?php echo $key->pagefile_initial_size?></td>
						<td><?php echo $key->pagefile_max_size?></td>
						<td><?php echo $key->pagefile_size?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_settings_shares" style="float: left; width: 100%;">
	<?php if (count($share) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="shares">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Shares')?></span></legend>
				<table cellspacing="1" class="tablesorter" style="width:100%;">
					<thead>
						<tr>
							<th style='width:120px;'><?php echo __('Name')?></th>
							<th style="text-align: right; padding: 0 20px 0 0; width:120px;"><?php echo __('Size')?></th>
							<th><?php echo __('Caption')?></th>
							<th><?php echo __('Path')?></th>
							<!-- <th><?php echo __('Users')?></th> -->
						</tr>
					</thead>
					<tbody>
					<?php foreach($share as $key_share): ?>
					<?php if (( !$key_share->share_size == '' ) OR ( $key_share->share_size == '0' ) OR ( is_null($key_share->share_size)) )
					{
						$size = number_format($key_share->share_size) . ' Mb';
					} else {
						$size = $key_share->share_size;
					}
					?>
						<tr>
							<td><?php echo clean_url($key_share->share_name)?></td>
							<td style="text-align: right;" ><?php echo $size?></td>
							<td><?php echo clean_url($key_share->share_caption)?></td>
							<td><?php echo clean_url($key_share->share_path)?></td>
							<!-- <td><?php echo str_replace(", ", "<br />", clean_url($key_share->share_users))?></td> -->
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_settings_routes" style="float: left; width: 100%;">
	<?php if (count($route) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="routes">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Routes')?></span></legend>
				<table cellspacing="1" class="tablesorter" style='width:100%;'>
					<thead>
						<tr>
							<th><?php echo __('Destination')?></th>
							<th><?php echo __('Gateway')?></th>
							<th><?php echo __('Mask')?></th>
							<th><?php echo __('Metric')?></th>
							<th><?php echo __('Protocol')?></th>
							<th><?php echo __('Type')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($route as $key): ?>
					<tr>
						<td><span style="display: none;"><?php echo $key->destination?></span><?php echo ip_address_from_db($key->destination);?></td>
						<td><span style="display: none;"><?php echo $key->next_hop?></span><?php echo ip_address_from_db($key->next_hop);?></td>
						<td><?php echo $key->mask?></td>
						<td><?php echo $key->metric?></td>
						<td><?php echo $key->protocol?></td>
						<td><?php echo $key->type?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_settings_users" style="float: left; width: 100%;">
	<?php if (count($system_user) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="users">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Local Users')?></span></legend>
				<table cellspacing="1" class="tablesorter" style="width:100%;">
					<thead>
						<tr>
							<th><?php echo __('User Name')?></th>
							<th><?php echo __('Description')?></th>
							<th><?php echo __('Disabled')?></th>
							<th><?php echo __('Status')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Password Expires')?></th>
							<th><?php echo __('Password Changeable')?></th>
							<th><?php echo __('Password Required')?></th>
							<th><?php echo __('SID')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($system_user as $key): ?>
					<tr>
						<td><?php echo $key->user_name?></td>
						<td><?php echo $key->user_full_name?></td>
						<td><?php echo $key->user_disabled?></td>
						<td><?php echo $key->user_status?></td>
						<td><?php echo $key->user_type?></td>
						<td><?php echo $key->user_password_expires?></td>
						<td><?php echo $key->user_password_changeable?></td>
						<td><?php echo $key->user_password_required?></td>
						<td><?php echo $key->user_sid?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_settings_groups" style="float: left; width: 100%;">
	<?php if (count($system_group) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="groups">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Groups')?></span></legend>
				<table cellspacing="1" class="tablesorter" style='width:100%;'>
					<thead>
						<tr>
							<th><?php echo __('Group Name')?></th>
							<th><?php echo __('Description')?></th>
							<!-- <th><?php echo __('SID')?></th> -->

							<th style='width:320px;'><?php echo __('Members')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($system_group as $key): ?>
					<?php $group_members = str_replace(", ", " <br />", $key->group_members); ?>
					<?php $group_members = mb_substr($group_members, 0, mb_strlen($group_members)-1); ?>
					<tr>
						<td><?php echo $key->group_name?></td>
						<td><?php echo $key->group_description?></td>
						<!-- <td><?php echo $key->group_sid?></td> -->
						<td><?php echo $group_members?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>


	<div id="view_settings_print_queue" style="float: left; width: 100%;">
	<?php if (count($print_queue) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="print_queue">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Print Queue')?></span></legend>
				<table cellspacing="1" class="tablesorter" style='width:100%;'>
					<thead>
						<tr>
							<th><?php echo __('Name')?></th>
							<th><?php echo __('Model')?></th>
							<th><?php echo __('Manufacturer')?></th>
							<th><?php echo __('Port Name')?></th>
							<th><?php echo __('IP Address')?></th>
							<th><?php echo __('Shared')?></th>
							<th><?php echo __('Shared Name')?></th>
							<th><?php echo __('Color')?></th>
							<th><?php echo __('Duplex')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Location')?></th>
							<th><?php echo __('Status')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($print_queue as $key): ?>
					<?php
					if ($key->queue_ip_address == '') {
						$ip_address = ''; 
					} else {
						$ip_address = ip_address_from_db($key->queue_ip_address);
					}
					?>
					<tr>
						<td><?php echo $key->queue_name?></td>
						<td><?php echo $key->queue_model?></td>
						<td><?php echo $key->queue_manufacturer?></td>
						<td><?php echo $key->queue_port_name?></td>
						<td><?php echo "<span style=\"display: none;\">" . $key->queue_ip_address . "&nbsp;</span>" . $ip_address?></td>
						<td><?php echo $key->queue_shared?></td>
						<td><?php echo $key->queue_shared_name?></td>
						<td><?php echo $key->queue_color?></td>
						<td><?php echo $key->queue_duplex?></td>
						<td><?php echo $key->queue_type?></td>
						<td><?php echo $key->queue_location?></td>
						<td><?php echo $key->queue_connection_status?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_settings_dns" style="float: left; width: 100%;">
	<?php if (count($dns) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="dns">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('DNS')?></span></legend>
				<table cellspacing="1" class="tablesorter" style='width:100%;'>
					<thead>
						<tr>
							<th><?php echo __('Name')?></th>
							<th><?php echo __('Full Name')?></th>
							<th><?php echo __('IP Address')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($dns as $key): ?>
					<tr>
						<td><?php echo $key->dns_name?></td>
						<td><?php echo $key->dns_full_name?></td>
						<td><?php echo $key->dns_ip_address?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>


	<div id="view_settings_netstat" style="float: left; width: 100%;">
	<?php if (count($netstat) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="netstat">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('NetStat')?></span></legend>
				<table cellspacing="1" class="tablesorter" style='width:100%;'>
					<thead>
						<tr>
							<th><?php echo __('Protocol')?></th>
							<th><?php echo __('IP Address')?></th>
							<th><?php echo __('Port')?></th>
							<th><?php echo __('Program')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($netstat as $key): ?>
					<tr>
						<td><?php echo $key->protocol?></td>
						<td><?php echo $key->ip_address?></td>
						<td><?php echo $key->port?></td>
						<td><?php echo $key->program?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>


	<div id="view_settings_logs" style="float: left; width: 100%;">
	<?php if (count($system_log) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="logs">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Logs')?></span></legend>
				<table cellspacing="1" class="tablesorter" style='width:100%;'>
					<thead>
						<tr>
							<th><?php echo __('Log Name')?></th>
							<th><?php echo __('File')?></th>
							<th><?php echo __('Size')?></th>
							<th><?php echo __('Max Size')?></th>
							<th><?php echo __('Overwrite Policy')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($system_log as $key): ?>
					<tr>
						<td><?php echo $key->log_name?></td>
						<td><?php echo $key->log_file_name?></td>
						<td><?php echo $key->log_file_size?></td>
						<td><?php echo $key->log_max_file_size?></td>
						<td><?php echo $key->log_overwrite?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_settings_variables" style="float: left; width: 100%;">
	<?php if (count($system_variable) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="variables">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Variables')?></span></legend>
				<table cellspacing="1" class="tablesorter" style='width:100%;'>
					<thead>
						<tr>
							<th><?php echo __('Variable Name')?></th>
							<th><?php echo __('Value')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($system_variable as $key): ?>
					<tr>
						<td><?php echo $key->variable_name?></td>
						<td><?php echo $key->variable_value?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<?php if (count($database) > 0){ ?>
		<div id="view_server_database" style="float: left; width: 100%;">
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="server_database" class="niceforms">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Database Server Details')?></span></legend>
				<?php foreach($database as $key): ?>
					<?php
					$db_type = $key->db_type;
					if ($key->db_type == 'SQL Server'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_sql_server.png' alt='' title='' width='48'/>
					<?php } else if ($db_type == 'MySQL'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_mysql_server.png' alt='' title='' width='48'/>
					<?php } else if ($db_type == 'Postgres'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_postgres_server.png' alt='' title='' width='48'/>
					<?php } else if ($db_type == 'Oracle'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_partition.png' alt='' title='' width='48'/>
					<?php } ?>
					<p><label for="sw_db_type"><?php echo __('Type')?>: </label><span id="sw_db_type"><?php echo $key->db_type?>&nbsp;</span></p>
					<p><label for="sw_db_version"><?php echo __('Version')?>: </label><span id="sw_db_version"><?php echo $key->db_version_string?>&nbsp;</span></p>
					<p><label for="sw_db_version"><?php echo __('Version ID')?>: </label><span id="sw_db_version"><?php echo $key->db_version?>&nbsp;</span></p>
					<p><label for="sw_db_edition"><?php echo __('Edition')?>: </label><span id="sw_db_edition"><?php echo $key->db_edition?>&nbsp;</span></p>
					<p><label for="sw_db_port"><?php echo __('Port')?>: </label><span id="sw_db_port"><?php echo $key->db_port?>&nbsp;</span></p>
				<?php endforeach; ?>
			</fieldset>
		<br />
		<fieldset id="server_database_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Databases Installed')?></span></legend>
			<?php if (count($database_details) > 0){ ?>
				<table cellspacing="1" class="tablesorter" width="900">
				<thead>
					<tr>
						<th><?php echo __('Instance')?></th>
						<th><?php echo __('Internal ID')?></th>
						<th><?php echo __('Name')?></th>
						<th width="80"><?php echo __('Size')?></th>
						<th><?php echo __('Mode')?></th>
						<th width="120"><?php echo __('Created')?></th>
						<th><?php echo __('Filename')?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($database_details as $key): ?>
					<tr>
						<td><?php echo $key->details_instance?></td>
						<td><?php echo $key->details_internal_id?></td>
						<td><?php echo $key->details_name?></td>
						<td align="right"><?php echo number_format($key->details_current_size)?> MB</td>
						<td align="center"><?php echo $key->details_compatibility_mode?></td>
						<td><?php echo $key->details_creation_date?></td>
						<td><?php echo $key->details_filename?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				</table>
			<?php } else {
				echo "<p><label for=\"sw_db_det\">&nbsp;</label><span id=\"sw_db_det\">Unable to retrieve individual database details.</span></p>";
			} ?>
		</fieldset>
		</form>
		<p><br /></p>
		</div>
	<?php } ?>






	
	<?php if (count($webserver) > 0){ ?>
		<div id="view_server_web" style="float: left; width: 100%;">
		<p><br /></p>
		<p><br /></p>
		<form action="#" method="post" class="niceforms">
			<fieldset id="server_web" class="niceforms">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Web Server Details')?></span></legend>
				<?php foreach($webserver as $key): ?>
					<?php
					if ($key->webserver_type == 'IIS'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_web.png' alt='' title='' width='48'/>
					<?php } else if ($webserver_type == 'Apache'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_web.png' alt='' title='' width='48'/>
					<?php } else if ($webserver_type == 'Cherokee'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_web.png' alt='' title='' width='48'/>
					<?php } else if ($webserver_type == 'LightHTTPD'){ ?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_web.png' alt='' title='' width='48'/>
					<?php } ?>
					<p><label for="sw_webserver_type"><?php echo __('Type')?>: </label><span id="sw_webserver_type"><?php echo $key->webserver_type?>&nbsp;</span></p>
					<p><label for="sw_webserver_version"><?php echo __('Version')?>: </label><span id="sw_webserver_version"><?php echo $key->webserver_version?>&nbsp;</span></p>
					<p><label for="sw_webserver_state"><?php echo __('State')?>: </label><span id="sw_webserver_port"><?php echo $key->webserver_state?>&nbsp;</span></p>
				<?php endforeach; ?>
			</fieldset>
		<p><br /></p>
		<p><br /></p>
			<fieldset id="server_web_details" class="niceforms">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Websites Installed')?></span></legend>
				<table cellspacing="1" class="tablesorter" width="900">
				<thead>
					<tr>
						<th><?php echo __('Internal ID')?></th>
						<th><?php echo __('Name')?></th>
						<th><?php echo __('State')?></th>
						<th><?php echo __('Path')?></th>
						<th><?php echo __('App Pool')?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($website_details as $key): ?>
					<tr>
						<td><?php echo $key->site_internal_id?></td>
						<td><?php echo $key->site_description?></td>
						<td><?php echo $key->site_state?></td>
						<td><?php echo $key->site_path?></td>
						<td><?php echo $key->site_app_pool?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				</table>
			</fieldset>
		</form>
		</div>
	<?php } ?>

<!-- end of content_column -->

