<?php
$dbHost = 'localhost';
$dbName = 'testajax';
$dbUser = 'root';
$dbPass = '';
$pos = $_GET['pos'];
$item = $_GET['item'];

// connect to DB:
$con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// write sql statement:
$sql = "SELECT * FROM news LIMIT $pos,$item";

//set utf-8:

$charset = mysqli_set_charset( $con, 'utf8');

// query to DB:
$query = mysqli_query($con, $sql);

// get result:
$xhtml = "";
while($row = mysqli_fetch_assoc($query)){
	$xhtml .= '<div class="box"><h3>'.$row['title'].'</h3><p>'.$row['description'].'</p></div>';
}
echo $xhtml;
?>