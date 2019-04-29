<?php
include_once "/config.php";



class livC{

	
    function afficher()
      {
      	$sql="select * from livruer";
      	$db=config::getConnexion();
        
        try{

      	$liste=$db->query($sql);
      	return $liste;
      }catch(Exception $e){
      	die('erreur');
      }



}

	  
	  function ajoutliv($liv){
		$req="INSERT INTO livruer(cin,nom,region) VALUES ('".$liv->get_cin()."','".$liv->get_nom()."','".$liv->get_region()."')";
		
		$db=config::getConnexion();
		$db->query($req);
	}


function supprimer($cin){

  $sql="DELETE FROM livruer WHERE cin='".$cin."' ";
  $db= config::getConnexion();
  $db->query($sql);
   }
}
?>

