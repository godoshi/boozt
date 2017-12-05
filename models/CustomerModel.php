<?php

namespace app\models;

class CustomerModel extends BaseModel {

	var $table = 'customer';

	public function all() {
		return $this->connection->query("SELECT * FROM $this->table", \PDO::FETCH_ASSOC)->fetchAll();
	}

}