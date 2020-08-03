<?php
session_start();
require_once('php/config.php');
//phpinfo();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Store main page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div>
        <div class="sub_menus" id="menu_aisle" onmouseover="void_showElement('menu_aisle');"
            onmouseout="void_hideElement('menu_aisle');">
            <form action="register.php" method="POST">
                <ul>
                    <li><input type="submit" name="__tag_search_btn" value="Bakery" formaction="bakery.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Beauty Products"
                            formaction="beautyproducts.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Beverages" formaction="beverages.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Frozen" formaction="frozen.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Fruits" formaction="fruits.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Vegetables" formaction="vegetables.php">
                    </li>
                    <li><input type="submit" name="__tag_search_btn" value="Dairy Products"
                            formaction="dairyproducts.php"></li>
                    <li><input type="submit" name="__tag_search_btn" value="Snacks" formaction="snacks.php"></li>
                </ul>
            </form>
        </div>
    </div>
    <br />
    <br />

    <div class="registration_form">
        <div class="message">
            <div id="user_registered" class="ok_message">
                Your account has been created successfully please <b><a href="login.php">sign in here</a></b> to access
                it.
            </div>
            <div id="pass_error" class="error_message">
                Password and password confirmation don't match!
            </div>
            <div id="user_error" class="error_message">
                This Username Already exists... Please try another username!
            </div>
            <div id="email_error" class="error_message">
                This register email has been already used... Please try another email!
            </div>
            <div id="query_error" class="error_message">
                Error! An error has occured while processing PHP query
            </div>
        </div>
        <form method="POST" action="register.php">
            <h1>Sign up</h1>
            <table>
                <tr>
                    <td>Username</td>
                </tr>
                <tr>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>email</td>
                </tr>
                <tr>
                    <td><input type="email" name="email" placeholder="name@example.com"></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Confirm password</td>
                </tr>
                <tr>
                    <td><input type="password" name="confirm_password"></td>
                </tr>
            </table>
            <input type="submit" name="register" class="btn" value="Register" />
        </form>
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

    <?php
	include "php/debug.php";

	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['confirm_password'];
		$email = $_POST['email'];

		if ($conn == false) {
			echo "Connection error";
		}

		if ($password == $cpassword) {

			$query = "SELECT * FROM users WHERE username='$username'";
			$query_run = mysqli_query($conn, $query);
			$query2 = "SELECT * FROM users WHERE email='$email'";
			$query_run2 = mysqli_query($conn, $query2);

			if (mysqli_num_rows($query_run) > 0) {
				// there is already a user with the same username
				echo '<script type="text/javascript">document.getElementById("user_error").style.display = "block";</script>';
			} else if (mysqli_num_rows($query_run2) > 0) {
				// there is already a user with the same email
				echo '<script type="text/javascript">document.getElementById("email_error").style.display = "block";</script>';
			} else {

				$query4 = "INSERT INTO `users` (`id`, `username`, `password`, `email`, `cart`) VALUES (NULL, '$username', '$password', '$email', '');";

				if ($conn->query($query4) === TRUE) {
					echo '<script type="text/javascript">document.getElementById("user_registered").style.display = "block";</script>';
				   } else {
					echo '<script type="text/javascript">document.getElementById("query_error").style.display = "block";</script>';
					echo "Error: " . $sql . "<br>" . $conn->error;
				   }
			}
		} else {
			echo '<script type="text/javascript">document.getElementById("pass_error").style.display = "block";</script>';
		}
	}
	?>
</body>

</html>