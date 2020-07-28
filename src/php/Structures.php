<?php

/**
 *  These structures must be the same as the javascript once
 * 
 */

class Item {
	public $id;
	public $name;
	public $category;
	public $image;
	public $cost;
	public $quantity;
	public $onsale;
	public $description;
    
	function __construct($int_id, $string_name, $string_category, $string_image, $double_cost, $int_quantity, $byte_onSale, $string_description) {
		$this->id = $int_id;
		$this->name = $string_name;
		$this->category = $string_category;
		$this->image = $string_image;
		$this->cost = $double_cost;
		$this->quantity = $int_quantity;
		$this->onsale = $byte_onSale;
		$this->description = $string_description;
	 }

	 function getID()	{
		 return $id;
	 }

	 function toString()	{
		 return "$this->id, '$this->name', '$this->category', '$this->image', $this->cost, $this->quantity, $this->onsale, '$this->description'";
	 }
}

class User	{
	private $id = -1;
	public $username = "";
	public $password = "";
	public $email = "";
	public $cart = "";

	function __construct($int_id, $string_username, $string_password, $string_email, $string_cart) {
		$id = $int_id;
		$username = $string_username;
		$password = $string_password;
		$email = $string_email;
		$cart = $string_cart;
	 }

	 function getID()	{
		 return $id;
	 }
}

?>