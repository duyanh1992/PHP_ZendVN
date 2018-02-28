<?php
$arr = array();
$arr[0] = array('name'=>'Duy Anh', 'age'=>'26');
$arr[1] = array('name'=>'Carrick', 'age'=>'36');
$arr[2] = array('name'=>'Rooney', 'age'=>'32');

if(isset($_POST['key'])){
	$response = json_encode($arr[$_POST['key']]);
	echo $response;
}
?>