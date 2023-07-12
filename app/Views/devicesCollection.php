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
                    <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover dataTable" data-order='[[3,"asc"]]'>
                                <thead>
                                    <tr>
                                        <th data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                        <?php foreach ($meta->data_order as $key) {
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            } ?>
                                            <th><?= collection_column_name($key) ?></th>
                                        <?php } ?>
                                        <?php if (strpos($user->permissions[$meta->collection], 'u') !== false) {
                                            if (!empty($data[0]->id)) {
                                                    echo "            <th data-orderable=\"false\" class=\"text-center\">\n";
                                                    echo "              <button type=\"button\" class=\"btn btn-light mb2 bulk_edit_button\" style=\"--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .5rem;\" title=\"" . __('Bulk Edit') . "\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></button>\n";
                                                    echo "              <input type=\"checkbox\" name=\"select_all\" id=\"select_all\"/>\n";
                                                    echo "            </th>\n";
                                            }
                                        } ?>
                                        <?php if (strpos($user->permissions[$meta->collection], 'd') !== false) { ?>
                                        <th data-orderable="false" class="text-center"><?= __('Delete') ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($data)) {
                                    foreach ($data as $item) {
                                        echo "                                <tr>\n";
                                        echo "                                    " . collection_button_read($meta->collection, $item->id) . "\n";
                                        foreach ($meta->data_order as $key) {
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            }
                                            if ($key === 'icon') {
                                                echo "                                    <td><img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:40px\" alt=\"" . $item->attributes->icon . "\"></td>\n";
                                            } else {
                                                echo "                                    <td>" . $item->attributes->{$key} . "</td>\n";
                                            }
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'u') !== false and !empty($item->id)) {
                                            echo "                                    <td style=\"text-align: center;\"><input type='checkbox' id='ids[" . $item->id . "]' value='" . $item->id . "' name='ids[" . $item->id . "]' /></td>\n";
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'd') !== false) {
                                            echo "                                    " . collection_button_delete(intval($item->id)) . "\n";
                                        }
                                        echo "                                </tr>\n";
                                    } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </main>
