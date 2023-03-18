<?php
    namespace view;
	class RedView extends \mvc\View{
		public function getHTML()
		{
			return $this->controller->red();
		}
	}