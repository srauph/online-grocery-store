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
    <title>Beverages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</head>

<script>
    function addToCart(id, name, img, price, limit) {
        cart.void_add(new Item(id, name, 1, img.substring(17), price, 1, limit, 0, ''));
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


    <h1 style="font-size:48; padding:2%; text-align:center; background-color:white;">Beverages</h1>

    <div id="beverage_grid">

        <div id="categories">

            <h3 style="margin-right:100%; padding:2%;">Categories</h3>

            <div class="sub_menus" id="aisle_categories">
                <form action="frozen.php" method="POST">
                    <ul>
                        <li><input type="submit" name="tag_search_btn" value="Bakery" formaction="bakery.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Beauty Products"
                                formaction="beautyproducts.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Beverages" formaction="beverages.php">
                        </li>
                        <li><input type="submit" name="tag_search_btn" value="Frozen" formaction="frozen.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Fruits" formaction="fruits.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Vegetables" formaction="vegetables.php">
                        </li>
                        <li><input type="submit" name="tag_search_btn" value="Dairy Products"
                                formaction="dairyproducts.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Snacks" formaction="snacks.php"></li>
                    </ul>
                </form>
            </div>
        </div>

        <div id="beverages">
            <div id="beverage_items">

                <table id="beverage_table">
                    <tr>
                        <br><h2 style="color:crimson; text-align:center;"> Click on a product image (or its corresponding title) to go to
                                the corresponding product page.</h2>
                    </tr>

                    <tr> 
                        <div class="beverage_aisle_head">
                            <div class="beverage_aisle_item_img">
                                <h2>Product Image</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Product Title</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Brief Description</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Product Price</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Add to Cart</h2>
                            </div>
                        </div>
                        
                        <div class="beverage_aisle_head_mobile">
                            <div class="beverage_aisle_item">
                                <h2>Product Image</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Description</h2>
                            </div>
                        </div>
                    </tr>

                    <tr>
                        <div class="beverage_aisle">
                            <div class="beverage_aisle_item_img">
                                <a href="sprite.php">
                                    <img src="../assets/Images/sprite.jpg" style="width:100px; height:100px;"alt="Sprite Can">
                                </a>
                            </div>
                            
                                <div class="beverage_aisle_item"><a href="sprite.php" style="color:mediumslateblue;">Sprite (355mL Can)</a></div>
                                <div class="beverage_aisle_item">A 355mL can of Sprite.</div>
                                <div class="beverage_aisle_item">$0.99</div>
                                <div class="beverage_aisle_item">
                                    <!-- Fill these variable with the defaults listed towards the top of the item page -->
                                    <!-- Use single quotes for strings -->
                                    <button type="submit" class="cart_btn_aisle" onclick="addToCart(101, 'Sprite (355mL Can)', '../assets/Images/sprite.jpg', 0.99, 24);">
                                    Add To Cart</button>
                                </div>
                        </div>
                    </tr>

                    <tr>
                        <div class="beverage_aisle">
                            <div class="beverage_aisle_item_img">
                                <a href="cocacola.php">
                                <img src="../assets/Images/cocacola.jpg" style="width:100px; height:100px;" alt="Coca-Cola Can">
                                </a>
                            </div>
                            
                                <div class="beverage_aisle_item"><a href="cocacola.php" style="color:mediumslateblue;">Coca-Cola (355mL Can)</a></div>
                                <div class="beverage_aisle_item">A 355mL can of Coca-Cola.</div>
                                <div class="beverage_aisle_item">$0.99</div>
                                <div class="beverage_aisle_item">
                                    <!-- Fill these variable with the defaults listed towards the top of the item page -->
                                    <!-- Use single quotes for strings -->
                                    <button type="submit" class="cart_btn_aisle" onclick="addToCart(201, 'Coca-Cola (355mL Can)', '../assets/Images/cocacola.jpg', 0.99, 24);">
                                    Add To Cart</button>
                                </div>
                        </div>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <br />
    <br />




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
            </div>a>
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