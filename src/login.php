<?php
session_start();
require_once('php/config.php');
//phpinfo();
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Login</title>
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
		<a class="white" href="register.php" title="First time user? Register now!">Register</a>

		<!-- cart -->
		<a href="cart.php">
			<button id="cart_button">
			<br>
			<br>
				<img src="../assets/Icons/cart.png" style="float:left; margin-right:0.5 em" width="25" height="25">
				<span id="cart_total_value">
					$0.00
				</span>
			</button>
		</a>
	</div>

        
		<div class="login_form" style="font-family: 'Roboto';">
			<br />
			<br />
				<h1 class="center">Sign In</h1><br>
				<form action="#" method="post">				
			<center>			
				<table>
						<tr>
							<td><h5>Username <span class="red">*</span></h5></td>        
						</tr>
						<tr>
							<td><input style="height:55px; font-size:16;" type="text" name="username" size="20" placeholder="Username..." required="true"></td>
							<tr></tr> <tr></tr> <tr></tr> <tr></tr><tr></tr> <tr></tr> <tr></tr> <tr></tr>
							</tr>
						
							<tr>
							<td>
								<h5>Password <span class="red">*</span></h5>
								</td>
								
							</tr>
							<tr>
							<td><input style="height:55px;font-size:16" type="password" name="Password" placeholder="Password..." required="true"></td>
							</tr>
					</table>
					<br>
						
					<a class="black" href="forgetpassword.php" title="Can't remember your password?"><small>Forgotten your password?</small></a><br><br>
						
					<input class="btn btn-success" type="submit" value="Login">
					</div>
				</form>	
			</center>
		</div>
        </body>
        </html>