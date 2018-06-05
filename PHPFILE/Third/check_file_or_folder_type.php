<?php
	$url = './test/';
	if(file_exists($url)){
		echo filetype($url);
	}
	
	echo "<br />";
	
	if(file_exists($url.'test.php')){
		echo filetype($url.'test.php');
	}
?>