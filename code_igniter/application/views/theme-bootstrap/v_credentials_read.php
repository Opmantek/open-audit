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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$item = $this->response->data[0];
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left"><?php echo ucfirst($this->response->meta->collection); ?></span>
      <span class="pull-right"></span>
    </h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="form_update">
        <div class="form-group">
            <label for="id" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="id" name="id" placeholder="<?php echo htmlentities($item->id); ?>" value="<?php echo htmlentities($item->id); ?>" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo htmlentities($item->attributes->name); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="description" name="description" placeholder="" value="<?php echo htmlentities($item->attributes->description); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_description" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="description"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="type" class="col-sm-2 control-label">Type</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="type" name="type" placeholder="" value="<?php echo htmlentities($item->attributes->type); ?>" disabled>
                </div>
            </div>
        </div>

        <?php if ($item->attributes->type == 'ssh' or $item->attributes->type == 'ssh_key' or $item->attributes->type == 'windows') { ?>
        <div class="form-group">
            <label for="credentials.username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="credentials.username" name="credentials.username" placeholder="" value="<?php echo htmlentities($item->attributes->credentials->username); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.username" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.username"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'ssh' or $item->attributes->type == 'windows') { ?>
        <div class="form-group">
            <label for="credentials.password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="password" class="form-control" id="credentials.password" name="credentials.password" placeholder="" value="<?php echo htmlentities($item->attributes->credentials->password); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.password" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.password"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'ssh_key') { ?>
        <div class="form-group">
            <label for="credentials.community" class="col-sm-2 control-label">SSH Key</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <textarea tabindex="4" class="form-control" rows="3" id="credentials.ssh_key" name="credentials.ssh_key" placeholder="Key Not Shown" disabled></textarea>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'snmp') { ?>
        <div class="form-group">
            <label for="credentials.community" class="col-sm-2 control-label">Community</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="password" class="form-control" id="credentials.community" name="credentials.community" placeholder="" value="<?php echo htmlentities($item->attributes->credentials->community); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.community" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.community"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'snmp_v3') { ?>
        <div class="form-group">
            <label for="credentials.security_name" class="col-sm-2 control-label">Security Name</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="credentials.security_name" name="credentials.security_name" placeholder="" value="<?php echo htmlentities($item->attributes->credentials->security_name); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.security_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.security_name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'snmp_v3') { ?>
        <div class="form-group">
            <label for="credentials.security_level" class="col-sm-2 control-label">Security Level</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="form-control" id="credentials.security_level" name="credentials.security_level" disabled>
                        <option value='noAuthNoPriv' <?php if ($item->attributes->credentials->security_level == 'noAuthNoPriv') { echo 'selected '; } ?>>noAuthNoPriv</option>
                        <option value='authNoPriv' <?php if ($item->attributes->credentials->security_level == 'authNoPriv') { echo 'selected '; } ?>>authNoPriv</option>
                        <option value='authPriv' <?php if ($item->attributes->credentials->security_level == 'authPriv') { echo 'selected '; } ?>>authPriv</option>
                    </select>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.security_level" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.security_level"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'snmp_v3') { ?>
        <div class="form-group">
            <label for="credentials.authentication_protocol" class="col-sm-2 control-label">Authentication Protocol</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="form-control" id="credentials.authentication_protocol" name="credentials.authentication_protocol" disabled>
                        <option value='MD5' <?php if ($item->attributes->credentials->authentication_protocol == 'MD5') { echo 'selected '; } ?>>MD5</option>
                        <option value='SHA' <?php if ($item->attributes->credentials->authentication_protocol == 'SHA') { echo 'selected '; } ?>>SHA</option>
                    </select>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.authentication_protocol" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.authentication_protocol"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'snmp_v3') { ?>
        <div class="form-group">
            <label for="credentials.authentication_passphrase" class="col-sm-2 control-label">Authentication Passphrase</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="password" class="form-control" id="credentials.authentication_passphrase" name="credentials.authentication_passphrase" placeholder="" value="<?php echo htmlentities($item->attributes->credentials->authentication_passphrase); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.authentication_passphrase" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.authentication_passphrase"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'snmp_v3') { ?>
        <div class="form-group">
            <label for="credentials.privacy_protocol" class="col-sm-2 control-label">Privacy Protocol</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <select class="form-control" id="credentials.privacy_protocol" name="credentials.privacy_protocol" disabled>
                        <option value='AES' <?php if ($item->attributes->credentials->privacy_protocol == 'AES') { echo 'selected '; } ?>>AES</option>
                        <option value='DES' <?php if ($item->attributes->credentials->privacy_protocol == 'DES') { echo 'selected '; } ?>>DES</option>
                    </select>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.privacy_protocol" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.privacy_protocol"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if ($item->attributes->type == 'snmp_v3') { ?>
        <div class="form-group">
            <label for="credentials.privacy_passphrase" class="col-sm-2 control-label">Privacy Passphrase</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="password" class="form-control" id="credentials.privacy_passphrase" name="credentials.privacy_passphrase" placeholder="" value="<?php echo htmlentities($item->attributes->credentials->privacy_passphrase); ?>" disabled>
                    <?php if (!empty($edit)) { ?>
                    <span class="input-group-btn">
                        <button id="edit_credentials.privacy_passphrase" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="credentials.privacy_passphrase"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="form-group">
            <label for="edited_by" class="col-sm-2 control-label">Edited By</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="" value="<?php echo htmlentities($item->attributes->edited_by); ?>" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="edited_date" class="col-sm-2 control-label">Edited Date</label>
            <div class="col-sm-4">
                <div class="col-sm-8 input-group">
                    <input type="text" class="form-control" id="edited_date" name="edited_date" placeholder="" value="<?php echo htmlentities($item->attributes->edited_date); ?>" disabled>
                </div>
            </div>
        </div>
    </form>
  </div>
</div>
