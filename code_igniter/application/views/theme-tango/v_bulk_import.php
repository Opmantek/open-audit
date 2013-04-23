<?php 
echo form_open('admin/process_bulk_import') . "\n";
echo form_fieldset('Bulk Import') . "\n";
$textarea_data = array('name' => 'form_systemXML', 'rows' => '20', 'cols' => '150');
echo "<p>" . form_textarea($textarea_data) . "</p>\n";
echo "<p>" . form_submit('submit', 'Submit') . "</p>\n";
echo form_fieldset_close();
echo form_close(); 
?>
