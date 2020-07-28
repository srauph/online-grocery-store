<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
        <title>Beverages</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		</head>
	<body>
		<div id="__top_banner">
			<a class="white" href="login.php" title="Login to your account">Login</a>
			
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
		
		<h1 style="font-size:48; padding:2%; text-align:center; background-color:white;">Beverages</h1>	

		<div id="beverage_grid">

			<div id="categories">

				<h3 style="margin-right:100%;">Categories</h3>

				<div class="sub_menus" id="aisle_categories" onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">
					<form action="frozen.php" method="POST">
						<ul>
							<li><input type="submit" name="tag_search_btn" value="Bakery" formaction="bakery.php"></li>
							<li><input type="submit" name="tag_search_btn" value="Beauty Products" formaction="beautyproducts.php"></li>
							<li><input type="submit" name="tag_search_btn" value="Beverages" formaction="beverages.php"></li>
							<li><input type="submit" name="tag_search_btn" value="Frozen" formaction="frozen.php"></li>
							<li><input type="submit" name="tag_search_btn" value="Fruits" formaction="fruits.php"></li>
							<li><input type="submit" name="tag_search_btn" value="Vegetables" formaction="vegetables.php"></li>
							<li><input type="submit" name="tag_search_btn" value="Dairy Products" formaction="dairyproducts.php"></li>
							<li><input type="submit" name="tag_search_btn" value="Snacks" formaction="snacks.php"></li>
						</ul>
					</form>
				</div>
			</div>

			<div id="beverages">
				<div id="beverage_items">
					
					<table id="beverage_table">
						<tr style="text-align:center; height:80px; background-color:white;">
							<br><th colspan="4"><h2 style="color:crimson;"> Click on a product image (or its corresponding title) to go to the corresponding product page.</h2></th>
						</tr>

						<tr style="text-align:center; height:80px; background-color:white;">
							<th><h2>Product Image</h2></th>
							<th><h2>Product Title</h2></th>
							<th><h2>Brief Description</h2></th>
							<th><h2>Product Price</h2></th>
						</tr>

						<tr class="beverage_list">
							<td><a href="sprite.php">
								<img src="../assets/images/sprite.jpg" style="width:100px; height=100px;" alt="Sprite Can">
								</td></a>
							<td><a href="sprite.php" style="color:mediumslateblue;">Sprite (355mL Can)</td></a>
							<td>A 355mL can of Sprite.</td>
							<td>$0.99</td>
						</tr>

						<tr class="beverage_list">
							<td><a href="cocacola.php">
								<img src="../assets/images/cocacola.jpg" style="width:100px; height=100px;" alt="Coca-Cola Can">
								</td></a>
							<td><a href="cocacola.php" style="color:mediumslateblue;">Coca-Cola (355mL Can)</td></a>
							<td>A 355mL can of Coca-Cola.</td>
							<td>$0.99</td>
						</tr>
						
					</table>
				</div>			
			</div>
		</div>

		<br />
		<br />
		</div>
		
		<div id="footer">
   <center>
   <table>

	   <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
   <td></td><td></td><td></td><td></td><td></td><td></td>

   <th><h3 style="color:white; text-align:center;">Caliprex<h3>			

		
   <tr> 
		<th><h3 style="color:white; font-style:robotto;"> <br>Subscribe to our Newsletter!</h3>
		<td></td>
		<td></td>
		<td></td>
	  <th> <input type="text" style="height:30px;font-size:20;width:200px;"placeholder="Email address">
	 <th> <input type="submit" id="btn_work" class="btn" size="20"; value="GO">
	 <td><pre>	</pre></td>
	<th><a href="https://www.facebook.com/Caliprex-121401789649042" target="_blank"><image src="assets/Icons/facebook.png" alt="Facebook image"style="float:right; margin-right:0.5em" width="50" height="35"></a>
	<th><a href="https://www.instagram.com/caliprex/" target="_blank"><image src="assets/Icons/instagram.png" alt="Instagram image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
	<th><a href="https://twitter.com/caliprex" target="_blank"><image src="assets/Icons/twitter.png" alt="Twitter image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
	<th><a href="https://Pintrest.com/caliprex" target="_blank"><image src="assets/Icons/pinterest.png" alt="Pintrest image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
	<th><a href="https://www.youtube.com/channel/UCvZRW67axwzk6fw5dBSw-iQ?view_as=subscriber" target="_blank"><image src="assets/Icons/youtube.png" alt="Youtube image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
	
	<th><a href="contactus.php" style="color:white;"><h3>About Us |</a></h3>      
	<th><a href="login.php" ><h3 style="color:white;">Login</h3></a>

</tr>

</table>
</center>
</div>
</body>
</html>