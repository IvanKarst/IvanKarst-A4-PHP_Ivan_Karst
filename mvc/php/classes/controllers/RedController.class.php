<?php
	namespace controllers;

	class RedController extends \mvc\Controller {
		public function red(){
			$blue = new BlueController('default');
			return $blue->blue();
		}
	}
?>