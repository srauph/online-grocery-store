<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/backend_products.css"/>
	<title>
		List of products
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="scripts/Util.js">
		
	</script>
</head>
<body>
	<div id="__top_banner" class="black">
		<a class="white" href="login.php" title="Login to your account">
			Login
		</a>
		|
		<a class="white" href="register.php" title="First time user? Register now!">
			Register
		</a>
		<!-- cart -->
		<a href="cart.php">
			<button id="cart_button">
				<br>
				<br>
				<img src="../assets/Icons/cart.png" id="cart_logo"/>
				<span id="cart_total_value">
					$0.00
				</span>
			</button>
		</a>
	</div>
	<div id="menu">
		<ul>
			<li onclick="goto('productedit.php')">
				Edit a product
			</li>
		</ul>
	</div>
	<div class="products_list">
		<div class="border_products_list">
			<table class="table_products_list">
				<tr>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Product Image
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Product Name
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Quantity
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Category
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								In Stock Inventory
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Total Price
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Add a Product
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Delete a Product
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Edit a Product
							</h2>
						</div>
					</th>
				</tr>
				<tr>
					<td class="data_cell_table">
						<img src="../../assets/Images/apple.jpg" alt="green apples image" class="image_size"/>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								Green Apples
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<input type="number" class="inputs_table" placeholder="QUANTITY"/>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								Fruits
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								20
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								$1.99
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Add" formaction="productedit.php"/>
							</form>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Delete" formaction=""/>
							</form>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Edit" formaction="productedit.php"/>
							</form>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="border_products_list">
			<table class="table_products_list">
				<tr>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Product Image
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Product Name
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Quantity
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Category
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								In Stock Inventory
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Total Price
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Add a Product
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Delete a Product
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Edit a Product
							</h2>
						</div>
					</th>
				</tr>
				<tr>
					<td class="data_cell_table">
						<img src="../../assets/Images/carrots.jpg" alt="carrots image" class="image_size"/>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								Carrots
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<input type="number" class="inputs_table" placeholder="QUANTITY"/>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								Vegetables
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								30
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								$1.29
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Add" formaction="productedit.php"/>
							</form>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Delete" formaction=""/>
							</form>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Edit" formaction="productedit.php">
							</form>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="border_products_list">
			<table class="table_products_list">
				<tr>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Product Image
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Product Name
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Quantity
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Category
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								In Stock Inventory
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Total Price
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Add a Product
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Delete a Product
							</h2>
						</div>
					</th>
					<th class="header_table">
						<div>
							<h2 class="grey_products_list">
								Edit a Product
							</h2>
						</div>
					</th>
				</tr>
				<tr>
					<td class="data_cell_table">
						<img src="../../assets/Images/strawberry.jpg" alt="strawberries image" class="image_size"/>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								Strawberries
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<input type="number" class="inputs_table" placeholder="QUANTITY"/>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								Fruits
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								10
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<h2>
								$4.99
							</h2>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Add" formaction="productedit.php"/>
							</form>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Delete" formaction=""/>
							</form>
						</div>
					</td>
					<td class="data_cell_table">
						<div>
							<form method="POST">
								<input type="submit" class="btn_products_list" value="Edit" formaction="productedit.php"/>
							</form>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>

<footer id="footer_products_list">
	<!-- FOOTER HERE -->
	<div>
		<center>
			<table>
				<tr>

				</tr>
				<tr>

				</tr>
				<tr>

				</tr>
				<tr>

				</tr>
				<tr>

				</tr>
				<tr>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<th>
						<div>
							<h3 class="h3_heading_footer">
								Caliprex
							</h3>
						</div>
					</th>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
				</tr>
				<tr>
					<th>
						<div>
							<h3 class="h3_heading_footer">
								Subscribe to our Newsletter!
							</h3>
						</div>
					</th>
					<td>

					</td>
					<td>

					</td>
					<td>

					</td>
					<th>
						<div>
							<input type="text" id="email_address_footer" placeholder="Email Address"/>
						</div>
					</th>
					<th>
						<div>
							<input type="submit" id="btn_work" class="btn" size="20"; value="GO"/>
						</div>
					</th>
					<td>
						<pre>						   

                        </pre>
					</td>
					<th>
						<a href="https://www.facebook.com/Caliprex-121401789649042" target="_blank">
							<img src="../../assets/Icons/facebook.png" alt="Facebook image" class="logos_footer"/>
						</a>
					</th>
					<th>
						<a href="https://www.instagram.com/caliprex/" target="_blank">
							<img src="../../assets/Icons/instagram.png" alt="Instagram image" class="logos_footer"/>
						</a>
					</th>
					<th>
						<a href="https://twitter.com/caliprex" target="_blank">
							<img src="../../assets/Icons/twitter.png" alt="Twitter image" class="logos_footer"/>
						</a>
					</th>
					<th>
						<a href="https://Pintrest.com/caliprex" target="_blank">
							<img src="../../assets/Icons/pinterest.png" alt="Pintrest image" class="logos_footer"/>
						</a>
					</th>
					<th>
						<a href="https://www.youtube.com/channel/UCvZRW67axwzk6fw5dBSw-iQ?view_as=subscriber" target="_blank">
							<img src="../../assets/Icons/youtube.png" alt="Youtube image" class="logos_footer"/>
						</a>
					</th>
					<th>
						<div>
							<h3 class="h3_heading_footer">
								<a href="contactus.php">
									About Us
								</a>
								|
							</h3>
						</div>
					</th>
					<th>
						<div>
							<h3 class="h3_heading_footer">
								<a href="login.php">
									Login
								</a>
							</h3>
						</div>
					</th>
				</tr>
			</table>
		</center>
	</div>
</footer>
</body>
</html>