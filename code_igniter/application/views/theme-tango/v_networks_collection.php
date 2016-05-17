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
if (!empty($this->response->error)) {
	echo "<h3>" . $this->response->error->title . "</h3><br />";
	echo "<p>" . $this->response->error->message . "</p>\n";
}
?>
<div style="text-align:right;">
<button><a href="<?php echo $this->response->links->first; ?>"><?php echo __('first'); ?></a></button>&nbsp;
<button><a href="<?php echo $this->response->links->prev; ?>"><?php echo __('prev'); ?></a></button>&nbsp;
<button><a href="<?php echo $this->response->links->next; ?>"><?php echo __('next'); ?></a></button>&nbsp;
<button><a href="<?php echo $this->response->links->last; ?>"><?php echo __('last'); ?></a></button>
</div>
<table cellspacing="1" class="tablesorter">
	<thead>
		<tr>
			<th><?php echo __('ID')?></th>
			<th><?php echo __('Name')?></th>
			<th><?php echo __('Description')?></th>
			<th><?php echo __('Edited By')?></th>
			<th><?php echo __('Edited Date')?></th>
			<th align='center'><?php echo __('Edit')?></th>
			<!-- <th align='center'><?php echo __('Delete')?></th> -->
		</tr>
	</thead>
	<tbody>
		<?php
        foreach ($this->response->data as $item):
        	$sortable_name = ip_address_to_db(substr($item->name, 0, strpos($item->name, '/')));
        	$sortable_name = str_replace('.', '', $sortable_name);

            $edit_pic = "<a href=\"networks/".intval($item->id)."?action=edit\"><img src='".$oa_theme_images."/16_edit.png' alt='' title='' style='width:16'/></a>";
            $delete_pic = "<a href=\"#\" onclick=\"return confirm('Are you sure?');\" class=\"delete_link\" value=\"".intval($item->id)."\"><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16' /></a>";
            $delete_pic = "<a href='#' class='delete_link' value='".intval($item->id)."' id='delete_link_".intval($item->id)."' name='delete_link_".intval($item->id)."'><img src='".$oa_theme_images."/16_delete.png' alt='' title='' style='width:16' /></a>";
            ?>
		<tr>
			<td><a href="networks/<?php echo intval($item->id)?>"><?php echo intval($item->id)?></td>
			<td><span style="display: none"><?php echo $sortable_name; ?></span><?php echo htmlentities($item->name)?></td>
			<td><?php echo htmlentities($item->description)?></td>
			<td><?php echo htmlentities($item->edited_by)?></td>
			<td><?php echo htmlentities($item->edited_date)?></td>
			<td align='center'><?php echo $edit_pic?></td>
			<!-- <td align='center'><?php echo $delete_pic?></td> -->
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<div id='error' name='error'>
<?php
if (!empty($this->response->error)) {
  echo "<pre>\n";
  print_r($this->response->error);
  echo "</pre>\n";
}
?>
</div>


<script>
$('.delete_link').click(function() {
	var $id = $(this).attr('value');
	var $url = '/open-audit/index.php/networks/'+$id;
	$.ajax({
		type: 'DELETE',
		url: $url,
	error: function() {
		alert("An error occurred when deleting item with ID:"+$id);
	},
	dataType: 'json',
	success: function(data) {
		alert("Item with ID:"+$id+" has been deleted.");
	}
   });
});
</script>

<?php
exit();
?>
