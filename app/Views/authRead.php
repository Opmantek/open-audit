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
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="use_authentication" class="form-label"><?= __('Use for Authentication') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="use_authentication" name="use_authentication" data-original-value="<?= $resource->use_authentication ?>" disabled>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="use_authentication" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="use_authentication" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="use_authentication" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="use_authentication" data-dictionary="<?= $dictionary->columns->use_authentication ?>"><span><br></span></div>
                                </div>
                            </div>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="use_authorisation" class="form-label"><?= __('Use for Authorisation') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="use_authorisation" name="use_authorisation" data-original-value="<?= $resource->use_authorisation ?>" disabled>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="use_authorisation" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="use_authorisation" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="use_authorisation" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="use_authorisation" data-dictionary="<?= $dictionary->columns->use_authorisation ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?= read_field('domain', $resource->domain, $dictionary->columns->domain, $update) ?>
                            <?= read_field('host', $resource->host, $dictionary->columns->host, $update) ?>
                            <?= read_field('port', $resource->port, $dictionary->columns->port, $update) ?>
                            <?= read_field('version', $resource->version, $dictionary->columns->version, $update) ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="secure" class="form-label"><?= __('Use Secure (LDAPS)') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="secure" name="secure" data-original-value="<?= $resource->secure ?>" disabled>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="secure" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="secure" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="secure" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="secure" data-dictionary="<?= $dictionary->columns->secure ?>"><span><br></span></div>
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
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?= read_field('ldap_base_dn', $resource->ldap_base_dn, $dictionary->columns->ldap_base_dn, $update) ?>
                            <?php if ($resource->type === 'openldap') { ?>
                                <?= read_field('openldap_user_dn', $resource->openldap_user_dn, $dictionary->columns->openldap_user_dn, $update) ?>
                                <?= read_field('openldap_user_membership_attribute', $resource->openldap_user_membership_attribute, $dictionary->columns->openldap_user_membership_attribute, $update) ?>
                            <?php } ?>
                            <?= read_field('ldap_dn_account', $resource->ldap_dn_account, $dictionary->columns->ldap_dn_account, $update) ?>
                            <?= read_field('ldap_dn_password', '', $dictionary->columns->ldap_dn_password, $update) ?>
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
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="lang" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="lang" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="lang" data-dictionary="<?= $dictionary->columns->lang ?>"><span><br></span></div>
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

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#secure").val("<?= $resource->secure ?>");
        $("#use_authorisation").val("<?= $resource->use_authorisation ?>");
        $("#use_authentication").val("<?= $resource->use_authentication ?>");
        $("#type").val("<?= $resource->type ?>");
        $("#lang").val("<?= $resource->lang ?>");


        <?php if (isset($resource->ldap_dn_password)) {
            if ($resource->ldap_dn_password !== '') { ?>
                $("#ldap_dn_password").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#ldap_dn_password").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>
    });
}
</script>