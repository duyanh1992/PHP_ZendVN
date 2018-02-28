<?php
$filename = 'files/abc.txt';

//Check file type:
echo $type = filetype($filename)."<br />";

//Check file size:
echo $size = filesize($filename);
?>
