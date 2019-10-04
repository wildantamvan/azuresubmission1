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
//$databaseName = 'dicodingfix1';
$databaseName = 'test';

$databaseUsername = 'wildan@dicodingfix1';
$databasePassword = 'Dicoding123';

$con=mysqli_init(); 

mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "dicodingfix1.mysql.database.azure.com", "wildan@dicodingfix1", {your_password}, {your_database}, 3306);

$mysqli = mysqli_real_connect($conn, $databaseHost, $databaseUsername, $databasePassword, $databaseName,3306); 
 
?>
