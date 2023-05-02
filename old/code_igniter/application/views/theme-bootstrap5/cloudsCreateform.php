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
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection.'Create') ?>">
                                <input type="hidden" value="<?= $meta->access_token[0]; ?>" id="data[access_token]" name="data[access_token]" />

                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][options][ssh]', __('Use SSH'), array(), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][options][wmi]', __('Use WMI'), array(), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][options][snmp]', __('Use SNMP'), array(), $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select data_type" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value="" selected>Choose</option>
                                            <option value="amazon">Amazon AWS</option>
                                            <option value="google">Google Compute</option>
                                            <option value="microsoft">Microsoft Azure</option>
                                        </select>
                                    </div>
                                </div>

                                <div id="options"></div>

                                <br />
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
                                    echo "<h4 class=\"text-center\">About</h4><br />";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if (! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br />";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br />
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br /><br />";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script>
$(document).ready(function () {
    var $microsoft = '<?= str_replace("\n", "", create_text_field('data[attributes][credentials][subscription_id]', __('Subscription ID'), $dictionary->attributes->create)) ?><?= str_replace("\n", "", create_text_field('data[attributes][credentials][tenant_id]', __('Tennant ID'), $dictionary->attributes->create)) ?><?= str_replace("\n", "", create_text_field('data[attributes][credentials][client_id]', __('Client ID'), $dictionary->attributes->create)) ?><?= str_replace("\n", "", create_text_field('data[attributes][credentials][client_secret]', __('Client Secret'), $dictionary->attributes->create)) ?>';

    var $amazon = '<?= str_replace("\n", "", create_text_field('data[attributes][credentials][key]', __('Key'), $dictionary->attributes->create)) ?><?= str_replace("\n", "", create_text_field('data[attributes][credentials][secret_key]', __('Secret Key'), $dictionary->attributes->create)) ?>';

    var $google = '<?= str_replace("\n", "", create_text_field('data[attributes][credentials][json]', __('JSON'), $dictionary->attributes->create)) ?>';

    $('.data_type').change(function() {
        var $type = $(this).val();
        if ($type == "amazon") {
            $("#options").html($amazon);
        } else if ($type == "microsoft") {
            $("#options").html($microsoft);
        } else if ($type == "google") {
            $("#options").html($google);
        } else {
            $("#options").html("");
        }
    });

    $(document).on('change', "#data\\[attributes\\]\\[type\\]", function () {
        $("#credentials").children().remove();
    });


    $("#data\\[attributes\\]\\[options\\]\\[ssh\\]").val('y');
    $("#data\\[attributes\\]\\[options\\]\\[wmi\\]").val('y');

});
</script>
