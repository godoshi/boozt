<?php

namespace core\view;

class View {
	public function __construct($viewLoader) {
		$this->viewLoader = $viewLoader;
	}

	public function display($viewName, $data = []) {
		return $this->viewLoader->load($viewName, $data);
	}
}
