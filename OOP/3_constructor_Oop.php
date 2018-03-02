<?php
	
	class person{
		public $name,$age;
		public function __construct($name,$age){
		 	$this->name = $name;
		 	$this->age  = $age;
		}
		public function personone(){
			echo " Nmae is = {$this->name} <br/> age is = {$this->age}";
		}
	}
	$object = new person("xyz",123);
	$object->personone();
?>