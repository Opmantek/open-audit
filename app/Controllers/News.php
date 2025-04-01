<?php

# Copyright © 2023 FirstWave. All Rights Reserved.
# SPDX-License-Identifier: AGPL-3.0-or-later

declare(strict_types=1);

namespace App\Controllers;

/**
 * PHP version 7.4
 *
 * @category  Controller
 * @package   Open-AudIT\Controller
 * @author    Mark Unwin <mark.unwin@firstwave.com>
 * @copyright 2023 FirstWave
 * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @version   GIT: Open-AudIT_5.6.5
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Fields
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Fields
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class News extends BaseController
{
    /**
     * POST submission endpoint from remote agents
     *
     * @param $id NULL or a database ID
     *
     * @access public
     * @return void
     * @throws Exception
     */
    public function executeAll()
    {
        $session = \Config\Services::session();
        $user = '';
        if (!empty($session->get('user_id'))) {
            $usersModel = model('UsersModel');
            $userFromDB = $usersModel->read($session->get('user_id'));
            $user = $userFromDB[0]->attributes->full_name;
        }
        log_message('info', 'ACCESS:news:executeAll::' . $user);
        $this->newsModel = model('App\Models\NewsModel');
        $this->newsModel->executeAll();
        return redirect()->route('newsCollection');
    }

    public function execute($id)
    {
        $id = intval($id);
        $this->newsModel = model('App\Models\NewsModel');
        $this->newsModel->execute($id);
        $news = $this->newsModel->read($id);
        if (in_array($news[0]->attributes->type, ['config', 'package', 'query'])) {
            return redirect()->route('newsRead', [$id]);
        }
        if (in_array($news[0]->attributes->type, ['advertisement', 'blog', 'howto', 'news', 'notification', 'other', 'release', ''])) {
            return true;
        }
        return redirect()->route('newsRead', [$id]);
    }
}
