<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}

$doc = new DOMDocument();
$doc->load("data.xml");

$category = "beverages";
$_SESSION['item'] = "sprite";
$_SESSION['type'] = "t1";

$_SESSION['currentobj'] = $_SESSION['type'][1]-1;

// if (!isset($_POST['item'])) {
//     echo "item not set ";
//     $_SESSION['item'] = "sprite";
// } else {
//     echo "item is set ";
//     echo $_POST['item'];
//     $_SESSION['item'] = $_POST['item'];
// }

// if (!isset($_POST['type'])) {
//     echo "type not set ";
//     $_SESSION['type'] = "sprite";
// } else {
//     echo "type is set ";
//     echo $_POST['type'];
//     $_SESSION['type'] = $_POST['type'];
// }

function loadItem() {
    global $doc;
    $docProducts = $doc->getElementsByTagName("product");
    foreach($docProducts as $i) {
        // echo $i->getElementsByTagName("item")->item(0)->nodeValue;
        if ($i->getElementsByTagName("item")->item(0)->nodeValue == $_SESSION['item']) {
            $_SESSION['options'] = $i->getElementsByTagName("options")->item(0)->nodeValue;
            for ($j = 0; $j < $_SESSION['options']; $j++) {
                $k = $i->getElementsByTagName($_SESSION['type'])->item(0);
                $_SESSION['id'][$j] = $k->getElementsByTagName("id")->item(0)->nodeValue;
                $_SESSION['name'][$j] = $k->getElementsByTagName("name")->item(0)->nodeValue;
                $_SESSION['description'][$j] = $k->getElementsByTagName("description")->item(0)->nodeValue;
                $_SESSION['price'][$j] = $k->getElementsByTagName("price")->item(0)->nodeValue;
                $_SESSION['image'][$j] = $k->getElementsByTagName("image")->item(0)->nodeValue;
                $_SESSION['limit'][$j] = $k->getElementsByTagName("limit")->item(0)->nodeValue;
            }
        }
    }
}

echo $_SESSION['name'];
echo "<br>";
echo $_SESSION['description'][0];
echo $_SESSION['price'][0];
echo $_SESSION['image'][0];
echo $_SESSION['options'][0];
echo $_SESSION['limit'][0];
echo $_SESSION['id'][0];

