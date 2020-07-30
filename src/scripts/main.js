/***
 *
 *
 */

let cart = new Cart();

window.onload = function () {
	//Initialize Objects
	cart = ;
};

window.onbeforeunload = function (e) {
	window.onunload = function () {
		window.localStorage.isMySessionActive = "false";
	};
	return undefined;
};

window.onload = function () {
	window.localStorage.isMySessionActive = "true";
};
