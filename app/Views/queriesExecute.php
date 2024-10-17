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
                                    }
                                    if ($key === 'devices.icon') {
                                        echo '<th class="text-center">' . __('Icon') . "</th>\n";
                                    } elseif ($key === 'devices.id') {
                                        echo '<th class="text-center">' . __('Details') . "</th>\n";
                                    } elseif (strpos($key, '.id') !== false) {
                                        echo '<th class="text-center">' . collection_column_name($key) . "</th>\n";
                                    } else {
                                        echo '<th>' . collection_column_name($key) . "</th>\n";
                                    }
                                } ?>
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
                                        if ($key === 'devices.id') {
                                            echo collection_button_read('devices', $item->id);
                                        } elseif (strpos($key, '.id') !== false) {
                                            $temp = explode('.', $key);
                                            echo collection_button_read($temp[0], $item->attributes->{$key});
                                        } elseif ($key === 'link') {
                                            echo "<td><a href=\"" . base_url() . 'index.php/' . $item->attributes->{$key} . "\" role=\"button\" class=\"btn btn-sm btn-primary\"><span style=\"width:1rem;\" title=\"" . __('View') . "\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></td>";
                                        } elseif ((strrpos($key, 'ip') === strlen($key) - 2)) {
                                            $padded_key = substr($key, 0, strpos($key, 'ip')) . 'ip_padded';
                                            if (!empty($item->attributes->{$padded_key})) {
                                                echo '            <td><span style="display:none;">' . $item->attributes->{$padded_key} . '</span>' . $item->attributes->{$key} . "</td>\n";
                                            } else {
                                                echo "<td>" . $item->attributes->{$key} . "</td>\n";
                                            }
                                        } elseif ($key === 'devices.icon') {
                                            echo "<td class=\"text-center\"><img style=\"width:40px\" src=\"" . base_url() . "device_images/" . $item->attributes->{$key} . ".svg\" alt=\"\"></td>\n";
                                        } else {
                                            echo "<td>" . nl2br($item->attributes->{$key}) . "</td>\n";
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
