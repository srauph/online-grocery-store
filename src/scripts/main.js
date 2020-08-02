/***
 *
 *
 */

let cart;

window.onload = function() {
    //Initialize Objects
    if (JSON.parse(localStorage.getItem("cart")) == null) {
        cart = new Cart();
    } else {
        cart = new Cart(JSON.parse(localStorage.getItem("cart")));
    }

    if (typeof loadSessionData === "function")
        loadSessionData();
};

window.onunload = function() {
    if (typeof saveSessionData === "function")
        saveSessionData();
};