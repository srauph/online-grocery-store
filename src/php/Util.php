<?php

require_once("config.php");
require_once("Structures.php");

# This file contains main untility functions to communicate with server
function void_updateDataBase($string_DBName, $string_tableName, $int_idOfRow, $string_fieldName, $any_newValue)	{
	$servername = $db_server;
	$username = $db_username;
	$password = $db_password;
	$dbname = $string_DBName;
	
	// Create connection
	$conn2 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn2->connect_error) {
	  die("Connection failed: " . $conn2->connect_error);
	}
	
	$sql = "UPDATE " . $string_tableName . " SET " . $string_fieldName . "='" . $any_newValue . "' WHERE id=" . $int_idOfRow . "";
	
	if ($conn2->query($sql) === TRUE) {
	  echo "Record updated successfully";
	} else {
	  echo "Error updating record: " . $conn2->error;
	}
	
	$conn2->close();
}

function void_deleteFromDateBase($string_DBName, $string_tableName, $int_idRow)	{
	$servername = $db_server;
	$username = $db_username;
	$password = $db_password;
	$dbname = $string_DBName;

	// Create connection
	$conn2 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn2->connect_error) {
		die("Connection failed: " . $conn2->connect_error);
	}

	// sql to delete a record
	$sql = "DELETE FROM " . $string_tableName . " WHERE id=" . $int_idOfRow . "";

	if ($conn2->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn2->error;
	}

	$conn2->close();
}

function void_addUser($User_userObject, $string_DBName)	{
	$servername = $db_server;
	$username = $db_username;
	$password = $db_password;
	$dbname = $string_DBName;

	// Create connection
	$conn2 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn2->connect_error) {
	die("Connection failed: " . $conn2->connect_error);
	}

	$sql = "INSERT INTO users (id, username, password, email, cart)
	VALUES (, $User_userObject->$username, $User_userObject->$password, $User_userObject->email, $User_userObject->cart)";

	if ($conn2->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn2->error;
	}

	$conn2->close();
}

/**
 * Finds a user by a field. Ex: search user by username you type <code>void_getUser("username", "jshado")</code>
 */
function UsersArray_getUser($string_fieldName, $string_fieldValue)	{
	$servername = $db_server;
	$username = $db_username;
	$password = $db_password;
	$dbname = $string_DBName;
	$sql = "";

	// Create connection
	$conn2 = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn2->connect_error) {
		die("Connection failed: " . $conn2->connect_error);
	}

	if ($string_fieldName == "id")	{
		$sql = "SELECT * FROM users WHERE id=$string_fieldValue";
	} else if ($string_fieldName == "username")	{
		$sql = "SELECT * FROM users WHERE username='$string_fieldValue'";
	} else if ($string_fieldName == "email")	{
		$sql = "SELECT * FROM users WHERE email='$string_fieldValue'";
	} else	{
		throw new Exception("Cannot get a row by other than id, username or email! " . $string_fieldName . " is invalid choice");
	}

	$result = $conn2->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
		return $result;
	} else {
		return null;
	}
	$conn2->close();
}

function ItemsArray_getItem($string_fieldName, $string_fieldValue)	{
	$servername = $GLOBALS['db_server'];
	$username = $GLOBALS['db_username'];
	$password = $GLOBALS['db_password'];
	$dbname = $GLOBALS['db_name'];
	$sql = "";

	// Create connection
	//$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$conn = $GLOBALS['conn'];
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if ($string_fieldName == "id")	{
		$sql = "SELECT * FROM items WHERE id=$string_fieldValue";
	} else if ($string_fieldName == "name")	{
		$sql = "SELECT * FROM items WHERE name='$string_fieldValue'";
	} else if ($string_fieldName == "cost")	{
		$sql = "SELECT * FROM items WHERE cost=$string_fieldValue";
	} else if ($string_fieldName == "category")	{

		// TODO: Change this (Category is an array)
		$sql = "SELECT * FROM items WHERE category='$string_fieldValue'";
	} else if ($string_fieldName == "onsale")	{
		$sql = "SELECT * FROM items WHERE onsale=$string_fieldValue";
	} else	{
		throw new Exception("Cannot get a row by other than id, username or email! " . $string_fieldName . " is invalid choice");
	}

	$result = $conn->query($sql);
	$array = array();
	while($row = $result->fetch_assoc())	{
		array_push(
			$array, 
			new Item($row['id'], $row['name'], $row['category'], $row['image'], $row['cost'], $row['quantity'], $row['onsale'], $row['description'])
		);
	}

	if ($result->num_rows > 0) {
	// output data of each row
		return $array;
	} else {
		return null;
	}
	$conn->close();
}

function ItemArray_getAllItems()	{

	$servername = $GLOBALS['db_server'];
	$username = $GLOBALS['db_username'];
	$password = $GLOBALS['db_password'];
	$dbname = $GLOBALS['db_name'];
	$sql = "SELECT * FROM items";

	// Create connection
	//$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	$conn = $GLOBALS['conn'];
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query($sql);
	$array = array();
	while($row = $result->fetch_assoc())	{
		array_push(
			$array, 
			new Item($row['id'], $row['name'], $row['category'], $row['image'], $row['cost'], $row['quantity'], $row['onsale'], $row['description'])
		);
	}

	if ($result->num_rows > 0) {
	// output data of each row
		return $array;
	} else {
		return null;
	}
	$conn->close();
}

?>