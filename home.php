<?php  
session_start();
$array = array('Fr','Mi','Ni');
$_SESSION['listeProduits'] = $array;
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

			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h2>Présentation Globale</h2>
							<h3>Entreprise Blumenberg</h3>
						</header>
						<p>This is an amazing company <?php for ($i = 0;$i<3;$i++){
	echo $_SESSION['listeProduits'][$i];}$_SESSION['listeProduits'][] = 'Co';foreach ($_SESSION['listeProduits'] as $item) {echo $item;} ?></p>
					</div>
				</section>

				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h3>Pourquoi le bois ?</h3>
						</header>
					</div>
				</section>

				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h3>Personnalisation</h3>
						</header>
					</div>;
				</section>


			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-paper-plane"></i>
									<h3>This Is Important</h3>
									<p>Les plans de coupe et les tailles de toutes les baignoires se trouvent dans l'onglet "Différents modèles". Des tailles spéciales sont possibles avec peu d'effort et sans grands frais supplémentaires!</p>
								</div>
							</section>
							<!-- <section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-pencil"></i>
									<h3>Also Important</h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section>
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<i class="icon major fa-wrench"></i>
									<h3>Probably Important</h3>
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</section> -->
						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<section class="6u 12u(narrower)">
								<h3>Get In Touch</h3>
								<form method="post" action="mail.php">
									<label for="name"><input type="text" name="name" id="name" placeholder="Name" /></label>
									<label for="email"><input type="email" name="email" id="email" placeholder="Email" /></label>
									<label for="message"><textarea name="message" id="message" placeholder="Message" rows="5"></textarea></label>
									<label><input type="submit" class="button alt" value="Send Message" /></label>
											
								</form> 
							</section>

							<section class="6u 12u(narrower)">
								<h3>Get In Touch</h3>
								<form method="post" action="mail.php">
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
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