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
    <div class="panel-heading">
        <div class="panel-title">
            <span class="text-left"><?php echo __('Errors'); ?></span>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center"><?php echo __('ID / Code')?></th>
                    <th class="text-center"><?php echo __('Severity')?></th>
                    <th class="text-center"><?php echo __('Status Code')?></th>
                    <th><?php echo __('Status')?></th>
                    <th><?php echo __('Title')?></th>
                    <th class="text-center"><?php echo __('More')?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item): ?>
                <tr>
                    <td class="text-center"><?php echo $item->attributes->code; ?></td>
                    <td class="text-center"><?php echo $item->attributes->severity; ?></td>
                    <td class="text-center"><?php echo $item->attributes->status_code; ?></td>
                    <td><?php echo $item->attributes->status; ?></td>
                    <td><?php echo $item->attributes->title; ?></td>
                    <td class="text-center"><a class="btn btn-sm btn-info" href="<?php echo $item->links->self; ?>"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>