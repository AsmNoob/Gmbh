<?php  
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Blumenberg GmbH</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>


	
	<div id="page-wrapper">

		<!-- Header -->
		
		<?php include("assets/header.php"); ?>

		<!--Intro Main part-->
		<div style="margin-top:-20px;background-image: url(pics/Matériaux_0_BG.png);background-size:100%;background-repeat:no-repeat;display: block;overflow: hidden;height:1080px;">
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
			<div style="float:left;height:100%;width:23%;background-image:url(pics/Matériaux_0_R_b.png);background-size:100%">
			</div>

			<div style="float:left;height:100%;width:8%;">
			</div>
		</div>


		<!--Sub Parts-->

		<!--Separation-->
		<div style="width:100%;height:7px;background-color:#4D4D4D;">
		</div>

		<!--Pourquoi le bois-->
		<div style="height:490px;width:100%;background-color:white;">
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

			<div style="float:left;height:100%;width:23%;background-image:url(pics/Matériaux_1_R_b.png);background-repeat:no-repeat;background-size:100%">
			</div>

			<div style="float:left;height:100%;width:8%;">
			</div>
		</div>


		<!--Separation-->
		<div style="width:100%;height:7px;background-color:#CBCBCB;">
		</div>

		<!--Produits-->
		<div style="height:700px;width:100%;background-color:white;">
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

			<div style="float:left;height:100%;width:23%;background-image:url(pics/Matériaux_2_R_b.png);background-size:100%;background-repeat:no-repeat;">
			</div>

			<div style="float:left;height:100%;width:8%;">
			</div>
		</div>


		<div style="height:700px;width:100%;background-color:white;">
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

			<div style="float:left;height:100%;width:23%;background-image:url(pics/Matériaux_3_R_b.png);background-size:100%;background-repeat:no-repeat;">
			</div>

			<div style="float:left;height:100%;width:8%;">
			</div>
		</div>

		<!-- Banner -->
		<!-- <section id="banner" style="background-image: url(images/banners/banner_catalogue.jpg);">
			<header>
				<h2>Blumenberg .<em> La tonnellerie en bois massif</em></h2>
			</header>
		</section>

		<section class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2>Les matériaux</h2>
				</br>
				<a name="bois"></a><br><br>
				<form>
					<input type="text" value="bois" style="display:none;">
					<input title='Pour ajouter ce élément à vos préférences,
il vous suffit de cliquer sur ce titre.' style="font-size:16pt;font-weight:600;background-image:none;color:#999;background-color:transparent;border:0px" type="submit" value="Bois">
				</form>
				<p alt="more info"><strong>Bois</strong></p>
			</header>
			<p><strong>Principalement le bois de Kambala et de mélèze est utilisépour fabriquer nos produits. Ces deux matériaux montrent une grande résistance. Le Kambala est quelque peu plus foncé et résistant que le mélèze, et il a aussi une structure plus régulière. Autant le Kambala principalement originaire du Ghana et le mélèze d’Allemagne sont produits durablement. Pour nos produits particulièrement grands (jusqu’à Ø 250 cm) nous utilisons complémentairement du Western Red Cedar ou de l’Acajou à cause de leur faible coefficient de dilatation.</strong></p>
			<a name="protec"></a><br>
			<br>
			<header class="major">
				<p><strong>Protection</strong></p>
			</header>
			<p><strong>Par l’utilisation de scellage hygiénique imperméable et bandes d’acier reserrables nous tonneaux sont extrêmement faciles d’entretien et étanche de manière permanente. Vous pouvez utiliser n’importe quel produit de nettoyage habituel pour l’entretien de nos produits.<br>
			Par variations de teneur en humidité minime dans le bois, nos produits ont en principe une durée de vie illimitée.</strong></p><br>
			<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('protection', this.id);" ><strong>En savoir plus</strong></a></p>
			<p id="protection" style="display:none;">

			 A part le scellage hygiénique imperméable nous vous proposons également des surfaces traitées avec une huile-cire dure végétale naturelle à aspect satiné. Cette finition naturelle demande cependant plus d’entretien.<br>
			Pour les applications extérieures il est nécessaire d’appliquer une finition résistante au rayonnement UV (pour plus de détails voir la partie Extérieur).<br>
			Pour ceux et celles qui préfèrent l’aspect traditionnel des produits Blumenberg, pratiqué depuis les années ’80 : il existe toujours la finition opaque bleue à l’intérieur et en bois naturel flammé à l’extérieur.
			
			<a name="acier"></a><br>
		</br>
		<header class="major">
			<p><strong>Bandes d’acier</strong></p>
		</header>
		<p><strong>L’utilisation de bandes d’acier reserrables vous permet facilement de maintenir la tension nécessaire sur vos tonneaux et baignoires, même pendant des périodes d’utilisation très variées. Les bandes sont disponibles en acier galvanisé, acier inoxydable et acier à aspect « antique/rouillé ».</strong></p>-->
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
			</div>
 -->
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