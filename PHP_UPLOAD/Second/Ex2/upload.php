<?php
require_once('uploadFunction.php');
$configInfo = parse_ini_file('config.ini');

//Check file size:
$checkSize = checkFileSize($_FILES['file_upload']['size'], $configInfo['min_size'], $configInfo['max_size']);

//Check file extension:
$checkExt = checkExtension($_FILES['file_upload']['name'], explode('|', $configInfo['extension']));

if($checkExt && $checkSize){
	$destination = 'files/'.$_FILES['file_upload']['name'];
	move_uploaded_file($_FILES['file_upload']['tmp_name'], $destination);
}
else{
	echo "NO";
}
?>