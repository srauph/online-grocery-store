<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
        <title>Add or Edit Users</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
	<body>
		<div id="__top_banner"></div>			
		<div id="menu">
			<ul>
				<li>Add or Edit Users</li>
			<ul>
		</div>
		        
		<div style="text-align:center">
			<form method="POST">	
				<ul> 
					<input type="submit" name="__tag_search_btn" value="Save" style="width:120; height: 60" formaction="userlist.php">
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
							<td style="text-align:center; height:40px"><input type="text" placeholder="admin" formaction=""></td>
							<td style="text-align:center; height:40px"><input type="text" placeholder="admin@gmail.com" formaction=""></td>
							<td style="text-align:center; height:40px">2020-01-01</td>
							<td style="text-align:center; height:40px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px"><input type="text" placeholder="Username1" formaction=""></td>
							<td style="text-align:center; height:40px"><input type="text" placeholder="Email1@gmail.com" formaction=""></td>
							<td style="text-align:center; height:40px">2020-01-01</td>
							<td style="text-align:center; height:40px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px"><input type="text" placeholder="Username2" formaction=""></td>
							<td style="text-align:center; height:40px"><input type="text" placeholder="Email2@gmail.com" formaction=""></td>
							<td style="text-align:center; height:40px">2020-02-02</td>
							<td style="text-align:center; height:40px"><input type="submit" name="__tag_search_btn" value="Delete" formaction=""></td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px"><input type="text" placeholder="NEW USER: Username" formaction=""></td>
							<td style="text-align:center; height:40px"><input type="text" placeholder="NEW USER: Email" formaction=""></td>
							<td style="text-align:center; height:40px"><input type="text" placeholder="NEW USER: Join date" formaction=""></td>
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
