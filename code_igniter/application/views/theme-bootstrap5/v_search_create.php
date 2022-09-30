<?php
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
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

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
* @link      http://www.open-audit.org
 */
include 'shared/collection_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?php echo card_header('devices', '', 'fa fa-desktop'); ?>
                </div>
                <div class="card-body">
<?php
if (!empty($this->response->data)) { ?>
                    <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
                    <table class="table table-striped table-hover dataTable" data-order='[[3,"asc"]]'>
                        <thead>
                            <tr>
                                <?php
                                if (!empty($this->response->data[0]->attributes)) {
                                    $properties = get_object_vars($this->response->data[0]->attributes);
                                } else {
                                    $properties = array();
                                }
                                foreach ($properties as $key => $value) {
                                    if (strpos($key, '.') !== false) {
                                        $key = substr($key, strpos($key, '.')+1);
                                    }
                                    if (strrpos($key, 'ip_padded') === strlen($key)-9 or $key == 'ip.ip_padded') {
                                        continue;
                                    }
                                    if ($key == 'system.id' or $key == 'id') {
                                        $key = 'Details';
                                    }
                                    $key = str_replace('_', ' ', $key);
                                    $key = str_replace('os ', 'OS ', $key);
                                    $key = str_replace(' id', ' ID', $key);
                                    $key = str_replace(' ip', ' IP', $key);
                                    $key = ucwords($key);
                                    if ($key == 'Ip') {
                                        $key = 'IP';
                                    }
                                    if (stripos($key, 'icon') !== false or $key === 'Details') {
                                        echo "            <th class=\"text-center\" data-orderable=\"false\">" . __($key) . "</th>\n";
                                    } else {
                                        echo "            <th>" . __($key) . "</th>\n";
                                    }
                                }
                                if ($this->m_users->get_user_permission('', 'devices', 'u')) {
                                    foreach ($properties as $key => $value) {
                                        if ($key == 'system.id') {
                                            echo "            <th class=\"text-center\" data-orderable=\"false\">\n";
                                            echo "              <button type=\"button\" class=\"btn btn-primary btn-sm bulk_edit_button\">" . __('Bulk Edit') . "</button>&nbsp;\n";
                                            echo "              <input type=\"checkbox\" name=\"select_all\" id=\"select_all\" onClick=\"select_all_click()\"/>\n";
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
    foreach ($this->response->data as $item) {
        echo "                            <tr>\n";

        # for every attribute in our returned row
        foreach ($properties as $property => $value) {
            # remove any extra spacing
            $property = trim($property);

            if (!empty($item->attributes->{$property})) {
                if ($property == 'system.id') {
                    #echo '<td><a style="min-width:38px;" href="' . $item->links->self . '" role="button" class="btn btn-sm btn-success"><i class="fa fa-eye" /></a></td>';
                    echo '<td class="text-center"><a role="button" class="btn btn-sm btn-primary" href="' . $this->config->config['oa_web_index'] . '/' . $meta->collection . '/' . $item->links->self . '"><i class="fa fa-eye"></i></a></td>';
                } elseif (strrpos($property, 'ip_padded') === strlen($property)-9 or $property == 'ip.ip_padded') {
                    continue;
                } elseif ((strrpos($property, 'ip') === strlen($property)-2)) {
                    if (!empty($item->attributes->{$property . '_padded'})) {
                        echo "            <td><span style='display:none;'>" . str_replace('.', '', $item->attributes->{$property . '_padded'}) . "</span>" . $item->attributes->$property . "</td>\n";
                    } else {
                        echo "            <td>" . $item->attributes->$property . "</td>\n";
                    }
                } elseif (strrpos($property, 'icon') === strlen($property)-4) {
                    echo "            <td style=\"text-align: center;\"><img src=\"" . str_replace("index.php", "", site_url()) . "device_images/" . strtolower(str_replace(" ", "_", $item->attributes->$property)) . ".svg\" style='border-width:0; width:24px; height:24px' title=\"" . $item->attributes->$property . "\" alt=\"" . $item->attributes->$property . "\"/></td>\n";
                } else {
                    if (strlen($item->attributes->$property) > 30) {
                        echo "            <td class=\"wrap\">" . substr($item->attributes->$property, 0, 30) . "...</span></td>\n";
                    } else {
                        echo "            <td>" . $item->attributes->$property . "</td>\n";
                    }
                }
            } else {
                if ($property != 'ip.ip_padded') {
                    echo "            <td></td>\n";
                }
            }
        }
        if ($this->m_users->get_user_permission('', 'devices', 'u')) {
            if (!empty($item->attributes->{'system.id'})) {
                echo "            <td style=\"text-align: center;\"><input type='checkbox' id='ids[" . $item->attributes->{'system.id'} . "]' value='" . $item->attributes->{'system.id'} . "' name='ids[" . $item->attributes->{'system.id'} . "]' /></td>\n";
            }
        }
        echo "                            </tr>\n";
    }
    ?>
                        </tbody>
                    </table>
                    </form>
    <?php
}
    ?>
                </div>
            </div>
        </main>