var name = "";
var desc = "";
var price = 0.0;
var img = "";
var options = 1;

var showAll = false;
var currentItem = 1;
var qty = 0;

function displayDesc() {
    if (showAll) {
        document.getElementById("productDesc").innerHTML = desc;
    } else {
        document.getElementById("productDesc").innerHTML = Sales.private_string_reduceChars(desc, 41);
    }
}

function showHideDesc() {
    if (showAll) {
        document.getElementById("showDescBtn").innerHTML = "More Description...";
        showAll = false;
        displayDesc();
    } else {
        document.getElementById("showDescBtn").innerHTML = "Less Description...";
        showAll = true;
        displayDesc();
    }
}

function changeSelectionBtn(option) {
    for (let i = 1; i <= options; i++) {
        document.getElementById("productOption" + i).className = "product_option_btn";
    }
    document.getElementById("productOption" + option).className = "product_option_btn_selected";
}

function setQty(newQty) {
    document.getElementById("productQty").value = newQty;
}

function updateQty(direction, limit) {

    qty = document.getElementById("productQty").value;

    if (direction) {
        if (qty == limit) {
            return;
        } else if (qty < 0) {
            qty = 0;
            document.getElementById("productQty").value = 0;
        } else if (qty > limit) {
            alert("Warning: Maximum item purchase limit exceeded. Reverting to " + limit + ".");
            qty = limit;
            document.getElementById("productQty").value = limit;
        } else {
            qty++;
            document.getElementById("productQty").value = qty;
        }
    } else {
        if (qty == 0) {
            return;
        } else if (qty < 0) {
            qty = 0;
            document.getElementById("productQty").value = 0;
        } else if (qty > limit) {
            alert("Warning: Maximum item purchase limit exceeded. Reverting to " + limit + ".");
            qty = limit;
            document.getElementById("productQty").value = limit;
        } else {
            qty--;
            document.getElementById("productQty").value = qty;
        }
    }
}


function addToCart(limit) {
    qty = document.getElementById("productQty").value;

    if (qty <= 0) {
        alert("You need to indicate a quantity before adding to cart!");
        return;
    } else if (qty > limit) {
        alert("Warning: Maximum item purchase limit exceeded. Reverting to " + limit + ".");
        qty = limit;
        document.getElementById("productQty").value = limit;
        return;
    } else {
        for (let i = 0; i < qty; i++)
            cart.void_add(new Item(42, name, 'Beverages', 'sprite.jpg', price, 1, 0, ''));
    }
}