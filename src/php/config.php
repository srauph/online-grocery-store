<?php
/*For My LocalPC*/
// Create connection
$conn = new mysqli("localhost", "root", "mysql2020", "soen_287_project");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>