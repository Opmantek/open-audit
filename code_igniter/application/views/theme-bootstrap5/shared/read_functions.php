<?php
function edit_text_field($field, $item, $edit, $label = '', $info = '') {
    if (empty($label)) {
        $label = __(ucwords(str_replace('_', ' ', __($field))));
    }
    $return_string = "\n\n                            <br />
                            <div class=\"row g-3 align-items-center\">
                                <div class=\"col-3 text-end\">
                                    <label for=\"{$field}\" class=\"col-form-label\">{$label}</label>
                                </div>
                                <div class=\"col-7\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" id=\"{$field}\" name=\"{$field}\" value=\"" . $item->attributes->{$field} . "\" data-original-value=\""  . $item->attributes->{$field} . "\" data-collection=\"" . $item->type . "\" data-id=\"" . $item->attributes->id . "\" disabled>\n";
                                if (!empty($edit)) {
                                    $return_string .= "                                        <div id=\"submit_{$field}\" data-action=\"submit\" data-attribute=\"{$field}\"></div>\n
                                        <div id=\"cancel_{$field}\" data-action=\"cancel\" data-attribute=\"{$field}\"></div>\n
                                        <div class=\"btn btn-outline-secondary input-group-text edit_button\" title=\"" . __('Edit') . "\" id=\"edit_{$field}\" data-action=\"edit\" data-attribute=\"{$field}\"><i class=\"fa fa-edit\"></i></div>\n";
                                }
                            $return_string .= "                                     <div class=\"btn btn-outline-secondary input-group-text edit_button\" data-bs-html=\"true\" data-bs-toggle=\"popover\" title=\"{$field}\" data-bs-content=\"{$info}\"><i class=\"fa fa-info\"></i></div>\n";
                            $return_string .= "                                 </div>
                                </div>
                            </div>";
    return $return_string;
}

function edit_select_org_field($field, $item, $edit, $list, $label = '', $info = '') {
    if (empty($label)) {
        $label = __(ucwords(str_replace('_', ' ', __($field))));
    }
    $return_string = "\n\n                            <br />
                            <div class=\"row g-3 align-items-center\">
                                <div class=\"col-3 text-end\">
                                    <label for=\"{$field}\" class=\"col-form-label\">{$label}</label>
                                </div>
                                <div class=\"col-7\">
                                    <div class=\"input-group\">
                                        <select class=\"form-control form-select\" id=\"{$field}\" name=\"{$field}\" data-original-value=\"" . $item->attributes->{$field} . "\" data-collection=\"" . $item->type . "\" data-id=\"" .  $item->attributes->id . "\" disabled>\n";
                                    foreach ($list as $entry) {
                                        $return_string .= "                                         <option value=\"" . $entry->id . "\"";
                                        if ($entry->id == $item->attributes->{$field}) {
                                            $return_string .= " selected";
                                        } 
                                        $return_string .= ">" . $entry->attributes->name . "</option>\n";
                                    }
                                $return_string .= "                                     </select>\n";
                                if (!empty($edit)) {
                                $return_string .= "                                     <div id=\"submit_{$field}\" data-action=\"submit\" data-attribute=\"{$field}\"></div>\n
                                        <div id=\"cancel_{$field}\" data-action=\"cancel\" data-attribute=\"{$field}\"></div>\n
                                <div class=\"btn btn-outline-secondary input-group-text edit_button\" title=\"" . __('Edit') . "\" id=\"edit_{$field}\" data-action=\"edit\" data-attribute=\"{$field}\"><i class=\"fa fa-edit\"></i></div>\n";
                                }
                            $return_string .= "                                     <div class=\"btn btn-outline-secondary input-group-text edit_button\" data-bs-html=\"true\" data-bs-toggle=\"popover\" title=\"{$field}\" data-bs-content=\"{$info}\"><i class=\"fa fa-info\"></i></div>\n";
                            $return_string .= "                                 </div>
                                </div>
                            </div>\n";
    return $return_string;
}

function card_header($collection, $id, $icon) {
    $instance = & get_instance();
    $collection_title = __(ucwords(str_replace('_', ' ', $collection)));
    if ($collection_title === 'Ldap Servers') {
        $collection_title = 'LDAP Servers';
    }
    $collection_title = __($collection_title);
    $return_string = "<div class=\"row\">
                    <div class=\"col-9 clearfix\">
                        <div class=\"btn-group btn-group-sm\" role=\"group\" aria-label=\"\">
                            <div class=\"btn-group\" role=\"group\">
                                <button type=\"button\" class=\"btn btn-outline-dark oa-card-button\"><i class=\"{$icon} ?> oa-icon\"></i>{$collection_title}</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-3 clearfix\">
                        <div class=\"btn-group btn-group-sm float-end\" role=\"group\">
                            <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "\" title=\"" . __('List') . "\"><i class=\"fa fa-list\"></i></a>\n";
                            if ($collection !== 'configuration') {
                                echo "                            <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/create\" title=\"" . __('Create') . "\"><i class=\"fa fa-plus\"></i></a>\n";
                            }
                            if ($instance->m_users->get_user_permission('', $collection, 'd')) {
                            $return_string .= "                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button delete_link\" data-id=\"{$id}\" data-name=\"\" title=\"" . __('Delete') . "\"><i class=\"fa fa-trash\"></i></a>\n";
                            }
                            $return_string .= "                                <div class=\"dropdown\">
                                <button class=\"btn btn-sm btn-outline-secondary panel-button dropdown-toggle\" type=\"button\" id=\"collectionHeaderButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                                </button>
                                <ul class=\"dropdown-menu\" aria-labelledby=\"collectionHeaderButton\">\n
                                    <li><a class=\"dropdown-item\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/" . $id . "?format=csv\">" . __("Export to CSV") . "</a></li>\n
                                    <li><a class=\"dropdown-item\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "import\">" . __("Import CSV") . "</a></li>\n
                                    <li><a class=\"dropdown-item\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/" . $id . "?format=json\">" . __("Export to JSON") . "</a></li>\n
                                    <li><a class=\"dropdown-item\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "import/json\">" . __("Import JSON") . "</a></li>\n
                                </ul>
                            </div>
                            <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/help\" title=\"" . __('Help') . "\"><i class=\"fa fa-question\"></i></a>
                        </div>
                    </div>
                </div>";
    return $return_string;
}