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
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   2.2.4
* @link      http://www.open-audit.org
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
                    <th class="text-center"><?php echo __('View')?></th>
                    <th class="text-center"><?php echo __('Details')?></th>
                    <th><?php echo __('Name')?></th>
                    <th><?php echo __('Organisation')?></th>
                    <th><?php echo __('Network')?></th>
                    <th><?php echo __('Description')?></th>
                    <th><?php echo __('Edited By')?></th>
                    <th><?php echo __('Edited Date')?></th>
                    <?php if ($this->m_users->get_user_permission('', 'networks', 'd')) { ?>
                    <th class="text-center"><?php echo __('Delete')?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item) : ?>
                <tr>
                    <td class="text-center"><a role="button" class="btn btn-sm btn-success" href="devices?ip.network=<?php echo $item->attributes->network; ?>&properties=system.id,system.icon,system.type,system.name,system.domain,ip.ip,system.description,system.manufacturer,system.os_family,system.status"><?php echo htmlspecialchars($item->attributes->device_count, REPLACE_FLAGS, CHARSET)?></a></td>
                    <td class="text-center"><a class="btn btn-sm btn-primary" href="<?php echo htmlspecialchars($item->links->self, REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                    <?php refine('networks.name', $item->attributes->name); ?>
                    <?php refine('networks.org_id', $item->attributes->org_id, $item->attributes->org_name); ?>
                    <?php refine('networks.network', $item->attributes->network); ?>
                    <?php refine('networks.description', $item->attributes->description); ?>
                    <?php refine('networks.edited_by', $item->attributes->edited_by); ?>
                    <?php refine('networks.edited_date', $item->attributes->edited_date); ?>
                    <?php if ($this->m_users->get_user_permission('', 'networks', 'd')) { ?>
                    <td class="text-center"><a role="button" class="btn btn-sm btn-danger delete_link" data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                    <?php } ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php } ?>
  </div>
</div>