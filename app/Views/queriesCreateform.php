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
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                <?= create_text_field('data[attributes][description]', __('Description'), $dictionary->attributes->create) ?>
                                <?= create_select('data[attributes][menu_display]', __('Menu Display'), '', $dictionary->attributes->create) ?>
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][menu_category]"><?= __('Menu Category'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][menu_category]" id="data[attributes][menu_category]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <?php foreach ($included['attributes'] as $category) { ?>
                                                <option value="<?= $category->attributes->value ?>"><?= __($category->attributes->name); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <?php if (!empty($config->feature_queries_advanced) and $config->feature_queries_advanced === 'y') { ?>
                                    <?= create_select('data[attributes][advanced]', __('Advanced'), '', $dictionary->attributes->create) ?>
                                <?php } ?>
                                <!--
                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][sql]"><?= __('SQL'); ?> <span style="color: #dc3545;">*</span></label>
                                        <textarea class="form-control" rows="10" name="data[attributes][sql]" id="data[attributes][sql]"></textarea>
                                    </div>
                                </div>
                                <br>
                                -->


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-4">
                                        <label class="form-label" for="tables"><?= __('Tables'); ?></label>
                                        <select class="form-select" multiple aria-label="tables" id="tables" name="tables" size="10">
                                            <option selected>devices</option>
                                            <option value="">------</option>
                                            <?php foreach ($included['tables'] as $table => $fields) { if ($table !== 'devices') { ?>
                                                <option value="<?= $table ?>"><?= $table ?></option>
                                            <?php } } ?>
                                        </select>
                                    </div>
                                    <!--
                                    <div class="col-4">
                                        <label class="form-label" for="attributes_devices"><?= __('Devices'); ?></label>
                                        <select class="form-select" id="attributes_devices" name="attributes_devices" multiple aria-label="attributes_devices" size="10">
                                        </select>
                                    </div>
                                    <div style="display:none;" class="col-4">
                                        <label class="form-label" for="attributes_bios"><?= __('Bios'); ?></label>
                                        <select class="form-select" id="attributes_bios" name="attributes_bios" multiple aria-label="attributes_bios" size="10">
                                        </select>
                                    </div>
                                    -->
                                    <?php foreach ($included['tables'] as $table => $fields) { ?>
                                    <div style="display:none;" class="col-4" id="attributes_block_<?= $table ?>">
                                        <label class="form-label" for="attributes_<?= $table ?>"><?= $table ?></label>
                                        <select class="form-select" id="attributes_<?= $table ?>" name="attributes_<?= $table ?>" multiple aria-label="attributes_<?= $table ?>" size="10">
                                        <?php foreach ($fields as $field) { ?>
                                            <option value="<?= $table . '.' . $field ?>"><?= $field ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    <?php } ?>
                                </div>
                                <br>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="select"><?= __('SELECT'); ?></label>
                                        <textarea class="form-control" rows="4" name="select" id="select"></textarea>
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
                                <?php $fields = array('name', 'org_id', 'description', 'menu_display', 'menu_category', 'sql'); ?>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    if (in_array($key, $fields)) {
                                        echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <pre><?= print_r($included['tables']) ?>
        </pre>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[menu_display\\]").val("y");
        $("#data\\[attributes\\]\\[advanced\\]").val("n");
        $('#attributes_block_devices').css("display", "block");
        $('#tables').change(function(){
            $("[id^=attributes_block_]").css("display", "none");
            $("#attributes_block_" + $("#tables").val()).css("display", "block");
            console.log('Displaying attributes_block_' + $("#tables").val());
        });
        $("[id^=attributes_]").change(function(){
            var $field = $(this).val();
            if ($field != "") {
                console.log("Field is: " + $field);
                $select = $("#select").val();
                if ($select != "") {
                    $newSelect = $select + ',' + $field;
                } else {
                    $newSelect = $field;
                }
                $("#select").val($newSelect);
            }
        });
    });
}
</script>
