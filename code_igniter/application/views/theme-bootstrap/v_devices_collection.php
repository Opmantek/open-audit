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
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * 
 * @version 1.14
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */

$refine_link = $_SERVER["REQUEST_URI"];
if (strpos($refine_link, '?') === false) {
    $refine_link .= '?';
} else if (strrpos($refine_link, '&') !== strlen($refine_link)-1) {
    $refine_link .= '&';
}

if (!empty($this->response->meta->groupby)) {
    $refine_link = str_replace('?groupby=' . $this->response->meta->groupby, '?', $refine_link);
    $refine_link = str_replace('&groupby=' . $this->response->meta->groupby, '', $refine_link);
    if (strpos($refine_link, 'properties=') !== false) {

        $refine_link = str_replace('properties=', 'properties=system.id,system.name,', $refine_link);
    } else {
        $refine_link .= '&properties=system.id,system.name';
    }
}

if (!empty($this->response->meta->sub_resource_name)) {
    $title = ' - ' . $this->response->meta->sub_resource_name;
} else {
    $title = '';
}

$export_link = $this->response->links->self;
if (strpos($this->response->links->self, '?') !== false) {
    $export_link .= '&';
} else {
    $export_link .= '?';
}

?>
<div class="collapse" id="queries">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">Queries</h3>
        <span class="glyphicon glyphicon-chevron-down pull-right myDownButton" data-menuitem="queries" data-toggle="collapse" data-target="#queries" aria-expanded="false" aria-controls="queries"></span>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($this->response->included as $item) {
                    if ($item->type == 'queries') {
                        if (strpos($this->response->links->first, '?') !== false) {
                            $link = $this->response->links->first . '&sub_resource=query&sub_resource_id=' . $item->attributes->id;
                        } else {
                            $link = $this->response->links->first . '?sub_resource=query&sub_resource_id=' . $item->attributes->id;
                        }
                        echo "<tr><td><a href=\"" . $link . "\">" . $item->attributes->name . "</a></td><td>" . $item->attributes->description . "</td></tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
        <span class="text-left">Devices <?php echo $title ?></span>
        <span class="pull-right" style="padding-left:10px;">
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-xs btn-default"><a href="<?php echo $export_link; ?>format=csv">csv</a></button>
                <button type="button" class="btn btn-xs btn-default"><a href="<?php echo $export_link; ?>format=json">json</a></button>
                <button type="button" class="btn btn-xs btn-default"><a href="<?php echo $export_link; ?>format=xml">xml</a></button>
            </div>
        </span>
        <span class="pull-right"><button class="btn btn-xs btn-primary" type="button" data-toggle="collapse" data-target="#queries" aria-expanded="false" aria-controls="queries">Queries</button></span>
        <span class="pull-right" style="padding-right:20px;"><?php echo $this->response->meta->filtered . ' of ' . $this->response->meta->total . ' results'; ?></span>
        </h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-default pull-right">
            <div class="panel-body">
                <div class="btn-group" role="group" aria-label="...">
                    <a class="btn btn-default" href="<?php echo $this->response->links->first; ?>" role="button"><?php echo __('first'); ?></a>
                    <a class="btn btn-default" href="<?php echo $this->response->links->prev; ?>" role="button"><?php echo __('prev'); ?></a>
                    <a class="btn btn-default" href="<?php echo $this->response->links->next; ?>" role="button"><?php echo __('next'); ?></a>
                    <a class="btn btn-default" href="<?php echo $this->response->links->last; ?>" role="button"><?php echo __('last'); ?></a>
                </div>
            </div>
        </div>
<?php
if (count($this->response->meta->filter) > 0) {
    echo '<div class="panel panel-default pull-left">';
    echo '<div class="panel-body">';
    foreach ($this->response->meta->filter as $item) {
        if ($item->operator == '=') {
            $label = 'label-success';
        } else if ($item->operator == '!=') {
            $label = 'label-danger';
        } else {
            $label = 'label-info';
        }
        if ($item->operator == '=') {
            $operator = '';
        } else {
            $operator = $item->operator;
        }
        $link = str_replace($item->name . '=' . $operator . $item->value, '', $_SERVER["REQUEST_URI"]);
        $link = str_replace($item->name . '=' . $operator . urlencode($item->value), '', $_SERVER["REQUEST_URI"]);
        if (($item->name == 'status' or $item->name == 'system.status') and $item->operator == '=' and $item->value == 'production') {
            $link = $refine_link . 'system.status=!=\'\'';
        }
        $label = 'label-info';
        echo '<span class="label ' . $label . '">' . $item->name . ' ' . $item->operator . ' ' . urldecode($item->value) . '&nbsp;&nbsp;<a href="' . $link . '">&times;</a></span>&nbsp;';
    }
    echo '</div>';
    echo '</div>';
}

if (!empty($this->response->data)) { ?>
    <form action="devices?action=update" method="post" id="bulk_edit" name="bulk_edit">
      <table class="table table-striped table-hover">
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
                if (strrpos($key, 'ip_padded') === strlen($key)-9) {
                    continue;
                }
                if ($key == 'system.id' or $key == 'id') {
                    $key = 'ID';
                }
                $key = str_replace('_', ' ', $key);
                $key = str_replace('os ', 'OS ', $key);
                $key = str_replace(' id', ' ID', $key);
                $key = str_replace(' ip', ' IP', $key);
                $key = ucwords($key);
                if ($key == 'Ip') {
                    $key = 'IP';
                }
                if (stripos($key, 'icon') !== false) {
                    echo "            <th class=\"text-center\">" . __($key) . "</th>\n";
                } else {
                    echo "            <th>" . __($key) . "</th>\n";
                }
            }
            if ($this->m_users->get_user_permission('', 'devices', 'u')) {
                foreach ($properties as $key => $value) {
                    if ($key == 'system.id') {
                        echo "            <th class=\"text-center\">\n";
                        echo "              <button type=\"button\" class=\"btn btn-primary btn-xs bulk_edit_button\">" . __('Edit') . "</button>&nbsp;\n";
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
    foreach ($this->response->data as $item) {
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
        foreach ($properties as $property => $value) {
            # remove any extra spacing
            $property = trim($property);
            # do we have a .?
            # if so, set the property name as the first character after the . onwards
            // if (strpos($property, '.') !== false) {
            //   $property = substr($property, strpos($property, '.'));
            // }

            # never output these - we should have an attribute called ip instead
            if (strrpos($property, 'ip_padded') === strlen($property)-9) {
                continue;
            }

            if (!empty($item->attributes->$property)) {

                if ($property == 'id' or $property == 'system.id') {
                    echo '<td><a style="min-width:38px;" href="' . htmlspecialchars($item->links->self, REPLACE_FLAGS, CHARSET) . '" role="button" class="btn btn-sm btn-success">' . intval($item->id) . '</a></td>';

                } elseif ((strrpos($property, 'ip') === strlen($property)-2)) {
                    if (!empty($item->attributes->{$property . '_padded'})) {
                        echo "            <td><span style='display:none;'>" . str_replace('.', '', $item->attributes->{$property . '_padded'}) . "</span>" . $item->attributes->$property . "</td>\n";
                    } else {
                        echo "            <td>" . $item->attributes->$property . "</td>\n";
                    }

                } elseif (strrpos($property, 'icon') === strlen($property)-4) {
                    echo "            <td style=\"text-align: center;\"><img src=\"".str_replace("index.php", "", site_url())."device_images/".strtolower(str_replace(" ", "_", htmlspecialchars($item->attributes->$property, REPLACE_FLAGS, CHARSET))).".svg\" style='border-width:0px; width:24px; height:24px' title=\"".htmlspecialchars($item->attributes->$property, REPLACE_FLAGS, CHARSET)."\" alt=\"".htmlspecialchars($item->attributes->$property, REPLACE_FLAGS, CHARSET)."\"/></td>\n";

                } elseif ($property == 'system.seen_by') {
                    echo "            <td>" . htmlspecialchars($item->attributes->$property, REPLACE_FLAGS, CHARSET) . "</td>\n";

                } else {
                    if (strlen($item->attributes->$property) > 30) {
                        echo "            <td class=\"wrap\"><span class=\"small glyphicon glyphicon-filter\" aria-hidden=\"true\" data-html=\"true\" data-toggle=\"popover\" title=\"Refine\" data-content=\"<a href='" . $refine_link . $property . "=!=" . urlencode($item->attributes->$property) . "'>Exclude</a><br /><a href='" . $refine_link . $property . "=" . urlencode($item->attributes->$property) . "'>Include</a><br />\"></span><span title=\"" . $item->attributes->$property . "\">&nbsp;" . substr($item->attributes->$property, 0, 30) . "...</span></td>\n";
                    } else {
                        echo "            <td><span class=\"small glyphicon glyphicon-filter\" aria-hidden=\"true\" data-html=\"true\" data-toggle=\"popover\" title=\"Refine\" data-content=\"<a href='" . $refine_link . $property . "=!=" . urlencode($item->attributes->$property) . "'>Exclude</a><br /><a href='" . $refine_link . $property . "=" . urlencode($item->attributes->$property) . "'>Include</a><br />\"></span>&nbsp;" . $item->attributes->$property . "</td>\n";
                    }
                }
            } else {
                echo "            <td></td>\n";
            }
        }
        if ($this->m_users->get_user_permission('', 'devices', 'u')) {
            if (!empty($system_id)) {
                echo "            <td style=\"text-align: center;\"><input type='checkbox' id='ids[" . intval($system_id) . "]' value='" . intval($system_id) . "' name='ids[" . intval($system_id) . "]' /></td>\n";
            }
        }
        echo "          </tr>\n";
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


