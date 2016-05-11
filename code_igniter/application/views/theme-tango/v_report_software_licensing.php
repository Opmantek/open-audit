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
?>
<table cellspacing='1' class='tablesorter' style='width:900'>
	<thead>
		<tr>
			<th><?php echo __('Package Name')?></th>
			<th><?php echo __('Type')?></th>
			<th><?php echo __('Version')?></th>
			<th><?php echo __('Publisher')?></th>
			<th align='center'><?php echo __('Installs')?></th>
			<th align='center'><?php echo __('Licenses')?></th>
			<?php if ($this->user->sam > '1') { ?>
			<th align='center'><?php echo __('Edit')?></th>
			<?php } ?>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($query as $key):
        #if ($key->software_licenses > '0' ) {$key->software_licenses = ($key->software_licenses / $key->software_count); }
        if (($key->software_licenses == '0') or (!isset($key->software_licenses))) {
            $key->software_licenses = '-';
        } else {
            if (($key->software_licenses > '0') and ($key->software_licenses > $key->software_count)) {
                $key->software_licenses = '<font color="green">'.intval($key->software_licenses).'</font>';
            }
            if (($key->software_licenses > '0') and ($key->software_licenses < $key->software_count)) {
                $key->software_licenses = '<font color="red">'.intval($key->software_licenses).'</font>';
            }
            if (($key->software_licenses > '0') and ($key->software_licenses == $key->software_count)) {
                $key->software_licenses = '<font color="blue">'.intval($key->software_licenses).'</font>';
            }
        }
    ?>
		<tr>
			<td><a href="<?php echo base_url(); ?>index.php/report/specific_software/<?php echo $group_id; ?>/<?php echo $key->id; ?>"><?php echo $key->name; ?></a></td>
			<td><?php echo htmlentities($key->type); ?></td>
			<td><?php echo htmlentities($key->version); ?></td>
			<td><?php echo htmlentities($key->publisher); ?></td>
			<td align='center'><?php echo intval($key->software_count); ?></td>
			<td align='center'><?php echo $key->software_licenses ?></td>
			<?php
            if ($this->user->sam > '1') {
                echo "\t\t\t<td align=\"center\"><a class='AssetPopupTrigger' rel='".htmlentities($key->name)."' href='#' ><img src='".$oa_theme_images."/16_edit.png' alt='' title='' style='width:16' /></a></td>\n";
            //} else if ($this->user->sam > '1') {
                //if ($key->software_licenses == '') {
                    //echo "\t\t\t<td align=\"center\"></td>\n";
                //} else {
                    //echo "\t\t\t<td align=\"center\"><a href='" . $key->software_licenses . "'><img src='" . $oa_theme_images . "/16_edit.png' alt='' title='' style='width:16' /></a></td>\n";
                //}
            }
            ?>
		</tr>
	<?php endforeach; ?>
	<?php if (count($query) == 0) {
    echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>\n";
} ?>
	</tbody>
</table>
<script type="text/javascript">
function dynamic_asset( software_name )
{
	licenses = document.getElementById("licenses").value;
	location.href = '<?php echo site_url(); ?>/licenses/change_license/<?php echo intval($group_id); ?>/' + licenses + '/' + software_name;
	return false;
}
</script>
