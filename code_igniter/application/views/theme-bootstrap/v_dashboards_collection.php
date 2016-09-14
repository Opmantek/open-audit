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
$icons = array();
if ($this->m_users->get_user_permission('', 'configuration', 'r')) {
    $icons[] = 'configuration';
}
if ($this->m_users->get_user_permission('', 'connections', 'r')) {
    $icons[] = 'connections';
}
if ($this->m_users->get_user_permission('', 'credentials', 'r')) {
    $icons[] = 'credentials';
}
if ($this->m_users->get_user_permission('', 'dashboards', 'r')) {
    $icons[] = 'dashboards';
}
if ($this->m_users->get_user_permission('', 'database', 'r')) {
    $icons[] = 'database';
}
if ($this->m_users->get_user_permission('', 'devices', 'r')) {
    $icons[] = 'devices';
}
if ($this->m_users->get_user_permission('', 'discoveries', 'r')) {
    $icons[] = 'discoveries';
}
if ($this->m_users->get_user_permission('', 'fields', 'r')) {
    $icons[] = 'fields';
}
if ($this->m_users->get_user_permission('', 'groups', 'r')) {
    $icons[] = 'groups';
}
if ($this->m_users->get_user_permission('', 'licenses', 'r')) {
    $icons[] = 'licenses';
}
if ($this->m_users->get_user_permission('', 'locations', 'r')) {
    $icons[] = 'locations';
}
if ($this->m_users->get_user_permission('', 'logs', 'r')) {
    $icons[] = 'logs';
}
if ($this->m_users->get_user_permission('', 'networks', 'r')) {
    $icons[] = 'networks';
}
if ($this->m_users->get_user_permission('', 'orgs', 'r')) {
    $icons[] = 'orgs';
}
if ($this->m_users->get_user_permission('', 'queries', 'r')) {
    $icons[] = 'queries';
}
if ($this->m_users->get_user_permission('', 'roles', 'r')) {
    $icons[] = 'roles';
}
if ($this->m_users->get_user_permission('', 'scripts', 'r')) {
    $icons[] = 'scripts';
}
if ($this->m_users->get_user_permission('', 'users', 'r')) {
    $icons[] = 'users';
}
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="text-left">Resources</span>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
        <?php for ($i=0; $i < count($icons); $i++) {
            if ($icons[$i] == 'devices') {
                $width = '85%';
            } else {
                $width = '70%';
            }
            echo '<div class="col-sm-1 text-center">' . ucfirst($icons[$i]) . '<br /><a href="' . $icons[$i] . '"><img src="/open-audit/icons/' . $icons[$i] . '.svg" width="' . $width . '" /></a></div>';
            if ($i == 11) {
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
            <table class="table">
                <thead>
                    <tr>
                        <th style='text-align:center;'><?php echo __('ID')?></th>
                        <th><?php echo __('Name')?></th>
                        <td style='text-align:center;'><?php echo __('Count'); ?></td>
                        <td style='text-align:center;'><?php echo __('View'); ?></td>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'u')) { ?>
                        <th style='text-align:center;'><?php echo __('Edit')?></th>
                        <?php } ?>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'd')) { ?>
                        <th style='text-align:center;'><?php echo __('Delete')?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->response->data as $item): ?>
                    <tr>
                        <td style='text-align:center;'><a class="btn btn-sm btn-success" href="dashboards/<?php echo intval($item->attributes->id); ?>"><?php echo intval($item->attributes->id); ?></a></td>
                        <td><?php echo ucwords($item->attributes->name)?></td>
                        <td style='text-align:center;'><?php echo ucwords($item->attributes->count)?></td>
                        <td style='text-align:center;'><a class="btn btn-sm btn-primary" href="dashboards/<?php echo intval($item->id); ?>?action=execute"><span class="glyphicon glyphicon-play" aria-hidden="true"></a></td>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'u')) { ?>
                        <td style='text-align:center;'><a class="btn btn-sm btn-info" href="dashboards/<?php echo intval($item->id); ?>?action=update"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
                        <?php } ?>
                        <?php if ($this->m_users->get_user_permission('', 'dashboards', 'd')) { ?>
                        <td style='text-align:center;'><button type="button" class="btn btn-sm btn-danger delete_link"  data-id="<?php echo intval($item->id); ?>" data-name="<?php echo htmlentities($item->attributes->name); ?>" aria-label="Left Align" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                        <?php } ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>



