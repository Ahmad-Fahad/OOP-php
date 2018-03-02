<?php
		$cls = "chaining_helper";
		include $cls.'.php';
	
	$pg = new programming;
	$pg->framework()->cms();
	$cl = new calculation ;
	echo " The result is : ".$cl->getvalue(15,13)->getresult();
?>