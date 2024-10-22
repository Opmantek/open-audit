<?php

$GLOBALS['show_all'] = false;
if (!empty($meta->total) and !empty($meta->limit) and $meta->total > $meta->limit and $meta->total < 500) {
    $GLOBALS['show_all'] = $meta->total;
}

function collection_card_header(string $collection = '', string $icon = '', object $user = null, string $label = '', string $url = ''): string
{
    $style = (!empty($user->toolbar_style)) ? $user->toolbar_style : '';
    $return = '';
    if (empty($label)) {
        $label = __(ucwords(str_replace('_', ' ', $collection)));
        if ($label === 'Ldap Servers') {
            $label = 'LDAP Servers';
        }
    }
    $label = __($label);

    $create_button = "\n";
    $import_csv_button = "\n";
    $import_json_button = "\n";
    $help_button = '';
    $defaults_button = '';
    $export_csv_button = '';
    $export_json_button = '';

    $export_link = url_to($collection . 'Collection') . '?format=';
    if (!empty($url)) {
        $export_link = url_to($collection . 'Collection') . '?' . $url . '&format=';
    }

    if (strpos($user->permissions[$collection], 'c') !== false and $collection !== 'database' and strpos($label, 'About') === false) {
        if ($style === 'icontext') {
            $create_button = "<a id=\"button_create\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection . 'CreateForm') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus text-oa-success\"></span>" . __("Create") . "</a>";

            $import_csv_button = "<a id=\"button_import_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\" href=\"" . url_to($collection . 'ImportForm') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-table-cells-large text-oa-success\"></span>" . __("Import CSV") . "</a>";

            $import_json_button = "<a id=\"button_import_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\" href=\"" . url_to($collection . 'ImportJSONForm') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-code text-oa-success\"></span>" . __("Import JSON") . "</a>";
        } elseif ($style === 'icon') {
            $create_button = "<a id=\"button_create\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection . 'CreateForm') . "\"><span class=\"fa fa-plus text-oa-success\"></span></a>";

            $import_csv_button = "<a id=\"button_import_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\" href=\"" . url_to($collection . 'ImportForm') . "\"><span class=\"fa-solid fa-angles-up text-oa-success\"></span>&nbsp;<span class=\"fa-solid fa-table-cells-large text-oa-success\"></span></a>";

            $import_json_button = "<a id=\"button_import_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\" href=\"" . url_to($collection . 'ImportJSONForm') . "\"><span class=\"fa-solid fa-angles-up text-oa-success\"></span>&nbsp;<span class=\"fa-solid fa-code text-oa-success\"></span></a>";
        } else {
            $create_button = "<a id=\"button_create\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection . 'CreateForm') . "\">" . __("Create") . "</a>";

            $import_csv_button = "<a id=\"button_import_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\" href=\"" . url_to($collection . 'ImportForm') . "\">" . __("Import CSV") . "</a>";

            $import_json_button = "<a id=\"button_import_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\" href=\"" . url_to($collection . 'ImportJSONForm') . "\">" . __("Import JSON") . "</a>";
        }
    }

    if (strpos($label, 'About') === false) {
        if ($style === 'icontext') {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . $export_link . "csv\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export CSV") . "</a>";

            $export_json_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . $export_link . "json_data\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export JSON") . "</a>";

            $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question text-primary\"></span>" . __("Help") . "</a>";
        } elseif ($style === 'icon') {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . $export_link . "csv\"><span class=\"fa-solid fa-angles-down text-primary\"></span>&nbsp;<span class=\"fa-solid fa-table-cells-large text-primary\"></span></a>";

            $export_json_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . $export_link . "json_data\"><span class=\"fa-solid fa-angle-down text-primary\"></span>&nbsp;<span class=\"fa-solid fa-code text-primary\"></span></a>";

            $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\"><span class=\"fa fa-question text-primary\"></span></a>";
        } else {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . $export_link . "csv\">" . __("Export CSV") . "</a>";

            $export_json_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . $export_link . "json_data\">" . __("Export JSON") . "</a>";

            $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\">" . __("Help") . "</a>";
        }

        if ($collection === 'database') {
            $help_button = '';
        }
    }

    $defaults_button = '';
    if (in_array($collection, ['agents', 'attributes', 'configuration', 'dashboards', 'fields', 'groups', 'integrations', 'locations', 'orgs', 'packages', 'queries', 'roles', 'rules', 'summaries', 'users', 'widgets'])) {
        if ($style === 'icontext') {
            $defaults_button = "<a id=\"button_default_items\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection . 'Defaults') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-gears text-primary\"></span>" . __("Default Items") . "</a>";
        } elseif ($style === 'icon') {
            $defaults_button = "<a id=\"button_default_items\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection . 'Defaults') . "\"><span class=\"fa-solid fa-gears text-primary\"></span></a>";
        } else {
            $defaults_button = "<a id=\"button_default_items\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection . 'Defaults') . "\">" . __("Default Items") . "</a>";
        }
    }

    $show_all_button = '';
    if (!empty($GLOBALS['show_all']) and is_int($GLOBALS['show_all'])) {
        if ($style === 'icontext') {
            $show_all_button = "<a id=\"button_all\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Show All") . "\" href=\"" . url_to($collection . 'Collection') . "?limit=" . $GLOBALS['show_all'] . "\"><span style=\"margin-right:6px;\" class=\"fa-regular fa-eye text-primary\"></span>" . __("Show All") . "</a>";
        } elseif ($style === 'icon') {
            $show_all_button = "<a id=\"button_all\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Show All") . "\" href=\"" . url_to($collection . 'Collection') . "?limit=" . $GLOBALS['show_all'] . "\"><span class=\"fa-regular fa-eye text-primary\"></span></a>";
        } else {
            $show_all_button = "<a id=\"button_all\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Show All") . "\" href=\"" . url_to($collection . 'Collection') . "?limit=" . $GLOBALS['show_all'] . "\">" . __("Show All") . "</a>";
        }
    }


    if (strpos($label, 'About') !== false) {
        if ($style === 'icontext') {
            $show_all_button = "<a id=\"button_all\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-list text-primary\"></span>" . __("List") . "</a>";
        } elseif ($style === 'icon') {
            $show_all_button = "<a id=\"button_all\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\"><span class=\"fa fa-list text-primary\"></span></a>";
        } else {
            $show_all_button = "<a id=\"button_all\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\">" . __("List") . "</a>";
        }
    }



    $return = "<div class=\"row\">
                        <div class=\"col-3 clearfix\">
                                <h6 style=\"padding-top:10px;\"><span class=\"{$icon} oa-icon\"></span>{$label}</h6>
                        </div>
                        <div class=\"col-9 clearfix\">
                            <div class=\"btn-group btn-group-sm float-end\" role=\"group\" id=\"oa_panel_buttons\">
                                <div class=\"page-title-right\">
                                $create_button
                                $show_all_button
                                $import_csv_button
                                $import_json_button
                                $export_csv_button
                                $export_json_button
                                $defaults_button
                                $help_button
                                </div>
                            </div>
                        </div>
                    </div>\n";
    return $return;
}

