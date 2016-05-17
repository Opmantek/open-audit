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
echo form_open_multipart('admin/import_nmis')."\n";

echo form_fieldset('Path to Nodes.nmis')."\n";
if (file_exists('/usr/local/nmis8/conf/Nodes.nmis')) {
    echo "<input id='nodes_file' name='nodes_file' type='text' value='/usr/local/nmis8/conf/Nodes.nmis' size='50' onfocus=\"(this.value = '')\"/>\n";
} else {
    echo "<input id='nodes_file' name='nodes_file' type='text' value='' size='50' />\n";
}
echo form_submit(array('id' => 'submit', 'name' => 'submit'), __('Submit') );
echo "<br />eg: /usr/local/nmis8/conf/Nodes.nmis";
echo form_fieldset_close();

/*
echo "<p>OR</p>\n";

# TODO: enable the uploading of an nmis.nodes file

echo form_fieldset('Select File') . "\n";
echo form_upload('upload_file') . form_submit('import', 'Import File');
echo form_fieldset_close();
*/

echo form_close();
