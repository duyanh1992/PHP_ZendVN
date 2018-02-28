<?php
$dbHost = 'localhost';
$dbName = 'vietproshop';
$dbUser = 'root';
$dbPass = '';

if(isset($_GET['pos']) && isset($_GET['item'])){
	$pos = $_GET['pos'];
	$item = $_GET['item'];
}

// connect to DB:
$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// write sql statement:
$sql = "SELECT * FROM thanhvien LIMIT $pos,$item";

//set utf-8:

$charset = mysqli_set_charset( $con, 'utf8');

// query to DB:
$query = mysqli_query($con, $sql);

// get result:
$members = '';
while($row = mysqli_fetch_assoc($query)){
	$members .=  '<div class="box" style="border : 1px solid black">
			<p>id: '.$row['id_thanhvien'].'</p>
			<p>Tài khoản : '.$row['tai_khoan'].'</p>
			<p>Mật khẩu : '.$row['mat_khau'].'</p>
		</div>';
}
echo $members;
?>