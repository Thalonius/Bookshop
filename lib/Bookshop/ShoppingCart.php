<?php
/**
 * Created by PhpStorm.
 * User: r8r
 * Date: 18/03/2017
 * Time: 12:08
 */

namespace Bookshop;

SessionContext::create();

class ShoppingCart extends BaseObject {

	private static function getCart() : array {
		return isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
	}

	private static function storeCart(array $cart) {
		$_SESSION['cart'] = $cart;
	}

	public static function add(int $bookId) {
		$cart = self::getCart();
		$cart[$bookId] = $bookId;
		self::storeCart($cart);
	}

	public static function remove(int $bookId) {
		$cart = self::getCart();
		unset($cart[$bookId]);
		self::storeCart($cart);
	}

	public static function clear() {
		self::storeCart(array());
	}

	public static function getAll() : array {
		return self::getCart();
	}

	public static function size(): int {
		return sizeof(self::getCart());
	}

	public static function contains(int $bookId) : bool {
		return array_key_exists($bookId, self::getCart());
	}
}