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
				<h2>Blumenberg .<em> Tonneaux de plongeon</em></h2>
				<!-- <a href="#" class="button">information</a> -->
			</header>
		</section>

		<a name="dimension"></a>
		<!-- Posts -->
		<section class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2>Tonneaux de plongeon</h2>
					Produit indispensable pour l’expérience de sauna complète il peut également être utilisé comme bain profond. Rien de tel pour s’immerger complètement dans l’eau que la forme et la hauteur de nos tonneaux.
				</header>
				<header class="major">
					<p><strong>Dimensions et forme</strong></p>
				</header>
				<p><strong>Dépendant des spécifications désirées, le type de produit varie. En fonction de de l’espace disponible, la capacité en nombre de personnes requise et la taille des utilisateurs nous disposons d’un nombre de modèles de départ.</strong></p>
				<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('dim', this.id);" >En savoir plus</a></p>
				<p id="dim" style="display:none;">D’une hauteur de paroi intérieure de 42,5 à 52,5 cm nous parlons d’une baignoire. Pour une hauteur intérieure de 82,5 cm nous parlons de tonneaux de bain. 
					<br>Le choix peut également être influencé par la capacité en volume d’eau et l’espace de mouvement désiré. Ces dimensions sont standardisées pour des personnes de 160-185 cm. Pour une hauteur intérieure plus haute vous pouvez choisir une longueur inférieure. La taille supérieure est appropriée pour des personnes grandes. Les dimensions standard en plan sont indiquées ci-dessous selon le type désiré.
					<br>Les volumes capables intérieurs sur les esquisses sont indiqués par 10 cm de hauteur. La hauteur standard d’eau nécessaire pour des personnes couchées est de 30-35 cm, celle pour des personnes assises est de 60-65 cm.
					<br>
					<br><strong>Tonneau</strong><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour une personne : <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 x 72 cm, 110 x 77 cm, 130 x 79 cm<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour deux  personnes : <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;130 x 79 cm, 161 x 79 cm<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour quatre à six personnes : <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rond, 153 cm de diamètre<br>
					<br><strong>Personnalisation</strong><br>
					Comme chacun des produits de Blumenberg GmbH, les baignoires et les tonneaux de bain sont hautement personnalisables. Si dans les mesures standard vous ne trouvez pas votre bonheur, nous nous ferons un plaisir de dessiner ensemble la forme idéale pour vous.
					Un exemple de formes exceptionnelles :
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;&nbsp; pour des petits tonneaux : 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rond, 82 ou 96 cm de diamètre 

				</p>

				<a name="finition"></a><br>
			</br>
		</br>
		<header class="major">
			<p><strong>Finition intérieure</strong></p>
		</header>

	<p><strong>Les tonneaux Blumenberg sont spécialement conçus pour une utilisation intensive. Nous employons donc les techniques qui rendent le produit le plus résistant possible et lui donnent une durée de vie exceptionnelle</strong></p>
	<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('bois', this.id);" ><strong>Bois</strong></a>
	<p id="bois" style="display:none;">Notre scellage hygiénique est spécialement développé pour le milieu très exigeant du Sauna-Wellness. Il respecte toutes les normes d’hygiène et garantit un entretien facile. (Très Bon selon la DIN 25415) Cette finition permet également de voir le bois dans toute sa splendeur à l’intérieur et l’extérieur du produit.</p><br>
	<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('synthetique', this.id);" ><strong>Synthétique</strong></a>
	<p id="synthetique" style="display:none;">Alternativement nous proposons également des insertions en PE-Sanitaire qui se rajoutent dans le modèle 112 cm x 79 cm x 101 cm. Toutes les techniques sont intégrées dans cette insertion. Elle permet également d’accommoder un système de remplissage automatique, gardant le niveau de l’eau à la hauteur désirée.</p><br>
	<br><a name="profil"></a><br>
	<br>
	<br>
	<header class="major">
		<p><strong>Profil supérieur et inférieur</strong></p>
	</header>
	<p><strong>Le profil de votre baignoire dépend entre autres de l’aspect désiré et de la hauteur nécessaire. Ainsi les variations entre un profil plus simple et sobre ou un profil plus découpé et léger vous permet davantage d’adapter le produit à vos besoins.</strong></p>
	
	<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('profSup', this.id);" ><strong>Profil supérieur</strong></a>
	<p id="profSup" style="display:none;">Nos tonneaux ont toujours un profil supérieur non découpé, étant donné qu’on s’y tient debout ou assis à la verticale.</p>
	<br><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('profInf', this.id);" ><strong>Profil inférieur</strong></a>
	<p id="profInf" style="display:none;">Il est possible d’avoir un profil inférieur continu ou découpé en apparence. Dans le cas d’un raccord au mur, une découpe sera toujours pratiquée dans le bas de du tonneau dans la face cachée pour les tuyauteries.</p><br> 

	<br>
	<a name="entreeEtEvacuation"></a>
	<br>
	<br>
	<header class="major">
		<p><strong>Entrée et évacuation de l’eau</strong></p>
	</header>
	<p><strong>La gestion de l’eau est intégrée systématiquement à votre produit afin d’assurer la meilleure finition possible. Cependant il est possible de choisir parmi différentes options en fonction de votre projet.</strong></p>
	<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('entree', this.id);" ><strong>Entrée</strong></a>
	<p id="entree" style="display:none;">Il est inhabituel d’avoir une entrée d’eau fixe pour les tonneaux de plongeon, cependant les mêmes principes s’appliquent qu’aux baignoires :
		L’entrée d’eau se fait habituellement indépendamment de la baignoire sur le raccord au mur ou de manière complètement autonome. Nous vous recommandons de commander indépendamment votre quincaillerie auprès de votre fournisseur sanitaire. Nous aurons besoin des spécifications techniques du produit afin de l’intégrer au mieux dans la finition. Nous vous conseillons un robinet à bec rétractable et tuyau flexible pour la facilité de nettoyage du tonneau ou de la baignoire. Le positionnement préférable pour le robinet est au milieu du côté long. Pour l’option bain à remous une vanne à bille est installée dans la partie cachée de la baignoire pour réguler l’apport principal. Pour les options supplémentaires par rapport au bain à remous, voir le paragraphe dédié.</p><br>
	
