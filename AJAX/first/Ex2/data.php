<?php
$actor = array();
$actor[0] = array('id'=>1,'name'=>'Giả Tịnh Văn', 'country_id'=>'taiwan');
$actor[1] = array('id'=>2,'name'=>'Tô Hữu Bằng', 'country_id'=>'taiwan');
$actor[2] = array('id'=>3,'name'=>'Tăng Hoan Đình', 'country_id'=>'taiwan');
$actor[3] = array('id'=>4,'name'=>'Lý Bảo Điền', 'country_id'=>'china');
$actor[4] = array('id'=>5,'name'=>'Thẩm Ngạo Quân', 'country_id'=>'china');
$actor[5] = array('id'=>6,'name'=>'Lý Minh Thuận', 'country_id'=>'singapore');
$actor[6] = array('id'=>7,'name'=>'Phạm Văn Phương', 'country_id'=>'singapore');

$xhtml = "<option value='0' selected='selected'>Chọn diễn viên</option>";
foreach($actor as $k=>$v){
	if($v['country_id'] == $_GET['idCou']){
		$xhtml .=  "<option value='$v[country_id]'>$v[name]</option>";
	}
}
echo $xhtml;
?>