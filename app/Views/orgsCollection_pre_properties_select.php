<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
if ($meta->properties === $meta->collection . '.*') {
    $meta->data_order = array('orgs.id', 'orgs.name', 'orgs.description', 'orgs.parent_id');
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user) ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Devices') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('Description') ?></th>
                                    <th><?= __('Parent') ?></th>
                                    <th><?= __('Type') ?></th>
                                    <th><?= __('AD Group') ?></th>
                                    <th><?= __('Devices') ?></th>
                                    <?php if (strpos($user->permissions[$meta->collection], 'u') !== false) {
                                        echo '<th data-orderable="false" class="text-center">' . __('Delete') . "</th>\n";
                                    } ?>
                                </tr>
                            </thead>
                            <tbody><?php
                            if (!empty($data)) {
                                foreach ($data as $item) {
                                    echo "\n                                <tr>\n"; ?>
                                    <?= collection_button_read($meta->collection, $item->id) . "\n" ?>
                                    <?= collection_button_devices(url_to('devicesCollection') . '?system.org_id=' . $item->id) . "\n" ?>
                                    <td><?= $item->attributes->name ?></td>
                                    <td><?= $item->attributes->description ?></td>
                                    <td><a href="<?= url_to($meta->collection.'Collection') ?>?orgs.parent_id=<?= intval($item->attributes->parent_id) ?>"><?= $item->attributes->parent_name ?></a></td>
                                    <td><a href="<?= url_to($meta->collection.'Collection') ?>?orgs.type=<?= $item->attributes->type ?>"><?= $item->attributes->type ?></a></td>
                                    <td><?= @$item->attributes->ad_group ?></td>
                                    <td><?= number_format($item->attributes->device_count) ?></td>
                                    <?php if (strpos($user->permissions[$meta->collection], 'u') !== false) {
                                        if ($item->id === 1) {
                                            echo "<td></td>\n";
                                        } else {
                                            echo collection_button_delete($item->attributes->name, intval($item->id)) . "\n";
                                        }
                                    } ?>
                                </tr><?php
                                }
                                echo "\n";
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

