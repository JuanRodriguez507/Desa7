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


/**
 * 
 */
class Soporte
{
	public $titulo;
	protected $numero;
	private $precio;
	function __construct($titulo,$numero,$precio)
	{
		$this->titulo=$titulo;
		$this->numero=$numero;
		$this->precio=$precio;
	}

	public function getPrecio(){
		return $this->precio;
	}
	public function get_Precio_Itbms(){
		return $this->precio*0.07;
	}
	public function dame_numero_Ind(){
		return $this->numero;
	}
	public function imprimir_carrac(){
		echo "<br> ". $this->titulo;
		echo "<br> ". $this->precio. " ITBM no incluido";

	}
}

/**
 * 
 */
class Video extends Soporte
{
	protected $duracion;
	function __construct($titulo,$numero,$precio,$duracion)
	{
		parent::__construct($titulo,$numero,$precio);
		$this->duracion=$duracion;
	}
	public function imprimir_carrac(){
	 parent::imprimir_carrac();
	 echo "<br>Duración : " . $this->duracion;

	}
}

/**
 * 
 */
class Juego extends Soporte
{
	protected $consola;
	protected $min_num_jugadores;
	protected $max_num_jugadores;


	
	function __construct($titulo,$numero,$precio,$consola,$mx,$mi)
	{
       parent::__construct($titulo,$numero,$precio);
       $this->consola=$consola;
       $this->min_num_jugadores=$mi;
       $this->max_num_jugadores=$mx;
	}

	public function imprimir_carrac(){
		echo"<br> Juego Para: " . $this->consola;
		parent::imprimir_carrac();
		echo "<br>" . $this->imprime_Jugadores();
	}

	public function imprime_Jugadores(){
		if($this->min_num_jugadores==$this->max_num_jugadores){

				if($this->min_num_jugadores==1)
				echo"<br>Para jugador";
				else
				echo"<br>Para ". $this->min_num_jugadores . "Jugadores";
			
			}else{
				echo"<br> De " . $this->min_num_jugadores . " a " . $this->max_num_jugadores. " Jugadores";
			}
		}

	}

			class Foo {
public static $mi_static = 'foo';
public function staticValor() {
return self::$mi_static;
}
}
class Bar extends Foo {
public function fooStatic() {
return parent::$mi_static;
}
}



?>