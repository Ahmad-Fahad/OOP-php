<?php
	class ClassName{
		public $x,$y;
		const constantname="Tipu sultan ";
		public function display(){
			echo " ".ClassName::constantname;
		}
	}
	$object = new ClassName;
	$object -> display();
?>