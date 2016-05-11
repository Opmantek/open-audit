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
 * @version 1.12.6
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
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Devices</span>
      <span class="pull-right"><?php echo $this->response->filtered . ' of ' . $this->response->total . ' results'; ?></span>
    </h3>
  </div>
  <div class="panel-body">

<div class="panel panel-default pull-right">
  <div class="panel-body">
    <div class="btn-group" role="group" aria-label="...">
      <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->first; ?>"><?php echo __('first'); ?></a></button>
      <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->prev; ?>"><?php echo __('prev'); ?></a></button>
      <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->next; ?>"><?php echo __('next'); ?></a></button>
      <button type="button" class="btn btn-default"><a href="<?php echo $this->response->links->last; ?>"><?php echo __('last'); ?></a></button>
    </div>
  </div>
</div>
<?php
if (count($this->response->filter) > 0) {
  echo '<div class="panel panel-default pull-left">';
  echo '<div class="panel-body">';
  #echo '<div class="well well-sm pull-left">';
  foreach ($this->response->filter as $item) {
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
    if ($item->name == 'status' and $item->operator == '=' and $item->value == 'production') {
      $link = $refine_link . 'man_status=!=""';
    }
    $label = 'label-info';
    echo '<big><span class="label ' . $label . '">' . $item->name . ' ' . $item->operator . ' ' . urldecode($item->value) . '&nbsp;&nbsp;<a href="' . $link . '">&times;</a></span></big>&nbsp;';
  }
  echo '</div>';
  echo '</div>';
}

if (!empty($this->response->data)) { ?>
    <form action="devices?action=edit" method="post" id="bulk_edit" name="bulk_edit">
      <table class="table">
        <thead>
          <tr>
<?php
      $properties = get_object_vars($this->response->data[0]);
      foreach ($properties as $key => $value) {
        if (strpos($key, '.') !== false) {
          $key = substr($key, strpos($key, '.')+1);
        }
        if ($key == 'man_ip_address' or $key == 'system.man_ip_address' or $key == 'ip_padded') {
          continue;
        }
        if ($key == 'system_id') {
          $key = 'ID';
        }
        $key = str_replace('man_', '', $key);
        $key = str_replace('_', ' ', $key);
        $key = str_replace('os ', 'OS ', $key);
        $key = str_replace(' id', ' ID', $key);
        $key = ucwords($key);
        if ($key == 'Ip') { $key = 'IP'; }
        if (stripos($key, 'icon') !== false) {
          echo "            <th style=\"text-align: center;\" nowrap>" . __($key) . "</th>\n";
        } else {
          echo "            <th>" . __($key) . "</th>\n";
        }
      }
      ?>
            <th width="150" class="text-center">
              <button type="button" class="btn btn-primary" onclick="document.bulk_edit.submit();"><?php echo __('Edit') ?></button>&nbsp;
              <input type="checkbox"/>
            </th>
          </tr>
        </thead>
        <tbody>
<?php
# for every returned row
  foreach ($this->response->data as $item) {

    # grab the system_id if it exists
    $system_id = '';
    if (!empty($item->system_id)) {
      $system_id = $item->system_id;
    }
    if (!empty($item->{'system.system_id'})) {
      $system_id = $item->{'system.system_id'};
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
      # never output these - we shoudl have an attribute called ip instead
      if ($property == 'man_ip_address' or $property == 'system.man_ip_address' or $property == 'ip_padded') {
        continue;
      }

      if (!empty($item->$property)) {
        if ($property == 'ip' and !empty($item->ip_padded)) {
          echo "            <td><span style='display:none;'>" . str_replace('.', '', $item->ip_padded) . "</span>" . $item->ip . "</td>\n";
        } elseif ($property == 'system_id' or $property == 'system.system_id') {
          echo "            <td><a href='devices/" . $item->$property . "'>" . $item->$property . "</td>\n";
        } elseif ($property == 'icon' or $property == 'system.icon') {
          echo "            <td style=\"text-align: center;\"><img src=\"".str_replace("index.php", "", site_url())."device_images/".strtolower(str_replace(" ", "_", htmlentities($item->$property))).".svg\" style='border-width:0px; width:24px;' title=\"".htmlentities($item->$property)."\" alt=\"".htmlentities($item->$property)."\"/></td>\n";
        } else {
          if (strlen($item->$property) > 50) {
            $display = substr($item->$property, 0, 50) . '....';
          } else {
            $display = $item->$property;
          }
          echo "            <td><span class=\"small glyphicon glyphicon-filter\" aria-hidden=\"true\" data-html=\"true\" data-toggle=\"popover\" title=\"Refine\" data-content=\"<a href='" . $refine_link . $property . "=!=" . urlencode($item->$property) . "'>Exclude</a><br /><a href='" . $refine_link . $property . "=" . urlencode($item->$property) . "'>Include</a><br />\"></span>&nbsp;" . $display . "</td>\n";
        }
      } else {
        echo "            <td></td>\n";
      }
    }

    if (!empty($system_id)) {
      echo "            <td align='center'><input type='checkbox' id='ids[]' value='" . intval($system_id) . "' name='ids[]' /></td>\n";
    }
    echo "          </tr>\n";
  }
  ?>
        </tbody>
      </table>
    </form>
<?php
}
if (!empty($this->response->error)) {
  echo '</div></div><div class="alert alert-danger" role="alert">' . $this->response->error->title . '</div>';
  echo "<pre>\n";
  print_r($this->response->error);
  echo "</pre>\n";
}
?>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  });
</script>

<style>
.glyphicon:hover { 
    color: green;
}
</style>
<?php
exit();
?>