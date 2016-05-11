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
$images_directory = $_SERVER['DOCUMENT_ROOT'].$oa_theme_images.'/';
?>
<!-- v_display_computer -->
    <?php if (count($windows) > 0) {
    ?>
    <div id="view_summary_windows" style="float: left; width: 100%;">
    <br />
    <form action="#" method="post" class='niceforms'>
        <fieldset id="summary_windows_details" class='niceforms'>
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Windows Details')?></span></legend>
            <div style="float:right; width: 100px;">
                <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_<?php echo $icon; ?>.png' alt='' title='' />
            </div>
            <?php foreach ($windows as $key): ?>
                <div>
                    <div style="float:left; width:50%;">
                        <p><label for="windows_registered_user"><?php echo __('Registered User')?>: </label><span id="windows_registered_user"><?php echo print_something($key->registered_user)?></span></p>
                        <p><label for="windows_organisation"><?php echo __('Registered Org')?>: </label><span id="windows_organisation"><?php echo print_something($key->organisation)?></span></p>
                        <p><label for="windows_language"><?php echo __('Language')?>: </label><span id="windows_language"><?php echo print_something($key->language)?></span></p>
                        <p><label for="windows_country_code"><?php echo __('Country')?>: </label><span id="windows_country_code"><?php echo print_something(ucfirst(mb_strtolower($key->country_code)))?></span></p>
                        <p><label for="windows_time_caption"><?php echo __('Time (caption)')?>: </label><span id="windows_time_caption"><?php echo print_something($key->time_caption)?></span></p>
                        <p><label for="windows_time_daylight"><?php echo __('Time (daylight)')?>: </label><span id="windows_time_daylight"><?php echo print_something($key->time_daylight)?></span></p>
                        <p><label for="windows_part_of_domain"><?php echo __('Part of Domain')?>: </label><span id="windows_part_of_domain"><?php echo print_something($key->part_of_domain)?></span></p>
                        <p><label for="windows_domain_role"><?php echo __('Domain Role')?>: </label><span id="windows_domain_role"><?php echo print_something($key->domain_role)?></span></p>
                        <p><label for="os_install_date"><?php echo __('OS Install Date')?>: </label><span id="os_install_date"><?php echo print_something($system[0]->pc_date_os_installation)?></span></p>
                    </div>
                    <div style="float:left; width:40%;">
                        <p><label for="windows_workgroup"><?php echo __('Workgroup')?>: </label><span id="windows_workgroup"><?php echo print_something($key->workgroup)?></span></p>
                        <p><label for="windows_domain_short"><?php echo __('Domain')?>: </label><span id="windows_domain_short"><?php echo print_something($key->domain_short)?></span></p>
                        <p><label for="windows_domain_controller_address"><?php echo __('DC Address')?>: </label><span id="windows_domain_controller_address"><?php echo print_something($key->domain_controller_address)?></span></p>
                        <p><label for="windows_domain_controller_name"><?php echo __('DC Name')?>: </label><span id="windows_domain_controller_name"><?php echo print_something($key->domain_controller_name)?></span></p>
                        <p><label for="windows_boot_device"><?php echo __('Boot Device')?>: </label><span id="windows_boot_device"><?php echo print_something($key->boot_device)?></span></p>
                        <p><label for="windows_install_directory"><?php echo __('Install Directory')?>: </label><span id="windows_install_directory"><?php echo print_something($key->install_directory)?></span></p>
                        <p><label for="windows_service_pack"><?php echo __('Service Pack')?>: </label><span id="windows_service_pack"><?php echo print_something($key->service_pack)?></span></p>
                        <p><label for="windows_version"><?php echo __('Version')?>: </label><span id="windows_version"><?php echo print_something($key->version)?></span></p>
                        <p><label for="windows_build_number"><?php echo __('Build Number')?>: </label><span id="windows_build_number"><?php echo print_something($key->build_number)?></span></p>
                    </div>
                </div>
                <?php
                if ($key->active_directory_ou > "") { ?>
                <div style="float:left; width:90%;">
                    <label for="active_directory_ou"><?php echo __('Active Directory OU')?>: </label><span id="active_directory_ou"><?php echo print_something(str_replace(",", ", ", $key->active_directory_ou))?></span>
                </div>
                <?php }
                if ($key->user_name > "") { ?>
                    <div style="float:left; width:90%;">
                        <p><label for="windows_user_name"><?php echo __('Last Logged on User')?>: </label><span id="windows_user_name"><?php echo str_replace("&", "&amp;", print_something($key->user_name))?></span></p>
                    </div>
                <?php }
                $windows_service_pack = $key->service_pack;
            endforeach;
            echo display_custom_field('view_summary_windows',  $additional_fields_data, $edit);
            ?>
        </fieldset>
    </form>
    </div> <!-- end of view_summary_windows -->
    <?php } ?>

    <div id="view_hardware_processor" style="float: left; width: 100%;">
    <?php if (count($processor) > 0) {
    ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="processor_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Processor Details')?></span></legend>
                <?php foreach ($processor as $key):
                    ?>
                    <img class='section_image' src='<?php echo $oa_theme_images.'/48_component_cpu.png'; ?>' alt='' title='' />
                    <p><label for="processor_description"><?php echo __('Description')?>: </label><span id="processor_description" class="form_field"><?php echo print_something($key->description)?></span></p>
                    <p><label for="processor_speed"><?php echo __('Speed')?>: </label><span id="processor_speed" class="form_field"><?php echo print_something($key->speed)?> MHz</span></p>
                    <p><label for="processor_count"><?php echo __('Physical Processors')?>: </label><span id="processor_count" class="form_field"><?php echo print_something($key->physical_count)?></span></p>
                    <p><label for="processor_cores"><?php echo __('Total Processor Cores')?>: </label><span id="processor_cores" class="form_field"><?php echo print_something($key->core_count)?></span></p>
                    <p><label for="processor_logical" style="white-space: nowrap;"><?php echo __('Total Logical Processors')?>: </label><span id="processor_logical" class="form_field"><?php echo print_something($key->logical_count)?></span></p>
                    <p><label for="processor_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="processor_manufacturer" class="form_field"><?php echo print_something($key->manufacturer)?></span></p>
                    <p><label for="processor_architecture"><?php echo __('Architecture')?>: </label><span id="processor_architecture" class="form_field"><?php echo print_something($key->architecture)?></span></p>
                <?php endforeach; ?>
                <?php echo display_custom_field('view_hardware_processor',  $additional_fields_data, $edit); ?>
            </fieldset>
        </form>
    <?php

} ?>
    </div>

    <div id="view_hardware_memory" style="float: left; width: 100%;">
    <?php if (count($memory) > 0) {
    ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="memory_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Memory Details')?></span></legend>
                <div style="min-width: 50px; float: right;">
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_component_cpu.png' alt='' title='' />
                </div>
                <div style="width: 90%; float: left;">
                <table cellspacing="1" class="tablesorter" style="width:100%;">
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
                    <?php foreach ($memory as $key): ?>
                            <tr>
                                <td><?php echo print_something($key->bank)?></td>
                                <td><?php echo print_something($key->type)?></td>
                                <td><?php echo print_something($key->form_factor)?></td>
                                <td><?php echo print_something($key->detail)?></td>
                                <td><?php echo print_something($key->serial)?></td>
                                <td><?php echo number_format(intval($key->size))?> MiB&nbsp;</td>
                                <td><?php echo number_format(intval($key->speed))?> MHz&nbsp;</td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="bios_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Bios Details')?></span></legend>
                <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_gnome-cpu.png' alt='' title='' />
                <?php foreach ($bios as $key): ?>
                    <p><label for="bios_description"><?php echo __('Description')?>: </label><span id="bios_description"><?php echo print_something($key->description); ?></span></p>
                    <p><label for="bios_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="bios_manufacturer"><?php echo print_something($key->manufacturer); ?></span></p>
                    <p><label for="bios_serial"><?php echo __('Serial')?>: </label><span id="bios_serial"><?php echo print_something($key->serial); ?>&nbsp;</span></p>
                    <p><label for="bios_smversion"><?php echo __('SMVersion')?>: </label><span id="bios_smversion"><?php echo print_something($key->smversion); ?></span></p>
                    <p><label for="bios_version"><?php echo __('Version')?>: </label><span id="bios_version"><?php echo print_something($key->version); ?></span></p>
                    <p><label for="bios_asset_tag"><?php echo __('Asset Tag')?>: </label><span id="bios_asset_tag"><?php echo print_something($key->asset_tag); ?></span></p>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="motherboard_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Motherboard Details')?></span></legend>
                <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_gnome-cpu.png' alt='' title='' />
                <?php foreach ($motherboard as $key): ?>
                    <p><label for="motherboard_manufacturer"><?php echo __('Manufacturer')?>: </label><span id="motherboard_manufacturer"><?php echo print_something($key->manufacturer)?></span></p>
                    <p><label for="motherboard_model"><?php echo __('Model')?>: </label><span id="motherboard_model"><?php echo print_something($key->model)?></span></p>
                    <p><label for="motherboard_serial"><?php echo __('Serial')?>: </label><span id="motherboard_serial"><?php echo print_something($key->serial)?></span></p>
                    <p><label for="motherboard_cpu_slots"><?php echo __('CPU Slots')?>: </label><span id="motherboard_cpu_slots"><?php echo print_something($key->processor_slot_count)?></span></p>
                    <p><label for="motherboard_cpu_type"><?php echo __('CPU Type')?>: </label><span id="motherboard_cpu_type"><?php echo print_something($key->processor_type)?></span></p>
                    <p><label for="motherboard_memory_slots"><?php echo __('Memory Slots')?>: </label><span id="motherboard_memory_slots"><?php echo print_something($key->memory_slot_count)?></span></p>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="network_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Network Details')?></span></legend>
                <?php foreach ($network as $key):
                        if (intval($key->speed) < 1000) {
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
                        ?><fieldset id="network_details_<?php echo str_replace('/', '-', $key->id)?>">
                    <legend><span style="font-size: 10pt;">&nbsp;<?php echo print_something($key->description);?> <?php echo __('Details')?></span></legend>
                    <div>
                        <div style="float:left; width:50%;">
                            <p><label for="network_connection_id_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('Connection ID')?>: </label><span id="network_connection_id_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->connection)?></span></p>
                            <p><label for="network_mac_address_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('MAC Address')?>: </label><span id="network_mac_address_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->mac)?></span></p>
                            <p><label for="network_model_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('Model')?>: </label><span id="network_model_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->model)?></span></p>
                            <p><label for="network_manufacturer_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('Manufacturer')?>: </label><span id="network_manufacturer_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->manufacturer)?></span></p>
                            <p><label for="network_speed_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('Speed')?>: </label><span id="network_speed_<?php echo str_replace('/', '-', $key->id)?>"><?php echo $speed; ?></span></p>
                            <p><label for="network_connection_status_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('Status')?>: </label><span id="network_connection_status_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->connection_status)?></span></p>
                            <p><label for="network_adapter_type_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('Adapter Type')?>: </label><span id="network_adapter_type_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->type)?></span></p>
                            <?php if (isset($key->net_slaves) and $key->net_slaves != '') { ?>
                                <p><label for="network_slaves_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('Slaves')?>: </label><span id="network_slaves_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->slaves)?></span></p>
                            <?php } ?>
                        </div>
                        <div style="float:left; width:50%;">
                            <p><label for="network_dhcp_enabled_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('DHCP Enabled')?>: </label><span id="network_dhcp_enabled_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->dhcp_enabled)?></span></p>
                            <p><label for="network_dhcp_server_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('DHCP Server')?>: </label><span id="network_dhcp_server_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->dhcp_server)?></span></p>
                            <p><label for="network_dhcp_lease_obtained_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('DHCP Lease Obtained')?>: </label><span id="network_dhcp_lease_obtained_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->dhcp_lease_obtained)?></span></p>
                            <p><label for="network_dhcp_lease_expires_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('DHCP Lease Expires')?>: </label><span id="network_dhcp_lease_expires_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->dhcp_lease_expires)?></span></p>
                            <p><label for="network_dns_domain_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('DNS Domain')?>: </label><span id="network_dns_domain_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->dns_domain)?></span></p>
                            <p><label for="network_dns_server_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('DNS Server(s)')?>: </label><span id="network_dns_server_<?php echo str_replace('/', '-', $key->id)?>"><span><?php echo print_something(str_replace(",", ", ", $key->dns_server))?></span></span></p>
                            <p><label for="network_dns_domain_reg_enabled_<?php echo str_replace('/', '-', $key->id)?>"><?php echo __('DNS Auto-Register')?>: </label><span id="network_dns_domain_reg_enabled_<?php echo str_replace('/', '-', $key->id)?>"><?php echo print_something($key->dns_domain_reg_enabled)?></span></p>
                        </div>
                    </div>
                <?php
                    if (mb_substr_count(mb_strtoupper($key->model), 'WIRELESS') > 0) {
                        $image = '48_network_wireless';
                    } else {
                        $image = '48_network';
                    }
                    if (file_exists($images_directory."48_".str_replace(" ", "", strtolower($key->manufacturer)).".png")) {
                        $image = "48_".strtolower($key->manufacturer);
                    }
                    ?><div style="float:right; width: 100px; margin-left: -80%;">
                        <img class='section_image' src='<?php echo $oa_theme_images.'/'.$image; ?>.png' alt='' title='' />
                    </div>
                    <table cellspacing="1" class="tablesorter" style="width:100%;">
                        <thead>
                            <tr>
                                <th><?php echo __('Version')?></th>
                                <th><?php echo __('IP Address')?></th>
                                <th><?php echo __('Netmask')?></th>
                                <th><?php echo __('CIDR')?></th>
                                <th><?php echo __('Network')?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $ip_count = 0;
                        foreach ($ip as $ip_address) {
                            if ($ip_address->mac == $key->mac and $ip_address->net_index == $key->net_index) {
                                $ip_count ++;
                                echo "                          <tr>";
                                echo "<td>".print_something($ip_address->version)."</td>";
                                echo "<td><span style=\"display: none;\">".print_something($ip_address->ip)."</span>".print_something(ip_address_from_db($ip_address->ip))."</td>";
                                echo "<td>".print_something($ip_address->netmask)."</td>";
                                echo "<td>".print_something($ip_address->cidr)."</td>";
                                echo "<td>".print_something($ip_address->network)."</td>";
                                echo "                          </tr>\n";
                            }
                        }
                        if ($ip_count == 0) {
                        ?>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
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
            echo display_custom_field('view_hardware_network',  $additional_fields_data, $edit);
            ?></fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_hardware_scsi_controller" style="float: left; width: 100%;">
    <?php if (count($scsi) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="scsi_controller_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('SCSI Controller Details')?></span></legend>
                <div style="min-width: 50px; float: right;">
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_hba.png' alt='' title='' />
                </div>
                <div style="width: 90%; float: left;">
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Type')?></th>
                            <th><?php echo __('Model')?></th>
                            <th><?php echo __('Manufacturer')?></th>
                            <th><?php echo __('Device ID')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($scsi as $key): ?>
                            <tr>
                                <td><?php echo $key->type; ?></td>
                                <td><?php echo $key->model; ?></td>
                                <td><?php echo $key->manufacturer; ?></td>
                                <td><?php echo $key->device; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <?php echo display_custom_field('view_hardware_scsi_controller',  $additional_fields_data, $edit); ?>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_hardware_hard_drive" style="float: left; width: 100%;">
    <?php if (count($hard_drive) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="hard_disk_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Hard Disk Details')?></span></legend>
                <?php foreach ($hard_drive as $key): ?>
                    <fieldset id="hard_disk_details_<?php echo str_replace('/', '-', $key->hard_drive_index)?>">
                    <legend><span style="font-size: 10pt;">&nbsp;<?php echo print_something($key->caption)?> <?php echo __('Details')?></span></legend>
                        <?php
                            if ((mb_substr_count(mb_strtoupper("$key->model"), 'USB') > 0) or (mb_substr_count(mb_strtoupper("$key->caption"), 'USB') > 0)) {
                                $image = '48_gnome-dev-harddisk-usb';
                            } else {
                                $image = '48_gnome-dev-harddisk';
                            }
                            if (file_exists($images_directory.'48_'.strtolower(str_replace(' ', '_', $key->manufacturer)).'.png')) {
                                $image = '48_'.strtolower(str_replace(' ', '_', $key->manufacturer));
                            }
                            if ((mb_substr_count(mb_strtoupper("$key->model"), 'POWERDEVICE BY POWERPATH') > 0) and substr_count($image, '48_gnome-') > 0) {
                                $image = '48_dell';
                            }
                            if ((mb_substr_count(mb_strtoupper("$key->model"), 'HP LOGICAL VOLUME SCSI') > 0) and substr_count($image, '48_gnome-') > 0) {
                                $image = '48_hp';
                            }
                            $key->model_family = htmlentities($key->model_family);
                            $key->status = htmlentities($key->status);
                            $key->serial = htmlentities($key->serial);
                            # Linux device with SmartMonTools installed, but no Model Family result
                            if ($system[0]->os_group == 'Linux' and $key->model_family == '' and $key->status != '') {
                                $key->hard_drive_model_family = '<img src="'.$oa_theme_images.'/16_question.png" alt="Model Family not in SmartMonTools DB" title="Model Family not in SmartMonTools DB" />';
                            }
                            # Linux device without SmartMonTools installed
                            if ($system[0]->os_group == 'Linux' and $key->model_family == '' and $key->status == '') {
                                $key->hard_drive_model_family = '<img src="'.$oa_theme_images.'/16_question.png" alt="Install SmartMonTools for Model Family" title="Install SmartMonTools for Model Family" />';
                            }
                            # Linux device without SmartMonTools installed
                            if ($system[0]->os_group == 'Linux' and $key->status == '') {
                                $key->status = '<img src="'.$oa_theme_images.'/16_question.png" alt="Install SmartMonTools for SMART status" title="Install SmartMonTools for SMART status" />';
                            }
                            # VMware does not return a result for SMART status, regardless of OS
                            if ($key->manufacturer == 'VMware' or strpos($key->model, 'VMware') !== false) {
                                $key->status = '<img src="'.$oa_theme_images.'/16_question.png" alt="SMART status not available under VMware" title="SMART status not available under VMware" />';
                                $key->serial = '<img src="'.$oa_theme_images.'/16_question.png" alt="Serial not available under VMware" title="Serial not available under VMware" />';
                            } ?>
                        <img class='section_image' src='<?php echo $oa_theme_images; ?>/<?php echo $image?>.png' alt='' title='' />
                    <div>
                        <div style="float:left; width:50%;">
                            <p><label for='hd_manufacturer_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Manufacturer')?>: </label><span id='hd_manufacturer_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo print_something($key->manufacturer)?>&nbsp;</span></p>
                            <p><label for='hd_model_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Model')?>: </label><span id='hd_model_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo print_something($key->model)?>&nbsp;</span></p>
                            <?php if ($system[0]->os_group == 'Linux') { ?>
                            <p><label for='hd_model_family_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Model Family')?>: </label><span id='hd_model_family_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo $key->model_family?>&nbsp;</span></p>
                            <?php } ?>
                            <p><label for='hd_serial_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Serial')?>: </label><span id='hd_serial_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo $key->serial?>&nbsp;</span></p>
                            <p><label for='hd_caption_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Caption')?>: </label><span id='hd_caption_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo print_something($key->caption)?>&nbsp;</span></p>
                        </div>
                        <div style="float:left; width:40%; vertical-align:top;">
                            <p><label for='hd_size_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Size')?>: </label><span id='hd_size_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo number_format($key->size); ?> MiB&nbsp;</span></p>
                            <p><label for='hd_status_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('SMART Status')?>: </label><span id='hd_status_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo $key->status?>&nbsp;</span></p>
                            <p><label for='hd_interface_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Interface')?>: </label><span id='hd_interface_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo print_something($key->interface_type)?>&nbsp;</span></p>
                            <?php if ($key->scsi_logical_unit != "") { ?>
                            <p><label for='scsi_id_<?php echo str_replace('/', '-', $key->hard_drive_scsi_logical_unit)?>'><?php echo __('SCSI id')?>: </label><span id='scsi_id_<?php echo str_replace('/', '-', $key->hard_drive_scsi_logical_unit)?>' class="form_field"><?php echo print_something($key->scsi_logical_unit)?>&nbsp;</span></p>
                            <?php } ?>
                            <p><label for='hd_firmware_<?php echo str_replace('/', '-', $key->hard_drive_index)?>'><?php echo __('Firmware')?>: </label><span id='hd_firmware_<?php echo str_replace('/', '-', $key->hard_drive_index)?>' class="form_field"><?php echo print_something($key->firmware)?>&nbsp;</span></p>
                        </div>
                    </div>
                    <table cellspacing='1' class='tablesorter' style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Graph')?></th>
                            <th><?php echo __('Device ID')?></th>
                            <th><?php echo __('Type')?></th>
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
                    <?php foreach ($partition as $key_partition): ?>
                        <?php if ($key_partition->hard_drive_index == $key->hard_drive_index): ?>
                        <?php $partition_count++; ?>
                        <?php if ($key_partition->type == $key_partition->mount_type) {
                            $type = print_something($key_partition->mount_type);
                        } else {
                            $type = print_something($key_partition->type) . ' ' . print_something($key_partition->mount_type);
                        } ?>
                            <tr>
                                <td><a href="<?php echo base_url(); ?>index.php/main/disk_graph/<?php echo intval($system_id)."/".print_something($key_partition->id)?>"><img src='<?php echo $oa_theme_images; ?>/16_graph.png' alt='' title='' /></a></td>
                                <td><?php echo print_something($key_partition->device)?></td>
                                <td><?php echo $type; ?></td>
                                <td><?php echo print_something($key_partition->mount_point)?></td>
                                <td><?php echo print_something($key_partition->name)?></td>
                                <td><?php echo print_something($key_partition->format)?></td>
                                <td><?php echo number_format($key_partition->size)?> MiB&nbsp;</td>
                                <td><?php echo number_format($key_partition->used)?> MiB&nbsp;</td>
                                <td><?php echo number_format($key_partition->free)?> MiB&nbsp;</td>
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
                    <?php echo display_custom_field('view_hardware_hard_drive',  $additional_fields_data, $edit)?>
                    <!-- mounted volumes - not associated with any particular disk -->
                    <?php 
                    $volumes = 0;
                    foreach ($partition as $key_partition) {
                        if ($key_partition->hard_drive_index == '') {
                            $volumes = 1;
                        } else {
                            $volumes = 0;
                        }
                    }
                    if ($volumes == 1) {
                    ?><fieldset id="hard_disk_details_volumes">
                        <legend><span style="font-size: 10pt;">&nbsp;<?php echo __('Mounted Volumes')?></span></legend>
                        <table cellspacing='1' class='tablesorter' style="width:100%;">
                        <thead>
                            <tr>
                                <th><?php echo __('Graph')?></th>
                                <th><?php echo __('Type')?></th>
                                <th><?php echo __('Mount Point')?></th>
                                <th><?php echo __('Name')?></th>
                                <th><?php echo __('Format')?></th>
                                <th><?php echo __('Size')?></th>
                                <th><?php echo __('Used')?></th>
                                <th><?php echo __('Free')?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($partition as $key_partition): ?>
                            <?php if ($key_partition->hard_drive_index == ''): ?>
                                <tr>
                                    <td><a href="<?php echo base_url(); ?>index.php/main/disk_graph/<?php echo $system_id."/".$key_partition->id?>"><img src='<?php echo $oa_theme_images?>/16_graph.png' alt='' title='' /></a></td>
                                    <td><?php echo print_something($key_partition->type) . ' ' . print_something($key_partition->mount_type)?></td>
                                    <td><?php echo print_something($key_partition->mount_point)?></td>
                                    <td><?php echo print_something($key_partition->name)?></td>
                                    <td><?php echo print_something($key_partition->format)?></td>
                                    <td><?php echo number_format($key_partition->size)?> MiB&nbsp;</td>
                                    <td><?php echo number_format($key_partition->used)?> MiB&nbsp;</td>
                                    <td><?php echo number_format($key_partition->free)?> MiB&nbsp;</td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="optical_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Optical Details')?></span></legend>
                <div style="min-width: 50px; float: right;">
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_optical_drive.png' alt='' title='' />
                </div>
                <div style="width: 90%; float: left;">
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Mount Point')?></th>
                            <th><?php echo __('Description')?></th>
                            <th><?php echo __('Model')?></th>
                            <th><?php echo __('Device ID')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($optical as $key): ?>
                            <tr>
                                <td><?php echo print_something($key->mount_point); ?></td>
                                <td><?php echo print_something($key->description); ?></td>
                                <td><?php echo print_something($key->model); ?></td>
                                <td><?php echo print_something($key->device); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <?php echo display_custom_field('view_hardware_optical',  $additional_fields_data, $edit); ?>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_hardware_video" style="float: left; width: 100%;">
    <?php if (count($video) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="video_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Video Details')?></span></legend>
                <div style="min-width: 50px; float: right;">
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_video.png' alt='' title='' />
                </div>
                <div style="width: 90%; float: left;">
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Model')?></th>
                            <th><?php echo __('Memory')?></th>
                            <th><?php echo __('Manufacturer')?></th>
                            <th><?php echo __('Device ID')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($video as $key): ?>
                            <tr>
                                <td><?php echo print_something($key->model); ?></td>
                                <td><?php echo print_something($key->size); ?></td>
                                <td><?php echo print_something($key->manufacturer); ?></td>
                                <td><?php echo print_something($key->device); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <?php echo display_custom_field('view_hardware_video',  $additional_fields_data, $edit); ?>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_hardware_monitor" style="float: left; width: 100%;">
    <?php if (count($monitor) > 0) {
    ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="monitor_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Monitor Details')?></span></legend>
                <div style="min-width: 50px; float: right;">
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_video.png' alt='' title='' />
                </div>
                <div style="width: 90%; float: left;">
                    <table cellspacing='1' class='tablesorter' style="width:100%;">
                        <thead>
                            <tr>
                                <th>Manufacturer</th>
                                <th>Model</th>
                                <th>Manufacture Date</th>
                                <th>Serial</th>
                                <th>Size</th>
                                <th>Aspect Ratio</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($monitor as $key): ?>
                            <tr>
                                <td><?php echo print_something($key->manufacturer); ?></td>
                                <td><?php echo print_something($key->model); ?></td>
                                <td><?php echo print_something($key->manufacture_date); ?></td>
                                <td><?php echo print_something($key->serial); ?></td>
                                <td><?php echo print_something($key->size); ?> <?php echo __('inch')?></td>
                                <td><?php echo print_something($key->aspect_ratio); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php echo display_custom_field('view_hardware_monitor',  $additional_fields_data, $edit); ?>
                </div>
            </fieldset>
        </form>

    <?php } ?>
    </div>

    <div id="view_hardware_sound" style="float: left; width: 100%;">
    <?php if (count($sound) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="sound_details">
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Sound Details')?></span></legend>
                <div style="min-width: 50px; float: right;">
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_component-headphones.png' alt='' title='' />
                </div>
                <div style="width: 90%; float: left;">
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Model')?></th>
                            <th><?php echo __('Manufacturer')?></th>
                            <th><?php echo __('Device ID')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sound as $key): ?>
                            <tr>
                                <td><?php echo $key->model; ?></td>
                                <td><?php echo $key->manufacturer; ?></td>
                                <td><?php echo $key->device; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
                <?php echo display_custom_field('view_hardware_sound',  $additional_fields_data, $edit); ?>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_hardware_printer" style="float: left; width: 100%;">
    <?php if (count($printer) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="printers">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Locally Attached Printers')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Model')?></th>
                            <th><?php echo __('Manufacturer')?></th>
                            <th><?php echo __('Serial')?></th>
                            <th><?php echo __('Shared')?></th>
                            <th><?php echo __('Share Name')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($printer as $key): ?>
                    <tr>
                        <td><a href="<?php echo site_url(); ?>/main/system_display/<?php echo intval($key->system_id); ?>" ><?php echo print_something($key->man_model)?></a></td>
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


<?php
$software_array = array('software', 'update', 'library', 'codec', 'odbc', 'assembly');
foreach ($software_array as $type) {
    show_software($type, $software);
}



function show_software($type, $software) {
    global $oa_theme_images;
    echo "<div id='view_$type' style='float: left; width: 100%;'>\n";
    if (count($software) > 0) {
        echo "<br />\n";
        echo "<br />\n";
        echo "<form action='#' method='post' class='niceforms'>\n";
        echo "  <fieldset id='software_$type' class='niceforms'>\n";
        echo "      <legend><span style='font-size: 12pt;'>&nbsp;" . __('Installed '.ucfirst($type)) . "</span></legend>\n";
        echo "      <table cellspacing='1' class='tablesorter' style=\"width:100%;\">\n";
        echo "      <thead>\n";
        echo "          <tr>\n";
        echo "              <th style='width:470px;' align='left'>" . __('Package Name') . "</th>\n";
        echo "              <th style='width:70px;'  align='center'>" . __('Contact') . "&nbsp;&nbsp;&nbsp;</th>\n";
        echo "              <th style='width:60px;'  align='center'>" . __('Version') . "</th>\n";
        echo "              <th style='width:150px;' align='center'>" . __('Publisher') . "</th>\n";
        echo "              <th style='width:150px;' align='center'>" . __('Date Detected') . "</th>\n";
        echo "              <th style='width:150px;' align='center'>" . __('Installed On') . "</th>\n";
        echo "              <th style='width:150px;' align='center'>" . __('Installed By') . "</th>\n";
        echo "          </tr>\n";
        echo "      </thead>\n";
        echo "      <tbody>\n";
        if ($type == 'software') {
            $type = '';
        }
        if ($type == 'odbc') {
            $type = 'odbc driver';
        }
        $count = 0;
        foreach ($software as $key) {
            if ($key->type == $type) {
                if (mb_strlen($key->version) > 18) {
                    $key->version = mb_substr("$key->version", 0, 15).'...';
                }
                $software_link = '';
                if (($key->url != '') and ($key->url != ' ')) {
                    $software_link = "<a href='" . clean_url($key->url) . "'><img style='border-width:0px;' src='" . $GLOBALS['oa_theme_images'] . "/16_browser.png' alt='' /></a>";
                }
                if (($key->email != '') and ($key->email != ' ')) {
                    $software_link = "<a href='mailto://" . $key->email . "'><img style='border-width:0px;' src='" . $GLOBALS['oa_theme_images'] . "/16_email.png' alt='' /></a>";
                }
                if ($key->installed_on == '0000-00-00 00:00:00') {
                    $key->installed_on = '';
                }
                echo "          <tr>\n";
                #echo "              <td>" . print_something($software_name) . "</td>\n";
                echo "              <td>" . print_something($key->name) . "</td>\n";
                echo "              <td align='center'>" . $software_link . "</td>\n";
                echo "              <td align='center'>" . print_something($key->version) . "</td>\n";
                echo "              <td align='center'>" . print_something($key->publisher) . "</td>\n";
                echo "              <td align='center'>" . print_something($key->first_seen) . "</td>\n";
                echo "              <td align='center'>" . print_something($key->installed_on) . "</td>\n";
                echo "              <td align='center'>" . print_something($key->installed_by) . "</td>\n";
                echo "          </tr>\n";
                $count = 1;
            }
        }
        if ($count != 1) {
            echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
        }
        echo "      </tbody>\n";
        echo "      </table>\n";
        echo "  </fieldset>\n";
        echo "</form>\n";
    }
    echo "</div>\n";
}
?>

    <div id="view_software_services" style="float: left; width: 100%;">
    <?php if (count($service) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="hf_software_services" class='niceforms'>
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Services Details')?></span></legend>
            <table cellspacing="1" class="tablesorter" style="width: 100%;">
                <thead>
                    <tr>
                        <th><?php echo __('Name')?></th>
                        <th><?php echo __('Description')?></th>
                        <th><?php echo __('Start Mode')?></th>
                        <th><?php echo __('User')?></th>
                        <th><?php echo __('State')?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($service as $key): ?>
                    <tr>
                        <td><?php echo clean_url($key->name)?></td>
                        <td><?php echo clean_url($key->description)?></td>
                        <td><?php echo clean_url($key->start_mode)?></td>
                        <td><?php echo clean_url($key->user)?></td>
                        <td><?php echo clean_url($key->state)?></td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="software_listing_keys" class='niceforms'>
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Keys')?></span></legend>
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
                <?php foreach ($software_key as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->string)?></td>
                        <td><?php echo print_something($key->edition)?></td>
                        <td><?php echo print_something($key->rel)?></td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="pagefile" class='niceforms'>
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Pagefiles')?></span></legend>
            <table cellspacing="1" class="tablesorter" style="width: 100%;">
                <thead>
                    <tr>
                        <th align="left" ><?php echo __('File Name')?></th>
                        <th><?php echo __('Initial Size')?></th>
                        <th><?php echo __('Max Size')?></th>
                        <th><?php echo __('Current Size')?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pagefile as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->initial_size)?></td>
                        <td><?php echo print_something($key->max_size)?></td>
                        <td><?php echo print_something($key->size)?></td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="shares">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Shares')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
                    <thead>
                        <tr>
                            <th style='width:120px;'><?php echo __('Name')?></th>
                            <th style="text-align: right; padding: 0 20px 0 0; width:120px;"><?php echo __('Size')?></th>
                            <th><?php echo __('Description')?></th>
                            <th><?php echo __('Path')?></th>                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($share as $key): ?>
                    <?php
                    if ((!$key->size == '') or ($key->size == '0') or (is_null($key->size))) {
                        $size = number_format(intval($key->size)).' Mb';
                    } else {
                        $size = number_format(intval($key->size));
                    }
                    ?>
                        <tr>
                            <td><?php echo clean_url($key->name)?></td>
                            <td style="text-align: right;" ><?php echo $size?></td>
                            <td><?php echo clean_url($key->description)?></td>
                            <td><?php echo clean_url($key->path)?></td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="routes">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Routes')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
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
                    <?php foreach ($route as $key): ?>
                    <tr>
                        <td><span style="display: none;"><?php echo print_something($key->destination)?></span><?php echo ip_address_from_db(print_something($key->destination)); ?></td>
                        <td><span style="display: none;"><?php echo print_something($key->next_hop)?></span><?php echo ip_address_from_db(print_something($key->next_hop)); ?></td>
                        <td><?php echo print_something($key->mask)?></td>
                        <td><?php echo print_something($key->metric)?></td>
                        <td><?php echo print_something($key->protocol)?></td>
                        <td><?php echo print_something($key->type)?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_settings_tasks" style="float: left; width: 100%;">
    <?php if (count($task) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="tasks">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Tasks')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Name')?></th>
                            <th><?php echo __('Last Run')?></th>
                            <th><?php echo __('Next Run')?></th>
                            <th><?php echo __('Last Run Result')?></th>
                            <th><?php echo __('Status')?></th>
                            <th><?php echo __('State')?></th>
                            <th><?php echo __('Creator')?></th>
                            <th><?php echo __('Task')?></th>
                            <th><?php echo __('Run As')?></th>
                            <th><?php echo __('Schedule')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($task as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->name); ?></td>
                        <td><?php echo print_something($key->last_run)?></td>
                        <td><?php echo print_something($key->next_run); ?></td>
                        <td><?php echo print_something($key->last_result)?></td>
                        <td><?php echo print_something($key->status)?></td>
                        <td><?php echo print_something($key->state)?></td>
                        <td><?php echo print_something($key->creator)?></td>
                        <td><?php echo print_something($key->task)?></td>
                        <td><?php echo print_something($key->runas)?></td>
                        <td><?php echo print_something($key->schedule)?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_settings_users" style="float: left; width: 100%;">
    <?php if (count($user) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="users">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Local Users')?></span></legend>
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
                            <th><?php echo __('SID / ID')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($user as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->full_name)?></td>
                        <td><?php echo print_something($key->disabled)?></td>
                        <td><?php echo print_something($key->status)?></td>
                        <td><?php echo print_something($key->type)?></td>
                        <td><?php echo print_something($key->password_expires)?></td>
                        <td><?php echo print_something($key->password_changeable)?></td>
                        <td><?php echo print_something($key->password_required)?></td>
                        <td><?php echo print_something($key->sid)?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_settings_groups" style="float: left; width: 100%;">
    <?php if (count($user_group) > 0) {
    ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="groups">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Groups')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('SID / ID')?></th>
                            <th><?php echo __('Name')?></th>
                            <th><?php echo __('Description')?></th>
                            <th style='width:320px;'><?php echo __('Members')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($user_group as $key): ?>
                    <?php #$group_members = str_replace(", ", " <br />", $key->members); ?>
                    <?php #$group_members = mb_substr($group_members, 0, mb_strlen($group_members)-1); ?>
                    <tr>
                        <td><?php echo print_something($key->sid)?></td>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->description)?></td>
                        <td><?php echo $key->members?></td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="print_queue">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Print Queue')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Manufacturer')?></th>
                            <th><?php echo __('Model')?></th>
                            <th><?php echo __('Description')?></th>
                            <th><?php echo __('Driver')?></th>
                            <th><?php echo __('Type')?></th>
                            <th><?php echo __('Status')?></th>
                            <th><?php echo __('Color')?></th>
                            <th><?php echo __('Duplex')?></th>
                            <th><?php echo __('Capabilities')?></th>
                            <th><?php echo __('Location')?></th>
                            <th><?php echo __('Port Name')?></th>
                            <th><?php echo __('Shared')?></th>
                            <th><?php echo __('Shared Name')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($print_queue as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->manufacturer)?></td>
                        <td><?php echo print_something($key->model)?></td>
                        <td><?php echo print_something($key->description)?></td>
                        <td><?php echo print_something($key->driver)?></td>
                        <td><?php echo print_something($key->type)?></td>
                        <td><?php echo print_something($key->status)?></td>
                        <td><?php echo print_something($key->color)?></td>
                        <td><?php echo print_something($key->duplex)?></td>
                        <td><?php echo print_something($key->capabilities)?></td>
                        <td><?php echo print_something($key->location)?></td>
                        <td><?php echo print_something($key->port_name)?></td>
                        <td><?php echo print_something($key->shared)?></td>
                        <td><?php echo print_something($key->shared_name)?></td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="dns">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('DNS')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Name')?></th>
                            <th><?php echo __('Full Name')?></th>
                            <th><?php echo __('IP Address')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dns as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->fqdn)?></td>
                        <td><span style="display:none;"><?php echo print_something($key->ip)?></span><?php echo print_something(ip_address_from_db($key->ip))?></td>
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
        <form action="#" method="post" class='niceforms'>
            <fieldset id="netstat">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('NetStat')?></span></legend>
                <div style="min-width: 50px; float: right;">
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_network.png' alt='' title='' />
                </div>
                <div style="width: 90%; float: left;">
                <table cellspacing="1" class="tablesorter" style="width:100%;">
                    <thead>
                        <tr>
                            <th><?php echo __('Protocol')?></th>
                            <th><?php echo __('IP Address')?></th>
                            <th><?php echo __('Port')?></th>
                            <th><?php echo __('Program')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($netstat as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->protocol)?></td>
                        <td><?php echo print_something($key->ip)?></td>
                        <td><?php echo print_something($key->port)?></td>
                        <td><?php echo print_something($key->program)?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </fieldset>
        </form>
    <?php } ?>
    </div>


    <div id="view_settings_logs" style="float: left; width: 100%;">
    <?php if (count($log) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="logs">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Logs')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%;">
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
                    <?php foreach ($log as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->file_name)?></td>
                        <td><?php echo print_something($key->file_size)?></td>
                        <td><?php echo print_something($key->max_file_size)?></td>
                        <td><?php echo print_something($key->overwrite)?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <div id="view_settings_variables" style="float: left; width: 100%;">
    <?php if (count($variable) > 0) { ?>
        <br />
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="variables">
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Variables')?></span></legend>
                <table cellspacing="1" class="tablesorter" style="width:100%; table-layout:fixed;">
                    <thead>
                        <tr>
                            <th><?php echo __('Program')?></th>
                            <th><?php echo __('Name')?></th>
                            <th><?php echo __('Value')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($variable as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->program)?></td>
                        <td><?php echo print_something($key->name)?></td>
                        <td style="word-wrap:break-word;"><?php echo print_something($key->value)?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </fieldset>
        </form>
    <?php } ?>
    </div>

    <?php if (count($database) > 0) { ?>
        <div id="view_server_database" style="float: left; width: 100%;">
        <br />
        <form action="#" method="post" class='niceforms'>
            <fieldset id="server_database" class='niceforms'>
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Database Server Details')?></span></legend>
                <?php foreach ($database as $key): ?>
                    <?php if ($key->name == 'SQL Server') { ?>
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_sql_server.png' alt='' title='' />
                    <?php } elseif ($key->name == 'MySQL') { ?>
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_mysql_server.png' alt='' title='' />
                    <?php } elseif ($key->name == 'Postgres') { ?>
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_postgres_server.png' alt='' title='' />
                    <?php } elseif ($key->name == 'Oracle') { ?>
                    <img class='section_image' src='<?php echo $oa_theme_images; ?>/48_partition.png' alt='' title='' />
                    <?php } ?>
                    <p><label for="sw_db_type"><?php echo __('Name')?>: </label><span id="sw_db_type"><?php echo print_something($key->name)?>&nbsp;</span></p>
                    <p><label for="sw_db_version"><?php echo __('Version')?>: </label><span id="sw_db_version"><?php echo print_something($key->version)?>&nbsp;</span></p>
                    <p><label for="sw_db_version"><?php echo __('Version String')?>: </label><span id="sw_db_version"><?php echo print_something($key->full_name)?>&nbsp;</span></p>
                    <p><label for="sw_db_edition"><?php echo __('Edition')?>: </label><span id="sw_db_edition"><?php echo print_something($key->edition)?>&nbsp;</span></p>
                    <p><label for="sw_db_port"><?php echo __('Port')?>: </label><span id="sw_db_port"><?php echo print_something($key->port)?>&nbsp;</span></p>
                <?php endforeach; ?>
            </fieldset>
        <br />
        <fieldset id="server_database_details" class='niceforms'>
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Databases Installed')?></span></legend>
            <?php if (count($database_details) > 0) { ?>
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                <thead>
                    <tr>
                        <th><?php echo __('Instance')?></th>
                        <th><?php echo __('Internal ID')?></th>
                        <th><?php echo __('Name')?></th>
                        <th><?php echo __('Description')?></th>
                        <th><?php echo __('Status')?></th>
                        <th width="80"><?php echo __('Size')?></th>
                        <th><?php echo __('Path')?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($database_details as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->instance)?></td>
                        <td><?php echo print_something($key->id_internal)?></td>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->description)?></td>
                        <td><?php echo print_something($key->status)?></td>
                        <td align="right"><?php echo number_format(intval($key->size))?> MB</td>
                        <td><?php echo print_something($key->path)?></td>
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







    <?php if (count($webserver) > 0) { ?>
        <div id="view_server_web" style="float: left; width: 100%;">
        <p><br /></p>
        <p><br /></p>
        <form action="#" method="post" class='niceforms'>
            <fieldset id="server_web" class='niceforms'>
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Web Server Details')?></span></legend>
                <?php foreach ($webserver as $key): ?>
                    <p><label for="sw_webserver_type"><?php echo __('Type')?>: </label><span id="sw_webserver_type"><?php echo print_something($key->type)?>&nbsp;</span></p>
                    <p><label for="sw_webserver_name"><?php echo __('Name')?>: </label><span id="sw_webserver_name"><?php echo print_something($key->name)?>&nbsp;</span></p>
                    <p><label for="sw_webserver_version"><?php echo __('Version')?>: </label><span id="sw_webserver_version"><?php echo print_something($key->version)?>&nbsp;</span></p>
                    <p><label for="sw_webserver_state"><?php echo __('State')?>: </label><span id="sw_webserver_status"><?php echo print_something($key->status)?>&nbsp;</span></p>
                <?php endforeach; ?>
            </fieldset>
        <p><br /></p>
        <p><br /></p>
            <fieldset id="server_web_details" class='niceforms'>
                <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Websites Installed')?></span></legend>
                <table cellspacing='1' class='tablesorter' style="width:100%;">
                <thead>
                    <tr>
                        <th><?php echo __('Instance')?></th>
                        <th><?php echo __('Internal ID')?></th>
                        <th><?php echo __('Name')?></th>
                        <th><?php echo __('Description')?></th>
                        <th><?php echo __('Status')?></th>
                        <th width="80"><?php echo __('Size')?></th>
                        <th><?php echo __('Path')?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($website_details as $key): ?>
                    <tr>
                        <td><?php echo print_something($key->instance)?></td>
                        <td><?php echo print_something($key->id_internal)?></td>
                        <td><?php echo print_something($key->name)?></td>
                        <td><?php echo print_something($key->description)?></td>
                        <td><?php echo print_something($key->status)?></td>
                        <td align="right"><?php echo number_format(intval($key->size))?> MB</td>
                        <td><?php echo print_something($key->path)?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </fieldset>
        </form>
        </div>
    <?php } ?>

<!-- end of content_column -->
<?php
// echo "<pre>\n";
// print_r($this);
?>