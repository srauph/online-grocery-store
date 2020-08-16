Processing...<br/><br/>
<?php
session_start();
// $doc = new DOMDocument();
// $doc->load("../data.xml");

$options = $_POST['options'];

// echo var_dump($_POST);

$c = 1;
$toInclude[0] = 1;

if (isset($_POST['addnew'])) {
    $new = true;
} else {
    $new = false;
}

if ($_POST['item1'] == "" or $_POST['image1'] == "" or $_POST['title1'] == "" or $_POST['minidesc1'] == "" or $_POST['desc1'] == "" or $_POST['price1'] == "" or $_POST['cat1'] == "") {
    $failed =
    "<form name='failed' id='failed' method='POST' action='../backend/productlist.php' type='submit'><input id=failed name='failed' value='failed'/></form>
    <script>document.getElementById(\"failed\").submit();</script>";
    echo $failed;
    exit();
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
if ($new) {
    $xml->products->addChild('product');
    foreach ($xml->products->product as $i) {
        if ($i->item == "") {
            $currentproduct = $i;
        }
    }
    
    $currentproduct->addChild('category', $_POST['cat'.$t]);
    $currentproduct->addChild('item', $_POST['item'.$t]);
    $currentproduct->addChild('options', '1');
    $currentproduct->addChild('minidesc', $_POST['minidesc'.$t]);
    
    $t = 1;
    $tt = 't'.$t;
    $currentproduct->addChild($tt);
    $currentproduct->$tt->addChild('id', $_POST['id'.$t]);
    $currentproduct->$tt->addChild('name', $_POST['title'.$t]);
    $currentproduct->$tt->addChild('description', $_POST['desc'.$t]);
    $currentproduct->$tt->addChild('price', $_POST['price'.$t]);
    $currentproduct->$tt->addChild('image', $_POST['image'.$t]);
    $currentproduct->$tt->addChild('limit', $_POST['limit'.$t]);
} else {

    foreach ($xml->products->product as $i) {
        if (checkItem($i->item)) {
            $currentproduct = $i;
        }
    }
    echo $currentproduct;
    foreach ($toInclude as $t) {
        if ($t == $options) {
            $currentproduct->options = $options;

            $tt = 't'.$t;

            $currentproduct->addChild($tt);
            $currentproduct->$tt->addChild('id', $_POST['id'.$t]);
            $currentproduct->$tt->addChild('name', $_POST['title'.$t]);
            $currentproduct->$tt->addChild('description', $_POST['desc'.$t]);
            $currentproduct->$tt->addChild('price', $_POST['price'.$t]);
            $currentproduct->$tt->addChild('image', $_POST['image'.$t]);
            $currentproduct->$tt->addChild('limit', $_POST['limit'.$t]);
            continue;
        }

        $tt = 't'.$t;
        if ($t == 1) {
            $currentproduct->item = $_POST['item'.$t];
            $currentproduct->minidesc = $_POST['minidesc'.$t];
            $currentproduct->category = $_POST['cat'.$t];
        }

        $currentproduct->$tt->id = $_POST['id'.$t];
        $currentproduct->$tt->image = $_POST['image'.$t];
        $currentproduct->$tt->name = $_POST['title'.$t];
        $currentproduct->$tt->description = $_POST['desc'.$t];
        $currentproduct->$tt->price = $_POST['price'.$t];
        $currentproduct->$tt->limit = $_POST['limit'.$t];
    }
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

header("Location: ../backend/productlist.php");
?>