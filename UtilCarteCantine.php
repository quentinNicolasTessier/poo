<?php
	include ("carteCantine.php");
	include("Clavier.php");
	
	echo("Quel est votre nom");
	$nom=Clavier::lire_string();
	echo("Quel est votre prénom");
	$prenom=Clavier::lire_string();
	$carte =new carteCantine($nom,$prenom);
	
	$choix=1;
	while($choix !=0)
	{
		echo("menu:"."\n");
		echo("----------------------"."\n");
		echo("1:crediter carte"."\n");
		echo("2:debiter carte"."\n");
		echo("3:afficher solde de la carte"."\n");
		echo("0:quitter l'application"."\n");
		echo("---------------------"."\n");
		echo("choisisser une des instruction suivantes \n");
		$choix=Clavier::lire_int();
	
	switch($choix)
	{
	case(1):
		
		
		echo("combien de repas voulez-vous ajoutez");
		$repas_ajoute=Clavier::lire_int();
		echo($carte->crediterCarte($repas_ajoute));
		break;
	case(2):
		echo($carte->debiterCarte());
		break;
	case(3):
		echo($carte->afficherSolde());
		break;
	case(0):
		echo("au revoir");
		break;
	}
	}





?>


