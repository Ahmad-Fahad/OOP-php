<?php
	class ClassName{
		public static $staticvariable="Salauddin Ayubi";
		public static function display(){
			echo " ".self::$staticvariable;
		}
	}
	$ob = new ClassName;
	ClassName::display();
?>