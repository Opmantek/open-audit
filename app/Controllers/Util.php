<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;

use Google\Auth\CredentialsLoader;
use Google\Auth\Middleware\AuthTokenMiddleware;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

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

        log_message('info', 'ACCESS:util:google::' . $this->user->username);

        $credentials = $this->request->getPost('credentials');

        if (empty($credentials)) {
            log_message('error', 'A request for the Google API was received, but no credentials we present in the POST.');
            $response->errors = 'A request for the Google API was received, but no credentials we present in the POST.';
            $response->meta->header = 400;
            $response->setStatusCode($response->meta->header);
            print_r(json_encode($response));
            return;
        }

        // Define the Google Application Credentials array
        $jsonKey = json_decode($credentials, true);

        $projects = array();
        $projects[0] = new \stdClass();
        $projects[0]->instances = array();
        $projects[0]->networks = array();
        $projects[0]->zones = array();
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
        $zones = json_decode((string)$response->getBody());
        $inZones = array();

        $response = $client->get('compute/v1/projects/' . $jsonKey['project_id'] . '/aggregated/instances') or die('Could not create response');
        $instances = json_decode((string)$response->getBody());

        $response = $client->get('compute/v1/projects/' . $jsonKey['project_id'] . '/aggregated/subnetworks') or die('Could not create response');
        $networks = json_decode((string)$response->getBody());

        foreach ($instances->items as $zone) {
            if (!empty($zone->instances)) {
                foreach ($zone->instances as $instance) {
                    $temp = explode('/', $instance->machineType);
                    $instance->instance_type = end($temp);
                    $temp = explode('/', $instance->zone);
                    $instance->location_name = end($temp);
                    $instance->zone = end($temp);

                    if (!empty($instance->networkInterfaces)) {
                        foreach ($instance->networkInterfaces as $interface) {
                            if (!empty($interface->accessConfigs[0]->natIP)) {
                                $instance->ip = $interface->accessConfigs[0]->natIP;
                            } else {
                                $instance->ip = $interface->networkIP;
                            }
                        }
                    }
                    $inZones[] = $instance->zone;
                    $projects[0]->instances[] = $instance;
                }
            }
        }

        foreach ($zones->items as $zone) {
            if (in_array($zone->name, $inZones)) {
                $temp = explode('/', $zone->region);
                $zone->region = end($temp);
                $regions[] = $zone->region;
                $projects[0]->zones[] = (['id' => $zone->id, 'description' => $zone->description, 'kind' => $zone->kind, 'status' => $zone->status, 'name' => $zone->name, 'region' => $zone->region]);
            }
        }

        foreach ($networks->items as $networkZone => $network) {
            $region = str_replace('regions/', '', $networkZone);
            if (in_array($region, $regions)) {
                foreach ($network->subnetworks as $subnetwork) {
                    $subnetwork->region = $region;
                    $projects[0]->networks[] = $subnetwork;
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
