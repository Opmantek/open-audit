<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$data_order = $meta->data_order;
$url = base_url() . 'index.php/vendors?format=dataTables';
foreach ($meta->filter as $filter) {
    if (is_string($filter->value)) {
        $url .= '&' . $filter->name . '=' . $filter->operator . $filter->value;
    }
    if (!is_string($filter->value)){
        $url .= '&' . $filter->name . '=' . $filter->operator . '("' . implode('","', $filter->value) . '")';
    }
}
if (!empty($meta->groupby)) {
    $url .= '&groupby=' . $meta->groupby;
    $data_order = array('name', 'count');
}
if (empty($config->product) or $config->product === 'community') {
    echo '        <div class="container-fluid">
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                Note that there are actually ' . count($data) . ' reports available for Open-AudIT Professional and Enterprise. Click here to <a href="#"" data-bs-toggle="modal" data-bs-target="#modalCompareLicense">get a free license.</a>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>';
}
$urlFilter = '';
if (!empty($meta->filter)) {
    foreach ($meta->filter as $item) {
        $urlFilter .= '&' . $item->name . '=' . $item->operator . $item->value;
    }
}
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, 'Vendors in Your Database', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTable" data-order='[[0,"asc"]]'>
                            <thead>
                                <tr>
                                    <th class="text-left" style="width:50em"><?= __('Vendor') ?></th>
                                    <th class="text-center" style="width:20em"><?= __('Critical') ?></th>
                                    <th class="text-center" style="width:20em"><?= __('High') ?></th>
                                    <th class="text-center" style="width:20em"><?= __('Medium') ?></th>
                                    <th class="text-center" style="width:20em"><?= __('Low') ?></th>
                                    <th class="text-center" style="width:20em"><?= __('None') ?></th>
                                    <th class="text-center" style="width:20em"><?= __('Use') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (!empty($included['indb'])) { ?>
                                <?php foreach ($included['indb'] as $key => $value) { ?>
                                <?php
                                    $checked = '';
                                    if (!empty($included['indb'][$key]->use) and $included['indb'][$key]->use === 'y') {
                                        $checked = 'checked';
                                    }
                                    $disabled = 'disabled';
                                    if ($update) {
                                        $disabled = '';
                                    } 
                                ?>
                                <tr>
                                    <td class="text-left"><a href="<?= base_url() ?>index.php/vulnerabilities?vulnerabilities.vendor=<?= $key ?>"><?= $key ?></a></td>
                                    <td class="text-center text-critical"><?= $included['indb'][$key]->critical ?></td>
                                    <td class="text-center text-high"><?= $included['indb'][$key]->high ?></td>
                                    <td class="text-center text-medium"><?= $included['indb'][$key]->medium ?></td>
                                    <td class="text-center text-low"><?= $included['indb'][$key]->low ?></td>
                                    <td class="text-center text-none"><?= $included['indb'][$key]->none ?></td>
                                    <!--<td class="text-center"><?= $included['indb'][$key]->use ?></td>-->
                                    <td class="text-center"><input class="useflag" name="<?= $key ?>" type="checkbox" --data-id="<?= intval($included['indb'][$key]->id) ?>" value="<?= $included['indb'][$key]->use ?>" <?= $checked ?> <?= $disabled ?>></td>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, 'Vendors Available From FirstWave', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[6,"asc"],[0,"desc"]]'>
                        <thead>
                            <tr>
<?php foreach ($data_order as $key) {
                                $align = 'text-center dt-body-center';
                                if ($key === 'name') {
                                    $align = 'text-left dt-body-left';
                                }
                                echo '                                <th class="' . $align . '">' . collection_column_name($key) . "</th>\n";
                            } ?>
                            </tr>
                            <tr>
<?php foreach ($data_order as $key) {
                                echo '                                <th><div class="input-group">';
                                if ($key !== 'id' and $key !== 'count' and $key !== 'view') {
                                    echo '<input id="alllog' . $key . '" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="Search ' . collection_column_name($key) . '">';
                                }
                                echo "</div></th>\n";
                            } ?>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        let logSort = {};
        var myDataTable = new DataTable('.dataTableAjax', {
            autoWidth: false,
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
                url: '<?= $url ?>',
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
                        if (d.columns[d.order[0].column].data == 'attributes.name') {
                            logSort.column = 'vendors.name';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vendors.name';
                            } else {
                                d.sort = '-vendors.name';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.critical') {
                            logSort.column = 'vendors.critical';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vendors.critical';
                            } else {
                                d.sort = '-vendors.critical';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.high') {
                            logSort.column = 'vendors.high';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vendors.high';
                            } else {
                                d.sort = '-vendors.high';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.medium') {
                            logSort.column = 'vendors.medium';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vendors.medium';
                            } else {
                                d.sort = '-vendors.medium';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.low') {
                            logSort.column = 'vendors.low';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vendors.low';
                            } else {
                                d.sort = '-vendors.low';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.none') {
                            logSort.column = 'vendors.none';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vendors.none';
                            } else {
                                d.sort = '-vendors.none';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.use') {
                            logSort.column = 'discovery_log.use';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vendors.use';
                            } else {
                                d.sort = '-vendors.use';
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
            columns: [
                { data: 'attributes.name' },
                { data: 'attributes.critical',
                    render: function (data, type, row, meta) {
                        return '<span class="text-center text-critical">' + row.attributes.critical + '</span>';
                    }
                },
                { data: 'attributes.high',
                    render: function (data, type, row, meta) {
                        return '<span class="text-center text-high">' + row.attributes.high + '</span>';
                    }
                },
                { data: 'attributes.medium',
                    render: function (data, type, row, meta) {
                        return '<span class="text-center text-medium">' + row.attributes.medium + '</span>';
                    }
                },
                { data: 'attributes.low',
                    render: function (data, type, row, meta) {
                        return '<span class="text-center text-low">' + row.attributes.low + '</span>';
                    }
                },
                { data: 'attributes.none',
                    render: function (data, type, row, meta) {
                        return '<span class="text-center text-none">' + row.attributes.none + '</span>';
                    }
                },
                { data: 'attributes.use',
                    render: function (data, type, row, meta) {
                        $checked = '';
                        if (row.attributes.use == 'y') {
                            $checked = 'checked';
                        }
                        return '<input class="useflag" name="<?= $key ?>" --data-id="' + row.attributes.id + '" type="checkbox" value="' + row.attributes.use + '" ' + $checked + ' <?= $disabled ?>>';
                    }
                },
            ],
            columnDefs: [
                {className: "text-left", target: 0, width: "50em"},
                {className: "text-center", target: 1, width: "20em"},
                {className: "text-center", target: 2, width: "20em"},
                {className: "text-center", target: 3, width: "20em"},
                {className: "text-center", target: 4, width: "20em"},
                {className: "text-center", target: 5, width: "20em"},
                {className: "text-center", target: 6, width: "20em"}
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



        $(document).on('click', '.useflag', function (e) {
            console.log('');
            console.log($(this).prop("name"));
            console.log($(this).val());
            console.log($(this).attr("--data-id"));
            // Send this as a vendors::update

            if ($(this).val() == 'y') {
                $(this).val('n');
            } else {
                $(this).val('y');
            }

            var data = {};
            data["data"] = {};
            data["data"]["id"] = $(this).attr("--data-id");
            data["data"]["type"] = 'vendors';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]["use"] = $(this).val();
            data = JSON.stringify(data);
            $url = "<?= base_url() ?>index.php/vendors/" + $(this).attr("--data-id");
            $.ajax({
                type: "PATCH",
                url: $url,
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $("#liveToastSuccess-header").text("Update Succeeded");
                    $("#liveToastSuccess-body").text("Vendors have been updated.");
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-success'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    $("#liveToastFailure-header").text("Update Failed");
                    $("#liveToastFailure-body").text(data.message);
                    var toastElList = [].slice.call(document.querySelectorAll('.toast-failure'));
                    var toastList = toastElList.map(function(toastEl) {
                        return new bootstrap.Toast(toastEl)
                    });
                    toastList.forEach(toast => toast.show());
                }
            });


        });

    });
}
</script>
