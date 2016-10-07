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
				<h2>Blumenberg .<em> Baignoires</em></h2>
				<!-- <a href="#" class="button">information</a> -->
			</header>
		</section>
		<a name="dimension"></a>
		<!-- Posts -->
		<section class="wrapper style2">
			<div class="container">
				<header class="major">
					<h2>Baignoires</h2>
					<p><strong>Dimensions et formes</strong></p>
				</header>
				<p>THIS IS A TEST IMAGE
					<br>
					<form action="update.php" method="post">
						<input type="text" name="update" value="bains" style="display:none">
						<input style="height:100px;width:100px;color:transparent;box-sizing:content-box;background-image:url('images/Baignoires/BW_Benecke.jpg')"  title='Pour ajouter cet élément à vos préférences,
il vous suffit de cliquer sur ce titre.' type="submit" value="baignoire">
					</form>
				</p>
				<p><img src="images/Baignoires/BW_Benecke.jpg" align="right" valign="middle" vspace="5" hspace="5" style="margin-top:-80px"/><strong>Dépendant des spécifications désirées, le type de produit varie.
					Dépendant des spécifications désirées, le type de produit varie. En fonction de de l’espace disponible, la capacité en nombre de personnes requise et la taille des utilisateurs nous disposons d’un nombre de modèles de départ.</strong></p>
					<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('dimensions', this.id);" >En savoir plus</a></p>
					<div id="dimensions" style="display:none;">
						<p><img src="images/Baignoires/BW_Benecke.jpg" align="right" valign="middle" vspace="5" hspace="5" style="margin-top:-80px;margin-left:"/>D’une hauteur de paroi intérieure de 42,5 à 52,5 cm nous parlons d’une baignoire. Pour une hauteur intérieure de 82,5 cm nous parlons de tonneaux de bain. 
							<br>Le choix peut également être influencé par la capacité en volume d’eau et l’espace de mouvement désiré. Ces dimensions sont standardisées pour des personnes de 160-185 cm. Pour une hauteur intérieure plus haute vous pouvez choisir une longueur inférieure. La taille supérieure est appropriée pour des personnes grandes. Les dimensions standard en plan sont indiquées ci-dessous selon le type désiré.
							<br>Les volumes capables intérieurs sur les esquisses sont indiqués par 10 cm de hauteur. La hauteur standard d’eau nécessaire pour des personnes couchées est de 30-35 cm, celle pour des personnes assises est de 60-65 cm.
						</p>
					</br>
					<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('exemple_baignoire', this.id);" ><strong>Exemples de baignoires</strong></a></p>
					<p id="exemple_baignoire" style="display:none;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour <strong>une</strong> personne : </br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;135-151-167 cm x 73 cm
					</br><img style="height:200px" src="images/Modeles/135x73.jpg"><img style="height:200px" src="images/Modeles/151x73.jpg"><img style="height:200px" src="images/Modeles/167x73.jpg"></br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour <strong>deux</strong> personnes : </br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;149 x 90 cm, 161 x 79 cm, 168 x 106 cm
				</br><img style="height:200px" src="images/Modeles/149x90.jpg"><img style="height:200px" src="images/Modeles/161x79.jpg"><img style="height:200px" src="images/Modeles/168x106.jpg"></br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour <strong>trois</strong> personnes : </br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rond, 153 cm de diamètre
			</br><img style="height:270px" src="images/Modeles/153.jpg">
		</p>
	</br>
	<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('exemple_tonneaux', this.id);" ><strong>Exemples de tonneaux</strong></a></p>
	<p id="exemple_tonneaux" style="display:none;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour <strong>une</strong> personne : </br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;100 x 72 cm, 110 x 77 cm, 130 x 79 cm
	</br><img style="height:200px" src="images/Modeles/100x72.jpg"><img style="height:200px" src="images/Modeles/110x77.jpg"><img style="height:200px" src="images/Modeles/130x79.jpg"></br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour <strong>deux</strong> personnes : </br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;130 x 79 cm, 161 x 79 cm
</br><img style="height:200px" src="images/Modeles/130x79.jpg"><img style="height:200px" src="images/Modeles/161x79.jpg"></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour <strong>trois</strong> personnes : </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rond, 153 cm de diamètre
</br><img style="height:200px" src="images/Modeles/153.jpg"></br>
</p>
<a name="personnalisation"></a>
</br>
</br>
<strong>Personnalisation</strong>
<p>Comme chacun des produits de Blumenberg GmbH, les baignoires et les tonneaux de bain sont hautement personnalisables.
	Si dans les mesures standard vous ne trouvez pas votre bonheur, nous nous ferons un plaisir de dessiner ensemble la forme idéale pour vous.</p>
</br>
<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('perso', this.id);" ><strong>Quelque exemples de formes exceptionnelles</strong></a></p>
<div id="perso" style="display:none;">
	<p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour un  <strong>bain assis</strong> : </br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;119 x 73 cm
	</br><img style="height:200px" src="images/Modeles/119x73.jpg"></br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour un <strong>bain assis</strong> ou <strong>tonneau de plongeon</strong> :  </br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;122 x 72 cm
