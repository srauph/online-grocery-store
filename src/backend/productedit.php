<?php
session_start();
if (!isset($_SESSION["currentLogin"]) || $_SESSION["currentLogin"][2] !== "true"){
    header("Location: ../index.php");
    exit();
}

if (isset($_GET['item'])) {
	if (substr($_GET['item'],0,6) == "delete") {
		$deleteItem =
		"<form name='toDelete' id='toDelete' method='POST' action='../php/editProduct.php' type='submit'><input id=toDelete name='toDelete' value='".substr($_GET['item'],6)."'/></form>
		<script>document.getElementById(\"toDelete\").submit();</script>";
		echo $deleteItem;
	}
}

$doc = new DOMDocument();
$doc->load("../data.xml");

$productsTop =
"
<div style='text-align:center;'>
	<br/><br/>
	<h1 style='margin:2%; font-size:36px;'>Edit a Product</h1>
		<button class='item_btn_aisle' style='font-size:32px; padding:1%; padding-left:3%; padding-right:3%; margin:1%;' value='' />Save Changes</button>
</div>
<tr> 
	<div class='edit_item_head'>

		<div class='edit_item'>
			<h2>Type #</h2>
		</div>

		<div class='edit_item'>
			<h2>ID</h2>
		</div>
	
		<div class='edit_item'>
			<h2>Item Name (Lowercase)</h2>
		</div>

        <div class='edit_item'>
            <h2>Product Image</h2>
        </div>

        <div class='edit_item'>
            <h2>Product Title</h2>
        </div>

        <div class='edit_item'>
            <h2>Brief Description</h2>
        </div>

        <div class='edit_item'>
            <h2>Full Description</h2>
		</div>

		<div class='edit_item'>
            <h2>Price</h2>
		</div>

		<div class='edit_item'>
            <h2>Limit</h2>
		</div>

        <div class='edit_item'>
            <h2>Product Category</h2>
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
	global $olditemname, $options;
	if (isset($_GET['add'])) {
		$options = 0;
		$olditemname = 'oldItem';
		return;
	} else {
		$olditemname = $_GET['item'];
	}
    global $doc, $category, $bvgqty, $products, $item, $minidesc;
    global $name, $description, $price, $image, $category, $id, $limit;
	$docProducts = $doc->getElementsByTagName("product");
	
    foreach($docProducts as $i) {
		$item = $i->getElementsByTagName("item")->item(0)->nodeValue;
		$options = $i->getElementsByTagName("options")->item(0)->nodeValue;
		$minidesc = $i->getElementsByTagName("minidesc")->item(0)->nodeValue;
		if ($item == $_GET['item']) {
			for ($j=1; $j<=$options; $j++) {
				$k = $i->getElementsByTagName("t".$j)->item(0);
				$id[$bvgqty] = $k->getElementsByTagName("id")->item(0)->nodeValue;
				$name[$bvgqty] = $k->getElementsByTagName("name")->item(0)->nodeValue;
				$description[$bvgqty] = $k->getElementsByTagName("description")->item(0)->nodeValue;
				$price[$bvgqty] = $k->getElementsByTagName("price")->item(0)->nodeValue;
				$image[$bvgqty] = $k->getElementsByTagName("image")->item(0)->nodeValue;
				$category[$bvgqty] = $i->getElementsByTagName("category")->item(0)->nodeValue;
				$limit[$bvgqty] = $k->getElementsByTagName("limit")->item(0)->nodeValue;

				if ($j == 1) {
					$products[0] =
					"<tr>
						<div class='edit_item_list'>

							<div class='edit_item' style='font-weight:bold;'>
								Type #$j
							</div>

							<div class='edit_item'>
								<input name='id$j' placeholder='Item (Lowercase)' type='text' style='width:95%' value=\"$id[$bvgqty]\" />
							</div>
							
							<div class='edit_item'>
								<input name='item$j' placeholder='Item (Lowercase)' type='text' style='width:95%' value=\"$item\" />
							</div>

							<div class='edit_item'>
								<input name='image$j' placeholder='Image' type='text' style='width:95%' value=\"$image[$bvgqty]\" />
							</div>

							<div class='edit_item'>
								<input name='title$j' placeholder='Title' type='text' style='width:95%' value=\"$name[$bvgqty]\" />
							</div>

							<div class='edit_item'>
								<input name='minidesc$j' placeholder='Brief Description' type='text' style='width:95%' value=\"$minidesc\" />
							</div>

							<div class='edit_item'>
								<input name='desc$j' placeholder='Full Description' type='text' style='width:95%' value=\"$description[$bvgqty]\" />
							</div>

							<div class='edit_item' style='color:seagreen;'>
								<input name='price$j' placeholder='Price' type='text' style='width:95%' value=\"$price[$bvgqty]\" />
							</div>

							<div class='edit_item' style='color:grey;'>
								<input name='limit$j' placeholder='Limit' type='text' style='width:95%' value=\"$limit[$bvgqty]\" />
							</div>

							<div class='edit_item' >
								<input name='cat$j' placeholder='Category' type='text' style='width:95%' value=\"$category[$bvgqty]\" />
							</div>
							
						</div>
					</tr>";
				} else {
					$products[$j-1] =
					"<tr>
						<div class='edit_item_list'>

							<div class='edit_item' style='font-weight:bold;'>
								Type #$j
							</div>

							<div class='edit_item'>
								<input name='id$j' placeholder='Item (Lowercase)' type='text' style='width:95%' value=\"$id[$bvgqty]\" />
							</div>
							
							<div class='edit_item' style='color:grey;'>
								(Item is same as 1st)
							</div>
	
							<div class='edit_item'>
								<input name='image$j' placeholder='Image' type='text' style='width:95%' value=\"$image[$bvgqty]\" />
							</div>
	
							<div class='edit_item'>
								<input name='title$j' placeholder='Title' type='text' style='width:95%' value=\"$name[$bvgqty]\" />
							</div>
	
							<div class='edit_item' style='color:grey;'>
								(Brief description is same as 1st)
							</div>

							<div class='edit_item'>
								<input name='desc$j' placeholder='Full Description' type='text' style='width:95%' value=\"$description[$bvgqty]\" />
							</div>

							<div class='edit_item' style='color:seagreen;'>
								<input name='price$j' placeholder='Price' type='text' style='width:95%' value=\"$price[$bvgqty]\" />
							</div>

							<div class='edit_item' style='color:grey;'>
								<input name='limit$j' placeholder='Limit' type='text' style='width:95%' value=\"$limit[$bvgqty]\" />
							</div>

							<div class='edit_item' style='color:grey;'>
								(Category is same as 1st)
							</div>
							
						</div>
					</tr>";
				}
			}
		break;
		}
		$bvgqty++;
    }
}



