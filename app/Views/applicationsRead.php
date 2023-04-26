<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/read_functions.php';
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
                            <?= read_field('edited_by', $resource->edited_by, $dictionary->columns->edited_by, false) ?>
                            <?= read_field('edited_date', $resource->edited_date, $dictionary->columns->edited_date, false) ?>
                        </div>
                        <div class="col-6">
                            <br />
                            <div class="offset-2 col-8">
                                <?php if (!empty($dictionary->about)) { ?>
                                    <h4 class="text-center"><?= __('About') ?></h4><br />
                                    <?= $dictionary->about ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->notes)) { ?>
                                    <h4 class="text-center"><?= __('Notes') ?></h4><br />
                                    <?= $dictionary->notes ?>
                                <?php } ?>
                                <?php if (!empty($dictionary->columns)) { ?>
                                    <?php $fields = array('name', 'org_id', 'description', 'edited_by', 'edited_date') ?>
                                <h4 class="text-center"><?= __('Fields') ?></h4><br />
                                    <?php foreach ($fields as $key) { ?>
                                    <code><?= $key ?>: </code><?= @$dictionary->columns->{$key} ?><br /><br />
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="card">
                <div class="card-header">
                    <div class="row" style="height:46px;">
                        <div class="col-12 clearfix">
                            <h6 style="padding-top:10px;"><?= __('Devices') ?></h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                                    <thead>
                                        <tr>
                                            <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                            <th><?= __('Name') ?></th>
                                            <th><?= __('IP') ?></th>
                                            <th><?= __('Description') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($included['devices'])) { ?>
                                        <?php foreach ($included['devices'] as $device) { ?>
                                        <tr>
                                            <td class="text-center"><a title="<?= __('View Device') ?>" role="button" class="btn btn-sm btn-devices" href="<?= url_to('devicesRead', $device->id) ?>"><span style="width:1rem;" title="<?= __('Devices') ?>" class="fa fa-desktop" aria-hidden="true"></span></a></td>
                                            <td><?= $device->attributes->name ?></td>
                                            <td><?= $device->attributes->ip ?></td>
                                            <td><?= $device->attributes->description ?></td>
                                        </tr>
                                        <?php } ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
