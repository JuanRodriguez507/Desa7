<?php 
 
class cliente
{
	var $nombre;
	var $numero;
	var $peliculas_alquiladas;
	
	function __construct($nombre,$numero)
	{
		$this->nombre=$nombre;
		$this->numero=$numero;
		$this->peliculas_alquiladas=array();
	}
	function __destruct(){
		echo "<br> destruido: ". $this->nombre;
	}
	function dame_numero(){
		return $this->numero;
	}	

}

//Instaciamos un par de objetos cliente
$cliente1 = new cliente("Pepe", 1);
$cliente2 = new cliente("Roberto", 654);


//Mostamos el número de cada cliente creado

echo "<br> El Identificador del cliente 1 es: " . $cliente1->dame_numero();
echo "<br> El Identificador del cliente 2 es: " . $cliente2->dame_numero();

?>