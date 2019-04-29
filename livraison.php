<?php 
 class livraison {

  private $id_livraison;
	private $username;
	private $numero;
  private $date;
  private $adresse;
  private $etat;
  private $region;
	
   
      public function __construct()
  {

  }
	public function getid_livraison()
	{
		return $this->id_livraison;
	}
	public function setid_livraison($id_livraison)
	{
		$this->id_livraison=$id_livraison;
	}
  public function getusername()
  {
    return $this->username;
  }
  public function setusername($username)
  {
    $this->username=$username;
  }
  public function getregion()
  {
    return $this->username;
  }
  public function setregion($region)
  {
    $this->username=$username;
  }
  public function getnumero()
  {
    return $this->numero;
  }
  public function setnumero($numero)
  {
    $this->numero=$numero;
  }

  public function getdate()
  {
    return $this->date;
  }
  public function setdate($date)
  {
    $this->date=$date;
  }
	

  public function getadresse()
  {
    return $this->adresse;
  }
  public function setadresse($adresse)
  {
    $this->adresse=$adresse;
  }
  

  public function getetat()
  {
    return $this->etat;
  }
  public function setetat($etat)
  {
    $this->etat=$etat;
  }
 
	
}

?>