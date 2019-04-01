<?PHP
class Promo{
	private $id_promo;
	private $deb_p;
	private $fin_p;
	private $taux;
	private $image;
	
	function __construct($id_promo,$deb_p,$fin_p,$taux,$image){
		$this->id_promo=$id_promo;
		$this->deb_p=$deb_p;
		$this->fin_p=$fin_p;
		$this->taux=$taux;
		$this->image=$image;
		
	}
	
	function get_id_promo(){
		return $this->id_promo;
	}
	function get_deb_p(){
		return $this->deb_p;
	}
	function get_fin_p(){
		return $this->fin_p;
	}
	function get_taux(){
		return $this->taux;
	}


	function get_image()
	{
		return $this->image;
	}
	

	function set_deb_p($deb_p){
		$this->deb_p=$deb_p;
	}
	function set_fin_p($fin_p){
		$this->fin_p=$fin_p;
	}
	function set_taux($taux){
		$this->taux=$taux;
	}
	function set_image($image){
		$this->image=$image;
	}


}

?>