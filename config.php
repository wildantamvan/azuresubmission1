<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'dicodingfix1.mysql.database.azure.com';
$databaseName = 'dicodingfix1';
$databaseUsername = 'wildan@dicodingfix1';
$databasePassword = 'Dicoding123';

$con=mysqli_init();
$mysqli = mysqli_connect($con, $databaseHost, $databaseUsername, $databasePassword, $databaseName,3306); 
 
?>
