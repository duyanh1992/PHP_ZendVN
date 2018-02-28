<?php
$actor = array();
$actor[0] = array('id'=>1,'name'=>'Giả Tịnh Văn', 'country_name'=>'taiwan');
$actor[1] = array('id'=>2,'name'=>'Tô Hữu Bằng', 'country_name'=>'taiwan');
$actor[2] = array('id'=>3,'name'=>'Tăng Hoan Đình', 'country_name'=>'taiwan');
$actor[3] = array('id'=>4,'name'=>'Lý Bảo Điền', 'country_name'=>'china');
$actor[4] = array('id'=>5,'name'=>'Thẩm Ngạo Quân', 'country_name'=>'china');
$actor[5] = array('id'=>6,'name'=>'Lý Minh Thuận', 'country_name'=>'singapore');
$actor[6] = array('id'=>7,'name'=>'Phạm Văn Phương', 'country_name'=>'singapore');

if(isset($_GET['country'])){
	$country = $_GET['country'];
	
	$actorName = '<option value="0">Chọn diễn viên</option>';
	foreach($actor as $k=>$val){
		if($val['country_name'] == $country){
			$actorName .= '<option value="'.$val['country_name'].'">'.$val['name'].'</option>';
		}
	}
	echo $actorName;
}
?>