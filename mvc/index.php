<?php
	require_once 'config.php';
	require_once 'libs/db.php';

	$request = $_SERVER['REQUEST_URI'];
	$path = explode('/', $request);
	$controller = ucfirst(strtolower($path[1]));
	// if not empty if else
	$method = ( !empty($path[2]) ) ? strtolower($path[2]) : 'index';
	$param = ( !empty($path[3]) ) ? strtolower($path[3]) : null;

	$controller_name = $controller . 'Controller';
	$controller_path = 'controllers/' . $controller_name . '.php';

	if ( file_exists($controller_path) ) {
		require_once $controller_path;
		// $controller_class = new TestController();
		$controller_class = new $controller_name();
	
		if(method_exists($controller_class, $method)) {
			$controller_class->$method($param);
		} else {
			echo 'error wrong controller class';
		}
	} else {
		echo 'error wrong controller path';
	}

?>
