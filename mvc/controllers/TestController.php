<?php

require_once './models/testModel.php';

class TestController {
	function index() {
		$results = Test::getAll();
		include 'views/Test/index.php';
	}

	function detail($id = 0) {
		echo 'detail van article ' . $id;
	}

	function test($id = 1) {
		// instantie van project model
		// $testModel = new Test();
		// $result = $testModel->getById($id);

		$result = Test::getById($id);
		include 'views/Test/testDetail.php';
	}
}