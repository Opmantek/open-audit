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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$refine_link = $_SERVER["REQUEST_URI"];
if (strpos($refine_link, '?') === false) {
  $refine_link .= '?';
} else if (strrpos($refine_link, '&') !== strlen($refine_link)-1){
  $refine_link .= '&';
}
if (!empty($this->response->meta->sub_resource_name)) {
  $title = ' - ' . $this->response->meta->sub_resource_name;
} else {
  $title = '';
}
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Devices <?php echo $title ?></span>
      <span class="pull-right"><?php echo $this->response->meta->filtered . ' of ' . $this->response->meta->total . ' results'; ?></span>
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
      <table class="table">
        <thead>
          <tr>
<?php
      $properties = get_object_vars($this->response->data[0]->attributes);
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
        if ($key == 'Ip') { $key = 'IP'; }
        if (stripos($key, 'icon') !== false) {
          echo "            <th style=\"text-align: center;\" >" . __($key) . "</th>\n";
        } else {
          echo "            <th>" . __($key) . "</th>\n";
        }
      }
      ?>
            <th class="text-center">
              <button type="button" class="btn btn-primary bulk_edit_button"><?php echo __('Edit') ?></button>&nbsp;
              <input type="checkbox" name="select-all"/>
            </th>
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

        if ((strrpos($property, 'ip') === strlen($property)-2) and (!empty($item->attributes->{$property . '_padded'}))) {
          echo "            <td><span style='display:none;'>" . str_replace('.', '', $item->attributes->{$property . '_padded'}) . "</span>" . $item->attributes->$property . "</td>\n";
        
        
        } elseif ($property == 'id' or $property == 'system.id') {
          #echo "            <td><a href='" . $item->links->self . "'>" . $item->attributes->$property . "</a></td>\n";
          echo "<td><a href=" . htmlentities($item->links->self) . "><button type=\"button\" class=\"btn btn-sm btn-success\" aria-label=\"Left Align\">" . htmlentities($item->id) . "</button></a></td>";
        
        } elseif (strrpos($property, 'icon') === strlen($property)-4) {
          echo "            <td style=\"text-align: center;\"><img src=\"".str_replace("index.php", "", site_url())."device_images/".strtolower(str_replace(" ", "_", htmlentities($item->attributes->$property))).".svg\" style='border-width:0px; width:24px;' title=\"".htmlentities($item->attributes->$property)."\" alt=\"".htmlentities($item->attributes->$property)."\"/></td>\n";
        
        } else {
          if (strlen($item->attributes->$property) > 50) {
            $display = substr($item->attributes->$property, 0, 50) . '....';
          } else {
            $display = $item->attributes->$property;
          }
          echo "            <td><span class=\"small glyphicon glyphicon-filter\" aria-hidden=\"true\" data-html=\"true\" data-toggle=\"popover\" title=\"Refine\" data-content=\"<a href='" . $refine_link . $property . "=!=" . urlencode($item->attributes->$property) . "'>Exclude</a><br /><a href='" . $refine_link . $property . "=" . urlencode($item->attributes->$property) . "'>Include</a><br />\"></span>&nbsp;" . $display . "</td>\n";
        }
      } else {
        echo "            <td></td>\n";
      }
    }

    if (!empty($system_id)) {
      echo "            <td style=\"text-align: center;\"><input type='checkbox' id='ids[" . intval($system_id) . "]' value='" . intval($system_id) . "' name='ids[" . intval($system_id) . "]' /></td>\n";
    }
    echo "          </tr>\n";
  }
  ?>
        </tbody>
      </table>
    </form>
<?php } ?>
  </div>
</div>
</div>
