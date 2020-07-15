<?php
/*For My LocalPC*/
// Create connection
$conn = new mysqli("localhost", "root", "", "soen_287_project");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>