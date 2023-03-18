<?php
function login_check($arr){
	$nicknames = array(
		'0'		=>	'nickname',
		'1'		=>	'docent',
		'2'		=>	'student'
	);
	$passwords = array(
		'0'		=>	'password',
		'1'		=>	'docent',
		'2'		=>	'student'
	);
	if(in_array($arr['nickname'], $nicknames)){
		$key = array_search($arr['nickname'], $nicknames);
		if($arr['password'] == $passwords[$key]){
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}
?>