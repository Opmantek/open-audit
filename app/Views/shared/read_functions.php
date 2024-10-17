<?php

function read_card_header(string $collection = '', string $id = '', string $icon = '', object $user = null, string $name = '', string $action = 'read'): string
{
    $style = (!empty($user->toolbar_style)) ? $user->toolbar_style : '';
    $collection_title = __(ucwords(str_replace('_', ' ', $collection)));
    if ($collection_title === 'Ldap Servers') {
        $collection_title = 'LDAP Servers';
    }
    $collection_title = __($collection_title);
    if (!empty($name)) {
        $collection_title = __($collection_title) . ' :: ' . $name;
    }
    $return = '';

    if ($collection !== 'database' and strpos($user->permissions[$collection], 'c') !== false) {
        if ($style === 'icontext') {
            $create_button = "<a role=\"button\" id=\"button_create\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection . 'CreateForm') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus text-oa-success\"></span>" . __("Create") . "</a>";
        } elseif ($style === 'icon') {
            $create_button = "<a role=\"button\" id=\"button_create\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection . 'CreateForm') . "\"><span class=\"fa fa-plus text-oa-success\"></span></a>";
        } else {
            $create_button = "<a role=\"button\" id=\"button_create\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection . 'CreateForm') . "\">" . __("Create") . "</a>";
        }
    } else {
        $create_button = "\n";
    }

    $delete_button = "\n";
    if ($collection !== 'database' and strpos($user->permissions[$collection], 'd') !== false) {
        if ((in_array($collection, ['orgs','locations','roles']) and $id == 1) or ($collection === 'scripts' and intval($id) < 8) or ($collection === 'discovery_scan_options' and intval($id) < 8)) {
            // Not allowed to delete these
        } else {
            if ($style === 'icontext') {
                $delete_button = "<button id=\"button_delete\" type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\"><span style=\"margin-right:6px;\" class=\"fa fa-trash-o text-danger\"></span>" . __("Delete") . "</button>";
            } elseif ($style === 'icon') {
                $delete_button = "<button id=\"button_delete\" type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\"><span class=\"fa fa-trash-o text-danger\"></span></button>";
            } else {
                $delete_button = "<button id=\"button_delete\" type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\">" . __("Delete") . "</button>";
            }
        }
    }

    $device_reset_button = "\n";
    if ($collection === 'devices' and !empty($id) and strpos($user->permissions[$collection], 'u') !== false) {
        if ($style === 'icontext') {
            $device_reset_button = "<button id=\"button_reset\" type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Reset") . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-rotate-right text-warning\"></span>" . __("Reset") . "</button>";
        } elseif ($style === 'icon') {
            $device_reset_button = "<button id=\"button_reset\" type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Reset") . "\"><span class=\"fa-solid fa-rotate-right text-warning\"></span></button>";
        } else {
            $device_reset_button = "<button id=\"button_reset\" type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Reset") . "\">" . __("Reset") . "</button>";
        }
    }

    $export_csv_button = '';
    if ($action === 'execute' and ($collection === 'groups' or $collection === 'queries' or $collection === 'summaries')) {
        if ($style === 'icontext') {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to($collection . 'Execute', $id) . "?format=csv\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export CSV") . "</a>";
        } elseif ($style === 'icon') {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to($collection . 'Execute', $id) . "?format=csv\"><span class=\"fa-solid fa-angles-down text-primary\"></span>&nbsp;<span class=\"fa-solid fa-table-cells-large text-primary\"></span></a>";
        } else {
            $export_csv_button = "<a id=\"button_export_csv\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to($collection . 'Execute', $id) . "?format=csv\">" . __("Export CSV") . "</a>";
        }
    }

    $read_button = '';
    if ($action === 'execute') {
        if ($style === 'icontext') {
            $read_button = "<a id=\"button_read\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Details") . "\" href=\"" . url_to($collection . 'Read', $id) . "\"><span style=\"margin-right:6px;\" class=\"fa fa-eye text-primary\"></span>" . __("Details") . "</a>";
        } elseif ($style === 'icon') {
            $read_button = "<a id=\"button_read\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Details") . "\" href=\"" . url_to($collection . 'Read', $id) . "\"><span class=\"fa fa-eye text-primary\"></span>&nbsp;<span class=\"fa-solid fa-table-cells-large text-primary\"></span></a>";
        } else {
            $read_button = "<a id=\"button_read\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Details") . "\" href=\"" . url_to($collection . 'Read', $id) . "\">" . __("Details") . "</a>";
        }
    }

    $collection_button = "";
    $export_button = "";
    $help_button = "";
    if ($style === 'icontext') {
            $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-list text-primary\"></span>" . __("List") . "</a>";
        if ($collection !== 'database') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection . 'Export', intval($id)) . "\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export JSON") . "</a>";
        }
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question text-primary\"></span>" . __("Help") . "</a>";
    } elseif ($style === 'icon') {
        $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\"><span class=\"fa fa-list text-primary\"></span></a>";
        if ($collection !== 'database') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection . 'Export', intval($id)) . "\"><span class=\"fa-solid fa-angles-down text-primary\"></span>&nbsp;<span class=\"fa-solid fa-code text-primary\"></span></a>";
        }
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\"><span class=\"fa fa-question text-primary\"></span></a>";
    } else {
        $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\">" . __("List") . "</a>";
        if ($collection !== 'database') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection . 'Export', intval($id)) . "\">" . __("Export JSON") . "</a>";
        }
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\">" . __("Help") . "</a>";
    }

    if ($action === 'execute' and $collection !== 'database') {
        if ($style === 'icontext') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection . 'Execute', intval($id)) . "?format=json_data\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export JSON") . "</a>";
        } elseif ($style === 'icon') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection . 'Execute', intval($id)) . "?format=json_data\"><span class=\"fa-solid fa-angles-down text-primary\"></span>&nbsp;<span class=\"fa-solid fa-code text-primary\"></span></a>";
        } else {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection . 'Execute', intval($id)) . "?format=json_data\">" . __("Export JSON") . "</a>";
        }
    }

    $execute_button = "\n";
    if (($collection === 'baselines' or $collection === 'benchmarks' or $collection === 'clouds' or $collection === 'dashboards' or $collection === 'discoveries' or $collection === 'groups' or $collection === 'integrations' or $collection === 'queries' or $collection === 'summaries' or $collection === 'tasks' or $collection === 'widgets') and !empty($id)) {
        if ($style === 'icontext') {
            $execute_button = "\n<a id=\"button_execute\" role=\"button\" class=\"btn btn-light mb-2 execute_button\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection . 'Execute', $id) . "\"><span style=\"margin-right:6px;\" class=\"fa fa-play text-oa-success\"></span>" . __("Execute") . "</a>";
        } elseif ($style === 'icon') {
            $execute_button = "\n<a id=\"button_execute\" role=\"button\" class=\"btn btn-light mb-2 execute_button\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection . 'Execute', $id) . "\"><span class=\"fa fa-play text-oa-success\"></span></a>";
        } else {
            $execute_button = "\n<a id=\"button_execute\" role=\"button\" class=\"btn btn-light mb-2 execute_button\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection . 'Execute', $id) . "\">" . __("Execute") . "</a>";
        }
    }
    if ($action === 'execute') {
        $execute_button = "\n";
    }

    $add_device_button = "\n";
    if (($collection === 'clusters') and !empty($id)) {
        if ($style === 'icontext') {
            $add_device_button = "\n<a id=\"button_add_device\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __('Add Device') . "\" href=\"" . url_to('componentsCreateForm', 'clusters', $id) . "?type=cluster\"><span style=\"margin-right:6px;\" class=\"fa fa-desktop text-oa-success\"></span>" . __('Add Device') . "</a>";
        } elseif ($style === 'icon') {
            $add_device_button = "\n<a id=\"button_add_device\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __('Add Device') . "\" href=\"" . url_to('componentsCreateForm', 'clusters', $id) . "?type=cluster\"><span class=\"fa fa-desktop text-oa-success\"></span></a>";
        } else {
            $add_device_button = "\n<a id=\"button_add_device\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __('Add Device') . "\" href=\"" . url_to('componentsCreateForm', 'clusters', $id) . "?type=cluster\">" . __('Add Device') . "</a>";
        }
    }

    $download_button = '';
    if ($collection === 'scripts' and !empty($id)) {
        if ($style === 'icontext') {
            $download_button = "<a id=\"button_download\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Download") . "\" href=\"" . url_to('scriptsDownload', $id) . "\"><span style=\"margin-right:6px;\" class=\"fa fa-download_button text-primary\"></span>" . __("Download") . "</a>";
        } elseif ($style === 'icon') {
            $download_button = "<a id=\"button_download\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Download") . "\" href=\"" . url_to('scriptsDownload', $id) . "\"><span class=\"fa fa-download text-primary\"></span></a>";
        } else {
            $download_button = "<a id=\"button_download\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Download") . "\" href=\"" . url_to('scriptsDownload', $id) . "\">" . __("Download") . "</a>";
        }
    }

    $return = "<div class=\"row\">
                        <div class=\"col-4 clearfix\">
                            <h6 style=\"padding-top:10px;\"><span class=\"{$icon} oa-icon\"></span>{$collection_title}</h6>
                        </div>
                        <div class=\"col-4 clearfix text-center\">
                            <div class=\"btn-group btn-group-sm\" role=\"group\" id=\"oa_panel_buttons\">
                                <div class=\"page-title-middle\">
                                    $read_button
                                    $execute_button
                                    $add_device_button
                                    $download_button
                                    $device_reset_button
                                    $export_button
                                    $export_csv_button
                                    $delete_button
                                </div>
                            </div>
                        </div>
                        <div class=\"col-4 clearfix\">
                            <div class=\"btn-group btn-group-sm float-end\" role=\"group\">
                                <div class=\"page-title-right\">
                                    $collection_button
                                    $create_button
                                    $help_button
                                </div>
                            </div>
                        </div>
                    </div>\n";




    return $return;
}

