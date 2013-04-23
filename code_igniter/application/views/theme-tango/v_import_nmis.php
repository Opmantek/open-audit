<?php 

echo form_open_multipart('admin/import_nmis') . "\n";

echo form_fieldset('Path to Nodes.nmis') . "\n";
if (file_exists('/usr/local/nmis8/conf/Nodes.nmis')){
	echo "<input id='nodes_file' name='nodes_file' type='text' value='/usr/local/nmis8/conf/Nodes.nmis' size='50' onfocus=\"(this.value = '')\"/>\n";
} else {
	echo "<input id='nodes_file' name='nodes_file' type='text' value='' size='50' />\n";
}
echo form_submit('import', 'Import');
echo "<br />eg: /usr/local/nmis8/conf/Nodes.nmis";
echo form_fieldset_close();

/*
echo "<p>OR</p>\n";

# todo - enable the uploading of an nmis.nodes file

echo form_fieldset('Select File') . "\n";
echo form_upload('upload_file') . form_submit('import', 'Import File');
echo form_fieldset_close();
*/

echo form_close(); 
?>