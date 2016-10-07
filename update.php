<?php
  	session_start();
  	if(!$_SESSION['listeProduits'])
	  	$_SESSION['listeProduits'] = [
		    "bois" => "False",
		    "protection" => "False",
		    "acier" => "False",
		    "bains" => "False",
		    "remous" => "False",
		    "marches" => "False",
		    "assises" => "False",
		    "dossiers" => "False",
		    "reposePieds" => "False",
		    "tapis" => "False",
		    "douches" => "False",
		    "tonneaux" => "False",
		    "synthetique" => "False",
		    "lavabos" => "False",
		    "pied" => "False",
		    "seaux" => "False",
		    "reposeTete" => "False",
		    "bainPieds" => "False",
		    "cascade" => "False",
		    "exterieure" => "False",
		    "couvercle" => "False",
		    "chauffage" => "False",
		    "pluie" => "False",
		];
		echo "Liste crée\n";




	echo $_POST['update'];
	if ($_POST['update'] === "bain") echo "J'ai bien reçu ton bain\n"; else echo "là j'ai rien reçu\n"
	
	
?>