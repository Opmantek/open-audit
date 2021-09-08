<?php
function create_text_field($field, $label = '', $info = '') {
    if (empty($label)) {
        $label = ucwords(str_replace('_', ' ', __($field)));
    }
    $title = strtolower(str_replace('data[attributes][', '', $field));
    $title = str_replace(']', '', $title);
    $return_string = "<br />
                    <div class=\"row g-3 align-items-center\">
                        <div class=\"col-3 text-end\">
                            <label for=\"{$field}\" class=\"col-form-label\">{$label}</label>
                        </div>
                        <div class=\"col-7\">
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" id=\"{$field}\" name=\"{$field}\" >
                                <div class=\"btn btn-outline-secondary input-group-text edit_button\" data-bs-toggle=\"popover\" title=\"{$title}\" data-bs-content=\"{$info}\" ><i class=\"fa fa-info\"></i></div>
                            </div>
                        </div>
                    </div>";
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
