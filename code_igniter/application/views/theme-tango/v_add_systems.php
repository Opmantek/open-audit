<?php 
echo form_open_multipart('admin_system/add_systems') . "\n";
echo form_fieldset('Select File') . "\n";
echo form_upload('upload_file') . form_submit('submit_file', 'Submit File');
echo form_fieldset_close();
/*
echo "<p>OR</p>\n";

echo form_fieldset('Insert XML Below') . "\n";
echo "<p>" . form_submit('submit_xml', 'Submit XML') . "</p>\n";
$textarea_data = array('name' => 'form_systemXML', 'id' => 'form_systemXML', 'rows' => '20', 'cols' => '150');
echo "<p>" . form_textarea($textarea_data) . "</p>\n";
echo form_fieldset_close();
*/
echo form_close(); 
?>