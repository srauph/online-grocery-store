<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}


$doc = new DOMDocument();
$doc->load("data.xml");

$category = $_GET['category'];
// $product = "cocacola";
// $type = "t1";
$product = [];
$item;
$bvgqty = 0;

// $currentobj = $type[1];
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
    <br><br><br>Looks like there are no items here... :(
    <br><br> Check another category!<br><br>
</div>";

function loadItem() {
    global $doc, $category, $bvgqty, $product, $item, $minidesc;
    global $name, $description, $price, $image, $limit, $id;
    $docProducts = $doc->getElementsByTagName("product");
    foreach($docProducts as $i) {
        // echo $i->getElementsByTagName("item")->item(0)->nodeValue;
        if ($i->getElementsByTagName("category")->item(0)->nodeValue == $category) {
            
            // $options = $i->getElementsByTagName("options")->item(0)->nodeValue;
            // for ($j = 1; $j <= $options; $j++) {
                $item = $i->getElementsByTagName("item")->item(0)->nodeValue;
                $minidesc = $i->getElementsByTagName("minidesc")->item(0)->nodeValue;
                $k = $i->getElementsByTagName("t1")->item(0);
                $id[$bvgqty] = $k->getElementsByTagName("id")->item(0)->nodeValue;
                $name[$bvgqty] = $k->getElementsByTagName("name")->item(0)->nodeValue;
                $description[$bvgqty] = $k->getElementsByTagName("description")->item(0)->nodeValue;
                $price[$bvgqty] = $k->getElementsByTagName("price")->item(0)->nodeValue;
                $image[$bvgqty] = $k->getElementsByTagName("image")->item(0)->nodeValue;
                $limit[$bvgqty] = $k->getElementsByTagName("limit")->item(0)->nodeValue;
            // }
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
                        <input name='category' type='hidden' value='$category'/>
                    
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
                <!-- <form action="frozen.php" method="POST">
                    <ul>
                        <li><input type="submit" name="tag_search_btn" value="Bakery" formaction="bakery.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Beauty Products"
                                formaction="beautyproducts.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Beverages" formaction="beverages.php">
                        </li>
                        <li><input type="submit" name="tag_search_btn" value="Frozen" formaction="frozen.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Fruits" formaction="fruits.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Vegetables" formaction="vegetables.php">
                        </li>
                        <li><input type="submit" name="tag_search_btn" value="Dairy Products"
                                formaction="dairyproducts.php"></li>
                        <li><input type="submit" name="tag_search_btn" value="Snacks" formaction="snacks.php"></li>
                    </ul>
                </form> -->
            </div>
        </div>

        <div id="beverages">
            <div id="beverage_items">

                <table id="beverage_table">
                    <!-- <tr>
                        <br><h2 style="color:crimson; text-align:center;"> Click on a product image (or its corresponding title) to go to
                                the corresponding product page.</h2>
                    </tr>

                    <tr> 
                        <div class="beverage_aisle_head">
                            <div class="beverage_aisle_item_img">
                                <h2>Product Image</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Product Title</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Brief Description</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Product Price</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Add to Cart</h2>
                            </div>
                        </div>
                        
                        <div class="beverage_aisle_head_mobile">
                            <div class="beverage_aisle_item">
                                <h2>Product Image</h2>
                            </div>

                            <div class="beverage_aisle_item">
                                <h2>Description</h2>
                            </div>
                        </div>
                    </tr> -->

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