function read_field(string $name = '', string $value = '', string $dictionary = '', bool $update = false, string $label = '', string $link_button = '', string $placeholder = '', string $type = 'text'): string
{

    if ($value === '2000-01-01 00:00:00') {
        $value = '';
    }
    $label = !empty($label) ? $label : ucwords(str_replace('_', ' ', $name));
    $label = str_replace('Nmis', 'NMIS', $label);
    $label = str_replace('Os ', 'OS ', $label);
    if (strlen($dictionary) > 60) {
        $dictionary = mb_substr($dictionary, 0, 60) . '...';
    }
    if (!empty($placeholder)) {
        $placeholder = 'placeholder="' . $placeholder . '"';
    }

    $return = '
                        <div class="row" style="padding-top:16px;">
                            <div class="offset-2 col-8" style="position:relative;">
                                <label for="' . $name . '" class="form-label">' . $label . '</label>
                                <div class="input-group">
                                    <input disabled type="' . $type . '" class="form-control" id="' . $name . '" value="' . $value . '" data-original-value="' . $value . '" ' . $placeholder . '>';

    if ($update) {
        $return = $return . '
                                    <div class="float-end" style="padding-left:4px;">
                                        <button data-attribute="' . $name . '" class="btn btn-outline-secondary edit" title="' . __('Edit') . '"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></button>
                                        <button data-attribute="' . $name . '" class="btn btn-outline-success submit" title="' . __('Submit') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></button>
                                        <button data-attribute="' . $name . '" class="btn btn-outline-danger cancel" title="' . __('Cancel') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></button>
                                    </div>';
    }

    if (!empty($link_button)) {
        $return = $return . '<div class="float-end" style="padding-left:4px;">' . $link_button . '</div>';
    }
                                    $return = $return . '
                                </div>
                                <div class="form-text form-help float-end" style="position: absolute; right: 0;" data-attribute="' .  $name . '" data-dictionary="' . $dictionary . '"><span><br></span></div>
                            </div>
                        </div>
                        ';
    return $return;
}

