<?php

	class ClassName  
	{
		public $name,$age;

		function __construct($n,$a)
		{
			$this->name = $n;
			$this->age  = $a;

			echo "Nmae is {$this->name} and <br/>age is {$this->age}";
		}
		public function __destruct(){
			unset($this->name);
			unset($this->age);
			echo "<br/>Nmae is {$this->name} and <br/>age is {$this->age}";
		}
	}
	$ob = new ClassName("Fateh Ali",123);
?>