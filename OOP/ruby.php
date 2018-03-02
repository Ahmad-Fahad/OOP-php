<?php
	class ruby {
		public $pp;
		public function __construct(perl $prl){
			echo "I'm a Ruby coder<br/>";
			$this->pp=$prl;
			$this->pp->framework();
			$this->pp->cms();
		}
	}
?>