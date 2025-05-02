<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$update_group = false;
if ($config->product === 'enterprise') {
    $update_group = true;
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
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->description, $update, '', '', '', '', $meta->collection) ?>
                            <?= read_select('parent_id', $resource->parent_id, $dictionary->columns->parent_id, $update, __('Parent'), $orgs, $meta->collection) ?>
                            <?= read_select('type', $resource->type, $dictionary->columns->type, $update, __('Type'), $included['types'], $meta->collection) ?>
                            <?= read_field('ad_group', $resource->ad_group, $dictionary->columns->ad_group, $update_group, __('AD Group'), '', '', '', $meta->collection) ?>
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
