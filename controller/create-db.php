<?php
require_once(__DIR__ . "/../model/database.php");
//connect to the mysql database using the localhost server
$connection = new mysqli($host, $username, $password);
//checks connection and puts error/success connection
if($connection->connect_error){
  die("<p>Error: ".$connection->connect_error . "</p>");
}
$exists = $connection->select_db($database);
//checks if the database exists
if(!$exists){
  //if it doesn't, creates it
  $query = $connection->query("CREATE DATABASE $database");
  
  if($query){
    echo "<p>Successfully created database: ". database . "</p>";
  }
}
//if it does, echoes message
else{
  echo "<p>Database already exists.</p>";
}
//create table to store posts and ids
$query = $connection->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if($query){
  echo "<p>Successfully created table: posts</p>";
}
else{
  echo "<p>$connection->error</p>";
}

$connection->close();

