<?php
//LES BOUCLES

// exercice 1
echo "-- Exercice 1 : affichage de 0 à 9" . "<br />";
$x = 0;
while ($x < 10){
	echo $x . "<br />";
	$x++;
}


// exercice 2
echo "-- Exercice 2 : multiplier de 0 à 20 par 50" . "<br />";
$x = 0;
$y = 50;
while ($x <= 20){
	echo $x*$y . "<br />";
	$x++;
}

// exercice 3
echo "-- Exercice 3 : multiplier de 100 à 10 par 50" . "<br />";
$x = 100;
$y = 50;
while ($x > 10){
	echo $x*$y . "<br />";
	$x--;
}

// exercice 4
echo "-- Exercice 4 : Incrémenter de la moitié de sa valeur de 1 à 10 " . "<br />";
$x = 1;
while ($x < 10){
	echo $x . "<br />";
	$x += $x/2;
}

// exercice 5
echo "-- Exercice 5 : On y arrive presque de 1 à 15 " . "<br />";
for ($x = 1 ; $x <= 15 ; $x++){
	echo "On y arrive presque." . "<br />";
}

// exercice 6
echo "-- Exercice 6 : On y arrive presque de 20 à 0 " . "<br />";
for ($x = 20 ; $x >= 0 ; $x--){
	echo "C'est presque bon." . "<br />";
}

// exercice 7
echo "-- Exercice 7 : On tient le bon bout de 1 à 100 par 15 " . "<br />";
for ($x = 1 ; $x <= 100; $x+=15){
	echo "On tient le bon bout." . "<br />";
}

// exercice 8
echo "-- Exercice 8 : Enfin !!!! de 200 à 0 par 12 " . "<br />";
for ($x = 200 ; $x >= 0; $x-=12){
	echo "Enfin !!!!" . "<br />";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Les boucles</title>
</head>
<body>


</body>
</html>