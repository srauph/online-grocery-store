<?php
session_start();
if (!isset($_SESSION["currentLogin"]))
{
    $_SESSION["currentLogin"] = null;
}

if (isset($_GET['user'])) {
	if (substr($_GET['user'],0,6) == "delete") {
		$deleteUser =
		"<form name='toDelete' id='toDelete' method='POST' action='../php/editUser.php' type='submit'><input id=toDelete name='toDelete' value='".substr($_GET['user'],6)."'/></form>
		<script>document.getElementById(\"toDelete\").submit();</script>";
		echo $deleteUser;
	}
}

$doc = new DOMDocument();
$doc->load("../data.xml");

$usersTop =
"
<div style='text-align:center;'>
	<br/><br/>
	<h1 style='margin:2%; font-size:36px;'>Edit a User</h1>
		<button class='item_btn_aisle' style='font-size:32px; padding:1%; padding-left:3%; padding-right:3%; margin:1%;' value=''/>Save Changes</button>
</div>
<tr> 
	<div class='edit_item_head'>

		<div class='edit_item'>
			<h2>Username</h2>
		</div>
	
		<div class='edit_item'>
			<h2>E-mail</h2>
		</div>

        <div class='edit_item'>
            <h2>Password</h2>
        </div>

        <div class='edit_item'>
            <h2>Confirm Password</h2>
        </div>

        <div class='edit_item'>
            <h2>Admin(Y/N)</h2>
        </div>
    </div>
</tr>
<hr style='margin:2%; margin-top:0%;'/><br/>";

$users = [];
$usernames = [];
$passwords = [];
$emails = [];
$admins = [];

function loadUsers() {
	global $oldusername;
	if (isset($_GET['add'])) {
		$oldusername = 'oldUser';
		return;
	} else {
		$oldusername = $_GET['user'];
	}

    global $doc, $user, $username, $password, $email, $admin, $userqty;
    $docUsers = $doc->getElementsByTagName("user");
	
    foreach($docUsers as $i) {
		$username = $i->getElementsByTagName("username")->item(0)->nodeValue;
		$email = $i->getElementsByTagName("email")->item(0)->nodeValue;
		$password = $i->getElementsByTagName("password")->item(0)->nodeValue;
    }
}
loadUsers();

?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../css/backend_products.css"/>
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

	<form type='submit' method='POST' action='../php/editUser.php'>
			<?php
			echo $usersTop;
			foreach ($users as $i) {
				echo $i;
			}
			?>
	</form>
	<br/><br/>

	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
</body>
</html>