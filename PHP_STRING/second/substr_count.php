<?php
$str = 'duy anh pham, pham duy anh';
echo substr_count($str, 'anh');				// 2

echo "<br />";
echo substr_count($str, 'anh', 7);			// 1
?>