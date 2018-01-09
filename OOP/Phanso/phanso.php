<?php  
require_once('Phanso.class.php');
$ps = new Phanso(4,7);
$ps2 = new Phanso(5,3);
echo "Phân số đã nhập : ".$ps->showPS();
echo "<br />";

echo "Phân số đã rút gọn : ".$ps->rutGonPS();
echo "<br />";
echo "Tổng 2 phân số : ".$ps2->tongPS($ps);
echo "<br />";
echo "Hiệu 2 phân số : ".$ps2->hieuPS($ps);
echo "<br />";
echo "Tích 2 phân số : ".$ps2->tichPS($ps);
echo "<br />";
echo "Thương 2 phân số : ".$ps2->thuongPS($ps);
?>