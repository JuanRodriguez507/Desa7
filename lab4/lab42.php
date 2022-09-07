<?php

$numeros=$_POST['numb'];
$ini=$numeros;
$f=1;
for($i=1; $i<=$numeros; $i++)
{
 

$f=$i*$f;
echo $i."x ".$f."= ".$f."<br/>";

}

echo"el factorial es: ".$f;

?>