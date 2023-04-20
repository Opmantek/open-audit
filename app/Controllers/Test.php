<?php
# Copyright © 2022 Mark Unwin <mark.unwin@gmail.com>
# SPDX-License-Identifier: AGPL-3.0-or-later
declare(strict_types=1);

/**
 * PHP version 7.3
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <marku@opmantek.com>
 * @copyright 2014 Opmantek
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_4.2.0
 * @link      http://www.open-audit.org
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use CodeIgniter\Model;

/**
 * Base Object Orgs
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Orgs
 * @author   Mark Unwin <marku@opmantek.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Test extends Controller
{

    public function email()
    {
        $email = \Config\Services::email();

        $config = array();
        $config['protocol'] = 'smtp';
        $config['SMTPHost'] = 'smtp.gmail.com';
        $config['SMTPUser'] = 'mark.unwin@gmail.com';
        $config['SMTPPass'] = 'pxqlbbwyweewqdvr';
        $config['SMTPPort'] = 587;
        $config['SMTPCrypto'] = 'tls';

        $config['CRLF'] = "\r\n";
        $config['newline'] = "\r\n";
        $email->initialize($config);

        $email->setFrom('mark.unwin@gmail.com', 'Mark Unwin');
        $email->setTo('marku@opmantek.com');
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        $email->send();

        echo "<pre/>\n";
        echo $email->printDebugger();
    }

    /**
     * Collection of objects
     *
     * @access public
     * @return NULL
     */
    public function collection()
    {

        echo "Test Collection.";
    }

    /**
     * Read a single object
     *
     * @access public
     * @return NULL
     */
    public function read()
    {
        echo "Test Read.";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function update()
    {
        echo "update";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function delete()
    {
        echo "delete";
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function importForm()
    {
        echo "importform";
    }

    public function populateOrgs()
    {
        $this->orgsModel = new \App\Models\OrgsModel();
        $this->orgsModel->reset();
        $this->db = db_connect();
        $this->builder = $this->db->table('orgs');

        $data = new \stdClass();

        $data->name = "Research and Development Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Research Team #1";
        $data->description = 'example';
        $data->parent_id = 2;
        $this->builder->insert($data);

        $data->name = "Research Team #2";
        $data->description = 'example';
        $data->parent_id = 2;
        $this->builder->insert($data);

        $data->name = "Research Team #3";
        $data->description = 'example';
        $data->parent_id = 2;
        $this->builder->insert($data);

        $data->name = "Operations Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Application Administration";
        $data->description = 'example';
        $data->parent_id = 6;
        $this->builder->insert($data);

        $data->name = "Database Administration";
        $data->description = 'example';
        $data->parent_id = 6;
        $this->builder->insert($data);

        $data->name = "Support";
        $data->description = 'example';
        $data->parent_id = 6;
        $this->builder->insert($data);

        $data->name = "System Administration";
        $data->description = 'example';
        $data->parent_id = 6;
        $this->builder->insert($data);

        $data->name = "Web Administration";
        $data->description = 'example';
        $data->parent_id = 6;
        $this->builder->insert($data);

        $data->name = "Development Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Product Team #1";
        $data->description = 'example';
        $data->parent_id = 12;
        $this->builder->insert($data);

        $data->name = "Product Team #1 Application";
        $data->description = 'example';
        $data->parent_id = 13;
        $this->builder->insert($data);

        $data->name = "Product Team #1 Database";
        $data->description = 'example';
        $data->parent_id = 13;
        $this->builder->insert($data);

        $data->name = "Product Team #1 System";
        $data->description = 'example';
        $data->parent_id = 13;
        $this->builder->insert($data);

        $data->name = "Product Team #1 Web";
        $data->description = 'example';
        $data->parent_id = 13;
        $this->builder->insert($data);

        $data->name = "Product Team #2";
        $data->description = 'example';
        $data->parent_id = 12;
        $this->builder->insert($data);

        $data->name = "Product Team #2 Application";
        $data->description = 'example';
        $data->parent_id = 18;
        $this->builder->insert($data);

        $data->name = "Product Team #2 Database";
        $data->description = 'example';
        $data->parent_id = 18;
        $this->builder->insert($data);

        $data->name = "Product Team #2 System";
        $data->description = 'example';
        $data->parent_id = 18;
        $this->builder->insert($data);

        $data->name = "Product Team #2 Web";
        $data->description = 'example';
        $data->parent_id = 18;
        $this->builder->insert($data);

        $data->name = "Quality Management Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Compliance";
        $data->description = 'example';
        $data->parent_id = 23;
        $this->builder->insert($data);

        $data->name = "Testing";
        $data->description = 'example';
        $data->parent_id = 23;
        $this->builder->insert($data);

        $data->name = "Marketing Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Merchandising";
        $data->description = 'example';
        $data->parent_id = 26;
        $this->builder->insert($data);

        $data->name = "Public Relations";
        $data->description = 'example';
        $data->parent_id = 26;
        $this->builder->insert($data);

        $data->name = "SEO";
        $data->description = 'example';
        $data->parent_id = 26;
        $this->builder->insert($data);

        $data->name = "Sales Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Pre Sales";
        $data->description = 'example';
        $data->parent_id = 30;
        $this->builder->insert($data);

        $data->name = "Sales";
        $data->description = 'example';
        $data->parent_id = 30;
        $this->builder->insert($data);

        $data->name = "Sales Engineers";
        $data->description = 'example';
        $data->parent_id = 30;
        $this->builder->insert($data);

        $data->name = "Finance Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Investor Relations";
        $data->description = 'example';
        $data->parent_id = 34;
        $this->builder->insert($data);

        $data->name = "Auditor";
        $data->description = 'example';
        $data->parent_id = 34;
        $this->builder->insert($data);

        $data->name = "Accounts";
        $data->description = 'example';
        $data->parent_id = 34;
        $this->builder->insert($data);

        $data->name = "Administration Department";
        $data->description = 'example';
        $data->parent_id = 1;
        $this->builder->insert($data);

        $data->name = "Human Resources";
        $data->description = 'example';
        $data->parent_id = 38;
        $this->builder->insert($data);

        $data->name = "Payroll";
        $data->description = 'example';
        $data->parent_id = 38;
        $this->builder->insert($data);

        $data->name = "Legal";
        $data->description = 'example';
        $data->parent_id = 38;
        $this->builder->insert($data);

        return true;
    }


    public function populateDevices()
    {
        $start = microtime(true);
        $requested_device_count = 10;
        $octet_1 = 172;
        $octet_2 = 16;
        $octet_3 = 1;
        $octet_4 = 1;
        $devices = array();
        echo "<pre style=\"white-space: -moz-pre-wrap;\">\n";
        $db = db_connect();
        $builder = $db->table('devices');

        $sql = "SELECT ip FROM devices ORDER BY ip DESC LIMIT 1";
        $query = $db->query($sql);
        $ip = $query->getResult();

        if (!empty($ip[0])) {
            $ip = $this->ip_address_from_db($ip[0]->ip);
            echo "Existing IP, starting from: " . $ip . "\n";
            $ip = explode('.', $ip);
            $octet_1 = intval($ip[0]);
            $octet_2 = intval($ip[1]);
            $octet_3 = intval($ip[2]);
            $octet_4 = intval($ip[3]);
        }

        for ($i=0; $i < $requested_device_count; $i++) {
            $octet_4 += 1;
            if ($octet_4 > 250) {
                $octet_4 = 1;
                $octet_3 += 1;
            }
            if ($octet_3 > 250) {
                $octet_3 = 1;
                $octet_2 += 1;
            }

            $ip = $octet_1 . '.' . $octet_2 . '.' . $octet_3 . '.' . $octet_4;
            $type = '';

            switch ($octet_4) {
                case 1:
                    $device = $this->getRouter();
                    break;

                case 2:
                    $device = $this->getSwitch();
                    break;

                case 3:
                case 4:
                    $device = $this->getWap();
                    break;

                case 5:
                case 6:
                case 7:
                    $device = $this->getPrinter();
                    break;
            
                default:
                    break;
            }

            if ($octet_4 > 7 and $octet_4 < 19) {
                $newdevice = $this->getComputer('Linux');
            }

            if ($octet_4 > 18 and $octet_4 < 21) {
                $newdevice = $this->getComputer('ESXi');
            }

            if ($octet_4 > 20 and $octet_4 < 31) {
                $newdevice = $this->getComputer('Windows Server');
            }

            if ($octet_4 > 30 and $octet_4 < 241) {
                $newdevice = $this->getComputer('Windows Client');
            }

            if ($octet_4 > 240 and $octet_4 < 251) {
                $newdevice = $this->getComputer('MacOS');
            }

            if (empty($newdevice)) {
                echo "Device without attributes, ending. IP: $ip\n";
                exit;
            }

            $newdevice->id = null;
            $newdevice->org_id = $octet_3;
            $newdevice->serial = str_replace('.', '', $ip);
            $newdevice->name = substr($newdevice->type, 0, 1) . '-' . str_replace('.', '', $ip);
            $newdevice->hostname = $newdevice->name;
            $newdevice->dns_hostname = $newdevice->name;
            $newdevice->ip = $this->ip_address_to_db($ip);
            $newdevice->uuid = substr($newdevice->type, 0, 1) . '--' . str_replace('.', '', $ip);
            $newdevice->domain = 'open-audit.lan';
            $newdevice->dns_domain = 'open-audit.lan';
            $newdevice->fqdn = $newdevice->hostname . '.open-audit.lan';
            $newdevice->dns_fqdn = $newdevice->hostname . '.open-audit.lan';
            $newdevice->dbus_identifier = $ip;
            $builder->insert((array)$newdevice);
            #echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
            $newdevice->id = $db->insertID();
            #print_r($newdevice);
            #echo "\n\n";

            if ($newdevice->type === 'computer') {
                    $tables = array('bios' => 1, 'certificate' => 2, 'disk' => 4, 'log' => 3, 'ip' => 2, 'memory' => 1, 'monitor' => 1, 'motherboard' => 1, 'netstat' => 10, 'network' => 2, 'nmap' => 4, 'pagefile' => 1, 'partition' => 6, 'print_queue' => 1, 'processor' => 1, 'route' => 2, 'server' => 2, 'server_item' => 2, 'service' => 80, 'share' => 1, 'software' => 500, 'sound' => 1, 'task' => 10, 'user' => 10, 'user_group' => 20, 'variable' => 4, 'video' => 1);
                if ($newdevice->os_group === 'ESXi') {
                    $tables = array('bios' => 1, 'disk' => 4, 'log' => 3, 'memory' => 1, 'monitor' => 1, 'motherboard' => 1, 'netstat' => 10, 'network' => 2, 'nmap' => 4, 'pagefile' => 1, 'partition' => 6, 'print_queue' => 1, 'processor' => 1, 'route' => 2, 'server' => 2, 'server_item' => 2, 'service' => 100, 'share' => 1, 'software' => 1000, 'sound' => 1, 'task' => 10, 'user' => 10, 'user_group' => 20, 'variable' => 4, 'video' => 1, 'vm' => 6);
                }
                foreach ($tables as $table => $limit) {
                    $sql = "SELECT CONCAT(\"'\", column_name, \"', `\", column_name, \"`\") as `string` FROM information_schema.columns WHERE  table_name = '$table' AND table_schema = 'openaudit' AND column_name NOT IN ('id', 'system_id', 'first_seen', 'last_seen', 'current')";
                    $columns = '';
                    $query = $db->query($sql);
                    $result = $query->getResult();
                    foreach ($result as $item) {
                        $columns .= ',' . $item->string;
                    }
                    $columns = substr($columns, 1);
                    $match_columns = $this->matchColumns($table);
                    $match_columns_string = "`" . implode("`, '-', `", $match_columns) . "`";
                    $sql = "INSERT INTO `components` (SELECT NULL, " . $newdevice->id . ", 'y', NOW(), NOW(), '$table', " . $table . ".name, CONCAT($match_columns_string), null, JSON_OBJECT($columns) FROM `$table` ORDER BY RAND() LIMIT $limit)";
                    $query = $db->query($sql);
                    echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
                }
            }

            if ($newdevice->type === 'router' or $newdevice->type === 'switch' or $newdevice->type === 'wap') {
                $tables = array('network' => 2, 'nmap' => 4, 'route' => 2, 'module' => 5);
                foreach ($tables as $table => $limit) {
                    $sql = "SELECT CONCAT(\"'\", column_name, \"', `\", column_name, \"`\") as `string` FROM information_schema.columns WHERE  table_name = '$table' AND table_schema = 'openaudit' AND column_name NOT IN ('id', 'system_id', 'first_seen', 'last_seen', 'current')";
                    $columns = '';
                    $query = $db->query($sql);
                    # echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
                    $result = $query->getResult();
                    foreach ($result as $item) {
                        $columns .= ',' . $item->string;
                    }
                    $columns = substr($columns, 1);
                    $match_columns = $this->matchColumns($table);
                    $match_columns_string = "`" . implode("`, '-', `", $match_columns) . "`";
                    $sql = "INSERT INTO `components` (SELECT NULL, " . $newdevice->id . ", 'y',NOW(), NOW(), '$table', " . $table . ".name, CONCAT($match_columns_string), null, JSON_OBJECT($columns) FROM `$table` ORDER BY RAND() LIMIT $limit)";
                    $query = $db->query($sql);
                    # echo str_replace("\n", " ", (string)$db->getLastQuery()) . "\n\n";
                }
            }
        }
        echo $requested_device_count . " devices added in " . (microtime(true) - $start) . " seconds.";
        # To randomise the devices.org_id.
        # UPDATE devices SET org_id = FLOOR(1 + RAND() * (41 - 1 +1));
    }



    public function matchColumns($table)
    {
        $match_columns = array();
        if ($table === 'bios') {
                $match_columns = array('manufacturer', 'model', 'serial', 'smversion', 'version');
        }
        if ($table === 'certificate') {
                $match_columns = array('name', 'issuer', 'serial', 'valid_from_raw', 'valid_to_raw');
        }
        if ($table === 'disk') {
                $match_columns = array('model', 'serial', 'hard_drive_index', 'size');
        }
        if ($table === 'dns') {
                $match_columns = array('ip', 'name', 'fqdn');
        }
        if ($table === 'file') {
                $match_columns = array('full_name', 'hash', 'inode', 'last_changed');
        }
        if ($table === 'ip') {
                $match_columns = array('ip', 'mac', 'netmask');
        }
        if ($table === 'log') {
                $match_columns = array('name', 'file_name', 'overwrite');
        }
        if ($table === 'memory') {
                $match_columns = array('bank', 'size', 'serial');
        }
        if ($table === 'module') {
                $match_columns = array('description', 'module_index', 'serial');
        }
        if ($table === 'monitor') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table === 'motherboard') {
                $match_columns = array('model', 'manufacturer', 'serial');
        }
        if ($table === 'netstat') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table === 'network') {
                $match_columns = array('mac');
        }
        if ($table === 'nmap') {
                $match_columns = array('protocol', 'ip', 'port', 'program');
        }
        if ($table === 'optical') {
                $match_columns = array('model', 'mount_point');
        }
        if ($table === 'pagefile') {
                $match_columns = array('name', 'initial_size', 'max_size');
        }
        if ($table === 'partition') {
                // $match_columns = array('name', 'hard_drive_index', 'mount_point', 'size');
                $match_columns = array('serial', 'hard_drive_index', 'mount_point', 'size');
        }
        if ($table === 'policy') {
                $match_columns = array('type', 'name', 'value', 'guid');
        }
        if ($table === 'print_queue') {
                $match_columns = array('device');
        }
        if ($table === 'processor') {
                $match_columns = array('description');
        }
        if ($table === 'radio') {
                $match_columns = array('name');
        }
        if ($table === 'route') {
                $match_columns = array('destination', 'next_hop');
        }
        if ($table === 'san') {
                $match_columns = array('serial');
        }
        if ($table === 'scsi') {
                $match_columns = array('model', 'manufacturer', 'device');
        }
        if ($table === 'server') {
                $match_columns = array('name', 'type', 'full_name', 'version');
        }
        if ($table === 'server_item') {
                $match_columns = array('name', 'type', 'instance', 'port');
        }
        if ($table === 'service') {
                // $match_columns = array('description', 'name', 'executable');
                $match_columns = array('name', 'executable');
        }
        if ($table === 'share') {
                $match_columns = array('name', 'path');
        }
        if ($table === 'software') {
                $match_columns = array('name', 'version');
        }
        if ($table === 'software_key') {
                $match_columns = array('name', 'string', 'rel', 'edition');
        }
        if ($table === 'sound') {
                $match_columns = array('model', 'manufacturer');
        }
        if ($table === 'task') {
                $match_columns = array('name', 'task');
        }
        if ($table === 'usb') {
                $match_columns = array('device');
        }
        if ($table === 'user') {
                $match_columns = array('name', 'sid', 'keys');
        }
        if ($table === 'user_group') {
                $match_columns = array('name', 'sid');
        }
        if ($table === 'variable') {
                $match_columns = array('program', 'name', 'value');
        }
        if ($table === 'video') {
                $match_columns = array('model');
        }
        if ($table === 'vm') {
                $match_columns = array('uuid');
        }
        if ($table === 'windows') {
                $match_columns = array('service_pack', 'build_number');
        }
        return($match_columns);
    }

    private function getSystem($type)
    {

        switch ($type) {
            case 'router':
                $system = $this->getRouter();
                break;

            case 'switch':
                $system = $this->getSwitch();
                break;

            case 'wap':
                $system = $this->getWap();
                break;

            case 'printer':
                $system = $this->getPrinter();
                break;

            case 'computer':
                $system = $this->getComputer($system);
                break;
        
            default:
                $system = $this->getComputer($system);
                break;
        }

        return $system;
    }

    private function getRouter()
    {
        $sql = "| Cisco    | Cisco IOS | Cisco IOS 12.4(25f)                | 12.4(25f)    | Cisco Systems          | Cisco 1841                               | FHK11472788  |             |      0 |         |        97280 |               0 | 2000-01-01           | production | Production  |       |
| Cisco    | Cisco IOS | Cisco IOS version 12.2(33)SRE9     | 12.2(33)SRE9 | Cisco Systems          | Cisco 7206 VXR                           | 4279256517   |             |      0 |         |       147456 |               0 | 2000-01-01           | production | Production  |       |
| Cisco    | Cisco IOS | Cisco IOS version 12.2(33)SRE9     | 12.2(33)SRE9 | Cisco Systems          | Cisco 7206 VXR                           | 4279256517   |             |      0 |         |       147456 |               0 | 2000-01-01           | production | Development |       |
| Cisco    | Cisco IOS | Cisco IOS version 12.2(33)SRE9     | 12.2(33)SRE9 | Cisco Systems          | Cisco 7206 VXR                           | 4279256517   |             |      0 |         |       147456 |               0 | 2000-01-01           | production | Development |       |
| Cisco    | Cisco IOS | Cisco IOS version 12.2(33)SRE9     | 12.2(33)SRE9 | Cisco Systems          | Cisco 7206 VXR                           | 4279256517   |             |      0 |         |       147456 |               0 | 2000-01-01           | production | Production  |       |
| Cisco    | Cisco IOS | Cisco IOS version 12.2(33)SRE9     | 12.2(33)SRE9 | Cisco Systems          | Cisco 7206 VXR                           | 4279256517   |             |      0 |         |       147456 |               0 | 2000-01-01           | production | Production  |       |
| Cisco    | Cisco IOS | Cisco IOS version 12.2(33)SRE9     | 12.2(33)SRE9 | Cisco Systems          | Cisco 7206 VXR                           | 4279256517   |             |      0 |         |       147456 |               0 | 2000-01-01           | production | Production  |       |
| Cisco    | Cisco IOS | Cisco IOS version 12.2(33)SRE9     | 12.2(33)SRE9 | Cisco Systems          | Cisco 7206 VXR                           | 1239256123   |             |      0 |         |       147456 |               0 | 2000-01-01           | production | production  |       |
| JunOS    | JunOS     | JUNOS 19.3R1-S1                    | 19.3R1-S1    | Juniper Networks       | Juniper ACX5448 Internet Backbone Router | XJ0221100010 |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
| JunOS    | JunOS     | JUNOS 19.4R3.11                    | 19.4R3.11    | Juniper Networks       | Juniper JNP204 [MX204] Edge Router       | V4428        |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
| JunOS    | JunOS     | JUNOS 17.3R3.10                    | 17.3R3.10    | Juniper Networks       | Juniper MX 960                           | JN1265703AFA |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
| Linux    | EdgeOS    | EdgeOS v4.4.55.5377096.210212.1121 | 4.4.55       | Ubiquiti Networks Inc. | Unifi Security Gateway                   |              |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |";
        $devices = explode("\n", $sql);
        $rand = rand(0, count($devices)-1);
        $device = $devices[$rand];
        $system = $this->parse_sql($device);
        $system->type = 'router';
        return $system;
    }

    private function getWap()
    {
        $sql = "| Linux    |           |         |            | Ubiquiti Networks Inc. | UniFi AP-AC-Pro gen 2 | 123abc456def |             |            0 |               0 | 2000-01-01           | production | production  | server |
        | Linux    |           |         |            | Tp-link                | TL-WDR4300            |              |             |            0 |               0 | 2000-01-01           | production | production  | server |";
        $devices = explode("\n", $sql);
        $rand = rand(0, count($devices)-1);
        $device = $devices[$rand];
        $system = $this->parse_sql($device);
        $system->type = 'wap';
        return $system;
    }


    private function getPrinter()
    {
        $sql = "|          |           |         |            | Hewlett Packard     | Jet Direct Print Server          | VNB3J21234  |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
|          |           |         |            | Hewlett Packard     | Jet Direct Print Server          | PHBLLC8180  |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
|          |           |         |            | Hewlett Packard     | Jet Direct Print Server          | PHBHB50903  |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
|          |           |         |            | Oki                 | ES9455 MFP                       | K55200045   |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
|          |           |         |            | Ricoh Company, Ltd. | RICOH IM C3000                   | 3100R100627 |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
|          |           |         |            | Xerox               | Xerox B205 Multifunction Printer | 3439222297  |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |";
        $devices = explode("\n", $sql);
        $rand = rand(0, count($devices)-1);
        $device = $devices[$rand];
        $system = $this->parse_sql($device);
        $system->type = 'printer';
        return $system;
    }




    private function getSwitch()
    {
        $sql = "| Cisco    | Cisco IOS         | Cisco IOS 12.2(53)SE2    | 12.2(53)SE2 | Cisco Systems          | Cisco Catalyst 37xx Stack | CSG0747P02Q  |             |      0 |         |       131072 |               0 | 2000-01-01           | production | Development |       |
| Linux    |                   |                          |             | Ubiquiti Networks Inc. | UBNT EdgeSwitch 8-Port    | f09fc2c71324 |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
| Cisco    | Cisco Catalyst OS | Cisco Catalyst OS 16.9.5 | 16.9.5      | Cisco Systems          | C9300-48T                 | FCW2352C1FE  |             |      0 |         |      1418970 |               0 | 2000-01-01           | production | production  |       |
| Cisco    | Cisco IOS         | Cisco IOS 15.2(2)E5      | 15.2(2)E5   | Cisco Systems          | Cisco Catalyst 4900 M     | JAE171601C4  |             |      0 |         |      1048576 |               0 | 2000-01-01           | production | production  |       |
|          |                   |                          |             | Hewlett Packard        | ProCurve Switch 2524      | SG941NV02C   |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
|          |                   |                          |             | Juniper Networks       | Juniper EX 4200           | BQ0209255120 |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |
|          |                   |                          |             | Hewlett Packard        | ProCurve Switch 5406zl    | SG11DXT0CB   |             |      0 |         |            0 |               0 | 2000-01-01           | production | production  |       |";

        $devices = explode("\n", $sql);
        $rand = rand(0, count($devices)-1);
        $device = $devices[$rand];
        $system = $this->parse_sql($device);
        $system->type = 'switch';
        return $system;
    }

    private function getComputer($type)
    {
        # SELECT os_group, os_family, os_name, os_version, manufacturer, model, serial, form_factor, memory_count, processor_count, os_installation_date, status, environment, class FROM system WHERE os_name like 'esxi%';

        if ($type === 'Windows Client') {
            $sql = "| Windows  | Windows 10   | Microsoft Windows 10 Enterprise          | 10.0.19043 | Hewlett Packard | HP Pavilion Laptop 15-cs0x  | 15-cs0xxx          | Notebook            |     12582912 |               4 | 2021-03-02           | production | production  | laptop |
                    | Windows  | Windows 10   | Microsoft Windows 10 Home                | 10.0.19043 | LENOVO          | 80VV                        | PF0SBKTV           | Detachable          |      8388608 |               2 | 2020-10-29           | production | production  | laptop |
                    | Windows  | Windows 10   | Microsoft Windows 10 Pro                 | 10.0.19044 | LENOVO          | 80VV                        | PF0SBKTV           | Detachable          |      8388608 |               2 | 2020-10-29           | production | production  | desktop         |
                    | Windows  | Windows 10   | Microsoft Windows 10 Pro                 | 10.0.19044 | VMware, Inc.    | VMware Virtual Platform     | VMware-56 4d a3 2d | Virtual             |     16777216 |               2 | 2020-10-28           | production | Testing     | virtual desktop |
                    | Windows  | Windows 10   | Microsoft Windows 10 Pro                 | 10.0.17134 | LENOVO          | 20LD001YAU                  | R90RG1FK           | Convertible         |     16777216 |               4 | 2019-02-18           | production | production  | laptop |
                    | Windows  | Windows 11   | Microsoft Windows 11 Pro                 | 10.0.22000 | LENOVO          | 20TA00MHAU                  | PF3R512E           | Notebook            |      8388608 |               4 | 2022-06-21           | production | production  | desktop         |
                    | Windows  | Windows 7    | Microsoft Windows 7 Professional         | 6.1.7601   | Hewlett-Packard | HP Compaq 6000 Pro SFF PC   | SGH016TQQS         | Low Profile Desktop |      4198400 |               2 | 2017-04-20           | production | production  | virtual server |
                    | Windows  | Windows 7    | Microsoft Windows 7 Ultimate             | 6.1.7601   | Hewlett-Packard | HP Pavilion dv6 Notebook PC | CNF9212882         | Notebook            |      4194304 |               2 | 2015-06-18           | production | production  | laptop          |
                    | Windows  | Windows 7    | Microsoft Windows 7 Ultimate             | 6.1.7601   | VMware, Inc.    | VMware Virtual Platform     | VMware-56 4d 13 6d | Virtual             |      2097152 |               2 | 2015-05-29           | production | production  | virtual desktop |
                    | Windows  | Windows 7    | Microsoft Windows 7 Ultimate             | 6.1.7601   | VMware, Inc.    | VMware Virtual Platform     | VMware-56 4d 13 6d | Virtual             |      2097152 |               2 | 2015-05-29           | production | production  | virtual desltop |
                    | Windows  | Windows 7    | Microsoft Windows 7 Ultimate             | 6.1.7601   | Hewlett-Packard | HP Pavilion dv6 Notebook PC | CNF9212882         | Notebook            |      4194304 |               2 | 2015-06-18           | production | production  | laptop |";
        } else if ($type === 'Windows Server') {
            $sql = "| Windows  | Windows 2008 | Microsoft Windows Server 2008 Enterprise | 6.0.6001   | VMware, Inc.    | VMware Virtual Platform                 | VMware-56 4d 44 2e | Virtual     |     3145728 |               1 | 2013-06-03           | production | production  | virtual server |
                    | Windows  | Windows 2008 | Microsoft Windows Server 2008 R2 Standard            | 6.1.7601   | VMware, Inc.    | VMware Virtual Platform     | VMware-56 4d 3a 1e | Virtual     |     2097152 |               1 | 2015-12-01           | production | production  | virtual server |
                    | Windows  | Windows 2008 | Microsoft Windows Server 2008 R2 Standard            | 6.1.7601   | VMware, Inc.    | VMware Virtual Platform     | VMware-56 4d 3a 1e | Virtual     |     2097152 |               1 | 2015-12-01           | production | production  | virtual server |
                    | Windows  | Windows 2012 | Microsoft Windows Server 2012 R2 Standard Evaluation | 6.3.9600   | VMware, Inc.    | VMware Virtual Platform     | VMware-56 4d 7e 0d | Virtual     |     3145728 |               2 | 2014-07-29           | production | production  | virtual server |
                    | Windows  | Windows 2012 | Microsoft Windows Server 2012 R2 Standard Evaluation | 6.3.9600   | VMware, Inc.    | VMware Virtual Platform     | VMware-56 4d 7e 0d | Virtual     |     3145728 |               2 | 2014-07-29           | production | production  | virtual server |
                    | Windows  | Windows 2019 | Microsoft Windows Server 2019 Standard Evaluation    | 10.0.17763 | VMware, Inc.    | VMware7,1                   | VMware-56 4d 5b e8 | Virtual     |     4194304 |               2 | 2022-05-31           | production | production  | virtual server |";
        } else if ($type === 'Linux') {
            $sql = "| Linux    | Debian    | Debian GNU/Linux 9 (stretch)       | 9          | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d 29 ab 4b 2a 5c b8-58 46 70 af 36 bb dc 4c | Virtual     |      6291456 |               2 | 2020-07-11           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 9 (stretch)       | 9          | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d e1 57 36 d6 f8 14-3d 38 b7 5d 4b 4d 12 6b | Virtual     |      8388608 |               2 | 2020-07-11           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 9 (stretch)       | 9          | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d 29 0d b2 45 ba 86-79 52 d7 56 3d a6 a5 db | Virtual     |      6291456 |               2 | 2020-07-11           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 9 (stretch)       | 9          | Hewlett Packard         | ProLiant MicroServer    | 5C7128P0AS                                             | Tower       |      8388608 |               2 | 2020-07-11           | production | production  | server         |
                    | Linux    | CentOS    | CentOS release 6.10 (Final)        | 6.1        | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d f4 cf 8d c7 74 0c-06 28 84 4d 89 59 3e d4 | Virtual     |      8388608 |               2 | 2018-06-27           | production | Production  | virtual server |
                    | Linux    | CentOS    | CentOS release 6.8 (Final)         | 6.8        | VMware                  | VMware Virtual Platform | VMware-56 4d 12 70 64 66 3f 26-5a 0c ce a0 92 59 3a 6c | Virtual     |      1004136 |               1 | 2016-05-19           | production | production  | virtual server |
                    | Linux    | Ubuntu    | Ubuntu 14.04.4 LTS                 | 14.04      | Hewlett Packard         | ProLiant MicroServer    | 5C7232P20D                                             | Tower       |      8047780 |               2 | 2016-02-17           | production | production  | server         |
                    | Linux    | Ubuntu    | Ubuntu 16.04.2 LTS                 | 16.04      | innotek GmbH            | VirtualBox              |                                                        | Virtual     |      4046844 |               1 | 2017-02-08           | production | production  | virtual server |
                    | Linux    | CentOS    | CentOS release 5.11 (Final)        | 5.11       | innotek GmbH            | VirtualBox              |                                                        | Virtual     |      1026064 |               1 | 2014-09-20           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 7.8 (wheezy)      | 7.8        | VMware                  | VMware Virtual Platform | VMware-56 4d 4d 26 13 12 74 f3-81 6a 25 d3 91 0b e5 73 | Virtual     |      1013220 |               1 | 2014-12-24           | production | production  | virtual server |
                    | Linux    | EdgeOS    | EdgeOS v4.4.55.5377096.210212.1121 |            | Ubiquiti Networks Inc.  | Unifi Security Gateway  |                                                        |             |            0 |               0 | 2000-01-01           | production | production  |                |
                    | Linux    | Mariner   | Mariner Linux                      | 1.0        | innotek GmbH            | VirtualBox              |                                                        | Virtual     |      3898452 |               2 | 2021-09-28           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 9 (stretch)       | 9          | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d 77 0f ce f3 5c c2-06 93 ac 04 96 4f ae bd | Virtual     |      6291456 |               2 | 2020-07-11           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 11 (bullseye)     | 11         | Intel(R) Client Systems | NUC11PAHi3              | G6PA11200F10                                           | Mini Pc     |        16384 |               4 | 2021-12-12           | production | production  | server         |
                    | Linux    | Debian    | Debian GNU/Linux 10 (buster)       | 10         | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d 5f 8f a0 2d fe ba-83 08 7e 0e 94 5e a4 01 | Virtual     |     12582912 |               4 | 2022-03-19           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 10 (buster)       | 10         | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d 5d 6f 83 b6 ed 16-83 69 5f 1b 8f 95 cb f7 | Virtual     |     11534336 |               3 | 2022-03-19           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 10 (buster)       | 10         | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d c9 6a cf d2 4c bb-d7 f3 6e 37 52 a3 f7 18 | Virtual     |     11534336 |               3 | 2022-03-19           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 10 (buster)       | 10         | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d bd 9b 23 af 49 f8-c7 b4 bc 06 39 fd 99 62 | Virtual     |      8388608 |               2 | 2021-10-03           | production | production  | virtual server |
                    | Linux    | Debian    | Debian GNU/Linux 9 (stretch)       | 9          | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d 49 54 6a 21 54 89-1a b8 8f ea 63 a6 ea 6e | Virtual     |      8388608 |               2 | 2020-07-11           | production | production  | virtual server |
                    | Linux    | Ubuntu    | Ubuntu 20.04.4 LTS                 | 20.04      | VMware, Inc.            | VMware Virtual Platform | VMware-56 4d 13 b7 9a 11 9b 30-fe 85 66 e8 e5 00 8e 5d | Virtual     |      4194304 |               2 | 2022-02-17           | production | production  | virtual server |
                    | Linux    | Ubuntu    | Ubuntu 20.04.4 LTS                 | 20.04      | VMware, Inc.            | VMware7,1               | VMware-56 4d 2c 3b 96 76 a7 73-90 38 6b 92 07 c1 67 46 | Virtual     |      4194304 |               2 | 2022-02-17           | production | production  | virtual server |";
        } else if ($type === 'MacOS') {
            $sql = "| Apple    | Apple OSX | OSX 12.6.1 | 12.6.1     | Apple, Inc.  | MacBookPro12,1 | C02SQ2V2FVH4 | laptop      |     16777216 |               1 | 2022-05-17           | production | production  | laptop |
                    | Apple    | Apple OSX | OSX 12.4   | 12.4       | Apple, Inc.  | MacBookAir10,1 | FVFG90N8Q6LT | laptop      |     16777216 |               1 | 2021-11-19           | production | production  | laptop |";
        } else if ($type === 'ESXi') {
            $sql = "| VMware   | VMware ESXi | VMware ESXi 6.5.0 build-8294253 VMware, Inc. x86_64  | VMware ESXi 6.5.0 build-5969303 | Hewlett Packard     | VMware ESXi (6.5.0) | 5C7151P4N4             | Tower       |            0 |               1 | 2018-04-11           | production | production  | hypervisor |
                    | VMware   | VMware ESXi | VMware ESXi 6.5.0 build-5969303 VMware, Inc. x86_64  | VMware ESXi 6.5.0 build-5969303 | Intel               | VMware ESXi (6.5.0) | To be filled by O.E.M. | Desktop     |     33554432 |               1 | 2018-04-11           | production | production  | hypervisor |
                    | VMware   | VMware ESXi | VMware ESXi 7.0.2 build-17867351 VMware, Inc. x86_64 | VMware ESXi 6.5.0 build-5969303 | Gigabyte Technology | VMware ESXi (7.0.2) | Default string         | Desktop     |            0 |               1 | 2018-04-11           | production | production  | hypervisor |
                    | VMware   | VMware ESXi | Vmware ESXi 6.5.0                                    | VMware ESXi 6.5.0 build-5969303 | Gigabyte Technology | B85M-D3H            | To be filled by O.E.M. | Desktop     |   4294967295 |               1 | 2017-09-08           | production | production  | server     |";
        } else {
            return;
        }
        $devices = explode("\n", $sql);
        $rand = rand(0, count($devices)-1);
        $device = $devices[$rand];
        $system = $this->parse_sql($device);
        $system->type = 'computer';
        return $system;
    }

    private function parse_sql($device)
    {
        $system = new \stdClass();
        $attributes = explode('|', $device);
        $system->os_group = trim($attributes[1]);
        $system->os_family = trim($attributes[2]);
        $system->os_name = trim($attributes[3]);
        $system->os_version = trim($attributes[4]);
        $system->manufacturer = trim($attributes[5]);
        $system->model = trim($attributes[6]);
        $system->serial = trim($attributes[7]);
        $system->form_factor = trim($attributes[8]);
        $system->os_bit = 64;
        $system->os_arch = '64-bit';
        $system->memory_count = trim($attributes[9]);
        $system->processor_count = trim($attributes[10]);
        $system->os_installation_date = trim($attributes[11]);
        $system->status = trim($attributes[12]);
        $system->environment = trim($attributes[13]);
        $system->class = trim($attributes[14]);
        return $system;
    }

    private function ip_address_to_db($ip = '')
    {
        if ($ip != "") {
            if (stripos($ip, '.') !== false) {
                // this is an ip v4 address
                $myip = explode(".", $ip);
                $myip[0] = mb_substr("000".$myip[0], -3);
                $myip[1] = mb_substr("000".$myip[1], -3);
                $myip[2] = mb_substr("000".$myip[2], -3);
                $myip[3] = mb_substr("000".$myip[3], -3);
                $ip = $myip[0].".".$myip[1].".".$myip[2].".".$myip[3];
            }
            if (stripos($ip, ':') !== false) {
                // this is an ip v6 address
            }
        } else {
            $ip = "";
        }
        return $ip;
    }

    private function ip_address_from_db($ip = '')
    {
        if ($ip != "") {
            if (stripos($ip, '.') !== false) {
                // this is an ip v4 address
                $myip = explode(".", $ip);
                $myip[0] = ltrim($myip[0], "0");
                if ($myip[0] == "") {
                    $myip[0] = "0";
                }
                if (isset($myip[1])) {
                    $myip[1] = ltrim($myip[1], "0");
                }
                if (!isset($myip[1]) or $myip[1] == "") {
                    $myip[1] = "0";
                }
                if (isset($myip[2])) {
                    $myip[2] = ltrim($myip[2], "0");
                }
                if (!isset($myip[2]) or $myip[2] == "") {
                    $myip[2] = "0";
                }
                if (isset($myip[3])) {
                    $myip[3] = ltrim($myip[3], "0");
                }
                if (!isset($myip[3]) or $myip[3] == "") {
                    $myip[3] = "0";
                }
                $ip = $myip[0].".".$myip[1].".".$myip[2].".".$myip[3];
            }
            if (stripos($ip, ':') !== false) {
                // this is an ip v6 address
            }
        } else {
            $ip = "";
        }
        return $ip;
    }
}
