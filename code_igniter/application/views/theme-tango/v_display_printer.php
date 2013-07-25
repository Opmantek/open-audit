<!-- v_display_printer -->
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

foreach($system as $key)
{
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

	$picture = strtolower($key->man_picture);
	if ($picture == '') {
		$picture = strtolower($key->man_model);
	}
}

if ($picture == '') {
	$picture = 'unknown';
}

$location_name = '';
foreach($system_location as $key)
{
	$location_name = $key->location_name;
}
$edit = '';
if ($access_level > 7)
{
	$edit = 'class="editText" style="color:blue;"';
	$edit_custom = 'class="editCustom" style="color:blue;"';
	$tabcustom = '<li><a href="#tabcustom"><span>' . __('Custom') . '</span></a></li>';
} else {
	$tabcustom = '';
}
# creating manufacturer / warranty / search links
$link_warranty = '';
$link_downloads = '';



?>


<!-- below is the menu div that sits on the left -->
<div style="float: left; width: 180px; margin-left: 0%; vertical-align: top; position: fixed;" >
	<form action="#" method="post" class="niceforms">
		<fieldset id="system_menu" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Menu')?></span></legend>
			<div id="menu1" class="menuTree">
				<ul>
					<?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_credentials.png" /><a href="#" id="toggle_summary_credentials">Credentials</a></li><?php } ?>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_right.png" /><a href="#" id="toggle_summary_purchase">Purchase</a></li>
					<li class="child"><img alt="" src="<?php echo $image_path?>16_devices.png" /><a href="#" id="toggle_summary_network">Network</a></li>
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
			<div style="float: left; width:75%; margin-right: 120px;">
				<?php foreach($system as $key): ?>
					<div>
						<div style="float:left; width:50%;">
							<p><label for="hostname"><?php echo __('Hostname')?>: </label><span id="hostname"><b><?php echo print_something($key->hostname)?></b></span></p>
							<p><label for="man_ip_address"><?php echo __('IP Address')?>: </label><span id="man_ip_address" <?php echo $edit?>><?php echo print_something(ip_address_from_db($key->man_ip_address))?></span></p>
							<p><label for="man_type"><?php echo __('Type')?>: </label><span id="man_type" <?php echo $edit?>><?php echo print_something($key->man_type)?></span></p>
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
							<p><label for="timestamp"><?php echo __('Most Recent Audit')?>: </label><span id="timestamp"><?php echo print_something($key->timestamp)?></span></p>
							<p><label for="printer_color"><?php echo __('Colour Capable')?>: </label><span id="printer_color"><?php echo print_something($key->printer_color)?></span></p>
							<p><label for="printer_duplex"><?php echo __('Duplex Capable')?>: </label><span id="printer_duplex"><?php echo print_something($key->printer_duplex)?></span></p>
						</div>
						<div style="float:right; width:50%;">
							<p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p>
							<p><label for="man_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="man_manufacturer" <?php echo $edit?>><?php echo print_something($key->man_manufacturer)?></span></p>
							<p><label for="man_model"><?php echo __('Model')?>: </label><span id="man_model" <?php echo $edit?>><?php echo print_something($key->man_model)?></span></p>
							<p><label for="man_location_name"><?php echo __('Location Name')?>: </label><span id="man_location_name"><?php echo print_something($location_name)?>&nbsp;</span></p>
							<p><label for="link_warranty"><?php echo __('Warranty Link')?>: </label><span id="link_warranty"><?php echo print_something($link_warranty)?> </span></p>
							<p><label for="link_downloads"><?php echo __('Downloads Link')?>: </label><span id="link_downloads"><?php echo print_something($link_downloads)?> </span></p>
						</div>
					</div>
				<?php endforeach; ?>
				<?php echo display_custom_field('system_details', $additional_fields, $edit); ?>
			</div>
			<div style="float:right; width: 110px; text-align: center;">
				<img width="100" title="" alt="" src="<?php echo base_url()?>device_images/<?php echo $key->man_picture?>" style="border: 1px solid rgb(219, 217, 197);"/>
				<?php if (($access_level > 7) and (extension_loaded('snmp')) and ($system[0]->man_ip_address != '000.000.000.000') and ($system[0]->man_ip_address != '0.0.0.0') and ($system[0]->man_ip_address > '')) { ?>
				<input type="button" onclick="parent.location='<?php echo base_url(); ?>index.php/admin_system/system_snmp/<?php echo $system_id; ?>'" value='SNMP Probe' title='SNMP Probe' name='SNMP Probe' alt='SNMP Probe' width='24' />
				<?php } ?>
			</div>
			<div style="float: left;margin-right: 120px;">
				<?php if ($os_name > ''){ ?><label for="man_os_name"><?php echo __('OS Name')?>: </label><span id="man_os_name"><?php echo print_something($os_name)?></span><?php } ?>
				<?php if ($key->man_type == 'system') { ?><p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p><?php } ?>
			</div>
		</fieldset>
	</form>
	</div> <!-- end of div Summary -->

	<div id="view_summary_credentials" style="float: left; width: 100%;">
	<?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?>
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_credentials_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Credentials')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_credentials.png' alt='' title='' width='48'/>
			<span>NOTE - Read only at the moment. Can be set via Edit Multiple Systems from a Report page.</span>
			<?php foreach($decoded_access_details as $key => $value) { 
				echo "<p><label for='" . $key . "'>" . ucwords(str_replace("_", " ", $key)) . ": </label>";
				echo "<span id='" . $key . "'>" . print_something($value) . "</span></p>";
			} ?>
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
				<p><label for="man_vendor"><?php echo __('Vendor')?>: </label><span id="man_vendor" <?php echo $edit?>><?php echo print_something($key->man_vendor)?></span></p>
				<p><label for="man_purchase_order_number"><?php echo __('PO Number')?>: </label><span id="man_purchase_order_number" <?php echo $edit?>><?php echo print_something($key->man_purchase_order_number)?></span></p>
				<p><label for="man_purchase_invoice"><?php echo __('Invoice Number')?>: </label><span id="man_purchase_invoice" <?php echo $edit?>><?php echo print_something($key->man_purchase_invoice)?></span></p>
				<p><label for="man_purchase_date"><?php echo __('Purchase Date')?>: </label><span id="man_purchase_date" <?php echo $edit?>><?php echo print_something($key->man_purchase_date)?></span>NOTE - format should be yyyy-mm-dd.</p>
				<p><label for="man_purchase_amount"><?php echo __('Purchase Amount')?>: </label><span id="man_purchase_amount" <?php echo $edit?>><?php echo print_something($key->man_purchase_amount)?></span></p>
				<p><label for="man_warranty_duration"><?php echo __('Warranty Length')?>: </label><span id="man_warranty_duration" <?php echo $edit?>><?php echo print_something($key->man_warranty_duration)?></span></p>
				<p><label for="man_warranty_expires"><?php echo __('Warranty Expires')?>: </label><span id="man_warranty_expires" <?php echo $edit?>><?php echo print_something($key->man_warranty_expires)?></span>NOTE - format should be yyyy-mm-dd.</p>
			<?php 
			endforeach;
			echo display_custom_field('view_summary_purchase', $additional_fields, $edit);
			?>
		</fieldset>
	</form>
	</div>

	<div id="view_summary_network" style="float: left; width: 100%;">
	<br />
	<form action="#" method="post" class="niceforms">
		<fieldset id="summary_network_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Network Details')?></span></legend>
			<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_network_wireless.png' alt='' title='' width='48'/>
			<?php foreach($system as $key): ?>
				<p><label for="man_switch_id"><?php echo __('Switch ID')?>: </label><span id="man_switch_id" <?php echo $edit?>><?php echo print_something($key->man_switch_id)?></span></p>
				<p><label for="man_switch_port"><?php echo __('Switch Port')?>: </label><span id="man_switch_port" <?php echo $edit?>><?php echo print_something($key->man_switch_port)?></span></p>
				<p><label for="man_patch_panel"><?php echo __('Patch Panel')?>: </label><span id="man_patch_panel" <?php echo $edit?>><?php echo print_something($key->man_patch_panel)?></span></p>
				<p><label for="man_wall_port"><?php echo __('Wall Port')?>: </label><span id="man_wall_port" <?php echo $edit?>><?php echo print_something($key->man_wall_port)?></span></p>
			<?php 
			endforeach; 
			echo display_custom_field('view_summary_network', $additional_fields, $edit);
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
			echo display_custom_field('view_summary_custom', $additional_fields, $edit);
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
<!-- end of content_column -->






