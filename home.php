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

				<!-- PHP -->

				<!--<p>This is an amazing company <?php for ($i = 0;$i<3;$i++){
	echo $_SESSION['listeProduits'][$i];}$_SESSION['listeProduits'][] = 'Co';foreach ($_SESSION['listeProduits'] as $item) {echo $item;} ?></p>-->

			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h2>Présentation Globale</h2>
						</br>
							<p><strong>Pourquoi le bois ?</strong></p>
						</header>
						<p><strong>Le matériau naturel qu’est le bois se prête à merveille à l’expérience de wellness.
						 L’alliance du bois massif, l’air et l’eau crée un climat inégalable pour la détente.
						  De plus, ses qualités inhérentes en font un matériau exceptionnellement adapté aux équipements sanitaires.</strong></p>
						 <p><a id="toggler" onclick="showme('bois', this.id);" >Plus d'informations</a></p>
						<p id="bois" style="display:none;">Evidemment le bois est un matériau excellent au point de vue écologique pour son empreinte de carbone lors de 
							la production. Nous ne rentrerons pas dans le détail du comparatif avec des panneaux sandwich faits d’acrylique, 
							polyester et mousse de polyuréthane. Il suffit de mettre en évidence la qualité isolante du bois massif, 
							qui garantira un refroidissement minimal même après une longue durée. Cette caractéristique garantit aussi 
							une température de contact agréable, contrairement à d’autres matériaux plus froids au toucher.
</br>L’autre avantage majeur du bois est sa facilité d’entretien. Les traitements de surface de Blumenberg sont quasiment imperméables 
afin de réduire les variations d’humidité du bois au minimum. Elles respectent également toutes les exigences de résistance thermique, 
chimique et mécanique ainsi que les exigences hygiéniques. Ceci permet donc d’entretenir la baignoire avec des produits d’entretien de 
sanitaires classiques. Il existe également une alternative au coating habituel, qui est une huile dure à la cire. Cette finition naturelle 
demande cependant plus d’entretien. Le bois, étant massif, se patine homogènement et gagne en aspect au fil du temps, contrairement à
 d’autres matériaux qui perdent leur couleur.</p>




					<!-- </div>
				</section>

				<section class="wrapper style2">
					<div class="container"> -->
					</br>
						<header class="major">
							<p><strong>Produits</strong></p>
						</header>
							<p><strong>La compagnie Blumenberg GmbH produit une gamme de produits en bois massif, basé sur la forme du tonneau. 
								Cette forme se prête autant à des baignoires, des tonneaux de plongeon de sauna, des douches, des lavabos 
								et d’autres accessoires. </br>
Chacun de ces produits est produit avec le plus grand soin pour garantir leur qualité. La production de votre produit est suivie 
individuellement de la conception à la fabrication afin de vous garantir le résultat le plus adapté possible.</strong></p>
						
					<!-- </div>
				</section>

				<section class="wrapper style2">
					<div class="container"> -->
					</br>
						<header class="major">
							<p><strong>Personnalisation</strong></p>
						</header>
						<p><strong>Grâce à la production unique des produits, une personnalisation poussée est possible. 
							Le dessin de votre produit sera dans tous les cas exactement adapté à vos désirs et vos besoins.</strong></p>
						
						<p><a id="toggler" onclick="showme('perso', this.id);" >Plus d'informations</a></p>
						<p id="perso" style="display:none;">Une fois que vous vous êtes décidés pour un des produits uniques en bois massif, nous commencerons 
							par déterminer le type de produit à réaliser sur base des dimensions de l’espace disponible et d’esquisses 
							préparatoires. Chacun des produits possède des options spécifiques qui seront considérées avant leur réalisation. 
Dans la section dédiée à chaque type de produit spécifique vous trouverez une description des différentes options possibles, allant des 
dimensions aux accessoires. </p>
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