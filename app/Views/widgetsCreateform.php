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
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="data[attributes][type]"><?= __('Widget Type'); ?> <span style="color: #dc3545;">*</span></label>
                                        <select class="form-select" name="data[attributes][type]" id="data[attributes][type]" required>
                                            <option value="" selected><?= __('Select') ?></option>
                                            <option value="line"><?= __('Line Graph') ?></option>
                                            <option value="pie"><?= __('Pie Chart') ?></option>
                                            <option value="traffic"><?= __('Traffic Light') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?= create_text_field('data[attributes][dataset_title]', __('Title'), $dictionary->attributes->create, 'Your Title') ?>

                                <div class="collapse" id="group_by_details">
                                    <?= create_text_field('data[attributes][group_by]', __('Group By'), $dictionary->attributes->create) ?>
                                </div>

                                <div class="collapse" id="primary_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][primary]" class="form-label"><?= __('Primary') ?></label><br>
                                            <select class="form-select" name="data[attributes][primary]" id="data[attributes][primary]">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="secondary_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="data[attributes][secondary]" class="form-label"><?= __('Secondary') ?></label><br>
                                            <select class="form-select" name="data[attributes][secondary]" id="data[attributes][secondary]">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="ternary_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label for="data[attributes][ternary]" class="form-label"><?= __('Ternary') ?></label><br>
                                            <select class="form-select" name="data[attributes][ternary]" id="data[attributes][ternary]">
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="collapse" id="where_details">
                                    <?= create_text_field('data[attributes][where]', __('Where'), $dictionary->attributes->create) ?>
                                </div>

                                <div class="collapse" id="limit_details">
                                    <?= create_text_field('data[attributes][limit]', __('Limit'), $dictionary->attributes->create, '', 'number') ?>
                                </div>

                                <div class="collapse" id="sql_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8">
                                            <label class="form-label" for="data[attributes][sql]"><?= __('SQL (Advanced)'); ?></label>
                                            <textarea class="form-control" rows="6" name="data[attributes][sql]" id="data[attributes][sql]"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="link_details">
                                    <?= create_text_field('data[attributes][link]', __('Link (Advanced)'), $dictionary->attributes->create) ?>
                                </div>

                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary" aria-label="<?= __('Submit') ?>"><?= __('Submit') ?></button>
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
        $('#data\\[attributes\\]\\[type\\]').change(function() {
            var $type = $(this).val();
            if ($type == "pie") {
                $("label[for = data\\[attributes\\]\\[primary\\]]").text("Column");
                $('#data\\[attributes\\]\\[primary\\]').empty();
                $('#data\\[attributes\\]\\[primary\\]').append($('<option>', { value: "", text: "<?= __('Choose') ?>" }));
                <?php foreach ($dictionary->valid_columns as $column) { ?>
                $('#data\\[attributes\\]\\[primary\\]').append($('<option>', {
                    value: "<?= $column ?>",
                    text: "<?= $column ?>"
                }));
                <?php } ?>
                $('#primary_details').show();

                $('#secondary_details').hide();
                $('#ternary_details').hide();
                $('#group_by_details').hide();

                $("label[for = data\\[attributes\\]\\[where\\]]").text("Where");
                $("label[for = data\\[attributes\\]\\[where\\]]").show();
                $('#where_details').show();

                $("label[for = data\\[attributes\\]\\[limit\\]]").text("Limit");
                $("label[for = data\\[attributes\\]\\[limit\\]]").show();
                $('#limit_details').show();

                $('#sql_details').show();
                $('#link_details').show();

            } else if ($type == "line") {
                $("label[for = data\\[attributes\\]\\[primary\\]]").text("Table");
                $('#data\\[attributes\\]\\[primary\\]').empty();
                $('#data\\[attributes\\]\\[primary\\]').append($('<option>', { value: "", text: "<?= __('Choose') ?>" }));
                <?php foreach ($dictionary->valid_tables as $column) { ?>
                $('#data\\[attributes\\]\\[primary\\]').append($('<option>', {
                    value: "<?= $column ?>",
                    text: "<?= $column ?>"
                }));
                <?php } ?>
                $('#primary_details').show();

                $("label[for = data\\[attributes\\]\\[secondary\\]]").text("Event");
                $('#data\\[attributes\\]\\[secondary\\]').empty();
                $('#data\\[attributes\\]\\[secondary\\]').append($('<option>', { value: "", text: "<?= __('Choose') ?>" }));
                $('#data\\[attributes\\]\\[secondary\\]').append($('<option>', { value: "create", text: "<?= __('Create') ?>" }));
                $('#data\\[attributes\\]\\[secondary\\]').append($('<option>', { value: "delete", text: "<?= __('Delete') ?>" }));
                $('#secondary_details').show();

                $('#ternary_details').hide();
                $('#group_by_details').hide();

                $("label[for = data\\[attributes\\]\\[where\\]]").text("Where");
                $('#where_details').show();

                $("label[for = data\\[attributes\\]\\[limit\\]]").text("Days");
                $('#limit_details').show();

                $('#sql_details').show();
                $('#link_details').show();

            } else if ($type == "traffic") {
                $("label[for = data\\[attributes\\]\\[primary\\]]").text("Red Query");
                $('#data\\[attributes\\]\\[primary\\]').empty();
                $('#data\\[attributes\\]\\[primary\\]').append($('<option>', { value: "", text: "<?= __('Choose') ?>" }));
                <?php foreach ($included['queries'] as $query) {
                    echo "\$('#data\\\\[attributes\\\\]\\\\[primary\\\\]').append('<option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>');\n";
                } ?>
                $('#primary_details').show();

                $("label[for = data\\[attributes\\]\\[secondary\\]]").text("Yellow Query");
                $('#data\\[attributes\\]\\[secondary\\]').empty();
                $('#data\\[attributes\\]\\[secondary\\]').append($('<option>', { value: "", text: "<?= __('Choose') ?>" }));
                <?php foreach ($included['queries'] as $query) {
                    echo "\$('#data\\\\[attributes\\\\]\\\\[secondary\\\\]').append('<option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>');\n";
                } ?>
                $('#secondary_details').show();

                $("label[for = data\\[attributes\\]\\[ternary\\]]").text("Green Query");
                $('#data\\[attributes\\]\\[ternary\\]').empty();
                $('#data\\[attributes\\]\\[ternary\\]').append($('<option>', { value: "", text: "<?= __('Choose') ?>" }));
                <?php foreach ($included['queries'] as $query) {
                    echo "\$('#data\\\\[attributes\\\\]\\\\[ternary\\\\]').append('<option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>');\n";
                } ?>
                $('#ternary_details').show();

                $("label[for = data\\[attributes\\]\\[group_by\\]]").text("Secondary Text");
                $('#group_by_details').show();

                $("label[for = data\\[attributes\\]\\[where\\]]").text("Icon");
                $('#where_details').show();

                $('#limit_details').hide();
                $('#sql_details').hide();
                $('#link_details').hide();
            }
        });
    });
}
</script>
