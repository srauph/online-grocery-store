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

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>


    <!-- Get all the items that the user has added to the cart and display them -->
    <script>
    /**
     * This function gets all the cart items from the localstorage and displays them in the page
     */
    function init() {

        const items = JSON.parse(localStorage.getItem("cart"));
        const DOM = document.getElementById("__cart_content_table");

        if (items == null || items.length == 0) {
            DOM.innerHTML = "Cart is empty";
            return;
        }

        DOM.innerHTML = document.getElementById("___init");

        for (const item of items) {

            DOM.innerHTML +=
                `<tr>
                    <td style = "text-align:center">
                        <img src = "../assets/Images/${item.image}" alt = "" width = "150" height = "150" ></td>
                        <td width = "100" style = "text-align:center" ><h2>${item.name}</h2> 
                    </td>
                    <td style="text-align:center;" > 
                        <input type="number" style="text-align:center; width:90; height:45;" placeholder = "QUANTITY" /> 
                    </td>                     
                     <td style = "text-align:right" ><h2> $${item.cost} </h2> </td> 
                </tr>`;
        }

    }

    document.addEventListener("DOMContentLoaded", function() {
        init();
    });
    </script>
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
                <img src="../assets/Icons/cart.png" style="float:left; margin-right:0.5em" width="25" height="25">
                <span id="cart_total_value">
                    $0.00
                </span>
            </button>
        </a>

    </div>

    <div id="menu">
        <ul>
            <li onclick="goto('index.php')">Home</li>
            <li onclick="goto('all_items.php')">All products</li>
            <a href="aisle.php" class="white">
                <li onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle
                </li>
            </a>
            <a href="contactus.php" class="white">
                <li>Contact us</li>
            </a>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="cart_left">
        <div class="border4">
            <table style="width:100%" id="__cart_content_table">
                <tr id="___init">
                    <th height="100" width="360" style="text-align:right">
                        <h2 class="grey">Product Image</h2>
                    </th>

                    <th height="100" width="360" style="text-align:right">
                        <h2 class="grey">Product name</h2>
                    </th>

                    <th height="100" width="360" style="text-align:right">
                        <h2 class="grey">Quantity</h2>
                    </th>

                    <th style="text-align:right">
                        <h2 class="grey">Total Price</h2>
                    </th>
                    <td>
                        <input type="button" onclick="localStorage.clear(); init();" value="Clear All" />
                    </td>
                </tr>
                <tr>

                    <td style="text-align:center">
                        <image src="../assets/Images/cheetos.jpg" alt="cheetos image" width="150" height="150">
                    </td>
                    <td width="100" style="text-align:center">
                        <h2>Cheetos</h2>
                    </td>

                    <td style="text-align:center;"><input type="number" style="text-align:center; width:90; height:45;"
                            placeholder="QUANTITY" /></td>
                    <td style="text-align:center">
                        <h2>$5.99</h2>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center">
                        <image src="../assets/Images/frozenfries.jpg" alt="cheetos image" width="150" height="150">
                    </td>
                    <td width="100" style="text-align:center">
                        <h2>Frozen Fries</h2>
                    </td>

                    <td style="text-align:center;"><input type="number" style="text-align:center; width:90; height:45;"
                            placeholder="QUANTITY" /></td>
                    <td style="text-align:right">
                        <h2>$15.98</h2>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="cart_right">
        <div class="border1">
            <h1>CART SUMMARY</h1>
            <label class="name">Estimated total</label><br>
            <input type="text" style="height:80px; font-size:40; width:300;" placeholder="$0.00"><br><br>

            <input type="submit" class="btn" style=width:300; size="20" ; placeholder="PLACE ORDER" value="PLACE ORDER">

            <pre><h3 class="red" style= "font-size:17;" >     Minimum $45.00 order.    </h3></pre>
            <table>
                <tr>
                    <td>
                        <pre><h3 class="black" style="font-size:17;">Number of items:   </h3></pre>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                        <h3>0 </h3>
                </tr>
                <tr>
                    <td>
                        <h3 class="black" style="font-size:17;">QST:</h3>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                        <h3>$0.00</h3>
                </tr>
                <tr>
                    <td>
                        <h3 class="black" style="font-size:17;">GST:</h3>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                        <h3>$0.00<h3>
                </tr>
                <tr>
                    <td>
                        <h3 class="black" style="font-size:17;">Total:</h3>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                    <td>
                        <h3>$0.00</h3>

                </tr>
            </table>


        </div>

        <div class="border2">
            <h1 style="font-size:26;"> PROMOTIONAL CODE<h1>
                    <table>
                        <tr>
                            <th><label class="name">Apply a promotional code</label>
                            <th>
                                <image src="../assets/Icons/questionmark.png" alt="question mark icon"
                                    style="float:right; margin-right:0.5em" width="50" height="25">
                        </tr>
                    </table>


                    <table>
                        <tr>
                            <th><input type="text" style="height:60px;font-size:10;width:200px;"
                                    placeholder="EX: PROMCODE1     ">
                            <th><input type="submit" style="height:60; text-align:center; font-size:10;" class="btn"
                                    value="APPLY">
                        </tr>
                    </table>
        </div>
        <div class="border1">
            <center>
                <h2>Delivery</h2>
            </center>
            <h4>Caliprix Atwater</h4>
            <p>1150 Maisonneuve BLVD W, H3A 1M7 , Montreal , Canada</p>
            <p>(514) 553-4360</p>
            <p>Thursday: 07:00 - 22:00</p>
        </div>
        <div class="border3">
            <h4> To ensure accurate product avaliability and pricing, please choose your store.</h4>
            <center>
                <table border="1">
                    <tr>
                        <th> <input type="text" style="height:60px;font-size:15;width:200px; "
                                placeholder="Our only location H3A 1M7"></th>
                        <th><a href="https://www.google.com/maps/place/1150+Maisonneuve+Blvd+W,+Montreal,+QC/@45.5000431,-73.5778952,17.18z/data=!4m5!3m4!1s0x4cc91a416d27dcf1:0xe258368f00acb82c!8m2!3d45.5002825!4d-73.5749175"
                                target="_blank">
                                <image src="../assets/Icons/magnifyingglass.png" alt="A magnifying glass image"
                                    style="float:right; margin-right:0.5em" width="50" height="25">
                        </th>
                        </a>
                    </tr>
                </table>
                <br>

                <<a href="login.php"><input type="submit" class="btn" style="width:300; size=20;"
                        value="MY POSITION"></a>
            </center>


            <h4> Please log in or create an account to reserve your timeslot</h4>
            <a href="login.php">
                <button type="submit" class="btn" style=width:300; size="20">LOGIN</button><br><br>
            </a>
            <a href="register.php"><button type="submit" class="btn" style=width:300; size="20" ;>CREATE AN
                    ACCOUNT</button><br><br>
            </a>
        </div>




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
    </center>



</body>

</html>