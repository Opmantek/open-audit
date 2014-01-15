<?php 
#  Copyright 2003-2014 Opmantek Limited (www.opmantek.com)
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
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 * @version 1.1.1
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
<div id="header" style='height: 70px; margin-left: auto; margin-right: auto; padding: 0px 0px 0px 0px; text-align: left;'>
	<div style="width:260px; float: left; text-align: left;">
		<a href="<?php echo base_url(); ?>index.php/main/list_groups">
			<?php if (isset($config->logo)) { ?><img src='<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-banner-<?php echo $config->logo; ?>.png' alt='logo' style='border-width:0px;' />
			<?php } else { ?><img src='<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-banner-oac-oae.png' alt='logo' style='border-width:0px;' /><?php } ?>
		</a>
	</div>
	<div style="width:100px; float: right; text-align: center;">
		<br /><a href="<?php echo base_url()?>index.php/main/edit_user"><?php echo htmlentities($user_full_name); ?><br /></a>
		<a href="<?php echo base_url()?>index.php/login/logout">
			<img id="logout_button" src="<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/28_button_logout.png" onmouseover="this.src='<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/28_button_logout_over.png'" onmouseout="this.src='<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/28_button_logout.png'" alt="" style='border-width:0px;' />
		</a>
	</div>
	<?php if ($this->data['user_admin'] == 'y') {
		if (!isset($this->data['user_debug'])) { $this->data['user_debug'] = ''; }
		if ($this->data['user_debug'] == 'y') { 
				$image = '<a href="' . current_url() . '/user_debug/n"><img alt="" src="' . base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-images/16_delete.png" /></a>'; 
			} else { 
				$image = '<a href="' . current_url() . '/user_debug/y"><img alt="" src="' . base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-images/16_true.png" /></a>'; 
			} ?>
		<div style="width:100px; float: right; text-align: center;">
			<br />Debug<br /><?php echo $image; ?><br />
		</div>
	<?php } ?>
	<div style="width:100px; float: right; text-align: center;">
		<br />Version<br /><?php echo $config->display_version; ?>
		<?php if (($config->display_version != $this->config->item('web_display_version')) AND ($this->session->userdata('user_admin') == 'y')) {
			echo '<br /><a href="' . base_url() . 'index.php/main/help_about" style="color: red;">upgrade</a>';
		} ?>
	</div>
	<div style="width:100px; float: right; text-align: center;">
	<?php #if (isset($config->nmis_url) and filter_var($config->nmis_url, FILTER_VALIDATE_URL)) { ?>
	<?php if (isset($config->nmis_url) and $config->nmis_url > "") { ?>
		<br />NMIS<br /><a href="<?php echo $config->nmis_url; ?>" target="_blank"><img alt="" style="height:30px" src="<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-nmis.png" /></a>
	<?php } else { ?>
		<br />NMIS<br /><a href="https://opmantek.com" target="_blank"><img alt="" style="height:30px" src="<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-nmis.png" /></a>
	<?php } ?>
	</div>
	<div style="width:100px; float: right; text-align: center;">
	<?php #if (isset($config->oae_url) and filter_var($config->oae_url, FILTER_VALIDATE_URL)) { ?>
	<?php if (isset($config->oae_url) and $config->oae_url > "") { ?>
		<br />Dashboard<br /><a href="<?php echo $config->oae_url; ?>" target="_blank"><img alt="" style="height:30px" src="<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-oae.png" /></a>
	<?php } else { ?>
		<br />Dashboard<br /><a href="<?php echo base_url(); ?>index.php/main/help_oae"><img alt="" style="height:30px" src="<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-oae.png" /></a>
	<?php } ?>
	</div>
	<div style="width:100px; float: right; text-align: center;">
	<?php #if (isset($config->maps_url) and filter_var($config->maps_url, FILTER_VALIDATE_URL)) { ?>
	<?php if (isset($config->maps_url) and $config->maps_url > "") { ?>
		<br />Map<br /><a href="<?php echo $config->maps_url; ?>"  target="_blank" ><img alt="" style="height:30px" src="<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-opmaps.png" /></a>
	<?php } else { ?>
		<br />Map<br /><a href="<?php echo base_url(); ?>index.php/main/help_opmaps"><img alt="" style="height:30px" src="<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo-opmaps.png" /></a>
	<?php } ?>
	</div>
</div>