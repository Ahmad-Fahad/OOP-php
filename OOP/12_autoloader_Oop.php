<?php
function __autoload($cls){
		include $cls.'.php';
	}

$java  = new java;
$ruby  = new ruby;
$perl  = new perl;

?>