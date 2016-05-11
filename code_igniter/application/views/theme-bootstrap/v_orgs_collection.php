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
#echo "<div style=\"float:left; width:100%;\">\n";
if (!empty($this->response->data)) {
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Orgs</span>
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
    } ?>










    <table class="table table-hover table-condensed">
        <thead>
            <tr>
                <th><?php echo __('Systems')?></th>
                <th><?php echo __('Organisation Name')?></th>
                <th><?php echo __('Comment')?></th>
                <th><?php echo __('Parent Name')?></th>
                <th class="text-center"><?php echo __('Activate Group')?></th>
                <th class="text-center"><?php echo __('Remove Group')?></th>
                <th class="text-center"><?php echo __('Show Devices')?></th>
                <th class="text-center"><?php echo __('Edit Organisation')?></th>
                <th class="text-center"><?php echo __('Delete Organisation')?></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($data) > 0) {
                foreach ($data as $key):
                    $edit_pic = '<a href="orgs/'.intval($key->group_id).'?action=update"><button type="button" class="btn btn-sm btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a>';
                    $delete_pic = '<a href="orgs/'.intval($key->group_id).'?action=delete"><button type="button" class="btn btn-sm btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>';
                    if ($key->name == '') {
                        $key->name = '-';
                    }
                    if ($key->group_id != '0') {
                        $show_pic = '<a href="devices?man_org_id='.intval($key->id).'"><button type="button" class="btn btn-sm btn-primary" aria-label="Left Align"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span></button></a>';
                        $deactivate_pic = '<a href="groups/'.intval($key->group_id).'?action=delete"><button type="button" class="btn btn-sm btn-warning" aria-label="Left Align"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>';
                        $activate_pic = '';
                    } else {
                        $show_pic = '';
                        $deactivate_pic = '';
                        $activate_pic = '<a href="groups?action=create&org_id='.intval($key->id).'"><button type="button" class="btn btn-sm btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>';
                    }
                    ?>
                    <tr>
                        <td align='center'><?php echo $key->device_count?></td>
                        <td><a href="../main/view_org/<?php echo $key->id?>"><?php echo htmlentities($key->name)?></a></td>
                        <td><?php echo htmlentities($key->comments)?></td>
                        <td><?php echo htmlentities($key->parent_name)?></td>
                        <td align='center'><?php echo $activate_pic?></td>
                        <td align='center'><?php echo $deactivate_pic?></td>
                        <td align='center'><?php echo $show_pic?></td>
                        <td align='center'><?php echo $edit_pic?></td>
                        <td align='center'><?php echo $delete_pic?></td>
                    </tr>
                <?php endforeach;
                ?>
            <?php } else { ?>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
<?php
}
if (!empty($this->response->error)) {
    echo "<pre>\n";
    print_r($error);
    echo "</pre>\n";
}
?>
</div>
<?php
exit();
?>