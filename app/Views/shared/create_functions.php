<?php

function create_card_header(string $collection = '', string $icon = '', object $user = null): string
{
    $style = (!empty($user->toolbar_style)) ? $user->toolbar_style : '';
    $collection_title = __(ucwords(str_replace('_', ' ', $collection)));
    if ($collection_title === 'Ldap Servers') {
        $collection_title = 'LDAP Servers';
    }
    $collection_title = __($collection_title);

    if ($style === 'icontext') {
        $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-list text-primary\"></span>" . __("List") . "</a>";
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question text-primary\"></span>" . __("Help") . "</a>";
    } elseif ($style === 'icon') {
        $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-list text-primary\"></span></a>";
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question text-primary\"></span></a>";
    } else {
        $collection_button = "<a id=\"button_list\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\" href=\"" . url_to($collection . 'Collection') . "\">" . __("List") . "</a>";
        $help_button = "<a id=\"button_help\" role=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\" href=\"" . url_to($collection . 'Help') . "\">" . __("Help") . "</a>";
    }

    // TODO - Get rid of the nasty style hack in the middle section
    $return = "<div class=\"row\">
                        <div class=\"col-4 clearfix\">
                            <div class=\"btn-group btn-group-sm\" role=\"group\">
                                <h6 style=\"padding-top:10px;\"><span class=\"{$icon} oa-icon\"></span>{$collection_title}</h6>
                            </div>
                        </div>
                        <div class=\"col-4 clearfix\">
                            <div class=\"btn-group btn-group-sm float-middle\" role=\"group\" id=\"oa_panel_buttons\" style=\"padding-top: 6px; padding-bottom: -10px; height:46px;\">
                            </div>
                        </div>
                        <div class=\"col-4 clearfix\">
                            <div class=\"btn-group btn-group-sm float-end\" role=\"group\">
                                <div class=\"page-title-right\">
                                    $collection_button
                                    $help_button
                                </div>
                            </div>
                        </div>
                    </div>\n";

    return $return;
}

function create_text_field(string $field, string $label = '', array $create_fields = array(), string $placeholder = '', string $type = 'text')
{
    if (empty($label)) {
        $label = ucwords(str_replace('_', ' ', __($field)));
    }
    $title = strtolower(str_replace('data[attributes][', '', $field));
    $title = str_replace(']', '', $title);
    $search = strtolower(str_replace('data[attributes][', '', $field));
    $search = str_replace(']', '', $search);

    if (!empty($placeholder)) {
        $placeholder = 'placeholder="' . $placeholder . '"';
    }

    $required = '';
    if (in_array($search, $create_fields)) {
        $required = "required ";
        $label .= ' <span style="color: #dc3545;">*</span>';
    }

    $return_string = "<div id=\"{$title}_div\" class=\"row\" style=\"padding-top:16px; padding-bottom:4px;\"><div class=\"offset-2 col-8\" style=\"position:relative;\"><label class=\"form-label\" for=\"{$field}\">{$label}</label><input class=\"form-control\" type=\"" . $type . "\" id=\"{$field}\" name=\"{$field}\" {$required} " . $placeholder . "/></div></div>";
    return $return_string;
}

function create_select(string $field = '', string $label = '', $items = array(), $create_fields = array())
{
    if (empty($items)) {
        # No items passed, assuming a bool y|n.
        $items = array();
        // $select = new \StdClass();
        // $select->id = '';
        // $select->attributes = new \StdClass();
        // $select->attributes->name = 'Choose';
        // $items[] = $select;
        // unset($select);
        $select = new \StdClass();
        $select->id = 'n';
        $select->attributes = new \StdClass();
        $select->attributes->name = 'No';
        $items[] = $select;
        unset($select);
        $select = new \StdClass();
        $select->id = 'y';
        $select->attributes = new \StdClass();
        $select->attributes->name = 'Yes';
        $items[] = $select;
    }

    if (empty($label)) {
        $label = ucwords(str_replace('_', ' ', __($field)));
    }
    $title = strtolower(str_replace('data[attributes][', '', $field));
    $title = strtolower(str_replace('data[attributes][options][', '', $title));
    $title = strtolower(str_replace('data[attributes][credentials][', '', $title));
    $title = str_replace(']', '', $title);

    $search = strtolower(str_replace('data[attributes][', '', $field));
    $search = strtolower(str_replace('data[attributes][options][', '', $search));
    $search = strtolower(str_replace('data[attributes][credentials][', '', $search));
    $search = str_replace(']', '', $search);

    $required = '';
    if (in_array($search, $create_fields)) {
        $required = "required ";
        $label .= ' <span style="color: #dc3545;">*</span>';
    }

    $return_string = "\n                                <div class=\"row\" style=\"padding-top:16px; padding-bottom:4px;\">
                                    <div class=\"offset-2 col-8\">
                                        <label class=\"form-label\" for=\"{$field}\">" . $label . "</label>
                                        <select class=\"form-select\" name=\"{$field}\" id=\"{$field}\" {$required}>\n                                            <option value=\"\">" . __('Choose') . "</option>\n";
    foreach ($items as $item) {
        $selected = '';
        if ($item->id === 1 and $field === 'data[attributes][org_id]') {
            $selected = ' selected';
        }
        $return_string .= "                                            <option value=\"" . $item->id . "\"" . $selected . ">" . $item->attributes->name . "</option>\n";
    }
    $return_string .= "                                        </select>
                                </div>
                            </div>";
    return $return_string;
}

function create_column_name(string $name = ''): string
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
