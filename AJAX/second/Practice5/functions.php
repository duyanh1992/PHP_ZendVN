<?php
function getAllData(){
	// Get data from Database:
		//Connect to DB:
	$con = mysqli_connect('localhost', 'root', '', 'vietproshop');
	$set_lang = mysqli_set_charset($con,'utf8');

		// Query DB:
	$sql = 'SELECT * FROM sanpham';	
	$query = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($query)){
		$data[] = $row;
	}
	return $data;
}

function getElements($arr, $start, $itemPerPage){
	$data = array_slice($arr, $start, $itemPerPage);
	return $data;
}

?>