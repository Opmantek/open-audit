<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
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
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
	<div id="view_summary_credentials" style="float: left; width: 100%;">
	<?php if (isset($decoded_access_details) and ($access_level >= 7)) {
    ?>
	<br />
	<form action="../../admin_system/system_add_credentials" method="post" class='niceforms'>
		<fieldset id="summary_credentials_details" class='niceforms'>
			<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Credentials')?></span></legend>
			<div style="float:right; width: 120px; text-align:center">
				<img class='section_image' src='<?php echo $oa_theme_images; ?>/48_credentials.png' alt='' title='' />
				<?php if ($access_level > 7) { ?>
					<br /><input type="button" onclick="display_credentials();" value='Edit' title='Edit' name='credentials_edit' alt='Edit' style='width:24' />
				<?php } ?>
			</div>
			<div id="credentials">
				<p><label for='credentials_ip_address'><?php echo __('IP Address'); ?>: </label><span id='credentials_ip_address'><?php echo print_something($decoded_access_details->ip_address); ?></span></p>
				<p><label for='credentials_ip_address'><?php echo __('SNMP Version'); ?>: </label><span id='credentials_snmp_version'><?php echo print_something($decoded_access_details->snmp_version); ?></span></p>
				<p><label for='credentials_ip_address'><?php echo __('SNMP Community'); ?>: </label><span id='credentials_snmp_community'><?php echo print_something($snmp_community); ?></span></p>
				<p><label for='credentials_ssh_username'><?php echo __('SSH Username'); ?>: </label><span id='credentials_ssh_username'><?php echo print_something($decoded_access_details->ssh_username); ?></span></p>
				<p><label for='credentials_ssh_password'><?php echo __('SSH Password'); ?>: </label><span id='credentials_ssh_password'><?php echo print_something($ssh_password); ?></span></p>
				<p><label for='credentials_windows_username'><?php echo __('Windows Username'); ?>: </label><span id='credentials_windows_username'><?php echo print_something($decoded_access_details->windows_username); ?></span></p>
				<p><label for='credentials_windows_password'><?php echo __('Windows Password'); ?>: </label><span id='credentials_windows_password'><?php echo print_something($windows_password); ?></span></p>
				<p><label for='credentials_windows_domain'><?php echo __('Windows Domain'); ?>: </label><span id='credentials_windows_domain'><?php echo print_something($decoded_access_details->windows_domain); ?></span></p>
			</div>

		</fieldset>
	</form>
	<?php } ?>
	</div>

	<div id="view_summary_purchase" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class='niceforms'>
		<fieldset id="summary_purchase_details" class='niceforms'>
			<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Purchase Details')?></span></legend>
			<img class='section_image' src='<?php echo $oa_theme_images;?>/48_purchases.png' alt='' title='' />
			<?php foreach ($system as $key): ?>
				<p><label for="man_asset_number"><?php echo __('Asset Number')?>: </label><span id="man_asset_number" <?php echo $edit?>><?php echo print_something($key->man_asset_number)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_vendor"><?php echo __('Vendor')?>: </label><span id="man_purchase_vendor" <?php echo $edit?>><?php echo print_something($key->man_purchase_vendor)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_order_number"><?php echo __('PO Number')?>: </label><span id="man_purchase_order_number" <?php echo $edit?>><?php echo print_something($key->man_purchase_order_number)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_cost_center"><?php echo __('Cost Center')?>: </label><span id="man_purchase_cost_center" <?php echo $edit?>><?php echo print_something($key->man_purchase_cost_center)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_purchase_service_contract_number"><?php echo __('Contract Number')?>: </label><span id="man_purchase_service_contract_number" <?php echo $edit?>><?php echo print_something($key->man_purchase_service_contract_number)?></span><?php echo $edit_icon; ?></p>
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
	<form action="#" method="post" class='niceforms'>
		<fieldset id="summary_location_details">
			<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Location / Owner Details')?></span></legend>
			<div style="float:left; width:50%;">
                <div>
				<div id="location_container">
				<?php
                foreach ($system_location as $key) {
                    if ($access_level > 7) {
                        echo "<p><label for='man_location_id_select'>".__('Location Name').": </label><span id='man_location_id_select' style='color:blue;'><span onclick='display_location();'>".print_something($key->name)."</span></span>$edit_icon</p>\n";
                    } else {
                        echo "<p><label for='location_name'>".__('Location Name').": </label><span id='location_name'>".print_something($key->name)."</span></p>\n";
                    }
                    ?>
        			<p><label for="location_address"><?php echo __('Building Address')?>: </label><span id="location_address"><?php echo print_something($key->address)?></span></p>
        			<p><label for="location_city"><?php echo __('City')?>: </label><span id="location_city"><?php echo print_something($key->city)?></span></p>
        			<p><label for="location_state"><?php echo __('State')?>: </label><span id="location_state"><?php echo print_something($key->state)?></span></p>
        			<p><label for="location_country"><?php echo __('Country')?>: </label><span id="location_country"><?php echo print_something($key->country)?></span></p>
            	<?php } ?>
                </div>
    			<p><label for="man_location_level"><?php echo __('Device specific Level')?>: </label><span id="man_location_level" <?php echo $edit?>><?php echo print_something($location_level)?></span><?php echo $edit_icon; ?></p>
    			<p><label for="man_location_suite"><?php echo __('Device specific Suite')?>: </label><span id="man_location_suite" <?php echo $edit?>><?php echo print_something($location_suite)?></span><?php echo $edit_icon; ?></p>
    			<p><label for="man_location_room"><?php echo __('Device specific Room')?>: </label><span id="man_location_room" <?php echo $edit?>><?php echo print_something($location_room)?></span><?php echo $edit_icon; ?></p>
    			<p><label for="man_location_rack"><?php echo __('Rack')?>: </label><span id="man_location_rack" <?php echo $edit?>><?php echo print_something($location_rack)?></span><?php echo $edit_icon; ?></p>
    			<p><label for="man_location_rack_position"><?php echo __('Rack Position')?>: </label><span id="man_location_rack_position" <?php echo $edit?>><?php echo print_something($location_rack_position)?></span><?php echo $edit_icon; ?></p>
    			<p><label for="man_location_latitude"><?php echo __('Device Specific Latitude')?>: </label><span id="man_location_latitude" <?php echo $edit?>><?php echo print_something($man_location_latitude)?></span><?php echo $edit_icon; ?></p>
    			<p><label for="man_location_longitude"><?php echo __('Device Specific Longitude')?>: </label><span id="man_location_longitude" <?php echo $edit?>><?php echo print_something($man_location_longitude)?></span><?php echo $edit_icon; ?></p>
				</div>
			</div>
			<div style="float:left; width:50%;">
				<?php foreach ($system as $key): ?>
					<p><label for="man_owner"><?php echo __('Owner')?>: </label><span id="man_owner" <?php echo $edit?>><?php echo print_something($key->man_owner)?></span><?php echo $edit_icon; ?></p>
				<?php endforeach; ?>
                <p><label for="comments"><?php echo __('Comments')?>: </label><span id="comments" <?php echo $edit?>><?php echo print_something($system[0]->comments)?></span></p>
				<div id="org_container">

                <p><label for='man_org_id_select'><?php echo __('Org Name'); ?>: </label>
                    <?php foreach ($system_org as $key):
                        if ($access_level > 7) {
                            echo "<span id='man_org_id_select' style='color:blue;'><span onclick='display_org();'>".print_something($key->name)."</span></span>$edit_icon</p>\n";
                        } else {
                            echo "<span id='org_name'>".print_something($key->name)."</span></p>\n";
                        }
                        echo "<p><label for='parent_org'>".__('Parent Org').": </label><span id='parent_org'>".print_something($key->parent_name)."</span></p>\n";
                    endforeach; ?>
				</div>
			</div>
			<div style="float:right; width: 100px; margin-left: -80%;">
				<img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
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
	<form action="#" method="post" class='niceforms'>
		<fieldset id="summary_custom_details" class='niceforms'>
			<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Custom Details')?></span></legend>
			<img class='section_image' src='<?php echo $oa_theme_images;?>/48_custom.png' alt='' title='' />
			<?php
            echo display_custom_field('view_summary_custom', $additional_fields_data, $edit);
            ?>
		</fieldset>
	</form>
	</div>

	<div id="view_summary_audit_log" style="float: left; width: 100%;">
	<?php if (count($audit_log) > 0) { ?>
		<br />
		<form action="#" method="post" class='niceforms'>
			<fieldset id="summary_audits">
				<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Audit Log')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img class='section_image' src='<?php echo $oa_theme_images; ?>/48_audit_log.png' alt='' title='' />
				</div>
				<div style="width: 90%; float:left;">
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th align="left"><?php echo __('ID')?></th>
							<th><?php echo __('Username')?>&nbsp;&nbsp;&nbsp;</th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Submitted On')?></th>
							<th><?php echo __('Submitted From')?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($audit_log as $key): ?>
						<tr>
							<td><?php echo print_something($key->id)?></td>
							<td><?php echo print_something($key->username)?></td>
							<td><?php echo print_something($key->type)?></td>
							<td><?php echo print_something($key->timestamp)?></td>
							<?php
                            if (isset($key->ip)) {
                                echo "<td><span style=\"display:none;\">".print_something($key->ip)."</span>".print_something(ip_address_from_db($key->ip))."</td>\n";
                            } else {
                                echo "<td>-</td>";
                            }
                        ?>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_summary_edit_log" style="float: left; width: 100%;">
	<?php if (count($edit_log) > 0) { ?>
		<br />
		<form action="#" method="post" class='niceforms'>
			<fieldset id="summary_edit_log">
				<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Edit Log')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img class='section_image' src='<?php echo $oa_theme_images; ?>/48_edit_log.png' alt='' title='' />
				</div>
				<div style="width: 90%; float:left;">
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th><?php echo __('By')?></th>
							<th><?php echo __('On')?></th>
                            <th><?php echo __('Attribute')?></th>
                            <th><?php echo __('Value')?></th>
                            <th><?php echo __('Previous Value')?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($edit_log as $key): ?>
						<tr>
							<td><?php echo print_something($key->full_name)?>&nbsp;</td>
							<td><?php echo print_something($key->timestamp)?>&nbsp;</td>
                            <td><?php echo print_something($key->db_column)?>&nbsp;</td>
                            <td><?php echo print_something($key->value)?>&nbsp;</td>
                            <td><?php echo print_something($key->previous_value)?>&nbsp;</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_summary_change_log" style="float: left; width: 100%;">
	<?php if (count($change_log) > 0) { ?>
		<br />
		<form action="#" method="post" class='niceforms'>
			<fieldset id="summary_change_log">
				<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Change Log')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img class='section_image' src='<?php echo $oa_theme_images; ?>/48_change_log.png' alt='' title='' />
				</div>
				<div style="width: 90%; float:left;">
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th><?php echo __('Timestamp')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Table')?></th>
							<th><?php echo __('Row')?></th>
							<th><?php echo __('Details')?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($change_log as $key): ?>
						<?php
                        if ((!is_null($key->external_link) and $key->external_link != '') and
                            ($key->external_ident == '' or is_null($key->external_ident))) {
                            $key->external_ident= 'link';
                        } ?>
						<?php if (($key->external_link == '') or (is_null($key->external_link))) {
                            $key->external_link = '#';
                        } ?>
						<tr>
							<td><?php echo print_something($key->timestamp)?></td>
                            <td><?php echo print_something($key->db_action)?></td>
                            <td><?php echo print_something($key->db_table)?></td>
                            <td><?php echo print_something($key->db_row)?></td>
							<td><?php echo utf8_decode(print_something($key->details))?></td>
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
	<form action="#" method="post" class='niceforms'>
		<fieldset id="summary_network_details" class='niceforms'>
			<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Network Details')?></span></legend>
			<img class='section_image' src='<?php echo $oa_theme_images; ?>/48_network_wireless.png' alt='' title='' />
			<?php foreach ($system as $key): ?>
				<p><label for="man_switch_id"><?php echo __('Switch ID')?>: </label><span id="man_switch_id" <?php echo $edit?>><?php echo print_something($key->man_switch_id)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_switch_port"><?php echo __('Switch Port')?>: </label><span id="man_switch_port" <?php echo $edit?>><?php echo print_something($key->man_switch_port)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_patch_panel"><?php echo __('Patch Panel')?>: </label><span id="man_patch_panel" <?php echo $edit?>><?php echo print_something($key->man_patch_panel)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_wall_port"><?php echo __('Wall Port')?>: </label><span id="man_wall_port" <?php echo $edit?>><?php echo print_something($key->man_wall_port)?></span><?php echo $edit_icon; ?></p>
			<?php
            endforeach;
            echo display_custom_field('view_summary_network',  $additional_fields_data, $edit); ?>
		</fieldset>
	</form>
	<?php } ?>
	</div>

	<div id="view_summary_phone" style="float: left; width: 100%;">
	<?php if (strpos($system[0]->man_type, 'phone') !== false) {
    ?>
	<br />
	<form action="#" method="post" class='niceforms'>
		<fieldset id="summary_phone_details" class='niceforms'>
			<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Phone Details')?></span></legend>
			<img class='section_image' src='<?php echo $oa_theme_images; ?>/48_phone.png' alt='' title='' />
			<?php foreach ($system as $key): ?>
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
				<p><label for="man_unlock_pin"><?php echo __('Unlock PIN')?>: </label><span id="man_unlock_pin" <?php echo $edit?>>
                <?php if ($access_level >= 7) {
                    echo print_something($key->man_unlock_pin);
                } else {
                    echo "******";
                }
                ?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_serial_imei"><?php echo __('IMEI Serial')?>: </label><span id="man_serial_imei" <?php echo $edit?>><?php echo print_something($key->man_serial_imei)?></span><?php echo $edit_icon; ?></p>
				<p><label for="man_serial_sim"><?php echo __('SIM Serial')?>: </label><span id="man_serial_sim" <?php echo $edit?>><?php echo print_something($key->man_serial_sim)?></span><?php echo $edit_icon; ?></p>
			<?php endforeach;
            echo display_custom_field('view_summary_phone', $additional_fields_data, $edit); ?>
		</fieldset>
	</form>
	<?php } ?>
	</div>

	<div id="view_summary_attachment" style="float: left; width: 100%;">
	<br />
	<br />
	<?php if ($access_level > 7) {
    ?>
	<form action="<?php echo base_url(); ?>index.php/main/add_attachment/<?php echo intval($system_id); ?>" method="post" enctype="multipart/form-data" class='niceforms'>
	<?php } else { ?>
	<form action="#" method="post" class='niceforms'>
	<?php } ?>
		<fieldset id="summary_attachment_details" class='niceforms'>
			<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Attachment Details')?></span></legend>
			<img class='section_image' src='<?php echo $oa_theme_images;?>/48_custom.png' alt='' title='' /><br />
			<?php if ($access_level > 7) { ?>
			<input style='float: right; margin; 10px; ' type='button' value='Upload' onclick='upload_attachment()' alt='' title='' />
			<?php } ?>
			<?php if (count($attachment) > 0) { ?>
			<table cellspacing="1" class="tablesorter" width="100%">
				<thead>
					<tr>
						<th><?php echo __('Name')?></th>
						<th><?php echo __('Uploaded On')?></th>
						<th align='center'><?php echo __('View')?></th>
						<th align='center'><?php echo __('Download')?></th>
						<?php if ($access_level > 7) { ?>
						<th align='center'><?php echo __('Delete')?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($attachment as $key): ?>
					<tr>
						<td><?php echo print_something($key->att_title)?></td>
						<td><?php echo print_something($key->timestamp)?></td>
						<td align='center'><a href="<?php echo base_url(); ?>index.php/main/show_attachment/<?php echo print_something($key->att_id)?>"><img src='<?php echo $oa_theme_images; ?>/16_word.png' alt='' title='' /></a></td>
						<td align='center'><a href="<?php echo base_url(); ?>index.php/main/download_attachment/<?php echo print_something($key->att_id)?>"><img src='<?php echo $oa_theme_images; ?>/16_link.png' alt='' title='' /></a></td>
						<?php if ($access_level > 7) { ?>
						<td align='center'><a href="<?php echo base_url(); ?>index.php/main/delete_attachment/<?php echo print_something($key->att_id)?>"><img src='<?php echo $oa_theme_images; ?>/16_delete.png' alt='' title='' /></a></td>
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
		<form action="#" method="post" class='niceforms'>
			<fieldset id="summary_nmis">
				<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('NMIS Details')?></span></legend>
				<div style="min-width: 50px; float: right;">
				<img class='section_image' src='<?php echo $oa_theme_images;?>/48_network.png' alt='' title='' />
				</div>
				<div style="width: 90%; float:left;">
					<p><label for="nmis_group"><?php echo __('NMIS Group')?>: </label><span id="nmis_group" <?php echo $edit?>><?php echo print_something($system[0]->nmis_group)?></span></p>
					<p><label for="nmis_name"><?php echo __('NMIS Name')?>: </label><span id="nmis_name" <?php echo $edit?>><?php echo print_something($system[0]->nmis_name)?></span></p>
					<p><label for="nmis_role_select"><?php echo __('NMIS Role')?>: </label><span id="nmis_role_select" style="color:blue;"><span onclick="display_nmis_role();"><?php echo print_something($system[0]->nmis_role)?></span></span></p>
					<p><label for="nmis_export"><?php echo __('NMIS Export')?>: </label><input id="nmis_export" onclick="check_nmis_export();" type="checkbox"<?php if ($system[0]->nmis_export == 'true') { echo " checked";} ?><?php if ($access_level != 10) { echo " disabled";} ?> /></p>
				</div>
			</fieldset>
		</form>
	</div>

	<div id="view_summary_vms" style="float: left; width: 100%;">
	<?php if (count($vm) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class='niceforms'>
			<fieldset id="vm_details">
				<legend><span style="font-size: 10pt;">&nbsp;<?php echo __('Virtual Machine Details')?></span></legend>
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th align='center'><?php echo __('Icon')?></th>
							<th>Name</th>
							<!-- <th>Group</th> -->
							<th align='center'><?php echo __('Memory')?></th>
							<th align='center'><?php echo __('CPU')?></th>
							<th align='center'><?php echo __('Status')?></th>
							<th><?php echo __('UUID')?></th>
							<th><?php echo __('Config File')?></th>
						</td>
					</thead>
					<tbody>
					<?php foreach ($vm as $key) {
                        if ($key->icon != '') {
                            $icon = "<a href=\"".base_url()."index.php/main/system_display/".$key->guest_system_id."\"><img alt=\"\" src=\"".base_url()."theme-tango/tango-images/16_" . $key->icon . ".png\" /></a>\n";
                        } else {
                            $icon = '';
                        }
                        if (trim($key->status) == 'powered off' or trim($key->status) == 'poweredOff') {
                            $status = '<span style="color: red;">'.print_something($key->status).'</span>';
                        } else {
                            $status = '<span style="color: green;">'.print_something($key->status).'</span>';
                        }
                        if ($key->guest_system_id != '' and $key->guest_system_id != '0') {
                            $link = "<a href=\"".base_url()."index.php/main/system_display/".intval($key->guest_system_id)."\">".print_something($key->name)."</a>\n";
                        } else {
                            $link = print_something($key->name);
                        }
                    ?><tr>
                    <td align='center'><?php echo $icon; ?></td>
                    <td><?php echo $link; ?></td>
                    <!-- <td><?php echo $key->vm_group; ?></td> -->
                    <td align='center'><?php echo print_something($key->memory_count); ?></td>
                    <td align='center'><?php echo print_something($key->cpu_count); ?></td>
                    <td align='center'><?php echo $status; ?></td>
                    <td><?php echo print_something($key->uuid); ?></td>
                    <td><?php echo print_something($key->config_file); ?></td>
                    </tr>
					<?php } ?>
				</table>
				Note - Status as at <?php echo print_something($system[0]->last_seen); ?>.<br />Note - Click icon to view guest details.
			</fieldset>
			<br />
		</form>
	<?php } ?>
	</div>


	<div id="view_summary_network_interfaces" style="float: left; width: 100%;">
	<?php if (count($network) > 0 and $system[0]->man_type != 'computer') { ?>
		<br />
		<br />
		<form action="#" method="post" class='niceforms'>
			<fieldset id="network_details">
				<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Network Details')?></span></legend>
				<fieldset id="network_hardware_details">
					<legend><span style="font-size: 10pt;">&nbsp;<?php echo __('Hardware Interface Details')?></span></legend>
					<table cellspacing="1" class="tablesorter" width="100%">
						<thead>
							<tr>
								<th><?php echo __('Index')?></th>
								<th><?php echo __('MAC Address')?></th>
								<th><?php echo __('Connection ID')?></th>
								<th><?php echo __('Description')?></th>
								<th><?php echo __('Alias')?></th>
								<th><?php echo __('Type')?></th>
                                <th><?php echo __('Operational Status')?></th>
                                <th><?php echo __('Admin Status')?></th>
								<th><?php echo __('Speed')?></th>
							</td>
						</thead>
						<tbody>
						<?php foreach ($network as $key) { ?><tr>
								<td><?php echo print_something($key->net_index); ?></td>
								<td><?php echo print_something($key->mac); ?></td>
								<td><?php echo print_something($key->connection); ?></td>
								<td><?php echo print_something($key->description); ?></td>
								<td><?php echo print_something($key->alias); ?></td>
								<td><?php echo print_something($key->type); ?></td>
                                <td><?php echo print_something($key->ip_enabled); ?></td>
                                <td><?php echo print_something($key->ifadminstatus); ?></td>
								<?php if (intval($key->speed) < 1000) {
                                    $speed = number_format(intval($key->speed))." b/s";
                                }
                                if (intval($key->speed) >= 1000 and intval($key->speed) < 1000000) {
                                    $speed = number_format(intval($key->speed / 1000))." Kb/s";
                                }
                                if (intval($key->speed) >= 1000000 and intval($key->speed) < 1000000000) {
                                    $speed = number_format(intval($key->speed / 1000 / 1000))." Mb/s";
                                }
                                if (intval($key->speed) >= 1000000000) {
                                    $speed = number_format(intval($key->speed / 1000 / 1000 / 1000))." Gb/s";
                                }
                                ?><td><?php echo "<span style=\"display: none;\">".substr('000000000000'.$key->speed, -13)."</span>".$speed;
                                ?></td>
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
                                <th>Netmask</th>
                                <th>CIDR</th>
                                <th>Network</th>
							</td>
						</thead>
						<tbody>
						<?php foreach ($ip as $ip_address) {
                            $interface = '';
                            foreach ($network as $key) {
                                if ($key->net_index == $ip_address->net_index) {
                                    $interface = $key->connection . ' - ' . $key->description;
                                }
                            }
                        ?>
                        <tr>
						 <td><?php echo print_something($ip_address->net_index); ?></td>
						 <td><?php echo print_something($ip_address->mac); ?></td>
						 <td><?php echo print_something($interface); ?></td>
						 <td><?php echo "<span style=\"display: none;\">".print_something($ip_address->ip)."</span>".print_something(ip_address_from_db($ip_address->ip))?></td>
                         <td><?php echo print_something($ip_address->netmask)?></td>
                         <td><?php echo print_something($ip_address->cidr)?></td>
						 <td><?php echo print_something($ip_address->network)?></td>
						</tr>
						<?php } ?>
					</table>
				</fieldset>
			</fieldset>
		</form>
	<?php } ?>
	</div>

	<div id="view_summary_module" style="float: left; width: 100%;">
	<?php if (count($module) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class='niceforms'>
			<fieldset id="module_details">
				<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Entity Details')?></span></legend>
				<table cellspacing="1" class="tablesorter" width="100%">
					<thead>
						<tr>
							<th><?php echo __('Index')?></th>
							<th><?php echo __('Contained In')?></th>
							<th><?php echo __('Type')?></th>
							<th><?php echo __('Description')?></th>
							<th><?php echo __('HW Revision')?></th>
							<th><?php echo __('FW Revision')?></th>
							<th><?php echo __('SW Revision')?></th>
							<th><?php echo __('Serial')?></th>
							<th><?php echo __('Asset ID')?></th>
							<th><?php echo __('Is FRU')?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($module as $mod): ?>
							<tr>
								<td align='center'><?php echo print_something($mod->module_index)?></td>
								<td align='center'><?php echo print_something($mod->contained_in)?></td>
								<td><?php echo print_something($mod->class_text)?></td>
								<td><?php echo print_something($mod->description)?></td>
								<td align='center'><?php echo print_something($mod->hardware_revision)?></td>
								<td><?php echo print_something($mod->firmware_revision)?></td>
								<td><?php echo print_something($mod->software_revision)?></td>
								<td><?php echo print_something($mod->serial)?></td>
								<td><?php echo print_something($mod->asset_ident)?></td>
								<td align='center'><?php echo print_something($mod->is_fru)?></td>
							</tr>
					<?php endforeach; ?>
					</tbody>
					</table>
					<?php echo display_custom_field('view_summary_module',  $additional_fields_data, $edit); ?>
			</fieldset>
		</form>
	<?php } ?>
	</div>

    <div id="view_summary_dns" style="float: left; width: 100%;">
    <?php if (count($dns) > 0) { ?>
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="summary_dns">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('System DNS')?></span></legend>
                <div style="min-width: 50px; float: right;">
                <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_network_wireless.png' alt='' title='' />
                </div>
                <div style="width: 90%; float:left;">
                <table cellspacing="1" class="tablesorter" width="100%">
                    <thead>
                        <tr>
                            <th><?php echo __('IP')?></th>
                            <th><?php echo __('Name')?></th>
                            <th><?php echo __('FQDN')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dns as $key): ?>
                        <tr>
                            <td><span style="display:none;"><?php echo print_something($key->ip)?></span><?php echo print_something(ip_address_from_db($key->ip))?></td>
                            <td><?php echo print_something($key->name)?>&nbsp;</td>
                            <td><?php echo print_something($key->fqdn)?>&nbsp;</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </fieldset>
        </form>
    <?php } ?>
    </div>





    <div id="view_summary_san" style="float: left; width: 100%;">
    <?php if (count($san) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="san_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('SAN Component Details')?></span></legend>
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Type')?></th>
                            <th><?php echo __('Manufacturer')?></th>
                            <th><?php echo __('Serial')?></th>
                            <th><?php echo __('Part Number')?></th>
                            <th><?php echo __('Location')?></th>
                            <th><?php echo __('Attached To')?></th>
                            <th><?php echo __('Status')?></th>
                            <th><?php echo __('Manufacture Date')?></th>
                            <th><?php echo __('Notes')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($san as $item) {
                                echo "<tr>
                                <td>" . @$item->type . "</td>
                                <td>" . @$item->manufacturer . "</td>
                                <td>" . @$item->serial . "</td>
                                <td>" . @$item->part_number . "</td>
                                <td>" . @$item->location . "</td>
                                <td>" . @$item->attached_to . "</td>
                                <td>" . @$item->status . "</td>
                                <td>" . @$item->date_of_manufacture . "</td>
                                <td>" . @str_replace(',', ',<br />', $item->notes) . "</td>
                                </tr>\n";
                            }
                        ?>
                    </tbody>
                </table>
                <?php echo display_custom_field('view_hardware_san',  $additional_fields_data, $edit); ?>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_summary_san_disk" style="float: left; width: 100%;">
    <?php if (count($hard_drive) > 0 and $system[0]->man_type == 'san') { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="san_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('SAN Disks')?></span></legend>
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Location')?></th>
                            <th><?php echo __('Manufacturer')?></th>
                            <th><?php echo __('Model')?></th>
                            <th><?php echo __('Serial')?></th>
                            <th><?php echo __('Interface')?></th>
                            <th><?php echo __('Size')?></th>
                            <th><?php echo __('Status')?></th>
                            <th><?php echo __('Firmware')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($hard_drive as $item) {
                                echo "<tr>
                                <td>" . @$item->device . "</td>
                                <td>" . @$item->manufacturer . "</td>
                                <td>" . @$item->model . "</td>
                                <td>" . @$item->serial . "</td>
                                <td>" . @$item->interface_type . "</td>
                                <td>" . @number_format(($item->size / 1024 / 1024)) . " GB</td>
                                <td>" . @$item->status . "</td>
                                <td>" . @$item->firmware . "</td>
                                </tr>\n";
                            }
                        ?>
                    </tbody>
                </table>
                <?php echo display_custom_field('view_hardware_san_disk',  $additional_fields_data, $edit); ?>
            </fieldset>
        </form>
    <?php } ?>
    </div>