</br><img style="height:200px" src="images/Modeles/122x72.jpg"></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; Pour des <strong>baignoires larges</strong> :  </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;165 x 90 cm et 199 x 106 cm </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp; pour des <strong>petits tonneaux</strong> :  </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rond, 82 ou 96 cm de diamètre 
</p>
</div>
</div>


<a name="profil"></a>
</br>
</br>
<header class="major">
	<p><strong>Profil supérieur et inférieur</strong></p>
</header>
<p>
	<strong>Le profil de votre baignoire dépend entre autres de l’aspect désiré et de la hauteur nécessaire. 
		Ainsi les variations entre un profil plus simple et sobre ou un profil plus découpé et léger vous
		permet de davantage adapter le produit à vos besoins.
	</strong>
</p>

<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('profilsSup', this.id);" ><strong>Profil supérieur</strong></a></p>
<p id="profilsSup" style="display:none;">Relever le profil supérieur de la baignoire en tête permet d’avoir un appui pour la tête tout en gardant le 
	profil général plus bas. Il est possible de dédoubler ce profil afin d’accommoder une baignoire pour deux personnes.
<p><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('profilsInf', this.id);" ><strong>Profil inférieur</strong></a></p>
<p id="profilsInf" style="display:none;">Il est possible d’avoir un profil inférieur continu ou découpé en apparence. Dans le cas d’un raccord au mur, une découpe 
sera toujours pratiquée dans le bas de la baignoire dans la face cachée pour les tuyauteries. </p><a name="positionnement"></a>


					<!-- </div>
				</section>

				<section class="wrapper style2">
					<div class="container"> -->
					</br>
				</br>
				<header class="major">
					<p><strong>Positionnement</strong></p>
				</header>
				<p>
					<strong>La baignoire peut théoriquement autant se positionner 
						complètement indépendamment, que raccordée à un mur ou 
						dans une niche ou que encastrée dans le sol (même si nous ne 
						le recommandons pas). La baignoire peut être raccordée sous 
						n’importe quel angle par n’importe quel endroit dépendant de 
						l’aménagement de votre pièce d’eau.</strong>
					</p>
					<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('position', this.id);" >En savoir plus</a>
					<p id="position" style="display:none;">Suivant vos esquisses de projet nous pourrons adapter le raccord 
						technique de la baignoire. Il sera donc important de nous communiquer les documents graphiques nécessaires 
						à l’établissement des détails de ces raccords.<br>La distance minimale de raccord au mur est de 3 cm 
						afin d’assurer sa solidité. Un raccord couvert au mur permet d’y installer les techniques et de faciliter 
						le nettoyage et l’entretien de la baignoire.
					</p></br><a name="entreEtEvacuation"></a>
				</br>
			</br>
			<header class="major">
				<p><strong>Entrée et évacuation de l’eau</strong></p>
			</header>
			<p>
				<strong>La gestion de l’eau est intégrée systématiquement à votre produit afin d’assurer la meilleure 
					finition possible. Cependant il est possible de choisir parmi différentes options en fonction de votre projet.</strong>
				</p>
				<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('entree', this.id);" ><strong>Entrée</strong></a>
				<p id="entree" style="display:none;">
					L’entrée d’eau se fait habituellement indépendamment de la baignoire sur le raccord au mur ou de manière complètement autonome. Nous vous recommandons de commander indépendamment votre quincaillerie auprès de votre fournisseur sanitaire. Nous aurons besoin des spécifications techniques du produit afin de l’intégrer au mieux dans la finition. Nous vous conseillons un robinet à bec rétractable et tuyau flexible pour la facilité de nettoyage du tonneau ou de la baignoire. Le positionnement préférable pour le robinet est au milieu du côté long. Pour l’option bain à remous une vanne à bille est installée dans la partie cachée de la baignoire pour réguler l’apport principal. Pour les options supplémentaires par rapport au bain à remous, voir le paragraphe dédié.</p></br>
				<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('sortie', this.id);" ><strong>Evacuation</strong></a>
				<p id="sortie" style="display:none;">
					L’évacuation de l’eau se fait par défaut intégré dans le sol de la baignoire, il est normalement connecté à un tuyau de diamètre 1¼" ou 1½". Il vous est également possible d’intégrer un trop-plein dans la paroi de votre produit. Cette évacuation peut être extérieure ou intérieure au tonneau, et il est également possible de faire l’évacuation extérieure en laiton chromé pour un meilleur aspect visuel. Toute la tuyauterie est ordinairement rigide, mais une évacuation flexible peut également être accommodée.
				</p>
			</br>
			<a name="bainsARemous"></a>
		</br>
	</br>
	<header class="major">
		<p><strong>Bains à remous</strong></p>
	</header>
	<p>
		<strong>Chaque baignoire ou tonneau Blumenberg peut être équipé d’un système de bain à remous. Le système standard intégré est le système à air. Il peut cependant, sur demande, être couplé à un système jet.</strong>
	</p>
	Nous appliquons uniquement des systèmes à qualité éprouvée lors de la réalisation de nos bains à remous. Le marché des bains à remous étant en perpétuelle évolution, nous vous invitons à nous faire parvenir vos envies et vos demandes. Il est évidemment possible d’intégrer n’importe quel système installable dans un autre type de bain à remous, dans nos produits.
	<br><br><a style="cursor: pointer;color:grey" id="toggler" onclick="showme('massageAir', this.id);" ><strong>Système de massage à l’air</strong></a><p id="massageAir" style="display:none;">Le système à air fonctionne sur base d’un jet, réglable, d’air soufflé par des becs insérés dans les parois de la baignoire ou du tonneau.<br>Ce système est aussi nommé système Spa ou système Air Jet. L’intensité du souffle d’air est réglée par des boutons insérés dans le raccord au mur. L’air est compressé dans un souffleur spécialisé pour bain à remous, avant d’être injecté dans l’eau pour vous masser de la tête aux pieds. 
	Informations techniques du souffleur : 230 V, 0,7 kW à 1,3 kW</p>
	<br>
	<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('massageJet', this.id);" ><strong>Système jet-massage</strong></a><p id="massageJet" style="display:none;">Ce système fonctionne sur base de 2 (ou plus) becs installés au niveau du dos qui éjectent un jet d’eau afin de vous masser.<br>Ce dispositif est également appelé système : hydro, Venturi, airjet ou jacuzzi. Il combine un flot d’eau pompé de l’eau de bain avec un flot d’air selon le principe Venturi. L’eau est pompée par une pompe spécialisée pour bain à remous. La quantité du flot d’air, directement réglable sur le raccord au mur, influence la concentration du jet : diffus ou ponctuel. Le système de base est le système Jet 1. Un élément de chauffe peut être installé sur le circuit de pompe afin de garder l’eau projetée à température. Ce système est le système Jet 2. Le système Jet 2 ST est équipé d’une écumoire afin de pomper l’eau en surface. 
	<br>Informations techniques de la pompe (additionnellement) : 230 V, 0,55 kW à 1,5 kW
	<br>Informations techniques de l’élément de chauffe (additionnellement) : 400 V, 6 kW ou 9 kW</p>




