<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_field('domain', $resource->description, $dictionary->columns->domain, $update) ?>
                            <?= read_field('host', $resource->description, $dictionary->columns->host, $update) ?>
                            <?= read_field('port', $resource->description, $dictionary->columns->port, $update) ?>
                            <?= read_field('version', $resource->description, $dictionary->columns->version, $update) ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="secure" class="form-label"><?= __('Use Secure (LDAPS)') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="secure" name="secure" data-original-value="<?= $resource->secure ?>" disabled>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="secure" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="secure" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="secure" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="secure" data-dictionary="<?= $dictionary->columns->secure ?>"><span><br></span></div>
                                </div>
                            </div>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="use_roles" class="form-label"><?= __('Use LDAP for Roles') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="use_roles" name="use_roles" data-original-value="<?= $resource->use_roles ?>" disabled>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="use_roles" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="use_roles" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="use_roles" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="use_roles" data-dictionary="<?= $dictionary->columns->use_roles ?>"><span><br></span></div>
                                </div>
                            </div>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="use_auth" class="form-label"><?= __('Use LDAP for Authentication') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="use_auth" name="use_auth" data-original-value="<?= $resource->use_auth ?>" disabled>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="use_auth" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="use_auth" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="use_auth" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="use_auth" data-dictionary="<?= $dictionary->columns->use_auth ?>"><span><br></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="type" class="form-label"><?= __('Type') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                            <option value="active directory"><?= __('Active Directory') ?></option>
                                            <option value="openldap"><?= __('OpenLDAP') ?></option>
                                        </select>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?= read_field('base_dn', $resource->base_dn, $dictionary->columns->base_dn, $update) ?>
                            <?php if ($resource->type === 'openldap') { ?>
                                <?= read_field('user_dn', $resource->user_dn, $dictionary->columns->user_dn, $update) ?>
                                <?= read_field('user_membership_attribute', $resource->user_membership_attribute, $dictionary->columns->user_membership_attribute, $update) ?>
                            <?php } ?>
                            <?= read_field('dn_account', $resource->dn_account, $dictionary->columns->dn_account, $update) ?>
                            <?= read_field('dn_password', $resource->dn_password, $dictionary->columns->dn_password, $update) ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="lang" class="form-label"><?= __('Language') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="lang" name="lang" data-original-value="<?= $resource->lang ?>" disabled>
                                            <option value='de'><?= __('German') ?></option>
                                            <option value='en' selected><?= __('English') ?></option>
                                            <option value='es'><?= __('Spanish') ?></option>
                                            <option value='fr'><?= __('French') ?></option>
                                            <option value='pt-br'><?= __('Brazilian Portuguese') ?></option>
                                            <option value='zh-tw'><?= __('Traditional Chinese') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="pull-right" style="padding-left:4px;">
                                            <div data-attribute="lang" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="lang" data-dictionary="<?= $dictionary->columns->lang ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-4">
                            <br>
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script>
$(document).ready(function() {
    $("#secure").val("<?= $resource->secure ?>");
    $("#use_roles").val("<?= $resource->use_roles ?>");
    $("#use_auth").val("<?= $resource->use_auth ?>");
    $("#type").val("<?= $resource->type ?>");
    $("#lang").val("<?= $resource->lang ?>");
});
</script>