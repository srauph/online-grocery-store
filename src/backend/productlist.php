<?php
session_start();
if (!isset($_SESSION["currentLogin"]) || $_SESSION["currentLogin"][2] !== "true"){
    header("Location: ../index.php");
    exit();
}

function alert($msg) {
    echo "<script>alert('$msg');</script>";
}

$doc = new DOMDocument();
$doc->load("../data.xml");

$productsTop =
"
<div style='text-align:center;'>
	<br/><br/>
	<h1 style='margin:2%; font-size:36px;'>Product List</h1>
	<form type='submit' method='GET' action='productedit.php'>
		<button name='add' class='item_btn_aisle' style='font-size:32px; padding:1%; padding-left:3%; padding-right:3%; margin:1%;' value='' />Add a Product</button>
	</form>
</div>
<tr> 
	<div class='item_list_head'>
		<div class='item_list_item_img'>
			<h2>Product ID</h2>
		</div>

        <div class='item_list_item_img'>
            <h2>Product Image</h2>
        </div>

        <div class='item_list_item'>
            <h2>Product Title</h2>
        </div>

        <div class='item_list_item'>
            <h2>Brief Description</h2>
        </div>

        <div class='item_list_item'>
            <h2>Price</h2>
		</div>

		<div class='item_list_item'>
            <h2>Limit</h2>
		</div>
		
		<div class='item_list_item'>
            <h2>Number of Options</h2>
		</div>

        <div class='item_list_item'>
            <h2>Product Category</h2>
		</div>
		
		<div class='item_list_item'>
            <h2>Edit/Delete</h2>
        </div>
    </div>
</tr>
<hr style='margin:2%; margin-top:0%;'/><br/>";

$noProducts = 
"<div style='color:dodgerblue; text-align:center; font-size:28px;'>
    <br><br><br>Looks like there are no items here... :(
    <br><br> Check another category!<br><br>
</div>";

$categories = [];
$products = [];

function loadItems() {
    global $doc, $category, $bvgqty, $product, $item, $options, $minidesc;
    global $name, $description, $price, $image, $category, $id;
	$docProducts = $doc->getElementsByTagName("product");
	
    foreach($docProducts as $i) {
		$item = $i->getElementsByTagName("item")->item(0)->nodeValue;
		$options[$bvgqty] = $i->getElementsByTagName("options")->item(0)->nodeValue;
		$minidesc = $i->getElementsByTagName("minidesc")->item(0)->nodeValue;
		$k = $i->getElementsByTagName("t1")->item(0);
		$id[$bvgqty] = $k->getElementsByTagName("id")->item(0)->nodeValue;
		$name[$bvgqty] = $k->getElementsByTagName("name")->item(0)->nodeValue;
		$description[$bvgqty] = $k->getElementsByTagName("description")->item(0)->nodeValue;
		$price[$bvgqty] = $k->getElementsByTagName("price")->item(0)->nodeValue;
		$limit[$bvgqty] = $k->getElementsByTagName("limit")->item(0)->nodeValue;
		$image[$bvgqty] = $k->getElementsByTagName("image")->item(0)->nodeValue;
		$category[$bvgqty] = $i->getElementsByTagName("category")->item(0)->nodeValue;
		$product[$bvgqty] =
		"<tr>
			<div class='item_list'>
				<div class='item_list_item'>$id[$bvgqty]</div>

				<div class='item_list_item_img'>
					<img src='../../assets/Images/$image[$bvgqty]' style='width:100px; height:100px;' alt='$item' value='$item' /> 
				</div>

				<div class='item_list_item' style='font-weight:bold;'>
					$name[$bvgqty]
				</div>
			
				<div class='item_list_item'>$minidesc</div>
				<div class='item_list_item' style='color:seagreen;'>$$price[$bvgqty]</div>
				<div class='item_list_item' style='color:seagreen;'>$limit[$bvgqty]</div>
				<div class='item_list_item' style='font-weight:bold;'>$options[$bvgqty]</div>
				<div class='item_list_item' style='font-weight:bold;'>$category[$bvgqty]</div>
				<div class='item_list_item'>
					<form style='margin:auto;' type='submit' method='GET' action='productedit.php'>
						<button name='item' class='item_btn_aisle' value='$item' />Edit</button>
						<button name='item' class='item_btn_aisle' value='delete$item' />Delete</button>
					</form>
				</div>
			</div>
		</tr>";
		$bvgqty++;
    }
}

loadItems();


?>


<html>
<head>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/backend_products.css">
    <title id="productTitle">Product List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="../scripts/Util.js"></script>
    <script type="text/javascript" src="../scripts/Cart.js"></script>
    <script type="text/javascript" src="../scripts/Item.js"></script>
    <script type="text/javascript" src="../scripts/Sales.js"></script>
    <script type="text/javascript" src="../scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="../scripts/Beverage.js"></script>
    <script type="text/javascript" src="../scripts/main.js"></script>
</head>

<body>
	<?php
    $header = file_get_contents('../common/headerbackend.php');
	echo $header;
    ?>
    <script>
        document.getElementById("helloUser").innerHTML="Hello, <?php echo $_SESSION["currentLogin"][0]; ?>!";
	</script>	
        
		
			<?php
			if (isset($_POST['failed'])) {
				alert("Invalid Item Form!");
			}
			if (sizeof($product) != 0) {
				echo $productsTop;
				foreach ($product as $i) {
					echo $i;
				}
			} else {
				echo $noProducts;
			}
		?>
		<br>
		<br>
		</div>
		
	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
</html>