</br><a name="access"></a>
</br>
</br>
<header class="major">
	<p><strong>Accessoires intérieurs et extérieurs</strong></p>
</header>
<p>
	<strong>Supplémentairement à nos produits principaux, nous fabriquons également une série d’accessoires indispensables pour l’expérience complète. Ils sont tous fabriqués dans le même bois que vos autres achats. </strong>
</p>
<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('marches', this.id);" ><strong>Marches</strong></a>
<p id="marches" style="display:none;">Les bains et tonneaux de 1m de hauteur ou plus peuvent être livrés avec des marches jusqu’à une hauteur de 50 cm sous le bord. La largeur et profondeur totale de l’escalier extérieur est de également 50 cm. A l’intérieur du produit se trouve une marche intégrée afin de faciliter l’entrée dans l’eau.</p><br>
<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('assise', this.id);" ><strong>Assises</strong></a>
<p id="assise" style="display:none;">Il est possible d’installer une ou plusieurs assises en bois à l’intérieur de nos produits les plus hauts, afin de permettre plus de confort. Elles s’avancent entre 20 et 32 cm dans la baignoire. Dans le cas de plusieurs assises, elles sont normalement montées à des hauteurs différentes afin d’accommoder des personnes de taille différente.</p><br>
<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('dossiers', this.id);" ><strong>Dossiers</strong></a>
<p id="dossiers" style="display:none;">Nous pouvons intégrer un ou plusieurs dossiers dans votre baignoire. Nos dossiers classiques en bois existent sous format intégré ou amovible, selon vos désirs. Le dossier classique vous soutient à gauche et à droite de votre colonne vertébrale, ce qui permet une circulation idéale de l’eau autour de votre corps. Ce dispositif, quoiqu’il a l’air moins confortable que les formes compliquées soi-disant ergonomiques, s’adapte parfaitement à de nombreuses positions et est parfaitement confortable grâce à la pression de l’eau.</p><br>
<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('reposePieds', this.id);" ><strong>Repose pieds</strong></a>
<p id="reposePieds" style="display:none;">Afin de vous permettre de vous installer plus confortablement seul dans votre grande baignoire, ou d’accommoder des personnes de tailles variables, nous fabriquons également des repose-pieds amovibles. Ils vous permettent de réguler facilement la longueur confortable de votre baignoire.</p><br>							
<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('tablette', this.id);" ><strong>Tablettes</strong></a>
<p id="tablette" style="display:none;">Une planche en bois massif assorti à votre baignoire vous servira de tablette traversant la largeur du bain. Quelle meilleure solution pour déposer une tasse de thé, un livre ou tout autre objet que vous désirez avoir à portée de main ?</p><br>
<a style="cursor: pointer;color:grey" id="toggler" onclick="showme('tapis', this.id);" ><strong>Tapis de douche</strong></a>
<p id="tapis" style="display:none;">Nos tapis de bain fabriqués dans le même bois que votre baignoire, tonneau ou douche crée l’endroit parfait où se sécher après s’être détendu.</p><br>
</div></br></br></br></br></br></br>
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