<?php  
$foldername = 'files';
$filename = 'files/abc.php';
if (file_exists($filename)) {
	echo "YES";
}
else{
	echo "NO";
}
?>