<?php

namespace core\ViewLoader;

class ViewLoader {

	public function __construct($path) {

		$this->path = $path;

	}

	public function load($viewName, $data) {

		$path = $this->path.$viewName.'.php';

		if ( file_exists($path) ) {
			foreach ($data as $key => $value) {
				${$key} = $value;
			}
			return require $path;
		}
		throw new Exception("Cannot find view: $viewName");
	}

}

