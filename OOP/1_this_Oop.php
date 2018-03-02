<?php
	class person{
		public $name,$age;
		public function pname(){
			$vari=$this->name="<br/>Ahmad";
			echo $vari."<br/>";
		}
		public function page(){
			$var=$this->age=20;
			echo "<br/>".$var;
		}
	}
	$object=new person;
	$object->name="Fahad";
	 	echo $object->name;
	$object->page();
	$object->pname();
?>