<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}
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
    <br />
    <br />

    <!-- This div is resposible for the display of the items on Sale -->
    <div id="slidshow">
        This text exists to show the div only
        <div id="slidshow_price">
            $0.00
        </div>
    </div>
    <div id="__search_result">
    </div>

    <?php
    $footer = file_get_contents('common/footer.php');
    echo $footer;
    ?>

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