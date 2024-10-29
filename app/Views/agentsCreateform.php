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
                    <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                            <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                            <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                            <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                            <?= create_text_field('data[attributes][weight]', __('Weight'), $dictionary->attributes->create) ?>
                        </div>

                        <div class="col-4">
                            <div class="col-12 text-center">
                                <h3><?= __('IF') ?></h3>
                            </div>
                            <?= create_text_field('data[attributes][test_minutes]', __('Minutes Since last Audit are Greater than'), $dictionary->attributes->create) ?>
                            <?= create_text_field('data[attributes][test_subnet]', __('Device is in the Subnet'), $dictionary->attributes->create) ?>
                            <?= create_text_field('data[attributes][test_os]', __('Operating System Family Contains'), $dictionary->attributes->create) ?>
                            <div class="col-12 text-center">
                                <br>
                                <h3><?= __('Then') ?></h3>
                            </div>
                            <?php if (!empty($config->feature_agents_advanced) and $config->feature_agents_advanced === 'y') { ?>
                                <?= create_text_field('data[attributes][action_download]', __('Download a file from URL'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][action_command]', __('Run this Command'), $dictionary->attributes->create) ?>
                            <?php } ?>

                            <?= create_select('data[attributes][action_devices_assigned_to_location]', __('Assign Device to Location'), $included['locations'], $dictionary->attributes->create) ?>
                            <?= create_select('data[attributes][action_devices_assigned_to_org]', __('Assign Device to Organisation'), $orgs, $dictionary->attributes->create) ?>
                            <?= create_select('data[attributes][action_audit]', __('Audit the Device'), null, $dictionary->attributes->create) ?>
                            <?= create_select('data[attributes][action_uninstall]', __('Uninstall the Agent'), null, $dictionary->attributes->create) ?>

                            <br>
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <label for="submit" class="form-label">&nbsp;</label>
                                    <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <?php if (! empty($dictionary->about)) {
                                echo "<h4 class=\"text-center\">About</h4><br>";
                                echo html_entity_decode($dictionary->about);
                            } ?>
                            <h4 class="text-center">Fields</h4><br>
                            <?php foreach ($dictionary->columns as $key => $value) {
                                if ($value !== 'Unused.') {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                }
                            } ?>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[weight\\]").val(100);
        $("#data\\[attributes\\]\\[action_audit\\]").val('y');
        $("#data\\[attributes\\]\\[action_uninstall\\]").val('n');
        $('#data\\[attributes\\]\\[action_devices_assigned_to_location\\] option[value=""]').text("");
        $('#data\\[attributes\\]\\[action_devices_assigned_to_org\\] option[value=""]').text("");
    });
}
</script>
