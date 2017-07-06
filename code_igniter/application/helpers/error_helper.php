<?php
if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
}
#
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

/*
 * @package Open-AudIT
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version   2.0.2
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
if (! function_exists('getError')) {
    /**
     * The standard log function for Open-AudIT. Writes logs to a text file in the desired format (json or syslog).
     *
     * @access	  public
     *
     * @category  Function
     *
     * @author    Mark Unwin <marku@opmantek.com>
     *
     * @param	  Object	log_details		An object containing details you wish to log
     *
     * @return NULL [logs the provided string to the log file]
     */
    function getError ($error_id = '', $extra = '') {

        $error = new stdClass();
        $CI = & get_instance();
        $error->controller = @$CI->response->meta->collection;
        $error->function = @$CI->response->meta->action;
        $error->code = $error_id;

        
        $CI = & get_instance();
        if (empty($extra)) {
            $extra = ' (User:' . @$CI->user->id . ', Collection:' . $CI->response->meta->collection . ', Action:' . $CI->response->meta->action;
        } else {
            $extra = ' (' . $extra;
        }
        if (!empty($CI->response->meta->id)) {
            $extra .= ', ID:' . $CI->response->meta->id;
        }
        $extra .= ').';

        $error_array = getErrors();

        if (!isset($error->code) or is_null($error->code) or (!isset($error_array[$error->code]))) {
            return $error_array;
        } else {
            $error_array[$error->code]->title .= $extra;
            if (isset($error->function)) {
                $error_array[$error->code]->function = $error->function;
            } else {
                $error->function = '';
            }
            if (isset($error->controller)) {
                $error_array[$error->code]->controller = $error->controller;
            } else {
                $error->controller = '';
            }
            return $error_array[$error->code];
        }
    }

