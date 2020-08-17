<?php
session_start();
if (!isset($_SESSION["currentLogin"]) || $_SESSION["currentLogin"][2] !== "true"){
    header("Location: ../index.php");
    exit();
}

function alert($msg) {
    echo "<script>alert('$msg');</script>";
}

$productsTop =
"
<div style='text-align:center;'>
	<br/><br/>
	<h1 style='margin:2%; font-size:36px;'>Order List</h1>
	<form type='submit' method='GET' action='orderedit.php'>
		<button name='add' class='item_btn_aisle' style='font-size:32px; padding:1%; padding-left:3%; padding-right:3%; margin:1%;' value='' />Add an Order</button>
	</form>
</div>
<tr> 
	<div class='item_list_head'>
		<div class='item_list_item_img'>
			<h2>Purchaser's Username</h2>
		</div>

        <div class='item_list_item_img'>
            <h2>Order Details</h2>
        </div>

        <div class='item_list_item'>
            <h2>Order subtotal</h2>
        </div>

        <div class='item_list_item'>
            <h2>Order GST</h2>
        </div>

        <div class='item_list_item'>
            <h2>Order QST</h2>
		</div>

		<div class='item_list_item'>
            <h2>Order Total</h2>
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

$xml = simplexml_load_file("../data.xml");
$orderlist = [];

function loadItems() {
    global $xml, $orderlist, $user, $subtotal, $qst, $gst, $price;
	global $id, $name, $image, $qty, $cost;
	
	$c = 0;
    foreach($xml->orders->order as $i) {
		$user[$c] = $i->username;
		$subtotal[$c] = $i->subtotal;
		$qst[$c] = $i->qst;
		$gst[$c] = $i->gst;
		$price[$c] = $i->price;

		$d = 0;
		foreach($i->item as $j) {
			$id[$c][$d] = $j->id;
			$name[$c][$d] = $j->name;
			$image[$c][$d] = $j->image;
			$qty[$c][$d] = $j->quantity;
			$cost[$c][$d] = $j->cost;

			$orderlist2[$d] = 
			"<div class='item_list_item_img'>
				<div style='grid-column:2; grid-row:1;'>".$id[$c][$d]."</div>
				<div style='grid-column:2; grid-row:2;'>".$name[$c][$d]."</div>
				<div style='grid-column:1; grid-row:span 4;'><img src='../../assets/Images/".$image[$c][$d]."' style='width:100px; height:100px;' alt='".$name[$c][$d]."' /></div>
				<div style='grid-column:2; grid-row:3;'>".$qty[$c][$d]."</div>
				<div style='grid-column:2; grid-row:4;'>".$cost[$c][$d]."</div>
			</div>";
			$d++;
		}

		$orderlist[$c] = "";

		$orderlist[$c] .= 
		"<tr>
			<div class='item_list'>
				<div class='item_list_item'>$user[$c]</div>
					<div class='item_list_item'>";

		foreach ($orderlist2 as $j) {
			$orderlist[$c] .= $j . "<br/>";
		}
		$orderlist[$c] .=

					"</div>
				<div class='item_list_item' style='color:seagreen;'>$$subtotal[$c]</div>
				<div class='item_list_item' style='color:seagreen;'>$$qst[$c]</div>
				<div class='item_list_item' style='color:seagreen;'>$$gst[$c]</div>
				<div class='item_list_item' style='color:seagreen;'>$$price[$c]</div>

				<div class='item_list_item'>
					<form style='margin:auto;' type='submit' method='GET' action='orderedit.php'>
						<button name='item' class='item_btn_aisle' value='$user[$c]' />Edit</button>
						<button name='item' class='item_btn_aisle' value='delete$user[$c]' />Delete</button>
					</form>
				</div>
			</div>
		</tr>";
		$c++;
    }
}

loadItems();

?>


<html>
<head>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/backend_orders.css">
    <title id="productTitle">Order List</title>
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
			if (sizeof($orderlist) != 0) {
				echo $productsTop;
				foreach ($orderlist as $i) {
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