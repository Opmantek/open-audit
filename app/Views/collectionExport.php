<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
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
                                    <?= __('NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.') ?>
                                    <br><br>
                                </span>
                            </div>
                            <div class="offset-2 col-8" style="position:relative;">
                                <label for="resource" class="form-label">JSON</label>
                                <div class="input-group">
                                    <textarea rows="20" class="form-control" id="resource" name="resource"><?= html_entity_decode(json_encode($data, JSON_PRETTY_PRINT)) ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
                                <?php if ($meta->collection !== 'integrations') { ?>
                                <?= fieldsInfoDiv ($dictionary) ?>
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
