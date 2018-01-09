<?php
$str = 'PHP course !';
echo strlen($str);
var_dump($str);
echo "<br />";

$str = 'Phạm Duy Anh !';
echo mb_strlen($str,"UTF-8");
var_dump($str);
echo "<br />";
?>