<?php

namespace core\ViewLoader;

class ViewLoader {

	public function __construct($path) {

		$this->path = $path;

	}

	public function load($viewName) {

		$path = $this->path.$viewName.'.php';	

		if ( file_exists($path) ) {
			return include $path;
		}
		throw new Exception("Cannot find view: $viewName");
	}

}

