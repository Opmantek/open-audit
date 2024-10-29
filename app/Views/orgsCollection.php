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
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[2,"asc"]]'>
                            <thead>
                                <tr>
                                    <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                    <th data-orderable="false" class="text-center"><?= __('Devices') ?></th>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id') {
                                            continue;
                                        } ?>
                                        <th><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                    <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody><?php
                            if (!empty($data)) {
                                foreach ($data as $item) {
                                    echo "\n                                <tr>\n"; ?>
                                    <?= collection_button_read($meta->collection, $item->id) ?>
                                    <?= collection_button_devices(url_to('devicesCollection') . '?devices.org_id=' . $item->id) . "\n" ?>
                                    <?php foreach ($meta->data_order as $key) {
                                        if ($key === 'id') {
                                            continue;
                                        }
                                        if ($key === 'parent_name' and !empty($item->attributes->parent_id)) {
                                            echo "<td><a href=\"" . url_to($meta->collection . 'Collection') . "?orgs.parent_id=" . $item->attributes->{'parent_id'} . "\">" . $item->attributes->{$key} . "</a></td>\n";
                                        } elseif ($key === 'type') {
                                            echo "<td><a href=\"" . url_to($meta->collection . 'Collection') . "?orgs.type=" . $item->attributes->type . "\">" . $item->attributes->type . "</a></td>\n";
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                    } ?>
                                    <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) {
                                        if ($item->id === 1) {
                                            echo "<td></td>\n";
                                        } else {
                                            echo collection_button_delete(intval($item->id)) . "\n";
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
            <?php
            if (count($data) === 1) {
                @include 'help/' . $meta->collection . '.php';
                echo collection_intro_header('Introduction to ' . $meta->heading, $meta->collection, $meta->icon, @$intro, @$body);
            }
            ?>
        </main>
