<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

namespace App\Models;

use CodeIgniter\Model;

class LogonModel extends Model
{

    public function logon($username = '', $password = '', $domain = '')
    {
        if (empty($username) OR empty($password)) {
            // log an issue
        }
        $db = db_connect();
        $sql = "SELECT * FROM users WHERE name = ? and active = 'y'";
        $query = $db->query($sql, [$username]);
        $result = $query->getResult();
        // TODO _ REMOVE THIS
        return $result[0];
        if (!empty($result[0]->password)) {
            if (password_verify($password, $result[0]->password)) {
                $result[0]->password = '';
                return $result[0];
            } else {
                return false;
            }
        }
    }
}
