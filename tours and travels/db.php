<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'dark');

$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die( "Cannot Connect To Database");

if(!$con)
{
   echo "Cannot Connect To Database";
   die();
}
?>