<?php
session_start();
$doc = new DOMDocument();
$doc->load("../data.xml");

$docUsers = $doc->getElementsByTagName("user");

$users = [];

foreach($docUsers as $user) {
    $username = $user->getElementsByTagName("username")->item(0)->nodeValue;
    $password = $user->getElementsByTagName("password")->item(0)->nodeValue;
    $admin = $user->getElementsByTagName("admin")->item(0)->nodeValue;
    array_push($users,[$username,$password,$admin]);
}

if (isset($_POST['login'])) {
    $loginUsername = $_POST["username"];
    $loginPassword = $_POST["password"];

    // echo var_dump($users) . "<br>";

    foreach($users as $user) {
        // echo var_dump($user) . "<br>";
        // echo var_dump($loginUsername) . "<br>";
        // echo var_dump($loginPassword) . "<br>";
        // echo "<br>";
        if ($user[0] == $loginUsername and $user[1] == $loginPassword) {
            if ($user[2] == "true") {
                $_SESSION["currentLogin"] = $user;
                header("Location: ../backend/productlist.php");
                exit();
            } else {
                $_SESSION["currentLogin"] = $user;
                header("Location: ../index.php");
                exit();
            }
        }
    }
    $_SESSION["currentLogin"] = null;
    header("Location: ../login.php");
    exit();
    
} else {
    echo "nothing" . "<br>";
    // header("Location: ../register.php");
}
?>