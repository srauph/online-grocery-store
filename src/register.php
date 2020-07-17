<?php
session_start();
require_once('php/config.php');
//phpinfo();
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Store main page</title>
		<script type="text/javascript" src="scripts/Util.js"></script>
		<script type="text/javascript" src="scripts/Cart.js"></script>
		<script type="text/javascript" src="scripts/Item.js"></script>
		<script type="text/javascript" src="scripts/Sales.js"></script>
		<script type="text/javascript" src="scripts/AbstractComponent.js"></script>
		<script type="text/javascript" src="scripts/main.js"></script>
</head>

<body>
	<div id="__top_banner">
		<a class="white" href="index.php" title="Home page">Home</a>
		|
		<a class="white" href="login.php" title="Already a memeber? Login in here">Login</a>

		<!-- cart -->
		<a href="cart.php">
			<button id="cart_button">
				<br>
				<br>
				<img src="../assets/Icons/cart.png" style="float:left; margin-right:0.5em" width="25" height="25">
				<span id="cart_total_value">
					$0.00
				</span>
			</button>
		</a>
	</div>
	<div class="registration_form">
		<div class="message">
			<div id="user_registered" class="ok_message">
				Your account has been created successfully please <b><a href="login.php">sign in here</a></b> to access it.
			</div>
			<div id="pass_error" class="error_message">
				Password and password confirmation don't match!
			</div>
			<div id="user_error" class="error_message">
				This Username Already exists... Please try another username!
			</div>
			<div id="email_error" class="error_message">
				This register email has been already used... Please try another email!
			</div>
			<div id="query_error" class="error_message">
				Error! An error has occured while processing PHP query
			</div>
		</div>
		<form method="POST" action="register.php">
			<h1>Sign up</h1>
			<table>
				<tr>
					<td>Username</td>
				</tr>
				<tr>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>email</td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="name@example.com"></td>
				</tr>
				<tr>
					<td>Password</td>
				</tr>
				<tr>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm password</td>
				</tr>
				<tr>
					<td><input type="password" name="confirm_password"></td>
				</tr>
			</table>
			<input type="submit" name="register" class="btn" value="Register" />
		</form>
	</div>

	<?php

	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['confirm_password'];
		$email = $_POST['email'];

		if ($conn == false) {
			echo "Connection error";
		}

		if ($password == $cpassword) {

			$query = "SELECT * FROM users WHERE username='$username'";
			$query_run = mysqli_query($conn, $query);
			$query2 = "SELECT * FROM users WHERE email='$email'";
			$query_run2 = mysqli_query($conn, $query2);

			if (mysqli_num_rows($query_run) > 0) {
				// there is already a user with the same username
				echo '<script type="text/javascript">document.getElementById("user_error").style.display = "block";</script>';
			} else if (mysqli_num_rows($query_run2) > 0) {
				// there is already a user with the same email
				echo '<script type="text/javascript">document.getElementById("email_error").style.display = "block";</script>';
			} else {

				$query4 = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `cart`) VALUES (NULL, '$username', '$password', '$email', '');";

				if ($conn->query($query4) === TRUE) {
					echo '<script type="text/javascript">document.getElementById("user_registered").style.display = "block";</script>';
				   } else {
					echo '<script type="text/javascript">document.getElementById("query_error").style.display = "block";</script>';
					echo "Error: " . $sql . "<br>" . $conn->error;
				   }
			}
		} else {
			echo '<script type="text/javascript">document.getElementById("pass_error").style.display = "block";</script>';
		}
	}
	?>
</body>

</html>