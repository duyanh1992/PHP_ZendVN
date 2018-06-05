<html>
<body>
<?php
$now = time();
// echo "<pre>";
// print_r($now);
// echo "</pre>";

$date = date('H:i A D, d/m/Y', $now);
echo $date."<br />";

$arrEng = array('Mon', 'Tue', 'Wed', 'Thus', 'Fri', 'Sat', 'Sun');
$arrVi = array('Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật');
$date = str_replace($arrEng, $arrVi, $date);
echo '=>'.$date;
?>	
</body>
</html>