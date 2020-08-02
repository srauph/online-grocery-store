<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <title>Cart Summary page</title>
    <style>
    input {
        text-align: center;
    }

    ::-webkit-input-placeholder {
        text-align: center;
    }

    ::-moz-placeholder {
        text-align: center;
    }
    </style>

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/Beverage.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>


    <!-- Get all the items that the user has added to the cart and display them -->
    <script>

        var totalPrice;
        var numberOfItems;
        var items;

        /** 
         * Saves the cart to localStorage
         */
        function saveSessionData() {
            localStorage.setItem("cart", JSON.stringify(items));
        }

        /**  
         * Loads the cart to localStorage
         */
        function loadSessionData() {
            items = JSON.parse(localStorage.getItem("cart"));
        }
        
        function removeItem(id) {
            console.log(id);
            for (i of items) {
                console.log(i);
                console.log(i.id);
                if (i.id == id) {
                    console.log("found");
                    var index = items.indexOf(i);
                }
            }
            items.splice(index, 1);
            location.reload();
        }

        function updateQtyCartPage(id, direction) {

            for (i of items) {
                if (i.id == id) {
                    var index = items.indexOf(i);
                }
            }

            if (items[index].quantity < 0) {
                items[index].quantity = 0;
                document.getElementById("productQty" + items[index].id).value = 0;
                return;
            } else if (items[index].quantity > items[index].limit) {
                alert("Warning: Maximum item purchase limit exceeded. Reverting to " + items[index].limit + ".");
                items[index].quantity = items[index].limit;
                document.getElementById("productQty" + items[index].id).value = items[index].limit;
                return;
            }

            if (direction) {
                if (items[index].quantity == items[index].limit) {
                    return;
                } else {
                    items[index].quantity++;
                    document.getElementById("productQty" + items[index].id).value = items[index].quantity;
                }
            } else {
                if (items[index].quantity == 0) {
                    return;
                } else {
                    items[index].quantity--;
                    document.getElementById("productQty" + items[index].id).value = items[index].quantity;
                }
            }

            getNumberOfItems();
            calculateCost();
        }

        function calculateCost() {
            totalPrice = 0;
            for (item of items) {
                totalPrice += (item.cost * item.quantity);
            }
            document.getElementById("bigTotal").value = "$" + (totalPrice * 1.14975).toFixed(2);
            document.getElementById("subtotal").innerHTML = "$" + (totalPrice.toFixed(2));
            document.getElementById("qst").innerHTML = "$" + (totalPrice * 0.09975).toFixed(2);
            document.getElementById("gst").innerHTML = "$" + (totalPrice * 0.05).toFixed(2);
            document.getElementById("total").innerHTML = "$" + (totalPrice * 1.14975).toFixed(2);
        }

        function getNumberOfItems() {
            numberOfItems = 0;
            for (item of items) {
                numberOfItems += item.quantity;
            }
            document.getElementById("numberOfItems").innerHTML = numberOfItems;
        }
        
        /**
         * This function gets all the cart items from the localstorage and displays them in the page
         */
        function init() {

            items = JSON.parse(localStorage.getItem("cart"));
            const DOM = document.getElementById("__cart_content_table");

            if (items == null || items.length == 0) {
                //document.getElementById("___cart_content_table_r2").innerHTML = "<br><br>Cart is empty.";
                DOM.innerHTML = "<h2>Cart is empty.</h2> Let's add some stuff to this!";
                
                // Write the GST and QST
                document.getElementById("subtotal").innerHTML = "$" + (0).toFixed(2);
                document.getElementById("qst").innerHTML = "$" + (0).toFixed(2);
                document.getElementById("gst").innerHTML = "$" + (0).toFixed(2);
                document.getElementById("total").innerHTML = "$" + (0).toFixed(2);
                return;
            }

            DOM.innerHTML = document.getElementById("___init").innerHTML;

            for (const item of items) {
                
                /*
                <div class="cart_grid">
                    <div class="cart_qty_selector">
                        <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(false);">-</button>
                        <input id="productQty" type="text" class="cart_qty" value="0" readonly></input>
                        <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(true);">+</button>
                    </div>
                    <div id="productMax" class="cart_qty_max_msg">
                        Quantity Limit: 20
                    </div>
                </div>
                */

                DOM.innerHTML +=
                    `<tr class="cart_list">
                        <td style = "text-align:center">
                            <img src = "../assets/Images/${item.image}" alt = "" width = "150" height = "150" >
                        </td>
                        <td style = "text-align:center" >
                            <div><h2>${item.name}</h2></div>
                        </td>
                        <td style="text-align:center;" > 
                            <div class="cart_qty_selector_grid">
                                <div class="cart_qty_selector">
                                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQtyCartPage(${item.id}, false);">-</button>
                                    <input id="productQty${item.id}" type="text" class="cart_qty" value="${item.quantity}" readonly></input>
                                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQtyCartPage(${item.id}, true);">+</button>
                                </div>
                                <div class="cart_qty_max_msg">
                                    Quantity Limit: ${item.limit}
                                </div>
                            </div>
                        </td>                     
                        <td style = "text-align:center" >
                            <div><h2> $${item.cost} </h2></div> 
                        </td>
                        <td style = "text-align:center" >
                            <input type="button" class="cart_remove_btn" onclick="removeItem(${item.id});" value="Remove Item" /> 
                        </td> 
                    </tr>`;
            }

            // Write the GST and QST
            getNumberOfItems();
            calculateCost();
        }

        document.addEventListener("DOMContentLoaded", function() {
            init();
        });

        function clearCart() {
            localStorage.removeItem("cart");
            init();
        }
    </script>
