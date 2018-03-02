<?php 
 	echo "<h3>To prevent extending and overriding final keyword is used <br/>____________________<br/> </h3>";
 	class AnotherClass{
 		public     $variable_1 ;
 		private    $variable_2 ;
 		protected  $variable_3 ;
 		public function __construct()
		{
			$this->variable_1 = ":: value public";
			$this->variable_2 = ":: value private";
			$this->variable_3 = ":: value protected";

 
		}
	    public	function display()
		{
			
		   echo "Inside parent class<br/>____________________<br/>public variable {$this->variable_1}<br/>private variable  {$this->variable_2}<br/> protected variable {$this->variable_3}<br/><br/>____________________<br/>";
		}

 	}
	class ClassName extends AnotherClass
	{
		public function play()
		{
	 		echo "Inside sub class class<br/><br/>____________________<br/> public variable {$this->variable_1}<br/> (private value will not be accessed)<br/> ";
	 		echo "private variable {$this->variable_2}<br/>protected variable {$this->variable_3}<br/><br/>____________________<br/>";
		}
	
	}
	$ob2 = new AnotherClass;
	$ob  = new ClassName;
	$ob->display();
	$ob->play();
			echo "outside all classes<br/> <br/>____________________<br/>public variable {$ob->variable_1}<br/>[this will generate error private and protected will not be accessed out side of a class]";
			echo "private variable {$ob->variable_2}<br/> protected variable {$ob->variable_3}<br/><br/>____________________<br/>";
 ?>