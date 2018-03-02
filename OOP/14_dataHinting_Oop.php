<?php
	function __autoload($cls){
		include $cls.'.php';
	}

	echo " Here perl.php and ruby.php are the action files<br/>";
	$r   = new ruby;
	$vlu = array(
		array("Chapter 1","Page_3"),
		array("Chapter 2","Page_30"),
		array("Chapter 3","Page_300")
	);
	echo "simple array passing<br/>";
	$p = new perl;
	$p->chapter($vlu);
	$perl = new perl;
	$ruby = new ruby($perl);

?>