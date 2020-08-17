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
    <title>
    	Edit a registered user
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
										Save Changes?
									</h2>
								</div>
							</th> 
							<th style="text-align:center; height:40px">
								<input type="submit" name="save" value="Save" class="user_delete_btn" formaction="userlist.php"/>
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
									Password
								</h2>
							</th>
							<th style="text-align:center; height:40px">
								<h2>
									Confirm Password
								</h2>
							</th>
							<th style="text-align:center; height:40px">
								<h2>
									User's Specific Role
								</h2>
							</th>
							<th style="text-align:center; height:40px">
								<h2>
									Delete User?
								</h2>
							</th>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="Admin" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="Admin@gmail.com" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="AdminPassword" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="AdminPassword" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="radio" name="role" value="Admin"/>
								<label for="Admin">
									Admin
								</label>
								<input type="radio" name="role" value="Regular User"/>
								<label for="Regular User">
									Regular User
								</label>
							</td>
							<td style="text-align:center; height:40px">
								<input type="submit" class="user_delete_btn" value="Delete" formaction=""/>
							</td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">
								<input type="text" placeholder="Username1" class="inputs_table" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" placeholder="Email1@gmail.com" class="inputs_table" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="Username1Password" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="Username1Password" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="radio" name="role" value="Admin"/>
								<label for="Admin">
									Admin
								</label>
								<input type="radio" name="role" value="Regular User"/>
								<label for="Regular User">
									Regular User
								</label>
							</td>
							<td style="text-align:center; height:40px">
								<input type="submit" class="user_delete_btn" value="Delete" formaction=""/>
							</td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">
								<input type="text" placeholder="Username2" class="inputs_table" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" placeholder="Email2@gmail.com" class="inputs_table" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="Username2Password" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="text" class="inputs_table" placeholder="Username2Password" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="radio" name="role" value="Admin"/>
								<label for="Admin">
									Admin
								</label>
								<input type="radio" name="role" value="Regular User"/>
								<label for="Regular User">
									Regular User
								</label>
							</td>
							<td style="text-align:center; height:40px">
								<input type="submit" class="user_delete_btn" value="Delete" formaction=""/>
							</td>
						</tr>
						<tr>
							<td style="text-align:center; height:40px">
								<input type="text" name="username" placeholder="NEW USER: Username" class="inputs_table" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="email" name="email" placeholder="NEW USER: Email" class="inputs_table" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="password" name="password" class="inputs_table" placeholder="NEW USER: Password" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="password" name="confirm_password" class="inputs_table" placeholder="NEW USER: Password" formaction=""/>
							</td>
							<td style="text-align:center; height:40px">
								<input type="radio" name="role" value="Admin"/>
								<label for="Admin">
									Admin
								</label>
								<input type="radio" name="role" value="Regular User"/>
								<label for="Regular User">
									Regular User
								</label>
							</td>
						</tr>
					</table>
				</ul>
			</form>
		</div>		
		<br/>
		<br/>
		</div>
	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
    <?php
	include "../php/Debug.php";

    if ($_SESSION["usernameExists"] == true) {
        // there is already a user with the same username
        echo '<script type="text/javascript">document.getElementById("username_error").style.display = "block";</script>';
    } else if ($_SESSION["emailExists"] == true) {
        // there is already a user with the same email
        echo '<script type="text/javascript">document.getElementById("email_error").style.display = "block";</script>';
    } else if ($_SESSION["badPass"] == true) {
        // Invalid password
        echo '<script type="text/javascript">document.getElementById("pass_error").style.display = "block";</script>';
    } else if ($_SESSION["registrationSuccessful"] == true) {
        // Registration successful
        echo '<script type="text/javascript">document.getElementById("user_registered").style.display = "block";</script>';
    }

    // Reset these variables
    $_SESSION["usernameExists"] = false;
    $_SESSION["emailExists"] = false;
    $_SESSION["badPass"] = false;
    $_SESSION["registrationSuccessful"] = false;
	?>
</html>