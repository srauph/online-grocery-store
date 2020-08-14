<?php
session_start();
$doc = new DOMDocument();
$doc->load("../data.xml");

$items = json_decode($_POST["items"], true);
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
        "\n\t\t<item>
            <id>" . $i["id"] . "</id>
            <name>" . $i["name"] . "</name>
            <category>" . $i["category"] . "</category>
            <image>" . $i["image"] . "</image>
            <cost>" . $i["cost"] . "</cost>
            <limit>" . $i["limit"] . "</limit>
            <onSale>" . $i["onSale"] . "</onSale>
            <description>" . $i["description"] . "</description>
        </item>";
    }

    $fragemntStr = $fragemntStr .
    "\n\t</order>\n";

    echo $fragemntStr;

    $fragment->appendXML($fragemntStr);

    $userList->appendChild($fragment);
    $doc->save("../data.xml");

    header("Location: ../cart.php");
?>