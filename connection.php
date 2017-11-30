<?php

class DB {

	private static $instance = NULL;

	private function __construct() {}

	private function __clone() {}

	public static function getInstance() {

		if ( ! isset(self::$instance)) {
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
			self::$instance = new PDO($dsn, DB_USER, DB_PASSWORD, $pdo_options);
		}
		return self::$instance;
	}
}

