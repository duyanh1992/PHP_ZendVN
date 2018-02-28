<?php
$arr = array('one'=>'HTML','tWo'=>'CSS','THree'=>'PHP', 'four'=>'NODEJS');
$newArr = array(1,2,3,4,5);
print_r($arr);  			
echo "<br />";

// Way 1:
$arr1 = array_slice($arr, 1);
print_r($arr1);  				//( [tWo] => CSS [THree] => PHP [four] => NODEJS ) 	
echo "<br />";

// Way 2:
$arr2 = array_slice($arr, 1, 2);
print_r($arr2);  				//( [tWo] => CSS [THree] => PHP ) 
echo "<br />";

//Way 3:
$arr3 = array_slice($newArr, 1, 2, true);
print_r($arr3);  				//( [1] => 2 [2] => 3 ) 
echo "<br />";
?>