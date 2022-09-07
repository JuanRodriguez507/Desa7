<!DOCTYPE html>
<html lang="es">
<head>
	<title>Laboratorio 4.4</title>
	<meta charset="UTF-8">
</head>
<body>
 
<br>Laboratorio 4.4: Manejo de Arreglos P2</br>
<?php 
 $a12=$_GET['num1'];
echo $a12."<br><br>";
 $enviado=false;
 $cantt = $a12;
 $forrr = $a12;
 $w=0;
for ($i = 1; $i <= $forrr; $i++) {$w=$w+1;$p=$w; $Nnumero[$p] =NULL; } 
 $valrr=0; 

if(isset($_POST["Renviado"])){
 $enviado=true;
 $w=0;
for ($i = 1; $i <= $forrr; $i++) {	$w=$w+1;$p=$w; 
	if ($_POST["Rnumero$p"]==NULL)
		{$valrr=1;} 
		else { $valrr=$_POST["Rnumero$p"];}
		if ($valrr%2==0){
		$Nnumero[$p] =$_POST["Rnumero$p"];
      }else{
      	echo " </br> Introduzca un número par por favor en la posición:  " .$i;
   	$Nnumero[$p] =NULL;
 }  }    }

?>
<form method="POST" action=""> 

<?php  
 $w=0; 
for ($i = 1; $i <= $forrr; $i++) {  $w=$w+1;$p=$w;  ?>
<label> <?php echo $p; ?> : </label>
 <input type="number" name="Rnumero<?php echo $p; ?>" value="<?php echo $Nnumero[$p]; ?>"><br>
<?php  }   ?>

<br><input type="submit" value="Validar Informacion" name="Renviado"><br>
</form>
<br>
 <?php
  
 if($enviado){ 
	 $sw=1;
	 $w=0;
for ($i = 1; $i <= $forrr; $i++) {$w=$w+1;$p=$w; if($Nnumero[$p]==NULL){echo ""; }
	 } 
 $w=0;
 for ($i = 1; $i <= $forrr; $i++) {  $w=$w+1;$p=$w;	 if($Nnumero[$p]!=NULL )  {} else {$sw=0;}  } 
	 if($sw==1)  
	 {
		$valores = array();
		$num=$forrr;
		$x = 1;
	while ($x<=$num) {
	$num_Gener = $_POST["Rnumero$x"];
    array_push($valores,$num_Gener);
    $x++;
	}
	$cont1=0;
	foreach ( $valores as $valore) {
		$cont1=$cont1+1;
		echo "<br> [".$cont1."] = ".$valore." ";
		}  
		
 } }
 ?>
</body>
</html>