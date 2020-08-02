/***
 *
 *
 */

let cart;
let cart_top_right_updater;

window.onload = function() {
    //Initialize Objects
    if (JSON.parse(localStorage.getItem("cart")) == null) {
        cart = new Cart();
    } else {
        cart = new Cart(JSON.parse(localStorage.getItem("cart")));
    }

    cart.private_void_updateValue();
    // cart_top_right_updater = setInterval(function() {
    //     cart.private_void_updateValue();
    // }, 1000);

    if (typeof loadSessionData === "function") loadSessionData();
};

window.onunload = function() {
    if (typeof saveSessionData === "function") saveSessionData();

    clearInterval(cart_top_right_updater);
};