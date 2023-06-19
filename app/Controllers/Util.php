<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;

use Google\Cloud\Compute\V1\InstancesClient;

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

    public function google()
    {
        if (!empty($_SERVER['REMOTE_ADDR']) and ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1' and $_SERVER['REMOTE_ADDR'] !== '127.0.1.1' and $_SERVER['REMOTE_ADDR'] !== '::1' and $_SERVER['REMOTE_ADDR'] !== 'localhost')) {
            exit;
        }
        $response = new stdClass();
        $credentials = @$this->input->post('credentials');
        if (empty($credentials)) {
            $response->errors = array();
            $error = new stdClass();
            $error->code = 400;
            $error->detail = "A request was sent to the Google API, but no credentials were in the POST.";
            $error->status = "HTTP/1.1 400 Bad Request";
            $error->title = "No credentials supplied to util/google.";
            $response->errors[] = $error;
            print_r(json_encode($response));
            return;
        }
        #set_include_path('/usr/local/open-audit/code_igniter/application/third_party/google-api-php-client-2.2.3/vendor');
        #require_once "autoload.php";

        // $instances = new InstancesClient();
        // foreach ($instances->list_('[MY_PROJECT_ID]', 'us-west1') as $instance) {
        //     print($instance->getName() . PHP_EOL);
        // }


        $client = new Google_Client();
        $client->setAuthConfig($credentials);
        $scope = array("https://www.googleapis.com/auth/cloud-platform","https://www.googleapis.com/auth/cloud-platform.read-only","https://www.googleapis.com/auth/cloudplatformprojects","https://www.googleapis.com/auth/cloudplatformprojects.readonly");
        $client->addScope($scope);
        $httpClient = $client->authorize();
        $response = $httpClient->get('https://cloudresourcemanager.googleapis.com/v1/projects');

        $projects = array();
        if ($response->getBody()) {
            $temp = json_decode($response->getBody());
            $projects = $temp->projects;
        }

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
