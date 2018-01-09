<?php
$course = array();
$course[0] = array('id'=>1, 'name'=>'PHP');
$course[1] = array('id'=>2, 'name'=>'HTML/CSS');
				
if(isset($_POST['key'])){
	$result = $course[$_POST['key']];
	echo json_encode($result); //convert array to JSON
}
?>