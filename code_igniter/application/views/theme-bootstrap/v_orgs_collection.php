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
 * @version 1.12.8
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Orgs</span>
            <span class="pull-right"><?php echo $this->response->meta->filtered . ' of ' . $this->response->meta->total . ' results'; ?></span>
        </h3>
    </div>
    <div class="panel-body">
        <?php include('include_collection_panel_header.php'); ?>
        <?php if (!empty($this->response->data)) { ?>
            <table class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th><?php echo __('ID')?></th>
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
                    <?php foreach ($this->response->data as $item):
                        if ($item->attributes->group_id != '0') {
                            $show_pic = '<a href="devices?org_id='.intval($item->id).'"><button type="button" class="btn btn-sm btn-primary" aria-label="Left Align"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span></button></a>';
                            $deactivate_pic = '<a href="groups/'.intval($item->attributes->group_id).'?action=delete"><button type="button" class="btn btn-sm btn-warning" aria-label="Left Align"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>';
                            $activate_pic = '';
                        } else {
                            $show_pic = '';
                            $deactivate_pic = '';
                            $activate_pic = '<a href="groups?action=create&org_id='.intval($item->id).'"><button type="button" class="btn btn-sm btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a>';
                        }
                        ?>
                        <tr>
                            <td style='text-align:center;'><a class="btn btn-sm btn-success" href="<?php echo htmlentities($item->links->self); ?>"><?php echo intval($item->id); ?></a></td>
                            <td class="text-center"><?php echo $item->attributes->device_count?></td>
                            <td><?php echo htmlentities($item->attributes->name)?></td>
                            <td><?php echo htmlentities($item->attributes->comments)?></td>
                            <td><?php echo htmlentities($item->attributes->parent_name)?></td>
                            <td class="text-center"><?php echo $activate_pic?></td>
                            <td class="text-center"><?php echo $deactivate_pic?></td>
                            <td class="text-center"><?php echo $show_pic?></td>
                            <td class="text-center"><a href="<?php echo htmlentities($item->links->self); ?>/update"><button type="button" class="btn btn-sm btn-info" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a></td>
                            <?php if ($item->attributes->id != 0) { ?>
                                <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link" aria-label="Left Align" ><span class="glyphicon glyphicon-trash" data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlentities($item->attributes->name); ?>" aria-hidden="true"></span></button></td>
                            <?php } else { ?>
                                <td></td>
                            <?php } ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>