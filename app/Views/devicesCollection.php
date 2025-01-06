<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$instance = & get_instance();
$columns = array();
$columns = (!empty($user->devices_default_display_columns)) ? explode(',', $user->devices_default_display_columns) : $dictionary->attributes->collection;

if (strpos($user->permissions[$meta->collection], 'd') !== false or strpos($user->permissions[$meta->collection], 'u') !== false) {
    $columns[] = 'delete';
    $columns[] = 'update';
}
?>
        <main class="container-fluid">
            <?php if (!empty($config->license) and $config->license !== 'none') { ?>
            <div class="card">
                <div class="card-header" style="height:57px;">
                    <div class="row">
                        <div class="col-9 clearfix">
                                <h6 style="padding-top:10px;"><span class="fa fa-sliders oa-icon"></span><?= __('Components (All Devices)') ?></h6>
                        </div>
                        <div class="col-3 clearfix pull-right">
                            <div class="btn-group btn-group-sm float-end mb-2" role="group">
                                <button class="btn btn-outline-secondary panel-button c_change_primary" type="button" data-bs-toggle="collapse" data-bs-target="#advanced" aria-expanded="false" aria-controls="advanced"><span class="fa fa-angle-down text-primary"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="advanced">
                    <div class="row">
                        <?php $components = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard');
                        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
                            $components = array('audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'executable', 'ip', 'log', 'memory', 'module', 'monitor');
                        }
                        foreach ($components as $component) { ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $component ?>.svg" alt="<?= $component ?>">
                                    <br><?= __(ucwords(str_replace('_', ' ', $component))) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $included[$component] ?></span>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php $components = array('netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item');
                        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
                            $components = array('motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server');
                        }
                        foreach ($components as $component) { ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $component ?>.svg" alt="<?= $component ?>">
                                    <br><?= __(ucwords(str_replace('_', ' ', $component))) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $included[$component] ?></span>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php $components = array('service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                        if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
                            $components = array('server_item', 'service', 'share', 'software', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
                        }
                        foreach ($components as $component) { ?>
                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="<?= url_to('componentsCollection') ?>?components.type=<?= $component ?>" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="<?= $meta->baseurl ?>icons/<?= $component ?>.svg" alt="<?= $component ?>">
                                    <br><?= __(ucwords(str_replace('_', ' ', $component))) ?>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda"><?= $included[$component] ?></span>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <?php } ?>

            <div class="card">
                <div class="card-header">
                    <?= collection_card_header($meta->collection, $meta->icon, $user, '', $meta->query_string) ?>
                </div>
                <div class="card-body">
                    <br>
                    <?php if (!empty($data)) { ?>
                    <form action="<?= base_url() ?>devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                        <div class="table-responsive">
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableDevices" data-order='[[2,"asc"]]'>
                                <thead>
                                    <?php foreach ($columns as $key) {
                                        $key = str_replace('devices.', '', $key);
                                        $align = '';
                                        if ($key === 'icon' or $key === 'id' or strpos($key, '_id') !== false or $key === 'delete' or $key === 'update') {
                                            $align = 'text-center dt-body-center';
                                        } ?>
                                        <th class="<?= $align ?>"><?= collection_column_name($key) ?></th>
                                    <?php } ?>
                                </thead>
                                <thead>
                                    <?php foreach ($columns as $key) {
                                            $key = str_replace('devices.', '', $key); ?>
                                        <th>
                                            <div class="input-group">
                                                <?php if ($key !== 'icon' and $key !== 'id' and $key !== 'delete' and $key !== 'update') {
                                                    echo '<input id="search_' . $key . '" type="search" class="form-control form-control-sm dataTableSearchField" placeholder="Search ' . collection_column_name($key) . '" />';
                                                }
                                                if ($key === 'update') {
                                                    echo "<button type=\"button\" class=\"btn btn-light mb2 bulk_edit_button\" style=\"margin-left:5em; --bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .5rem;\" title=\"" . __('Bulk Edit') . "\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></button>\n";
                                                    echo "<input aria-label='" . __('Select All') . "' type=\"checkbox\" name=\"select_all\" id=\"select_all\">\n";
                                                } ?>
                                            </div>
                                        </th>
                                    <?php } ?>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <?php } else { ?>
                        <div class="container-fluid">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= __('No Devices Returned') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        let logSort = {};
        var myDataTable = new DataTable('.dataTableDevices', {
            lengthChange: true,
            lengthMenu: [ [25, 50, <?= $config->page_size ?>], [25, 50, 'All'] ],
            order: [[ 1, 'asc' ]],
            pageLength: 25,
            processing: true,
            searching: true,
            serverSide: true,
            ajax: {
                url: '<?= base_url() ?>devices?format=json',
                dataSrc: 'data',
                data: function (d) {
                    d.limit = d.length;
                    d.offset = d.start;
                    <?php foreach ($columns as $key) {
                        $key = str_replace('devices.', '', $key);
                        echo "\n\t\t\t\t\tif ($(\"#search_" . $key . "\").val() != '') {\n";
                        echo "\t\t\t\t\t\td[\"" . $key . "\"] = $(\"#search_" . $key . "\").val();\n";
                        echo "\t\t\t\t\t}\n";
                    } ?>

                    if (d.order[0]) {
                    <?php
                    foreach ($columns as $key) {
                        $key = str_replace('devices.', '', $key);
                        if ($key !== 'delete' and $key !== 'update') {
                            echo "\n\t\t\t\t\t\tif (d.columns[d.order[0].column].data == 'attributes.$key') {
                                logSort.column = 'devices.$key';
                                logSort.direction = d.order[0].dir;
                                if (d.order[0].dir == 'asc') {
                                    d.sort = 'devices.$key';
                                } else {
                                    d.sort = '-devices.$key';
                                }
                            }\n";
                        }
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
                }
            },
            autoWidth: false,
            info: true,
            layout: {
                bottomEnd: {
                    paging: {
                        type: 'full_numbers'
                    }
                }
            },

            columns: [
                <?php foreach ($columns as $key) {
                    $key = str_replace('devices.', '', $key);
                    if ($key === 'id') {
                        echo '{ data: \'attributes.id\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" role=\"button\" class=\"btn ' . $GLOBALS['button'] . ' btn-primary\" href=\"' . base_url() . 'devices/" + row.attributes.id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
                            }
                        },';
                        echo "\n";
                    } else if ($key === 'icon') {
                        $size = '40px';
                        if ($GLOBALS['button'] === 'btn-xs') {
                            $size = '30px';
                        }
                        echo '{ data: \'attributes.icon\',
                            render: function (icon) {
                                return icon
                                    ? \'<img style="width:' . $size . ';" src="' . base_url() . 'device_images/\' + icon + \'.svg"/>\'
                                    : \'\';
                            }
                        },';
                        echo "\n";
                    } else if ($key === 'delete') {
                        echo '{ data: \'attributes.id\',
                            render: function (data, type, row, meta) {
                                return "<td class=\"text-center\"><button type=\"button\" class=\"btn btn-danger ' . $GLOBALS['button'] . ' delete_link\" data-id=\"" + row.attributes.id + "\"><span style=\"width:1rem;\" title=\"Delete\" class=\"fa fa-trash\"></span></button></td>";
                            }
                        },';
                        echo "\n";
                    } else if ($key === 'update') {
                        echo '{ data: \'attributes.id\',
                            render: function (data, type, row, meta) {
                                return "<td style=\"text-align: center;\"><input aria-label=\'Select\' type=\'checkbox\' id=\'ids[" + row.attributes.id + "]\' value=\'" + row.attributes.id + "\' name=\'ids[" + row.attributes.id + "]\' ></td>";
                            }
                        },';
                        echo "\n";
                    } else {
                        echo "{ data: 'attributes." .  $key . "' },\n";
                    }
                } ?>
            ],
            columnDefs: [
                {className: "text-center", target: 0, width: "10em"},
                {className: "text-center", target: 1, width: "10em"},
                {className: "text-center", target: -1, width: "10em"},
                {className: "text-center", target: -2, width: "10em"}
            ],
        });

        $(".dataTableSearchField").on("keypress", function (evtObj) {
            // console.log(evtObj.keyCode);
            if (evtObj.keyCode == 13) {
                myDataTable.ajax.reload();
            }
        });









        /* Delete links */
        $('.delete_link').click(function (e) {
            dataCollection = $(this).attr('data-collection');
            if (typeof dataCollection !== 'undefined' && dataCollection != "") {
                collection = dataCollection;
            }

            if (confirm("Are you sure?\nThis will permanently DELETE this entry for " + collection + ".") !== true) {
                return;
            }

            redirect = baseurl + '/' + collection;
            dataRedirect = $(this).attr('data-redirect');
            if (typeof dataRedirect !== 'undefined' && dataRedirect != "") {
                redirect = baseurl + '/' + dataRedirect;
            }

            var $id = $(this).attr('data-id');
            /* var $name = $(this).attr('data-name'); */

            var $url = baseurl + '/' + collection + '/' + $id;
            $.ajax({
                type: 'DELETE',
                url: $url,
                dataType: 'json',
                success: function(data, textStatus) { 
                    window.location = redirect; },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log("Status: " + textStatus);
                    console.log("errorThrown: " + errorThrown);
                    console.log(JSON.stringify(jqXHR));
                    alert(jqXHR.responseJSON.errors[0].code + ": " + jqXHR.responseJSON.errors[0].detail);
                    return false; }
            });
        });

    });
}
</script>
