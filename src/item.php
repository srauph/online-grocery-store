<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}

$doc = new DOMDocument();
$doc->load("data.xml");

$item = $_GET['item'];
$type = "t1";

$currentobj = $type[1];

function loadItem() {
    global $doc, $item;
    global $name, $description, $price, $image, $options, $limit, $id;
    $docProducts = $doc->getElementsByTagName("product");
    foreach($docProducts as $i) {
        if ($i->getElementsByTagName("item")->item(0)->nodeValue == $item) {
            $options = $i->getElementsByTagName("options")->item(0)->nodeValue;
            for ($j = 1; $j <= $options; $j++) {
                $k = $i->getElementsByTagName("t".$j)->item(0);
                $id[$j-1] = $k->getElementsByTagName("id")->item(0)->nodeValue;
                $name[$j-1] = $k->getElementsByTagName("name")->item(0)->nodeValue;
                $description[$j-1] = $k->getElementsByTagName("description")->item(0)->nodeValue;
                $price[$j-1] = $k->getElementsByTagName("price")->item(0)->nodeValue;
                $image[$j-1] = $k->getElementsByTagName("image")->item(0)->nodeValue;
                $limit[$j-1] = $k->getElementsByTagName("limit")->item(0)->nodeValue;
            }
        }
    }
}

loadItem();


for ($i=0; $i<$options; $i++) {
    $changeProductCases[$i] =
    "case " . ($i+1) . ":
        currentItem = " . ($i+1) . ";
    
        name = \"$name[$i]\";
        desc = \"$description[$i]\";
        price = $price[$i];
        img = \"../assets/Images/$image[$i]\";
        limit = $limit[$i];
        id = $id[$i];
    
        updatePageContents(); // Ditto.
        break;
        
        ";
}

for ($i=1; $i<=$options; $i++) {
    $changeProductButtons[$i-1] =
    " <button id='productOption$i' class='product_option_btn' onclick='changeProduct($i);'>".$name[$i-1]."</button> 
    ";
}

?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
    <title id="productTitle"><?php echo $name[0]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="scripts/Util.js"></script>
    <script type="text/javascript" src="scripts/Cart.js"></script>
    <script type="text/javascript" src="scripts/Item.js"></script>
    <script type="text/javascript" src="scripts/Sales.js"></script>
    <script type="text/javascript" src="scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="scripts/Beverage.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</head>

<script>

    /** 
     * name:    Name of the object. Used in the page title, the item title, and as the alt image text
     * desc:    Full description of the object.
     * price:   Price of the object
     * img:     Link to the object image file
     * options: Amount of different options available (eg different product sizes)
     */
    name = "<?php echo $name[0]; ?>";
    desc = "<?php echo $description[0]; ?>";
    price = "<?php echo $price[0]; ?>";
    img = "<?php echo $image[0]; ?>";
    options = "<?php echo $options[0]; ?>";
    limit = "<?php echo $limit[0]; ?>";
    id = "<?php echo $id[0]; ?>";

    /** 
     * Saves the session data. 
     * The only important info to keep is... 
     *      The current quantity entered
     *      The current option selected
     *      Whether or not the description is collapsed.
     * 
     * These three variables will allow the restoration of the page to its previous state.
     * `localStorage` can be used instead of `sessionstorage` to preserver contents even after 
     * closing the browser/tab completely. (sessionStorage "forgets" everything when you close
     * the tab, only preserves info while refreshing and navigating within the site)
     */
    function saveSessionData() {
        sessionStorage.<?php echo $item; ?>Qty = qty;
        sessionStorage.<?php echo $item; ?>CurrentItem = currentItem;
        sessionStorage.<?php echo $item; ?>ShowAll = showAll;
    }

    /**  
     * Loads the session data from the three variables.
     * Each variable needs to be checked if it exists with the if statement before it can be
     * used to load the page to the original state.
     */
    function loadSessionData() {
        if (sessionStorage.<?php echo $item; ?>CurrentItem) {
            currentItem = parseInt(sessionStorage.<?php echo $item; ?>CurrentItem);
        }
        if (sessionStorage.<?php echo $item; ?>Qty) {
            qty = parseInt(sessionStorage.<?php echo $item; ?>Qty);
        }
        if (sessionStorage.<?php echo $item; ?>ShowAll == "true") {
            document.getElementById("showDescBtn").innerHTML = "Less Description...";
            showAll = true;
        }

        // Restore the page to the original state
        changeProduct(currentItem);
        setQty(qty);
        displayDesc();
    }

    /** 
     * This function determines what happens when you click a button to select a product option. 
     * The page title, image, item title, item description, and item price all need to be updated
     * when a new option is selected.
     */
    function changeProduct(type) {

        document.changeproduct.item.value = "<?php echo $item; ?>";

        switch (type) {

            <?php
            foreach ($changeProductCases as $i){
                echo $i;
            }
            ?>

            default:
                currentItem = "<?php $currentobj = 1; echo $currentobj; ?>";

                name = "<?php echo $name[0]; ?>";
                desc = "<?php echo $description[0]; ?>";
                price = "<?php echo $price[0]; ?>";
                img = "../assets/Images/<?php echo $image[0]; ?>";
                limit = "<?php echo $limit[0]; ?>";
                id = "<?php echo $id[0]; ?>";

                updatePageContents();
                break;
        }
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

    <div class="beverage_page">

        <div class="beverage_left">
            <img id="productImg" src="" style="width:80%;" alt="" />
        </div>

        <div class="beverage_right">
            <!-- Product details -->
            <h1 id="productName" style="font-size:48;"></h1><br>
            <p><span id="productPrice" class="product_price"></span></p><br><hr>
            <p id="productDesc" class="product_desc"></p>
            <button id="showDescBtn" type="submit" class="product_description_btn" onclick="showHideDesc();">More Description...</button><br><br><br>

            <!-- Product option selection buttons -->
            <p>You may choose a different size using the options below...</p>
            <form type="submit" id="changeproduct" action="item.php" name="changeproduct" method="GET">
                <?php
                foreach ($changeProductButtons as $i) {
                    echo $i;
                }
                ?>
                <br><br><br>
                <input type="hidden" id="category" name="category" value="" />
                <input type="hidden" id="item" name="item" value="" />
            </form>

            <!-- Quantity selector and Add to Cart functionality -->
            <div class="cart_grid">
                <div class="cart_qty_selector">
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(false);">-</button>
                    <input id="productQty" type="text" class="cart_qty" value="0" readonly></input>
                    <button type="submit" class="cart_plus_minus_btn" onclick="updateQty(true);">+</button>
                </div>
                <div id="productMax" class="cart_qty_max_msg">
                    Quantity Limit: 20
                </div>
                <button type="submit" class="cart_btn" onclick="addToCart();">Add To Cart</button>
            </div>
        </div>
    </div>
    <br />
    <br />
    </div>



    
    <?php
    $footer = file_get_contents('common/footer.php');
    echo $footer;
    ?>
</body>

</html>
