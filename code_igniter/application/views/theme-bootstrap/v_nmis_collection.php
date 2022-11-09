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
* @version   GIT: Open-AudIT_4.4.0
* @link      http://www.open-audit.org
 */
$refine_link = $_SERVER["REQUEST_URI"];
if (strpos($refine_link, '?') === false) {
    $refine_link .= '?';
} else if (strrpos($refine_link, '&') !== strlen($refine_link)-1) {
    $refine_link .= '&';
}
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
                        <th><?php echo __('Name')?></th>
                        <th><?php echo __('Host')?></th>
                        <th><?php echo __('Managed in NMIS')?></th>
                        <th><?php echo __('NMIS Group')?></th>
                        <th><?php echo __('NMIS Role')?></th>
                        <th><?php echo __('Notes')?></th>
                        <th><?php echo __('Business Service')?></th>
                        <th class="text-center">
                            <button type="button" class="btn btn-primary btn-xs nmis_manage_button" id="nmis_manage_button"><?php echo __('Export'); ?></button>&nbsp;
                            <input type="checkbox" name="select_all" id="select_all" onclick="select_all_click();"/>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->response->data as $item): ?>
                        <tr>
                            <td class="text-center"><a role="button" class="btn btn-sm btn-success" href="devices/<?php echo $item->id; ?>"><?php echo $item->id?></a></td>
                            <td><?php echo $item->attributes->name ?></td>
                            <td><?php echo $item->attributes->host; ?></td>
                            <td><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href='<?php echo $refine_link; ?>system.nmis_manage=!=<?php echo urlencode($item->attributes->nmis_manage); ?>'><?php echo __('Exclude'); ?></a><br /><a href='<?php echo $refine_link; ?>system.nmis_manage=<?php echo urlencode($item->attributes->nmis_manage); ?>'>Include</a><br />"></span>&nbsp;<?php echo $item->attributes->nmis_manage; ?></td>

                            <td><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href='<?php echo $refine_link; ?>system.nmis_group=!=<?php echo urlencode($item->attributes->group); ?>'><?php echo __('Exclude'); ?></a><br /><a href='<?php echo $refine_link; ?>system.nmis_group=<?php echo urlencode($item->attributes->group); ?>'>Include</a><br />"></span>&nbsp;<?php echo $item->attributes->group; ?></td>

                            <td><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href='<?php echo $refine_link; ?>nmis_role=!=<?php echo urlencode($item->attributes->role); ?>'><?php echo __('Exclude'); ?></a><br /><a href='<?php echo $refine_link; ?>system.nmis_role=<?php echo urlencode($item->attributes->role); ?>'>Include</a><br />"></span>&nbsp;<?php echo $item->attributes->role; ?></td>

                            <td><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href='<?php echo $refine_link; ?>system.nmis_notes=!=<?php echo urlencode($item->attributes->notes); ?>'><?php echo __('Exclude'); ?></a><br /><a href='<?php echo $refine_link; ?>system.nmis_notes=<?php echo urlencode($item->attributes->notes); ?>'>Include</a><br />"></span>&nbsp;<?php echo $item->attributes->notes; ?></td>

                            <td><span class="small glyphicon glyphicon-filter" aria-hidden="true" data-html="true" data-toggle="popover" title="Refine" data-content="<a href='<?php echo $refine_link; ?>system.nmis_business_service=!=<?php echo urlencode($item->attributes->businessService); ?>'><?php echo __('Exclude'); ?></a><br /><a href='<?php echo $refine_link; ?>system.nmis_business_service=<?php echo urlencode($item->attributes->businessService); ?>'>Include</a><br />"></span>&nbsp;<?php echo $item->attributes->businessService; ?></td>

                            <td class="text-center"><input type='checkbox' id='ids[<?php echo $item->id; ?>]' value='<?php echo $item->id; ?>' name='ids[<?php echo $item->id; ?>]' /></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>