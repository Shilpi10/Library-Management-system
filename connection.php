<?php

$hostname = 'localhost';        
$dbname   = 'lib_db'; 
$username = 'root';             
$password = '';  
/*$dbh = new PDO('mysql:host=localhost;dbname=lib_db;port = 3308', $username, $password);
if (!defined('PDO::ATTR_DRIVER_NAME')) {
echo 'PDO is unavailable<br/>';
}
elseif (defined('PDO::ATTR_DRIVER_NAME')) {
echo 'PDO is available<br/>';
}*/

$con=mysqli_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');
mysqli_select_db($con,$dbname) or DIE('Database name is not available!');

?> 
