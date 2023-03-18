<?php
	define('DEFAULT_ROUTE', 'home');
	
	$routes = array(
		'home' => array(
			'view'			=>	'HomeView',
			'controller'	=>	'HomeController',
			'model'			=>	'HomeModel'
		),
		'form' => array(
			'view'			=>	'FormView',
			'controller'	=>	'FormController',
			'model'			=>	'FormModel'
		),
		'test' => array(
			'view' 			=>	'TestView',
			'controller' 	=>	'TestController',
			'model'			=>	'TestModel'
		),
		'file' => array(
			'view'			=>	'FileView',
			'controller'	=>	'FileController',
			'model'			=>	'FileModel'
		),
		'red' => array(
			'controller'	=>	'RedController',
			'view'			=>	'RedView'
		),
		'blue' => array(
			'controller'	=>	'BlueController'
		)
	);