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
* PHP version 5.3.3
* 
* @category  Model
* @package   Baselines
* @author    Mark Unwin <marku@opmantek.com>
* @copyright 2014 Opmantek
* @license   http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @version   GIT: Open-AudIT_4.3.2
* @link      http://www.open-audit.org
*/

/**
* Base Model BaselinesResults
*
* @access   public
* @category Model
* @package  Baselines
* @author   Mark Unwin <marku@opmantek.com>
* @license  http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
* @link     http://www.open-audit.org
 */
class M_baselines_results extends MY_Model
{
    /**
    * Constructor
    *
    * @access public
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * [dictionary description]
     * @return [type] [description]
     */
    public function dictionary()
    {
        $CI = & get_instance();
        $collection = 'baselines_results';
        $CI->temp_dictionary->link = str_replace('$collection', 'baselines results', $CI->temp_dictionary->link);
        $this->load->helper('collections');

        $dictionary = new stdClass();
        $dictionary->table = $collection;
        $dictionary->about = '';
        $dictionary->marketing = '';
        $dictionary->notes = '';
        $dictionary->columns = new stdClass();
        $dictionary->attributes = new stdClass();
        $dictionary->attributes->fields = array();
        $dictionary->attributes->create = array();
        $dictionary->attributes->update = array();
        $dictionary->sentence = 'Open-AudIT Enterprise includes Baselines, a light-weight compliance system that compares software, users, and netstat data against your required standard.';
        $dictionary->about = '<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br /><br /> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br /><br /> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you\'re unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->marketing = '<p>Get the complete Open-AudIT Enterprise experience. Track your devices and see if they deviate from your required standard.<br /><br /> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br /><br /> For example - you might create a baseline from a device running Centos 6 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you\'re unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.<br /><br /> You can create a baseline, run it against a group of devices and view the results. You can implement your baselines to be executed on a schedule. All results are kept and can be viewed and exported.<br /><br />' . $CI->temp_dictionary->link . '<br /><br /></p>';
        $dictionary->product = 'enterprise';
        $dictionary->notes = '<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br /><br /><strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br /><br /><strong>Details</strong> - Baselines can compare netstat ports, users and software.<br /><br /><strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br /><br /><strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br /><br /><strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br /><br /></p>';

        $dictionary->columns->baseline = 'The associated baseline this result is from.';
        $dictionary->columns->timestamp = 'The date/time when this result was created.';
        $dictionary->columns->group = 'The group of devices on which the baseline was run against.';
        $dictionary->columns->devices = 'The number of devices in the associated group.';
        $dictionary->columns->pass = 'How many policies results in a pass.';
        $dictionary->columns->fail = 'How many policies results in a fail.';
        $dictionary->columns->{'tests.operator'} = 'How to compare';
        return $dictionary;
    }
}
// End of file m_baselines_results.php
// Location: ./models/m_baselines_results.php
