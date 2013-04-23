<?php 
echo form_open('admin_group/import_group') . "\n"; 
echo form_fieldset('Insert XML Below') . "\n";
echo "<p>" . form_submit('submit', 'Submit') . "</p>\n";
$textarea_data = array('name' => 'form_reportXML', 'rows' => '20', 'cols' => '150');
echo "<p>" . form_textarea($textarea_data) . "</p>\n";
echo form_fieldset_close();
echo form_close(); 
?>