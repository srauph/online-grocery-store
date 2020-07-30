/** 
 * name:    Name of the object. Used in the page title, the item title, and as the alt image text
 * desc:    Full description of the object.
 * price:   Price of the object
 * img:     Link to the object image file
 * options: Amount of different options available (eg different product sizes)
 */
var name = "";
var desc = "";
var price = 0.0;
var img = "";
var options = 1;

/**
 * showAll:     When true, show the product description in its entirety.
 * currentItem: The currently selected product option (eg product size, etc).
 * qty:         Quantity to add to cart.
 */
var showAll = false;
var currentItem = 1;
var qty = 0;

/**
 * This function updates the page contents to reflect changes when a different product option
 * is selected.
 */
function updatePageContents() {
    document.getElementById("productTitle").innerHTML = name; // Page title
    document.getElementById("productImg").src = img; // Product image
    document.getElementById("productImg").alt = name; // Product image alt text
    document.getElementById("productName").innerHTML = name; // Product title
    document.getElementById("productPrice").innerHTML = "$" + price + " (In stock!)"; // Product price
    changeSelectionBtn(currentItem); // Product option buttons
    displayDesc(); // Product description
}

/**
 * This function updates the contents of the description according to the product option, and
 * expands (or shortens) it when requested.
 */
function displayDesc() {
    if (showAll) {
        document.getElementById("productDesc").innerHTML = desc;
    } else {
        document.getElementById("productDesc").innerHTML = Sales.private_string_reduceChars(desc, 41);
    }
}

/**
 * This function toggles whether the descroption should be expanded or collapsed.
 */
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

/**
 * This function updates the appearance of the buttons to reflect changes to which product option
 * is currently selected.
 * @param {*} productOption The product option that was selected
 */
function changeSelectionBtn(productOption) {
    for (let i = 1; i <= options; i++) {
        document.getElementById("productOption" + i).className = "product_option_btn";
    }
    document.getElementById("productOption" + productOption).className = "product_option_btn_selected";
}


/**
 * Changes the quantity to add to cart
 * @param {*} newQty Quantity value to use.
 */
function setQty(newQty) {
    document.getElementById("productQty").value = newQty;
}

/**
 * Updates the quantity to add to cart
 * @param {*} direction When true, increment qty. Else, decrement qty.
 * @param {*} limit Max amount to allow increasing to
 */
function updateQty(direction, limit) {

    qty = document.getElementById("productQty").value;

    if (qty < 0) {
        qty = 0;
        document.getElementById("productQty").value = 0;
        return;
    } else if (qty > limit) {
        alert("Warning: Maximum item purchase limit exceeded. Reverting to " + limit + ".");
        qty = limit;
        document.getElementById("productQty").value = limit;
        return;
    }

    if (direction) {
        if (qty == limit) {
            return;
        } else {
            qty++;
            document.getElementById("productQty").value = qty;
        }
    } else {
        if (qty == 0) {
            return;
        } else {
            qty--;
            document.getElementById("productQty").value = qty;
        }
    }
}

/**
 * This function adds the selected quantity of the selected product to the cart.
 * @param {*} limit The maximum allowable quantity to add to cart.
 */
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