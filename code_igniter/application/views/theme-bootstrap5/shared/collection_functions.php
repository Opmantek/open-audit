<?php

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
                            <div class=\"btn-group btn-group-sm float-end\" role=\"group\" aria-label=\"\">
                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . '/' . $id . "?format=csv\" title=\"" . __('Download CSV') . "\"><i class=\"fa fa-columns\"></i></a>
                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . '/' . $id . "?format=json\" title=\"" . __('Request JSON') . "\"><i class=\"fa fa-code\"></i></a>\n";
                                if ($instance->m_users->get_user_permission('', $collection, 'c')) { $return_string .= "                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/import\" title=\"" . __('Upload CSV') . "\"><i class=\"fa fa-upload\"></i></a>\n"; }
                                if ($instance->m_users->get_user_permission('', $collection, 'c')) { $return_string .= "                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/create\" title=\"" . __('Create') . "\"><i class=\"fa fa-plus\"></i></a>\n"; }
                                $return_string .= "                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/help\" title=\"" . __('Help') . "\"><i class=\"fa fa-question\"></i></a>
                            </div>
                        </div>
                    </div>\n";
    return $return_string;
}