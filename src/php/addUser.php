Processing...<br/><br/>
<?php

session_start();
$doc = new DOMDocument();
$doc->load("../data.xml");

$users = $doc->getElementsByTagName("user");
$usernames = [];
$passwords = [];
$emails = [];
$admins = [];

foreach($users as $user) {
    array_push($usernames, $user->getElementsByTagName("username")->item(0)->nodeValue);
    array_push($passwords, $user->getElementsByTagName("password")->item(0)->nodeValue);
    array_push($emails, $user->getElementsByTagName("email")->item(0)->nodeValue);
    array_push($admins, $user->getElementsByTagName("admin")->item(0)->nodeValue);
}

if (isset($_POST['register'])) {
    $newUsername = $_POST['username'];
    $newPassword = $_POST['password'];
    $newCPassword = $_POST['confirm_password'];
    $newEmail = $_POST['email'];

    // echo var_dump($newUsername) . "<br>";
    // echo var_dump($newPassword) . "<br>";
    // echo var_dump($newCPassword) . "<br>";
    // echo var_dump($newEmail) . "<br>";

    // Go back if the user/pass are empty
    if ($newUsername == "" or $newPassword == "") {
        header("Location: ../register.php");
        exit();
    }

    // Go back if the user/email/pass are invalid
    // TODO: implement invalid check
    if ($newUsername == " " or $newPassword == " ") {
        $_SESSION["badRegisterForm"] = true;
        header("Location: ../register.php");
        exit();
    }

    // Go back if username already exists
    if (in_array($newUsername, $usernames)) {
        $_SESSION["userExists"] = true;
        header("Location: ../register.php");
        exit();
    } else {
        $_SESSION["userExists"] = false;
    }

    // Go back if password already exists
    if ($newPassword != $newCPassword) {
        $_SESSION["badPass"] = true;
        header("Location: ../register.php");
        exit();
    } else {
        $_SESSION["badPass"] = false;
    }

    // Go back if email already exists
    if (in_array($newEmail, $emails)) {
        $_SESSION["emailExists"] = true;
        header("Location: ../register.php");
        exit();
    } else {
        $_SESSION["emailExists"] = false;
    }

    $doc->formatOutput = true;

    $userList = $doc->getElementsByTagName("users")->item(0);
    $fragment = $doc->createDocumentFragment();

    $fragment->appendXML(
    "\t<user>
    \t<username>$newUsername</username>
    \t<password>$newPassword</password>
    \t<email>$newEmail</email>
    \t<admin>false</admin>
    </user>\n");

    $userList->appendChild($fragment);
    $doc->save("../data.xml");

    $_SESSION["registrationSuccessful"] = true;
    header("Location: ../register.php");
    
} else {
    header("Location: ../register.php");
}
?>