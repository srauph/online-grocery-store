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
    } else {
        $header = file_get_contents('common/header.php');
        echo $header;
    }
    ?>
    <script>
        document.getElementById("helloUser").innerHTML="Hello, <?php echo $_SESSION["currentLogin"][0]; ?>!";
    </script>
    <br />
    <br />

    <div id="all_items">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
        <center style="font-size:36px; color:dodgerblue;">
            Under construction!
        </center>
        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>

    <?php
    $footer = file_get_contents('common/footer.php');
    echo $footer;
    ?>


    <?php 
        
            // load all the items in the database
            $result = ItemArray_getAllItems();
            
            // Convert this to JS array
			$js_array = "[";

			for ($i = 0; $i < count($result); $i++) {
				$js_array = $js_array . "new Item(". $result[$i]->toString() ."), ";
			}

            $js_array = $js_array . "]";
            
			// Exceute script
			echo "<script>window.addEventListener('load', function()	{
				Sales.void_displayItems($js_array, 'all_items');
			});</script>";        
        ?>
</body>

</html>