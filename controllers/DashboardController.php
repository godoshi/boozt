<?php

namespace app\controllers;

class DashboardController extends BaseController {
	public function index() {
		$customers = (new \app\models\CustomerModel)->all();
		$this->view->display('dashboard', ['customers' => $customers]);
	}
}

