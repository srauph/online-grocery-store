<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}
?>
<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css"/>
    <title id="productTitle">
        Tomatoes (Cherry Variety)
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="scripts/Util.js">
        
    </script>
    <script type="text/javascript" src="scripts/Cart.js">
        
    </script>
    <script type="text/javascript" src="scripts/Item.js">
        
    </script>
    <script type="text/javascript" src="scripts/Sales.js">
        
    </script>
    <script type="text/javascript" src="scripts/AbstractComponent.js">
        
    </script>
    <script type="text/javascript" src="scripts/Beverage.js">
        
    </script>
    <script type="text/javascript" src="scripts/main.js">
        
    </script>
</head>

<script>

    /** 
     * name:    Name of the object. Used in the page title, the item title, and as the alt image text
     * desc:    Full description of the object.
     * price:   Price of the object
     * img:     Link to the object image file
     * options: Amount of different options available (eg different product sizes)
     */
    name = "Tomatoes (Cherry Variety)";
    desc = "Tomatoes, a healthy fruit from the tomato plant (often seen as a vegetable) freshly grown from local farms around the area. <br/><br/> Tomatoes are one of the most popular and widely used vegetables in the world. Come in 1 kg weighed bag format only. Also available in San Marzano and Better Boy varieties.";
    price = 1.59;
    img = "../assets/Images/tomatoes.jpg";
    options = 3;
    limit = 20;
    id = 504;

    /** 
     * Saves the session data. 
     * The only important info to keep is... 
     *      The current quantity entered
     *      The current option selected
     *      Whether or not the description is collapsed.
     * 
     * These three variables will allow the restoration of the page to its previous state.
     * `localStorage` can be used instead of `sessionstorage` to preserver contents even after 
     * closing the browser/tab completely. (sessionStorage "forgets" everything when you close
     * the tab, only preserves info while refreshing and navigating within the site)
     */
    function saveSessionData() {
        sessionStorage.tomatoesQty = qty;
        sessionStorage.tomatoesCurrentItem = currentItem;
        sessionStorage.tomatoesShowAll = showAll;
    }

    /**  
     * Loads the session data from the three variables.
     * Each variable needs to be checked if it exists with the if statement before it can be
     * used to load the page to the original state.
     */
    function loadSessionData() {
        if (sessionStorage.tomatoesCurrentItem) {
            currentItem = parseInt(sessionStorage.tomatoesCurrentItem);
        }
        if (sessionStorage.tomatoesQty) {
            qty = parseInt(sessionStorage.tomatoesQty);
        }
        if (sessionStorage.tomatoesShowAll == "true") {
            document.getElementById("showDescBtn").innerHTML = "More Description...";
            showAll = false;
        }

        // Restore the page to the original state
        changeProduct(currentItem);
        setQty(qty);
        displayDesc();
    }

    /** 
     * This function determines what happens when you click a button to select a product option. 
     * The page title, image, item title, item description, and item price all need to be updated
     * when a new option is selected.
     */
    function changeProduct(type) {

        switch (type) {

            case 2: // If the option selected is the San Marzano variety

                // Update relevant variables
                name = "Tomatoes (San Marzano Variety)";
                desc = "Tomatoes, a healthy fruit from the tomato plant (often seen as a vegetable) freshly grown from local farms around the area. <br/><br/> Tomatoes are one of the most popular and widely used vegetables in the world. Come in 1 kg weighed bag format only. Also available in Cherry and Better Boy varieties.";
                price = 1.79;
                img = "../assets/Images/tomatoesoption2.jpg";
                currentItem = 2;
                limit = 20;
                id = 505;   
                updatePageContents(); // Ditto.
                break;

            case 3: // Better Boy variety
                name = "Tomatoes (Better Boy Variety)";
                desc = "Tomatoes, a healthy fruit from the tomato plant (often seen as a vegetable) freshly grown from local farms around the area. <br/><br/> Tomatoes are one of the most popular and widely used vegetables in the world. Come in 1 kg weighed bag format only. Also available in Cherry and San Marzano varieties.";
                price = 1.99;
                img = "../assets/Images/tomatoesoption3.jpg";
                currentItem = 3;
                limit = 20;
                id = 506;
                updatePageContents(); 
                break;

            default: // Cherry variety
                name = "Tomatoes (Cherry Variety)";
                desc = "Tomatoes, a healthy fruit from the tomato plant (often seen as a vegetable) freshly grown from local farms around the area. <br/><br/> Tomatoes are one of the most popular and widely used vegetables in the world. Come in 1 kg weighed bag format only. Also available in San Marzano and Better Boy varieties";
                price = 1.59;
                img = "../assets/Images/tomatoesoption1.jpg";
                currentItem = 1;
                limit = 20;
                id = 504;
                updatePageContents();
                break;
        }
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
                <br/>
                <br/>
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
            <img id="productImg" src="" style="width: 80%" alt=""/>
        </div>
        <div class="beverage_right">
            <h1 id="productName" style="font-size: 48; padding: 2%; background-color: white;">
            </h1>
            <br/>
            <p>
                <span id="productPrice" class="product_price">
                    
                </span>
            </p>
            <br/>
            <hr/>
            <p id="productDesc" class="product_desc">
                
            </p>
            <button id="showDescBtn" type="submit" class="product_description_btn" onclick="showHideDesc();">
                More Description...
            </button>
            <br/>
            <br/>
            <br/>
            <p>
                You may choose a different size using the options below...
            </p>
            <button id="productOption1" type="submit" class="product_option_btn" onclick="changeProduct(1);">
                A bag of Cherry tomatoes
            </button>
            <button id="productOption2" type="submit" class="product_option_btn" onclick="changeProduct(2);">
                A bag of San Marzano tomatoes
            </button>
            <button id="productOption3" type="submit" class="product_option_btn" onclick="changeProduct(3);">
                A bag of Better Boy tomatoes
            </button>
            <br/>
            <br/>
            <br/>
            <div class="cart_grid">
                <div class="cart_qty_selector">
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(false);">
                        -
                    </button>
                    <input id="productQty" type="text" class="cart_qty" value="0" readonly/>
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(true);">
                        +
                    </button>
                </div>
                <div id="productMax" class="cart_qty_max_msg">
                    Quantity Limit: 20
                </div>
                <button type="submit" class="cart_btn" onclick="addToCart();">
                    Add To Cart
                </button>
            </div>
        </div>
    </div>

    </div>
    <div id="footer">
        <div class="store_name">
            Caliprex
        </div>
        <br/>
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