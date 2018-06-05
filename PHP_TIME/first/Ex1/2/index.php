<?php
// Hiển thị ngày tháng dạng: 01:57 PM Thứ 3, ngày 18/06/2013:
//Get time now:
$date = date('G:i A D, \n\g\à\y d/m/Y', time());
//Replace day of week:
$arrEn = array('Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun');
$arrVi = array('Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7','Chủ Nhật');
$date = str_replace($arrEn, $arrVi, $date);
echo $date;
?>