<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/create_functions.php';
include 'shared/common_functions.php';
$data_order = ['select', 'id', 'common_name', 'issuer_name', 'valid_from', 'valid_to'];
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= create_card_header($meta->collection, $meta->icon, $user); ?>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="<?= url_to($meta->collection . 'Create') ?>">
                        <div class="row">
                            <div class="col-md-6">
                                    <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                                    <input type="hidden" value="" name="data[attributes][serial]" />

                                    <?= create_text_field('data[attributes][name]', __('Name'), $dictionary->attributes->create, 'Choose a certificate below.') ?>
                                    <?= create_select('data[attributes][org_id]', __('Organisation'), $orgs, $dictionary->attributes->create) ?>
                                    <?= create_select('data[attributes][auto_renew]', __('AutoRenew'), [], $dictionary->attributes->create) ?>

                                    <br>
                                    <div class="row">
                                        <div class="offset-2 col-8">
                                            <label for="submit" class="form-label">&nbsp;</label>
                                            <button id="submit" name="submit" type="submit" class="btn btn-primary"><?= __('Submit'); ?></button>
                                        </div>
                                    </div>


                            </div>
                            <div class="col-md-6">
                                    <?= create_text_field('data[attributes][managed_by]', __('Managed By'), $dictionary->attributes->create) ?>
                                    <?= create_text_field('data[attributes][action_date]', __('Action Date'), $dictionary->attributes->create, '', 'date') ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-1">
                            <br><br>
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[1,"asc"]]'>
                                <thead>
                                    <tr>
                                    <?php foreach ($data_order as $key) { ?>
                                        <th><?= create_column_name($key) ?></th>
                                    <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#data\\[attributes\\]\\[name\\]").prop( "disabled", true );




        let logSort = {};
        var myDataTable = new DataTable('.dataTableAjax', {
            lengthChange: true,
            lengthMenu: [ [25, 50, <?= $config->page_size ?>], [25, 50, 'All'] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            processing: true,
            searching: true,
            search: {
                return: true
            },
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>index.php/components?components.type=certificate&format=json',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
<?php foreach ($data_order as $key) { ?>
                    if ($("#alllog<?= $key ?>").val() != '') {
                        d["<?= $key ?>"] = $("#alllog<?= $key ?>").val();
                    }
<?php } ?>
                    if (d.order[0]) {
                        if (d.columns[d.order[0].column].data == 'attributes.common_name') {
                            logSort.column = 'certificate.common_name';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'certificate.common_name';
                            } else {
                                d.sort = '-certificate.common_name';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.issuer_name') {
                            logSort.column = 'certificate.issuer_name';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'certificate.issuer_name';
                            } else {
                                d.sort = '-certificate.issuer_name';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.valid_from') {
                            logSort.column = 'certificate.valid_from';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'certificate.valid_from';
                            } else {
                                d.sort = '-certificate.valid_from';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.valid_to') {
                            logSort.column = 'certificate.valid_to';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'certificate.valid_to';
                            } else {
                                d.sort = '-certificate.valid_to';
                            }
                        }
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
            columns: [
                { data: 'attributes.serial', 
                    render: function (data, type, row, meta) {
                        return "<input class=\"form-check-input\" type=\"radio\" name=\"data[attributes][serial]\" id=\"" + row.attributes.serial + "\" value=\"" + row.attributes.serial + "\">";
                    }
                },
                { data: 'attributes.id', 
                    render: function (data, type, row, meta) {
                        return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" target=\"_blank\" href=\"<?= base_url() ?>index.php/components/" + row.attributes.id + "?components.type=certificate\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                    }
                },
                { data: 'attributes.common_name' },
                { data: 'attributes.issuer_name' },
                { data: 'attributes.valid_from',
                    render: function (data, type, row, meta) {
                        return data;
                    }
                },
                { data: 'attributes.valid_to',
                    render: function (data, type, row, meta) {
                        return data;
                    }
                },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "3em"},
                {className: "text-center", target: 1, width: "3em"},
                {className: "text-start", target: 2, width: "10em"},
                {className: "text-start", target: 3, width: "10em"},
                {className: "text-center", target: 4, width: "10em"},
                {className: "text-center", target: 5, width: "10em"}
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


    });
}
</script>
