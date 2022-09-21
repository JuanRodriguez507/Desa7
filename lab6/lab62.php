	<?php 
		include 'class_lib.php';
		
		$clien = new cliente("Juan Rodríguez",5);
		$clien1 = new cliente("Monica Robles",3);
		
		echo "<br> El Identificador del cliente 1 es: " .$clien->dame_numero();
		echo "<br> El Identificador del cliente 2 es: " .$clien1->dame_numero();
		?>