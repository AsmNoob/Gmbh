<?php  
session_start();
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
		<section id="banner" style="background-image: url(images/banners/banner_home.jpg);">
			<header>
				<h2>Blumenberg .<em> La tonnellerie en bois massif</em></h2>
				<!-- <a href="#" class="button">information</a> -->
			</header>
		</section>
		<!-- Footer -->

		<section class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2>Contact</h2>
					<p><strong>Récapitulatif des préférences et choix à envoyer pour un devis ou informations supplémentaires.</strong></p>
				</header>
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