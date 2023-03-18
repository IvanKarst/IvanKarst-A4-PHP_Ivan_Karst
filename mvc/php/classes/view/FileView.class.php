<?php
	namespace view;

	class FileView extends \mvc\View{
		public function getHTML()
		{
			return $this->controller->info();
		}
	}
?>