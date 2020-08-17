Processing...<br/><br/>
<?php
session_start();


if (isset($_POST['toDelete'])) {
    $xml = simplexml_load_file("../data.xml");
    foreach ($xml->users->user as $i) {
        if ($i->username == $_POST['toDelete']) {
            $currentuser = $i;
        }
    }
    unset($currentuser[0]);

    $doc = new DOMDocument(1.0);
    $doc->preserveWhiteSpace = false;
    $doc->formatOutput = true;
    $doc->loadXML($xml->asXML());
    $doc->save("../data.xml");

    header("Location: ../backend/userlist.php");
    exit();
}

$password = $_POST['password'];

if (isset($_POST['addnew'])) {
    $new = true;
} else {
    $new = false;
}

if ($_POST['username1'] == "" or $_POST['email1'] == "" or $_POST['admin1'] == "") {

    $failed =
    "<form name='failed' id='failed' method='POST' action='../backend/userlist.php' type='submit'><input id=failed name='failed' value='failed'/></form>
    <script>document.getElementById(\"failed\").submit();</script>";
    echo $failed;
    exit();
}

$xml = simplexml_load_file("../data.xml");

if ($new) {
    $xml->users->addChild('user');
    foreach ($xml->users->user as $i) {
        if ($i->username == "") {
            $currentuser = $i;
        }
    }
    
    $currentuser->addChild('username', $_POST['username'.$user]);
    $currentuser->addChild('password', $_POST['password'.$user]);
    $currentuser->addChild('email', $_POST['email'.$user]);
    $currentuser->addChild('admin', $_POST['admin'.$user]);
} 

else {

    foreach ($xml->users->user as $i) {
        if (checkUsername($i->username)) {
            $currentuser = $i;
        }
    }
    echo $currentuser;

    $currentuser->addChild('username', $_POST['username'.$user]);
    $currentuser->addChild('password', $_POST['password'.$user]);
    $currentuser->$tt->addChild('email', $_POST['email'.$user]);
    $currentuser->$tt->addChild('admin', $_POST['admin'.$user]);
    }

function checkUsername($usernameToCheck) {
    if ($usernameToCheck == $_POST['oldusername']) {
        return true;
    } else {
        return false;
    }
}

$doc = new DOMDocument(1.0);
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;
$doc->loadXML($xml->asXML());
$doc->save("../data.xml");

header("Location: ../backend/userlist.php");
?>