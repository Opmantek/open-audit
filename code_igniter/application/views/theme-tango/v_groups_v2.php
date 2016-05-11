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
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if ($query) {
    if ($this->config->config['distinct_groups'] == 'y') {
        $old_category = '';
        foreach ($query as $key) {
            if ($key->group_category != $old_category) {
                if ($old_category != '') {
                    echo "</tbody>\n</table>\n";
                }
                if ($key->group_category == 'os') {
                    echo "<h3>OS</h3>\n";
                } else {
                    echo "<h3>".htmlentities(ucfirst($key->group_category))."</h3>\n";
                }
                echo "<table cellspacing=\"1\" class=\"tablesorter\" id=\"".htmlentities(strtolower($key->group_category))."_groups\">\n";
                echo "	<thead>\n";
                echo "		<tr>\n";
                echo "			<th align=\"center\" style=\"width:120px;\">".__('Icon')."</th>\n";
                echo "			<th align=\"center\" style=\"width:120px;\">".__('Systems')."</th>\n";
                echo "			<th style=\"width:300px;\">".__('Name')."</th>\n";
                echo "			<th>".__('Description')."</th>\n";
                if (($this->config->config['non_admin_search'] == 'y') or ($this->user->admin == 'y')) {
                    echo "			<th align=\"center\" style=\"width:120px;\">".__('Search')."</th>\n";
                }
                echo "			<th align=\"center\" style=\"width:120px;\">".__('Reports')."</th>\n";
                echo "		</tr>\n";
                echo "	</thead>\n";
                echo "	<tbody>\n";
            }
            $old_category = $key->group_category;
            echo "		<tr>\n";
            echo "			<td align=\"center\"><img src=\"".$oa_theme_images."/16_".htmlentities($key->group_icon).".png\" alt=\"".htmlentities($key->group_category)."\" title=\"".htmlentities($key->group_category)."\" style=\"border-width:0px;\" /></td>\n";
            echo "			<td align=\"center\">".$key->total."</td>\n";
            if ($key->group_padded_name > "") {
                echo "			<td><span style=\"display: none;\">".htmlentities($key->group_padded_name)."</span><a href=\"".base_url()."index.php/groups/".intval($key->group_id)."\">".htmlentities($key->group_name)."</a></td>\n";
            } else {
                echo "			<td><a href=\"".base_url()."index.php/main/list_devices/".intval($key->group_id)."\">".htmlentities($key->group_name)."</a></td>\n";
            }
            echo "			<td>".htmlentities($key->group_description)."</td>\n";
            if (($this->config->config['non_admin_search'] == 'y') or ($this->user->admin == 'y')) {
                echo "			<td align=\"center\"><a class=\"SearchPopupTrigger\" rel=\"".intval($key->group_id)."\" href=\"#\" ><img src=\"".$oa_theme_images."/16_find.png\" style=\"border-width:0px;\" title=\"\" alt=\"\" /></a></td>\n";
            }
            echo "			<td align=\"center\"><a class=\"ReportPopupTrigger\" rel=\"".intval($key->group_id)."\" href=\"#\" ><img src=\"".$oa_theme_images."/16_csv.png\"  style=\"border-width:0px;\" title=\"\" alt=\"\" /></a></td>\n";
            echo "		</tr>\n";
        }
    } else {
        ?>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align="center" style="width:120px;" class="{sorter: false}"><?php echo __('Icon')?></th>
			<th align="center" style="width:120px;"><?php echo __('Systems')?></th>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Description')?></th>
			<?php if (($this->config->config['non_admin_search'] == 'y') or ($this->user->admin == 'y')) { ?>
			<th align="center"><?php echo __('Search')?></th>
			<?php } ?>
			<th align="center"><?php echo __('Reports')?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($query as $key): ?>
		<?php if ($key->group_category != 'network') { ?>
		<tr>
			<td align="center"><img src="<?php echo $oa_theme_images; ?>/16_<?php echo htmlentities($key->group_icon)?>.png" alt="<?php echo htmlentities($key->group_category)?>" title="<?php echo htmlentities($key->group_category)?>" style='border-width:0px;' /></td>
			<td align="center"><?php echo intval($key->total)?></td>
			<?php if ($key->group_padded_name > "") { ?>
				<td><span style="display: none;"><?php echo htmlentities($key->group_padded_name)?></span><a href="<?php echo base_url()?>index.php/main/list_devices/<?php echo intval($key->group_id)?>"><?php echo htmlentities($key->group_name)?></a></td>
			<?php } else { ?>
				<td><a href="<?php echo base_url()?>index.php/groups/<?php echo intval($key->group_id)?>"><?php echo htmlentities($key->group_name)?></a></td>
			<?php } ?>
			<td><?php echo htmlentities($key->group_description)?></td>
			<?php if (($this->config->config['non_admin_search'] == 'y') or ($this->user->admin == 'y')) { ?>
			<td align="center"><a class="SearchPopupTrigger" rel="<?php echo intval($key->group_id)?>" href="#" ><img src="<?php echo $oa_theme_images; ?>/16_find.png"  style="border-width:0px;" title="" alt="" /></a></td>
			<?php } ?>
			<td align="center"><a class="ReportPopupTrigger" rel="<?php echo intval($key->group_id)?>" href="#" ><img src="<?php echo $oa_theme_images; ?>/16_csv.png"  style="border-width:0px;" title="" alt="" /></a></td>
		</tr>
		<?php } ?>
		<?php endforeach;
        ?>
	</tbody>
</table>
<h2>Network Groups</h2>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th align="center" style="width:120px;"><?php echo __('Icon')?></th>
			<th align="center" style="width:120px;"><?php echo __('Systems')?></th>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Description')?></th>
			<?php if (($this->config->config['non_admin_search'] == 'y') or ($this->user->admin == 'y')) { ?>
			<th align="center"><?php echo __('Search')?></th>
			<?php } ?>
			<th align="center"><?php echo __('Reports')?></th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 0; ?>
		<?php foreach ($query as $key): ?>
		<?php if ($key->group_category == 'network') {
            $i++;
        ?>
		<tr>
			<td align="center"><img src="<?php echo $oa_theme_images; ?>/16_<?php echo htmlentities($key->group_icon)?>.png" alt="<?php echo htmlentities($key->group_category)?>" title="<?php echo htmlentities($key->group_category)?>" style='border-width:0px;' /></td>
			<td align="center"><?php echo intval($key->total)?></td>
			<?php if ($key->group_padded_name > "") { ?>
				<td><span style="display: none;"><?php echo htmlentities($key->group_padded_name)?></span><a href="<?php echo base_url()?>index.php/main/list_devices/<?php echo intval($key->group_id)?>"><?php echo htmlentities($key->group_name)?></a></td>
			<?php } else { ?>
				<td><a href="<?php echo base_url()?>index.php/groups/<?php echo intval($key->group_id)?>"><?php echo htmlentities($key->group_name)?></a></td>
			<?php } ?>
			<td><?php echo htmlentities($key->group_description)?></td>
			<?php if (($this->config->config['non_admin_search'] == 'y') or ($this->user->admin == 'y')) { ?>
			<td align="center"><a class="SearchPopupTrigger" rel="<?php echo intval($key->group_id)?>" href="#" ><img src="<?php echo $oa_theme_images; ?>/16_find.png"  style="border-width:0px;" title="" alt="" /></a></td>
			<?php } ?>
			<td align="center"><a class="ReportPopupTrigger" rel="<?php echo intval($key->group_id)?>" href="#" ><img src="<?php echo $oa_theme_images; ?>/16_csv.png"  style="border-width:0px;" title="" alt="" /></a></td>
		</tr>
		<?php } ?>
		<?php endforeach; ?>
		<?php if ($i == 0) { ?>
    		<?php if (($this->config->config['non_admin_search'] == 'y') or ($this->user->admin == 'y')) { ?>
    		<tr>
    			<td></td><td></td><td></td><td></td><td></td><td></td>
    		</tr>
    		<?php } else { ?>
    		<tr>
    			<td></td><td></td><td></td><td></td><td></td>
    		</tr>
    		<?php } ?>
		<?php } ?>
	</tbody>
</table>
<?php } // end of distinct groups ?>
<?php } else {
    echo "<div style=\"text-align: center;\">\n";
    echo "<br /><h2>";
    echo __('Welcome to Open-AudIT.');
    echo "</h2><br />\n";
    echo __("Please ensure you set the appropriate configuration items at Menu -> Admin -> Config.")."<br />\n";
    echo __("You should set all the 'default_*' items, to take advantage of Discovery.")."<br />\n";
    echo __("Once that has been done, why not try running Discovery (Menu -> Admin -> Discovery) on your environment?")."<br /><br />\n";
    echo __("Don't forget you can activate extra Groups via the Menu -> Admin -> Groups -> Activate Group item.")."<br />\n";
    echo __("This will automatically Group items and allow you to set User Access on a per Group Basis.")."<br /><br />\n";
    echo __("Extra Queries are available at Menu -> Admin -> Queries -> Activate Query.<br />Take a look, you might find exactly the Query you need.")."<br />\n";
    echo "</div>\v";
}
?>
<script type="text/javascript">
function dynamic_search( group )
{
	search_text = document.getElementById("search_term").value;
	location.href = '<?php echo site_url(); ?>/main/search/' + group + '/' + search_text;
	return false;
}
</script>

