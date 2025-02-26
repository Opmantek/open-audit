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
                    <div class="col-12">
                        <div id="logs_notice" class="container-fluid" style="display:none;">
                            <div id="logs_alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                            </div>
                        </div>
                        <?php $log_data_order = ['view', 'id', 'timestamp', 'ip', 'command_status', 'message']; ?>
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[1,"asc"]]'>
                            <thead>
                                <?php foreach ($log_data_order as $key) {
                                    $align = '';
                                    if ($key === 'id' or $key === 'view' or strpos($key, '_id') !== false) {
                                        $align = 'text-center dt-body-center';
                                    } ?>
                                    <th class="<?= $align ?>"><?= collection_column_name($key) ?></th>
                                <?php } ?>
                            </thead>
                            <thead>
                                <?php foreach ($log_data_order as $key) { ?>
                                    <th>
                                        <div class="input-group">
                                            <?php if ($key !== 'id' and $key !== 'view') { ?>
                                            <input id="alllog<?= $key ?>" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="Search <?= collection_column_name($key) ?>" />
                                            <?php } ?>
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
    $(document).ready(function() {
        $("#button_create").remove();

        let logSort = {};
        var myDataTable = new DataTable('.dataTableAjax', {
            lengthChange: true,
            lengthMenu: [ [10, 25, 50, 1000], [10, 25, 50, 1000] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            processing: true,
            searching: true,
            search: {
                return: true
            },
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>index.php/discovery_log?format=dataTables',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
<?php foreach ($log_data_order as $key) { ?>
                    if ($("#alllog<?= $key ?>").val() != '') {
                        d["<?= $key ?>"] = $("#alllog<?= $key ?>").val();
                    }
<?php } ?>
                    if (d.order[0]) {
                        if (d.columns[d.order[0].column].data == 'attributes.id') {
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.id';
                            } else {
                                d.sort = '-discovery_log.id';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.timestamp') {
                            logSort.column = 'discovery_log.timestamp';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.timestamp';
                            } else {
                                d.sort = '-discovery_log.timestamp';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.ip') {
                            logSort.column = 'discovery_log.ip';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.ip';
                            } else {
                                d.sort = '-discovery_log.ip';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.command_status') {
                            logSort.column = 'discovery_log.command_status';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.command_status';
                            } else {
                                d.sort = '-discovery_log.command_status';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.message') {
                            logSort.column = 'discovery_log.message';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'discovery_log.message';
                            } else {
                                d.sort = '-discovery_log.message';
                            }
                        }
                    } else {
                        if (devSort.direction == 'asc') {
                            d.sort = '-' + devSort.column;
                            devSort.direction = 'desc';
                        } else {
                            d.sort = devSort.column;
                            devSort.direction = 'asc';
                        }
                    }
                    delete d.start;
                    delete d.length;
                    delete d.order;
                    delete d.columns;
                }
            },
            autoWidth: false,
            columns: [
                { data: 'attributes.view', 
                    render: function (data, type, row, meta) {
                        return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url() ?>index.php/components/" + row.attributes.id + "?components.type=discovery_log\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                    }
                },
                { data: 'attributes.id' },
                { data: 'attributes.timestamp',
                    render: function (data, type, row, meta) {
                        return data;
                    }
                },
                { data: 'attributes.ip' },
                { data: 'attributes.command_status',
                    render: function (data, type, row, meta) {
                        if (row.attributes.command_status == 'success') {
                            data = '<span class="text-success"><strong>' + data + '</strong></span>';
                        } else if (row.attributes.command_status == 'fail') {
                            data = '<span class="text-danger"><strong>' + data + '</strong></span>';
                        } else if (row.attributes.command_status == 'warning') {
                            data = '<span class="text-warning"><strong>' + data + '</strong></span>';
                        } else if (row.attributes.command_status == 'notice') {
                            data = '<span class="text-info"><strong>' + data + '</strong></span>';
                        } else {
                            data = '<span class="text- "><strong>' + data + '</strong></span>';
                        }
                        return data;
                    }
                },
                { data: 'attributes.message',
                    render: function (message, type, row, meta) {
                        if (row.attributes.command != '') {
                            message = message + '<br><strong><em><?= __('Command') ?>: </em></strong><code>' + row.attributes.command + '</code>';
                        }
                        if (row.attributes.command_output != '') {
                            message = message + '<br><strong><em><?= __('Output') ?>: </em></strong><span class="output">' + row.attributes.command_output + '</span>';
                        }
                        if (row.attributes.message.includes('Nmap Command') || row.attributes.message.includes('IP Scan finish') || row.attributes.message.includes('IP Audit finish') || row.attributes.message.includes('Updating discovery log with non-responding IPs') || row.attributes.message.includes('Nmap response scanning completed')) {
                            if (row.attributes.command_time_to_execute != '0.000000') {
                                message = message + '<br><strong><em><?= __('Time to Execute') ?>: </em></strong><span class="output">' + row.attributes.command_time_to_execute + '</span>';
                            }
                        }
                        return message;
                    }
                },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "10em"},
                {className: "text-center", target: 1, width: "10em"},
                {className: "text-start", target: 2},
                {className: "text-start", target: 3, width: "10em"},
                {className: "text-start", title: "Status", target: 4, width: "10em"},
                {className: "text-start", target: 5}
            ],
            info: true,
            layout: {
                bottomEnd: {
                    paging: {
                        type: 'full_numbers'
                    }
                }
            }
        });

        $(".dataTablesearchField").on("keypress", function (evtObj) {
            // console.log(evtObj.keyCode);
            if (evtObj.keyCode == 13) {
                myDataTable.ajax.reload();
            }
        });

        myDataTable.on('xhr', function (e, settings, json) {
            $("#logs_notice").show();
            if (json.recordsFiltered == <?= $config->page_size ?>) {
                $("#logs_alert").html('Result limited to <?= $config->page_size ?> items as per configuration. There are actually ' + json.recordsTotal + ' discovery logs for this discovery. Use the search facility to refine your data.<button id="logs_button" type="button" class="btn-close" aria-label="Close"></button>');
                $("#logs_alert").show();
            } else {
                $("#logs_alert").hide();
            }
        });
        $(document).on('click', '#logs_button', function() {
            $(this).parent().hide();
        });
    });
}
</script>