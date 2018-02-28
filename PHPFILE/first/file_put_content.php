<?php
$path = 'files/put_content.txt';
$data = 'DEF';
//echo file_put_contents($path, $data, FILE_APPEND);

// Practice : Read a file, then delete 1 line and put result into that file:
$path2 = 'FILES/def.txt';
  // Read a file:
$data = file($path2);
print_r($data);
  // Delete the third one:
unset($data[2]);
  // Put result into the file:
file_put_contents($path2,$data);
?>
