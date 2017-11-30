<?php

namespace app\models;

class BaseModel {

	public function __construct() {
		$this->connection = DB::getInstance();
	}
}