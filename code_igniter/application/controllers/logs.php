<?php
/**
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************
*
* @category  Controller
* @package   Open-AudIT
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   1.12.8
* @link      http://www.open-audit.org
*/

/**
* Base Object Logs.
*
* @access   public
* @category Object
* @package  Open-AudIT
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
* @return   NULL
 */
class logs extends CI_Controller_new
{
    /**
     * Constructor.
     *
     * @access    public
     *
     * @category  Constructor
     *
     * @author    Mark Unwin <marku@opmantek.com>
     * @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
     *
     * @link      http://www.open-audit.org
     *
     * @return Admin
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        redirect('admin/view_log/system');
    }
}
// End of file queries.php
// Location: ./controllers/queries.php
