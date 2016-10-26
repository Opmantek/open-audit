<?php
#
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


if ($this->{'m_'.$this->response->meta->collection}->delete()) {
    $this->response->data = array();
    $temp = new stdClass();
    $temp->type = $this->response->meta->collection;
    $this->response->data[] = $temp;
    unset($temp);
    $this->session->set_flashdata('success', 'Object in ' . $this->response->meta->collection . ' deleted.');
} else {
    log_error('ERR-0013');
    $this->session->set_flashdata('error', 'Object in ' . $this->response->meta->collection . ' not deleted.');
}
if ($this->response->meta->format === 'json') {
    output($this->response);
} else {
    redirect($this->response->meta->collection);
}
