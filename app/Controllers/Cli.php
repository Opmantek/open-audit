<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;

use \FilesystemIterator;

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
            $logMessage = 'keep these key: ' . $key .' value: '. $value;
            if ($keep < $count) {
                $logMessage = 'unlink these key: ' . $key .' value: '. $value;
                $killme = $logPath . DIRECTORY_SEPARATOR . $key;
                if (!unlink($killme)) {
                    log_message('info', 'unable to unlink '. $killme);
                }
            }
            log_message('info', $logMessage);
            $count++;
        }
    }

    public function executeTasks()
    {
        $this->config = new \Config\OpenAudit();
        echo "Binary is: " . config('Openaudit')->enterprise_binary . "\n";
        if (empty(config('Openaudit')->enterprise_binary)) {
            return;
        }
        $response = new stdClass();
        $response->meta = new stdClass();
        $response->meta->collection = 'tasks';
        $response->meta->action = 'execute';
        $response->meta->uuid = config('Openaudit')->uuid;

        echo json_encode($response) . "\n";

        $db = db_connect() or die("Cannot establish a database connection.");
        // Insert the entry
        $sql = "INSERT INTO enterprise VALUES (null, ?, '', NOW())";
        $db->query($sql, [json_encode($response)]);
        $id = $db->insertID();
        echo "ID: $id\n";
        // Call the binary and wait for it's response
        if (php_uname('s') === 'Windows NT') {
            $command = "%comspec% /c start /b " . config('Openaudit')->enterprise_binary . " $id";
            @exec($command, $output);
            pclose(popen($command, 'r'));
        } else {
            $command = config('Openaudit')->enterprise_binary . " $id";
            @exec($command, $output);
        }
        if (!empty($output)) {
            log_message('error', 'Output: ' . json_encode($output));
        }
        // Delete the DB entry
        $sql = "DELETE FROM enterprise WHERE id = $id";
        $db->query($sql);
    }

    public function executeDiscovery($id)
    {
        $id = intval($id);
        helper('utility');
        helper('network');
        $this->discoveriesModel = model('DiscoveriesModel');
        $this->discoveriesModel->queue($id);
        $this->queueModel = model('QueueModel');
        $this->queueModel->start();
    }

    public function executeIntegration($id)
    {
        $id = intval($id);
        $this->IntegrationsModel = model('IntegrationsModel');
        $this->integrationsModel->queue(intval($id));
        $this->queueModel = model('App\Models\QueueModel');
        $this->queueModel->start();
    }
}
