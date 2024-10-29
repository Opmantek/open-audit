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
                            <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>" accept-charset="utf-8" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />


                                <div class="row" style="padding-top:16px;">
                                    <div class="offset-2 col-8">
                                        <label class="form-label" for="input_type"><?= __('Input Type'); ?></label>
                                        <select class="form-select" name="input_type" id="input_type" required>
                                            <option value=""><?php echo __('Choose'); ?></option>
                                            <option value="manual_input"><?php echo __('Manual Input'); ?></option>
                                            <option value="audit_input"><?php echo __('Copy and paste an audit result'); ?></option>
                                            <option value="file_input"><?php echo __('Upload an audit result file'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div id="audit_input" style="display:none;">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8">
                                            <label class="form-label" for="upload_input"><?= __('Audit Result Input'); ?></label>
                                            <textarea class="form-control" rows="10" name="upload_input" id="upload_input"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div id="file_input" style="display:none;">
                                    <div class="row" style="padding-top:16px;">
                                        <div class="offset-2 col-8">
                                            <label class="form-label" for="upload_file"><?= __('File Input'); ?></label>
                                            <input type="file" class="form-control" id="upload_file" name="upload_file" value="">
                                        </div>
                                    </div>
                                </div>

                                <div id="manual_input" style="display:none;">
                                    <div class="row" style="padding-top:16px; padding-bottom:4px;">
                                        <div class="offset-2 col-8">
                                            <label class="form-label" for="data[attributes][type]"><?= __('Type') ?></label>
                                            <select class="form-select" name="data[attributes][type]" id="data[attributes][type]">
                                                <?php foreach ($included['type'] as $type) { ?>
                                                <option value="<?= $type->attributes->value ?>"><?= $type->attributes->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?= create_text_field('data[attributes][name]', __('Name')) ?>
                                    <?= create_text_field('data[attributes][hostname]', __('Hostname')) ?>
                                    <?= create_text_field('data[attributes][ip]', __('IP')) ?>
                                    <?= create_text_field('data[attributes][netmask]', __('Netmask')) ?>
                                    <?= create_text_field('data[attributes][manufacturer]', __('Manufacturer')) ?>
                                    <?= create_text_field('data[attributes][model]', __('Model')) ?>
                                    <?= create_text_field('data[attributes][serial]', __('Serial')) ?>
                                    <?= create_text_field('data[attributes][asset_number]', __('Asset Number')) ?>
                                    <?= create_text_field('data[attributes][owner]', __('Assigned To')) ?>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                        <input type="hidden" value="production" id="data[attributes][status]" name="data[attributes][status]" />
                                        <input type="hidden" value="production" id="data[attributes][environment]" name="data[attributes][environment]" />
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[type\\]").val("computer");
    });
    $(document).ready(function () {
        $(document).on('change', '#input_type', function (e) {
            var showDiv = $("#input_type").val();
            $("#manual_input").css('display', 'none');
            $("#audit_input").css('display', 'none');
            $("#file_input").css('display', 'none');
            $(this).css('display', 'block');
            if (showDiv != "") {
                document.getElementById(showDiv).style.display = 'block';
                $("#submit_button").css('display', 'block');
            } else {
                $("#submit_button").css('display', 'none');
            }
        });
    });

    function choose_type() {
        var showDiv = document.getElementById("data[attributes][type]").value;
        $("#printer").css('display', 'none');
        $("#phone").css('display', 'none');
        if (showDiv == "printer") {
            $("#printer").css('display', 'block');
        }
        if (showDiv.indexOf("modem") != -1 || showDiv.indexOf("phone") != -1) {
            $("#phone").css('display', 'block');
        }
    }
}
</script>
