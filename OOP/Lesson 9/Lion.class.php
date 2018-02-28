<?php  
require_once('Cat.class.php');
class Lion extends Cat{
	public $weight = '50kg';

	public function getAllAttr(){
		parent::getAllAttr();
		echo 'Lion';
	}
}
?>