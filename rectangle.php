<?php
	include("Clavier.php");
	
class rectangle {
	private $largeur,$longueur,$aire;
	
	public function __construct($largeur,$longueur)
	{
		
		$this->largeur=$largeur;
		$this->longueur=$longueur;
		
	}
	public function tracerRectangle($tracer)
	{	
		$i=0;
		while($i<$this->largeur)
		{
			echo(str_repeat("*",$this->longueur));
			echo("\n");
			$i++;
				
				
		}
		
		
		
	
	}
	public function calculAire($aire)
	{
		$this->aire=$aire;
		$this->aire=$this->largeur*$this->longueur;
		echo("Dans le rectangle il y a:".$this->aire." étoiles");
		
		
	}
	
}
?>