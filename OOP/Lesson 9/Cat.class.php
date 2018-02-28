<?php  
class Cat{
	public $eye_color;
	public $name;
	public $weight = '30kg';

	public function __construct($eye_color, $name)
	{
		$this->eye_color = $eye_color;
		$this->name = $name;
	}

	public function setName($cat_name){
		$this->name = $cat_name;
	}

	public function getName(){
		return $this->name;
	}

	public function getAllAttr(){
		echo $this->eye_color."<br />";
		echo $this->name."<br />";
		echo $this->weight."<br />";
	}

	public function __destruct(){
		$_SESSION['userA'] = serialize($this);
	}
}
?>