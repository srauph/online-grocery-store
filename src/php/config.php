<?php
/*For My LocalPC*/
// Create connection

$DEV_MODE = false;

$db_server = "localhost";
$db_username = "root";
$db_name = "soen_287_project";
$db_password = "";
$db_port = "80";

$conn;
if ($DEV_MODE == false) {
  $db_server = "remotemysql.com";
  $db_username = "IvqolEzAXD";
  $db_name = "IvqolEzAXD";
  $db_password = "kLbKsvhkYf";
  $db_port = "3306";

  $conn = new mysqli($db_server, $db_username, $db_password, $db_name, $db_port);
} else  {
  $conn = new mysqli($db_server, $db_username, $db_password, $db_name);
}


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>