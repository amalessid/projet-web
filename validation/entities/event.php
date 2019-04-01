<?PHP
class Event
{
	private $id;
	private $titre;
	private $deb;
	private $fin;
	private $cap;
	private $des;
	private $image;
	
	function __construct($id,$titre,$deb,$fin,$cap,$des,$image)
	{
		$this->id=$id;
		$this->deb=$deb;
		$this->fin=$fin;
		$this->cap=$cap;
		$this->des=$des;
		$this->image=$image;
		$this->titre=$titre;
		
    }
	
	function get_id_eve()
	{
		return $this->id;
	}
	function get_deb_eve()
	{
		return $this->deb;
	}
	function get_fin_eve()
	{
		return $this->fin;
	}
	function get_cap()
	{
		return $this->cap;
	}


	function get_image()
	{
		return $this->image;
	}

	function get_titre()
	{
		return $this->titre;
	}


	function get_des()
	{
		return $this->des;
	}
	
	/* setters */

	function set_deb_eve($deb){
		$this->deb=$deb;
	}
	function set_fin_eve($fin){
		$this->fin=$fin;
	}
	function set_cap($cap){
		$this->cap=$cap;;
	}
	function set_image($image){
		$this->image=$image;
	}
	function set_titre($titre){
		$this->titre=$titre;
	}
	function set_des($des){
		$this->des=$des;
	}


}

?>