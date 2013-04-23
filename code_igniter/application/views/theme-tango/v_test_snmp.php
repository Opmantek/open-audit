<?php 
echo form_open_multipart('test/test_snmp') . "\n";
echo form_fieldset('SNMP Text') . "\n";
echo "<textarea id=\"snmp\" name=\"snmp\" width=\"100\"></textarea>\n";
echo form_submit('submit', 'Submit');
echo form_fieldset_close();
echo form_close(); 
?>