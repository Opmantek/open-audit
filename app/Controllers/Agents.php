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
 * @version   GIT: Open-AudIT_5.1.0
 * @link      http://www.open-audit.org
 */

/**
 * Base Object Scripts
 *
 * @access   public
 * @category Object
 * @package  Open-AudIT\Controller\Scripts
 * @author   Mark Unwin <mark.unwin@firstwave.com>
 * @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 * @link     http://www.open-audit.org
 */
class Agents extends BaseController
{
    public function download($id)
    {
        if (empty($this->agentsModel)) {
            $this->agentsModel = model('App\Models\AgentsModel');
        }
        // if (!is_numeric($id)) {
        //     $id = $this->agentsModel->getByOs($id);
        // }
        // if (is_numeric($id)) {
        //     $id = intval($id);
        // }
        // if (empty($id)) {
        //     return;
        // }
        // $scriptContents = $this->agentsModel->download($id);
        $filename = ROOTPATH . 'other/agent_windows.ps1';
        if (!file_exists($filename)) {
            log_message('error', "Script does not exist on filesystem for $filename.");
            return null;
        }
        $file = file_get_contents($filename);
        $file = str_replace("\r\n", "\n", $file);
        $file = str_replace("\r", "\n", $file);
        $file = str_replace('$url = ""', '$url = "' . base_url() . '"', $file);
        if (empty($file)) {
            \Config\Services::session()->setFlashdata('danger', 'Cannot download installer, please contact your Open-AudIT administrator.');
            return redirect()->route($this->config->homepage);
        }
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=agent.ps1');
        header('Content-Type: text');
        header('Content-Transfer-Encoding: binary');
        echo $file;
        return;
    }
}