?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/aisle_beverage.css">
    <title id="productTitle"><?php echo $_SESSION['name']; ?></title>
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
    name = "<?php echo $_SESSION['name'][0]; ?>";
    desc = "<?php echo $_SESSION['description'][0]; ?>";
    price = "<?php echo $_SESSION['price'][0]; ?>";
    img = "<?php echo $_SESSION['image'][0]; ?>";
    options = "<?php echo $_SESSION['options'][0]; ?>";
    limit = "<?php echo $_SESSION['limit'][0]; ?>";
    id = "<?php echo $_SESSION['id'][0]; ?>";

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
        sessionStorage.spriteQty = qty;
        sessionStorage.spriteCurrentItem = currentItem;
        sessionStorage.spriteShowAll = showAll;
    }

    /**  
     * Loads the session data from the three variables.
     * Each variable needs to be checked if it exists with the if statement before it can be
     * used to load the page to the original state.
     */
    function loadSessionData() {
        if (sessionStorage.spriteCurrentItem) {
            currentItem = parseInt(sessionStorage.spriteCurrentItem);
            // currentItem = "<?php echo $_SESSION['type'][1]; ?>";
        }
        if (sessionStorage.spriteQty) {
            qty = parseInt(sessionStorage.spriteQty);
        }
        if (sessionStorage.spriteShowAll == "true") {
            document.getElementById("showDescBtn").innerHTML = "Less Description...";
            showAll = true;
        }

        // Restore the page to the original state
        changeProduct(currentItem);
        setQty(qty);
        displayDesc();

        // updatePageContents();
    }

    /** 
     * This function determines what happens when you click a button to select a product option. 
     * The page title, image, item title, item description, and item price all need to be updated
     * when a new option is selected.
     */
    function changeProduct(type) {

        // document.changeproduct.item.value = "<?php echo $_SESSION['item']; ?>";
        // document.changeproduct.item.value = "sprite";
        // document.changeproduct.type.value = "t" + type;
        // document.getElementById("changeproduct").submit();

        switch (type) {

            case 2: // If the option selected is the 710mL Bottle

                // Update relevant variables
                // name = "Sprite (710mL Bottle)";
                // desc = "Sprite, a lemon-lime flavored soft drink. <br><br>From the Coca-Cola Company, Sprite is one of the best-selling soft drinks in the world. Sprite also comes in 355mL cans or 2L bottles.";
                // price = 1.49;
                // img = "../assets/Images/sprite_710ml.jpg";
                // limit = 12;
                // id = 102;
                // currentItem = 2;
                name = "<?php echo $_SESSION['name'][1]; ?>";
                desc = "<?php echo $_SESSION['description'][1]; ?>";
                price = "<?php echo $_SESSION['price'][1]; ?>";
                img = "<?php echo $_SESSION['image'][1]; ?>";
                options = "<?php echo $_SESSION['options'][1]; ?>";
                limit = "<?php echo $_SESSION['limit'][1]; ?>";
                id = "<?php echo $_SESSION['id'][1]; ?>";

                updatePageContents(); // Ditto.
                break;

            case 3: // 2L Bottle
                // name = "Sprite (2L Bottle)";
                // desc = "Sprite, a lemon-lime flavored soft drink. <br><br>From the Coca-Cola Company, Sprite is one of the best-selling soft drinks in the world. Sprite also comes in 355mL cans or 710mL bottles.";
                // price = 1.99;
                // img = "../assets/Images/sprite_2l.jpg";
                // limit = 6;
                // id = 103;
                // currentItem = 3;

                name = "<?php echo $_SESSION['name'][2]; ?>";
                desc = "<?php echo $_SESSION['description'][2]; ?>";
                price = "<?php echo $_SESSION['price'][2]; ?>";
                img = "<?php echo $_SESSION['image'][2]; ?>";
                options = "<?php echo $_SESSION['options'][2]; ?>";
                limit = "<?php echo $_SESSION['limit'][2]; ?>";
                id = "<?php echo $_SESSION['id'][2]; ?>";

                updatePageContents(); 
                break;

            default: // 355mL Can
                // name = "Sprite (355mL Can)";
                // desc = "Sprite, a lemon-lime flavored soft drink. <br><br>From the Coca-Cola Company, Sprite is one of the best-selling soft drinks in the world. Sprite also comes in 710mL bottles or 2L bottles.";
                // price = 0.99;
                // img = "../assets/Images/sprite.jpg";
                // limit = 24;
                // id = 101;
                // currentItem = 1;

                name = "<?php echo $_SESSION['name'][0]; ?>";
                desc = "<?php echo $_SESSION['description'][0]; ?>";
                price = "<?php echo $_SESSION['price'][0]; ?>";
                img = "<?php echo $_SESSION['image'][0]; ?>";
                options = "<?php echo $_SESSION['options'][0]; ?>";
                limit = "<?php echo $_SESSION['limit'][0]; ?>";
                id = "<?php echo $_SESSION['id'][0]; ?>";

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
    } else {
        $header = file_get_contents('common/header.php');
        echo $header;
    }
    
    loadItem();
    ?>
    <script>
        document.getElementById("helloUser").innerHTML="Hello, <?php echo $_SESSION["currentLogin"][0]; ?>!";
    </script>

    <div class="beverage_page">

        <div class="beverage_left">
            <img id="productImg" src="" style="width:80%; height:80%;" alt="" />
        </div>

        <div class="beverage_right">
            <!-- Product details -->
            <h1 id="productName" style="font-size:48;"></h1><br>
            <p><span id="productPrice" class="product_price"></span></p><br><hr>
            <p id="productDesc" class="product_desc"></p>
            <button id="showDescBtn" type="submit" class="product_description_btn" onclick="showHideDesc();">More Description...</button><br><br><br>

            <!-- Product option selection buttons -->
            <p>You may choose a different size using the options below...</p>
            <form type="submit" id="changeproduct" action="item.php" name="changeproduct" method="POST">
                <button id="productOption1" class="product_option_btn" onclick="changeProduct(1);">355mL Can</button>
                <button id="productOption2" class="product_option_btn" onclick="changeProduct(2);">710mL Bottle</button>
                <button id="productOption3" class="product_option_btn" onclick="changeProduct(3);">2L Bottle</button><br><br><br>
                <input type="hidden" name="item" value="" />
                <input type="hidden" name="type" value="" />
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
