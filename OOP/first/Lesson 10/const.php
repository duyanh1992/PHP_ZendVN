<?php  
class Sample{
	const number = 1000;

	public function showInfo(){
		echo "C1 : ".Sample::number."<br />";
		echo "C2 : ".self::number."<br />";
		echo "C3 : ".$this::number."<br />";
	}
}
$sample = new Sample();
//echo Sample::number;
$sample->showInfo();
?>