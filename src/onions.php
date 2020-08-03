<!DOCTYPE>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css" />
    <title>
        Product: Onions
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
    <div style="text-align:center;">
        <div id="menu">
                <div class="menu_item" onclick="goto('index.php')">
                    <div style="margin-top:10px">Home</div>
                </div>
                <div class="menu_item" onclick="goto('all_items.php')">
                    <div style="margin-top:10px">All products</div>
                </div>
                <div class="menu_item" onclick="goto('aisle.php')">
                    <div style="margin-top:10px" onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</div>
                </div>
                <div class="menu_item" onclick="goto('all_items.php')">
                    <div style="margin-top:10px">Contact us</div>
                </div>
        </div>
    </div>

    <div id="menu">
        <ul>
            <li>
                <a href="index.php">
                    Home
                </a>
            </li>
            <li>
                Sales
            </li>
            <li onmouseover="void_showElement('menu_aisle');" on mouseout="void_hideElement('menu_aisle');">
                <a href="aisle.php">
                    Aisle
                </a>
            <li>
                <a href="contactus.php">
                    Contact us
                </a>
            </li>
            <ul>
    </div>

    <div class="beverage_page">
        <div class="beverage_left">
            <img src="../assets/Images/onions.jpeg" style="width:80%" alt="onions image" />
        </div>
        <div class="beverage_right" colspan="4">
            <h1 style="font-size:48; padding:2%; background-color:white;">
                Onions (One Bag)
            </h1>
            <br />
            <p style="font-size:24px">
                Onions freshly grown from your local farms.
            </p>
            <button type="submit" class="product_description_btn">
                More Description...
            </button>
            <br />
            <br />
            <br />
            <p>
                You may choose a different size using the options below...
            </p>
            <button type="submit" class="product_option_btn">
                A bag of 5 onions
            </button>
            <button type="submit" class="product_option_btn">
                A bag of 10 onions
            </button>
            <button type="submit" class="product_option_btn">
                A bag of 25 onions
            </button>
            <br />
            <br />
            <br />
            <button type="submit" class="btn">
                Add To Cart
            </button>
        </div>
    </div>
    <br />
    <br />

    </div>
        <div id="footer">
        <div class="store_name">
            Caliprex
        </div>
        <br>
        <div class="footer_bottom">
            <div class="newsletter_subscribe">
                Subscribe to our Newsletter!
                <input type="text" style="height:30px;font-size:20;width:200px;"
                    placeholder="Email address">
                <input type="submit" id="btn_work" style="border:1px solid white; height:auto;" class="btn" ; value="GO">
            </div>

            <div class="media_links">
                <a href="https://www.facebook.com/Caliprex-121401789649042" target="_blank">
                        <image src="../assets/Icons/facebook.png" alt="Facebook image"
                            width="50" height="50">
                    </a>
                <a href="https://www.instagram.com/caliprex/" target="_blank">
                        <image src="../assets/Icons/instagram.png" alt="Instagram image"
                            width="50" height="50">
                    </a>
                <a href="https://twitter.com/caliprex" target="_blank">
                        <image src="../assets/Icons/twitter.png" alt="Twitter image"
                            width="50" height="50">
                    </a>
                <a href="https://Pintrest.com/caliprex" target="_blank">
                        <image src="../assets/Icons/pinterest.png" alt="Pintrest image"
                            width="50" height="50">
                    </a>
                <a href="https://www.youtube.com/channel/UCvZRW67axwzk6fw5dBSw-iQ?view_as=subscriber"
                        target="_blank">
                        <image src="../assets/Icons/youtube.png" alt="Youtube image"
                            width="50" height="50">
                    </a>
            </div>
                
            <div class="aboutus_login">
                <h3>
                    <a href="contactus.php" style="color:white;">About Us |</a>
                    <a href="login.php" style="color:white;">Login</a>
                </h3>
            </div>

        </div>
        
    </div>
</body>

</html>