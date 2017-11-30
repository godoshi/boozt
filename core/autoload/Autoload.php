<?php

class Autoload {

	private $autoloadable = [];

	public function register($name, $loader = false) {
		if ( ! $loader || is_callable($loader)) {
			$this->autoloadable[$name] = $loader;
			return;
		}
		throw new Exception("Loader not callable: $name");
	}

	public function load($name) {
		$name = strtolower($name);
		$filepath = BASEPATH . "/core/$name/$name.php";
		if ( ! empty($this->autoloadable[$name])) {
			return $this->autoloadable[$name]($name);
		}
		if ( file_exists($filepath)) {
			return require $filepath;
		}
		throw new Exception("Not loaded or registered: $name");
	}
}

