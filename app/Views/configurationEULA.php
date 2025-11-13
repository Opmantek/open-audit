<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$message = '';
if (!empty($config->license_eula)) {
    $message = 'EULA accepted on ' . $acceptedOn . ', by ' . $acceptedBy . '.';
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, 'EULA') ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 offset-2">
                            <h3>You must accept this End User License Agreement (EULA) to use Open-AudIT.</h3>
                            <br>
                            <?= $message ?>
                            <br><br><br>
                            <pre><?= $eulaText ?></pre>
                        </div>
                        <div class="col-8 offset-2">
                            <button type="button" class="btn btn-primary accept">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {

        $("#button_export_json").remove();
        $("#button_delete").remove();
        $("#button_create").remove();
        $("#button_help").remove();

        $(document).on('click', '.accept', function (e) {
            console.log('clicked');
        });

        $(document).on('click', '.accept', function (e) {
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $config->license_eula_id ?>;
            data["data"]["type"] = 'configuration';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["value"] = '<?= date('Y-m-d H:i:s') ?>';
            data = JSON.stringify(data);

            $.ajax({
                type: "PATCH",
                url: '<?= base_url() ?>index.php/configuration/<?= $config->license_eula_id ?>',
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $("#liveToastSuccess-header").text("Update Succeeded");
                    $("#liveToastSuccess-body").text("EULA has been accepted.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                    window.location = '<?= base_url() ?>index.php';
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    $("#liveToastFailure-header").text("Update Failed");
                    $("#liveToastFailure-body").text(data.message);
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                }
            });
        });
    });
}
</script>