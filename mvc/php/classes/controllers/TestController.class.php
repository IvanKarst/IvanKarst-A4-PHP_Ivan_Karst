<?php
	namespace controllers;

	class TestController extends \mvc\Controller {
		public function return(){
			return $this->model->test;
		}
	}
?>