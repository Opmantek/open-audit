<?php
#  Copyright 2022 Firstwave (www.firstwave.com)
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************
#
/**
 * @author Mark Unwin <mark.unwin@firstwave.com>
 *
 *
 * @version   GIT: Open-AudIT_3.5.3

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

// $refine_link = $_SERVER["REQUEST_URI"];
// if (strpos($refine_link, '?') === false) {
//     $refine_link .= '?';
// } else if (strrpos($refine_link, '&') !== strlen($refine_link)-1) {
//     $refine_link .= '&';
// }

// if (!empty($meta->groupby)) {
//     $refine_link = str_replace('?groupby=' . $meta->groupby, '?', $refine_link);
//     $refine_link = str_replace('&groupby=' . $meta->groupby, '', $refine_link);
//     if (strpos($refine_link, 'properties=') !== false) {
//         $refine_link = str_replace('properties=', 'properties=system.id,system.name,', $refine_link);
//     } else {
//         $refine_link .= '&properties=system.id,system.name';
//     }
// }

// if (!empty($meta->sub_resource_name)) {
//     $title = ' - ' . $meta->sub_resource_name;
// } else {
//     $title = '';
// }

// $export_link = $links->first;
// if (strpos($links->first, '?') !== false) {
//     $export_link .= '&';
// } else {
//     $export_link .= '?';
// }
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <div class="btn-group btn-group-sm" role="group" aria-label="">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-dark oa-card-button"><i class="<?php echo $meta->icon ?> oa-icon"></i><?php echo ucfirst($meta->collection) ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" aria-label="">
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $meta->collection ?>?format=csv" title="<?php echo __('Download CSV') ?>"><i class="fa fa-columns"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $meta->collection ?>?format=json" title="<?php echo __('Request JSON') ?>"><i class="fa fa-code"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $meta->collection ?>/import" title="<?php echo __('Upload CSV') ?>"><i class="fa fa-upload"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $meta->collection ?>/create" title="<?php echo __('Create') ?>"><i class="fa fa-plus"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $meta->collection ?>/help" title="<?php echo __('Help') ?>"><i class="fa fa-question"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <?php
                            $properties = $meta->{'data_order'};
                            foreach ($properties as $key) {
                                if ($key === 'system.ip_padded') {
                                    continue;
                                }
                                if ($key == 'system.id') {
                                    $key = 'Details';
                                }
                                $key = str_replace('.', ' ', $key);
                                $key = str_replace('_', ' ', $key);
                                $key = str_replace('os ', 'OS ', $key);
                                if ($key !== 'system identification') {
                                    $key = str_replace(' id', ' ID', $key);
                                }
                                $key = str_replace(' ip', ' IP', $key);
                                $key = ucwords($key);
                                if ($key == 'Ip') {
                                    $key = 'IP';
                                }
                                if (stripos($key, 'icon') !== false or $key == 'Details') {
                                    echo "            <th class=\"text-center\">" . __($key) . "</th>\n";
                                } else {
                                    echo "            <th>" . __($key) . "</th>\n";
                                }
                            }
                            if ($this->m_users->get_user_permission('', 'devices', 'u')) {
                                foreach ($properties as $key => $value) {
                                    if ($key == 'system.id') {
                                        echo "            <th class=\"text-center\">\n";
                                        echo "              <button type=\"button\" class=\"btn btn-primary btn-sm bulk_edit_button\">" . __('Bulk Edit') . "</button>&nbsp;\n";
                                        echo "              <input type=\"checkbox\" name=\"select_all\" id=\"select_all\" onclick=\"select_all_click();\"/>\n";
                                        echo "            </th>\n";
                                    }
                                }
                            }
                            ?>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        # for every returned row
                        if ( ! empty($data) and is_array($data)) {
                        foreach ($data as $item) {
                            # grab the system.id if it exists
                            $system_id = '';
                            if (!empty($item->attributes->{'system.id'})) {
                                $system_id = $item->attributes->{'system.id'};
                            }
                            if ($system_id == '' and !empty($item->id)) {
                                $system_id = $item->id;
                            }
                            echo "          <tr>\n";

                            # for every attribute in our retrned row
                            foreach ($properties as $property) {

                                # never output these - we should have an attribute called ip instead
                                if ($property === 'system.ip_padded') {
                                    continue;
                                }

                                if (!empty($item->attributes->$property)) {
                                    if ($property == 'system.id') {
                                        echo "            <td class=\"text-center\"><a role=\"button\" class=\"btn btn-sm btn-devices\" href=\"" . $this->config->config['oa_web_index'] . "/devices/" . $item->{'attributes'}->{'system.id'} . "\"><i class=\"fa fa-desktop\"></i></a></td>\n";

                                    } elseif (strrpos($property, 'ip') === strlen($property)-2) {
                                        if (!empty($item->{'attributes'}->{'ip_padded'})) {
                                            echo "            <td><span style='display:none;'>" . str_replace('.', '', $item->{'attributes'}->{'ip_padded'}) . "</span>" . $item->{'attributes'}->{$property} . "</td>\n";
                                        } else {
                                            echo "            <td>" . $item->{'attributes'}->{$property} . "</td>\n";
                                        }

                                    } elseif (strrpos($property, 'icon') === strlen($property)-4) {
                                        echo "            <td style=\"text-align: center;\"><img src=\"" . str_replace("index.php", "", site_url()) . "device_images/" . strtolower(str_replace(" ", "_", $item->attributes->$property)) . ".svg\" style='border-width:0; width:24px; height:24px' title=\"" . $item->attributes->$property . "\" alt=\"" . $item->attributes->$property . "\" ></td>\n";

                                    } elseif ($property == 'link') {
                                        echo "            <td><a href=\"../../" . $item->attributes->$property . "\" target=\"_blank\" role=\"button\" class=\"btn btn-sm btn-primary\"><span class=\"glyphicon glyphicon-link\" aria-hidden=\"true\"></span></a></td>\n";

                                    } else {
                                        refine($property, $item->{'attributes'}->{$property});
                                    }
                                } else {
                                    echo "            <td></td>\n";
                                }
                            }
                            if ($this->m_users->get_user_permission('', 'devices', 'u')) {
                                if ( ! empty($system_id)) {
                                    echo "            <td style=\"text-align: center;\"><input type='checkbox' id='ids[" . $system_id . "]' value='" . $system_id . "' name='ids[" . $system_id . "]' /></td>\n";
                                }
                            }
                            echo "          </tr>\n";
                        }
                        }
                        ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </main>

<?php
// function refine($property, $value, $display = '', $align = 'left')
// {
//     if ($display === '') {
//         $display = $value;
//     }
//     $CI = & get_instance();
//     if (strlen($display) > 28) {
//         $trim = intval($CI->config->config['gui_trim_characters']);
//         if (empty($trim)) {
//             $trim = 25;
//         }
//         $display = mb_substr($display, 0, $trim) . ' ...';
//     }

//     $query_parameters = $CI->response->meta->query_parameters;
//     $item = new stdClass();
//     $item->name = $property;
//     $item->operator = '=';
//     $item->value = $value;
//     $query_parameters[] = $item;
//     $include_link = create_url($query_parameters);
//     unset($query_parameters);

//     $query_parameters = $CI->response->meta->query_parameters;
//     $item = new stdClass();
//     $item->name = $property;
//     $item->operator = '!=';
//     $item->value = $value;
//     $query_parameters[] = $item;
//     $exclude_link = create_url($query_parameters);
//     unset($query_parameters);

//     if ( ! empty($value)) {
//         echo '            <td class="text-' . $align . '"><span class="small fa fa-filter" aria-hidden="true" data-bs-placement="left" data-bs-html="true" data-bs-toggle="popover" title="Refine" data-bs-content="<a href=\'' . $exclude_link . '\'>Exclude</a><br /><a href=\'' . $include_link . '\'>Include</a>"></span><span title="' . $value . '">&nbsp;' . $display . "</span></td>\n";
//     } else {
//         echo '            <td class="text-' . $align . '">' . $display . "</td>\n";
//     }
// }
?>

