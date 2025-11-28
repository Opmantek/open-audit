<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$data_order = ['id', 'count', 'base_score', 'base_severity', 'cve', 'name', 'vendor', 'published'];
$url = base_url() . 'index.php/vulnerabilities?format=dataTables';
foreach ($meta->filter as $filter) {
    if (is_string($filter->value)) {
        $url .= '&' . $filter->name . '=' . $filter->operator . $filter->value;
    }
    if (!is_string($filter->value)){
        $url .= '&' . $filter->name . '=' . $filter->operator . '("' . implode('","', $filter->value) . '")';
    }
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
            <div class="card" style="background-color: #F9FAFB; border: 0px;">
                <div class="card-body">
                    <div class="row">
                        <?php
                        $total = 0;
                        foreach ($included['severity'] as $key => $value) {
                            $from = (!empty($included['all_severity']->{$key})) ? intval($included['all_severity']->{$key}) : 0;
                            $total = $total + $from;
                            $image_style = '';
                            if ($key === 'critical') {
                                $alert = 'danger';
                            } else if ($key === 'high') {
                                $alert = 'danger alert-high';
                                $image_style = 'filter: invert(63%) sepia(75%) saturate(3838%) hue-rotate(352deg) brightness(104%) contrast(98%);';
                            } else if ($key === 'medium') {
                                $alert = 'warning';
                            } else if ($key === 'low') {
                                $alert = 'info';
                            }
                            ?>
                        <div class="col-2">
                            <div class="alert alert-<?= $alert ?>" role="alert">
                                <div class="row">
                                    <div class="col-8">
                                        <span style="color: #65758B"><?= ucwords($key) ?></span><br>
                                        <a href="<?= url_to('vulnerabilitiesCollection') ?>?vulnerabilities.base_severity=<?= $key ?>&count=>0"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;"><?= $value ?></span></a><br>
                                        <?= __('Detected CVEs') ?>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="float-end" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                                            <a href="<?= url_to('vulnerabilitiesCollection') ?>?vulnerabilities.base_severity=<?= $key ?>&count=>0"><img src="<?= base_url() ?>icons/security-<?= $key ?>.svg" style="width:32px;" style="<?= $image_style ?>"/></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="col-2">
                            <div class="alert alert-success" role="alert">
                                <div class="row">
                                    <div class="col-8">
                                        <span style="color: #65758B"><?= __('Devices') ?></span><br>
                                        <a href="<?= url_to('devicesCollection') ?>?devices.cve=!=&properties=devices.id,devices.icon,devices.name,devices.ip,devices.os_family,devices.cve_count"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;"><?= $included['device_count'] ?></span></a><br>
                                        <?= __('Affected Devices') ?>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="float-end" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                                            <img src="<?= base_url() ?>icons/devices.svg" style="width:32px;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="alert alert-primary" role="alert">
                                <div class="row">
                                    <div class="col-8">
                                        <span style="color: #65758B"><?= __('All Vulnerabilities') ?></span><br>
                                        <a href="<?= url_to('vulnerabilitiesCollection') ?>"><span style="font-weight: 700; font-size: 1.875rem; color:#494242;"><?= number_format($total) ?></span></a><br>
                                        <?= __('All CVEs') ?>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="float-end" style="background-color: rgba(255, 255, 255, 0.4); border-radius: 6px; padding: 12px; min-width:64px; max-width:64px; height:56px;">
                                            <img src="<?= base_url() ?>icons/security-grey.svg" style="width:32px;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[2,"asc"]]' id="cveTable">
                        <thead>
                            <tr>
                                <th class="text-center dt-body-center" data-orderable="false"><?= __('View') ?></th>
                                <th class="text-center dt-body-center"><?= __('Devices') ?></th>
                                <th class="text-center dt-body-center"><?= __('Score') ?></th>
                                <th class="text-center dt-body-center"><?= __('Severity') ?></th>
                                <th class="text-center dt-body-center"><?= __('CVE') ?></th>
                                <th><?= __('Name') ?></th>
                                <th class="text-center dt-body-center"><?= __('Vendor') ?></th>
                                <th class="text-center dt-body-center"><?= __('Published') ?></th>
                            </tr>
                            <tr>
                                <th data-orderable="false"></th>
                                <th class="nobutton"></th>
                                <th class="nobutton"></th>
                                <th class="nobutton text-center dt-body-center"><div class="input-group"><input id="alllogseverity" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="<?= __('Search') ?> <?= __('Severity') ?>"></div></th>
                                <th class="nobutton text-center dt-body-center"><div class="input-group"><input id="alllogcve" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="<?= __('Search') ?> <?= __('CVE') ?>"></div></th>
                                <th class="nobutton"><div class="input-group"><input id="alllogname" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="<?= __('Search') ?> <?= __('Name') ?>"></div></th>
                                <th class="nobutton text-center dt-body-center"><div class="input-group"><input id="alllogvendor" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="<?= __('Search') ?> <?= __('Vendor') ?>"></div></th>
                                <th class="nobutton text-center dt-body-center"><div class="input-group"><input id="alllogpublished" type="search" class="form-control form-control-sm dataTablesearchField" placeholder="<?= __('Search') ?> <?= __('Published') ?>"></div></th>
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
            $('#submitV').html("<span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>&nbsp;<?= __('Updating') ?>");
            $("#vulnerabilityRequestForm").submit();
        });

        $('#executeAll').on('click', function () {
            if (confirm("Are you sure?\n\nThis will execute all <?= number_format($total) ?> vulnerabilities and may impact performance.") == true) {
                window.location = "<?= url_to('vulnerabilitiesUpdateDevicesAll') ?>";
            };
        });

        // If a user clicks Update Vulnerabilities, disable the other buttons and show a spinner to indicate activity
        document.getElementById('update_vulnerabilities').addEventListener('click', function(event) {
            $("#update_vulnerabilities").html("<span class=\"spinner-border spinner-border-sm\" aria-hidden=\"true\"></span>&nbsp;<?= __('Updating') ?>");
            $("#update_vulnerabilities").attr("href", "#");
            $("#button_import_json").attr("href", "#");
            $("#request_vulnerability").attr("data-bs-target", "");
            $("#vendors").attr("href", "#");
            window.location.href = "<?= url_to('newsExecuteAllVulnerabilities') ?>";
        });

        let logSort = {};
        var myDataTable = new DataTable('.dataTableAjax', {
            autoWidth: false,
            lengthChange: true,
            lengthMenu: [ [10, 25, 50, 1000], [10, 25, 50, 1000] ],
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
                        if (d.columns[d.order[0].column].data == 'attributes.base_score') {
                            logSort.column = 'vulnerabilities.base_score';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.base_score';
                            } else {
                                d.sort = '-vulnerabilities.base_score';
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
                        html: "<a href=\"<?= url_to('helpFAQ') ?>?name=Searching Using DataTables\" type=\"button\" class=\"btn btn-light mb-2\">HowTo Search</a>"
                    }
                }
            },
            columns: [
                { data: 'attributes.view',
                    render: function (data, type, row, meta) {
                        return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url() ?>index.php/vulnerabilities/" + row.attributes.id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"icon-eye\" aria-hidden=\"true\"></span></a>";
                    }
                },
                { data: 'attributes.count',
                    render: function (data, type, row, meta) {
                        return "<span style=\"display:none;\">" + row.attributes.count + "</span><a title=\"<?= __('Devices') ?>\" role=\"button\" class=\"btn <?= $GLOBALS['button'] ?> btn-devices\" href=\"<?= base_url() ?>index.php/vulnerabilities/" + row.attributes.id + "#devices\"><strong>" + row.attributes.count + "</strong></a>";
                    }
                },
                { data: 'attributes.base_score',
                    render: function (data, type, row, meta) {
                        return "<span style=\"display:none;\">" + String(row.attributes.base_score).padStart(4, '0') + "</span>" + row.attributes.base_score;
                    }
                },
                { data: 'attributes.base_severity',
                    render: function (data, type, row, meta) {
                        data = '<h5><a href="?<?= $urlFilter ?>&vulnerabilities.base_severity=' + row.attributes.base_severity + '"><span class="badge rounded-pill text-bg-' + row.attributes.base_severity + '">' + row.attributes.base_severity + '</span></a></h5>';
                        return data;
                    }
                },
                { data: 'attributes.cve' },
                { data: 'attributes.name' ,
                    render: function (data, type, row, meta) {
                        return '<span class="d-inline-block text-truncate" style="max-width:58em;">' + row.attributes.name + '</span>';
                    }
                },
                { data: 'attributes.vendor',
                    render: function (data, type, row, meta) {
                        return '<span class="d-inline-block text-truncate" style="max-width:10em;"><a href="?vulnerabilities.vendor=' + row.attributes.vendor + '">' + row.attributes.vendor + '</a></span>';
                    }
                },
                { data: 'attributes.published',
                    render: function (data, type, row, meta) {
                        return data;
                    }
                },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "7em"},
                {className: "text-center", target: 1, width: "7em"},
                {className: "text-center", target: 2, width: "7em"},
                {className: "text-center", target: 3, width: "10em"},
                {className: "text-center", target: 4, width: "10em"},
                {className: "text-left", target: 5},
                {className: "text-center", target: 6, width: "10em"},
                {className: "text-center", target: 7, width: "15em"}
            ],
            info: true
        });

        /* This stops the sort when clicking in a search text box in the table header */
        $(".dataTablesearchField").on("click", function(e) {
            e.stopPropagation();
        });

        $(".dataTablesearchField").on("keypress", function (evtObj) {
            if (evtObj.keyCode == 13) {
                myDataTable.ajax.reload();
            }
        });

        $(".nobutton").children('.dt-column-order').remove();

    });
}
</script>


