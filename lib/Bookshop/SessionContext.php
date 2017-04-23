<?php
/**
 * Created by PhpStorm.
 * User: r8r
 * Date: 18/03/2017
 * Time: 12:11
 */

namespace Bookshop;


class SessionContext extends BaseObject {

	private static $exists = false;

	public static function create() : bool {
		if (!self::$exists) {
			self::$exists = session_start();
		}
		return self::$exists;
	}

}