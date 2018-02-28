<?php
$arr = array(
			'php'=>'PHP course',
			'javascript'=>'JAVASCRIPT course',
			'html_css'=>'HTML_CSS course'
		);
		
if(isset($_GET['key'])){
	echo $arr[$_GET['key']];
}
?>