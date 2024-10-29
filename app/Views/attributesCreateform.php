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

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][resource]"><?= __('Resource'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][resource]" id="data[attributes][resource]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="devices"><?= __('Devices'); ?></option>
                                            <option value="locations"><?= __('Locations'); ?></option>
                                            <option value="orgs"><?= __('Orgs'); ?></option>
                                            <option value="queries"><?= __('Queries'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][value]', __('Value'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>

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
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $(document).on('change', "#data\\[attributes\\]\\[resource\\]", function () {
            $("#data\\[attributes\\]\\[type\\]").children().remove();
            if ($("#data\\[attributes\\]\\[resource\\]").val() == 'devices') {
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: '', text: 'Choose' }));
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: 'class', text: 'Class' }));
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: 'environment', text: 'Environment' }));
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: 'status', text: 'Status' }));
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: 'type', text: 'Type' }));
            }
            if ($("#data\\[attributes\\]\\[resource\\]").val() == 'locations') {
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: 'type', text: 'Type' }));
            }
            if ($("#data\\[attributes\\]\\[resource\\]").val() == 'queries') {
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: 'menu_category', text: 'Menu Category' }));
            }
            if ($("#data\\[attributes\\]\\[resource\\]").val() == 'orgs') {
                $("#data\\[attributes\\]\\[type\\]").append($('<option>', { value: 'type', text: 'Type' }));
                /* $("#submit").removeAttr('disabled'); */
            }
        });
    });
}
</script>
