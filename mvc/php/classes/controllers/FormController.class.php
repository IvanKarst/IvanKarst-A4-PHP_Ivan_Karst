<?php
	namespace controllers;

	class FormController extends \mvc\Controller {
		public function login_check($arr){
			if(in_array($arr['nickname'], $_SESSION['nickArr'])){
				$key = array_search($arr['nickname'], $_SESSION['nickArr']);
				if($arr['password'] == $_SESSION['passArr'][$key]){
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
	}
?>