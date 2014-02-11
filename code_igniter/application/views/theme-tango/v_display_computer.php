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
 * @version 1.1.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<!-- v_display_computer -->
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
$images_directory = str_replace("index.php", "", $_SERVER["SCRIPT_FILENAME"]) . "theme-tango/tango-images/";
$link_serial = '';
$link_model = '';
$link_manufacturer = '';

foreach($system as $key) {
	if (mb_strtolower($key->man_os_group) == 'windows') {
		$os='windows';
	} else {
		$os='other';
	}
	$org_id = $key->man_org_id;
	$location_id = $key->man_location_id;
	$location_rack = $key->man_location_rack;
	$location_rack_position = $key->man_location_rack_position;
	$location_level = $key->man_location_level;
	$location_suite = $key->man_location_suite;
	$location_room = $key->man_location_room;
	$os_name = $key->man_os_name;
	$serial = $key->serial;
	$link_manufacturer = $key->manufacturer;
	$link_serial = $key->serial;
	$link_model = $key->model;
	$last_seen = $key->last_seen_by;
	$icon = $key->man_icon;	
	$type = $key->man_type;
}

$location_name = '';

foreach($system_location as $key) {
	$location_name = $key->location_name;
}

$edit = '';

if ($access_level > 7) {
	$edit = 'class="editText" style="color:blue;"';
	$edit_custom = 'class="editCustom" style="color:blue;"';
	$tabcustom = '<li><a href="#tabcustom"><span>' . __('Custom') . '</span></a></li>';
} else {
	$tabcustom = '';
}



// creating manufacturer / warranty / search links
$link_warranty = 'No links for the manufacturer';
$link_downloads = 'No links for the manufacturer';
$link_express_code = '';

if (mb_strpos($link_manufacturer,  "Dell") !== false)  {
	// we have a Dell system
	if ($link_serial != ""){
	$link_warranty = "<a href='http://www.dell.com/support/my-support/us/en/04/product-support/servicetag/" . $link_serial . "' onclick=\"this.target='_blank';\"><img src='" . $image_path . "16_edit.png' alt='' title='' width='16'/></a>";
	$link_downloads = "<a href='http://www.dell.com/support/drivers/us/en/04/ServiceTag/" . $link_serial . "' onclick=\"this.target='_blank';\"><img src='" . $image_path . "16_browser.png' alt='' title='' width='16'/></a>";
		$link_express_code = base_convert($link_serial,36,10);
		$link_express_code_formatted = mb_substr($link_express_code,0,3)."-".mb_substr($link_express_code,3,3)."-".mb_substr($link_express_code,6,3)."-".mb_substr($link_express_code,9,2);
		$link_express_code = $link_express_code_formatted;
	}
}

if ( (mb_strpos($link_manufacturer,  "Compaq") !== false) OR (mb_strpos($link_manufacturer,  "HP") !== false) OR (mb_strpos($link_manufacturer,  "Hewlett-Packard") !== false) ) {
	// we have a HP system
	if ($link_serial != ""){
		$link_warranty = "<a href='http://www4.itrc.hp.com/service/ewarranty/warrantyResults.do?BODServiceID=NA&amp;RegisteredPurchaseDate=&amp;country=GB&amp;productNumber=&amp;serialNumber1=" . $link_serial . "' onclick=\"this.target='_blank';\"><img src='" . $image_path . "16_edit.png' alt='' title='' width='16'/></a>";
	}
	if ($link_model != ""){
		$link_downloads = "<a href='http://h20180.www2.hp.com/apps/Lookup?h_lang=en&amp;h_cc=uk&amp;cc=uk&amp;h_page=hpcom&amp;lang=en&amp;h_client=S-A-R135-1&amp;h_pagetype=s-002&amp;h_query=" . $link_model . "' onclick=\"this.target='_blank';\"><img src='" . $image_path . "16_browser.png' alt='' title='' width='16'/></a>";
	}
}

if ( (mb_strpos($link_manufacturer,  "IBM") !== false) OR (mb_strpos($link_manufacturer,  "Lenovo") !== false) ) {
	// we have a Lenovo/IBM system
	if ($link_model != ""){
		$link_downloads = "<a href='http://www-307.ibm.com/pc/support/site.wss/quickPath.do?quickPathEntry=" . $link_model . "' onclick=\"this.target='_blank';\">".__("Product Page")."</a>";
	}
	if ( ($link_model != '') and ($link_serial != '') ) {
		$link_warranty = "<a href='http://www-307.ibm.com/pc/support/site.wss/warrantyLookup.do?type=" . mb_substr($link_model,0,4) . "&amp;serial=" . $link_serial . "&amp;country=897&amp;iws=off&amp;sitestyle=lenovo' onclick=\"this.target='_blank';\"><img src='" . $image_path . "16_browser.png' alt='' title='' width='16'/></a>";
		$link_warranty .= " <a href='http://www-307.ibm.com/pc/support/site.wss/warrantyLookup.do?type=" . mb_substr($link_model,-9,-5) . "&amp;serial=" . $link_serial . "&amp;country=897&amp;iws=off&amp;sitestyle=lenovo' onclick=\"this.target='_blank';\"><img src='" . $image_path . "16_browser.png' alt='' title='' width='16'/></a>";   
	}
}

