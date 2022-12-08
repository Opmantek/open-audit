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
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
    <input type="hidden" value="<?php echo $this->response->meta->access_token; ?>" id="data[access_token]" name="data[access_token]" />
    <div class="panel panel-default">
        <?php include('include_read_panel_header.php'); ?>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="data[attributes][name]" class="col-sm-3 control-label"><?php echo __('Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][name]" name="data[attributes][name]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][org_id]" class="col-sm-3 control-label"><?php echo __('Organisation'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][org_id]" name="data[attributes][org_id]">
                                <?php foreach ($this->response->included as $org) {
                                if ($org->type == 'orgs') { ?>
                                    <option value="<?php echo $org->id; ?>" <?php if ($org->id == 0) { echo "selected"; } ?>><?php echo $org->attributes->name; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][password]" class="col-sm-3 control-label"><?php echo __('Password'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="password" class="form-control" id="data[attributes][password]" name="data[attributes][password]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][full_name]" class="col-sm-3 control-label"><?php echo __('Full Name'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="text" class="form-control" id="data[attributes][full_name]" name="data[attributes][full_name]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][email]" class="col-sm-3 control-label"><?php echo __('Email'); ?></label>
                        <div class="col-sm-8 input-group">
                            <input type="email" class="form-control" id="data[attributes][email]" name="data[attributes][email]" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][roles][]" class="col-sm-3 control-label"><?php echo __('Roles'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select multiple size="6" class="data_type form-control" id="data[attributes][roles][]" name="data[attributes][roles][]" required>
                                <?php foreach ($this->response->included as $role) {
                                if ($role->type == 'roles' and ($role->attributes->name != 'collector' and $role->attributes->name != 'agent')) { ?>
                                    <option value="<?php echo $role->attributes->name; ?>"><?php echo $role->attributes->name; ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][lang]" class="col-sm-3 control-label"><?php echo __('Language'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][lang]" name="data[attributes][lang]" required>
                                <option value='cs'><?php echo __('Czech'); ?></option>
                                <option value='de'><?php echo __('German'); ?></option>
                                <option value='en' selected><?php echo __('English'); ?></option>
                                <option value='es'><?php echo __('Spanish'); ?></option>
                                <option value='fr'><?php echo __('French'); ?></option>
                                <option value='pt-br'><?php echo __('Brazilian Portuguese'); ?></option>
                                <option value='zh-tw'><?php echo __('Traditional Chinese'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][active]" class="col-sm-3 control-label"><?php echo __('Active'); ?></label>
                        <div class="col-sm-8 input-group">
                            <select class="data_type form-control" id="data[attributes][active]" name="data[attributes][active]" required>
                                <option value='y' selected><?php echo __('Yes'); ?></option>
                                <option value='n'><?php echo __('No'); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="data[attributes][orgs]" class="col-sm-3 control-label"><?php echo __('Organisations'); ?></label>
                        <div class="col-sm-8 input-group">
                            <table class="table table-striped table-condensed">
                                 <thead>
                                    <tr>
                                        <td class="text-center"><?php echo __('ID'); ?></td>
                                        <td><?php echo __('Name'); ?></td>
                                        <td><?php echo __('Parent'); ?></td>
                                        <td style="text-align:center;"><?php echo __('Grant Permission'); ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                            foreach ($this->response->included as $org) {
                                if ($org->type == 'orgs') {
                                    if ($org->id == 0) {
                                        $org->attributes->parent_name = '';
                                    }
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $org->id; ?></td>
                                        <td><?php echo $org->attributes->name; ?></td>
                                        <td><?php echo $org->attributes->parent_name; ?></td>
                                        <td style="text-align:center;"><input name="data[attributes][orgs][]" title="data[attributes][orgs][]" type="checkbox" value="<?php echo $org->id; ?>"></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                                </tbody>
                            </table>
                            <span>Note - Selecting a parent will automatically provide access to its children (although it won't be indicated here).</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="submit" class="col-sm-3 control-label"></label>
                        <div class="col-sm-8 input-group">
                            <input type="hidden" value="users" id="data[type]" name="data[type]" />
                            <input type="hidden" value="user" id="data[attributes][type]" name="data[attributes][type]" />
                            <input type="hidden" value="1" id="data[attributes][dashboard_id]" name="data[attributes][dashboard_id]" />
                            <button id="submit" name="submit" type="submit" class="btn btn-default"><?php echo __('Submit'); ?></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-8 col-md-offset-2">
                        <?php if ( ! empty($this->response->dictionary->about)) {
                            echo "<h4 class=\"text-center\">About</h4><br />";
                            echo html_entity_decode($this->response->dictionary->about);
                        } ?>
                        <?php if ( ! empty($this->response->dictionary->notes)) {
                            echo "<h4 class=\"text-center\">Notes</h4><br />";
                            echo html_entity_decode($this->response->dictionary->notes);
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
