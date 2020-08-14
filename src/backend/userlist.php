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
					<input type="submit" name="__tag_search_btn" value="Add a user" style="width:120; height: 60" formaction="useredit.php">
					<input type="submit" name="__tag_search_btn" value="Edit users" style="width:120; height: 60" formaction="useredit.php">
					<br>
					<br>
					<table style="width:100%">
						<tr>
							<th style="text-align:center; height:40px"><h2>Username</h2></th>
							<th style="text-align:center; height:40px"><h2>E-mail</h2></th>
							<th style="text-align:center; height:40px"><h2>Date joined (YYYY/MM/DD)</h2></th>
							<th style="text-align:center; height:40px"><h2>Delete user?</h2></th>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">admin</td>
							<td style="text-align:center; height:40px">admin@gmail.com</td>
							<td style="text-align:center; height:40px">2020-01-01</td>
							<td style="text-align:center; height:40px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">Username1</td>
							<td style="text-align:center; height:40px">Email1@gmail.com</td>
							<td style="text-align:center; height:40px">2020-01-01</td>
							<td style="text-align:center; height:40px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">Username2</td>
							<td style="text-align:center; height:40px">Email2@gmail.com</td>
							<td style="text-align:center; height:40px">2020-02-02</td>
							<td style="text-align:center; height:40px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
							
						</tr>
					</table>
				</ul>
			</form>
		</div>			
		<br>
		<br>
		</div>
		
	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
</html>