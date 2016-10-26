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
                    <th><?php echo __('Orgsinsation')?></th>
                    <th><?php echo __('Location A')?></th>
                    <th><?php echo __('Location B')?></th>
                    <th><?php echo __('Provider')?></th>
                    <th><?php echo __('Type')?></th>
                    <th><?php echo __('Speed')?></th>
                    <?php if ($this->m_users->get_user_permission('', 'connections', 'u')) { ?>
                    <th class="text-center"><?php echo __('Edit')?></th>
                    <?php } ?>
                    <?php if ($this->m_users->get_user_permission('', 'connections', 'd')) { ?>
                    <th class="text-center"><?php echo __('Delete')?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item): ?>
                <tr>
                    <td class="text-center"><a class="btn btn-sm btn-success" href="connections/<?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?>"><?php echo htmlspecialchars($item->id, REPLACE_FLAGS, CHARSET); ?></a></td>
                    <td><?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET)?></td>
                    <td><?php echo htmlspecialchars($item->attributes->org_name, REPLACE_FLAGS, CHARSET)?></td>
                    <td><?php echo @htmlspecialchars($item->attributes->location_name_a, REPLACE_FLAGS, CHARSET)?></td>
                    <td><?php echo @htmlspecialchars($item->attributes->location_name_b, REPLACE_FLAGS, CHARSET)?></td>
                    <td><?php echo htmlspecialchars($item->attributes->provider, REPLACE_FLAGS, CHARSET)?></td>
                    <td><?php echo htmlspecialchars($item->attributes->service_type, REPLACE_FLAGS, CHARSET)?></td>
                    <td><?php echo htmlspecialchars($item->attributes->speed, REPLACE_FLAGS, CHARSET)?></td>
                    <?php if ($this->m_users->get_user_permission('', 'connections', 'u')) { ?>
                    <td class="text-center"><a class="btn btn-sm btn-info" href="connections/<?php echo intval($item->id); ?>?action=update"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                    <?php } ?>
                    <?php if ($this->m_users->get_user_permission('', 'connections', 'd')) { ?>
                    <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link" data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" aria-label="Left Align" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    <?php } ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>