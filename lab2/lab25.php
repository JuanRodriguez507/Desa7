<html>
<head>
<title>laboratorio 2.5</title>
</head>
<body>
	<?php
	$figuras = array('Cuadrado', 'Triángulo' , 'Circulo');
	$figuras[1] = 'Rectángulo';
	mostrar_figuras ($figuras,"Asignación de Rectángulo");

	array_push ($figuras, 'Pentagono');
	mostrar_figuras ($figuras,"Adición de Pentagono al final");

	array_unshift($figuras, 'Hexagono');
	mostrar_figuras($figuras,"Adición de Hexagono al incio");

	array_pop($figuras);
	mostrar_figuras ($figuras,"Eliminación del ultimo");

	array_shift($figuras);
	mostrar_figuras($figuras,"Eliminación del primero");

	function mostrar_figuras ($figuras, $mensaje){
		echo "<br>Arreglo despues de $mensaje <br>";
		foreach ($figuras as $figura) {
			echo "$figura <br>";
			# code...
		}
	}
	?> </body>	
	</html>
