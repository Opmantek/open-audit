<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
include 'shared/common_functions.php';
$items = array('line', 'pie', 'status', 'traffic');
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
                                            <option value="status"><?= __('Status') ?></option>
                                            <option value="traffic"><?= __('Traffic Light') ?></option>
                                        </select>
                                    </div>
                                </div>

                                <?php
                                foreach ($dictionary->text_fields as $text_field) {
                                    echo '                                <div class="collapse" id="' . $text_field . '_details">';
                                    echo '                                    ' . create_text_field('data[attributes][' . $text_field . ']', create_column_name($text_field), $dictionary->attributes->create);
                                    echo '                                </div>';
                                }
                                ?>

                                <div class="collapse" id="line_table_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][line_table]" class="form-label"><?= __('Table') ?></label><br>
                                            <select class="form-select" name="data[attributes][line_table]" id="data[attributes][line_table]">
                                                <?php foreach ($dictionary->valid_tables as $table) {
                                                    echo "\n                                                <option value=\"" . $table . "\">" . $table . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="line_event_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][line_event]" class="form-label"><?= __('Event') ?></label><br>
                                            <select class="form-select" name="data[attributes][line_event]" id="data[attributes][line_event]">
                                                <option value="">&nbsp;</option>
                                                <option value="create"><?= __('Create') ?></option>
                                                <option value="delete"><?= __('Delete') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="pie_column_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][pie_column]" class="form-label"><?= __('Column') ?></label><br>
                                            <select class="form-select" name="data[attributes][pie_column]" id="data[attributes][pie_column]">
                                                <?php foreach ($dictionary->valid_columns as $column) {
                                                    echo "\n                                                <option value=\"" . $column . "\">" . $column . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="traffic_primary_query_id_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][traffic_primary_query_id]" class="form-label"><?= __('Primary Query ID') ?></label><br>
                                            <select class="form-select" name="data[attributes][traffic_primary_query_id]" id="data[attributes][traffic_primary_query_id]">
                                                <option value="0">&nbsp;</option>
                                                <?php foreach ($included['queries'] as $query) {
                                                    echo "\n                                                <option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="traffic_secondary_query_id_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][traffic_secondary_query_id]" class="form-label"><?= __('Secondary Query ID') ?></label><br>
                                            <select class="form-select" name="data[attributes][traffic_secondary_query_id]" id="data[attributes][traffic_secondary_query_id]">
                                                <option value="0">&nbsp;</option>
                                                <?php foreach ($included['queries'] as $query) {
                                                    echo "\n                                                <option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="traffic_ternary_query_id_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][traffic_ternary_query_id]" class="form-label"><?= __('Ternary Query ID') ?></label><br>
                                            <select class="form-select" name="data[attributes][traffic_ternary_query_id]" id="data[attributes][traffic_ternary_query_id]">
                                                <option value="0">&nbsp;</option>
                                                <?php foreach ($included['queries'] as $query) {
                                                    echo "\n                                                <option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="status_primary_color_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][status_primary_color]" class="form-label"><?= __('Primary Color') ?></label><br>
                                            <select class="form-select" name="data[attributes][status_primary_color]" id="data[attributes][status_primary_color]">
                                                <option value="">&nbsp;</option>
                                                <?php foreach ($dictionary->colors as $color) {
                                                    echo "\n                                                <option value=\"" . $color . "\">" . __($color) . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="status_secondary_color_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][status_secondary_color]" class="form-label"><?= __('Secondary Color') ?></label><br>
                                            <select class="form-select" name="data[attributes][status_secondary_color]" id="data[attributes][status_secondary_color]">
                                                <option value="">&nbsp;</option>
                                                <?php foreach ($dictionary->colors as $color) {
                                                    echo "\n                                                <option value=\"" . $color . "\">" . __($color) . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="sql_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8">
                                            <label class="form-label" for="data[attributes][sql]"><?= __('SQL'); ?></label>
                                            <textarea class="form-control" rows="6" name="data[attributes][sql]" id="data[attributes][sql]"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="status_secondary_sql_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8">
                                            <label class="form-label" for="data[attributes][status_secondary_sql]"><?= __('Secondary SQL'); ?></label>
                                            <textarea class="form-control" rows="6" name="data[attributes][status_secondary_sql]" id="data[attributes][status_secondary_sql]"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="status_query_id_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][status_query_id]" class="form-label"><?= __('Query ID') ?></label><br>
                                            <select class="form-select" name="data[attributes][status_query_id]" id="data[attributes][status_query_id]">
                                                <option value="0">&nbsp;</option>
                                                <?php foreach ($included['queries'] as $query) {
                                                    echo "\n                                                <option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse" id="status_link_query_id_details">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8" style="position:relative;">
                                            <label id="label_column" for="data[attributes][status_link_query_id]" class="form-label"><?= __('Link Query ID') ?></label><br>
                                            <select class="form-select" name="data[attributes][status_link_query_id]" id="data[attributes][status_link_query_id]">
                                                <option value="0">&nbsp;</option>
                                                <?php foreach ($included['queries'] as $query) {
                                                    echo "\n                                                <option value=\"" . $query->id . "\">" . $query->attributes->name . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
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
                                <?= aboutNotesDiv($meta->collection, $dictionary) ?>
                                <?php
                                    foreach ($items as $item) {
                                        $dict = new stdClass();
                                        $dict->columns = new stdClass();
                                        foreach ($dictionary->{$item . '_fields'} as $field) {
                                            $dict->columns->{$field} = $dictionary->columns->{$field};
                                        }
                                        echo '<div class="collapse" id="' . $item . '_help">';
                                        echo fieldsInfoDiv($dict);
                                        echo '</div>';
                                    }
                                ?>
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
        $("#data\\[attributes\\]\\[line_days\\]").attr('type', 'number');
        $("#data\\[attributes\\]\\[pie_limit\\]").attr('type', 'number');

        $('#data\\[attributes\\]\\[type\\]').change(function() {
            var $type = $(this).val();
            if ($type == "pie") {
                <?php
                foreach ($items as $item) {
                    echo "\$('#" . $item . "_help').hide();\n";
                }
                echo "\$('#pie_help').show();\n";

                foreach ($dictionary->all_fields as $field) {
                    echo "\$('#" . $field . "_details').hide();\n";
                }
                foreach ($dictionary->pie_fields as $field) {
                    echo "\$('#" . $field . "_details').show();\n";
                }
                ?>
            } else if ($type == "line") {
                <?php
                foreach ($items as $item) {
                    echo "\$('#" . $item . "_help').hide();\n";
                }
                echo "\$('#line_help').show();\n";

                foreach ($dictionary->all_fields as $field) {
                    echo "\$('#" . $field . "_details').hide();\n";
                }
                foreach ($dictionary->line_fields as $field) {
                    echo "\$('#" . $field . "_details').show();\n";
                }
                ?>
            } else if ($type == "traffic") {
                <?php
                foreach ($items as $item) {
                    echo "\$('#" . $item . "_help').hide();\n";
                }
                echo "\$('#traffic_help').show();\n";

                foreach ($dictionary->all_fields as $field) {
                    echo "\$('#" . $field . "_details').hide();\n";
                }
                foreach ($dictionary->traffic_fields as $field) {
                    echo "\$('#" . $field . "_details').show();\n";
                }
                ?>
            } else if ($type == "status") {
                <?php
                foreach ($items as $item) {
                    echo "\$('#" . $item . "_help').hide();\n";
                }
                echo "\$('#status_help').show();\n";

                foreach ($dictionary->all_fields as $field) {
                    echo "\$('#" . $field . "_details').hide();\n";
                }
                foreach ($dictionary->status_fields as $field) {
                    echo "\$('#" . $field . "_details').show();\n";
                }
                ?>
            }
        });
    });
}
</script>
