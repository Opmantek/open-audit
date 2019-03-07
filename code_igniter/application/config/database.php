<?php  if (! defined('BASEPATH')) {
     exit('No direct script access allowed');
 }
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
                 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] true/false - Whether to use a persistent connection
|	['db_debug'] true/false - Whether database errors should be displayed.
|	['cache_on'] true/false - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = "default";
$active_record = true;

$db['default']['hostname'] = "127.0.0.1";
$db['default']['username'] = "openaudit";
$db['default']['password'] = "openauditpassword";
$db['default']['database'] = "openaudit";
$db['default']['dbdriver'] = "mysqli";
$db['default']['dbprefix'] = "";
$db['default']['pconnect'] = true;
$db['default']['db_debug'] = true;
$db['default']['cache_on'] = false;
$db['default']['cachedir'] = "";
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";
$db['default']['stricton'] = false;

if (file_exists('/usr/local/open-audit/code_igniter/application/config/config.json')) {
	if (!empty($_SERVER['HTTP_HOST'])) {
		$company = explode('.', $_SERVER['HTTP_HOST']);
		$name = $company[0];
		unset($company);
		$file_config = @file_get_contents('/usr/local/open-audit/code_igniter/application/config/config.json');
		if (!empty($file_config)) {
			$json_config = json_decode($file_config);
			unset($file_config);
			foreach ($json_config as $item) {
				if ($item->name === $name) {
					$db['default']['hostname'] = $item->hostname;
					$db['default']['username'] = $item->username;
					$db['default']['password'] = $item->password;
					$db['default']['database'] = $item->database;
				}
			}
			unset($json_config);
			unset($name);
		}
	}
}

/* End of file database.php */
/* Location: ./system/application/config/database.php */
