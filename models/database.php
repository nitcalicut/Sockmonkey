<?php
/**
* General functions used in the models are defined here.
* @license http://www.gnu.org/licenses/gpl.html GNU General Public License 
* @package general
*/

	/**
	* Include database settings.
	*/
	include_once '../settings/settings.php';

	/**
	* Function to connect to the database. Creates a persistent connection.
	* @return resource Database connection resource.
	*/
	function dbconnect()
	{
		global $global_db_username;
		global $global_db_password;
		global $global_db_host;
		global $global_db_port;
		global $global_db_name;
		$dbconn = pg_pconnect("host=$global_db_host port=$global_db_port	dbname=$global_db_name user=$global_db_username password=$global_db_password");
		return $dbconn;
	}

	/**
	* Function to query database.
	* @param string $sql A sql query. Any variable in sql statement MUST be escaped.
	* @return result_resource Result resource.
	*/
	function dbquery($sql)
	{
		dbconnect();
		return pg_query($sql);
	}

	/**
	* This function take a postgres result resource as an input and converts it to 
	* an array.
	* @param resource $res Result resource from a PSQL database
	* @return array resource is converted into array and returned.
	*/
	function resource2array($res)
	{
		$arr=array();
		while($row=pg_fetch_row($res))
			$arr=array_merge($arr,$row);
		return $arr;
	}

?>
