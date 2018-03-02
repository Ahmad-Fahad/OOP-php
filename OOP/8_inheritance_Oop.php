<?php  
	class ClassName{
		

		public function display(){
           echo "Data in parent class<br/>";

		}
		public function display_1(){
           echo "Data printed from parent class<br/>";
		}
	}
	class subClass extends ClassName{
		public function display(){
		   echo "Data in sub class priority subclass<br/>";
		}
		public function display_0(){
           echo " data print in sub class<br/>";
		}
	}
$ob_1 = new ClassName;
	$ob_1->display();
	$ob_1->display_1();
	echo "method of sub class cannot be called from parent class object<br/>";
$ob_2 = new subClass;
	$ob_2->display();
	$ob_2->display_1();  
	$ob_2->display_0();

?>