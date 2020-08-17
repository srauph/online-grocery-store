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
    <?php
    if ($_SESSION["currentLogin"] != null) {
        $header = file_get_contents('common/headerloggedin.php');
        echo $header;
        if ($_SESSION["currentLogin"][2] == "true") {
            echo '<script>document.getElementById("helloUser").innerHTML="Hello, '.$_SESSION["currentLogin"][0].'! | <a class=\'white\' href=\'backend/productlist.php\' title=\'Go to store back end\'>Backend</a> | "</script>';
        } else {
            echo '<script>document.getElementById("helloUser").innerHTML="Hello, '.$_SESSION["currentLogin"][0].'! | "</script>';
        }
    } else {
        $header = file_get_contents('common/header.php');
        echo $header;
    }
    ?>

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

    <?php
    $footer = file_get_contents('common/footer.php');
    echo $footer;
    ?>
    </body>

</html>