<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($data)) { ?>
                                <?php foreach ($data as $item) { ?>
                                <tr>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id') {
                                            continue;
                                        }
                                        echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        ?>
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
