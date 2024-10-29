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
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][type]" class="form-label"><?= __('Type') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]">
                                        <option value="high availability" selected><?= __('High Availability') ?></option>
                                        <option value="load balancing"><?= __('Load Balancing') ?></option>
                                        <option value="performance"><?= __('Performance') ?></option>
                                        <option value="storage"><?= __('Storage') ?></option>
                                        <option value="other"><?= __('Other') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][purpose]" class="form-label"><?= __('Purpose') ?> <span style="color: #dc3545;">*</span></label><br>
                                        <select class="form-select" name="data[attributes][purpose]" id="data[attributes][purpose]">
                                        <option value="application" selected><?= __('Application') ?></option>
                                        <option value="compute"><?= __('Compute') ?></option>
                                        <option value="database"><?= __('Database') ?></option>
                                        <option value="storage"><?= __('Storage') ?></option>
                                        <option value="virtualisation"><?= __('Virtualisation') ?></option>
                                        <option value="web"><?= __('Web') ?></option>
                                        <option value="other"><?= __('Other') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][status]" class="form-label"><?= __('Status') ?></label><br>
                                        <select class="form-select" name="data[attributes][status]" id="data[attributes][status]">
                                        <option value="active" selected><?= __('Active') ?></option>
                                        <option value="inactive"><?= __('Inactive') ?></option>
                                        <option value="other"><?= __('Other') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][scaling]" class="form-label"><?= __('Scaling') ?></label><br>
                                        <select class="form-select" name="data[attributes][scaling]" id="data[attributes][scaling]">
                                        <option value="auto"><?= __('Auto') ?></option>
                                        <option value="fixed" selected><?= __('Fixed') ?></option>
                                        <option value="other"><?= __('Other') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][configuration]" class="form-label"><?= __('Configuration') ?></label><br>
                                        <select class="form-select" name="data[attributes][configuration]" id="data[attributes][configuration]">
                                        <option value="active/active" selected><?= __('Active / Active') ?></option>
                                        <option value="active/passive"><?= __('Active / Passive') ?></option>
                                        <option value="N+1"><?= __('N+1') ?></option>
                                        <option value="N+M"><?= __('N+M') ?></option>
                                        <option value="N-to-1"><?= __('N-to-1') ?></option>
                                        <option value="N-to-N"><?= __('N-to-N') ?></option>
                                        <option value="other"><?= __('Other') ?></option>
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
