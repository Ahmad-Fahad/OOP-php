<?php
	class programming{
		public function framework(){
			echo "CakePhp is a framework <br/>";
			return $this;
		}
		public function cms(){
			echo "Wordpress is a cms <br/>";
			return $this;
		}

	}
	class calculation{
		public $a=0;
		public $b=0;
		public $r;
		public function getvalue($x,$y){
			$this->a=$x;
			$this->b=$y;
			return $this;
		}
		public function getresult(){
			$this->r = $this->a  * $this->b ;
			return $this->r;
		}
	}
?>