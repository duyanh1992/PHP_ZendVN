<?php
$str = 'Pham Duy Anh';

echo $str."<br />";
echo 'substr(str,2) : '.substr($str, 2);			//am Duy Anh
echo "<br />";

echo 'substr(str,2, 4) : '.substr($str, 2, 4);		//am D
echo "<br />";

echo 'substr(str,2, 4) : '.substr($str, 2, 4);		//am D
echo "<br />";

echo 'substr(str, -2) : '.substr($str, -2);		// nh
echo "<br />";

echo 'substr(str, -3, 2) : '.substr($str, -3, 2);		// An
echo "<br />";
?>