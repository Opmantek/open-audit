<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
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
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select data_type" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value='' label=' '></option>
                                            <option value='snmp'><?= __('SNMP (v1 / v2)') ?></option>
                                            <option value='snmp_v3'><?= __('SNMP v3') ?></option>
                                            <option value='ssh'><?= __('SSH') ?></option>
                                            <option value='ssh_key'><?= __('SSH Key') ?></option>
                                            <option value='windows'><?= __('Windows') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div id="options"></div>

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
    $(document).ready(function(){
        $("#data\\[attributes\\]\\[name\\]").focus();
        <?php if (!empty($org_id)) { ?>
        $('#data\\[attributes\\]\\[org_id\\]').val('<?= @$org_id ?>');
        <?php } ?>
    });

    $(document).ready(function(){
        var $snmp_text = '<?= create_text_field('data[attributes][credentials][community]', __('Community String'), $dictionary->attributes->create, '', 'password') ?>';

        var $snmp_v3_text = '<?= create_text_field('data[attributes][credentials][security_name]', __('Security Name'), $dictionary->attributes->create) ?>\
                                    \
                                    <div class="row" style="padding-top:16px;">\
                                        <div class="offset-2 col-8" style="position:relative;">\
                                            <label for="data[attributes][credentials][security_level]" class="form-label"><?= __("Security Level") ?></label><br>\
                                            <select class="form-select data_type" name="data[attributes][credentials][security_level]" id="data[attributes][credentials][security_level]">\
                                                <option value="noAuthNoPriv">noAuthNoPriv</option>\
                                                <option value="authNoPriv">authNoPriv</option>\
                                                <option value="authPriv">authPriv</option>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    \
                                    <div class="row" style="padding-top:16px;">\
                                        <div class="offset-2 col-8" style="position:relative;">\
                                            <label for="data[attributes][credentials][authentication_protocol]" class="form-label"><?= __("Authentication Protocol") ?></label><br>\
                                            <select class="form-select data_type" name="data[attributes][credentials][authentication_protocol]" id="data[attributes][credentials][authentication_protocol]">\
                                                <option value="MD5">MD5</option>\
                                                <option value="SHA">SHA</option>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    \
                                    <?= create_text_field('data[attributes][credentials][authentication_passphrase]', __('Authentication Passphrase'), $dictionary->attributes->create, '', 'password') ?>\
                                    \
                                    <div class="row" style="padding-top:16px;">\
                                        <div class="offset-2 col-8" style="position:relative;">\
                                            <label for="data[attributes][credentials][privacy_protocol]" class="form-label"><?= __("Privacy Protocol") ?></label><br>\
                                            <select class="form-select data_type" name="data[attributes][credentials][privacy_protocol]" id="data[attributes][credentials][privacy_protocol]">\
                                                <option value="AES">AES</option>\
                                                <option value="DES">DES</option>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    \
                                    <?= create_text_field('data[attributes][credentials][privacy_passphrase]', __('Privacy Passphrase'), $dictionary->attributes->create, '', 'password') ?>\
                                    <?= create_text_field('data[attributes][credentials][context_name]', __('Context Name'), $dictionary->attributes->create) ?>\
                                    <?= create_text_field('data[attributes][credentials][context_engine_id]', __('Context Engine ID'), $dictionary->attributes->create) ?>';

        var $ssh_text = '<?= create_text_field('data[attributes][credentials][username]', __('Username'), $dictionary->attributes->create) . create_text_field('data[attributes][credentials][password]', __('Password'), $dictionary->attributes->create, '', 'password') ?>';

        var $ssh_key_text = '<?= create_text_field('data[attributes][credentials][username]', __('Username'), $dictionary->attributes->create) . '<div class="row" style="padding-top:16px;"><div class="offset-2 col-8" style="position:relative;"><label for="data[attributes][credentials][ssh_key]" class="form-label">' . __('Key') . '</label><div class="input-group"><textarea class="form-control" rows="14" id="data[attributes][credentials][ssh_key]" name="data[attributes][credentials][ssh_key]"></textarea></div></div></div>' . create_text_field('data[attributes][credentials][password]', __('Key Password (optional)'), $dictionary->attributes->create, '', 'password') . create_text_field('data[attributes][credentials][sudo_password]', __('Sudo Password (optional)'), $dictionary->attributes->create, '', 'password') ?>';

        var $windows_text = '<?= create_text_field('data[attributes][credentials][username]', __('Username'), $dictionary->attributes->create) . create_text_field('data[attributes][credentials][password]', __('Password'), $dictionary->attributes->create, '', 'password') ?>';

        $('.data_type').change(function() {
            var $type = $(this).val();
            if ($type == "snmp") {
                $("#options").html($snmp_text);
            } else if ($type == "snmp_v3") {
                $("#options").html($snmp_v3_text);
            } else if ($type == "ssh") {
                $("#options").html($ssh_text);
            } else if ($type == "ssh_key") {
                $("#options").html($ssh_key_text);
            } else if ($type == "windows") {
                $("#options").html($windows_text);
                $("#data\\[attributes\\]\\[credentials\\]\\[username\\]").attr("placeholder", "username@domain");
            } else {
                $("#options").html("");
            }
        });
    });
    
    <?php if (!empty($type)) { ?>
    $(document).ready(function(){
        $("#data\\[attributes\\]\\[type\\]").val("<?= $type ?>");
        $("#data\\[attributes\\]\\[type\\]").trigger("change");
    });
    <?php } ?>
}
</script>


