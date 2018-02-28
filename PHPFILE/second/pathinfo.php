<?php
$path = 'http://localhost/PHP_ZendVN/PHPFILE/second/basename.php';
$pathinfo = pathinfo($path);

echo "<pre>";
print_r($pathinfo);				
echo "</pre>";

/*Array
(
	[dirname] => http://localhost/PHP_ZendVN/PHPFILE/second
	[basename] => basename.php
	[extension] => php
	[filename] => basename
)*/
?>