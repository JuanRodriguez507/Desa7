<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>Laboratorio 4.5</title>
	<meta charset="UTF-8">
</head>
<body>
 
<br>Laboratorio 4.5: Manejo de Matrices</br>


<?php 
 $enviado=false;
  $valrr=0; 
if(isset($_POST["Renviado"])){
 $enviado=true;
 $w=0;

	if ($_POST["Cnu"]==NULL) {$valrr=1;} 
		else { $valrr=$_POST["Cnu"];}
		
		if ($valrr%2==0){
		$Vnum=$_POST["Cnu"];
        }
        else{  $Vnum =NULL; }
  }
?>
<form method="POST" action=""> 

<label>	Ingrese un Número par: </label>
 <input type="number" name="Cnu" value="<?php echo $Vnum; ?>">
 
<br><br><input type="submit" value="Validar Valores" name="Renviado"><br><br>
</form>
 <?php
  
 if($enviado){ 
 if($Vnum==NULL){echo "Por favor coloque un Par<br>"; }
	 
 $sw=1;$rs=0;
 	 if($Vnum!=NULL )  {$rs=$Vnum;} else {$sw=0;}   
	 if($sw==1)  
	 { 
 	echo "<table border=1>";
      $n=0;
    for($n1=1;$n1<=$rs;$n1++)
    { echo"<tr>";   for($n2=1;$n2<=$rs;$n2++)
					{  	if ($n1==$n2) {$n=1;} 
						else {$n=0;}
	                 echo"<td>"," ".$n." ", "</td>";
					}
     echo"</tr>";
    }
     echo"</table>";
 }
 }
 ?>
</body>
</html>