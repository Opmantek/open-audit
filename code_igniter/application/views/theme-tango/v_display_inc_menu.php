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
 * @version 1.5.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

?>
<!-- v_display_inc_menu.php -->
<?php
# 'computer' specific items
if (count($processor) > 0 or count($memory) > 0 or count($bios) > 0 or 
	count($motherboard) > 0 or count($network) > 0 or count($scsi_controller) > 0 or 
	count($hard_drive) > 0 or count($optical) > 0 or count($video) > 0 or 
	count($monitor) > 0 or count($sound) > 0 or count($printer) > 0 ) { ?>

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
<?php 
}
if (count($software) > 0 or count($updates) > 0 or count($codecs) > 0 or 
	count($odbc) > 0 or count($assembly) > 0 or count($service) > 0 or 
	count($software_key) > 0 ) { ?>
<li class="parent"><img alt="" src="<?php echo $image_path?>16_archive.png" id="toggle_software_all"/><a href="#">Software</a>
	<ul>
	 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_installer.png" /><a href="#" id="toggle_software_installed">Installed</a></li> <?php } ?> 
	 	<?php if (count($updates) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_update.png" /><a href="#" id="toggle_software_updates">Updates</a></li> <?php } ?> 
	 	<?php if (count($library) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_assembly.png" /><a href="#" id="toggle_software_library">Libraries</a></li> <?php } ?> 
	 	<?php if (count($codecs) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_multimedia.png" /><a href="#" id="toggle_software_codecs">Codecs</a></li> <?php } ?> 
	 	<?php if (count($odbc) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_database.png" /><a href="#" id="toggle_software_odbc">ODBC Drivers</a></li> <?php } ?> 
	 	<?php if (count($assembly) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_assembly.png" /><a href="#" id="toggle_software_assembly">Assembly</a></li> <?php } ?> 
	 	<?php if (count($service) > 0) { ?> <li class="child"><img alt="" src="<?php echo $image_path?>16_system.png" /><a href="#" id="toggle_software_services">Services</a></li> <?php } ?> 
	 	<?php if (isset($software_key) and count($software_key) > 0 and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $image_path?>16_authentication.png" /><a href="#" id="toggle_software_keys">Keys</a></li> <?php } ?> 
	</ul>
</li>
<?php 
}
if (count($share) > 0 or count($route) > 0 or count($system_user) > 0 or 
	count($system_group) > 0 or count($dns) > 0 or count($system_log) > 0 or 
	count($system_variable) > 0 or count($netstat) > 0) { ?>
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