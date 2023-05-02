<?php

function collection_card_header(string $collection = '', string $icon = '', object $user = null, string $label = ''): string
{
    $style = @$user->toolbar_style;
    $return = '';
    if (empty($label)) {
        $label = __(ucwords(str_replace('_', ' ', $collection)));
        if ($label === 'Ldap Servers') {
            $label = 'LDAP Servers';
        }
    }
    $label = __($label);

    if (strpos($user->permissions[$collection], 'c') !== false) {
        if ($style === 'icontext') {
            #$create_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\"><a href=\"" . url_to($collection.'CreateForm') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus\"></span>" . __("Create") . "</a></button>";
            $create_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus\"></span>" . __("Create") . "</a>";
            $import_csv_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\"><a href=\"" . url_to($collection.'ImportForm') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-up\"></span>" . __("Import CSV") . "</a></button>";
            $import_json_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\"><a href=\"" . url_to($collection.'ImportJSONForm') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angle-up\"></span>" . __("Import JSON") . "</a></button>";
        } else if ($style === 'icon') {
            $create_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\"><a href=\"" . url_to($collection.'CreateForm') . "\"><span class=\"fa fa-plus\"></span></a></button>";
            $import_csv_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\"><a href=\"" . url_to($collection.'ImportForm') . "\"><span class=\"fa-solid fa-angles-up\"></span></a></button>";
            $import_json_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\"><a href=\"" . url_to($collection.'ImportJSONForm') . "\"><span class=\"fa-solid fa-angle-up\"></span></a></button>";
        } else {
            $create_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\"><a href=\"" . url_to($collection.'CreateForm') . "\">" . __("Create") . "</a></button>";
            $import_csv_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\"><a href=\"" . url_to($collection.'ImportForm') . "\">" . __("Import CSV") . "</a></button>";
            $import_json_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\"><a href=\"" . url_to($collection.'ImportJSONForm') . "\">" . __("Import JSON") . "</a></button>";
        }
    } else {
        $create_button = "\n";
        $import_csv_button = "\n";
        $import_json_button = "\n";
    }


    if ($style === 'icontext') {
        $export_csv_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\"><a href=\"" . url_to($collection.'Collection') . "?format=csv\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down\"></span>" . __("Export CSV") . "</a></button>";
        $export_json_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\"><a href=\"" . url_to($collection.'Collection') . "?format=json\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angle-down\"></span>" . __("Export JSON") . "</a></button>";
        $help_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\"><a href=\"" . url_to($collection.'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question\"></span>" . __("Help") . "</a></button>";
    } else if ($style === 'icon') {
        $export_csv_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\"><a href=\"" . url_to($collection.'Collection') . "?format=csv\"><span class=\"fa-solid fa-angles-down\"></span></a></button>";
        $export_json_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\"><a href=\"" . url_to($collection.'Collection') . "?format=json\"><span class=\"fa-solid fa-angle-down\"></span></a></button>";
        $help_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\"><a href=\"" . url_to($collection.'Help') . "\"><span class=\"fa fa-question\"></span></a></button>";
    } else {
        $export_csv_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\"><a href=\"" . url_to($collection.'Collection') . "?format=csv\">" . __("Export CSV") . "</a></button>";
        $export_json_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\"><a href=\"" . url_to($collection.'Collection') . "?format=json\">" . __("Export JSON") . "</a></button>";
        $help_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\"><a href=\"" . url_to($collection.'Help') . "\">" . __("Help") . "</a></button>";
    }

    if ($collection === 'database') {
        $help_button = '';
    }

    $defaults_button = '';
    if (in_array($collection, ['attributes', 'orgs', 'queries', 'roles', 'users'])) {
        if ($style === 'icontext') {
            $defaults_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\"><a href=\"" . url_to($collection.'Defaults') . "\"><span style=\"margin-right:6px;\" class=\"{$icon}\"></span>" . __("Default Items") . "</a></button>";
        } else if ($style === 'icon') {
            $defaults_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\"><a href=\"" . url_to($collection.'Defaults') . "\"><span class=\"{$icon}\"></span></a></button>";
        } else {
            $defaults_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\"><a href=\"" . url_to($collection.'Defaults') . "\">" . __("Default Items") . "</a></button>";
        }
    }

    $return = "<div class=\"row\">
                        <div class=\"col-4 clearfix\">
                                <h6 style=\"padding-top:10px;\"><span class=\"{$icon} oa-icon\"></span>{$label}</h6>
                        </div>
                        <div class=\"col-8 clearfix\">
                            <div class=\"btn-group btn-group-sm float-end\" role=\"group\" id=\"oa_panel_buttons\">
                                <div class=\"page-title-right\">
                                $create_button
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
    $return = "<td class=\"text-center\"><a title=\"" . __('View') . "\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"" . url_to($collection.'Read', $id) . "\"><span style=\"width:1rem;\" title=\"" . __('View') . "\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}

function collection_button_execute(string $collection = '', int $id = 0): string
{
    $return = "<td class=\"text-center\"><a title=\"" . __('Execute') . "\" role=\"button\" class=\"btn btn-sm btn-success\" href=\"" . url_to($collection.'Execute', $id) . "\"><span style=\"width:1rem;\" title=\"" . __('Execute') . "\" class=\"fa fa-play\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}

function collection_button_devices(string $link = ''): string
{
    $return = "<td class=\"text-center\"><a title=\"" . __('Devices') . "\" role=\"button\" class=\"btn btn-sm btn-devices\" href=\"" . $link . "\"><span style=\"width:1rem;\" title=\"" . __('Devices') . "\" class=\"fa fa-desktop\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}

function collection_button_delete(int $id = 0): string
{
    $return = "<td class=\"text-center\">
                                        <button type=\"button\" class=\"btn btn-sm btn-danger delete_link\" data-id=\"$id\">
                                            <span style=\"width:1rem;\" title=\"" . __('Delete') . "\" class=\"fa fa-trash\"></span>
                                        </button>
                                    </td>";
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
    $name = str_replace('Ip Address', 'IP Address', $name);
    $name = str_replace('Device Id', 'Device ID', $name);
    $name = __($name);
    return $name;
}
