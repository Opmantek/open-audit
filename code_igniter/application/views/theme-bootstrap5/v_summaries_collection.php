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
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
 */
include 'shared/collection_functions.php';
$instance = & get_instance();
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?php echo __('Resources'); ?>
                    <div class="pull-right">
                        <button class="btn btn-sm btn-default" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdvanced" aria-expanded="false" aria-controls="advanced">
                            <span class="fa fa-caret-down"></span>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse" id="collapseAdvanced">
                        <div class="row">
                        <?php
                        $i = 0;
                        foreach ($this->response->included as $endpoint) {
                            if (!empty($endpoint->type) and $endpoint->type == 'collection') {
                                $i++;
                                if ($endpoint->attributes->collection === 'system') {
                                    $endpoint->attributes->collection = 'devices';
                                }
                                $toast = '';
                                $href = $endpoint->attributes->collection;
                                if ($endpoint->attributes->edition !== 'Community') {
                                    $href = $instance->config->config['oae_url'] . '/' . $href;
                                }
                                if ( ! $instance->m_users->get_user_permission('', $endpoint->attributes->collection, 'r')) {
                                    $toast = 'greyout toastPermission';
                                    $href = '#';
                                }
                                else if ($instance->config->config['oae_product'] !== 'Open-AudIT Enterprise' and $endpoint->attributes->edition === 'Enterprise') {
                                    $toast = 'greyout toastEnterprise';
                                    $href = '#';
                                }
                                else if (($instance->config->config['oae_product'] !== 'Open-AudIT Enterprise' and $instance->config->config['oae_product'] !== 'Open-AudIT Professional') and $endpoint->attributes->edition === 'Professional') {
                                    $toast = 'greyout toastProfessional';
                                    $href = '#';
                                }
                                ?>
                                <div class="col-1 text-center">
                                    <div class="text-center">
                                        <?php echo __($endpoint->attributes->name) ?><br />
                                        <a href="<?php echo $href ?>" class="btn btn-default position-relative <?php echo $toast; ?>" role="button" >
                                            <i class="<?php echo $endpoint->attributes->icon ?> fa-3x"></i>
                                            <span class="position-absolute top-100 start-100 translate-middle badge rounded-pill bg-primary"><?php echo $endpoint->attributes->count ?></span>
    
                                        </a>
                                    </div>
                                    <!--<span class="badge bg-secondary" style="position:relative; bottom:20px; left:70%; font-size:1em; font-weight:400;"><?php echo $endpoint->attributes->count ?></span>-->
                                    
                                </div>
                                <?php
                                if ($i == 12 or $i == 24 or $i == 36) {
                                    echo "</div><br /><br /><div class=\"row\">";
                                }
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <br />

            <div class="card">
                <div class="card-header">
                    <?php echo card_header($meta->collection, '', $meta->icon); ?>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover dataTable table-responsive" data-order='[[1,"asc"],[2,"asc"],[3,"asc"]]'>
                        <thead>
                            <tr>
                                <th class="text-center col-xs-1" data-orderable="false"><?php echo __('Execute')?></th>
                                <th class="text-center col-xs-1" data-orderable="false"><?php echo __('Details')?></th>
                                <th><?php echo __('Name')?></th>
                                <?php if ($this->m_users->get_user_permission('', 'summaries', 'd')) { ?>
                                <th class="text-center col-xs-1" data-orderable="false"><?php echo __('Delete')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $item) { ?>
                            <tr>
                                <td class="text-center"><a role="button" class="btn btn-sm btn-success" href="<?php echo $this->config->config['oa_web_index'] ?>/<?php echo $meta->collection ?>/<?php echo $item->id ?>/execute"><i class="fa fa-play"></i></a></td>
                                <td class="text-center"><a role="button" class="btn btn-sm btn-primary" href="<?php echo $this->config->config['oa_web_index'] ?>/<?php echo $meta->collection ?>/<?php echo $item->id ?>"><i class="fa fa-eye"></i></a></td>
                                <td><?php echo $item->attributes->name ?></td>
                                <?php if ($this->m_users->get_user_permission('', $meta->collection, 'd')) { ?>
                                <td class="text-center"><button class="btn btn-sm btn-danger delete_link" data-id="<?php echo $item->id; ?>" data-name="<?php echo $item->attributes->name; ?>" aria-label="Left Align" ><i class="fa fa-trash"></i></button></td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