// Note, below $id is not an int because database collection supplies the table name
function collection_button_read(string $collection = '', string $id = ''): string
{
    $class = "btn-primary";
    $link = '';
    if (in_array($collection, ['access_point', 'antivirus', 'benchmarks_result', 'bios', 'certificate', 'disk', 'dns', 'executable', 'file', 'firewall', 'firewall_rule', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'warranty', 'windows'])) {
        $link = '?components.type=' . $collection;
        $collection = 'components';
    }
    $return = "<td class=\"text-center\"><a title=\"" . __('View') . "\" role=\"button\" class=\"btn " . $GLOBALS['button'] . " " . $class . "\" href=\"" . url_to($collection . 'Read', $id) . "$link\"><span style=\"width:1rem;\" title=\"" . __('View') . "\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}

function collection_button_execute(string $collection = '', int $id = 0): string
{
    $return = "<td class=\"text-center\"><a title=\"" . __('Execute') . "\" role=\"button\" class=\"btn " . $GLOBALS['button'] . " btn-success execute_button\" href=\"" . url_to($collection . 'Execute', $id) . "\"><span style=\"width:1rem;\" title=\"" . __('Execute') . "\" class=\"fa fa-play\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}

function collection_button_devices(string $link = ''): string
{
    $return = "<td class=\"text-center\"><a title=\"" . __('Devices') . "\" role=\"button\" class=\"btn " . $GLOBALS['button'] . " btn-devices\" href=\"" . $link . "\"><span style=\"width:1rem;\" title=\"" . __('Devices') . "\" class=\"fa fa-desktop\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}

function collection_button_delete(int $id = 0): string
{
    $return = "<td class=\"text-center\"><button type=\"button\" class=\"btn " . $GLOBALS['button'] . " btn-danger delete_link\" data-id=\"$id\"><span style=\"width:1rem;\" title=\"" . __('Delete') . "\" class=\"fa fa-trash\"></span></button></td>";
    return $return;
}

function collection_column_name(string $name = ''): string
{
    $name = str_replace('.', ' ', $name);
    $name = str_replace('_', ' ', $name);
    $name = ucwords($name);
    if ($name === 'Orgs Name') {
        $name = 'Organisation';
    }
    if ($name === 'Ad Group') {
        $name = 'AD Group';
    }
    if ($name === 'Ip') {
        $name = 'IP';
    }
    if ($name === 'Uuid') {
        $name = 'UUID';
    }
    $name = str_replace('Ip Address', 'IP Address', $name);
    $name = str_replace('Device Id', 'Device ID', $name);
    $name = str_replace('Dns ', 'DNS ', $name);
    $name = str_replace('Dbus ', 'DBUS ', $name);
    $name = str_replace('Os ', 'OS ', $name);
    $name = str_replace(' Id', ' ID', $name);
    $name = __($name);
    return $name;
}

function collection_intro_header(string $heading, string $collection, string $icon, string $intro, string $body): string
{
    $return = '<br><br>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-3 clearfix">
                            <h6 style="padding-top:10px;"><span class="' . $icon . ' oa-icon"></span>' . $heading . '</h6>
                        </div>
                        <div class="col-9 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" id="oa_panel_buttons">
                                <div class="page-title-right">
                                    <a role="button" class="btn btn-light mb-2" title="' . __('Help') . '" href="' . url_to($collection . 'Help') . '"><span style="margin-right:6px;" class="fa fa-question text-primary"></span>' . __('Help') . '</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">';
    $return .= @$intro . @$body . '</div></div>';
    return $return;
}
