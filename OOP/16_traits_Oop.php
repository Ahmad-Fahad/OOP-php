<?php
	trait java{
		public function java(){
			return "............Java.............. <br/>";
		}
	}
	trait php{
		public function php(){
			return "............php.............. <br/>";
		}
	}
	trait javaPhp{
		use java,php;
		public function javaphp(){
			return "............java__php..............<br/> ";
		}
	}
	class one{
		use java;
	}
	class two{
		use php;
	}
	class three{
		use javaPhp;
	}
$o = new one;
echo $o->java();
$t = new two;
echo $t->php();
$th = new three;
echo $th->javaPhp();

?>