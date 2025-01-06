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


$dataSet = array();
if (!empty($data)) {
    foreach ($data as $item) {
        $item->attributes->id = collection_button_read($meta->collection, $item->id);
        if (!empty($audit_status)) {
            $item->attributes->audit_status = '<span class="' . $item->attributes->audit_class . '" title="' . $item->attributes->audit_text . '"></span>';
        }
        if (!empty($item->attributes->ip_padded)) {
            $item->attributes->ip = '<span style="display:none;">' . $item->attributes->ip_padded . '</span> ' . $item->attributes->ip;
            unset($item->attributes->ip_padded);
        }
        if (strpos($user->permissions[$meta->collection], 'u') !== false) {
            if (!empty($item->id)) {
                $item->attributes->select = "<input aria-label='" . __('Select') . "' type='checkbox' id='ids[" . $item->id . "]' value='" . $item->id . "' name='ids[" . $item->id . "]' >";
                $item->attributes->delete = "<button type=\"button\" class=\"btn " . $GLOBALS['button'] . " btn-danger delete_link\" data-id=\"" . $item->id . "\"><span style=\"width:1rem;\" title=\"" . __('Delete') . "\" class=\"fa fa-trash\"></span></button>";
            }
        }
        if (!empty($item->attributes->icon)) {
            if (!empty($user->list_table_format) and $user->list_table_format === 'compact') {
                $item->attributes->icon = "<img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:20px\" alt=\"" . $item->attributes->icon . "\">";
            } else {
                $item->attributes->icon = "<img src=\"" . base_url() . "device_images/" . $item->attributes->icon . ".svg\" style=\"width:40px\" alt=\"" . $item->attributes->icon . "\">";
            }
        }
        if (!empty($item->attributes->tags)) {
            $tags = '';
            foreach ($item->attributes->tags as $tag) {
                $tags .= '<button type="button" class="btn btn-xs btn-primary rounded-pill" style="margin-right:20px;">&nbsp;&nbsp;<strong><a style="color:white;" href="' . url_to('devicesCollection') . '?devices.tags=' . $tag . '">' . $tag . '</a>&nbsp;&nbsp;</button>';
            }
            unset($item->attributes->tags);
            $item->attributes->tags = $tags;
        }
        foreach ($item->attributes as $key => $value) {
            if (strpos($key, '.') !== false) {
                $item->attributes->{str_replace('.', '__', $key)} = $value;
                unset($item->attributes->{$key});
            }
        }
        if (!empty($item->attributes->org_id)) {
            $item->attributes->org_id = collection_button_read('orgs', $item->attributes->org_id);
        }
        if (!empty($item->attributes->orgs__id)) {
            $item->attributes->orgs__id = collection_button_read('orgs', $item->attributes->orgs__id);
        }
        if (!empty($item->attributes->location_id)) {
            $item->attributes->location_id = collection_button_read('locations', $item->attributes->location_id);
        }
        if (!empty($item->attributes->locations__id)) {
            $item->attributes->locations__id = collection_button_read('locations', $item->attributes->locations__id);
        }
        // Add the per cell filter
        $filter = array('id', 'tags', 'icon', 'ip', 'audit_status', 'delete', 'select', 'org_id', 'orgs__id', 'location_id', 'locations__id');
        foreach ($item->attributes as $key => $value) {
            if (!in_array($key, $filter)) {
                $item->attributes->{$key} = "<span class=\"float-start\"><button type=\"button\" class=\"btn btn-xs btn-light\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-html=\"true\" data-bs-placement=\"right\" data-bs-content=\"<a href='" . $query_string . "devices." . $key . "=" . $value . "'>" . __('Include') . "</a><br><a href='" . $query_string . "devices." . $key . "=!=" . $value . "'>" . __('Exclude') . "</a>\"><span class=\"fa fa-filter fa-xs\"></span></button></span>&nbsp;" . $value;
            }
        }
        $dataSet[] = $item->attributes;
    }
}

// Calculate these based on (after setting) $dataSet as we will exclude some columns above
$columns = array(); // These are all the columns with data
$myColumns = array(); // These are the users list of columns they want shown
// Always Put the Audit Status column first
if (!empty($audit_status)) {
    $column = new \stdClass();
    $column->title = __('Audit Status');
    $column->data = 'audit_status';
    $column->className = "text-center";
    $columns[] = $column;
}

