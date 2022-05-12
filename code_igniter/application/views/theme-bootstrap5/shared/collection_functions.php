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
        <div class=\"btn-group btn-group-sm float-end\" role=\"group\">\n";

        if ($instance->m_users->get_user_permission('', $collection, 'c') and $collection !== 'configuration') { $return_string .= "                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/create\" title=\"" . __('Create') . "\"><i class=\"fa fa-plus\"></i></a>\n"; }

        $return_string .= "
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-outline-secondary panel-button dropdown-toggle\" type=\"button\" id=\"collectionHeaderButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-ellipsis-v\" aria-hidden=\"true\"></i>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"collectionHeaderButton\">\n
                    <li><a class=\"dropdown-item\" href=\"#\">" . __("Export to CSV") . "</a></li>\n
                    <li><a class=\"dropdown-item\" href=\"#\">" . __("Import CSV") . "</a></li>\n
                    <li><a class=\"dropdown-item\" href=\"#\">" . __("Export to JSON") . "</a></li>\n
                    <li><a class=\"dropdown-item\" href=\"#\">" . __("Import JSON") . "</a></li>\n
                </ul>
            </div>
            <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/help\" title=\"" . __('Help') . "\"><i class=\"fa fa-question\"></i></a>
        </div>
    </div>
</div>";
return $return_string;
}