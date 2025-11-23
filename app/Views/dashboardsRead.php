<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$item = new \stdClass();
$item->id = 0;
$item->attributes = new stdClass();
$item->attributes->name = '';
array_unshift($included['widgets'], $item);
$temp = explode('x', $resource->options->layout);
$columns = intval($temp[0]);
$rows = intval($temp[1]);
$total_widgets = intval($rows * $columns);
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $resource->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, '', $orgs, $meta->collection) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('sidebar', $resource->sidebar, $dictionary->columns->sidebar, $update, __('Sidebar'), [], $meta->collection) ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <!--<label for="options.layout" class="form-label"><?= __('Layout') ?></label> -->
                                    <?= read_field_header($meta->collection, 'options.layout', $dictionary->columns->layout, 'Layout') ?>
                                    <div class="input-group">
                                        <select class="form-select" id="options.layout" name="options.layout" data-original-value="<?= $resource->options->layout ?>" disabled>
                                            <option value='3x2'>3 x 2</option>
                                            <option value='4x2'>4 x 2</option>
                                            <option value='4x3'>4 x 3</option>
                                            <option value='4x4'>4 x 4</option>
                                            <option value='6x3'>6 x 3</option>
                                            <option value='6x4'>6 x 4</option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="options.layout" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='icon-pencil'></span></div>
                                            <div data-attribute="options.layout" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='icon-check'></span></div>
                                            <div data-attribute="options.layout" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='icon-x'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (!empty($resource->options->widgets)) {
                                foreach ($included['widgets'] as $w) {
                                    $w->attributes->name = $w->attributes->name . ' (' . @$w->attributes->type . ')';
                                    if ($w->attributes->name === '()') {
                                        $w->attributes->name = '';
                                    }
                                }
                                #$count = 0;
                                for ($i = 1; $i <= $total_widgets; $i++) {
                                    $hit = false;
                                    foreach ($resource->options->widgets as $widget) {
                                        if ($widget->position == $i) {
                                            $wid_id = 0;
                                            if (!empty($widget->widget_id)) {
                                                $wid_id = $widget->widget_id;
                                            }
                                            echo read_select('options.widgets.position.' . $widget->position, $wid_id, '<code>options.widgets.position.' . $i . '</code><br>' . __('The widget at position ') . $i . '.', $update, __('Widget #') . $widget->position, $included['widgets']);
                                            $hit = true;
                                        }
                                    }
                                    if ($hit === false) {
                                        echo read_select('options.widgets.position.' . $i, '', '<code>options.widgets.position.' . $i . '</code><br>' . __('The widget at position ') . $i . '.', $update, __('Widget #') . $i, $included['widgets']);
                                    }
                                }
                                #echo read_select('options.widgets.position.' . $count, '', '<code>options.widgets.position.' . $count . '</code><br>' . __('The widget at position ') . $count . '.', $update, __('Widget #') . $count, $included['widgets']);
                            }
                            ?>
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
        $("#options\\.layout").val("<?= $resource->options->layout ?>");
    });
}
</script>