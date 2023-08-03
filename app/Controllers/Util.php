<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;

use Google\Cloud\Compute\V1\InstancesClient;

use Google\Protobuf;

use Google\Service\Compute;
use Google\Client;

use Google\Cloud\Compute\V1\GetZoneRequest;
use Google\Cloud\Compute\V1\ListZonesRequest;
use Google\Cloud\Compute\V1\Zone;
use Google\Cloud\Compute\V1\ZoneList;

use \stdClass;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.0.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Util
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Util
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Util extends Controller
{

    public function subnetSize()
    {
        // NOTE #1 - We cannot restrict the source (like the Google function below) because it is called from the client browser.
        // NOTE #2 - it would be nice do run the below, but unsure that Windows would handle 2>/dev/null
        // nmap -n -sL $subnet 2>/dev/null | grep "^Nmap done" | awk '{print $3}'
        if (!empty($_POST['subnet'])) {
            $subnet = $_POST['subnet'];
        } else {
            return;
        }
        # filter out all characters not in the $chars list
        $chars = "0123456789-./";
        $pattern = "/[^" . preg_quote($chars, "/") . "]/";
        $subnet = preg_replace($pattern, '', $subnet);
        # now run the command
        $command = "nmap -n -sL " . $subnet;
        exec($command, $output, $return_var);
        $count = 0;
        if ($return_var === 0) {
            foreach ($output as $line) {
                if (stripos($line, 'Nmap scan report for') === 0) {
                    $count = $count + 1;
                }
            }
        }
        echo $count;
        return;
    }

    public function google()
    {
        if (!empty($_SERVER['REMOTE_ADDR']) and ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1' and $_SERVER['REMOTE_ADDR'] !== '127.0.1.1' and $_SERVER['REMOTE_ADDR'] !== '::1' and $_SERVER['REMOTE_ADDR'] !== 'localhost')) {
            exit;
        }
        // echo "<pre>";

        $response = new stdClass();
        $credentials = $_POST['credentials'];
        if (empty($credentials)) {
            log_message('error', 'A request for the Google API was received, but no credentials we present in the POST.');
            $response->errors = 'A request for the Google API was received, but no credentials we present in the POST.';
            $response->meta->header = 400;
            $response->setStatusCode($response->meta->header);
            print_r(json_encode($response));
            return;
        }

        $credentials = json_decode($credentials, true);

        $client = new \Google\Client(['credentials' => $credentials]);

        $scope = array("https://www.googleapis.com/auth/cloud-platform","https://www.googleapis.com/auth/cloud-platform.read-only","https://www.googleapis.com/auth/cloudplatformprojects","https://www.googleapis.com/auth/cloudplatformprojects.readonly");
        $client->addScope($scope);
        $httpClient = $client->authorize();

        $service = new Compute($client);
        $zones = $service->zones->listZones($credentials['project_id']);
        $ourZones = array();
        foreach ($zones->items as $zone) {
            $ourZones[] = (['id' => $zone->id, 'status' => $zone->status, 'name' => $zone->name, 'region' => $zone->region]);
        }
        #print_r($zones);
        #exit;

        $instances = new InstancesClient(['credentials' => $credentials]);

        $ourInstances = $instances->aggregatedList($credentials['project_id']);
        foreach ($ourInstances->iteratePages() as $page) {
            #echo json_encode($page) . "\n\n";
            foreach ($page as $key => $element) {
                echo json_encode($element);
            }
        }
        exit;
        foreach ($ourZones as $zone) {
            log_message('error', 'Getting for zone: ' . $zone['name']);
            $ourInstances = $instances->list($credentials['project_id'], $zone['name']);
            foreach ($ourInstances->iterateAllElements() as $element) {
                echo json_encode($element);
                echo "\n\n";
            }
        }
        exit;
        // $response = $instances->listInstances($credentials->project_id, 'us-central1-a');
        // print_r($response);
        // exit;



        #print_r($zones);
        exit;

        // foreach ($ourZones as $zone) {
        //     foreach ($instances->list_($credentials->project_id, $zone) as $instance) {
        //         print($instance->getName() . PHP_EOL);
        //     }
        // }
        $instancesClient = new InstancesClient(['credentials' => $credentials]);
        $allInstances = $instancesClient->aggregatedList($credentials->project_id);
        print_r($allInstances);
        exit;

        printf('All instances for %s' . PHP_EOL, $credentials->project_id);
        foreach ($allInstances as $zone => $zoneInstances) {
            $instances = $zoneInstances->getInstances();
            if (count($instances) > 0) {
                printf('Zone - %s' . PHP_EOL, $zone);
                foreach ($instances as $instance) {
                    printf(' - %s' . PHP_EOL, $instance->getName());
                }
            }
        }
    

        exit;


        // $client->setAuthConfig($credentials);
        // $scope = array("https://www.googleapis.com/auth/cloud-platform","https://www.googleapis.com/auth/cloud-platform.read-only","https://www.googleapis.com/auth/cloudplatformprojects","https://www.googleapis.com/auth/cloudplatformprojects.readonly");
        // $client->addScope($scope);
        // $httpClient = $client->authorize();
        // $response = $httpClient->get('https://cloudresourcemanager.googleapis.com/v1/projects');
        // print_r($response);
        // exit;

        // $projects = array();
        // if ($response->getBody()) {
        //     $temp = json_decode($response->getBody());
        //     $projects = $temp->projects;
        // }
        // log_message('error', print_r($projects));

            $projects = array($credentials->project_id => new \StdClass());

        foreach ($projects as &$project) {
            $project->instances = array();
            $project->networks = array();
            $project->projects = array();
            $project->zones = array();
        }

        if (!empty($projects)) {
            # Projects
            foreach ($projects as &$project) {
                $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId;
                $response = $httpClient->get($url);
                if ($response->getBody()) {
                    $temp = json_decode($response->getBody());
                    $item = new stdClass();
                    foreach ($temp as $key => $value) {
                        $item->{$key} = $value;
                    }
                    unset($item->commonInstanceMetadata);
                    unset($item->quotas);
                    $project->projects[] = $item;
                }
            }

            # Zones
            foreach ($projects as &$project) {
                unset($response);
                $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId . '/zones';
                $response = $httpClient->get($url);
                if ($response->getBody()) {
                    $temp = json_decode($response->getBody());
                    foreach ($temp->items as $zone) {
                        $item = new stdClass();
                        foreach ($zone as $key => $value) {
                            $item->{$key} = $value;
                        }
                        $temp = explode('/', $zone->region);
                        $item->region = end($temp);
                        $item->notes = implode(', ', $zone->availableCpuPlatforms);
                        $project->zones[] = $item;
                    }
                }
            }

            # Instances
            foreach ($projects as &$project) {
                foreach ($project->zones as $zone) {
                    unset($response);
                    $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId . '/zones/' . $zone->name . '/instances';
                    $response = $httpClient->get($url);
                    if ($response->getBody()) {
                        $instances = json_decode($response->getBody());
                        if (!empty($instances->items)) {
                            foreach ($instances->items as $each_instance) {
                                $item = new stdClass();
                                foreach ($each_instance as $key => $value) {
                                    $item->{$key} = $value;
                                }
                                $temp = explode('/', $each_instance->machineType);
                                $item->instance_type = end($temp);
                                $item->location_name = $zone->name;
                                if (!empty($item->networkInterfaces)) {
                                    foreach ($item->networkInterfaces as $interface) {
                                        if (!empty($interface->accessConfigs[0])) {
                                            $item->ip = $interface->accessConfigs[0]->natIP;
                                        } else {
                                            $item->ip = $interface->networkIP;
                                        }
                                    }
                                }
                                $project->instances[] = $item;
                            }
                        }
                    }
                }
            }

            # Only keep zones with instances
            foreach ($projects as &$project) {
                $zones = array();
                foreach ($project->instances as $instance) {
                    $zones[] = $instance->location_name;
                }
                foreach ($project->zones as $key => $zone) {
                    if (!in_array($zone->name, $zones)) {
                        unset($project->zones[$key]);
                    }
                }
                $project->zones = array_values($project->zones);
            }

            # Networks
            foreach ($projects as &$project) {
                foreach ($project->zones as $zone) {
                    unset($response);
                    $url = 'https://www.googleapis.com/compute/v1/projects/' . $project->projectId . '/regions/' . $zone->region . '/subnetworks';
                    $response = $httpClient->get($url);
                    if ($response->getBody()) {
                        $temp = json_decode($response->getBody());
                        if (!empty($temp->items)) {
                            foreach ($temp->items as $zone) {
                                $item = new stdClass();
                                foreach ($zone as $key => $value) {
                                    $item->{$key} = $value;
                                }
                                $project->networks[] = $item;
                                unset($item);
                            }
                        }
                    }
                }
            }
        } else {
            log_message('error', "no projects");
        }

        header('Content-Type: application/json');
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        $response->data = array();
        $response->data[] = $projects;
        print_r(json_encode($response));
    }
}
