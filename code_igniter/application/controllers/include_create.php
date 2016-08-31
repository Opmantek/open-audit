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


$this->response->meta->id = $this->{'m_'.$this->response->meta->collection}->create();
if (! empty($this->response->meta->id)) {
    if ($this->response->meta->format === 'json') {
        $this->response->data = $this->{'m_'.$this->response->meta->collection}->read();
        output($this->response);
    } else {
        $this->session->set_flashdata('success', 'New object in ' . $this->response->meta->collection . ' created.');
        redirect($this->response->meta->collection);
    }
} else {
    if ($this->response->meta->format === 'json') {
        output($this->response);
    } else {
        $this->session->set_flashdata('error', $this->response->errors[0]->detail);
        unset($this->response->errors);
        redirect($this->response->meta->collection);
    }
    exit();
}
