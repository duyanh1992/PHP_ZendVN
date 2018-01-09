<?php
$source = 'FILES/def.txt';
$destination = 'des.txt';
if(copy($source, $destination) == TRUE){
  echo 'SUCCESS';
}
?>
