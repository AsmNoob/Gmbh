<?php  session_start();?>
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
		<?php include("./assets/header.php"); ?>

		<!-- Banner -->
		<section id="banner" style="background-image: url(images/banners/banner_catalogue.jpg);">
			<header>
				<h2>Blumenberg .<em> Cabines de douche</em></h2>
				<!-- <a href="#" class="button">information</a> -->
			</header>
		</section>
		<a name="modele"></a>
		<!-- Posts -->
		<section class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2>Douches</h2>
					Fabriquées selon le même procédé que nos baignoires, la douche présente les mêmes avantages que tous nos produits. Il est dès lors possible de l’adapter selon vos envies. Sa forme ronde permet à tout enthousiaste de la douche de bouger sans aucune restriction.<br>
				</header>
				<header class="major">
					<p><strong>Modèle standard</strong></p>
				</header>
				<p><strong>Base sur une forme quasi-circulaire et équipé de portes en verre, elle intègre la quincaillerie que vous désirez. Une marche extérieure permet de rentrer et sortir de votre douche facilement. Comme nos autres produits, le fond de la douche est légèrement surélevé par rapport au sol.</strong></p>
				<p><a style="cursor: pointer" id="toggler" onclick="showme('modele', this.id);" >Information</a></p>
				<p id="modele" style="display:none;">
					<strong>Dimensions</strong><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Dimensions standard : <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 116 cm x 97 cm x 40/220 cm

					<br><strong>Portes</strong><br>
					Les portes rondes en verre sans châssis sont parfaitement étanches. N’étant pas en contact avec le bord inférieur de la douche elles laissent l’eau ruisseler vers le bas sans aucun risque de fuite.
					
					<br><strong>Disposition</strong><br>
					Evidemment votre douche peut être placée, comme nos autres produits, indépendamment dans la pièce, créant une sensation d’espace.
				</p>

				<a name="modification"></a>
			</br>
		</br>
		<header class="major">
			<p><strong>Possibilités de modifications</strong></p>
		</header>
		<p><strong>Il est possible de combiner douche et baignoire pour créer un bain-douche. Il est aussi possible de modifier les dimensions et la forme de la douche quelque peu. </strong></p>
		<p><a style="cursor: pointer" id="toggler" onclick="showme('modif', this.id);" >Information</a></p>
		<p id="modif" style="display:none;">Cependant, les modifications sont limitées par la technique de fabrication. La forme du sol est cependant plus libre. Pour le bain-douche on peut, en combinant effectivement deux produits, avoir toutes les possibilités des deux.</p>
	</div>
</section>


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