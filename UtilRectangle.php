<?php
	include ("rectangle.php");
	$largeur=0;
	$longueur=0;
	$aire=0;
	$tracer=0;
	$i=0;
	echo("saisir la largeur du rectangle");
	$largeur=Clavier::lire_int();
	echo ("saisir la longueur du rectangle");
	$longueur=Clavier::lire_int();
	$rectangle=new rectangle($largeur,$longueur);
	$rectangle->tracerRectangle($tracer);
	$rectangle->calculAire($aire);
	
?>