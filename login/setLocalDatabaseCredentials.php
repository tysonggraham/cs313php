<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "Changomas1";
$mysql_database = "mydb";
$prefix = "";
$bd->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>