<?php
function setLocalDBCredentials(){
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "Changomas1";
	$mysql_database = "mydb";
	$prefix = "";
	$db = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_database", $mysql_user, $mysql_password);
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	return $db;	
}

?>