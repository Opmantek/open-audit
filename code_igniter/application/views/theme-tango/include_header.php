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
<div id="header" style='height: 70px; margin-left: auto; margin-right: auto; padding: 0px 0px 0px 0px; text-align: left;'>
	<div style="width:260px; float: left; text-align: left;">
		<a href="<?php echo $this->config->item('oa_web_index'); ?>/main/list_groups">
			<?php if (isset($this->config->config['logo']) and $this->config->config['logo'] != '') {
            if ($this->config->config['logo'] == 'oac') {
                $this->config->config['logo'] = 'logo-banner-oac';
            }
            if ($this->config->config['logo'] == 'oae') {
                $this->config->config['logo'] = 'logo-banner-oae';
            }
            if ($this->config->config['logo'] == 'oac-oae') {
                $this->config->config['logo'] = 'logo-banner-oac-oae';
            } ?>
			<img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/<?php echo htmlentities($this->config->item('logo'))?>.png' alt='logo' style='border-width:0px;' />
			<?php } else { ?>
			<img src='<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-banner-oac-oae.png' alt='logo' style='border-width:0px;' />
			<?php } ?>
		</a>
	</div>
	<div style="width:100px; float: right; text-align: center;">
		<br /><a href="<?php echo $oa_web_index; ?>/main/edit_user"><?php echo htmlentities($this->user->full_name); ?><br /></a>
		<a href="<?php echo $oa_web_index; ?>/login/logout">
			<img id="logout_button" src="<?php echo $oa_theme_images; ?>/28_button_logout.png" onmouseover="this.src='<?php echo $oa_theme_images; ?>/28_button_logout_over.png'" onmouseout="this.src='<?php echo $oa_theme_images; ?>/28_button_logout.png'" alt="" style='border-width:0px;' />
		</a>
	</div>
	<?php if ($this->user->admin == 'y') {
        if (isset($this->user->debug) and $this->user->debug == 'y') {
            $image = '<a href="'.current_url().'/user_debug/n"><img alt="" src="'.$oa_theme_images.'/16_delete.png" /></a>';
        } else {
            $image = '<a href="'.current_url().'/user_debug/y"><img alt="" src="'.$oa_theme_images.'/16_true.png" /></a>';
        } ?>
    	<div style="width:100px; float: right; text-align: center;">
    		<br />Debug<br /><?php echo $image; ?><br />
    	</div>
	<?php } ?>
	<div style="width:100px; float: right; text-align: center;">
		<br />Version<br /><?php echo htmlentities($this->config->item('display_version')); ?>
		<?php if ($this->config->item('internal_version') < $this->config->item('web_internal_version') and ($this->user->admin == 'y')) {
        echo '<br /><a href="'.$oa_web_index.'/main/help_about" style="color: red;">upgrade</a>'; } ?>
	</div>
	<div style="width:100px; float: right; text-align: center;">
	<?php if (isset($this->config->config['nmis_url']) and $this->config->config['nmis_url'] > "") { ?>
		<br />NMIS<br /><a href="<?php echo htmlentities($this->config->item('nmis_url')); ?>" target="_blank"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-nmis.png" /></a>
	<?php } else { ?>
		<br />NMIS<br /><a href="https://opmantek.com" target="_blank"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-nmis.png" /></a>
	<?php } ?>
	</div>
	<div style="width:100px; float: right; text-align: center;">
	   <br />Dashboard<br /><a href="<?php echo htmlentities($this->config->config['oae_url']); ?>" target="_blank"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-oae.png" /></a>
	</div>
	<div style="width:100px; float: right; text-align: center;">
	<?php if (isset($this->config->config['maps_url']) and $this->config->config['maps_url'] > "") { ?>
		<br />Map<br /><a href="<?php echo htmlentities($this->config->item('maps_url')); ?>"  target="_blank" ><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-opmaps.png" /></a>
	<?php } else { ?>
		<br />Map<br /><a href="<?php echo $oa_web_index; ?>/main/help_opmaps"><img alt="" style="height:30px" src="<?php echo $this->config->config['oa_web_folder']; ?>/images/logo-opmaps.png" /></a>
	<?php } ?>
	</div>
</div>
