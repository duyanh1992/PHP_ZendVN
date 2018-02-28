<?php
$path = 'files/1.txt';
echo $filenameWithExtension = basename($path)."<br />";				//1.txt
echo $filename = basename($path, '.txt');						//1
?>