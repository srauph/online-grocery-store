/**
 * Interface for an abstract PHP-Javascript component
 *
 * ex: Cart, user, Grocery list, etc
 */

class IAbstractComponent {
	constructor() {
		if (new.target == IAbstractComponent) {
			throw new Error("Cannot initialize an interface!");
		}
	}

	/**
	 * Pushes all changes of the stat to the server
	 */
	protected_void_flush() {
		throw new Error("An abstract method must be overriden");
	}

	/**
	 * Converts the object to a representable string ( for logging for example)
	 */
	string_toString() {
		throw new Error("An abstract method must be overriden");
	}
}
