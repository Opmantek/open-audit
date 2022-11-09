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
?>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <div class="panel-title clearfix">
                <div class="navbar-left">
                <?php echo __('Resources'); ?>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
            <?php
            $i = 0;
            foreach ($this->response->included as $endpoint) {
                if (!empty($endpoint->type) and $endpoint->type == 'collection') {
                    $i++;
                    $link = $endpoint->attributes->collection;
                    $color = 'dimgrey';
                    if ($endpoint->attributes->edition !== 'Community') {
                        $link = '/omk/open-audit/' . $link;
                        $color = 'darkgrey';
                    }
                    if ($endpoint->attributes->edition === 'Professional') {
                        $alt = 'Open-AudIT Professional feature';
                    }
                    if (($this->config->config['oae_product'] === 'Open-AudIT Professional' or $this->config->config['oae_product'] === 'Open-AudIT Enterprise') and $endpoint->attributes->edition === 'Professional') {
                        $color = 'dimgrey';
                    }
                    if ($this->config->config['oae_product'] === 'Open-AudIT Enterprise' ) {
                        $color = 'dimgrey';
                    }
                    $endpoint->attributes->name = str_replace('Ldap Servers', 'LDAP', $endpoint->attributes->name);
                    if ($endpoint->attributes->name == 'Logs') {
                        $link = 'logs?logs.type=system';
                    }
                    if ($endpoint->attributes->name == 'Reports') {
                        $endpoint->attributes->count = 12;
                    }
                    if ($endpoint->attributes->name === 'Discovery Log') {
                        $link = 'discoveries';
                    }
                    if ($endpoint->attributes->name === 'Devices') {
                        $link = 'devices';
                    }
                    ?>
                    <div class="col-lg-1 text-center"><?php echo __($endpoint->attributes->name) ?><br />
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1">
                                <span class="badge" style="position:absolute; bottom:-8px; right:25%; font-size:1em; font-weight:400;"><?php echo $endpoint->attributes->count ?></span>
                                <a href="<?php echo $link ?>" class="btn btn-default">
                                    <i class="<?php echo $endpoint->attributes->icon ?> fa-3x fa-fw" style="font-size:2vw; color: <?php echo $color; ?>;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($i === 12 or $i === 24 or $i === 36) {
                        echo "</div><br /><br /><div class=\"row\">";
                    }
                }
            }
            ?>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <?php include('include_collection_panel_header.php'); ?>
        </div>
        <div class="panel-body">
            <?php if (!empty($this->response->data)) { ?>
            <br />
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="sorter-false col-xs-1 text-center"><?php echo __('Execute'); ?></th>
                        <th class="sorter-false col-xs-1 text-center"><?php echo __('Details')?></th>
                        <th><?php echo __('Name')?></th>
                        <?php if ($this->m_users->get_user_permission('', 'summaries', 'd')) { ?>
                        <th class="sorter-false col-xs-1 text-center"><?php echo __('Delete')?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($this->response->data as $item) : ?>
                    <tr>
                        <td class="text-center"><a class="btn btn-sm btn-success" href="<?php echo $item->links->self; ?>/execute"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a></td>
                        <td class="text-center"><a class="btn btn-sm btn-primary" href="<?php echo $item->links->self; ?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
                        <td><?php echo ucwords($item->attributes->name)?></td>
                        <?php if ($this->m_users->get_user_permission('', 'summaries', 'd')) { ?>
                        <td class="text-center"><button type="button" class="btn btn-sm btn-danger delete_link"  data-id="<?php echo $item->id; ?>" data-name="<?php echo $item->attributes->name ?>" aria-label="Left Align" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                        <?php } ?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?php } ?>
            <?php include('include_collection_panel_body_links.php'); ?>
        </div>
    </div>

<?php
if ($this->config->config['rss_enable'] == 'y') {
    include "include_newsfeed.php";
}
?>