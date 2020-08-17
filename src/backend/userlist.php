<?php
session_start();
if (!isset($_SESSION["currentLogin"]))
{
    $_SESSION["currentLogin"] = null;
}

$doc = new DOMDocument();
$doc->load("../data.xml");
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../css/backend_users.css"/>
    <title id="productTitle">
    	List of registered users
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../scripts/Util.js">
    	
    </script>
    <script type="text/javascript" src="../scripts/Cart.js">
    	
    </script>
    <script type="text/javascript" src="../scripts/Item.js">
    	
    </script>
    <script type="text/javascript" src="../scripts/Sales.js">
    	
    </script>
    <script type="text/javascript" src="../scripts/AbstractComponent.js">
    	
    </script>
    <script type="text/javascript" src="../scripts/Beverage.js">
    	
    </script>
    <script type="text/javascript" src="../scripts/main.js">
    	
    </script>
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
			<form method="POST" action="php/addUserBackend.php">	
				<ul>
					<table style="margin-left: auto; margin-right: auto">
						<tr>
							<th style="text-align:center; margin: auto; display: block">
								<div>
									<h2>
										User Addition:
									</h2>
								</div>
							</th> 
							<th style="text-align:center; height:40px">
								<input type="submit" value="Add a User" class="user_delete_btn" formaction="useredit.php"/>
							</th>
						</tr>
					</table>
					<br>
					<br>
					<table style="width:100%">
						<tr>
							<th style="text-align:center; height:40px">
								<h2>
									Username
								</h2>
							</th>
							<th style="text-align:center; height:40px">
								<h2>
									E-mail
								</h2>
							</th>
							<th style="text-align:center; height:40px">
								<h2>
									User's Specific Role
								</h2>
							</th>
							<th style="text-align:center; height:40px">
								<h2>
									Edit User?
								</h2>
							</th>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">
								Admin
							</td>
							<td style="text-align:center; height:40px">
								admin@gmail.com
							</td>
							<td style="text-align:center; height:40px">
								<div>
									<input type="radio" name="role" value="Admin"/>
									<label for="Admin">
										Admin
									</label>
									<input type="radio" name="role" value="Regular User"/>
									<label for="Regular User">
										Regular User
									</label>
								</div>
							</td>
							<td style="text-align:center; height:40px">
								<input type="submit" class="user_delete_btn" value="Edit" formaction="useredit.php"/>
							</td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">
								Username1
							</td>
							<td style="text-align:center; height:40px">
								Email1@gmail.com
							</td>
							<td style="text-align:center; height:40px">
								<div>
									<input type="radio" name="role" value="Admin"/>
									<label for="Admin">
										Admin
									</label>
									<input type="radio" name="role" value="Regular User"/>
									<label for="Regular User">
										Regular User
									</label>
								</div>
							</td>
							<td style="text-align:center; height:40px">
								<input type="submit" class="user_delete_btn" value="Edit" formaction="useredit.php"/>
							</td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">
								Username2
							</td>
							<td style="text-align:center; height:40px">
								Email2@gmail.com
							</td>
							<td style="text-align:center; height:40px">
								<div>
									<input type="radio" name="role" value="Admin"/>
									<label for="Admin">
										Admin
									</label>
									<input type="radio" name="role" value="Regular User"/>
									<label for="Regular User">
										Regular User
									</label>
								</div>
							</td>
							<td style="text-align:center; height:40px">
								<input type="submit" class="user_delete_btn" value="Edit" formaction="useredit.php"/>
							</td>
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