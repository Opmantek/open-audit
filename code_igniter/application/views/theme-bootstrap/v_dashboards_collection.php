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
            <span class="text-left">Resources</span>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
        <?php
        $i = 0;
        foreach ($this->response->included as $endpoint) {
            $i++;
            echo '<div class="col-sm-1 text-center">' . __($endpoint['name']) . '<br /><a class="btn btn-app" href="' . $endpoint['collection'] . '"><span class="badge">' . $endpoint['count'] . '</span><i class="fa fa-' . $endpoint['icon']  . ' fa-3x fa-fw" style="font-size: 2vw;"></i></a></div>';
            if ($i == 12) {
                echo "</div><br /><br /><div class=\"row\">";
            }
        }
        ?>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Dashboards</span>
        </h3>
    </div>
    <div class="panel-body">
        <?php include('include_collection_panel_header.php'); ?>
        <?php if (!empty($this->response->data)) { ?>
            <br />
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center"><?php echo __('ID')?></th>
                        <th><?php echo __('Name')?></th>
                        <td class="text-center"><?php echo __('Count'); ?></td>
                        <td class="text-center"><?php echo __('View'); ?></td>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'u')) { ?>
                        <th class="text-center"><?php echo __('Edit')?></th>
                        <?php } ?>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'd')) { ?>
                        <th class="text-center"><?php echo __('Delete')?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->response->data as $item): ?>
                    <tr>
                        <td class="text-center"><a class="btn btn-sm btn-success" href="dashboards/<?php echo intval($item->attributes->id); ?>"><?php echo intval($item->attributes->id); ?></a></td>
                        <td><?php echo ucwords($item->attributes->name)?></td>
                        <td class="text-center"><?php echo ucwords($item->attributes->count)?></td>
                        <td class="text-center"><a class="btn btn-sm btn-primary" href="dashboards/<?php echo intval($item->id); ?>?action=execute"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a></td>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'u')) { ?>
                        <td class="text-center"><a class="btn btn-sm btn-info" href="dashboards/<?php echo intval($item->id); ?>?action=update"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                        <?php } ?>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'd')) { ?>
                        <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link"  data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlspecialchars($item->attributes->name, REPLACE_FLAGS, CHARSET); ?>" aria-label="Left Align" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>



