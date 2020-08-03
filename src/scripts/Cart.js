/**
 *
 * Cart component
 */

//import { IAbstractComponent } from "./AbstractComponent";
//import { Item } from "./Item";

class Cart {
    constructor(items = []) {
        //super();
        this.HTMLSpamElement_valueContainer = document.getElementById(
            "cart_total_value"
        );
        this.items = items; // Array of items
    }

    /**
     *
     * @param {Item} Item_item Adds an item to the cart of the store
     */
    void_add(Item_item) {
        if (!(Item_item instanceof Item)) {
            throw new Error("Cannot add a non Item object to the cart");
        }

        var index = -1;

        if (this.items.length == 0) {
            this.items.push(Item_item);
        } else {
            for (let i of this.items) {
                if (i.id == Item_item.id) {
                    index = this.items.indexOf(i);
                    break;
                }
            }
            if (index == -1) {
                this.items.push(Item_item);
            } else if (
                this.items[index].quantity + Item_item.quantity >
                Item_item.limit
            ) {
                if (Item_item.limit - this.items[index].quantity == 0) {
                    alert(
                        "Cannot add to cart:\nAdding this quantity would exceed the quantity limit.\n\nYou already have the quantity limit in your cart."
                    );
                } else {
                    alert(
                        "Cannot add to cart:\nAdding this quantity would exceed the quantity limit.\n\nPlease lower the quantity to at most " +
                        (Item_item.limit - this.items[index].quantity) +
                        " and try again."
                    );
                }
                return;
            } else {
                this.items[index].quantity += Item_item.quantity;
            }
        }

        // this.items.push(Item_item);

        // Push changes to the server
        this.protected_void_flush();

        this.private_void_updateValue();

        // this.items = [];
    }

    private_void_updateValue() {
        let sum = 0;
        let items = JSON.parse(localStorage.getItem("cart")) || [];
        let total = 0;
        for (const item of items) {
            sum += item.cost * Number(item.quantity);
            total += Number(item.quantity);
        }

        this.HTMLSpamElement_valueContainer.innerHTML = `(${total}) \$${sum.toFixed(
			2
		)}`;
    }

    /**
     * This function pushes all the item changes to the localStorag BECAUSE WE ARE NOT ALLOWED TO USE PHP NOW FOR SOME REASON
     *
     * @see NOTE This function uses the local storage under the "cart" string to store the items
     */
    protected_void_flush() {
        // Push to the local storage
        // Get previous items
        // let previousItems = JSON.parse(localStorage.getItem("cart"));

        // if (previousItems == null || previousItems.length == 0)
        //     previousItems = this.items;
        // else {
        //     previousItems = previousItems.concat(this.items);
        // }

        // localStorage.setItem("cart", JSON.stringify(previousItems));
        localStorage.setItem("cart", JSON.stringify(this.items));
    }

    void_toString() {
        return this.items + "";
    }
}

// let cart;
// window.addEventListener("load", function () {
// 	cart = new Cart();
// });