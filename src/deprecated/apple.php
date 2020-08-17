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
    <title id="productTitle">Apple</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
    <script type="text/javascript" src="scripts/Fruit.js"></script>
</head>
<script>

    /** 
     * name = "Base" product name
     * desc = Product descripton
     * price = Product price
     * img = Link to product image
     * options = Number of color options available
     * optionsSize = Number of size options available
     * limit = Amount to limit order qty to
     */
    name = "Apple";
    desc = "Apple, meet the world's favourite apple for snacks. The heart-shaped delicious apple has a bright surface. This delicious apple shines in fresh, crisp salads, for its crunchy texture and lightly sweet taste.";
    price = 1.99;
    img = "../assets/Images/apple.jpg";
    options = 2;
    optionsSize = 2;
    limit = 20;
    id = 301;


    /** 
     * itemName = Name to append to `name` based on the color
     * sizename = Name to append to `name` based on size
     * currentItem and currentSize are the current color and size options selected, respectively.
     * showAll = False if description should be collapsed, true if it should be expanded.
     * qty = Quantity to add to cart.
     */
    itemName = "Red";
    sizeName = "Regular";
    currentItem = 1;
    currentSize = 1;

    showAll = false;
    qty = 0;

    /** 
     * The next two functions save and load session data to and from the browser
     * Currently the data only sticks if you refresh or navigate away from the page.
     * Replace "sessionStorage" with "localStorage" if you want the data to stick after closing the
     * tab or window as well. (Replace that in both functions).
     */
    function saveSessionData() {
        sessionStorage.appleQty = qty;
        sessionStorage.appleCurrentItem = currentItem;
        sessionStorage.appleCurrentSize = currentSize;
        sessionStorage.appleShowAll = showAll;
    }

    function loadSessionData() {
        if (sessionStorage.appleCurrentItem) {
            currentItem = parseInt(sessionStorage.appleCurrentItem);
        }
        if (sessionStorage.appleCurrentSize) {
            currentSize = parseInt(sessionStorage.appleCurrentSize);
        }
        if (sessionStorage.appleQty) {
            qty = parseInt(sessionStorage.appleQty);
        }
        if (sessionStorage.appleShowAll == "true") {
            document.getElementById("showDescBtn").innerHTML = "Less Description...";
            showAll = true;
        }

        // Restore the page to the original state
        changeProduct(currentItem);
        setQty(qty);
        displayDesc();

    changeProductSize(currentItem);
    setQty(qty);
    displayDesc();

    }

    /** 
     * General format for these two functions:
     * 
     * For the switch statement: 
     * sizeName and itemName hold the name you wish to use for the item size and item color, respectively.
     * In Fruit.js these two names are concatenated with the variable "name" to generate a product title. 
     * 
     * If you wish to modify the description or the image with the product size and
     * color, you need to find some way to mix the type(color) and size. EG for name, sizeName and itemName
     * are used to get this effect.
     */
    function changeProductSize(size){

        switch (size) {

            // Update relevant variables

            case 1: //Regular Apple
            sizeName = "Regular";
            // desc = "Apple, meet the world's favourite apple for snacks. The heart-shaped delicious apple has a bright surface. This delicious apple shines in fresh, crisp salads, for its crunchy texture and lightly sweet taste.";
            price = 1.99;
            // img = "../assets/Images/apple.jpg";
            currentSize = 1;
            updateID();
            updatePageContents();
            break;

            case 2: // If the option selected is Mini Apple
            sizeName = "Mini";
            // desc = "Apple, meet the world's favourite apple for snacks. The heart-shaped delicious apple has a bright surface. This delicious apple shines in fresh, crisp salads, for its crunchy texture and lightly sweet taste.";
            price = 0.99;
            // img = "../assets/Images/apple.jpg";
            currentSize = 2;
            updateID();   
            updatePageContents(); // Ditto.
            break;

        }
    }

    function changeProduct(type) {

        switch (type) {

            // Update relevant variables

            case 1: //Red Apple
            itemName = "Red";
            // desc = "Apple, meet the world's favourite apple for snacks. The heart-shaped delicious apple has a bright surface. This delicious apple shines in fresh, crisp salads, for its crunchy texture and lightly sweet taste.";
            // price = 1.99;
            img = "../assets/Images/redapple.jpg";
            currentItem = 1;
            updateID();
            updatePageContents();
            break;

            case 2: // If the option selected is Green Apple
            itemName = "Green";
            // desc = "Apple, meet the world's favourite apple for snacks. The heart-shaped delicious apple has a bright surface. This delicious apple shines in fresh, crisp salads, for its crunchy texture and lightly sweet taste.";
            // price = 1.99;
            img = "../assets/Images/greenapple.jpg";
            currentItem = 2;
            updateID();
            updatePageContents(); // Ditto.
            break;
    
        }
    }

    /** 
     * Updates the item ID based on options selected.
     */
    function updateID() {
        id = 300 + 10*currentSize + currentItem;
    }

</script>

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



    <div class="beverage_page">

        <div class="beverage_left">
        <img id="productImg" src="" style="width:80%; height:80%;" alt="" />
        </div>

        <div class="beverage_right">
            <!-- Product details -->
            <h1 id="productName" style="font-size:48;"></h1><br>
            <p><span id="productPrice" class="product_price"></span></p><br><hr>
            <p id="productDesc" class="product_desc"></p>
            <button id="showDescBtn" type="submit" class="product_description_btn" onclick="showHideDesc();">More Description...</button><br><br><br>
            <!-- Product size -->
            <p>You may choose a different size using the options below...</p>
            <button id="productSizeOption1" type="submit" class="product_option_btn" onclick="changeProductSize(1);">Regular Apple</button>
            <button id="productSizeOption2" type="submit" class="product_option_btn" onclick="changeProductSize(2);">Mini Apple</button><br><br><br>
            <!-- Product option selection buttons -->
            <p>You may choose a different type using the options below...</p>
            <button id="productOption1" type="submit" class="product_option_btn" onclick="changeProduct(1);">Red Apple</button>
            <button id="productOption2" type="submit" class="product_option_btn" onclick="changeProduct(2);">Green Apple</button><br><br><br>
            <!-- Quantity selector and Add to Cart functionality -->
            <div class="cart_grid">
                <div class="cart_qty_selector">
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(false, 20);">-</button>
                    <input id="productQty" type="text" class="cart_qty" value="0" readonly></input>
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(true, 20);">+</button>
                </div>
                <div id="productMax" class="cart_qty_max_msg">
                    Quantity Limit: 20
                </div>
                <button type="submit" class="cart_btn" onclick="addToCart();">Add To Cart</button>
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