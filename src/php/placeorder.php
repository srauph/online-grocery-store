<?php
session_start();
$doc = new DOMDocument();
$doc->load("../data.xml");

$items = json_decode($_POST["items"], true);
$prices = json_decode($_POST["prices"], true);
$username = $_SESSION["currentLogin"][0];

echo var_dump($items);

    $doc->formatOutput = true;

    $userList = $doc->getElementsByTagName("orders")->item(0);
    $fragment = $doc->createDocumentFragment();

    $fragemntStr = 
    "\t<order>
      <username>" . $username . "</username>";

    foreach ($items as $i) {
        $fragemntStr = $fragemntStr .
        "\n\t\t\t<item>
        <id>" . $i["id"] . "</id>
        <name>" . $i["name"] . "</name>
        <image>" . $i["image"] . "</image>
        <quantity>" . $i["quantity"] . "</quantity>
        <cost>" . $i["cost"] . "</cost>
    \t</item>";
    }

    $fragemntStr = $fragemntStr .
    "\n\t\t\t<price>" . $prices[0] ."</price>
    \t<subtotal>" . $prices[1] ."</subtotal>
    \t<qst>" . $prices[2] ."</qst>
    \t<gst>" . $prices[3] ."</gst>
    </order>\n  ";

    echo $fragemntStr;

    $fragment->appendXML($fragemntStr);

    $userList->appendChild($fragment);
    $doc->save("../data.xml");

    header("Location: ../cart.php");
?>