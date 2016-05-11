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
if (isset($error_message)) {
    $error_message = "<font color='red'>&nbsp;".$error_message."</font>";
} else {
    $error_message = "";
}

$url = array();
$url[] = base_url();
if (strpos(base_url(), "http://localhost") === 0) {
    $url[] = str_replace("localhost", php_uname('n'), base_url());
}
$result = @dns_get_record(php_uname('n'));
# TODO - create an better array of names and ip's
if ($result) {
    $dns_lookup = '';
    foreach ($result as $temp) {
        if (isset($temp["ip"])) {
            $url[] = str_replace("localhost", $temp["ip"], base_url());
        }
    }
} else {
    $dns_lookup = "<span style=\"color: red;\">Warning, could not resolve hostname.<br />Make sure an entry exists in DNS if you intend to use the audit script on another system.</span>";
}
unset($temp);
unset($temp_ip);

$url[] = str_replace("localhost", $this->config->item('default_network_address'), base_url());

$file_exist = '';
$filename = dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/other/audit_windows.vbs";
if (!file_exists($filename)) {
    $file_exist = "<span style=\"color: red;\">Please ensure $filename exists - it is not currently present.</span>";
}

echo form_open('admin/add_script_audit_windows')."\n";
?>
<fieldset id="org_details" class='niceforms'>
    <legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Script Options')?></span></legend>
    <img class='section_image' src='<?php echo $oa_theme_images;?>/48_home.png' alt='' title='' />
    <table width="80%" cellpadding = "0" cellspacing="0" style=".label {width:200px;}">
        <tr>
            <td style='width:50%'>
                <p><label for='strcomputer' ><?php echo __('Computer'); ?>: </label><input type='text' id='strcomputer' name='strcomputer' tabindex='1' title=''  value='.'/></p>
                <p><label for='submit_online'><?php echo __('Submit Online'); ?>: </label><input type='checkbox' id='submit_online' name='submit_online' tabindex='2' title='' checked /></p>
                <p><label for='create_file'><?php echo __('Create an XML file'); ?>: </label><input type='checkbox' id='create_file' name='create_file' tabindex='3' title='' /></p>
                <p><label for='url'><?php echo __('Submit to URL'); ?>: </label><select name='url' id='url' tabindex='4' title=''>
                <?php foreach ($url as $id => $value) {
                    echo "<option value='".$value."index.php/system'>".htmlentities($value)."index.php/system</option>";
                } ?>
                </select>
                <p><label for='use_proxy'><?php echo __('Use a Proxy to submit result'); ?>: </label><input type='checkbox' id='use_proxy' name='use_proxy' tabindex='5' title='' /></p>
                <p><label for='struser'><?php echo __('Remote Username'); ?>: </label><input type='text' id='struser' name='struser' tabindex='6' title=''  value=""/></p>
                <p><label for='strpass'><?php echo __('Remote User Password'); ?>: </label><input type='text' id='strpass' name='strpass' tabindex='7' title=''  value=""/></p>
                <p><label for='org_id'><?php echo __('Organisation'); ?>: </label><select id='org_id' name='org_id' tabindex='8' title=''>
                <?php foreach ($org_names as $value) {
                    echo "<option value='".intval($value->id)."'>".htmlentities($value->name)."&nbsp;</option>\n";
                } ?>
                </select>
                </p>
                <p><label for='windows_user_work_1'><?php echo __('Active Directory User Details'); ?> #1: </label><input type='text' id='windows_user_work_1' name='windows_user_work_1' tabindex='9' title=''  value="physicalDeliveryOfficeName"/></p>
                <p><label for='windows_user_work_2'><?php echo __('Active Directory User Details'); ?> #2: </label><input type='text' id='windows_user_work_2' name='windows_user_work_2' tabindex='10' title=''  value="company"/></p>
            </td><td style='width:50%'>
                <p><label for='skip_mount_point'><?php echo __('Do not audit mount points'); ?>: </label><input type='checkbox' id='skip_mount_point' name='skip_mount_point' tabindex='11' title='' /></p>
                <p><label for='skip_printer'><?php echo __('Do not audit attached printers'); ?>: </label><input type='checkbox' id='skip_printer' name='skip_printer' tabindex='12' title='' /></p>
                <p><label for='skip_software'><?php echo __('Do not audit installed software'); ?>: </label><input type='checkbox' id='skip_software' name='skip_software' tabindex='13' title='' /></p>
                <p><label for='skip_dns'><?php echo __('Do not audit DNS information'); ?>: </label><input type='checkbox' id='skip_dns' name='skip_dns' tabindex='14' title='' checked /></p>
                <p><label for='self_delete'><?php echo __('Have the script delete itself after running'); ?>: </label><input type='checkbox' id='self_delete' name='self_delete' tabindex='15' title='' /></p>
                <p><label for='debugging'><?php echo __('Debugging level'); ?>: </label><select id='debugging' name='debugging' tabindex='16' title=''>
                    <option value='0'>0 - <?php echo __('silent'); ?></option>
                    <option value='1' selected>1 - <?php echo __('basic'); ?></option>
                    <option value='2'>2 - <?php echo __('verbose'); ?></option>
                    <option value='3'>3 - <?php echo __('very verbose'); ?></option>
                </select></p>
                <p><label for='ldap'><?php echo __('LDAP - do not normally set this'); ?>: </label><input type='text' id='ldap' name='ldap' tabindex='17' title='' value=''/></p>
                <p><label for='ldap_seen_days'><?php echo __('LDAP - Seen by AD in the last XX days'); ?>: </label><input type='text' id='ldap_seen_days' name='ldap_seen_days' tabindex='18' title='' value='0'/></p>
                <p><label for='ldap_seen_date'><?php echo __('LDAP - Seen by AD since XX date'); ?>: </label><input type='text' id='ldap_seen_date' name='ldap_seen_date' tabindex='19' title='' value='2012-06-30'/></p>
                <p><label for='ping_target'><?php echo __('Ping the target before attempting to audit'); ?>: </label><input type='checkbox' id='ping_target' name='ping_target' tabindex='20' title='' /></p>
                <p><label for='org_id'><?php echo __('NetStat'); ?>: </label><select id='run_netstat' name='run_netstat' tabindex='9' title=''>
                    <option value='n'><?php echo __('no'); ?></option>
                    <option value='y'><?php echo __('yes'); ?></option>
                    <option value='s'><?php echo __('servers only'); ?></option>
                    </select>
                </p>
            </td>
        </tr>
    </table>
    <p><label for='submit'>&nbsp;</label><?php echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit')); ?></p>
    <?php echo $file_exist; ?><br /><br />
    <?php echo $dns_lookup; ?>
    <p><?php echo $this->session->flashdata('message'); ?>&nbsp;</p>
</fieldset>
<?php echo form_close(); ?>
