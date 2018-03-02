<?php
	$arr    = array("HTML","CSS","WORDPRESS","LARABEL");
	$object = new ArrayObject($arr);
	$object -> append("Spring");
	$iterator = $object->getIterator();
	while($iterator->valid()){
		echo $iterator->current()."<br/>";
		$iterator->next();
	}
?>