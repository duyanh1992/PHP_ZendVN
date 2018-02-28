<?php
require_once('Fraction.class.php');
$frac = new Fraction(3,2);
$frac->showFraction();

$frac2 = new Fraction(2,3);
$frac2->showFraction();

//echo "<br />";
//$frac->reduceFraction();
//$frac2->reduceFraction();

//$frac->plusFraction($frac2);
$frac->subFraction($frac2);
?>