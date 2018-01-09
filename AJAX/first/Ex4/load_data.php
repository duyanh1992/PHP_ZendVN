<?php  
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'Vietproshop';

// connect to DB:
$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (mysqli_connect_errno()) {
	echo "FAILED to connect: ".mysqli_connect_error();
}

// set utf-8:
mysqli_set_charset($con, 'utf8');

//fetch data:
$sql = 'SELECT * FROM sanpham';
$query = mysqli_query($con, $sql);
$arrData = mysqli_fetch_all($query, MYSQLI_ASSOC);

function getlements($arr, $pos, $amount){
	$arr = array_slice($arr, $pos, $amount);
	return $arr;
}
//echo "<pre>";
$arrData = getlements($arrData, $_POST['pos'], $_POST['amount']);
//echo "</pre>";

if (!empty($arrData)) {
	$xhtml = '';

	foreach($arrData as $k=>$v){
		$xhtml .= '<div class="col-md-3 text-center" id="film-info">
						<img src="../images/'.$v['anh_sp'].'" alt="" width="100px" height="200px">
						<p>
							<b style="color:red;">'.$v['ten_sp'].'</b><br />
							<b>'.$v['bao_hanh'].'</b>
						</p>
					</div>';
	}

	echo $xhtml;
}
?>