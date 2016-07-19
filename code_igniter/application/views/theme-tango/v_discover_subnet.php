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
 * 
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

# check if we have nmap installed
$nmap_installed = 'n';
if (php_uname('s') == "Windows NT") {
    # check the obvious Windows install locations
    $test_path = 'c:\Program Files\Nmap\Nmap.exe';
    if ($nmap_installed == 'n' and file_exists($test_path)) {
        $nmap_installed = 'y';
    }
    $test_path = 'c:\Program Files (x86)\Nmap\Nmap.exe';
    if ($nmap_installed == 'n' and file_exists($test_path)) {
        $nmap_installed = 'y';
    }
    unset($test_path);
} elseif (php_uname('s') == "Linux" or php_uname('s') == "Darwin") {
    $command_string = "which nmap 2>/dev/null";
    exec($command_string, $output, $return_var);
    if (isset($output[0]) and strpos($output[0], 'nmap')) {
        $nmap_installed = 'y';
    } else {
        $output[0] = '';
    }
    if ($nmap_installed == 'n') {
        if (file_exists('/usr/local/bin/nmap')) {
            $nmap_installed = 'y';
        }
    }
}

if ($nmap_installed == 'n') {
    echo "<span style=\"color:red; font-size:14pt; \">" . __('Nmap not detected') . "</span> - " . __('please install Nmap before running Discovery') . ".<br />\n";
    if (php_uname('s') == "Windows NT") {
        echo __("Locations checked were") . ": \"c:\Program Files\Nmap\Nmap.exe\" and \"c:\Program Files (x86)\Nmap\Nmap.exe\".<br />\n";
    } elseif (php_uname('s') == "Linux" or php_uname('s') == "Darwin") {
        echo __("Command run was") . ": \"which nmap\" " . __('which resulted in') . " \"".$output[0]."\"<br />\n";
    }
    echo "Please see <a style='color:blue;' target='_blank' href='https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap'>https://community.opmantek.com/display/OA/Open-AudIT+and+Nmap</a> for information about why Open-AudIT requires Nmap and how to install it.<br /><br /><br />";
}

echo form_open('discovery/discover_subnet');

switch ($type) {
    case '':
        $title = 'Discover the devices on your network';
        $icon = $oa_theme_images."/48_network_wireless.png";
        $scan_title = "Subnet";
        $submit_text = "Discover";
        break;

    case 'windows':
        $title = 'Audit a Windows computer';
        $icon = $oa_theme_images."/48_windows.png";
        $scan_title = "Computer IP";
        $submit_text = "Audit";
        break;

    case 'linux':
        $title = 'Audit a Linux computer';
        $icon = $oa_theme_images."/48_linux.png";
        $scan_title = "Computer IP";
        $submit_text = "Audit";
        break;

    case 'snmp':
        $title = 'Scan a device using SNMP';
        $icon = $oa_theme_images."/48_network.png";
        $scan_title = "Device IP";
        $submit_text = "Scan";
        break;

    case 'device':
        $title = 'Discover a device';
        $icon = $oa_theme_images."/48_network.png";
        $scan_title = "Device IP";
        $submit_text = "Discover";
        break;

    default:
        $title = 'Discover the devices on your network';
        $icon = $oa_theme_images."/48_network_wireless.png";
        $scan_title = "Subnet";
        $submit_text = "Discover";
        break;
}
if (!isset($ip_address)) {
    $ip_address = '';
}
if (!isset($system_id)) {
    $system_id = '';
}
if (!isset($type)) {
    $type = '';
}
if (!isset($org_id)) {
    $org_id = '';
}
if (!isset($location_id)) {
    $location_id = '';
}

?>

