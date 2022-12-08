<?php
function create_text_field($field, $label = '', $info = '', $create_fields = array()) {
    if (empty($label)) {
        $label = ucwords(str_replace('_', ' ', __($field)));
    }
    $title = strtolower(str_replace('data[attributes][', '', $field));
    $title = str_replace(']', '', $title);
    $search = strtolower(str_replace('data[attributes][', '', $field));
    $search = str_replace(']', '', $search);
    $return_string = "\n                                <div class=\"row\">
                                    <div class=\"offset-2 col-8\">
                                        <span class=\"form_label\">" . $label . "</span><br />
                                        <input class=\"form-control\" type=\"text\" id=\"" . $field . "\" name=\"" . $field . "\" ";
                                        if (in_array($search, $create_fields)) {
                                            $return_string .= "required ";
                                        }
                                        $return_string .= "/>
                                    </div>
                                </div>
                                <br />\n";
    return $return_string;
}


// function create_select($field, $list, $label = '', $info = '') {
//  if (empty($label)) {
//      $label = ucwords(str_replace('_', ' ', __($field)));
//  }
//  $return_string = "<br />
//                  <div class=\"row g-3 align-items-center\">
//                      <div class=\"col-3 text-end\">
//                          <label for=\"{$field}\" class=\"col-form-label\">{$label}</label>
//                      </div>
//                      <div class=\"col-7\">
//                          <div class=\"input-group\">
//                              <select class=\"form-control form_select\" id=\"{$field}\" name=\"{$field}\" data-original-value=\"" . $item->attributes->{$field} . "\" data-collection=\"" . $item->type . "\" data-id=\"" .  $item->attributes->id . "\" disabled>\n";
//                                  foreach ($list as $entry) {
//                                      $return_string .= "<option value=\"" . $entry->id . "\"";
//                                      if ($entry->id == $item->attributes->{$field}) {
//                                          $return_string .= " selected";
//                                      } 
//                                      $return_string .= ">" . $entry->attributes->name . "</option>\n";
//                                  }
//                              $return_string .= "</select>
//                          </div>
//                      </div>
//                  </div>\n";
//  return $return_string;
// }

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
                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "\" title=\"" . __('List') . "\"><i class=\"fa fa-list\"></i></a>
                                <a role=\"button\" class=\"btn btn-outline-secondary panel-button\" href=\"" . $instance->config->config['oa_web_index'] . '/' . $collection . "/help\" title=\"" . __('Help') . "\"><i class=\"fa fa-question\"></i></a>
                            </div>
                        </div>
                    </div>\n";
    return $return_string;
}

function create_orgs_select($orgs) {
    $return_string = "<div class=\"row\">
                                    <div class=\"offset-2 col-8\">
                                        <span class=\"form_label\">" . __('Organisation') . "</span><br />
                                        <div class=\"input-group\">
                                            <select class=\"form-select\" name=\"data[attributes][org_id]\" id=\"data[attributes][org_id]\">\n";
                                            foreach ($orgs as $org) {
                                                $return_string .= "                                                <option value=\"" . $org->id . "\">" . $org->attributes->name . "</option>\n";
                                            }
                                            $return_string .= "                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br />";
    return $return_string;
}