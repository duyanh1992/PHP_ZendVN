<?php
function checkSize($size, $minSize, $maxSize){
  $flag = false;
  if ($size>=$minSize && $size<=$maxSize) $flag = true;
  return $flag;
}

function checkExtension($fileName, $arr){
  $flag = false;
  $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  if (in_array(strtolower($extension), $arr) == true) $flag = true;
  return $flag;
}
?>
