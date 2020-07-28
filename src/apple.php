<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
    <title>Apples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <a href="aisle.php">
                <li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle
                </li>
            </a>
            <li>Contact us</li>
            <ul>
    </div>



    <div class="beverage_page">

        <div class="beverage_left">
            <img src="../assets/Images/apple.jpg" style="width:80%; height=80%;" alt="Apples">
        </div>

        <div class="beverage_right">
            <h1 style="font-size:48; padding:2%; background-color:white;">Apple (One apple)</h1><br>
            <p style="font-size:24px">A soft green apple. Also comes in juicy and hard.</p>
            <button type="submit" class="product_description_btn">More Description...</button><br><br><br>
            <p>You may choose a different size using the options below...</p>
            <button type="submit" class="product_option_btn">soft apple</button>
            <button type="submit" class="product_option_btn">juicy apple</button>
            <button type="submit" class="product_option_btn">hard apple</button><br><br><br>
            <button type="submit" class="btn">Add To Cart</button><br><br>
            <label class="red">Quantity</label>
            <br>
            <input type="number" max="10" min="1" style="text-align:center; width:90; height:45;"
                placeholder="QUANTITY" />
            <br>
        </div>
    </div>










    <br />
    <br />
    </div>

    <div id="footer">
        <center>
            <table>

                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <tr></tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <th>
                    <h3 style="color:white; text-align:center;">Caliprex<h3>


                            <tr>
                                <th>
                                    <h3 style="color:white; font-style:robotto;"> <br>Subscribe to our Newsletter!</h3>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th> <input type="text" style="height:30px;font-size:20;width:200px;"
                                        placeholder="Email address">
                                <th> <input type="submit" id="btn_work" class="btn" size="20" ; value="GO">
                                <td>
                                    <pre>	</pre>
                                </td>
                                <th><a href="https://www.facebook.com/Caliprex-121401789649042" target="_blank">
                                        <image src="../assets/Icons/facebook.png" alt="Facebook image"
                                            style="float:right; margin-right:0.5em" width="50" height="35">
                                    </a>
                                <th><a href="https://www.instagram.com/caliprex/" target="_blank">
                                        <image src="../assets/Icons/instagram.png" alt="Instagram image"
                                            style="float:right; margin-right:0.5em" width="50" height="35">
                                    </a>
                                <th><a href="https://twitter.com/caliprex" target="_blank">
                                        <image src="../assets/Icons/twitter.png" alt="Twitter image"
                                            style="float:right; margin-right:0.5em" width="50" height="35">
                                    </a>
                                <th><a href="https://Pintrest.com/caliprex" target="_blank">
                                        <image src="../assets/Icons/pinterest.png" alt="Pintrest image"
                                            style="float:right; margin-right:0.5em" width="50" height="35">
                                    </a>
                                <th><a href="https://www.youtube.com/channel/UCvZRW67axwzk6fw5dBSw-iQ?view_as=subscriber"
                                        target="_blank">
                                        <image src="../assets/Icons/youtube.png" alt="Youtube image"
                                            style="float:right; margin-right:0.5em" width="50" height="35">
                                    </a>

                                <th><a href="contactus.php" style="color:white;">
                                        <h3>About Us |
                                    </a>
                        </h3>
                <th><a href="login.php">
                        <h3 style="color:white;">Login</h3>
                    </a>

                    </tr>

            </table>
        </center>
    </div>
</body>

</html>