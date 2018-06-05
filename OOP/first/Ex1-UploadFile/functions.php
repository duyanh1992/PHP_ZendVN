<?php
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

function checkSize($file_size, $min_size, $max_size){
	$flag = false;
	if(($file_size > $min_size) && ($file_size < $max_size)){
		$flag = true;
	}
	return $flag;
}

function checkExtension($fileExtension, $arrExtension){
	if(in_array($fileExtension, $arrExtension)){
		return true;
	}
	return false;
}
?>
