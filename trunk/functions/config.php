<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_ebtt');
define('DB_USER','sapEBTT');
define('DB_PASSWORD','pR9vLLXybhcXWjEu');

define('Italia','118');

/*
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
*/

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if ($mysqli->connect_errno) {
	echo "Impossibile connettersi a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>