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
* @version   2.4.0
* @link      http://www.open-audit.org
 */
?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("Default Summaries"); ?></h3></div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo __('Name'); ?></th>
                    <th><?php echo __('Table'); ?></th>
                    <th><?php echo __('Column'); ?></th>
                    <th><?php echo __('SQL'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($item->name, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars($item->table, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><?php echo htmlspecialchars($item->column, REPLACE_FLAGS, CHARSET); ?></td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;"><?php echo htmlspecialchars($item->sql, REPLACE_FLAGS, CHARSET); ?></pre></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>