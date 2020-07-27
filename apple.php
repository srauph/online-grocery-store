<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Green Apples</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
	<body >
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
			<a href="aisle.php">	<li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</li></a>
				<li>Contact us</li>
			<ul>
        </div>	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                   <img src="../assets/images/apple.jpg" title="Green Apples" width="350" style="margin-left:2%" height="350">
                   <br>
                   <h1 style="margin-left:3%"> PRODUCT DESCRIPTION</h1>
                   <br>
<button type="submit" class="btn" style= "width:200; margin-left:5%; size=20";>MORE DESCRIPTION</button><br><br>
                       

                        <br>
                        <br>


                       <pre><h1>  Fresh green apples picked from Quebec's highest quality
  and largest farms for your favourite breakfasts and meals. </h1></pre>
<br>
<br>
                        <pre><h1>  Product Number: 0597498968753</h1></pre>
              

 

<div class="cart_right3">

    <h3>Selection</h3>
    <h1>Green Apples</h5>
    <label class="red">SIZE</label>
    <br>
    <select style="text-align:center; width:90; height:45; font-size:20;" >
        <option style="font-size:20;" ><h1>Small</h1></option>
        <option style="font-size:20;"><h1>Large</h1>
    </option>
</select>
<br>
    <br>
    <br>
    <br>
    <label class="red">Quantity</label>
    <br>
    <input type="number" max="10" min="1" style="text-align:center; width:90; height:45;" placeholder="QUANTITY"/>
    <br>
    <br>
    <br>
    <br>
    <label class="red"> Type</label>
    <br>
    <select style="text-align:center; width:90; height:45; font-size:15;" >
        <option style="font-size:20;" ><h4>Hard</h4></option>
        <option style="font-size:20;"><h4>Soft</h4>
    </option>
</select>

   <pre> <h1 class="red";>$1.99   ea.</h1></pre>   
   <h3> Stored in room tempreature</h3>

   <input type="button" class="btn" value="Add to cart" onclick="cart.void_add(
							new Item(1, 'green apples', 'apple, fruit, healthy', 'apple.jpg', 1.99, 20, 1)
							)">
                            <br>
                            <br>
                            <br>
                            <br>
<hr/>




</div>
