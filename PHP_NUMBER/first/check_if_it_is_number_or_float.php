<?php
$a = 1;
if(is_numeric($a)){
	echo "It's a number";
}
else{
	echo "It's not a number";
}

$a = 3.3;
if(is_int($a)){
	echo "It's a int";
}
else{
	echo "It's not a int";
}

$a = 3/4;
if(is_float($a)){
	echo "It's a float";
}
else{
	echo "It's not a float";
}
?>