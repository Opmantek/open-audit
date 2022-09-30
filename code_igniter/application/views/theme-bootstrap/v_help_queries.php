<?php
#  Copyright 2022 Firstwave (www.firstwave.com)
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
#  www.firstwave.com or email sales@firstwave.com
#
# *****************************************************************************

/**
* @category  View
* @package   Open-AudIT
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2022 Firstwave
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
* @link      http://www.open-audit.org
 */
?>
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo __("Default Queries"); ?></h3></div>
    <div class="panel-body">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo __('Name'); ?></th>
                    <th><?php echo __('Description'); ?></th>
                    <th><?php echo __('SQL'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item) { ?>
                <tr>
                    <td><?php echo $item->name; ?></td>
                    <td><?php echo $item->description; ?></td>
                    <td><pre style="word-wrap: break-word; white-space: pre-wrap;"><?php echo $item->sql; ?></pre></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>