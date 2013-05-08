<div id="header" style='height: 70px; margin-left: auto; margin-right: auto; padding: 0px 0px 0px 0px; text-align: left;'>
	<div style="width:260px; float: left; text-align: left;">
		<a href="<?php echo base_url(); ?>">
			<img src='<?php echo base_url()?>theme-<?php echo $user_theme;?>/<?php echo $user_theme?>-images/logo.png' alt='logo' style='border-width:0px;' />
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
				$image = '<a href="' . current_url() . '/user_debug/n"><img src="' . base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-images/16_delete.png" /></a>'; 
			} else { 
				$image = '<a href="' . current_url() . '/user_debug/y"><img src="' . base_url() . 'theme-' . $user_theme . '/' . $user_theme . '-images/16_true.png" /></a>'; 
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
</div>