<script type="text/javascript">
$(document).ready( function() { $.NiceJForms.build(); } );

function createRequestObject() {
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






function display_environment()
{
	status_text="<select id='man_environment' onchange='send_environment();'><option value=' '>Choose an Environment<\/option><option value='production'>Production<\/option><option value='pre-prod'>PreProduction<\/option><option value='test'>Testing<\/option><option value='uat'>User Acceptance Testing<\/option><option value='eval'>Evaluation<\/option><option value='dev'>Development<\/option><option value='dr'>Disaster Recovery<\/option><\/select>";
	document.getElementById("man_environment_select").innerHTML = status_text;
}

function send_environment()
{
	table_text=document.getElementById("man_environment").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_environment/'+table_text);
	http.onreadystatechange = receive_environment;
	http.send(null);
}

function receive_environment() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_environment();'>"+http.responseText+"<\/span>";
      document.getElementById("man_environment_select").innerHTML = update;
    }
  }
}






function display_status()
{
	status_text="<select id='man_status' onchange='send_status();'><option value=' '>Choose a status<\/option><option value='production'>Production<\/option><option value='retired'>Retired<\/option><option value='maintenance'>Maintenance<\/option><option value='deleted'>Deleted<\/option><\/select>";
	document.getElementById("man_status_select").innerHTML = status_text;
}

