<?php
	namespace mvc;

	class App{
		private $router;

		public function __construct()
		{
			$this->router = new \mvc\Router();
		}
		public  function __toString()
		{
			try {
				return $this->router->getView()->getHTML();
			} catch (Exception $e){
				return $e.getMessage;
			}
		}
	}
?>