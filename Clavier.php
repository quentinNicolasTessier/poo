<?php
class Clavier
{
	public static function lire_string()
	{
		$in=fgets(STDIN);
		# supprimer les retours chariot
		$ligne = (PHP_OS == "WINNT") ?
		str_replace("\r\n", "", $in) :
		str_replace("\n", "", $in);
		return $ligne;
	}

	public static function lire_int()
	{
		$nb = intval(Clavier::lire_string());
		return $nb;
	}

	public static function lire_float()
	{
		$nb = floatval(Clavier::lire_string());
		return $nb;
	}

	public static function lire_char()
	{
		$s = Clavier::lire_string();
		$c = $s[0];
		return $c;
	}
}


?>
