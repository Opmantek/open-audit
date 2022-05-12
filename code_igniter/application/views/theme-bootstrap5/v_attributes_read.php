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
include 'shared/read_functions.php';
?>
        <main class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <?php echo card_header($meta->collection, $item->id, $meta->icon, $edit); ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">

                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="form_label">Resource<br />
                                    <p class="text_content">
                                        <span id="resource" data-original-value="<?php echo $item->attributes->resource; ?>">
                                            <?php echo $item->attributes->resource; ?>
                                        </span>
                                        <span class="pull-right">
                                            <i class="edit fa fa-pencil" data-attribute="resource" title="Edit"></i>
                                        </span>
                                    </p>
                                    <hr class="form_bottom"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="form_label">Type<br />
                                    <p class="text_content">
                                        <span id="type" data-original-value="<?php echo $item->attributes->type; ?>">
                                            <?php echo $item->attributes->type; ?>
                                        </span>
                                        <span class="pull-right">
                                            <i class="edit fa fa-pencil" data-attribute="type" title="Edit"></i>
                                        </span>
                                    </p>
                                    <hr class="form_bottom"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="form_label">Name (display)<br />
                                    <p class="text_content">
                                        <span id="name" data-original-value="<?php echo $item->attributes->name; ?>">
                                            <?php echo $item->attributes->name; ?>
                                        </span>
                                        <span class="pull-right">
                                            <i class="edit fa fa-pencil" data-attribute="name" title="Edit"></i>
                                        </span>
                                    </p>
                                    <hr class="form_bottom"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="form_label">Value (store)<br />
                                    <p class="text_content">
                                        <span id="value" data-original-value="<?php echo $item->attributes->value; ?>">
                                            <?php echo $item->attributes->value; ?>
                                        </span>
                                        <span class="pull-right">
                                            <i class="edit fa fa-pencil" data-attribute="value" title="Edit"></i>
                                        </span>
                                    </p>
                                    <hr class="form_bottom"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="form_label">Organisation<br />
                                    <p class="text_content">
                                        <span id="org_id" data-original-value="<?php echo $item->attributes->{'orgs.name'}; ?>">
                                            <a href="<?php echo $this->config->config['oa_web_index'] ?>/orgs/<?php echo $item->attributes->{'orgs.id'}; ?>">Default Organisation</a>
                                        </span>
                                        <span class="pull-right">
                                            <i class="edit_org fa fa-pencil" data-attribute="org_id" title="Edit"></i>
                                        </span>
                                    </p>
                                    <hr class="form_bottom"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="form_label">Edited By<br />
                                    <p class="text_content">
                                        <span id="edited_by" data-original-value="<?php echo $item->attributes->edited_by; ?>">
                                            <?php echo $item->attributes->edited_by; ?>
                                        </span>
                                    </p>
                                    <hr class="form_bottom"/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="offset-2 col-8">
                                    <p class="form_label">Edited Date<br />
                                    <p class="text_content">
                                        <span id="edited_date" data-original-value="<?php echo $item->attributes->edited_date; ?>">
                                            <?php echo $item->attributes->edited_date; ?>
                                        </span>
                                    </p>
                                    <hr class="form_bottom"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
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

&nbsp;
<br />&nbsp;
<br />&nbsp;

<!--
<pre>
<?php echo json_encode($data, JSON_PRETTY_PRINT); ?>
</pre>
-->
