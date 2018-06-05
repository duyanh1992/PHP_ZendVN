<?php
class Fraction{
	public $numerator;
	public $denominator;
	
	public function __construct($nume,$deno){
		$this->numerator = $nume;
		$this->denominator = $deno;
	}
	
	public function showFraction(){
		echo 'Fraction : '.$this->numerator.'/'.$this->denominator."<br />";
	}
	
	public function getHighestCommonDivisor(){
		//get highest common divisor:
		//if($this->denominator != 0 && $this->numerator != 0){
			//echo "numerator : ".$this->numerator."<br />";
			//echo "denominator : ".$this->denominator."<br />";
			$this->numerator = (int)$this->numerator;
			$this->denominator = (int)$this->denominator;
			//var_dump($this->numerator);
			//var_dump($this->denominator);
			//die();
			$min = min(array($this->denominator,$this->numerator));
			while($min>0){
				if(($this->numerator%$min == 0) && ($this->denominator%$min == 0)){
					return $min;
				}
				$min--;
			}
		//}
		//else{
			//return "ERROR";
		//}
	}
	
	public function reduceFraction(){
		$min = $this->getHighestCommonDivisor();
		//echo "<br />";
		// get fraction after reducing:
		echo ($this->numerator/$min).'/'.($this->denominator/$min)."<br />";
	}
	
	public function plusFraction($frac2){
		$this->numerator = ($this->numerator*$frac2->denominator)+($this->denominator*$frac2->numerator)."<br />";
		$this->denominator =($this->denominator*$frac2->denominator)."<br />";
		$this->reduceFraction();
	}
	
	public function subFraction($frac2){
		//echo $this->numerator."<br />";
		//echo $frac2->denominator."<br />";
		//echo $this->denominator."<br />";
		//echo $frac2->numerator."<br />";
		$this->numerator = ($this->numerator*$frac2->denominator)-($this->denominator*$frac2->numerator)."<br />";
		$this->denominator =($this->denominator*$frac2->denominator)."<br />";
		$this->reduceFraction();
	}
}
?>