<?php
require_once("../php/includes/default.inc.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>MVC structuur</title>
		<link rel="stylesheet" href="css/master.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container mt-3">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-6 ctn p-4">
					<div class="row">
						<div class="col-2 divider">
							<a class="link<?php
								if(!str_contains($_SERVER['REQUEST_URI'], 'form') && !str_contains($_SERVER['REQUEST_URI'], 'test') && !str_contains($_SERVER['REQUEST_URI'], 'file')){
									print '_active';
								}
							?>" href="<?=WEB_ROOT?>">
								<div>
									Home
								</div>
							</a>
							<a class="link<?php
								if(str_contains($_SERVER['REQUEST_URI'], 'form')){
									print '_active';
								}
							?>" href="<?=WEB_ROOT?>form">
								<div>
									Forms
								</div>
							</a>
							<?php
								if(str_contains($_SERVER['REQUEST_URI'], 'file')){
									print '
										<a class="link_active" href="'.WEB_ROOT.'file">
											<div class="smol">
												<div class="corner"></div>
												<div class="mirror_corner">Files</div>
											</div>
										</a>
									';
								}
							?>	
							<a class="link<?php
								if(str_contains($_SERVER['REQUEST_URI'], 'test')){
									print '_active';
								}
							?>" href="<?=WEB_ROOT?>test">
								<div>
									Tests
								</div>
							</a>
						</div>
						<div class="col-9">	
							<?php
								$app = new \mvc\App;
								print $app;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