function read_text_box(string $name = '', string $value = '')
{
    $return = '
                        <div class="row" style="padding-top:16px;">
                            <div class="offset-2 col-8" style="position:relative;">
                                <label for="' . $name . '" class="form-label">' . $name . '</label>
                                <div class="input-group">
                                    <textarea class="form-control" disabled rows="8">' . $value . '</textarea>
                                </div>
                            </div>
                        </div>';
    return $return;
}

function read_select(string $name = '', string $value = '', string $dictionary = '', bool $update = false, string $label = '', array $values = array()): string
{

    $return = '';
    if (empty($label)) {
        $label = ucwords(str_replace('_', ' ', __($name)));
        $label = str_replace('Nmis', 'NMIS', $label);
    }

    if (empty($values)) {
        # No values passed, assuming a bool y|n.
        $values = array();
        $select = new \StdClass();
        $select->id = 'n';
        $select->type = '';
        $select->attributes = new \StdClass();
        $select->attributes->name = __('No');
        $values[] = $select;
        unset($select);
        $select = new \StdClass();
        $select->id = 'y';
        $select->type = '';
        $select->attributes = new \StdClass();
        $select->attributes->name = __('Yes');
        $values[] = $select;
    }

    $return =  "                           <div class=\"row\" style=\"padding-top:16px;\">
                                <div class=\"offset-2 col-8\" style=\"position:relative;\">
                                    <label for=\"{$name}\" class=\"form-label\">{$label}</label><br>
                                    <div class=\"col-7 input-group\">
                                        <select class=\"form-select\" id=\"{$name}\" name=\"{$name}\" data-original-value=\"{$value}\" disabled>\n";
    foreach ($values as $item) {
        $selected = '';
        if ($item->id == $value or (!empty($item->type) and $item->type === 'attributes' and !empty($item->attributes->value) and $item->attributes->value == $value)) {
            $selected = ' selected';
        }
        if (!empty($item->type) and $item->type === 'attributes') {
            if ($item->attributes->value === '') {
                $selected .= ' label="none"';
            }
            $return .= "                                            <option value=\"{$item->attributes->value}\"{$selected}>" . $item->attributes->name . "</option>\n";
        } elseif (!empty($item->type) and $item->type === 'discovery_scan_options') {
            $return .= "                                            <option value=\"{$item->attributes->id}\"{$selected}>{$item->attributes->name}</option>\n";
        } else {
            if ($item->id === '') {
                $selected .= ' label="none"';
            }
            $return .= "                                            <option value=\"{$item->id}\"{$selected}>" . $item->attributes->name . "</option>\n";
        }
    }
    $return .= "                                        </select>\n";
    if ($update) {
        $return .= "                                        <div class=\"float-end\" style=\"padding-left:4px;\">
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-secondary edit\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></div>
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-success submit\" style=\"display: none;\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-check\"></span></div>
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-danger cancel\" style=\"display: none;\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-remove\"></span></div>
                                        </div>\n";
    }
    $return .= "                                    </div>
                                    <div class=\"form-text form-help float-end\" style=\"position: absolute; right: 0;\" data-attribute=\"{$name}\" data-dictionary=\"" . $dictionary . "\"><span><br></span></div>
                                </div>
                            </div>\n";
    return $return;
}

