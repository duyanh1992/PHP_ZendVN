<?php
if(isset($_POST['username']) && isset($_POST['password'])){
	if(empty($_POST['username'])){
		echo 'FAILED !!!';
	}
}
?>