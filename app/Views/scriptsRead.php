<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $data[0]->attributes->name) ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <?= read_field('name', $resource->name, $dictionary->columns->name, $update) ?>
                            <?= read_select('org_id', $resource->org_id, $dictionary->columns->org_id, $update, __('Org'), $orgs) ?>
                            <?= read_field('description', $resource->description, $dictionary->columns->name, $update) ?>
                            <?= read_field('based_on', $resource->based_on, $dictionary->columns->name) ?>
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                            <?php if (!empty($included['files'])) { ?>
                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <br><hr><br>
                                        <h5 class="text-center"><?= __('Files') ?></h5>
                                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th><?= __('Name') ?></th>
                                                    <th><?= __('Path') ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($included['files'] as $file) { ?>
                                                <tr>
                                                    <td><?= $file->attributes->name ?></td>
                                                    <td><?= $file->attributes->path ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="offset-2 col-8">
                                    <br>
                                    <h5 class="text-center"><?= __('Options') ?></h5>
                                </div>
                            </div>
                            <?php foreach ($included['script_option'] as $script_option) {
                                $value = (isset($resource->options->{$included['option'][$script_option]->name}) and !is_null($resource->options->{$included['option'][$script_option]->name})) ? $resource->options->{$included['option'][$script_option]->name} : '';
                                echo read_field('options.' . $script_option, $value, $included['option'][$script_option]->help, $update, ucwords(str_replace('_', ' ', $script_option)));
                            } ?>

                        </div>
                        <div class="col-4">
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
                                    <?php $fields = array('name', 'org_id', 'description', 'based_on', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br>
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= $dictionary->columns->{$key} ?><br><br>
                                    <?php } ?>
                                <?php } ?>
                                <h4 class="text-center"><?= __('Options') ?></h4><br>
                                <?php foreach ($included['script_option'] as $script_option) { ?>
                                <code><?= $included['option'][$script_option]->name ?>: </code><?= $included['option'][$script_option]->help ?><br><br>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
