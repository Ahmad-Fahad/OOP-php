<?php
	class programming{
		public $html;
		public $css;
		public $javaScript;
		private $php;
		protected $mysql;
			public function __construct(){
				$this->html       = "I have to learn html";
				$this->css        = "I have to create my own style sheet";
				$this->javaScript = "I will start JavaScript ver soon";
				$this->php 		  ="I m in first stage php coder";
				$this->mysql 	  = "I m in second state in php mysql learning";
			 
			}
	}
	$prg = new programming();
	$ser = serialize($prg);
	file_put_contents("serialization.txt", $ser);
	$get 	= file_get_contents("serialization.txt");
	$unset  = unserialize($get);
	echo "<pre>";
	print_r($unset);
	echo "</pre>";
?>