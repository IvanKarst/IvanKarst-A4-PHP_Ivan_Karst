<?php
	namespace controllers;

	class FileController extends \mvc\Controller {
		function ham($burger){
			if(isset($burger) && login_check($burger)){
				$_SESSION['account'] = $burger['nickname'];
				$_SESSION['check'] = true;
			} else {
				$_SESSION['check'] = false;
				header('');
			}
		}

		public function info(){
			$logins = $this->model->logins;
			$logs = '';
			for($a = 0; $a <= count($this->model->logins); $a++){
				$id = $a+1;
				$logs .= '<b><i>'.$id.'</b> -></i> Nickname: <i>'.$logins['nicknames'][$a].'</i> Password: <i>'.$logins['passwords'][$a].'</i><br/>';
			} 
			return 'Hier zijn de login gegevens <br/>'.$logs;
		}
	}
?>