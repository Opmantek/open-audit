<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$style = @$user->toolbar_style;
if ($style === 'icontext') {
    $add_input = '<a id="add_inputs" role="button" class="btn btn-light mb-2" href="#" title="' . __('Add If') . '"><span style="margin-right:6px;" class="fa fa-plus text-success"></span>' . __('Add If') . '</a>';
    $add_output = '<a id="add_outputs" role="button" class="btn btn-light mb-2" href="#" title="' . __('Add Then') . '"><span style="margin-right:6px;" class="fa fa-plus text-success"></span>' . __('Add Then') . '</a>';
} elseif ($style === 'icon') {
    $add_input = '<a id="add_inputs" role="button" class="btn btn-light mb-2" href="#" title="' . __('Add If') . '"><span style="margin-right:6px;" class="fa fa-plus text-success"></span></a>';
    $add_output = '<a id="add_outputs" role="button" class="btn btn-light mb-2" href="#" title="' . __('Add Then') . '"><span style="margin-right:6px;" class="fa fa-plus text-success"></span></a>';
} else {
    $add_input = '<a id="add_inputs" role="button" class="btn btn-light mb-2" href="#" title="' . __('Add If') . '">' . __('Add If') . '</a>';
    $add_output = '<a id="add_outputs" role="button" class="btn btn-light mb-2" href="#" title="' . __('Add Then') . '">>' . __('Add Then') . '</a>';
}
$input_count = 0;
$output_count = 0;
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-4">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Organisation'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update) ?>
                            <?= read_field('weight', $resource->weight, $dictionary->columns->weight, $update) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>

                        <div class="col-4">
                            <div class="col-12 text-center">
                                <h3><?= __('IF') ?></h3>
                            </div>
                            <?= read_field('test_minutes', $resource->test_minutes, $dictionary->columns->test_minutes, $update, __('Minutes since last audit are greater than')) ?>
                            <?= read_field('test_subnet', $resource->test_subnet, $dictionary->columns->test_subnet, $update, __('Device is in the Subnet')) ?>
                            <?= read_field('test_os', $resource->test_os, $dictionary->columns->test_os, $update, __('Operating System Family Contains')) ?>

                            <div class="col-12 text-center">
                                <br>
                                <h3><?= __('Then') ?></h3>
                            </div>
                            <?php if (!empty($config->feature_agents_advanced) and $config->feature_agents_advanced === 'y') { ?>
                                <?= read_field('action_download', $resource->action_download, $dictionary->columns->action_download, $update, __('Download a file from URL')) ?>
                                <?= read_field('action_command', html_entity_decode($resource->action_command), $dictionary->columns->action_command, $update, __('Run this Command')) ?>
                            <?php } ?>
                            <?= read_select('action_devices_assigned_to_location', $resource->action_devices_assigned_to_location, $dictionary->columns->action_devices_assigned_to_location, $update, __('Assign Device to Location'), $included['locations']) ?>
                            <?= read_select('action_devices_assigned_to_org', $resource->action_devices_assigned_to_org, $dictionary->columns->action_devices_assigned_to_org, $update, __('Assign Device to Organisation'), $orgs) ?>
                            <?= read_select('action_audit', $resource->action_audit, $dictionary->columns->action_audit, $update, __('Audit the Device'), array()) ?>
                            <?= read_select('action_uninstall', $resource->action_uninstall, $dictionary->columns->action_uninstall, $update, __('Uninstall the Agent'), array()) ?>
                        </div>

                        <div class="col-4">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br>
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <h4 class="text-center">Fields</h4><br>
                                <?php foreach ($dictionary->columns as $key => $value) {
                                    if ($value !== 'Unused.') {
                                        echo "<code>$key:</code> " . html_entity_decode($value) . "<br><br>";
                                    }
                                } ?>

                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        $("#action_devices_assigned_to_org").append($('<option>', { value: '', text: ''}));
        $("#action_devices_assigned_to_location").append($('<option>', { value: '', text: ''}));
        $("#action_devices_assigned_to_org").val("<?= $resource->action_devices_assigned_to_org ?>");
        $("#action_devices_assigned_to_location").val("<?= $resource->action_devices_assigned_to_location ?>");

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
                if ($("#inputs\\[" + i + "\\]\\[attribute\\]").val()) {
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
            // console.log("OutputRow: " + output_row);
            $("#outputs\\[" + output_row + "\\]\\[action\\]").attr("disabled", true);
            $("#outputs\\[" + output_row + "\\]\\[value\\]").attr("disabled", true);
            $(this).hide();
            $("#outputs_edit_"+output_row).show();
            $("#outputs_cancel_"+output_row).hide();
            $("#outputs_delete_"+output_row).show();
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
            // console.log(data);
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
            var content = "             <div id=\"inputs_" + input_count + "\" class=\"row col-12\" style=\"padding-top:16px; margin-left:-12px;\">\
                                            <div class=\"col-3\" style=\"padding-right:3px;\">\
                                                <select class=\"input_table form-select\" id=\"inputs[" + input_count + "][attribute]\" name=\"inputs[" + input_count + "][attribute]\" data-row=\"" + input_count + "\">\
                                                    <option value=\"\"></option>\
                                                    <option value=\"os_group\"><?= __('OS Group') ?></option>\
                                                    <option value=\"ip_address\"><?= __('IP Address') ?></option>\
                                                </select>\
                                            </div>\
                                            <div class=\"col-3\" style=\"padding-right:3px;\">\
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
                                            <div class=\"col-4\" style=\"padding-right:3px;\">\
                                                <input type=\"text\" class=\"form-control\" id=\"inputs[" + input_count + "][value]\" name=\"inputs[" + input_count + "][value]\">\
                                            </div>\
                                            \
                                            <div class=\"col-2 text-center\" style=\"padding: 3px 0px 0px 0px;\">\
                                                <button type=\"button\" data-delete=\"#inputs_" + input_count + "\" data-row=\"" + input_count + "\" class=\"del_input btn btn-sm btn-danger\" title=\"<?= __('Delete') ?>\">\
                                                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>\
                                                </button>\
\
                                                <button style=\"display:none;\" type=\"button\" id=\"inputs_cancel_" + input_count + "\" data-row=\"" + input_count + "\" class=\"cancel_input btn btn-sm btn-danger\" title=\"<?= __('Cancel') ?>\">\
                                                    <i class=\"fa fa-remove\" aria-hidden=\"true\"></i>\
                                                </button>\
\
                                                <button style=\"display:none;\" type=\"button\" data-action=\"edit\" id=\"inputs_edit_" +  input_count + "\" data-row=\"" + input_count + "\" class=\"edit_input btn btn-sm\" title=\"<?= __('Edit') ?>\">\
                                                    <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>\
                                                </button>\
\
                                                <button type=\"button\" id=\"inputs_submit_" + input_count + "\" data-row=\"" + input_count + "\" class=\"submit_input btn btn-sm btn-success\" title=\"<?= __('Submit') ?>\">\
                                                    <i class=\"fa fa-check\" aria-hidden=\"true\"></i>\
                                                </button>\
                                            </div>\
                                        </div>";




            $('#inputs').append(content);
        });


        $('#add_outputs').click(function (e) {
            output_count += 1;

            var content = "             <div id=\"outputs_" + output_count + "\" class=\"row col-12\" style=\"padding-top:16px; margin-left:-12px;\">\
                                            <div class=\"col-5\" style=\"padding-right:3px;\">\
                                                <select class=\"form-select\" id=\"outputs[" + output_count + "][action]\" name=\"outputs[" + output_count + "][action]\" data-row=\"" + output_count + "\">\
                                                    <option value=\"audit\"><?= __('Audit') ?></option>\
                                                    <option value=\"command\"><?= __('Command') ?></option>\
                                                    <option value=\"download\"><?= __('Download') ?></option>\
                                                    <option value=\"uninstall\"><?= __('Uninstall') ?></option>\
                                                </select>\
                                            </div>\
\
                                            <div class=\"col-5\" style=\"padding-right:3px;\">\
                                                <input type=\"text\" class=\"form-control\" id=\"outputs[" + output_count + "][value]\" name=\"outputs[" + output_count + "][value]\" data-row=\"" + output_count + "\">\
                                            </div>\
\
                                            <div class=\"col-2 text-center\" style=\"padding: 3px 0px 0px 0px;\">\
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