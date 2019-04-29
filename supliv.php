<?PHP
include "livraisonC.php";
include "livraison.php";

if(isset($_POST['id']) )
	{
	$id=$_POST['id'];
	
	$livraison= new livraisonC();
	$livraison->supprimer($id);
	header("Location:afficherliv.php");
}	

?>