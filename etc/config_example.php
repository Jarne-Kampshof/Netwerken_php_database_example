<?php
/* Database credentials. Assuming you are running MySQL server.
Please change this file to config.php and change these defines: */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'QBLGSnRNdpZuKdbuerX6');
define('DB_NAME', 'databasename');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>