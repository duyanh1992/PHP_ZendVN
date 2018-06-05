<?php  
require_once('Cat.class.php');
$cat_a = new Cat('yellow', 'Bubba');


echo "<hr />";

$cat_b = clone $cat_a;
$cat_b->setName('Doraemon');
$cat_b->getAllAttr();
echo "<hr />";
$cat_a->getAllAttr();
?>