<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
    <title>Mars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</head>

<!-- AUTHOR: Shadi Jiha 40131284 -->

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
                <div>Home</div>
            </div>
            <div class="menu_item" onclick="goto('all_items.php')">
                <div>All products</div>
            </div>
            <div class="menu_item" onclick="goto('aisle.php')">
                <div onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</div>
            </div>
            <div class="menu_item" onclick="goto('contactus.php')">
                <div>Contact us</div>
            </div>
        </div>
    </div>
    <div>
        <div class="sub_menus" id="menu_aisle" onmouseover="void_showElement('menu_aisle');"
            onmouseout="void_hideElement('menu_aisle');">
            <form action="register.php" method="POST">
                <ul>
                    <li><input type="submit" name="__tag_search_btn" value="Bakery" formaction="bakery.php" style="color:white; font-weight:bold"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Beauty Products"
                            formaction="beautyproducts.php" style="color:white; font-weight:bold"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Beverages" formaction="beverages.php" style="color:white; font-weight:bold"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Frozen" formaction="frozen.php" style="color:white; font-weight:bold"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Fruits" formaction="fruits.php" style="color:white; font-weight:bold"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Vegetables" formaction="vegetables.php" style="color:white; font-weight:bold">
                    </li>
                    <li><input type="submit" name="__tag_search_btn" value="Dairy Products"
                            formaction="dairyproducts.php" style="color:white; font-weight:bold"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Snacks" formaction="snacks.php" style="color:white; font-weight:bold"></li>
                </ul>
            </form>
        </div>
    </div>

    

    <script>
    let bars = 1;

    function saveSessionData() {
        sessionStorage.marsQty = bars;
    }
    function loadSessionData() {
        if (sessionStorage.marsQty) {
            void_updateNumber(sessionStorage.marsQty);
        }
    }


    /**
     * This function will update how many choclate bars the user wants to put at once in his cart
     */
    function void_updateNumber(int_num) {
        bars = int_num;
        for (let i = 1; i <= 3; i++) {
            document.getElementById("productOption" + i).className = "product_option_btn";
        }
        document.getElementById("productOption" + bars).className = "product_option_btn_selected";
    }

    /**
     * This function will display the changes on the cart
     * and will add items to the cart
     * 
     * @see Please see the Cart class in cart.js
     */

    function void_addItemsToCart() {
        cart.void_add(new Item(121, 'Mars', 'mars, chocolat', 'mars.jpg', 1.49, bars, 3));
    }

    // =================== DESCRIPTION HANDLING ======================

    // Replace the content of this variable with your own product description
    const description = "A 47g Mars chocolate bar. (Limited to 3 per customer).";

    /**
     * This function will only show the first 15 caracters of the description of the product
     */
    function handleDescription() {
        document.getElementById("description").innerHTML = Sales.private_string_reduceChars(description,
            15);
    }

    /**
     * This function will show the full descrption of the product
     */
    function showAllDescription() {
        document.getElementById("description").innerHTML = description;
    }

    // When the page is loaded, don't show all the description. Show only a breif part of it
    window.addEventListener("load", function() {
        handleDescription();
    });
    </script>

    <div class="beverage_page">
        <div class="beverage_left">
            <img src="../assets/Images/mars.jpg" style="width:80%; height:80%;" alt="Mars bar">
        </div>

        <div class="beverage_right">
            <h1 style="font-size:48; padding:2%; background-color:white;">Mars chocolate bar</h1><br>
            <p style="font-size:24px" id="description"></p>
            <button class="product_description_btn" onclick="showAllDescription();">More
                Description...</button><br><br><br>
            <p>You may choose a different size using the options below...</p>
            <button id="productOption1" class="product_option_btn_selected" onclick="void_updateNumber(1);">1 bar</button>
            <button id="productOption2" class="product_option_btn" onclick="void_updateNumber(2);">2 bars</button>
            <button id="productOption3" class="product_option_btn" onclick="void_updateNumber(3);">3 bars</button><br><br><br>
            <button type="submit" class="btn" onclick="void_addItemsToCart();">Add
                To
                Cart</button>
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
                            width="50" height="50"></a>
                <a href="https://www.instagram.com/caliprex/" target="_blank">
                        <image src="../assets/Icons/instagram.png" alt="Instagram image"
                            width="50" height="50"></a>
                <a href="https://twitter.com/caliprex" target="_blank">
                        <image src="../assets/Icons/twitter.png" alt="Twitter image"
                            width="50" height="50"></a>
                <a href="https://Pintrest.com/caliprex" target="_blank">
                        <image src="../assets/Icons/pinterest.png" alt="Pintrest image"
                            width="50" height="50"></a>
                <a href="https://www.youtube.com/channel/UCvZRW67axwzk6fw5dBSw-iQ?view_as=subscriber"
                        target="_blank">
                        <image src="../assets/Icons/youtube.png" alt="Youtube image"
                            width="50" height="50"></a>
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