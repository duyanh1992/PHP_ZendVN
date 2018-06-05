<?php  
class Sample{
	public $a = 'A';
	protected $b = 'B';
	private $c = 'C';

	//TRUY CAP TRONG CLASS:
	public function showInfo(){
		echo $this->a."<br />";
		echo $this->b."<br />";
		echo $this->c."<br />";
	}	
}

class Sample2 extends Sample{
	public function showInfo(){
		echo $this->a."<br />";
		echo $this->b."<br />";
		echo $this->c."<br />";
	}
}

// //TRUY CAP NGOAI CLASS
// $sample = new Sample();
// echo $sample->a."<br />";
// echo $sample->b."<br />";
// echo $sample->c."<br />";

$sample2 = new Sample();
$sample3 = new Sample2();
//$sample2->showInfo();
$sample3->showInfo();
?>
