<?php
session_start();
require_once('php/config.php');
//phpinfo();
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Login</title>
	<script src="scripts/item.js"></script>
	<script src="scripts/sales.js"></script>
	<script type="module" src="scripts/main.js"></script>
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
				<form action="login.php" method="POST">	
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

        
		<div class="login_form" style="font-family: 'Roboto';">
			<br />
			<br />
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


        </body>
        </html>