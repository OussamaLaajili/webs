<?php

class livreur{
	private $cin;
	private $nom;
	private $region;
	

	public function __construct($cin,$nom,$region)
        {
        	$this->cin=$cin;
        	$this->nom=$nom;
        	$this->region=$region;
        	
        }

    public function get_cin(){return $this->cin;}
    public function get_nom(){return $this->nom;}
      public function get_region(){return $this->region;}

 public function set_cin($cin){$this->cin=$cin;}
       public function set_nom($nom){$this->nom=$nom;}

    public function set_region($region){$this->region=$region;}
  
    
        
}

?>