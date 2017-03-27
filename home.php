<?php  
session_start();

//IL FAUT CHEQUER AU DEBUT DE CHAQUE PAGE SI LA LISTE DE LISTE EXISTE SINON LA CREER

/*if (!isset($_SESSION['listeProduits'])) {
	$array = array('Fr','Mi','Ni');
	$_SESSION['listeProduits'] = $array;
}

$_SESSION['formDoor'] = array('Fr','Mi','Ni');*/

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Blumenberg GmbH</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" /><!-- 
	<link rel="stylesheet" href="assets/css/w3.css"> -->
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>
	<div class="page-wrapper">

		<!-- Header -->

		<?php include("assets/header.php"); ?>

		<!-- Banner -->

		<!--Intro Main part-->
		<div class="body-main-banner" style="background-image: url(pics/Home_0_BG.png);">
			<div class="body-left-banner">	
			</div>

			<!--Logo + Entreprise Name-->
			<div class="body-logo-banner">
				<p class="body-logo" style="f">LOGO</p>
				<span class="information">
					<strong>Blumenberg</strong> - la tonnellerie en bois massif
				</span>
			</div>

			<!--Entreprise description-->
			<div class="body-info-banner">
				<div class="body-info-banner-inside-box">
					<p id="entreprise-presentation"><strong>Entreprise Blumenberg</strong></p>
					<p id="entreprise-presentation-text">L’entreprise Blumenberg s’est associée au matériau agréable qu’est le bois depuis plus de 100 ans dans la fabrication de produits dérivés de tonneaux. Depuis des dizaines d’années ils fournissent  à peu près tous les grands fabricants et vendeurs du secteur des saunas avec leurs produits de qualité appréciés comme tels.</p>
					<a id="toggler" onclick="showme('entreprise', this.id);" ><strong>En savoir plus</strong></a>
					<p id="entreprise"><br style="margin:0px 0">Nous ne connaissons pas d’autre fabriquant, qui produit en quantité et qualité similaire des baignoires, tonneaux de plongeon ou de baignade et bains à remous en bois massif. Dans l'atelier plein de tradition ils disposent de toute la flexibilité nécessaire pour, à part le service de livraison standard, fort apprécié, s'adapter aux souhaits particuliers de nos clients.</p>
				</div>
			</div>

			<!--Stylish picture-->
			<div class="body-right-picture" style="background-image:url(pics/Home_0_R_b.png);">
			</div>

			<div class="body-right-banner">
			</div>
		</div>


		<!--Sub Parts-->

		<!--Separation-->
		<div  class="main-separator">
		</div>

		<!--Pourquoi le bois-->
		<div class="sub-banner">
			<div class="body-left-banner">
			</div>

			<div class="body-left-text">
				<div>
					<p> <strong>Pourquoi le bois ?</strong></p>
					<p>Le matériau naturel qu’est le bois se prête à merveille à l’expérience de wellness. L’alliance du bois massif, l’air et l’eau crée un climat inégalable pour la détente. De plus, ses qualités inhérentes en font un matériau exceptionnellement adapté aux équipements sanitaires.</p>
				</div>
			</div>

			<div class="body-middle-banner">
				<div>
					<a id="toggler" onclick="showme('bois', this.id);" ><strong>En savoir plus</strong></a>
					<p id="bois" style=""><br style="margin:0px 0">Evidemment le bois est un matériau excellent au point de vue écologique pour son empreinte de carbone lors de la production. Nous ne rentrerons pas dans le détail du comparatif avec des panneaux sandwich faits d’acrylique, polyester et mousse de polyuréthane. Il suffit de mettre en évidence la qualité isolante du bois massif, qui garantira un refroidissement minimal même après une longue durée. Cette caractéristique garantit aussi une température de contact agréable, contrairement à d’autres matériaux plus froids au toucher. <br>
						L’autre avantage majeur du bois est sa facilité d’entretien. Les traitements de surface de Blumenberg sont quasiment imperméables afin de réduire les variations d’humidité du bois au minimum. Elles respectent également toutes les exigences de résistance thermique, chimique et mécanique ainsi que les exigences hygiéniques. Ceci permet donc d’entretenir la baignoire avec des produits d’entretien de sanitaires classiques. Le bois, étant massif, se patine homogènement et gagne en aspect au fil du temps, contrairement à d’autres matériaux qui perdent leur couleur.</p>
				</div>
			</div>

			<div class="body-right-picture" style="background-image:url(pics/Home_1_R_b.png);">
			</div>

			<div class="body-right-banner">
			</div>
		</div>


		<!--Separation-->
		<div class="separator">
		</div>

		<!--Produits-->
		<div class="sub-banner">
			<div class="body-left-banner">
				<div style="margin-left:5px;margin-top:40px">
				</div>
			</div>

			<div class="body-left-text">
				<div>
					<p><strong>Produits</strong></p>
					<p>Blumenberg GmbH produit une gamme de produits en bois massif, basé sur la forme du tonneau. Cette forme se prête autant à des baignoires, des tonneaux de plongeon de sauna, des douches, des lavabos et d’autres accessoires. <br>Chacun de ces produits est produit avec le plus grand soin pour garantir leur qualité. La production de votre produit est suivie individuellement de la conception à la fabrication afin de vous garantir le résultat le plus adapté possible.</p>
				</div>
			</div>

			<div class="body-middle-banner">
				<div>
					<p><strong>Personnalisation</strong></p>
					<p>Grâce à la production unique des produits, une personnalisation poussée est possible. Le dessin de votre produit sera dans tous les cas exactement adapté à vos désirs et vos besoins.</p>
					<a id="toggler" onclick="showme('perso', this.id);" ><strong>En savoir plus</strong></a>
					<p id="perso" style=""><br style="margin:0px 0">Une fois que vous vous êtes décidés pour un des produits uniques en bois massif, nous commencerons par déterminer le type de produit à réaliser sur base des dimensions de l’espace disponible et d’esquisses préparatoires. Chacun des produits possède des options spécifiques qui seront considérées avant leur réalisation.<br> 
						Dans la section dédiée à chaque type de produit spécifique vous trouverez une description des différentes options possibles, allant des dimensions aux accessoires.</p>
				</div>
			</div>

			<div class="body-right-picture" style="background-image:url(pics/Home_2_R_bE.png);">
			</div>

			<div class="body-right-banner">
			</div>
		</div>

		<!-- PHP -->
		<!-- <br>
		<br> -->
		<!--<p> &nbsp;&nbsp;&nbsp;&nbsp;Bain moussant 760€ &nbsp;&nbsp;&nbsp;&nbsp;<a href="panier.php?action=ajout&amp;l=bain&amp;q=moussant&amp;p=162x62" onclick="window.open(this.href, '', 
		'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a></p>-->
		<!--<br>
		<br>
		<form>
			<select multiple name="snacks[ ]">
				<option value="coke">CocaCola</option>
				<option value="popcorn">Popcorn</option>
				<option value="peanuts">Peanuts</option>
			</select>
		</form>
		

		<p>This is an amazing company <?php for ($i = 0;$i<3;$i++){
			echo $_SESSION['listeProduits'][$i];}$_SESSION['listeProduits'][] = 'Co';foreach ($_SESSION['listeProduits'] as $item) {echo $item." ";} ?></p>

			<form action="home.php" method="post">
				Do you need wheelchair access?
				<input type="checkbox" name="formWheelchair" value="Yes" />
				
				<input type="checkbox" name="formDoor[]" value="A" />Acorn Building<br />
				<input type="checkbox" name="formDoor[]" value="B" />Brown Hall<br />
				<input type="checkbox" name="formDoor[]" value="C" />Carnegie Complex<br />
				<input type="checkbox" name="formDoor[]" value="D" />Drake Commons<br />
				<input type="checkbox" name="formDoor[]" value="E" />Elliot House


				<input type="submit" name="formSubmit" value="Submit" />
			</form>

			<form action="home.php" method="post">

				Which buildings do you want access to?<br />
				<input type="checkbox" name="formDoor[]" value="A" />Acorn Building<br />
				<input type="checkbox" name="formDoor[]" value="B" />Brown Hall<br />
				<input type="checkbox" name="formDoor[]" value="C" />Carnegie Complex<br />
				<input type="checkbox" name="formDoor[]" value="D" />Drake Commons<br />
				<input type="checkbox" name="formDoor[]" value="E" />Elliot House

				<input type="submit" name="formSubmit" value="Submit" />

			</form>

			<form>
				<input type="text" value="">
			</form>				

			<?php

			if(isset($_POST['formWheelchair']) && 
				$_POST['formWheelchair'] == 'Yes') 
			{
				echo "Need wheelchair access.";print_r($_SESSION['formDoor']);
				echo $_SESSION['listeProduits'][] ='Need';print_r($_SESSION['listeProduits']);
				echo "lol";
			}
			else
			{
				echo "Do not Need wheelchair access.";
			}    

			?>-->

			<!-- <br>
			<br><br><br><br><br><br><br><br>
			<section class="wrapper style2">
				<div class="container">
					<header class="major">
						<h2>Présentation Globale</h2>
					</br>
					<p><strong>Entreprise Blumenberg</strong></p>
				</header>
				<p><strong>L’entreprise Blumenberg s’est associée au matériau agréable qu’est le bois depuis plus de 100 ans dans la fabrication de produits dérivés de tonneaux. Depuis des dizaines d’années ils fournissent  à peu près tous les grands fabricants et vendeurs du secteur des saunas avec leurs produits de qualité appréciés comme tels.</strong></p>
				
					<a  style="cursor: pointer;color:grey;" id="toggler" onclick="showme('entreprise', this.id);" >En savoir plus</a>
					<p id="entreprise" style="display:none;"><br style="margin:0px 0">Nous ne connaissons pas d’autre fabriquant, qui produit en quantité et qualité similaire des baignoires, tonneaux de plongeon ou de baignade et bains à remous en bois massif. Dans l'atelier plein de tradition ils disposent de toute la flexibilité nécessaire pour, à part le service de livraison standard, fort apprécié, s'adapter aux souhaits particuliers de nos clients.</p>
				<br>
				<br>
				<br>
				<header class="major">
					<p><strong>Pourquoi le bois ?</strong></p>
				</header>
				<p><strong>Le matériau naturel qu’est le bois se prête à merveille à l’expérience de wellness. L’alliance du bois massif, l’air et l’eau crée un climat inégalable pour la détente. De plus, ses qualités inhérentes en font un matériau exceptionnellement adapté aux équipements sanitaires.</strong></p>
				<a  style="cursor: pointer;color:grey" id="toggler" onclick="showme('bois', this.id);" >En savoir plus</a>
				<p id="bois" style="display:none;"><br style="margin:0px 0">Evidemment le bois est un matériau excellent au point de vue écologique pour son empreinte de carbone lors de la production. Nous ne rentrerons pas dans le détail du comparatif avec des panneaux sandwich faits d’acrylique, polyester et mousse de polyuréthane. Il suffit de mettre en évidence la qualité isolante du bois massif, qui garantira un refroidissement minimal même après une longue durée. Cette caractéristique garantit aussi une température de contact agréable, contrairement à d’autres matériaux plus froids au toucher. <br>
					L’autre avantage majeur du bois est sa facilité d’entretien. Les traitements de surface de Blumenberg sont quasiment imperméables afin de réduire les variations d’humidité du bois au minimum. Elles respectent également toutes les exigences de résistance thermique, chimique et mécanique ainsi que les exigences hygiéniques. Ceci permet donc d’entretenir la baignoire avec des produits d’entretien de sanitaires classiques. Le bois, étant massif, se patine homogènement et gagne en aspect au fil du temps, contrairement à d’autres matériaux qui perdent leur couleur.</p>
				<br>
				</br>
				<header class="major">
					<p><strong>Produits</strong></p>
				</header>
				<p><strong>Blumenberg GmbH produit une gamme de produits en bois massif, basé sur la forme du tonneau. Cette forme se prête autant à des baignoires, des tonneaux de plongeon de sauna, des douches, des lavabos et d’autres accessoires. <br>Chacun de ces produits est produit avec le plus grand soin pour garantir leur qualité. La production de votre produit est suivie individuellement de la conception à la fabrication afin de vous garantir le résultat le plus adapté possible.</strong></p>
			</br>
			<header class="major">
				<p><strong>Personnalisation</strong></p>
			</header>
			<p><strong>Grâce à la production unique des produits, une personnalisation poussée est possible. Le dessin de votre produit sera dans tous les cas exactement adapté à vos désirs et vos besoins.</strong></p>
			<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('perso', this.id);" >En savoir plus</a>
			<p id="perso" style="display:none;"><br style="margin:0px 0">Une fois que vous vous êtes décidés pour un des produits uniques en bois massif, nous commencerons par déterminer le type de produit à réaliser sur base des dimensions de l’espace disponible et d’esquisses préparatoires. Chacun des produits possède des options spécifiques qui seront considérées avant leur réalisation.<br> 
				Dans la section dédiée à chaque type de produit spécifique vous trouverez une description des différentes options possibles, allant des dimensions aux accessoires.</p>
			<br>
		</br>
		</div>;
	</section> -->

	<!-- Footer -->
	</div>

<!-- Scripts -->
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>