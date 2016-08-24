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
$item = $this->response->data[0];
?>
<form>
<fieldset id="details" class='niceforms'>
	<legend><span style='font-size: 12pt;'>&nbsp;<?php echo __('Create Credential Set')?></span></legend>
	<img class='section_image' src='<?php echo $oa_theme_images;?>/48_credentials.png' alt='' title='' />
		<p><label for='data[id]'><?php echo __("ID")?>: </label><input type='text' id='data[id]' name='data[id]' tabindex='1' title='ID' value='<?php echo htmlentities($item->id); ?>' disabled /></p>
		
        <p><label for='data[name]'><?php echo __("Name")?>: </label><input type='text' id='data[name]' name='data[name]' tabindex='2' title='Name' value='<?php echo htmlentities($item->name); ?>'  disabled /></p>
		
        <p><label for='data[description]'><?php echo __("Description")?>: </label><input type='text' id='data[description]' name='data[description]' tabindex='3' title='Description'  value='<?php echo htmlentities($item->description); ?>' disabled /></p>
        
        <p><label for='data[type]'><?php echo __("Type")?>: </label>
            <select class="data_type" id='data[type]' name='data[type]' tabindex='4' title='Type' disabled>
            <option value=""></option>
            <option value='snmp' <?php if ($item->type == 'snmp') { echo 'selected '; } ?>>SNMP (v1 / v2)</option>
            <option value='snmp_v3' <?php if ($item->type == 'snmp_v3') { echo 'selected '; } ?>>SNMP v3</option>
            <option value='ssh' <?php if ($item->type == 'ssh') { echo 'selected '; } ?>>SSH</option>
            <option value='windows' <?php if ($item->type == 'windows') { echo 'selected '; } ?>>Windows</option>
            </select>
        </p>
		
        <p><label for='data[edited_by]'><?php echo __("Edited By")?>: </label><input type='text' id='data[edited_by]' name='data[edited_by]' tabindex='5' title='Edited By' value='<?php echo htmlentities($item->edited_by); ?>' disabled /></p>
		
        <p><label for='data[edited_date]'><?php echo __("Edited Date")?>: </label><input type='text' id='data[edited_date]' name='data[edited_date]' tabindex='6' title='Edited Date' value='<?php echo htmlentities($item->edited_date); ?>' disabled /></p>
        <p id="options">
        <?php
            if ($item->type == 'snmp') {
                echo "<p><label for='data[credentials][community]'>" . __("Community") . ": </label><input type='text' id='data[credentials][community]' name='data[credentials][community]' tabindex='7' title='Community' value='" . htmlentities($item->credentials->community) . "' disabled /></p>";
            
            } else if ($item->type == 'snmp_v3') { ?>
                <p><label for='data[credentials][security_name]'>
                <?php echo __("Security Name")?>: </label><input type='text' id='data[credentials][security_name]' name='data[credentials][security_name]' tabindex='7' title='Security Name' value='<?php echo htmlentities($item->credentials->security_name); ?>' disabled />
                The security name, usually some kind of username.
                </p>
                <p>
                <label for='data[credentials][security_level]'><?php echo __("Security level")?>: </label>
                <select id='data[credentials][security_level]' name='data[credentials][security_level]' tabindex='10' title='Security level' disabled>
                    <option value='noAuthNoPriv' <?php if ($item->credentials->security_level == 'noAuthNoPriv') { echo "selected "; } ?>>noAuthNoPriv</option>
                    <option value='authNoPriv' <?php if ($item->credentials->security_level == 'authNoPriv') { echo "selected "; } ?>>authNoPriv</option>
                    <option value='authPriv' <?php if ($item->credentials->security_level == 'authPriv') { echo "selected "; } ?>>authPriv</option>
                </select> The security level - noAuthNoPriv (without authentication and without privacy), authNoPriv (with authentication but without privacy), and authPriv (with authentication and with privacy).
                </p>
                <p>
                <label for='data[credentials][authentication_protocol]'><?php echo __("Authentication Protocol")?>: </label>
                <select id='data[credentials][authentication_protocol]' name='data[credentials][authentication_protocol]' tabindex='10' title='Authentication Type' disabled>
                    <option value=''></option>
                    <option value='MD5' <?php if ($item->credentials->authentication_protocol == 'MD5') { echo "selected "; } ?>>MD5</option>
                    <option value='SHA' <?php if ($item->credentials->authentication_protocol == 'SHA') { echo "selected "; } ?>>SHA1</option>
                </select> The authentication protocol (MD5 or SHA).
                </p>
                <p>
                <label for='data[credentials][authentication_passphrase]'><?php echo __("Authentication Passphrase")?>: </label>
                <input type='password' id='data[credentials][authentication_passphrase]' name='data[credentials][authentication_passphrase]' tabindex='8' title='Password' value='<?php echo htmlentities($item->credentials->authentication_passphrase); ?>' disabled />
                The authentication pass phrase.
                </p>
                <p>
                <label for='data[credentials][privacy_protocol]'><?php echo __("Privacy Protocol")?>: </label>
                <select id='data[credentials][privacy_protocol]' name='data[credentials][privacy_type]' tabindex='10' title='Privacy Protocol' disabled>
                    <option value='AES' <?php if ($item->credentials->privacy_type == 'AES') { echo "selected "; } ?>>AES</option>
                    <option value='DES' <?php if ($item->credentials->privacy_type == 'DES') { echo "selected "; } ?>>DES</option>
                </select>
                The privacy protocol (DES or AES).
                </p>
                <p>
                <label for='data[credentials][privacy_passphrase]'><?php echo __("Privacy Passphrase")?>: </label>
                <input type='password' id='data[credentials][privacy_passphrase]' name='data[credentials][privacy_passphrase]' tabindex='9' title='Privacy Passphrase' value='<?php echo htmlentities($item->credentials->privacy_passphrase); ?>' disabled />
                </p>
            <?php             
            } else if ($item->type == 'ssh') {
                echo "<p><label for='data[credentials][username]'>" . __("SSH Username") . ": </label><input type='text' id='data[credentials][username]' name='data[credentials][username]' tabindex='7' title='Username' value='" . htmlentities($item->credentials->username) . "' disabled /></p><p><label for='data[credentials][password]'>" . __("SSH Password") . ": </label><input type='password' id='data[credentials][password]' name='data[credentials][password]' tabindex='8' title='Password' value='" . htmlentities($item->credentials->password) . "' disabled /></p>";
            
            } else if ($item->type == 'windows') {
                echo "<p><label for='data[credentials][username]'>" . __("Windows Username") . ": </label><input type='text' id='data[credentials][username]' name='data[credentials][username]' tabindex='7' title='Username' value='" . htmlentities($item->credentials->username) . "' disabled /></p><p><label for='data[credentials][password]'>" . __("Windows Password") . ": </label><input type='password' id='data[credentials][password]' name='data[credentials][password]' tabindex='8' title='Password' value='" . htmlentities($item->credentials->password) . "' disabled />\
        </p>";
            }
        ?>
        </p>
</fieldset>
<?php echo form_close(); ?>
</div>
</div>
<style>
input[type="text"]:disabled {
    background: #dddddd;
}
</style>

