<?php
	abstract class parentClass{
		public function parentf(){
			echo "In Parent class using __CLASS__ constant<br>class name = ".__CLASS__."<br/>";
			echo "In parent class using get_Class() method<br>class name = ".get_Class($this);
		}
	}
	class childClass extends parentClass{
		public function child(){
			echo "In Parent class using __CLASS__ constant<br>class name = ".__CLASS__."<br/>";
			echo "In parent class using get_Class() method<br>class name = ".get_Class($this);
		}
		public function prcls(){
			parent::parentf();
		}
	}
	$cls = new childClass;
	$cls->parentf();
	echo "<br>[ becoz get_Class() returns the class name which instance has created ]<hr/>";
	$cls->child();
	echo "<hr/>";
	$cls->prcls();
?>