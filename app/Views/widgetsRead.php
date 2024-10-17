<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
if (!empty($included['queries'])) {
    $item = new \stdClass();
    $item->id = 0;
    $item->attributes = new stdClass();
    $item->attributes->name = '';
    array_unshift($included['queries'], $item);
}
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

                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="type" class="form-label"><?= __('Type') ?></label>
                                    <div class="input-group">
                                        <select class="form-select" id="type" name="type" data-original-value="<?= $resource->type ?>" disabled>
                                            <option value="line" <?php if ($resource->type === 'line') { echo 'selected'; } ?>><?= __('Line Graph') ?></option>
                                            <option value="pie" <?php if ($resource->type === 'pie') { echo 'selected'; } ?>><?= __('Pie Chart') ?></option>
                                            <option value="traffic" <?php if ($resource->type === 'traffic') { echo 'selected'; } ?>><?= __('Traffic Light') ?></option>
                                        </select>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="type" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="type" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="type" data-dictionary="<?= $dictionary->columns->type ?>"><span><br></span></div>
                                </div>
                            </div>

                            <?php if (!empty($resource->sql)) { ?>
                            <div class="row" style="padding-top:16px;">
                                <div class="offset-2 col-8" style="position:relative;">
                                    <label for="sql" class="form-label"><?= __('SQL') ?></label>
                                    <div class="input-group">
                                        <textarea class="form-control" rows="14" id="sql" name="sql" data-original-value="<?= $resource->sql ?>" disabled><?= html_entity_decode($resource->sql) ?></textarea>
                                        <?php if ($update) { ?>
                                        <div class="float-end" style="padding-left:4px;">
                                            <div data-attribute="sql" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class='fa fa-pencil'></span></div>
                                            <div data-attribute="sql" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-check'></span></div>
                                            <div data-attribute="sql" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class='fa fa-remove'></span></div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="sql" data-dictionary="<?= $dictionary->columns->sql ?>"><span><br></span></div>
                                </div>
                            </div>
                                <?= read_field('link', html_entity_decode($resource->link), $dictionary->columns->link, $update) ?>
                            <?php } else {
                                if ($resource->type !== 'traffic') { ?>
                                    <?= read_field('primary', $resource->primary, $dictionary->columns->primary, $update) ?>
                                    <?= read_field('secondary', $resource->secondary, $dictionary->columns->secondary, $update) ?>
                                    <?= read_field('where', $resource->where, $dictionary->columns->where, $update) ?>
                                    <?= read_field('limit', $resource->limit, $dictionary->columns->limit, $update) ?>
                                    <?= read_field('link', html_entity_decode($resource->link), $dictionary->columns->link, $update) ?>
                                <?php } else { ?>
                                    <?= read_field('dataset_title', $resource->dataset_title, $dictionary->columns->dataset_title, $update, __('Title')) ?>
                                    <?= read_field('group_by', html_entity_decode($resource->group_by), $dictionary->columns->group_by, $update, __('Secondary Text')) ?>
                                    <?= read_field('where', $resource->where, $dictionary->columns->where, $update, __('Icon')) ?>
                                    <?= read_select('primary', $resource->primary, $dictionary->columns->primary, $update, __('Red Query'), $included['queries']) ?>
                                    <?= read_select('secondary', $resource->secondary, $dictionary->columns->secondary, $update, __('Yellow Query'), $included['queries']) ?>
                                    <?= read_select('ternary', $resource->ternary, $dictionary->columns->ternary, $update, __('Green Query'), $included['queries']) ?>
                                <?php } ?>
                            <?php } ?>
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
                                    <?php $fields = array('name', 'org_id', 'resource', 'type', 'value', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
