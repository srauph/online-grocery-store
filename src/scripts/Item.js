/**
 *
 */

class Item {
    constructor(
        int_id,
        string_name,
        string_category,
        string_image,
        double_cost,
        int_quantity,
        int_limit,
        bool_onSale,
        description
    ) {
        this.id = int_id;
        this.name = string_name;
        this.category = string_category;
        this.image = string_image;
        this.cost = double_cost;
        this.quantity = int_quantity;
        this.limit = int_limit;
        this.onSale = bool_onSale;
        this.description = description || "";
    }

    getCost() {
        return Number(this.cost);
    }

    /**
     * Converts a Item object to a string so you can use LocalStorage and fromString method
     * @returns Returns a string representing the calling object
     */
    toString() {
        return `${this.id}-${this.name}-${this.image}-${this.cost}-${this.quantity}`;
    }

    /**
     *
     * @param {string} string_item The item to parse as a string (usually you have used the toString method before)
     */
    static Item_fromString(string_item) {
        const tokens = string_item.split("-");

        try {
            return new Item(
                Number(tokens[0]),
                tokens[1],
                "",
                tokens[2],
                Number(tokens[3]),
                1,
                0,
                ""
            );
        } catch (Exception_e) {
            alert("An error has occured" + Exception_e.toString());
            return null;
        }
    }
}