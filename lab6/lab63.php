<?php 
include 'class_lib.php';

//Ejemplo de uso de la clase padre

$soporte1 = new Soporte("The Soccer Game",22,3);

echo "<b>". $soporte1->titulo ."</b>";
echo "<br> Precio: ".$soporte1->getPrecio(). " Dolares";
echo "<br> Precio ITBM incluido :".$soporte1->get_Precio_Itbms();

//ejemplo de uso de la calase hija

$vide = new Video("Los otros",22,4.5,"115 Minutos");
echo "<br><br>";
echo "<b>". $vide->titulo ."</b>";
echo "<br> Precio: ".$vide->getPrecio(). " Dolares";
echo "<br> Precio ITBM incluido :".$vide->get_Precio_Itbms();
echo "<br> ". $vide->imprimir_carrac();
echo "<br><br>";

//Ejemplo de uso de la clase hija 2

		$play=new Juego("PES 2018",27,3,"XBOX 360", 1,2);
		$play->imprimir_carrac();
		$play->imprime_Jugadores();
		echo "<br>";
		$play1=new Juego("play 2018",27,3,"PS 4", 1,2);
		$play1->imprime_Jugadores();
 ?>