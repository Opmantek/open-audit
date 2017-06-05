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
 * @version   2.0.1

 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?php include('include_collection_panel_header.php'); ?>
    </div>
    <div class="panel-body">
        <?php include('include_collection_panel_body_links.php'); ?>
        <?php if (!empty($this->response->data)) { ?>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center"><?php echo __('ID')?></th>
                    <th><?php echo __('Name')?></th>
                    <th><?php echo __('Organisation')?></th>
                    <th><?php echo __('Full Name')?></th>
                    <th><?php echo __('Email')?></th>
                    <th><?php echo __('Roles')?></th>
                    <?php if ($this->m_users->get_user_permission('', 'users', 'u')) { ?>
                    <th class="text-center"><?php echo __('Edit')?></th>
                    <?php } ?>
                    <?php if ($this->m_users->get_user_permission('', 'users', 'd')) { ?>
                    <th class="text-center"><?php echo __('Delete')?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item): ?>
                <?php $roles = @implode(', ', json_decode($item->attributes->roles)); ?>
                    <tr>
                        <td class="text-center"><a class="btn btn-sm btn-success" href="<?php echo htmlspecialchars($item->links->self, REPLACE_FLAGS, CHARSET); ?>"><?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?></a></td>
                            <?php refine('users.name', $item->attributes->name); ?>
                            <?php refine('users.org_id', $item->attributes->org_id, $item->attributes->org_name); ?>
                            <?php refine('users.name', $item->attributes->full_name); ?>
                            <?php refine('users.name', $item->attributes->email); ?>
                            <?php refine('users.roles', $item->attributes->roles, $roles); ?>
                        <?php if ($this->m_users->get_user_permission('', 'users', 'u')) { ?>
                        <td class="text-center"><a class="btn btn-sm btn-info" href="users/<?php echo intval($item->id); ?>?action=update"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                        <?php } ?>
                        <?php if ($this->m_users->get_user_permission('', 'users', 'd')) { ?>
                        <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link" data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                        <?php } ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } ?>
  </div>
</div>