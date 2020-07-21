<?php
session_start();
require_once('php/config.php');
//phpinfo();
?>
<html>
	<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>All items page</title>
		<script type="text/javascript" src="scripts/Util.js"></script>
		<script type="text/javascript" src="scripts/Cart.js"></script>
		<script type="text/javascript" src="scripts/Item.js"></script>
		<script type="text/javascript" src="scripts/Sales.js"></script>
		<script type="text/javascript" src="scripts/AbstractComponent.js"></script>
		<script type="text/javascript" src="scripts/main.js"></script>
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
					<img src="assets/Icons/cart.png" style="float:left; margin-right:0.5em" width="25" height="25">
					<span id="cart_total_value">
						$0.00
					</span>
				</button>
			</a>
		</div>

        <!-- Menu is here -->	
        <div>
            <div id="menu">
			<ul>
					<li onclick="goto('index.php')">Home</li>
					<li onclick="goto('all_items.php')">All products</li>
					<li onclick="goto('aisle.php')">Aisle</li>
					<li onclick="goto('contactus.php');">Contact us</li>
				<ul>
            </div>		
            <div>				
                <div class="sub_menus" id="menu_aisle" onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">
                    <form action="index.php" method="POST">	
                        <ul>
                            <li><input type="submit" name="__tag_search_btn" value="Bakery"></li>
                            <li><input type="submit" name="__tag_search_btn" value="Beauty Products"></li>
                            <li><input type="submit" name="__tag_search_btn" value="Beverages"></li>
                            <li><input type="submit" name="__tag_search_btn" value="Frozen"></li>
                            <li><input type="submit" name="__tag_search_btn" value="Fruit"></li>
                            <li><input type="submit" name="__tag_search_btn" value="vegetables"></li>
                            <li><input type="submit" name="__tag_search_btn" value="Dairy Products"></li>			
                            <li><input type="submit" name="__tag_search_btn" value="Snacks"></li>					
                        </ul>
                    </form>
                </div>			
            </div>
        </div>
		<br />
		<br />

		<!-- display all the items -->
        <div id="all_items">
        
			<?php 
				include "php/Util.php";
			
				// load all the items in the database
				$result = ItemArray_getAllItems();
				sort($result);
				
				// Loop throught the items and display them all
				echo `<div id="void_displayItems">`;
				for ($i = 0; $i < count($result); $i++)	{
					void_displayItem($result[$i]);
				}
				echo "</div>";
				
				function void_displayItem(Item $item): void {

					$des = string_reduceChars($item->description, 30);		

					echo "
							<div class=\"__search_result_block\">
								<h1>$item->name</h1>
								<img src=\"assets/images/$item->image\" title=\"$item->name\" />
								<br />
								<br />
			
								<span>$des</span>
			
								<br />
			
								<h2>$$item->cost</h2>
			
								<form action=\"itemDescription.php?id=$item->id\">
									<input class=\"__learn_more_btn\" type=\"submit\" value=\"Learn more\" />
			
									<!-- Add to cart button -->
			
									<input type=\"button\" value=\"Add to cart\" onclick=\"cart.void_add(
										new Item($item->id, '$item->name', '$item->category', '$item->image', $item->cost
						, $item->quantity}, $item->onsale)
										)\" />
								</form>
								
							</div>
						";				
				}
			
				function string_reduceChars(string $originalString, int $maxChars): string {
					if (strlen($originalString) <= $maxChars)
						return $originalString;
					else {
						return substr($originalString, 0, $maxChars - 1) . "...";
					}
				}
			?>
		
		</div>
		<br />
		<br />
		<!-- FOOTER HERE -->
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
					<th><a href="https://www.facebook.com/Caliprex-121401789649042" target="_blank"><img src="assets/Icons/facebook.png" alt="Facebook image"style="float:right; margin-right:0.5em" width="50" height="35"></a>
					<th><a href="https://www.instagram.com/caliprex/" target="_blank"><img src="assets/Icons/instagram.png" alt="Instagram image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
					<th><a href="https://twitter.com/caliprex" target="_blank"><img src="assets/Icons/twitter.png" alt="Twitter image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
					<th><a href="https://Pintrest.com/caliprex" target="_blank"><img src="assets/Icons/pinterest.png" alt="Pintrest image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
					<th><a href="https://www.youtube.com/channel/UCvZRW67axwzk6fw5dBSw-iQ?view_as=subscriber" target="_blank">
					<img src="assets/Icons/youtube.png" alt="Youtube image" style="float:right; margin-right:0.5em" width="50" height="35"></a>
					<th><a href="contactus.php" style="color:white;"><h3>About Us |</a></h3>      
					<th><a href="login.php" ><h3 style="color:white;">Login</h3></a>
			</tr>
			</table>
			</center>
		</div>
	</body>
</html>