<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('sortie', this.id);" ><strong>Evacuation</strong></a>
	<p id="sortie" style="display:none;">L’évacuation de l’eau se fait par défaut intégré dans le sol de la baignoire, il est normalement connecté à un tuyau de diamètre 1¼" ou 1½". Il vous est également possible d’intégrer un trop-plein dans la paroi de votre produit. Cette évacuation peut être extérieure ou intérieure au tonneau, et il est également possible de faire l’évacuation extérieure en laiton chromé pour un meilleur aspect visuel. Toute la tuyauterie est ordinairement rigide, mais une évacuation flexible peut également être accommodée.
	</p>
		<br><br><br>
		
	<a name="accessoires"></a>
	<br>
	<br>
	<header class="major">
		<p><strong>Accessoires intérieurs et extérieurs</strong></p>
	</header>
	<p><strong>Supplémentairement à nos produits principaux, nous fabriquons également une série d’accessoires indispensables pour l’expérience complète. Ils sont tous fabriqués dans le même bois que vos autres achats. </strong></p>
	<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('accessoire', this.id);" >En savoir plus</a></p>
	<p id="accessoire" style="display:none;">
		<strong>Marches/Echelles</strong><br>
		Afin de rentrer et sortir plus facilement dans le tonneau, nous proposons un bloc de marches ou une échelle assortie à votre produit. La dernière marche monte jusqu’à une hauteur de 50 cm sous le bord, vos permettant de l’enjamber et rentrer dans le tonneau. La largeur et profondeur totale du bloc escalier est de également 50 cm. L’échelle est plus économe en place par rapport à l’escalier. A l’intérieur du produit se trouve une marche intégrée afin de faciliter l’entrée dans l’eau.
		<br><br><strong>Assises</strong><br>
		Il est possible d’installer une ou plusieurs assises en bois à l’intérieur de nos produits les plus hauts, afin de permettre plus de confort. Elles s’avancent entre 20 et 32 cm dans la baignoire. Dans le cas de plusieurs assises, elles sont normalement montées à des hauteurs différentes afin d’accommoder des personnes de taille différente.
		<br><br><strong>Couvercle</strong><br>
		Afin de fermer vos tonneaux lorsqu’ils ne sont pas utilisés nous proposons également des couvercles en bois massif et en contre-plaqué.  
	</p>



</div>
</section>

<br><br><br><br><br>


<!-- Footer -->
<div id="footer">
	<div class="container">
		<div class="row">
			<section class="6u 12u(narrower)">
				<h3>Nous Contacter</h3>
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