<?php if ($this->config->config['rss_enable'] == 'y') {
    ?>
<style type="text/css">
li a {text-decoration: underline; color: #729FCF;}
</style>

<table cellspacing="1" class="tablesorter">
	<tr>
		<td><ul class="fade" name="newsfeed" id="newsfeed" style="list-style-type: none;"><li>&nbsp;&nbsp;&nbsp;<img src="<?php echo $oa_theme_images;
    ?>/16_nmis.png" />&nbsp;&nbsp;Open-AudIT Community: from the <a target="_blank" href="https://community.opmantek.com/display/OA/Home">Open-AudIT wiki</a>.</li></ul></td>
	</tr>
</table>

<style type="text/css">
li a {text-decoration: none;}
</style>


<script type="text/javascript">
    (function (e) {
        e.fn.inewsticker = function (t) {
            var n = {
                speed: 200,
                effect: "fade",
                dir: "ltr",
                font_size: null,
                color: null,
                font_family: null,
                delay_after: 3e3
            };
            e.extend(n, t);
            var r = e(this);
            var i = r.children();
            i.not(":first").hide();
            r.css("direction", t.dir);
            r.css("font-size", t.font_size);
            r.css("color", t.color);
            r.css("font-family", t.font_family);
            setInterval(function () {
                var e = r.children();
                e.not(":first").hide();
                var n = e.eq(0);
                var i = e.eq(1);
                if (t.effect == "fade") {
                    n.fadeOut(function () {
                        i.fadeIn();
                        n.remove().appendTo(r)
                    })
                }
            }, t.speed);

        }
    })(jQuery)

var rssurl = "<?php echo $this->config->item('rss_url');
    ?>"
var rssfeed = $.ajax({
  url: "<?php echo $this->config->item('rss_url');
    ?>",
  ifModified: true
})
.done(function(data) {
	var $xml = $(data);
    $xml.find("entry").each(function() {
        var $this = $(this),
        item = {
            title: $this.find("title").text(),
            link: $this.find("link").text(),
            description: $this.find("description").text(),
            pubDate: $this.find("pubDate").text(),
            author: $this.find("author").text()
        }
        var li = document.createElement("li");
        var updateDate = new Date($this.find("updated").text());
        var month = parseInt(updateDate.getMonth()) + 1;
        var updatedDate = updateDate.getFullYear() + "/" + month + "/" + updateDate.getDate();
        li.style.display="none";
        li.innerHTML = "&nbsp;&nbsp;&nbsp;<img src=\"<?php echo $oa_theme_images;
    ?>/16_nmis.png\" />&nbsp;&nbsp;Open-AudIT Community: <a target='_blank' href='" + $this.find("link").attr("href") + "'>" + $this.find("title").text() + "</a> by " + $this.find("author").text() + " on " + updatedDate + ".";
        document.getElementById("newsfeed").appendChild(li);
    })
});

$(document).ready(function() {
    $('.fade').inewsticker({
        speed       : 5000,
        effect      : 'fade',
        dir         : 'ltr',
        font_size   : 13,
        color       : '#000',
        font_family : 'arial',
        delay_after : 1000
    });
});
</script>

<?php
# https://github.com/progpars/inewsticker
} ?>