<fieldset id="subnet_details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __($title)?></span></legend>
	<img class='section_image' src='<?php echo $icon;?>' alt='' title='' />
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td style='width:30%' style="vertical-align: top;">
				<p><label for='subnet_range'><?php echo __($scan_title); ?>: </label> <input type='text' id='subnet_range' name='subnet_range' tabindex='1' title='Subnet Range' value='<?php echo $ip_address; ?>' /></p>

				<p><label for='network_address'><?php echo __("Local Network Address"); ?>: </label> <input type='text' id='network_address' name='network_address' tabindex='2' title='Local Network Address' value='<?php echo $this->config->item('default_network_address'); ?>' />*</p>

                <p><label for='org'><?php echo __('Org'); ?>: </label>
                    <select id='org' name='org' width='20'>
                        <option value=''></option>
                <?php
                    foreach ($orgs as $org) {
                        if ($org_id == $org->id) {
                            $selected = ' selected';
                        } else {
                            $selected = '';
                        }
                        echo "<option value='" . $org->id . "'" . $selected . ">" . $org->name . "</option>\n";
                    }
                ?>
                    </select>
                </p>

                <p><label for='location'><?php echo __('Location'); ?>: </label>
                    <select id='location' name='location' width='20'>
                        <option value=''></option>
                <?php
                    foreach ($locations as $location) {
                        if ($location_id == $location->id) {
                            $selected = ' selected';
                        } else {
                            $selected = '';
                        }
                        echo "<option value='" . $location->id . "'" . $selected . ">" . $location->name . "</option>\n";
                    }
                ?>
                    </select>
                </p>
                <?php
                    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
                        $checked = 'checked';
                    } else {
                        $checked = '';
                    }
                ?>
                <p><label for='use_https'><?php echo __("Use HTTPS"); ?>: </label> <input type='checkbox' id='use_https' name='use_https' tabindex='9' title='Use HTTPS' <?php echo $checked; ?> /></p>
                <p><label for='debug'><?php echo __("Debug"); ?>: </label> <input type='checkbox' id='debug' name='debug' tabindex='9' title='Debug' />**</p>
				<input type="hidden" id="type" name="type" value="<?php echo $type; ?>" />
				<input type="hidden" id="system_id" name="system_id" value="<?php echo $system_id; ?>" />

                <?php if ($nmap_installed == 'n') { ?>
                <p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit', 'disabled' => ''), 'Submit'); ?></p>
                <?php } else { ?>
                <p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), 'Submit'); ?></p>
                <?php } ?>


                * The ip address or resolvable hostname used by external devices to talk to Open-AudIT (This should be the real IP Address of this Open-AudIT server).<br />


                <p>** Do not set "debug" in normal use. Doing so may take a while for the page to return - please be patient.</p>

                <br /><br /><br /><br /><br />
			</td>
			<td style='width:70%' style="vertical-align: text-top;">
                <?php if ($warning > '') {
                    echo "<h3 style='color:red;'>" . __('Warning') . "</h3>" . $warning . "<br />\n";
                } ?>

                <h3><?php echo __('Credentials'); ?></h3><?php echo __('As of Open-AudIT 1.12.8, default credentials are no longer stored in the configuration of Open-AudIT. They now have their own table and can have multiple sets supplied for the same type. Because of this, they have been removed from the Discovery form (and the Configuration editor). If you need specific credentials, please add them at menu -> Admin -> Credentials -> Add Credential Set. You can view the existing set\'s at menu -> Admin -> Credentials -> View Credentials. If this is an upgraded installation, your old default credentials have been migrated. When Discovery is run, all credential sets will be tested upon a device until one is found to be working.'); ?><br />

				<?php if ($type != '') { ?>
				<h3><?php echo __('Note'); ?> - <?php echo __('Discovery'); ?></h3><?php echo __('This will run an nmap scan against the target device, followed by attempting to retrieve details via SNMP (if SNMP is detected), then finally running the relevant audit script (if WMI/SMB or SSH is detected). This will effectively "audit" your target device, assuming you provide the correct credentials.'); ?>

				<?php } else { ?>
				<h3><?php echo __('Note'); ?> - <?php echo __('Discovery'); ?></h3><?php echo __('This will run an nmap scan against each ip address in the the target subnet, followed by attempting to retrieve details via SNMP (if SNMP is detected), then finally running the relevant audit script (if WMI/SMB or SSH is detected). This will effectively "audit" your target subnet, assuming you provide the correct credentials.'); ?>
				<?php } ?>

				<?php if ($type != 'windows') { ?>
				<h3><?php echo __('Note'); ?> - <?php echo __('sudo without TTY'); ?></h3><?php echo __('Some Linux systems cannot use "sudo" without a TTY. The discovery function relies on an SSH command without a TTY. To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will NOT contain the amount of data as would otherwise.'); ?><br />
				<?php } ?>

                <h3><?php echo __('Organisation Assignment'); ?></h3><?php echo __('If an Org is selected, any devices found in this discovery will be assigned to this Organisation. If no organisation is selected, existing devices found will not be assigned to any organisation but new devices created will be assigned to the Default Organisation.'); ?><br />

                <h3><?php echo __('Location Assignment'); ?></h3><?php echo __('If an Location is selected, any devices found in this discovery will be assigned to this Location. If no location is selected, existing devices found will not be assigned to any location but new devices created will be assigned to the Default Location.'); ?><br />

                <h3><?php echo __('Use HTTPS'); ?></h3><?php echo __('If Use HTTPS is checked, the audit scripts will use the HTTPS address of the server to submit their results.'); ?><br />

                <?php if ($type == '') { ?>
                <h3><?php echo __('Subnet Examples'); ?></h3>
                    <?php echo __('The format of the subnet is specified in standard Nmap syntax. The following are valid examples:'); ?><br />
                    <?php echo __('192.168.0.1 (a single address)'); ?><br />
                    <?php echo __('192.168.1.2/32 (a single address with mask)'); ?><br />
                    <?php echo __('192.168.3.0/24 (a 24 bit mask - 192.168.3.0 to 192.168.3.255)'); ?><br />
                    <?php echo __('198.168.0-255.1-127 (a range of ip addresses)'); ?><br />   
                <?php } ?>           
			</td>
		</tr>
	</table>
</fieldset>
<br />
<br />
</p>
<br />

</form>
