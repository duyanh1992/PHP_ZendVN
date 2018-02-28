<?php  
class Cat{
	public $eye_color;
	public $name;

	public function setName($cat_name){
		$this->name = $cat_name;
	}

	public function getName(){
		return $this->name;
	}

	public function getAllAttr(){
		echo $this->getName();
	}
}
?>