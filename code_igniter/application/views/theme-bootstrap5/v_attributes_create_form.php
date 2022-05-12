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
* @version   GIT: Open-AudIT_3.5.3
* @link      http://www.open-audit.org
 */
$item = $data[0];
include 'shared/create_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?php echo card_header($meta->collection, '', $meta->icon, $edit); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" method="post" action="<?php echo $links->self; ?>">
                                <input type="hidden" value="<?php echo $meta->access_token; ?>" id="data[access_token]" name="data[access_token]" />

                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <span class="form_label"><?php echo __('Resource'); ?></span><br />
                                        <select class="form-select" name="data[attributes][resource]" id="data[attributes][resource]">
                                            <option value="" label=" "><?php echo __('Choose') ?></option>
                                            <option value="devices"><?php echo __('Devices'); ?></option>
                                            <option value="locations"><?php echo __('Locations'); ?></option>
                                            <option value="orgs"><?php echo __('Orgs'); ?></option>
                                            <option value="queries"><?php echo __('Queries'); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <br />
                                <?php echo create_text_field('data[attributes][type]', __('Type'), @$dictionary->{'columns'}->{'type'}, $dictionary->attributes->create) ?>
                                <?php echo create_text_field('data[attributes][name]', __('Name (display)'), @$dictionary->{'columns'}->{'name'}, $dictionary->attributes->create) ?>
                                <?php echo create_text_field('data[attributes][value]', __('Value (store)'), @$dictionary->{'columns'}->{'value'}, $dictionary->attributes->create) ?>

                                <?php
                                $orgs = array();
                                foreach ($included as $item) {
                                    if ($item->type == 'orgs') {
                                        $orgs[] = $item;
                                    }
                                }
                                echo create_orgs_select($orgs);
                                ?>


                                <div class="row">
                                    <div class="offset-2 col-8">
                                        <label for="submit" class="col-form-label">&nbsp;</label>
                                        <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                                        <input type="hidden" value="orgs" id="data[type]" name="data[type]" />
                                    </div>
                                </div>


                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="offset-2 col-8">
                                <?php if (! empty($this->response->dictionary->about)) {
                                    echo "<h4 class=\"text-center\">About</h4><br />";
                                    echo html_entity_decode($this->response->dictionary->about);
                                } ?>
                                <?php if (! empty($this->response->dictionary->notes)) {
                                    echo "<h4 class=\"text-center\">Notes</h4><br />";
                                    echo html_entity_decode($this->response->dictionary->notes);
                                } ?>
                                <h4 class="text-center">Fields</h4><br />
                                <?php foreach ($dictionary->{'columns'} as $key => $value) {
                                    echo "<code>$key:</code> " . html_entity_decode($value) . "<br /><br />";
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
