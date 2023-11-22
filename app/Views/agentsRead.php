<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_field('subnet', $resource->subnet, $dictionary->columns->subnet, $update) ?>
                            <?= read_field('check_minutes', $resource->check_minutes, $dictionary->columns->check_minutes, $update) ?>
                            <?= read_field('weight', $resource->weight, $dictionary->columns->weight, $update) ?>
                            <?= read_select('devices_assigned_to_org', $resource->devices_assigned_to_org, $dictionary->columns->devices_assigned_to_org, $update, __('Assign Devices to Organisation'), $orgs) ?>
                            <?= read_select('devices_assigned_to_location', $resource->devices_assigned_to_location, $dictionary->columns->devices_assigned_to_location, $update, __('Assign Devices to Location'), $included['locations']) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <hr>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="add_inputs" class="form-label"><?= __('If') ?></label>
                                    <?php if ($update) { ?>
                                    <div class="float-end"><button type="button" id="add_inputs" name="add_inputs" class="btn btn-sm btn-success float-end" title="<?= __('Add') ?>"><i class="fa fa-plus" aria-hidden="true"></i></button></div>
                                    <?php } ?>

                                    <div id="inputs" class="input-group">
                                        <?php
                                        $input_count = 0;
                                        foreach ($resource->inputs as $input) {
                                            $input_count += +1; ?>
                                        <div id="inputs_<?= $input_count ?>" class="row col-12" style="padding-top:16px;">
                                            <div class="col-3" style="padding-right:20px;">
                                                <select class="input_table form-select" id="inputs[<?= $input_count ?>][attribute]" name="inputs[<?= $input_count ?>][attribute]" data-row="<?= $input_count ?>" disabled>
                                                    <option value="" <?php if ($input->attribute === '') { echo "selected"; } ?>></option>
                                                    <option value="os_group" <?php if ($input->attribute === 'os_group') { echo "selected"; } ?>><?= __('OS Group') ?></option>
                                                    <option value="ip_address" <?php if ($input->attribute === 'ip_address') { echo "selected"; } ?>><?= __('IP Address') ?></option>
                                                </select>
                                            </div>

                                            <div class="col-3" style="padding-right:20px;">
                                                <select class="form-select" id="inputs[<?= $input_count ?>][operator]" name="inputs[<?= $input_count ?>][operator]" disabled>
                                                    <option value="" <?php if ($input->operator === '') { echo "selected"; } ?>><?= __('') ?></option>
                                                    <option value="eq" <?php if ($input->operator === 'eq') { echo "selected"; } ?>><?= __('equals') ?></option>
                                                    <option value="ne" <?php if ($input->operator === 'ne') { echo "selected"; } ?>><?= __('does not equal') ?></option>
                                                    <option value="gt" <?php if ($input->operator === 'gt') { echo "selected"; } ?>><?= __('greater than') ?></option>
                                                    <option value="ge" <?php if ($input->operator === 'ge') { echo "selected"; } ?>><?= __('greater or equals') ?></option>
                                                    <option value="lt" <?php if ($input->operator === 'lt') { echo "selected"; } ?>><?= __('less than') ?></option>
                                                    <option value="le" <?php if ($input->operator === 'le') { echo "selected"; } ?>><?= __('less or equals') ?></option>
                                                    <option value="st" <?php if ($input->operator === 'st') { echo "selected"; } ?>><?= __('starts with') ?></option>
                                                    <option value="li" <?php if ($input->operator === 'li') { echo "selected"; } ?>><?= __('contains') ?></option>
                                                    <option value="nl" <?php if ($input->operator === 'nl') { echo "selected"; } ?>><?= __('not like') ?></option>
                                                    <option value="in" <?php if ($input->operator === 'in') { echo "selected"; } ?>><?= __('in') ?></option>
                                                    <option value="ni" <?php if ($input->operator === 'ni') { echo "selected"; } ?>><?= __('not in') ?></option>
                                                    <option value="re" <?php if ($input->operator === 're') { echo "selected"; } ?>><?= __('regex') ?></option>
                                                </select>
                                            </div>

                                            <div class="col-3" style="padding-right:20px;">
                                                <input type="text" class="form-control" id="inputs[<?= $input_count ?>][value]" name="inputs[<?= $input_count ?>][value]" value="<?= $input->value ?>" disabled>
                                            </div>

                                            <?php if ($update) { ?>
                                            <div class="col-3 text-center">
                                                <button type="button" data-delete="#inputs_<?= $input_count ?>" data-name="<?= @$input->{'attribute'} ?>.<?= @$input->{'condition'} ?>" class="inputDelete btn btn-sm btn-danger" title="<?= __('Delete') ?>">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>

                                                <button style="display:none;" type="button" id="inputs_cancel_<?= $input_count ?>" data-row="<?= $input_count ?>" class="cancel_input btn btn-sm btn-danger" title="<?= __('Cancel') ?>">
                                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                                </button>

                                                <button type="button" data-action="edit" id="inputs_edit_<?= $input_count ?>" data-row="<?= $input_count ?>" class="edit_input btn btn-sm btn-default" title="<?= __('Edit') ?>">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>

                                                <button style="display:none;" type="button" id="inputs_submit_<?= $input_count ?>" data-row="<?= $input_count ?>" class="submit_input btn btn-sm btn-success" title="<?= __('Submit') ?>">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <hr>
                                </div>
                            </div>

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="add_outputs" class="form-label"><?= __('Then') ?></label>
                                    <?php if ($update) { ?>
                                    <div class="float-end">
                                        <button type="button" id="add_outputs" name="add_outputs" class="btn btn-sm btn-success float-end" title="<?= __('Add') ?>"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    <?php } ?>

                                    <div id="outputs" class="input-group">
                                        <?php
                                        $output_count = 0;
                                        foreach ($resource->outputs as $output) {
                                            $output_count += 1; ?>
                                        <div id="outputs_<?= $output_count ?>" class="row col-12" style="padding-top:16px;">
                                            <div class="col-3" style="padding-right:20px;">
                                                <select class="form-control" id="outputs[<?= $output_count ?>][action]" name="outputs[<?= $output_count ?>][action]" disabled>
                                                    <option value="audit"><?= __('Audit') ?></option>
                                                    <option value="command"><?= __('Command') ?></option>
                                                    <option value="download"><?= __('Download') ?></option>
                                                    <option value="uninstall"><?= __('Uninstall') ?></option>
                                                </select>
                                            </div>

                                            <div class="col-3" style="padding-right:20px;">
                                                <?php if (!empty($output->value)) { ?>
                                                <input type="text" class="form-control" id="outputs[<?= $output_count ?>][value]" name="outputs[<?= $output_count ?>][value]" value="<?= $output->value ?>" disabled>
                                                <?php } ?>
                                            </div>

                                            <div class="col-3"></div>

                                            <div class="col-3 text-center">
                                                <?php if ($update) { ?>
                                                <button type="button" data-delete="#outputs_<?= $output_count ?>" data-name="<?= $output->{'action'} ?>" class="outputDelete btn btn-sm btn-danger" title="<?= __('Delete') ?>">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>

                                                <button style="display:none;" type="button" id="outputs_cancel_<?= $output_count ?>" data-row="<?= $output_count ?>" class="cancel_output btn btn-sm btn-danger" title="<?= __('Cancel') ?>">
                                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                                </button>

                                                <button type="button" data-action="edit" id="outputs_edit_<?= $output_count ?>" data-row="<?= $output_count ?>" class="edit_output btn btn-sm btn-default" title="<?= __('Edit') ?>">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                </button>

                                                <button style="display:none;" type="button" id="outputs_submit_<?= $output_count ?>" data-row="<?= $output_count ?>" class="submit_output btn btn-sm btn-success" title="<?= __('Submit') ?>">
                                                    <i class="fa fa-check" aria-hidden="true"></i>
                                                </button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br>
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($dictionary->columns as $key => $value) { ?>
                                    <code><?= $key ?>: </code><?= @$value ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        $("#devices_assigned_to_org").append($('<option>', { value: '', text: ''}));
        $("#devices_assigned_to_location").append($('<option>', { value: '', text: ''}));
        $("#devices_assigned_to_org").val("<?= $resource->devices_assigned_to_org ?>");
        $("#devices_assigned_to_location").val("<?= $resource->devices_assigned_to_location ?>");

        var input_count = <?= $input_count ?>;
        var output_count = <?= $output_count ?>;


        $(document).on('click', '.inputDelete', function (e) {
            if (confirm("<?= __('Are you sure you want to delete this input item?') ?>") !== true) {
                return;
            }
            var input_row = $(this).attr("data-delete");
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = collection;
            data["data"]["attributes"] = {};
            $($(this).attr("data-delete")).remove();
            var json = new Array();
            for (var i = 0; i <= output_count; i++) {
                if ($("#outputs\\[" + i + "\\]\\[attribute\\]").val()) {
                    jsonData = {};
                    jsonData.attribute = $("#inputs\\[" + i + "\\]\\[attribute\\]").val();
                    jsonData.operator = $("#inputs\\[" + i + "\\]\\[operator\\]").val();
                    jsonData.value = $("#inputs\\[" + i + "\\]\\[value\\]").val();
                    json.push(jsonData);
                }
            }
            // console.log(json);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = "agents";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["inputs"] = JSON.stringify(json);
            $.ajax({
                type: "PATCH",
                url: "<?= url_to('agentsRead', $resource->id) ?>",
                contentType: "application/json",
                data: {data : JSON.stringify(data)},
                success: function (data) {
                    // alert( 'success' );
                    location.reload();
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });

        $(document).on('click', '.outputDelete', function (e) {
            if (confirm("<?= __('Are you sure you want to delete this output item?') ?>") !== true) {
                return;
            }
            var output_row = $(this).attr("data-delete");
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = collection;
            data["data"]["attributes"] = {};
            $($(this).attr("data-delete")).remove();
            var json = new Array();
            for (var i = 0; i <= output_count; i++) {
                if ($("#outputs\\[" + i + "\\]\\[action\\]").val()) {
                    jsonData = {};
                    jsonData.action = $("#outputs\\[" + i + "\\]\\[action\\]").val();
                    jsonData.value = $("#outputs\\[" + i + "\\]\\[value\\]").val();
                    json.push(jsonData);
                }
            }
            // console.log(json);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = "agents";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["outputs"] = JSON.stringify(json);
            $.ajax({
                type: "PATCH",
                url: "<?= url_to('agentsRead', $resource->id) ?>",
                contentType: "application/json",
                data: {data : JSON.stringify(data)},
                success: function (data) {
                    // alert( 'success' );
                    location.reload();
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });

        $(document).on('click', '.edit_input', function (e) {
            var input_row = $(this).attr("data-row");
            $("#inputs\\[" + input_row + "\\]\\[attribute\\]").attr("disabled", false);
            $("#inputs\\[" + input_row + "\\]\\[operator\\]").attr("disabled", false);
            $("#inputs\\[" + input_row + "\\]\\[value\\]").attr("disabled", false);
            $(this).hide();
            $("#inputs_submit_"+input_row).show();
            $("#inputs_cancel_"+input_row).show();
            $("#inputs_delete_"+input_row).hide();
        });

        $(document).on('click', '.submit_input', function (e) {
            var input_row = $(this).attr("data-row");
            $("#inputs\\[" + input_row + "\\]\\[attribute\\]").attr("disabled", true);
            $("#inputs\\[" + input_row + "\\]\\[operator\\]").attr("disabled", true);
            $("#inputs\\[" + input_row + "\\]\\[value\\]").attr("disabled", true);
            $(this).hide();
            $("#inputs_edit_"+input_row).show();
            $("#inputs_cancel_"+input_row).hide();
            $("#inputs_delete_"+input_row).show();
            var json = new Array();
            for (var i = 0; i <= input_count; i++) {
                if ($("#inputs\\[" + i + "\\]\\[table\\]").val()) {
                    jsonData = {};
                    jsonData.attribute = $("#inputs\\[" + i + "\\]\\[attribute\\]").val();
                    jsonData.operator = $("#inputs\\[" + i + "\\]\\[operator\\]").val();
                    jsonData.value = $("#inputs\\[" + i + "\\]\\[value\\]").val();
                    json.push(jsonData);
                }
            }
            // console.log(json);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = "agents";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["inputs"] = JSON.stringify(json);
            $.ajax({
                type: "PATCH",
                url: "<?= url_to('agentsRead', $resource->id) ?>",
                contentType: "application/json",
                data: {data : JSON.stringify(data)},
                success: function (data) {
                    // alert( 'success' );
                    location.reload();
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });

        $(document).on('click', '.cancel_input', function (e) {
            var input_row = $(this).attr("data-row");
            $("#inputs\\[" + input_row + "\\]\\[attribute\\]").attr("disabled", true);
            $("#inputs\\[" + input_row + "\\]\\[operator\\]").attr("disabled", true);
            $("#inputs\\[" + input_row + "\\]\\[value\\]").attr("disabled", true);
            $(this).hide();
            $("#inputs_edit_"+input_row).show();
            $("#inputs_submit_"+input_row).hide();
            $("#inputs_delete_"+input_row).show();
        });

        $(document).on('click', '.del_input', function (e) {
            $($(this).attr("data-delete")).remove();
        });

        $(document).on('click', '.edit_output', function (e) {
            var output_row = $(this).attr("data-row");
            $("#outputs\\[" + output_row + "\\]\\[action\\]").attr("disabled", false);
            $("#outputs\\[" + output_row + "\\]\\[value\\]").attr("disabled", false);
            $(this).hide();
            $("#outputs_submit_"+output_row).show();
            $("#outputs_cancel_"+output_row).show();
            $("#outputs_delete_"+output_row).hide();
        });

        $(document).on('click', '.submit_output', function (e) {
            var output_row = $(this).attr("data-row");
            $("#outputs\\[" + output_row + "\\]\\[action\\]").attr("disabled", true);
            $("#outputs\\[" + output_row + "\\]\\[value\\]").attr("disabled", true);
            $(this).hide();
            $("#outputs_edit_"+output_row).show();
            $("#outputs_cancel_"+output_row).hide();
            $("#outputs_delete_"+output_row).show();
            var json = new Array();
            for (var i = 0; i <= output_count; i++) {
                if ($("#outputs\\[" + i + "\\]\\[table\\]").val()) {
                    jsonData = {};
                    jsonData.action = $("#outputs\\[" + i + "\\]\\[action\\]").val();
                    jsonData.value = $("#outputs\\[" + i + "\\]\\[value\\]").val();
                    json.push(jsonData);
                }
            }
            // console.log(json);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = id;
            data["data"]["type"] = "agents";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["outputs"] = JSON.stringify(json);
            $.ajax({
                type: "PATCH",
                url: "<?= url_to('agentsRead', $resource->id) ?>",
                contentType: "application/json",
                data: {data : JSON.stringify(data)},
                success: function (data) {
                    // alert( 'success' );
                    location.reload();
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });

        $(document).on('click', '.cancel_output', function (e) {
            var output_row = $(this).attr("data-row");
            $("#outputs\\[" + output_row + "\\]\\[action\\]").attr("disabled", true);
            $("#outputs\\[" + output_row + "\\]\\[value\\]").attr("disabled", true);
            $(this).hide();
            $("#outputs_edit_"+output_row).show();
            $("#outputs_submit_"+output_row).hide();
            $("#outputs_delete_"+output_row).show();
        });

        $(document).on('click', '.del_output', function (e) {
            $($(this).attr("data-delete")).remove();
        });

        $('#add_inputs').click(function (e) {
            input_count += 1;
            var content = "             <div id=\"inputs_" + input_count + "\" class=\"row col-12\" style=\"padding-top:16px;\">\
                                            <div class=\"col-3\" style=\"padding-right:20px;\">\
                                                <select class=\"input_table form-select\" id=\"inputs[" + input_count + "][attribute]\" name=\"inputs[" + input_count + "][attribute]\" data-row=\"" + input_count + "\">\
                                                    <option value=\"\"></option>\
                                                    <option value=\"os_group\"><?= __('OS Group') ?></option>\
                                                    <option value=\"ip_address\"><?= __('IP Address') ?></option>\
                                                </select>\
                                            </div>\
                                            <div class=\"col-3\" style=\"padding-right:20px;\">\
                                                <select class=\"form-select\" id=\"inputs[" + input_count + "][operator]\" name=\"inputs[" + input_count + "][operator]\">\
                                                    <option value=\"eq\"><?= __('equals') ?></option>\
                                                    <option value=\"ne\"><?= __('does not equal') ?></option>\
                                                    <option value=\"gt\"><?= __('greater than') ?></option>\
                                                    <option value=\"ge\"><?= __('greater or equals') ?></option>\
                                                    <option value=\"lt\"><?= __('less than') ?></option>\
                                                    <option value=\"le\"><?= __('less or equals') ?></option>\
                                                    <option value=\"st\"><?= __('starts with') ?></option>\
                                                    <option value=\"li\"><?= __('contains') ?></option>\
                                                    <option value=\"nl\"><?= __('not like') ?></option>\
                                                    <option value=\"ni\"><?= __('in') ?></option>\
                                                    <option value=\"ni\"><?= __('not in') ?></option>\
                                                    <option value=\"re\"><?= __('regex') ?></option>\
                                                </select>\
                                            </div>\
                                            \
                                            <div class=\"col-3\" style=\"padding-right:20px;\">\
                                                <input type=\"text\" class=\"form-control\" id=\"inputs[" + input_count + "][value]\" name=\"inputs[" + input_count + "][value]\">\
                                            </div>\
                                            \
                                            <div class=\"col-3 text-center\">\
                                                <button type=\"button\" data-delete=\"#inputs_" + input_count + "\" data-row=\"" + input_count + "\" class=\"del_input btn btn-sm btn-danger\" title=\"<?= __('Delete') ?>\">\
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>\
                                                </button>\
                                                <button style=\"display:none;\" type=\"button\" id=\"inputs_cancel_" + input_count + "\" data-row=\"" + input_count + "\" class=\"cancel_input btn btn-sm btn-danger\" title=\"<?= __('Cancel') ?>\">\
                                                    <i class=\"fa fa-remove\" aria-hidden=\"true\"></i>\
                                                </button>\
                                            </div>\
                                        </div>";




            $('#inputs').append(content);
        });


        $('#add_outputs').click(function (e) {
            output_count += 1;

            var content = "             <div id=\"outputs_" + output_count + "\" class=\"row col-12\" style=\"padding-top:16px;\">\
                                            <div class=\"col-3\" style=\"padding-right:20px;\">\
                                                <select class=\"form-control\" id=\"outputs_" + output_count + "\"][action]\" name=\"outputs_" + output_count + "\"][action]\" >\
                                                    <option value=\"audit\"><?= __('Audit') ?></option>\
                                                    <option value=\"command\"><?= __('Command') ?></option>\
                                                    <option value=\"download\"><?= __('Download') ?></option>\
                                                    <option value=\"uninstall\"><?= __('Uninstall') ?></option>\
                                                </select>\
                                            </div>\
\
                                            <div class=\"col-3\" style=\"padding-right:20px;\">\
                                                <input type=\"text\" class=\"form-control\" id=\"outputs_" + output_count + "\"][value]\" name=\"outputs_" + output_count + "\"][value]\">\
                                            </div>\
\
                                            <div class=\"col-3\"></div>\
\
                                            <div class=\"col-3 text-center\">\
                                                <button type=\"button\" data-delete=\"#outputs_" + output_count + "\" data-row=\"" + output_count + "\" class=\"del_output btn btn-sm btn-danger\" title=\"<?= __('Delete') ?>\">\
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>\
                                                </button>\
\
                                                <button style=\"display:none;\" type=\"button\" id=\"outputs_cancel_" + output_count + "\" data-row=\"" + output_count + "\" class=\"cancel_output btn btn-sm btn-danger\" title=\"<?= __('Cancel') ?>\">\
                                                    <i class=\"fa fa-remove\" aria-hidden=\"true\"></i>\
                                                </button>\
\
                                                <button style=\"display:none;\" type=\"button\" data-action=\"edit\" id=\"outputs_edit_" +  output_count + "\" data-row=\"" + output_count + "\" class=\"edit_output btn btn-sm\" title=\"<?= __('Edit') ?>\">\
                                                    <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>\
                                                </button>\
\
                                                <button type=\"button\" id=\"outputs_submit_" + output_count + "\" data-row=\"" + output_count + "\" class=\"submit_output btn btn-sm btn-success\" title=\"<?= __('Submit') ?>\">\
                                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>\
                                                </button>\
                                            </div>\
                                        </div>";

            $('#outputs').append(content);
        });
    });
}
</script>