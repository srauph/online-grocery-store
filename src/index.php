<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>Store main page</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>

    <!-- Load on sale items to display them-->
    <?php
        include "php/Util.php";

        $result = ItemsArray_getItem("onsale", 1);
        
        // Convert this to JS array
        $js_array = "[";

        // foreach ($result as $value)	{
            
        // }

        for ($i = 0; $i < min(count($result), 5); $i++) {
            $js_array = $js_array . "new Item(". $result[$i]->toString() ."), ";
        }

        $js_array = $js_array . "]";

        // Exceute script
        echo "<script>window.addEventListener('load', function()	{
                Sales.void_processSales($js_array);
        });</script>";
    ?>
</head>

<body>
    <?php
    if ($_SESSION["currentLogin"] != null) {
        $header = file_get_contents('common/headerloggedin.php');
        echo $header;
    } else {
        $header = file_get_contents('common/header.php');
        echo $header;
    }
    ?>

        <!-- This div is resposible for the display of the items on Sale -->
        <div id="slidshow" style="">
            This text exists to show the div only
            <div id="slidshow_price">
                $0.00
            </div>
        </div>
        <div id="__search_result">
        </div>

    <!-- FOOTER HERE -->
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

        <?php 
			if (isset($_POST['__tag_search_btn']))	{
				$temp_tag = $_POST['__tag_search_btn'];
				ItemArray_searchByTag($temp_tag);
			}

			function ItemArray_searchByTag($tag)	{

				// Load all data from the database
				$result = ItemArray_getAllItems();

				// Convert this to JS array
				$js_array = "[";

				for ($i = 0; $i < count($result); $i++) {
					$js_array = $js_array . "new Item(". $result[$i]->toString() ."), ";
				}

				$js_array = $js_array . "]";

				// Exceute script
				echo "<script>window.addEventListener('load', function()	{
						Sales.void_processSearch('$tag', $js_array);
				});</script>";

			}

		?>
</body>

</html>