function send_status()
{
	table_text=document.getElementById("man_status").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_status/'+table_text);
	http.onreadystatechange = receive_status;
	http.send(null);
}

function receive_status() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_status();'>"+http.responseText+"<\/span>";
      document.getElementById("man_status_select").innerHTML = update;
    }
  }
}







function display_criticality()
{
	status_text="<select id='man_criticality' onchange='send_criticality();'><option value=' '>Choose a criticality<\/option><option value='critical'>Critical<\/option><option value='normal'>Normal<\/option><option value='low'>Low<\/option><\/select>";
	document.getElementById("man_criticality_select").innerHTML = status_text;
}

function send_criticality()
{
	table_text=document.getElementById("man_criticality").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_criticality/'+table_text);
	http.onreadystatechange = receive_criticality;
	http.send(null);
}

function receive_criticality() {
  if(http.readyState == 4 && http.status == 200){
    // Text returned FROM the PHP script
    if(http.responseText) {
      // UPDATE ajaxTest content
      update="<span onclick='display_criticality();'>"+http.responseText+"<\/span>";
      document.getElementById("man_criticality_select").innerHTML = update;
    }
  }
}






function display_location()
{
	<?php
	$location_form = "<option value=' '>Choose a Location<\/option>";
	foreach ($locations as $location)
	{
		$location_form .= "<option value='" . $location->location_id . "'>" . $location->location_name . "<\/option>";
	}
	if ($location_id <> "")
	{
		$location_form = "<select id='man_location_id' onchange='send_location();'>" . $location_form . "<\/select>";
	} else {
		$location_form = "<select id='man_location_id' onchange='send_location();'><option value=' '>Choose a location<\/option>" . $location_form . "<\/select>";
	}
		
	?>
	status_text="<?php echo $location_form;?>";
	document.getElementById("man_location_id_select").innerHTML = status_text;
}

function send_location()
{
	table_text=document.getElementById("man_location_id").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_location_id/'+table_text);
	http.onreadystatechange = receive_location;
	http.send(null);
}

function receive_location() {
	if(http.readyState == 4 && http.status == 200){
		// Text returned FROM the PHP script
		if(http.responseText) {
			// UPDATE ajaxTest content
			//update="<span onclick='display_location();'>"+http.responseText+"<\/span>";
			//document.getElementById("location_container").innerHTML = update;
			document.getElementById("location_container").innerHTML = http.responseText;
			update=http.responseText+"<p><label for='man_location_rack'><?php echo __('Rack')?>: <\/label><span id='man_location_rack' <?php echo str_replace('"', "'", $edit)?>><?php echo print_something($location_rack)?><\/span><\/p><p><label for='man_location_rack_position'><?php echo __('Rack Position')?>: <\/label><span id='man_location_rack_position' <?php echo str_replace('"', "'", $edit)?>><?php echo print_something($location_rack_position)?><\/p>";
			document.getElementById("location_container").innerHTML = update;
		}
	}
}








function display_org()
{
	<?php
	$org_form = "<option value=' '>Choose an Org<\/option>";
	foreach ($orgs as $org)
	{
		$org_form .= "<option value='" . $org->org_id . "'>" . $org->org_name . "<\/option>";
	}
	if ($org_id <> "")
	{
		$org_form = "<select id='man_org_id' onchange='send_org();'>" . $org_form . "<\/select>";
	} else {
		$org_form = "<select id='man_org_id' onchange='send_org();'><option value=' '>Choose an Org<\/option>" . $org_form . "<\/select>";
	}
		
	?>
	status_text="<?php echo $org_form;?>";
	document.getElementById("man_org_id_select").innerHTML = status_text;
}

