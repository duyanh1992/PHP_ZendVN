<?php  
require_once('Lion.class.php');
$arrLionA = array(
				'name'=>'Michael',
				'eye_color'=>'pink'
			);

// Create new object:
$lion_a = new Lion($arrLionA);
$lion_a->getAllAttr();
?>