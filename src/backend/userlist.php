<?php
session_start();
if (!isset($_SESSION["currentLogin"])){
    $_SESSION["currentLogin"] = null;
}

function alert($msg) {
    echo "<script>alert('$msg');</script>";
}

$doc = new DOMDocument();
$doc->load("../data.xml");

$usersTop =
"
<div style='text-align:center;'>
	<br/><br/>
	<h1 style='margin:2%; font-size:36px;'>List of Registered Users</h1>
	<form type='submit' method='GET' action='useredit.php'>
		<button name='add' class='item_btn_aisle' style='font-size:32px; padding:1%; padding-left:3%; padding-right:3%; margin:1%;' value='' />Add a User</button>
	</form>
</div>
<tr> 
	<div class='user_list_head'>
		<div class='item_list_item_img'>
			<h2>Username</h2>
		</div>

		<div class='item_list_item_img'>
			<h2>Password</h2>
		</div>

        <div class='item_list_item_img'>
            <h2>E-mail</h2>
        </div>

        <div class='item_list_item'>
            <h2>Admin?</h2>
        </div>
		
		<div class='item_list_item'>
            <h2>Edit/Delete</h2>
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
    global $doc, $user, $username, $password, $email, $admin, $userqty;
	$docUsers = $doc->getElementsByTagName("user");
	
    foreach($docUsers as $i) {
    	$username[$userqty] = $i->getElementsByTagName("username")->item(0)->nodeValue;
		$password[$userqty] = $i->getElementsByTagName("password")->item(0)->nodeValue;
		$email[$userqty] = $i->getElementsByTagName("email")->item(0)->nodeValue;
		$admin[$userqty] = $i->getElementsByTagName("admin")->item(0)->nodeValue;
		$user[$userqty] =
		"<tr>
			<div class='user_list'>
				<div class='item_list_item' style='font-weight:bold;'>
					$username[$userqty]
				</div>

				<div class='item_list_item' style='font-weight:bold;'>
					$password[$userqty]
				</div>

				<div class='item_list_item' style='font-weight:bold;'>
					$email[$userqty] 
				</div>

				<div class='item_list_item' style='font-weight:bold;'>
					$admin[$userqty]
				</div>
				<div class='item_list_item'>
					<form style='margin:auto;' type='submit' method='GET' action='useredit.php'>
						<button name='user' class='item_btn_aisle' value='$username[$userqty]' />Edit</button>
						<button name='user' class='item_btn_aisle' value='delete$username[$userqty]' />Delete</button>
					</form>
				</div>
			</div>
		</tr>";
		$userqty++;
    }
}

loadUsers();
?>

<html>
<head>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<link rel="stylesheet" type="text/css" href="../css/backend_products.css"/>
    <title id="productTitle">
    	List of Registered Users
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
        
			<?php
			if (isset($_POST['failed'])) {
				alert("Invalid User Registration Form!");
			}

			if (sizeof($user) != 0) {
				echo $usersTop;
				foreach ($user as $i) {
					echo $i;
				}
			}
		?>
		<br>
		<br>
		
	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
</html>