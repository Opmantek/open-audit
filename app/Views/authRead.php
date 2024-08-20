<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$fields = new \stdClass();
$fields->{'active directory'} = array('domain', 'host', 'port', 'version', 'secure', 'ldap_base_dn', 'lang');

$fields->entra = array('client_ident', 'client_secret', 'redirect_uri', 'tenant');

$fields->openldap = array('domain', 'host', 'port', 'version', 'secure', 'ldap_base_dn', 'lang','openldap_user_dn', 'openldap_user_membership_attribute');

$fields->github = array('client_ident', 'client_secret', 'redirect_uri');

$fields->okta = array('client_ident', 'client_secret', 'redirect_uri', 'issuer');

$fields->all = array('client_ident', 'client_secret', 'redirect_uri', 'issuer', 'use_authentication', 'use_authorisation', 'domain', 'host', 'port', 'version', 'secure', 'ldap_base_dn', 'openldap_user_dn', 'openldap_user_membership_attribute', 'ldap_dn_account', 'ldap_dn_password', 'lang');
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_field('type', $resource->type, $dictionary->columns->type) ?>
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
                            <?php if ($resource->type !== 'github' and $resource->type !== 'okta') { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="use_authorisation" class="form-label"><?= __('Use for Authorisation') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="use_authorisation" name="use_authorisation" data-original-value="<?= $resource->use_authorisation ?>" disabled>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                        
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="use_authorisation" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="use_authorisation" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="use_authorisation" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="use_authorisation" data-dictionary="<?= $dictionary->columns->use_authorisation ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                            $ourFields = $fields->{"$resource->type"};
                            foreach ($ourFields as $field) {
                                echo read_field($field, $resource->{$field}, $dictionary->columns->{$field}, $update);
                            }
                            ?>

                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-6">
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

        $("#ldap_dn_password").val("");
        <?php if (isset($resource->ldap_dn_password)) {
            if ($resource->ldap_dn_password !== '') { ?>
                $("#ldap_dn_password").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#ldap_dn_password").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

        $("#client_secret").val("");
        <?php if (isset($resource->client_secret)) {
            if ($resource->client_secret !== '') { ?>
                $("#client_secret").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#client_secret").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>
    });
}
</script>