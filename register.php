<?php
session_start();
require_once('php/config.php');
//phpinfo();
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Store main page</title>
	<script src="scripts/item.js"></script>
	<script src="scripts/sales.js"></script>
	<script type="module" src="scripts/main.js"></script>
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

	<div id="menu">
			<ul>
				<li><a href="index.php">Home</li></a>
				<li>Sales</li>
				<li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');"><a href="aisle.php">Aisle</li></a>
				<li>Contact us</li>
			<ul>
		</div>		
		<div>				
			<div class="sub_menus" id="menu_aisle" onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">
				<form action="register.php" method="POST">	
					<ul>
						<li><input type="submit" name="__tag_search_btn" value="Bakery"></li>
						<li><input type="submit" name="__tag_search_btn" value="Beauty Products"></li>
						<li><input type="submit" name="__tag_search_btn" value="Beverages"></li>
						<li><input type="submit" name="__tag_search_btn" value="Frozen"></li>
						<li><input type="submit" name="__tag_search_btn" value="Fruit"></li>
						<li><input type="submit" name="__tag_search_btn" value="Dairy Products"></li>			
						<li><input type="submit" name="__tag_search_btn" value="Snacks"></li>					
					</ul>
				</form>
			</div>			
		</div>
		<br />
		<br />

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
	<div id="__footer">
			<ul id="__outer_ul">
				<li>
					<b>Online</b>
					<br />
					<ul>
						<li>Online grocery</li>
						<li>Online buffet</li>
						<li>Videos</li>
						<li>Blog</li>
					</ul>					
				</li>
				<li>
					<b>Promotions </b>
					<br />
					<ul>						
						<li>Newsletter</li>
						<li>AIR MILEStm</li>
						<li>Promotions & rewards</li>
						<li>Gasoline discount</li>
						<li>X gift cards</li>
						<li>Flyer</li>
						<li>Contests</li>
					</ul>					
				</li>
				<li>
					<b>Customer Service</b>
					<br />
					<ul>
						<li>Contact us</li>
						<li>Terms and conditions</li>
						<li>Privacy Policy</li>
						<li>Find a store</li>
						<li>FAQ	</li>		
					</ul>
				</li>
			<ul>
		</div>

	<?php
	include "php/debug.php";

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