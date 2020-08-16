<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
    <title>Aisle page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


    <h1 style="font-size:48; padding:2%; text-align:center; background-color:white;">Aisle Page</h1>

    <div id="beverage_grid">

        <div id="categories">

            <h3 style="margin-right:100%; padding:2%;">Categories</h3>

            <div class="sub_menus" id="aisle_categories">
                <?php echo file_get_contents('common/aisleform.php'); ?>
            </div>
        </div>

        <div id="beverages">
            <div id="beverage_items">
                <div style="color:slateblue; text-align:center; font-size:36px;">
                    <br><br>Click on a category to visit that category's aisle page!<br><br>
                </div>
            </div>
        </div>
    </div>

    <br />
    <br />

    <?php
    $footer = file_get_contents('common/footer.php');
    echo $footer;
    ?>
</body>

</html>