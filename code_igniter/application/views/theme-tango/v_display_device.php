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

# How this file works.
# 1 - We include display_inc_common - this contains PHP functions and some common
#     procedural code used by all devices (warranty links, etc).
# 2 - This file then creates the Summary menu that sits on the left.
# 3 - We then include display_inc_menu to add the extra sections if we are displaying a computer.
# 4 - This file creates the Device Summary section.
#     This is an array of attribute names and their display type
#     text == an editable text field
#     select == a select box
#     '' == a non-editable field which is only displayed if populated
#     icon == the icon chooser window
#     ---- == the separator to split the list into two columns within the section.
# 5 - Include display_inc_summary - this is the remaining contant blocks for the Summary menu items.
# 6 - Include display_inc_blocks if we have a computer. This is the hardware, software, settings and servers sections.
# 7 - Incldue display_inc_javascript for the common javascript for this page.
?>
<!-- v_display_device -->
<?php include "v_display_inc_common.php";

?>
<!-- below is the menu div that sits on the left -->
<div style="float: left; width: 180px; margin-left: 0%; vertical-align: top; position: fixed;" >
    <form action="#" method="post" class='niceforms'>
        <fieldset id="system_menu" class='niceforms'>
            <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Menu')?></span></legend>
            <div id="menu1" class="menuTree">
                <ul>
                    <li class="parent expanded"><a href="#">&nbsp;&nbsp;&nbsp;<?php echo __('Summary'); ?></a>
                        <ul style="display: block;">
                            <?php if (isset($decoded_access_details) and ($access_level >= 7)) { ?><li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_credentials.png" /><a href="#" id="toggle_summary_credentials"><?php echo __('Credentials'); ?></a></li><?php } ?>
                            <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_right.png" /><a href="#" id="toggle_summary_purchase">Purchase</a></li>
                            <?php if ($system[0]->man_ip_address != '000.000.000.000' and $system[0]->man_ip_address != '0.0.0.0' and $system[0]->man_ip_address > '') { ?><li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_devices.png" /><a href="#" id="toggle_summary_network"><?php echo __('Network'); ?></a></li><?php } ?>
                            <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_home.png" /><a href="#" id="toggle_summary_location"><?php echo __('Location / Contact'); ?></a></li>
                            <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_csv.png" /><a href="#" id="toggle_summary_custom"><?php echo __('Custom'); ?></a></li>
                            <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_word.png" /><a href="#" id="toggle_summary_attachment"><?php echo __('Attachments'); ?></a></li>
                            <?php if (count($audit_log) > 0) { ?><li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_find.png" /><a href="#" id="toggle_summary_audit_log"><?php echo __('Audit Log'); ?></a></li><?php } ?>
                            <?php if (count($change_log) > 0) { ?><li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_warning.png" /><a href="#" id="toggle_summary_change_log"><?php echo __('Change Log'); ?></a></li><?php } ?>
                            <?php if (count($edit_log) > 0) { ?><li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_edit.png" /><a href="#" id="toggle_summary_edit_log"><?php echo __('Edit Log'); ?></a></li><?php } ?>
                            <?php if ($this->config->config['nmis'] == 'y') { ?><li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_nmis.png" /><a href="#" id="toggle_summary_nmis"><?php echo __('NMIS Details'); ?></a></li><?php } ?>
                            <?php if (count($network) > 0 and ($system[0]->man_type != 'computer')) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_network.png" /><a href="#" id="toggle_summary_network_interfaces"><?php echo __('Network Interfaces'); ?></a></li> <?php } ?>
                            <?php if (strpos($system[0]->man_type, 'phone') !== false) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_cell_phone.png" /><a href="#" id="toggle_summary_phone"><?php echo __('Phone Details'); ?></a></li> <?php } ?>
                            <?php if (count($windows) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_windows.png" /><a href="#" id="toggle_summary_windows"><?php echo __('Windows Details'); ?></a></li><?php } ?>
                            <?php if (count($vm) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_vmware.png" /><a href="#" id="toggle_summary_vms"><?php echo __('VM Guest Details'); ?></a></li><?php } ?>
                            <?php if (count($module) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_memory.png" /><a href="#" id="toggle_summary_module"><?php echo __('Entities'); ?></a></li> <?php } ?>
                            <?php if (count($dns) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_wireless_router.png" /><a href="#" id="toggle_summary_dns"><?php echo __('DNS'); ?></a></li> <?php } ?>
                            <?php if (count($san) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_san.png" /><a href="#" id="toggle_summary_san"><?php echo __('SAN'); ?></a></li> <?php } ?>
                            <?php if (count($san) > 0) { ?> <li class="child"><img alt="" src="<?php echo $oa_theme_images; ?>/16_harddisk.png" /><a href="#" id="toggle_summary_san_disk"><?php echo __('SAN Disks'); ?></a></li> <?php } ?>
                        </ul>
                    </li>
                    <?php
                    # the computer device type specific menu items are in the below file
                    #if ($system[0]->man_type == 'computer' and $system[0]->man_class != 'hypervisor') {
                    if ($system[0]->man_type == 'computer') {
                        include "v_display_inc_menu.php";
                    }
                    ?>
                </ul>
            </div>
        </fieldset>
    </form>
</div>


<div id="content_column" style="margin-left: 200px;">
<?php
# special case formatting
$system[0]->man_ip_address = ip_address_from_db($system[0]->man_ip_address);
$system[0]->uptime = strTime($system[0]->uptime);

# create the individual summary sections
$summary_attributes = array('hostname' => 'text' ,
                            'sysName' => 'text',
                            'man_ip_address' => 'text',
                            'domain' => 'text',
                            'fqdn' => 'text',
                            'man_type' => 'select',
                            'man_criticality' => 'select',
                            'man_environment' => 'select',
                            'man_status' => 'select',
                            'man_description' => 'text',
                            '----' => '----',
                            'man_manufacturer' => 'text',
                            'man_model' => 'text',
                            'man_serial' => 'text',
                            'uptime' => '',
                            'location_name' => '',
                            'last_seen' => '',
                            'last_seen_by' => '',
                            'icon' => 'icon',
                            'snmp_oid' => '',
                            'warranty_link' => '',
                            'downloads_link' => '',
                            'dell_express_code_link' => '',
                            'man_cluster_name' => 'text',
                            'man_oae_manage' => 'select', );

# specific entries (usually based on man_type).

# computers
if ($system[0]->man_type == 'computer') {
    $summary_attributes = array_slice($summary_attributes, 0, 3) +
        array('man_class' => 'select') +
        array('man_function' => 'text') +
        array_slice($summary_attributes, 3, count($summary_attributes) - 1, true);

    $summary_attributes = array_slice($summary_attributes, 0, 8) +
        array('man_os_group' => 'text') +
        array('man_os_family' => 'text') +
        array('man_os_name' => 'text') +
        array_slice($summary_attributes, 8, count($summary_attributes) - 1, true);

    $summary_attributes = array_slice($summary_attributes, 0, 15) +
        array('man_form_factor' => 'text') +
        array_slice($summary_attributes, 15, count($summary_attributes) - 1, true);

    if ($system[0]->form_factor == 'Virtual') {
        $summary_attributes = array_slice($summary_attributes, 0, 16) +
            array('man_vm_group' => 'text') +
            array('man_vm_server_name' => '') +
            array_slice($summary_attributes, 16, count($summary_attributes) - 1, true);
    }

    # TODO - need to better implement this, vm_server is linked by system id, but we should allow it to be manual as well
    # vm_system_id is only settable in the edit multiple devices form.
    if (isset($system[0]->man_vm_server_name) and $system[0]->man_vm_server_name != '' and
        isset($system[0]->man_vm_system_id) and $system[0]->man_vm_system_id != '') {
        $system[0]->man_vm_server_name = '<a style="text-decoration: underline; color:blue;" href="'.base_url().'index.php/main/system_display/'.intval($system[0]->man_vm_system_id).'">'.htmlentities($system[0]->man_vm_server_name).'</a>';
    }
} else {
    $summary_attributes = array_slice($summary_attributes, 0, 6) +
        array('man_os_group' => '') +
        array('man_os_family' => '') +
        array('man_os_name' => '') +
        array_slice($summary_attributes, 6, count($summary_attributes) - 1, true);
}

# printers
if (strpos($system[0]->man_type, 'printer') !== false) {
    $summary_attributes = array_slice($summary_attributes, 0, 9) +
            array('printer_duplex' => '') +
            array('printer_color' => '') +
            array_slice($summary_attributes, 9, count($summary_attributes) - 1, true);
}
?>



<!-- below are the main content blocks -->

<div id="summary" style="float: left; width: 100%;" >
<form action="#" method="post" class='niceforms'>
    <fieldset id="system_details" class='niceforms'>
        <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Device Details')?></span></legend>
        <div style="float:right; width: 120px; text-align:center">
            <img width="100" title="" alt="" src="<?php echo base_url()?>device_images/<?php echo htmlentities($system[0]->man_picture); ?>" style="border: 1px solid rgb(219, 217, 197);"/>
            <?php if (($access_level > 7) and ($system[0]->man_ip_address != '000.000.000.000') and ($system[0]->man_ip_address != '0.0.0.0') and ($system[0]->man_ip_address > '')) { ?>
                <input type="button" onclick="window.location.href='<?php echo base_url(); ?>index.php/discovery/discover_subnet/device/<?php echo intval($system_id); ?>'" value='Discover Device' title='Discover Device' name='Discover Device' alt='Discover Device' style='width:24' />
            <?php } ?>
            <?php if (($access_level > 7) and (extension_loaded('snmp')) and ($system[0]->man_ip_address != '000.000.000.000') and ($system[0]->man_ip_address != '0.0.0.0') and ($system[0]->man_ip_address > '')) { ?>
                <input type="button" onclick="window.open('<?php echo base_url(); ?>index.php/admin_system/system_snmp/<?php echo intval($system_id); ?>', 'SNMP Scan', 'height=300,left=100,location=no,menubar=no,resizable=no,scrollbars=no,status=no,titlebar=no,toolbar=no,top=100,width=400');" value='SNMP Scan' title='SNMP Scan' name='SNMP Scan' alt='SNMP Scan' style='width:24' />
            <?php } ?>
            <?php if ($system[0]->snmp_oid != '') { ?>
                <?php $email_body = "The following attributes have been incorrectly detected: %0A&lt;PLEASE INSERT THE CORRECT DETAILS BELOW&gt;%0AType: %0AManufacturer: %0AsysDescr: %0AModel: %0APrinter Duplex: %0APrinter Color: %0A%0AThe following attributes were automatically detected:%0ASNMP OID: ".htmlentities($system[0]->snmp_oid)."%0AType: ".htmlentities($system[0]->man_type)."%0AManufacturer: ".htmlentities($system[0]->manufacturer)."%0ASysDescr: ".htmlentities($system[0]->sysDescr)."%0AModel: ".htmlentities($system[0]->model)."%0APrinter Duplex: ".htmlentities($system[0]->printer_duplex)."%0APrinter Color: ".htmlentities($system[0]->printer_color); ?>
                <br /><br /><br /><br /><a href="mailto:open-audit@opmantek.com?subject=Device Attributes Correction for Open-AudIT&body=<?php echo $email_body; ?>" ><img src="<?php echo base_url(); ?>theme-tango/tango-images/16_question.png" alt="If the device details are incorrect and this device has been scanned via SNMP, please email which details and the following attributes to open-audit@opmantek.com - manufacturer, model, type, snmp oid and if possible an snmp walk. We can then insert the code to account for this and everyone will benefit." title="If the device details are incorrect and this device has been scanned via SNMP, please email which details and the following attributes to open-audit@opmantek.com - manufacturer, model, type, snmp oid and if possible an snmp walk. We can then insert the code to account for this and everyone will benefit. CLICK THE QUESTION ICON to create an email." /></a>
            <?php } ?>
        </div>

        <div style="float: left; width:75%; margin-right: 120px;">
            <div style="float:left; width:50%;">
            <?php
            foreach ($summary_attributes as $key => $value) {
                if ($key == '----') {
                    echo "</div>\n<div style=\"float:right; width:50%;\">\n";
                }
                $text = str_replace('man_', '', $key);
                $text = str_replace('_', ' ', $text);
                $text = ucwords($text);
                if ($text == 'Ip Address') {
                    $text = __('IP Address');
                }
                if ($text == 'Snmp Oid') {
                    $text = __('SNMP OID');
                }
                if ($text == 'Fqdn') {
                    $text = __('FQDN');
                }
                if ($text == 'Vm Group') {
                    $text = __('VM Group');
                }
                if ($text == 'Vm Server Name') {
                    $text = __('VM Server Name');
                }
                if ($text == 'Oae Manage') {
                    $text = __('Manage in Open-AudIT Enterprise');
                }
                if (strpos($text, 'Os ') !== false) {
                    $text = str_replace('Os ', 'OS ', $text);
                }

                if ($value == '' and isset($system[0]->$key) and $system[0]->$key > '') {
                    echo "<p><label for='$key'>".__($text).": </label><span id='$key'>".$system[0]->$key."</span></p>\n";
                }

                if ($value == 'text') {
                    echo "<p><label for='$key'>".__($text).": </label><span id='$key' $edit>".print_something($system[0]->$key)."</span>$edit_icon</p>\n";
                }

                if ($value == 'select') {
                    echo "<p><label for='".$key."_select'>".__($text).": </label>\n";
                    if ($access_level > 7) {
                        echo "<span id='".$key."_select' style='color:blue;'><span onclick='display_$key();'>".print_something($system[0]->$key)."</span></span>$edit_icon</p>\n";
                    } else {
                        echo "<span id='".$key."_select'>".print_something($system[0]->$key)."</span></p>\n";
                    }
                }

                if ((string)$value == 'icon') {
                    $icon = htmlentities($system[0]->icon);
                    echo "<p><label for='icon'>" . __('Icon') . ": </label><span id='icon'><img src='" . base_url() . "theme-tango/tango-images/16_" . $icon . ".png' alt='' /></span></p>";
                }
            }
            echo "</div>\n";
            ?>
        </div>
        <?php echo display_custom_field('system_details', $additional_fields_data, $edit); ?>
    </fieldset>
</form>
</div>
<!-- end of div Summary -->

<?php
# include the common blocks of credentials, purchase, location / contact, custom, audits, audit log, alert log, nmis, VMs, modules
include "v_display_inc_summary.php";

# include the computer specific display blocks
if ($system[0]->man_type == 'computer') {
    include "v_display_inc_blocks.php";
}
?>
</div>
<!-- end of content_column -->

<?php include "v_display_inc_javascript.php"; ?>
