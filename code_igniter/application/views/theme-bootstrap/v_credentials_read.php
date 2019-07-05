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
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   3.1.2
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo htmlspecialchars( $this->response->links->self , REPLACE_FLAGS, CHARSET); ?>">
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="id" class="col-sm-3 control-label"><?php echo __('ID'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo intval($item->attributes->id); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="org_id" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="org_id" name="org_id" disabled>
                                <?php
                                foreach ($this->response->included as $org) {
                                    if ($org->type == 'orgs') { ?>
                                        <option value="<?php echo intval($org->id); ?>"<?php if ($item->attributes->org_id == $org->id) { echo " selected"; } ?>><?php echo htmlspecialchars($org->attributes->name, REPLACE_FLAGS, CHARSET); ?></option>
                                <?php
                                    }
                                } ?>
                                </select>
                                <?php if (!empty($edit)) { ?>
                                <span class="input-group-btn">
                                    <button id="edit_org_id" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="org_id"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                                </span>
                                <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label"><?php echo __('Description'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="description" name="description" value="<?php echo htmlspecialchars($item->attributes->description, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="type" class="col-sm-3 control-label"><?php echo __('Type'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="type" name="type" value="<?php echo htmlspecialchars($item->attributes->type, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_by" class="col-sm-3 control-label"><?php echo __('Edited By'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_by" name="edited_by" value="<?php echo htmlspecialchars($item->attributes->edited_by, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edited_date" class="col-sm-3 control-label"><?php echo __('Edited Date'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="edited_date" name="edited_date" value="<?php echo htmlspecialchars($item->attributes->edited_date, REPLACE_FLAGS, CHARSET); ?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">

                    <?php if ($item->attributes->type == 'ssh' or $item->attributes->type == 'ssh_key' or $item->attributes->type == 'windows') { ?>
                    <div class="form-group">
                        <label for="credentials.username" class="col-sm-3 control-label"><?php echo __('Username'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="credentials.username" name="credentials.username" value="<?php echo @htmlspecialchars($item->attributes->credentials->username, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.username" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.username"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'ssh' or $item->attributes->type == 'windows') { ?>
                    <div class="form-group">
                        <label for="credentials.password" class="col-sm-3 control-label"><?php echo __('Password'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="credentials.password" name="credentials.password" value="<?php echo @htmlspecialchars($item->attributes->credentials->password, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.password" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.password"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'ssh_key') { ?>
                    <div class="form-group">
                        <label for="credentials.password" class="col-sm-3 control-label"><?php echo __('Password (optional)'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="credentials.password" name="credentials.password" value="<?php echo @htmlspecialchars($item->attributes->credentials->password, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.password" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.password"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="credentials.community" class="col-sm-3 control-label"><?php echo __('SSH Key'); ?></label>
                        <div class="col-sm-8 input-group">
                            <textarea tabindex="4" class="form-control" rows="3" id="credentials.ssh_key" name="credentials.ssh_key" placeholder="Key Not Shown" disabled></textarea>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'snmp') { ?>
                    <div class="form-group">
                        <label for="credentials.community" class="col-sm-3 control-label"><?php echo __('Community'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="credentials.community" name="credentials.community" value="<?php echo @htmlspecialchars($item->attributes->credentials->community, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.community" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.community"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'snmp_v3') { ?>
                    <div class="form-group">
                        <label for="credentials.security_name" class="col-sm-3 control-label"><?php echo __('User / Security Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="credentials.security_name" name="credentials.security_name" value="<?php echo @htmlspecialchars($item->attributes->credentials->security_name, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.security_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.security_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'snmp_v3') { ?>
                    <div class="form-group">
                        <label for="credentials.security_level" class="col-sm-3 control-label"><?php echo __('Security Level'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="credentials.security_level" name="credentials.security_level" disabled>
                                <option value='noAuthNoPriv' <?php if (!empty($item->attributes->credentials->security_level) and $item->attributes->credentials->security_level == 'noAuthNoPriv') { echo 'selected '; } ?>>noAuthNoPriv</option>
                                <option value='authNoPriv' <?php if (!empty($item->attributes->credentials->security_level) and $item->attributes->credentials->security_level == 'authNoPriv') { echo 'selected '; } ?>>authNoPriv</option>
                                <option value='authPriv' <?php if (!empty($item->attributes->credentials->security_level) and $item->attributes->credentials->security_level == 'authPriv') { echo 'selected '; } ?>>authPriv</option>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.security_level" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.security_level"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'snmp_v3') { ?>
                    <div class="form-group">
                        <label for="credentials.authentication_protocol" class="col-sm-3 control-label"><?php echo __('Authentication Protocol'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="credentials.authentication_protocol" name="credentials.authentication_protocol" disabled>
                                <option value='MD5' <?php if (!empty($item->attributes->credentials->authentication_protocol) and $item->attributes->credentials->authentication_protocol == 'MD5') { echo 'selected '; } ?>>MD5</option>
                                <option value='SHA' <?php if (!empty($item->attributes->credentials->authentication_protocol) and $item->attributes->credentials->authentication_protocol == 'SHA') { echo 'selected '; } ?>>SHA</option>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.authentication_protocol" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.authentication_protocol"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'snmp_v3') { ?>
                    <div class="form-group">
                        <label for="credentials.authentication_passphrase" class="col-sm-3 control-label"><?php echo __('User / Authentication Passphrase'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="credentials.authentication_passphrase" name="credentials.authentication_passphrase" value="<?php echo @htmlspecialchars($item->attributes->credentials->authentication_passphrase, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.authentication_passphrase" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.authentication_passphrase"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'snmp_v3') { ?>
                    <div class="form-group">
                        <label for="credentials.privacy_protocol" class="col-sm-3 control-label"><?php echo __('Privacy Protocol'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="form-control" id="credentials.privacy_protocol" name="credentials.privacy_protocol" disabled>
                                <option value='AES' <?php if (!empty($item->attributes->credentials->privacy_protocol) and $item->attributes->credentials->privacy_protocol == 'AES') { echo 'selected '; } ?>>AES</option>
                                <option value='DES' <?php if (!empty($item->attributes->credentials->privacy_protocol) and $item->attributes->credentials->privacy_protocol == 'DES') { echo 'selected '; } ?>>DES</option>
                            </select>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.privacy_protocol" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.privacy_protocol"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if ($item->attributes->type == 'snmp_v3') { ?>
                    <div class="form-group">
                        <label for="credentials.privacy_passphrase" class="col-sm-3 control-label"><?php echo __('Privacy Passphrase'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="credentials.privacy_passphrase" name="credentials.privacy_passphrase" value="<?php echo @htmlspecialchars($item->attributes->credentials->privacy_passphrase, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_credentials.privacy_passphrase" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.privacy_passphrase"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</form>

<?php if (empty($item->attributes->credentials)) { ?>
<div>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Could not decrypt credentials. PLease edit this entry or delete and create anew.
            </div>
        </div>
    </div>
</div>
<?php } ?>