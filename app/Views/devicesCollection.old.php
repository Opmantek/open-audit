<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
include 'shared/collection_functions.php';
$instance = & get_instance();

$display_columns = array();
if ($config->devices_default_retrieve_columns === implode(',', $meta->properties)) {
    // We have a default request. No specific columns requested
    if (!empty($config->devices_default_display_columns)) {
        $display_columns = explode(',', $config->devices_default_display_columns);
    }
    if (!empty($user->devices_default_display_columns)) {
        $display_columns = explode(',', $user->devices_default_display_columns);
    }
}
if (empty($display_columns)) {
    $display_columns = $meta->properties;
}
$count = count($display_columns);
for ($i = 0; $i < $count; $i++) {
    $display_columns[$i] = str_replace('devices.', '', $display_columns[$i]);
}
$audit_status = false;
if (isset($data[0]->attributes->audit_class) and isset($data[0]->attributes->audit_text)) {
    $audit_status = true;
}
$query_string = url_to('devicesCollection') . '?';
if (!empty($meta->query_string)) {
    $query_string .= $meta->query_string . '&';
}
$components = array('antivirus', 'audit_log', 'bios', 'change_log', 'disk', 'dns', 'edit_log', 'file', 'firewall', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'route', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'user', 'user_group', 'variable', 'video', 'vm', 'windows');
if (!empty($instance->config->feature_executables) and $instance->config->feature_executables === 'y') {
    $components[] = 'executable';
}
asort($components);
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
                    <?php
                    $i = 0;
                    foreach ($components as $component) {
                        if ($i === 12 or $i === 24 or $i === 36) {
                            echo '</div><br><div class="row">';
                        }
                        echo '                        <div class="col-lg-1 text-center">
                            <div>
                                <a href="' . url_to('componentsCollection') . '?components.type=' . $component . '" class="position-relative">
                                    <img style="width:4rem;" class="img-responsive center-block" src="' . $meta->baseurl . 'icons/' . $component . '.svg" alt="' . $component . '">
                                    <br>' . __(ucwords(str_replace('_', ' ', $component))) . '
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill" style="background:#3bafda">' . @$included[$component] . '</span>
                                </a>
                            </div>
                        </div>';
                        $i++;
                    }
                    ?>
                    </div>
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
                    <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                        <div class="table-responsive">
                            <?php if (!empty($audit_status)) {
                                echo '<table class="table ' . $GLOBALS['table'] . ' table-striped table-hover MyDataTable display" id="table_result" data-order=\'[[4,"asc"]]\' style="width:100%">';
                            } else {
                                echo '<table class="table ' . $GLOBALS['table'] . ' table-striped table-hover MyDataTable display" id="table_result" data-order=\'[[3,"asc"]]\' style="width:100%">';
                            }
                            echo "\n"; ?>
                                <thead>
                                    <tr>
                                        <?php if (!empty($audit_status)) { ?>
                                            <th style="white-space: nowrap;" class="text-center" id="audit_status"><?= __('Audit Status') ?></th>
                                        <?php } ?>
                                        <th id="id" data-orderable="false" class="text-center"><?= __('Details') ?></th>
                                        <?php foreach ($meta->data_order as $key) {
                                            echo "\n";
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            }
                                            echo "                                        <th id=\"" . str_replace('.', '_', $key) . "\">" . collection_column_name($key) . "</th>";
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'u') !== false) {
                                            if (!empty($data[0]->id)) {
                                                    echo "\n                                        <th data-orderable=\"false\" class=\"text-center\">\n";
                                                    echo "                                            <button type=\"button\" class=\"btn btn-light mb2 bulk_edit_button\" style=\"--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .5rem;\" title=\"" . __('Bulk Edit') . "\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></button>\n";
                                                    echo "                                            <input aria-label='" . __('Select All') . "' type=\"checkbox\" name=\"select_all\" id=\"select_all\">\n";
                                                    echo "                                        </th>";
                                            }
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'd') !== false) {
                                            echo "\n                                        <th data-orderable=\"false\" class=\"text-center\">" . __('Delete') . "</th>\n";
                                        } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($data)) {
                                    foreach ($data as $item) {
                                        echo "\n                                <tr>\n";
                                        if (!empty($audit_status)) { ?>
                                            <td class="text-center">
                                                <span class="<?= $item->attributes->audit_class ?>" title="<?= $item->attributes->audit_text ?>"></span>
                                            </td>
                                        <?php }
                                        echo "                                    " . collection_button_read($meta->collection, $item->id) . "\n";
                                        foreach ($meta->data_order as $key) {
                                            $key = str_replace('devices.', '', $key);
                                            if ($key === 'id' or $key === 'orgs.id') {
                                                continue;
                                            }
                                            if ($key === 'icon') {
                                                if (!empty($user->list_table_format) and $user->list_table_format === 'compact') {
                                                    echo "                                    <td><img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:20px\" alt=\"" . $item->attributes->icon . "\"></td>\n";
                                                } else {
                                                    echo "                                    <td><img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:40px\" alt=\"" . $item->attributes->icon . "\"></td>\n";
                                                }
                                            } elseif ($key === 'ip' and !empty($item->attributes->ip_padded)) {
                                                echo "                                    <td><span style=\"display:none;\">" . $item->attributes->ip_padded . "</span> " . $item->attributes->{$key} . " </td>\n";
                                            } elseif ($key === 'tags') {
                                                echo "<td>";
                                                foreach ($item->attributes->tags as $tag) {
                                                    echo '                                    <button type="button" class="btn btn-xs btn-primary rounded-pill" style="margin-right:20px;">&nbsp;&nbsp;<strong><a style="color:white;" href="' . url_to('devicesCollection') . '?devices.tags=' . $tag . '">' . $tag . '</a>&nbsp;&nbsp;</button>';
                                                }
                                                echo "</td>";
                                            } else {
                                                echo "                                    <td><span class=\"float-start\"><button type=\"button\" class=\"btn btn-xs btn-light\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-content=\"<a href='" . $query_string . "devices." . $key . "=" . $item->attributes->{$key} . "'>" . __('Include') . "</a><br><a href='" . $query_string . "devices." . $key . "=!=" . $item->attributes->{$key} . "'>" . __('Exclude') . "</a>\"><span class=\"fa fa-filter fa-xs\"></span></button></span>&nbsp;" . $item->attributes->{$key} . "</td>\n";
                                            }
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'u') !== false and !empty($item->id)) {
                                            echo "                                    <td style=\"text-align: center;\"><input aria-label='" . __('Select') . "' type='checkbox' id='ids[" . $item->id . "]' value='" . $item->id . "' name='ids[" . $item->id . "]' ></td>\n";
                                        }
                                        if (strpos($user->permissions[$meta->collection], 'd') !== false) {
                                            echo "                                    " . collection_button_delete(intval($item->id)) . "\n";
                                        }
                                        echo "                                </tr>\n";
                                    }
                                }
                                echo "                                </tbody>\n"; ?>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </main>

