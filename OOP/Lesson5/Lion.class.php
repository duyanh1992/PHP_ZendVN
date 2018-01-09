<?php  
require_once('Cat.class.php');
class Lion extends Cat{
	public $weight = '50kg';

	public function getAllAttr(){
		echo $this->eye_color."<br />";
		echo $this->name."<br />";
		echo $this->weight."<br />";
	}
}
?>