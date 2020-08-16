<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}


$doc = new DOMDocument();
$doc->load("data.xml");

$category = $_GET['category'];

$product = [];
$item;
$bvgqty = 0;

$productsTop =
"<tr>
    <br><h2 style='color:dodgerblue; text-align:center;'> Click on a product image (or its corresponding title) to go to
            the corresponding product page.</h2>
</tr>

<tr> 
    <div class='beverage_aisle_head'>
        <div class='beverage_aisle_item_img'>
            <h2>Product Image</h2>
        </div>

        <div class='beverage_aisle_item'>
            <h2>Product Title</h2>
        </div>

        <div class='beverage_aisle_item'>
            <h2>Brief Description</h2>
        </div>

        <div class='beverage_aisle_item'>
            <h2>Product Price</h2>
        </div>

        <div class='beverage_aisle_item'>
            <h2>Add to Cart</h2>
        </div>
    </div>
</tr>";

$noProducts = 
"<div style='color:dodgerblue; text-align:center; font-size:28px;'>
    <br><br>Looks like there are no items here... :(
    <br><br> Check another category!<br><br>
</div>";

function loadItem() {
    global $doc, $category, $bvgqty, $product, $item, $minidesc;
    global $name, $description, $price, $image, $limit, $id;
    $docProducts = $doc->getElementsByTagName("product");
    foreach($docProducts as $i) {
        if ($i->getElementsByTagName("category")->item(0)->nodeValue == $category) {
            $item = $i->getElementsByTagName("item")->item(0)->nodeValue;
            $minidesc = $i->getElementsByTagName("minidesc")->item(0)->nodeValue;
            $k = $i->getElementsByTagName("t1")->item(0);
            $id[$bvgqty] = $k->getElementsByTagName("id")->item(0)->nodeValue;
            $name[$bvgqty] = $k->getElementsByTagName("name")->item(0)->nodeValue;
            $description[$bvgqty] = $k->getElementsByTagName("description")->item(0)->nodeValue;
            $price[$bvgqty] = $k->getElementsByTagName("price")->item(0)->nodeValue;
            $image[$bvgqty] = $k->getElementsByTagName("image")->item(0)->nodeValue;
            $limit[$bvgqty] = $k->getElementsByTagName("limit")->item(0)->nodeValue;
            $product[$bvgqty] =
            "<tr>
                <div class='beverage_aisle'>
                    <form type='submit' method='GET' action='item.php'>
                        <div class='beverage_aisle_item_img'>
                            <button name='item' value='$item' style='background:transparent; border:none;'> 
                                <img src='../assets/Images/$image[$bvgqty]' style='width:100px; height:100px;' alt='$item' value='$item' /> 
                            </button>
                        </div>

                        <div class='beverage_aisle_item'>
                            <button name='item' class='btn_slim' value='$item'>$name[$bvgqty]</button>
                        </div>
                    
                        <div class='beverage_aisle_item'>$minidesc</div>
                        <div class='beverage_aisle_item' style='color:seagreen;'>$$price[$bvgqty]</div>
                        <div class='beverage_aisle_item'>
                            <!-- Fill these variable with the defaults listed towards the top of the item page -->
                            <!-- Use single quotes for strings -->
                            <button type='button' class='cart_btn_aisle' onclick='addToCart($id[$bvgqty], \"$name[$bvgqty]\", \"$image[$bvgqty]\", $price[$bvgqty], $limit[$bvgqty]);' />
                            Add To Cart</button>
                        </div>
                    </form>
                </div>
            </tr>";
            $bvgqty++;
        }
    }
}

loadItem();

?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
    <title><?php echo $category; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</head>

<script>
function addToCart(id, name, img, price, limit) {
    cart.void_add(new Item(id, name, 1, img, price, 1, limit, 0, ''));
}
</script>

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


    <h1 style="font-size:48; padding:2%; text-align:center; background-color:white;"><?php echo $category; ?></h1>

    <div id="beverage_grid">

        <div id="categories">

            <h3 style="margin-right:100%; padding:2%;">Categories</h3>

            <div class="sub_menus" id="aisle_categories">
                <?php echo file_get_contents('common/aisleform.php'); ?>
            </div>
        </div>

        <div id="beverages">
            <div id="beverage_items">

                <table id="beverage_table">

                    <?php
                        if (sizeof($product) != 0) {
                            echo $productsTop;
                            foreach ($product as $i) {
                                echo $i;
                            }
                        } else {
                            echo $noProducts;
                        }
                    ?>

                </table>
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