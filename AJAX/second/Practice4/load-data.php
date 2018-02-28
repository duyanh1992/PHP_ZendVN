<?php
require_once('functions.php');

if(isset($_POST['pos'])){
	$pos =  $_POST['pos'];
}
$data = getAllData();
$dataSection = getDataSection($data, $pos, 4);

if (!empty($dataSection)) {
	$xhtml = '<div class="container"><div class="row">';
	foreach($dataSection as $item){
		$xhtml .= '<div class="col-md-3 text-center prd">
						<img src="../images/'.$item['anh_sp'].'" alt="" width="150px" height="200px"/>
						<p><b>'.$item['ten_sp'].'</b></p>
						<p style="color:red; font-weight:bold;">'.$item['gia_sp'].'</p>
				   </div>';
	}
	$xhtml.= '</div></div>' ;
	echo $xhtml;
}
?>