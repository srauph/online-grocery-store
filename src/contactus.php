<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Cart Summary page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <br>
        <br>
        <br>
        <center>
            <div id="top_banner">
                <h1 class="center " style="font-size:60;">CONTACT US</h1><br>
        </center>
        <br>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <center>
            <div class="cart_left1">
                <h1>We're improving! If you have any questions, comments or suggestions about a store
                    or service online, please complete the form below or give
                    us a call. We'll be happy to answer!</h1>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <h2 style=color:blue;>
                    ................................................................................................
                    Customer Service
                    ................................................................................................

                </h2>
                <br>
                <div class="Customer_service">
                    <table>
                        <tr>
                            <td>
                                <h1>Canada:</h1>
                            </td>
                            <td class="red">
                                <h1>514-553-4360</h1>
                            </td>
                        </tr>
                    </table>

                    <h1>From Monday to Friday</h1>
                    <h1 class="red" style="font-size:40;">8:00 am to 6 pm</h1>
                    <h1>Weekends and holidays</h1>
                    <h1 class="red" style="font-size:40;">7:00 am to 2 pm</h1>
                </div>
                <h2 style=color:blue;>
                    ................................................................................................
                    Online Groceries
                    ................................................................................................

                </h2>
                <br>
                <h1>Contact your store with any questions about your online order:</h1>
                <br>
                <table>
                    <tr>
                        <td height="100" width="360" style="text-align:center">
                            <image src="../assets/Icons/pen.png" alt="pen image" width="150" height="150">
                        </td>

                        <td height="100" width="360" style="text-align:center">
                            <image src="../assets/Icons/calender1.jpg" alt="calender image" width="150" height="150"
                                style="text-align:left">
                        </td>

                        <td height="100" width="360" style="text-align:center">
                            <image src="../assets/Icons/cross.jpg" alt="cross image" width="150" height="150">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1 style="color:grey; font-size:30;">to add,remove or check product avaliability</h1>
                        </td>
                        <td>
                            <h1 style="color:grey; "> to change your orders delivery time</h1>
                        </td>
                        <td>
                            <h1 style="color:grey;">to cancel your order</h1>
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <h2 style=color:blue;>
                    ................................................................................................
                    Find a Store
                    ................................................................................................

                </h2>
                <br>
                <br>
                <br>
                <label class="grey">Enter Postal code</label>
                <table border="1">
                    <tr>
                        <th> <input type="text" style="height:67px;font-size:15;width:190px; "
                                placeholder="Our only location H3A 1M7">
                        <th><a href="https://www.google.com/maps/place/1150+Maisonneuve+Blvd+W,+Montreal,+QC/@45.5000431,-73.5778952,17.18z/data=!4m5!3m4!1s0x4cc91a416d27dcf1:0xe258368f00acb82c!8m2!3d45.5002825!4d-73.5749175"
                                target="_blank">
                                <image src="../assets/Icons/magnifyingglass.png" alt="A magnifying glass image"
                                    style="float:right; margin-right:0.5em" width="75" height="65">
                            </a>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <h1>Questions or comments? please write us</h1>
                <h3>If you have any questions, comments or suggestions about a store or a service offered online or
                    in-store,
                    please complete the form below. We'll be delighted to answer.</h3>
                <br>
                <br>
                <br>
                <table>
                    <h1 style=color:grey;>How Did you know about us?</h1>
                    <th><input type="radio" id="Website" name="Reccomend" value="webiste">
                        <label for="Website" style="font-size:20;">Website</label></th><br>
                    <th><input type="radio" id="Mobileapplication" name="Reccomend" value="mobileapplication">
                        <label for="Mobileapplication" style="font-size:20;">Mobile Application</label></th><br>
                    <th><input type="radio" id="Online" name="Reccomend" value="online" />
                        <label for="Online" style="font-size:20;">Caliprex online grocery order</label></th><br>
                    <th><input type="radio" id="Store" name="Reccomend" value="store" />
                        <label for="store" style="font-size:20;">Caliprex Store</label></th><br>
                </table>
                <br>
                <br>
                <br>
                <div class="border5">
                    <table>
                        <form method="POST">
                            <th><label style="font-size:30; color:white;">First Name</label><br />
                                <input type="text" style="height:45px;font-size:20;width:390px;" name="First Name"
                                    placeholder="Enter your first Name" /><br /></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th><label style="font-size:30; color:white;">Last Name</label><br />
                                <input type="Email" style="height:45px;font-size:20;width:390px;" name="Last Name"
                                    placeholder="Enter your Last Name" /><br /></th>
                    </table>
                    <br>
                    <br>
                    <br>

                    <table>
                        <th><label style="font-size:30;color:white;">Email Address</label><br />
                            <input type="text" style="height:45px;font-size:20;width:390px" name="Email Address"
                                placeholder="Enter your Email Address" /><br /></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th><label style="font-size:30; color:white;">Phone</label><br>
                            <input type="text" style="height:45px;width:390px;font-size:20;" name="Phone"
                                placeholder="Enter your Phone Number" /><br /></th>
                    </table>
                    <br>
                    <br>
                    <label>
                        <h1>Comments</h1>
                    </label>
                    <input type="text" style="height:180px;font-size:30;width:700px;" name="Phone"
                        placeholder="Enter your Comments" /><br />
                    <br>
                    </form>
                </div>
                <div class="border2">
                    <h1 style=color:red;>HAVE A QUESTION?</h1>
                    <h2>Check out our FAQs, or, if it's an emergency, call us.</h2>
                </div>
            </div>
        </center>

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