if (! function_exists('getErrors')) {
    function getErrors () {
        $error_array = array();

        $error_array['ERR-0001'] = new stdClass();
        $error_array['ERR-0001']->code = 'ERR-0001';
        $error_array['ERR-0001']->status = 'HTTP/1.1 404 Not Found';
        $error_array['ERR-0001']->severity = 3;
        $error_array['ERR-0001']->title = "No groups returned for user";
        $error_array['ERR-0001']->detail = 'When requesting the list of groups the user is assigned access to, no groups were returned. This usually indicates either (rightly) that the user has no permissions on any groups (which will result in this user not being able to access any device data in Open-AudIT) or that something has gone wrong inside Open-AudIT. You might go to menu -> Resources -> Users -> List Users, click on edit for this user and make sure they have an access level on at least one group.';

        $error_array['ERR-0002'] = new stdClass();
        $error_array['ERR-0002']->code = 'ERR-0002';
        $error_array['ERR-0002']->status = 'HTTP/1.1 404 Not Found';
        $error_array['ERR-0002']->severity = 3;
        $error_array['ERR-0002']->title = "No object could be retrieved";
        $error_array['ERR-0002']->detail = "When calling this function an identifier (usually but not always an integer based id) should be supplied. The supplied item was either blank, not an integer based id or we could not determine the corresponding object based on the details provided. Please check the log file for the controller and model this occurred on and report the issue to Opmantek.";

        $error_array['ERR-0003'] = new stdClass();
        $error_array['ERR-0003']->code = 'ERR-0003';
        $error_array['ERR-0003']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0003']->severity = 3;
        $error_array['ERR-0003']->title = "No group columns could be retrieved";
        $error_array['ERR-0003']->detail = "When requesting the columns for a group, no group columns either for the original group id, nor group id #1 were found.";

        $error_array['ERR-0004'] = new stdClass();
        $error_array['ERR-0004']->code = 'ERR-0004';
        $error_array['ERR-0004']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0004']->severity = 4;
        $error_array['ERR-0004']->title = "Name, not id passed";
        $error_array['ERR-0004']->detail = "Controllers should pass an integer based id as a first preference. Controllers should determine (where possible) the id if supplied a name.";

        $error_array['ERR-0005'] = new stdClass();
        $error_array['ERR-0005']->code = 'ERR-0005';
        $error_array['ERR-0005']->status = 'HTTP/1.1 404 Not Found';
        $error_array['ERR-0005']->severity = 3;
        $error_array['ERR-0005']->title = "No data returned";
        $error_array['ERR-0005']->detail = 'A request was made to a model, but no data was retrieved from the database.';

        $error_array['ERR-0006'] = new stdClass();
        $error_array['ERR-0006']->code = 'ERR-0006';
        $error_array['ERR-0006']->status = 'HTTP/1.1 403 Forbidden';
        $error_array['ERR-0006']->severity = 3;
        $error_array['ERR-0006']->title = "User is not authorised to view group";
        $error_array['ERR-0006']->detail = 'A user attempted to view the details of a group he is not authorised to. To enable this user to view this group, edit the user via menu -> Resources -> Users -> List Users and allow at least View Group level of access.';

        $error_array['ERR-0007'] = new stdClass();
        $error_array['ERR-0007']->code = 'ERR-0007';
        $error_array['ERR-0007']->status = 'HTTP/1.1 404 Not Found';
        $error_array['ERR-0007']->severity = 3;
        $error_array['ERR-0007']->title = "Resource does not exist";
        $error_array['ERR-0007']->detail = 'A user attempted to view a resource which does not exist.';

        $error_array['ERR-0008'] = new stdClass();
        $error_array['ERR-0008']->code = 'ERR-0008';
        $error_array['ERR-0008']->status = 'HTTP/1.1 403 Forbidden';
        $error_array['ERR-0008']->severity = 3;
        $error_array['ERR-0008']->title = 'User insufficient access.';
        $error_array['ERR-0008']->detail = 'A user attempted to access a resource for which they do not have authorisation.';

        $error_array['ERR-0009'] = new stdClass();
        $error_array['ERR-0009']->code = 'ERR-0009';
        $error_array['ERR-0009']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0009']->severity = 3;
        $error_array['ERR-0009']->title = "Parameters you have provided failed use";
        $error_array['ERR-0009']->detail = 'Parameters you have provided failed use.';

        $error_array['ERR-0010'] = new stdClass();
        $error_array['ERR-0010']->code = 'ERR-0010';
        $error_array['ERR-0010']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0010']->severity = 3;
        $error_array['ERR-0010']->title = "Cannot create resource with supplied data";
        $error_array['ERR-0010']->detail = 'Cannot create resource with supplied data. Likely a reserved word has been used for a field name or there is already a field with this name or an invalid value for a field has been supplied.';

        $error_array['ERR-0011'] = new stdClass();
        $error_array['ERR-0011']->code = 'ERR-0011';
        $error_array['ERR-0011']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0011']->severity = 3;
        $error_array['ERR-0011']->title = "Cannot create read uploaded file.";
        $error_array['ERR-0011']->detail = 'Cannot create read uploaded file.';

        $error_array['ERR-0012'] = new stdClass();
        $error_array['ERR-0012']->code = 'ERR-0012';
        $error_array['ERR-0012']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0012']->severity = 3;
        $error_array['ERR-0012']->title = "Uploaded XML is invalid.";
        $error_array['ERR-0012']->detail = 'Uploaded XML is invalid.';

        $error_array['ERR-0013'] = new stdClass();
        $error_array['ERR-0013']->code = 'ERR-0013';
        $error_array['ERR-0013']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0013']->severity = 3;
        $error_array['ERR-0013']->title = "Could not delete specified resource.";
        $error_array['ERR-0013']->detail = 'Could not delete specified resource.';

        $error_array['ERR-0014'] = new stdClass();
        $error_array['ERR-0014']->code = 'ERR-0014';
        $error_array['ERR-0014']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0014']->severity = 3;
        $error_array['ERR-0014']->title = "Cannot delete default resource.";
        $error_array['ERR-0014']->detail = 'Cannot delete default resource.';

        $error_array['ERR-0015'] = new stdClass();
        $error_array['ERR-0015']->code = 'ERR-0015';
        $error_array['ERR-0015']->status = 'HTTP/1.1 403 Forbidden';
        $error_array['ERR-0015']->severity = 3;
        $error_array['ERR-0015']->title = "User not authorised";
        $error_array['ERR-0015']->detail = 'User attempted to perform an operation for which they are not authorised';

        $error_array['ERR-0016'] = new stdClass();
        $error_array['ERR-0016']->code = 'ERR-0016';
        $error_array['ERR-0016']->status = 'HTTP/1.1 404 Not Found';
        $error_array['ERR-0016']->severity = 3;
        $error_array['ERR-0016']->title = "File does not exist";
        $error_array['ERR-0016']->detail = 'A user attempted to access an file which does not exist, could not be read or is incorrectly formatted.';

        $error_array['ERR-0017'] = new stdClass();
        $error_array['ERR-0017']->code = 'ERR-0017';
        $error_array['ERR-0017']->status = 'HTTP/1.1 404 Not Found';
        $error_array['ERR-0017']->severity = 3;
        $error_array['ERR-0017']->title = "File not writable";
        $error_array['ERR-0017']->detail = 'A user attempted to write to an file which does not have write permissions set.';

        $error_array['ERR-0018'] = new stdClass();
        $error_array['ERR-0018']->code = 'ERR-0018';
        $error_array['ERR-0018']->status = 'HTTP/1.1 403 Forbidden';
        $error_array['ERR-0018']->severity = 3;
        $error_array['ERR-0018']->title = "User not authorised to use Org";
        $error_array['ERR-0018']->detail = 'A user attempted to write to an org_id to an object for which they do not have permission.';

        $error_array['ERR-0019'] = new stdClass();
        $error_array['ERR-0019']->code = 'ERR-0019';
        $error_array['ERR-0019']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0019']->severity = 3;
        $error_array['ERR-0019']->title = "Could not connect to LDAP";
        $error_array['ERR-0019']->detail = 'When attempting to connect to LDAP for Active Directory, could not.';

        $error_array['ERR-0020'] = new stdClass();
        $error_array['ERR-0020']->code = 'ERR-0020';
        $error_array['ERR-0020']->status = 'HTTP/1.1 401 Unauthorized';
        $error_array['ERR-0020']->severity = 3;
        $error_array['ERR-0020']->title = "User not authorised, credentials required";
        $error_array['ERR-0020']->detail = 'When attempting to access a resource, credentials are required.';

        $error_array['ERR-0021'] = new stdClass();
        $error_array['ERR-0021']->code = 'ERR-0021';
        $error_array['ERR-0021']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0021']->severity = 4;
        $error_array['ERR-0021']->title = "Required attributes not supplied";
        $error_array['ERR-0021']->detail = 'When attempting to create a resource, some attributes are required but missing.';

        $error_array['ERR-0022'] = new stdClass();
        $error_array['ERR-0022']->code = 'ERR-0022';
        $error_array['ERR-0022']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0022']->severity = 4;
        $error_array['ERR-0022']->title = "Required attributes not supplied (WHERE @filter)";
        $error_array['ERR-0022']->detail = 'When attempting to create a query, the supplied SQL did not contain the required WHERE @filter.';

        $error_array['ERR-0023'] = new stdClass();
        $error_array['ERR-0023']->code = 'ERR-0023';
        $error_array['ERR-0023']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0023']->severity = 2;
        $error_array['ERR-0023']->title = '';
        $error_array['ERR-0023']->detail = 'SQL command failed.';

        $error_array['ERR-0024'] = new stdClass();
        $error_array['ERR-0024']->code = 'ERR-0024';
        $error_array['ERR-0024']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0024']->severity = 3;
        $error_array['ERR-0024']->title = "Cannot create resource with supplied data";
        $error_array['ERR-0024']->detail = 'Cannot create resource with supplied data. A required field is missing.';

        $error_array['ERR-0025'] = new stdClass();
        $error_array['ERR-0025']->code = 'ERR-0025';
        $error_array['ERR-0025']->status = 'HTTP/1.1 400 Bad Request';
        $error_array['ERR-0025']->severity = 2;
        $error_array['ERR-0025']->title = '';
        $error_array['ERR-0025']->detail = 'Update did not supply PATCH data.';

        $error_array['ERR-0026'] = new stdClass();
        $error_array['ERR-0026']->code = 'ERR-0026';
        $error_array['ERR-0026']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0026']->severity = 3;
        $error_array['ERR-0026']->title = "Could not search LDAP";
        $error_array['ERR-0026']->detail = 'When attempting to search LDAP, something went wrong. Check user_dn and base_dn.';

        $error_array['ERR-0027'] = new stdClass();
        $error_array['ERR-0027']->code = 'ERR-0027';
        $error_array['ERR-0027']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0027']->severity = 3;
        $error_array['ERR-0027']->title = "Could not retrieve entries from LDAP";
        $error_array['ERR-0027']->detail = 'When attempting to retrieve the search data entries from LDAP, something went wrong.';

        $error_array['ERR-0028'] = new stdClass();
        $error_array['ERR-0028']->code = 'ERR-0028';
        $error_array['ERR-0028']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0028']->severity = 3;
        $error_array['ERR-0028']->title = "Could not bind to LDAP using dn_account";
        $error_array['ERR-0028']->detail = 'When attempting to bind to LDAP, failed. Check dn_account and dn_password.';

        $error_array['ERR-0029'] = new stdClass();
        $error_array['ERR-0029']->code = 'ERR-0029';
        $error_array['ERR-0029']->status = 'HTTP/1.1 500 Internal Server Error';
        $error_array['ERR-0029']->severity = 3;
        $error_array['ERR-0029']->title = "Could not bind to LDAP using user credentials";
        $error_array['ERR-0029']->detail = 'When attempting to bind to LDAP, failed. Check user credentials.';

        foreach ($error_array as $error_each) {
            $temp = explode(' ', $error_each->status);
            $error_each->status_code = intval($temp[1]);
            if ($error_each->severity == '3') {
                $error_each->severity_text = 'error';
            }
            if ($error_each->severity == '4') {
                $error_each->severity_text = 'warning';
            }
        }

        return $error_array;
    }
}


/* End of file error_helper.php */
/* Location: ./system/application/helpers/error_helper.php */
}
