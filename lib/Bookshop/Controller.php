<?php
/**
 * Created by PhpStorm.
 * User: r8r
 * Date: 18/03/2017
 * Time: 13:06
 */

namespace Bookshop;


class Controller {

	const ACTION = 'lalalalalaaaaaa';
	const PAGE = 'pfffffffff';
	const CC_NAME = 'nameOnCard';
	const CC_NUMBER = 'cardNumber';
	const ACTION_ADD = 'qwertzuiop';
	const ACTION_REMOVE = 'removeFromCart';
	const ACTION_ORDER = 'placeOrder';
	const ACTION_LOGIN = 'login';
	const USR_NAME = 'userName';
	const USR_PASSWORD = 'password';
	const ACTION_LOGOUT = 'logout';

	private static $instance = false;

	/**
	 *
	 * @return Controller
	 */
	public static function getInstance(): Controller {

		if ( ! self::$instance) {
			self::$instance = new Controller();
		}

		return self::$instance;
	}

	public function invokePostAction(): bool {

		if ($_SERVER['REQUEST_METHOD'] != 'POST') {
			throw new Exception('Controller can only handle POST requests.');

			return false;
		} elseif ( ! isset($_REQUEST[ self::ACTION ])) {
			throw new Exception(self::ACTION . ' not specified.');

			return false;
		}


		// now process the assigned action
		$action = $_REQUEST[self::ACTION];

		switch ($action) {

			case self::ACTION_ADD:
				ShoppingCart::add((int)$_REQUEST['bookId']);
				Util::redirect();
				break;

			case self::ACTION_REMOVE:
				ShoppingCart::remove((int)$_REQUEST['bookId']);
				Util::redirect();
				break;

			default:
				return false;
				break;

		}


		return true;

	}

}