<?php
namespace app\index\controller;

class Index {
	public function index($name = 'World') {
		return "Hello {$name}!";
	}
	public function printf() {
		return "test";
	}
	protected function test () {
		return "test";
	}
}
