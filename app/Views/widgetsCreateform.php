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
                                <?= create_text_field('data[attributes][dataset_title]', __('Title'), $dictionary->attributes->create, 'Your Title') ?>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Widget Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value=""><?= __('Choose') ?></option>
                                            <option value="pie"><?= __('Pie Chart') ?></option>
                                            <option value="line"><?= __('Line Graph') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="collapse show" id="basic_details" name="basic_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][primary]" class="form-label"><?= __('Column') ?> <span style="color: #dc3545;">*</span></label><br />
                                            <select class="form-select" name="data[attributes][primary]" id="data[attributes][primary]">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="collapse" id="secondary_details">
                                        <div class="row" style="padding-top:16px;">
                                            <div class="offset-2 col-8" style="position:relative;">
                                                <label for="data[attributes][secondary]" class="form-label"><?= __('Event') ?> <span style="color: #dc3545;">*</span></label><br />
                                                <select class="form-select" name="data[attributes][secondary]" id="data[attributes][secondary]">
                                                    <option value="">Select</option>
                                                    <option value="create">Create</option>
                                                    <option value="delete">Delete</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?= create_text_field('data[attributes][where]', __('Where'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][limit]', __('Limit'), $dictionary->attributes->create, '', 'number') ?>
                                </div>


                                <div class="collapse" id="advanced">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8">
                                            <label class="form-label" for="data[attributes][sql]"><?= __('SQL'); ?> <span style="color: #dc3545;">*</span></label>
                                            <textarea class="form-control" rows="10" name="data[attributes][sql]" id="data[attributes][sql]"></textarea>
                                        </div>
                                    </div>
                                    <?= create_text_field('data[attributes][link]', __('Link'), $dictionary->attributes->create) ?>
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
        $('#data\\[attributes\\]\\[type\\]').change(function() {
            var $type = $(this).val();
            if ($type == "pie") {
                $('#line_details').collapse("hide");
                $("#pie_details").collapse("show");
                $('#data\\[attributes\\]\\[primary\\]').find('option').remove().end().append('<option value=""><?= __('Choose') ?></option>').val('');
                <?php foreach ($dictionary->valid_columns as $column) { ?>
                $('#data\\[attributes\\]\\[primary\\]').append($('<option>', {
                    value: "<?= $column ?>",
                    text: "<?= $column ?>"
                }));
                $("#label_column").text("Column");
                $('#secondary_details').collapse("hide");
                $("#label_limit").text("Limit");
                <?php } ?>
            } else {
                $('#pie_details').collapse("hide");
                $("#line_details").collapse("show");
                $('#data\\[attributes\\]\\[primary\\]').find('option').remove().end().append('<option value=""><?= __('Choose') ?></option>').val('');
                <?php foreach ($dictionary->valid_tables as $column) { ?>
                $('#data\\[attributes\\]\\[primary\\]').append($('<option>', {
                    value: "<?= $column ?>",
                    text: "<?= $column ?>"
                }));
                <?php } ?>
                $("#label_column").text("Table");
                $('#secondary_details').collapse("show");
                $("#label_limit").text("Days");
            }
        });

        $('#advanced_button').click(function() {
            $('#basic_details').toggle();
        });

        $('#data\\[attributes\\]\\[primary\\]').append($('<option>', {
            value: "",
            text: "<?= __('Choose') ?>"
        }));
        <?php foreach ($dictionary->valid_columns as $column) { ?>
        $('#data\\[attributes\\]\\[primary\\]').append($('<option>', {
            value: "<?= $column ?>",
            text: "<?= $column ?>"
        }));
        <?php } ?>

        $('#advanced').on('hidden.bs.collapse', function () {
            $('#advanced_button').html('<?= __('Advanced') ?>');
        });

        $('#advanced').on('shown.bs.collapse', function () {
            $("#advanced_button").html('<?= __('Basic') ?>');
        });
    });
}
</script>
