<?php
require_once(__DIR__ . "/../model/database.php");
//connect to the mysql database using the localhost server
$connection = new mysqli($host, $username, $password);
//checks connection and puts error/success connection
if($connection->connect_error){
  die("Error: ".$connection->connect_error);
}
else{
  echo "Success: ".$connection->host_info;
}

$connection->close();

