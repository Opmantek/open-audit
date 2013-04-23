<?php 
/**
 * Import and Active Directory extract created with OLDCMP.EXE
 *
 * @package		Open-AudIT
 * @author		Mark Unwin
 * @link		http://www.open-audit.org
 * @since 		20120101
 */
 /*
if ($heading = 'Import Active Directory Export') {
	echo form_open_multipart('custom/ad_extract') . "\n";
	echo form_fieldset('Select File') . "\n";
	echo "<input type=\"file\" name=\"userfile\" size=\"20\" /><br />\n";
	echo form_upload('upload_file') . "<br />\n" . form_submit('submit_file', 'Submit File');
	#echo "<input type='submit' value='upload' />\n";
	echo form_fieldset_close();
	echo form_close(); 
}
*/
if ($heading = 'Import Active Directory Export 2') {
	echo form_open_multipart('custom/ad_extract_2') . "\n";
	echo form_fieldset('Select File') . "\n";
	echo form_upload('upload_file') . "<br />\n" . form_submit('submit_file', 'Submit File');
	echo form_fieldset_close();
	echo form_close(); 
}
?>
