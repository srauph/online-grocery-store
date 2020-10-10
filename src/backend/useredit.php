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
			<h2>Username</h2>
		</div>

        <div class='edit_item'>
            <h2>Password</h2>
        </div>

        <div class='edit_item'>
            <h2>E-mail</h2>
        </div>

        <div class='edit_item'>
            <h2>Admin?</h2>
        </div>
    </div>
</tr>
<hr style='margin:2%; margin-top:0%;'/><br/>";

$noProducts = 
"<div style='color:dodgerblue; text-align:center; font-size:28px;'>
    <br><br><br>Looks like there are no users here... :(
</div>";

$categories = [];
$products = [];

global $olditemname, $options;

function loadItems() {

	if (isset($_GET['add'])) {
            echo "<tr>
            <div class='edit_item_list'>
                <div class='edit_item'>
                    <input name='user' placeholder='Username' type='text' style='width:95%' value=\"\" />
                </div>
                <div class='edit_item'>
				<input name='password' placeholder='Password' type='password' style='width:95%' value=\"\" />
				</div>
                <div class='edit_item'>
                    <input name='email' placeholder='Email' type='email' style='width:95%' value=\"\" />
                </div>

                <div class='edit_item'>
                    <input name='admin' placeholder='True or false' type='text' style='width:95%' value=\"\" />
                </div>				
            </div>
        </tr>"; 
		return;
	} else {
		$olditemname = $_GET['user'];
	}
    global $doc, $category, $bvgqty, $products, $username, $minidesc;
    global $name, $description, $price, $image, $category, $id, $limit;
	$docProducts = $doc->getElementsByTagName("user");
    
    $j = 0;
    foreach($docProducts as $i) {
		$username = $i->getElementsByTagName("username")->item(0)->nodeValue;
		$password = $i->getElementsByTagName("password")->item(0)->nodeValue;
        $email = $i->getElementsByTagName("email")->item(0)->nodeValue;
        $admin = $i->getElementsByTagName("admin")->item(0)->nodeValue;
        
        echo "<tr>
					<div class='edit_item_list'>

							<div class='edit_item'>
								<input name='user$j' placeholder='Username' type='text' style='width:95%' value=\"$username\" />
                            </div>
                            <div class='edit_item'>
								<input name='user$j' placeholder='Password' type='password' style='width:95%' value=\"$password\" />
							</div>
							<div class='edit_item'>
								<input name='email$j' placeholder='Email' type='email' style='width:95%' value=\"$email\" />
							</div>
	
							<div class='edit_item'>
								<input name='admin$j' placeholder='True or false' type='text' style='width:95%' value=\"$admin\" />
							</div>				
						</div>
                    </tr>";                    
                    $j++;
		}
}

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
    document.getElementById("helloUser").innerHTML = "Hello, <?php echo $_SESSION["
    currentLogin "][0]; ?>!";
    </script>

    <form type='submit' method='POST' action='../php/editProduct.php'>
        <?php
			echo $productsTop;           

            loadItems();
			?>
    </form>
    <br /><br />

    <?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>

</html>