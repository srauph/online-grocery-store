/***
 *
 *
 */

let cart;

window.onload = function() {
    //Initialize Objects
    cart = new Cart();
    loadSessionData();
};

window.onunload = function() {
    saveSessionData();
};