/**
 *
 * Cart component
 */

//import { IAbstractComponent } from "./AbstractComponent";
//import { Item } from "./Item";

class Cart {
	constructor() {
		//super();
		this.HTMLSpamElement_valueContainer = document.getElementById(
			"cart_total_value"
		);
		this.items = []; // Array of items
	}

	void_add(Item_item) {
		if (!(Item_item instanceof Item)) {
			throw new Error("Cannot add a non Item object to the cart");
		}

		this.items.push(Item_item);
		this.private_void_updateValue();

		// Push changes to the server
		this.void_flush();
	}

	private_void_updateValue() {
		let sum = 0;
		for (const item of this.items) {
			sum += Number(item.getCost());
		}

		this.HTMLSpamElement_valueContainer.innerHTML = `(${
			this.items.length
		}) \$${sum.toFixed(2)}`;
	}

	void_flush() {
		// Push to the server
	}

	void_toString() {
		return this.items + "";
	}
}

let cart;
window.addEventListener("load", function () {
	cart = new Cart();
});
