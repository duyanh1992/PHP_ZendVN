<?php
require('functions.php');
// echo "<pre>";
// print_r($_FILES['file_upload']);
// echo "</pre>";

if(($_FILES['file_upload']['name']) != ''){
	// Read config file:
	$conditions = parse_ini_file('config.ini');
	// echo '<pre>';
	// print_r($conditions);
	// echo '</pre>';
	
	$min_size = $conditions['min_size'];
	$max_size = $conditions['max_size'];
	$strExtension = $conditions['extension'];
	$arrExtension = explode('|',$strExtension);
	
	// Check conditions:
		//Check if the file size is between 50KB and 3MB?
				$checkSize = checkSize($_FILES['file_upload']['size'], $min_size, $max_size);
				
		
		//Check if the file extension is jpg |png |jpeg ?
			// Get file extension:
				$fileInfo = pathinfo($_FILES['file_upload']['name']);
				$fileExtension = $fileInfo['extension'];
				$checkExtension = checkExtension($fileExtension, $arrExtension);
		
		if($checkSize && $checkExtension){
			// Upload file:
			//Step 1 : Get file data
				$ramdom_string = ramdomStr(10);
				$fileName = $ramdom_string.'_'.$_FILES['file_upload']['name'];
				$tmpName = $_FILES['file_upload']['tmp_name'];
		
			// Step 2: upload file into destination folder:
				$destinationUrl = 'img';
				move_uploaded_file($tmpName, $destinationUrl.'/'.$fileName);
		}	
		else{
			echo 'Check your file again !!!';
		}
}
?>