<?php
/*
This file contains database connection configurationuser "root" and password ""
*/

define('DB_SERVER', 'localhost');/* localhost */ /* sql110.epizy.com */
define('DB_USERNAME', 'root');/* root */ 
define('DB_PASSWORD', '');/*  */ 
define('DB_NAME', 'wp_project');/* wp_project */ 

// $database - variable
$database = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($database == false){
dir('Error: Cannot connect');
}


?>
