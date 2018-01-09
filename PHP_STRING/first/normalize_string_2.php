<?php
$str =  '     pHAm    DUy       anH    ';

echo $str."<br />";

$str = strtolower($str);
echo "Step 1 : Convert whole string to lowercase : ".$str."<br />";

$str = trim($str);
echo "Step 2 : Cut space at the end and the begining of string : ".$str;
echo "<br />";

$arr2 = array();
$arr2 = explode(' ',$str);

foreach($arr2 as $k=>$v){
	if($v == null){
		unset($arr2[$k]);
	}
}

foreach($arr2 as $k=>$v){
	ucfirst($v);
}

$str = implode(' ',$arr2);
echo "Step 3 : Cut space at the end and the begining of string : ".$str."<br />";

$str = ucwords($str);
echo "Step 3 : Upper the first character of per word: ".$str;
?>