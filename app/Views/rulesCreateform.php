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
                                <?= create_text_field('data[attributes][weight]', __('Weight'), $dictionary->attributes->create) ?>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <div class="card">
                                            <div class="card-header">
                                                <?= __('If') ?>
                                                <button type="button" id="add_inputs" name="add_inputs" class="btn btn-sm btn-success float-end" title="<?= __('Add') ?>"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div id="inputs">
                                                        <div class="row" id="inputs_1">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <select class="input_table form-select" id="data[attributes][inputs][1][table]" name="data[attributes][inputs][1][table]" data-row="1">
                                                                    </select>
                                                                </div>
                                                                <div class="col-3">
                                                                    <select class="form-select" id="data[attributes][inputs][1][attribute]" name="data[attributes][inputs][1][attribute]">
                                                                    </select>
                                                                </div>
                                                                <div class="col-2">
                                                                    <select class="form-select" id="data[attributes][inputs][1][operator]" name="data[attributes][inputs][1][operator]">
                                                                        <option value="eq"><?= __('==') ?></option>
                                                                        <option value="ne"><?= __('!=') ?></option>
                                                                        <option value="gt"><?= __('>') ?></option>
                                                                        <option value="ge"><?= __('>=') ?></option>
                                                                        <option value="lt"><?= __('<') ?></option>
                                                                        <option value="le"><?= __('=<') ?></option>
                                                                        <option value="st"><?= __('starts with') ?></option>
                                                                        <option value="li"><?= __('like') ?></option>
                                                                        <option value="nl"><?= __('not like') ?></option>
                                                                        <option value="in"><?= __('in') ?></option>
                                                                        <option value="ni"><?= __('not in') ?></option>
                                                                        <option value="re"><?= __('regex') ?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-3">
                                                                    <input type="text" class="form-control" id="data[attributes][inputs][1][value]" name="data[attributes][inputs][1][value]" />
                                                                </div>
                                                                <div class="col-1 pull-right">
                                                                    <button type="button" data-row="#inputs_1" class="del_input btn btn-sm btn-danger" title="<?= __('Delete') ?>">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8" style="position:relative;">
                                        <div class="card">
                                            <div class="card-header">
                                                <?= __('Then') ?>
                                                <button type="button" id="add_outputs" name="add_outputs" class="btn btn-sm btn-success float-end" title="<?= __('Add') ?>"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div id="outputs">
                                                        <div class="row" id="outputs_1">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <select class="form-select" id="data[attributes][outputs][1][table]" name="data[attributes][outputs][1][table]">
                                                                        <option value="devices">devices</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-3">
                                                                    <select class="form-select" id="data[attributes][outputs][1][attribute]" name="data[attributes][outputs][1][attribute]">
                                                                    </select>
                                                                </div>
                                                                <div class="col-2">
                                                                    <input type="text" class="form-control" id="data[attributes][outputs][1][value]" name="data[attributes][outputs][1][value]" />
                                                                </div>
                                                                <div class="col-3">
                                                                    <select class="form-select" id="data[attributes][outputs][1][value_type]" name="data[attributes][outputs][1][value_type]">
                                                                        <option value="string"><?= __('String') ?></option>
                                                                        <option value="integer"><?= __('Integer') ?></option>
                                                                        <option value="timestamp"><?= __('Timesatamp') ?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-1 pull-right">
                                                                    <button type="button" data-row="#outputs_1" class="del_output btn btn-sm btn-danger" title="<?= __('Delete') ?>">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        $("#data\\[attributes\\]\\[weight\\]").val(100);

        <?php foreach ($dictionary->attributes->tables as $table) {
            $columns = "columns_" . $table . " = \"";
            foreach ($dictionary->attributes->columns[$table] as $column) {
                $columns = $columns . "<option value=\\\"" . $column . "\\\">" . $column . "</option>";
            }
            $columns = $columns . "\";";
            echo $columns . "\n";
        }

        $tables = "tables = \"";
        foreach ($dictionary->attributes->tables as $table) {
            if ($table === 'devices') {
                $tables = $tables . "<option value=\\\"" . $table . "\\\" selected>" . $table . "</option>";
            } else {
                $tables = $tables . "<option value=\\\"" . $table . "\\\">" . $table . "</option>";
            }
        }
        $tables = $tables . "\";";

        echo $tables;
        ?>

        $("#data\\[attributes\\]\\[inputs\\]\\[1\\]\\[table\\]").append(tables);
        $("#data\\[attributes\\]\\[inputs\\]\\[1\\]\\[attribute\\]").append(columns_devices);
        $("#data\\[attributes\\]\\[outputs\\]\\[1\\]\\[attribute\\]").append(columns_devices);

        var input_count = 1;
        $(document).on('click', '.del_input', function (e) {
            $($(this).attr("data-row")).remove();
        });

        $(document).on('change', '.input_table', function (e) {
            var change = "#data\\[attributes\\]\\[inputs\\]\\[" + $(this).attr("data-row") + "\\]\\[attribute\\]";
            var newtable = "columns_" + $(this).children("option:selected").val();
            $(change).empty();
            $(change).append(eval(newtable));
        });

        var output_count = 1;
        $(document).on('click', '.del_output', function (e) {
            $($(this).attr("data-row")).remove();
        });

        $('#add_inputs').click(function (e) {
            input_count += 1;
            var content = "                                                        <br><div class=\"row\" id=\"inputs_" + input_count + "\">\
                                                                <div class=\"row\">\
                                                                    <div class=\"col-3\">\
                                                                        <select class=\"input_table form-select\" id=\"data[attributes][inputs][" + input_count + "][table]\" name=\"data[attributes][inputs][" + input_count + "][table]\" data-row=\"" + input_count + "\">\
                                                                        </select>\
                                                                    </div>\
                                                                    <div class=\"col-3\">\
                                                                        <select class=\"form-select\" id=\"data[attributes][inputs][" + input_count + "][attribute]\" name=\"data[attributes][inputs][" + input_count + "][attribute]\">\
                                                                        </select>\
                                                                    </div>\
                                                                    <div class=\"col-2\">\
                                                                        <select class=\"form-select\" id=\"data[attributes][inputs][" + input_count + "][operator]\" name=\"data[attributes][inputs][" + input_count + "][operator]\">\
                                                                            <option value=\"eq\"><?= __('==') ?></option>\
                                                                            <option value=\"ne\"><?= __('!=') ?></option>\
                                                                            <option value=\"gt\"><?= __('>') ?></option>\
                                                                            <option value=\"ge\"><?= __('>=') ?></option>\
                                                                            <option value=\"lt\"><?= __('<') ?></option>\
                                                                            <option value=\"le\"><?= __('=<') ?></option>\
                                                                            <option value=\"st\"><?= __('starts with') ?></option>\
                                                                            <option value=\"li\"><?= __('like') ?></option>\
                                                                            <option value=\"nl\"><?= __('not like') ?></option>\
                                                                            <option value=\"in\"><?= __('in') ?></option>\
                                                                            <option value=\"ni\"><?= __('not in') ?></option>\
                                                                        </select>\
                                                                    </div>\
                                                                    <div class=\"col-3\">\
                                                                        <input type=\"text\" class=\"form-control\" id=\"data[attributes][inputs][" + input_count + "][value]\" name=\"data[attributes][inputs][" + input_count + "][value]\" />\
                                                                    </div>\
                                                                    <div class=\"col-1 pull-right\">\
                                                                        <button type=\"button\" data-row=\"#inputs_" + input_count + "\" class=\"del_input btn btn-sm btn-danger\" title=\"<?= __('Delete') ?>\">\
                                                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>\
                                                                        </button>\
                                                                    </div>\
                                                                </div>\
                                                            </div>";




            $('#inputs').append(content);
            $("#data\\[attributes\\]\\[inputs\\]\\[" + input_count + "\\]\\[table\\]").append(tables);
            $("#data\\[attributes\\]\\[inputs\\]\\[" + input_count + "\\]\\[attribute\\]").append(columns_devices);
        });


        $('#add_outputs').click(function (e) {
            output_count += 1;

            var content = "                                                        <br><div class=\"row\" id=\"outputs_" + output_count + "\">\
                                                                <div class=\"row\">\
                                                                    <div class=\"col-3\">\
                                                                        <select class=\"form-select\" id=\"data[attributes][outputs][" + output_count + "][table]\" name=\"data[attributes][outputs][" + output_count + "][table]\">\
                                                                            <option value=\"devices\">devices</option>\
                                                                        </select>\
                                                                    </div>\
                                                                    <div class=\"col-3\">\
                                                                        <select class=\"form-select\" id=\"data[attributes][outputs][" + output_count + "][attribute]\" name=\"data[attributes][outputs][" + output_count + "][attribute]\">\
                                                                        </select>\
                                                                    </div>\
                                                                    <div class=\"col-2\">\
                                                                        <input type=\"text\" class=\"form-control\" id=\"data[attributes][outputs][" + output_count + "][value]\" name=\"data[attributes][outputs][" + output_count + "][value]\" />\
                                                                    </div>\
                                                                    <div class=\"col-3\">\
                                                                        <select class=\"form-select\" id=\"data[attributes][outputs][" + output_count + "][value_type]\" name=\"data[attributes][outputs][" + output_count + "][value_type]\">\
                                                                            <option value=\"string\"><?= __('String') ?></option>\
                                                                            <option value=\"integer\"><?= __('Integer') ?></option>\
                                                                            <option value=\"timestamp\"><?= __('Timesatamp') ?></option>\
                                                                        </select>\
                                                                    </div>\
                                                                    <div class=\"col-1 pull-right\">\
                                                                        <button type=\"button\" data-row=\"#outputs_" + output_count + "\" class=\"del_output btn btn-sm btn-danger\" title=\"<?= __('Delete') ?>\">\
                                                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>\
                                                                        </button>\
                                                                    </div>\
                                                                </div>\
                                                            </div>";

            $('#outputs').append(content);
            $("#data\\[attributes\\]\\[outputs\\]\\[" + output_count + "\\]\\[attribute\\]").append(columns_devices);
        });
    });
}
</script>