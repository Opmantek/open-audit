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
$timer_start = microtime(true);
$this->load->model('m_users');
$this->load->helper('file');
$this->load->helper('log');
$this->load->helper('error');
if ($this->response->meta->collection !== 'devices') {
    $this->load->model('m_collection');
} else {
    $this->load->model('m_devices');
}

$this->response->meta->flash = new stdClass();
$this->response->meta->flash->status = '';
$this->response->meta->flash->message = '';

ini_set("auto_detect_line_endings", true);
$csv = @array_map('str_getcsv', file($_FILES['file_import']['tmp_name'], FILE_IGNORE_NEW_LINES));
if (!$csv) {
    log_error('ERR-0011');
    if ($this->response->meta->format === 'json') {
        output($this->response);
    } else {
        redirect($this->response->meta->collection);
    }
    exit();
}
$header = $csv[0];
unset($csv[0]);
$this->response->data = array();
$flashdata_success = '';
$flashdata_error = '';
$count_all = 0;
$count_good = 0;
$count_bad = 0;
$count_update = 0;
$count_create = 0;
if ($this->response->meta->collection === 'devices') {
    $last_seen_by = 'user';
    $last_seen = $this->config->config['timestamp'];
}

foreach ($csv as $key => $value) {
    $item = new stdClass();
    for ($i=0; $i < count($value); $i++) {
        $item->{$header[$i]} = $value[$i];
    }
    $item->org_id = @intval($item->org_id);

    // Check user is auth on org_id
    $test = false;
    $count_all += 1;

    // if ($this->response->meta->collection === 'roles') {
    //     $test = $this->m_users->has_role('admin');
    // } elseif ($this->response->meta->collection !== 'roles' and $this->response->meta->collection !== 'orgs') {
    //     $test = $this->m_users->user_org($item->org_id);
    // } elseif ($this->response->meta->collection === 'orgs') {
    //     $test = $this->m_users->user_org($item->parent_id);
    // }

    if ($this->response->meta->collection === 'roles') {
        $test = $this->m_users->has_role('admin');
    } elseif ($this->response->meta->collection === 'orgs') {
        $test = $this->m_users->user_org($item->parent_id);
    } else {
        if (!empty($item->id)) {
            # We have an ID - use that to get the OrgId
            $table = $this->response->meta->collection;
            if ($table == 'devices') {
                $table = 'system';
            }
            if (!$this->db->table_exists($table)) {
                $test = false;
            } else {
                $sql = "/* include_import */ " . "SELECT org_id FROM `$table` WHERE `id` = ?";
                $data = array(intval($item->id));
                $query = $this->db->query($sql, $data);
                $result = $query->result();
                if (!empty($result[0]->org_id)) {
                    $test = $this->m_users->user_org($result[0]->org_id);
                } else {
                    $test = false;
                }
            }
        } else {
            if (empty($item->org_id)) {
                $test = false;
            } else {
                $test = $this->m_users->user_org($item->org_id);
            }
        }
    }

    if ($this->response->meta->collection == 'credentials') {
        if (empty($item->credentials)) {
            $item->credentials = new stdClass();
            foreach ($item as $name => $value) {
                $attribute = explode('.', $name);
                if ($attribute[0] == 'credentials' and !empty($attribute[1]) and !empty($value)) {
                    $item->credentials->{$attribute[1]} = $value;
                    unset($item->{$name});
                }
            }
        }
    }

    if ($this->response->meta->collection == 'discoveries') {
        if (empty($item->other)) {
            $item->other = new stdClass();
            $item->other->nmap = new stdClass();
            $item->other->match = new stdClass();
            foreach ($item as $name => $value) {
                $attribute = explode('.', $name);
                if ($attribute[0] == 'other' and !empty($attribute[1])  and $attribute[1] == 'nmap' and !empty($attribute[2]) and !empty($value)) {
                    $item->other->nmap->{$attribute[2]} = $value;
                    unset($item->{$name});
                } else if ($attribute[0] == 'other' and !empty($attribute[1])  and $attribute[1] == 'match' and !empty($attribute[2]) and !empty($value)) {
                    $item->other->match->{$attribute[2]} = $value;
                    unset($item->{$name});
                } else if ($attribute[0] == 'other' and !empty($attribute[1]) and !empty($value)) {
                    $item->other->{$attribute[1]} = $value;
                    unset($item->{$name});
                }
            }
        }
    }

    if ($this->response->meta->collection == 'roles') {
        if (empty($item->permissions)) {
            $test = false;
        }
    }

    if ($test === false) {
        $count_bad += 1;
    } else {
        if ($this->response->meta->collection === 'devices') {
            $item->last_seen_by = $last_seen_by;
            $item->last_seen = $last_seen;
        }
        $test = false;
        if (!empty($item->id)) {
            # UPDATE
            $id = $item->id;
            if ($this->response->meta->collection !== 'devices') {
                $test = $this->{'m_collection'}->update($item, $this->response->meta->collection);
            } else {
                $test = $this->{'m_devices'}->update($item, $this->response->meta->collection);
            }
            if ($test !== false) {
                $count_update += 1;
            }
        } else {
            # CREATE
            unset($item->id);
            if ($this->response->meta->collection !== 'devices') {
                $test = $this->{'m_collection'}->create($item, $this->response->meta->collection);
            } else {
                $test = $this->{'m_devices'}->create($item, $this->response->meta->collection);
            }
            if ($test !== false) {
                $count_create += 1;
                $id = $test;
            }
        }
        if ($test !== false) {
            $this->response->data = array_merge($this->response->data, $this->{'m_'.$this->response->meta->collection}->read($id));
        } else {
            $count_bad += 1;
        }
    }
}

$flash_message = 'Total <strong>' . $this->response->meta->collection . '</strong> uploaded: ' . $count_all . '<br />';
$flash_message .= 'Total Created: ' . $count_create . '<br />';
$flash_message .= 'Total Updated: ' . $count_update . '<br />';
$flash_message .= 'Total Errors: ' . $count_bad;
if ($count_bad !== 0) {
    $flash_message .= '<br />Check your user has permission on the supplied organisation and/or the supplied ' . $this->response->meta->collection . ' id exists.';
}
if ($count_bad === 0) {
    $flash_status = 'success';
} else {
    $flash_status = 'danger';
}

$this->session->set_flashdata('success', '');
$this->session->set_flashdata($flash_status, $flash_message);

$this->response->meta->flash->status = $flash_status;
$this->response->meta->flash->message = $flash_message;

$timer_end = microtime(true);
$entry = new stdClass();
$entry->time = ($timer_end - $timer_start);
$entry->detail = 'Import.';
$GLOBALS['timer_log'][] = $entry;

if ($this->response->meta->format === 'json') {
    $this->response->data = array();
    $item = new stdClass();
    $item->total = $count_all;
    $item->created = $count_create;
    $item->updated = $count_update;
    $this->response->data[] = $item;
    output($this->response);
} else {
    redirect($this->response->meta->collection);
}

$log = new stdClass();
$log->object = $this->response->meta->collection;
$log->function = strtolower($this->response->meta->collection) . '::' . strtolower($this->response->meta->action);
$log->severity = 7;
$log->status = 'finish';
$log->type = 'access';
if ($this->config->config['log_level'] == 7) {
    $log->detail = json_encode($this->response->meta);
}
stdLog($log);
