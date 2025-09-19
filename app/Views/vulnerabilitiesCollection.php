<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$data_order = $meta->data_order;
$url = base_url() . 'index.php/vulnerabilities?format=dataTables';
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
    $data_order = array('vendor', 'count');
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
                            <div class="row">
                                <div class="col-3 clearfix">
                                    <h6><span class="oa-icon\"></span>Vulnerabilities with Results</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($included['severity'] as $key => $value) { ?>
                                <div class="col-lg-2 text-center">
                                    <a href="<?= url_to('vulnerabilitiesCollection') ?>?vulnerabilities.base_severity=<?= $key ?>&count=>0" class="btn btn-light btn-lg text-bg-<?= (!empty($key)) ? $key : 'success' ?>" role="button">
                                        <span class="badge rounded-pill text-bg-<?= $key ?>"><?= (!empty($key)) ? $key : 'unknown' ?> :: <?= $value ?></span><br>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-3 clearfix">
                                    <h6><span class="oa-icon\"></span>All Vulnerabilities</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($included['all_severity'] as $key => $value) { ?>
                                <div class="col-lg-2 text-center">
                                    <a href="<?= url_to('vulnerabilitiesCollection') ?>?vulnerabilities.base_severity=<?= $key ?>" class="btn btn-light btn-lg text-bg-<?= (!empty($key)) ? $key : 'success' ?>" role="button">
                                        <span class="badge rounded-pill text-bg-<?= $key ?>"><?= (!empty($key)) ? $key : 'unknown' ?> :: <?= $value ?></span><br>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <br>


            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <?php if (empty($meta->groupby)) { ?>
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[2,"desc"]]'>
                    <?php } else { ?>
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[0,"desc"]]'>
                    <?php } ?>
                        <thead>
                            <tr>
<?php foreach ($data_order as $key) {
                                $align = '';
                                if ($key === 'id' or $key === 'count' or $key === 'view' or strpos($key, '_id') !== false) {
                                    $align = 'text-center dt-body-center';
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



<div class="modal fade" id="requestVulnerabilityModal" tabindex="-1" aria-labelledby="requestVulnerabilityModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?= url_to('vulnerabilitiesRequestSingle') ?>" id="vulnerabilityRequestForm">
                <input type="hidden" value="<?= $meta->access_token ?>" id="data[access_token]" name="data[access_token]" />
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="requestVulnerabilityModalLabel"><?= __('Request a Specific CVE') ?></h1>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <!--<label for="basic-url" class="form-label">CVE ID</label>-->
                        <div class="input-group">
                            <input type="text" class="form-control" id="data[attributes][cve]" name="data[attributes][cve]" placeholder="CVE-2025-1234" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <div class="form-text" id="basic-addon4">
                            <?= __('This CVE will be retrieved and overwrite the existing CVE if it exists.') ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= __('Cancel') ?></button>
                    <button type="button" type="submit" id="submitV" name="submitV" class="btn btn-primary"><?= __('Submit') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>



<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {
        $("#button_create").remove();
        $("#button_export_csv").remove();
        $("#button_export_json").remove();

        $('#submitV').on('click', function () {
            console.log('clicked submit');
            $("#vulnerabilityRequestForm").submit();
        });

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
                        if (d.columns[d.order[0].column].data == 'attributes.id') {
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.id';
                            } else {
                                d.sort = '-vulnerabilities.id';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.base_severity') {
                            logSort.column = 'vulnerabilities.base_severity';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.base_severity';
                            } else {
                                d.sort = '-vulnerabilities.base_severity';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.cve') {
                            logSort.column = 'vulnerabilities.cve';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.cve';
                            } else {
                                d.sort = '-vulnerabilities.cve';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.name') {
                            logSort.column = 'vulnerabilities.name';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.name';
                            } else {
                                d.sort = '-vulnerabilities.name';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.vendor') {
                            logSort.column = 'vulnerabilities.vendor';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.vendor';
                            } else {
                                d.sort = '-vulnerabilities.vendor';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.published') {
                            logSort.column = 'vulnerabilities.published';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.published';
                            } else {
                                d.sort = '-vulnerabilities.published';
                            }
                        }
                        if (d.columns[d.order[0].column].data == 'attributes.count') {
                            logSort.column = 'discovery_log.message';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.count';
                            } else {
                                d.sort = '-vulnerabilities.count';
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
                { data: 'attributes.view', 
                    render: function (data, type, row, meta) {
                        return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url() ?>index.php/vulnerabilities/" + row.attributes.id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                    }
                },
                { data: 'attributes.base_severity',
                    render: function (data, type, row, meta) {
                        data = '<h5><a href="?<?= $urlFilter ?>&vulnerabilities.base_severity=' + row.attributes.base_severity + '"><span class="badge rounded-pill text-bg-' + row.attributes.base_severity + '">' + row.attributes.base_severity + '</span></a></h5>';
                        return data;
                    }
                },
                { data: 'attributes.cve' },
                { data: 'attributes.name' },
                { data: 'attributes.vendor',
                    render: function (data, type, row, meta) {
                        return '<a href="?vulnerabilities.vendor=' + row.attributes.vendor + '">' + row.attributes.vendor + '</a>';
                    }
                },
                { data: 'attributes.published',
                    render: function (data, type, row, meta) {
                        return data;
                    }
                },
                { data: 'attributes.count' },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "10em"},
                {className: "text-center", target: 1, width: "10em"},
                {className: "text-center", target: 2, width: "10em"},
                {className: "text-left", target: 3, width: "50em"},
                {className: "text-center", target: 4, width: "10em"},
                {className: "text-center", target: 5, width: "20em"},
                {className: "text-center", target: 6, width: "10em"}
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

    });
}
</script>


