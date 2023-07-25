<?php

function read_card_header(string $collection = '', string $id = '', string $icon = '', object $user = null, string $name = ''): string
{
    $style = @$user->toolbar_style;
    $collection_formatted = ucwords(str_replace('_', ' ', $collection));
    $collection_title = __(ucwords(str_replace('_', ' ', $collection)));
    if ($collection_title === 'Ldap Servers') {
        $collection_title = 'LDAP Servers';
    }
    $collection_title = __($collection_title);
    $return = '';

    $tab_string = '<div class="col-6"></div>';

    if ($collection !== 'database' and strpos($user->permissions[$collection], 'c') !== false) {
        if ($style === 'icontext') {
            $create_button = "<a role=\"button\" id=\"button_create\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus\"></span>" . __("Create") . "</a>";
        } else if ($style === 'icon') {
            $create_button = "<a role=\"button\" id=\"button_create\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\"><span class=\"fa fa-plus\"></span></a>";
        } else {
            $create_button = "<a role=\"button\" id=\"button_create\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\">" . __("Create") . "</a>";
        }
    } else {
        $create_button = "\n";
    }

    $delete_button = "\n";
    if ($collection !== 'database' and strpos($user->permissions[$collection], 'd') !== false) {
        if ((in_array($collection, ['orgs','locations','roles']) and $id == 1)) {
            // Not allowed to delete these
        } else {
            if ($style === 'icontext') {
                $delete_button = "<button id=\"button_delete\" type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\"><span style=\"margin-right:6px;\" class=\"fa fa-trash-o\"></span>" . __("Delete") . "</button>";
            } else if ($style === 'icon') {
                $delete_button = "<button id=\"button_delete\" type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\"><span class=\"fa fa-trash-o\"></span></button>";
            } else {
                $delete_button = "<button id=\"button_delete\" type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\">" . __("Delete") . "</button>";
            }
        }
    }

    $collection_button = "";
    $export_button = "";
    $help_button = "";
    if ($style === 'icontext') {
            $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection.'Collection') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-list\"></span>" . __("List") . "</a>";
        if ($collection !== 'database') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection.'Collection') . "/" . intval($id) . "?format=json_data\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angle-down\"></span>" . __("Export JSON") . "</a>";
        }
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question\"></span>" . __("Help") . "</a>";
    } else if ($style === 'icon') {
        $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection.'Collection') . "\"><span class=\"fa fa-list\"></span></a>";
        if ($collection !== 'database') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection.'Collection') . "/" . intval($id) . "?format=json_data\"><span class=\"fa-solid fa-angle-down\"></span></a>";
        }
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\"><span class=\"fa fa-question\"></span></a>";
    } else {
        $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection.'Collection') . "\">" . __("List") . "</a>";
        if ($collection !== 'database') {
            $export_button = "<a id=\"button_export_json\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export JSON") . "\" href=\"" . url_to($collection.'Collection') . "/" . intval($id) . "?format=json_data\">" . __("Export JSON") . "</a>";
        }
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\">" . __("Help") . "</a>";
    }

    if (($collection === 'queries' or $collection === 'discoveries') and !empty($id)) {
        if ($style === 'icontext') {
            $collection_button .= "\n<a id=\"button_execute\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection.'Execute', $id) . "\"><span style=\"margin-right:6px;\" class=\"fa fa-play\"></span>" . __("Execute") . "</a>";
        } else if ($style === 'icon') {
            $collection_button .= "\n<a id=\"button_execute\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection.'Execute', $id) . "\"><span class=\"fa fa-play\"></span></a>";
        } else {
            $collection_button = "\n<a id=\"button_execute\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection.'Execute', $id) . "\">" . __("Execute") . "</a>";
        }
    }

    $return = "<div class=\"row\">
                        <div class=\"col-4 clearfix\">
                            <h6 style=\"padding-top:10px;\"><span class=\"{$icon} oa-icon\"></span>{$collection_title}</h6>
                        </div>
                        <!--
                        <div class=\"col-6 clearfix\">
                            <div class=\"text-center\" style=\"position:relative;\">
                                <div class=\"btn-group btn-group-sm\" role=\"group\">
                                $tab_string
                                </div>
                            </div>
                        </div>
                        -->
                        <div class=\"col-8 clearfix\">
                            <div class=\"btn-group btn-group-sm float-end\" role=\"group\" id=\"oa_panel_buttons\">
                                <div class=\"page-title-right\">
                                    $collection_button
                                    $create_button
                                    $delete_button
                                    $export_button
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
                                    <div class="float-right" style="padding-left:4px;">
                                        <button data-attribute="' . $name . '" class="btn btn-outline-secondary edit" title="' . __('Edit') . '"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></button>
                                        <button data-attribute="' . $name . '" class="btn btn-outline-success submit" title="' . __('Submit') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></button>
                                        <button data-attribute="' . $name . '" class="btn btn-outline-danger cancel" title="' . __('Cancel') . '" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></button>
                                    </div>';
    }

    if (!empty($link_button)) {
        $return = $return . '<div class="float-right" style="padding-left:4px;">' . $link_button . '</div>';
    }
                                    $return = $return . '
                                </div>
                                <div class="form-text form-help float-right" style="position: absolute; right: 0;" data-attribute="' .  $name . '" data-dictionary="' . $dictionary . '"><span><br></span></div>
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
        if ($item->id == $value or ($item->type === 'attributes' and !empty($item->attributes->value) and $item->attributes->value == $value)) {
            $selected = ' selected';
        }
        if ($item->type === 'attributes') {
            if ($item->attributes->value === '') {
                $selected .= ' label="none"';
            }
            $return .= "                                            <option value=\"{$item->attributes->value}\"{$selected}>{$item->attributes->name}</option>\n";
        } else {
            if ($item->id === '') {
                $selected .= ' label="none"';
            }
            $return .= "                                            <option value=\"{$item->id}\"{$selected}>{$item->attributes->name}</option>\n";
        }
    }
    $return .= "                                        </select>\n";
    if ($update) {
        $return .= "                                        <div class=\"float-right\" style=\"padding-left:4px;\">
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-secondary edit\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></div>
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-success submit\" style=\"display: none;\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-check\"></span></div>
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-danger cancel\" style=\"display: none;\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-remove\"></span></div>
                                        </div>\n";
    }
    $return .= "                                    </div>
                                    <div class=\"form-text form-help float-right\" style=\"position: absolute; right: 0;\" data-attribute=\"{$name}\" data-dictionary=\"" . $dictionary . "\"><span><br></span></div>
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

