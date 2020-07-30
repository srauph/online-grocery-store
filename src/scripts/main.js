/***
 *
 *
 */

let cart = new Cart();

window.onbeforeunload = function (e) {
	window.onunload = function () {
		window.localStorage.isMySessionActive = "false";
	};
	return undefined;
};

window.onload = function () {
	window.localStorage.isMySessionActive = "true";
};
