<?php
 
	class library {
		public $book;
		function  book()
		{
			echo " Book is always your good friend <br/> ";
		}
		public function __GET($pm){
			echo " $pm is not exist <br/>";
		}
		public function __SET($pm,$value){
			echo " you may find this book $pm in $value<br/> ";
		}
		public function __CALL($pm,$value){
			echo " The function $pm is not exist its values are : ".implode(',', $value);
		}
	}
	$lb = new library;
	$lb -> book();
	$lb -> The_lost_world;
	$lb -> The_lost_world="Alokito library";
	$lb -> arbitaryFunction(1,2,3,4,5,6,7,6,7);

?>