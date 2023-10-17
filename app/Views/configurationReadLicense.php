<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 clearfix">
                            <h6 style="padding-top:10px;"><span class="fa fa-leanpub oa-icon"></span><?= __('Open-AudIT Licenses') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row" style="padding-top:16px;">
                        <div class="col-6">
                            <div class="offset-2 col-8">
                                <br />
                                <h5><?= __('Your Licenses') ?></h5><br />
                                <?php
                                if (!empty($license->product) and !empty($license_collector->product)) {
                                    $disabled = 'disabled';
                                } else {
                                    $disabled = '';
                                }
                                if (!empty($license->product)) {
                                    $valid = '<span class="text-success">' . __('valid') . '</span>';
                                    if (intval($license->expires) < intval(time())) {
                                        $valid = '<span class="text-danger">' . __('expired') . '</span>';
                                    }
                                    echo '<div id="license_string">';
                                    echo "<strong>" . $license->product . "</strong><br />";
                                    echo '<div class="row"><div class="col-11">';
                                    echo $license->product . ' ' . __('is licensed to') . ' ' . $license->company . ' ' . __('for') . ' ' . $license->conditions . '.<br />';
                                    echo __('This license expires on') . ' ' . date('Y-m-d h:i:s', $license->expires) . ' - ' . $valid . '</div>';
                                    echo '<div class="col-1"><button class="btn btn-sm btn-danger remove_license" data-name="license_string" data-id="' . $meta->license_string . '"><span class="fa fa-trash"></span></button></div></div>';
                                    echo '<br /><br /><hr /><br /></div>';
                                } else {
                                    echo '<div id="license_string"><span class="text-danger">' . __('No License for Professional or Enterprise') . '</span><br /><br /><hr /><br /></div>';
                                } ?>
                                <?php
                                if (!empty($license_collector->product)) {
                                    $valid = '<span class="text-success">' . __('valid') . '</span>';
                                    if (intval($license_collector->expires) < intval(time())) {
                                        $valid = '<span class="text-danger">' . __('expired') . '</span>';
                                    }
                                    echo '<div id="license_collector">';
                                    echo "<strong>" . @$license_collector->product . "</strong><br />";
                                    echo '<div class="row"><div class="col-11">';
                                    echo $license_collector->product . ' ' . __('is licensed to') . ' ' . $license_collector->company . ' ' . __('for') . ' ' . $license_collector->conditions . '.<br />';
                                    echo __('This license expires on') . ' ' . date('Y-m-d h:i:s', $license_collector->expires) . ' - ' . $valid . '</div>';
                                    echo '<div class="col-1"><button class="btn btn-sm btn-danger remove_license" data-name="license_collector" data-id="' . $meta->license_string_collector . '"><span class="fa fa-trash"></span></button></div></div>';
                                    echo '<br /><br /><hr /><br /></div>';
                                } ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="offset-2 col-8">
                                <br />
                                <h5><?= __('Insert your Purchased license Key') ?></h5>
                                <label class="form-label" for="data[attributes][license_string]"><?= __('License Key'); ?></label>
                                <textarea class="form-control" rows="4" name="data[attributes][license_string]" id="data[attributes][license_string]" <?= $disabled ?>></textarea>
                                <?php if ($disabled === 'disabled') { ?>
                                    <div class="form-text form-help float-end"><span><?= __('You must delete your existing license before adding a new license.') ?></span></div>
                                <?php } ?>
                                <br />
                                <label for="activate" class="form-label">&nbsp;</label>
                                <button id="activate" name="activate" type="button" class="btn btn-primary" <?= $disabled ?>><?= __('Activate Key'); ?></button>
                                <br /><br /><hr /><br />
                            </div>
                            <div class="offset-2 col-8">
                                <br />
                                <h5><?= __('Get a Free License for 20 Devices') ?></h5>
                                <label class="form-label" for="data[attributes][country]"><?= __('Your Country') ?></label>
                                <select class="form-select" name="data[attributes][country]" id="data[attributes][country]" required="" <?= $disabled ?>>
                                    <option value="" label=" "></option>
                                    <?php foreach ($countries as $country) { ?>
                                        <option value="<?= $country ?>"><?= $country ?></option>
                                    <?php } ?>
                                </select>
                                <?php if ($disabled === 'disabled') { ?>
                                    <div class="form-text form-help float-end"><span><?= __('You must delete your existing license before activating a free license.') ?></span></div>
                                <?php } ?>
                                <div class="row" style="padding-top:16px;">
                                    <div id="freeDiv" style="display:none;">

                                        <br />
                                        <label class="form-label" for="data[attributes][first_name]"><?= __('First Name') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][first_name]" name="data[attributes][first_name]">
                                        <br />
                                        <label class="form-label" for="data[attributes][last_name]"><?= __('Last Name') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][last_name]" name="data[attributes][last_name]">
                                        <br />
                                        <label class="form-label" for="data[attributes][email]"><?= __('Email') ?></label>
                                        <input class="form-control" type="email" id="data[attributes][email]" name="data[attributes][email]">
                                        <br />
                                        <label class="form-label" for="data[attributes][company]"><?= __('Company') ?></label>
                                        <input class="form-control" type="text" id="data[attributes][company]" name="data[attributes][company]">
                                    </div>
                                    <div id="createFreeButton" style="display:none;">
                                        <br />
                                        <button id="createFree" name="createFree" type="button" class="btn btn-primary"><?= __('Create Free License'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        $('.remove_license').click(function (e) {
            if (confirm("<?= __("Are you sure?") ?>\n<?= __("This will permanently DELETE this license.") ?>") !== true) {
                return;
            }
            div = $(this).attr("data-name")
            var data = {};
            data["data"] = {};
            data["data"]["id"] = $(this).attr("data-id");
            data["data"]["type"] = "configuration";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["value"] = "";
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: '<?= base_url() ?>index.php/configuration/<?= $meta->id ?>',
                contentType: "application/json",
                data: {data : data},
                success: function(data, textStatus) {
                    $("#" + div).html('');
                    $("#data\\[attributes\\]\\[country\\]").prop("disabled", false);
                    $("#data\\[attributes\\]\\[license_string\\]").prop("disabled", false);
                    $("#activate").prop("disabled", false);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Status: " + textStatus);
                    console.log("errorThrown: " + errorThrown);
                    console.log(JSON.stringify(jqXHR));
                    alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                    return false;
                }
            });
        });

        $('#activate').click(function (e) {
            if ($("#data\\[attributes\\]\\[license_string\\]").val() !== "") {
                var data = {};
                data["data"] = {};
                data["data"]["id"] = <?= $meta->id ?>;
                data["data"]["type"] = "configuration";
                data["data"]["attributes"] = {};
                data["data"]["attributes"]["value"] = $("#data\\[attributes\\]\\[license_string\\]").val();
                data = JSON.stringify(data);
                $.ajax({
                    type: "PATCH",
                    url: '<?= base_url() ?>index.php/configuration/<?= $meta->id ?>',
                    contentType: "application/json",
                    data: {data : data},
                    success: function(data, textStatus) {
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Status: " + textStatus);
                        console.log("errorThrown: " + errorThrown);
                        console.log(JSON.stringify(jqXHR));
                        alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                        return false;
                    }
                });
            } else {
                alert('<?= __('No data in License Key') ?>');
            }
        });

        var eu_countries = <?= json_encode($eu_countries) ?>;
        $(document).on('change', "#data\\[attributes\\]\\[country\\]", function () {
            var country = $("#data\\[attributes\\]\\[country\\]").val();
            if (eu_countries.indexOf(country) > -1) {
                $("#freeDiv").css("display", "none");
                $("#createFreeButton").css("display", "block");
            } else {
                $("#freeDiv").css("display", "block");
                $("#createFreeButton").css("display", "block");
            }
        });

        $("#createFree").click(function (e) {
            var country = $("#data\\[attributes\\]\\[country\\]").val();
            if (eu_countries.indexOf(country) == -1) {
                $("#data\\[attributes\\]\\[first_name\\]").addClass('border-danger');
                $("#data\\[attributes\\]\\[last_name\\]").addClass('border-danger');
                $("#data\\[attributes\\]\\[email\\]").addClass('border-danger');
                $("#data\\[attributes\\]\\[company\\]").addClass('border-danger');
                if ($("#data\\[attributes\\]\\[first_name\\]").val() == '') {
                    $("#data\\[attributes\\]\\[first_name\\]").addClass('border-danger');
                    return;
                }
                if ($("#data\\[attributes\\]\\[last_name\\]").val() == '') {
                    $("#data\\[attributes\\]\\[last_name\\]").addClass('border-danger');
                    return;
                }
                if ($("#data\\[attributes\\]\\[email\\]").val() == '') {
                    $("#data\\[attributes\\]\\[email\\]").addClass('border-danger');
                    return;
                }
                if ($("#data\\[attributes\\]\\[company\\]").val() == '') {
                    $("#data\\[attributes\\]\\[company\\]").addClass('border-danger');
                    return;
                }
            }
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $meta->id ?>;
            data["data"]["type"] = "configuration";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["value"] = {};
            data["data"]["attributes"]["value"]["country"] = $("#data\\[attributes\\]\\[country\\]").val();
            data["data"]["attributes"]["value"]["first_name"] = $("#data\\[attributes\\]\\[first_name\\]").val();
            data["data"]["attributes"]["value"]["last_name"] = $("#data\\[attributes\\]\\[last_name\\]").val();
            data["data"]["attributes"]["value"]["email"] = $("#data\\[attributes\\]\\[email\\]").val();
            data["data"]["attributes"]["value"]["company"] = $("#data\\[attributes\\]\\[company\\]").val();
            data = JSON.stringify(data);
            console.log(data);
            $.ajax({
                type: "PATCH",
                url: '<?= base_url() ?>index.php/configuration/<?= $meta->id ?>',
                contentType: "application/json",
                data: {data : data},
                success: function(data, textStatus) {
                    console.log(data);
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Status: " + textStatus);
                    console.log("errorThrown: " + errorThrown);
                    console.log(JSON.stringify(jqXHR));
                    alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                    return false;
                }
            });
        });
    });
}
</script>
