
// Ecrire un script PHP qui affiche « Vous avez perdu » tant que la valeur aléatoire d’un chiffre n’est pas « 9 ».

<?php

$tirage = mt_rand(1,9);

$compteur = 1;

while ($tirage != 9)
{
	echo($tirage." : vous avez perdu<br>");
	
	$tirage = mt_rand(1,9);
	
	$compteur++;
}

$s = "";

if ($compteur > 1)
{
	$s = "s";
}

echo("9 : vous avez gagné en ".$compteur." tentative".$s);

?>