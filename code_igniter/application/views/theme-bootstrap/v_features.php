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
* @author    Mark Unwin <mark.unwin@firstwave.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.4
* @link      http://www.open-audit.org
 */
?>
<form class="form-horizontal" id="form_update" method="post" action="<?php echo $this->response->links->self; ?>">
<?php if ( ! empty($this->response->dictionary)) { ?>
    <?php if (strtolower($this->response->dictionary->table) === 'cmdb') {
        $this->response->dictionary->table = 'CMDB'; }
    ?>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">

                <?php if (strtolower(@$this->response->dictionary->product) === 'enterprise') { ?>
                 <div class="row">
                    <div class="col-md-12 text-center">
                        <h4><i>Enterprise Only</i></h4>
                    </div>
                </div>
                <?php } ?>

                <?php if (strtolower(@$this->response->dictionary->product) === 'professional') { ?>
                 <div class="row">
                    <div class="col-md-12 text-center">
                        <h4><i>Professional and Enterprise Only</i></h4>
                    </div>
                </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class=""><?php echo ucwords(str_replace('_', ' ', $this->response->dictionary->table)); ?></h1>
                        <br />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p><?php echo $this->response->dictionary->sentence; ?></p><br />
                        <?php echo html_entity_decode($this->response->dictionary->marketing); ?>
                        <?php if (strtolower(@$this->response->dictionary->product) === 'enterprise') { ?>
                            <strong>To upgrade to an Enterprise License, click <a href="#" class="buy_more_licenses">here</a>.</strong><br /><br />
                        <?php } ?>
                        <?php if (strtolower(@$this->response->dictionary->product) === 'professional') { ?>
                            <strong>To upgrade to a Professional License, click <a href="#" class="buy_more_licenses">here</a>.</strong><br /><br />
                        <?php } ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center" id="feature_image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } else { ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="text-center">
                                <br /><p class="text-center">Open-AudIT has a great feature list that is designed to make the task of tracking your devices simple and easy.</p>
                                <br /><h1>Features</h1><br /><br />
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Feature</th>
                                        <th class="text-center">Community</th>
                                        <th class="text-center">Professional</th>
                                        <th class="text-center">Enterprise</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="features/discoveries">Network Discovery</a></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/scripts">Device and Software Auditing</a></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/changes">Configuration Changes Detection and Reporting</a></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/fields">Custom Fields</a></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/dashboards">Interactive Dashboard</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/maps">Geographical Maps</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/tasks">Scheduling - discovery, reporting, baselines &amp; integrations</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/reports">Enhanced Reports including Time based, Historical and Multi Reporting</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/discovery_scan_options">Customisable Options per Discovery</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/clouds">Cloud Discovery and Auditing</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/racks">Rack Management</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/collectors">High Scale using Collectors</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/files">File Auditing</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/baselines">Baselines for device comparison</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/roles">Configurable Role Based Access Control including Active Directory and openLDAP</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                        <td><a href="features/support">Commercial Support</a></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                        <td class="text-center"><i class="fa fa-check" aria-hidden="true"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</form>


<script>
$(document).ready(function () {
    var shouldLoadImage = true;
    var loadLocal = false;
    <?php if ( ! empty($this->response->dictionary)) {
    echo "loadImage(true);\n";
    } ?>
    function loadImage(firstPass){
        if(shouldLoadImage === true){
            // if we pass false through firstPAss we dont want to load the image again.
            if(!firstPass) shouldLoadImage = false;
            var img = new Image();
            $(img).load(function(){
                $('#feature_image').append($(this));
                $(this).addClass("center-block");
                $(this).attr("title","<?php echo @strtolower($this->response->dictionary->table); ?>");
                $(this).attr("alt", "<?php echo @strtolower($this->response->dictionary->table); ?>");
                $(this).attr("width", "100%");
            }).error(function(error, gg) {
                console.log('cannot find the image');
                loadLocal = true;
                //make sure this function cannot run again.
                loadImage(false);
            })
            .attr({
                src: function(){
                    if(loadLocal === false){
                        return "https://opmantek.com/product_data/open-audit_<?php echo @strtolower($this->response->dictionary->table); ?>.png";
                    }else{
                        var url = '/open-audit/images/<?php echo @strtolower($this->response->dictionary->table); ?>.png';
                        return  url;
                    }
                }
            });
        }
    }
});
</script>