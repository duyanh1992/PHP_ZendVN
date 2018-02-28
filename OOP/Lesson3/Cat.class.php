<?php  
class Cat{
	public $eye_color;
	public $name;

	// Create Construct:
		// Default construct:
	/*public function __construct()
	{
		$this->eye_color = 'Red';
		$this->name = 'Kitty';	
	}*/

		//Construct params
	/*public function __construct($eye_color = 'black', $name = 'Doraemon')
	{
		$this->eye_color = $eye_color;
		$this->name = $name;	
	}
	*/

		//Construct array:
	public function __construct($arrCatA)
	{
		$this->eye_color = $arrCatA['eye_color'];
		$this->name = $arrCatA['name'];
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
	}
}
?>