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
* @version   2.2.6
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
                    <th class="text-center"><?php echo __('ID')?></th>
                    <th><?php echo __('Timestamp')?></th>
                    <th><?php echo __('Type')?></th>
                    <th><?php echo __('Severity Text')?></th>
                    <th><?php echo __('PID')?></th>
                    <th><?php echo __('User')?></th>
                    <th><?php echo __('Collection')?></th>
                    <th><?php echo __('Action')?></th>
                    <th><?php echo __('Function')?></th>
                    <th><?php echo __('Status')?></th>
                    <th><?php echo __('Summary')?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item): ?>
                <tr>
                    <td class="text-center"><a class="btn btn-sm btn-success" href="logs/<?php echo $item->id; ?>"><?php echo $item->id; ?></a></td>
                    <?php refine('logs.timestamp', $item->attributes->timestamp); ?>
                    <?php refine('logs.type', $item->attributes->type); ?>
                    <?php refine('logs.severity_text', $item->attributes->severity_text); ?>
                    <?php refine('logs.pid', $item->attributes->pid); ?>
                    <?php refine('logs.user', $item->attributes->user); ?>
                    <?php refine('logs.collection', $item->attributes->collection); ?>
                    <?php refine('logs.action', $item->attributes->action); ?>
                    <?php refine('logs.function', $item->attributes->function); ?>
                    <?php refine('logs.status', $item->attributes->status); ?>
                    <?php refine('logs.summary', $item->attributes->summary); ?>
                    <?php
                        if ($item->attributes->status == 'finish') {
                            echo "</tr><tr><td colspan=\"11\">&nbsp;</td>";
                        }
                    ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>