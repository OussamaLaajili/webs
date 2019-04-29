<?PHP
include "livC.php";
include "liv.php";

if(isset($_POST['cin'])&&($_POST['nom'])&&($_POST['region']))
	{
	$cin=$_POST['cin'];
	$nom=$_POST['nom'];
	if ($_POST['region'] == '1') {
   $region='ariana';
} else if ($_POST['region'] == '2') {
    $region='beja';
	}
	
	$liv=new livreur($cin,$nom,$region);
	$livAjout=new livC();
	$livAjout->ajoutliv($liv);
	header("Location:afficherliv.php");
}	

?>