<html>
	<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Store main page</title>
		<script src="scripts/Util.js"></script>
		<script src="scripts/Cart.js"></script>
		<script src="scripts/item.js"></script>
		<script src="scripts/sales.js"></script>
		<script type="module" src="scripts/main.js"></script>
<!-- Load on sale items to display them-->
<?php
	include "php/Util.php";

	$result = ItemsArray_getItem("onsale", 1);
	
	// Convert this to JS array
	$js_array = "[";

	// foreach ($result as $value)	{
		
	// }

	for ($i = 0; $i < count($result); $i++) {
		$js_array = $js_array . "new Item(". $result[$i]->toString() ."), ";
	 }

	$js_array = $js_array . "]";

	// Exceute script
	echo "<script>window.addEventListener('load', function()	{
			Sales.void_processSales($js_array);
	});</script>";
?>
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

        <!-- Menu is here -->	
        <div>
            <div id="menu">
                <ul>
                    <li onclick="goto('index.php')">Home</li>
                    <li onclick="goto('all_items.php');">All products</li>
                    <li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</li>
                    <li>Contact us</li>
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

        <div id="all_items">
        </div>

        <!-- FOOTER HERE -->
        <div id="__footer">
			Place holder
		</div>


        <?php 
        
            // load all the items in the database
            $result = ItemArray_getAllItems();
            
            // Convert this to JS array
			$js_array = "[";

			for ($i = 0; $i < count($result); $i++) {
				$js_array = $js_array . "new Item(". $result[$i]->toString() ."), ";
			}

            $js_array = $js_array . "]";
            
			// Exceute script
			echo "<script>window.addEventListener('load', function()	{
				Sales.void_displayItems($js_array, 'all_items');
			});</script>";        
        ?>
	</body>
</html>