<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;
use FilesystemIterator;
use stdClass;
use Aws\Ec2\Ec2Client;
use Google\Auth\CredentialsLoader;
use Google\Auth\Middleware\AuthTokenMiddleware;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_6.0.2
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Cli
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Cli
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Cli extends Controller
{
    public function testBenchmarks()
    {
        helper('components');
        helper('device');
        helper('discoveries');
        helper('integrations_nmis');
        helper('mac_model');
        helper('network');
        helper('security');
        helper('ssg');
        helper('ssh');
        helper('utility');
        helper('wmi');

        $benchmarksModel = model('BenchmarksModel');
        $definitions = ssg_definitions();

        $db = db_connect();

        // $os_family = 'Debian';
        // $os_version = '12';
        // $os = $os_family . ' ' . $os_version;
        // $device_id = 7039;

        // $os_family = 'RedHat';
        // $os_version = '7';
        // $os = $os_family . ' ' . $os_version;
        // $device_id = 7043;

        // $os_family = 'RedHat';
        // $os_version = '8';
        // $os = $os_family . ' ' . $os_version;
        // $device_id = 6964;

        // $os_family = 'RedHat';
        // $os_version = '9';
        // $os = $os_family . ' ' . $os_version;
        // $device_id = 7040;

        // $os_family = 'SLES';
        // $os_version = '15';
        // $os = $os_family . ' ' . $os_version;
        // $device_id = 7038;

        // $os_family = 'Ubuntu';
        // $os_version = '20.04';
        // $os = $os_family . ' ' . $os_version;
        // $device_id = 7042;

        // $os_family = 'Ubuntu';
        // $os_version = '22.04';
        // $os = $os_family . ' ' . $os_version;
        // $device_id = 7037;

        if (empty($device_id)) {
            return;
        }

        $devices = '[' . $device_id . ']';

        log_message('debug', 'Deleting benchmark results.');
        $sql = "DELETE FROM benchmarks_result WHERE benchmark_id IN (SELECT id FROM benchmarks WHERE os = '$os')";
        $db->query($sql);
        log_message('debug', (string)$db->getLastQuery());

        log_message('debug', 'Deleting benchmarks.');
        $sql = "DELETE FROM benchmarks WHERE os = '$os'";
        $db->query($sql);
        log_message('debug', (string)$db->getLastQuery());

        log_message('debug', 'Inserting benchmarks.');
        foreach ($definitions as $definition) {
            if ($definition->os_family === $os_family and $definition->os_version === $os_version) {
                $sql = "INSERT INTO benchmarks VALUES (null, ?, 1, '', ?, ?, 'y', ?, '2000-01-01 00:00:00', 'Administrator', NOW())";
                $db->query($sql, [$definition->title, $os, $definition->title, $devices]);
                log_message('debug', (string)$db->getLastQuery());
            }
        }

        $sql = "SELECT * FROM benchmarks WHERE os = '$os'";
        $benchmarks = $db->query($sql)->getResult();

        foreach ($benchmarks as $benchmark) {
            $id = intval($benchmark->id);
            log_message('debug', 'Executing benchmark: ' . $benchmark->name);
            $sql = "UPDATE benchmarks SET last_run = NOW() WHERE id = ?";
            $db->query($sql, [$id]);
            $benchmarksModel->execute($id, $device_id);
            log_message('debug', 'Completed benchmark: ' . $benchmark->name);
        }
    }

    /**
     * Rotate the logs
     *
     * @access public
     * @return NULL
     */
    public function rotateLogs()
    {
        # Call from the CLI using      php index.php cronlogrotate

        $logPath = WRITEPATH . 'logs';
        log_message('info', 'Rotating logs in directory: ' . $logPath);
        $fileSysIt = new FilesystemIterator($logPath, FilesystemIterator::SKIP_DOTS);
        $count = 0;
        $keep = 10;
        if (iterator_count($fileSysIt) < $keep) {
            log_message('info', 'Number of Files less than number to keep - Nothing to unlink');
            return true;
        }
        $thefiles = array();
        foreach ($fileSysIt as $fileinfo) {
            $akey = $fileSysIt->getFileName();
            if ((strtolower($akey)) != 'index.html') {
                $thefiles[$akey] = $fileSysIt->getMTime();
            }
        }
        arsort($thefiles);
        foreach ($thefiles as $key => $value) {
            $logMessage = 'keep these key: ' . $key . ' value: ' . $value;
            if ($keep < $count) {
                $logMessage = 'unlink these key: ' . $key . ' value: ' . $value;
                $killme = $logPath . DIRECTORY_SEPARATOR . $key;
                if (!unlink($killme)) {
                    log_message('info', 'unable to unlink ' . $killme);
                }
            }
            log_message('info', $logMessage);
            $count++;
        }
    }

    public function executeTasks()
    {
        $config = new \Config\OpenAudit();
        $db = db_connect() or die("Cannot establish a database connection.");
        if (empty($config->enterprise_binary) or !$db->tableExists('enterprise')) {
            return;
        }

        // # Perform some directory permissions fixing
        if (!file_exists(ROOTPATH . 'writable/logs/log-' . date('Y-m-d') . '.log')) {
            // Create the log file and assign permissions
            $file = fopen(ROOTPATH . 'writable/logs/log-' . date('Y-m-d') . '.log', 'w');
            fclose($file);
            chmod(ROOTPATH . 'writable/logs/log-' . date('Y-m-d') . '.log', 0666);
        }

        // # Lang Files
        // chmod(ROOTPATH . 'app/Views/lang/cs.inc', 0666);
        // chmod(ROOTPATH . 'app/Views/lang/de.inc', 0666);
        // chmod(ROOTPATH . 'app/Views/lang/en.inc', 0666);
        // chmod(ROOTPATH . 'app/Views/lang/es.inc', 0666);
        // chmod(ROOTPATH . 'app/Views/lang/fr.inc', 0666);
        // chmod(ROOTPATH . 'app/Views/lang/pt-br.inc', 0666);
        // chmod(ROOTPATH . 'app/Views/lang/zh-tw.inc', 0666);

        // # Other Dir
        // chmod(ROOTPATH . 'other', 0777);

        // # Scripts Dir
        // chmod(ROOTPATH . 'other/scripts', 0777);

        // # Attachments Dir
        // chmod(ROOTPATH . 'app/Attachments', 0777);

        // # Uploads Dir
        // chmod(ROOTPATH . 'writable/uploads', 0777);

        // # Cache Dir
        // chmod(ROOTPATH . 'writable/cache', 0777);

        // # Logs Dir
        // chmod(ROOTPATH . 'writable/logs', 0777);

        // # Session Dir
        // chmod(ROOTPATH . 'writable/session', 0777);

        // # DebugBar Dir
        // chmod(ROOTPATH . 'writable/debugbar', 0777);

        // # Custom Images Dir
        // if (php_uname('s') === 'Linux') {
        //     chmod(ROOTPATH . 'public/custom_images', 0777);
        // }

        // # Custom Images Dir
        // if (php_uname('s') === 'Windows NT') {
        //     chmod(ROOTPATH . '../htdocs/open-audit/custom_images', 0777);
        // }

        $response = new stdClass();
        $response->meta = new stdClass();
        $response->meta->collection = 'tasks';
        $response->meta->action = 'execute';
        $response->meta->uuid = $config->uuid;
        // Insert the entry
        $sql = "INSERT INTO enterprise VALUES (null, ?, '', NOW(), '')";
        $db->query($sql, [json_encode($response)]);
        $id = $db->insertID();
        // Call the binary and wait for it's response
        if (php_uname('s') === 'Windows NT') {
            $command = "%comspec% /c start /b " . $config->enterprise_binary . " $id";
            $cwd = getcwd();
            chdir('C:\\xampp\\open-audit\\other');
            @exec($command, $output);
            pclose(popen($command, 'r'));
            chdir($cwd);
        } else {
            $command = $config->enterprise_binary . " $id";
            if (!empty($_SERVER['CI_ENVIRONMENT']) and $_SERVER['CI_ENVIRONMENT'] === 'development') {
                $command = $config->enterprise_binary . " --debug $id 2>&1";
                log_message('debug', $command);
            }
            @exec($command, $output);
        }
        if (!empty($output)) {
            log_message('error', 'Output: ' . json_encode($output));
        }
        // Delete the DB entry
        $sql = "DELETE FROM enterprise WHERE id = $id";
        $db->query($sql);
    }

    public function executeBenchmark($id)
    {
        $id = intval($id);
        $benchmarksModel = model('BenchmarksModel');
        $benchmarksModel->queue($id);
        $queueModel = model('QueueModel');
        $queueModel->start();
    }

    public function executeDiscovery($id)
    {
        $id = intval($id);
        helper('utility');
        helper('network');
        $discoveriesModel = model('DiscoveriesModel');
        $discoveriesModel->queue($id);
        $queueModel = model('QueueModel');
        $queueModel->start();
    }

    public function executeNews(?string $action = 'news')
    {
        $newsModel = model('App\Models\NewsModel');
        $newsModel->executeAll($action);
    }

    public function executeVulnerabilitiesReset()
    {
        $GLOBALS['vulnerabilitiesReset'] = true;
        $newsModel = model('App\Models\NewsModel');
        $newsModel->executeAll('vulnerabilities');
    }

    public function executeIntegration($id)
    {
        $id = intval($id);
        $integrationsModel = model('IntegrationsModel');
        $integrationsModel->queue(intval($id));
        $queueModel = model('App\Models\QueueModel');
        $queueModel->start();
    }

    public function executeCloud($id)
    {
        $id = intval($id);
        if (empty($id)) {
            log_message('error', 'A cloud execute request was received, but no cloud ID was present in the request.');
        }

        $cloudsModel = model('CloudsModel');
        $devicesModel = model('DevicesModel');
        $discoveriesModel = model('DiscoveriesModel');
        $locationsModel = model('LocationsModel');
        $networksModel = model('NetworksModel');
        $orgsModel = model('OrgsModel');

        $config = new \Config\OpenAudit();

        helper('device');

        $pid = getmypid();

        // Retrieve the cloud details
        $db = db_connect() or die("Cannot establish a database connection.");
        $sql = "SELECT * FROM clouds WHERE id = ?";
        $result = $db->query($sql, [$id])->getResult();
        if (!empty($result[0])) {
            $cloud = $result[0];
        }
        if (!empty($cloud->options)) {
            $cloud->options = json_decode($cloud->options);
        }

        // Get all the Org children - an array of integers suitable for IN() in SQL
        $org_children = $orgsModel->getDescendants(intval($cloud->org_id));
        $org_children[] = $cloud->org_id;

        // Delete any existing logs
        $sql = "DELETE FROM cloud_log WHERE cloud_id = " . $id;
        $result = $db->query($sql);

        // Get the locations, networks and devices
        if (!empty($cloud->type)) {
            switch ($cloud->type) {
                case 'amazon':
                    $details = $this->amazon($cloud);
                    break;

                case 'google':
                    $details = $this->google($cloud);
                    break;

                case 'microsoft':
                    $details = $this->microsoft($cloud);
                    break;

                default:
                    // code...
                    break;
            }
        }

        // Empty rule to defer to global config
        $match_rules = json_decode('{"match_dbus":"","match_fqdn":"","match_dns_fqdn":"","match_dns_hostname":"","match_hostname":"","match_hostname_dbus":"","match_hostname_serial":"","match_hostname_uuid":"","match_ip":"","match_ip_no_data":"","match_mac":"","match_mac_vmware":"","match_serial":"","match_serial_type":"","match_sysname":"","match_sysname_serial":"","match_uuid":""}');

        // Special matching rules for AWS
        if ($cloud->type === 'amazon') {
            // $cloudsModel->log($id, 'Setting AWS match rules.', 'info', 0);
            // $sql = "UPDATE configuration SET value = 'y' WHERE name = 'match_mac'";
            // $db->query($sql);
            // $sql = "UPDATE configuration SET value = 'y' WHERE name = 'match_ip'";
            // $db->query($sql);
            $match_rules = json_decode('{"match_dbus":"","match_fqdn":"","match_dns_fqdn":"","match_dns_hostname":"","match_hostname":"","match_hostname_dbus":"","match_hostname_serial":"","match_hostname_uuid":"","match_ip":"y","match_ip_no_data":"","match_mac":"y","match_mac_vmware":"","match_serial":"","match_serial_type":"","match_sysname":"","match_sysname_serial":"","match_uuid":""}');
        }
        if ($cloud->type === 'google') {
            $match_rules = json_decode('{"match_dbus":"","match_fqdn":"","match_dns_fqdn":"","match_dns_hostname":"","match_hostname":"y","match_hostname_dbus":"","match_hostname_serial":"","match_hostname_uuid":"","match_ip":"","match_ip_no_data":"","match_mac":"","match_mac_vmware":"","match_serial":"","match_serial_type":"","match_sysname":"","match_sysname_serial":"","match_uuid":""}');
        }

        $sql = "SELECT * FROM locations WHERE type = 'Cloud' and `cloud_id` = ? AND `org_id` IN (" . implode(',', $org_children) . ")";
        $locations = $db->query($sql, [$id])->getResult();
        log_message('debug', (string)$db->getLastQuery());
        $cloudsModel->log($id, count($locations) . ' cloud locations retrieved from Open-AudIT.', 'info', 0);
        $cloudsModel->log($id, count($details->locations) . ' locations retrieved from ' . ucfirst($cloud->type) . '.', 'info', 0);

        // Locations
        $count = 0;
        if (count($details->locations) > 0) {
            foreach ($details->locations as $cloud_location) {
                if (!empty($cloud_location->attributes->options) and !is_string($cloud_location->attributes->options)) {
                    $cloud_location->attributes->options = json_encode($cloud_location->attributes->options);
                }
                $cloud_location->edited_date = $config->timestamp;
                $insert = true;
                if (count($locations) > 0) {
                    foreach ($locations as $oa_location) {
                        if ($cloud_location->attributes->external_ident === $oa_location->external_ident) {
                            $insert = false;
                            $message = 'Location named ' . $cloud_location->attributes->name . ' with an external_ident of ' . $cloud_location->attributes->external_ident . ' exists, not creating.';
                            log_message('debug', $message);
                            $cloudsModel->log($id, $message, 'info', 0);
                        }
                    }
                    if ($insert) {
                        $location_id = $locationsModel->create($cloud_location->attributes);
                        if (empty($location_id)) {
                            $message = 'Could not create location named ' . $cloud_location->attributes->name . ' for cloud ' . $cloud->name;
                            log_message('error', $message);
                            $cloudsModel->log($id, $message, 'error', 0);
                        } else {
                            $message = 'Location named ' . $cloud_location->attributes->name . ' created.';
                            log_message('debug', $message);
                            $cloudsModel->log($id, $message, 'info', 0);
                            $count++;
                        }
                    }
                } else {
                    $location_id = $locationsModel->create($cloud_location->attributes);
                    if (empty($location_id)) {
                        $message = 'Could not create location named ' . $cloud_location->attributes->name . ' for cloud ' . $cloud->name;
                        log_message('error', $message);
                        $cloudsModel->log($id, $message, 'error', 0);
                    } else {
                            $message = 'Location with name ' . $cloud_location->attributes->name . ' was created.';
                            log_message('debug', $message);
                            $cloudsModel->log($id, $message, 'info', 0);
                        $count++;
                    }
                }
            }
        }
        $cloudsModel->log($id, $count . ' new locations derived from ' . ucfirst($cloud->type) . ' information.', 'info', 0);

        // Get our updated location list
        $sql = "SELECT * FROM locations WHERE type = 'Cloud' and `cloud_id` = ? AND `org_id` IN (" . implode(',', $org_children) . ")";
        $locations = $db->query($sql, [$id])->getResult();
        foreach ($locations as $location) {
            $location->id = intval($location->id);
            $location->cloud_id = intval($location->cloud_id);
            $location->org_id = intval($location->org_id);
        }

        // Networks
        $sql = "SELECT * FROM networks WHERE type = 'Cloud' and `cloud_id` = ? AND `org_id` IN (" . implode(',', $org_children) . ")";
        $networks = $db->query($sql, [$id])->getResult();
        $cloudsModel->log($id, count($networks) . ' cloud networks retrieved from Open-AudIT.', 'info', 0);
        $cloudsModel->log($id, count($details->networks) . ' networks retrieved from ' . ucfirst($cloud->type) . '.', 'info', 0);

        $count = 0;
        if (count($details->networks) > 0) {
            foreach ($details->networks as $cloud_network) {
                $insert = true;
                if (count($networks) > 0) {
                    foreach ($networks as $oa_network) {
                        if (intval($cloud_network->attributes->external_ident) === intval($oa_network->external_ident)) {
                            $insert = false;
                            $message = 'Network named ' . $cloud_network->attributes->name . ' with an external_ident of ' . $cloud_network->attributes->external_ident . ' exists, not creating.';
                            log_message('debug', $message);
                            $cloudsModel->log($id, $message, 'info', 0);
                        }
                    }
                    if ($insert) {
                        $network_id = $networksModel->create($cloud_network->attributes);
                        if (empty($network_id)) {
                            $message = 'Could not create network named ' . $cloud_network->attributes->name . ' for cloud ' . $cloud->name;
                            log_message('error', $message);
                            $cloudsModel->log($id, $message, 'error', 0);
                        } else {
                            $message = 'Network named ' . $cloud_network->attributes->name . ' created.';
                            log_message('debug', $message);
                            $cloudsModel->log($id, $message, 'info', 0);
                            $count++;
                        }
                    }
                } else {
                    $network_id = $networksModel->create($cloud_network->attributes);
                    if (empty($network_id)) {
                        $message = 'Could not create network with name ' . $cloud_network->attributes->name . ' for cloud ' . $cloud->name;
                        log_message('error', $message);
                        $cloudsModel->log($id, $message, 'error', 0);
                    } else {
                        $message = 'Network with name ' . $cloud_network->attributes->name . ' created.';
                        log_message('debug', $message);
                        $cloudsModel->log($id, $message, 'info', 0);
                        $count++;
                    }
                }
            }
        }
        $cloudsModel->log($id, $count . ' new networks derived from ' . ucfirst($cloud->type) . ' information.', 'info', 0);

        // Insert a discovery if required
        $sql = 'SELECT * FROM discoveries WHERE cloud_id = ?';
        $discoveries = $db->query($sql, [$id])->getResult();
        if (empty($discoveries[0]->id)) {
            $discovery = new stdClass();
            $discovery->type = 'discoveries';
            $discovery->attributes = new stdClass();
            $discovery->attributes->name = 'Discovery for ' . $cloud->name;
            $discovery->attributes->description = $cloud->type . ' discovery.';
            $discovery->attributes->org_id = $cloud->org_id;
            $discovery->attributes->type = 'cloud';
            $discovery->attributes->cloud_id = $cloud->id;
            $discovery->attributes->cloud_name = $cloud->name;
            $discovery->attributes->scan_options = '';
            $discovery->attributes->match_options = json_encode($match_rules);
            $discovery->attributes->command_options = '';
            $discovery->attributes->edited_by = '';
            $discovery_id = $discoveriesModel->create($data);
            unset($discovery);
            if (empty($discovery_id)) {
                $message = 'Could not create discovery entry for cloud ' . $cloud->name;
                log_message('error', $message);
                $cloudsModel->log($id, $message, 'error', 0);
            }
        }
        $sql = "SELECT id FROM discoveries WHERE cloud_id = ?";
        $discovery_id = @$db->query($sql, [$id])->getResult()[0]->id;
        if (empty($discovery_id)) {
            $message = 'Could not retrieve discovery entry for cloud ' . $cloud->name;
            log_message('error', $message);
            $cloudsModel->log($id, $message, 'error', 0);
        } else {
            $discovery_id = intval($discovery_id);
        }

        // Remove any logs
        $sql = "DELETE FROM `discovery_log` WHERE discovery_id = ?";
        $db->query($sql, [$discovery_id]);

        // Environment
        $sql = "SELECT * FROM `attributes` WHERE `resource` = 'devices' AND `type` = 'environment'";
        $env = $db->query($sql)->getResult();

        // Status
        $sql = "SELECT * FROM `attributes` WHERE `resource` = 'devices' AND `type` = 'status'";
        $st = $db->query($sql)->getResult();

        // Devices
        $device_count = 0;
        if (!empty($details->devices)) {
            $device_count = count($details->devices);
        }
        $cloudsModel->log($id, count($details->devices) . ' devices retrieved from ' . $cloud->type, 'info', 0);

        $execute_discovery = true;
        if ($cloud->options->ssh === 'n' and $cloud->options->wmi === 'n' and $cloud->options->snmp === 'n') {
            $execute_discovery = false;
            $cloudsModel->log($id, 'Not executing discovery as SSH, WMI and SNMP are all set to false.', 'info', 0);
        }

        $responding_ip_count = 0;
        if (!empty($device_count)) {
            foreach ($details->devices as $device) {
                $cloudsModel->log($id, 'Processing device ' . $device->attributes->hostname . ' at IP ' . $device->attributes->ip, 'info', 0);
                // Check if we have an existin attribute for environment and if not, create one
                if (!empty($device->attributes->environment)) {
                    $insert = true;
                    foreach ($env as $en) {
                        if ($en->value === $device->attributes->environment) {
                            $insert = false;
                        }
                    }
                    if ($insert) {
                        // Insert the new environment as an attribute
                        $sql = "INSERT INTO `attributes` VALUES (null, ?, 'devices', 'environment', ?, ?, 'system', NOW())";
                        $db->query($sql, [$device->attributes->org_id, ucfirst($device->attributes->environment), $device->attributes->environment]);
                        // Reload our attributes for next check (to include this just added attribute)
                        $sql = "SELECT id FROM `attributes` WHERE `resource` = 'devices' AND `type` = 'environment' and `value` = ?";
                        $env = $db->query($sql, [$device->attributes->environment])->getResult();

                    }
                }
                foreach ($locations as $location) {
                    if ($location->name === $device->attributes->{'locations.name'}) {
                        $device->attributes->location_id = $location->id;
                        $device->attributes->location_name = $location->name;
                        $device->location_id = intval($location->id);
                    }
                }
                if (!empty($discovery_id)) {
                    $device->attributes->discovery_id = $discovery_id;
                }
                $device->attributes->last_seen = $config->timestamp;
                $device->attributes->last_seen_by = 'cloud';
                $device->attributes->type = 'computer';
                $device->attributes->instance_tags = json_encode($device->attributes->instance_tags);
                $device->attributes->instance_options = json_encode($device->attributes->instance_options);
                $device_id = deviceMatch($device->attributes, 0, $match_rules);
                if (empty($device_id)) {
                    $device_id = $devicesModel->create($device->attributes);
                } else {
                    $device->attributes->id = intval($device_id);
                    $devicesModel->update($device_id, $device->attributes);
                }
                if (!empty($device->attributes->ip) and $device->attributes->instance_state === 'running' and $execute_discovery) {
                    // Discovery
                    $cloudsModel->log($id, "Inserting " . $device->attributes->hostname . " into discovery queue to be processed.", 'info', 0);
                    $nmap_ports = '';
                    $ssh_status = 'false';
                    $wmi_status = 'false';
                    $snmp_status = 'false';
                    if (!empty($cloud->options->ssh) and $cloud->options->ssh === 'y') {
                        $nmap_ports = '22/tcp/ssh';
                        $ssh_status = 'true';
                    }
                    if (!empty($cloud->options->wmi) and $cloud->options->wmi === 'y') {
                        $wmi_status = 'true';
                        if ($nmap_ports !== '') {
                            $nmap_ports = $nmap_ports . ',135/tcp/wmi';
                        } else {
                            $nmap_ports = '135/tcp/wmi';
                        }
                    }
                    if (!empty($cloud->options->snmp) and $cloud->options->snmp === 'y') {
                        $snmp_status = 'true';
                        if ($nmap_ports !== '') {
                            $nmap_ports = $nmap_ports . ',161/udp/snmp';
                        } else {
                            $nmap_ports = '161/udp/snmp';
                        }
                    }
                    // Create a scan result without actually port scanning the device
                    $scan = new stdClass();
                    $scan->ip = ip_address_from_db($device->attributes->ip);
                    $scan->discovery_id = $discovery_id;

                    $scan->timestamp = $config->timestamp;
                    $scan->host_is_up = 'true';
                    $scan->status = 'open';
                    $scan->nmap_ports = $nmap_ports;
                    $scan->ssh_status = $ssh_status;
                    $scan->snmp_status = $snmp_status;
                    $scan->wmi_status = $wmi_status;
                    $cloudsModel->log($id, json_encode($scan), 'info', 0);

                    $sql = "INSERT INTO queue VALUES (null, '', 'ip_audit', 1, 0, 'queued', ?, NOW(), '2000-01-01 00:00:00')";
                    $db->query($sql, [json_encode($scan)]);
                    // Add the corresponding discovery log
                    $message = 'IP ' . $scan->ip . ' responding, adding to device list.';
                    $sql = "INSERT INTO discovery_log VALUES (null, ?, ?, NOW(), 6, 'info', ?, ?, 'OaeController', 'clouds_execute', ?, '', 'notice', 0, '')";
                    $db->query($sql, [$discovery_id, $device_id, $pid, $scan->ip, $message]);
                    $responding_ip_count = $responding_ip_count + 1;
                }
            }
        }
        if (!empty($device_count)) {
            $sql = "UPDATE discoveries SET status = 'running', ip_all_count = ?, ip_responding_count = ?, ip_scanned_count = ?, ip_discovered_count = 0, ip_audited_count = 0 WHERE id = ?";
            $db->query($sql, [$device_count, $responding_ip_count, $responding_ip_count, $discovery_id]);
        }
        # Start the queue processing
        $cloudsModel->log($id, 'Starting queue processing.', 'info', 0);

        if (php_uname('s') === 'Windows NT') {
            $command = "%comspec% /c start /b c:\\xampp\\php\\php.exe " . FCPATH . "index.php queue start";
            log_message('debug', $command);
            pclose(popen($command, 'r'));
        } elseif (php_uname('s') === 'Darwin') {
            $command = 'php ' . FCPATH . 'index.php queue start > /dev/null 2>&1 &';
            log_message('debug', $command);
            @exec($command);
        } else {
            $command = 'nohup php ' . FCPATH . 'index.php queue start > /dev/null 2>&1 &';
            log_message('debug', $command);
            @exec($command);
        }

        $sql = 'UPDATE `clouds` SET `status` = "completed" WHERE id = ?';
        $db->query($sql, [$id]);

        $cloudsModel->log($id, 'Cloud auditing completed.', 'info', 0);
    }

    public function amazon($cloud)
    {
        if (empty($cloud)) {
            log_message('error', 'A request for the Amazon API was received, but no cloud data was present in the request.');
            $this->response->setStatusCode(400);
            return;
        }

        helper('security');
        helper('network');
        model('networks');
        $networksModel = model('NetworksModel');
        $networks = $networksModel->listAll();

        $db = db_connect();
        $device_fields = $db->getFieldNames('devices');
        $network_fields = $db->getFieldNames('networks');

        try {
            $cloud->credentials = json_decode(simpleDecrypt($cloud->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
            exit(1);
        }

        $response = new stdClass();
        $projects = array();
        $projects[0] = new stdClass();
        $projects[0]->devices = array();
        $projects[0]->networks = array();
        $projects[0]->locations = array();

        $client = new Ec2Client([
            'region'      => 'us-west-1',
            'credentials' =>  [
                'key'    => $cloud->credentials->key,
                'secret' => $cloud->credentials->secret_key
            ]
        ]);

        try {
            $result = $client->describeAvailabilityZones();
        } catch (\Aws\Ec2\Exception\Ec2Exception $e) {
            log_message('warning', json_encode($e));
            return;
        }
        $zones = $result['AvailabilityZones'];

        try {
            $result = $client->describeRegions();
        } catch (\Aws\Ec2\Exception\Ec2Exception $e) {
            log_message('warning', json_encode($e));
            return;
        }

        foreach ($result['Regions'] as $each) {
            $item = new stdClass();
            $item->type = 'locations';
            $item->attributes = new stdClass();
            $item->attributes->name = $each['RegionName'];
            $item->attributes->type = 'Cloud';
            $item->attributes->description = $each['Endpoint'];
            $item->attributes->external_ident = $each['Endpoint'];
            $item->attributes->org_id = $cloud->org_id;
            $item->attributes->address = 'Amazon';
            $item->attributes->region = $each['RegionName'];
            $item->attributes->cloud_id = $cloud->id;
            $item->attributes->options = $each;
            $item->attributes->city = '';
            $item->attributes->latitude = '';
            $item->attributes->longitude = '';
            if ($each['RegionName'] === 'us-east-1') {
                $item->attributes->city = 'Virginia';
                $item->attributes->latitude = '38.13';
                $item->attributes->longitude = '-78.45';
            }
            if ($each['RegionName'] === 'us-east-2') {
                $item->attributes->city = 'Ohio';
                $item->attributes->latitude = '39.96';
                $item->attributes->longitude = '-83';
            }
            if ($each['RegionName'] === 'us-west-1') {
                $item->attributes->city = 'California';
                $item->attributes->latitude = '37.35';
                $item->attributes->longitude = '-121.96';
            }
            if ($each['RegionName'] === 'us-west-2') {
                $item->attributes->city = 'Oregon';
                $item->attributes->latitude = '46.15';
                $item->attributes->longitude = '-123.88';
            }
            if ($each['RegionName'] === 'eu-west-1') {
                $item->attributes->city = 'Ireland';
                $item->attributes->latitude = '53';
                $item->attributes->longitude = '-8';
            }
            if ($each['RegionName'] === 'eu-west-2') {
                $item->attributes->city = 'London';
                $item->attributes->latitude = '51';
                $item->attributes->longitude = '-0.1';
            }
            if ($each['RegionName'] === 'eu-west-3') {
                $item->attributes->city = 'Paris';
                $item->attributes->latitude = '48.86';
                $item->attributes->longitude = '2.35';
            }
            if ($each['RegionName'] === 'eu-central-1') {
                $item->attributes->city = 'Frankfurt';
                $item->attributes->latitude = '50';
                $item->attributes->longitude = '8';
            }
            if ($each['RegionName'] === 'sa-east-1') {
                $item->attributes->city = 'Sao Paulo';
                $item->attributes->latitude = '-23.34';
                $item->attributes->longitude = '-46.38';
            }
            if ($each['RegionName'] === 'ap-southeast-1') {
                $item->attributes->city = 'Singapore';
                $item->attributes->latitude = '1.37';
                $item->attributes->longitude = '103.8';
            }
            if ($each['RegionName'] === 'ap-southeast-2') {
                $item->attributes->city = 'Sydney';
                $item->attributes->latitude = '-33.86';
                $item->attributes->longitude = '151.2';
            }
            if ($each['RegionName'] === 'ap-northeast-1') {
                $item->attributes->city = 'Tokyo';
                $item->attributes->latitude = '35.41';
                $item->attributes->longitude = '139.42';
            }
            if ($each['RegionName'] === 'ap-northeast-2') {
                $item->attributes->city = 'Seoul';
                $item->attributes->latitude = '37.56';
                $item->attributes->longitude = '126.98';
            }
            if ($each['RegionName'] === 'ap-south-1') {
                $item->attributes->city = 'Mumbai';
                $item->attributes->latitude = '19.08';
                $item->attributes->longitude = '72.88';
            }
            if ($each['RegionName'] === 'ca-central-1') {
                $item->attributes->city = 'Canada Central';
                $item->attributes->latitude = '45.5';
                $item->attributes->longitude = '-73.6';
            }
            $projects[0]->locations[] = $item;
            unset($item);
        }


        $result = $client->describeSubnets();
        foreach ($result['Subnets'] as $each) {
            $item = new stdClass();
            $item->type = 'networks';
            $item->attributes = new stdClass();
            $item->attributes->name = $each['CidrBlock'];
            if (!empty($each['Tags']) and is_array($each['Tags'])) {
                foreach ($each['Tags'] as $tag) {
                    if (in_array(strtolower($tag['Key']), $network_fields)) {
                        $item->attributes->{strtolower($tag['Key'])} = $tag['Value'];
                    }
                }
            }
            $item->attributes->network = $each['CidrBlock'];
            $item->attributes->org_id = $cloud->org_id;
            $item->attributes->type = 'Cloud Network';
            $item->attributes->description = 'AWS Network';
            $item->attributes->external_ident = $each['SubnetId'];
            $item->attributes->cloud_id = $cloud->id;
            $item->attributes->options = $each;
            $item->attributes->{'locations.name'} = '';
            foreach ($zones as $zone) {
                if ($each['AvailabilityZoneId'] === $zone['ZoneId']) {
                    $item->attributes->{'locations.name'} = $zone['RegionName'];
                }
            }
            $projects[0]->networks[] = $item;
        }

        foreach ($projects[0]->locations as $region) {
            log_message('debug', 'RegionAttributesName: ' . $region->attributes->name);
            unset($result);
            unset($client);
            $client = new Ec2Client([
                'region'      => $region->attributes->name,
                'credentials' =>  [
                    'key'    => $cloud->credentials->key,
                    'secret' => $cloud->credentials->secret_key
                ]
            ]);
            $result = $client->describeInstances();
            if (!empty($result['Reservations'])) {
                foreach ($result['Reservations'] as $reservation) {
                    if (!empty($reservation['Instances'])) {
                        foreach ($reservation['Instances'] as $each) {
                            $item = new stdClass();
                            $item->type = 'devices';
                            $item->attributes = new stdClass();
                            $item->attributes->hostname = $each['PrivateDnsName'];
                            foreach ($each['Tags'] as $tag) {
                                if (in_array(strtolower($tag['Key']), $device_fields)) {
                                    $item->attributes->{strtolower($tag['Key'])} = $tag['Value'];
                                }
                            }
                            $item->attributes->org_id = $cloud->org_id;
                            $item->attributes->cloud_id = $cloud->id;
                            $item->attributes->type = 'computer';
                            $item->attributes->last_seen_by = 'cloud';
                            $item->attributes->form_factor = 'Virtual';
                            $item->attributes->status = 'production';
                            if (!empty($item->attributes->environment)) {
                                $item->attributes->environment = strtolower($item->attributes->environment);
                            } else {
                                $item->attributes->environment = 'production';
                            }
                            $item->attributes->class = 'virtual server';

                            $item->attributes->ip = (!empty($each['PublicIpAddress'])) ? $each['PublicIpAddress'] : '';
                            if (empty($item->attributes->ip) and !empty($each['PrivateIpAddress'])) {
                                $item->attributes->ip = $each['PrivateIpAddress'];
                            }
                            $item->attributes->instance_provider = 'Amazon AWS';
                            $item->attributes->instance_type = $each['InstanceType'];
                            $item->attributes->instance_ident = $each['InstanceId'];
                            $item->attributes->instance_state = $each['State']['Name'];
                            $item->attributes->instance_tags = $each['Tags'];
                            $item->attributes->instance_reservation_ident = $reservation['ReservationId'];
                            $item->attributes->fqdn = (!empty($each['PrivateDnsName'])) ? $each['PrivateDnsName'] : '';
                            if (empty($item->attributes->fqdn) and !empty($each['PublicDnsName'])) {
                                $item->attributes->fqdn = $each['PublicDnsName'];
                            }
                            $item->attributes->{'locations.name'} = (!empty($region->{'attributes'}->{'name'})) ? $region->{'attributes'}->{'name'} : '';
                            if ($item->attributes->{'locations.name'} === '') {
                                foreach ($zones as $zone) {
                                    if ($each['Placement']['AvailabilityZone'] === $zone['ZoneName']) {
                                        $item->attributes->{'locations.name'} = $zone['RegionName'];
                                    }
                                }
                            }
                            $item->attributes->manufacturer = $each['Hypervisor'];
                            if ($item->attributes->manufacturer === 'xen') {
                                $item->attributes->model = 'HVM domU';
                                $item->attributes->manufacturer = 'Xen';
                            }
                            $item->attributes->os_bit = 32;
                            if ($each['Architecture'] === 'x86_64') {
                                $item->attributes->os_bit = 64;
                            }
                            $item->attributes->processor_count = 0;
                            if ($each['CpuOptions']['CoreCount'] and $each['CpuOptions']['ThreadsPerCore']) {
                                $item->attributes->processor_count = intval($each['CpuOptions']['CoreCount'] * $each['CpuOptions']['ThreadsPerCore']);
                            }
                            if (!empty($each['PlatformDetails'])) {
                                if (stripos($each['PlatformDetails'], 'Linux') !== false) {
                                    $item->attributes->os_group = 'Linux';
                                }
                                if (stripos($each['PlatformDetails'], 'Windows') !== false) {
                                    $item->attributes->os_group = 'Windows';
                                }
                            }
                            $item->attributes->instance_options = $each;
                            # The public ip details - we don't store this because the VMs have no idea about their public IP.
                            # Hence audit script after API would generate lots of change logs.
                            $item->ip = array();
                            foreach ($each['NetworkInterfaces'] as $interface) {
                                # the private IP details
                                $private_ip = new stdClass();
                                $private_ip->mac = $interface['MacAddress'];
                                $private_ip->net_index = $interface['NetworkInterfaceId'];
                                $private_ip->ip = $interface['PrivateIpAddress'];
                                $private_ip->netmask = '';
                                $private_ip->version = 4;
                                foreach ($networks as $network) {
                                    if ($network->external_ident === $interface['SubnetId']) {
                                        $temp = explode('\/', $network->network);
                                        $private_ip->cidr = (!empty($temp[1])) ? $temp[1] : '';
                                        unset($temp);
                                        $private_ip->network = $network->network;
                                        # translate 24 to 255.255.255.0, etc
                                        $details = network_details($network->network);
                                        $private_ip->netmask = $details->netmask;
                                        unset($details);
                                    }
                                }
                                $item->ip[] = $private_ip;
                            }
                            if (!$item->attributes->ip and $item->ip[0]->ip) {
                                $item->attributes->ip = $item->ip[0]->ip;
                            }
                            $projects[0]->devices[] = $item;
                            log_message('debug', 'Processed: ' . @$item->attributes->hostname . ' :: ' . @$item->attributes->os_group . ' :: ' . @$item->attributes->environment);
                            unset($item);
                        }
                    }
                }
            }
            unset($result);
            unset($client);
        }

        # Remove locations without a network or device
        $count = count($projects[0]->locations);
        for ($i = 0; $i < $count; $i++) {
            $delete = true;
            foreach ($projects[0]->networks as $network) {
                if ($network->attributes->{"locations.name"} === $projects[0]->locations[$i]->attributes->name) {
                    $delete = false;
                    continue;
                }
            }
            if ($delete === true) {
                foreach ($projects[0]->devices as $device) {
                    if (!empty($device->attributes->{"locations.name"}) and $device->attributes->{"locations.name"} === $projects[0]->locations[$i]->attributes->name) {
                        $delete = false;
                        continue;
                    }
                }
            }
            if ($delete === true) {
                unset($projects[0]->locations[$i]);
            }
        }

        $filtered_locations = $projects[0]->locations;
        unset($projects[0]->locations);
        $projects[0]->locations = array();
        foreach ($filtered_locations as $location) {
            $projects[0]->locations[] = $location;
        }
        log_message('debug', json_encode($projects[0]->locations[0]));
        return $projects[0];
    }

    public function microsoft($cloud)
    {
        if (empty($cloud)) {
            log_message('error', 'A request for the Microsoft API was received, but no cloud data was present in the request.');
            $this->response->setStatusCode(400);
            return;
        }

        helper('security');
        helper('network');
        $db = db_connect();
        try {
            $cloud->credentials = json_decode(simpleDecrypt($cloud->credentials, config('Encryption')->key), false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        $projects = array();
        $projects[0] = new stdClass();
        $projects[0]->devices = array();
        $projects[0]->networks = array();
        $projects[0]->locations = array();
        $instances = array();
        $zones = array();
        $regions = array();

        $client = \Config\Services::curlrequest();

        $params = new stdClass();
        $params->grant_type = 'client_credentials';
        $params->client_id = $cloud->credentials->client_id;
        $params->client_secret = $cloud->credentials->client_secret;
        $params->resource = 'https://management.azure.com';

        $url = 'https://login.microsoftonline.com/' . $cloud->credentials->tenant_id . '/oauth2/token';

        $response = $client->post($url, ['form_params' => [
            'grant_type' => 'client_credentials',
            'client_id' => $cloud->credentials->client_id,
            'client_secret' => $cloud->credentials->client_secret,
            'resource' => 'https://management.azure.com'], 'headers' => ['Accept' => 'application/json'], 'http_errors' => false]);
        $body = $response->getBody();
        try {
            $json = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($json)) {
            log_message('error', 'Invalid JSON returned when requesting token.');
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', 'Invalid JSON returned when requesting token.')";
        }
        if (!empty($json->error_description)) {
            log_message('error', $json->error_description);
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', '" . str_replace("'", "", $json->error_description) . "')";
        }
        if (empty($json->access_token)) {
            log_message('error', 'Token not present in response.');
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', 'Token not present in response.')";
        }
        $token = '';
        if (!empty($json->access_token)) {
            $token = 'bearer ' . $json->access_token;
        }

        $url = 'https://management.azure.com/subscriptions/' . $cloud->credentials->subscription_id . '/locations?api-version=2016-06-01';
        $response = $client->get($url, ['Authorization' => $token, 'headers' => ['Accept' => 'application/json'], 'http_errors' => false]);
        $body = $response->getBody();
        try {
            $json = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($json)) {
            log_message('error', 'Invalid JSON returned when requesting locations.');
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', 'Invalid JSON returned when requesting locations.')";
        }
        if (!empty($json->error_description)) {
            log_message('error', $json->error_description);
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', '" . str_replace("'", "", $json->error_description) . "')";
        }

        foreach ($json->value as $region) {
            $item = new stdClass();
            $item->type = 'locations';
            $item->attributes = new stdClass();
            $item->attributes->name = $region->displayName;
            $item->attributes->type = 'Cloud';
            $item->attributes->description = $region->name;
            $item->attributes->external_ident = $region->id;
            $item->attributes->org_id = $cloud->org_id;
            $item->attributes->longitude = $region->longitude;
            $item->attributes->latitude = $region->latitude;
            $item->attributes->address = 'Microsoft';
            $item->attributes->options = $region;
            $projects[0]->locations[] = $item;
        }

        $url = 'https://management.azure.com/subscriptions/' . $cloud->credentials->subscription_id . '/providers/Microsoft.Network/virtualNetworks?api-version=2018-08-01';
        $response = $client->get($url, ['Authorization' => $token, 'headers' => ['Accept' => 'application/json'], 'http_errors' => false]);
        $body = $response->getBody();
        try {
            $json = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($json)) {
            log_message('error', 'Invalid JSON returned when requesting networks.');
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', 'Invalid JSON returned when requesting networks.')";
        }
        if (!empty($json->error_description)) {
            log_message('error', $json->error_description);
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', '" . str_replace("'", "", $json->error_description) . "')";
        }

        foreach ($json->value as $network) {
            $item = new stdClass();
            $item->type = 'networks';
            $item->attributes = new stdClass();
            $item->attributes->name = (!empty($network->name)) ? $network->name : '';
            $item->attributes->org_id = $cloud->org_id;
            $item->attributes->network = (!empty($network->properties->addressSpace->addressPrefixes[0])) ? $network->properties->addressSpace->addressPrefixes[0] : '';
            $item->attributes->type = 'Cloud Network';
            $item->attributes->description = 'Azure Network';
            $item->attributes->external_ident = (!empty($network->id)) ? $network->id : '';
            $item->attributes->options = $network;
            if (!empty($item->attributes->network)) {
                $projects[0]->networks[] = $item;
            }

            foreach ($network->properties->subnets as $net) {
                if (!empty($net->properties->addressPrefix) and $net->properties->addressPrefix !== $network->properties->addressSpace->addressPrefixes[0]) {
                    $item = new stdClass();
                    $item->type = 'networks';
                    $item->attributes = new stdClass();
                    $item->attributes->name = (!empty($net->name)) ? $net->name : '';
                    $item->attributes->org_id = $cloud->org_id;
                    $item->attributes->network = $net->{'properties'}->{'addressPrefix'};
                    $item->attributes->type = 'Local Area Network';
                    $item->attributes->description = 'Azure Network';
                    $item->attributes->external_ident = (!empty($net->id)) ? $net->id : '';
                    $item->attributes->options = $net;
                    $projects[0]->networks[] = $item;
                }
            }
        }

        $url = 'https://management.azure.com/subscriptions/' . $cloud->credentials->subscription_id . '/providers/Microsoft.Compute/virtualMachines?api-version=2017-12-01';
        $response = $client->get($url, ['Authorization' => $token, 'headers' => ['Accept' => 'application/json'], 'http_errors' => false]);
        $body = $response->getBody();
        try {
            $instances = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($instances)) {
            log_message('error', 'Invalid JSON returned when requesting instances.');
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', 'Invalid JSON returned when requesting instances.')";
        }
        if (!empty($json->error_description)) {
            log_message('error', $json->error_description);
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', '" . str_replace("'", "", $json->error_description) . "')";
        }


        $url = 'https://management.azure.com/subscriptions/' . $cloud->credentials->subscription_id . '/providers/Microsoft.Network/publicIPAddresses?api-version=2018-04-01';
        $response = $client->get($url, ['Authorization' => $token, 'headers' => ['Accept' => 'application/json'], 'http_errors' => false]);
        $body = $response->getBody();
        try {
            $ip = json_decode($body, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        if (empty($ip)) {
            log_message('error', 'Invalid JSON returned when requesting ip.');
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', 'Invalid JSON returned when requesting ip.')";
        }
        if (!empty($json->error_description)) {
            log_message('error', $json->error_description);
            $sql = "INSERT INTO cloud_log VALUES (NULL, " . $cloud->id . ", NOW(), 'error', '', '" . str_replace("'", "", $json->error_description) . "')";
        }

        foreach ($instances->value as $instance) {
            $item = new stdClass();
            $item->type = 'computer';
            $item->attributes = new stdClass();

            $item->attributes->hostname = $instance->properties->osProfile->computerName;

            $item->attributes->last_seen_by = 'cloud';
            $item->attributes->form_factor = 'Virtual';
            $item->attributes->status = 'production';
            $item->attributes->environment = 'production';
            $item->attributes->class = 'virtual server';
            $item->attributes->org_id = $cloud->org_id;
            $item->attributes->{'locations.name'} = '';
            foreach ($projects[0]->locations as $location) {
                if ($instance->location === $location->attributes->description) {
                    $item->attributes->{'locations.name'} = $location->attributes->name;
                }
            }
            foreach ($ip->value as $ipaddress) {
                if ($ipaddress->tags->Name === $instance->name) {
                    $item->attributes->ip = (!empty($ipaddress->properties->ipAddress)) ? $ipaddress->properties->ipAddress : '';
                }
            }
            $item->attributes->os_group = (!empty($instance->properties->storageProfile->osDisk->osType)) ? $instance->properties->storageProfile->osDisk->osType : '';
            $temp = (!empty($instance->properties->storageProfile->imageReference->publisher)) ? $instance->properties->storageProfile->imageReference->publisher : '';
            if ($temp === 'Canonical') {
                $item->attributes->os_family = 'Ubuntu';
                $item->attributes->os_name = 'Ubuntu ' . (!empty($instance->properties->storageProfile->imageReference->sku)) ? $instance->properties->storageProfile->imageReference->sku : '';
            }
            $item->attributes->cloud_id = $cloud->id;
            $item->attributes->instance_provider = 'Microsoft Azure';
            $item->attributes->instance_type = $instance->properties->hardwareProfile->vmSize;
            $item->attributes->instance_ident = $instance->id;
            # NOTE - must use a request per VM to InstanceViewStatus which is still ambiguous to get state
            # For now simply set to 'running' so an audit is triggered.
            # TODO - come back to this
            $item->attributes->instance_state = 'running';
            $item->attributes->instance_tags = $instance->tags;
            $item->attributes->instance_reservation_ident = $instance->properties->vmId;
            $item->attributes->instance_options = $instance;
            $item->attributes->memory_count = 0;
            $item->attributes->processor_count = 0;
            $name = $instance->properties->hardwareProfile->vmSize;
            foreach ($sizes->{$instance->location}->value as $size) {
                if ($name === $size->name) {
                    $item->attributes->processor_count = intval($size->numberOfCores);
                    $item->attributes->memory_count = intval($size->memoryInMB) * 1024;
                }
            }
            $projects[0]->devices[] = $item;
        }

        return $project[0];
    }

    public function google($cloud)
    {
        if (empty($cloud)) {
            log_message('error', 'A request for the Google Cloud API was received, but no cloud data was present in the request.');
            $this->response->setStatusCode(400);
            return;
        }

        helper('security');
        helper('network');
        $db = db_connect();
        try {
            $cloud->credentials = json_decode(simpleDecrypt($cloud->credentials, config('Encryption')->key), true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        try {
            $jsonKey = json_decode($cloud->credentials['json'], true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }


        $projects = array();
        $projects[0] = new stdClass();
        $projects[0]->devices = array();
        $projects[0]->networks = array();
        $projects[0]->locations = array();
        $instances = array();
        $zones = array();
        $regions = array();

        // define the scopes for your API call
        $scopes = array("https://www.googleapis.com/auth/cloud-platform",
                        "https://www.googleapis.com/auth/cloud-platform.read-only",
                        "https://www.googleapis.com/auth/cloudplatformprojects",
                        "https://www.googleapis.com/auth/cloudplatformprojects.readonly");

        // Load credentials
        $creds = CredentialsLoader::makeCredentials($scopes, $jsonKey) or die('Could not create creds');

        // create middleware
        $middleware = new AuthTokenMiddleware($creds) or die('Could not create middleware');
        $stack = HandlerStack::create() or die('Could not create stack');
        $stack->push($middleware); # or die('Could not push middleware on to stack');

        // create the HTTP client
        $client = new Client([
          'handler' => $stack,
          'base_uri' => 'https://www.googleapis.com',
          'auth' => 'google_auth'  // authorize all requests
        ]) or die('Could not create client');

        // make the request
        $response = $client->get('compute/v1/projects/' . $jsonKey['project_id'] . '/zones') or die('Could not create response');
        try {
            $zones = json_decode((string)$response->getBody(), false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }
        $inZones = array();

        $response = $client->get('compute/v1/projects/' . $jsonKey['project_id'] . '/aggregated/instances') or die('Could not create response');
        try {
            $instances = json_decode((string)$response->getBody(), false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        $response = $client->get('compute/v1/projects/' . $jsonKey['project_id'] . '/aggregated/subnetworks') or die('Could not create response');
        try {
            $networks = json_decode((string)$response->getBody(), false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            log_message('error', 'Could not decode JSON. File:' . basename(__FILE__) . ', Line:' . __LINE__ . ', Error: ' . $e->getMessage());
        }

        foreach ($instances->items as $each) {
            if (!empty($each->instances)) {
                foreach ($each->instances as $instance) {
                    $temp = explode('/', $instance->machineType);
                    $instance->instance_type = end($temp);
                    $temp = explode('/', $instance->zone);
                    $instance->location_name = end($temp);
                    $instance->zone = end($temp);

                    $device = new stdClass();
                    $device->type = 'devices';
                    $device->attributes = new stdClass();
                    $device->attributes->class = 'virtual server';
                    $device->attributes->environment = 'production';
                    $device->attributes->form_factor = 'Virtual';
                    $device->attributes->last_seen_by = 'cloud';
                    $device->attributes->manufacturer = 'Google';
                    $device->attributes->status = 'production';
                    $device->attributes->type = 'computer';
                    $device->attributes->hostname = (!empty($instance->name)) ? $instance->name : '';
                    $device->attributes->name = (!empty($instance->name)) ? $instance->name : '';
                    $device->attributes->org_id = $cloud->org_id;
                    if (!empty($instance->networkInterfaces)) {
                        foreach ($instance->networkInterfaces as $interface) {
                            $instance->ip = (!empty($interface->accessConfigs[0]->natIP)) ? $interface->accessConfigs[0]->natIP : $interface->networkIP;
                        }
                    }
                    $device->attributes->ip = (!empty($instance->ip)) ? $instance->ip : '';
                    $device->attributes->cloud_id = $cloud->id;
                    $device->attributes->instance_provider = 'Google Compute';
                    $device->attributes->instance_type = (!empty($instance->instance_type)) ? $instance->instance_type : '';
                    $device->attributes->instance_ident = (!empty($instance->id)) ? $instance->id : '';
                    $device->attributes->instance_state = (!empty($instance->status)) ? strtolower($instance->status) : 'unknown';
                    $device->attributes->instance_tags = $instance->tags;
                    $device->attributes->{'locations.name'} = (!empty($instance->location_name)) ? $instance->location_name : '';

                    # the public ip details - we don't store this because the VMs have no idea about their public IP
                    # hence audit script after API would generate lots of change logs.
                    $device->ip = array();

                    if (!empty($instance->networkInterfaces)) {
                        foreach ($instance->networkInterfaces as $interface) {
                            # the private IP details
                            $private_ip = new stdClass();
                            $ip = (!empty($interface->networkIP)) ? $interface->networkIP : '';
                            $private_ip->name = $ip;
                            $private_ip->mac = '';
                            $private_ip->net_index = '';
                            $private_ip->ip = ip_address_to_db($ip);
                            $private_ip->netmask = '';
                            $private_ip->cidr = '';
                            $private_ip->version = 4;
                            $private_ip->network = '';
                            $private_ip->set_by = '';
                            $private_ip->interface = (!empty($interface->name)) ? $interface->name : '';
                            $private_ip->options = $interface;
                            $device->ip[] = $private_ip;
                        }
                    }
                    unset($instance->metadata->items);
                    $device->attributes->instance_options = $instance;
                    $inZones[] = $instance->zone;
                    $projects[0]->devices[] = $device;
                }
            }
        }

        foreach ($zones->items as $zone) {
            if (in_array($zone->name, $inZones)) {
                $temp = explode('/', $zone->region);
                $zone->region = end($temp);
                $regions[] = $zone->region;
                $item = new stdClass();
                $item->type = 'locations';
                $item->attributes = new stdClass();
                $item->attributes->name = $zone->name;
                $item->attributes->type = 'Cloud';
                $item->attributes->description = $zone->description;
                $item->attributes->external_ident = $zone->id;
                $item->attributes->org_id = $cloud->org_id;
                $item->attributes->address = 'Google';
                $item->attributes->region = $zone->region;
                $item->attributes->cloud_id = $cloud->id;
                $item->attributes->options = $zone;
                $projects[0]->locations[] = $item;
            }
        }

        foreach ($networks->items as $networkZone => $network) {
            $region = str_replace('regions/', '', $networkZone);
            if (in_array($region, $regions)) {
                foreach ($network->subnetworks as $subnetwork) {
                    $item = new stdClass();
                    $item->type = 'networks';
                    $item->attributes = new stdClass();
                    $item->attributes->name = $subnetwork->ipCidrRange;
                    $item->attributes->network = $subnetwork->ipCidrRange;
                    $item->attributes->org_id = $cloud->org_id;
                    $item->attributes->type = 'Cloud Network';
                    $item->attributes->description = 'Google Network';
                    $item->attributes->external_ident = $subnetwork->id;
                    $item->attributes->cloud_id = $cloud->id;
                    $item->attributes->options = $subnetwork;
                    $item->attributes->{'locations.name'} = '';
                    foreach ($zones->items as $zone) {
                        if (!empty($zone->region) and $zone->region === $region) {
                            $item->attributes->{'locations.name'} = $zone->name;
                        }
                    }
                    $projects[0]->networks[] = $item;
                }
            }
        }


        $count = count($projects[0]->devices);
        for ($i = 0; $i < $count; $i++) {
            if (!empty($projects[0]->devices[$i]->ip) and is_array($projects[0]->devices[$i]->ip)) {
                for ($j = 0; $j < count($projects[0]->devices[$i]->ip); $j++) {
                    foreach ($projects[0]->networks as $network) {
                        if (!empty($network->attributes->options->selfLink) and !empty($projects[0]->devices[$i]->ip[$j]->options->subnetwork)) {
                            if ($network->attributes->options->selfLink === $projects[0]->devices[$i]->ip[$j]->options->subnetwork) {
                                $temp = explode('/', $network->attributes->options->ipCidrRange);
                                $projects[0]->devices[$i]->ip[$j]->cidr = (!empty($temp[1])) ? $temp[1] : '';
                                unset($temp);
                                $projects[0]->devices[$i]->ip[$j]->network = (!empty($network->attributes->options->ipCidrRange)) ? $network->attributes->options->ipCidrRange : '';
                                # translate 24 to 255.255.255.0, etc
                                $details = network_details($network->attributes->options->ipCidrRange);
                                $projects[0]->devices[$i]->ip[$j]->netmask = $details->netmask;
                                unset($details);
                                #$private_ip->cidr = explode('/', $network->ipCidrRange)[1];
                            }
                        }
                    }
                    unset($projects[0]->devices[$i]->ip[$j]->options);
                }
            }
        }

        return $projects[0];
    }

    public function updateDevicesAll()
    {
        log_message('debug', 'Executing updateDevicesAll');
        $vulnerabilitiesModel = model('VulnerabilitiesModel');
        $vulnerabilitiesModel->updateDevicesAll();
        return redirect()->route('vulnerabilitiesCollection');
    }

    public function executeVendorsAll()
    {
        log_message('debug', 'Cli::executeVendorsAll');
        $vendorsModel = model('VendorsModel');
        $vendorsModel->executeAll();
        return redirect()->route('vulnerabilitiesCollection');
    }

}
