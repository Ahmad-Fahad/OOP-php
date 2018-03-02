<?php
	abstract class student {
		public $name;
		public $age;
		public function identity(){
			echo " He was  ".$this->name." <br/> and he was only ".$this->age." years old <br/> ";
		}
		abstract public function morality(); 
	}
	class boy extends student{
 		 public function job(){
 		 	return parent::identity()." He conquered hindh";
 		 }
 		 public function morality(){
 		 	echo " To save muslim sisters<br/>";
 		 }
	}
	$student 	   = new boy;
	$student->name = " Bin Kasim ";
	$student->age  = 17;
	echo $student->job();
	$student->morality();
?>