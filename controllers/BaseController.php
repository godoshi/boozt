<?php

namespace app\controllers;

class BaseController {

	public function __construct() {
		$this->viewLoader = new \core\viewloader\ViewLoader(BASEPATH . '/resources/views/');
		$this->view = new \core\view\View($this->viewLoader);
	}
}

