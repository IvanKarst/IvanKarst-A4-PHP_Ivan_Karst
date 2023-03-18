<?php
	namespace controllers;

	class FormController extends \mvc\Controller {
		public function login_check($arr){
			if(in_array($arr['nickname'], $this->model->login['nicknames'])){
				$key = array_search($arr['nickname'], $this->model->login['nicknames']);
				if($arr['password'] == $this->model->login['passwords'][$key]){
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}

		public function ham($burger){
			if(isset($burger) && $this->login_check($burger)){
				$_SESSION['account'] = $burger['nickname'];
				$_SESSION['check'] = true;
			} else {
				$_SESSION['check'] = false;
				header('');
			}
		}

	}
?>