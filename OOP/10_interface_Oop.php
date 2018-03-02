<?php

	interface school{
		public function myschool();
	}
	interface college{
		public function mycollege();
	}
	interface varsity{
		public function myvarsity();
	}
 	
	class student implements school,college,varsity{
		public function __construct(){
			$this->myschool();
			$this->mycollege();
			$this->myvarsity();
		}
		public function myschool(){
			echo " I m a school student <br/>";
		}
		public function mycollege(){
			echo "I m a college student<br/>";
		}
		public function myvarsity(){
			echo "I m a varsity student<br/>";
		}
	}

	class teacher implements school{
		public function __construct(){
			$this->myschool();
			$this->mycollege();
			$this->myvarsity();
		}
		public function myschool(){
			echo "I m a school teacher <br/>";
		}
		public function mycollege(){
			echo "I m a college teacher<br/>";
		}
		public function myvarsity(){
			echo "I m a varsity teacher<br/>";
		}
	}
	echo "___________student____________<br/>";
	$student = new student;
	secho "____________teacher_________<br/>";
	$teacher = new student;

?>