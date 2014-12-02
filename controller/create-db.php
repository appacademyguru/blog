<?php
require_once(__DIR__ . "/../model/database.php");
//connect to the mysql database using the localhost server
$connection = new mysqli($host, $username, $password);
//checks connection and puts error/success connection
if($connection->connect_error){
  die("Error: ".$connection->connect_error);
}
$exists = $connection->select_db($database);
//checks if the database exists
if(!$exists){
  //if it doesn't, creates it
  $query = $connection->query("CREATE DATABASE $database");
  
  if($query){
    "Successfully created database: ". database;
  }
}
//if it does, echoes message
else{
  echo "Database already exists";
}

$connection->close();

