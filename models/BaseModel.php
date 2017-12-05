<?php

namespace app\models;

class BaseModel {

	var $connection;

	public function __construct() {
		$this->connection = \DB::getInstance();
	}
}