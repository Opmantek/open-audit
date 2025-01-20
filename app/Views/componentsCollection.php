<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$user->permissions['components'] = '';
if (!empty($data[0]->type) and $data[0]->type === 'benchmarks_result') {
    for ($i = 0; $i < count($data); $i++) {
        unset($data[$i]->attributes->first_seen);
        unset($data[$i]->attributes->last_seen);
        $data[$i]->attributes->policy = '<a title="' . __('View Policy') . '" role="button" class="btn ' . $GLOBALS['button'] . ' btn-primary" href="' . url_to('benchmarks_policiesRead', intval($data[$i]->attributes->{'benchmarks_policies.id'})) . '"><span style="width:1rem;" title="' . __('View Policy') . '" class="fa fa-eye" aria-hidden="true"></span></a>';
        unset($data[$i]->attributes->{'benchmarks_policies.id'});
        switch ($data[$i]->attributes->result) {
            case 'pass':
                $data[$i]->attributes->result = '<span class="text-success">' . $data[$i]->attributes->result . '</span>';
                break;

            case 'fail':
                $data[$i]->attributes->result = '<span class="text-danger">' . $data[$i]->attributes->result . '</span>';
                break;

            case 'error':
                $data[$i]->attributes->result = '<span class="text-warning">' . $data[$i]->attributes->result . '</span>';
                break;

            default:
                $data[$i]->attributes->result = '<span class="text-primary">' . $data[$i]->attributes->result . '</span>';
                break;
        }
    }
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <div id="notice" class="container-fluid" style="display:none;">
                            <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                            </div>
                        </div>
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableComponents" data-order='[[2,"asc"]]'>
                            <thead>
                                <?php foreach ($meta->data_order as $key) { ?>
                                    <th ><?= collection_column_name($key) ?></th>
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

        let ipSort = {};
        var myDataTable = new DataTable('.dataTableComponents', {
            lengthChange: true,
            lengthMenu: [ [25, 50, <?= $config->page_size ?>], [25, 50, 'All'] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            paging: true,
            processing: true,
            searching: true,
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>index.php/components?components.type=<?= $meta->component ?>&format=json',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
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
                // {className: "text-start", target: 0, width: "15em", title: "View"}
            ],
            columns: [
                <?php foreach ($meta->data_order as $column) {
                    echo "{ data: 'attributes.$column' },\n";
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