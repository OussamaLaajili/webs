<?php
include_once "/config.php";



class livraisonC{

	

function afficher()
      {
      	$sql="select * from livraison where etat='non '";
      	$db=config::getConnexion();
        
        try{

      	$liste=$db->query($sql);
      	return $liste;
      }catch(Exception $e){
      	die('erreur');
      }}



function afficher_une_livraison()

{
	$c = Config::getConnexion();
	$id=$_POST['id_livraison'];

		try {
			$li=$c->query("SELECT * FROM livraison WHERE id=".$id);
			return $li;
			
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
			
		}	

}

 function supprimer($id_livraison){

  $sql="DELETE FROM livraison WHERE id='".$id_livraison."' ";
  $db= config::getConnexion();
  $db->query($sql);
   }

    function modifier_liv()
	{
		if(isset($_POST['id_livraison'])){
  $id_livraison=$_POST['id_livraison'];
  
    $etat=$_POST['etat'];
  $sql="UPDATE livraison SET etat='$etat' WHERE id='$id_livraison'";
	$db=config::getConnexion();
	  $db->query($sql);
	  
       

}
	}



	

}
?>