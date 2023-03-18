<?php
	namespace mvc;

	class Router{
		private $route;
		private $view;
		private $controller;
		private $model;

		public function __construct()
		{
			require_once(LOCAL_ROOT.'php/routes.php');
			if(isset($_GET['route'])){
				$this->route = explode('/', $_GET['route']);
			}
			$route = isset($routes[$this->getRoute()]) ? $this->getRoute() : DEFAULT_ROUTE;
			if(isset($routes[$route]['model'])){
				$model = "\\model\\".$routes[$route]['model'];
				$this->model = new $model();
			} else {
				$this->model = NULL;
			}
			if(isset($routes[$route]['controller'])){
				$controller = "\\controllers\\".$routes[$route]['controller'];
				$this->controller = new $controller($this->model);
			} else {
				$this->controller = NULL;
			}
			if(isset($routes[$route]['view'])){
				$view = "\\view\\".$routes[$route]['view'];
				$this->view = new $view($this->controller, $this->model);
			} else {
				$this->view = NULL;
			}
		}
		
		private function getRoute(){
			return count($this->route) > 0 ? $this->route[0] : DEFAULT_ROUTE;
		}

		public function getModel(){
			if($this->model != null){
				return $this->model;
			} else {
				return '';
			}
		}

		public function getView(){
			if($this->view != null){
				return $this->view;
			} else {
				return '';
			}
		}
	}
?>