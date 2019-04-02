<?PHP
include "../core/livraisonC.php";
include "../entities/livraison.php";
if(isset($_GET['id']) )
	{
	$id=$_GET['id'];
	
	$livraison= new livraisonC();
	$livraison->supprimer($id);
	header("Location:afficherliv.php");
}	

?>