if (mb_strpos($link_manufacturer,  "Gateway") !== false) {
	// we have a Gateway system
	if ($link_serial != '' ) {
		$link_warranty = "<a href='http://support.gateway.com/support/allsysteminfo.asp?sn=" . $link_serial . "' onclick=\"this.target='_blank';\"><img src='" . $image_path . "16_browser.png' alt='' title='' width='16'/></a>";
	}
}
?>












<!-- below is the menu div that sits on the left -->
<div style="float: left; width: 180px; margin-left: 0%; vertical-align: top; position: fixed;" >

<form action="#" method="post" class="niceforms">
<fieldset id="system_menu" class="niceforms">
<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Menu')?></span></legend>
<div id="menu1" class="menuTree">
<ul>
	<li class="parent"><img alt="" src="<?php echo $image_path?>16_device.png" id="toggle_summary_all" /><a href="#">Summary</a>
		<ul>
		 	<?php if (count($windows) > 0) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_windows.png" /><a href="#" id="toggle_summary_windows">Windows Details</a></li> <?php } ?>
		 	<?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_credentials.png" /><a href="#" id="toggle_summary_credentials">Credentials</a></li><?php } ?>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_right.png" /><a href="#" id="toggle_summary_purchase">Purchase</a></li>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_devices.png" /><a href="#" id="toggle_summary_network">Network</a></li>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_home.png" /><a href="#" id="toggle_summary_location">Location / Contact</a></li>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_font.png" /><a href="#" id="toggle_summary_custom">Custom</a></li>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_word.png" /><a href="#" id="toggle_summary_attachment">Attachments</a></li>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_find.png" /><a href="#" id="toggle_summary_audits">Audits</a></li>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_edit.png" /><a href="#" id="toggle_summary_audit_log">Audit Log</a></li>
		 	<li class="child"><img alt="" src="<?php echo $image_path?>16_warning.png" /><a href="#" id="toggle_summary_alert_log">Alert Log</a></li>
		 	<?php if ($config->nmis == 'y') { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_nmis.png" /><a href="#" id="toggle_summary_nmis">NMIS Details</a></li><?php } ?>
		</ul>
	</li>
	<?php if ((count($processor) > 0) or (count($memory) > 0) or (count($bios) > 0) or (count($motherboard) > 0) or (count($network) > 0) or 
		(count($scsi_controller) > 0) or (count($hard_drive) > 0) or (count($optical) > 0) or (count($video) > 0) or (count($monitor) > 0) or
		(count($sound) > 0) or (count($printer) > 0)) { ?>
	<li class="parent"><img alt="" src="<?php echo $image_path?>16_router.png" id="toggle_hardware_all"/><a href="#">Hardware</a>
		<ul>
			<?php if (count($processor) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path; ?>16_processor.png" /><a href="#" id="toggle_hardware_processor">Processor</a></li> <?php } ?> 
		 	<?php if (count($memory) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path; ?>16_memory.png" /><a href="#" id="toggle_hardware_memory">Memory</a></li> <?php } ?> 
		 	<?php if (count($bios) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_bios.png" /><a href="#" id="toggle_hardware_bios">Bios</a></li> <?php } ?> 
		 	<?php if (count($motherboard) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_media-memory.png" /><a href="#" id="toggle_hardware_motherboard">Motherboard</a></li> <?php } ?> 
		 	<?php if (count($network) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_network.png" /><a href="#" id="toggle_hardware_network">Network</a></li> <?php } ?> 
		 	<?php if (count($scsi_controller) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_general.png" /><a href="#" id="toggle_hardware_scsi_controller">SCSI Controller</a></li> <?php } ?>
		 	<?php if (count($hard_drive) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_harddisk.png" /><a href="#" id="toggle_hardware_hard_drive">Disk</a></li> <?php } ?>
		 	<?php if (count($optical) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_cdrom.png" /><a href="#" id="toggle_hardware_optical">Optical</a></li> <?php } ?>
		 	<?php if (count($video) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_background.png" /><a href="#" id="toggle_hardware_video">Video</a></li> <?php } ?>
		 	<?php if (count($monitor) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_monitor.png" /><a href="#" id="toggle_hardware_monitor">Monitor</a></li> <?php } ?>
		 	<?php if (count($sound) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_sound.png" /><a href="#" id="toggle_hardware_sound">Sound</a></li> <?php } ?>
		 	<?php if (count($printer) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_printer.png" /><a href="#" id="toggle_hardware_printer">Printers</a></li> <?php } ?>
		</ul>
	</li>
	<?php } ?>
	<?php if ((count($software) > 0) or (count($updates) > 0) or (count($codecs) > 0) or (count($odbc) > 0) or (count($assembly) > 0) or (count($service) > 0) or (count($software_key) > 0)) { ?>
	<li class="parent"><img alt="" src="<?php echo $image_path?>16_archive.png" id="toggle_software_all"/><a href="#">Software</a>
		<ul>
		 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_installer.png" /><a href="#" id="toggle_software_installed">Installed</a></li> <?php } ?> 
		 	<?php if (count($updates) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_update.png" /><a href="#" id="toggle_software_updates">Updates</a></li> <?php } ?> 
		 	<?php if (count($codecs) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_multimedia.png" /><a href="#" id="toggle_software_codecs">Codecs</a></li> <?php } ?> 
		 	<?php if (count($odbc) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_database.png" /><a href="#" id="toggle_software_odbc">ODBC Drivers</a></li> <?php } ?> 
		 	<?php if (count($assembly) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_assembly.png" /><a href="#" id="toggle_software_assembly">Assembly</a></li> <?php } ?> 
		 	<?php if (count($service) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_system.png" /><a href="#" id="toggle_software_services">Services</a></li> <?php } ?> 
		 	<?php if (isset($software_key) and count($software_key) > 0 and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_authentication.png" /><a href="#" id="toggle_software_keys">Keys</a></li> <?php } ?> 
		</ul>
	</li>
	<?php } ?>
	<?php if ((count($share) > 0) or (count($route) > 0) or (count($system_user) > 0) or (count($system_group) > 0) or (count($dns) > 0) or (count($system_log) > 0) or (count($system_variable) > 0) or (count($netstat) > 0)) { ?>
	<li class="parent"><img alt="" src="<?php echo $image_path?>16_settings.png" id="toggle_settings_all"/><a href="#">Settings</a>
		<ul>
		 	<?php if (count($share) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_share.png" /><a href="#" id="toggle_settings_shares">Shares</a></li> <?php } ?> 
		 	<?php if (count($pagefile) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_general.png" /><a href="#" id="toggle_settings_pagefile">Pagefiles</a></li> <?php } ?> 
		 	<?php if (count($route) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_routes.png" /><a href="#" id="toggle_settings_routes">Routes</a></li> <?php } ?> 
		 	<?php if (count($system_user) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_theme.png" /><a href="#" id="toggle_settings_users">Users</a></li> <?php } ?> 
		 	<?php if (count($system_group) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_users.png" /><a href="#" id="toggle_settings_groups">Groups</a></li> <?php } ?> 
		 	<?php if (count($dns) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_font.png" /><a href="#" id="toggle_settings_dns">DNS</a></li> <?php } ?> 
		 	<?php if (count($netstat) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_network.png" /><a href="#" id="toggle_settings_netstat">NetStat</a></li> <?php } ?> 
		 	<?php if (count($print_queue) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_printer.png" /><a href="#" id="toggle_settings_print_queue">Print Queue</a></li> <?php } ?> 
		 	<?php if (count($system_log) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_fill.png" /><a href="#" id="toggle_settings_logs">Logs</a></li> <?php } ?> 
		 	<?php if (count($system_variable) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_font.png" /><a href="#" id="toggle_settings_variables">Variables</a></li> <?php } ?> 
		</ul>
	</li>
	<?php } ?>
	<?php if ((count($database) > 0) or (count($webserver) > 0)) { ?>
	<li class="parent"><img alt="" src="<?php echo $image_path?>16_devices.png" id="toggle_server_all" /><a href="#">Servers</a>
		<ul>
		<?php if (count($database) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_database.png" /><a href="#" id="toggle_server_database">Database</a></li><?php } ?> 
		<?php if (count($webserver) > 0)        { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_web.png" /><a href="#" id="toggle_server_web">WebServer</a></li><?php } ?> 
		</ul>
	</li>
	<?php } ?>
</ul> 
</div>
</fieldset> 
</form> 
</div>
</div>











<div id="content_column" style="margin-left: 200px;">

	<!-- below are the main content blocks -->
	
	<div id="summary" style="float: left; width: 100%;" >
	<form action="#" method="post" class="niceforms">
		<fieldset id="system_details" class="niceforms">
			<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('System Details')?></span></legend>
			<div style="float:right; width: 100px; text-align:center">
				<img width="100" title="" alt="" src="<?php echo base_url()?>device_images/<?php echo $system[0]->man_picture?>" style="border: 1px solid rgb(219, 217, 197);"/>
			<?php if (($access_level > 7) and (extension_loaded('snmp')) and ($system[0]->man_ip_address != '000.000.000.000') and ($system[0]->man_ip_address != '0.0.0.0') and ($system[0]->man_ip_address > '')) { ?>
				<input type="button" onclick="window.open('<?php echo base_url(); ?>index.php/admin_system/system_snmp/<?php echo $system_id; ?>', 'SNMP Scan', 'height=300,left=100,location=no,menubar=no,resizable=no,scrollbars=no,status=no,titlebar=no,toolbar=no,top=100,width=400');" value='SNMP Scan' title='SNMP Scan' name='SNMP Scan' alt='SNMP Scan' width='24' />
			<?php } ?>
			<!--
			<?php if (($access_level > 7) and ($last_seen == 'nmap')) { ?>
				<input type="button" onclick="parent.location='<?php echo base_url(); ?>index.php/admin_system/merge_system/<?php echo $system_id; ?>'" value='Merge' title='Merge' name='Merge' alt='Merge' width='24' />
			<?php } ?>
			-->

			</div>
			<div style="margin-right: 120px;">
				<?php foreach($system as $key): ?>
					<?php $os_install_date = $key->pc_date_os_installation; ?>
					<div>
						<div style="float:left; width:50%;">
							<p><label for="hostname"><?php echo __('Hostname')?>: </label><span id="hostname" <?php echo $edit?>><?php echo print_something($key->hostname)?></span></p>
							<p><label for="man_ip_address"><?php echo __('IP Address')?>: </label><span id="man_ip_address" <?php echo $edit?>><?php echo print_something(ip_address_from_db($key->man_ip_address))?></span></p>

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
							<p><label for="man_class"><?php echo __('Class')?>: </label><span id="man_class" <?php echo $edit?>><?php echo print_something($key->man_class)?></span></p>
							<p><label for="man_icon"><?php echo __('Icon')?>: </label><span id="man_icon" <?php echo $edit?>><?php echo print_something($key->man_icon)?></span></p>
							<p><label for="man_os_group"><?php echo __('OS Group')?>: </label><span id="man_os_group" <?php echo $edit?>><?php echo print_something($key->man_os_group)?></span></p>
							<p><label for="man_os_family"><?php echo __('OS Family')?>: </label><span id="man_os_family" <?php echo $edit?>><?php echo print_something($key->man_os_family)?></span></p>
						</div>
						<div style="float:right; width:50%;">
							<p><label for="man_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="man_manufacturer" <?php echo $edit?>><?php echo print_something($key->man_manufacturer)?></span></p>
							<p><label for="man_model"><?php echo __('Model')?>: </label><span id="man_model" <?php echo $edit?>><?php echo print_something($key->man_model)?></span></p>
							<p><label for="man_serial"><?php echo __('Serial')?>: </label><span id='man_serial' <?php echo $edit?>><?php echo print_something($key->man_serial)?></span></p>
							<p><label for="man_form_factor"><?php echo __('Form Factor')?>: </label><span id="man_form_factor" <?php echo $edit?>><?php echo print_something($key->man_form_factor)?></span></p>
							<p><label for='st_memory'><?php echo __('Memory')?>: </label><span id='st_memory' class="form_field"><?php echo number_format(intval($key->pc_memory / 1024)); ?> MiB&nbsp;</span></p>
							<p><label for='st_uptime'><?php echo __('Uptime')?>: </label><span id='st_uptime' class="form_field"><?php echo print_something(strTime($key->uptime)) ?>&nbsp;</span></p>
							<p><label for="man_location_name"><?php echo __('Location Name')?>: </label><span id="man_location_name"><?php echo print_something($location_name)?>&nbsp;</span></p>
							<p><label for="man_function"><?php echo __('Function')?>: </label><span id="man_function" <?php echo $edit?>><?php echo print_something($key->man_function)?></span></p>
							
							<?php if(mb_strpos($key->manufacturer, 'VMware') !== false ){ ?>
								<p><label for="man_vm_server_name"><?php echo __('Physical Host')?>: </label><span id="man_vm_server_name" <?php echo $edit?>><?php echo print_something($key->man_vm_server_name)?></span></p>
								<p><label for="man_vm_group"><?php echo __('Virtual Machine Group')?>: </label><span id="man_vm_group" <?php echo $edit?>><?php echo print_something($key->man_vm_group)?></span></p>
							<?php } else { ?>
								<p><label for="link_warranty"><?php echo __('Warranty Link')?>: </label><span id="link_warranty"><?php echo print_something($link_warranty)?> </span></p>
								<p><label for="link_downloads"><?php echo __('Downloads Link')?>: </label><span id="link_downloads"><?php echo print_something($link_downloads)?> </span></p>
								<?php if ($link_express_code != '' ){ ?>
									<p><label for="link_express_code"><?php echo __('Dell Express Code')?>: </label><span id="link_express"><?php echo print_something($link_express_code)?> </span></p>
								<?php } ?>
							<?php } ?>

						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div style="margin-right: 120px;">
				<label for="man_os_name"><?php echo __('OS Name')?>: </label><span id="man_os_name" <?php echo $edit?>><?php echo print_something($os_name)?></span>
			</div>
			
			<?php echo display_custom_field('system_details', $additional_fields_data, $edit); ?>
				
		</fieldset>
	</form>
	</div> <!-- end of div Summary -->

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
					<p><label for="os_install_date"><?php echo __('OS Install Date')?>: </label><span id="os_install_date"><?php echo print_something($os_install_date)?></span></p>
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
				<p><label for='credentials_ip_address'>SNMP Community: </label><span id='credentials_snmp_community'><?php echo print_something($decoded_access_details->snmp_community); ?></span></p>

				<p><label for='credentials_ssh_username'>SSH Username: </label><span id='credentials_ssh_username'><?php echo print_something($decoded_access_details->ssh_username); ?></span></p>
				<p><label for='credentials_ssh_password'>SSH Password: </label><span id='credentials_ssh_password'><?php echo print_something($decoded_access_details->ssh_password); ?></span></p>

				<p><label for='credentials_windows_username'>Windows Username: </label><span id='credentials_windows_username'><?php echo print_something($decoded_access_details->windows_username); ?></span></p>
				<p><label for='credentials_windows_password'>Windows Password: </label><span id='credentials_windows_password'><?php echo print_something($decoded_access_details->windows_password); ?></span></p>
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
			echo display_custom_field('view_summary_purchase',  $additional_fields_data, $edit); ?>
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
			echo display_custom_field('view_summary_network',  $additional_fields_data, $edit);
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
			echo display_custom_field('view_summary_custom',  $additional_fields_data, $edit);
			?>
		</fieldset>
	</form>
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
							<td><?php echo $key->alert_details?></td>
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
					<?php #foreach($system as $key): ?>
					<p><label for="nmis_group"><?php echo __('NMIS Group')?>: </label><span id="nmis_group" <?php echo $edit?>><?php echo print_something($system[0]->nmis_group)?></span></p>
					<p><label for="nmis_name"><?php echo __('NMIS Name')?>: </label><span id="nmis_name" <?php echo $edit?>><?php echo print_something($system[0]->nmis_name)?></span></p>
					<p><label for="nmis_role_select"><?php echo __('NMIS Role')?>: </label><span id="nmis_role_select" style="color:blue;"><span onclick="display_nmis_role();"><?php echo print_something($system[0]->nmis_role)?></span></span></p>
					<?php #endforeach; ?>
				</div>
			</fieldset>
		</form>
	</div>






	<div id="view_hardware_processor" style="float: left; width: 100%;">
	<?php if (count($processor) > 0) { ?>
		<br />
		<br />
		<form action="#" method="post" class="niceforms">
			<fieldset id="processor_details">
				<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Processor Details')?></span></legend>
				<?php foreach($processor as $key):
					$image = $image_path . '48_component_cpu.png';
					if (mb_stripos($key->processor_description, 'pentium 4'))
					{
						$image = $image_path . '48_intel_p4.png';
					}
					if (mb_stripos($key->processor_description, 'xeon'))
					{
						$image = $image_path . '48_intel_xeon.png';
					}
					if (mb_stripos($key->processor_description, 'Duo'))
					{
						$image = $image_path . '48_intel_core_duo.png';
					}
					if (mb_stripos($key->processor_description, 'III processor'))
					{
						$image = $image_path . '48_intel_p3.png';
					}
					if (mb_stripos($key->processor_description, 'Intel Pentium D'))
					{
						$image = $image_path . '48_intel_pd.png';
					}
					if ((mb_substr_count($key->processor_manufacturer, 'GenuineIntel') > 0) and (substr_count($image, '48_component_cpu') > 0))
					{
						$image = $image_path . '48_intel.png';
					}
					if ((mb_substr_count($key->processor_manufacturer, 'AuthenticAMD') > 0) and (substr_count($image, '48_component_cpu') > 0))
					{
						$image = $image_path . '48_amd.png';
					}
					
					?>
					<img style='float: right; margin; 10px; ' src='<?php echo $image;?>' alt='' title='' width='48'/>
					<p><label for="processor_description"><?php echo __('Description')?>: </label><span id="processor_description" class="form_field"><?php echo $key->processor_description?></span></p>
					<p><label for="processor_speed"><?php echo __('Speed')?>: </label><span id="processor_speed" class="form_field"><?php echo $key->processor_speed?> MHz</span></p>
					<p><label for="processor_cores"><?php echo __('Cores')?>: </label><span id="processor_cores" class="form_field"><?php echo $key->processor_cores?></span></p>
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
					<p><label for="bios_description"><?php echo __('Description')?>: </label><span id="bios_description"><?php echo $key->bios_description?></span></p>
					<p><label for="bios_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="bios_manufacturer"><?php echo $key->bios_manufacturer?></span></p>
					<p><label for="bios_serial"><?php echo __('Serial')?>: </label><span id="bios_serial"><?php echo $key->bios_serial?>&nbsp;</span></p>
					<p><label for="bios_smversion"><?php echo __('SMVersion')?>: </label><span id="bios_smversion"><?php echo $key->bios_smversion?></span></p>
					<p><label for="bios_version"><?php echo __('Version')?>: </label><span id="bios_version"><?php echo $key->bios_version?></span></p>
					<p><label for="bios_asset_tag"><?php echo __('Asset Tag')?>: </label><span id="bios_asset_tag"><?php echo $key->bios_asset_tag?></span></p>
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
				<?php foreach($network as $key): ?>
				<fieldset id="network_details_<?php echo str_replace('/','-',$key->net_id)?>">
				<legend><span style="font-size: 10pt;">&nbsp;<?php echo $key->net_description?> <?php echo __('Details')?></span></legend>
				<div>
					<div style="float:left; width:50%;">
						<p><label for="network_connection_id_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Connection ID')?>: </label><span id="network_connection_id_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_connection_id)?></span></p>
						<p><label for="network_mac_address_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('MAC Address')?>: </label><span id="network_mac_address_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_mac_address)?></span></p>
						<p><label for="network_model_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Model')?>: </label><span id="network_model_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_model)?></span></p>
						<p><label for="network_manufacturer_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Manufacturer')?>: </label><span id="network_manufacturer_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo print_something($key->net_manufacturer)?></span></p>
						<p><label for="network_speed_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo __('Speed')?>: </label><span id="network_speed_<?php echo str_replace('/','-',$key->net_id)?>"><?php echo number_format(intval($key->net_speed) / 10000)?>&nbsp;MB/s</span></p>
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
				?>
				<div style="float:right; width: 100px; margin-left: -80%;">
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
				foreach ($ip as $ip_address)
				{
					if ($ip_address->net_mac_address == $key->net_mac_address)
					{
						$ip_address_displayed = '000.000.000.000';
						if ($ip_address->ip_address_version == '6'){
							$ip_address_displayed = $ip_address->ip_address_v6;
						} else {
							$ip_address_displayed = ip_address_from_db($ip_address->ip_address_v4);
						}
						$ip_count ++;
						?>
						<tr>
							<td><?php echo print_something($ip_address_displayed)?></td>
							<td><?php echo print_something($ip_address->ip_subnet)?></td>
							<td><?php echo print_something($ip_address->ip_address_version)?></td>
						</tr>
						
					<?php } ?>
				<?php } ?>
				<?php if ($ip_count == 0) { ?>
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
				<?php endforeach; ?>
				<?php echo display_custom_field('view_hardware_network',  $additional_fields_data, $edit); ?>
			</fieldset>
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
							<p><label for='hd_serial_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('SMART Status')?>: </label><span id='hd_status_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_status?>&nbsp;</span></p>
							<?php if ($key->hard_drive_interface_type == "SCSI") { ?>
							<p><label for='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Interface')?>: </label><span id='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_interface_type?></span></p>
							<p><label for='scsi_id_<?php echo str_replace('/','-',$key->hard_drive_scsi_logical_unit)?>'><?php echo __('SCSI id')?>: </label><span id='scsi_id_<?php echo str_replace('/','-',$key->hard_drive_scsi_logical_unit)?>' class="form_field"><?php echo $key->hard_drive_scsi_logical_unit?></span></p>
							<?php } else { ?>
							<p><label for='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>'><?php echo __('Interface')?>: </label><span id='hd_interface_<?php echo str_replace('/','-',$key->hard_drive_index)?>' class="form_field"><?php echo $key->hard_drive_interface_type?>&nbsp;</span></p>
							<?php } ?>
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
			<fieldset id="hf_software_listing" class="niceforms">
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










<!--
<?php if ($tabcustom <> '') { ?>
<div id="tabcustom" style="float: left; width: 100%;">
	
	<form action="#" method="post" class="niceforms">
	<fieldset id="server_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Custom Defined Fields')?></span></legend>
	<?php
	foreach($additional_fields as $field)
	{
		$data_id = "field_" . $field->field_type . "_id";
	#	$data_id = $field->$data_id;
		$data_value = "field_" . $field->field_type;

	#	$data_value = $field->$data_value;
		echo "<p><label for=\"" . $data_id . "\" style=\"width:300px;\">" . __($field->field_name) . ": </label>";
		echo "<span id=\"custom_" . $field->field_type . "_" . $data_id . "_" . $field->field_id . "\" " . $edit . ">" . print_something($field->$data_value) . "</span></p>";
	}
	?>
	</fieldset>
	</form>
	<?php
	echo "<pre>\n";
	print_r($additional_fields);
	echo "</pre>\n";
	?>
</div>
<?php } ?>
-->










<!-- end of content_column -->





<?php include "include_display_javascript.php"; ?>

<script type="text/javascript">

var toggle_summary_windows;

$(document).ready(function(){
	
	$('#view_summary_windows').hide();
	$('#view_summary_credentials').hide();
	$('#view_summary_purchase').hide();
	$('#view_summary_network').hide();
	$('#view_summary_audits').hide();
	$('#view_summary_audit_log').hide();
	$('#view_summary_alerts').hide();
	$('#view_summary_location').hide();
	$('#view_summary_custom').hide();
	$('#view_summary_attachment').hide();
	$('#view_summary_nmis').hide();

	$('#toggle_summary_windows').click(function(){
		$('#view_summary_windows').slideToggle("fast");
	});

	$('#toggle_summary_credentials').click(function(){
		$('#view_summary_credentials').slideToggle("fast");
	});

	$('#toggle_summary_purchase').click(function(){
		$('#view_summary_purchase').slideToggle("fast");
	});

	$('#toggle_summary_network').click(function(){
		$('#view_summary_network').slideToggle("fast");
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

	$('#toggle_summary_location').click(function(){
		$('#view_summary_location').slideToggle("fast");
	});

	$('#toggle_summary_custom').click(function(){
		$('#view_summary_custom').slideToggle("fast");
	});

	$('#toggle_summary_attachment').click(function(){
		$('#view_summary_attachment').slideToggle("fast");
	});

	$('#toggle_summary_nmis').click(function(){
		$('#view_summary_nmis').slideToggle("fast");
	});

	var summary_toggle = 0;

	$('#toggle_summary_all').click(function(){
		if (summary_toggle == 0)
		{
			$('#view_summary_windows').show("fast");
			$('#view_summary_credentials').show("fast");
			$('#view_summary_purchase').show("fast");
			$('#view_summary_network').show("fast");
			$('#view_summary_audits').show("fast");
			$('#view_summary_audit_log').show("fast");
			$('#view_summary_alerts').show("fast");
			$('#view_summary_location').show("fast");
			$('#view_summary_custom').show("fast");
			$('#view_summary_attachment').show("fast");
			$('#view_summary_nmis').show("fast");
			summary_toggle = 1;
		}
		else 
		{
			$('#view_summary_windows').hide("fast");
			$('#view_summary_credentials').hide("fast");
			$('#view_summary_purchase').hide("fast");
			$('#view_summary_network').hide("fast");
			$('#view_summary_audits').hide("fast");
			$('#view_summary_audit_log').hide("fast");
			$('#view_summary_alerts').hide("fast");
			$('#view_summary_location').hide("fast");
			$('#view_summary_custom').hide("fast");
			$('#view_summary_attachment').hide("fast");
			$('#view_summary_nmis').hide("fast");
			summary_toggle = 0;
		}
	});


	$('#view_hardware_processor').hide();
	$('#view_hardware_memory').hide();
	$('#view_hardware_bios').hide();
	$('#view_hardware_motherboard').hide();
	$('#view_hardware_scsi_controller').hide();
	$('#view_hardware_network').hide();
	$('#view_hardware_hard_drive').hide();
	$('#view_hardware_optical').hide();
	$('#view_hardware_video').hide();
	$('#view_hardware_monitor').hide();
	$('#view_hardware_sound').hide();
	$('#view_hardware_printer').hide();
        
	var hardware_toggle = 0;

	$('#toggle_hardware_processor').click(function(){
		$('#view_hardware_processor').slideToggle("fast");
	});

	$('#toggle_hardware_memory').click(function(){
		$('#view_hardware_memory').slideToggle("fast");
	});
 
	$('#toggle_hardware_bios').click(function(){
		$('#view_hardware_bios').slideToggle("fast");
	});   

	$('#toggle_hardware_motherboard').click(function(){
		$('#view_hardware_motherboard').slideToggle("fast");
	});   

	$('#toggle_hardware_scsi_controller').click(function(){
		$('#view_hardware_scsi_controller').slideToggle("fast");
	});

	$('#toggle_hardware_network').click(function(){
		$('#view_hardware_network').slideToggle("fast");
	});

	$('#toggle_hardware_hard_drive').click(function(){
		$('#view_hardware_hard_drive').slideToggle("fast");
	});

	$('#toggle_hardware_optical').click(function(){
		$('#view_hardware_optical').slideToggle("fast");
	});

	$('#toggle_hardware_video').click(function(){
		$('#view_hardware_video').slideToggle("fast");
	});

	$('#toggle_hardware_monitor').click(function(){
		$('#view_hardware_monitor').slideToggle("fast");
	});

	$('#toggle_hardware_sound').click(function(){
		$('#view_hardware_sound').slideToggle("fast");
	});

	$('#toggle_hardware_printer').click(function(){
		$('#view_hardware_printer').slideToggle("fast");
	});

	$('#toggle_hardware_all').click(function(){
	if (hardware_toggle == 0)
	{
			$('#view_hardware_processor').show("fast");
			$('#view_hardware_memory').show("fast");
			$('#view_hardware_bios').show("fast");
			$('#view_hardware_motherboard').show("fast");
			$('#view_hardware_scsi_controller').show("fast");
			$('#view_hardware_network').show("fast");
			$('#view_hardware_hard_drive').show("fast");
			$('#view_hardware_optical').show("fast");
			$('#view_hardware_video').show("fast");
			$('#view_hardware_monitor').show("fast");
			$('#view_hardware_sound').show("fast");
			$('#view_hardware_printer').show("fast");
			hardware_toggle = 1;
		}
		else 
		{
			$('#view_hardware_processor').hide("fast");
			$('#view_hardware_memory').hide("fast");
			$('#view_hardware_bios').hide("fast");
			$('#view_hardware_motherboard').hide("fast");
			$('#view_hardware_scsi_controller').hide("fast");
			$('#view_hardware_network').hide("fast");
			$('#view_hardware_hard_drive').hide("fast");
			$('#view_hardware_optical').hide("fast");
			$('#view_hardware_video').hide("fast");
			$('#view_hardware_monitor').hide("fast");
			$('#view_hardware_sound').hide("fast");
			$('#view_hardware_printer').hide("fast");
			hardware_toggle = 0;
		}
	});

	$('#view_software_installed').hide();
	$('#view_software_updates').hide();
	$('#view_software_services').hide();
	$('#view_software_codecs').hide();
	$('#view_software_odbc').hide();
	$('#view_software_assembly').hide();
	$('#view_software_keys').hide();

	var software_toggle = 0;

	$('#toggle_software_installed').click(function(){
		$('#view_software_installed').slideToggle("fast");
	});

	$('#toggle_software_updates').click(function(){
		$('#view_software_updates').slideToggle("fast");
	});

	$('#toggle_software_services').click(function(){
		$('#view_software_services').slideToggle("fast");
	});

	$('#toggle_software_codecs').click(function(){
		$('#view_software_codecs').slideToggle("fast");
	});

	$('#toggle_software_odbc').click(function(){
		$('#view_software_odbc').slideToggle("fast");
	});

	$('#toggle_software_assembly').click(function(){
		$('#view_software_assembly').slideToggle("fast");
	});

	$('#toggle_software_keys').click(function(){
		$('#view_software_keys').slideToggle("fast");
	});


	$('#toggle_software_all').click(function(){
		if (software_toggle == 0)
		{
			$('#view_software_installed').show("fast");
			$('#view_software_updates').show("fast");
			$('#view_software_services').show("fast");
			$('#view_software_codecs').show("fast");
			$('#view_software_odbc').show("fast");
			$('#view_software_assembly').show("fast");
			$('#view_software_keys').show("fast");
			software_toggle = 1;
		}
		else 
		{
			$('#view_software_installed').hide("fast");
			$('#view_software_updates').hide("fast");
			$('#view_software_services').hide("fast");
			$('#view_software_codecs').hide("fast");
			$('#view_software_odbc').hide("fast");
			$('#view_software_assembly').hide("fast");
			$('#view_software_keys').hide("fast");
			software_toggle = 0;
		}
	});

	$('#view_settings_pagefile').hide();
	$('#view_settings_shares').hide();
	$('#view_settings_routes').hide();
	$('#view_settings_users').hide();
	$('#view_settings_groups').hide();
	$('#view_settings_print_queue').hide();
	$('#view_settings_dns').hide();
	$('#view_settings_netstat').hide();
	$('#view_settings_logs').hide();
	$('#view_settings_variables').hide();
               
	var settings_toggle = 0;
	
	$('#toggle_settings_pagefile').click(function(){
		$('#view_settings_pagefile').slideToggle("fast");
	});

	$('#toggle_settings_shares').click(function(){
		$('#view_settings_shares').slideToggle("fast");
	});
		
	$('#toggle_settings_routes').click(function(){
		$('#view_settings_routes').slideToggle("fast");
	});

	$('#toggle_settings_users').click(function(){
		$('#view_settings_users').slideToggle("fast");
	});

	$('#toggle_settings_groups').click(function(){
		$('#view_settings_groups').slideToggle("fast");
	});

	$('#toggle_settings_print_queue').click(function(){
		$('#view_settings_print_queue').slideToggle("fast");
	});

	$('#toggle_settings_dns').click(function(){
		$('#view_settings_dns').slideToggle("fast");
	});

	$('#toggle_settings_netstat').click(function(){
		$('#view_settings_netstat').slideToggle("fast");
	});

	$('#toggle_settings_logs').click(function(){
		$('#view_settings_logs').slideToggle("fast");
	});

	$('#toggle_settings_variables').click(function(){
		$('#view_settings_variables').slideToggle("fast");
	});

	$('#toggle_settings_all').click(function(){
		if (settings_toggle == 0)
		{
			$('#view_settings_pagefile').show("fast");
			$('#view_settings_shares').show("fast");
			$('#view_settings_routes').show("fast");
			$('#view_settings_users').show("fast");
			$('#view_settings_groups').show("fast");
			$('#view_settings_print_queue').show("fast");
			$('#view_settings_dns').show("fast");
			$('#view_settings_netstat').show("fast");
			$('#view_settings_logs').show("fast");
			$('#view_settings_variables').show("fast");
			settings_toggle = 1;
		}
		else 
		{
			$('#view_settings_pagefile').hide("fast");
			$('#view_settings_shares').hide("fast");
			$('#view_settings_routes').hide("fast");
			$('#view_settings_users').hide("fast");
			$('#view_settings_groups').hide("fast");
			$('#view_settings_print_queue').hide("fast");
			$('#view_settings_dns').hide("fast");
			$('#view_settings_netstat').hide("fast");
			$('#view_settings_logs').hide("fast");
			$('#view_settings_variables').hide("fast");
			settings_toggle = 0;
		}
	});

	$('#view_server_database').hide();
	$('#view_server_web').hide();

	var server_toggle = 0;

	$('#toggle_server_database').click(function(){
		$('#view_server_database').slideToggle("fast");
	});

	$('#toggle_server_web').click(function(){
		$('#view_server_web').slideToggle("fast");
	});

	$('#toggle_server_all').click(function(){
		if (server_toggle == 0)
		{
			$('#view_server_database').show("fast");
			$('#view_server_web').show("fast");
			server_toggle = 1;
		}
		else 
		{
			$('#view_server_database').hide("fast");
			$('#view_server_web').hide("fast");
			server_toggle = 0;
		}
	});
});
</script>

<?php
function clean_url($url) {
	$url = str_replace("&amp;", "&", $url);
	$url = str_replace("&", "&amp;", $url);
	$url = str_replace("\\", '/', $url);
	return $url;	
}

function print_something($string)
{
	if ((mb_strlen($string) == 0) OR ($string == '0000-00-00') ) {
		return '-';
	} else {
		return $string;
	}
}

function display_custom_field($field_placement, $additional_fields, $edit) {
	foreach($additional_fields as $field)
	{
		if ($field->field_placement == $field_placement)
		{			
			$data_id = "";
			$data_value = "";
			
			$data_id = "field_" . $field->field_type;
			$data_id = $field->$data_id;
			
			$data_value = "field_" . $field->field_type;
			$data_value = $field->$data_value;
			
			$width = "120";
			if ($field_placement == 'view_summary_windows')
			{
				$width = '160';
			}
			# TODO: fix this string output hack with real html entities
			echo "<div style=\"float: left; width: 90%; \">\n";
			echo "<label for=\"custom_" . $field->field_type . "_" . $field->field_details_id . "_" . $field->field_id . "\" >" . __($field->field_name) . ": </label>";
			echo   "<span id=\"custom_" . $field->field_type . "_" . $field->field_details_id . "_" . $field->field_id . "\" " . $edit . ">" . print_something($data_value) . "</span><br />&nbsp;\n";
			echo "</div>\n";
		}
	}
}

function strTime($s) {
	$str = "";
	$d = intval($s/86400);
	$s -= $d*86400;
	$h = intval($s/3600);
	$s -= $h*3600;
	$m = intval($s/60);
	$s -= $m*60;
	if ($d) $str = $d . 'd ';
	if ($h) $str .= $h . 'h ';
	if ($m) $str .= $m . 'm ';
	if ($s) $str .= $s . 's';
	return $str;
}
