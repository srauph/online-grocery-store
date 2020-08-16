Processing...<br/><br/>
<?php
session_start();
// $doc = new DOMDocument();
// $doc->load("../data.xml");

$options = $_POST['options'];

// echo var_dump($_POST);

$c = 1;
$toInclude[0] = 1;

if ($_POST['item1'] == "" or $_POST['image1'] == "" or $_POST['title1'] == "" or $_POST['minidesc1'] == "" or $_POST['desc1'] == "" or $_POST['price1'] == "" or $_POST['cat1'] == "") {
    echo "missing item 1";
}

for ($i=2; $i <= $options; $i++) {
    if ($_POST['image'.$i] != "" and $_POST['title'.$i] != "" and $_POST['desc'.$i] != "" and $_POST['price'.$i] != "") {
        array_push($toInclude, $i);
    }
}


// $doc->formatOutput = true;

$xml = simplexml_load_file("../data.xml");

// $products = $xml->products->product;
// echo var_dump($products);
foreach ($xml->products->product as $i) {
    if (checkItem($i->item)) {
        $currentproduct = $i;
    }
}
foreach ($toInclude as $t) {
    if ($t == $options) {
        $i->options = $options;

        $tt = 't'.$t;

        $i->addChild($tt);
        $i->$tt->addChild('id', $_POST['id'.$t]);
        $i->$tt->addChild('image', $_POST['image'.$t]);
        $i->$tt->addChild('name', $_POST['title'.$t]);
        $i->$tt->addChild('description', $_POST['desc'.$t]);
        $i->$tt->addChild('price', $_POST['price'.$t]);
        continue;
    }

    $tt = 't'.$t;
    if ($t == 1) {
        $i->item = $_POST['item'.$t];
        $i->minidesc = $_POST['minidesc'.$t];
        $i->category = $_POST['cat'.$t];
    }

    $i->$tt->id = $_POST['id'.$t];
    $i->$tt->image = $_POST['image'.$t];
    $i->$tt->name = $_POST['title'.$t];
    $i->$tt->description = $_POST['desc'.$t];
    $i->$tt->price = $_POST['price'.$t];
}

    

function checkItem($itemToCheck) {
    if ($itemToCheck == $_POST['olditemname']) {
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