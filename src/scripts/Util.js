/**
 *
 * bunch of utility function
 */

function void_showElement(string_elementID) {
    document.getElementById(string_elementID).style.display = "block";
}

function void_hideElement(string_elementID) {
    document.getElementById(string_elementID).style.display = "none";
}

function goto(string_url) {
    window.location.href = string_url;
}