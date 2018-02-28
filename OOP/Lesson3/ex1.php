<?php  
require_once('Cat.class.php');
$arrCatA = array(
				'name'=>'Cat1',
				'eye_color'=>'sky-blue'
			);

// Create new object:
$cat_a = new Cat($arrCatA);
$cat_a->getAllAttr();
?>