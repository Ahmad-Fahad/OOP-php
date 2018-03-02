<?php
	class perl{
		public function chapter(array $v){
			echo "I'm a Perl coder<br/>";
			$c=0;
			foreach ($v as  $value) {
				$c++;
				echo " ".$c.".. . .".$value[0].".....".$value[1]."<br/>";
			}
		}
		public function framework(){
			echo "Larabel is php web based framework<br/>";
		}
		public function cms(){
			echo "Wordpress is a cms<br/>";
		}

	}
?>