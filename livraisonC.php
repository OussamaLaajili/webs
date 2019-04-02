<?php
include_once "../config.php";



class livraisonC{

	

function afficher()
      {
      	$sql="select * from livraison ";
      	$db=config::getConnexion();
        
        try{

      	$liste=$db->query($sql);
      	return $liste;
      }catch(Exception $e){
      	die('erreur');
      }
	  }

public static function chercherlivraison($id_livraison){

       $sql="SELECT * FROM livraison WHERE id_livraison='".$id_livraison."' ";
     try{

      	$liste=$db->query($sql);
      	return $liste;
      }catch(Exception $e){
      	die('erreur');
      }
	  }




 function supprimer($id){

  $sql="DELETE FROM livraison WHERE id='".$id."' ";
  $db= config::getConnexion();
  $db->query($sql);
   }

    function modifier_liv($id)
	{
		
  
			$etat='presque';
			$sql="UPDATE livraison SET etat='$etat' WHERE id='".$id."' ";
				
	$db=config::getConnexion();
	  $db->query($sql);
	  
       

}
function modifier_liv2($id)
	{
		
  
			$etat='oui';
			$sql="UPDATE livraison SET etat='$etat' WHERE id='".$id."' ";
			
	$db=config::getConnexion();
	  $db->query($sql);
	  
       

}


	function afficher_une_livraison($id)

{
	$c = Config::getConnexion();
	

		try {
			$li=$c->query("SELECT * FROM livraison WHERE id='".$id."'");
			
			return $li;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}	

}

	
}


	


?>