<?php 
function checkFileSize($fileSize, $minSize, $maxSize){
	if(($minSize<=$fileSize) && ($fileSize<=$maxSize)){
		return true;
	}
	return false;
}

function checkExtension($fileName, $arrExt){
	$fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
	if(in_array(strtolower($fileExt), $arrExt) == true){
		return true;
	}
	return false;
}
?>