function device_panel(string $name = '', string $toolbar = '', int $device_id = 0, string $icon = ''): string
{
    if (empty($icon)) {
        $icon = base_url() . 'icons/' . strtolower($name) . '.svg';
    }
    if ($toolbar === 'icontext') {
        $panel_close_button = "<a role=\"button\" class=\"btn btn-light mb-2 section_toggle\" tabindex=0 data-section=\"" . $name . "_section\" title=\"" . __("Close") . "\" href=\"#\"><span style=\"margin-right:6px;\" class=\"fa-regular fa-circle-xmark\"></span>" . __("Close") . "</a>";
    } else if ($toolbar === 'icon') {
        $panel_close_button = "<a role=\"button\" class=\"btn btn-light mb-2 section_toggle\" tabindex=0 data-section=\"" . $name . "_section\" title=\"" . __("Close") . "\"><span class=\"fa-regular fa-circle-xmark\"></span></a>";
    } else {
        $panel_close_button = "<a role=\"button\" class=\"btn btn-light mb-2 section_toggle\" tabindex=0 data-section=\"" . $name . "_section\" title=\"" . __("Close") . "\" href=\"#\">" . __("Close") . "</a>";
    }
    $panel_add_button = '';
    if ($name === 'attachments' or $name === 'credentials' or $name === 'images') {
        if ($toolbar === 'icontext') {
            $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', $name, $device_id) . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus\"></span>" . __("Add") . "</a>";
        } else if ($toolbar === 'icon') {
            $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', $name, $device_id) . "\"><span class=\"fa fa-plus\"></span></a>";
        } else {
            $panel_add_button = "<a role=\"button\" class=\"btn btn-light mb-2\" tabindex=0 title=\"" . __("Add") . "\" href=\"" . url_to('componentsCreateForm', $name, $device_id) . "\">" . __("Add") . "</a>";
        }
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
                    <div class="page-title-right float-right">
                        ' . $panel_add_button . '
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
    $return = "<td class=\"text-center\"><a title=\"" . __('View') . "\" role=\"button\" class=\"btn btn-sm btn-primary\" href=\"" . url_to('componentsRead', $id) . "?components.type=$collection\"><span style=\"width:1rem;\" title=\"" . __('View') . "\" class=\"fa fa-eye\" aria-hidden=\"true\"></span></a></td>";
    return $return;
}
