<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Add or Edit Orders</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
	<body>
		<div id="__top_banner"></div>			
		<div id="menu">
			<ul>
				<li>Add or Edit Orders</li>
			<ul>
		</div>
		        
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
		
		<div id="__footer">
			<ul id="__outer_ul">
				<b><a href="index.php">Back store page. Click here to return to the main home page.</a></b>
				<br>
			<ul>
		</div>
		</html>
