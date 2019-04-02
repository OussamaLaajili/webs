<?php
include_once "../config.php";



class livC{

	
    function afficher($region)
      {
      	$sql="select * from livruer WHERE region='".$region."' ";
      	$db=config::getConnexion();
        
        try{

      	$liste=$db->query($sql);
      	return $liste;
      }catch(Exception $e){
      	die('erreur');
      }}
	  function affecter($id,$cin)
      {			
      	
		

		$sql="UPDATE livruer SET idliv='".$id."' WHERE cin='".$cin."' ";
		
      	$db=config::getConnexion();
          $db->query($sql);
}

	  
	  function ajoutliv($liv){
		$req="INSERT INTO livruer(cin,nom,region,dispo) VALUES ('".$liv->get_cin()."','".$liv->get_nom()."','".$liv->get_region()."','".$liv->get_dispo()."')";
		
		$db=config::getConnexion();
		$db->query($req);
	}


function supprimer($cin){

  $sql="DELETE FROM livruer WHERE cin='".$cin."' ";
  $db= config::getConnexion();
  $db->query($sql);
   }
function modifier($cin)
	{
		
  
			$dispo='non';
			$sql="UPDATE livruer SET dispo='$dispo' WHERE cin='".$cin."' ";
			echo $sql;
				
	$db=config::getConnexion();
	  $db->query($sql);
	  
       

}


}
?>