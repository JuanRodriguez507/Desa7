
<html>
<head>
<title>laboratorio 2.4</title>
</head>
<body>
	<?php
	//Creación de arreglo array ("clave")=> "valor")
	$personas = array ("Juan" =>"Panamá",
	"John"  => "USA",
	"Eica"  => "Finlandia",
	"Kusanagi"  => "Japon");


	//Recorrer todo el arreglo

	foreach ($personas as $persona => $pais) {
	print "$persona es de $pais <br>";
}

//Impresión especifica 

echo "<br>".$personas["Juan"];
echo "<br>".$personas["Eica"];?>
</body>
</html>