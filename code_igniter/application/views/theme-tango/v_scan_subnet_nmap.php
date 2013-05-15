<?php echo form_open('admin/scan_subnet_nmap') ?>
<fieldset id="group_details" class="niceforms">
	<legend><span style="font-size: 12pt;">&nbsp;<?php echo __('Scanning A Subnet using Nmap')?></span></legend>
	<img style='float: right; margin; 10px; ' src='<?php echo $image_path;?>48_network_wireless.png' alt='' title='' width='48'/>
	<table cellpadding = "0" cellspacing="0">
		<tr>
			<td width='100%'>
				<p><label for='subnet'><?php echo __("Subnet"); ?>: </label> <input type='text' id='subnet' name='subnet' tabindex='1' title='Subnet'  /></p>
				<p><label for='example'><?php echo __("Example"); ?>: </label>A typical subnet is 192.168.1.0/24 or 192.168.0.1/32 for a single IP.</p>
				<p><label for='ScanNmap'>&nbsp;</label><input type='submit' name='ScanNmap' id='ScanNmap' value='Scan' /></p>
				<?php if ($warning > '') { echo "<p><br /><br />$warning</p>\n"; } ?>
			</td>
		</tr>
	</table>
</fieldset>
</form>
