<?php  
class Sample{
	static $a = 1000;

	static public function showInfo(){
		echo "<h2>show info</h2>";
	}
}

$sample = new Sample();
//echo $sample->a;
echo "<br />";

$sample->showInfo();
?>