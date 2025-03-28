<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$instance = & get_instance();

$columns = array();
if (!empty($user->devices_default_display_columns)) {
    if (is_string($user->devices_default_display_columns)) {
        $user->devices_default_display_columns = explode(',', $user->devices_default_display_columns);
    }
    $columns = $user->devices_default_display_columns;
}
if (empty($columns) and !empty($dictionary->attributes->collection)) {
    // NOTE - this is populated in devicesModel from instance->config->devices_default_display_columns
    $columns = $dictionary->attributes->collection;
}

if (!in_array('audit_status', $columns) and !empty($config->product) and $config->product !== 'community') {
    array_unshift($columns, 'audit_status');
}
if (!empty($meta->data_order)) {
    for ($i = 0; $i < count($meta->data_order); $i++) {
        if (strpos($meta->data_order[$i], '.') !== false) {
            $meta->data_order[$i] = str_replace('.', '__', $meta->data_order[$i]);
        }
    }
}
$sort_column_index = 4;
$sort_column_name = (!empty($config->devices_default_sort)) ? $config->devices_default_sort : 'name';

for ($i = 0; $i < count($columns); $i++) {
    $columns[$i] = str_replace('devices.', '', $columns[$i]);
    $columns[$i] = str_replace('.', '__', $columns[$i]);
}
for ($i = 0; $i < count($meta->data_order); $i++) {
    if ($meta->data_order[$i] === $sort_column_name) {
        $sort_column_index = $i;
    }
}

if (strpos($user->permissions[$meta->collection], 'd') !== false or strpos($user->permissions[$meta->collection], 'u') !== false) {
    $meta->data_order[] = 'delete';
    $meta->data_order[] = 'update';
    $columns[] = 'delete';
    $columns[] = 'update';
}

if (empty($user->toolbar_style) or $user->toolbar_style === 'icontext') {
    $columns_button = '<span class="fa fa-list text-primary" aria-hidden="true" title="' . __('Columns') . '"></span>&nbsp;Columns';
} elseif ($user->toolbar_style === 'icon') {
    $columns_button = '<span class="fa fa-list text-primary" aria-hidden="true" title="' . __('Columns') . '"></span>';
} else {
    $columns_button = 'Columns';
}

