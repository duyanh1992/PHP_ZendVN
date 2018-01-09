<?php  
function __autoload($filename){
	$path = '/class/';
	require_once($path."{$filename}.class.php");
}

$cat_a = new Cat('yellow', 'Bubba');
$cat_a->getAllAttr();
?>