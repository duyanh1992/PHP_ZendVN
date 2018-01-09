<?php
//Normal way:
  // function factorial($num){
  //   $gt = 1;
  //   if ($num>1) {
  //     for ($i=1; $i <= $num; $i++) {
  //         $gt *= $i;
  //     }
  //   }
  //   return $gt;
  // }
  // echo factorial(4)."<br />";

  function sum($n){
    $sum = 0;
    if ($n >= 1) {
      $sum = sum($n-1) + $n;
    }
    return $sum;
  }

// Recursive way:
// function factorial($num){
//   $gt = 1;
//   if ($num>1) {
//     $gt = $num *factorial($num-1);
//   }
//   return $gt;
// }
//echo factorial(4)."<br />";
echo sum(5)."<br>";
?>
