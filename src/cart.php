<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Cart Summary page</title>
        <style>
            input {
  text-align: center;
}

::-webkit-input-placeholder {
  text-align: center;
}

:-moz-placeholder {
  text-align: center;
}
</style>
</head>
        <body style="background-color:lightgrey;">
        <div id="__top_banner">
			<a class="white" href="login.php" title="Login to your account">Login</a>
			|
            <a class="white" href="register.php" title="First time user? Register now!">Register</a>

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

<div id="menu">
			<ul>
				<li>Home</li>
				<li>Sales</li>
				<li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</li>
				<li>Contact us</li>
			<ul>
		</div>		
		<div name="sub_menus">				
			<div id="menu_aisle" onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">
				<ul>
					<li>Bakery</li>
					<li>Beauty Products</li>
					<li>Beverages</li>
					<li>Frozen</li>
					<li>Fruits & Vegetables</li>
					<li>Dairy Products</li>			
					<li>Snacks</li>					
				</ul>
			</div>
        </div>
        <br>
        <br>
        <br>
        <center>
<div id="top_banner">
            <h1 class="center "  style="font-size:60;">SHOPPING CART</h1><br>
</center>
<br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="cart_left">


<table border="1px" width="100%">
      <tr>
        <th>ProductId</th>
        <th>Product name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Total price</th>
      
      </tr>
    <table border="1">
        <tr>

    
<td><image src="../assets/Images/cheetos.jpg" alt="cheetos image" " width="200" height="200">
<td>
<td>
    <td><h1 class="grey">Cheetos</h1>
    <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
            <td><h1 class="grey">QTY</h1>
            <td>
            <td>
            <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
            <td><h1 class="grey">Unit Price</h1>
            <td>
            <td>
            <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
        <td>
            <td><h1 class="grey">Subtotal</h1>
<br>
<br>
<tr>
    <td rowspan="50"><h1 >250g<h2>
</table>
</div>

            <div class="cart_right">
           
            <div class="border1"> <h1>CART SUMMARY</h1>
                    <label class="name">Estimated total</label><br>
                    <input type="text" style="height:80px; font-size:40; width:300;" placeholder="$0.00"><br><br>
                    
                    <input type="submit" class="btn" style= width:300; size="20";  placeholder="PLACE ORDER" value="PLACE ORDER">
                  
                   <pre><h3 class="red" style= "font-size:17;" >     Minimum $45.00 order.    </h3></pre>
                   <table >
                       <tr>
                  <td> <pre><h3 class="black" style="font-size:17;">Number of items:   </h3></pre>
                  <td>
                      <td>
                      <td>
                      <td>
                      <td>
                      <td>
                          <td>
                  <td><h3>0 </h3>
</tr>
<tr>
                   <td><h3 class="black" style="font-size:17;">QST:</h3>
                   <td>
                   <td>
                      <td>
                      <td>
                      <td>
                      <td>
                      <td>
                   <td><h3>$0.00</h3>
</tr>
<tr>
                   <td><h3 class="black" style="font-size:17;">GST:</h3>
                   <td>
                   <td>
                      <td>
                      <td>
                      <td>
                      <td>
                      <td>
                   <td><h3>$0.00<h3>
</tr>
<tr>
                   <td><h3 class="black" style="font-size:17;">Total:</h3>
                   <td>
                   <td>
                      <td>
                      <td>
                      <td>
                      <td>
                      <td>
                   <td><h3>$0.00</h3>
                   
</tr>
</table>


</div>

    <div class="border2">
<h1 style="font-size:26;"> PROMOTIONAL CODE<h1>
    <table>
        <tr>
<th><label class="name">Apply a promotional code</label>
<th><image src="../assets/Icons/questionmark.png" alt="question mark icon" style="float:right; margin-right:0.5em" width="50" height="25">
</tr>
</table>


<table>
    <tr>
<th><input type="text" style="height:60px;font-size:10;width:200px;" placeholder="EX: PROMCODE1     ">
<th><input type="submit" style="height:60; text-align:center; font-size:10;" class="btn"  value="APPLY">
</tr>
</table>
</div>
<div class="border1">
<center>
<h2>Delivery</h2>
</center>
<h4>Caliprex Atwater</h4>
<p>1150 Maisonneuve BLVD W, H3A 1M7 , Montreal , Canada</p>
<p>(514) 553-4360</p>
<p>Thursday: 07:00 - 22:00</p>
</div>
<div class="border3">
    <h4> To ensure accurate product avaliability and pricing, please choose your store.</h4>
    <center>
    <table border="1">
        <tr>
   <th> <input type="text" style="height:60px;font-size:15;width:200px; "placeholder="Our only location H3A 1M7">
       <th><a href="https://www.google.com/maps/place/1150+Maisonneuve+Blvd+W,+Montreal,+QC/@45.5000431,-73.5778952,17.18z/data=!4m5!3m4!1s0x4cc91a416d27dcf1:0xe258368f00acb82c!8m2!3d45.5002825!4d-73.5749175" target="_blank"> <image src="../assets/Icons/magnifyingglass.png" alt="A magnifying glass image"style="float:right; margin-right:0.5em" width="50" height="25">
</a>
    </tr>
</table>
<br>

                <input type="submit" class="btn" style= "width:300; size=20;" value="MY POSITION"></center>


            <h4> Please log in or create an account to reserve your timeslot</h4>
            <a href="login.php"><button type="submit" class="btn" style= width:300; size="20";>SIGN IN</button><br><br>
            </a>
            <a href="Register.php"><button type="submit" class="btn" style= width:300; size="20";>CREATE AN ACCOUNT</button><br><br>
            </a>
            </div>
        </div>

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