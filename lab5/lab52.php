<?php 

if(is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])){
	$nombreDirectorio="archivos/";
	$nombrearchivo=$_FILES['nombre_archivo_cliente']['name'];
	$nombreCompleto=$nombreDirectorio . $nombrearchivo;
	$foto=$_FILES["nombre_archivo_cliente"]["tmp_name"];
	$tipo = exif_imagetype($foto);

	if(is_file($nombreCompleto)){
		$idUnico=time();
		$nombrearchivo = $idUnico."-".$nombrearchivo;
		echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
		
	}elseif(round(intval($_FILES["nombre_archivo_cliente"]["size"])/1048576,1)>1){
		echo "El archivo no puede ser mayor 1mb";
	}
	elseif(($tipo!=IMAGETYPE_JPEG) && ($tipo!=IMAGETYPE_PNG) && ($tipo!=IMAGETYPE_GIF)){
	echo "Formato no reconocido, por favor ingrese una imagen en formato (GIF,PNG,JPEG)";
  }else{
	    move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'],$nombreDirectorio.$nombrearchivo);

		echo"El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
  	
  }

}else{
		echo "No se ha podido subir el archivo <br><br>";
	}
?>