$url = base_url() . 'index.php/devices?format=json';
foreach ($meta->filter as $filter) {
    if (is_string($filter->value)) {
        $url .= '&' . $filter->name . '=' . $filter->operator . $filter->value;
    }
    if (!is_string($filter->value)){
        $url .= '&' . $filter->name . '=' . $filter->operator . '("' . implode('","', $filter->value) . '")';
    }
}
if (!empty($meta->properties) and is_array($meta->properties)) {
    $url .= '&properties=' . implode(',', $meta->properties);
}
?>
       <main class="container-fluid">

            <div id="notice" class="container-fluid" style="display:none;">
                <div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                </div>
            </div>

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
                    <form action="<?= base_url() ?>index.php/devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                        <div class="table-responsive">
                            <table class="table <?= $GLOBALS['table'] ?> table-striped table-hover dataTableDevices">
                                <thead>
                                    <tr>
                                    <?php foreach ($meta->data_order as $key) {
                                        $align = '';
                                        if ($key === 'audit_status' or $key === 'icon' or $key === 'id' or strpos($key, '_id') !== false or $key === 'delete' or $key === 'update') {
                                            $align = 'text-center dt-body-center';
                                        } ?>
                                        <th class="<?= $align ?>"><?= collection_column_name(str_replace('ip__', '', $key)) ?>
                                        <?php
                                        if ($key !== 'audit_status' and $key !== 'icon' and $key !== 'id' and $key !== 'delete' and $key !== 'update') {
                                            echo'<hr><input id="search_' . $key . '" type="search" class="form-control form-control-sm dataTableSearchField" placeholder="Search ' . collection_column_name(str_replace('ip__', '', $key)) . '" />';
                                        } else if ($key === 'update') {
                                            echo "<hr><button type=\"button\" class=\"btn btn-light mb2 bulk_edit_button\" style=\"margin-left:5em; --bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .5rem;\" title=\"" . __('Bulk Edit') . "\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></button>\n";
                                            echo "<input aria-label='" . __('Select All') . "' type=\"checkbox\" name=\"select_all\" id=\"select_all\">\n";
                                        } else {
                                            echo '<hr style="padding-bottom:31px;">';
                                        } ?>
                                        </th>
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

        $("#oa_panel_buttons").prepend('<div class="dropdown">\
            <button style="margin-right:6px;" class="btn btn-light mb-2 panel-button dropdown-toggle" type="button" id="columnSelectButton" data-bs-toggle="dropdown" aria-expanded="false">\
                <?= $columns_button ?>\
            </button>\
            <ul class="dropdown-menu" aria-labelledby="columnSelectButton">\
                <li><a role="button" class="btn btn-sm btn-default disabled text-center" id="make_my_devices_default_display_columns" style="margin:10px; display:block;"><?= __('Save as Default') ?></a></li>\
                <li><a role="button" class="btn btn-sm btn-default disabled text-center" id="reset_my_devices_default_display_columns" style="margin:10px; display:block;"><?= __('Reset to Default') ?></a></li>\
                <?php
                for ($i = 0; $i < count($meta->data_order); $i++) {
                    $attribute = $meta->data_order[$i];
                    $attribute_escaped = str_replace('.', '_', $attribute);
                    if (in_array($attribute, $columns)) {
                        ?>\
                <li data-sort=""><a style="font-weight: bold;" href="#" id="<?= $attribute_escaped ?>" class="dropdown-item toggle-vis" data-column="<?= $i ?>" data-db_column="<?= $attribute ?>"><?= collection_column_name($attribute) ?></a></li>\
                    <?php } ?>\
                <?php } ?>\
                <li data-sort=""><hr class="dropdown-divider"></li>\
                <?php
                for ($i = 0; $i < count($meta->data_order); $i++) {
                    $attribute = $meta->data_order[$i];
                    $attribute_escaped = str_replace('.', '_', $attribute);
                    if (!in_array($attribute, $columns)) {
                        ?>\
                <li data-sort="<?= $attribute ?>"><a href="#" class="dropdown-item toggle-vis" data-column="<?= $i ?>" data-db_column="<?= $attribute ?>"><?= collection_column_name($attribute) ?></a></li>\
                    <?php } ?>\
                <?php } ?>\
            </ul>\
        </div>');

        var $my_columns = [];
        <?php foreach ($columns as $attribute) {
            if (in_array($attribute, $meta->data_order) and $attribute !== 'delete' and $attribute !== 'update') { ?>
        $my_columns.push("<?= $attribute ?>");
            <?php } ?>
        <?php } ?>

        document.querySelectorAll('a.toggle-vis').forEach((el) => {
            el.addEventListener('click', function (e) {
                e.preventDefault();
                let columnIdx = e.target.getAttribute('data-column');
                let column = myDataTable.column(columnIdx);
                // Toggle the visibility
                column.visible(!column.visible());
                // Toggle the weight
                if (column.visible() === true) {
                    $(this).css("font-weight","bold");
                    $my_columns.push($(this).attr('data-db_column'));
                } else {
                    $(this).css("font-weight","normal");
                    var index = $my_columns.indexOf($(this).attr('data-db_column'));
                    if (index !== -1) $my_columns.splice(index, 1);
                }
                $('#make_my_devices_default_display_columns').removeClass("disabled");
                $('#make_my_devices_default_display_columns').removeClass("btn-default");
                $('#make_my_devices_default_display_columns').addClass("btn-success");

            });
        });

        $("#make_my_devices_default_display_columns").on("click", function(e){
            e.preventDefault();
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $user->id ?>;
            data["data"]["type"] = 'users';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]['devices_default_display_columns'] = $my_columns.join(',');
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: "<?= base_url() ?>index.php/users/<?= $user->id ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $('#make_my_devices_default_display_columns').addClass("disabled");
                    location.reload();
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });

        <?php if (($user->devices_default_display_columns !== $config->devices_default_display_columns) and $user->devices_default_display_columns !== '') { ?>
            $('#reset_my_devices_default_display_columns').removeClass("disabled");
            $('#reset_my_devices_default_display_columns').removeClass("btn-default");
            $('#reset_my_devices_default_display_columns').addClass("btn-warning");
        <?php } ?>

        $("#reset_my_devices_default_display_columns").on("click", function(e){
            e.preventDefault();
            if (confirm('Clicking OK will reset your displayed columns to the global default list.') !== true) {
                return;
            }
            var data = {};
            data["data"] = {};
            data["data"]["id"] = <?= $user->id ?>;
            data["data"]["type"] = 'users';
            data["data"]["attributes"] = {};
            data["data"]["attributes"]['devices_default_display_columns'] = '';
            data = JSON.stringify(data);
            $.ajax({
                type: "PATCH",
                url: "<?= $meta->baseurl ?>index.php/users/<?= $user->id ?>",
                contentType: "application/json",
                data: {data : data},
                success: function (data) {
                    $('#reset_my_devices_default_display_columns').addClass("disabled");
                    location.reload();
                },
                error: function (data) {
                    data = JSON.parse(data.responseText);
                    alert(data.errors[0].code + "\n\n" + data.errors[0].title + "\n\n" + data.errors[0].detail + "\n\n" + data.errors[0].message);
                }
            });
        });
        <?php
        $sort_order = 'asc';
        if ($sort_column_name === 'ip') {
            $sort_order = 'desc';
        }
        ?>
        let logSort = {};
        var myDataTable = new DataTable('.dataTableDevices', {
            lengthChange: true,
            lengthMenu: [ [25, 50, 100, <?= $config->page_size ?>], [25, 50, 100, '<?= $config->page_size ?>'] ],
            order: [[ <?= $sort_column_index ?>, '<?= $sort_order ?>' ]],
            pageLength: 25,
            processing: true,
            searching: true,
            search: {
                return: true
            },
            serverSide: true,
            // dom: '<"dt-top-container"<l><"dt-center-in-div"f><"dt-btn-container"B>r>tip',
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
                        if ($key !== 'delete' and $key !== 'update') {
                            $sort_key = $key;
                            if (strpos($key, "__") !== false) {
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
                <?php foreach ($meta->data_order as $key) {
                    $key = str_replace('devices.', '', $key);
                    if ($key === 'id') {
                        echo '{ data: \'attributes.id\',
                            render: function (data, type, row, meta) {
                                return "<a title=\"View\" role=\"button\" class=\"btn ' . $GLOBALS['button'] . ' btn-primary\" href=\"' . base_url() . 'index.php/devices/" + row.attributes.id + "\"><span style=\"width:1rem;\" title=\"View\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a>";
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
                    } else if ($key === 'ip') {
                        echo '{ data: \'attributes.ip\',
                        render: function (data, type, row, meta) {
                            if (row.attributes.ip_padded) {
                                data = \'<span style="display:none;">\' + row.attributes.ip_padded + \'</span>\' + data;
                            }
                            return data;
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
                // We should implement this for IPs https://datatables.net/plug-ins/sorting/ip-address
                <?php for ($i = 0; $i < count($meta->data_order); $i++) {
                    $visible = 'false';
                    if (in_array($meta->data_order[$i], $columns)) {
                        $visible = 'true';
                    }
                    if ($meta->data_order[$i] !== 'audit_status' and $meta->data_order[$i] !== 'id' and $meta->data_order[$i] !== 'icon' and $meta->data_order[$i] !== 'delete' and $meta->data_order[$i] !== 'update') {
                        echo "\n                {className: \"text-start\",  target: $i, width: \"12em\", visible: $visible, name:\"" . $meta->data_order[$i] . "\"},";
                    } else {
                        echo "\n                {className: \"text-center\", target: $i, width: \"12em\", visible: $visible, name:\"" . $meta->data_order[$i] . "\", sortable: false},";
                    }
                }
                ?>
            ],
        });

        /* This stops the sort when clicking in a search text box in the table header */
        $('.dataTableSearchField').on('click', function(e) { e.stopPropagation() });

        /* And don't automatically send the result - wait for the user to press <enter> / <return> */
        $(".dataTableSearchField").on("keypress", function (evtObj) {
            if (evtObj.keyCode == 13) {
                myDataTable.ajax.reload();
            }
        });

        /* Show a warning above the table if it's in the JSON response */
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

        /* Delete links */
        $(document).on("click", ".delete_link", function () {
            if (confirm("Are you sure?\nThis will permanently DELETE this entry for devices.") !== true) {
                return;
            }
            redirect = baseurl + '/devices';
            var $id = $(this).attr('data-id');
            var $url = baseurl + '/devices/' + $id;
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
