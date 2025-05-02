<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
include 'shared/common_functions.php';
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

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]">
                                            <option value="active directory"><?= __('Active Directory'); ?></option>
                                            <?php if ($config->product === 'enterprise') { ?>
                                            <option value="seed"><?= __('Device Seed'); ?></option>
                                            <?php } ?>
                                            <option value="subnet" selected><?= __('Subnet'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div id="subnet">
                                <?= create_text_field('data[attributes][subnet]', __('Subnet'), $dictionary->attributes->create) ?>
                                </div>

                                <div id="ad" style="display:none;">
                                <?= create_text_field('data[attributes][ad_server]', __('Active Directory Server'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][ad_domain]', __('Active Directory Domain'), $dictionary->attributes->create) ?>
                                </div>

                                <div id="seed" style="display:none;">
                                <?php if ($config->product === 'enterprise') { ?>
                                    <?= create_text_field('data[attributes][seed_ip]', __('Device Seed IP'), $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][seed_restrict_to_subnet]', __('Restrict to Subnet'), [], $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][seed_restrict_to_private]', __('Restrict to Private'), [], $dictionary->attributes->create) ?>
                                <?php } ?>
                                </div>

                                <?php
                                $disabled = 'disabled';
                                if ($config->product === 'enterprise' or $config->product === 'professional') {
                                    $disabled = '';
                                } ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][scan_options][id]"><?= __('Discovery Options'); ?></label>
                                        <select class="form-select" name="data[attributes][scan_options][id]" id="data[attributes][scan_options][id]" <?= $disabled ?>>
                                        <?php foreach ($included['discovery_scan_options'] as $option) {
                                            echo "<option value=\"" . $option->id . "\">" . $option->attributes->name . "</option>\n";
                                        } ?>
                                        </select>
                                    </div>
                                </div>

                                <?= create_select('data[attributes][devices_assigned_to_org]', __('Assign Devices to Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][devices_assigned_to_location]', __('Assign Devices to Location'), $included['locations'], $dictionary->attributes->create) ?>

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
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                <h4 class="text-center">Fields</h4><br>
                                <?php $attributes = array('name', 'subnet', 'org_id', 'type', 'devices_assigned_to_org', 'devices_assigned_to_location', 'ad_server', 'ad_domain'); ?>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    if (in_array($key, $attributes)) {
                                        echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                    }
                                } ?>
                                <br><h4 class="text-center">Discovery Options</h4><br>
                                <?= $dictionary->options ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
        <?php if ($config->product === 'enterprise') { ?>
            $("#data\\[attributes\\]\\[seed_restrict_to_subnet\\]").val('y');
            $("#data\\[attributes\\]\\[seed_restrict_to_private\\]").val('y');
        <?php } ?>

        $("#data\\[attributes\\]\\[require_port\\]").val('n');


        $("#data\\[attributes\\]\\[scan_options\\]\\[id\\]").val(<?= $config->discovery_default_scan_option ?>);
        $("#data\\[attributes\\]\\[devices_assigned_to_org\\]").find('option').get(0).remove();
        $("#data\\[attributes\\]\\[devices_assigned_to_org\\]").append($('<option>', { value: '', text: ''}));
        $("#data\\[attributes\\]\\[devices_assigned_to_org\\]").val("");
        $("#data\\[attributes\\]\\[devices_assigned_to_location\\]").find('option').get(0).remove();
        $("#data\\[attributes\\]\\[devices_assigned_to_location\\]").append($('<option>', { value: '', text: ''}));
        $("#data\\[attributes\\]\\[devices_assigned_to_location\\]").val("");


        $('#data\\[attributes\\]\\[type\\]').change(function() {
            var $type = $(this).val();
            if ($type == "subnet") {
                $("#ad").css("display", "none");
                $("#seed").css("display", "none");
                $("#subnet").css("display", "block");
            } else if ($type == "active directory") {
                $("#ad").css("display", "block");
                $("#seed").css("display", "none");
                $("#subnet").css("display", "none");
            } else if ($type == "seed") {
                $("#ad").css("display", "none");
                $("#seed").css("display", "block");
                $("#subnet").css("display", "block");
            }
        });

    });
}
</script>
