<?php
namespace mvc;
abstract class Controller implements \mvc\interfaces\controller{
	protected $model;

	public function __construct($model)
	{
		$this->model = $model ?? null;
	}

	public function getPostData($name){
		return $this->getData($name);
	}

	public function getGetData($name){
		return $this->getData($name, "GET");
	}

	public function getData($name, $type="POST")
	{
		$src = ($type == 'POST'? $_POST:$_GET);
		return isset($src[$name]) ? $src[$name] : null;
	}
}
?>