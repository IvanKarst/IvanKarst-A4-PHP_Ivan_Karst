<?php
	namespace view;
	class FormView extends \mvc\View{
		
		public function getHTML()
		{
			if(isset($_POST['login'])){
				strip_tags($_POST['nickname']);
				strip_tags($_POST['password']);
				$this->controller->ham($_POST);
				if($_SESSION['check'] == false){
					$_SESSION['add']  = '<i class="warning">Nickname of Password fout</i>
						<br/>
					<a class="link" href="'.WEB_ROOT.'file">
						Zie de inloggegevens hier
					</a>';
				}
				unset($_POST);
				$body='';
				header('refresh:0');
			} else if(isset($_POST['logout'])) {
				session_destroy();
				unset($_POST);
				$body='';
				header('refresh:0');
			} else if(isset($_SESSION['account'])) {
				$body = '<div class="row">
					<div class="col-4">
						Ingelogd als:
					</div>
					<div class="col-8">
						'.$_SESSION['account'].'
					</div>
				</div>
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						<form method="POST">
							<button type="submit" class="button" name="logout" value="logout">
								Log uit
							</button>
						</form>
					</div>
				</div>';
			} else {
				$body = '<form method="POST">
					<div class="row">
						<div class="col-8">
							<div class="row">
								<div class="col-4">
									Nickname:
								</div>
								<div class="col-8">
									<input type="text" class="text" name="nickname" required>
								</div>
							</div>
							<div class="row mt-1">
								<div class="col-4">
									Password:
								</div>
								<div class="col-8">
									<input type="text" class="text" name="password" required>
								</div>
							</div>
							<div class="row mt-1">
								<div class="col-4"></div>
								<div class="col-8">
									<button type="submit" class="button" name="login" value="login">
										Login
									</button>
								</div>
							</div>
						</div>
						<div class="col-4 pr-0">';
							$body .= $_SESSION['add'] ?? '';
						$body .= '
						</div>
					</div>
				</form>';
				unset($_SESSION['add']);
			}
			return $body;
		}
	}
?>