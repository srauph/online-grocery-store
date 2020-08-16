<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Store main page</title>
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

	for ($i = 0; $i < count($result); $i++) {
		$js_array = $js_array . "new Item(". $result[$i]->toString() ."), ";
	 }

	$js_array = $js_array . "]";

	// Exceute script
	echo "<script>window.addEventListener('load', function()	{
			Sales.void_processSales($js_array);
	});</script>";
?>

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

    <div id="all_items">
        <br />
        <br />
        <br />
        <form type="submit" method="GET" action="item.php">
            <?php 

            include 'php/Debug.php';

            $doc = new DOMDocument();
            $doc->load("data.xml");
            
            global $doc, $category, $bvgqty, $product, $item, $options, $minidesc;
            global $name, $description, $price, $image, $category, $id;
            $products = $doc->getElementsByTagName("product");

            //var_dump($doc);
           // Debug::log($doc);

            foreach($products as $i) {   
                $item = $i->getElementsByTagName("item")->item(0)->nodeValue;
                $minidesc = $i->getElementsByTagName("minidesc")->item(0)->nodeValue;

                $k = $i->getElementsByTagName("t1")->item(0);
                $id[$bvgqty] = $k->getElementsByTagName("id")->item(0)->nodeValue;
                $image[$bvgqty] = $k->getElementsByTagName("image")->item(0)->nodeValue;
                $price[$bvgqty] = $k->getElementsByTagName("price")->item(0)->nodeValue;

                $category[$bvgqty] = $i->getElementsByTagName("category")->item(0)->nodeValue;
                $limit[$bvgqty] = $k->getElementsByTagName("limit")->item(0)->nodeValue;
           
                echo "<div class=\"__search_result_block\">
                            <h1>$item</h1>
                            <img src=\"../assets/Images/$image[$bvgqty]\" title=\"$item\" />
					        <br />
                            <br />
                            
                            <span>$minidesc</span>
                            <br />

                            <h2>$$price[$bvgqty]</h2>

                             <button class=\"__learn_more_btn\" name=\"item\" type=\"button\" value=\"$item\" onclick=\"window.location.href = 'item.php?item=$item';\">
                                Learn more
                             </button>

                            <!-- Add to cart button -->

                            <input type=\"button\" value=\"Add to cart\" onclick=\"cart.void_add(
                                        new Item($id[$bvgqty], '$item', '$category[$bvgqty]', '$image[$bvgqty]', $price[$bvgqty], $limit[$bvgqty], false)
                                        )\" />                 
                        </div>";
                $bvgqty++;
            }
        
        ?>
        </form>
    </div>

    <br />
    <br />
    <br />

    <?php
    $footer = file_get_contents('common/footer.php');
    echo $footer;
    ?>


    <?php 
        
            // // load all the items in the database
            // $result = ItemArray_getAllItems();
            
            // // Convert this to JS array
			// $js_array = "[";

			// for ($i = 0; $i < count($result); $i++) {
			// 	$js_array = $js_array . "new Item(". $result[$i]->toString() ."), ";
			// }

            // $js_array = $js_array . "]";
            
			// // Exceute script
			// echo "<script>window.addEventListener('load', function()	{
			// 	Sales.void_displayItems($js_array, 'all_items');
			// });</script>";        
        ?>
</body>

</html>