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

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value="">Choose</option>
                                            <option value="varchar"><?= __('Varchar'); ?></option>
                                            <option value="list"><?= __('List'); ?></option>
                                            <option value="date"><?= __('Date'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][values]', __('Values'), $dictionary->attributes->create) ?>

                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                        <input type="hidden" name="placement" id="placment" value="system">
                                        <input type="hidden" name="group_id" id="group_id" value="1">
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
        $("#data\\[attributes\\]\\[values\\]").prop('disabled', true);

        $(document).on('change', "#data\\[attributes\\]\\[type\\]", function () {
            if ($("#data\\[attributes\\]\\[type\\]").val() == 'list') {
                $("#data\\[attributes\\]\\[values\\]").prop('disabled', false);
            } else {
                $("#data\\[attributes\\]\\[values\\]").prop('disabled', true);
            }
        });

        // Prevent any characters except alphanumeric, dash and underscore
        $("#data\\[attributes\\]\\[name\\]").keydown(function (e){
            var k = e.keyCode || e.which;
            var ok = k >= 65 && k <= 90 || // A-Z
                k >= 96 && k <= 105 || // a-z
                k >= 35 && k <= 40 || // arrows
                k == 9 || //tab
                k == 46 || //del
                k == 8 || // backspaces
                k == 173 || // dash
                k == 109 || // numpad minus
                (e.shiftKey && k == 173) || // underscore
                (!e.shiftKey && k >= 48 && k <= 57); // only 0-9

            if(!ok || (e.ctrlKey && e.altKey)){
                e.preventDefault();
            }
        });

    });
}
</script>
