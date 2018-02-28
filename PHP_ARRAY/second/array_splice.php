<?php
$arr = array('one'=>'HTML','tWo'=>'CSS','THree'=>'PHP', 'four'=>'NODEJS');
$newArr = array(1,2,3,4,5);
print_r($arr);  			
echo "<br />";

// Way 1:
$arr1 = array_splice($arr, 2);
print_r($arr1);  				//( [THree] => PHP [four] => NODEJS ) 
echo "<br />";


// Way 2:
$arr2 = array_splice($arr, 0, 1);
print_r($arr2);  				// ( [one] => HTML ) 
echo "<br />";

// Way 3:
$arr3 = array_splice($arr, 0, 1, array(9,8,7,6,5));
print_r($arr3);  				// ( [tWo] => CSS ) 
echo "<br />";

print_r($arr);  				//  ( [0] => 9 [1] => 8 [2] => 7 [3] => 6 [4] => 5 ) 
echo "<br />";
?>