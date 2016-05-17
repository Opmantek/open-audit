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
<!-- v_display_inc_menu.php -->
<?php
# 'computer' specific items
if (count($processor) > 0 or count($memory) > 0 or count($bios) > 0 or
    count($motherboard) > 0 or count($network) > 0 or count($scsi) > 0 or
    count($hard_drive) > 0 or count($optical) > 0 or count($video) > 0 or
    count($monitor) > 0 or count($sound) > 0) {
    ?>

<li class="parent"><a href="#">&nbsp;&nbsp;&nbsp;<?php echo __('Hardware')?></a>
	<ul>
		<?php if (count($processor) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images;?>/16_processor.png" /><a href="#" id="toggle_hardware_processor"><?php echo __('Processor')?></a></li> <?php } ?>
	 	<?php if (count($memory) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_memory.png" /><a href="#" id="toggle_hardware_memory"><?php echo __('Memory')?></a></li> <?php } ?>
	 	<?php if (count($bios) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_bios.png" /><a href="#" id="toggle_hardware_bios"><?php echo __('Bios')?></a></li> <?php } ?>
	 	<?php if (count($motherboard) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_media-memory.png" /><a href="#" id="toggle_hardware_motherboard"><?php echo __('Motherboard')?></a></li> <?php } ?>
	 	<?php if (count($network) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_network.png" /><a href="#" id="toggle_hardware_network"><?php echo __('Network')?></a></li> <?php } ?>
	 	<?php if (count($scsi) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_general.png" /><a href="#" id="toggle_hardware_scsi_controller"><?php echo __('SCSI Controller')?></a></li> <?php } ?>
	 	<?php if (count($hard_drive) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_harddisk.png" /><a href="#" id="toggle_hardware_hard_drive"><?php echo __('Disk')?></a></li> <?php } ?>
	 	<?php if (count($optical) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_cdrom.png" /><a href="#" id="toggle_hardware_optical"><?php echo __('Optical')?></a></li> <?php } ?>
	 	<?php if (count($video) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_background.png" /><a href="#" id="toggle_hardware_video"><?php echo __('Video')?></a></li> <?php } ?>
	 	<?php if (count($monitor) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_monitor.png" /><a href="#" id="toggle_hardware_monitor"><?php echo __('Monitor')?></a></li> <?php } ?>
	 	<?php if (count($sound) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_sound.png" /><a href="#" id="toggle_hardware_sound"><?php echo __('Sound')?></a></li> <?php } ?>
	</ul>
</li>
<?php }
if (count($software) > 0 or count($service) > 0 or count($software_key) > 0) {
    ?>
    <li class="parent"><a href="#">&nbsp;&nbsp;&nbsp;<?php echo __('Software')?></a>
	<ul>
	 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_installer.png" /><a href="#" id="toggle_software_installed"><?php echo __('Installed')?></a></li> <?php } ?>
	 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_update.png" /><a href="#" id="toggle_software_updates"><?php echo __('Updates')?></a></li> <?php } ?>
	 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_assembly.png" /><a href="#" id="toggle_software_library"><?php echo __('Libraries')?></a></li> <?php } ?>
	 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_multimedia.png" /><a href="#" id="toggle_software_codecs"><?php echo __('Codecs')?></a></li> <?php } ?>
	 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_database.png" /><a href="#" id="toggle_software_odbc"><?php echo __('ODBC Drivers')?></a></li> <?php } ?>
	 	<?php if (count($software) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_assembly.png" /><a href="#" id="toggle_software_assembly"><?php echo __('Assembly')?></a></li> <?php } ?>
	 	<?php if (count($service) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_system.png" /><a href="#" id="toggle_software_services"><?php echo __('Services')?></a></li> <?php } ?>
	 	<?php if (isset($software_key) and count($software_key) > 0 and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_authentication.png" /><a href="#" id="toggle_software_keys"><?php echo __('Keys')?></a></li> <?php } ?>
	</ul>
</li>
<?php }
if ((isset($share) and count($share) > 0) or
	(isset($route) and count($route) > 0) or
	(isset($user) and count($user) > 0) or
    (isset($user_group) and count($user_group) > 0) or
    (isset($dns) and count($dns) > 0) or
    (isset($log) and count($log) > 0) or
    (isset($variable) and count($variable) > 0) or
    (isset($netstat) and count($netstat) > 0)) {
    ?>
    <li class="parent"><a href="#">&nbsp;&nbsp;&nbsp;<?php echo __('Settings')?></a>
	<ul>
	 	<?php if (count($share) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_share.png" /><a href="#" id="toggle_settings_shares"><?php echo __('Shares')?></a></li> <?php } ?>
	 	<?php if (count($pagefile) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_general.png" /><a href="#" id="toggle_settings_pagefile"><?php echo __('Pagefiles')?></a></li> <?php } ?>
	 	<?php if (count($route) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_routes.png" /><a href="#" id="toggle_settings_routes"><?php echo __('Routes')?></a></li> <?php } ?>
	 	<?php if (count($user) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_theme.png" /><a href="#" id="toggle_settings_users"><?php echo __('Users')?></a></li> <?php } ?>
	 	<?php if (count($user_group) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_users.png" /><a href="#" id="toggle_settings_groups"><?php echo __('Groups')?></a></li> <?php } ?>
	 	<?php if (count($dns) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_font.png" /><a href="#" id="toggle_settings_dns"><?php echo __('DNS')?></a></li> <?php } ?>
	 	<?php if (count($netstat) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_network.png" /><a href="#" id="toggle_settings_netstat"><?php echo __('NetStat')?></a></li> <?php } ?>
	 	<?php if (count($print_queue) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_printer.png" /><a href="#" id="toggle_settings_print_queue"><?php echo __('Print Queue')?></a></li> <?php } ?>
	 	<?php if (count($log) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_fill.png" /><a href="#" id="toggle_settings_logs"><?php echo __('Logs')?></a></li> <?php } ?>
        <?php if (count($task) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_task.png" /><a href="#" id="toggle_settings_tasks"><?php echo __('Tasks')?></a></li> <?php } ?>
	 	<?php if (count($variable) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_font.png" /><a href="#" id="toggle_settings_variables"><?php echo __('Variables')?></a></li> <?php } ?>
	</ul>
</li>
<?php }
if ((count($database) > 0) or (count($webserver) > 0)) { ?>
<li class="parent"><a href="#">&nbsp;&nbsp;&nbsp;<?php echo __('Servers')?></a>
	<ul>
	<?php if (count($database) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_database.png" /><a href="#" id="toggle_server_database"><?php echo __('Database<')?>/a></li><?php } ?>
	<?php if (count($webserver) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_web.png" /><a href="#" id="toggle_server_web"><?php echo __('WebServer')?></a></li><?php } ?>
	</ul>
</li>
<?php
} ?>
