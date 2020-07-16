<html>
	<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Aisle page</title>
        </head>
	<body>
		<div id="__top_banner">
			<a class="white" href="login.php" title="Login to your account">Login</a>
			|
			<a class="white" href="register.php" title="First time user? Register now!">Register</a>

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
				<li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</li>
				<li>Contact us</li>
			<ul>
        </div>		
        
		<div id="categories">

            <h3 style="margin-right:100%; padding:2%;">Categories</h3>	

			<div class="sub_menus" id="aisle_categories" onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">
				<form action="aisle.php" method="POST">	
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
		</div>
		<div id="__search_result">
        </div>
       
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
						<li>IGA gift cards</li>
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