<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user) ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th><?= __('Resource') ?></th>
                                    <th><?= __('Type') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('Value') ?></th>
                                    <th><?= __('Organisation') ?></th>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <td><a href="<?= url_to($meta->collection.'Collection') ?>?attributes.resource=<?= $item->attributes->resource ?>"><?= $item->attributes->resource ?></a></td>
                                    <td><a href="<?= url_to($meta->collection.'Collection') ?>?attributes.type=<?= $item->attributes->type ?>"><?= $item->attributes->type ?></a></td>
                                    <td><?= $item->attributes->name ?></td>
                                    <td><?= $item->attributes->value ?></td>
                                    <td><a href="<?= url_to($meta->collection.'Collection') ?>?attributes.org_id=<?= $item->attributes->{'orgs.id'} ?>"><?= $item->attributes->{'orgs.name'} ?></a></td>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <?= collection_button_delete($item->attributes->name, $item->id) ?>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
