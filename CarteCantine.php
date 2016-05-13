<?php


class CarteCantine {

	private $solde;
	private $detenteur_1;
	private $detenteur_2;
	



	public function __construct($nom,$prenom)
	{
		$this->solde=0;//Fixer le solde a 0
		$this->detenteur_1=$nom;
		$this->detenteur_2=$prenom;
		
		

	
		
		//Ecrire les instructions permettant de renseigner la caracteristique "detenteur" par saisie de l'utilisateur


	}

	public function debiterCarte()
	{	
		if($this->solde>0)
		{
			$this->solde=($this->solde-1);
		}
		else 
		{
			echo("vous n'avez plus assez de solde,veuillez recharger votre carte"."\n");
		}
		
		//Ecrire les instructions qui permettent d'enlever 1 au solde de la carte

	}

	public function crediterCarte($repas_ajoute)
	{	
		$this->solde=$repas_ajoute+$this->solde;
		
		//Ecrire les instructions qui permettent d'ajouter un nombre de repas choisi par l'utilisateur au solde de la carte

	}

	public function afficherSolde()
	{
		echo($this->detenteur_1." ".$this->detenteur_2." il vous reste ".$this->solde." repas sur votre carte.\n");
		//Ecrire les instructions qui permettent d'afficher le nom du detenteur et le solde restant sur la carte

	}

}

?>
