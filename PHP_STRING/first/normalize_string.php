<?php
$str = '   Our          course           is      PHP';
$str = trim($str);
$arr = explode(' ', $str);
echo "<pre>";
print_r($arr);
echo "</pre>";

foreach($arr as $k=>$v){
	if($v == null){
		unset($arr[$k]);
	}
}

echo "<pre>";
print_r($arr);
echo "</pre>";

$newStr = implode(' ', $arr);
var_dump($newStr);
?>