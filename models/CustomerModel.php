<?php

namespace app\models;

class CustomerModel extends BaseModel {

	public function __construct() {
		$this->table = 'customer';
	}

	public function all() {
		return $this->connection->query("SELECT * FROM $this->table", PDO::FETCH_ASSOC);
	}

}