<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $meta->name) ?>
                </div>
                <div class="card-body">
                    <br>
                    <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                        <div class="table-responsive">
                            <?php if (!empty($audit_status)) {
                                echo '<table class="table ' . $GLOBALS['table'] . ' table-striped table-hover dataTable" id="table_result" data-order=\'[[4,"asc"]]\' style="width:100%">';
                            } else {
                                echo '<table class="table ' . $GLOBALS['table'] . ' table-striped table-hover dataTable" id="table_result" data-order=\'[[3,"asc"]]\' style="width:100%">';
                            }
                            echo "\n"; ?>
                                <thead>
                                    <tr>
                                        <?php if (!empty($audit_status)) { ?>
                                            <th style="white-space: nowrap;" class="text-center" id="audit_status"><?= __('Audit Status') ?></th>
                                        <?php } ?>
                                        <th id="id" data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                        <?php foreach ($meta->data_order as $key) {
                                            echo "\n";
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            }
                                            echo "                                        <th id=\"" . str_replace('.', '_', $key) . "\">" . collection_column_name($key) . "</th>";
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'u') !== false) {
                                            if (!empty($data[0]->id)) {
                                                    echo "\n                                        <th data-orderable=\"false\" class=\"text-center\">\n";
                                                    echo "                                            <button type=\"button\" class=\"btn btn-light mb2 bulk_edit_button\" style=\"--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .5rem;\" title=\"" . __('Bulk Edit') . "\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></button>\n";
                                                    echo "                                            <input aria-label='" . __('Select All') . "' type=\"checkbox\" name=\"select_all\" id=\"select_all\"/>\n";
                                                    echo "                                        </th>";
                                            }
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'd') !== false) {
                                            echo "\n                                        <th data-orderable=\"false\" class=\"text-center\">" . __('Delete') . "</th>\n";
                                        } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($data)) {
                                    foreach ($data as $item) {
                                        echo "\n                                <tr>\n";
                                        if (!empty($audit_status)) { ?>
                                            <td class="text-center">
                                                <span class="<?= $item->attributes->audit_class ?>" title="<?= $item->attributes->audit_text ?>"></span>
                                            </td>
                                        <?php }
                                        echo "                                    " . collection_button_read($meta->collection, $item->id) . "\n";
                                        foreach ($meta->data_order as $key) {
                                            $key = str_replace('devices.', '', $key);
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            }
                                            if ($key === 'icon') {
                                                echo "                                    <td><img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:40px\" alt=\"" . $item->attributes->icon . "\"></td>\n";
                                            } elseif ($key === 'ip' and !empty($item->attributes->ip_padded)) {
                                                echo "                                    <td><span style=\"display:none;\">" . $item->attributes->ip_padded . "</span>" . $item->attributes->{$key} . "</td>\n";
                                            } else {
                                                echo "                                    <td>" . $item->attributes->{$key} . "</td>\n";
                                            }
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'u') !== false and !empty($item->id)) {
                                            echo "                                    <td style=\"text-align: center;\"><input aria-label='" . __('Select') . "' type='checkbox' id='ids[" . $item->id . "]' value='" . $item->id . "' name='ids[" . $item->id . "]' /></td>\n";
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'd') !== false) {
                                            echo "                                    " . collection_button_delete(intval($item->id)) . "\n";
                                        }
                                        echo "                                </tr>\n";
                                    }
                                }
                                echo "                                </tbody>\n"; ?>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </main>
<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function() {
        $("#button_import_csv").remove();
        $("#button_export_csv").remove();
        $("#button_import_json").remove();
        $("#button_export_json").remove();
        $("#button_help").remove();
        $("#button_create").remove();
    });
}
</script>