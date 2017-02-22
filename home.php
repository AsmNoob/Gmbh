<?php  
session_start();


//IL FAUT CHEQUER AU DEBUT DE CHAQUE PAGE SI LA LISTE DE LISTE EXISTE SINON LA CREER

if (!isset($_SESSION['listeProduits'])) {
	$array = array('Fr','Mi','Ni');
	$_SESSION['listeProduits'] = $array;
}

$_SESSION['formDoor'] = array('Fr','Mi','Ni');

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Blumenberg GmbH</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>


	
	<div id="page-wrapper">

		<!-- Header -->

		<?php include("assets/header.php"); ?>

		<!-- Banner -->
		<!--<section style="background-image: url(pics/Home_0_BG.png);height:660px">
			
		</section>-->

		<!--template for page division-->
		<!--
		<div>
			<div style="float:left;height:100%;width:8%">	
			</div>

			<div style="float:left;height:100%;width:38%;">
				<div>
				</div>
			</div>

			<div style="float:left;height:100%;width:23%;">
				<div>
				</div>
			</div>

			<div style="float:left;height:100%;width:23%;background-image:url(pics/Home_0_R_b.png);background-size:100%">
			</div>

			<div style="float:left;height:100%;width:8%;">
			</div>
		</div>
		-->

		<!--Intro Main part-->
		<div style="margin-top:-20px;background-image: url(pics/Home_0_BG.png);background-size:100%;background-repeat:no-repeat;display: block;overflow: hidden;height:1080px;">
			<div style="float:left;height:100%;width:8%">	
			</div>

			<!--Logo + Entreprise Name-->
			<div style="float:left;height:100%;width:38%;position:relative">
				<p style="font-size:132pt;margin-top:150px;margin-left:50px;">LOGO</p>
				<span style=";font-family:candara;color:#4D4D4D;font-size:36pt;position:absolute;bottom:0;left:0;margin-bottom:15px;margin-left:10px;">
					<strong>Blumenberg</strong> - la tonnellerie en bois massif
				</span>
			</div>

			<!--Entreprise description-->
			<div style="float:left;height:100%;width:23%;filter: alpha(opacity=70);background-color: #ffffff;opacity: 0.7;">
				<div style="margin-left:30px;margin-right:30px;margin-top:80px;">
					<p style="font-family:candara;font-size:22pt;color:#4D4D4D;"><strong>Entreprise Blumenberg</strong></p>
					<p style="font-family:calibri;font-size:18pt;color:#4D4D4D;">L’entreprise Blumenberg s’est associée au matériau agréable qu’est le bois depuis plus de 100 ans dans la fabrication de produits dérivés de tonneaux. Depuis des dizaines d’années ils fournissent  à peu près tous les grands fabricants et vendeurs du secteur des saunas avec leurs produits de qualité appréciés comme tels.</p>
					<a  style="cursor: pointer;font-family:calibri;font-size:18pt;color:#754C24;" id="toggler" onclick="showme('entreprise', this.id);" ><strong>En savoir plus</strong></a>
					<p id="entreprise" style="display:none;font-family:calibri;font-size:18pt;color:#754C24;"><br style="margin:0px 0">Nous ne connaissons pas d’autre fabriquant, qui produit en quantité et qualité similaire des baignoires, tonneaux de plongeon ou de baignade et bains à remous en bois massif. Dans l'atelier plein de tradition ils disposent de toute la flexibilité nécessaire pour, à part le service de livraison standard, fort apprécié, s'adapter aux souhaits particuliers de nos clients.</p>
				</div>
			</div>

			<!--Stylish picture-->
			<div style="float:left;height:100%;width:23%;background-image:url(pics/Home_0_R_b.png);background-size:100%">
			</div>

			<div style="float:left;height:100%;width:8%;">
			</div>
		</div>


		<!--Sub Parts-->

		<!--Separation-->
		<div style="width:100%;height:7px;background-color:#4D4D4D;">
		</div>

		<!--Pourquoi le bois-->
		<div style="height:490px;width:100%;">
			<div style="float:left;height:100%;width:8%">
			</div>

			<div style="float:left;height:100%;width:38%;">
				<div style="margin-left:15px;margin-top:40px;margin-right:15px;">
					<p style="font-family:candara;font-size:22pt;color:#4D4D4D;"><strong>Pourquoi le bois ?</strong></p>
					<p style="font-family:calibri;font-size:18pt;color:#4D4D4D;">Le matériau naturel qu’est le bois se prête à merveille à l’expérience de wellness. L’alliance du bois massif, l’air et l’eau crée un climat inégalable pour la détente. De plus, ses qualités inhérentes en font un matériau exceptionnellement adapté aux équipements sanitaires.</p>
				</div>
			</div>

			<div style="float:left;height:100%;width:23%;background-color:#E5E5E5">
				<div style="margin-left:15px;margin-top:40px;margin-right:15px;">
					<a  style="cursor: pointer;font-family:calibri;font-size:18pt;color:#754C24;" id="toggler" onclick="showme('bois', this.id);" ><strong>En savoir plus</strong></a>
					<p id="bois" style="display:none;font-family:calibri;font-size:18pt;color:#754C24;"><br style="margin:0px 0">Evidemment le bois est un matériau excellent au point de vue écologique pour son empreinte de carbone lors de la production. Nous ne rentrerons pas dans le détail du comparatif avec des panneaux sandwich faits d’acrylique, polyester et mousse de polyuréthane. Il suffit de mettre en évidence la qualité isolante du bois massif, qui garantira un refroidissement minimal même après une longue durée. Cette caractéristique garantit aussi une température de contact agréable, contrairement à d’autres matériaux plus froids au toucher. <br>
						L’autre avantage majeur du bois est sa facilité d’entretien. Les traitements de surface de Blumenberg sont quasiment imperméables afin de réduire les variations d’humidité du bois au minimum. Elles respectent également toutes les exigences de résistance thermique, chimique et mécanique ainsi que les exigences hygiéniques. Ceci permet donc d’entretenir la baignoire avec des produits d’entretien de sanitaires classiques. Le bois, étant massif, se patine homogènement et gagne en aspect au fil du temps, contrairement à d’autres matériaux qui perdent leur couleur.</p>
				</div>
			</div>

			<div style="float:left;height:100%;width:23%;background-image:url(pics/Home_1_R_b.png);background-repeat:no-repeat;background-size:100%">
			</div>

			<div style="float:left;height:100%;width:8%;">
			</div>
		</div>


		<!--Separation-->
		<div style="width:100%;height:7px;background-color:#CBCBCB;">
		</div>

		<!--Produits-->
		<div style="height:700px;width:100%;">
			<div style="float:left;height:100%;width:8%">
				<div style="margin-left:5px;margin-top:40px">
				</div>
			</div>

			<div style="float:left;height:100%;width:38%;">
				<div style="margin-left:15px;margin-top:40px;margin-right:15px;">
					<p style="font-family:candara;font-size:22pt;color:#4D4D4D;"><strong>Produits</strong></p>
					<p style="font-family:candara;font-size:18pt;color:#4D4D4D;">Blumenberg GmbH produit une gamme de produits en bois massif, basé sur la forme du tonneau. Cette forme se prête autant à des baignoires, des tonneaux de plongeon de sauna, des douches, des lavabos et d’autres accessoires. <br>Chacun de ces produits est produit avec le plus grand soin pour garantir leur qualité. La production de votre produit est suivie individuellement de la conception à la fabrication afin de vous garantir le résultat le plus adapté possible.</p>
				</div>
			</div>

			<div style="float:left;height:100%;width:23%;background-color:#E5E5E5">
				<div style="margin-left:15px;margin-top:40px;margin-right:15px;">
					<p style="font-family:calibri;font-size:18pt;color:#754C24;"><strong>Personnalisation</strong></p>
					<p style="font-family:calibri;font-size:18pt;color:#754C24;">Grâce à la production unique des produits, une personnalisation poussée est possible. Le dessin de votre produit sera dans tous les cas exactement adapté à vos désirs et vos besoins.</p>
					<a style="cursor: pointer;font-family:calibri;font-size:18pt;color:#754C24;" id="toggler" onclick="showme('perso', this.id);" ><strong>En savoir plus</strong></a>
					<p id="perso" style="display:none;font-family:calibri;font-size:18pt;color:#754C24;"><br style="margin:0px 0">Une fois que vous vous êtes décidés pour un des produits uniques en bois massif, nous commencerons par déterminer le type de produit à réaliser sur base des dimensions de l’espace disponible et d’esquisses préparatoires. Chacun des produits possède des options spécifiques qui seront considérées avant leur réalisation.<br> 
						Dans la section dédiée à chaque type de produit spécifique vous trouverez une description des différentes options possibles, allant des dimensions aux accessoires.</p>
				</div>
			</div>

			<div style="float:left;height:100%;width:23%;background-image:url(pics/Home_2_R_bE.png);background-size:100%;background-repeat:no-repeat;">
			</div>

			<div style="float:left;height:100%;width:8%;">
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
	<!-- <div id="footer">
		<div class="container">
			<div class="row">
				<section class="6u 12u(narrower)">
					<h3>Contactez-nous!</h3>
					<form method="post" action="mail.php">
						<label for="name"><input type="text" name="name" id="name" placeholder="Name" /></label>
						<label for="email"><input type="email" name="email" id="email" placeholder="Email" /></label>
						<label for="message"><textarea name="message" id="message" placeholder="Message" rows="5"></textarea></label>
						<label><input type="submit" class="button alt" value="Send Message" /></label>

					</form> 
				</section>
			</div>
		</div> -->

		

		<!-- Icons -->
		<!-- <ul class="icons">
			<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
		</ul> -->

		<!-- Copyright -->
		<!-- <div class="copyright">
			<ul class="menu">
				<li>&copy; Blumenberg GmbH. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</div> -->

	</div>


</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>