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
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="type" class="form-label"><?= __('Type') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                            <option value='snmp'><?= __('SNMP (v1 / v2)') ?></option>
                                            <option value='snmp_v3'><?= __('SNMP v3') ?></option>
                                            <option value='ssh'><?= __('SSH') ?></option>
                                            <option value='ssh_key'><?= __('SSH Key') ?></option>
                                            <option value='windows'><?= __('Windows') ?></option>
                                        </select>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                </div>
                            </div>
                            <?php if ($resource->type === 'snmp') {
                                echo read_field('credentials.community', '', $dictionary->columns->community, $update, __('Community String'), '', '', 'password');
                            } elseif ($resource->type === 'ssh') {
                                echo read_field('credentials.username', $resource->credentials->username, $dictionary->columns->username, $update, __('Username'));
                                echo read_field('credentials.password', '', $dictionary->columns->password, $update, __('Password'), '', '', 'password');
                            } elseif ($resource->type === 'windows') {
                                echo read_field('credentials.username', $resource->credentials->username, $dictionary->columns->username, $update, __('Username'));
                                echo read_field('credentials.password', '', $dictionary->columns->password, $update, __('Password'), '', '', 'password');
                            } elseif ($resource->type === 'ssh_key') {
                                echo read_field('credentials.username', $resource->credentials->username, $dictionary->columns->username, $update, __('Username'));
                                echo read_field('credentials.ssh_key', '', $dictionary->columns->ssh_key, $update, __('SSH Key'), '', '', 'password');
                                echo read_field('credentials.password', '', $dictionary->columns->password, $update, __('Key Password (optional)'), '', '', 'password');
                                echo read_field('credentials.sudo_password', '', $dictionary->columns->sudo_password, $update, __('Sudo Password (optional)'), '', '', 'password');
                            } elseif ($resource->type === 'snmp_v3') {
                                echo read_field('credentials.security_name', $resource->credentials->security_name, $dictionary->columns->security_name, $update, __('Security Name')); ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="security_level" class="form-label"><?= __('Security Level') ?></label>
                                        <div class="input-group">
                                            <select class="form-select" id="credentials.security_level" name="credentials.security_level" data-original-value="<?= $resource->type ?>" disabled>
                                                <option value="noAuthNoPriv" <?php if (!empty($resource->credentials->security_level) and $resource->credentials->security_level == 'noAuthNoPriv') { echo 'selected '; } ?>>noAuthNoPriv</option>
                                                <option value="authNoPriv" <?php if (!empty($resource->credentials->security_level) and $resource->credentials->security_level == 'authNoPriv') { echo 'selected '; } ?>>authNoPriv</option>
                                                <option value="authPriv" <?php if (!empty($resource->credentials->security_level) and $resource->credentials->security_level == 'authPriv') { echo 'selected '; } ?>>authPriv</option>
                                            </select>
                                            <?php if ($update) { ?>
                                            <div class="float-end" style="padding-left:4px;">
                                                <div data-attribute="credentials.security_level" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                <div data-attribute="credentials.security_level" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                <div data-attribute="credentials.security_level" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="credentials.security_level" data-dictionary="<?= $dictionary->columns->security_level ?>"><span><br></span></div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="authentication_protocol" class="form-label"><?= __('Authentication Protocol') ?></label>
                                        <div class="input-group">
                                            <select class="form-select" id="credentials.authentication_protocol" name="credentials.authentication_protocol" data-original-value="<?= $resource->type ?>" disabled>
                                                <option value="MD5" <?php if (!empty($resource->credentials->authentication_protocol) and $resource->credentials->authentication_protocol == 'MD5') { echo 'selected '; } ?>>MD5</option>
                                                <option value="SHA" <?php if (!empty($resource->credentials->authentication_protocol) and $resource->credentials->authentication_protocol == 'SHA') { echo 'selected '; } ?>>SHA</option>
                                            </select>
                                            <?php if ($update) { ?>
                                            <div class="float-end" style="padding-left:4px;">
                                                <div data-attribute="credentials.authentication_protocol" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                <div data-attribute="credentials.authentication_protocol" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                <div data-attribute="credentials.authentication_protocol" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="credentials.authentication_protocol" data-dictionary="<?= $dictionary->columns->authentication_protocol ?>"><span><br></span></div>
                                    </div>
                                </div>

                                <?php echo read_field('credentials.authentication_passphrase', '', $dictionary->columns->authentication_passphrase, $update, __('Authentication Passphrase'), '', '', 'password'); ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="privacy_protocol" class="form-label"><?= __('Privacy Protocol') ?></label>
                                        <div class="input-group">
                                            <select class="form-select" id="credentials.privacy_protocol" name="credentials.privacy_protocol" data-original-value="<?= $resource->type ?>" disabled>
                                                <option value="AES" <?php if (!empty($resource->credentials->privacy_protocol) and $resource->credentials->privacy_protocol == 'AES') { echo 'selected '; } ?>>AES</option>
                                                <option value="DES" <?php if (!empty($resource->credentials->privacy_protocol) and $resource->credentials->privacy_protocol == 'DES') { echo 'selected '; } ?>>DES</option>
                                            </select>
                                            <?php if ($update) { ?>
                                            <div class="float-end" style="padding-left:4px;">
                                                <div data-attribute="credentials.privacy_protocol" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                                <div data-attribute="credentials.privacy_protocol" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                                <div data-attribute="credentials.privacy_protocol" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="credentials.privacy_protocol" data-dictionary="<?= $dictionary->columns->privacy_protocol ?>"><span><br></span></div>
                                    </div>
                                </div>
                                <?php echo read_field('credentials.privacy_passphrase', '', $dictionary->columns->privacy_passphrase, $update, __('Privacy Passphrase'), '', '', 'password'); ?>
                                <?php echo read_field('credentials.context_name', '', $dictionary->columns->context_name, $update, __('Context Name')); ?>
                                <?php echo read_field('credentials.context_engine_id', '', $dictionary->columns->context_engine_id, $update, __('Context Engine ID')); ?>

                            <?php } ?>
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
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'description', 'type', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
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
        $("#type").val("<?= $resource->type ?>");

        <?php if (isset($resource->credentials->community)) {
            if ($resource->credentials->community !== '') { ?>
                $("#credentials\\.community").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#credentials\\.community").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

        <?php if (isset($resource->credentials->password)) {
            if ($resource->credentials->password !== '') { ?>
                $("#credentials\\.password").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#credentials\\.password").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

        <?php if (isset($resource->credentials->authentication_passphrase)) {
            if ($resource->credentials->authentication_passphrase !== '') { ?>
                $("#credentials\\.authentication_passphrase").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#credentials\\.authentication_passphrase").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

        <?php if (isset($resource->credentials->privacy_passphrase)) {
            if ($resource->credentials->privacy_passphrase !== '') { ?>
                $("#credentials\\.privacy_passphrase").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#credentials\\.privacy_passphrase").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

        <?php if (isset($resource->credentials->ssh_key)) {
            if ($resource->credentials->ssh_key !== '') { ?>
                $("#credentials\\.ssh_key").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#credentials\\.ssh_key").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

        <?php if (isset($resource->credentials->sudo_password)) {
            if ($resource->credentials->sudo_password !== '') { ?>
                $("#credentials\\.sudo_password").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#credentials\\.sudo_password").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

    });
}
</script>