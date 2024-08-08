<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$types = array('Campus Area Network','Cloud Network','Enterprise Private Network','Home Area Network','Local Area Network','Metropolitan Area Network','Passive Optical Local Area Network','Personal Area Network','Storage-Area Network','System-Area Network','Virtual Private Network','Wide Area Network','Wireless Local Area Network');
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection.'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][use_authentication]"><?= __('Use for Authentication') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][use_authentication]" id="data[attributes][use_authentication]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y" selected><?= __('Yes') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][use_authorisation]"><?= __('Use for Roles') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][use_authorisation]" id="data[attributes][use_authorisation]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="n" selected><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][domain]', __('Domain'), $dictionary->attributes->create, 'your.domain.com') ?>
                                <?= create_text_field('data[attributes][host]', __('Host'), $dictionary->attributes->create, '192.168.1.88') ?>
                                <?= create_text_field('data[attributes][port]', __('Port'), $dictionary->attributes->create, '389') ?>
                                <?= create_text_field('data[attributes][version]', __('Version'), $dictionary->attributes->create, '3') ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][secure]"><?= __('Use Secure (LDAPS)') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][secure]" id="data[attributes][secure]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="n" selected><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="active directory" selected><?= ('Active Directory') ?></option>
                                            <option value="openldap"><?= ('OpenLDAP') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][ldap_base_dn]', __('Base DN'), $dictionary->attributes->create, 'cn=Users,dc=your,dc=domain,dc=com') ?>
                                <?= create_text_field('data[attributes][openldap_user_dn]', __('User DN'), $dictionary->attributes->create, 'cn=@username,ou=people') ?>
                                <?= create_text_field('data[attributes][openldap_user_membership_attribute]', __('User Membership Attribute'), $dictionary->attributes->create, 'memberUid') ?>
                                <?= create_text_field('data[attributes][ldap_dn_account]', __('DN Account'), $dictionary->attributes->create, '') ?>
                                <?= create_text_field('data[attributes][ldap_dn_password]', __('DN Password'), $dictionary->attributes->create, '') ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][lang]"><?= __('Language') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][lang]" id="data[attributes][lang]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value='de'><?= __('German') ?></option>
                                            <option value='en' selected><?= __('English') ?></option>
                                            <option value='es'><?= __('Spanish') ?></option>
                                            <option value='fr'><?= __('French') ?></option>
                                            <option value='pt-br'><?= __('Brazilian Portuguese') ?></option>
                                            <option value='zh-tw'><?= __('Traditional Chinese') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                    </div>
                                </div>


                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?php if (! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br>";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if (! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br>";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[version\\]").val('3');
        $("#data\\[attributes\\]\\[port\\]").val('389');
        $("#data\\[attributes\\]\\[ldap_dn_password\\]").prop("type", "password");
        $("#data\\[attributes\\]\\[openldap_user_dn\\]").val('cn=@username,ou=people');
        $("#data\\[attributes\\]\\[openldap_user_dn\\]").prop("disabled", true);
        $("#data\\[attributes\\]\\[openldap_user_membership_attribute\\]").val('memberUid');
        $("#data\\[attributes\\]\\[openldap_user_membership_attribute\\]").prop("disabled", true);

        $(document).on('change', "#data\\[attributes\\]\\[type\\]", function () {
            if ($("#data\\[attributes\\]\\[type\\]").val() == 'active directory') {
                $("#data\\[attributes\\]\\[openldap_user_dn\\]").prop("disabled", true);
                $("#data\\[attributes\\]\\[openldap_user_membership_attribute\\]").prop("disabled", true);
            } else {
                $("#data\\[attributes\\]\\[openldap_user_dn\\]").prop("disabled", false);
                $("#data\\[attributes\\]\\[openldap_user_membership_attribute\\]").prop("disabled", false);
            }
        });
    });
}
</script>
