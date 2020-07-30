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
    void_add(Item_item, Int_qty) {
        if (!(Item_item instanceof Item)) {
            throw new Error("Cannot add a non Item object to the cart");
        }

        for (let i = 0; i < Int_qty; i++) {
            this.items.push(Item_item);
        }

        // Push changes to the server
        this.protected_void_flush();

        this.items = [];
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


    /**
     * This function pushes all the item changes to the localStorag BECAUSE WE ARE NOT ALLOWED TO USE PHP NOW FOR SOME REASON
     *
     * @see NOTE This function uses the local storage under the "cart" string to store the items
     */
    protected_void_flush() {
        // Push to the local storage
        // Get previous items
        let previousItems = JSON.parse(localStorage.getItem("cart"));

        alert(previousItems);

        if (previousItems == null || previousItems.length == 0)
            previousItems = this.items;
        else {
            previousItems = previousItems.concat(this.items);
        }

        alert(previousItems);

        localStorage.setItem("cart", JSON.stringify(previousItems));
    }

    void_toString() {
        return this.items + "";
    }
}

// let cart;
// window.addEventListener("load", function () {
// 	cart = new Cart();
// });