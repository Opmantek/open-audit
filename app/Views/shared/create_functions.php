<?php
function create_card_header(string $collection = '', string $icon = '', object $user = null): string
{
    $style = @$user->toolbar_style;
    $collection_title = __(ucwords(str_replace('_', ' ', $collection)));
    if ($collection_title === 'Ldap Servers') {
        $collection_title = 'LDAP Servers';
    }
    $collection_title = __($collection_title);

    if ($style === 'icontext') {
        $collection_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\"><a href=\"" . url_to($collection.'Collection') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-list\"></span>" . __("List") . "</a></button>";
        $help_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\"><a href=\"" . url_to($collection.'Help') . "\"><span style=\"margin-right:6px;\" class=\"fa fa-question\"></span>" . __("Help") . "</a></button>";
    } else if ($style === 'icon') {
        $collection_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\"><a href=\"" . url_to($collection.'Collection') . "\"><span class=\"fa fa-list\"></span></a></button>";
        $help_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\"><a href=\"" . url_to($collection.'Help') . "\"><span class=\"fa fa-question\"></span></a></button>";
    } else {
        $collection_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("List") . "\"><a href=\"" . url_to($collection.'Collection') . "\">" . __("List") . "</a></button>";
        $help_button = "<button type=\"button\" class=\"btn btn-light mb-2\" title=\"" . __("Help") . "\"><a href=\"" . url_to($collection.'Help') . "\">" . __("Help") . "</a></button>";
    }

    $return = "<div class=\"row\">
                        <div class=\"col-3 clearfix\">
                            <div class=\"btn-group btn-group-sm\" role=\"group\">
                                <h6 style=\"padding-top:10px;\"><span class=\"{$icon} oa-icon\"></span>{$collection_title}</h6>
                            </div>
                        </div>
                        <div class=\"col-9 clearfix\">
                            <div class=\"btn-group btn-group-sm float-end\" role=\"group\" id=\"oa_panel_buttons\">
                                <div class=\"page-title-right\">
                                    $collection_button
                                    $help_button
                                </div>
                            </div>
                        </div>
                    </div>\n";

    return $return;
}

function create_text_field(string $field, string $label = '', array $create_fields = array(), string $placeholder = '')
{
    if (empty($label)) {
        $label = ucwords(str_replace('_', ' ', __($field)));
    }
    $title = strtolower(str_replace('data[attributes][', '', $field));
    $title = str_replace(']', '', $title);
    $search = strtolower(str_replace('data[attributes][', '', $field));
    $search = str_replace(']', '', $search);

    $required = '';
    if (in_array($search, $create_fields)) {
        $required = "required ";
        $label .= ' <span style="color: #dc3545;">*</span>';
    }

    $return_string = "\n                                <div class=\"row\" style=\"padding-top:16px; padding-bottom:4px;\">
                                    <div class=\"offset-2 col-8\" style=\"position:relative;\">
                                        <label class=\"form-label\" for=\"{$field}\">{$label}</label>
                                        <input class=\"form-control\" type=\"text\" id=\"{$field}\" name=\"{$field}\" {$required} placeholder=\"{$placeholder}\"/>
                                    </div>
                                </div>";
    return $return_string;
}

function create_select(string $field = '', string $label = '', $items = array(), $create_fields = array())
{
    if (empty($items)) {
        # No items passed, assuming a bool y|n.
        $items = array();
        $select = new stdClass();
        $select->id = 'n';
        $select->attributes = new stdClass();
        $select->attributes->name = 'No';
        $items[] = $select;
        unset($select);
        $select = new stdClass();
        $select->id = 'y';
        $select->attributes = new stdClass();
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
                                        <select class=\"form-select\" name=\"{$field}\" id=\"{$field}\" {$required}>\n";
    foreach ($items as $item) {
        $return_string .= "                                            <option value=\"" . $item->id . "\">" . $item->attributes->name . "</option>\n";
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