loadItems();

$optionsp1 = ($options+1);
if (!isset($_GET['add'])) {
	$products[$optionsp1] =
	"<tr>
		<div class='edit_item_list'>

			<div class='edit_item' style='font-weight:bold;'>
				(Add a type)
			</div>

			<div class='edit_item'>
				<input name='id$optionsp1' placeholder='ID' type='text' style='width:95%' value=\"\" />
			</div>
			
			<div class='edit_item' style='color:grey;'>
				(Item is same as 1st)
			</div>

			<div class='edit_item'>
				<input name='image$optionsp1' placeholder='Image' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item'>
				<input name='title$optionsp1' placeholder='Title' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:grey;'>
				(Brief description is same as 1st)
			</div>

			<div class='edit_item'>
				<input name='desc$optionsp1' placeholder='Full Description' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:seagreen;'>
				<input name='price$optionsp1' placeholder='Price' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:grey;'>
				<input name='limit$optionsp1' placeholder='Limit' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:grey;'>
				(Category is same as 1st)
			</div>

			<input name='options' type='hidden' value='$optionsp1' />
			<input name='olditemname' type='hidden' value='".$olditemname."' />
			
		</div>
	</tr>";
} else {
	$products[0] =
	"<tr>
		<div class='edit_item_list'>

			<div class='edit_item' style='font-weight:bold;'>
				(Type #1)
			</div>

			<div class='edit_item'>
				<input name='id$optionsp1' placeholder='ID' type='text' style='width:95%' value=\"\" />
			</div>
			
			<div class='edit_item' style='color:grey;'>
				<input name='item$optionsp1' placeholder='Item (Lowercase)' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item'>
				<input name='image$optionsp1' placeholder='Image' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item'>
				<input name='title$optionsp1' placeholder='Title' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:grey;'>
				<input name='minidesc$optionsp1' placeholder='Brief Description' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item'>
				<input name='desc$optionsp1' placeholder='Full Description' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:seagreen;'>
				<input name='price$optionsp1' placeholder='Price' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:grey;'>
				<input name='limit$optionsp1' placeholder='Limit' type='text' style='width:95%' value=\"\" />
			</div>

			<div class='edit_item' style='color:grey;'>
				<input name='cat$optionsp1' placeholder='Category' type='text' style='width:95%' value=\"\" />
			</div>

			<input name='options' type='hidden' value='$optionsp1' />
			<input name='olditemname' type='hidden' value='olditemname' />
			<input name='addnew' type='hidden' />
		</div>
	</tr>";
}


?>


<html>
<head>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/backend_products.css">
    <title id="productTitle">Edit a Product</title>
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

	<form type='submit' method='POST' action='../php/editProduct.php'>
			<?php
			echo $productsTop;
			foreach ($products as $i) {
				echo $i;
			}
			?>
	</form>
	<br/><br/>

	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
</html>