</head>

<body>
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

    <h1 style="font-size:48; padding:2%; text-align:center; background-color:white;">Cart</h1>

    <div class="cart_grid">
        <div class="cart_items">
            <table id="__cart_content_table">
                <tr id="___init">
                    <th>
                        <div><h2 class="grey">Product Image</h2></div>
                    </th>

                    <th>
                        <div><h2 class="grey">Product name</h2></div>
                    </th>

                    <th>
                        <div><h2 class="grey">Quantity</h2></div>
                    </th>

                    <th>
                        <div><h2 class="grey">Total Price</h2></div>
                    </th>
                    <td>
                        <input type="button" class="cart_btn" style="font-size: 16px;" onclick="clearCart();" value="Clear All" />
                    </td>
                </tr>
                <!-- <tr><td id="___cart_content_table_r2" colspan="5"></td></tr> -->
            </table>
        </div>
        <div class="cart_right">
            <div class="border">
                <h1>CART SUMMARY</h1>
                <label class="name">Estimated total</label><br>
                <input id="bigTotal" type="text" style="height:80px; font-size:40; width:300;" value="$0.00" readonly><br><br>

                <input type="submit" class="cart_btn" style="width:300; size:20;" value="PLACE ORDER">

                <h3 class="red" style= "font-size:17; font-family:'Courier New';" >Price Breakdown:</h3>

                <table style=width:100%>
                    <tr>
                        <td><h3 class="black" style="font-size:17;">Number of items:</h3></td>
                        <td style="text-align:right;"><h3 id="numberOfItems">0</h3></td>
                    </tr>
                    <tr>
                        <td><h3 class="black" style="font-size:17;">Subtotal:</h3></td>
                        <td style="text-align:right;"><h3 id="subtotal">$0.00</h3></td>
                    </tr>
                    <tr>
                        <td><h3 class="black" style="font-size:17;">QST:</h3></td>
                        <td style="text-align:right;"><h3 id="qst">$0.00</h3></td>
                    </tr>
                    <tr>
                        <td><h3 class="black" style="font-size:17;">GST:</h3></td>
                        <td style="text-align:right;"><h3 id="gst">$0.00<h3></td>
                    </tr>
                    <tr>
                        <td><h3 class="black" style="font-size:17;">Total:</h3></td>
                        <td style="text-align:right;"><h3 id="total">$0.00</h3></td>
                    </tr>
                </table>
            </div>

            <div class="border">
                <h1 style="font-size:26;"> PROMOTIONAL CODE<h1>
                        <table style="width:100%;">
                            <tr>
                                <td><label class="name">Apply a promotional code</label></td>
                                <td style="text-align:right;">
                                    <image src="../assets/Icons/questionmark.png" alt="question mark icon"
                                        width="50" height="25"></image>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" style="height:60px;font-size:10;width:200px;"
                                        placeholder="EX: PROMCODE1     "></td>
                                <td style="text-align:right;"><input type="submit" style="height:60; text-align:center; padding: 22px;" class="cart_btn"
                                        value="APPLY"></td>
                            </tr>
                        </table>
            </div>

            <div class="border">
                <h2>Delivery</h2>
                <h4>Caliprix Atwater</h4>
                <p>1150 Maisonneuve BLVD W, H3A 1M7 , Montreal , Canada</p>
                <p>(514) 553-4360</p>
                <p>Thursday: 07:00 - 22:00</p>
            </div>
            <div class="border">
                <h4> To ensure accurate product avaliability and pricing, please choose your store.</h4>
                <center>
                    <!-- <table border="1"> -->
                    <table style="border:1;">
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

                    <<a href="login.php"><input type="submit" class="cart_btn" style="width:300; size=20;"
                            value="MY POSITION"></a>
                </center>


                <h4> Please log in or create an account to reserve your timeslot</h4>
                <a href="login.php">
                    <button type="submit" class="cart_btn" style=width:300; size="20">LOGIN</button><br><br>
                </a>
                <a href="register.php"><button type="submit" class="cart_btn" style=width:300; size="20" ;>CREATE AN
                        ACCOUNT</button><br><br>
                </a>
            </div>
        </div>
    </div>

    <br />
    <br />

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