<?php
if (empty($user->toolbar_style) or $user->toolbar_style === 'icontext') {
    $columns_button = '<span class="fa fa-list text-primary" aria-hidden="true" title="' . __('Columns') . '"></span>&nbsp;Columns';
} elseif ($user->toolbar_style === 'icon') {
    $columns_button = '<span class="fa fa-list text-primary" aria-hidden="true" title="' . __('Columns') . '"></span>';
} else {
    $columns_button = 'Columns';
}
?>

<script {csp-script-nonce}>
window.onload = function () {
    $(document).ready(function () {

        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

        $("#oa_panel_buttons").prepend('<div class="dropdown">\
            <button style="margin-right:6px;" class="btn btn-light mb-2 panel-button dropdown-toggle" type="button" id="columnSelectButton" data-bs-toggle="dropdown" aria-expanded="false">\
                <?= $columns_button ?>\
            </button>\
            <ul class="dropdown-menu" aria-labelledby="columnSelectButton">\
                <li><a role="button" class="btn btn-sm btn-default disabled text-center" id="make_my_devices_default_display_columns" style="margin:10px; display:block;"><?= __('Save as Default') ?></a></li>\
                <li><a role="button" class="btn btn-sm btn-default disabled text-center" id="reset_my_devices_default_display_columns" style="margin:10px; display:block;"><?= __('Reset to Default') ?></a></li>\
                <?php foreach ($meta->data_order as $attribute) {
                    $attribute_escaped = str_replace('.', '_', $attribute);
                    if (in_array($attribute, $display_columns)) {
                        ?>\
                <li data-sort=""><a style="font-weight: bold;" href="#" id="<?= $attribute_escaped ?>" class="dropdown-item toggle-vis" data-table-column="<?= $attribute_escaped ?>" data-db_column="<?= $attribute ?>"><?= collection_column_name($attribute) ?></a></li>\
                    <?php } ?>\
                <?php } ?>\
                <li data-sort=""><hr class="dropdown-divider"></li>\
                    <?php foreach ($meta->data_order as $attribute) {
                        $attribute_escaped = str_replace('.', '_', $attribute);
                        if (!in_array($attribute, $display_columns)) {
                            ?>\
                <li data-sort="<?= $attribute ?>"><a href="#" class="dropdown-item toggle-vis" data-table-column="<?= $attribute_escaped ?>" data-db_column="<?= $attribute ?>"><?= collection_column_name($attribute) ?></a></li>\
                        <?php } ?>\
                    <?php } ?>\
            </ul>\
        </div>');

        var $my_columns = [];

        <?php if (!empty($audit_status)) { ?>
        $my_columns.push("audit_status");
        <?php } ?>

        <?php foreach ($display_columns as $attribute) {
            if (in_array($attribute, $meta->data_order)) { ?>
        $my_columns.push("<?= $attribute ?>");
            <?php } ?>
        <?php } ?>

        var table = $('.MyDataTable').DataTable( {
            "pagingType": "full",
            "pageLength": 50,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "oSearch": {
                "bSmart": false,
                "bRegex": true,
                "sSearch": ""
            },
            "columnDefs": [
                <?php $i = 0;
                if (!empty($audit_status)) {
                    $i = 1;
                }
                foreach ($meta->data_order as $attribute) { ?>
                    {
                    // <?= $attribute . "\n" ?>
                    "targets": [ <?= $i ?> ],
                    "visible": <?= (in_array($attribute, $display_columns)) ? "true" : "false" ?>,
                    "searchable": true
                    },
                    <?php $i = $i + 1;
                } ?>
                {
                // Bulk Edit
                "targets": [ <?= $i ?> ],
                "visible": true,
                "searchable": true
                },
                {
                // Delete
                "targets": [ <?= $i+1 ?> ],
                "visible": true,
                "searchable": false
                }
            ]
        });

        $('a.toggle-vis').on( 'click', function (e) {
            e.preventDefault();

            // Get the column API object
            
            // Below did work, however we could not sort the drop down as it used integer identifiers as the table headers
            // I have now removed those integers, see an earlier commit to restore them if required.
            // var column = table.column( $(this).attr('data-column') );

            // var column = table.column( '#' + $(this).data('db_column') ); <- does not work because unescaped .'s in data (ie, devices.name)

            // below also doesn't work :-(
            // var column_name = '#' + $(this).data('db_column');
            // column_name = column_name.replace(".", '\\\\.');
            // console.log(column_name);
            // var column = table.column(column_name);

            // Below does work, as we replace .'s with _'s for the table columns only. We keep the .'s for the actual data (column list).'
            var column = table.column( '#' + $(this).data('table-column') );

            // Toggle the visibility
            column.visible( ! column.visible() );
            console.log("Visible: " + column.visible());
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
                url: "<?= $meta->baseurl ?>index.php/users/<?= $user->id ?>",
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
    });
}
</script>
