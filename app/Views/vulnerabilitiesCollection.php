<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$data_order = ['view', 'status', 'base_severity', 'cve', 'name', 'vendor', 'published', 'affected']; 
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
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableAjax" data-order='[[3,"asc"]]'>
                        <thead>
                            <tr>
<?php foreach ($data_order as $key) {
                                $align = '';
                                if ($key === 'id' or $key === 'affected' or $key === 'view' or strpos($key, '_id') !== false) {
                                    $align = 'text-center dt-body-center';
                                }
                                echo '                                <th class="' . $align . '">' . collection_column_name($key) . "</th>\n";
                            } ?>
                            </tr>
                            <tr>
<?php foreach ($data_order as $key) {
                                echo '                                <th><div class="input-group">';
                                if ($key !== 'id' and $key !== 'affected' and $key !== 'view') {
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

<script>
window.onload = function () {
    $(document).ready(function () {
        $("#button_create").remove();
        $("#button_import_csv").remove();
        $("#button_export_csv").remove();
        $("#button_export_json").remove();

        
        <?php echo '$(".page-title-right").append(\'<div style="padding-right:6px;" class="btn-group btn-group-sm float-start" role="group"><div class="page-title-right"><select class="form-select" id="severity_button" style="background-color:#f8f9fa;"><option value="pending">' . __('Severity') . '</option><option value="!=">' . __('All') . '</option><option value="low">' . __('Low') . '</option><option value="medium">' . __('Medium') . '</option><option value="high">' . __('High') . '</option><option value="critical">' . __('Critical') . '</option></select></div></div><div style="padding-right:12px; padding-left:8px; padding-top:7px;" class="btn-group btn-group-sm float-start" role="group">' . __('or') . '</div><div style="padding-right:6px;" class="btn-group btn-group-sm float-start" role="group"><div class="page-title-right"><select class="form-select" id="status_button" style="background-color:#f8f9fa;"><option value="pending">' . __('Status') . '</option><option value="!=">' . __('All') . '</option><option value="pending">' . __('Pending') . '</option><option value="unlikely">' . __('Unlikely') . '</option><option value="confirmed">' . __('Confirmed') . '</option><option value="declined">' . __('Declined') . '</option></select></div></div>\')'; ?>

        $('#severity_button').on('change', function () {
            var url = $(this).val(); // get selected value
            console.log(url);
            if (url) { // require a URL
                window.location = "<?= url_to('vulnerabilitiesCollection') ?>?vulnerabilities.base_severity=" + url; // redirect
            }
            return false;
        });

        <?php #echo '$(".page-title-right").prepend(\'<div style="padding-right:6px;" class="btn-group btn-group-sm float-start" role="group"><div class="page-title-right"><select class="form-select" id="status_button" style="background-color:#f8f9fa;"><option value="pending">' . __('Status') . '</option><option value="!=">' . __('All') . '</option><option value="pending">' . __('Pending') . '</option><option value="unlikely">' . __('Unlikely') . '</option><option value="confirmed">' . __('Confirmed') . '</option><option value="declined">' . __('Declined') . '</option></select></div></div>\')'; ?>

        $('#status_button').on('change', function () {
            var url = $(this).val(); // get selected value
            console.log(url);
            if (url) { // require a URL
                window.location = "<?= url_to('vulnerabilitiesCollection') ?>?vulnerabilities.status=" + url; // redirect
            }
            return false;
        });



<?php if (empty($user->toolbar_style) or $user->toolbar_style === 'icontext') { ?>
        // $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" class=\"btn btn-light mb-2\" title=\"<?= __("Update Vulnerabilities") ?>\" href=\"<?= url_to('newsExecuteAllVulnerabilities') ?>\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-rss text-primary\"></span><?= __("Update Vulnerabilities") ?></a>");
<?php } elseif ($user->toolbar_style === 'icon') { ?>
        $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" class=\"btn btn-light mb-2\" title=\"<?= __("Update Vulnerabilities") ?>\" href=\"<?= url_to('newsExecuteAllVulnerabilities') ?>\"><span class=\"fa-solid fa-rss text-primary\"></span></a>");
<?php } elseif ($user->toolbar_style === 'text') { ?>
        $(".page-title-right").append("<a style=\"margin-right:6px;\" role=\"button\" class=\"btn btn-light mb-2\" title=\"<?= __("Update Vulnerabilities") ?>\" href=\"<?= url_to('newsExecuteAllVulnerabilities') ?>\"><?= __("Update Vulnerabilities") ?></a>");
<?php } ?>

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
                        if (d.columns[d.order[0].column].data == 'attributes.status') {
                            logSort.column = 'vulnerabilities.status';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.status';
                            } else {
                                d.sort = '-vulnerabilities.status';
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
                        if (d.columns[d.order[0].column].data == 'attributes.affected') {
                            logSort.column = 'discovery_log.message';
                            logSort.direction = d.order[0].dir;
                            if (d.order[0].dir == 'asc') {
                                d.sort = 'vulnerabilities.affected';
                            } else {
                                d.sort = '-vulnerabilities.affected';
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
                        return "<a title=\"View\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url() ?>index.php/vulnerabilities/" + row.attributes.id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                    }
                },
                { data: 'attributes.status',
                    render: function (data, type, row, meta) {
                        if (row.attributes.status == 'unlikely') {
                            data = '<h5><a href="?vulnerabilities.status=unlikely" alt="<?= __('The vulnerability has been published no matching software records were detected in the database.') ?>"><span class="badge rounded-pill text-bg-secondary"><?= __('unlikely') ?></span></a></h5>';

                        } else if (row.attributes.status == 'pending') {
                            data = '<h5><a href="?vulnerabilities.status=pending" title="<?= __('The vulnerability has been published but is awaiting further analysis by the user.') ?>"><span class="badge rounded-pill text-bg-primary"><?= __('pending') ?></span></a></h5>';

                        } else if (row.attributes.status == 'confirmed') {
                            data = '<h5><a href="?vulnerabilities.status=confirmed" title="<?= __('The vulnerability has been reviewed by the user and it is relevant to this installation.') ?>"><span class="badge rounded-pill text-bg-success"><?= __('confirmed') ?></span></a></h5>';

                        } else if (row.attributes.status == 'declined') {
                            data = '<h5><a href="?vulnerabilities.status=declined" title="<?= __('The vulnerability has been published but has been determined by the user that it is not relevant to this installation.') ?>"><span class="badge rounded-pill text-bg-danger"><?= __('declined') ?></span></a></h5>';

                        } else if (row.attributes.status == 'other') {
                            data = '<h5><a href="?vulnerabilities.status=other" title="Other"><span class="badge rounded-pill text-bg-warning"><?= __('other') ?></span></a></h5>';

                        } else {
                            data = '<h5><a href="?vulnerabilities.status=" title="<?= __('empty') ?>"><span class="badge rounded-pill text-bg-warning" ><?= __('empty') ?></span></a></h5>';
                        }
                        return data;
                    }
                },
                { data: 'attributes.base_severity',
                    render: function (data, type, row, meta) {
                        data = '<h5><a href="?vulnerabilities.base_severity=' + row.attributes.base_severity + '"><span class="badge rounded-pill text-bg-' + row.attributes.base_severity + '">' + row.attributes.base_severity + '</span></a></h5>';
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
                { data: 'attributes.affected' },
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "10em"},
                {className: "text-center", target: 1, width: "10em"},
                {className: "text-center", target: 2, width: "10em"},
                {className: "text-center", target: 3, width: "10em"},
                {className: "text-start", target: 4, width: "50em"},
                {className: "text-center", target: 5, width: "10em"},
                {className: "text-center", target: 6, width: "20em"},
                {className: "text-center", target: 7, width: "10em", sortable: false}
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


