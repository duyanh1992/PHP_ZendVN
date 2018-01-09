<?php
$fileName = 'files/2.txt';
if(file_exists($fileName)){
	echo 'Exist';
}
else{
	echo 'Not exist !!!';
}
?>