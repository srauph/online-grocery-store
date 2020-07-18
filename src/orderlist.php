<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Orders List</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
	<body>
		<div id="__top_banner"></div>			
		<div id="menu">
			<ul>
				<li>Orders list</li>
			<ul>
        </div>		
        
		<div style="text-align:center">
			<form method="POST">	
				<ul> 
					<input type="submit" name="__tag_search_btn" value="Add an order" style="width:120; height: 60" formaction="orderedit.php">
					<input type="submit" name="__tag_search_btn" value="Edit orders" style="width:120; height: 60" formaction="orderedit.php">
					<br>
					<br>
					<table style="width:100%">
						<tr>
							<th style="text-align:center; height:80px"><h2>Items</h2></th>
							<th style="text-align:center; height:80px"><h2>Quantity</h2></th>
							<th style="text-align:center; height:80px"><h2>Order cost</h2></th>
							<th style="text-align:center; height:80px"><h2>Placed by (username)</h2></th>
							<th style="text-align:center; height:80px"><h2>Order date (YYYY/MM/DD)</h2></th>
							<th style="text-align:center; height:80px"><h2>Delete order?</h2></th>
						</tr>
						<tr>
							<td style="text-align:center; height:80px">Cheetos<br>Frozen Fries</td>
							<td style="text-align:center; height:80px">1<br>1</td>
							<td style="text-align:center; height:80px">25.26</td>
							<td style="text-align:center; height:80px">Username1</td>
							<td style="text-align:center; height:80px">2020-01-01</td>
							<td style="text-align:center; height:80px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:80px">Cheetos<br>Frozen Fries<br></td>
							<td style="text-align:center; height:80px">2<br>2</td>
							<td style="text-align:center; height:80px">50.52</td>
							<td style="text-align:center; height:80px">Username2</td>
							<td style="text-align:center; height:80px">2020-02-02</td>
							<td style="text-align:center; height:80px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
					</table>
				</ul>
			</form>
		</div>	
		<br>
		<br>
		</div>
		
		<div id="__footer">
			<ul id="__outer_ul">
				<b><a href="index.php">Back store page. Click here to return to the main home page.</a></b>
				<br>
			<ul>
		</div>
		</html>