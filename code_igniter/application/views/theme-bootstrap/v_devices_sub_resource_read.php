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
 *
 * @version   2.3.2
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
$export_link = $this->response->links->first . '&';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <span class="text-left"><?php echo htmlspecialchars(ucwords(str_replace('_', ' ', ($this->response->meta->sub_resource))), REPLACE_FLAGS, CHARSET); ?></span>
            <div style="padding-left:10px;" class="pull-right btn-group" role="group" aria-label="...">
                <a href="<?php echo $export_link; ?>format=csv" role="button" class="btn btn-xs btn-default">csv</a>
                <a href="<?php echo $export_link; ?>format=html" role="button" class="btn btn-xs btn-default">html</a>
                <a href="<?php echo $export_link; ?>format=json" role="button" class="btn btn-xs btn-default">json</a>
                <a href="<?php echo $export_link; ?>format=xml" role="button" class="btn btn-xs btn-default">xml</a>
            </div>
            <span class="pull-right">
                <?php echo $this->response->meta->total . ' of ' . $this->response->meta->total . ' results'; ?>&nbsp;
            </span>
        </div>
    </div>
    <div class="panel-body">
    <?php
    if ($this->response->meta->sub_resource != 'change_log' and $this->response->meta->sub_resource != 'audit_log') {
        echo '<div class="btn-group" role="group" aria-label="...">';
        $export_link = str_replace('&current=y', '', $export_link);
        $export_link = str_replace('&current=n', '', $export_link);
        $export_link = str_replace('&current=all', '', $export_link);
        echo '<a href="' . $export_link . 'current=y" role="button" class="btn btn-default">'. __('Current') . '</a></button>';

        $export_link = str_replace('&current=y', '', $export_link);
        $export_link = str_replace('&current=n', '', $export_link);
        $export_link = str_replace('&current=all', '', $export_link);
        echo '<a href="' . $export_link . 'current=n" role="button" class="btn btn-default">'. __('Non-Current') .'</a></button>';

        $export_link = str_replace('&current=all', '', $export_link);
        $export_link = str_replace('&current=y', '', $export_link);
        $export_link = str_replace('&current=n', '', $export_link);
        echo '<a href="' . $export_link . 'current=all" role="button" class="btn btn-default">'. __('All') .'</a></button>';
        echo '</div><br /><br />';
    }
    ?>


        <?php if (!empty($this->response->data)) { ?>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <?php foreach ($this->response->data[0]->attributes as $key => $value) { ?>
                    <th><?php echo htmlspecialchars( $key, REPLACE_FLAGS, CHARSET); ?></th>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->response->data as $item) { ?>
                <tr>
                    <?php foreach ($item->attributes as $key => $value) { ?>
                    <td><?php echo htmlspecialchars( $value, REPLACE_FLAGS, CHARSET); ?></td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>
