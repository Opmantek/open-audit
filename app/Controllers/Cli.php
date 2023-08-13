<?php
# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

use CodeIgniter\Controller;

use FilesystemIterator;

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
        $fileSysIt = new \FilesystemIterator($logPath, FilesystemIterator::SKIP_DOTS);
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
            if ($keep < $count) {
                log_message('info', 'unlink these key: ' . $key .' value: '. $value);
                #$killme = $logPath . DIRECTORY_SEPARATOR . $key;
                #if (!unlink($killme)) {
                #    log_message('info', 'unable to unlink '. $killme);
                #}
            } else {
                log_message('info', 'keep these key: ' . $key .' value: '. $value);
            }
            $count++;
        }
    }
}
