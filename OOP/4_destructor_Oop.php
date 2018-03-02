<?php
	class pendrive{
		public $storage;
		public function setstorage($storage){
			$this->storage = $storage;
		}
		public function __destruct(){
			if(!empty($this->storage)){
				echo "Destructor executed ";
			}
		}
	}
	$obj = new  pendrive;
	$obj -> setstorage(512);
	unset($obj);
?>