function send_org()
{
	table_text=document.getElementById("man_org_id").value;
	http.open('get', '<?php echo base_url();?>index.php/ajax/update_system_man/'+formVars+'/man_org_id/'+table_text);
	http.onreadystatechange = receive_org;
	http.send(null);
}

function receive_org() {
	if(http.readyState == 4 && http.status == 200){
		// Text returned FROM the PHP script
		if(http.responseText) {
			// UPDATE ajaxTest content
			document.getElementById("org_container").innerHTML = http.responseText;
		}
	}
}


$(document).ready(function(){
	
	$('#view_summary_credentials').hide();
	$('#view_summary_purchase').hide();
	$('#view_summary_network').hide();
	$('#view_summary_location').hide();
	$('#view_summary_custom').hide();
	$('#view_summary_audits').hide();
	$('#view_summary_audit_log').hide();
	$('#view_summary_alerts').hide();

	$('#toggle_summary_credentials').click(function(){
		$('#view_summary_credentials').slideToggle("fast");
	});

	$('#toggle_summary_purchase').click(function(){
		$('#view_summary_purchase').slideToggle("fast");
	});

	$('#toggle_summary_network').click(function(){
		$('#view_summary_network').slideToggle("fast");
	});

	$('#toggle_summary_location').click(function(){
		$('#view_summary_location').slideToggle("fast");
	});

	$('#toggle_summary_custom').click(function(){
		$('#view_summary_custom').slideToggle("fast");
	});

	$('#toggle_summary_audits').click(function(){
		$('#view_summary_audits').slideToggle("fast");
	});

	$('#toggle_summary_audit_log').click(function(){
		$('#view_summary_audit_log').slideToggle("fast");
	});

	$('#toggle_summary_alert_log').click(function(){
		$('#view_summary_alerts').slideToggle("fast");
	});

	var summary_toggle = 0;

	$('#toggle_summary_all').click(function(){
		if (summary_toggle == 0)
		{
			$('#view_summary_credentials').show("fast");
			$('#view_summary_purchase').show("fast");
			$('#view_summary_network').show("fast");
			$('#view_summary_location').show("fast");
			$('#view_summary_custom').show("fast");
			$('#view_summary_audits').show("fast");
			$('#view_summary_audit_log').show("fast");
			$('#view_summary_alerts').show("fast");
			summary_toggle = 1;
		}
		else 
		{
			$('#view_summary_credentials').hide("fast");
			$('#view_summary_purchase').hide("fast");
			$('#view_summary_network').hide("fast");
			$('#view_summary_location').hide("fast");
			$('#view_summary_custom').hide("fast");
			$('#view_summary_audits').hide("fast");
			$('#view_summary_audit_log').hide("fast");
			$('#view_summary_alerts').hide("fast");
			summary_toggle = 0;
		}
	});
});
</script>

<?php

function print_something($string)
{
	if ((mb_strlen($string) == 0) OR ($string == '0000-00-00'))
	{
		return '-';
	} else {
		return $string;
	}
}

function display_custom_field($field_placement, $additional_fields, $edit)
{
	foreach($additional_fields as $field)
	{
		if ($field->field_placement == $field_placement)
		{
			$data_id = "field_" . $field->field_type;
			$data_id = $field->$data_id;
			$data_value = "field_" . $field->field_type;
			$data_value = $field->$data_value;
			$width = "120";
			if ($field_placement == 'view_summary_windows')
			{
				$width = '160';
			}
			# TODO - fix this string output hack with real html entities
			echo "<div style=\"float: left; width: 90%; \">\n";
			echo "<label for=\"custom_" . $field->field_type . "_" . str_replace(" ", "_", str_replace("#", "", ($data_id))) . "_" . $field->field_id . "_placement\" >" . __($field->field_name) . ": </label>";
			echo "<span id=\"custom_" . $field->field_type . "_" . str_replace(" ", "_", str_replace("#", "", ($data_id))) . "_" . $field->field_id . "_placement\"" . $edit . ">" . print_something($data_value) . "</span>\n";
			echo "</div>\n";
		}
	}
}
?>