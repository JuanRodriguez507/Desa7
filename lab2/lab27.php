<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<title></title>
</head>
<body>
	<?php
	$posicion ="Arriba";


	switch ($posicion) {
		case 'Arriba': //Bloque 1
		echo "La variable contiene";
		echo "el valor arriba";
			# code...
			break;
		case "Abajo":  //Bloque 2
		 echo "La variable contiene otro valor";
		 echo " distinto de abajo";
		    break;
		 
		default:  //Bloque 3
		echo "La variable contiene otro valor";
		echo " distinto de arriba y abajo";
			# code...
	}
	?>
</body>
</html>