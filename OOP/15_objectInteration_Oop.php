<?php
	class me{
			public $name = "Fahad";
	  		public $age  = "21";
			public $job  = "programming";
			protected $email    = "fahadcse13@outlook.com";
			private $passward = "12345";
			public function accessall(){
				echo "Inside class \n We can use protected or private properties outside the class using object Iteration<br/>";
				foreach ($this as $key => $value) {
				echo "<pre>";
				echo "$key -------> $value<br/>";
				echo "</pre>";
				}
			}

	}
echo "outside this class we can not access the private or protected values";
$mi = new me;
foreach ($mi as $key => $value) {
	echo "<pre>";
	echo "$key -------> $value<br/>";
	echo "</pre>";
}
$mi->accessall();
?>