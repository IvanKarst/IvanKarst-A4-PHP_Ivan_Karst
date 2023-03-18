<?php
	namespace model;

	class FileModel extends \mvc\Model{
		public $logins = array(
			'nicknames' => array(
				0 => 'nickname',
				1 => 'docent',
				2 => 'student'
			),
			'passwords' => array(
				0 => 'password',
				1 => 'docent',
				2 => 'student'
			)
		);
	}
?>