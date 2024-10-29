<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
$tooltip = '<a href="#" style="color: #16325c;" class="float-end" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="' . __('Please note that the select box will override the text input box.') . '"><span class="fa-regular fa-circle-question"></span></a><br>';
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
                                <?= create_text_field('data[attributes][ru_height]', __('Height in RU'), $dictionary->attributes->create, '', 'number') ?>
                                <?= create_select('data[attributes][location_id]', __('Location'), $included['locations'], $dictionary->attributes->create) ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][building]" class="form-label"><?= __('Building') ?></label>&nbsp;<span style="color: #dc3545;">*</span>&nbsp;
                                        <?= $tooltip ?>
                                        <div class="input-group">
                                            <input class="form-control myBuilding" type="text" id="data[attributes][building]" name="data[attributes][building]" placeholder="<?= __('New Building Name') ?>">
                                            <span style="padding-left:10px; padding-right:10px; padding-top:5px;">or</span>
                                            <select style="color: #6c757d;" class="form-select myBuilding" name="data[attributes][building]" id="data[attributes][building]">
                                                <option value="" disabled selected><?= __('Existing Building') ?></option>
                                                <option value=""></option>
                                            <?php foreach ($included['buildings'] as $building) { ?>
                                                <option value="<?= $building ?>"><?= $building ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][floor]" class="form-label"><?= __('Floor') ?></label>&nbsp;<span style="color: #dc3545;">*</span>&nbsp;
                                        <?= $tooltip ?>
                                        <div class="input-group">
                                            <input class="form-control myFloor" type="text" id="data[attributes][floor]" name="data[attributes][floor]" placeholder="<?= __('New Floor Name') ?>">
                                            <span style="padding-left:10px; padding-right:10px; padding-top:5px;">or</span>
                                            <select style="color: #6c757d;" class="form-select myFloor" name="data[attributes][floor]" id="data[attributes][floor]">
                                                <option value="" disabled selected><?= __('Existing Floor') ?></option>
                                                <option value=""></option>
                                            <?php foreach ($included['floors'] as $floor) { ?>
                                                <option value="<?= $floor ?>"><?= $floor ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][room]" class="form-label"><?= __('Room') ?></label>&nbsp;<span style="color: #dc3545;">*</span>&nbsp;
                                        <?= $tooltip ?>
                                        <div class="input-group">
                                            <input class="form-control myRoom" type="text" id="data[attributes][room]" name="data[attributes][room]" placeholder="<?= __('New Room Name') ?>">
                                            <span style="padding-left:10px; padding-right:10px; padding-top:5px;">or</span>
                                            <select style="color: #6c757d;" class="form-select myRoom" name="data[attributes][room]" id="data[attributes][room]">
                                                <option value="" disabled selected><?= __('Existing Room') ?></option>
                                                <option value=""></option>
                                            <?php foreach ($included['rooms'] as $room) { ?>
                                                <option value="<?= $room ?>"><?= $room ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label for="data[attributes][row]" class="form-label"><?= __('Row') ?></label>&nbsp;<span style="color: #dc3545;">*</span>&nbsp;
                                        <?= $tooltip ?>
                                        <div class="input-group">
                                            <input class="form-control myRow" type="text" id="data[attributes][row]" name="data[attributes][row]" placeholder="<?= __('New Row Name') ?>">
                                            <span style="padding-left:10px; padding-right:10px; padding-top:5px;">or</span>
                                            <select style="color: #6c757d;" class="form-select myRow" name="data[attributes][row]" id="data[attributes][row]">
                                                <option value="" disabled selected><?= __('Existing Row') ?></option>
                                                <option value=""></option>
                                            <?php foreach ($included['rows'] as $row) { ?>
                                                <option value="<?= $row ?>"><?= $row ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <?= create_text_field('data[attributes][row_position]', __('Row Position'), $dictionary->attributes->create, '', 'number') ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                        <button id="advanced_button" name="advanced_button" type="button" class="btn btn-default pull-right" data-bs-toggle="collapse" data-bs-target="#advanced"><?= __('Advanced') ?></button>
                                    </div>
                                </div>

                                <div id="advanced" class="collapse">
                                    <?= create_text_field('data[attributes][purpose]', __('Purpose'), $dictionary->attributes->create, '', '', 'servers') ?>
                                    <?= create_text_field('data[attributes][type]', __('Type'), $dictionary->attributes->create, '', '', 'compute') ?>
                                    <?= create_text_field('data[attributes][manufacturer]', __('Manufacturer'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][model]', __('Model'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][series]', __('Series'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][serial]', __('Serial'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][asset_number]', __('Asset Number'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][bar_code]', __('Bar Code'), $dictionary->attributes->create) ?>
                                    <br>
                                    <?= create_text_field('data[attributes][ru_start]', __('RU Start'), $dictionary->attributes->create, '', '', '1') ?>
                                    <?= create_text_field('data[attributes][pod]', __('POD'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][physical_height]', __('Physical Height'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][physical_width]', __('Physical Width'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][physical_depth]', __('Physical Depth'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][weight_empty]', __('Weight Empty'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][weight_current]', __('Weight Current'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][weight_max]', __('Weight Max'), $dictionary->attributes->create, '', 'number') ?>
                                    <br>
                                    <?= create_text_field('data[attributes][btu_total]', __('BTU Total'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][btu_max]', __('BTU Max'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][power_circuit]', __('Power Circuit'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][power_sockets]', __('Power Sockets'), $dictionary->attributes->create, '', 'number') ?>
                                    <?= create_text_field('data[attributes][circuit_count]', __('Circuit Count'), $dictionary->attributes->create, '', 'number') ?>
                                    <br>
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
    $(document).ready(function() {
        $("#data\\[attributes\\]\\[name\\]").focus();
        $("#data\\[attributes\\]\\[ru_height\\]").val(42);
        $("#data\\[attributes\\]\\[row_position\\]").val(1);
        $("#data\\[attributes\\]\\[physical_height\\]").val(2000);
        $("#data\\[attributes\\]\\[physical_width\\]").val(600);
        $("#data\\[attributes\\]\\[physical_depth\\]").val(1050);


        $(".myBuilding").change(function (e){
            $(".myBuilding").removeClass("is-invalid");
            $(".myBuilding").css("color", "#212529");
        });
        $(".myFloor").change(function (e){
            $(".myFloor").removeClass("is-invalid");
            $(".myFloor").css("color", "#212529");
        });
        $(".myRoom").change(function (e){
            $(".myRoom").removeClass("is-invalid");
            $(".myRoom").css("color", "#212529");
        });
        $(".myRow").change(function (e){
            $(".myRow").removeClass("is-invalid");
            $(".myRow").css("color", "#212529");
        });

        $("form").submit(function(e){
            var valid = false;
            $(".myBuilding").each(function() {
                if ($(this).val() != null && $(this).val() != "") {
                    valid = true;
                    /* console.log($(this).val()); */
                }
            });
            if (!valid) {
                $(".myBuilding").addClass('is-invalid');
                e.preventDefault();
            }

            var valid = false;
            $(".myFloor").each(function() {
                if ($(this).val() != null && $(this).val() != "") {
                    valid = true;
                    /* console.log($(this).val()); */
                }
            });
            if (!valid) {
                $(".myFloor").addClass('is-invalid');
                e.preventDefault();
            }

            var valid = false;
            $(".myRoom").each(function() {
                if ($(this).val() != null && $(this).val() != "") {
                    valid = true;
                    /* console.log($(this).val()); */
                }
            });
            if (!valid) {
                $(".myRoom").addClass('is-invalid');
                e.preventDefault();
            }

            var valid = false;
            $(".myRow").each(function() {
                if ($(this).val() != null && $(this).val() != "") {
                    valid = true;
                    /* console.log($(this).val()); */
                }
            });
            if (!valid) {
                $(".myRow").addClass('is-invalid');
                e.preventDefault();
            }
        });


    });
}
</script>
