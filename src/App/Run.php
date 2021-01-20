<?php
namespace App;

class Run {
	public function __construct() {
		echo "3";
		$this->work('App\Handler::handle');
	}

	public function work(callable $class) {
	}
}
