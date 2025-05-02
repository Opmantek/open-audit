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
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][org_descendants]"><?= __('Organisation Descendants'); ?></label>
                                        <select class="form-select" name="data[attributes][org_descendants]" id="data[attributes][org_descendants]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="y" selected><?= __('Yes'); ?></option>
                                            <option value="n"><?= __('No'); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <?= create_text_field('data[attributes][purchase_count]', __('Purchase Count'), $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][match_string]', __('Match String'), $dictionary->attributes->create) ?>

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
                                <?= fieldsInfoDiv ($dictionary) ?>
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
