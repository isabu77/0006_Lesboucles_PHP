<?php
//LES BOUCLES

// exercice 1
echo "-- Exercice 1 : affichage de 0 à 9" . "<br>";
$var1 = 0;
for ($var1 = 0 ; $var1 < 10 ; $var1++){
	echo $var1 . "<br>";
}

// exercice 2
echo "-- Exercice 2 : multiplier de 0 à 20 par 56" . "<br>";
$x = 0;
$y = 56;
for ($x = 0 ; $x <= 20 ; $x++){
	echo $x*$y . "<br>";
}

// exercice 3
echo "-- Exercice 3 : multiplier de 100 à 10 par 56" . "<br>";
$x = 100;
$y = 56;
while (!($x <= 10)){
	echo $x*$y . "<br>";
	$x--;
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