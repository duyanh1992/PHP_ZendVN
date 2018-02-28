<?php
//Show size of file:
/*
	1KB = 1024 B
	1MB = 1024 KB
	1GB	= 1024 MB
	1TB = 1024 GB
*/

function showSize($filesize){
	$sizeArr = array('B', 'KB', 'MB', 'GB', 'TB');
	$length = count($sizeArr);
	for($i=0;$i<$length;$i++){
		if($filesize>1024){
			$filesize = $filesize/1024;
		}
		else{
			$unit = $sizeArr[$i];
			break;
		}
	}
	return $filesize.' '.$unit;
}
?>