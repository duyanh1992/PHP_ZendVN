<?php
require('functions.php');

if($_POST['itemPerPage'] != null && $_POST['page'] != null){
	$itemPerPage = $_POST['itemPerPage'];
	$page = $_POST['page'];
	
	$allData = getAllData();
	$totalItem = count($allData);
	$totalPage = ceil($totalItem/$itemPerPage);
	$start = ($page-1)*$itemPerPage;
	
	$dataSection = getElements($allData, $start, $itemPerPage);
	
	// $xhtml = '';
	// $xhtml.= '<div class="container"><div class="row">';
	
	// foreach($dataSection as $k=>$v){
		// $xhtml.= '<div class="col-md-3 text-center prd">
					// <img src="images/'.$v['anh_sp'].'" alt="" width="150px" height="200px"/>
					// <p><b>'.$v['ten_sp'].'</b></p>
					// <p style="color:red; font-weight:bold;">'.$v['gia_sp'].'</p>
				// </div>';
	// }
	
	// $xhtml.= '</div></div>';
	//echo $xhtml;
	
	$result = array();
	//$result['xhtml'] = $xhtml;
	$result['totalPage'] = (int)$totalPage;
	$result['page'] = (int)$page;
	echo json_encode($result);
}
?>