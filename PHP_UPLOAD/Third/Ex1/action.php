<?php
// echo "<pre>";
// print_r($_FILES['file_upload']);
// echo "</pre>";

function ramdomStr($length){
	// Create a new array including characters form a to z, A to Z, and 0 to 9 
	$arr_char = array_merge(range('a','z'), range('A','Z'), range('0','9')); 
	
	// Convert that arr to string:
	$arr_str = implode($arr_char, '');
	
	// Shuffle that string:
	$arr_str = str_shuffle($arr_str);
	
	//Cut that string by $length (requested from outside):
	$arr_str = substr($arr_str, 0, $length);
	return $arr_str;
}

if(count($_FILES['file_upload']) > 0){
	// Upload file:
		//Step 1 : Get file data
		$ramdom_string = ramdomStr(10);
		$fileName = $ramdom_string.'_'.$_FILES['file_upload']['name'];
		$tmpName = $_FILES['file_upload']['tmp_name'];
	
		// Step 2: upload file into destination folder:
		$destinationUrl = 'img';
		move_uploaded_file($tmpName, $destinationUrl.'/'.$fileName);
}
?>