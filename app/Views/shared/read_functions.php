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

    if ($collection === 'baselines_results') {
        # Make our tabs
        $tab_string = '                        <div class="col-6"><ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="policy_results-tab" data-bs-toggle="tab" data-bs-target="#policy_results" type="button" role="tab" aria-controls="policy_results" aria-selected="false">Policy Results</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="device_results-tab" data-bs-toggle="tab" data-bs-target="#device_results" type="button" role="tab" aria-controls="device_results" aria-selected="false">Device Results</button>
                            </li>
                        </ul></div>';
    }

    if ($collection === 'clouds') {
        # Make our tabs
        $tab_string = '                        <div class="col-6"><ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary" type="button" role="tab" aria-controls="summary" aria-selected="true">Summary</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="logs-tab" data-bs-toggle="tab" data-bs-target="#logs" type="button" role="tab" aria-controls="logs" aria-selected="false">Logs</button>
                            </li>
                        </ul></div>';
    }

    if ($collection === 'discoveries') {
        # Make our tabs
        $tab_string = '                        <div class="col-6"><ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary" type="button" role="tab" aria-controls="summary" aria-selected="true">Summary</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="logs-tab" data-bs-toggle="tab" data-bs-target="#logs" type="button" role="tab" aria-controls="logs" aria-selected="false">Logs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="all_ips-tab" data-bs-toggle="tab" data-bs-target="#all_ips" type="button" role="tab" aria-controls="all_ips" aria-selected="false">All IPs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="devices-tab" data-bs-toggle="tab" data-bs-target="#devices" type="button" role="tab" aria-controls="devices" aria-selected="false">Devices</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="issues-tab" data-bs-toggle="tab" data-bs-target="#issues" type="button" role="tab" aria-controls="issues" aria-selected="false">Issues</button>
                            </li>
                        </ul></div>';
    }

    if ($collection === 'integrations') {
        # Make our tabs
        $tab_string = '                        <div class="col-6"><ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary" type="button" role="tab" aria-controls="summary" aria-selected="true">Summary</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="fields-tab" data-bs-toggle="tab" data-bs-target="#fields" type="button" role="tab" aria-controls="fields" aria-selected="false">Fields</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="logs-tab" data-bs-toggle="tab" data-bs-target="#logs" type="button" role="tab" aria-controls="logs" aria-selected="false">Logs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="all_ips-tab" data-bs-toggle="tab" data-bs-target="#devices" type="button" role="tab" aria-controls="devices" aria-selected="false">Devices</button>
                            </li>
                        </ul></div>';
    }

    if (strpos($user->permissions[$collection], 'c') !== false and $collection !== 'database') {
        if ($style === 'icontext') {
            $create_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-plus\"></span>" . __("Create") . "</a>";
        } else if ($style === 'icon') {
            $create_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\"><span class=\"fa fa-plus\"></span></a>";
        } else {
            $create_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Create") . "\" href=\"" . url_to($collection.'CreateForm') . "\">" . __("Create") . "</a>";
        }
    } else {
        $create_button = "\n";
    }

    $delete_button = "\n";
    if (strpos($user->permissions[$collection], 'd') !== false and $collection !== 'database') {
        if ((in_array($collection, ['orgs','locations','roles']) and $id == 1)) {
            // Not allowed to delete these
        } else {
            if ($style === 'icontext') {
                $delete_button = "<button type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\"><span style=\"margin-right:6px;\" class=\"fa fa-trash-o\"></span>" . __("Delete") . "</button>";
            } else if ($style === 'icon') {
                $delete_button = "<button type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\"><span class=\"fa fa-trash-o\"></span></button>";
            } else {
                $delete_button = "<button type=\"button\" class=\"btn btn-light mb-2 delete_link\" title=\"" . __("Delete") . "\" data-collection=\"$collection\" data-id=\"$id\" data-name=\"$name\">" . __("Delete") . "</button>";
            }
        }
    }

    $collection_button = "";
    $export_button = "";
    $help_button = "";
    if ($style === 'icontext') {
            $collection_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection.'Collection') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-list\"></span>" . __("List") . "</a>";
        if ($collection !== 'database') {
            $export_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export") . "\" href=\"" . url_to($collection.'Collection') . "?format=json\"><span style=\"margin-right:6px;\" class=\"fa-solid fa-angle-down\"></span>" . __("Export") . "</a>";
        }
        $help_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question\"></span>" . __("Help") . "</a>";
    } else if ($style === 'icon') {
        $collection_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection.'Collection') . "\"><span class=\"fa fa-list\"></span></a>";
        if ($collection !== 'database') {
            $export_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export") . "\" href=\"" . url_to($collection.'Collection') . "?format=json\"><span class=\"fa-solid fa-angle-down\"></span></a>";
        }
        $help_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\"><span class=\"fa fa-question\"></span></a>";
    } else {
        $collection_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection.'Collection') . "\">" . __("List") . "</a>";
        if ($collection !== 'database') {
            $export_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Export") . "\" href=\"" . url_to($collection.'Collection') . "?format=json\">" . __("Export") . "</a>";
        }
        $help_button = "<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection.'Help') . "\">" . __("Help") . "</a>";
    }

    if ($collection === 'queries') {
        if ($style === 'icontext') {
            $collection_button .= "\n<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection.'Execute', $id) . "\"><span style=\"margin-right:6px;\" class=\"fa fa-play\"></span>" . __("Execute") . "</a>";
        } else if ($style === 'icon') {
            $collection_button .= "\n<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection.'Execute', $id) . "\"><span class=\"fa fa-play\"></span></a>";
        } else {
            $collection_button = "\n<a role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Execute") . "\" href=\"" . url_to($collection.'Execute', $id) . "\">" . __("Execute") . "</a>";
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
    // if ($update) {
    //     $return = $return . '
    //                                 <div class="pull-right" style="padding-left:4px;">
    //                                     <div data-attribute="' . $name . '" class="btn btn-outline-secondary edit" disabled><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></div>
    //                                     <div data-attribute="' . $name . '" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></div>
    //                                     <div data-attribute="' . $name . '" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></div>
    //                                 </div>';
    // }

    if ($update) {
        $return = $return . '
                                    <div class="pull-right" style="padding-left:4px;">
                                        <button data-attribute="' . $name . '" class="btn btn-outline-secondary edit"><span style="font-size: 1.2rem;" class="fa fa-pencil"></span></button>
                                        <button data-attribute="' . $name . '" class="btn btn-outline-success submit" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-check"></span></button>
                                        <button data-attribute="' . $name . '" class="btn btn-outline-danger cancel" style="display: none;"><span style="font-size: 1.2rem;" class="fa fa-remove"></span></button>
                                    </div>';
    }

    if (!empty($link_button)) {
        $return = $return . '<div class="pull-right" style="padding-left:4px;">' . $link_button . '</div>';
    }
                                    $return = $return . '
                                </div>
                                <div class="form-text form-help pull-right" style="position: absolute; right: 0;" data-attribute="' .  $name . '" data-dictionary="' . $dictionary . '"><span><br /></span></div>
                            </div>
                        </div>
                        ';
    return $return;
}

