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
                                <?= create_select('data[attributes][sidebar]', __('Sidebar'), [], $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <label for="data[attributes][options][layout]" class="form-label"><?= __('Layout') ?></label><br>
                                        <select class="form-select" name="data[attributes][options][layout]" id="data[attributes][options][layout]">
                                            <option value="3x2">3 x 2</option>
                                            <option value="4x2">4 x 2</option>
                                            <option value="4x3">4 x 3</option>
                                            <option value="4x4">4 x 4</option>
                                        </select>
                                    </div>
                                </div>

                                <?php for ($i = 1; $i <= 16; $i++) { ?>
                                    <?= create_select('data[attributes][options][widgets][' . $i . '][widget_id]', __('Widget # ') . $i, $included['widgets'], $dictionary->attributes->create) ?>
                                <?php } ?>


                                <?php for ($i = 1; $i <= 16; $i++) { ?>
                                <input type="hidden" name="data[attributes][options][widgets][<?= $i ?>][size]" id="data[attributes][options][widgets][<?= $i ?>][size]" value="1" />
                                <input type="hidden" name="data[attributes][options][widgets][<?= $i ?>][position]" id="data[attributes][options][widgets][<?= $i ?>][position]" value="<?= $i ?>" />
                                <?php } ?>
                                <input type="hidden" id="data[attributes][options][widget_count]" name="data[attributes][options][widget_count]" value="" />

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
    });
}
</script>
