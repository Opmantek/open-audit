<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
if (!$update or $resource->editable !== 'y') {
    $update = false;
}
if ($resource->name === 'feature_agents_advanced') {
    $request = \Config\Services::request();
    $uri = $request->getUri();
    $dictionary->notes = '<strong>WARNING</strong>: Enabling advanced agents means an agent can be instructed to download any file and execute any command. This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for ' . $uri->getHost();
    if (!$request->isSecure()) {
        $dictionary->notes .= '.<br><br>You do not have https enabled. Advanced agents will not run commands or download files.<br><br>';
    }
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('editable', $resource->editable, $dictionary->columns->editable, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('type', $resource->type, $dictionary->columns->type, false, '', '', '', '', $meta->collection) ?>
                            <?php if ($resource->type !== 'bool') { ?>
                                <?php if (strpos($resource->name, 'password') === false) { ?>
                                    <?= read_field('value', html_entity_decode($resource->value), $dictionary->columns->value, $update, '', '', '', $resource->type, $meta->collection) ?>
                                <?php } else { ?>
                                    <?= read_field('value', '', $dictionary->columns->value, $update, '', '', '', 'password', $meta->collection) ?>
                                <?php } ?>
                            <?php } ?>
                            <?php if ($resource->type === 'bool') { ?>
                                <?= read_select('value', $resource->value, $dictionary->columns->value, $update, '', array(), $meta->collection) ?>
                            <?php } ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false, '', '', '', '', $meta->collection) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false, '', '', '', '', $meta->collection) ?>
                        </div>
                        <div class="col-6">
                            <br>
                            <div class="offset-2 col-8">
                                <?= aboutNotesDiv ($meta->collection, $dictionary) ?>
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

        <?php if (strpos($resource->name, 'password') !== false) {
            if ($resource->value !== '') { ?>
                $("#value").attr("placeholder", "<?= __("removed from display, but has been set") ?>");
            <?php } else { ?>
                $("#value").attr("placeholder", "<?= __("has not been set") ?>");
            <?php }
        } ?>

    });
}
</script>