function read_select(string $name = '', string $value = '', string $dictionary = '', bool $update = false, string $label = '', array $values = array()): string
{

    $return = '';
    if (empty($label)) {
        $label = ucwords(str_replace('_', ' ', __($name)));
    }

    if (empty($values)) {
        # No values passed, assuming a bool y|n.
        $values = array();
        $select = new stdClass();
        $select->id = 'n';
        $select->type = '';
        $select->attributes = new stdClass();
        $select->attributes->name = __('No');
        $values[] = $select;
        unset($select);
        $select = new stdClass();
        $select->id = 'y';
        $select->type = '';
        $select->attributes = new stdClass();
        $select->attributes->name = __('Yes');
        $values[] = $select;
    }

    $return =  "                           <div class=\"row\" style=\"padding-top:16px;\">
                                <div class=\"offset-2 col-8\" style=\"position:relative;\">
                                    <label for=\"{$name}\" class=\"form-label\">{$label}</label><br />
                                    <div class=\"col-7 input-group\">
                                        <select class=\"form-select\" id=\"{$name}\" name=\"{$name}\" data-original-value=\"{$value}\" disabled>\n";
    foreach ($values as $item) {
        $selected = '';
        if ($item->id == $value or ($item->type === 'attributes' and !empty($item->attributes->value) and $item->attributes->value == $value)) {
            $selected = ' selected';
        }
        if ($item->type === 'attributes') {
            $return .= "                                            <option value=\"{$item->attributes->value}\"{$selected}>{$item->attributes->name}</option>\n";
        } else {
            $return .= "                                            <option value=\"{$item->id}\"{$selected}>{$item->attributes->name}</option>\n";
        }
    }
    $return .= "                                        </select>\n";
    if ($update) {
        $return .= "                                        <div class=\"pull-right\" style=\"padding-left:4px;\">
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-secondary edit\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-pencil\"></span></div>
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-success submit\" style=\"display: none;\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-check\"></span></div>
                                            <div data-attribute=\"{$name}\" class=\"btn btn-outline-danger cancel\" style=\"display: none;\"><span style=\"font-size: 1.2rem;\" class=\"fa fa-remove\"></span></div>
                                        </div>\n";
    }
    $return .= "                                    </div>
                                    <div class=\"form-text form-help pull-right\" style=\"position: absolute; right: 0;\" data-attribute=\"{$name}\" data-dictionary=\"" . $dictionary . "\"><span><br /></span></div>
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
    $name = str_replace('Ip Address', 'IP Address', $name);
    $name = str_replace('Device Id', 'Device ID', $name);
    $name = __($name);
    return $name;
}
