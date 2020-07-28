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
		bool_onSale,
		description
	) {
		this.id = int_id;
		this.name = string_name;
		this.cost = double_cost;
		this.quantity = int_quantity;
		this.image = string_image;
		this.onSale = bool_onSale;
		this.category = string_category;
		this.description = description || "";
	}

	getCost() {
		return Number(this.cost);
	}
}
