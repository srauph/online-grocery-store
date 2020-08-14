<?php
session_start();
$_SESSION["currentLogin"] = null;
header("Location: ../login.php");
exit();
?>