// Always put the Device ID link second
$column = new \stdClass();
$column->title = __('Details');
$column->data = 'id';
$column->className = "text-center";
$columns[] = $column;

// And the Icon third
$column = new \stdClass();
$column->title = __('Icon');
$column->data = 'icon';
$column->className = "text-center";
$columns[] = $column;

// All the retrieved data columns
$do_not_show = array('id', 'device_id', 'orgs.id', 'icon');
if (!empty($dataSet[0])) {
    foreach ($dataSet[0] as $key => $value) {
        if (in_array($key, $do_not_show)) {
            continue;
        }
        $column = new \stdClass();
        $column->title = collection_column_name($key);
        $column->data = str_replace('.', '__', $key);
        $column->visible = false;
        if (in_array($key, $display_columns) or in_array(str_replace('__', '.', $key), $display_columns)) {
            $column->visible = true;
        }
        if ($column->visible) {
            $myColumns[] = $column->data;
        }
        $column->name = $key;
        $columns[] = $column;
    }
}

// Select (if permitted)
if (strpos($user->permissions[$meta->collection], 'u') !== false) {
    $column = new \stdClass();
    $column->title = "<button type=\"button\" class=\"btn btn-light mb2 bulk_edit_button\" style=\"--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .5rem; margin-right:10px;\" title=\"" . __('Bulk Edit') . "\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></button><input aria-label=\"" . __('Select All') . "\" type=\"checkbox\" name=\"select_all\" id=\"select_all\">";
    $column->data = 'select';
    $column->className = "text-center";
    $column->orderable = false;
    $columns[] = $column;
}

// Delete (if permitted)
if (strpos($user->permissions[$meta->collection], 'd') !== false) {
    $column = new \stdClass();
    $column->title = __('Delete');
    $column->data = 'delete';
    $column->className = "text-center";
    $columns[] = $column;
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
                    <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                        <div class="table-responsive">
                            <?php if (!empty($audit_status)) {
                                echo '<table class="table ' . $GLOBALS['table'] . ' table-striped table-hover MyDataTable display" id="table_result" data-order=\'[[4,"asc"]]\' style="width:100%">';
                            } else {
                                echo '<table class="table ' . $GLOBALS['table'] . ' table-striped table-hover MyDataTable display" id="table_result" data-order=\'[[3,"asc"]]\' style="width:100%">';
                            }
                            echo "\n"; ?>
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

        var dataSet = <?= json_encode($dataSet, JSON_PRETTY_PRINT) ?>;

        var $my_columns = <?= json_encode($myColumns) ?>;

        var table = $('#table_result').DataTable( {
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            "paging": true,
            "searching": true,
            "order": [[ 1, 'asc' ]],
            "info": true,
            "pageLength": 50,
            "autoWidth": false,
            "oSearch": {
                "bSmart": false,
                "bRegex": true,
                "sSearch": ""
            },
            columns: <?= json_encode($columns, JSON_PRETTY_PRINT) ?>,
            data: dataSet
        });

        $('a.toggle-vis').on( 'click', function (e) {
            e.preventDefault();
            var column = table.column( $(this).data('table-column') + ':name' );
            // Toggle the visibility
            column.visible( ! column.visible() );
            // Toggle the menu item's weight
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
            $('[data-bs-toggle="popover"]').popover();
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

        $('[data-bs-toggle="popover"]').popover();

        /* select all devices on /devices for bulk edit */
        $('#select_all').click(function () {
            $(':checkbox').each(function () { this.checked = !this.checked; });
            $('#select_all').prop("checked", !$('#select_all').prop("checked"));
        });

        /* Send to bulk edit form */
        $(document).on('click', '.bulk_edit_button', function (e) {
            var ids = "";
            $("input:checked").each(function () {
                if ($(this).attr("value")) {
                    ids = ids + "," + $(this).attr("value");
                }
            });
            ids = ids.substring(1);
            var url = baseurl + '/devices?devices.id=in(' + ids + ')&action=bulkupdateform';
            window.location = url;
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
