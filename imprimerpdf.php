<?php
/*
 * Générer un PDF à partir d'une base de données
 */

//require('../config.php');

/*
 * Début de la temporisation de sortie
 */
 include "../core/livraisonC.php";
include "../entities/livraison.php";

$id=$_GET['id'];
  $livraison=new livraisonC();
$listeliv=$livraison->afficher_une_livraison($id);
$liste=$listeliv->fetchALL();
//var_dump($liste);


foreach ($liste as $ligns) 
	{   
			
		
			}

?>

<page backtop="5%" backbottom="5%" backleft="5%" backright="5%">
    
    <h1 style="text-align:center; color: #D1B606;">LIVRAISON</h1>
    <h2>Nous soussignés, déclarons que :
        </h2><h3>
 Nous reconnaissons que le coulier a ete livrer avec sucess</h3>
<h5>id livraison :<?php echo $ligns['id']; ?></h5>
<h5>Nom : <?php echo $ligns['id_client']; ?> </h5>
<h5>signiature : </h5>

        
        
</page>

<?php

/*
 * $content récupére toutes les données mises en mémoire. 
 */

$content = ob_get_clean();

require_once dirname(__FILE__).'/html2pdf/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

/*
 * On instancie notre constructeur
 * On affiche le contenu
 * On génére notre PDF 
 */
$src="/logo.jpg";
$pdf = new HTML2PDF('P','A4','fr','true','UTF-8');
//$pdf->setImage($src);
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('livraison.pdf');

?>