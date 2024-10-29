<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[1,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th><?= __('Name') ?>
                                    <th><?= __('Rows') ?>
                                    <th class="text-center"><?= __('Component Table') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) {
                                    ?><tr>
                                    <?= collection_button_read($meta->collection, $item->id) . "\n" ?>
                                    <td><?= $item->id ?></td>
                                    <td><?= $item->attributes->count ?></td>
                                    <td class="text-center"><?php
                                    if (!empty($item->attributes->current_row)) {
                                            echo "<span class=\"fa-solid fa-check text-oa-success\"></span>";
                                    } ?></td>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
