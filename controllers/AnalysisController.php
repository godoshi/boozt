<?php

namespace app\controllers;

class AnalysisController extends BaseController {
	public function index() {
		$users = (new \app\models\CustomerModel)->all();
		$this->view->display('analysis');
	}
}

