<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
    <title id="productTitle">Sprite (355mL Can)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
    <script type="text/javascript" src="scripts/Beverage.js"></script>
</head>

<script>
    name = "Sprite (355mL Can)";
    desc = "Sprite, a lemon-lime flavored soft drink. <br><br>From the Coca-Cola Company, Sprite is one of the best-selling soft drinks in the world. Sprite also comes in 710mL bottles or 2L bottles.";
    price = 0.99;
    img = "sprite.jpg";
    options = 3;

    function saveSessionData() {
        sessionStorage.spriteQty = qty;
        sessionStorage.spriteCurrentItem = currentItem;
        sessionStorage.spriteShowAll = showAll;
    }

    function loadSessionData() {
        if (sessionStorage.spriteCurrentItem) {
            currentItem = parseInt(sessionStorage.spriteCurrentItem);
        }
        if (sessionStorage.spriteQty) {
            qty = parseInt(sessionStorage.spriteQty);
        }
        if (sessionStorage.spriteShowAll == "true") {
            document.getElementById("showDescBtn").innerHTML = "Less Description...";
            showAll = true;
        }
        changeProduct(currentItem);
        setQty(qty);
        displayDesc();
    }

    function changeProduct(type) {

        switch (type) {
            case 2: // 710mL Bottle
                document.getElementById("productTitle").innerHTML = "Sprite (710mL Bottle)";
                document.getElementById("productImg").src = "../assets/Images/sprite_710ml.jpg";
                document.getElementById("productImg").alt = "Sprite 710mL Bottle";
                document.getElementById("productName").innerHTML = "Sprite (710mL Bottle)";
                document.getElementById("productPrice").innerHTML = "$1.49 (In stock!)";
                changeSelectionBtn(2);
                name = "Sprite (710mL Bottle)";
                desc = "Sprite, a lemon-lime flavored soft drink. <br><br>From the Coca-Cola Company, Sprite is one of the best-selling soft drinks in the world. Sprite also comes in 355mL cans or 2L bottles.";
                price = 1.49;
                img = "sprite_710ml.jpg";
                currentItem = 2;
                displayDesc();
                break;

            case 3: // 2L Bottle
                document.getElementById("productTitle").innerHTML = "Sprite (2L Bottle)";
                document.getElementById("productImg").src = "../assets/Images/sprite_2l.jpg";
                document.getElementById("productImg").alt = "Sprite 2L Bottle";
                document.getElementById("productName").innerHTML = "Sprite (2L Bottle)";
                document.getElementById("productPrice").innerHTML = "$1.99 (In stock!)";
                changeSelectionBtn(3);
                name = "Sprite (2L Bottle)";
                desc = "Sprite, a lemon-lime flavored soft drink. <br><br>From the Coca-Cola Company, Sprite is one of the best-selling soft drinks in the world. Sprite also comes in 355mL cans or 710mL bottles.";
                price = 1.99;
                img = "sprite_2l.jpg";
                currentItem = 3;
                displayDesc();
                break;

            default: // 355mL Can
                document.getElementById("productTitle").innerHTML = "Sprite (355mL Can)";
                document.getElementById("productImg").src = "../assets/Images/sprite.jpg";
                document.getElementById("productImg").alt = "Sprite 355mL Can";
                document.getElementById("productName").innerHTML = "Sprite (355mL Can)";
                document.getElementById("productPrice").innerHTML = "$0.99 (In stock!)";
                changeSelectionBtn(1);
                name = "Sprite (355mL Can)";
                desc = "Sprite, a lemon-lime flavored soft drink. <br><br>From the Coca-Cola Company, Sprite is one of the best-selling soft drinks in the world. Sprite also comes in 710mL bottles or 2L bottles.";
                price = 0.99;
                img = "sprite.jpg";
                currentItem = 1;
                displayDesc();
        }
    }
</script>

<body onload="loadSessionData()" onunload="saveSessionData()">
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
            <img id="productImg" src="" style="width:80%; height=80%;" alt="" />
        </div>

        <div class="beverage_right">
            <h1 id="productName" style="font-size:48;"></h1><br>
            <p><span id="productPrice" class="product_price"></span></p><br><hr >
            <p id="productDesc" class="product_desc"></p>
            <button id="showDescBtn" type="submit" class="product_description_btn" onclick="showHideDesc();">More Description...</button><br><br><br>
            <p>You may choose a different size using the options below...</p>
            <button id="productOption1" type="submit" class="product_option_btn" onclick="changeProduct(1);">355mL Can</button>
            <button id="productOption2" type="submit" class="product_option_btn" onclick="changeProduct(2);">710mL Bottle</button>
            <button id="productOption3" type="submit" class="product_option_btn" onclick="changeProduct(3);">2L Bottle</button><br><br><br>
            <div class="cart_grid">
                <div class="cart_qty_selector">
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(false, 20);">-</button>
                    <input id="productQty" type="text" class="cart_qty"  value="0" readonly></input>
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(true, 20);">+</button>
                </div>
                <div class="cart_qty_max_msg">
                    Quantity Limit: 20
                </div>
                <button type="submit" class="cart_btn" onclick="addToCart(20);">Add To Cart</button>
            </div>
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