<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $meta->name, $meta->action) ?>
                </div>
                <div class="card-body">
                    <?php if (!empty($data)) { ?>
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <?php foreach ($data[0]->attributes as $key => $value) {
                                    if (strrpos($key, 'ip_padded') === strlen($key) - 9) {
                                        continue;
                                    } ?>
                                <th><?= collection_column_name($key) ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data)) {
                                foreach ($data as $item) {
                                    echo "<tr>\n";
                                    foreach ($data[0]->attributes as $key => $value) {
                                        if (strrpos($key, 'ip_padded') === strlen($key) - 9) {
                                            continue;
                                        }
                                        if (strpos($key, '.id') !== false and strpos($key, '.identification') === false) {
                                            $collection = substr($key, 0, strpos($key, '.'));
                                            if ($collection === 'system') {
                                                $collection = 'devices';
                                            }
                                            echo collection_button_read($collection, $item->id);
                                        } elseif ((strrpos($key, 'ip') === strlen($key) - 2)) {
                                            $padded_key = substr($key, 0, strpos($key, 'ip')) . 'ip_padded';
                                            if (!empty($item->attributes->{$padded_key})) {
                                                echo '            <td><span style="display:none;">' . $item->attributes->{$padded_key} . '</span>' . $item->attributes->{$key} . "</td>\n";
                                            } else {
                                                echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                            }
                                        } else {
                                            echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                        }
                                    }
                                    echo "</tr>\n";
                                }
                            } ?>
                        </tbody>
                    </table>
                    <?php } ?>
                </div>
            </div>
        </main>
