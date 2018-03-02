<?php
	class language{
		public $catagory;
		public $framework;
		public $tag;
		public function settag($a){
			$this->tag = $a;
		}		
		public function gettag(){
		    return $this->tag;
		}
		public function setcat($a){
			$this->catagory = $a;
		}
		public function getcat(){
			return $this->catagory;
		}
		public function setframe($a){
			$this->framework = $a;
		}
		public function getframe(){
			return $this->framework;
		}
		public function __clone(){
			$lang = new language();
			$lang -> setframe($this->framework);
			return $lang;

		}
	}
	$java = new language();
	$java->settag("programming");
	$java->setcat("OOP");
	$java->setframe("spring");

echo "Copy object referance {only the last values are assigned}<br/>";

	$php = $java;
	$php->setcat("Structaral");
	$php->setframe("Larabel");
	echo $java->gettag()."<br/>";
	echo $java->getcat()."<br/>";
	echo $java->getframe()."<br/>";
	echo $php->gettag()."<br/>";
	echo $php->getcat()."<br/>";
	echo $php->getframe()."<br/>";

echo "  object  cloning {}<br/>";

	$php = clone $java;
	$java->setcat("OOP");
	$java->setframe("spring");
	$php->setcat("Structaral");
	$php->setframe("Larabel");
	echo $java->gettag()."<br/>";
	echo $java->getcat()."<br/>";
	echo $java->getframe()."<br/>";
	echo $php->gettag()."<br/>";
	echo $php->getcat()."<br/>";
	echo $php->getframe()."<br/>";

    $python = clone $java;
    $python->setcat("Fundamental");
    $python->setframe("jani na");
    echo $python->gettag()."<br/>";
    echo $python->getcat()."<br/>";
    echo $python->getframe()."<br/>";



?>