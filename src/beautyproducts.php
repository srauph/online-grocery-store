<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Beauty Products</title>
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
            <li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</li>
            <li>Contact us</li>
            <ul>
    </div>

    <div id="categories">

        <h3 style="margin-right:100%; padding:2%;">Categories</h3>

        <div class="sub_menus" id="aisle_categories" onmouseover="void_showElement('menu_aisle');"
            onmouseout="void_hideElement('menu_aisle');">
            <form action="beautyproducts.php" method="POST">
                <ul>
                    <li><input type="submit" name="__tag_search_btn" value="Bakery" formaction="bakery.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Beauty Products"
                            formaction="beautyproducts.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Beverages" formaction="beverages.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Frozen" formaction="frozen.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Fruits" formaction="fruits.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Vegetables" formaction="vegetables.php">
                    </li>
                    <li><input type="submit" name="__tag_search_btn" value="Dairy Products"
                            formaction="dairyproducts.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Snacks" formaction="snacks.php"></li>
                </ul>
            </form>
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