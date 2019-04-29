<head>
<title>Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        Access Univers
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

    
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->

<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a  href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span>Client</span>
                    </a>
                    <ul class="sub">
						<li><a >Ajouter un client </a></li>
						<li><a >Supprimer un client</a></li>
						<li><a >Modifier un client </a></li>
						<li><a >Consulter les clients</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Produit</span>
                    </a>
                    <ul class="sub">
						<li><a href="ajoutproduit.html">Ajouter un produit </a></li>
						<li><a href="supproduit.html">Supprimer un produit</a></li>
						<li><a href="modifierproduit.html">Modifier un produit </a></li>
						<li><a href="afficherproduit.html">Consulter les produits</a></li>
                        
                    </ul>
                </li>
               
               <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Commande</span>
                    </a>
                    <ul class="sub">
						<li><a >Ajouter une commande </a></li>
						<li><a >Supprimer une commande</a></li>
						<li><a >Modifier une commande </a></li>
						<li><a >Consulter les commandes</a></li>
                        
                    </ul>
                </li>
				<li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Livraison\Livreur</span>
                    </a>
                    <ul class="sub">
						<li><a href="ajoutlivreur.html">Ajouter un livreur </a></li>
						<li><a href="suplivreur.html" >Supprimer une livraison</a></li>
						<li><a href="midifier.php">Modifier une livraison </a></li>
						<li><a class="active" href ="afficherliv.php">Consulter les livraisons\Livreur</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>SAV/Réclamation</span>
                    </a>
                    <ul class="sub">
						<li><a >Ajouter une réclamation </a></li>
						<li><a >Supprimer une réclamation</a></li>
						<li><a >Modifier une réclamation </a></li>
						<li><a >Consulter les réclamations</a></li>
                        
                    </ul>
                </li>
               
            </ul>            
		</div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--main content start-->

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Liste des Livraisons
    </div>
    <div>
	<form >
	<table  class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
		<thead>
                          <tr>
                    
                     <th>ID</th>
                     <th>ID CLient</th>
					 <th>adresse</th>
					 <th>referance du produit</th>
					 <th>date</th>
					 <th>etat</th>
					 </tr>

 <tbody>
<?PHP  
 include "livraisonC.php";

  $livraison=new livraisonC();
$listeliv=$livraison->afficher();
$liste=$listeliv->fetchALL();
//var_dump($liste);




	
	foreach ($liste as $ligns) 
	{   
					echo "<td>";

		echo $ligns["id"];
	       
			echo "<td>";
			echo $ligns["id_client"];

			echo "</td>";

			echo "<td>";
			echo $ligns["adresse"];

			echo "</td>";

			echo "<td>";
			echo $ligns["ref_produit"];

			echo "</td>";

			echo "<td>";
			echo $ligns["date_livraison"];

			echo "</td>";
			echo "<td>";
			echo $ligns["etat"];

			echo "</td>";
			echo "<tr>";


	      }
	
?>    
          

                    
                
              
        </tbody>
                             
        </thead>
		</thead>
       </table>
	   </form>
    </div>

	</div>	

  </div>
  <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Liste des Livreurs
    </div>
    <div>
	<form >
	<table  class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
		<thead>
                          <tr>
                    
                     <th>CIN</th>
                     <th>Nom</th>
					 <th>Région</th>
					 
					 </tr>

 <tbody>
<?PHP  
 include "livC.php";

  $liv=new livC();
$listeliv=$liv->afficher();
$liste=$listeliv->fetchALL();
//var_dump($liste);




	
	foreach ($liste as $ligns) 
	{   
					echo "<td>";

		echo $ligns["cin"];
	       
			echo "<td>";
			echo $ligns["nom"];

			echo "</td>";

			echo "<td>";
			echo $ligns["region"];

			echo "</td>";

			
			echo "<tr>";


	      }
	
?>    
          

                    
                
              
        </tbody>
                             
        </thead>
		</thead>
       </table>
	   </form>
    </div>

	</div>	

  </div>
 </section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Acces UNIVERS bijoux. All rights reserved | Design by ELSE</p>
			</div>
		  </div>
 <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	
	</script>
	<!-- //calendar -->
</body>
</html>
