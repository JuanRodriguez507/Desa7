<HTML LANG="es">
<HEAD>
	<TITLE>Parcial 2 </TITLE>
	<LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
	<H1>Consulta de resultados Factorial</H1>

<?php

//Por Juan Rodriguez 17/nov/2022

require_once ("class/factorial.php"); //hacemos el llamado para poder hacer uso de los metodos en factorial.php

$numeros=$_POST['numb'];
$ini=$numeros;
$f=1;
$sumatoria=0;
for($i=1; $i<=$numeros; $i++)
{
 
$f=$i*$f;
$sumatoria=$sumatoria+$f;


}

echo"el factorial es: ".$f. "<br/>";

echo"La sumatoria es: ".$sumatoria. "<br/>";

$factorial=$f;
$n=$numeros;


$obj_resultados = new factorial ();
$result = $obj_resultados->actualizar_registros ($n, $factorial, $sumatoria); //se envian los parametros para insertar en la BD por medio del SP

if ($result){
	print ("<P> Registro ingresado exitosamente </P>\n");
}
else{
	print ("<P> Error al actualizar el registro </P>\n");
}



	$obj_factorial = new factorial();
	$factorial = $obj_factorial->consultar_factorial();

//se dibuja la tabla para mostrar los resultados

	$nfilas=count($factorial);

	if ($nfilas > 0){

		print ("<TABLE>\n");
		print ("<TR>\n");
		print ("<TH>Id</TH>\n");
		print ("<TH>N</TH>\n");
		print ("<TH>Factorial</TH>\n");
		print ("<TH>Sumatoria</TH>\n");
		print ("<TR>\n");

    foreach ($factorial as $resultado) {
    	print ("<TR>\n");
    	print ("<TD>" . $resultado['id'] . "</TD>\n");
    	print ("<TD>" . $resultado['n'] . "</TD>\n");
    	print ("<TD>" . $resultado['factorial'] . "</TD>\n");
    	print ("<TD>" . $resultado['sumatoria'] . "</TD>\n");
    	print ("</TR>\n");

    }

    print ("</TABLE>\n");

    }
else{
	print ("No hay resulatos disponibles");
}

print ("<A HREF='parcial2.html'> Ingresar un nuevo registro </A>\n"); //se agrega opcion para agregar un nuevo registro reapuntando a la pagina html 

?>

