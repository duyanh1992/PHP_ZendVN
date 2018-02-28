<?php
$arr = array('one'=>'HTML','tWo'=>'CSS','THree'=>'PHP');

//Check key exists:
$key_exists = array_key_exists('THree', $arr);
echo $key_exists;			// 1
?>