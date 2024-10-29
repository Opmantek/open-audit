<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$name = (!empty($resource->name)) ? $resource->name : '';
$id = (!empty($meta->id)) ? $meta->id : '';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $id, $meta->icon, $user, $name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <span class="offset-2 col-8">
                                    <?= __('Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.') ?>
                                    <br><br>
                                    <?= __('NOTE - You can prevent credentials being displayed below by setting the configuration item for \'decrypt_credentials\' to \'n\'.') ?>
                                    <br><br>
                                </span>
                            </div>
                            <div class="offset-2 col-8" style="position:relative;">
                                <label for="resource" class="form-label">JSON</label>
                                <div class="input-group">
                                    <textarea rows="20" class="form-control" id="resource" name="resource"><?= json_encode($data, JSON_PRETTY_PRINT) ?></textarea>
                                </div>
                                <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="resource" data-dictionary=""></div>
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
                                    <code><?= $key ?>: </code><?= $value ?><br><br>
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
    $(document).ready(function() {
        $("#button_create").remove();
        $("#button_delete").remove();
        $("#button_export_json").remove();
    });
}
</script>
