<?php
echo "Old array: ";
$arr = array('one'=>'HTML','tWo'=>'CSS','THree'=>'PHP');
print_r($arr);  			//('one'=>'HTML','tWo'=>'CSS','THree'=>'PHP')
echo "<br />";

echo "New array: ";
$newArr = array_change_key_case($arr, CASE_UPPER);
print_r($arr);			//('ONE'=>'HTML','TWO'=>'CSS','THREE'=>'PHP')

// Nếu muốn chuyển các key về dạng lowercase thì bỏ đi giá trị CASE_UPPER


?>