<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
$item = new \stdClass();
$item->id = 0;
$item->attributes = new stdClass();
$item->attributes->name = '';
array_unshift($included['widgets'], $item);
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
                            <?= read_select('sidebar', $resource->sidebar, $dictionary->columns->sidebar, $update, __('Sidebar')) ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="options.layout" class="form-label"><?= __('Layout') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="options.layout" name="options.layout" data-original-value="<?= $resource->options->layout ?>" disabled>
                                            <option value='3x2'>3 x 2</option>
                                            <option value='4x2'>4 x 2</option>
                                            <option value='4x3'>4 x 3</option>
                                            <option value='4x4'>4 x 4</option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="options.layout" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="options.layout" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="options.layout" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary=""><span><br></span></div>
                                </div>
                            </div>
                            <?php
                            if (!empty($resource->options->widgets)) {
                                // Allow for 20 widgets
                                for ($i = 0; $i < 20; $i++) {
                                    foreach ($resource->options->widgets as $widget) {
                                        if ($widget->position == $i) {
                                            echo read_select('options.widgets.position.' . $widget->position, $widget->widget_id, '', $update, 'Widget #' . $widget->position, $included['widgets']);
                                        }
                                    }
                                }
                            }
                            ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
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
    $(document).ready(function() {
        $("#options\\.layout").val("<?= $resource->options->layout ?>");
    });
}
</script>