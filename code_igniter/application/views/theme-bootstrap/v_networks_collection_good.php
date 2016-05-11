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
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <span class="text-left">Devices</span>
      <span class="pull-right">Count: <?php echo @count($this->response->data); ?></span>
    </h3>
  </div>
  <div class="panel-body">
	<table class="table">
		<thead>
			<tr>
				<th><?php echo __('ID')?></th>
				<th><?php echo __('Name')?></th>
				<th><?php echo __('Description')?></th>
				<th><?php echo __('Edited By')?></th>
				<th><?php echo __('Edited Date')?></th>
				<th align='center'><?php echo __('Edit')?></th>
				<th align='center'><?php echo __('Delete')?></th>
			</tr>
		</thead>
		<tbody>
			<?php
	        foreach ($this->response->data as $item):
                $edit_pic = '<a href="networks/'.intval($item->id).'?action=update"><button type="button" class="btn btn-sm btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a>';
                $delete_pic = '<a href="networks/'.intval($item->id).'?action=delete"><button type="button" class="btn btn-sm btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>';
	            ?>
			<tr>
				<td><?php echo htmlentities($item->id)?></td>
				<td><?php echo htmlentities($item->name)?></td>
				<td><?php echo htmlentities($item->description)?></td>
				<td><?php echo htmlentities($item->edited_by)?></td>
				<td><?php echo htmlentities($item->edited_date)?></td>
				<td align='center'><?php echo $edit_pic?></td>
				<td align='center'><?php echo $delete_pic?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
  </div>
</div>
<?php exit();
?>
