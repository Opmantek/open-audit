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
* @version   2.1.1
* @link      http://www.open-audit.org
 */
$item = $this->response->data[0];
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
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
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $item->attributes->name; ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_name" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="name"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
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
                        <label for="domain" class="col-sm-3 control-label"><?php echo __('Domain'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="domain" name="domain" value="<?php echo htmlspecialchars($item->attributes->domain, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_domain" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="domain"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="host" class="col-sm-3 control-label"><?php echo __('Host'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="host" name="host" value="<?php echo htmlspecialchars($item->attributes->host, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_host" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="host"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="port" class="col-sm-3 control-label"><?php echo __('Port'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="port" name="port" value="<?php echo htmlspecialchars($item->attributes->port, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_port" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="port"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="secure" class="col-sm-3 control-label"><?php echo __('Use Secure (LDAPS)'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="secure" name="secure" disabled>
                                <option value='y' <?php if ($item->attributes->secure == 'y') { echo "selected"; }?>><?php echo __('Yes'); ?></option>
                                <option value='n' <?php if ($item->attributes->secure == 'n') { echo "selected"; }?>><?php echo __('No'); ?></option>
                            </select>
                            <span class="input-group-btn">
                                <button id="edit_secure" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="secure"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="version" class="col-sm-3 control-label"><?php echo __('Version'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="version" name="version" value="<?php echo htmlspecialchars($item->attributes->version, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_version" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="version"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="use_roles" class="col-sm-3 control-label"><?php echo __('Use Roles'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="use_roles" name="use_roles" disabled>
                                <option value='n' <?php if ($item->attributes->use_roles == 'n') { echo "selected"; }?>><?php echo __('No'); ?></option>
                                <option value='y' <?php if ($item->attributes->use_roles == 'y') { echo "selected"; }?>><?php echo __('Yes'); ?></option>
                            </select>
                            <span class="input-group-btn">
                                <button id="edit_use_roles" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="use_roles"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="type" class="col-sm-3 control-label"><?php echo __('Type'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="type" name="type" disabled>
                                <option value='active directory' <?php if ($item->attributes->type == 'active directory') { echo "selected"; }?>>Active Directory</option>
                                <option value='openldap' <?php if ($item->attributes->type == 'openldap') { echo "selected"; }?>>OpenLDAP</option>
                            </select>
                            <span class="input-group-btn">
                                <button id="edit_type" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="type"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="base_dn" class="col-sm-3 control-label"><?php echo __('Base DN'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="base_dn" name="base_dn" value="<?php echo htmlspecialchars($item->attributes->base_dn, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_base_dn" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="base_dn"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="user_dn" class="col-sm-3 control-label"><?php echo __('User DN'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="user_dn" name="user_dn" value="<?php echo htmlspecialchars($item->attributes->user_dn, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_user_dn" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="user_dn"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="user_membership_attribute" class="col-sm-3 control-label"><?php echo __('User Membership Attribute'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="user_membership_attribute" name="user_membership_attribute" value="<?php echo htmlspecialchars($item->attributes->user_membership_attribute, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_user_membership_attribute" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="user_membership_attribute"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="refresh" class="col-sm-3 control-label"><?php echo __('Refresh'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="refresh" name="refresh" value="<?php echo intval($item->attributes->refresh); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_refresh" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="refresh"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lang" class="col-sm-3 control-label"><?php echo __('Language'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="lang" name="lang" title='Language' disabled>
                                <option value='de' <?php if ($item->attributes->lang == 'de') { echo "selected"; }?>><?php echo __('German'); ?></option>
                                <option value='en' <?php if ($item->attributes->lang == 'en') { echo "selected"; }?>><?php echo __('English'); ?></option>
                                <option value='es' <?php if ($item->attributes->lang == 'es') { echo "selected"; }?>><?php echo __('Spanish'); ?></option>
                                <option value='fr' <?php if ($item->attributes->lang == 'fr') { echo "selected"; }?>><?php echo __('French'); ?></option>
                                <option value='pt-br' <?php if ($item->attributes->lang == 'pt-br') { echo "selected"; }?>><?php echo __('Brazilian Portuguese'); ?></option>
                            </select>
                            <span class="input-group-btn">
                                <button id="edit_lang" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="lang"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dn_account" class="col-sm-3 control-label"><?php echo __('DN Account'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="dn_account" name="dn_account" value="<?php echo htmlspecialchars($item->attributes->dn_account, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_base_dn" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="dn_account"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dn_password" class="col-sm-3 control-label"><?php echo __('DN Password'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="dn_password" name="dn_password" value="<?php echo htmlspecialchars($item->attributes->dn_password, REPLACE_FLAGS, CHARSET); ?>" disabled>
                            <?php if (!empty($edit)) { ?>
                            <span class="input-group-btn">
                                <button id="edit_user_dn" data-action="edit" class="btn btn-default edit_button" type="button" data-attribute="dn_password"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
                            </span>
                            <?php } ?>
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
            </div>
        </div>
    </div>
</form>
