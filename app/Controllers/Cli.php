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

    public function test()
    {
        helper('utility');
        helper('response');

        $this->usersModel = new \App\Models\UsersModel();
        $this->user = $this->usersModel->read(1);
        $this->attributesModel = new \App\Models\AttributesModel();
        $read = $this->attributesModel->read(1);

        $unit = new \App\Libraries\UnitTest();

        // response_get_include

        $urlget = 'something';
        $post = '';
        $collection = '';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $result = $unit->run($test, '', 'response_helper::response_get_include', 'Send invalid GET "something", get "" back.');


        $urlget = 'something';
        $post = '';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $unit->run($test, '', 'response_helper::response_get_include', 'Send invalid GET "something", with collection "devices", get "" back.');

        $urlget = '';
        $post = 'blah,processor';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $unit->run($test, 'processor', 'response_helper::response_get_include', 'Send invalid POST "blah,processor" and collection "devices", get "processor" back.');

        $urlget = 'bios';
        $post = '';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $unit->run($test, 'bios', 'response_helper::response_get_include', 'Send valid GET (bios) and collection "devices", get "bios" back.');

        $urlget = null;
        $post = '';
        $collection = 'devices';
        $format = 'screen';
        $test = response_get_include($urlget, $post, $collection, $format);
        $unit->run($test, implode(',', response_valid_includes()), 'response_helper::response_get_include', 'Send invalid GET (null) and collection "devices", get all includes back.');

        // response_helper::response_get_limit

        $urlget = null;
        $post = '';
        $format = 'screen';
        $default_limit = 10;
        $test = response_get_limit($urlget, $post, $format, $default_limit);
        $unit->run($test, 10, 'response_helper::response_get_limit', 'Send invalid GET null and a default limit 10, get 10 back.');

        $urlget = 100;
        $post = '';
        $format = 'screen';
        $default_limit = 10;
        $test = response_get_limit($urlget, $post, $format, $default_limit);
        $unit->run($test, 100, 'response_helper::response_get_limit', 'Send valid GET limit 100, get 100 back.');

        $urlget = '';
        $post = 100;
        $format = 'screen';
        $default_limit = 10;
        $test = response_get_limit($urlget, $post, $format, $default_limit);
        $unit->run($test, 100, 'response_helper::response_get_limit', 'Send valid POST limit 100, get 100 back.');

        // response_helper::response_get_debug

        $urlget = 'true';
        $post = '';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_true', 'response_helper::response_get_debug', 'Send valid GET (true), get true back.');

        $urlget = '';
        $post = 'true';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_true', 'response_helper::response_get_debug', 'Send valid POST (true), get true back.');

        $urlget = '';
        $post = '';
        $header = 'true';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_true', 'response_helper::response_get_debug', 'Send valid HEADER (true), get true back.');

        $urlget = 'false';
        $post = '';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send valid GET (false), get false back.');

        $urlget = '';
        $post = 'false';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send valid POST (false), get false back.');

        $urlget = '';
        $post = '';
        $header = 'false';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send valid HEADER (false), get false back.');

        $urlget = 'a';
        $post = '';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send invalid GET "a", get false back.');

        $urlget = '';
        $post = 'a';
        $header = '';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send invalid POST "a", get false back.');

        $urlget = '';
        $post = '';
        $header = 'a';
        $test = response_get_debug($urlget, $post, $header);
        $unit->run($test, 'is_false', 'response_helper::response_get_debug', 'Send invalid HEADER "a", get false back.');

        // AttributesModel
        $read = $this->attributesModel->read(1);
        $test = $read[0]->attributes->id;
        $unit->run($test, 'is_int', 'attributesModel::read', 'Read attribute with ID 1, get a response with ID 1 that is an integer.');

        $test = $this->attributesModel->read();
        $unit->run($test, 'is_array', 'attributesModel::read', 'Read attribute with ID \'null\', get a response with an array.');
        $unit->run($test, 'is_empty', 'attributesModel::read', 'Read attribute with ID \'null\', get a response with an empty array.');

        // try {
        //     $test = $this->attributesModel->read('abc');
        // } catch (Exception $e) {
        //     print_r($e);
        // }
    }
}
