<?php

require_once('modelo.php');


class factorial extends modeloCredencialesBD{

	protected $id;
	protected $n;
	protected $factorial;
	protected $sumatoria;
	


public function __construct() {
    parent::__construct();
}

public function actualizar_registros($n,$factorial,$sumatoria){

	//el campo ID no se manda ya que es autoincremetal, solo se requieren 3 campos.

		$instruccion  = "CALL sp_actualizar_registros_factorial('".$n."','".$factorial."','".$sumatoria."')";
		$actualiza=$this->_db->query($instruccion);

        if ($actualiza){
        	return $actualiza;
			$actualiza->close();
			$this->_db->close();
		}

}

public function consultar_factorial(){


	$instruccion = "CALL sp_listar_resultados()";

	$consulta=$this->_db->query($instruccion);
	$resultado=$consulta->fetch_all (MYSQLI_ASSOC);

	if (!$resultado){
		echo "Fallo al consultar";
	}
	else {
		return $resultado;
		$resultado->close();
		$this->_db->close();
	}
}

}

?>