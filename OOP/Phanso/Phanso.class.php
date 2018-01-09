<?php  
class Phanso{
	// Thuộc tính:
	public $tu_so;
	public $mau_so;

	//Phương thức:
	public function __construct($tu_so, $mau_so){
		$this->tu_so = $tu_so;
		$this->mau_so = $mau_so;
	}
		//Show phân số
	public function showPS(){
		return $this->tu_so . '/' . $this->mau_so;
	}

		// Rút gọn phân số:
	public function rutGonPS(){
		$ucln = $this->UCLN($this->tu_so, $this->mau_so);
		$tu_so_moi = $this->tu_so / $ucln;
		$mau_so_moi = $this->mau_so / $ucln;
		return $tu_so_moi . '/' . $mau_so_moi;
	}

	public function tongPS($phso){
		$tu_so_moi = ($this->tu_so*$phso->mau_so+$this->mau_so*$phso->tu_so);

		$mau_so_moi = $phso->mau_so*$this->mau_so;

		return $tu_so_moi . '/' . $mau_so_moi;
	}

	public function hieuPS($phso){
		$tu_so_moi = ($this->tu_so*$phso->mau_so - $this->mau_so*$phso->tu_so);

		$mau_so_moi = $phso->mau_so*$this->mau_so;

		return $tu_so_moi . '/' . $mau_so_moi;
	}

	public function tichPS($phso){
		$tu_so_moi = ($this->tu_so * $phso->tu_so);

		$mau_so_moi = $phso->mau_so*$this->mau_so;

		return $tu_so_moi . '/' . $mau_so_moi;
	}

	public function thuongPS($phso){
		$tu_so_moi = ($this->tu_so * $phso->mau_so);

		$mau_so_moi = $phso->tu_so*$this->mau_so;

		return $tu_so_moi . '/' . $mau_so_moi;
	}

	// Tìm UCLN:
	private function UCLN($a, $b){
		$min = min(array($a, $b));
		while($min>0){
			if(($a%$min == 0) && ($b%$min == 0)) return $min;
			$min--;
		}
	}	
}
?>