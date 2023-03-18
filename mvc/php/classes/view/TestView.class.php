<?php
	namespace view;

	class TestView extends \mvc\View{
		public function getHTML()
		{
			return $this->controller->return();
		}
	}
?>