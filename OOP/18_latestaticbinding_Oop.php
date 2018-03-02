<?php
	class father{
		public static function framework(){
			echo " Class Name is ".self::getClass()."<br/>";
		}
		public static function getClass(){
			return __CLASS__;
		}
	}
	class child extends father{
		public static function getClass(){
		return __CLASS__;
	}
}
	$f = new father();
	$f->framework();

	$c = new child();
	$c->framework();

?>