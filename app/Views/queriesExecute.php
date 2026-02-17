<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
include 'shared/read_functions.php';
include 'shared/common_functions.php';
$sort_column_index = 3;
$url = base_url() . 'index.php/queries/' . $meta->id . '/execute?format=json';
if (!empty($meta->data_order)) {
    for ($i = 0; $i < count($meta->data_order); $i++) {
        if (str_contains($meta->data_order[$i], '.')) {
            $meta->data_order[$i] = str_replace('.', '__', $meta->data_order[$i]);
        }
        if (str_contains($meta->data_order[$i], 'ip_padded')) {
            unset($meta->data_order[$i]);
        }
    }
}

?>


        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= read_card_header($meta->collection, $meta->id, $meta->icon, $user, $meta->name, $meta->action) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableDevices">
                            <thead>
                                <tr>
                                <?php foreach ($meta->data_order as $key) { ?>
                                    <th><?= collection_column_name(str_replace('devices__', '', $key)) ?></th>
                                <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        let logSort = {};
        var myDataTable = new DataTable('.dataTableDevices', {
            lengthChange: true,
            lengthMenu: [ [25, 50, 100, <?= $config->page_size ?>], [25, 50, 100, '<?= $config->page_size ?>'] ],
            order: [[ <?= $sort_column_index ?>, 'asc' ]],
            pageLength: 25,
            processing: true,
            searching: false,
            search: {
                return: true
            },
            serverSide: true,
            ajax: {
                url: '<?= $url ?>',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
                    <?php foreach ($meta->data_order as $key) {
                        $key = str_replace('devices.', '', $key);
                        echo "\n\t\t\t\t\tif ($(\"#search_" . $key . "\").val() != '') {\n";
                        echo "\t\t\t\t\t\td[\"" . str_replace('__', '.', $key) . "\"] = $(\"#search_" . $key . "\").val();\n";
                        echo "\t\t\t\t\t}\n";
                    } ?>
                    if (d.order[0]) {
                    <?php
                    foreach ($meta->data_order as $key) {
                        $key = str_replace('devices.', '', $key);
                        $sort_key = $key;
                        if (str_contains($key, "__")) {
                            $sort_key = str_replace('__', '.', $key);
                        } else {
                            $sort_key = 'devices.' . $key;
                        }
                        echo "\n\t\t\t\t\t\tif (d.columns[d.order[0].column].data == 'attributes.$key') {
                            logSort.column = 'devices.$key';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = '$sort_key';
                            } else {
                                d.sort = '-$sort_key';
                            }
                        }\n";
                    }
                    ?>
                    } else {
                        if (logSort.direction == 'asc') {
                            d.sort = '-' + logSort.column;
                            logSort.direction = 'desc';
                        } else {
                            d.sort = logSort.column;
                            logSort.direction = 'asc';
                        }
                    }
                    delete d.start;
                    delete d.length;
                    delete d.order;
                    delete d.columns;
                }
            },
            autoWidth: false,
            info: true,
            layout: {
                bottomStart: {
                    info: {
                        text: 'Showing _START_ to _END_ of _TOTAL_ entries'
                    }
                },
                bottomEnd: {
                    paging: {
                        type: 'full_numbers'
                    }
                },
                top2Start: {
                    buttons: [
                        { extend: 'copy', className: 'btn btn-light mb-2', text: 'Copy' },
                        { extend: 'csv', className: 'btn btn-light mb-2', text: 'CSV' },
                        { extend: 'excel', className: 'btn btn-light mb-2', text: 'Excel' },
                        { extend: 'print', className: 'btn btn-light mb-2', text: 'Print' }
                    ]
                },
                top2End: {
                    div: {
                        html: ""
                    }
                }
            },
            columns: [
                <?php foreach ($meta->data_order as $key) {
                    if ($key === 'devices__icon') {
                        $size = '42px';
                        if ($GLOBALS['button'] === 'btn-xs') {
                            $size = '30px';
                        }
                        echo '{ data: \'attributes.devices__icon\',
                            render: function (devices__icon) {
                                return devices__icon
                                    ? \'<img style="width:' . $size . ';" src="' . base_url() . 'device_images/\' + devices__icon + \'.svg" alt="\' + devices__icon + \'"/>\'
                                    : \'\';
                            }
                        },';
                        echo "\n";
                    } elseif ($key === 'icon') {
                        $size = '42px';
                        if ($GLOBALS['button'] === 'btn-xs') {
                            $size = '30px';
                        }
                        echo '{ data: \'attributes.icon\',
                            render: function (icon) {
                                return icon
                                    ? \'<img style="width:' . $size . ';" src="' . base_url() . 'device_images/\' + icon + \'.svg" alt="\' + icon + \'"/>\'
                                    : \'\';
                            }
                        },';
                        echo "\n";
                    } elseif ($key === 'devices__ip') {
                        echo '{ data: \'attributes.devices__ip\',
                        render: function (data, type, row, meta) {
                            if (row.attributes.devices__ip_padded) {
                                data = \'<span style="display:none;">\' + row.attributes.devices__ip_padded + \'</span>\' + data;
                            }
                            return data;
                            }
                        },';
                    } elseif ($key === 'devices__id') {
                        echo '{ data: \'attributes.devices__id\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" role=\"button\" class=\"btn ' . $GLOBALS['button'] . ' btn-primary\" href=\"' . base_url() . 'index.php/devices/" + row.attributes.devices__id + "\"><span title=\"View\" class=\"icon-eye\" aria-hidden=\"true\"></span></a>";
                            }
                        },';
                        echo "\n";
                    } elseif ($key === 'id') {
                        echo '{ data: \'attributes.id\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" role=\"button\" class=\"btn ' . $GLOBALS['button'] . ' btn-primary\" href=\"' . base_url() . 'index.php/devices/" + row.attributes.id + "\"><span title=\"View\" class=\"icon-eye\" aria-hidden=\"true\"></span></a>";
                            }
                        },';
                        echo "\n";
                    } else {
                        echo "{ data: 'attributes." .  $key . "' },\n";
                    }
                } ?>
            ],
            columnDefs: [
                <?php for ($i = 0; $i < count($meta->data_order); $i++) {
                    if ($meta->data_order[$i] === 'devices__id' or $meta->data_order[$i] === 'devices__icon' or $meta->data_order[$i] === 'id' or $meta->data_order[$i] === 'icon') {
                        echo "\n                {className: \"text-center\", target: $i, width: \"12em\", visible: true, name:\"" . $meta->data_order[$i] . "\"},";
                    } else {
                        echo "\n                {className: \"text-start\", target: $i, width: \"12em\", visible: true, name:\"" . $meta->data_order[$i] . "\"},";
                    }
                } ?>
            ],
        });
    });
}
</script>