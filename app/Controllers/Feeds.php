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
 * @version   GIT: Open-AudIT_5.6.1
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
class Feeds extends BaseController
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
        $this->feedsModel = model('App\Models\FeedsModel');
        $this->feedsModel->executeAll();
        return redirect()->route('feedsCollection');
    }

    public function execute($id)
    {
        $id = intval($id);
        $this->feedsModel = model('App\Models\FeedsModel');
        $this->feedsModel->execute($id);
        $feed = $this->feedsModel->read($id);
        if (in_array($feed[0]->attributes->type, ['config', 'package', 'query'])) {
            return redirect()->route('feedsRead', [$id]);
        }
        if (in_array($feed[0]->attributes->type, ['advertisement', 'blog', 'howto', 'news', 'notification', 'other', 'release'], '')) {
            return true;
        }
        return redirect()->route('feedsRead', [$id]);
    }
}
