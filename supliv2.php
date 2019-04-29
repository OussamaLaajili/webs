<?PHP

include "livC.php";
include "liv.php";

if(isset($_POST['cin']) )
	{
	$cin=$_POST['cin'];
	
	$liv= new livC();
	$liv->supprimer($cin);
	header("Location:afficherliv.php");
}	
?>