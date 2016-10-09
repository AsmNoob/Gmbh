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
				<h2>Blumenberg .<em> Lavabos</em></h2>
				<!-- <a href="#" class="button">information</a> -->
			</header>
		</section>
		<a name="dimension"></a>
		<br>
		<br>
		<section class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2>Lavabos</h2>
					Reprenant le même principe que nos autres produits, nous proposons également des éviers en bois massif. Fabriqués selon le même procédé et le même standard de qualité, ces lavabos compléteront à merveille votre salle de bain.
				</header>
				<header class="major">
					<p><strong>Dimensions et forme</strong></p>
				</header>
				<p><strong>Selon une forme de base ronde ou ovale, nos éviers sont disponibles comme élément à placer sur un plan horizontal ou en tant que colonne indépendante.</strong></p>
				<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('dim', this.id);" >En savoir plus</a></p>
				<p id="dim" style="display:none;">
					<strong>Dimensions</strong><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Forme ronde : <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40 cm ou 51 cm de diamètre x 22 cm<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Forme ovale :<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65 cm x 52 cm x 22 cm<br>
					<br><strong>Pied</strong><br>
					La colonne d’évier reprend la même forme de base que décrite ci-dessus. Cependant elle continue jusqu’au sol pour être placée de manière indépendante dans la pièce.
					<br>Il est possible de placer une planche d’étagère dans la découpe de la colonne. La hauteur totale de la colonne revient à 90 cm.
					<br><br><strong>Raccord aux installations</strong><br>
					Le raccord se fait comme n’importe quel évier classique. De plus nos produits arrivent complètement finis sur place et nécessitent donc un raccordement minimal. Si vous désirez intégrer la quincaillerie au raccord au mur (si vous en avez un), le placement sera fait par votre installateur, afin de vous laisser un maximum de liberté.

					<a name="pied"></a>
				</br>
			</br>

			<a name="raccord"></a>
		</br>
	</br>
</div>
</section>




<div id="footer">
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

	<!-- Icons -->
	<ul class="icons">
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
	</ul>

	<!-- Copyright -->
	<div class="copyright">
		<ul class="menu">
			<li>&copy; Blumenberg GmbH. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
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