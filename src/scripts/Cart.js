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

	/**
	 *
	 * @param {Item} Item_item Adds an item to the cart of the store
	 */
	void_add(Item_item) {
		if (!(Item_item instanceof Object)) {
			throw new Error("Cannot add a non Item object to the cart");
		}

		this.items.push(Item_item);

		this.private_void_updateValue();

		// Push changes to the server
		this.protected_void_flush();
	}

	private_void_updateValue(ItemsArray_array) {
		let sum = 0;
		let items = ItemsArray_array || this.items;
		let totalQuantity = 0;
		for (const item of items) {
			sum += Number(item.cost) * Number(item.quantity);
			totalQuantity += Number(item.quantity);
		}

		this.HTMLSpamElement_valueContainer.innerHTML = `(${totalQuantity}) \$${sum.toFixed(
			2
		)}`;
	}

	void_delete(int_id) {
		for (let i = 0; i < this.items.length; i++) {
			if (this.items[i].id == int_id) {
				this.items.splice(i, 1);
			}
		}

		// Delete from the session
		let previousItems = JSON.parse(localStorage.getItem("cart"));
		if (previousItems == null || previousItems.length == 0) previousItems = [];
		else {
			for (let i = 0; i < previousItems.length; i++) {
				if (previousItems[i].id == int_id) {
					previousItems.splice(i, 1);
				}
			}
		}

		localStorage.setItem("cart", JSON.stringify(previousItems));
	}

	/**
	 * This function pushes all the item changes to the localStorag BECAUSE WE ARE NOT ALLOWED TO USE PHP NOW FOR SOME REASON
	 *
	 * @see NOTE This function uses the local storage under the "cart" string to store the items
	 */
	protected_void_flush() {
		// Push to the local storage
		// Get previous items
		let previousItems = JSON.parse(localStorage.getItem("cart"));
		if (previousItems == null || previousItems.length == 0)
			previousItems = this.items;
		else {
			previousItems = previousItems.concat(this.items);
		}

		let removedDuplicates = [];
		for (const item of previousItems) {
			let exists = false;
			for (const temp of removedDuplicates) {
				if (item.id == temp.id) {
					temp.quantity++;
					exists = true;
				}
			}

			if (!exists) removedDuplicates.push(item);
		}

		localStorage.setItem("cart", JSON.stringify(removedDuplicates));

		//Show items
		this.private_void_updateValue(removedDuplicates);
	}

	void_toString() {
		return this.items + "";
	}
}

let cart;
window.addEventListener("load", function () {
	cart = new Cart();

	// This script updates the cart items even if the page was refreshed
	const items = JSON.parse(localStorage.getItem("cart"));
	if (items != null || items.length > 0) {
		cart.private_void_updateValue(items);
	}
});
