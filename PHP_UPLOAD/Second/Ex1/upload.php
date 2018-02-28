<?php
//upload file:
if($_FILES['file_upload']['name'] != null){
	$filename = $_FILES['file_upload']['tmp_name'];
	$destination = 'files/'.$_FILES['file_upload']['name'];
	move_uploaded_file($filename, $destination);
}
?>