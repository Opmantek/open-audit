<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$test = '';
if (strpos(base_url(), 'https:') === false) {
    $test = '<p><div class="container-fluid"><div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>IMPORTANT</strong>, you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div></p>';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value="" selected><?= __('Choose') ?></option>
                                            <option value="active directory"><?= ('Active Directory') ?></option>
                                            <?php if ($config->product === 'enterprise') { ?>
                                            <option value="entra"><?= ('Entra') ?></option>
                                            <!--<option value="github"><?= ('Github') ?></option>-->
                                            <option value="okta"><?= ('Okta') ?></option>
                                            <?php } ?>
                                            <option value="openldap"><?= ('OpenLDAP') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;" id="use_authentication_div">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][use_authentication]"><?= __('Use for Authentication') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][use_authentication]" id="data[attributes][use_authentication]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="n"><?= __('No') ?></option>
                                            <option value="y" selected><?= __('Yes') ?></option>
                                        </select>
                                    </div>
                                </div>


                                <?= create_text_field('data[attributes][client_ident]', __('Client ID'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][client_secret]', __('Client Secret'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][tenant]', __('Tenant'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][redirect_uri]', __('Redirect URI'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][issuer]', __('Issuer'), $dictionary->attributes->create) ?>


                                <div class="row" style="padding-top:16px;" id="use_authorisation_div">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][use_authorisation]"><?= __('Use for Roles') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][use_authorisation]" id="data[attributes][use_authorisation]">
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

                                <div class="row" style="padding-top:16px;" id="secure_div">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][secure]"><?= __('Use Secure (LDAPS)') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][secure]" id="data[attributes][secure]">
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="n" selected><?= __('No') ?></option>
                                            <option value="y"><?= __('Yes') ?></option>
                                        </select>
                                    </div>
                                </div>



                                <?= create_text_field('data[attributes][ldap_base_dn]', __('Base DN'), $dictionary->attributes->create, 'cn=Users,dc=your,dc=domain,dc=com') ?>
                                <?= create_text_field('data[attributes][openldap_user_dn]', __('User DN'), $dictionary->attributes->create, 'cn=@username,ou=people') ?>
                                <?= create_text_field('data[attributes][openldap_user_membership_attribute]', __('User Membership Attribute'), $dictionary->attributes->create, 'memberUid') ?>
                                <?= create_text_field('data[attributes][ldap_dn_account]', __('DN Account (optional)'), $dictionary->attributes->create, '') ?>
                                <?= create_text_field('data[attributes][ldap_dn_password]', __('DN Password (optional)'), $dictionary->attributes->create, '') ?>

                                <div class="row" style="padding-top:16px;" id="lang_div">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][lang]"><?= __('Language') ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][lang]" id="data[attributes][lang]">
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
                                    echo $test;
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
        <?php
        $fields_ad = array('use_authentication', 'use_authorisation', 'domain', 'host', 'port', 'version', 'secure', 'ldap_base_dn', 'lang', 'ldap_dn_account', 'ldap_dn_password');

        $fields_entra = array('use_authentication', 'client_ident', 'client_secret', 'tenant', 'redirect_uri');

        $fields_github = array('use_authentication', 'client_ident', 'client_secret', 'redirect_uri');

        $fields_okta = array('use_authentication', 'client_ident', 'client_secret', 'issuer', 'redirect_uri');

        $fields_openldap = array('use_authentication', 'use_authorisation', 'domain', 'host', 'port', 'version', 'secure', 'ldap_base_dn', 'lang','openldap_user_dn', 'openldap_user_membership_attribute', 'ldap_dn_account', 'ldap_dn_password');

        $fields_all = array('client_ident', 'client_secret', 'tenant', 'redirect_uri', 'issuer', 'use_authentication', 'use_authorisation', 'domain', 'host', 'port', 'version', 'secure', 'ldap_base_dn', 'openldap_user_dn', 'openldap_user_membership_attribute', 'ldap_dn_account', 'ldap_dn_password', 'lang');
        echo "\n";
        foreach ($fields_all as $field) {
            echo "      \$(\"#" . $field . "_div\").hide();\n";
        }
        ?>

        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[version\\]").val('3');
        $("#data\\[attributes\\]\\[port\\]").val('389');
        $("#data\\[attributes\\]\\[ldap_dn_password\\]").prop("type", "password");
        $("#data\\[attributes\\]\\[openldap_user_dn\\]").val('cn=@username,ou=people');
        $("#data\\[attributes\\]\\[openldap_user_membership_attribute\\]").val('memberUid');

        $(document).on('change', "#data\\[attributes\\]\\[type\\]", function () {
            if ($("#data\\[attributes\\]\\[type\\]").val() == 'active directory') {
                <?php
                echo "\n";
                foreach ($fields_all as $field) {
                    if (!in_array($field, $fields_ad)) {
                        echo "              \$(\"#" . $field . "_div\").hide();\n";
                    }
                }
                foreach ($fields_ad as $field) {
                    echo "              \$(\"#" . $field . "_div\").show();\n";
                }
                ?>
            }
            if ($("#data\\[attributes\\]\\[type\\]").val() == 'entra') {
                <?php
                echo "\n";
                foreach ($fields_all as $field) {
                    if (!in_array($field, $fields_entra)) {
                        echo "              \$(\"#" . $field . "_div\").hide();\n";
                    }
                }
                foreach ($fields_entra as $field) {
                    echo "              \$(\"#" . $field . "_div\").show();\n";
                }
                ?>
                $("#data\\[attributes\\]\\[redirect_uri\\]").val('<?= base_url() . 'index.php/logon/entra/auth' ?>');
            }
            if ($("#data\\[attributes\\]\\[type\\]").val() == 'github') {
                <?php
                echo "\n";
                foreach ($fields_all as $field) {
                    if (!in_array($field, $fields_github)) {
                        echo "              \$(\"#" . $field . "_div\").hide();\n";
                    }
                }
                foreach ($fields_github as $field) {
                    echo "              \$(\"#" . $field . "_div\").show();\n";
                }
                ?>
                $("#data\\[attributes\\]\\[redirect_uri\\]").val('<?= base_url() . 'index.php/logon/github/auth' ?>');
            }
            if ($("#data\\[attributes\\]\\[type\\]").val() == 'okta') {
                <?php
                echo "\n";
                foreach ($fields_all as $field) {
                    if (!in_array($field, $fields_okta)) {
                        echo "              \$(\"#" . $field . "_div\").hide();\n";
                    }
                }
                foreach ($fields_okta as $field) {
                    echo "              \$(\"#" . $field . "_div\").show();\n";
                }
                ?>
                $("#data\\[attributes\\]\\[redirect_uri\\]").val('<?= base_url() . 'index.php/logon/okta/auth' ?>');
            }
            if ($("#data\\[attributes\\]\\[type\\]").val() == 'openldap') {
                <?php
                echo "\n";
                foreach ($fields_all as $field) {
                    if (!in_array($field, $fields_openldap)) {
                        echo "              \$(\"#" . $field . "_div\").hide();\n";
                    }
                }
                foreach ($fields_openldap as $field) {
                    echo "              \$(\"#" . $field . "_div\").show();\n";
                }
                ?>
            }
        });
    });
}
</script>
