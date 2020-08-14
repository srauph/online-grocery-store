<html>
<head>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/aisle_beverage.css">
    <title id="productTitle">Sprite (355mL Can)</title>
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
		        
		<div style="text-align:center">
			<form method="POST">	
				<ul> 
					<input type="submit" name="__tag_search_btn" value="Save" style="width:120; height: 60" formaction="orderlist.php">
					<br>
					<br>
					<table style="width:100%">
						<tr>
							<th style="text-align:center"><h2>Items</h2></th>
							<th style="text-align:center"><h2>Quantity</h2></th>
							<th style="text-align:center"><h2>Order cost</h2></th>
							<th style="text-align:center"><h2>Placed by (username)</h2></th>
							<th style="text-align:center"><h2>Order date (YYYY/MM/DD)</h2></th>
							<th style="text-align:center"><h2>Delete order?</h2></th>
						</tr>
						<tr>
						<td style="text-align:center; height:80px"><input type="text" placeholder="Cheetos" formaction=""><br><input type="text" placeholder="Frozen Fries" formaction=""><br><input type="text" placeholder="New item" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="1" formaction=""><br><input type="text" placeholder="1" formaction=""><br><input type="text" placeholder="New quantity" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="25.26" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="Username1" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="2020-01-01" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:80px"><input type="text" placeholder="Cheetos" formaction=""><br><input type="text" placeholder="Frozen Fries" formaction=""><br><input type="text" placeholder="New item" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="2" formaction=""><br><input type="text" placeholder="2" formaction=""><br><input type="text" placeholder="New quantity" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="50.52" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="Username2" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="2020-02-02" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:80px"><input type="text" placeholder="NEW ORDER: Item" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="NEW ORDER: Quantity" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="NEW ORDER: Cost" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="NEW ORDER: Username" formaction=""></td>
							<td style="text-align:center; height:80px"><input type="text" placeholder="NEW ORDER: Order date" formaction=""></td>
						</tr>
					</table>
				</ul>
			</form>
		</div>		

		<br />
		<br />
		</div>
		
	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
</html>
