<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>Parcial 1</title>
	<meta charset="UTF-8">
</head>
<body>
 
<br>Parcial 1: Manejo de Matrices</br>


<?php 
 $enviado=false;
  $valrr=0; 
if(isset($_POST["Renviado"])){
 $enviado=true;
 $w=0;

	if ($_POST["Cnu"]==NULL) {$valrr=1;} 
		else { $valrr=$_POST["Cnu"];}
		
		if ($valrr%2!=0){
		$Vnum=$_POST["Cnu"];
        }
        else{  $Vnum =NULL; }
  }
?>
<form method="POST" action=""> 

<label>	Ingrese un Número INpar: </label>
 <input type="number" name="Cnu" value="<?php echo $Vnum; ?>">
 
<br><br><input type="submit" value="Validar Valores" name="Renviado"><br><br>
</form>
 <?php
  
 if($enviado){ 
 if($Vnum==NULL){echo "Por favor coloque un InParrrr<br>"; }  /*Valida que no se envie campo en blanco*/
 $sw=1;$rs=0;
 $random;
 $Suma=0;
 /*$random = rand(101,200);*/
 	 if($Vnum!=NULL )  {$rs=$Vnum;} else {$sw=0;}   
	 if($sw==1)  
	 { 
 	echo "<table border=1>";
      $n=0;
      $n1=$Vnum;
    for($n1;$n1>=1;$n1--)
    { echo"<tr>";   for($n2=1;$n2<=$rs;$n2++)
					{  	$random = rand(101,200); 
                        if ($n1==$n2) {$n=$random;$Suma=$Suma+$n;}
                        
						else {$n=0;}
	                 echo"<td>"," ".$n." ", "</td>";
					}
     echo"</tr>";
    }
     echo"</table>";

      echo "<br>La suma de los valores de la diagonal principal es: $Suma <br>";
 }
 }
 ?>
</body>
</html>