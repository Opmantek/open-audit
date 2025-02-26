<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$user->permissions['components'] = '';
$collection = $meta->component;
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div id="notice" class="container-fluid" style="display:none;">
                        <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <div id="notice" class="container-fluid" style="display:none;">
                            <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                            </div>
                        </div>
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableComponents" data-order='[[2,"asc"]]'>
                            <thead>
                                <?php foreach ($meta->data_order as $key) {
                                    $align = '';
                                    if (strpos($key, 'id') === intval(strlen($key) - 2)) {
                                        $align = 'text-center';
                                    } ?>
                                    <th class="<?= $align ?>"><?= collection_column_name($key) ?></th>
                                <?php } ?>
                            </thead>
                            <thead>
                                <?php foreach ($meta->data_order as $key) { ?>
                                    <th>
                                        <div class="input-group">
                                            <input id="search_<?= $key ?>" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="Search <?= collection_column_name($key) ?>" />
                                        </div>
                                    </th>
                                <?php } ?>
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
        var myDataTable = new DataTable('.dataTableComponents', {
            lengthChange: true,
            lengthMenu: [ [25, 50, <?= $config->page_size ?>], [25, 50, 'All'] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            paging: true,
            processing: true,
            searching: false,
            search: {
                return: true
            },
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>index.php/components?components.type=<?= $meta->component ?>&format=json',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
                    if (d.order[0]) {
                    <?php
                    foreach ($meta->data_order as $key) {
                        $sort_key = $key;
                        if (strpos($key, "__") !== false) {
                            $sort_key = str_replace('__', '.', $key);
                        } else {
                            $sort_key = $collection . '.' . $key;
                        }
                        echo "\n\t\t\t\t\t\tif (d.columns[d.order[0].column].data == 'attributes.$key') {
                            logSort.column = '$key';
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
                    <?php foreach ($meta->data_order as $key) { ?>
                    if ($("#search_<?= $key ?>").val() != '') {
                        d.<?= $key ?> = $("#search_<?= $key ?>").val();
                    }
                    <?php } ?>
                    delete d.start;
                    delete d.length;
                    delete d.order;
                    delete d.columns;
                }
            },
            autoWidth: false,
            columnDefs: [
                <?php for ($i = 0; $i < count($meta->data_order); $i++) {
                    if (strpos($meta->data_order[$i], 'id') === intval(strlen($meta->data_order[$i]) - 2)) {
                        echo "\n                {className: \"text-center\", target: $i, width: \"12em\", visible: true, name:\"" . $meta->data_order[$i] . "\", sortable: false},";
                    } else {
                        echo "\n                {className: \"text-start\",  target: $i, width: \"12em\", visible: true, name:\"" . $meta->data_order[$i] . "\"},";
                    }
                }
                ?>
            ],
            columns: [
                <?php foreach ($meta->data_order as $column) {
                    if ($column === 'id') {
                        echo '{ data: \'attributes.id\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" role=\"button\" class=\"btn ' . $GLOBALS['button'] . ' btn-primary\" href=\"' . base_url() . 'index.php/components/" + row.attributes.id + "?components.type=' . $collection . '\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                            }
                        },';
                        echo "\n";
                    } else if ($column === 'device_id') {
                        echo '{ data: \'attributes.device_id\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" role=\"button\" class=\"btn ' . $GLOBALS['button'] . ' btn-primary\" href=\"' . base_url() . 'index.php/devices/" + row.attributes.device_id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                            }
                        },';
                        echo "\n";
                    } else if ($column === 'benchmark_id') {
                        echo '{ data: \'attributes.benchmark_id\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" role=\"button\" class=\"btn ' . $GLOBALS['button'] . ' btn-primary\" href=\"' . base_url() . 'index.php/benchmarks/" + row.attributes.benchmark_id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                            }
                        },';
                        echo "\n";
                    } else if ($column === 'external_ident' and $collection === 'benchmarks_result') {
                        echo '{ data: \'attributes.external_ident\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" href=\"' . base_url() . 'index.php/benchmarks_policies?benchmarks_policies.external_ident=" + row.attributes.external_ident + "\">" + row.attributes.external_ident + "</a>";
                            }
                        },';
                        echo "\n";
                    } else if ($column === 'result') {
                        echo '{ data: \'attributes.result\',
                            render: function (data, type, row, meta) {
                                if (row.attributes.result == \'pass\') {
                                    return "<span class=\"text-success\" aria-hidden=\"true\">" + row.attributes.result + "</span>";
                                } else if (row.attributes.result == \'fail\') {
                                    return "<span class=\"text-danger\" aria-hidden=\"true\">" + row.attributes.result + "</span>";
                                } else if (row.attributes.result == \'error\') {
                                    return "<span class=\"text-warning\" aria-hidden=\"true\">" + row.attributes.result + "</span>";
                                } else {
                                    return "<span class=\"text-primary\" aria-hidden=\"true\">" + row.attributes.result + "</span>";
                                }
                            }
                        },';
                        echo "\n";
                    } else {
                        echo "{ data: 'attributes.$column' },\n";
                    }
                } ?>
            ],
            info: true,
            language: {
                infoFiltered: ""
            },
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
                }
            }
        });

        /* This stops the sort when clicking in a search text box in the table header */
        $(".dataTablesearchField").on("click", function(e) { e.stopPropagation() });

        /* And don't automatically send the result - wait for the user to press <enter> / <return> */
        $(".dataTablesearchField").on("keypress", function (evtObj) {
            if (evtObj.keyCode == 13) {
                myDataTable.ajax.reload();
            }
        });

        myDataTable.on('xhr', function (e, settings, json) {
            if (json.warning) {
                $("#notice").show();
                $("#alert").html(json.warning + '<button id="button" type="button" class="btn-close" aria-label="Close"></button>');
                $("#alert").show();
            } else {
                $("#alert").hide();
            }
        });
        $(document).on('click', '#button', function() {
            $(this).parent().hide();
        });
    });
}
</script>