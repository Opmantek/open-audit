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

    $create_button = "\n";
    $import_csv_button = "\n";
    $import_json_button = "\n";
    $help_button = '';
    $defaults_button = '';
    $export_csv_button = '';
    $export_json_button = '';

    if (strpos($user->permissions[$collection], 'c') !== false and $collection !== 'database' and strpos($label, 'About') === false) {
        if ($style === 'icontext') {
            $create_button = "<a id=\"button_create\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus text-oa-success\"></span>" . __("Create") . "</a>";

            $import_csv_button = "<a id=\"button_import_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\" href=\"" . url_to($collection.'ImportForm') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-table-cells-large text-oa-success\"></span>" . __("Import CSV") . "</a>";

            $import_json_button = "<a id=\"button_import_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\" href=\"" . url_to($collection.'ImportJSONForm') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-code text-oa-success\"></span>" . __("Import JSON") . "</a>";
        } else if ($style === 'icon') {
            $create_button = "<a id=\"button_create\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\"><span class=\"fa fa-plus text-oa-success\"></span></a>";

            $import_csv_button = "<a id=\"button_import_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\" href=\"" . url_to($collection.'ImportForm') . "\"><span class=\"fa-solid fa-angles-up\"></span>&nbsp;<span class=\"fa-solid fa-table-cells-large text-oa-success\"></span></a>";

            $import_json_button = "<a id=\"button_import_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\" href=\"" . url_to($collection.'ImportJSONForm') . "\"><span class=\"fa-solid fa-angles-up text-oa-success\"></span>&nbsp;<span class=\"fa-solid fa-code\"></span></a>";
        } else {
            $create_button = "<a id=\"button_create\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\">" . __("Create") . "</a>";

            $import_csv_button = "<a id=\"button_import_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import CSV") . "\" href=\"" . url_to($collection.'ImportForm') . "\">" . __("Import CSV") . "</a>";

            $import_json_button = "<a id=\"button_import_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Import JSON") . "\" href=\"" . url_to($collection.'ImportJSONForm') . "\">" . __("Import JSON") . "</a>";
        }
    }

    if (strpos($label, 'About') === false) {
        if ($style === 'icontext') {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to($collection.'Collection') . "?format=csv\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export CSV") . "</a>";

            $export_json_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection.'Collection') . "?format=json_data\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export JSON") . "</a>";

            $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question text-primary\"></span>" . __("Help") . "</a>";
        } else if ($style === 'icon') {
            # $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to($collection.'Collection') . "?format=csv\"><span class=\"fa-solid fa-angles-down text-primary\"></span></a>";
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to($collection.'Collection') . "?format=csv\"><span class=\"fa-solid fa-angles-down text-primary\"></span>&nbsp;<span class=\"fa-solid fa-table-cells-large\"></span></a>";

            # $export_json_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection.'Collection') . "?format=json_data\"><span class=\"fa-solid fa-angle-down text-primary\"></span></a>";
            $export_json_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection.'Collection') . "?format=json_data\"><span class=\"fa-solid fa-angle-down\"></span>&nbsp;<span class=\"fa-solid fa-code text-primary\"></span></a>";

            $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\"><span class=\"fa fa-question text-primary\"></span></a>";
        } else {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to($collection.'Collection') . "?format=csv\">" . __("Export CSV") . "</a>";

            $export_json_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection.'Collection') . "?format=json_data\">" . __("Export JSON") . "</a>";

            $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\">" . __("Help") . "</a>";
        }

        if ($collection === 'database') {
            $help_button = '';
        }

        $defaults_button = '';
        if (in_array($collection, ['attributes', 'configuration', 'dashboards', 'fields', 'groups', 'integrations', 'locations', 'orgs', 'queries', 'roles', 'rules', 'summaries', 'users', 'widgets'])) {
            if ($style === 'icontext') {
                # $defaults_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection.'Defaults') . "\"><span style=\"margin-right:6px;\" class=\"{$icon}\"></span>" . __("Default Items") . "</a>";
                $defaults_button = "<a id=\"button_default_items\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection.'Defaults') . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-gears text-primary\"></span>" . __("Default Items") . "</a>";
            } else if ($style === 'icon') {
                # $defaults_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection.'Defaults') . "\"><span class=\"{$icon}\"></span></a>";
                $defaults_button = "<a id=\"button_default_items\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection.'Defaults') . "\"><span class=\"fa-solid fa-gears text-primary\"></span></a>";
            } else {
                $defaults_button = "<a id=\"button_default_items\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Default Items") . "\" href=\"" . url_to($collection.'Defaults') . "\">" . __("Default Items") . "</a>";
            }
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
                                            <span style=\"width:1rem;\" title=\"" . __('Delete') . "\" class=\"fa fa-trash\" aria-label=\"<?= __('Delete') ?>\"></span>
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
