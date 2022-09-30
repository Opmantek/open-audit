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
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
 */
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9 clearfix">
                            <div class="btn-group btn-group-sm" role="group" aria-label="">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-dark oa-card-button"><i class="<?php echo $meta->icon ?> oa-icon"></i><?php echo ucfirst($meta->collection) ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 clearfix">
                            <div class="btn-group btn-group-sm float-end" role="group" aria-label="">
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $this->config->config['oa_web_index'] . '/' . $meta->collection ?>" title="<?php echo __('List') ?>"><i class="fa fa-list"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $this->config->config['oa_web_index'] . '/' . $meta->collection ?>?format=csv" title="<?php echo __('Download CSV') ?>"><i class="fa fa-columns"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $this->config->config['oa_web_index'] . '/' . $meta->collection ?>?format=json" title="<?php echo __('Request JSON') ?>"><i class="fa fa-code"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $this->config->config['oa_web_index'] . '/' . $meta->collection ?>/import" title="<?php echo __('Upload CSV') ?>"><i class="fa fa-upload"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $this->config->config['oa_web_index'] . '/' . $meta->collection ?>/create" title="<?php echo __('Create') ?>"><i class="fa fa-plus"></i></a>
                                <a role="button" class="btn btn-outline-secondary panel-button" href="<?php echo $this->config->config['oa_web_index'] . '/' . $meta->collection ?>/help" title="<?php echo __('Help') ?>"><i class="fa fa-question"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?php echo $links->self; ?>">
                                <input type="hidden" value="<?php echo $meta->access_token; ?>" id="data[access_token]" name="data[access_token]" />

                                <?php echo create_text_field('data[attributes][name]', __('Name'), @$dictionary->{'columns'}->{'name'}) ?>
                                <?php echo create_text_field('data[attributes][description]', __('Description'), @$dictionary->{'columns'}->{'description'}) ?>

                                <br />
                                <div class="row g-3 align-items-center">
                                    <div class="col-3 text-end">
                                        <label for="data[attributes][parent_id]" class="col-form-label"><?php echo __('Parent Org'); ?></label>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][parent_id]" id="data[attributes][parent_id]">
                                            <?php
                                            foreach ($included as $item) {
                                                if ($item->type == 'orgs') { ?>     <option value="<?php echo $item->id; ?>"><?php echo $item->attributes->name ?></option>
                                            <?php
                                                }
                                            } ?>
                                            </select>
                                            <div class="btn btn-outline-secondary input-group-text edit_button" data-bs-html="true" data-bs-toggle="popover" title="parent_id" data-bs-content="<?php echo @$dictionary->{'columns'}->{'parent_id'} ?>" ><i class="fa fa-info"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div class="row g-3 align-items-center">
                                    <div class="col-3 text-end">
                                        <label for="data[attributes][type]" class="col-form-label"><?php echo __('Type'); ?></label>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group">
                                            <select class="form-select" name="data[attributes][type]" id="data[attributes][type]">
                                            <?php foreach ($included as $item) {
                                            if ($item->type === 'attributes') {
                                                if ($item->attributes->resource === 'orgs' && $item->attributes->type === 'type') {
                                                    if ($item->attributes->value === 'organisation') { $selected = ' selected'; } else { $selected = ''; }
                                                        echo '<option value="' . $item->attributes->value . '"' . $selected . '>' . $item->attributes->name . "</option>\n";
                                                    }
                                                }
                                            }
                                            ?>
                                            </select>
                                            <div class="btn btn-outline-secondary input-group-text edit_button"  data-bs-toggle="popover" title="type" data-bs-content="<?php echo @$dictionary->{'columns'}->{'type'} ?>" ><i class="fa fa-info"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div class="row g-3 align-items-center">
                                    <div class="col-3 text-end">
                                        <label for="submit" class="col-form-label">&nbsp;</label>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group">
                                            <input type="hidden" value="orgs" id="data[type]" name="data[type]" />
                                            <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8 col-md-offset-2">
                                <?php if ( ! empty($dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br />";
                                    echo html_entity_decode($dictionary->about);
                                } ?>
                                <?php if ( ! empty($dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br />";
                                    echo html_entity_decode($dictionary->notes);
                                } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
