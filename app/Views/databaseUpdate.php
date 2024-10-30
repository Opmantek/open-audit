<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, '', $meta->icon, $user, '') ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <pre><?= $data ?></pre>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php if (!empty($config->enterprise_binary)) { ?>
<div class="modal" id="myEULALicense" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">FirstWave EULA</h5>
                <span id="accept_button"><a data-bs-dismiss="modal" class="btn btn-success btn-sm accept_button" href="#"><?= __('Accept') ?></a></span>
            </div>
            <div class="modal-body">
                <br>
                <pre class="border rounded bg-light" style="max-height: 340px; overflow-y: scroll; padding: 9.5px;"><?= file_get_contents(ROOTPATH . 'other/licenses/eula.txt') ?></pre>
                <br>
            </div>
        </div>
    </div>
</div>
<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $('#myEULALicense').modal('show');
        $(document).on('click', '.accept_button', function (e) {
            var value = $(this).attr("data-value");
            //alert("Value is:"+value);
            var data = {};
            data["data"] = {};
            data["data"]["id"] = "<?= $eula->id ?>";
            data["data"]["type"] = "configuration";
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["value"] = '<?= $eula->new_value ?>';
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: "<?= base_url() ?>index.php/configuration/<?= $eula->id ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    /* alert( 'success' ); */
                },
                error: function (data) {
                    console.log(data.responseText);
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n" + data.errors[0].title + "\n" + data.errors[0].detail);
                }
            });
        });
    });
}
</script>
<?php } ?>