function read_column_name(string $name = ''): string
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
    $name = str_replace('Ip ', 'IP ', $name);
    $name = str_replace('Device Id', 'Device ID', $name);
    $name = __($name);
    return $name;
}

function device_panel(string $name = '', string $toolbar = '', int $device_id = 0, string $icon = '', bool $update = false, int $count = 0): string
{
    if (empty($icon)) {
        $icon = base_url() . 'icons/' . strtolower($name) . '.svg';
    }
    $temp = explode(' ', $name);
    $export_name = strtolower($temp[0]);
    $server = false;
    if (stripos($name, 'Server') !== false) {
        $server = $name;
        $name = 'server';
    }
    if ($toolbar === 'icontext') {
        $panel_close_button = "<a role=\"button\" class=\"btn btn-light mb-2 section_toggle\" tabindex=0 data-section=\"" . $name . "_section\" title=\"" . __("Close") . "\" href=\"#\"><span style=\"margin-right:6px;\" class=\"fa-regular fa-circle-xmark\"></span>" . __("Close") . "</a>";
        $export_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to('componentsCollection') . "?components.type=" . $export_name . "&components.device_id=" . $device_id . "&format=csv\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span>" . __("Export CSV") . "</a>
        <a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("View All") . "\" href=\"" . url_to('componentsCollection') . "?components.type=" . $export_name . "&components.device_id=" . $device_id . "\"><span style=\"margin-right:6px;\" class=\"fa fa-eye text-primary\"></span>" . __("View All") . "</a>";
    } elseif ($toolbar === 'icon') {
        $panel_close_button = "<a role=\"button\" class=\"btn btn-light mb-2 section_toggle\" tabindex=0 data-section=\"" . $name . "_section\" title=\"" . __("Close") . "\"><span class=\"fa-regular fa-circle-xmark\"></span></a>";

        $export_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to('componentsCollection') . "?components.type=" . $export_name . "&components.device_id=" . $device_id . "&format=csv\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angles-down text-primary\"></span></a>
        <a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("View All") . "\" href=\"" . url_to('componentsCollection') . "?components.type=" . $export_name . "&components.device_id=" . $device_id . "\"><span style=\"margin-right:6px;\" class=\"fa fa-eye text-primary\"></span></a>";
    } else {
        $panel_close_button = "<a role=\"button\" class=\"btn btn-light mb-2 section_toggle\" tabindex=0 data-section=\"" . $name . "_section\" title=\"" . __("Close") . "\" href=\"#\">" . __("Close") . "</a>";

        $export_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export CSV") . "\" href=\"" . url_to('componentsCollection') . "?components.type=" . $export_name . "&components.device_id=" . $device_id . "&format=csv\">" . __("Export CSV") . "</a>
        <a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("View All") . "\" href=\"" . url_to('componentsCollection') . "?components.type=" . $export_name . "&components.device_id=" . $device_id . "\">" . __("View All") . "</a>";
    }
    $panel_add_button = '';
    if ($update) {
        if ($name === 'applications' or $name === 'attachments' or $name === 'credentials' or $name === 'clusters' or $name === 'images') {
            if ($toolbar === 'icontext') {
                $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', $name, $device_id) . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus text-oa-success\"></span>" . __("Add") . "</a>";
            } elseif ($toolbar === 'icon') {
                $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', $name, $device_id) . "\"><span class=\"fa fa-plus text-oa-success\"></span></a>";
            } else {
                $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', $name, $device_id) . "\">" . __("Add") . "</a>";
            }
        }
        if ($name === 'tags') {
            if ($toolbar === 'icontext') {
                $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"#\" id=\"add_tags\"><span style=\"margin-right:6px;\" class=\"fa fa-plus text-oa-success\"></span>" . __("Add") . "</a>";
            } elseif ($toolbar === 'icon') {
                $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"#\" id=\"add_tags\"><span class=\"fa fa-plus text-oa-success\"></span></a>";
            } else {
                $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"#\" id=\"add_tags\">" . __("Add") . "</a>";
            }
        }
    }

    if (!in_array(strtolower($export_name), ['audit_log', 'bios', 'certificate', 'change_log', 'discovery_log', 'disk', 'dns', 'edit_log', 'file', 'ip', 'log', 'memory', 'module', 'monitor', 'motherboard', 'netstat', 'network', 'nmap', 'optical', 'pagefile', 'partition', 'policy', 'print_queue', 'processor', 'radio', 'route', 'san', 'scsi', 'server', 'server_item', 'service', 'share', 'software', 'software_key', 'sound', 'task', 'usb', 'user', 'user_group', 'variable', 'video', 'vm', 'windows']) or empty($device_id) or $count === 0) {
        $export_button = '';
    }
    if ($server) {
        $name = $server;
    }
    $human_name = read_column_name($name);
    $header = '<div class="card-header">
        <div class="row">
            <div class="col-4 clearfix">
                <h6 style="padding-top:10px;">
                <img src="' . $icon . '" alt="" style="width:30px; padding-bottom:6px; padding-right:10px;">
                ' . __($human_name) . '</h6>
            </div>
            <div class="col-8 clearfix">
                <div class="btn-group btn-group-sm float-end" role="group" id="device_panel_' . $name . '">
                    <div class="page-title-right float-end">
                        ' . $panel_add_button . '
                        ' . $export_button . '
                        ' . $panel_close_button . '
                    </div>
                </div>
            </div>
        </div>
    </div>';
    return $header;
}

function device_component_button_read(string $collection = '', int $id = 0): string
{
    $return = "<td class=\"text-center\"><span style=\"display:none;\">" . $id . "</span><a title=\"" . __('View') . "\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"" . url_to('componentsRead', $id) . "?components.type=$collection\"><span style=\"width:1rem;\" title=\"" . __('View') . "\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}

function count_button($included = [])
{
    $button = '';
    if (!empty($included)) {
        $button = '<button class="btn btn-xs mb-2 btn-outline float-end">' . count($included) . '</button>';
    }
    return $button;
}
